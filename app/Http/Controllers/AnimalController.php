<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AnimalController extends Controller
{
    public function create()
    {
        return view('animals.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:0',
        ]);

        Animal::create([
            'name' => $request->name,
            'age' => $request->age,
        ]);

        return redirect()->route('animals.index')->with('success', 'Hewan berhasil ditambahkan!');
    }

    public function index(Request $request)
    {
        $minAge = $request->input('min_age', 2);
        $maxAge = $request->input('max_age', 5);

        $allAnimals = Animal::all();
        $animals = Animal::whereNotBetween('age', [$minAge, $maxAge])->get();

        $hiddenAnimals = $allAnimals->filter(function ($animal) use ($minAge, $maxAge) {
            return $animal->age >= $minAge && $animal->age <= $maxAge;
        });

        return view('animals.index', compact('animals', 'minAge', 'maxAge', 'hiddenAnimals'));
    }
}
