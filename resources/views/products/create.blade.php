@extends('layouts.master')
@section('content')
<h2>เพิ่มสินค้า</h2>

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
        <form name="form1" method="POST" action="{{ route('products.store') }}" style="width:100%;" enctype="multipart/form-data"><br><br>
            @csrf
            <img id="blah" src="/images.png" alt="your image" width="380" height="250" />
            <br><br>
            <div class="input-group" style="width:88%;">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                </div>
                <div class="custom-file">
                    <input type="file" name="image" class="@error('image') is-invalid @enderror custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" onchange="readURL(this);">
                    <label class="custom-file-label" for="inputGroupFile01">เลือกรูปสินค้า</label>
                </div>
            </div>
            @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
    </div>

    <div class="col-7">
<br>
        <h6>ชื่อสินค้า</h6>
        <input type="text" name="title" id="exampleForm2" class="@error('title') is-invalid @enderror form-control" value="{{ old('title') }}">
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <h6>ประเภทสินค้า</h6>
        <select class="@error('category') is-invalid @enderror browser-default custom-select" name="category">
            <option value="" selected> - ประเภทสินค้า - </option>
            @foreach (App\ProductCategory::all() as $item)
        <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
          </select>
          @error('category')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <h6>รายละเอียด</h6>
        <textarea name="detail" class="@error('detail') is-invalid @enderror form-control" id="exampleFormControlTextarea5" rows="5">{{ old('detail') }}</textarea>
        @error('detail')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <h6>ราคา (บาทต่อชิ้น)</h6>
        <input name="price" type="text" id="exampleForm2" class="@error('price') is-invalid @enderror form-control" value="{{ old('price') }}">
        @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <button class="float-right btn btn-primary" type="submit" onclick="return confirm('ยืนยันการเพิ่มสินค้า')">เพิ่มสินค้า</button>
    </div>
</div>
</form>

@endsection
