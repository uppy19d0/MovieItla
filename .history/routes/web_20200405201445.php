<?php

use Illuminate\Support\Facades\Route;



// Admin

Auth::routes();
Route::get('/admin/create','HomeController@create');
Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/admin/movie/{id}','HomeController@update')->name('update');


// Menu

Route::get('/movie/{id}', 'MovieController@detail')->name('detail');
Route::view('/','movies');



Route::view('/header/contact','contact');

