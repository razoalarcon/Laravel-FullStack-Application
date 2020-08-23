<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;

//use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store()
    {
        $message = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3'
        ], [

            'name.required' => 'Necesito tu nombre'
        ]);

        Mail::to('malarconrazo@gmail.com')->queue(new MessageReceived($message));


        return back()->with('status', 'Recibimos tu mensaje, te respondemos en menos de 24 hrs');
    }
}
