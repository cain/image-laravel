<?php
use File;
use Response;
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

Route::get('images/{filename}', function ($filename)
{
    $path = storage_path() . '/app/files/' . 'b25196076712cb5347af0d963080d058.png';

    if(!File::exists($path)) abort(404);

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});
