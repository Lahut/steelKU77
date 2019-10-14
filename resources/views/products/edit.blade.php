@extends('layouts.master')
@section('content')
<h2>แก้ไขสินค้า</h2>

<div class="row">
    <div class="col-5">
        <style>
            article,
            aside,
            figure,
            footer,
            header,
            hgroup,
            menu,
            nav,
            section {
                display: block;
            }
        </style>
        <form name="form1" method="POST" action="{{ route('products.update', ['product' => $product->id]) }}" style="width:100%;"  enctype="multipart/form-data"><br><br>
        @csrf
            @method('PUT')
        <img id="blah" src="/img_product/{{$product->image}}" alt="your image" width="380" height="250" />
        <br><br>
        <div class="input-group" style="width:88%;">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
            </div>
            <div class="custom-file">
                <input type="file" name="image"class="@error('image') is-invalid @enderror custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" onchange="readURL(this);">
                <label class="custom-file-label" for="inputGroupFile01">เลือกรูปสินค้า</label>
            </div>
        </div>
        @error('image')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    
    <form name="form1" method="POST" action="{{ route('products.update', ['product' => $product->id]) }}" style="width:100%;"><br><br>
        <div class="col-7">
           
            <h6>ชื่อสินค้า</h6>
            <input type="text" name="title" id="exampleForm2" class="@error('title') is-invalid @enderror form-control" value="{{ old('title', $product->title) }}">
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <h6>รายละเอียด</h6>
            <textarea name="detail" class="@error('detail') is-invalid @enderror form-control" id="exampleFormControlTextarea5" rows="5">{{ old('detail', $product->detail) }}</textarea>
            @error('detail')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <h6>ราคา (บาทต่อชิ้น)</h6>
            <input name="price" type="text" id="exampleForm2" class="@error('price') is-invalid @enderror form-control" value="{{ old('price', $product->price) }}">
            @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br><br>
            <button class="float-right btn btn-primary" type="submit" name="Submit" value="" onclick="return confirm('ยืนยันการแก้ไขสินค้า')">ยืนยันการแก้ไข</button>

        </div>
</div>
</form>

@endsection