<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class KamarController extends Controller
{
    public function index()
    {
        $kamars = Kamar::all();
        return view('kamar.index', compact('kamars'));
    }

    public function create()
    {
        return view('kamar.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomor_kamar' => 'required|unique:kamars|max:255',
            'password' => 'required|min:6',
        ]);

        Kamar::create([
            'nomor_kamar' => $request->nomor_kamar,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('kamar.index')->with('success', 'Kamar berhasil ditambahkan.');
    }

    public function show($id)
    {
        $kamar = Kamar::findOrFail($id);
        return view('kamar.show', compact('kamars'));
    }

    public function edit($id)
    {
        $kamar = Kamar::findOrFail($id);
        return view('kamar.edit', compact('kamars'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'password' => 'required|min:6',
        ]);

        $kamar = Kamar::findOrFail($id);
        $kamar->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('kamar.index')->with('success', 'Kamar berhasil diperbarui.');
    }

    public function verifyDelete($id)
    {
        $kamar = Kamar::findOrFail($id);
        return view('kamar.verify-delete', compact('kamar'));
    }

    public function confirmDelete(Request $request, $id)
    {
        $request->validate([
            'password' => 'required',
        ]);

        $kamar = Kamar::findOrFail($id);

        if (Hash::check($request->password, $kamar->password)) {
            $kamar->delete();
            return redirect()->route('kamar.index')->with('success', 'Kamar berhasil dihapus.');
        } else {
            return back()->withErrors(['password' => 'Password yang diberikan salah.']);
        }
    }

    public function destroy(Request $request, $id)
    {
        $request->validate([
            'password' => 'required',
        ]);

        $kamar = Kamar::findOrFail($id);

        if (Hash::check($request->password, $kamar->password)) {
            $kamar->delete();
            return redirect()->route('kamar.index')->with('success', 'Kamar berhasil dihapus.');
        } else {
            return back()->withErrors(['password' => 'Password yang diberikan salah.']);
        }
    }
}
