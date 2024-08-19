<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Session4Controller extends Controller
{
    public function index()
    {
        $data = session()->get('data', []);
        return view('session4.index', compact('data'));
    }

    public function addData(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        $data = session()->get('data', []);
        $data[] = [
            'name' => $request->name,
            'email' => $request->email,
        ];
        session()->put('data', $data);

        return redirect()->route('home')->with('success', 'Data added successfully!');
    }
}
