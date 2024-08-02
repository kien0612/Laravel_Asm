@extends('nhanvien.layout')

@section('content')
<h1>Sửa Hóa Đơn</h1>
<form action="{{ route('nhanvien.hoa_don.update', $hoaDon->id_hoa_don) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="ngay_dat" class="form-label">Ngày Đặt:</label>
        <input type="date" name="ngay_dat" id="ngay_dat" class="form-control" value="{{ $hoaDon->ngay_dat }}" required>
    </div>
    <div class="mb-3">
        <label for="tong_tien" class="form-label">Tổng Tiền:</label>
        <input type="number" name="tong_tien" id="tong_tien" class="form-control" value="{{ $hoaDon->tong_tien }}" step="0.01" required>
    </div>
    <div class="mb-3">
        <label for="so_luong" class="form-label">Số Lượng:</label>
        <input type="number" name="so_luong" id="so_luong" class="form-control" value="{{ $hoaDon->so_luong }}" required>
    </div>
    <div class="mb-3">
        <label for="id_nguoi_dung" class="form-label">Người Dùng:</label>
        <select name="id_nguoi_dung" id="id_nguoi_dung" class="form-select" required>
            @foreach ($nguoiDungs as $nguoiDung)
                <option value="{{ $nguoiDung->id_nguoi_dung }}" {{ $nguoiDung->id_nguoi_dung == $hoaDon->id_nguoi_dung ? 'selected' : '' }}>
                    {{ $nguoiDung->ho_ten }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="id_khuyen_mai" class="form-label">Khuyến Mãi:</label>
        <select name="id_khuyen_mai" id="id_khuyen_mai" class="form-select" required>
            @foreach ($khuyenMais as $khuyenMai)
                <option value="{{ $khuyenMai->id_khuyen_mai }}" {{ $khuyenMai->id_khuyen_mai == $hoaDon->id_khuyen_mai ? 'selected' : '' }}>
                    {{ $khuyenMai->ten_khuyen_mai }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="id_san_pham" class="form-label">Sản Phẩm:</label>
        <select name="id_san_pham" id="id_san_pham" class="form-select" required>
            @foreach ($sanPhams as $sanPham)
                <option value="{{ $sanPham->id_san_pham }}" {{ $sanPham->id_san_pham == $hoaDon->id_san_pham ? 'selected' : '' }}>
                    {{ $sanPham->ten_san_pham }}
                </option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Cập Nhật</button>
</form>
@endsection
