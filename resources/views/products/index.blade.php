@extends('layouts.master')
@section('content')

<h1>รายการสินค้าทั้งหมด</h1><br><br>
@foreach ($products->chunk(3) as $chunk)
<div class="">
    <div class="row">
        @foreach($chunk as $product)
        <div class="col">
            <div class="card" style="width: 100%">
                <img src="/img_product/{{$product->image}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <?php $title = substr($product->title, 0, 20)  ?>
                    <?php $detail = substr($product->detail, 0, 65)  ?>
                    <h5 class="card-title"><?php echo $title . " ..."  ?></h5>
                    <p class="card-text" maxlength="20"><?php echo $detail . " ..."  ?></p>
                    <p align='right'>ราคา {{$product->price}} บาท ต่อชิ้น</p>
                    <p align='right'>ขายไปแล้ว {{$product->order_count}} ชิ้น</p>
                    <a href="{{ route('products.show', ['product' => $product->id]) }}" class="float-right btn btn-primary">สั่งซื้อ</a>
                    <br><br>
                    <a href="{{ route('products.edit', ['product' => $product->id]) }}" class="btn btn-primary">แก้ไข</a>
                    <a href="{{ route('products.destroy', ['product' => $product->id]) }}" class="float-right btn btn-primary">ลบ</a>
                </div>
            </div>
            <br>
        </div>
        @endforeach
    </div>
    @endforeach
    @endsection