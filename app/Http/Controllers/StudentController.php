<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $name = $request->query('name');
        $style = $request->query('style', 'default');

        $styleType = match ($style) {
            'formal' => "Welcome " . $name,
            'informal' => "Hello " . $name . " Ganteng",
            'nothing' => "Hello " . $name,
            'default' => ""
        };

        return view('welcome', compact('styleType'));
    }
}



