@extends('nhanvien.layout');
@section('title', 'Danh Sách Danh Mục')

@section('content')
<a class="btn btn-dark" href="{{ route('nhanvien.danhmuc.create') }}">Them moi</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên danh mục</th>
            <th scope="col">Mô tả</th>
            <th scope="col">Thao tác</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($listDm as $item)

            <tr>
                <td>{{ $item->id_danh_muc }}</td>
                <td>{{ $item->ten_danh_muc }}</td>
                <td>{{ $item->mo_ta }}</td>
                <td>
                    <form action="{{route('nhanvien.danhmuc.destroy', $item->id_danh_muc)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Ban co muon xoa khong')" class="btn btn-danger"
                            type="submit">Xoa</button>
                    </form>
                    <a href="{{route('nhanvien.danhmuc.edit', $item->id_danh_muc)}}" class="btn btn-primary">Sua</a>
                </td>

            </tr>
        @endforeach
    </tbody>
</table>

@endsection