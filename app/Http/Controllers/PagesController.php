<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home () {
        
        $messages = [
            [
                'id' => 1,
                'content' => 'Este es mi primer mensaje, practicando laravel',
                'image' => 'http://lorempixel.com/600/338?1'
            ],
            [
                'id' => 2,
                'content' => 'Me encanta aprender de forma autodidacta',
                'image' => 'http://lorempixel.com/600/338?2'
            ],
            [
                'id' => 3,
                'content' => 'Se acerca el GlobalGameJam pero sera en Santa Cruz :(',
                'image' => 'http://lorempixel.com/600/338?3'
            ],
            [
                'id' => 4,
                'content' => 'Este año entro a una gran empresa a trabajar',
                'image' => 'http://lorempixel.com/600/338?4'
            ]
        ];
    
        return view('welcome', [
            'messages' => $messages
        ]);
    }
}
