<?php

namespace App\Http\Controllers;

use App\Models\Bird;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BirdController extends Controller
{
    public function index(Request $request)
    {
        $skip = $request->input('skip', 0);
        $take = $request->input('take', 10);

        $birds = Bird::skip($skip)->take($take)->get();

        return view('birds.index', compact('birds'));
    }

    public function create()
    {
        return view('birds.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'species' => 'required|string|max:255',
            'age' => 'required|integer',
        ]);

        Bird::create($request->all());

        return redirect()->route('birds.index')->with('success', 'Bird added successfully.');
    }
}
