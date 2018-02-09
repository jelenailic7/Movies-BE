<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', 'Auth\LoginController@authenticate');

Route::middleware('jwt')->get('movies', 'MoviesController@index');
Route::middleware('jwt')->get('movies/{id}','MoviesController@show');
Route::middleware('jwt')->post('movies', 'MoviesController@store');
Route::middleware('jwt')->delete('movies/{id}', 'MoviesController@destroy');
Route::middleware('jwt')->put('movies/{id}', 'MoviesController@update');