@extends('template.front_end')
@section('container_layout')
@section('title','Chi Tiết Sản Phẩm')
<link href="../css/product_style.scss.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="../css/quickviews_popup_cart.scss.css">

@foreach ($sanphams as $sanpham)


<div class="bodywrap">

    <section class="bread-crumb">
        <span class="crumb-border"></span>
        <div class="container">
            <div class="rows">
                <div class="col-xs-12 a-left">

                </div>
            </div>
        </div>
    </section>

    <section class="product details-main">
        <div class="container">
            <div class="bg_product clearfix">
                <div class="section wrap-padding-15 wp_product_main clearfix">
                    <div class="details-product section">
                        <div class="row ">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="title_p">
                                    <h1 style="text-transform: uppercase" class="title-product">{{ $sanpham->ten_san_pham }}</h1>
                                </div>

                                <div class="row">
                                    <div
                                        class="product-detail-left product-images col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                        <div class="wrapbb">

                                            <div class="slider-big-video clearfix margin-bottom-20">
                                                <div class="slider slider-for">
                                                    <div>
															<img src="../images/producs/{{ $sanpham->hinh_anh }}"
																data-src="../images/producs/{{ $sanpham->hinh_anh }}"
																alt="{{ $sanpham->ten_san_pham }}"
																data-image="../images/producs/{{ $sanpham->hinh_anh }}"
																class="lazyload img-responsive mx-auto d-block">
                                                    </div>

                                                    <div>
                                                        <img src="../images/producs/{{ $sanpham->hinh_anh1 }}"
                                                            data-src="../images/producs/{{ $sanpham->hinh_anh1 }}"
                                                            alt="{{ $sanpham->ten_san_pham }}"
                                                            data-image="../images/producs/{{ $sanpham->hinh_anh1 }}"
                                                            class="lazyload img-responsive mx-auto d-block">
                                                </div>

                                                <div>
                                                    <img src="../images/producs/{{ $sanpham->hinh_anh2 }}"
                                                        data-src="../images/producs/{{ $sanpham->hinh_anh2 }}"
                                                        alt="{{ $sanpham->ten_san_pham }}"
                                                        data-image="../images/producs/{{ $sanpham->hinh_anh2 }}"
                                                        class="lazyload img-responsive mx-auto d-block">
                                            </div>

                                            <div>
                                                <img src="../images/producs/{{ $sanpham->hinh_anh3 }}"
                                                    data-src="../images/producs/{{ $sanpham->hinh_anh3 }}"
                                                    alt="{{ $sanpham->ten_san_pham }}"
                                                    data-image="../images/producs/{{ $sanpham->hinh_anh3 }}"
                                                    class="lazyload img-responsive mx-auto d-block">
                                        </div>

                                                </div>


                                            </div>

                                            <div class="slider-has-video clearfix">
                                                <div class="slider slider-nav">

                                                    <div class="fixs">
                                                        <img class="lazyload"
                                                            src="../images/producs/{{ $sanpham->hinh_anh }}"
                                                            data-src="../images/producs/{{ $sanpham->hinh_anh }}"
                                                            alt="{{ $sanpham->ten_san_pham }}"
                                                            data-image="../images/producs/{{ $sanpham->hinh_anh }}">
                                                    </div>

                                                    <div class="fixs">
                                                        <img class="lazyload"
                                                            src="../images/producs/{{ $sanpham->hinh_anh1 }}"
                                                            data-src="../images/producs/{{ $sanpham->hinh_anh1 }}"
                                                            alt="{{ $sanpham->ten_san_pham }}"
                                                            data-image="../images/producs/{{ $sanpham->hinh_anh1 }}">
                                                    </div>
                                                    <div class="fixs">
                                                        <img class="lazyload"
                                                            src="../images/producs/{{ $sanpham->hinh_anh2 }}"
                                                            data-src="../images/producs/{{ $sanpham->hinh_anh2 }}"
                                                            alt="{{ $sanpham->ten_san_pham }}"
                                                            data-image="../images/producs/{{ $sanpham->hinh_anh2 }}">
                                                    </div>
                                                    <div class="fixs">
                                                        <img class="lazyload"
                                                            src="../images/producs/{{ $sanpham->hinh_anh3 }}"
                                                            data-src="../images/producs/{{ $sanpham->hinh_anh3 }}"
                                                            alt="{{ $sanpham->ten_san_pham }}"
                                                            data-image="../images/producs/{{ $sanpham->hinh_anh3 }}">
                                                    </div>



                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 details-pro">
                                        <div class="form_background form-inline margin-bottom-0">
                                            <div class="fw w_100">
                                                <div class="price-box clearfix">

                                                    <span class="special-price">
                                                        <span class="price product-price">
                                                            @if (($sanpham->gia_sale) != '')
                                                            {{ number_format($sanpham->gia_sale, 0,'.', '.') }}
                                                            @else
                                                            {{ number_format($sanpham->gia_goc, 0,'.', '.') }}
                                                            @endif

                                                            ₫</span>
                                                    </span> <!-- Giá Khuyến mại -->

                                                </div>

                                                <div class="inventory_quantity">
                                                    <span class="stock-brand-title">Tình trạng:</span>
                                                    @if (($sanpham->so_luong) == 0)
                                                    <span style="color: red" class="a-stock a2">
                                                        Hết hàng
                                                    </span>
                                                    @else
                                                    <span class="a-stock a2">
                                                        Còn hàng
                                                    </span>
                                                    @endif


                                                </div>

                                            </div>

                                            @if (($sanpham->so_luong) == 0)

                                                @else
                                                <form method="POST" action="{{ route('the_san_pham_cart_post') }}">
                                                    @csrf
                                                    <input type="hidden" name="id_san_pham" value="{{ $sanpham->id }}">
                                                    <input type="hidden" name="ten_san_pham" value="{{ $sanpham->ten_san_pham }}">
                                                    <input type="hidden" name="hinh_anh" value="{{ $sanpham->hinh_anh }}">
                                                    <div class="form-product">
                                                        @if ($sanpham->id_khuyen_mai == 1)

                                                        @else
                                                        <div class="box-promotion">
                                                            <p class="fk-tit">Khuyến mãi đặc biệt <span>(Số lượng có
                                                                    hạn)</span></p>
                                                            <div style="overflow: auto" class="fk-main">
                                                                <?php echo $sanpham->khuyenmai->noi_dung_khuyen_mai ?>
                                                            </div>
                                                            <input name="id_khuyen_mai" type="hidden" value="">
                                                        </div>
                                                        @endif




                                                        <div class="clearfix form-group ">
                                                            <div class="custom custom-btn-number show">
                                                                <label class="sl section">Số lượng:</label>
                                                                <div
                                                                    class="custom input_number_product custom-btn-number form-control">
                                                                    <button class="btn_num num_1 button button_qty"
                                                                        onclick="var result = document.getElementById('qtym'); var qtypro = result.value; if( !isNaN( qtypro ) &amp;&amp; qtypro &gt; 1 ) result.value--;return false;"
                                                                        type="button"><i class="fas fa-minus"></i></button>
                                                                    <input type="text" id="qtym" name="quantity" value="1"
                                                                        maxlength="3" class="form-control prd_quantity"
                                                                        onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;"
                                                                        onchange="if(this.value == 0)this.value=1;">
                                                                    <button class="btn_num num_2 button button_qty"
                                                                        onclick="var result = document.getElementById('qtym'); var qtypro = result.value; if( !isNaN( qtypro )) result.value++;return false;"
                                                                        type="button"><i class="fas fa-plus"></i></button>
                                                                </div>
                                                            </div>
                                                            <div class="btn-mua button_actions">


                                                                <button type="submit"
                                                                    class="btn btn_base normal_button btn_add_cart add_to_cart btn-cart">
                                                                    <span class="txt-main text_1">Thêm vào giỏ hàng</span>
                                                                </button>

                                                                <div class="btn fast btn_base btn_add_cart btn-cart">
                                                                    <a style="color: white" href="{{ route('mua_ngay_get', ['id'=>$sanpham->id]) }}">
                                                                    <span class="txt-main text_1">Mua ngay</span>
                                                                </a>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                @endif

                                            <div class="contact">Gọi đặt mua: <a href="tel:0369203989">0369203989</a>
                                                (8:00 - 22:00)</div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="bg_products clearfix">
                <div class="wrap_tab_ed section margin-top-30">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8">


                                <div class="section bg_white">

                                    <div class="product-tab e-tabs not-dqtab">
                                        <ul class="tabs tabs-title clearfix">
                                            <div class="tab-link active">
                                                <h3>Mô tả sản phẩm</h3>
                                            </div>
                                        </ul>
                                        <div class="tab-float">

                                            <div  class="tab-content active content_extab">
                                                <div class="rte product_getcontent">
                                                    <div id="content">
                                                        <?php echo $sanpham->mo_ta ?>
                                                    </div>
                                                    <div class="read-more">
                                                        <span>Xem thêm <i class="fa fa-angle-down"></i></span>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="section bg_white">

                                    <style>
                                        .sao-danh-gia i{
                                            color: #FACA51;
                                            font-size: 18px
                                        }
                                        .sao-danh-giax{
                                            color: #FACA51;
                                        }
                                     </style>

                                    <div class="product-tab e-tabs not-dqtab">
                                        <ul class="tabs tabs-title clearfix">
                                            <div class="tab-link active">
                                                <h3>Đánh giá</h3>
                                            </div>
                                        </ul>
                                        @if ($tongsao == 0)
                                        <div class="alert alert-warning" role="alert">
                                            Chưa có đánh giá về sản phẩm !
                                          </div>
                                        @else
                                        <div class="tab-float">

                                            <div class="tab-content active content_extab">
                                                <div class="row">
                                                    <div class="sao-danh-gia col-lg-12">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                                            </div>
                                                            {{--  sao 5  --}}
                                                            <div class="col-8">
                                                                <div style="height: 10px;
                                                                margin-top: 8px;" class="progress">
                                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: {{ $sao5*100/$tongsao }}%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>


                                                            </div>
                                                            <div class="col-1">
                                                                {{ $sao5 }}
                                                            </div>
                                                            {{--  sao 5  --}}

                                                        </div>

                                                    </div>
                                                    <div class="sao-danh-gia col-lg-12">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                                                            </div>
                                                            {{--  sao 4  --}}
                                                            <div class="col-8">
                                                                <div style="height: 10px;
                                                                margin-top: 8px;" class="progress">
                                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: {{ $sao4*100/$tongsao }}%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>


                                                            </div>
                                                            <div class="col-1">
                                                                {{ $sao4 }}
                                                            </div>
                                                            {{--  sao 4  --}}

                                                        </div>
                                                    </div>
                                                    <div class="sao-danh-gia col-lg-12">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                                                            </div>
                                                            {{--  sao 3  --}}
                                                            <div class="col-8">
                                                                <div style="height: 10px;
                                                                margin-top: 8px;" class="progress">
                                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: {{ $sao3*100/$tongsao }}%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>


                                                            </div>
                                                            <div class="col-1">
                                                                {{ $sao3 }}
                                                            </div>
                                                            {{--  sao 3  --}}
                                                        </div>
                                                    </div>
                                                    <div class="sao-danh-gia col-lg-12">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                                                            </div>
                                                            {{--  sao 2  --}}
                                                            <div class="col-8">
                                                                <div style="height: 10px;
                                                                margin-top: 8px;" class="progress">
                                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: {{ $sao2*100/$tongsao }}%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>


                                                            </div>
                                                            <div class="col-1">
                                                                {{ $sao2 }}
                                                            </div>
                                                            {{--  sao 2  --}}

                                                        </div>
                                                    </div>
                                                    <div class="sao-danh-gia col-lg-12">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                                                            </div>
                                                            {{--  sao 1  --}}
                                                            <div class="col-8">
                                                                <div style="height: 10px;
                                                                margin-top: 8px;" class="progress">
                                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: {{ $sao1*100/$tongsao }}%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>


                                                            </div>
                                                            <div class="col-1">
                                                            {{ $sao1 }}
                                                            </div>

                                                            {{--  sao 1  --}}

                                                        </div>
                                                    </div>

                                                    <div class="sao-danh-gia col-lg-12">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                {{ $tongsao }} Đánh giá
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                                <h5>Nhận xét sản phẩm</h5>



                                                @foreach ($dbdanhgias as $dbdanhgia)


                                                <div style="display: flex;border-bottom: 1px solid #e9e9e9; padding-top: 15px">
                                                    <div style="flex: 1"> <img style="width: 40px;height: 40px;border-radius: 50%;" src="../images/user/jpg15.jpg" alt=""> </div>
                                                    <div style="flex: 9">
                                                        <div class="sao-danh-giax">
                                                            @if ($dbdanhgia->so_sao == 1)
                                                            <i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                                                            @elseif($dbdanhgia->so_sao == 2)
                                                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                                                            @elseif($dbdanhgia->so_sao == 3)
                                                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                                                            @elseif($dbdanhgia->so_sao == 4)
                                                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                                                            @else
                                                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>

                                                            @endif
                                                        </div>
                                                        <div>
                                                            <div>
                                                                Bởi {{ $dbdanhgia->taikhoan->ho_ten }} <img width="15" src="../images/okmua.png" alt="" srcset=""><i style="color:#4CAF50">Chứng nhận đã mua hàng</i>
                                                            </div>
                                                            <div style="font-size: 20px">
                                                                {{ $dbdanhgia->noi_dung }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach

                                            </div>
                                        </div>
                                        @endif
                                    </div>

                                </div>

                        </div>

                        <div class="col-xl-4 col-lg-4">
                            <div class="specifications margin-bottom-20">
                                <h2 class="fs-dttop">Thông số kỹ thuật</h2>
                                <div style="height: 220px;
                                overflow: hidden;" class="fs-tsright">
                                    <?php echo $sanpham->thong_so_ky_thuat ?>
                                </div>
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#specifications">
                                    Xem chi tiết thông số kĩ thuật
                                </button>
                                <div class="modal fade" id="specifications" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"><span
                                                        aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Thông số kỹ thuật chi tiết
                                                </h4>
                                            </div>
                                            <div class="modal-body">

                                                <?php echo $sanpham->thong_so_ky_thuat ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="container">
            <div class="bg_products clearfix">




                <div class="section_wishlist section margin-bottom-70">
                    <h2 class="title_modules">
                        <a title="Sản phẩm liên quan">Sản phẩm liên quan</a>
                    </h2>

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

            <div class="fb-comments" data-href="https://eclickbuy.xyz/san-pham/{{ $sanpham->ten_san_pham }}" data-numposts="5" data-width="100%"></div>

            </div>


    </section>


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

    <link href="../css/bpr-products-module.css" rel="stylesheet" type="text/css">
        <div class="sapo-product-reviews-module"></div>

</div>
@endforeach

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
