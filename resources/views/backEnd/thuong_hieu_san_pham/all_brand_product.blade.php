@extends('template.backend')
@section('container')
<div class="container" style="width:100%">
    <div class="row" style="font-size: 14px">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center">
                    Liệt kê thương hiệu sản phẩm
                </div><br>
                <div class="table-responsive">
                    <?php
                    $message = Session::get('message');
                    if ($message) {
                        echo $message;
                        Session::put('message', null);
                    }
                    ?>
                    <table class="table table-striped b-t b-light">
                        <thead>
                            <tr>
                                <th style="width:20px;">
                                    <label class="i-checks m-b-none">
                                        <input type="checkbox"><i></i>
                                    </label>
                                </th>
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
                                <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
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
                                    <a href="{{ route('edit-brand-product',['id'=> $brand_pro->id]) }}" class="active" ui-toggle-class="">
                                        <i class="fas fa-edit"></i></a>
                                    <a onclick="return confirm('Bạn muốn xóa thương hiệu này hả ?')" href="{{ route('delete-brand-product',['id'=> $brand_pro->id]) }}" class="active" ui-toggle-class="">
                                        <i class="fa fa-times text-danger text"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <footer class="panel-footer">
                    <div class="row">

                        <div class="col-sm-5 text-center">
                            <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                        </div>
                        <div class="col-sm-7 text-right text-center-xs">
                            <ul class="pagination pagination-sm m-t-none m-b-none">
                                <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                                <li><a href="">1</a></li>
                                <li><a href="">2</a></li>
                                <li><a href="">3</a></li>
                                <li><a href="">4</a></li>
                                <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </footer>
            </div>
    </div>
</div>
@endsection
