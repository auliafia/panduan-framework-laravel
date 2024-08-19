<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class GuruController extends Controller
{
    public function index(Request $request)
    {
        $query = Guru::query();

        if ($request->has('nama')) {
            $query->where('nama', 'like', '%' . $request->input('nama') . '%');
        }

        if ($request->has('mata_pelajaran')) {
            $query->where('mata_pelajaran', 'like', '%' . $request->input('mata_pelajaran') . '%');
        }

        $gurus = $query->get();

        return view('gurus.index', compact('gurus'));
    }

    public function create()
    {
        return view('gurus.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'mata_pelajaran' => 'required|string|max:255',
        ]);

        Guru::create([
            'nama' => $request->input('nama'),
            'mata_pelajaran' => $request->input('mata_pelajaran'),
        ]);

        return redirect('/gurus')->with('success', 'Guru berhasil ditambahkan.');
    }
}
