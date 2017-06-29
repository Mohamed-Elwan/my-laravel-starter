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

Route::get('/', 'HomeController@index');

Route::get('/test', 'HomeController@test');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['as' => 'dashboard.', 'prefix' => 'dashboard', 'middleware' => 'auth'], function () {
    Route::get('/', function(){
        return view('test');
    });
    Route::resource('/user', 'UserController');
    Route::resource('/post', 'PostController');

});