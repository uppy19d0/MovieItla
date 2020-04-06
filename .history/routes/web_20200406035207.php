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

// Send Email
Route::post('/contactar', 'EmailController@contact')->name('contact');

// Route::get('/nose',function(){
//     Mail:('luisaneuris60@gmail.com')->send(new TestMail("KLK LUILLI"));
//         return view('movies');
//     });
Route::post('/send-main', 'HomeController@sendMail');