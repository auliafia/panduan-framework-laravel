<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class extendLayoutController extends Controller
{
    public function main()
    {
        return view('extendLayout/halaman');
    }
}