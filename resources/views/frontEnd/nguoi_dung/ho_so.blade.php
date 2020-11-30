@extends('template.front_end')
@section('container_layout')
<style>
    .swal2-content {
        margin-bottom: -40px;
    }
</style>
<div class="container"><br>
<div class="row flex-lg-nowrap">
  <div class="col-12 col-lg-auto mb-3" style="width: 200px;">
    <div class="card p-3">
      <div class="e-navlist e-navlist--active-bg">
        <ul class="nav">
          <li class="nav-item"><a class="nav-link px-2 active" href="./overview.html"><i class="fa fa-fw fa-bar-chart mr-1"></i><span>Overview</span></a></li>
          <li class="nav-item"><a class="nav-link px-2" href="./users.html"><i class="fa fa-fw fa-th mr-1"></i><span>CRUD</span></a></li>
        <li class="nav-item"><a class="nav-link px-2" href="{{route('view-update-password')}}"><i class="fa fa-fw fa-cog mr-1"></i><span>Đổi mật khẩu</span></a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="row">
    @foreach($profile_user as $key =>$pro_user)
    <form action="{{route('update-profile',['id'=> $pro_user->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="e-profile">
                    <div class="row">
                      <div class="col-12 col-sm-auto mb-3">
                        <div class="mx-auto" style="width: 140px;">
                          <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                            <span style="color: rgb(166, 168, 170); font: bold 8pt Arial;"><img src="images/user/{{$pro_user->anh_dai_dien}}" alt="" height="140" width="140"></span>
                          </div>
                        </div>
                      </div>
                      <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                        <div class="text-center text-sm-left mb-2 mb-sm-0">
                          <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">{{$pro_user->ho_ten}}</h4>
                          <p class="mb-0">Tên đăng nhập: {{$pro_user->email}}</p>
                          <div class="text-muted"><small>Ngày tạo: {{$pro_user->ngay_tao}}</small></div>
                          <span class="badge badge-success">
                            <?php
                            if ($pro_user->vai_tro == 0) {
                            ?>
                                Mặc Định
                            <?php
                            }
                            else {
                            ?>
                                Nhân Viên
                            <?php
                            }
                            ?>
                        </span>
                        </div>
                      </div>
                    </div>
                    <ul class="nav nav-tabs">
                      <li class="nav-item"><a class="active nav-link">Chỉnh sửa Thông tin tài khoản</a></li>
                    </ul>
                    <?php
                    $message = Session::get('message');
                    if ($message) {
                    echo '<p style="margin-left:150px;margin-top:10px">'.$message.'</p>';
                    Session::put('message', null);
                    }
                    ?><hr>
                    <div class="tab-content pt-3">
                      <div class="tab-pane active">
                        <form class="form" novalidate="">
                          <div class="row">
                            <div class="col">
                              <div class="row">
                                <div class="col">
                                  <div class="form-group">
                                    <label>Họ Và Tên</label>
                                    <input class="form-control" type="text" name="ho_ten" value="{{$pro_user->ho_ten}}">
                                    @if($errors->has('ho_ten'))
							        <div class="alert alert-danger" role="alert">
								    <strong>{{$errors->first('ho_ten')}}</strong>
							        </div>
		                            @endif
                                  </div>
                                </div>
                                <div class="col">
                                  <div class="form-group">
                                    <label>Số Điện Thoại</label>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="">{{$pro_user->so_dien_thoai}}</span>
                                      </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col">
                                  <div class="form-group">
                                    <label>Email</label>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="">{{$pro_user->email}}</span>
                                      </div>
                                  </div>
                                  <div class="row">
                                    <div class="col">
                                      <div class="form-group">
                                        <label>Ngày Tháng Năm Sinh</label>
                                        <input class="form-control" name="ngay_sinh" type="date" value="{{$pro_user->ngay_sinh}}">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-12 col-sm-5">
                              <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                      <label>Ảnh Đại Diện</label>
                                      <input class="form-control" name="anh_dai_dien" type="file">
                                      <img src="images/user/{{$pro_user->anh_dai_dien}}" alt="" height="140" width="140">
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col d-flex justify-content-end">
                              <button class="btn btn-primary" type="submit">Lưu Thay Đổi</button>
                            </div>
                          </div>
                        </form>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    </form>
    @endforeach
      <div class="col-12 col-md-3 mb-3">
        <div class="card mb-3">
          <div class="card-body">
            <div class="px-xl-3">
              <button class="btn btn-block btn-primary">
                <i class="fas fa-sign-out-alt"></i>
                <a href="{{route('dang-xuat')}}"><span>Đăng Xuất</span></a>
              </button>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h6 class="card-title font-weight-bold">Hỗ Trợ</h6>
            <p class="card-text">Bạn đang thắc mắc vấn đề về bảo mật.</p>
            <button type="button" class="btn btn-primary">Hãy chọn vào đây</button>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@if(Session::has('update_image'))
    <script>
    Swal.fire({
        icon: 'success',
        title: 'Cập nhật ảnh đại diện thành công',
        showConfirmButton: true,
});
</script>
@endif
@if(Session::has('update_pro'))
    <script>
    Swal.fire({
        icon: 'success',
        title: 'Cập nhật thông tin thành công',
        showConfirmButton: true,
});
</script>
@endif
@section('script')
<style>
    #menu_header_menu{
        display: none;
    }
    #box_menu_group_header:hover #menu_header_menu{
        display: block
    }
    #banner_header_menu{
        display: none;
    }

</style>
@endsection
@endsection
