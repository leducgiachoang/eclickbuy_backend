@extends('backEnd.danh-gia.template')

@section('danh_gia_template')
<div class="card">
    <div class="card-header">
        Danh sách đánh giá sản phẩm
    </div>
    <div class="card-body">
        <table class="table table-borderless">
            <thead>
              <tr>
                <th scope="col">STT</th>
                <th scope="col">Sản phẩm</th>
                <th scope="col">Tài khoản</th>
                <th scope="col">Số sao</th>
                <th scope="col">Nội dung</th>
                <th scope="col">Ngày tạo</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                <?php $a=1 ?>
            @foreach ($danhGias as $danhGia)
              <tr>
                <th scope="row">{{ $a }}</th>
                <td><a href="{{ route('ChiTietSanPham', ['ten_san_pham'=>$danhGia->sanpham->ten_san_pham]) }}">{{ $danhGia->sanpham->ten_san_pham }}</a></td>
                <td>{{ $danhGia->taikhoan->ho_ten }}</td>
                <style>
                    .sao i{
                        color: yellow
                    }
                </style>
                <td class="sao">
                    @if ($danhGia->so_sao == 1)
                    <i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>(1)
                    @elseif($danhGia->so_sao == 2)
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>(2)
                    @elseif($danhGia->so_sao == 3)
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>(3)
                    @elseif($danhGia->so_sao == 4)
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>(4)
                    @else
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>(5)

                    @endif
                </td>
                <td><button type="button" class="nut_get_noidung btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    <input type="hidden" class="val_danh_gia" value="{{ $danhGia->noi_dung }}">
                    <input type="hidden" class="val_name" value="{{ $danhGia->taikhoan->ho_ten }}">
                    Xem
                </button></td>
                <td>
                    {{ date("d".' \T\h\á\n\g'." m". ' \N\ă\m'." Y", strtotime($danhGia->ngay_tao)) }}
                </td>
                <td>
                    <a class="btn btn-warning" onclick="return confirm('Bạn có chắc muốn xóa đánh giá này?')" href="{{ route('XoaDanhGia_get', ['id'=>$danhGia->id]) }}"><i class="fas fa-trash-alt"></i></a>
                </td>
              </tr>
              <?php $a++ ?>
            @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection
