<?php

namespace App\Http\Controllers;

use App\Models\Director;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    public function index(){
        

        return view('directors.index', ['directors' => Director::paginate(10)]);
    }

    public function create(){
        return view('directors.create');
    }

    public function store(Director $director, Request $request){
        $data = $request->validate([
            'director_fullname' => 'required|max:255'
        ]);
        $director->create($data);
        return back()->with('message', 'New director created successfully!');
    }

    public function edit(Director $director){
        return view('directors.edit', compact('director'));
    }
    public function update(Director $director, Request $request){
        $data = $request->validate([
            'director_fullname' => 'required|max:255'
        ]);
        $director->update($data);
        return back()->with('message', 'Movie director updated successfully!');
    }
    
}
