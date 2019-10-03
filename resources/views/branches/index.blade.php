@extends('layouts.master')
@section('content')
<h1></h1>

@foreach ($branches as $branch) 
    <div class="card">
    <div class="card-body">
    <p>สาขาที่ {{ $branch->id }}</p>
    <h5 class="card-title">{{ $branch->title }}</h5>
    <p class="card-text">{{ $branch->detail }}</p>
    <a href="{{ route('branches.show', ['branch' => $branch->id]) }}" class="btn btn-primary">ดูแผนที่</a>

    </div>
    </div>

@endforeach
@endsection