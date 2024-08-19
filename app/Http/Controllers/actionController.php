<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class actionCOntroller extends Controller
{
    public function tampil(){
        return view('action/tampil');
    }

    public function index()
    {
        $nama = "Planet Mars";
        return view('action/index',compact('nama'));
    }
}