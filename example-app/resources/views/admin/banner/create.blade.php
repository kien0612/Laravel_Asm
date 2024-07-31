
@extends('admin.layout');

@section('content')
<h1>Thêm mới Banner</h1>
<br>
<form action="{{route('admin.banner.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input type="text" class="form-control"  placeholder="nhập name vào" name="ten_banner">
    </div>
    @error('ten_banner')
    <div class="alert alert-danger"> {{$message}} </div>
    @enderror
    <div class="mb-3">
        <label class="form-label">Image</label>
        <input type="file" class="form-control" id="exampleFormControlInput1" name="hinh_anh">
    </div>
    @error('hinh_anh')
    <div class="alert alert-danger"> {{$message}} </div>
    @enderror
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Mô tả</label>
        <input type="text" class="form-control"  placeholder=" nhập mổ tả vào" name="mo_ta">
    
      </div>
      @error('mo_ta')
      <div class="alert alert-danger"> {{$message}} </div>
      @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
