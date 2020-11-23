@extends('frontEnd.hoa-don.template')
@section('Mydon_hang_template')
@foreach ($dbHoaDon as $dbHoaDonx)
<div style="margin-bottom: 10px" class="card">
    <div class="bg-light text-dark card-header">
        <div class="float-left">
            Đơn hàng <a href=""><strong style="color: blue">#{{ $dbHoaDonx->id }}</strong></a><br/>
        <i style="font-size: 12px">Đặt ngày: {{ date("d".' \T\h\á\n\g'." m". ' \N\ă\m'." Y", strtotime($dbHoaDonx->ngay_tao)) }}</i>
        </div>
        <div class="float-right">
            <a href="{{ route('ChiTietDonHangCuaToi_get', ['id'=> $dbHoaDonx->id]) }}">Quản lý</a>
        </div>

    </div>
    <div class="card-body">
        <table class="table table-borderless">
            <tbody>
                @foreach ($dbHoaDonx->sanpham as $sanphamx)
              <tr>
                <th><img width="60" src="../images/producs/{{ $sanphamx->hinh_anh }}" alt=""></th>
                <td>{{ $sanphamx->ten_san_pham }}</td>
                <td>Số lượng: {{ $sanphamx->pivot->so_luong }}</td>
                <td>Đơn giá: {{ number_format(($sanphamx->pivot->don_gia)*($sanphamx->pivot->so_luong), 2,'.', ',') }} đ</td>
                <td>
                    <?php $numberTinhTrang=$dbHoaDonx->tinh_trang ?>
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
    <div class="card-footer">
        <div class="float-left"><strong>Hình thức thanh toán:</strong> Thanh toán khi nhận hàng</div>
        <div class="float-right"><strong>Tổng tiền:</strong> {{ number_format($dbHoaDonx->tong_tien, 2,'.', ',') }} đ</div>
    </div>
</div>

@endforeach
{{ $dbHoaDon->links() }}
@endsection
