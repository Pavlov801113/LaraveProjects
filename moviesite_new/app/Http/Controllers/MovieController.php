<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Director;
use App\Models\Leadactor;
use App\Models\Movietype;

class MovieController extends Controller
{
    public function index(){
        return view('movies.index', ['movies' => Movie::paginate(10)]);
    }

    public function create(){
        $directors = Director::orderBy('director_fullname')->get();
        $leadactors = Leadactor::orderBy('leadactor_fullname')->get();
        $movietypes = Movietype::orderBy('movietype_label')->get();
        return view('movies.create', compact('directors', 'leadactors', 'movietypes'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'movie_name' => 'required|max:255',
            'movie_year' => 'required|max:4',
            'director_id' => 'required|integer',
            'leadactor_id'=> 'required|integer',
            'movietype_id' => 'required|integer'
        ]);
        
        $create = Movie::create($data);
        //dd($create);
        return back()->with('message', 'Movie created successfully!');
    }

    public function edit(Movie $movie){
        $directors = Director::orderBy('director_fullname')->get();
        $leadactors = Leadactor::orderBy('leadactor_fullname')->get();
        $movietypes = Movietype::orderBy('movietype_label')->get();
        return view('movies.edit', compact('movie', 'directors', 'leadactors', 'movietypes'));
    }

    public function update(Movie $movie, Request $request){
        $data = $request->validate([
            'movie_name' => 'required|max:255',
            'movie_year' => 'required|max:4',
            'direcor_id' => 'requred|integer',
            'leadactor_id' => 'required|integer',
            'movietype_id' => 'required|integer'
        ]);

        $movie->update($data);
        return back()->with('message', 'Data updated successfully!');
    }

    public function destroy(Movie $movie){
        $movie->delete();
        
        return back()->with('message', 'Movie deleted successfully!');
    }
}
