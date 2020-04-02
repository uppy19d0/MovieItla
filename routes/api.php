<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Movie;
use App\Http\Controllers;
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//endpoint to List of all movie
Route::get('movies','MovieController@show_all');

// endpoint to information epefici of one movie
Route::get('movie/{id}','MovieController@show_id');

// endpoint to create movie
Route::post('movie','MovieController@create');

// endpoint to put movie
Route::put('movie/{id}','MovieController@update');

// endpoint to put delete movie
Route::delete('movie/{id}','MovieController@delete');
