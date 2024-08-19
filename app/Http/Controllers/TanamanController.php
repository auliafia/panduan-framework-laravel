<?php

namespace App\Http\Controllers;

use App\Models\Tanaman;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class TanamanController extends Controller
{
    public function index(Request $request)
    {
        $orderByField = $request->get('order_by', 'nama_tanaman');
        $orderDirection = $request->get('direction', 'asc');

        $tanaman = Tanaman::select('*')
            ->whereIn('id', function ($query) {
                $query->select('id')
                    ->from('tanaman')
                    ->groupBy('id')
                    ->havingRaw('AVG(umur) > ?', [5]);
            })
            ->orderBy($orderByField, $orderDirection)
            ->get();

        return view('tanaman.index', compact('tanaman', 'orderByField', 'orderDirection'));
    }

    // Menampilkan halaman tambah tanaman
    public function create()
    {
        return view('tanaman.create');
    }

    // Menyimpan data tanaman
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_tanaman' => 'required|string|max:255',
            'umur' => 'required|integer|min:0',
            'jenis' => 'required|string|max:255',
        ]);

        // Menyimpan data ke database
        Tanaman::create([
            'nama_tanaman' => $request->nama_tanaman,
            'umur' => $request->umur,
            'jenis' => $request->jenis,
        ]);

        // Redirect ke halaman daftar tanaman dengan pesan sukses
        return redirect()->route('tanaman.index')->with('success', 'Tanaman berhasil ditambahkan');
    }

    public function groupByJenis()
    {
        $tanamanGrouped = Tanaman::selectRaw('jenis, COUNT(*) as total, AVG(umur) as rata_umur')
            ->groupBy('jenis')
            ->get();

        return view('tanaman.group_by_jenis', compact('tanamanGrouped'));
    }

    public function indexWithHaving()
    {
        $tanaman = DB::table('tanaman')
            ->select(DB::raw('nama_tanaman, AVG(umur) as avg_umur, COUNT(*) as jumlah_tanaman'))
            ->groupBy('nama_tanaman')
            ->having('avg_umur', '>', 5) // Contoh: hanya menampilkan tanaman dengan rata-rata umur lebih dari 5 tahun
            ->get();

        return view('tanaman.index_with_having', compact('tanaman'));
    }
}
