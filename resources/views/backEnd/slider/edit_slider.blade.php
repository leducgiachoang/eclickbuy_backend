@extends('template.backend')
@section('container')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading" style="text-align: center">
                Sửa Slider
            </header>
            <div class="panel-body">
                @foreach($edit_slider as $key =>$e_slider)
                <div class="position-center">
                    <?php
                    $message = Session::get('message');
                    if ($message) {
                        echo $message;
                        Session::put('message', null);
                    }

                    ?><hr>
                    <form role="form" action="{{route('update-slider',['id'=> $e_slider->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hình ảnh</label>
                            <input type="file" name="hinh_anh" class="form-control" id="exampleInputEmail1"><br>
                            <img src="images/slider/{{$e_slider->hinh_anh}}" alt="" height="120" width="100">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nội Dung</label>
                            <textarea style="resize:none" rows="5" name="noi_dung_hinh_anh" class="form-control">{{$e_slider->noi_dung_hinh_anh}}</textarea>
                        </div>
                        <button type="submit" name="add_slider_product" class="btn btn-info">Cập nhật Slider</button>
                    </form>
                </div>
                @endforeach
            </div>
        </section>

    </div>
</div>
@endsection
