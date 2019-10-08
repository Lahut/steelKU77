@extends('layouts.master')
@section('content')

<p>{{ date('j/M/Y H:i:s') }}</p>
{{ $post->category->name }}
<h1>{{ $post->title }}</h1>
<h4>{{ $post->detail }}</h4>
@endsection
