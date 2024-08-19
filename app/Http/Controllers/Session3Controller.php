<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Session3Controller extends Controller
{
    public function showForm()
    {
        return view('session3.form');
    }

    public function storeForm(Request $request)
    {
        $request->session()->put('name', $request->input('name'));
        $request->session()->put('email', $request->input('email'));

        return redirect()->route('form.show')->with('success', 'Data has been stored in session!');
    }
}
