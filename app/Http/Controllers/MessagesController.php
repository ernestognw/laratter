<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function show(Message $message){
        return view('messages.show', [
            'message' => $message,
        ]);
    }

    public function create(Request $request){
        $this->validate($request, [
            'message' => ['required', "max:90"]
        ], [
            'message.required' => 'Por favor, escribe tu mensaje',
            'message.max' => 'El mensaje no puede superar los 90 caracteres'
        ]);
        return 'Created!';
    }
}
