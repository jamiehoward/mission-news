<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'DashboardController@index');

Route::get('home', 'DashboardController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/api/user/{id}', 'UsersController@show');
Route::get('/api/users', 'UsersController@list');
Route::get('/api/links', 'LinksController@all');
Route::post('/api/link', 'LinksController@create');
Route::post('/api/link/vote/{id}', 'LinksController@add_vote');