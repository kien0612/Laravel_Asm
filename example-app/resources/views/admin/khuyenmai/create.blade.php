
@extends('admin.layout');

@section('content')
<h1>Thêm mới mã khuyễn mãi</h1>
<br>
<form action="{{route('admin.khuyenmai.store')}}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Mã khuyễn mãi </label>
      <input type="text" class="form-control"  placeholder="nhập name vào" name="ten_khuyen_mai">
    </div>
    @error('ten_khuyen_mai')
    <div class="alert alert-danger"> {{$message}} </div>
    @enderror
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Phần trắn khuyễn mãi </label>
      <input type="number" class="form-control"  placeholder="nhập name vào" name="phan_tram_giam_gia">
    </div>
    @error('phan_tram_giam_gia')
    <div class="alert alert-danger"> {{$message}} </div>
    @enderror
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Mô tả</label>
      <input type="text" class="form-control"  placeholder="nhập name vào" name="mo_ta">
    </div>
    @error('mo_ta')
    <div class="alert alert-danger"> {{$message}} </div>
    @enderror
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Ngày bắt đầu</label>
      <input type="date" class="form-control"  placeholder="nhập name vào" name="ngay_bat_dau">
    </div>
    @error('ngay_bat_dau')
    <div class="alert alert-danger"> {{$message}} </div>
    @enderror
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Ngày kết thúc </label>
      <input type="date" class="form-control"  placeholder="nhập name vào" name="ngay_ket_thuc">
    </div>
    @error('ngay_ket_thuc')
    <div class="alert alert-danger"> {{$message}} </div>
    @enderror
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
