<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class presensiController extends Controller
{
    public function index()
    {
        return view('presensi');
    }

    public function hasil(Request $request)
    {
        //method all()
        $input = $request->all();
        echo 'Semua data: ';
        print_r($input);
        echo '<br>';

        // input
        $name = $request->input('name');
        echo 'Name: '. $name;
        echo '<br>';

        // email
        $email = $request->get('email');
        echo 'Email: '. $email;
        echo '<br>';

        // get()
        $class = $request->class;
        echo 'Class: '. $class;
        echo '<br>';
        exit();
    }
}
