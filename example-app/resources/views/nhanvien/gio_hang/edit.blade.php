@extends('nhanvien.layout')

@section('content')
<div class="container">
    <h1 class="mb-4">Sửa Giỏ Hàng</h1>
    <form action="{{ route('nhanvien.gio_hang.update', $gioHang->id_gio_hang) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="so_luong" class="form-label">Số Lượng:</label>
            <input type="number" name="so_luong" id="so_luong" class="form-control" value="{{ $gioHang->so_luong }}" required>
        </div>
        <div class="mb-3">
            <label for="tong_tien" class="form-label">Tổng Tiền:</label>
            <input type="number" name="tong_tien" id="tong_tien" class="form-control" value="{{ $gioHang->tong_tien }}" step="0.01" required>
        </div>
        <div class="mb-3">
            <label for="id_nguoi_dung" class="form-label">Người Dùng:</label>
            <select name="id_nguoi_dung" id="id_nguoi_dung" class="form-select" required>
                @foreach ($nguoiDungs as $nguoiDung)
                    <option value="{{ $nguoiDung->id_nguoi_dung }}" {{ $nguoiDung->id_nguoi_dung == $gioHang->id_nguoi_dung ? 'selected' : '' }}>
                        {{ $nguoiDung->ho_ten }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="id_san_pham" class="form-label">Sản Phẩm:</label>
            <select name="id_san_pham" id="id_san_pham" class="form-select" required>
                @foreach ($sanPhams as $sanPham)
                    <option value="{{ $sanPham->id_san_pham }}" {{ $sanPham->id_san_pham == $gioHang->id_san_pham ? 'selected' : '' }}>
                        {{ $sanPham->ten_san_pham }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Cập Nhật</button>
    </form>
</div>
@endsection
