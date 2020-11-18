@extends('backEnd.don_hang.template')

@section('don_hang_template')
<div class="card">
    <div class="card-header">

        Danh sách
        @if (isset($id))
            @if ($id == 0)
            đơn hàng đang xử lý
            @elseif($id == 1)
            Đơn hàng đang giao
            @elseif($id == 2)
            Đơn hàng đã hủy
            @elseif($id == 3)
            Đơn hàng đổi/ trả
            @elseif($id == 4)
            Đơn hàng đã giao
            @endif
        @else
            Tất cả đơn hàng
        @endif

    </div>

    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên Khách hàng</th>
                    <th>Số điện thoại</th>
                    <th>Tinh trạng đơn hàng</th>
                    <th>Tổng tiền</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <?php $a = 1 ?>
                @foreach ($db_dons as $db_don)
                <tr>
                    <td>
                        <?php echo $a ?>
                    </td>
                    <td>{{ $db_don->taikhoan->ho_ten }}</td>
                    <td>{{ $db_don->so_dien_thoai }}</td>
                    <td>
                        <?php $numberTinhTrang=$db_don->tinh_trang ?>
                        @if ($numberTinhTrang == 0)
                            đơn hàng đang xử lý
                        @elseif($numberTinhTrang == 1)
                        Đơn hàng đang giao
                        @elseif($numberTinhTrang == 2)
                        Đơn hàng đã hủy
                        @elseif($numberTinhTrang == 3)
                        Đơn hàng đổi/ trả
                        @elseif($numberTinhTrang == 4)
                        Đơn hàng đã giao
                        @endif

                    </td>
                    <td>{{ number_format($db_don->tong_tien, 3,'.', ',') }} <img width="22" src="images/dong.png" alt=""></td>
                    <td><a href="{{ route('ChiTietDonHang_Get', ['id'=> $db_don->id]) }}"><button class="btn btn-success">Xem chi tiết</button></a></td>

                </tr>
                <?php $a++ ?>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer">
        {{ $db_dons->links() }}
    </div>
</div>
@endsection
