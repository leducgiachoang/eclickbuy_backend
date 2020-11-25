@extends('template.front_end')
@section('container_layout')
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
                                    <script>
                                        function loginFacebook() {
                                            var a = {
                                                    client_id: "947410958642584",
                                                    redirect_uri: "https://store.mysapo.net/account/facebook_account_callback",
                                                    state: JSON.stringify({
                                                        redirect_url: window.location.href
                                                    }),
                                                    scope: "email",
                                                    response_type: "code"
                                                },
                                                b = "https://www.facebook.com/v3.2/dialog/oauth" + encodeURIParams(a, !0);
                                            window.location.href = b
                                        }

                                        function loginGoogle() {
                                            var a = {
                                                    client_id: "885968593373-197u9i4pte44vmvcc0j50pvhlfvl27ds.apps.googleusercontent.com",
                                                    redirect_uri: "https://store.mysapo.net/account/google_account_callback",
                                                    scope: "email profile https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile",
                                                    access_type: "online",
                                                    state: JSON.stringify({
                                                        redirect_url: window.location.href
                                                    }),
                                                    response_type: "code"
                                                },
                                                b = "https://accounts.google.com/o/oauth2/v2/auth" + encodeURIParams(a, !0);
                                            window.location.href = b
                                        }

                                        function encodeURIParams(a, b) {
                                            var c = [];
                                            for (var d in a)
                                                if (a.hasOwnProperty(d)) {
                                                    var e = a[d];
                                                    null != e && c.push(encodeURIComponent(d) + "=" + encodeURIComponent(e))
                                                } return 0 == c.length ? "" : (b ? "?" : "") + c.join("&")
                                        }
                                    </script>
                                    <a href="javascript:void(0)" class="social-login--facebook"
                                        onclick="loginFacebook()"><img width="129px" height="37px"
                                            alt="facebook-login-button"
                                            src="../images/fb-btn.svg"></a>
                                    <a href="javascript:void(0)" class="social-login--google"
                                        onclick="loginGoogle()"><img width="129px" height="37px"
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
