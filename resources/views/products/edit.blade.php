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
        <img id="blah" src="/img_product/{{$product->image}}" alt="your image" width="380" height="250" />
            <br><br>
        <div class="input-group"style="width:88%;">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" onchange="readURL(this);">
                <label class="custom-file-label" for="inputGroupFile01">เลือกรูปสินค้า</label>
            </div>
        </div>
    </div>
    <div class="col-7">
        <h6>ชื่อสินค้า</h6>
        <input type="text" id="exampleForm2" class="form-control" value="{{ $product->title }}">
        <h6>รายละเอียด</h6>
        <textarea class="form-control" id="exampleFormControlTextarea5" rows="5">{{ $product->detail }}</textarea>
        <h6>ราคา (บาทต่อชิ้น)</h6>
        <input type="text" id="exampleForm2" class="form-control" value="{{ $product->price }}"><br><br>
        <a href="{{ route('products.destroy', ['product' => $product->id]) }}" class="float-right btn btn-primary">ยืนยันการแก้ไข</a>
    </div>
</div>
@endsection