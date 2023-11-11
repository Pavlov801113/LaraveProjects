<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leadactor;

class LeadactorController extends Controller
{
    public function index(){
        return view('leadactors.index', ['leadactors' => Leadactor::paginate(10)]);
        
    }

    public function create(){
        return view('leadactors.create');
    }

    public function store(Leadactor $leadactor, Request $request){
        $data = $request->validate([
            'leadactor_fullname' => 'required|max:255'
        ]);

        $leadactor->create($data);
        return back()->with('message', 'Movie Leadactor created successfully!');
    }

    public function edit(Leadactor $leadactor){
        return view('leadactors.edit', compact('leadactor'));
    }

    public function update(Leadactor $leadactor, Request $request){
        $data = $request->validate([
            'leadactor_fullname' => 'required|max:255'
        ]);
        $leadactor->update($data);
        return back()->with('message', 'Movie Leadactor updated successfully!');
    }

}
