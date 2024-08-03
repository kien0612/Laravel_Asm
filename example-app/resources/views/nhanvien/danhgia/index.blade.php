@extends('nhanvien.layout')

@section('title', 'Danh Sách Đánh Giá')

@section('content')
    <h2>Danh Sách Đánh Giá</h2>
    <a class="btn btn-dark" href="{{ route('nhanvien.danhgia.create') }}">Tạo Đánh Giá Mới</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Users</th>
                <th>ID Sản Phẩm</th>
                <th>Đánh Giá Sao</th>
                <th>Nội Dung</th>
                <th>Ngày Đánh Giá</th>
                <th>Hành Động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($danh_gias as $danh_gia)
            <tr>
                <td>{{ $danh_gia->id_danh_gia }}</td>
                <td>{{ $danh_gia->id_nguoi_dung }}</td>
                <td>{{ $danh_gia->id_san_pham }}</td>
                <td>{{ $danh_gia->danh_gia_sao }}</td>
                <td style="width: 600px">{{ $danh_gia->noi_dung }}</td>
                <td style="width: 100px">{{ $danh_gia->ngay_danh_gia }}</td>
                <td>
                    <a href="{{ route('nhanvien.danhgia.edit', $danh_gia->id_danh_gia) }}" class="btn btn-primary">Chỉnh Sửa</a>
                    <form action="{{ route('nhanvien.danhgia.destroy', $danh_gia->id_danh_gia) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Bạn có muốn xóa không?')" class="btn btn-danger"
                                type="submit">Xóa</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
