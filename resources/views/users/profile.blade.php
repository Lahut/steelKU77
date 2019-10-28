@extends('layouts.master')
@section('content')
<h1>Profile</h1>
<p>ID: {{ Auth::id() }}</p>
<h4>ชื่อ: {{ Auth::user()->name }}</h4>
<h4>email: {{ Auth::user()->email }}</h4>
<h4>เป็นสมาชิกเมื่อ: {{ Auth::user()->created_at }}</h4>
@endsection
