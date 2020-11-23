@extends('template.backend')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading" style="text-align: center">
                    Thêm GiftCode
                </header>
                <div class="panel-body">

                    <div class="position-center">
                        <?php
                        $message = Session::get('message');
                        if ($message) {
                            echo $message;
                            Session::put('message', null);
                        }
                        ?><hr>
                        <form role="form" action="{{route('save-giftcode-product')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nhập Mã CODE</label>
                                <input type="text" name="code" class="form-control" placeholder="Mã CODE">
                                @if($errors->has('code'))
							    <div class="alert alert-danger" role="alert">
								<strong>{{$errors->first('code')}}</strong>
							    </div>
		                        @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Giá Trị</label>
                                <div class="input-group mb-3">
                                    <input type="number" name="gia_tri_gift" placeholder="Giá Trị" class="form-control">
                                    <div class="input-group-append">
                                      <span class="input-group-text">%</span>
                                    </div>
                                </div>
                                @if($errors->has('gia_tri_gift'))
							    <div class="alert alert-danger" role="alert">
								<strong>{{$errors->first('gia_tri_gift')}}</strong>
							    </div>
		                        @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ngày Bắt Đầu</label>
                                <input type="date" name="ngay_bat_dau" class="form-control" >
                                @if($errors->has('ngay_bat_dau'))
							    <div class="alert alert-danger" role="alert">
								<strong>{{$errors->first('ngay_bat_dau')}}</strong>
							    </div>
		                        @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ngày Kết Thúc</label>
                                <input type="date" name="ngay_ket_thuc" class="form-control" >
                                @if($errors->has('ngay_ket_thuc'))
							    <div class="alert alert-danger" role="alert">
								<strong>{{$errors->first('ngay_ket_thuc')}}</strong>
							    </div>
		                        @endif
                            </div>
                            <button type="submit" name="save-user" class="btn btn-info">Thêm GiftCode</button>
                        </form>
                    </div>

                </div>
            </section>

        </div>
    </div>
</div>
@endsection
