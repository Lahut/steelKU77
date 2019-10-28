@extends('layouts.master')
@section('content')
<h6>Category: {{ $product_categories[0] }}</h6>
<p>{{ $product_categories->count() }} post</p>
@foreach ($product_categories as $category)
<div>
    <a href="{{ route('categories.show', ['category' => $category->id]) }}">
        {{ $category->name }}</a>
        <br>
    @foreach ($category->products as $item)
            {{
                $item->title
            }}
    @endforeach
</div>
@endforeach
@endsection
