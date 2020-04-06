<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Movie;


class MovieController extends Controller
{

    public function show_all(){
        $movies = Movie::get();
        return $movies;
    }

    public function show_id($id){
        $movie = Movie::findOrFail($id);
        return $movie;
    }
 
    public function create(Request $request){
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
        $movie->rating = $request->input('rating');
        $movie->cast = $request->input('cast');
        $movie-> save();
        return $movie;
        }
        public function update(Request $request , $id){
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
            $movie->rating = $request->input('rating');
            $movie->cast = $request->input('cast');
            $movie-> save();
            return $movie;
    }
    public function delete($id){
        $movie = Movie::findOrFail($id);
        if($movie)
           $movie->delete(); 
        else
            return response()->json('no exist');
        return response()->json(null);
    }

    //Vista

    public function detail($id){
        return view('details')->with($id);
    }
}