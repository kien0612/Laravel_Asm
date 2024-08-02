@extends('nhanvien.layout')

@section('content')
<div class="container">
    <h1 class="mb-4">Tạo Thanh Toán Mới</h1>
    <form action="{{ route('nhanvien.thanh_toan.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="phuong_thuc_thanh_toan" class="form-label">Phương Thức Thanh Toán:</label>
            <input type="text" name="phuong_thuc_thanh_toan" id="phuong_thuc_thanh_toan" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="thanh_tien" class="form-label">Thành Tiền:</label>
            <input type="number" name="thanh_tien" id="thanh_tien" class="form-control" step="0.01" required>
        </div>
        <div class="mb-3">
            <label for="ngay_thanh_toan" class="form-label">Ngày Thanh Toán:</label>
            <input type="date" name="ngay_thanh_toan" id="ngay_thanh_toan" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="id_hoa_don" class="form-label">Hóa Đơn ID:</label>
            <input type="number" name="id_hoa_don" id="id_hoa_don" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
</div>
@endsection
