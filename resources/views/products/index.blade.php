@extends('layouts.master')
@section('content')
@auth
<h1>All Product for {{ Auth::user()->name }}</h1>
@else
<h1>All Product</h1>
@endauth
<h1>รายการสินค้าทั้งหมด</h1><br><br>
@foreach ($products->chunk(3) as $chunk)
<div class="">
    <div class="row">
        @foreach($chunk as $product)
        <div class="col">
            <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500" class="mx-auto" style=" width:290px;">
            <p>ประเภทสินค้า {{ $product->category['name'] }}</p>
                <img src="/img_product/{{$product->image}}" class="shadow-sm p-0" alt="..." width="100%" height="200"><br><br>
                <div class="">
                    <?php $title = substr($product->title, 0, 20)  ?>
                    <?php $detail = substr($product->detail, 0, 65)  ?>
                    <h5 class="card-title"><?php
                                            echo $title;
                                            if ($title != $product->title) {
                                                echo "...";
                                            }
                                            ?></h5>
                    <h6 class="card-text" maxlength="20"><?php echo $detail;
                                                            if ($detail != $product->detail) {
                                                                echo "...";
                                                            } ?></h6>
                    <hr>
                    <p>
                        <h6 align='right'>ราคา {{$product->price}} บาท ต่อชิ้น</h6>
                        <h6 align='right'>ขายไปแล้ว {{$product->order_count}} ชิ้น</h6>
                        <hr>
                        <p>
                            @auth
                            <a href="{{ route('products.show', ['product' => $product->id]) }}" class="float-right btn btn-primary">สั่งซื้อ</a><br><br>

                            @else
                            <a class="text-danger float-right" href="{{ route('login') }}">กรุณาเข้าสู่ระบบเพื่อทำการสั่งซื้อ</a><br>
                            @endauth
                            <hr>
                            <p>
                                <h6 class="text-black-50" align='right'>ลงขายเมื่อ {{$product->created_at }}</h6>
                                <h6 class="text-black-50" align='right'>แก้ไขล่าสุด {{$product->updated_at }}</h6>
                </div>
            </div>
        </div>
        @endforeach

    </div>
    </div>
    <br><br>
    @endforeach

    @endsection

    @section('s')
