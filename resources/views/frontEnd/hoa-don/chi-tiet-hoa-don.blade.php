@extends('frontEnd.hoa-don.template')
@section('Mydon_hang_template')
@foreach ($dbHoaDonsByid as $dbHoaDonByid)

<h4>Chi tiết đơn hàng</h4>
<div class="card">
    <div class="border-secondary bg-secondary text-white card-header">
        <div class="float-left">
            <h6>Đơn hàng #{{ $dbHoaDonByid->id }}</h6>
            Đặt ngày: {{ date("d".' \T\h\á\n\g'." m". ' \N\ă\m'." Y", strtotime($dbHoaDonByid->ngay_tao)) }}
        </div>
        <div class="float-right">
            <h5>Tổng cộng: {{ number_format($dbHoaDonByid->tong_tien, 2,'.', ',') }} đ</h5>
        </div>
    </div>
    <div class="card-body p-0">
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-borderless">
                    <tbody>
                        @foreach ($dbHoaDonByid->sanpham as $sanphamx)
                      <tr>
                        <th><img width="60" src="../images/producs/{{ $sanphamx->hinh_anh }}" alt=""></th>
                        <td>{{ $sanphamx->ten_san_pham }}</td>
                        <td>Số lượng: {{ $sanphamx->pivot->so_luong }}</td>
                        <td>Đơn giá: {{ number_format(($sanphamx->pivot->don_gia)*($sanphamx->pivot->so_luong), 2,'.', ',') }} đ</td>
                        <td>
                            <?php $numberTinhTrang=$dbHoaDonByid->tinh_trang ?>
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
            </div>

        </div>
    </div>
</div>

<div style="margin-top: 10px" class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="border-secondary bg-secondary text-white card-header">
                Địa chỉ thanh toán:
            </div>
            <div class="card-body">
                <h6 style="color: brown; font-weight: 900">{{ Auth::user()->ho_ten }}</h6>
                <ul style="padding: 0">
                    <li><strong>Địa chỉ:</strong> {{ $dbHoaDonByid->dia_chi_noi_nhan }}</li>
                    <li><strong>Số điện thoại:</strong> {{ $dbHoaDonByid->so_dien_thoai }}</li>
                    <li><strong>Lời nhắn:</strong></li>
                    <li>
                        {{ $dbHoaDonByid->loi_nhan }}
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="border-secondary bg-secondary text-white card-header">
                Thanh toán:
            </div>
            <div class="card-body">
                <ul style="padding: 0">
                    <li><strong>Phí vận chuyển: 30.000đ</strong></li>
                    <li><strong>Khuyến mãi: </strong>{{ $dbHoaDonByid->giftcode->code }} <span class="badge badge-primary badge-pill">-{{ $dbHoaDonByid->giftcode->gia_tri}}%</span></li>
                    <li>Tổng cộng: {{ number_format($dbHoaDonByid->tong_tien, 2,'.', ',') }} đ</li>
                    <hr>
                    <li><strong>Hình thức thanh toán: </strong></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
