@extends('nhanvien.layout')

@section('title')
Danh sách sản phẩm
@endsection

@section('content')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<a href="{{ route('nhanvien.sanpham.create') }}" class="btn btn-primary">Thêm mới sản phẩm</a>

<table class="table mt-3">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên sản phẩm</th>
            <th scope="col">Giá</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Hình ảnh</th>
            <th scope="col">Danh mục</th>
            <th scope="col">Thao tác</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($listSp as $item)
            <tr>
                <td>{{ $item->id_san_pham }}</td>
                <td>{{ $item->ten_san_pham }}</td>
                <td>{{ number_format($item->gia, 2) }}</td>
                <td>{{ $item->so_luong }}</td>
                <td>
                    @if (!isset($item->hinh_anh) || $item->hinh_anh === '')
                        Không có ảnh
                    @else
                        <img src="{{ Storage::url($item->hinh_anh) }}" alt="{{ $item->ten_san_pham }}" style="max-width: 100px;">
                    @endif
                </td>
                <td>{{ $item->ten_danh_muc}}</td>
                <td>
                    <form action="{{ route('nhanvien.sanpham.destroy', ['id' => $item->id_san_pham]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                    </form>
                    <a href="{{ route('nhanvien.sanpham.edit', ['id' => $item->id_san_pham]) }}" class="btn btn-warning">Sửa</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $listSp->links() }}
@endsection
