<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home () {
        
        $messages = Message::paginate(10);        
        // 1ra forma de devolver datos
        // return view('home', [
        //     'messages' => $messages
        // ]);
        
        // 2da forma de devolver datos
        // return view('home')->with('messages', $messages);
        
        // 3ra forma de devolver datos
        return view('welcome', compact('messages'));
    }
}
