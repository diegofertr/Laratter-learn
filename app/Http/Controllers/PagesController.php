<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home () {
        
        $messages = Message::latest()->paginate(10);
        // $messages = Message::All();
        // 1ra forma de devolver datos
        // return view('home', [
        //     'messages' => $messages
        // ]);
        
        // 2da forma de devolver datos
        // return view('home')->with('messages', $messages);
        
        // 3ra forma de devolver datos
        return view('welcome', compact('messages'));
    }

    public function blog () {
        return view('blog.index');
    }
}
