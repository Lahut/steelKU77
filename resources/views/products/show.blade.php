@extends('layouts.master')
@section('content')
<h1>{{ $product->title }}</h1>
<form name="form1" method="POST" action="{{ action('OrderController@confirm') }}" style="width:100%;" enctype="multipart/form-data">
    @csrf
    @method('GET')
    <div class="row">

    <div class="col-5">
        <img src="/img_product/{{$product->image}}" style="width: 100%" class="" alt="..." width="380" height="250">
        </div>
        <div class="col-7">
            <h1>{{ $product->title }}</h1>
            <p>ประเภทสินค้า {{ $product->category['name'] }}</p>
            <h5>{{ $product->detail }}</h5>
            <h5>ราคา {{ $product->price }}  บาท ต่อชิ้น</h5>
            <h6>ขายไปแล้ว {{$product->order_count}} ชิ้น</h6>
        <input type="hidden" name="product_id" value="{{ $product->id }}">
        <br><input type="text" name="amount" id="exampleForm2" class="@error('amount') is-invalid @enderror form-control" value="{{ old('amount') }}" placeholder="ใส่จำนวนสินค้าที่ต้องการ...">
            @error('amount')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
            <br><textarea name="address" class="@error('address') is-invalid @enderror form-control" id="exampleFormControlTextarea5"  rows="3" placeholder="ใส่ที่อยู่จัดส่ง...">{{ old('address') }}</textarea>
            @error('address')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br> <textarea name="detail" class="@error('detail') is-invalid @enderror form-control" id="exampleFormControlTextarea5"  rows="3" placeholder="ใส่รายละเอียดอื่นๆที่ต้องการสั่งซื้อ...">{{ old('detail') }}</textarea>
            @error('detail')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
            <br><button class="float-right btn btn-primary" type="submit" onclick="return confirm('ยืนยันการสั่งซื้อสินค้า')">สั่งซื้อ</button>
    </div>
</div>
</form>


@endsection
