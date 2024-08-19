<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siswaController extends Controller
{
    public function getNama($nama)
    {
        return $nama;
    }

    public function registrasi()
    {
        return view('registrasi');
    }

    public function hasil(Request $request)
    {
        $nama = $request->nama;
        $pangkalan = $request->pangkalan;
        return 'Nama: ' .$nama.'<br>'.'Pangkalan: '.$pangkalan;
    }
}
