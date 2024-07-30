@extends('admin.layout');
@section('content')
@if (session('success'))
<h1>{{session('success')}}</h1>
    
@endif
<h1>Bảng sảm phẩm </h1>
<a  class="btn btn-dark" href="{{ route('admin.sampham.create')}}">Thêm mới</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Tên Sảm Phẩm</th>
        <th scope="col">Hình ảnh</th>
        <th scope="col">Giá</th>
        <th scope="col">Số Lượng</th>
        <th scope="col">Ngày nhập hàng</th>
        <th scope="col">Danh mục</th>
        <th scope="col">Trang Thái</th>
        <th scope="col">acc</th>
      </tr>
    </thead>
    <tbody>
     
        @foreach ($sampham as $v)
       
        <tr>
            <td>{{ $v->id_san_pham  }}</td>
            <td>{{ $v->ten_san_pham  }}</td>
            <td><img  width="50px" height="50px" src="{{$v->hinh_anh}}" alt=""></td>
           
            <td>{{ $v->gia   }}$</td>
            <td>{{ $v->so_luong }}</td>
            <td>{{ $v->ngay_nhap }}</td>
            <td>{{ $v->mo_ta }}</td>
            <td>{{ $v->ten_danh_muc }}</td>
            <td>{{ $v->trang_thai }}</td>
           
            

            <td>
              <form action="{{route('admin.sampham.destroy',$v->id_san_pham)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button onclick="return confirm('Ban co muon xoa khong')" class="btn btn-danger" type="submit">Xoa</button>
              </form>
              <a href="{{route('admin.sampham.edit',$v->id_san_pham)}}" class="btn btn-primary">Sua</a>
          </td>
          
        </tr> 
    @endforeach
    </tbody>
@endsection