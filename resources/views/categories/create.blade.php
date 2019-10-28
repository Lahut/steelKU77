@extends('layouts.master')
@section('content')

<h1>Create New Category</h1>

<form action="{{ route('categories.store')}}" method="post">
@csrf
<div>
<h6 for="title">Category Name</h6>
<input type="text" class="form-control @error('name') is-invalid @enderror" name = "name" value="{{ old('name') }}">
@error('name')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
<br>
<div>
<button type="submit" class=" btn btn-primary">Publish now</button>
</div>
@endsection
