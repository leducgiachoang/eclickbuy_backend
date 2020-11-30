@extends('template.front_end')
@section('container_layout')<br>
<style>
    .swal2-content {
        margin-bottom: -40px;
    }
</style>
<section class="section">
    <div class="container">
        <div class="wrap_background_aside page_login">
            <div class="row">
                <div
                    class="col-lg-4 col-md-6 col-sm-12 col-xl-4 offset-0 offset-xl-4 offset-lg-4 offset-md-3 offset-xl-3 col-12">
                    <div class="row">
                        <div class="page-login pagecustome clearfix">
                            <div class="wpx" style="margin-bottom: 80px">
                                <h1 class="title_heads a-center"><span>Thay đổi mật khẩu</span></h1>
                                <span class="block a-center dkm margin-top-10">Vui lòng điền đầy đủ thông tin để tiến hành đổi mật khẩu</span>

                                <div id="login" class="section">
                                <form accept-charset="utf-8" action="{{route('update-password')}}" id="customer_login"
                                        method="post">
                                        @csrf
                                        <input name="FormType" type="hidden" value="customer_login">
                                        <input name="utf8" type="hidden" value="true">
                                        <span class="form-signup" style="color:red;">
                                        </span>
                                        <div class="form-signup clearfix">
                                            <fieldset class="form-group">
                                                <input type="password" class="form-control form-control-lg"
                                                    value="" name="password_now" id="customer_password"
                                                    placeholder="Mật khẩu hiện tại" required="">
                                            </fieldset>
                                            @if($errors->has('password_now'))
							                <div class="alert alert-danger" role="alert">
								            <strong>{{$errors->first('password_now')}}</strong>
							                </div>
		                                    @endif
                                            <fieldset class="form-group">
                                                <input type="password" class="form-control form-control-lg"
                                                    value="" name="password_new" id="customer_password"
                                                    placeholder="Mật khẩu mới" required="">
                                            </fieldset>
                                            @if($errors->has('password_new'))
							                <div class="alert alert-danger" role="alert">
								            <strong>{{$errors->first('password_new')}}</strong>
							                </div>
		                                    @endif
                                            <fieldset class="form-group">
                                                <input type="password" class="form-control form-control-lg"
                                                    value="" name="re_password_new" id="customer_password"
                                                    placeholder="Xác nhận mật khẩu mới" required="">
                                            </fieldset>
                                            @if($errors->has('re_password_new'))
							                <div class="alert alert-danger" role="alert">
								            <strong>{{$errors->first('re_password_new')}}</strong>
							                </div>
		                                    @endif
                                            <div class="pull-xs-left">
                                                <input class="btn btn-style btn_50" type="submit"
                                                    value="Thay đổi">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<style>

</style>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@if(Session::has('success'))
    <script>
    Swal.fire({
        icon: 'success',
        title: 'Đổi mật khẩu thành công',
        showConfirmButton: true,

});
</script>
@endif
@if(Session::has('danger'))
    <script>
    Swal.fire({
        title: 'Mật khẩu hiện tại chưa đúng. Vui lòng thử lại!',
        icon: "error",
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
