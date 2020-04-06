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
    // $usuario =$request->input('name');
//    $data["subject"] = $request->input('pelicula');
//    $data["mail_text"] = $request->input('message');
    $data['title'] = "Solicitud para añadir nueva pelicula" + 'Enviando por';
    Mail::send('emails.email', $data, function($message) {

        $message->to('luisaneuris60@gmail.com', 'Receiver Name')
       ->subject('DD');
    });
    }
}
