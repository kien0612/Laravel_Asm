@extends('admin.layout');

@section('content')
    <h1>Chỉnh sửa Banner</h1>
    <form action="{{ route('admin.banner.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="ten_banner">Tên Banner:</label>
            <input type="text" name="ten_banner" id="ten_banner" value="{{ old('ten_banner', $banner->ten_banner) }}"
                class="form-control">
            @error('ten_banner')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="hinh_anh">Hình Ảnh:</label>
            <input type="file" name="hinh_anh" id="hinh_anh" class="form-control">
            @if ($banner->hinh_anh)
                <img src="{{ asset('storage/' . $banner->hinh_anh) }}" alt="Hình Banner" width="100">
            @endif
            @error('hinh_anh')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="mo_ta">Mô Tả:</label>
            <textarea name="mo_ta" id="mo_ta" class="form-control">{{ old('mo_ta', $banner->mo_ta) }}</textarea>
            @error('mo_ta')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Cập Nhật</button>
    </form>
@endsection
