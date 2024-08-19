<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as RoutingController;

class SiswaBaruController extends RoutingController
{
    public function index()
    {
        $siswas = Siswa::all();
        return view('siswas.index', compact('siswas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
        ]);

        Siswa::create($request->all());

        return redirect()->route('siswas.index');
    }

    public function destroy($id)
    {
        Siswa::findOrFail($id)->delete();
        return redirect()->route('siswas.index');
    }

    public function deleteFromSession(Request $request)
    {
        Siswa::query()->delete(); // Menghapus semua data siswa dari database
        $request->session()->flash('success', 'Semua data siswa telah dihapus.');
        return redirect()->route('siswas.index');
    }
}
