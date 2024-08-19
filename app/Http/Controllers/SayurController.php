<?php

namespace App\Http\Controllers;

use App\Models\Sayur;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SayurController extends Controller
{
    public function index(Request $request)
    {
        $query = Sayur::query();

        if ($request->has('nama')) {
            $query->where('nama', 'like', '%' . $request->input('nama') . '%');
        }

        if ($request->has('kategori')) {
            $query->where('kategori', $request->input('kategori'));
        }

        if ($request->has('stok_minimum')) {
            $query->where('stok', '>=', $request->input('stok_minimum'));
        }

        if ($request->has('tanggal_panen_awal') && $request->has('tanggal_panen_akhir')) {
            $query->whereBetween('tanggal_panen', [
                $request->input('tanggal_panen_awal'),
                $request->input('tanggal_panen_akhir')
            ]);
        }

        $sayur = $query->get();

        return view('sayur.index', compact('sayur'));
    }

    public function create()
    {
        return view('sayur.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'stok' => 'required|integer',
            'kategori' => 'required|string|max:255',
            'tanggal_panen' => 'required|date',
        ]);

        Sayur::create($request->all());

        return redirect()->route('sayur.index')->with('success', 'Sayur berhasil ditambahkan');
    }
}
