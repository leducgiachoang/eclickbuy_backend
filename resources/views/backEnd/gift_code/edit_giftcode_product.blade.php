@extends('template.backend')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading" style="text-align: center">
                    Cập nhật GiftCode
                </header>
                <div class="panel-body">
                    @foreach($edit_giftcode_product as $key =>$edit_giftcode)
                    <div class="position-center">
                        <?php
                        $message = Session::get('message2');
                        if ($message) {
                            echo $message;
                            Session::put('message2', null);
                        }
                        ?><hr>
                        <form role="form" action="{{route('update-giftcode-product',['id'=> $edit_giftcode->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mã GiftCode</label>
                                <input type="text" name="code" class="form-control" value="{{$edit_giftcode->code}}">
                                @if($errors->has('code'))
							    <div class="alert alert-danger" role="alert">
								<strong>{{$errors->first('code')}}</strong>
							    </div>
		                        @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Giá Trị</label>
                                <div class="input-group mb-3">
                                    <input type="number" name="gia_tri" value="{{$edit_giftcode->gia_tri}}" class="form-control">
                                    <div class="input-group-append">
                                      <span class="input-group-text">%</span>
                                    </div>
                                </div>
                                @if($errors->has('gia_tri'))
							    <div class="alert alert-danger" role="alert">
								<strong>{{$errors->first('gia_tri')}}</strong>
							    </div>
		                        @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ngày Bắt Đầu</label>
                                <input type="date" name="ngay_bat_dau" value="{{$edit_giftcode->ngay_bat_dau}}" class="form-control" >
                                @if($errors->has('ngay_bat_dau'))
							    <div class="alert alert-danger" role="alert">
								<strong>{{$errors->first('ngay_bat_dau')}}</strong>
							    </div>
		                        @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ngày Kết Thúc</label>
                                <input type="date" name="ngay_ket_thuc" value="{{$edit_giftcode->ngay_ket_thuc}}" class="form-control" >
                                @if($errors->has('ngay_ket_thuc'))
							    <div class="alert alert-danger" role="alert">
								<strong>{{$errors->first('ngay_ket_thuc')}}</strong>
							    </div>
		                        @endif
                            </div>
                            <button type="submit" name="save-giftcode" class="btn btn-info">Cập nhật khuyến mãi</button>
                        </form>
                    </div>
                    @endforeach
                </div>
            </section>

        </div>
    </div>
</div>
@endsection
