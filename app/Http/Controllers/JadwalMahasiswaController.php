<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\JadwalMahasiswa;
use App\Models\MataKuliah;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class JadwalMahasiswaController extends Controller
{
    public function create()
    {
        $dosens = Dosen::all();
        $mataKuliahs = MataKuliah::all();
        return view('jadwal_mahasiswa.create', compact('dosens', 'mataKuliahs'));
    }

    public function store(Request $request)
    {
        JadwalMahasiswa::create($request->only(['nama_mahasiswa', 'nim', 'kelas', 'dosen_id', 'mata_kuliah_id', 'jam_belajar']));
        return redirect()->route('dosen.index');
    }
}
