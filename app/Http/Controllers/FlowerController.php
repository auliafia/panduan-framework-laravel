<?php

namespace App\Http\Controllers;

use App\Models\Flower;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FlowerController extends Controller
{
    public function index()
    {
        $colors = ['Red', 'Yellow']; // Warna yang dicari
        $flowers = Flower::whereNotIn('color', $colors)->get();

        return view('flowers.index', compact('flowers'));
    }

    // Menampilkan form untuk menambah bunga
    public function create()
    {
        return view('flowers.create');
    }

    // Menyimpan data bunga ke database
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'color' => 'required|string|max:255',
        ]);

        // Simpan data ke database
        Flower::create($request->all());

        // Redirect ke halaman daftar bunga dengan pesan sukses
        return redirect()->route('flowers.index')->with('success', 'Flower added successfully!');
    }
}
