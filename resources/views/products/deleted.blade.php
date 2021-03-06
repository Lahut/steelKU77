@extends('layouts.master')
@section('content')
<h1>รายการที่ลบไปแล้ว</h1><br><br>
    @foreach ($productsDeleted->chunk(3) as $chunk)
<div class="">
    <div class="row ">
        @foreach($chunk as $product)
        <div class="col">
            <div  data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="500"  class="card shadow-sm p-3 mb-5 bg-white rounded" style="width: 100%">
                <img src="/img_product/{{$product->image}}" class="card-img-top" alt="...">
                <div class="card-body bg-secondary">
                    <?php $title = substr($product->title, 0, 20)  ?>
                    <?php $detail = substr($product->detail, 0, 65)  ?>
                    <h5 class="card-title"><?php echo $title . " ..."  ?></h5>
                    <h6 class="card-text" maxlength="20"><?php echo $detail . " ..."  ?></h6>
                    <hr>
                    <p>
                        <h6 align='right'>ราคา {{$product->price}} บาท ต่อชิ้น</h6>
                        <h6 align='right'>ขายไปแล้ว {{$product->order_count}} ชิ้น</h6>
                        <hr>
                        <p>
                            <a href="{{ route('products.show', ['product' => $product->id]) }}" class="float-right btn btn-primary">สั่งซื้อ</a><br><br>
                            <hr>
                        <p>
                            <a href="{{ action('ProductController@deleted', ['product' => $product->id]) }}" class="float-right btn btn-primary">แก้ไข</a>      <br>                      
                            <form action="{{ action('ProductController@deleted', ['product' => $product->id]) }}" method="POST"><br>
                                <input type="hidden" name="_method" value="GET">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">                               
                                <input type="submit" value="กู้คืน" class="float-right btn btn-primary"><br><br>
                            </form>
                            <hr>
                            <p>
                                <h6 align='right'>ลงขายเมื่อ {{$product->created_at }}</h6>
                                <h6 align='right'>แก้ไขล่าสุด {{$product->updated_at }}</h6>
                </div>
            </div>
            <br>
        </div>
        @endforeach
    </div>
    @endforeach
    @endsection