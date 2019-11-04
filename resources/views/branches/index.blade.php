@extends('layouts.master')
@section('content')
<h1></h1>
@can('create', App\Branch::class)
<a class="nav-link float-right" href="{{ action('BranchController@create') }}">เพิ่มสาขา</a><br><br>
@endcan
@foreach ($branches as $branch)
    <div class="card fade-up" data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="500">
    <div class="card-body">
    <p>สาขาที่ {{ $branch->id }}</p>
    <h5 class="card-title">{{ $branch->title }}</h5>
    <p class="card-text">{{ $branch->detail }}</p>
    </div>
    <div class="row" style="position:relative; left:-70px; ">
    <div class="col-1"></div>
    <div class="col-2">
    <a href="{{ route('branches.show', ['branch' => $branch->id]) }}" class="center btn btn-primary mx-auto">ดูข้อมูล</a>
    </div>


    <div class="col-8" style="position:relative; left:80px;">
    @can('create',App\Branch::class)
    <a href="{{ route('branches.edit', ['branch' => $branch->id]) }}" class="float-right btn btn-primary">แก้ไข</a>
    @endcan
</div>
    <div class="col-1" style="position:relative; left:65px;">
    @can('create',App\Branch::class)
    <form action="{{ route('branches.destroy', ['branch' => $branch->id]) }}" method="POST">
            @csrf
            @method('DELETE')

            <button type="submit"  onclick="return confirm('ยืนยันการลบสาขา')" class="float-left btn btn-primary">ลบ</button>
            @endcan
        </form>

        <br><br><br>
    </div>

</div>
    </div>


@endforeach
@endsection
