@extends('layouts.master')
@section('content')
<h1>Profile</h1>
<p>ID: {{ Auth::id() }} ({{ Auth::user()->role }})</p>
<h4>ชื่อ: {{ Auth::user()->name }}</h4>
<h4>email: {{ Auth::user()->email }}</h4>
<br><hr>
<p>แก้ไขข้อมูลล่าสุดเมื่อ: {{ Auth::user()->updated_at }}</p>
<p>เป็นสมาชิกเมื่อ: {{ Auth::user()->created_at }}</p>
<a class="nav-link float-right" href="{{ action('UsersController@edit',  ['user' => Auth::id()]) }}">แก้ไขข้อมูล</a>
@endsection
