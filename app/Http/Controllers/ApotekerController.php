<?php

namespace App\Http\Controllers;

use App\Models\Apoteker;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ApotekerController extends Controller
{
    public function index(Request $request)
    {
        $filters = $request->only(['nama', 'lokasi', 'status']);
        $apotekers = Apoteker::filter($filters)->get();

        return view('apotekers.index', compact('apotekers'));
    }
    
    public function create()
    {
        return view('apotekers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'status' => 'required|in:aktif,non-aktif',
        ]);

        Apoteker::create($request->all());

        return redirect()->route('apotekers.index')->with('success', 'Apoteker berhasil ditambahkan.');
    }
}
