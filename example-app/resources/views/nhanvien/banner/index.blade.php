@extends('nhanvien.layout')

@section('content')
    <h1 class="mb-4">Danh Sách Banner</h1>
    <a href="{{ route('nhanvien.banner.create') }}" class="btn btn-primary mb-3">Tạo Banner Mới</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên Banner</th>
                <th>Hình Ảnh</th>
                <th>Mô Tả</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($banners as $banner)
                <tr>
                    <td>{{ $banner->id }}</td>
                    <td>{{ $banner->ten_banner }}</td>
                    <td>
                        @if ($banner->hinh_anh)
                            <img src="{{ asset('storage/public/banner/' . $banner->hinh_anh) }}" width="100" height="100">
                        @endif
                    </td>
                    <td>{{ $banner->mo_ta }}</td>
                    <td>
                        <a href="{{ route('nhanvien.banner.edit', $banner->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                        <form action="{{ route('nhanvien.banner.destroy', $banner->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
