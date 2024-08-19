<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loopController extends Controller
{
    public function contoh()
    {
        $nomor =  range(1, 21);
        return view('loop', compact('nomor'));
    }
}
