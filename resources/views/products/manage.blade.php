@extends('layouts.master')
@section('content')
@auth
<h1>All Product for {{ Auth::user()->name }}</h1>
@else
<h1>All Product</h1>
@endauth
<h1>จัดการรายการสินค้า</h1>
<a class="nav-link float-right" href="{{ action('ProductCategoryController@create') }}">เพิ่มหมวดหมู่สินค้า</a>
<a class="nav-link float-right" href="{{ action('ProductController@create') }}">เพิ่มสินค้า</a>
<br><br>

@foreach ($products as $product)

<div class="row ">
    <div class="col">
        <img src="/img_product/{{$product->image}}" class="shadow-sm p-0" alt="..." width="90" height="60">
    </div>
    <div class="col-7">
        <p>{{$product->title}}</p>
        <p>{{ $product->category['name'] }}</p>
    </div>
    <div class="col-0.5">
        <a href="{{ route('products.show', ['product' => $product->id]) }}" class="float-right btn btn-primary">หน้าสั่งซื้อ</a>
    </div>
    <div class="col-1">
        <a href="{{ route('products.edit', ['product' => $product->id]) }}" class="float-right btn btn-primary">แก้ไข</a>
    </div>
    <div class="col-1">
        <form action="{{ route('products.destroy', ['product' => $product->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('ยืนยันการลบสินค้า')" class="float-right btn btn-primary">ลบ</button>
        </form>
    </div>

</div>
<hr>
    <p>
@endforeach
<div class="">{{ $products->links() }}</div>
<a class="nav-link float-right" href="{{ action('ProductController@deleted') }}">สินค้าที่ถูกลบ</a>
@endsection
