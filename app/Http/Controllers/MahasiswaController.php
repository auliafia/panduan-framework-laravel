<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\ProgramStudi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MahasiswaController extends Controller
{
    public function create()
    {
        $programStudis = ProgramStudi::all();
        return view('mahasiswa.create', compact('programStudis'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_mahasiswa' => 'required|string|max:255',
            'program_studi_id' => 'nullable|exists:program_studis,id',
        ]);

        Mahasiswa::create($validatedData);

        return redirect()->route('mahasiswa.index');
    }

    public function index()
    {
        $mahasiswas = Mahasiswa::leftJoin('program_studis', 'mahasiswas.program_studi_id', '=', 'program_studis.id')
            ->select('mahasiswas.*', 'program_studis.nama_program')
            ->get();

        return view('mahasiswa.index', compact('mahasiswas'));
    }

    public function createProgramStudi()
    {
        return view('mahasiswa.createProdi');
    }

    public function storeProgramStudi(Request $request)
    {
        $validatedData = $request->validate([
            'nama_program' => 'required|string|max:255',
        ]);

        ProgramStudi::create($validatedData);

        return redirect()->route('mahasiswa.create')->with('success', 'Program Studi berhasil ditambahkan');
    }
}