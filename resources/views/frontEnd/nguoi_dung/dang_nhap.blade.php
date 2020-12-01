@extends('template.front_end')
@section('container_layout')
@section('title','Đăng Nhập Tài Khoản')
<style>
    .swal2-content {
        margin-bottom: -40px;
    }
</style>

<section class="bread-crumb">
    <span class="crumb-border"></span>
    <div class="container">
        <div class="rows">
            <div class="col-xs-12 a-left">
                <ul class="breadcrumb">
                    <li class="home">
                        <a href="../index.htm"><span>Trang chủ</span></a>
                        <span class="mr_lr">&nbsp;<i class="fa fa-angle-right"></i>&nbsp;</span>
                    </li>

                    <li><strong><span>Đăng nhập tài khoản</span></strong></li>

                </ul>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="wrap_background_aside page_login">
            <div class="row">
                <div
                    class="col-lg-4 col-md-6 col-sm-12 col-xl-4 offset-0 offset-xl-4 offset-lg-4 offset-md-3 offset-xl-3 col-12">
                    <div class="row">
                        <div class="page-login pagecustome clearfix">
                            <div class="wpx" style="margin-bottom: 80px">
                                <h1 class="title_heads a-center"><span>Đăng nhập</span></h1>
                                <span class="block a-center dkm margin-top-10">Nếu bạn chưa có tài khoản, <a
                                        href="{{route('dang-ki')}}" class="btn-link-style btn-register">đăng ký tại
                                        đây</a></span>

                                <div id="login" class="section">

                                <form accept-charset="utf-8" action="{{route('dang-nhap')}}" id="customer_login"
                                        method="post">
                                        @csrf
                                        <input name="FormType" type="hidden" value="customer_login">
                                        <input name="utf8" type="hidden" value="true">
                                        <span class="form-signup" style="color:red;">
                                        <?php
                                        $message = Session::get('message');
                                        if ($message) {
                                        echo '<p style="margin-left:50px;margin-top:30px">'.$message.'</p>';
                                        Session::put('message', null);
                                        }
                                        ?>
                                        <?php
                                        $message = Session::get('message_front_end');
                                        if ($message) {
                                        echo '<p style="margin-left:60px;margin-top:30px">'.$message.'</p>';
                                        Session::put('message_front_end', null);
                                        }
                                        ?>
                                        </span>
                                        <div class="form-signup clearfix">
                                            <fieldset class="form-group">
                                                <input type="email"
                                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"
                                                    class="form-control form-control-lg" value="" name="email"
                                                    id="customer_email" placeholder="Email" required="">
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <input type="password" class="form-control form-control-lg"
                                                    value="" name="mat_khau" id="customer_password"
                                                    placeholder="Mật khẩu" required="">
                                            </fieldset>
                                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                <fieldset class="form-group">
                                                    <div class="">
                                                        <input type="checkbox" id="">
                                                        <label class="chu" for="exampleCheck1">Nhớ mật khẩu</label>
                                                      </div>
                                                </fieldset>
                                            </div>
                                            <div class="pull-xs-left">
                                                <input class="btn btn-style btn_50" type="submit"
                                                    value="Đăng nhập">
                                                <span class="block a-center quenmk">Quên mật khẩu</span>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="h_recover" style="display:none;">
                                    <div id="recover-password" class="form-signup page-login">
                                    <form accept-charset="utf-8" action="{{route('reset-password')}}"
                                            id="recover_customer_password" method="post">
                                            @csrf
                                            <input name="FormType" type="hidden"
                                                value="recover_customer_password">
                                            <input name="utf8" type="hidden" value="true">
                                            <div class="form-signup" style="color: red;">

                                            </div>
                                            <div class="form-signup clearfix">
                                                <fieldset class="form-group">
                                                    <input type="email"
                                                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"
                                                        class="form-control form-control-lg" value=""
                                                        name="email" id="recover-email" placeholder="Email"
                                                        required="">
                                                </fieldset>
                                            </div>
                                            <div class="action_bottom">
                                                <input class="btn btn-style btn_50" style="margin-top: 0px;"
                                                    type="submit" value="Lấy lại mật khẩu">

                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="block social-login--facebooks">
                                    <p class="a-center" style="margin-top: -40px;">
                                        Hoặc đăng nhập bằng
                                    </p>

                                    <a href="{{ url('/auth/redirect/facebook') }}" class="social-login--facebook"><img width="129px" height="37px"
                                            alt="facebook-login-button"
                                            src="../images/fb-btn.svg"></a>
                                    <a href="{{ url('/auth/redirect/google') }}" class="social-login--google"><img width="129px" height="37px"
                                            alt="google-login-button"
                                            src="../images/gp-btn.svg"></a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@if(Session::has('login-erro'))
    <script>
    Swal.fire({
        icon: 'error',
        title: 'Sai tên đăng nhập hoặc mật khẩu',
        confirmButtonText:'Thử đăng nhập lại',
});
    </script>
@endif
@if(Session::has('erro-LayLaiMatKhau'))
    <script>
    Swal.fire({
        icon: 'success',
        title: 'Vui lòng kiểm tra email để xác nhận cập nhật lại mật khẩu mới',
});
    </script>
@endif
@if(Session::has('kich_hoat_thanh_cong'))
    <script>
    Swal.fire({
        icon: 'success',
        title: '<p style="font-size:15px">Kích hoạt tài khoản thành công</p>',
        showConfirmButton: true,

});
</script>
@endif
@if(Session::has('message_front_end'))
    <script>
    Swal.fire({
        icon: 'success',
        title: '<p style="font-size:17px">Đăng kí tài khoản thành công, vui lòng kiểm tra email để kích hoạt tài khoản</p>',
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
