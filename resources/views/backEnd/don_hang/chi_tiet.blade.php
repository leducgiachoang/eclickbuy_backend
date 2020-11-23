@extends('backEnd.don_hang.template')

@section('don_hang_template')


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                Chi tiết đơn hàng #{{ $id }}
            </div>
            <div class="card-body">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th>Họ và tên khách hàng</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Ngày đặt hàng</th>
                            <th>Trạng thái</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($db_chi_tiets as $db_chi_tiet)
                        <tr>
                            <td>{{ $db_chi_tiet->taikhoan->ho_ten }}</td>
                            <td>{{ $db_chi_tiet->taikhoan->so_dien_thoai }}</td>
                            <td>{{ $db_chi_tiet->dia_chi_noi_nhan }}</td>
                            <td>{{ date("d".' \T\h\á\n\g'." m". ' \N\ă\m'." Y", strtotime($db_chi_tiet->ngay_tao)) }}</td>
                            <td>
                                <?php $numberTinhTrang=$db_chi_tiet->tinh_trang ?>
                                @if ($numberTinhTrang == 0)
                                <span class="badge badge-pill badge-warning">đơn hàng đang xử lý</span>
                                @elseif($numberTinhTrang == 1)
                                <span class="badge badge-pill badge-info">Đơn hàng đang giao</span>
                                @elseif($numberTinhTrang == 2)
                                <span class="badge badge-pill badge-dark">Đơn hàng đã hủy</span>
                                @elseif($numberTinhTrang == 3)
                                <span class="badge badge-pill badge-secondary">Đơn hàng đổi/ trả</span>
                                @elseif($numberTinhTrang == 4)
                                <span class="badge badge-pill badge-success">Đơn hàng đã giao</span>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                Nội dung ghi chú
                            </div>
                            <div class="card-body">
                                <div class="noi_dung_ghi_chu">
                                    {{ $db_chi_tiet->loi_nhan  }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                Chi phí
                            </div>

                            <div class="card-body">
                                <table class="table table-borderless">
                                    <tr>
                                        <th>Tạm tính: </th>
                                        <td>{{ number_format($db_chi_tiet->tong_tien + (($db_chi_tiet->tong_tien)*($db_chi_tiet->giftcode->gia_tri)/100), 2,'.', ',') }} đ</td>
                                    </tr>
                                    <tr>
                                        <th>Phí vận chuyển: </th>
                                        <td>30,000 đ</td>
                                    </tr>
                                    <tr>
                                        <th>Mã giảm giá: </th>
                                        <td>
                                            @if ($db_chi_tiet->id_giftcode == 1)
                                            Không áp dụng
                                            @else
                                            {{ $db_chi_tiet->giftcode->code }} (-{{ number_format(($db_chi_tiet->tong_tien)*($db_chi_tiet->giftcode->gia_tri)/100, 2,'.', ',') }} đ)

                                            @endif
                                        </td>
                                    </tr>

                                </table>
                            </div>
                            <div class="card-footer">
                                Tổng cộng: {{ number_format($db_chi_tiet->tong_tien, 2,'.', ',') }} đ
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                @if ($numberTinhTrang == 0)
                {{-- đơn hàng đang xử lý --}}
                <a href="{{ route('CapNhapTrinhTrangDonHang',['id'=> base64_encode(base64_encode(base64_encode(base64_encode($db_chi_tiet->id)))), 'tinhTrang'=> base64_encode(base64_encode(base64_encode(base64_encode(1))))]) }}"><button type="button" class="btn btn-primary">Xác nhận đang giao hàng</button></a>
                @elseif($numberTinhTrang == 1)
                {{-- Đơn hàng đang giao --}}
                <a href="{{ route('CapNhapTrinhTrangDonHang',['id'=> base64_encode(base64_encode(base64_encode(base64_encode($db_chi_tiet->id)))), 'tinhTrang'=> base64_encode(base64_encode(base64_encode(base64_encode(4))))]) }}"><button type="button" class="btn btn-primary">Xác nhận đã giao hàng</button></a>

                @elseif($numberTinhTrang == 4)
                {{-- Đơn hàng đã giao --}}
                <div class="alert alert-success"><img width="30" src="images/confirm.png" alt=""> Đơn hàng đã giao thành công</div>
                @endif

            </div>
        </div>
    </div>
</div>


<div class="card">
    <div class="card-body">
        <table class="table table-borderless">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Đơn giá</th>
                    <th>Tổng</th>
                    <th>Xem sản phẩm</th>

                </tr>
            </thead>
            <tbody>
                <?php $a = 1 ?>
                @foreach ($db_chi_tiet->sanpham as $chitiet)
                <tr>
                    <td>{{ $a }}</td>
                    <td>{{ $chitiet->ten_san_pham }}</td>
                    <td>{{ $chitiet->pivot->so_luong }}</td>
                    <td>{{ number_format($chitiet->pivot->don_gia, 3,'.', ',') }} <img width="22" src="images/dong.png" alt=""></td>
                    <td>{{ number_format($chitiet->pivot->don_gia*$chitiet->pivot->so_luong, 3,'.', ',') }} <img width="22" src="images/dong.png" alt=""></td>
                    <th></th>
                </tr>
                <?php $a++ ?>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection





