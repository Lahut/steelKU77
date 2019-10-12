@extends('layouts.master')
@section('content')
<h6>Category: {{ $categories }}</h6>
<p>{{ $categories->count() }} post</p>
@foreach ($categories as $post)
<div>
    <a href="{{ route('posts.show', ['post' => $post->id]) }}">
        {{ $post->name }}
    </a>
</div>
@endforeach
@endsection