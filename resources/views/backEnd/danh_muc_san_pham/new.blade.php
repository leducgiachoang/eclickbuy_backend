@extends('template.backend')

@section('container')

<div class="row">
    <div class="col-lg-6 ">
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


    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                Danh sách
            </div>


            <div class="card-body">

                <div class="list_danhsach">
                <table class="table table-hover">

                        <thead>
                            <tr>
                                <td>id</td>
                                <td>Tên danh mục</td>
                                <td>hình ảnh</td>
                                <td></td>
                                <td></td>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($danhsach as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->ten_danh_muc }}</td>
                                <td><img width="40" src="images/category_product/{{ $item->hinh_anh }}" alt="{{ $item->hinh_anh }}"></td>
                                <td><a href="{{ route('DanhMucSanPham_xoa',['id'=> $item->id]) }}"><button type="button" class="btn btn-warning">Xóa</button> </a>                               </td>
                                <td><button type="button" class="btn btn-primary">Chỉnh sửa</button></td>
                            </tr>
                            @endforeach
                        </tbody>
                </table>
            </div>
            </div>
        </div>

    </div>
</div>


@endsection
