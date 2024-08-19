<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\JadwalMengajar;
use App\Models\MataKuliah;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class DosenController extends Controller
{
    public function index()
    {
        // Melakukan advanced join antara jadwal_mengajars dan jadwal_mahasiswas
        $data = DB::table('jadwal_mengajars')
            ->join('dosens', 'jadwal_mengajars.dosen_id', '=', 'dosens.id')
            ->join('mata_kuliahs', 'jadwal_mengajars.mata_kuliah_id', '=', 'mata_kuliahs.id')
            ->leftJoin('jadwal_mahasiswas', function ($join) {
                $join->on('jadwal_mengajars.mata_kuliah_id', '=', 'jadwal_mahasiswas.mata_kuliah_id')
                    ->on('jadwal_mengajars.dosen_id', '=', 'jadwal_mahasiswas.dosen_id');
            })
            ->select('dosens.nama_dosen', 'mata_kuliahs.nama_matkul', 'jadwal_mengajars.jam_mengajar', 'jadwal_mahasiswas.nama_mahasiswa', 'jadwal_mahasiswas.jam_belajar')
            ->get();

        return view('dosen.index', compact('data'));
    }

    public function create()
    {
        $mataKuliahs = MataKuliah::all();
        return view('dosen.create', compact('mataKuliahs'));
    }

    public function store(Request $request)
    {
        $dosen = Dosen::create($request->only(['nama_dosen', 'nip']));
        $dosen->jadwalMengajar()->create($request->only(['mata_kuliah_id', 'kelas', 'jam_mengajar']));
        return redirect()->route('dosen.index');
    }

    public function createMataKuliah()
    {
        return view('mata_kuliah.create');
    }

    public function storeMataKuliah(Request $request)
    {
        $request->validate([
            'nama_matkul' => 'required|string|max:255',
        ]);

        MataKuliah::create($request->only('nama_matkul'));

        return redirect()->route('mata_kuliah.create')->with('success', 'Mata kuliah berhasil ditambahkan!');
    }

    public function getJamBelajar($dosenId)
    {
        $jamBelajar = JadwalMengajar::where('dosen_id', $dosenId)
            ->pluck('jam_mengajar')
            ->unique();

        return response()->json($jamBelajar);
    }
}
