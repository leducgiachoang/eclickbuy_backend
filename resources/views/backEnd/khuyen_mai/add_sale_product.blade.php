@extends('template.backend')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading" style="text-align: center">
                    Thêm khuyến mãi
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
                        <form role="form" action="{{route('save-sale-product')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nội Dung Khuyến Mãi</label>
                                    <textarea id="editor1" style="resize:none" rows="5" name="noi_dung_khuyen_mai" class="form-control" id="exampleInputEmail1" placeholder="Nội Dung Khuyến Mãi"></textarea>
                                </div>
                                @if($errors->has('noi_dung_khuyen_mai'))
							    <div class="alert alert-danger" role="alert">
								<strong>{{$errors->first('noi_dung_khuyen_mai')}}</strong>
							    </div>
		                        @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Giá Trị</label>
                                <div class="input-group mb-3">
                                    <input type="number" name="gia_tri" placeholder="Giá Trị" class="form-control">
                                    <div class="input-group-append">
                                      <span class="input-group-text">VNĐ</span>
                                    </div>
                                </div>
                                @if($errors->has('gia_tri'))
							    <div class="alert alert-danger" role="alert">
								<strong>{{$errors->first('gia_tri')}}</strong>
							    </div>
		                        @endif
                            </div>
                            <button type="submit" name="save-user" class="btn btn-info">Thêm khuyến mãi</button>
                        </form>
                    </div>

                </div>
            </section>

        </div>
    </div>
</div>
@endsection
