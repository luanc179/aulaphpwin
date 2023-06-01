<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    public function __invoke()
    {
        $hello = 'Hello World!';
        return view('hello_world.index',compact('hello'));
    }
}
