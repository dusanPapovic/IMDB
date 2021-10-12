<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Http\Requests\CreateMovieRequest;

class MoviesController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return view('movies.index', compact('movies'));
    }
    public function show(Movie $movie)
    {
        $movie->load(['comments']);

        return view('movies.show', compact('movie'));
    }

    public function create()
    {
        return view('movies.create');
    }

    public function store(CreateMovieRequest $request)
    {


        $data = $request->validated();

        $newMovie = Movie::create($data);

        return redirect('/movies');
    }
}
