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

Route::get('/','MainController@home');


// Here is a main route

Route::get('login','Auth\AuthController@getLogin');
Route::post('login','Auth\AuthController@postLogin');
Route::get('signup','Auth\AuthController@getSignUp');
Route::post('signup','Auth\AuthController@postSignUp');
Route::get('logout','Auth\AuthController@getLogout');


// Here is an user route

Route::get('projects','UserController@getMyProjects');
Route::get('post/project','UserController@getPostProject');
Route::post('post/project','UserController@postProject');


// Here is an admin route

Route::get('admin/category','AdminController@category');
Route::get('admin/user','AdminController@user');
Route::get('admin','AdminController@admin');
