@extends('layouts.master')
@section('content')
<h1>Category: {{ $category->name }}</h1>
<p>{{ $category->posts->count() }} post</p>
    @foreach ($category as $post)
    <div>
<a href="{{ route('posts.show', ['post' => $post->id]) }}">
    {{ $post->title }}
</a>

    </div>

    @endforeach
@endforeach
@endsection
