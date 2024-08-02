@extends('nhanvien.layout')

@section('content')
<div class="container">
    <h1 class="mb-4">Tạo Giỏ Hàng Mới</h1>
    <form action="{{ route('nhanvien.gio_hang.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="so_luong" class="form-label">Số Lượng:</label>
            <input type="number" name="so_luong" id="so_luong" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="tong_tien" class="form-label">Tổng Tiền:</label>
            <input type="number" name="tong_tien" id="tong_tien" step="0.01" class="form-control" required>
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
            <label for="id_san_pham" class="form-label">Sản Phẩm:</label>
            <select name="id_san_pham" id="id_san_pham" class="form-select" required>
                @foreach ($sanPhams as $sanPham)
                    <option value="{{ $sanPham->id_san_pham }}">{{ $sanPham->ten_san_pham }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
    <a href="{{ route('nhanvien.gio_hang.index') }}" class="btn btn-success mt-3">Back to List</a>

</div>
@endsection
