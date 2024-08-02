@extends('nhanvien.layout')

@section('content')
<div class="container">
    <h1 class="mb-4">Danh Sách Giỏ Hàng</h1>
    <a href="{{ route('nhanvien.gio_hang.create') }}" class="btn btn-primary mb-3">Tạo Giỏ Hàng Mới</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Số Lượng</th>
                <th>Tổng Tiền</th>
                <th>ID Người Dùng</th>
                <th>ID Sản Phẩm</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($gioHangs as $gioHang)
                <tr>
                    <td>{{ $gioHang->id_gio_hang }}</td>
                    <td>{{ $gioHang->so_luong }}</td>
                    <td>{{ number_format($gioHang->tong_tien, 2) }} VNĐ</td>
                    <td>{{ $gioHang->nguoiDung->ho_ten ?? 'N/A' }}</td>
                    <td>{{ $gioHang->sanPham->ten_san_pham ?? 'N/A' }}</td>
                    <td>
                        <a href="{{ route('nhanvien.gio_hang.edit', $gioHang->id_gio_hang) }}" class="btn btn-warning btn-sm">Sửa</a>
                        <form action="{{ route('nhanvien.gio_hang.destroy', $gioHang->id_gio_hang) }}" method="POST" style="display:inline;">
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
