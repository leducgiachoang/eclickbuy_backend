@extends('template.backend')
@section('container')
<div class="row">
    <div class="col-lg-12">
        <section class="card">
            <header class="card-header">
                Thêm Slider
            </header>
            <div class="card-body">

                <div>
                    <?php
                    $message = Session::get('message');
                    if ($message) {
                        echo $message;
                        Session::put('message', null);
                    }
                    ?><hr>
                    <form role="form" action="{{route('save-slider')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hình ảnh</label>
                            <input type="file" name="hinh_anh" class="form-control" id="exampleInputEmail1">
                            @if($errors->has('hinh_anh'))
							<div class="alert alert-danger" role="alert">
								 <strong>{{$errors->first('hinh_anh')}}</strong>
							</div>
		                    @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nội Dung</label>
                            <textarea id="editor1" style="resize:none" rows="5" name="noi_dung_hinh_anh" class="form-control" id="exampleInputEmail1" placeholder="Mô tả Slider"></textarea>
                        </div>
                        <button type="submit" name="add_slider_product" class="btn btn-info">Thêm Slider</button>
                    </form>
                </div>

            </div>
        </section>

    </div>
</div>
@endsection
