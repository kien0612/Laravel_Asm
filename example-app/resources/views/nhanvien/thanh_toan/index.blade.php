@extends('nhanvien.layout')

@section('content')
<div class="container">
    <h1 class="mb-4">Danh Sách Thanh Toán</h1>
    <a href="{{ route('nhanvien.thanh_toan.create') }}" class="btn btn-primary mb-3">Tạo Thanh Toán Mới</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Phương Thức Thanh Toán</th>
                <th>Thành Tiền</th>
                <th>Ngày Thanh Toán</th>
                <th>Hóa Đơn ID</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($thanhToans as $thanhToan)
                <tr>
                    <td>{{ $thanhToan->id_thanh_toan }}</td>
                    <td>{{ $thanhToan->phuong_thuc_thanh_toan }}</td>
                    <td>{{ number_format($thanhToan->thanh_tien, 2) }} VNĐ</td>
                    <td>{{ $thanhToan->ngay_thanh_toan }}</td>
                    <td>{{ $thanhToan->id_hoa_don }}</td>
                    <td>
                        <a href="{{ route('nhanvien.thanh_toan.edit', $thanhToan->id_thanh_toan) }}" class="btn btn-warning btn-sm">Sửa</a>
                        <form action="{{ route('nhanvien.thanh_toan.destroy', $thanhToan->id_thanh_toan) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
