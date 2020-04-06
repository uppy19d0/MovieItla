<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
// Use Symfony\Component\Routing\Route;
class SendMessage extends Mailable
{
    // use Queueable, SerializesModels;

    // /**
    //  * Create a new message instance.
    //  *
    //  * @return void
    //  */
    // public $distressCall;

    // public function __construct(DistressCall $distressCall)
    // {
    //     $this->distressCall = $distressCall;
    // }

    // public function build()
    // {
    //     return $this->view('mails.email');
    // }

 Route::get('/nose',function(){
    Mail:('luisaneuris60@gmail.com')->send(new TestMail("KLK LUILLI"));
        return view('movies');
    });
}
