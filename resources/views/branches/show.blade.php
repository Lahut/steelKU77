@extends('layouts.master')
@section('content')

<img src="/img_branches/{{$branch->imagemap}}" style="width: 50%" class="" alt="...">
<h1>{{ $branch->title }}</h1>
<h4>{{ $branch->detail }}</h4>
@endsection