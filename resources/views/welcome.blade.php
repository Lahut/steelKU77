@extends('layouts.master')
@section('content')
    <div data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="500">

    <div class="bd-example" id="Carousel" class="carousel slide carousel-fade col-lg-8 col-offset-2">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
            <li data-target="Carousel" data-slide-to="0" class="active"></li>
            <li data-target="Carousel" data-slide-to="1"></li>
            <li data-target="Carousel" data-slide-to="2"></li>
        </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="imghome/banner1.jpg" class="d-block w-100" alt="..." width="500" height="400">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="imghome/images (3).jpg" class="d-block w-100" alt="..." width="500" height="400">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="imghome/images (2).jpg" class="d-block w-100" alt="..." width="500" height="400">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <br><br>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<h3>สินค้าขายดี</h3>

        @foreach (App\Product::orderBy('order_count', 'desc')->take(3)->get()->chunk(3) as $chunk)
        <div class="row">
        @foreach($chunk as $product)
        <div class="col">
        <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500" class="bg-light mx-auto" style="margin:20px; padding:20px; border:20px; width:335px;">
            <p>ประเภทสินค้า {{ $product->category['name'] }}</p>
                <img src="/img_product/{{$product->image}}" class="shadow-sm p-0" alt="..." width="100%" height="200"><br><br>

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
        @endforeach
    </div>
    @endforeach

      </div>
    </div>
  </div>
</div>
</div>
@endsection
