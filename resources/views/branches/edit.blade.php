@extends('layouts.master')
@section('content')
<h2>แก้ไขแผนที่</h2>

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
        <form name="form1" method="POST" action="{{ route('branches.update', ['branch' => $branch->id]) }}" style="width:100%;"  enctype="multipart/form-data"><br><br>
        @csrf
            @method('PUT')
        <img id="blah" src="/img_branches/{{$branch->imagemap}}" alt="your image" width="380" height="250" />
        <br><br>
        <div class="input-group" style="width:88%;">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
            </div>
            <div class="custom-file">
                <input type="file" name="image"class="@error('image') is-invalid @enderror custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" onchange="readURL(this);">
                <label class="custom-file-label" for="inputGroupFile01">เลือกรูปแผนที่</label>
            </div>
        </div>
        @error('image')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <form name="form1" method="POST" action="{{ route('branches.update', ['branch' => $branch->id]) }}" style="width:100%;"><br><br>
        <div class="col-7">

            <h6>ชื่อสาขา</h6>
            <input type="text" name="title" id="exampleForm2" class="@error('title') is-invalid @enderror form-control" value="{{ old('title', $branch->title) }}">
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <h6>รายละเอียด</h6>
            <textarea name="detail" class="@error('detail') is-invalid @enderror form-control" id="exampleFormControlTextarea5" rows="5">{{ old('detail', $branch->detail) }}</textarea>
            @error('detail')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br><br>
            <button class="float-right btn btn-primary" type="submit" name="Submit" value="" onclick="return confirm('ยืนยันการแก้ไขแผนที่')">ยืนยันการแก้ไขแผนที่</button>

        </div>
</div>
</form>

@endsection
