@extends('nhanvien.layout')

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
    {{ session('success') }}
@endif
@if (session('error'))
    {{ session('error') }}
@endif

<h1>Chỉnh sửa khuyến mãi</h1>
<br>
<form action="{{ route('nhanvien.khuyenmai.update', $khuyenmai->id_khuyen_mai) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="tenKhuyenMai" class="form-label">Tên khuyến mãi</label>
        <input type="text" class="form-control" value="{{ $khuyenmai->ten_khuyen_mai }}" name="ten_khuyen_mai" id="tenKhuyenMai">
    </div>
    @error('ten_khuyen_mai')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="mb-3">
        <label for="phanTramGiamGia" class="form-label">Phần trăm giảm giá</label>
        <input type="number" class="form-control" value="{{ $khuyenmai->phan_tram_giam_gia }}" name="phan_tram_giam_gia" id="phanTramGiamGia">
    </div>
    @error('phan_tram_giam_gia')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="mb-3">
        <label for="moTa" class="form-label">Mô tả</label>
        <textarea class="form-control" name="mo_ta" id="moTa">{{ $khuyenmai->mo_ta }}</textarea>
    </div>
    @error('mo_ta')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="mb-3">
        <label for="ngayBatDau" class="form-label">Ngày bắt đầu</label>
        <input type="date" class="form-control" value="{{ $khuyenmai->ngay_bat_dau }}" name="ngay_bat_dau" id="ngayBatDau">
    </div>
    @error('ngay_bat_dau')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="mb-3">
        <label for="ngayKetThuc" class="form-label">Ngày kết thúc</label>
        <input type="date" class="form-control" value="{{ $khuyenmai->ngay_ket_thuc }}" name="ngay_ket_thuc" id="ngayKetThuc">
    </div>
    @error('ngay_ket_thuc')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
