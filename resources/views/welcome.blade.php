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



<h3>สินค้าแนะนำ</h3>
<div class="card mb-3 img" data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="500"style="max-width: 100%;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="imghome/different-metal-products-stainless-steel-profiles-PD9SKW3-1024x768.jpg" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">จำหน่ายเหล็กรุปพรรณ เกรด A และ B ทุกชนิด</h5>
        <p class="card-text">ลักษณะเหล็กเกรด  A    เป็นเหล็กใหม่ จากโรงงานผลิต  เรียบ ตรง ไม่มีรอยต่อ
ลักษณะเหล็กเกรด B     เป็นเหล็กที่มาจากโรงงานผลิต แต่ไม่สมบูรณ์ เช่นความยามไม่ถึง 6 ม.  เหล็กมีรอยต่อ ตำหนิ  แต่ไม่ใช่เหล็กเก่า</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
<div class="card mb-3 img" data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="500" style="max-width: 100%;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="imghome/different-metal-products-stainless-steel-profiles-PD9SKW3-1024x768.jpg" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">จำหน่ายเหล็กรุปพรรณ เกรด A และ B ทุกชนิด</h5>
        <p class="card-text">ลักษณะเหล็กเกรด  A    เป็นเหล็กใหม่ จากโรงงานผลิต  เรียบ ตรง ไม่มีรอยต่อ
ลักษณะเหล็กเกรด B     เป็นเหล็กที่มาจากโรงงานผลิต แต่ไม่สมบูรณ์ เช่นความยามไม่ถึง 6 ม.  เหล็กมีรอยต่อ ตำหนิ  แต่ไม่ใช่เหล็กเก่า</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
