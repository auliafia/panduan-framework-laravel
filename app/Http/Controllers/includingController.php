<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class includingController extends Controller
{
    public function index()
    {
        return view('including/main');
    }
}