<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class csrf_tokenController extends Controller
{
    public function showForm()
    {
        return view('csrf.formulir');
    }

    public function handleForm(Request $request)
    {
        $name = $request->input('name');
        return back()->with('success', 'Form submitted successfully. Hello, ' . $name);
    }
}