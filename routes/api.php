<?php

Route::post('login', 'AuthController@login');
Route::post('logout', 'AuthController@logout');
Route::post('signup', 'AuthController@signup');
Route::post('test', 'AuthController@test');

Route::resource('recipes', 'RecipeController');
