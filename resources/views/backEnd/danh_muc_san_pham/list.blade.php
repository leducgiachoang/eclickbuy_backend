@extends('template.backend')

@section('container')
<table class="table table-hover">
    <thead>
        <tr>
            <td>id</td>
            <td>Tên danh mục</td>
            <td>hình ảnh</td>
        </tr>
    </thead>

    <tbody>
        @foreach ($danhsach as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->ten_danh_muc }}</td>
            <td>{{ $item->hinh_anh }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
