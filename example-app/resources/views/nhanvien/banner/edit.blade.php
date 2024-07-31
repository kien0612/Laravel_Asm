@extends('nhanvien.layout')

@section('content')
    <h1 class="mb-4">Sửa Banner</h1>
    <form action="{{ route('nhanvien.banner.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="ten_banner" class="form-label">Tên Banner:</label>
            <input type="text" name="ten_banner" id="ten_banner" class="form-control" value="{{ $banner->ten_banner }}" required>
        </div>
        <div class="mb-3">
            <label for="hinh_anh" class="form-label">Hình Ảnh:</label>
            <input type="file" name="hinh_anh" id="hinh_anh" class="form-control">
            @if ($banner->hinh_anh)
                <img src="{{ asset('storage/images/' . $banner->hinh_anh) }}" width="100" class="mt-2">
            @endif
        </div>
        <div class="mb-3">
            <label for="mo_ta" class="form-label">Mô Tả:</label>
            <textarea name="mo_ta" id="mo_ta" class="form-control" required>{{ $banner->mo_ta }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Cập Nhật</button>
    </form>
    <a href="{{ route('nhanvien.banner.index') }}" class="btn btn-secondary mt-3">Quay Lại Danh Sách</a>
@endsection
