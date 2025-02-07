<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetController extends Controller
{
    public function show()
    {
        return view('greet');
    }

    public function greet($name)
    {
        return view('greet', ['name' => $name]);
    }
}
