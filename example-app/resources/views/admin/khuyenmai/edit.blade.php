@extends('admin.layout');

@section('content')
<h1>Sửa danh muc</h1>
<br>
<form action="{{route('admin.khuyenmai.update' , $khuyenmai->id_khuyen_mai)}}" method="post">
    @csrf
    @method("PUT")
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input type="text" class="form-control"  placeholder="nhập name vào" name="ten_danh_muc" value="{{$khuyenmai->ten_danh_muc}}">
    </div>
    @error('ten_danh_muc')
    <div class="alert alert-danger"> {{$message}} </div>
    @enderror
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Mô tả</label>
        <input type="text" class="form-control"  placeholder=" nhập mổ tả vào" name="mo_ta" value="{{$khuyenmai->mo_ta}}">
    
      </div>
      @error('mo_ta')
      <div class="alert alert-danger"> {{$message}} </div>
      @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
