<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class unescapedController extends Controller
{
    public function index()
    {
        $unescaped = '<h3>Hai ini adalah unescaped page!</h3>';
        return view('unescaped', compact('unescaped'));
    }
}