<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JsonInputController extends Controller
{
    // Method untuk menampilkan form
    public function showForm()
    {
        return view('jsonForm');
    }

    // Method untuk menangani input JSON
    public function handleJsonInput(Request $request)
    {
        // Mengambil semua input JSON
        $jsonData = $request->json()->all();
        echo 'Seluruh input JSON: ';
        print_r($jsonData);
        echo '<br>';

        // Mengambil nilai tertentu dari input JSON
        $name = $request->json('name');
        $email = $request->json('email');
        echo 'Name: ' . $name . '<br>';
        echo 'Email: ' . $email . '<br>';

        // Memeriksa apakah field tertentu ada
        if ($request->json()->has('name')) {
            echo 'Field "name" ditemukan dalam input JSON.<br>';
        } else {
            echo 'Field "name" tidak ditemukan dalam input JSON.<br>';
        }

        // Mengambil nilai default jika field tidak ditemukan
        $phone = $request->json('phone', 'Not provided');
        echo 'Phone: ' . $phone . '<br>';
    }
}
