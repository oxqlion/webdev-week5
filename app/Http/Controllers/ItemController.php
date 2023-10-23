<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('item', ['items' => $items, 'active' => 'Item']);
    }

    public function create()
    {
        return view('add_item', ['active' => 'Item']);
    }

    public function store(Request $request)
    {
        // Validation and item creation logic
    }

    public function edit(Item $item)
    {
        return view('items.edit', compact('item'));
    }

    public function update(Request $request, Item $item)
    {
        // Validation and item update logic
    }

    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('items.index');
    }
}
