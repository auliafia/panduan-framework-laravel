<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as RoutingController;

class Session6Controller extends RoutingController
{
    public function index()
    {
        $items = Item::all();
        return view('items.index', compact('items'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable'
        ]);

        Item::create($request->all());

        return redirect()->route('items.index')
            ->with('success', 'Item created successfully.');
    }

    public function destroy(Item $item)
    {
        $item->delete();

        return redirect()->route('items.index')
            ->with('success', 'Item deleted successfully.');
    }
}
