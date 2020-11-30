@extends('template.front_end')
@section('container_layout')
@section('title','Tìm Kiếm Sản Phẩm')
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
                    <a href="{{ route('ThuongHieu_get_Id', ['thuong_hieu'=>$thuonghieu->ten_thuong_hieu]) }}" title="{{ $thuonghieu->ten_thuong_hieu }}">
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

            <div class="category-products products">

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
                                        title="{{ $itesanham->ten_san_pham }}">
                                        <img class="lazyload"
                                            src="../images/producs/{{ $itesanham->hinh_anh }}" alt="Macbook Pro 2017 MPTR2">
                                    </a>


                                        @if ($itesanham->id_khuyen_mai == 1)

                                        @else
                                        <span class="smart">
                                            -{{ $itesanham->khuyenmai->gia_tri }}%
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
                                                        href="{{ route('ChiTietSanPham',['ten_san_pham'=>$itesanham->ten_san_pham ]) }}"
                                                        title="Macbook Pro 2017 MPTR2">
                                                        {{ $itesanham->ten_san_pham }}</a></h3>
                                                <div class="price-box">
                                                    @if (($itesanham->gia_sale) != '')
                                                    {{ number_format($itesanham->gia_sale, 0,'.', '.') }}₫
                                                    @else
                                                    {{ number_format($itesanham->gia_goc, 0,'.', '.') }}₫
                                                    @endif
                                                    <span class="compare-price">
                                                        @if (($itesanham->gia_sale) == true)
                                                        {{ number_format($itesanham->gia_goc, 0,'.', '.') }}₫
                                                        @else

                                                        @endif
                                                    </span>
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


            </div>
        </div>

    </div>

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
