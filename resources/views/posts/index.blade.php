@extends('layouts.master')
@section('content')
<h1>{{ $message }}</h1>
<p>{{ date('j/M/Y H:i:s') }}</p> 

@foreach ($posts as $post) {
    <div class="card">
    <div class="card-body">
    {{ $post->id }}
    <h5 class="card-title">{{ $post->title }}</h5>
    <p class="card-text">{{ $post->detail }}</p>
    <a href="{{ route('posts.show', ['id' => $post->id]) }}" class="btn btn-primary">read more...</a>
    <p>URL: {{ url('posts/' . $post->id)}}</p>
    <p>Action: {{ action('PostsController@show', ['id' => $post->id]) }}</p>
    <p>All Posts: {{ action('PostsController@index') }}</p>
    <p>Route Name: {{ route('posts.show', ['id' => $post->id]) }} </p>
    </div>
    </div>
}
@endforeach
@endsection