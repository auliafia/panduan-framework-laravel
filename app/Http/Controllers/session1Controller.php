<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class session1Controller extends Controller
{
    public function setSession(Request $request)
    {
        $request->session()->put('user_id', 1);
        $request->session()->put('username', 'arsanta');
        return 'Session set successfully';
    }

    public function getSession(Request $request)
    {
        $userId = $request->session()->get('user_id');
        $username = $request->session()->get('username');
        return view('session1', compact('userId','username'));
    }
}