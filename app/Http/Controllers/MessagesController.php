<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    //
    public function createMessage () {
        $persona = [
            'name' => 'Diego',
            'lastName' => 'Ticona'
        ];
        return view('messages/createMessage', [
            'persona' => $persona
        ]);
    }
}
