@extends('admin.layout');
@section('content')
<h1>Bảng tài khoản</h1>
<a  class="btn btn-dark" href="{{ route('admin.taikhoan.create')}}">Thêm mới moi</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">Mô tả</th>
        <th scope="col">acc</th>
      </tr>
    </thead>
    <tbody>
     
        @foreach ($taikhoan as $v)
       
        <tr>
            <td>{{ $v->id }}</td>
            <td>{{ $v->name }}</td>
            <td>{{ $v->email  }}</td>
            <td>{{ $v->email_verified_at }}</td>
            <td>{{ $v->password }}</td>
            <td>{{ $v->so_dien_thoai  }}</td>
            <td>{{ $v->dia_chi }}</td>
            <td>{{ $v->vai_tro  }}</td>
    
           
            <td>{{ $v->remember_token }}</td>
            <td>
              <form action="{{route('admin.taikhoan.destroy',$v->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button onclick="return confirm('Ban co muon xoa khong')" class="btn btn-danger" type="submit">Xoa</button>
              </form>
              <a href="{{route('admin.taikhoan.edit',$v->id)}}" class="btn btn-primary">Sua</a>
          </td>
          
        </tr> 
    @endforeach
    </tbody>
@endsection