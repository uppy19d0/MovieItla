<?php

use Illuminate\Support\Facades\Route;

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


Route::view('/','movies');
// Route::post('/movie','MovieController@create');
Route::get('/admin', 'HomeController@index')->name('home');

Route::get('/admin/create','HomeController@create');
Auth::routes();


// Route::view('/home','welcome');
// Route::get('/admin/crud_movies', 'HomeController@movies')->name('home');
// Route::get('/movie', 'HomeController@create')->name('home');