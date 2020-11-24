@extends('template.backend')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading" style="text-align: center">
                    Cập nhật khuyến mãi
                </header>
                <div class="panel-body">
                    @foreach($edit_sale_product as $key =>$edit_sale)
                    <div class="position-center">
                        <?php
                        $message = Session::get('message');
                        if ($message) {
                            echo $message;
                            Session::put('message', null);
                        }
                        ?><hr>
                        <form role="form" action="{{route('update-sale-product',['id'=> $edit_sale->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nội Dung Khuyến Mãi</label>
                                    <textarea style="resize:none" rows="5" name="noi_dung_khuyen_mai" class="form-control" id="exampleInputEmail1">{{$edit_sale->noi_dung_khuyen_mai}}</textarea>
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
                                    <input type="number" name="gia_tri" value="{{$edit_sale->gia_tri}}" class="form-control">
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
                            <button type="submit" name="save-sale" class="btn btn-info">Cập nhật khuyến mãi</button>
                        </form>
                    </div>
                    @endforeach
                </div>
            </section>

        </div>
    </div>
</div>
@endsection
