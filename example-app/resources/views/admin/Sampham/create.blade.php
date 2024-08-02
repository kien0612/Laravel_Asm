
@extends('admin.layout');

@section('content')
<h1>Thêm mới Sản Phẩm</h1>
<br>
<form action="{{route('admin.sampham.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Tên Sản Phẩm</label>
      <input type="text" class="form-control"  placeholder="nhập tên sản phẩm vào" name="ten_san_pham" value=" {{old('ten_san_pham')}}">
    </div>
    @error('ten_san_pham')
    <div class="alert alert-danger"> {{$message}} </div>
    @enderror
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Hình ảnh</label>
      <input type="file" class="form-control"  placeholder="nhập name vào" name="hinh_anh">
    </div>
    @error('hinh_anh')
    <div class="alert alert-danger"> {{$message}} </div>
    @enderror
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Giá</label>
      <input type="number" class="form-control"  placeholder="nhập name vào" name="gia" value=" {{old('gia')}}">
    </div>
    @error('gia')
    <div class="alert alert-danger"> {{$message}} </div>
    @enderror
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Số Lượng</label>
      <input type="number" class="form-control"  placeholder="nhập name vào" name="so_luong" value=" {{old('so_luong')}}">
    </div>
    @error('so_luong')
    <div class="alert alert-danger"> {{$message}} </div>
    @enderror
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Ngày Nhập Sản phẩm </label>
      <input type="date" class="form-control"  placeholder="nhập name vào" name="ngay_nhap" value=" {{old('ngay_nhap')}}">
    </div>
    @error('ngay_nhap')
    <div class="alert alert-danger"> {{$message}} </div>
    @enderror
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Mô tả</label>
      <textarea cols="30"  class="form-control"  rows="10" name="mo_ta" value=" {{old('mo_ta')}}"></textarea>
    </div>
    @error('mo_ta')
    <div class="alert alert-danger"> {{$message}} </div>
    @enderror

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Trang Thái đơi hàng</label>
      <input type="number" class="form-control"  placeholder="nhập name vào" name="trang_thai" value=" {{old('trang_thai')}}">
    </div>
    @error('trang_thai')
    <div class="alert alert-danger"> {{$message}} </div>
    @enderror

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Đanh mục sản phẩm </label>
   <select name="id_danh_muc" class="form-control" id="">
   @foreach($danhmucs as $v)
    <option value="{{$v->id_danh_muc}}">{{$v->ten_danh_muc}}    
       @if ($v->id_danh_muc == old('id_danh_muc')) selected
      @endif>{{$v->ten_danh_muc}}</option></option>
    @endforeach
   
   </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
