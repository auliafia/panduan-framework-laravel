<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidationFormController extends Controller
{
    public function validateForm()
    {
        return view('validationForm');
    }

    public function processForm(Request $request)
    {
        $request->validate([
           'file' => 'required|mimes:png,jpg,jpeg,gif,svg',
        ]);

        return redirect()->back()->with('success', 'Uploaded successfully!');
    }
}
