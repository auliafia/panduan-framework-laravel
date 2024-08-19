<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Internship;
use Illuminate\Routing\Controller;

class InternshipController extends Controller
{
    public function index()
    {
        $internships = Internship::all();
        return view('internships.index', compact('internships'));
    }

    public function create()
    {
        return view('internships.create');
    }

    public function store(Request $request)
    {
        // Validasi file
        $request->validate([
            'document' => 'required|mimes:mp4,avi,flv,pdf,png,jpg|max:20480', // Contoh validasi untuk video
        ]);

        // Cek apakah file ada
        if ($request->hasFile('document')) {
            // Buat nama file unik
            $filename = time() . '_' . $request->file('document')->getClientOriginalName();

            // Simpan file di folder public/downloads
            $path = $request->file('document')->move(public_path('downloads'), $filename);

            // Simpan path file ke database
            $internship = new Internship();
            $internship->name = $request->name;
            $internship->document = 'downloads/' . $filename; // Path relatif untuk public
            $internship->save();
        }

        return redirect()->route('internships.index')->with('success', 'File berhasil diupload.');
    }
}
