@extends('nhanvien.layout')

@section('content')
<h1>Tạo Hóa Đơn Mới</h1>
<form action="{{ route('nhanvien.hoa_don.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="ngay_dat" class="form-label">Ngày Đặt:</label>
        <input type="date" name="ngay_dat" id="ngay_dat" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="tong_tien" class="form-label">Tổng Tiền:</label>
        <input type="number" name="tong_tien" id="tong_tien" class="form-control" step="0.01" required>
    </div>
    <div class="mb-3">
        <label for="so_luong" class="form-label">Số Lượng:</label>
        <input type="number" name="so_luong" id="so_luong" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="id_nguoi_dung" class="form-label">Người Dùng:</label>
        <select name="id_nguoi_dung" id="id_nguoi_dung" class="form-select" required>
            @foreach ($nguoiDungs as $nguoiDung)
                <option value="{{ $nguoiDung->id_nguoi_dung }}">{{ $nguoiDung->ho_ten }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="id_khuyen_mai" class="form-label">Khuyến Mãi:</label>
        <select name="id_khuyen_mai" id="id_khuyen_mai" class="form-select" required>
            @foreach ($khuyenMais as $khuyenMai)
                <option value="{{ $khuyenMai->id_khuyen_mai }}">{{ $khuyenMai->ten_khuyen_mai }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="id_san_pham" class="form-label">Sản Phẩm:</label>
        <select name="id_san_pham" id="id_san_pham" class="form-select" required>
            @foreach ($sanPhams as $sanPham)
                <option value="{{ $sanPham->id_san_pham }}">{{ $sanPham->ten_san_pham }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Lưu</button>
</form>
@endsection
