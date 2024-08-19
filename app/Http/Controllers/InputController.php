<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController extends Controller
{
    // Method untuk menampilkan form
    public function showForm()
    {
        return view('allinputForm');
    }

    // Method untuk menangani dan mengambil semua input
    public function retrieveInput(Request $request)
    {
        // Mengambil semua input
        $allInput = $request->all();
        echo 'Semua Input: ';
        print_r($allInput);
        echo '<br>';

        // Mengambil input tertentu
        $name = $request->input('name');
        $email = $request->input('email');
        echo 'Name: ' . $name . '<br>';
        echo 'Email: ' . $email . '<br>';

        // Memeriksa apakah field tertentu ada
        if ($request->has('name')) {
            echo 'Field "name" ditemukan dalam input.<br>';
        } else {
            echo 'Field "name" tidak ditemukan dalam input.<br>';
        }

        // Mengambil nilai default jika field tidak ditemukan
        $phone = $request->input('phone', 'Not provided');
        echo 'Phone: ' . $phone . '<br>';
    }
}
