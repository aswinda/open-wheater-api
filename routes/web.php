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


Route::get('/', 'NewageController@index');
	
Route::get('/layout', 'NewageController@layouts');

Route::get('/dashboard/home', 'DashboardController@layout');

//Route::get('/dashboard/user', 'DashboardController@user');

Auth::routes();

Route::get('/dashboard/home', 'HomeController@index')->name('home');

Route::get('/dashboard/user', 'DashboardController@user');

Route::get('/register', ['as' => 'register', 'uses' => 'RegisterController@index']);

Route::get('/login', ['as' => 'login', 'uses' => 'LoginController@index']);

Route::get('/users/confirmation/{{token}}', 'Auth\RegisterController@confirmation')->name('confirmation');