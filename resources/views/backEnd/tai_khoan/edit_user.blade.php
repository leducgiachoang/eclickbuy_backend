@extends('template.backend')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading" style="text-align: center">
                    Sửa người dùng
                </header>
                <div class="panel-body">
                    @foreach($edit_user as $key =>$e_user)
                    <div class="position-center">
                        <?php
                        $message = Session::get('message');
                        if ($message) {
                            echo $message;
                            Session::put('message', null);
                        }
                        ?><hr>
                        <form role="form" action="{{route('update-user',['id'=> $e_user->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Họ và Tên</label>
                                <input type="text" name="ho_ten" value="{{$e_user->ho_ten}}" class="form-control" placeholder="Họ và Tên">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Số Điện Thoại</label>
                                <input type="tel" name="so_dien_thoai" value="{{$e_user->so_dien_thoai}}" class="form-control" placeholder="Số Điện Thoại">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" name="email" value="{{$e_user->email}}" class="form-control" placeholder="Email của bạn">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mật khẩu</label>
                                <input type="password" name="mat_khau" class="form-control" placeholder="Mật khẩu của bạn">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nhập lại mật khẩu</label>
                                <input type="password" name="nhap_lai_mat_khau" class="form-control" placeholder="Nhập lại mật khẩu của bạn">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Vai trò</label>
                                <select name="vai_tro" class="form-control input-sm m-bot15">
                                    <option value="0">Mặc Định</option>
                                    <option value="1">Nhân Viên</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ảnh đại diện</label>
                                <input type="file" name="anh_dai_dien" class="form-control"><br>
                                <img src="images/user/{{$e_user->anh_dai_dien}}" alt="" height="120" width="100">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ngày Tháng Năm Sinh</label>
                                <input type="date" name="ngay_sinh" value="{{$e_user->ngay_sinh}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Trạng thái</label>
                                <select name="trang_thai" class="form-control input-sm m-bot15">
                                    <option value="1">Hoạt Động</option>
                                    <option value="0">Vô hiệu hóa</option>
                                </select>
                            </div>
                            <button type="submit" name="update-user" class="btn btn-info">Sửa người dùng</button>
                        </form>
                    </div>
                    @endforeach
                </div>
            </section>

        </div>
    </div>
</div>
@endsection
