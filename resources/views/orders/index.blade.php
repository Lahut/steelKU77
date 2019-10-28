@extends('layouts.master')
@section('content')
<h1>คำสั่งซื้อ</h1>
@foreach ($orders as $order)
<div>
        <p><b>ผู้สั่ง:</b> {{ $order->user->name }}</p>
        <p><b>email:</b> {{ $order->user->email }}</p>
        <a href="{{ route('products.show', ['product' => $order->product->id]) }}" class="h3">{{ $order->product->title }}</a>
<br>
<img src="/img_product/{{$order->product->image}}" class="shadow-sm p-0" alt="..." width="180" height="100"><br><br>
<p><b>ราคาต่อชิ้น:</b> {{ $order->product->price }} <b>จำนวนที่สั่ง:</b> {{ $order->amount }} <b>ราคาทั้งหมด:</b> <?php echo $order->product->price*$order->amount ?></p>

<p><b>ที่อยู่จัดส่ง:</b> {{ $order->address }}</p>
<p><b>รายละเอียด:</b> {{ $order->detail }}</p>
<p><b>สถานะ:</b> {{ $order->status }}</p>
<p><b>การตอบกลับ:</b> {{ $order->reply }}</p>
@can('create', App\Order::class)
<a href="{{ route('orders.edit', ['order' => $order->id]) }}" class="btn btn-primary">จัดการคำสั่งซื้อ</a><br><br>
@else
<form name="form1" method="POST" action="{{ route('orders.update', ['order' => $order->id]) }}" style="width:100%;">
    @csrf
    @method('PUT')
    <button class="btn btn-primary" type="submit" name="dismiss" value="" onclick="return confirm('ยืนยันการยกเลิกสินค้า')">ยกเลิกคำสั่งซื้อ</button>
</form>
@endcan
</div>
<hr>
@endforeach
@endsection
