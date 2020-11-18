@extends('backEnd.danh_muc_san_pham.template')

@section('danhmucsanpham_templae')

            <div class="card">
                <div class="card-header">
                    Thêm mới Danh mục
                </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Tên danh mục</label>
                          <input type="text" name="ten_danh_muc" class="form-control">
                          @error('ten_danh_muc')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                          </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Hình ảnh</label>
                          <input type="file" class="form-control" name="hinh_anh">
                          @error('hinh_anh')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                      </form>
                </div>
            </div>

@endsection
