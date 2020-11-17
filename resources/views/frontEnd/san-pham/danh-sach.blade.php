@extends('template.front_end')
@section('container_layout')
<div class="container">

    <link href="../css/sidebar_style.scss.css" rel="stylesheet" type="text/css">



	<link href="../css/collection_style.scss.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="../css/responsive.scss.css">
<section class="section_brand col-xl-12 col-lg-12">
    <div class="section">
        <div class="slick_product slickbrand">



            @foreach ($thuonghieus as $thuonghieu)
            <div class="item">
                <div class="brand">
                    <a href="" title="{{ $thuonghieu->ten_thuong_hieu }}">
                        @if (($thuonghieu->hinh_anh)== '')
                        <img src="../images/brand_product/samsung.png"
                            alt="{{ $thuonghieu->ten_thuong_hieu }}">
                        @else
                        <img src="../images/brand_product/{{ $thuonghieu->hinh_anh }}"
                            alt="{{ $thuonghieu->ten_thuong_hieu }}">
                        @endif

                    </a>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<script type="text/javascript">
    $(document).ready(function ($) {
        $('.slickbrand').slick({
            autoplay: true,
            autoplaySpeed: 6000,
            dots: false,
            arrows: false,
            infinite: false,
            speed: 300,
            slidesToShow: 8,
            slidesToScroll: 8,
            responsive: [{
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 8,
                        slidesToScroll: 8
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 5,
                        slidesToScroll: 5
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                }
            ]
        });
    });
</script>
<div class="main_container collection collection2 col-lg-12 col-md-12 col-sm-12">
    <div class="mcollection">
        <div class="clearfix">
            <h1 class="h1_title">{{ $tenth }}</h1>
            <aside class="dqdt-sidebar sidebar dqdt-sidebar2 sidebar2 left-content2 clearfix">
                <div class="wrap_background_aside asidecollection">
                    <div class="filter-content">
                        <div class="filter-container">

                            <aside class="aside-item filter-price">
                                <div class="aside-title-price">
                                    <h2><span>Chọn mức giá:</span></h2>
                                </div>
                                <div class="aside-content filter-group content_price">
                                    <ul>

                                    <form action="">
                                        <li
                                            class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label data-filter="2-000-000d"
                                                    for="filter-duoi-2-000-000d">
                                                    <input name="gia" type="radio" id="filter-duoi-2-000-000d" value="{{ $id_danh_muc }}">
                                                    <i class="fa"></i>
                                                    Dưới 2 triệu
                                                </label>
                                            </span>
                                        </li>


                                        <li
                                            class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label data-filter="4-000-000d"
                                                    for="filter-2-000-000d-4-000-000d">
                                                    <input name="gia" type="radio" id="filter-2-000-000d-4-000-000d" value="{{ $id_danh_muc }}">
                                                    <i class="fa"></i>
                                                    Từ 2 triệu - 4 triệu
                                                </label>
                                            </span>
                                        </li>


                                        <li
                                            class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label data-filter="7-000-000d"
                                                    for="filter-4-000-000d-7-000-000d">
                                                    <input name="gia" type="radio" id="filter-4-000-000d-7-000-000d" value="{{ $id_danh_muc }}">
                                                    <i class="fa"></i>
                                                    Từ 4 triệu - 7 triệu
                                                </label>
                                            </span>
                                        </li>


                                        <li
                                            class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label data-filter="13-000-000d"
                                                    for="filter-7-000-000d-13-000-000d">
                                                    <input name="gia" type="radio" id="filter-7-000-000d-13-000-000d" value="{{ $id_danh_muc }}">
                                                    <i class="fa"></i>
                                                    Từ 7 triệu - 13 triệu
                                                </label>
                                            </span>
                                        </li>
                                        <li
                                            class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label data-filter="13-000-000d"
                                                    for="filter-tren13-000-000d">
                                                    <input name="gia" type="radio" id="filter-tren13-000-000d" value="{{ $id_danh_muc }}">
                                                    <i class="fa"></i>
                                                    Trên 13 triệu
                                                </label>
                                            </span>
                                        </li>

                                        <li
                                            class="filter-item filter-item--check-box filter-item--green">
                                            <span>
                                                <label data-filter="tat-ca"
                                                    for="tat-ca">
                                                    <input style="display: none" name="gia" type="radio" id="tat-ca" value="{{ $id_danh_muc }}">
                                                    <i class="fas fa-times"></i>
                                                    Mặc định
                                                </label>
                                            </span>
                                        </li>
                                    </form>
                                    </ul>
                                </div>
                            </aside>

                </div>
            </aside>
            <div class="category-products products">

                <div class="section">
                    <div class="sortPagiBar margin-bottom-15">
                        <div class="bg-white sort-cate clearfix f-left">
                            <div id="sort-by">
                                <ul class="ul_col">
                                    <li><span class="ico">Sắp xếp:</span>
                                        <ul class="content_ul">
                                            <li id="mac-dinh">Mặc định</li>
                                            <li id="a-z">A &rarr; Z</li>
                                            <li id="z-a">Z &rarr; A</li>
                                            <li id="gia-tang">Giá tăng dần</li>
                                            <li id="gia-giam">Giá giảm dần</li>
                                            <li id="hang-moi">Hàng mới nhất</li>
                                            <li id="hang-cu">Hàng cũ nhất</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>




                <section class="products-view products-view-grid list_hover_pro">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="show_product" class="clearfix">

                                @foreach ($sanhams as $itesanham)



                                <div class="col-6 col-sm-6 col-lg-3 col-lg-fix-5 product-col item-border no-padding">
                                    <div class="item_product_main">

                                <div class="product-thumbnail">
                                    <a class="image_thumb scale_hover"
                                        href="{{ route('ChiTietSanPham',['ten_san_pham'=>$itesanham->ten_san_pham ]) }}"
                                        title="Macbook Pro 2017 MPTR2">
                                        <img class="lazyload"
                                            src="../images/producs/{{ $itesanham->hinh_anh }}" alt="Macbook Pro 2017 MPTR2">
                                    </a>


                                        @if ($itesanham->id_khuyen_mai == 1)

                                        @else
                                        <span class="smart">
                                            {{ $itesanham->khuyenmai->gia_tri }}%
                                        </span>
                                        @endif


                                    <div class="action">


                                        <button class="hidden-xs btn-buy btn-cart btn btn-views left-to add_to_cart active"
                                            title="Thêm vào giỏ hàng" data-toggle="modal" data-target="#exampleModal">
                                            <input type="hidden" class="val_id_product" value="{{ $itesanham->id }}">
                                            <i class="fas fa-shopping-basket iconcart"></i>
                                        </button>


                                        <a title="Xem nhanh"
                                            href="{{ route('ChiTietSanPham',['ten_san_pham'=>$itesanham->ten_san_pham ]) }}"
                                            data-handle="macbook-pro-2017-mptr2"
                                            class="xem_nhanh btn right-to quick-view btn-views hidden-xs hidden-sm hidden-md">
                                            <i class="fas fa-search-plus"></i>
                                        </a>

                                    </div>
                                </div>
                                            <div class="product-info">
                                                <h3 class="product-name"><a
                                                        href="macbook-pro-2017-mptr2.html"
                                                        title="Macbook Pro 2017 MPTR2">
                                                        {{ $itesanham->ten_san_pham }}</a></h3>
                                                <div class="price-box">

                                                    {{ number_format($itesanham->gia_goc, 3,'.', ',') }}₫


                                                </div>

                                            </div>
                                    </div>
                                </div>

                                @endforeach


                            </div>

                        </div>

                    </div>


                </section>
                <div class="section pagenav clearfix a-center">

                </div>
                <div id="open-filters" class="open-filters d-lg-none d-xl-none">
                    <i class="fa fa-filter"></i>
                    <span>Lọc</span>
                </div>

            </div>
        </div>

    </div>

    <script>
        $(document).ready(function(){
            $('.add_to_cart').click(function(){
                var $idprd = $(this).find('.val_id_product').val();
                $.get('/gio-hang/them/'+ $idprd, function(data){
                    $('#so_cart').html(data);
                })
            })

            $('#add_to_cart').click(function(){
                alert('hello');
            })

            $('#filter-duoi-2-000-000d').focus(function(){
                var $id = $(this).val();
                $.get('/san-pham/ajax/filter-duoi-2-000-000d/'+ $id, function(data){
                    $('#show_product').html(data);
                })
            })

            $('#filter-2-000-000d-4-000-000d').focus(function(){
                var $id = $(this).val();
                $.get('/san-pham/ajax/filter-2-000-000d-4-000-000d/'+ $id, function(data){
                    $('#show_product').html(data);
                })
            })
            $('#filter-4-000-000d-7-000-000d').focus(function(){
                var $id = $(this).val();
                $.get('/san-pham/ajax/filter-4-000-000d-7-000-000d/'+ $id, function(data){
                    $('#show_product').html(data);
                })
            })
            $('#filter-7-000-000d-13-000-000d').focus(function(){
                var $id = $(this).val();
                $.get('/san-pham/ajax/filter-7-000-000d-13-000-000d/'+ $id, function(data){
                    $('#show_product').html(data);
                })
            })
            $('#filter-tren13-000-000d').focus(function(){
                var $id = $(this).val();
                $.get('/san-pham/ajax/filter-tren13-000-000d/'+ $id, function(data){
                    $('#show_product').html(data);
                })
            })
            $('#tat-ca').focus(function(){
                var $id = $(this).val();
                $.get('/san-pham/ajax/tat-ca/'+ $id, function(data){
                    $('#show_product').html(data);
                })
            })

            {{-- sắp xếp --}}

            $('#mac-dinh').click(function(){
                var $id = {{ $id_danh_muc }};
                $.get('/san-pham/ajax/sap-xep/mac_dinh/'+ $id, function(data){
                    $('#show_product').html(data);
                })
            })

            $('#a-z').click(function(){
                var $id = {{ $id_danh_muc }};
                $.get('/san-pham/ajax/sap-xep/a_z/'+ $id, function(data){
                    $('#show_product').html(data);
                })
            })

            $('#z-a').click(function(){
                var $id = {{ $id_danh_muc }};
                $.get('/san-pham/ajax/sap-xep/z_a/'+ $id, function(data){
                    $('#show_product').html(data);
                })
            })

            $('#gia-tang').click(function(){
                var $id = {{ $id_danh_muc }};
                $.get('/san-pham/ajax/sap-xep/gia_tang/'+ $id, function(data){
                    $('#show_product').html(data);
                })
            })

            $('#gia-giam').click(function(){
                var $id = {{ $id_danh_muc }};
                $.get('/san-pham/ajax/sap-xep/gia_giam/'+ $id, function(data){
                    $('#show_product').html(data);
                })
            })

            $('#hang-moi').click(function(){
                var $id = {{ $id_danh_muc }};
                $.get('/san-pham/ajax/sap-xep/hang_moi/'+ $id, function(data){
                    $('#show_product').html(data);
                })
            })
            $('#hang-cu').click(function(){
                var $id = {{ $id_danh_muc }};
                $.get('/san-pham/ajax/sap-xep/hang_cu/'+ $id, function(data){
                    $('#show_product').html(data);
                })
            })
        })
    </script>
</div>
</div>
</div>
</div>

</div>

<script>
var colName = "Laptop - Laptop gaming";

var colId = 2299243;


var selectedViewData = "data";

$('.slickcategory').slick({
autoplay: false,
autoplaySpeed: 6000,
dots: false,
arrows: false,
loop: false,
infinite: false,
speed: 300,
rows: 1,
slidesToShow: 8,
slidesToScroll: 2,
responsive: [{
breakpoint: 1365,
settings: {
    slidesToShow: 5,
    slidesToScroll: 2
}
},
{
breakpoint: 1200,
settings: {
    slidesToShow: 4,
    slidesToScroll: 2
}
},
{
breakpoint: 1024,
settings: {
    slidesToShow: 4,
    slidesToScroll: 2
}
},
{
breakpoint: 991,
settings: {
    slidesToShow: 4,
    slidesToScroll: 2
}
},
{
breakpoint: 767,
settings: {
    slidesToShow: 2,
    slidesToScroll: 2
}
}
]
});
</script>


<link href="../css/bpr-products-module.css" rel="stylesheet"
type="text/css">
<div class="sapo-product-reviews-module"></div>

</div>
@section('script')
<style>
    #menu_header_menu{
        display: none;
    }
    #box_menu_group_header:hover #menu_header_menu{
        display: block
    }
    #banner_header_menu{
        display: none;
    }

</style>
@endsection

@endsection
