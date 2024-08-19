<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bus; // Pastikan model Bus diimpor
use Illuminate\Routing\Controller;

class BusController extends Controller
{
    public function create()
    {
        return view('buses.create');
    }

    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'bus_number' => 'required|string|max:255',
            'capacity' => 'required|integer|min:1',
        ]);

        Bus::create([
            'bus_number' => $request->bus_number,
            'capacity' => $request->capacity,
        ]);

        return redirect()->route('buses.index')->with('success', 'Bus added successfully.');
    }

    public function index()
    {
        $buses = Bus::whereNotBetween('capacity', [10, 20])->get();  
        //mengambil data bus dengan kapasitas penumpang selain bus dengan kapasitas 10-20 orang
        return view('buses.index', compact('buses'));
    }
}
