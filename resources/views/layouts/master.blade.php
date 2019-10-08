<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href='{{ url("css/bootstrap.css") }}'>
    <link rel="stylesheet" href='{{ url("css/mycss.css") }}'>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="{{ url('js/myjs.js') }}"></script>
    @yield('style')
    <title>{{ env('APP_NAME') }}</title>
</head>
<body class="container">    
@include('layouts._navbar')
<div class="container bg-light">
  <br>
@yield('content')
<br><br>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="{{ url('js/bootstrap.js') }}"></script>
@yield('script')
</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
   AOS.init();
</script>
</html>