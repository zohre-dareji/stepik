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



Route::post('profiles', 'ProfileController@store');
Route::get('profile', 'ProfileController@index');
Route::get('profile/{id}', 'ProfileController@show');
Route::put('profiles/{id}', 'ProfileController@update');
Route::delete('profile/{id}', 'ProfileController@destroy');