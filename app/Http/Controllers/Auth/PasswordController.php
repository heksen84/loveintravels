<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class PasswordController extends Controller
{

use ResetsPasswords;


//add and modify this methods as you wish:


 /**
 * Send a reset link to the given user.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function postEmail(Request $request)
{
    $this->validate($request, ['email' => 'required|email']);

    $response = Password::sendResetLink($request->only('email'), function (Message $message) {
        $message->subject($this->getEmailSubject());
    });

    switch ($response) {
        case Password::RESET_LINK_SENT:
            return redirect()->back()->with('status', trans($response));

        case Password::INVALID_USER:
            return redirect()->back()->withErrors(['email' => trans($response)]);
    }
}



 /**
 * Reset the given user's password.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function postReset(Request $request)
{
    $this->validate($request, [
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|confirmed',
    ]);

    $credentials = $request->only(
        'email', 'password', 'password_confirmation', 'token'
    );

    $response = Password::reset($credentials, function ($user, $password) {
        $this->resetPassword($user, $password);
    });

    switch ($response) {
        case Password::PASSWORD_RESET:
            return redirect($this->redirectPath());

        default:
            return redirect()->back()
                        ->withInput($request->only('email'))
                        ->withErrors(['email' => trans($response)]);
    }
}

}