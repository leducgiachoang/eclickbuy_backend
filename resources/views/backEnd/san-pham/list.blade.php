@extends('backEnd.san-pham.template')

@section('content_sanpham')
<div class="card">
    <div class="card-header">
        Danh sách sản phẩm
        <!-- Topbar Search -->
        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
            <input type="text" class="form-control border-0 small" id="search_product" placeholder="Tìm kiếm sản phẩm" aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" onclick="tai_lai_trang()" type="button">
                <i class="fas fa-sync"></i>
                </button>
            </div>
            </div>
        </form>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên Sản phẩm</th>
                    <th>Hình ảnh</th>
                    <th>Số lượng</th>
                    <th>Giá sản phẩm</th>
                    <th>Giá khuyến mãi</th>
                    <th>Tùy chọn</th>
                </tr>
            </thead>
            <tbody id="product-view">
                <?php $a=1 ?>
                @foreach ($db_sps as $db_sp)
                <tr>
                    <td>{{ $a }}</td>
                    <td>{{ $db_sp->ten_san_pham }}</td>
                    <td><img width="50px" src="images/producs/{{ $db_sp->hinh_anh }}" alt=""></td>
                    <td>{{ $db_sp->so_luong }}</td>
                    <td>
                        {{ number_format($db_sp->gia_goc, 0,'.', ',') }} <img width="22" src="images/dong.png" alt="">
                    </td>
                    <td>

                        @if ($db_sp->id_khuyen_mai == 1)
                        <div class="badge badge-pill badge-secondary">Không áp dụng</div>
                        @else
                        {{ $db_sp->khuyenmai->gia_tri }} %
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-outline-success" href="{{ route('chinh_san_pham_get', ['id'=> $db_sp->id]) }}"><i class="fas fa-edit"></i></a>
                        <a class="btn btn-warning" onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này?')" href="{{ route('xoa_san_pham', ['id'=> $db_sp->id]) }}"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                <?php $a++ ?>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{ $db_sps->links() }}
    </div>
</div>
<script src="../js/jquery.number.min.js"></script>
<script type="text/javascript">
    function tai_lai_trang(){
        location.reload();
    }
    $('body').on('keyup','#search_product',function(){
        var searchProduct = $(this).val();
        $.ajax({
            method: 'POST',
            url: '{{route("search-product")}}',
            dataType: 'json',
            data:{
                '_token':'{{csrf_token()}}',
                searchProduct : searchProduct
            },
            success: function(res){
                var tableRow ='';
                $('#product-view').html('');
                $stt = 1;
                $.each(res,function(index,value){
                    $giaKhuyenMai = new Intl.NumberFormat().format(value.gia_sale)+'<img width="22" src="images/dong.png" alt="">';
                    if(!(value.gia_sale)){
                        $giaKhuyenMai = '<div class="badge badge-pill badge-secondary">Không áp dụng</div>';
                    }

                    $tableRow = '<tr><td>'+$stt+'</td><td>'+value.ten_san_pham+'</td>'
                        +'<td><img width="50px" src="images/producs/'+value.hinh_anh+'" alt=""></td>'
                        +'<td>'+value.so_luong+'</td><td>'+ new Intl.NumberFormat().format(value.gia_goc) +' <img width="22" src="images/dong.png" alt=""></td>'
                        +'<td>'+$giaKhuyenMai+' </td>'
                        +'<td> <a class="btn btn-outline-success" href="admin/san-pham/chinh-sua/'+value.id+'"><i class="fas fa-edit"></i></a> <a class="btn btn-warning" href="admin/san-pham/xoa/'+value.id+'"><i class="fas fa-trash-alt"></i></a> </td>'
                        +'</tr>';
                        $stt++;
                    $('#product-view').append($tableRow);
                });
            }
        });
    });
</script>
@endsection
