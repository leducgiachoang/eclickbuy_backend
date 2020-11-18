@extends('backEnd.danh_muc_san_pham.template')

@section('danhmucsanpham_templae')

@foreach ($dbedit as $danhmuc)
            <div class="card">
                <div class="card-header">
                    Chỉnh sửa sản phẩm #{{ $danhmuc->id }}
                </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Tên danh mục</label>
                          <input type="text" value="{{ $danhmuc->ten_danh_muc }}" name="ten_danh_muc" class="form-control">
                          @error('ten_danh_muc')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                          </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Hình ảnh</label>
                          <input type="file" class="form-control" name="hinh_anhx">
                          <input type="hidden" class="form-control" value="{{ $danhmuc->hinh_anh }}" name="hinh_anh">
                          @error('hinh_anhx')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>

                        <div class="form-group">
                            <img width="80" src="images/category_product/{{ $danhmuc->hinh_anh}}" alt="">
                        </div>
                        <button type="submit" class="btn btn-primary">Cập nhập</button>
                      </form>
                </div>
            </div>
@endforeach



@endsection
