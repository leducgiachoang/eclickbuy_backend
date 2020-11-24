@extends('template.backend')
@section('container')
<div class="card">
    <div class="card-header">
        Liệt kê khuyến mãi
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
                    <th>Nội Dung Khuyến Mãi</th>
                    <th>Chỉnh sửa</th>
                </tr>
            </thead>
            <tbody>
                @foreach($all_sale_product as $key =>$all_sale)
                <tr>
                    <td>{{$all_sale->id}}</td>
                    <td>{{$all_sale->gia_tri}}</td>
                    <td>
                    <a class="btn btn-outline-success" href="{{ route('edit-sale-product',['id'=> $all_sale->id]) }}"><i class="fas fa-edit"></i></a>
                    <a class="btn btn-warning" onclick="return confirm('Bạn muốn xóa khuyến mãi hiệu này hả ?')" href="{{ route('delete-sale-product',['id'=> $all_sale->id]) }}"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{ $all_sale_product->links() }}
    </div>
</div>
@endsection
