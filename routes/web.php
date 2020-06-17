<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/uploader', 'ImageController@index');
Route::post('/upload', 'ImageController@upload');
Route::delete('/image/{image}',  'ImageController@destroy');

Route::get('/maps', 'MapsController@index');
Route::post('/maps/save-address', 'MapsController@store');