@extends('layouts.master')
@section('content')

<h1>จัดการคำสั่งซื้อ</h1>
<div class="bg-light "  style="margin:20px; padding:20px; border:20px;">
    <p><b>ผู้สั่ง:</b> {{ $order->user->name }}</p>
    <p><b>email:</b> {{ $order->user->email }}</p>
    <hr>
    <a href="{{ route('products.show', ['product' => $order->product->id]) }}" class="h3">{{ $order->product->title }}</a>
<br>
<img src="/img_product/{{$order->product->image}}" class="shadow-sm p-0" alt="..." width="180" height="100"><br><br>
<p><b>ราคาต่อชิ้น:</b> {{ $order->product->price }} <b>จำนวนที่สั่ง:</b> {{ $order->amount }} <b>ราคาทั้งหมด:</b> <?php echo $order->product->price*$order->amount ?></p>
<hr>
<p><b>ที่อยู่จัดส่ง:</b> {{ $order->address }}</p>
<p><b>รายละเอียด:</b> {{ $order->detail }}</p>
<hr>
<p><b>สถานะ:</b> {{ $order->status }}</p>
<p><b>การตอบกลับ:</b> {{ $order->reply }}</p></div>
<form name="form1" method="POST" action="{{ route('orders.update', ['order' => $order->id]) }}" style="width:100%;"><br><br>

    @csrf
    @method('PUT')
    <h6>ตอบกลับ</h6>
    <textarea name="reply" class="@error('reply') is-invalid @enderror form-control" id="exampleFormControlTextarea5" rows="5">{{ old('reply', $order->reply) }}</textarea><br>
    <button class="btn btn-primary" type="submit" name="confirm1" value="" onclick="return confirm('ยืนยันการแก้ไขสินค้า')">ยืนยันคำสั่งซื้อ</button>
    <button class="btn btn-primary" type="submit" name="confirm2" value="" onclick="return confirm('ยืนยันการแก้ไขสินค้า')">ยืนยันการชำระเงิน</button>
    <button class="btn btn-primary" type="submit" name="refuse" value="" onclick="return confirm('ยืนยันการแก้ไขสินค้า')">ปฏิเสธคำสั่งซื้อ</button>

</form>

@endsection
