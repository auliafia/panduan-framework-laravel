<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AnggotaAuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.daftar');
    }

    public function register(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:anggota',
            'password' => 'required|string|confirmed|min:8',
        ]);

        $anggota = Anggota::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($anggota);

        return redirect()->route('beranda');
    }

    public function showLoginForm()
    {
        return view('auth.masuk');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            return redirect()->route('beranda');
        }

        return back()->withErrors(['email' => 'Invalid credentials.']);
    }

    public function dashboard()
    {
        return view('beranda');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('masuk');
    }
}
