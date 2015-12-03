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

Route::get('/', ['as' => 'home', 'uses' => 'indexController@index']);
Route::get('home', ['as' => 'home', 'uses' => 'indexController@index']);

// Authentication routes...
Route::get('user/login', 'Auth\AuthController@getLogin');
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('user/login', 'Auth\AuthController@postLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('user/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('user/register', 'Auth\AuthController@getRegister');
Route::post('user/register', 'Auth\AuthController@postRegister');

//Bugs
Route::get('bugs/new', ['middleware' => 'auth', 'uses' => 'bugController@getCreate']);
Route::post('bugs/new', ['middleware' => 'auth', 'uses' => 'bugController@postCreate']);
