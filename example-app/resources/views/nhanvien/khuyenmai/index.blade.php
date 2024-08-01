@extends('admin.layout')

@section('content')
@if (session('success'))
    {{ session('success') }}
@endif
@if (session('error'))
    {{ session('error') }}
@endif

<h1>Danh sách khuyến mãi</h1>
<br>
<a href="{{ route('nhanvien.khuyenmai.create') }}" class="btn btn-success">Thêm khuyến mãi mới</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên khuyến mãi</th>
            <th>Phần trăm giảm giá</th>
            <th>Mô tả</th>
            <th>Ngày bắt đầu</th>
            <th>Ngày kết thúc</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($listKm as $km)
            <tr>
                <td>{{ $km->id_khuyen_mai }}</td>
                <td>{{ $km->ten_khuyen_mai }}</td>
                <td>{{ $km->phan_tram_giam_gia }}%</td>
                <td>{{ $km->mo_ta }}</td>
                <td>{{ $km->ngay_bat_dau }}</td>
                <td>{{ $km->ngay_ket_thuc }}</td>
                <td>
                    <a href="{{ route('nhanvien.khuyenmai.edit', $km->id_khuyen_mai) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('nhanvien.khuyenmai.destroy', $km->id_khuyen_mai) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
