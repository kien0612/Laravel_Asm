@extends('nhanvien.layout');

@section('content')
@if (session('success'))
    {{session('success')}}
@endif
@if (session('error'))
    {{session('error')}}
@endif
<h1>Sửa sản phẩm</h1>
<br>
<form action="{{ route('nhanvien.sanpham.update', ['sanpham' => $listSp->id_san_pham]) }}" method="POST">
    @csrf
    @method('PUT') 
   <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Tên sản phẩm</label>
        <input type="text" class="form-control" placeholder="nhập name vào" name="ten_san_pham"
            value="{{old('ten_san_pham', $listSp->ten_san_pham)}}">
    </div>
    @error('ten_san_pham')
        <div class="alert alert-danger"> {{ $message }} </div>
    @enderror
    <div class="mb-3">
        <label class="form-label">Giá</label>
        <input type="text" class="form-control" name="gia" value="{{old('gia', $listSp->gia)}}">
    </div>
    @error('gia')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="mb-3">
        <label class="form-label">Số lượng</label>
        <input type="text" class="form-control" name="so_luong" value="{{ old('so_luong', $listSp->so_luong)}}">
    </div>
    @error('so_luong')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Hình ảnh</label>
        <input type="file" class="form-control" placeholder="Chọn hình ảnh mới" name="hinh_anh">
        <p class="form-control"><img src="{{ Storage::url($listSp->hinh_anh) }}" width="100" height="100" alt=""></p>
    </div>
    @error('hinh_anh')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Mô tả</label>
        <textarea cols="30" class="form-control" rows="10" name="mo_ta">{{ old('mo_ta', $listSp->mo_ta) }}</textarea>
    </div>
    @error('mo_ta')
        <div class="alert alert-danger"> {{$message}} </div>
    @enderror
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Ngày Nhập Sản phẩm</label>
        <input type="date" class="form-control" placeholder="Chọn ngày nhập sản phẩm" name="ngay_nhap"
            value="{{ old('ngay_nhap', $listSp->ngay_nhap) }}">
    </div>
    @error('ngay_nhap')
        <div class="alert alert-danger"> {{$message}} </div>
    @enderror
    <div class="mb-3">
        <label class="form-label">Danh mục</label>
        <select class="form-select" name="id_danh_muc" aria-label="Default select example">
            @foreach ($listDm as $item)
                <option value="{{ $item->id_danh_muc }}" @if ($item->id_danh_muc == $listSp->id_danh_muc) selected @endif>
                    {{ $item->ten_danh_muc }}
                </option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{ route('nhanvien.sanpham.index') }}" class="btn btn-light">Quay lại trang chủ</a>
</form>
@endsection