@extends('template.front_end')
@section('container_layout')
@section('title','Giỏ hàng của bạn')

<link href="../css/cartpage.scss.css" rel="stylesheet" type="text/css">
<link href="../css/bpr-products-module.css" rel="stylesheet" type="text/css">
<link href="../css/product_style.scss.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="../css/quickviews_popup_cart.scss.css">
<div class="bodywrap">
    <section class="bread-crumb">
        <span class="crumb-border"></span>
        <div class="container">
            <div class="rows">
                <div class="col-xs-12 a-left">
                    <ul class="breadcrumb">
                        <li class="home">
                            <a href=""><span>Trang chủ</span></a>
                            <span class="mr_lr">&nbsp;<i class="fa fa-angle-right"></i>&nbsp;</span>
                        </li>

                        <li><strong><span>Giỏ hàng</span></strong></li>

                    </ul>
                </div>
            </div>
        </div>
    </section>



    <section class="main-cart-page main-container col1-layout">
        <div class="main container cartpcstyle">
            <div class="wrap_background_aside">
                <div class="header-cart">

                    <div class="header-cart title_cart_pc hidden-sm hidden-xs">

                    </div>
                </div>
                <div class="col-main cart_desktop_page cart-page">
                    @if (Cart::count()== 0)
                    <div style="text-align: center">
                        <p>Không có sản phẩm nào trong giỏ hàng</p>
                        <a style="border-radius: 7px" class="btn btn-danger" href="/"><i class="fas fa-reply"></i>Tiếp tục mua hàng</a>
                    </div>
                    @else


                    <div class="cart page_cart hidden-xs hidden-sm row ">
                        <div class="col-lg-12 col-xl-12 col-md-12">
                            <h1 class="title_cart">
                                <span>Giỏ hàng của bạn</span>
                            </h1>
                        </div>
                        <div class="formcartpage col-lg-12 col-xl-12 col-md-12 margin-bottom-0">
                            <div class="bg-scroll">
                                <div class="cart-thead hidden">
                                    <div style="width: 22%" class="a-left">Ảnh sản phẩm</div>
                                    <div style="width: 28%" class="a-left">Tên sản phẩm</div>
                                    <div style="width: 15%" class="a-left">Giá bán lẻ</div>
                                    <div style="width: 10%" class="a-center">Số lượng</div>
                                    <div style="width: 15%" class="a-center">Tạm tính</div>
                                    <div style="width: 10%" class="a-center"></div>
                                </div>
                                <div class="cart-tbody">
                                    @foreach (Cart::content() as $row)
                                    {{--  ///  --}}
                                <form action="{{ route('CapNhapGioHnag_post') }}" method="POST">
                                    @csrf
                                    <div class="item-cart">
                                        <div style="width: 15%" class="image">
                                            <a class="product-image a-left" title="{{ $row->name }}"
                                                href="">
                                                <img width="75" height="auto" alt="{{ $row->name }}"
                                                    src="../images/producs/{{ $row->options -> avatar }}">
                                            </a>
                                        </div>
                                        <div style="width: 30%" class="a-left contentcart">
                                            <h3 class="product-name"> <a class="text2line"
                                                    href=""
                                                    title="{{ $row->name }}">{{ $row->name }}</a> </h3>
                                            <span class="cart-prices">
                                                <span class="prices">{{ number_format($row->price, 0,',', '.') }}₫</span>
                                            </span>
                                            <span class="variant-title"></span>
                                        </div>
                                        <div style="width: 25%" class="a-center">
                                            <div class="input_qty_pr">
                                                <input type="hidden" name="idCart" value="{{ $row->id }}">
                                                <input class="variantID" type="hidden" name="variantId" value="{{ $row->rowId }}">

                                                <input type="text" min="1"
                                                    class="check_number_here input-text number-sidebar input_pop input_pop qtyItem{{ $row->id }}"
                                                    id="qtyItem{{ $row->id }}" name="qtyProduct" size="4" value="{{ $row->qty }}">
                                                <button
                                                    onclick="var result = document.getElementById(&#39;qtyItem{{ $row->id }}&#39;); var qtyItem{{ $row->id }} = result.value; if( !isNaN( qtyItem{{ $row->id }} )) result.value++;return false;"
                                                    class="increase_pop items-count btn-plus" type="button"><i
                                                        class="fas fa-plus-circle"></i></button>
                                                <button
                                                    onclick="var result = document.getElementById(&#39;qtyItem{{ $row->id }}&#39;); var qtyItem{{ $row->id }} = result.value; if( !isNaN( qtyItem{{ $row->id }} ) &amp;&amp; qtyItem{{ $row->id }} &gt; 1 ) result.value--;return false;"
                                                    class="reduced_pop items-count btn-minus" type="button"><i
                                                        class="fas fa-minus-circle"></i></button>
                                            </div>
                                        </div>
                                        <div style="width: 12%" class="a-center">
                                            <span class="cart-price">
                                                <span class="price">{{ number_format(($row->price)*($row->qty), 0,',', '.') }}₫</span>
                                            </span>
                                        </div>
                                        <div style="width: 9%" class="a-center">
                                            <button type="submit" class="btn btn-danger">Cập nhập</button>
                                        </div>

                                        <div style="width: 9%" class="a-center">
                                            <a class="remove-itemx remove-item-cart" title="Xóa" href="{{ route('XoaHangById', ['id' => $row->rowId]) }}">
                                                <span><i class="fa fa-times"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </form>
                                    {{--  ///  --}}
                                    @endforeach

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-xl-12 col-md-12">
                            <div class="wrapbottomcart">
                                <div class="section continued">

                                    <div class="bg_cart shopping-cart-table-total">
                                        <div class="table-total">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td class="total-text f-left">Tổng tiền</td>
                                                        <td class="txt-right totals_price price_end f-right">
                                                            {{ Cart::subtotal() }}₫</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <a href="#"
                                            class="form-cart-continue"><i class="fas fa-reply"></i>Tiếp tục mua
                                            hàng</a>
                                        <a href="{{ route('thanhtoan_get') }}" class="btn-checkout-cart button_checkfor_buy">
                                            <i class="fas fa-check"></i>Tiến hành thanh toán
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>


        <div class="wrap_background_aside padding-top-15 margin-bottom-40 padding-left-0 padding-right-0 cartmbstyle">
            <div class="cart-mobile container">

                <div class="margin-bottom-0">
                    @if (Cart::count()== 0)
                    <div style="text-align: center">
                        <p>Không có sản phẩm nào trong giỏ hàng</p>
                        <a style="border-radius: 7px" class="btn btn-danger" href="/"><i class="fas fa-reply"></i>Tiếp tục mua hàng</a>
                    </div>
                    @else


                    <div class="header-cart">

                        <div class="title-cart title_cart_mobile">
                            <h3>Giỏ hàng</h3>
                        </div>

                    </div>

                    <div class="header-cart-content" style="background:#fff;">
                        <div class="cart_page_mobile content-product-list">

                            @foreach (Cart::content() as $row)


                            <form action="{{ route('CapNhapGioHnag_post') }}" method="POST">
                                @csrf
                            <div class="item-product">
                                <div class="item-product-cart-mobile">
                                    <a class="product-images1" href=""
                                        title="{{ $row->name }}">
                                        <img width="80" height="150"
                                            src="../images/producs/{{ $row->options -> avatar }}"
                                            alt="{{ $row->name }}">
                                    </a>

                                </div>
                                <div class="title-product-cart-mobile">
                                    <h3>
                                        <h6>{{ $row->name }}
                                        </h6>
                                        <em style="font-size:11px; display:block"></em>
                                    </h3>
                                    <p>
                                        Giá: <span>{{ number_format($row->price, 0,',', '.') }}₫</span>
                                    </p>
                                </div>
                                <div class="select-item-qty-mobile">
                                    <div class="txt_center">
                                        <input class="variantID" type="hidden" name="variantId" value="{{ $row->rowId }}">
                                        <button  onclick="var result = document.getElementById(&#39;qtyItem{{ $row->id }}1&#39;); var qtyItem{{ $row->id }}1 = result.value; if( !isNaN( qtyItem{{ $row->id }}1 )) result.value++;return false;"
                                                    class="increase_pop items-count btn-plus" type="button"><i
                                                        class="fas fa-plus-circle"></i></button>
                                        <input type="text" min="1"
                                                        class="check_number_here input-text number-sidebar input_pop input_pop qtyItem{{ $row->id }}1"
                                                        id="qtyItem{{ $row->id }}1" name="qtyProduct" size="4" value="{{ $row->qty }}">
                                        <button onclick="var result = document.getElementById(&#39;qtyItem{{ $row->id }}1&#39;); var qtyItem{{ $row->id }}1 = result.value; if( !isNaN( qtyItem{{ $row->id }}1 ) &amp;&amp; qtyItem{{ $row->id }}1 &gt; 1 ) result.value--;return false;"
                                                        class="reduced_pop items-count btn-minus" type="button"><i
                                                            class="fas fa-minus-circle"></i>
                                        </button>
                                    </div>
                                    <a class="button remove-item remove-item-cart" href="{{ route('XoaHangById', ['id' => $row->rowId]) }}">Xoá</a>
                                    <button style="border: 1px solid;
                                    color: white;
                                    background: #015bff;
                                    border-radius: 5px;" type="submit">Cập nhập</button>
                                </div>
                            </div>
                            </form>

                            @endforeach


                        </div>
                        <div class="header-cart-price">
                            <div class="title-cart">
                                <h3 class="text-xs-left">Tổng tiền</h3>
                                <a class="text-xs-right  totals_price_mobile">{{ Cart::subtotal() }}₫</a>
                            </div>
                            <div class="checkout">
                                <a href="{{ route('thanhtoan_get') }}">
                                    <button class="btn-proceed-checkout-mobile" title="Tiến hành thanh toán"
                                    type="button">
                                    <span>Tiến hành thanh toán</span>
                                </button>
                                </a>
                                <a href="#">
                                    <button class="btn btn-white f-left" title="Tiếp tục mua hàng" type="button">
                                        <span>Tiếp tục mua hàng</span>
                                    </button>
                                </a>

                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="container">
            <div class="bg_products clearfix">




                <div class="section_wishlist section margin-bottom-70">
                    <h4 class="title_modules">
                        Dành riêng cho bạn
                    </h4>

                    <div class="owl_product_news slick_wishlist">

                    @foreach ($sanphamcungloais as $sanphamcungloai)


                        <div class="item">
                            <div class="item_product_main">


                                    <div class="product-thumbnail">
                                        <a class="image_thumb scale_hover" href="{{ route('ChiTietSanPham',['ten_san_pham'=> $sanphamcungloai->ten_san_pham ]) }}"
                                            title="{{ $sanphamcungloai->ten_san_pham }}">
                                            <img class="lazyload"
                                                src="../images/producs/{{ $sanphamcungloai->hinh_anh }}" alt="{{ $sanphamcungloai->ten_san_pham }}">
                                        </a>

                                        @if ($sanphamcungloai->id_khuyen_mai == 1)

                                        @else
                                        <span class="smart">
                                            -{{ $sanphamcungloai->khuyenmai->gia_tri }}%
                                        </span>
                                        @endif

                                        <div class="action">
                                        @if ($sanphamcungloai->so_luong <= 0)

                                        @else
                                        <button class="hidden-xs btn-buy btn-cart btn btn-views left-to add_to_cart active"
                                            title="Thêm vào giỏ hàng" data-toggle="modal" data-target="#exampleModal">
                                            <input type="hidden" class="val_id_product" value="{{ $sanphamcungloai->id }}">
                                            <i class="fas fa-shopping-basket iconcart"></i>
                                        </button>
                                        @endif


                                        <a title="Xem nhanh"
                                            href="{{ route('ChiTietSanPham',['ten_san_pham'=>$sanphamcungloai->ten_san_pham ]) }}"
                                            data-handle="macbook-pro-2017-mptr2"
                                            class="xem_nhanh btn right-to quick-view btn-views hidden-xs hidden-sm hidden-md">
                                            <i class="fas fa-search-plus"></i>
                                        </a>

                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a href="{{ route('ChiTietSanPham',['ten_san_pham'=> $sanphamcungloai->ten_san_pham ]) }}"
                                                title="{{ $sanphamcungloai->ten_san_pham }}">{{ $sanphamcungloai->ten_san_pham }}</a></h3>
                                        <div class="price-box">
                                            @if (($sanphamcungloai->gia_sale) != '')
                                            {{ number_format($sanphamcungloai->gia_sale, 0,'.', '.') }}₫
                                            @else
                                            {{ number_format($sanphamcungloai->gia_goc, 0,'.', '.') }}₫
                                            @endif
                                            <span class="compare-price">
                                                @if (($sanphamcungloai->gia_sale) == true)
                                                {{ number_format($sanphamcungloai->gia_goc, 0,'.', '.') }}₫
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


    <link href="../css/bpr-products-module.css" rel="stylesheet" type="text/css">
    <div class="sapo-product-reviews-module"></div>

</div>

<script>
    var getLimit = 6;
    var alias = 'huawei-y7-pro';


    function activeTab(obj) {
        $('.product-tab ul li').removeClass('active');
        $(obj).addClass('active');
        var id = $(obj).attr('data-tab');
        $('.tab-content').removeClass('active');
        $(id).addClass('active');
    }
    $(".tab-content .rte").each(function (e) {
        if ($('.tab-content .rte #content').height() >= 300) {
            $('.tab-content').find('.read-more').removeClass('hidden').addClass('more');
        } else {
            $('.tab-content').find('.read-more').addClass('hidden');
        }
    });

    jQuery('.read-more').on('click', function (event) {
        if ($('.read-more').hasClass('more')) {
            $(this).removeClass('more').addClass('less');
            $(this).html('<span>Thu gọn <i class="fa fa-angle-up"></i></span>');
        } else {
            $(this).removeClass('less').addClass('more');
            $(this).html('<span>Xem thêm <i class="fa fa-angle-down"></i></span>');
            $('html, body').animate({
                scrollTop: $('#content').offset().top
            }, 200);
        }

        jQuery(".tab-content .rte").toggleClass("expand");
    });
    $('.product-tab ul li').click(function () {
        activeTab(this);
        return false;
    });

    $('.slider-nav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        centerMode: false,
        infinite: false,
        focusOnSelect: true,
        responsive: [{
                breakpoint: 1025,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 5
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 4
                }
            }
        ]
    });
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        lazyLoad: 'ondemand',
        fade: true,
        infinite: false,
        asNavFor: '.slider-nav',
        adaptiveHeight: false,
        responsive: [{
            breakpoint: 480,
            settings: {
                dots: true
            }
        }]
    });

    $(document).ready(function (e) {
        $('.slick_wishlist').slick({
            autoplay: false,
            autoplaySpeed: 5000,
            dots: false,
            arrows: true,
            infinite: true,
            speed: 300,
            rows: 1,
            loop: false,
            infinite: false,
            slidesToShow: 5,
            slidesToScroll: 5,
            responsive: [{
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
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


<script src="../css/api.jquery.js" type="text/javascript"></script>

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
