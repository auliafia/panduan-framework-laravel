<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputPresenceController extends Controller
{
    // Method untuk menampilkan form
    public function showForm()
    {
        return view('inputForm');
    }

    // Method untuk memeriksa input
    public function checkInput(Request $request)
    {
        // Mengambil semua input
        $inputData = $request->all();
        echo 'Seluruh input: ';
        print_r($inputData);
        echo '<br>';

        // Memeriksa apakah nilai input tertentu ada
        if ($request->has('name')) {
            echo 'Field "name" ditemukan dalam input.<br>';
        } else {
            echo 'Field "name" tidak ditemukan dalam input.<br>';
        }

        if ($request->has('email')) {
            echo 'Field "email" ditemukan dalam input.<br>';
        } else {
            echo 'Field "email" tidak ditemukan dalam input.<br>';
        }

        if ($request->has('phone')) {
            echo 'Field "phone" ditemukan dalam input.<br>';
        } else {
            echo 'Field "phone" tidak ditemukan dalam input.<br>';
        }
    }
}
