@extends('template.backend')
@section('container')
<div class="" style="width:100%;text-align: center;" >
    <div class="row" style="font-size: 16px">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center">
                    Liệt kê Mã GiftCode
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
                                <th>Mã GiftCode</th>
                                <th>Giá Trị</th>
                                <th>Ngày Bắt Đầu</th>
                                <th>Ngày Kết Thúc</th>
                                <th>Chỉnh sửa</th>
                            </tr>
                        </thead>
                        <tbody style="font-size: 14px">
                            @foreach($all_giftcode_product as $key =>$all_giftcode)
                            <tr>
                                <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                                <td>{{$all_giftcode->id}}</td>
                                <td>{{$all_giftcode->code}}</td>
                                <td>{{$all_giftcode->gia_tri}} %</td>
                                <td>{{$all_giftcode->ngay_bat_dau}}</td>
                                <td>{{$all_giftcode->ngay_ket_thuc}}</td>
                                <td>
                                <a href="{{ route('edit-giftcode-product',['id'=> $all_giftcode->id]) }}" class="active" ui-toggle-class="">
                                <i class="fas fa-edit"></i></a>
                                <a onclick="return confirm('Bạn muốn xóa khuyến mãi này hả ?')" href="{{ route('delete-giftcode-product',['id'=> $all_giftcode->id]) }}" class="active" ui-toggle-class="">
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
