@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-5">
        <img src="/img_product/{{$product->image}}" style="width: 100%" class="" alt="..." width="380" height="250">
        </div>
        <div class="col-7">
            <h1>{{ $product->title }}</h1>
            <h5>{{ $product->detail }}</h5>    
            <h5>ราคา {{ $product->price }}  บาท ต่อชิ้น</h5>           
            <h6>ขายไปแล้ว {{$product->order_count}} ชิ้น</h6>
            <br><input type="text" name="title" id="exampleForm2" class="form-control" value="" placeholder="ใส่จำนวนสินค้าที่ต้องการ...">
            <br><textarea name="detail" class="form-control" id="exampleFormControlTextarea5" rows="3" placeholder="ใส่ที่อยู่จัดส่ง..."></textarea>
           <br> <textarea name="detail" class="form-control" id="exampleFormControlTextarea5" rows="3" placeholder="ใส่รายละเอียดอื่นๆที่ต้องการสั่งซื้อ..."></textarea>
            <br><input class="float-right btn btn-primary" type="submit" name="Submit" value="ยืนยันการสั่งซื้อ">
    </div>
</div>
@endsection