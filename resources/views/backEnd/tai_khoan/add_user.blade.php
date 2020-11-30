@extends('template.backend')
@section('container')
<div >

            <section class="card">
                <header class="card-header">
                    Thêm người dùng
                </header>
                <div class="card-body">

                    <div>
                        <?php
                        $message = Session::get('message');
                        if ($message) {
                            echo $message;
                            Session::put('message', null);
                        }
                        ?><hr>
                        <form role="form" action="{{route('save-user')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Họ và Tên</label>
                                <input type="text" name="ho_ten" class="form-control" placeholder="Họ và Tên">
                                @if($errors->has('ho_ten'))
							    <div class="alert alert-danger" role="alert">
								<strong>{{$errors->first('ho_ten')}}</strong>
							    </div>
		                        @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Số Điện Thoại</label>
                                <input type="tel" name="so_dien_thoai" class="form-control" placeholder="Số Điện Thoại">
                                @if($errors->has('so_dien_thoai'))
							    <div class="alert alert-danger" role="alert">
								<strong>{{$errors->first('so_dien_thoai')}}</strong>
							    </div>
		                        @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email của bạn">
                                @if($errors->has('email'))
							    <div class="alert alert-danger" role="alert">
								<strong>{{$errors->first('email')}}</strong>
							    </div>
		                        @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mật khẩu</label>
                                <input type="password" name="password" class="form-control" placeholder="Mật khẩu của bạn">
                                @if($errors->has('password'))
							    <div class="alert alert-danger" role="alert">
								<strong>{{$errors->first('password')}}</strong>
							    </div>
		                        @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nhập lại mật khẩu</label>
                                <input type="password" name="re_password" class="form-control" placeholder="Nhập lại mật khẩu của bạn">
                                @if($errors->has('re_password'))
							    <div class="alert alert-danger" role="alert">
								<strong>{{$errors->first('re_password')}}</strong>
							    </div>
		                        @endif
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
                                <input type="file" name="anh_dai_dien" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ngày Tháng Năm Sinh</label>
                                <input type="date" name="ngay_sinh" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Trạng thái</label>
                                <select name="trang_thai" class="form-control input-sm m-bot15">
                                    <option value="0">Vô hiệu hóa</option>
                                    <option value="1">Hoạt Động</option>
                                </select>
                            </div>
                            <button type="submit" name="save-user" class="btn btn-info">Thêm người dùng</button>
                        </form>
                    </div>

                </div>
            </section>


</div>
@endsection
