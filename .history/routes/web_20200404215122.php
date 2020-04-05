<?php

use Illuminate\Support\Facades\Route;


Route::get('/admin/create','HomeController@create');
Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/admin/movie/{id}', 'HomeController@update')->name('update');

Route::view('/','movies');
Route::get('/movie/{id}', 'MovieController@detail')->name('detail');

Auth::routes();
