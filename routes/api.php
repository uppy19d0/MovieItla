<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Movie;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//endpoint to List of all movie
Route::get('movies',function(){
$movies = Movie::get();
return $movies;
});

// endpoint to information epefici of one movie
Route::get('movie/{id}',function($id){
    $movie = Movie::findOrFail($id);
    return $movie;
});

// endpoint to create movie
Route::post('movie',function(Request $request){
$request->validate([
    'title'=>'required',
    'description'=>'required',
    'image'=>'required',
    'link_trailer'=>'required',
    'launcher'=>'required',
    ]);
$movie = new Movie;
$movie->title = $request->input('title');
$movie->description = $request->input('description');
$movie->category = $request->input('category');
$movie->image = $request->input('image');
$movie->link_trailer = $request->input('link_trailer');
$movie->launcher = $request->input('launcher');
$movie-> save();
return "PELICULA CREADA";
});

// endpoint to put movie
Route::put('movie/{id}',function(Request $request,$id){
    $request->validate([
        'title'=>'required',
        'description'=>'required',
        'image'=>'required',
        'link_trailer'=>'required',
        'launcher'=>'required',
        ]);
    $movie = Movie::findOrFail($id);
    $movie->title = $request->input('title');
    $movie->description = $request->input('description');
    $movie->category = $request->input('category');
    $movie->image = $request->input('image');
    $movie->link_trailer = $request->input('link_trailer');
    $movie->launcher = $request->input('launcher');
    $movie-> save();
    return "Pelicular Actualizada";
});

// endpoint to remove element 
Route::delete('movie/{id}',function($id){
    $movie = Movie::findOrFail($id);
    if($movie)
       $movie->delete(); 
    else
        return response()->json('no exist');
    return response()->json(null); 
});

