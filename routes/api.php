<?php

Route::post('login', 'AuthController@login');
Route::post('logout', 'AuthController@logout');
Route::post('register', 'AuthController@register');
Route::post('test', 'AuthController@test');

Route::resource('recipes', 'RecipeController');
