@extends('template.front_end')
@section('container_layout')
<section class="section">
    <div class="container ">
        <div class="wrap_background_aside  page_login">
            <div class="wrap_background_aside">
                <div class="row">
                    <div
                        class="col-lg-4 col-md-6 col-sm-12 col-12 col-xl-4 offset-xl-4 offset-lg-4 offset-md-3 offset-xl-3">
                        <div class="row">
                            <div class="page-login pagecustome clearfix">
                                <div class="wpx">
                                    <h1 class="title_heads a-center"><span>Đăng ký</span></h1>
                                    <span class="block a-center dkm margin-top-10">Đã có tài khoản, đăng nhập <a
                                            href="login.html" class="btn-link-style btn-register">tại
                                            đây</a></span>
                                    <div id="login" class="section">
                                        <form accept-charset="utf-8" action="{{route('dang-ki')}}"
                                            id="customer_register" method="post">
                                            @csrf
                                            <input name="FormType" type="hidden" value="customer_register">
                                            <input name="utf8" type="hidden" value="true"><input type="hidden"
                                                id="Token-c1f141e91f864053a5232df04bbfc202" name="Token">
                                            <script
                                                src="../recaptcha/api.js?render=6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK">
                                            </script>
                                            <script>
                                                grecaptcha.ready(function () {
                                                    grecaptcha.execute("6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK", {
                                                            action: "/account/register"
                                                        })
                                                        .then(function (token) {
                                                            document.getElementById("Token-c1f141e91f864053a5232df04bbfc202").value = token
                                                        });
                                                });
                                            </script>
                                            <div class="form-signup " style="color:red;">
                                                <?php
                                                $message = Session::get('message_front_end');
                                                if ($message) {
                                                echo '<p style="margin-left:10px;margin-top:30px">'.$message.'</p>';
                                                Session::put('message_front_end', null);
                                                }
                                                ?>
                                            </div>

                                            <div class="form-signup clearfix">
                                                <div class="row">
                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                        <fieldset class="form-group">
                                                            <input type="text"
                                                                class="form-control form-control-lg" value=""
                                                                name="ho_ten" id="lastName" placeholder="Họ Và Tên"
                                                                required="">
                                                        </fieldset>
                                                        @if($errors->has('ho_ten'))
							                            <div class="alert alert-danger" role="alert">
								                        <strong>{{$errors->first('ho_ten')}}</strong>
							                            </div>
		                                                @endif
                                                    </div>
                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                        <fieldset class="form-group">
                                                            <input placeholder="Số điện thoại" type="text"
                                                                pattern="\d+"
                                                                class="form-control form-control-comment form-control-lg"
                                                                name="so_dien_thoai" required="">
                                                        </fieldset>
                                                        @if($errors->has('so_dien_thoai'))
							                            <div class="alert alert-danger" role="alert">
								                        <strong>{{$errors->first('so_dien_thoai')}}</strong>
							                            </div>
		                                                @endif
                                                    </div>
                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                        <fieldset class="form-group">
                                                            <input type="email"
                                                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"
                                                                class="form-control form-control-lg" value=""
                                                                name="email" id="email" placeholder="Email"
                                                                required="">
                                                        </fieldset>
                                                        @if($errors->has('email'))
							                            <div class="alert alert-danger" role="alert">
								                        <strong>{{$errors->first('email')}}</strong>
							                            </div>
		                                                @endif
                                                    </div>
                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                        <fieldset class="form-group">
                                                            <input type="password"
                                                                class="form-control form-control-lg" value=""
                                                                name="password" id="firstName"
                                                                placeholder="Mật Khẩu" required="">
                                                        </fieldset>
                                                        @if($errors->has('password'))
							                            <div class="alert alert-danger" role="alert">
								                        <strong>{{$errors->first('password')}}</strong>
							                            </div>
		                                                @endif
                                                    </div>
                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                        <fieldset class="form-group">
                                                            <input type="password"
                                                                class="form-control form-control-lg" value=""
                                                                name="re_password" id="firstName"
                                                                placeholder="Nhập Lại Mật Khẩu" required="">
                                                        </fieldset>
                                                        @if($errors->has('re_password'))
							                            <div class="alert alert-danger" role="alert">
								                        <strong>{{$errors->first('re_password')}}</strong>
							                            </div>
		                                                @endif
                                                    </div>
                                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                                        <fieldset class="form-group">
                                                            <div class="">
                                                                <input type="checkbox" id="">
                                                                <label class="chu" for="exampleCheck1">Tôi đồng ý với chính sách bảo mật</label>
                                                              </div>
                                                        </fieldset>
                                                    </div>
                                                    {{-- <div class="form-group  style="display: none"">
                                                        <label for="exampleInputPassword1">Nội dung</label>
                                                        <textarea class="form-control" name="noidung" id="" cols="30" rows="10"></textarea>
                                                    </div> --}}
                                                </div>
                                                <div class="section">
                                                    <button type="submit" value="Đăng ký"
                                                        class="btn  btn-style btn_50">Đăng ký</button>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="block social-login--facebooks">
                                            <p class="a-center">
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
        </div>
    </div>
</section>
@endsection
