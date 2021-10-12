<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Movie;

class CommentController extends Controller
{
    public function store(Movie $movie, CommentRequest $request)
    {
        $data = $request->validated();
        $movie->comments()->create($data);
        return redirect('/movies');
    }
}
