@extends('layouts.master')
@section('content')
<h1>All Categories</h1>
@foreach ( $category as $category) 
{{ $category->name }}}

@endforeach
@endsection
