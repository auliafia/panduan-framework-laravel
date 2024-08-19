<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class passingDataController extends Controller
{
    public function taks()
    {
        $taks =[
            ['id' => 1, 'title' => 'Taks 1', 'completed' => false],
            ['id' => 2, 'title' => 'Taks 2', 'completed' => true],
            ['id' => 3, 'title' => 'Taks 3', 'completed' => true],
        ];
        return view ('passing', ['taks'=>$taks]);
    }
}