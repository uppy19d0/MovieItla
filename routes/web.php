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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/movies','movies');
// Route::view('/movie','h')


// Route::group([
//     'prefix'     => config('admin.route.prefix'),
//     'namespace'  => 'Tests\Controllers',
//     'middleware' => ['web', 'admin'],
// ]);
