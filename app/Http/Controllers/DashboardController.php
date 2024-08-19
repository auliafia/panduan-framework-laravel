<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Show the dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Pastikan pengguna sudah login sebelum menampilkan dashboard
        if (Auth::check()) {
            return view('dashboard');
        }

        return redirect()->route('login')->with('error', 'You must be logged in to access the dashboard.');
    }

    /**
     * Handle the logout process.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::logout();

        return redirect()->route('login')->with('status', 'You have been logged out.');
    }
}
