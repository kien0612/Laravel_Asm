@extends('admin.layout');
@section('content')
@if (session('success'))
<h1>{{session('success')}}</h1>
    
@endif
<h1>Bảng khuyễn mãi </h1>
<a  class="btn btn-dark" href="{{ route('admin.khuyenmai.create')}}">Theem moi</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Mã khuyễn mại</th>
        <th scope="col">Phần trăn giản giá</th>
        <th scope="col">Mô tả </th>
        <th scope="col">Ngày bắt đầu</th>
        <th scope="col">Ngày kết thức</th>
        <th scope="col">acc</th>
      </tr>
    </thead>
    <tbody>
     
        @foreach ($khuyenmai as $v)
       
        <tr>
            <td>{{ $v->id_khuyen_mai }}</td>
            <td>{{ $v->ten_khuyen_mai }}</td>
           
            <td>{{ $v->phan_tram_giam_gia }}%</td>
            <td>{{ $v->mo_ta }}</td>
            <td>{{ $v->ngay_bat_dau }}</td>
            <td>{{ $v->ngay_ket_thuc }}</td>

            <td>
              <form action="{{route('admin.khuyenmai.destroy',$v->id_khuyen_mai)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button onclick="return confirm('Ban co muon xoa khong')" class="btn btn-danger" type="submit">Xoa</button>
              </form>
              <a href="{{route('admin.khuyenmai.edit',$v->id_khuyen_mai)}}" class="btn btn-primary">Sua</a>
          </td>
          
        </tr> 
    @endforeach
    </tbody>
@endsection