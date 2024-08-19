<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Session5Controller extends Controller
{
    public function showForm()
    {
        return view('session5.form');
    }

    public function addToSession(Request $request)
    {
        $value = $request->input('value');

        // Ambil array dari sesi atau buat array baru jika tidak ada
        $array = $request->session()->get('array', []);

        // Tambahkan nilai baru ke array
        $array[] = $value;

        // Simpan array kembali ke sesi
        $request->session()->put('array', $array);

        return redirect('/form')->with('message', 'Value added to session!');
    }
}
