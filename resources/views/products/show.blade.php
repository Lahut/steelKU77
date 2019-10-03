@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-5">
        <img src="/img_product/{{$product->image}}" style="width: 100%" class="" alt="...">
        </div>
        <div class="col-7">
            <h1>{{ $product->title }}</h1>
            <h5>{{ $product->detail }}</h5>        
    </div>
</div>
@endsection