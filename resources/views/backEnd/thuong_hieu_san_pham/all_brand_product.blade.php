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
                    <th>Hình ảnh</th>
                    <th>Mô tả</th>
                    <th>Tình trạng</th>
                    <th>Chỉnh sửa</th>
                </tr>
            </thead>
            <tbody>
                @foreach($all_brand_product as $key =>$brand_pro)
                <tr>
                    <td>{{$brand_pro->id}}</td>
                    <td>{{$brand_pro->ten_thuong_hieu}}</td>
                    <td><img src="images/brand_product/{{$brand_pro->hinh_anh}}" alt="" height="120" width="100"></td>
                    <td>{{$brand_pro->mo_ta}}</td>
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
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{ $all_brand_product->links() }}
    </div>
</div>
@endsection
