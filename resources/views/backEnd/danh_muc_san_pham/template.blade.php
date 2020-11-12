@extends('template.backend')

@section('container')

<div class="row">
    <div class="col-lg-6 ">

        @yield('danhmucsanpham_templae')

    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                Danh sách
            </div>


            <div class="card-body">

                <div class="list_danhsach">
                <table class="table table-hover table-borderless">

                        <thead>
                            <tr>
                                <td>STT</td>
                                <td>Tên danh mục</td>
                                <td>hình ảnh</td>
                                <td></td>
                                <td></td>
                            </tr>
                        </thead>

                        <tbody>
                            <div>
                                <?php $a=1 ?>
                            @foreach ($danhsach as $item)
                            <tr>
                                <td>{{ $a }}</td>
                                <td>{{ $item->ten_danh_muc }}</td>
                                <td><img width="40" src="images/category_product/{{ $item->hinh_anh }}" alt="{{ $item->hinh_anh }}"></td>
                                <td><a href="{{ route('DanhMucSanPham_xoa',['id'=> $item->id]) }}"><button type="button" class="btn btn-warning">Xóa</button> </a>                               </td>
                                <td><a href="{{ route('DanhMucSanPham_sua_get', ['id' => $item->id]) }}"><button type="button" class="btn btn-primary">Chỉnh sửa</button></a></td>
                            </tr>
                            <?php $a++ ?>
                            @endforeach
                        </div>
                        </tbody>

                        @section('script')

                        @endsection


                </table>
            </div>
            </div>
            <div class="card-footer">
                {{ $danhsach->links() }}
            </div>
        </div>

    </div>
</div>


@endsection
