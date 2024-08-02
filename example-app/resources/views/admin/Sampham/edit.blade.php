
@extends('admin.layout');

@section('content')
<h1>Thêm mới Sản Phẩm</h1>
<br>
<form action="{{ route('admin.sampham.update', $sampham->id_san_pham) }}" method="POST" enctype="multipart/form-data">
  @method('PUT')
  @csrf
  <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Tên Sản Phẩm</label>
      <input type="text" class="form-control" placeholder="Nhập tên sản phẩm vào" name="ten_san_pham" value="{{ old('ten_san_pham', $sampham->ten_san_pham) }}">
  </div>
  @error('ten_san_pham')
  <div class="alert alert-danger"> {{$message}} </div>
  @enderror
  <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Hình ảnh</label>
      <input type="file" class="form-control" placeholder="Chọn hình ảnh mới" name="hinh_anh">
      <p class="form-control"><img src="{{ Storage::url($sampham->hinh_anh) }}" width="100" height="100" alt=""></p>
  </div>
  @error('hinh_anh')
  <div class="alert alert-danger"> {{$message}} </div>
  @enderror
  <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Giá</label>
      <input type="number" class="form-control" placeholder="Nhập giá sản phẩm" name="gia" value="{{ old('gia', $sampham->gia) }}">
  </div>
  @error('gia')
  <div class="alert alert-danger"> {{$message}} </div>
  @enderror
  <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Số Lượng</label>
      <input type="number" class="form-control" placeholder="Nhập số lượng sản phẩm" name="so_luong" value="{{ old('so_luong', $sampham->so_luong) }}">
  </div>
  @error('so_luong')
  <div class="alert alert-danger"> {{$message}} </div>
  @enderror
  <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Ngày Nhập Sản phẩm</label>
      <input type="date" class="form-control" placeholder="Chọn ngày nhập sản phẩm" name="ngay_nhap" value="{{ old('ngay_nhap', $sampham->ngay_nhap) }}">
  </div>
  @error('ngay_nhap')
  <div class="alert alert-danger"> {{$message}} </div>
  @enderror
  <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Mô tả</label>
      <textarea cols="30" class="form-control" rows="10" name="mo_ta">{{ old('mo_ta', $sampham->mo_ta) }}</textarea>
  </div>
  @error('mo_ta')
  <div class="alert alert-danger"> {{$message}} </div>
  @enderror
  <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Trạng Thái đợi hàng</label>
      <input type="number" class="form-control" placeholder="Nhập trạng thái đợi hàng" name="trang_thai" value="{{ old('trang_thai', $sampham->trang_thai) }}">
  </div>
  @error('trang_thai')
  <div class="alert alert-danger"> {{$message}} </div>
  @enderror
  <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Danh mục sản phẩm</label>
      <select name="id_danh_muc" class="form-control">
          @foreach($danhmucs as $danhmuc)
          <option value="{{ $danhmuc->id_danh_muc }}" {{ old('id_danh_muc', $sampham->id_danh_muc) == $danhmuc->id_danh_muc ? 'selected' : '' }}>
              {{ $danhmuc->ten_danh_muc }}
          </option>
          @endforeach
      </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
