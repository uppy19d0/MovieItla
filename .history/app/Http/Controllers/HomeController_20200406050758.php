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
    $usuario =$request->input('name');
   $pelicula =  $request->input('pelicula');
   $description = $request->input('message'); 
    $data['title'] = "Solicitud para añadir nueva pelicula";

    Mail::send('emails.email', $data, function($message) {

        $message->to('luisaneuris60@gmail.com', 'Receiver Name')

       ->subject('${usuario} Envio esto a para colocar una pelicula con la siguinete nombre ${pelicula} y tiene esta descripcion ${informaciones}');

    });
    }
}
