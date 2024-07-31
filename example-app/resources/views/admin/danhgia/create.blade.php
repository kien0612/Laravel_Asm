@extends('admin.layout')

@section('content')
    <h1>Chỉnh Sửa Đánh Giá</h1>
    <br>
    <form action="{{ route('admin.danhgia.update', $danh_gia->id_danh_gia) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="id_nguoi_dung" class="form-label">ID Người Dùng</label>
            <input type="text" class="form-control" id="id_nguoi_dung" name="id_nguoi_dung"
                value="{{ old('id_nguoi_dung', $danh_gia->id_nguoi_dung) }}" placeholder="Nhập ID người dùng vào" required>
            @error('id_nguoi_dung')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="id_san_pham" class="form-label">ID Sản Phẩm</label>
            <input type="text" class="form-control" id="id_san_pham" name="id_san_pham"
                value="{{ old('id_san_pham', $danh_gia->id_san_pham) }}" placeholder="Nhập ID sản phẩm vào" required>
            @error('id_san_pham')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="danh_gia_sao" class="form-label">Đánh Giá Sao</label>
            <input type="number" class="form-control" id="danh_gia_sao" name="danh_gia_sao"
                value="{{ old('danh_gia_sao', $danh_gia->danh_gia_sao) }}" min="1" max="5"
                placeholder="Nhập số sao (1-5)" required>
            @error('danh_gia_sao')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="noi_dung" class="form-label">Nội Dung</label>
            <textarea class="form-control" id="noi_dung" name="noi_dung" placeholder="Nhập nội dung đánh giá vào" required>{{ old('noi_dung', $danh_gia->noi_dung) }}</textarea>
            @error('noi_dung')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="ngay_danh_gia" class="form-label">Ngày Đánh Giá</label>
            <input type="date" class="form-control" id="ngay_danh_gia" name="ngay_danh_gia"
                value="{{ old('ngay_danh_gia', $danh_gia->ngay_danh_gia) }}" required>
            @error('ngay_danh_gia')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Cập Nhật Đánh Giá</button>
    </form>
@endsection
