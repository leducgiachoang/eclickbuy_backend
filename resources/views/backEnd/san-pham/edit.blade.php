@extends('backEnd.san-pham.template')
@section('content_sanpham')

@foreach ($sanpham_byIds as $sanpham_byId)

<div class="card">
    <div class="card-header">
        Chỉnh sản sản phẩm {{ $sanpham_byId->ten_san_pham }}
    </div>
    <div class="card-body">
       <form method="POST" enctype="multipart/form-data">
           @csrf
           <div class="row">
               <div class="col-lg-4">
                <div class="form-group">
                    <label>Tên sản phẩm</label>
                    <input type="text" value="{{ $sanpham_byId->ten_san_pham }}" name="ten_san_pham" class="form-control">
                    @error('ten_san_pham')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
               </div>

               <div class="col-lg-4">
                <div class="form-group">
                    <label>Số lượng</label>
                    <input type="number" value="{{ $sanpham_byId->so_luong }}" name="so_luong" class="form-control">
                    @error('so_luong')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
               </div>

               <div class="col-lg-4">
                <div class="form-group">
                    <label>Giá gốc</label>
                    <div class="input-group mb-3">
                        <input type="number" value="{{ $sanpham_byId->gia_goc }}" name="gia_goc" class="form-control">
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
                        <input type="number" value="{{ $sanpham_byId->gia_sale }}" name="gia_sale" class="form-control">
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
                            <div class="row">
                                <div class="col-lg-9">
                            <input style="overflow: hidden" type="file" name="hinh_anhx" class="form-control">
                            <input type="hidden" value="{{ $sanpham_byId->hinh_anh }}" name="hinh_anh" class="form-control">
                        </div>
                        <div class="col-lg-3">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#hinhanh">
                                <i class="fas fa-search-plus"></i>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="hinhanh" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img width="100%" src="images/producs/{{ $sanpham_byId->hinh_anh }}" alt="">
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    @error('hinh_anhx')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
               </div>
               <div class="col-lg-4">
                   <div class="form-group">
                       <label>Danh mục</label>
                       <select class="form-control" name="id_danh_muc">
                           <option value="{{ $sanpham_byId->id_danh_muc }}">{{ $sanpham_byId->danhmuc->ten_danh_muc }}</option>
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
                        <option value="{{ $sanpham_byId->id_thuong_hieu }}">{{ $sanpham_byId->thuonghieu->ten_thuong_hieu }}</option>
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
                    <div class="row">
                        <div class="col-lg-9">
                            <input style="overflow: hidden" type="file" name="hinh_anhx"  type="file" name="hinh_anh1x" class="form-control">
                            <input type="hidden" value="{{ $sanpham_byId->hinh_anh1 }}" name="hinh_anh1" class="form-control">
                        </div>
                        <div class="col-lg-3">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#hinhanh1">
                                <i class="fas fa-search-plus"></i>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="hinhanh1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img width="100%" src="images/producs/{{ $sanpham_byId->hinh_anh1 }}" alt="">
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    @error('hinh_anh1x')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
               </div>
           </div>

           <div class="row">
               <div class="col-lg-4">
                <div class="form-group">
                    <label>Hình ảnh 2</label>
                    <div class="row">
                        <div class="col-lg-9">
                            <input style="overflow: hidden" type="file" name="hinh_anh2x" class="form-control">
                            <input type="hidden" value="{{ $sanpham_byId->hinh_anh2 }}" name="hinh_anh2" class="form-control">
                        </div>
                        <div class="col-lg-3">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#hinhanh2">
                                <i class="fas fa-search-plus"></i>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="hinhanh2" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img width="100%" src="images/producs/{{ $sanpham_byId->hinh_anh2 }}" alt="">
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                     @error('hinh_anh2x')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
               </div>
               <div class="col-lg-4">
                <div class="form-group">
                    <label>Hình ảnh 3</label>
                    <div class="row">
                        <div class="col-lg-9">
                            <input style="overflow: hidden" type="file" name="hinh_anh3x" class="form-control">
                            <input type="hidden" value="{{ $sanpham_byId->hinh_anh3 }}" name="hinh_anh3" class="form-control">
                        </div>
                        <div class="col-lg-3">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#hinhanh3">
                                <i class="fas fa-search-plus"></i>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="hinhanh3" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img width="100%" src="images/producs/{{ $sanpham_byId->hinh_anh3 }}" alt="">
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                     @error('hinh_anh3x')
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
                    <textarea name="mo_ta" id="editor1" class="form-control" cols="30" rows="10">
                        {{ $sanpham_byId->mo_ta }}
                    </textarea>
                    @error('mo_ta')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
               </div>
               <div class="col-lg-12">
                <div class="form-group">
                    <label>Thông số kỹ thuật</label>
                    <textarea name="thong_so_ky_thuat" id="editor2" class="form-control" cols="30" rows="10">
                        {{ $sanpham_byId->thong_so_ky_thuat }}
                    </textarea>
                    @error('thong_so_ky_thuat')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
               </div>

               <div class="col-lg-12">
                <button type="submit" class="btn btn-primary">Cập nhập</button>
                <a class="btn btn-primary" href="{{ route('danh_sach_product') }}">Danh sách</a>
               </div>
           </div>

       </form>
    </div>

</div>


@endforeach
@endsection
