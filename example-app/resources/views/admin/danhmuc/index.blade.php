@extends('admin.layout');
@section('content')
<a  class="btn btn-dark" href="{{ route('danhmuc.create')}}">Theem moi</a>
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
     
        @foreach ($danhmuc as $v)
       
        <tr>
            <td>{{ $v->id_danh_muc }}</td>
            <td>{{ $v->ten_danh_muc }}</td>
           
            <td>{{ $v->mo_ta }}</td>
            <td>
              <form action="{{route('danhmuc.destroy',$v->id_danh_muc)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button onclick="return confirm('Ban co muon xoa khong')" class="btn btn-danger" type="submit">Xoa</button>
              </form>
              <a href="{{route('danhmuc.edit',$v->id_danh_muc)}}" class="btn btn-primary">Sua</a>
          </td>
          
        </tr> 
    @endforeach
    </tbody>
@endsection