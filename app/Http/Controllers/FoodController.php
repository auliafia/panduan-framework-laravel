<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FoodController extends Controller
{
    public function index()
    {
        $foods = Food::all();
        return view('foods.index', compact('foods'));
    }

    public function create()
    {
        return view('foods.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:25',
            'description' => 'required|string|max:200',
            'price' => 'required|numeric',
        ]);

        // Jika validasi berhasil, buat item dan alihkan kembali dengan pesan sukses
        Food::create($validated);

        return redirect()->route('foods.index')->with('success', 'Food item added successfully!');
    }


    public function destroy(Food $food)
    {
        $food->delete();
        return redirect()->route('foods.index')->with('success', 'Food item deleted successfully!');
    }
}
