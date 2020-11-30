@extends('template.backend')
@section('container')
<div class="card">
    <div class="card-header">
        Liệt kê Mã GiftCode
    </div>
    <div class="card-body">
        <?php
        $message = Session::get('message');
        if ($message) {
            echo $message;
            Session::put('message', null);
        }
        ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Số TT</th>
                    <th>Mã GiftCode</th>
                    <th>Giá Trị</th>
                    <th>Ngày Bắt Đầu</th>
                    <th>Ngày Kết Thúc</th>
                    <th>Chỉnh sửa</th>
                </tr>
            </thead>
            <tbody>
                <?php $a=1 ?>
                @foreach($all_giftcode_product as $key =>$all_giftcode)
                <tr>
                    <td>{{$a}}</td>
                    <td>{{$all_giftcode->code}}</td>
                    <td>{{$all_giftcode->gia_tri}} %</td>
                    <td>{{$all_giftcode->ngay_bat_dau}}</td>
                    <td>{{$all_giftcode->ngay_ket_thuc}}</td>
                    <td>
                    <a class="btn btn-outline-success" href="{{ route('edit-giftcode-product',['id'=> $all_giftcode->id]) }}"><i class="fas fa-edit"></i></a>
                            <a class="btn btn-warning" onclick="return confirm('Bạn muốn xóa GiftCode này hả ?')" href="{{ route('delete-giftcode-product',['id'=> $all_giftcode->id]) }}"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                <?php $a++ ?>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{ $all_giftcode_product->links() }}
    </div>
</div>
@endsection
