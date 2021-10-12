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

@endsection