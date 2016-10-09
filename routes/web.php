<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('share', 'UserController@shareGet');
Route::post('share', 'UserController@sharePost');

Auth::routes();


//posts
Route::get('p/{id}', 'PostController@indexGet');
