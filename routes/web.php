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

Route::get('/', 'TeamsController@index');

Route::get('/teams/{id}', 'TeamsController@show');

Route::get('/players/{id}', 'PlayersController@show');

Route::get('/register', 'RegisterController@create');

Route::post('/', 'RegisterController@store');

Route::get('/login', 'LoginController@create');

Route::get('/logout', 'LoginController@destroy');

Route::post('/', 'LoginController@store')->name('login');

Auth::routes();

Route::get('/home', 'TeamsController@index')->name('home');

Route::post('/teams/{team}/comments', 'CommentsController@store')->name('add-comment');