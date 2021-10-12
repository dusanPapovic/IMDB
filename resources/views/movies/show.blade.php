@extends('layouts.app')

@section('title',$movie->title)

@section('content')
<h2>
    {{$movie->title}}
</h2>
<p>
    {{$movie->genre}}
</p>
<p>
    {{$movie->director}}
</p>
<p>
    {{$movie->age}}
</p>
<p>
    {{$movie->storyline}}
</p>

<h5>Comments
</h5>
@forelse($movie->comments as $comment)
<p>{{$comment->content}}</p>
<p>{{$comment->created_at}}</p>
@empty<span>No comments</span>
@endforelse
<form class="mt-3" action="{{route('createComment',['movie'=> $movie->id])}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="content">Add comment:</label>
        <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
        @error('content')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    <button type="submit" class="btn-primary">Submit</button>
</form>
@endsection