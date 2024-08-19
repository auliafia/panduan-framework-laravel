<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formulirController extends Controller
{
    public function hasil()
    {
        return view('formulir');
    }

    public function proses(Request $request)
    {
        $data = [
            'nama' => $request->input('nama'),
            'kelas' => $request->input('kelas'),
            'no' => $request->input('no'),
        ];

        return view('hasil', compact('data'));
    }
}