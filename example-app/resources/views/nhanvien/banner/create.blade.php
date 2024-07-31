@extends('nhanvien.layout')

@section('content')
    <h1 class="mb-4">Tạo Banner Mới</h1>
    <form action="{{ route('nhanvien.banner.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="ten_banner" class="form-label">Tên Banner:</label>
            <input type="text" name="ten_banner" id="ten_banner" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="hinh_anh" class="form-label">Hình Ảnh:</label>
            <input type="file" name="hinh_anh" id="hinh_anh" class="form-control">
        </div>
        <div class="mb-3">
            <label for="mo_ta" class="form-label">Mô Tả:</label>
            <textarea name="mo_ta" id="mo_ta" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
    <a href="{{ route('nhanvien.banner.index') }}" class="btn btn-secondary mt-3">Quay Lại Danh Sách</a>
@endsection
