@extends('template.backend')
@section('container')
<div class="card">
    <div class="card-header">
        Liệt kê thương hiệu sản phẩm
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
                    <th>Tên thương hiệu</th>
                    <th>Tình trạng</th>
                    <th>Chỉnh sửa</th>
                </tr>
            </thead>
            <tbody>
                <?php $a=1 ?>
                @foreach($all_brand_product as $key =>$brand_pro)
                <tr>
                    <td>{{$a}}</td>
                    <td>{{$brand_pro->ten_thuong_hieu}}</td>
                    <td><span class="text-ellipsis">
                            <?php
                            if ($brand_pro->status == 0) {
                            ?>
                                <a href="{{ route('unactive-brand-product',['id'=> $brand_pro->id]) }}"><span class="badge badge-success">Ẩn</span></a>
                            <?php
                            } else {
                            ?>
                                <a href="{{ route('active-brand-product',['id'=> $brand_pro->id]) }}"><span class="badge badge-primary">Hiển thị</span></a>
                            <?php
                            }
                            ?>
                        </span></td>
                    <td>
                            <a class="btn btn-outline-success" href="{{ route('edit-brand-product',['id'=> $brand_pro->id]) }}"><i class="fas fa-edit"></i></a>
                            <a class="btn btn-warning" onclick="return confirm('Bạn muốn xóa thương hiệu này hả ?')" href="{{ route('delete-brand-product',['id'=> $brand_pro->id]) }}"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                <?php $a++ ?>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{ $all_brand_product->links() }}
    </div>
</div>
@endsection
