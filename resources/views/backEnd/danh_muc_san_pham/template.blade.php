@extends('template.backend')

@section('container')
@if (session('success'))
<div class="alert alert-success">
 {{ session('success') }}
</div>
@endif

@if (session('danger'))
<div class="alert alert-danger">
 {{ session('danger') }}
</div>
@endif

<div class="row">
    <div class="col-lg-6 ">

        @yield('danhmucsanpham_templae')

    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                Danh sách
                <!-- Topbar Search -->
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                    <input type="text" class="form-control border-0 small" id="search_category" placeholder="Tìm kiếm danh mục" aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" onclick="tai_lai_trang()" type="button">
                        <i class="fas fa-sync"></i>
                        </button>
                    </div>
                    </div>
                </form>
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

                        <tbody id="dynamic-row">
                            <div>
                                <?php $a=1 ?>
                            @foreach ($danhsach99 as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->ten_danh_muc }}</td>
                                <td><img width="40" src="images/category_product/{{ $item->hinh_anh }}" alt="{{ $item->hinh_anh }}"></td>
                                <td><a onclick="return confirm('Bạn có chắc muốn xóa danh mục này?')" href="{{ route('DanhMucSanPham_xoa',['id'=> $item->id]) }}"><button type="button" class="btn btn-warning">Xóa</button> </a></td>
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
                {{ $danhsach99->links() }}
            </div>
        </div>

    </div>
</div>

<script type="text/javascript">
        function tai_lai_trang(){
            location.reload();
        }
        $('body').on('keyup','#search_category',function(){
            var searchQuesr = $(this).val();
            $.ajax({
                method: 'POST',
                url: '{{route("search-category")}}',
                dataType: 'json',
                data:{
                    '_token':'{{csrf_token()}}',
                    searchQuesr : searchQuesr
                },
                success: function(res){
                    var tableRow ='';
                    $('#dynamic-row').html('');
                    $.each(res,function(index,value){
                        tableRow = '<tr><td>'+value.id+'</td><td>'+value.ten_danh_muc+'</td><td><img width="40" src="images/category_product/'+value.hinh_anh+'" alt="'+value.hinh_anh+'"></td> <td><a href="admin/danh-muc-san-pham/xoa/'+value.id+'"><button type="button" class="btn btn-warning">Xóa</button> </a></td><td><a href="admin/danh-muc-san-pham/chinh-sua/'+value.id+'"><button type="button" class="btn btn-primary">Chỉnh sửa</button></a></td></tr>';
                        $('#dynamic-row').append(tableRow);
                    });
                }
            });
        });
    </script>
@endsection
