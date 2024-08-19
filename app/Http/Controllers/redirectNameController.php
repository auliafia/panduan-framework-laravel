<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class redirectNameController extends Controller
{
    public function redirectName($name)
    {
        return redirect()->route('out')->with('status', 'Redirect berhasil');
    }

    public function out()
    {
        return view('view');
    }
}
