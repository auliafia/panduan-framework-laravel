<?php

namespace App\Http\Controllers;

use App\Models\Perawat;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PerawatController extends Controller
{
    // Menampilkan daftar perawat dengan fitur pencarian
    public function index(Request $request)
    {
        $query = $request->input('query');
        $perawats = Perawat::where('nama', 'like', "%$query%")
            ->orWhere('spesialisasi', 'like', "%$query%")
            ->get();

        return view('perawats.index', compact('perawats', 'query'));
    }

    // Menampilkan form untuk menambahkan perawat baru
    public function create()
    {
        return view('perawats.create');
    }

    // Menyimpan data perawat baru ke dalam database
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'spesialisasi' => 'required|string|max:255',
        ]);

        Perawat::create([
            'nama' => $request->input('nama'),
            'spesialisasi' => $request->input('spesialisasi'),
        ]);

        return redirect()->route('perawats.index')->with('success', 'Perawat berhasil ditambahkan.');
    }
}
