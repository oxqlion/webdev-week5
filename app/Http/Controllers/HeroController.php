<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;

class HeroController extends Controller
{
    public function create()
    {
        return view('add_hero', ['active' => 'Hero']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
        ]);
    
        Hero::create([
            'name' => $request->input('name'),
            'role' => $request->input('role'),
        ]);
    
        return redirect('/heroes')->with('success', 'Hero created successfully.');
    }

    public function index()
    {
        $heroes = Hero::all();

        return view('hero', ['heroes' => $heroes, 'active' => 'Hero']);
    }
}
