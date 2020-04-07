<?php

namespace App\Http\Controllers;
use App\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin');
    }
    public function create(){
        return view('createmovie');
    }

    public function update($id){
        return view('update')->with($id);
    }

    public function sendMail(Request $request)
    {
       
    $data['title'] = "Solicitud para añadir pelicula";
    $pelicula= $request->input('pelicula');
    $name= $request->input('name');
    $description= $request->input('message');

    Mail::send('emails.email', $data, function($message) use ($pelicula,$description,$name) {

        $message->to('luisaneuris60@gmail.com', 'Receiver Name')->subject("La Persona ${name},solicitud esta pelicula ${pelicula} esta son alguna de la descripciones ${description}");

    });
    }

}
