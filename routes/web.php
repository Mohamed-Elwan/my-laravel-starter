<?php


Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index');
Route::get('/task', 'HomeController@task');
Route::get('/process', 'HomeController@process');
Route::get('/evaluation', 'HomeController@evaluation');

Route::get('/test', 'HomeController@test');
Auth::routes();

Route::group(['as' => 'dashboard.', 'prefix' => 'dashboard', 'middleware' => 'auth'], function () {
    Route::get('/', function(){
        return view('test');
    });
    Route::resource('/users', 'UserController');
    Route::resource('/posts', 'PostController');

});