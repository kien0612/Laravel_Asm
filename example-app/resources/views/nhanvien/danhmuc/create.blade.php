@extends('nhanvien.layout');

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (session('success'))
    {{session('success')}}
@endif
@if (session('error'))
    {{session('error')}}
@endif
<h1>Thêm mới danh mục</h1>
<br>
<form action="{{route('nhanvien.danhmuc.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="nhập name vào" name="ten_danh_muc">
    </div>
    @error('ten_danh_muc')
        <div class="alert alert-danger"> {{$message}} </div>
    @enderror
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Mô tả</label>
        <input type="text" class="form-control" placeholder=" nhập mổ tả vào" name="mo_ta">
    </div>
    @error('mo_ta')
        <div class="alert alert-danger"> {{$message}} </div>
    @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{route('nhanvien.danhmuc.index')}}" class="btn btn-light"> Quay lại trang chủ</a>
</form>
@endsection