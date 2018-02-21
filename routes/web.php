<?php

/*Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token?}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');*/
//Route::post('password/email', 'Auth\ResetPasswordController@postEmail');
//Route::post('password/reset', 'Auth\ResetPassController@postReset');

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');

// редиректю в начале на родной контроллер, а потом на vue roter на vue вьюху
// (это hack, как сделать редирект сходу?)
Route::get('password/reset/{token?}', function ($token) {
    return redirect('password/resetpass/'.$token);
})->name('password.reset');

Route::get('/{any}', function () {
    return view('welcome');
})->where(['any' => '.*']);
