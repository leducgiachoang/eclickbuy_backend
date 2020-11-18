@extends('backEnd.san-pham.template')

@section('content_sanpham')
<div class="card">
    <div class="card-header">
        Danh sách sản phẩm
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên Sản phẩm</th>
                    <th>Hình ảnh</th>
                    <th>Số lượng</th>
                    <th>Giá sản phẩm</th>
                    <th>Giá khuyến mãi</th>
                    <th>Tùy chọn</th>
                </tr>
            </thead>
            <tbody>
                <?php $a=1 ?>
                @foreach ($db_sps as $db_sp)
                <tr>
                    <td>{{ $a }}</td>
                    <td>{{ $db_sp->ten_san_pham }}</td>
                    <td><img width="50px" src="images/producs/{{ $db_sp->hinh_anh }}" alt=""></td>
                    <td>{{ $db_sp->so_luong }}</td>
                    <td>
                        @if ($db_sp->gia_sale != '' )
                        {{ number_format($db_sp->gia_sale, 3,'.', ',') }} <img width="22" src="images/dong.png" alt="">

                        @else
                        {{ number_format($db_sp->gia_goc, 3,'.', ',') }} <img width="22" src="images/dong.png" alt="">

                        @endif
                    </td>
                    <td>

                        @if ($db_sp->id_khuyen_mai == 1)
                        <div class="badge badge-pill badge-secondary">Không áp dụng</div>
                        @else
                        {{ $db_sp->khuyenmai->gia_tri }} %
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-outline-success" href="{{ route('chinh_san_pham_get', ['id'=> $db_sp->id]) }}"><i class="fas fa-edit"></i></a>
                        <a class="btn btn-warning" href="{{ route('xoa_san_pham', ['id'=> $db_sp->id]) }}"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                <?php $a++ ?>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{ $db_sps->links() }}
    </div>
</div>
@endsection
