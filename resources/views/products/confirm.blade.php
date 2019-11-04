@extends('layouts.master')
@section('content')
<form name="form1" method="POST" action="{{ route('orders.store', ['order' => $order->id]) }}" style="width:100%;">
<div class="bg-light mx-auto"  style="margin:20px; padding:20px; border:20px; width:595px;">
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
<p><b>สถานะ:</b> รอการยืนยันคำสั่งซื้อ</p>
<p><b>การตอบกลับ:</b> {{ $order->reply }}</p>

    @csrf
    <input type="hidden" name="product_id" value="{{ $order->product_id }}">
        <input type="hidden" name="amount" id="exampleForm2" class="@error('amount') is-invalid @enderror form-control" value="{{ $order->amount }}" placeholder="ใส่จำนวนสินค้าที่ต้องการ...">
            <input type="hidden"name="address" class="@error('address') is-invalid @enderror form-control" id="exampleFormControlTextarea5"  rows="3" value="{{ $order->address }}">
             <input  type="hidden"name="detail" class="@error('detail') is-invalid @enderror form-control" id="exampleFormControlTextarea5"  rows="3" placeholder="ใส่รายละเอียดอื่นๆที่ต้องการสั่งซื้อ..." value="{{ $order->detail }}">

<button class="btn btn-primary mx-auto" type="submit" onclick="return confirm('ยืนยันการสั่งซื้อสินค้า')">ยืนยันคำสั่งซื้อ</button>
</div>

</form>

@endsection
