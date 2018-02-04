<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    
    public function createMessage () {
        $persona = [
            'name' => 'Diego',
            'lastName' => 'Ticona'
        ];
        return view('messages.createMessage', [
            'persona' => $persona
        ]);
    }

    public function show(Message $message) {
        // $message = Message::find($idMessage);
        return view('messages.show', [
            'message' => $message
        ]);
    }

    public function create(Request $request) {
        $this->validate($request, [
            'message' => ['required', 'max:144']
        ]);
    }
}
