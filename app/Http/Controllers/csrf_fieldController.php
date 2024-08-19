<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class csrf_fieldController extends Controller
{
    public function showForm()
    {
        return view('csrf.form');
    }

    public function submitForm(Request $request)
    {
        // Validasi request
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $name = $request->input('name');
        
        return redirect()->route('form.show')->with('success', 'Form submitted successfully!');
    }
}
