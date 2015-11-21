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

// Here is a main route

Route::get('/','Auth\AuthController@home');
Route::get('login','Auth\AuthController@getLogin');
Route::get('signup','Auth\AuthController@getSignUp');


// Here is an user route

Route::get('dashboard','UserController@dashboard');
Route::get('post/project','UserController@getPostProject');
