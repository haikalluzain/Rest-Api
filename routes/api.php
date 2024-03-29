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

Route::group(['middleware' => 'auth:api', 'prefix' => 'user'], function () {
	Route::post('show', 'Api\UserController@show');
});
Route::group(['prefix' => 'user'], function () {
	Route::post('login', 'Api\UserController@login');
	Route::post('register', 'Api\UserController@register');
	Route::post('logout', 'Api\UserController@logout');
});