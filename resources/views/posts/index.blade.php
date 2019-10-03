@extends('layouts.master')
@section('content')
<h1></h1>
<p>{{ date('j/M/Y H:i:s') }}</p> 

@foreach ($posts as $post) 
    <div class="card">
    <div class="card-body">
    {{ $post->id }}
    <h5 class="card-title">{{ $post->title }}</h5>
    <p class="card-text">{{ $post->detail }}</p>
    <a href="{{ route('posts.show', ['post' => $post->id]) }}" class="btn btn-primary">read more...</a>

    </div>
    </div>

@endforeach
@endsection