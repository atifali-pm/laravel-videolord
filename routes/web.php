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

Route::get('/', function() {
    return view('welcome');
});

Route::get('movies', 'MoviesController@index');
Route::get('movies/create', 'MoviesController@create');

Route::post('movies', 'MoviesController@store');
Route::get('movies/{movie}/show', 'MoviesController@show');
