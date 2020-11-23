@extends('template.backend')
@section('container')
<div class="container" style="width:100%">
    <div class="row" style="font-size: 14px">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center">
                    Liệt kê người dùng
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
                                <th>Họ Và Tên</th>
                                <th>Số Điện Thoại</th>
                                <th>Email</th>
                                <th>Vai Trò</th>
                                <th>Ảnh Đại Diện</th>
                                <th>Ngày Sinh</th>
                                <th>Ngày Tạo</th>
                                <th>Tình trạng</th>
                                <th>Chỉnh sửa</th>
                            </tr>
                        </thead>
                        <tbody style="font-size: 12px">
                            @foreach($all_user as $key =>$user)
                            <tr>
                                <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                                <td>{{$user->id}}</td>
                                <td>{{$user->ho_ten}}</td>
                                <td>{{$user->so_dien_thoai}}</td>
                                <td>{{$user->email}}</td>
                                <td><span class="text-ellipsis">
                                    <?php
                                    if ($user->vai_tro == 0) {
                                    ?>
                                        <span class="badge badge-success">Mặc Định</span>
                                    <?php
                                    }
                                    else {
                                    ?>
                                        <span class="badge badge-primary">Nhân Viên</span>
                                    <?php
                                    }
                                    ?>
                                </span></td>
                                <td><img src="images/user/{{$user->anh_dai_dien}}" alt="" height="80" width="60"></td>
                                <td>{{$user->ngay_sinh}}</td>
                                <td>{{$user->ngay_tao}}</td>
                                <td><span class="text-ellipsis">
                                    <?php
                                    if ($user->status == 0) {
                                    ?>
                                        <a href="{{ route('unactive-user',['id'=> $user->id]) }}"><span class="badge badge-success">Vô Hiệu Hóa</span></a>
                                    <?php
                                    } else {
                                    ?>
                                        <a href="{{ route('active-user',['id'=> $user->id]) }}"><span class="badge badge-primary">Hoạt Động</span></a>
                                    <?php
                                    }
                                    ?>
                                    </span></td>
                                <td>
                                    <?php
                                    if ($user->vai_tro == 1) {
                                    ?>
                                        <span class="badge badge-secondary">ADMIN</span>
                                    <?php
                                    } else {
                                    ?>
                                        <a href="{{ route('edit-user',['id'=> $user->id]) }}" class="active" ui-toggle-class="">
                                            <i class="fas fa-edit"></i></a>
                                        <a onclick="return confirm('Bạn muốn xóa thương hiệu này hả ?')" href="{{ route('delete-user',['id'=> $user->id]) }}" class="active" ui-toggle-class="">
                                            <i class="fa fa-times text-danger text"></i></a>
                                    <?php
                                    }
                                    ?>

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
