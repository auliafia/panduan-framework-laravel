<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class definingLayoutController extends Controller
{
    public function index()
    {
        return view('defining-layout/home');
    }
}