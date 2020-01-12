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

Route::get('/', function () {
    return view('welcome');
});


Route::get('user/reg','Users\UserController@reg');
Route::get('user/login','Users\UserController@login');
Route::get('user/userinfo','Users\UserController@userinfo');
Route::get('user/reglist','Users\UserController@reglist');
Route::get('user/reginsert','Users\UserController@reginsert');
