@extends('nhanvien.layout')

@section('content')
<h1>Danh Sách Hóa Đơn</h1>
<a href="{{ route('nhanvien.hoa_don.create') }}" class="btn btn-primary">Tạo Hóa Đơn Mới</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Ngày Đặt</th>
            <th>Tổng Tiền</th>
            <th>Số Lượng</th>
            <th>Người Dùng</th>
            <th>Khuyến Mãi</th>
            <th>Sản Phẩm</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($hoaDons as $hoaDon)
            <tr>
                <td>{{ $hoaDon->id_hoa_don }}</td>
                <td>{{ $hoaDon->ngay_dat }}</td>
                <td>{{ $hoaDon->tong_tien }}</td>
                <td>{{ $hoaDon->so_luong }}</td>
                <td>{{ $hoaDon->nguoiDung->ho_ten ?? 'N/A' }}</td>
                <td>{{ $hoaDon->khuyenMai->ten_khuyen_mai ?? 'N/A' }}</td>
                <td>{{ $hoaDon->sanPham->ten_san_pham ?? 'N/A' }}</td>
                <td>
                    <a href="{{ route('nhanvien.hoa_don.edit', $hoaDon->id_hoa_don) }}" class="btn btn-warning btn-sm">Sửa</a>
                    <form action="{{ route('nhanvien.hoa_don.destroy', $hoaDon->id_hoa_don) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
