@extends('layouts.master')
@section('content')

<h1>รายการสินค้าทั้งหมด</h1><br><br>
@foreach ($products->chunk(3) as $chunk)
<div class="">
    <div class="row">
        @foreach($chunk as $product)
        <div class="col">
            <div data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="500" class="card shadow-sm p-3 mb-5 bg-white rounded" style="width: 100%">
                <img src="/img_product/{{$product->image}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <?php $title = substr($product->title, 0, 20)  ?>
                    <?php $detail = substr($product->detail, 0, 65)  ?>
                    <h5 class="card-title"><?php
                     echo $title;
                     if ( $title != $product->title) {
                        echo "...";
                     }
                       ?></h5>
                    <h6 class="card-text" maxlength="20"><?php echo $detail;
                    if ( $detail != $product->detail) {
                        echo "...";
                     } ?></h6>
                    <hr>
                    <p>
                        <h6 align='right'>ราคา {{$product->price}} บาท ต่อชิ้น</h6>
                        <h6 align='right'>ขายไปแล้ว {{$product->order_count}} ชิ้น</h6>
                        <hr>
                        <p>
                            <a href="{{ route('products.show', ['product' => $product->id]) }}" class="float-right btn btn-primary">สั่งซื้อ</a><br><br>
                            <hr>
                        <p>
                            <a href="{{ route('products.edit', ['product' => $product->id]) }}" class="float-right btn btn-primary">แก้ไข</a>      <br>                      
                            <form action="{{ route('products.destroy', ['product' => $product->id]) }}" method="POST"><br>
                                @csrf
                                @method('DELETE')                          
                                <input type="submit"  value="ลบ" onclick="return confirm('ยืนยันการลบสินค้า')"class="float-right btn btn-primary"><br><br>
                            </form>
                            <hr>
                            <p>
                                <h6 class="text-black-50" align='right'>ลงขายเมื่อ {{$product->created_at }}</h6>
                                <h6 class="text-black-50" align='right'>แก้ไขล่าสุด {{$product->updated_at }}</h6>
                </div>
            </div>
            <br>
        </div>
        @endforeach
        
    </div>
    @endforeach    
    @endsection

    @section('s')