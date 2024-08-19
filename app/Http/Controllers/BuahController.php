<?php

namespace App\Http\Controllers;

use App\Models\Buah;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BuahController extends Controller
{
    public function index()
    {
        $buah = Buah::whereNotNull('keterangan')->get();
        return view('buah.index', compact('buah'));
    }

    public function create()
    {
        return view('buah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jenis' => 'nullable|string|max:255',
            'keterangan' => 'nullable|string',
        ]);

        Buah::create($request->all());
        return redirect()->route('buah.index')->with('success', 'Buah berhasil ditambahkan!');
    }
}
