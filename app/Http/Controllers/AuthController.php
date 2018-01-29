<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;

class AuthController extends Controller
{
	public function __construct()
	{
	    $this->middleware('auth:api')->only('logout');
	}

		/*--------------------------------------------
		  регистрация
		----------------------------------------------*/
    public function signup(Request $request)
    {
				$this->validate($request, [
																		'email' 		=> 'required|email|unique:users',
																		'name' 			=> 'required|max:255',
																	 	'password' 	=> 'required|between:6,25'
																		//'sex' 			=> 'required|between:0,1',
																		//'age' 			=> 'required'
																	]);

        //$user = new User($request->all());
				$user = new User($request->input("email", "name", "password"));
        $user->password = bcrypt($request->password);
        $user->save();

        return response()->json(['registered' => true]);
    }

		/*--------------------------------------------
		авторизация
		----------------------------------------------*/
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|between:6,25'
        ]);

        $user = User::where('email', $request->email)
            ->first();

        if($user && Hash::check($request->password, $user->password)) {
            // generate new api token
            $user->api_token = str_random(60);
            $user->save();

            return response()
                ->json([
                    'authenticated' => true,
                    'api_token' => $user->api_token,
                    'user_id' => $user->id
                ]);
        }

        return response()
            ->json(['email' => ['Provided email and password does not match!']
					], 422);
    }

    public function logout(Request $request)
    {
        $user = $request->user();
        $user->api_token = null;
        $user->save();

        return response()
            ->json([
                'done' => true
            ]);
    }

		public function test(Request $request) {
        return response()->json(['done' => true]);
    }
}
