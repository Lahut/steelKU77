<header class="blog-header py-3">

  <div class="row flex-nowrap justify-content-between align-items-center">
    <div class="col-4 pt-1">
      <h1 class="text-light" href="#">ราหูดเหล็กเส้น</h1>
    </div>
    <div class="col-4 text-center">
      <a class="blog-header-logo text-dark" href="#"></a>
    </div>
    <div class="col-4 d-flex justify-content-end align-items-center">
      <a class="text-light" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false">
          <title>Search</title>
          <circle cx="10.5" cy="10.5" r="7.5"></circle>
          <path d="M21 21l-5.2-5.2"></path>
        </svg>
      </a>
      <form class="form-inline my-2 my-lg-0">

      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>
    </div>
  </div>
</header>
<nav class="navbar navbar-expand-lg navbar-light bb" data-spy="affix" data-offset-top="197">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/') }}">หน้าแรก <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ action('InformationsController@go') }}">ข้อมูลบริษัท</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ action('BranchController@index') }}">ติดต่อ</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          หมวดหมู่สินค้า
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            @foreach (App\ProductCategory::all() as $item)
        <a class="dropdown-item" href="{{ route('categories.show', ['category' => $item->id]) }}">{{ $item->name }}</a>
            @endforeach
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ action('ProductController@index') }}">สินค้าทั้งหมด</a>
      </li>
      @can('create', App\Product::class)
      <li class="nav-item">
        <a class="nav-link" href="{{ action('ProductController@manage') }}">จัดการสินค้า</a>
      </li>

      @endcan
      @auth
      <li class="nav-item">
        <a class="nav-link" href="{{ action('OrderController@index') }}">คำสั่งซื้อ</a>
      </li>
      @endauth
    </ul>
   <ul class="nav navbar-nav navbar-right">
    @guest

     <a class="nav-item btn btn-sm btn-outline-secondary" href="{{ route('login') }}">{{ __('Login') }}</a>  &nbsp;

   @if (Route::has('register'))

     <a class="nav-item btn btn-sm btn-outline-secondary" href="{{ route('register') }}">{{ __('Register') }}</a>


   @endif
   @else

   <li class=" dropdown">
     <a id="navbarDropdown" class=" dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
       {{ Auth::user()->name }} <span class="caret"></span>
     </a>

     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
     <a class="dropdown-item" href="{{ route('profile') }}">
         Profile
       </a>
       @can('create', App\User::class)
       <a class="dropdown-item" href="{{ action('UsersController@addCreator') }}">
        เพิ่มทีมงาน
      </a>
      @endcan
       <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
         {{ __('Logout') }}
       </a>

       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
         @csrf
       </form>
     </div>
   </li>
   @endguest
   </ul>
  </div>
</nav>
