<?php

namespace App\Http\Controllers;

use App\Models\Magang;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MagangController extends Controller
{
    public function index()
    {
        $magang = Magang::all();
        return view('magang.index', compact('magang'));
    }
    public function create()
    {
        return view('magang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'file_magang' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

        $fileName = time() . '_' . $request->file('file_magang')->getClientOriginalName();
        $filePath = $request->file('file_magang')->storeAs('uploads/magang', $fileName, 'public');

        Magang::create([
            'nama' => $request->nama,
            'file_magang' => '/storage/' . $filePath,
        ]);

        return redirect()->back()->with('success', 'File magang berhasil diunggah!');
    }
}
