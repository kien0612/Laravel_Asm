@extends('nhanvien.layout')
@section('title')
Thêm mới sản phẩm
@endsection
@section('content')
@if (session('success'))
    {{session('success')}}
@endif
@if (session('error'))
    {{session('error')}}
@endif
<form action="{{route('nhanvien.sanpham.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label">Tên sản phẩm</label>
        <input type="text" class="form-control" name="ten_san_pham" placeholder="Nhập tên sp"
            value=" {{old('ten_san_pham')}}">
    </div>
    @error('ten_san_pham')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="mb-3">
        <label class="form-label">Giá</label>
        <input type="text" class="form-control" name="gia" value=" {{old('gia')}}">
    </div>
    @error('gia')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="mb-3">
        <label class="form-label">Số lượng</label>
        <input type="text" class="form-control" name="so_luong" value=" {{old('so_luong')}}">
    </div>
    @error('so_luong')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Hình ảnh</label>
        <input type="file" class="form-control" name="hinh_anh">
    </div>
    @error('hinh_anh')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Mô tả</label>
        <textarea cols="30" class="form-control" rows="10" name="mo_ta" value=" {{old('mo_ta')}}"></textarea>
    </div>
    @error('mo_ta')
        <div class="alert alert-danger"> {{$message}} </div>
    @enderror

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Ngày Nhập Sản phẩm </label>
        <input type="date" class="form-control" placeholder="nhập name vào" name="ngay_nhap"
            value=" {{old('ngay_nhap')}}">
    </div>
    @error('ngay_nhap')
        <div class="alert alert-danger"> {{$message}} </div>
    @enderror
    
    <div class="mb-3">
        <label class="form-label">Danh mục</label>
        <select class="form-select" name="id_danh_muc" aria-label="Default select example">
            @foreach ($listDm as $item)
                <option value="{{ $item->id_danh_muc }}">{{ $item->ten_danh_muc }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-success">Gửi</button>
    <a href="{{route('nhanvien.sanpham.index')}}" class="btn btn-light"> Quay lại trang chủ</a>
</form>
@endsection