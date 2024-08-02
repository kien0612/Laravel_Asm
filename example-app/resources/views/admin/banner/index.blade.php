@extends('admin.layout');
@section('content')
    <a class="btn btn-dark" href="{{ route('admin.banner.create') }}">Theem moi</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Mô tả</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($banner as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->ten_banner }}</td>

                    <td>
                        @if (!isset($item->hinh_anh))
                            Không có ảnh
                        @else
                            <img src="{{ Storage::url($item->hinh_anh) }}">
                        @endif
                    </td>

                    <td>{{ $item->mo_ta }}</td>
                    <td>
                        <form action="{{ route('admin.banner.destroy', $item->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Ban co muon xoa khong')" class="btn btn-danger"
                                type="submit">Xoa</button>
                        </form>
                        <a href="{{ route('admin.banner.edit', $item->id) }}" class="btn btn-primary">Sua</a>
                    </td>

                </tr>
            @endforeach
        </tbody>
    @endsection
