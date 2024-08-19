<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class session2Controller extends Controller
{
    public function setSession(Request $request)
    {
        $request->session()->put('example_key', 'Nilai Biologi: 100');

        return ('disimpan !');
    }

    public function checkSession(Request $request)
    {
        if ($request->session()->has('example_key')) {
            $value = $request->session()->get('example_key');
            return "Item ditemukan <br> $value";
        } else {
            return ('Session kosong!');
        }
    }
}
