<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class showDataController extends Controller
{
    public function showData()
    {
        $data = [
            'name' => 'Arsanta Mahardika',
            'class' => 'XII AKL 1',
        ];
        return view('show', compact('data'));   
    }
}