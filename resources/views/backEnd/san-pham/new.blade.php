@extends('backEnd.san-pham.template')
@section('content_sanpham')
<div class="card">
    <div class="card-header">
        Thêm mới sản phẩm
    </div>
    <div class="card-body">
       <form method="POST" enctype="multipart/form-data">
           @csrf
           <div class="row">
               <div class="col-lg-4">
                <div class="form-group">
                    <label>Tên sản phẩm</label>
                    <input type="text" name="ten_san_pham" class="form-control">
                    @error('ten_san_pham')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
               </div>

               <div class="col-lg-4">
                <div class="form-group">
                    <label>Số lượng</label>
                    <input type="number" name="so_luong" class="form-control">
                    @error('so_luong')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
               </div>

               <div class="col-lg-4">
                <div class="form-group">
                    <label>Giá gốc</label>
                    <div class="input-group mb-3">
                        <input type="number" name="gia_goc" class="form-control">
                        <div class="input-group-append">
                          <span class="input-group-text">đ</span>
                        </div>
                    </div>
                    @error('gia_goc')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
               </div>
           </div>

           <div class="row">
               <div class="col-lg-4">
                <div class="form-group">
                    <label>Giá khuyến mãi</label>
                    <div class="input-group mb-3">
                        <input type="number" name="gia_sale" class="form-control">
                        <div class="input-group-append">
                          <span class="input-group-text">đ</span>
                        </div>
                    </div>
                    @error('gia_sale')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
               </div>
               <div class="col-lg-4">
                <div class="form-group">
                    <label>Ảnh sản phẩm</label>
                    <input type="file" name="hinh_anh" class="form-control">
                    @error('hinh_anh')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
               </div>
               <div class="col-lg-4">
                   <div class="form-group">
                       <label>Danh mục</label>
                       <select class="form-control" name="id_danh_muc">
                       @foreach ($danhmucs as $danhmuc)
                       <option value="{{ $danhmuc->id }}">{{ $danhmuc->ten_danh_muc }}</option>
                       @endforeach
                      </select>
                       @error('id_danh_muc')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                   </div>
               </div>
           </div>

           <div class="row">
               <div class="col-lg-4">
                <div class="form-group">
                    <label>Thương hiệu</label>
                    <select class="form-control" name="id_thuong_hieu">
                     @foreach ($thuonghieus as $thuonghieu)
                     <option value="{{ $thuonghieu->id }}">{{ $thuonghieu->ten_thuong_hieu }}</option>
                     @endforeach
                   </select>
                    @error('id_thuong_hieu')
                   <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
                </div>
               </div>
               <div class="col-lg-4">
                <div class="form-group">
                    <label>Khuyến mãi</label>
                    <select class="form-control" name="id_khuyen_mai">
                     @foreach ($khuyenmais as $khuyenmai)
                     <option value="{{ $khuyenmai->id }}">{{ $khuyenmai->gia_tri }} %</option>
                     @endforeach
                   </select>
                    @error('id_khuyen_mai')
                   <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
                </div>
               </div>
               <div class="col-lg-4">
                <div class="form-group">
                    <label>Hình ảnh 1</label>
                    <input type="file" name="hinh_anh1" class="form-control">
                    @error('hinh_anh1')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
               </div>
           </div>

           <div class="row">
               <div class="col-lg-4">
                <div class="form-group">
                    <label>Hình ảnh 2</label>
                    <input type="file" name="hinh_anh2" class="form-control">
                    @error('hinh_anh2')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
               </div>
               <div class="col-lg-4">
                <div class="form-group">
                    <label>Hình ảnh 3</label>
                    <input type="file" name="hinh_anh3" class="form-control">
                    @error('hinh_anh3')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
               </div>
               <div class="col-lg-4"></div>
           </div>

           <div class="row">
               <div class="col-lg-12">
                <div class="form-group">
                    <label>Mô tả</label>
                    <textarea name="mo_ta" id="editor1" class="form-control" cols="30" rows="10"></textarea>
                    @error('mo_ta')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
               </div>
               <div class="col-lg-12">
                <div class="form-group">
                    <label>Thông số kỹ thuật</label>
                    <textarea name="thong_so_ky_thuat" id="editor2" class="form-control" cols="30" rows="10"></textarea>
                    @error('thong_so_ky_thuat')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
               </div>

               <div class="col-lg-12">
                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <a class="btn btn-primary" href="{{ route('danh_sach_product') }}">Danh sách</a>
               </div>
           </div>

       </form>
    </div>

</div>
@endsection
