@extends('nhanvien.layout');

@section('content')
<!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->
@if (session('success'))
    {{session('success')}}
@endif
@if (session('error'))
    {{session('error')}}
@endif
<h1>Sửa danh muc</h1>
<br>
<form action="{{ route('nhanvien.sanpham.update', ['sanpham' => $listSp->id_san_pham]) }}" method="POST">
    @csrf
    @method('PUT') 
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="nhập name vào" name="ten_san_pham" value="{{ $listSp->ten_san_pham }}">
    </div>
    @error('ten_san_pham')
        <div class="alert alert-danger"> {{ $message }} </div>
    @enderror
    <div class="mb-3">
        <label class="form-label">Giá</label>
        <input type="text" class="form-control" name="gia" value="{{ $listSp->gia }}">
    </div>
    @error('gia')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="mb-3">
        <label class="form-label">Số lượng</label>
        <input type="text" class="form-control" name="so_luong"value="{{ $listSp->gia }}">
    </div>
    @error('so_luong')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="mb-3">
        <label class="form-label">Hình ảnh</label>
        <input type="file" class="form-control" name="hinh_anh" value="{{ $listSp->gia }}">
    </div>
    @error('hinh_anh')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="mb-3">
        <label class="form-label">Danh mục</label>
        <select class="form-select" name="id_danh_muc" aria-label="Default select example">
            @foreach ($listDm as $item)
                <option value="{{ $item->id_danh_muc }}" @if ($item->id_danh_muc == $listSp->id_danh_muc) selected @endif>{{ $item->ten_danh_muc }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{ route('nhanvien.sanpham.index') }}" class="btn btn-light">Quay lại trang chủ</a>
</form>
@endsection