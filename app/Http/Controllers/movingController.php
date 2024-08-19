<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class movingController extends Controller
{
    public function unggah()
    {
        return view('moving');
    }

    public function unggahFile(Request $request)
    {
        // Validasi file
        $request->validate([
            'file' => 'required|file|mimes:jpg,png,pdf|max:2048',
        ]);

        // Menyimpan file
        if ($request->file('file')) {
            // Ambil file dari request
            $file = $request->file('file');

            // Tentukan path penyimpanan
            $destinationPath = 'uploads/';

            // Tentukan nama file
            $fileName = time() . '-' . $file->getClientOriginalName();

            // Pindahkan file ke folder tujuan
            $file->move($destinationPath, $fileName);

            // Simpan lokasi file dalam sesi
            $filePath = $destinationPath . $fileName;

            return back()->with('success', 'File uploaded successfully.')->with('filePath', $filePath);
        }

        return back()->with('error', 'File upload failed.');
    }
}
