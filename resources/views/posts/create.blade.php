@extends('layouts.master')
@section('content')

<h1>Create New Post</h1>
@if ($errors->any())
    <div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    </div>
    @endif
<form action="{{ route('posts.store')}}" method="post">
@csrf
<div>
<h6 for="title">Post Title</h6>
<input type="text" class="form-control @error('title') is-invalid @enderror" name = "title" value="{{ old('title') }}">
@error('title')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
<div>
<h6 for="detail">Post detail</h6>
<textarea class="@error('detail') is-invalid @enderror" name="detail" id="detail" cols="100%" rows="10">{{ old('detail') }}</textarea>
@error('detail')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
<div>
<button type="submit">Publish now</button>
</div>
@endsection