<?php

Route::post('login',  'AuthController@login');
Route::post('logout', 'AuthController@logout');
Route::post('signup', 'AuthController@signup');
Route::post('test',   'AuthController@test');
Route::resource('recipes', 'RecipeController');

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token?}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

?>
