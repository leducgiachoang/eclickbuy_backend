@extends('template.backend')
@section('container')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading" style="text-align: center">
                Sửa thương hiệu sản phẩm
            </header>
            <div class="panel-body">
                @foreach($edit_brand_product as $key =>$edit_value)
                <div class="position-center">
                    <?php
                    $message = Session::get('message');
                    if ($message) {
                        echo $message;
                        Session::put('message', null);
                    }
                    ?><hr>
                    <form role="form" action="{{route('update-brand-product',['id'=> $edit_value->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên thương hiệu</label>
                            <input type="text" name="brand_product_name" class="form-control" value="{{$edit_value->ten_thuong_hieu}}" placeholder="Tên thương hiệu">
                            @if($errors->has('brand_product_name'))
							    <div class="alert alert-danger" role="alert">
								<strong>{{$errors->first('brand_product_name')}}</strong>
							    </div>
		                    @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hình ảnh</label>
                            <input type="file" name="hinh_anh" class="form-control" id="exampleInputEmail1"><hr>
                            <img src="images/brand_product/{{$edit_value->hinh_anh}}" alt="" height="120" width="100">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả danh mục</label>
                            <textarea style="resize:none" rows="5" name="brand_product_desc" class="form-control">{{$edit_value->mo_ta}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Trạng thái</label>
                            <select name="brand_product_status" class="form-control input-sm m-bot15">
                                <option value="0">Hiển thị</option>
                                <option value="1">Ẩn</option>
                            </select>
                        </div>
                        <button type="submit" name="update_brand_product" class="btn btn-info">Cập nhật thương hiệu</button>
                    </form>
                </div>
                @endforeach
            </div>
        </section>

    </div>
</div>
@endsection
