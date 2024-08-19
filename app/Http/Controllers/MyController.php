<?php

namespace App\Http\Controllers;

use App\Helpers\MyHelper;

class MyController extends Controller
{
    public function greet($name)
    {
        $greeting = MyHelper::greet($name);
        return view('greet', ['greeting' => $greeting]);
    }
}
