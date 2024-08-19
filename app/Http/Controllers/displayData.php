<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class displayData extends Controller
{
    public function dataDisplay()
    {
        $data= [
            ['id' => 1, 'name' => 'Arsanta','age' => 18],
            ['id' => 2, 'name' => 'Mahardika','age' => 19],
            ['id' => 1, 'name' => 'Santa','age' => 30],
        ];
        return view('displayData', compact('data'));
    }
}