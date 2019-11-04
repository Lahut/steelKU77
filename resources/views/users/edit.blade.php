@extends('layouts.master')
@section('content')
<h2>แก้ไขข้อมูลส่วนตัว</h2>

<form name="form1" method="POST" action="{{ route('users.update', ['user' => Auth::user()->id]) }}" style="width:100%;"  enctype="multipart/form-data"><br><br>
    @csrf
        @method('PUT')
        <form name="form1" method="POST" action="{{ route('users.update', ['user' => Auth::user()->id]) }}" style="width:100%;"><br><br>
            <h6>ชื่อ</h6>
            <input type="text" name="name" class="@error('name') is-invalid @enderror form-control" value="{{ old('name', Auth::user()->name) }}">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <h6>email</h6>
            <input name="email" type="text" class="@error('email') is-invalid @enderror form-control" value="{{ old('email', Auth::user()->email) }}">
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br><br>
            <button class="float-right btn btn-primary" type="submit" name="Submit" value="" onclick="return confirm('ยืนยันการแก้ไขสินค้า')">ยืนยันการแก้ไข</button>
        </form>

@endsection
