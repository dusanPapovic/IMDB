@extends('layouts.app')
@section('title','Create a movie')

@section('content')
<form action="/movies" method="POST">
    @csrf
    <div class="form group">
        <label for="title">Title</label>
        <input placeholder="Enter title" id="title" name="title" type="text" class="form-control">
        @error('title')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    <label for="genre">Genre</label>
    <input placeholder="Enter genre" id="genre" name="genre" type="text" class="form-control">
    @error('genre')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
    </div>
    <label for="director">Director</label>
    <input placeholder="Enter director" id="director" name="director" type="text" class="form-control">
    @error('director')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
    </div>
    <label for="age">Age</label>
    <input placeholder="Enter age" id="age" name="age" type="text" class="form-control">
    @error('age')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
    </div>
    <div class="form group">
        <label for="storyline">Storyline</label>
        <textarea placeholder="Enter storyline" name="storyline" id="storyline" cols="30" rows="10" class="form-control"></textarea>
        @error('storyline')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection