@extends('layouts.master')
@section('content')
<h2>รายการสมาชิกทั้งหมด</h2><br>
@foreach ($users->where('id', '!=', Auth::id()) as $user)

<div class="row bg-light" style="margin:5px;">

        <div style="margin:10px;"class="col-7">
            <br>
            <p>{{$user->name}}</p>
            <p>{{ $user->email }}</p>
        </div>
        <div class="col-2"><br>
        <p>role: {{ $user->role}}</p>
        </div>
        <div style="margin:10px;"class="col-2">
                <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <br>
                        <button type="submit" onclick="return confirm('ยืนยันการลบสินค้า')" class="float-right btn btn-primary">ลบสมาชิก</button>

            </form>
        </div>

    </div>

@endforeach
@endsection
