@extends('template.front_end')
@section('container_layout')
<div class="container"><br>
<div class="row flex-lg-nowrap">
  <div class="col-12 col-lg-auto mb-3" style="width: 200px;">
    <div class="card p-0">
      <div class="e-navlist e-navlist--active-bg">
        <ul class="nav">
          <li class="nav-item"><a class="nav-link px-2" href="{{ route('DonHangCuaToi_get') }}"><i class="fa fa-fw fa-th mr-1"></i><span>Đơn hàng của tôi</span></a></li>
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
                            <div class="form-group">
                                <label for="anh_dai_dien">
                                <img data-toggle="tooltip" data-placement="top" title="Thay đổi mật khẩu" src="images/user/{{$pro_user->anh_dai_dien}}" alt="" height="140" width="140">
                                <b>Thay đổi</b>
                                </label>
                                <input style="visibility: hidden;display: none" class="form-control" name="anh_dai_dien" id="anh_dai_dien" type="file">
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
                                          @if ($pro_user->so_dien_thoai == '')
                                          <label class="text-danger" role="alert">
                                            Cập nhập số điện thoại*
                                          </label>
                                          @else
                                        <label>Số điện thoại</label>
                                          @endif

                                        <div class="input-group-prepend">
                                            <input @if ($pro_user->so_dien_thoai != '')
                                            readonly
                                            @else

                                            @endif class="form-control" name="so_dien_thoai" value="{{$pro_user->so_dien_thoai}}">
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
                            <div class="col d-flex justify-content-end">
                              <button class="btn btn-success text-white" type="submit">Lưu Thay Đổi</button>
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
              <button class="btn btn-block btn-danger text-white">
                <i class="fas fa-sign-out-alt"></i>
                <a href="{{route('dang-xuat')}}"><span class="text-white">Đăng Xuất</span></a>
              </button>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>
</div>
</div>

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
