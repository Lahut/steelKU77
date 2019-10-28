<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href='{{ url("css/bootstrap.css") }}'>
    <link rel="stylesheet" href='{{ url("css/mycss.css") }}'>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="{{ url('js/myjs.js') }}"></script>

    <!-- Scripts -->
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('style')
    <title>{{ env('APP_NAME') }}</title>
</head>
<body class="container">

@include('layouts._navbar')
<!-- Authentication Links -->
<br>
<div class="container bb">
  <br>
@yield('content')
<br><br>


</div>

<script src="{{ asset('js/app.js') }}"></script>
@yield('script')

<br><br>

</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
   AOS.init();
</script>
</html>
