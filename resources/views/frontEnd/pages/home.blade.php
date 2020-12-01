
@extends('template.front_end')
@section('container_layout')
@section('title','Trang Chủ')





<section class="awe-section-3">



    <div class="section_mobile section_base">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="clearfix">
                        <div class="section-head clearfix">
                            <h2 class="title_base mobi">
                                @foreach ($SPbyid1randoms as $item)
                                <i class="fas fa-check-double"></i>
                                <a href="{{ route('DanhSachById_get',['id'=> $item->danhmuc->ten_danh_muc]) }}" title="Điện thoại">
                                        {{ $item->danhmuc->ten_danh_muc }}
                                </a>
                                @endforeach
                            </h2>

                        </div>
                        <div class="product-blocks row clearfix">



                            <div class="item-border col-md-40 col-sm-4 col-xs-12 no-padding big-item-product">

                                @foreach ($SPbyid1randoms as $SPbyid1random)


                                <div class="item_product_main">

                                    <div class="variants product-action">
                                        <div class="product_big news-item-products">
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover" href="{{ route('ChiTietSanPham',['ten_san_pham'=> $SPbyid1random->ten_san_pham ]) }}"
                                                    title="{{ $SPbyid1random->ten_san_pham }}">
                                                    <img class="lazyload"
                                                        src="../images/producs/{{ $SPbyid1random->hinh_anh }}" alt="{{ $SPbyid1random->ten_san_pham }}">
                                                </a>

                                                <div class="action">

                                                @if ($SPbyid1random->so_luong <= 0)

                                                @else
                                                <button class="hidden-xs btn-buy btn-cart btn btn-views left-to add_to_cart active"
                                                    title="Thêm vào giỏ hàng" data-toggle="modal" data-target="#exampleModal">
                                                    <input type="hidden" class="val_id_product" value="{{ $SPbyid1random->id }}">
                                                    <i class="fas fa-shopping-basket iconcart"></i>
                                                </button>
                                                @endif


                                                <a title="Xem nhanh"
                                                    href="{{ route('ChiTietSanPham',['ten_san_pham'=>$SPbyid1random->ten_san_pham ]) }}"
                                                    data-handle="macbook-pro-2017-mptr2"
                                                    class="xem_nhanh btn right-to quick-view btn-views hidden-xs hidden-sm hidden-md">
                                                    <i class="fas fa-search-plus"></i>
                                                </a>

                                                </div>
                                            </div>
                                            <div class="product-right-content">
                                                <div class="product-info">
                                                    <h3 class="product-name"><a href="{{ route('ChiTietSanPham',['ten_san_pham'=> $SPbyid1random->ten_san_pham ]) }}"
                                                        title="{{ $SPbyid1random->ten_san_pham }}">{{ $SPbyid1random->ten_san_pham }}</a></h3>
                                                    <div class="price-box">
                                                        @if (($SPbyid1random->gia_sale) != '')
                                                        {{ number_format($SPbyid1random->gia_sale, 0,'.', '.') }}₫
                                                        @else
                                                        {{ number_format($SPbyid1random->gia_goc, 0,'.', '.') }}₫
                                                        @endif
                                                        <span class="compare-price">
                                                            @if (($SPbyid1random->gia_sale) == true)
                                                            {{ number_format($SPbyid1random->gia_goc, 0,'.', '.') }}₫
                                                            @else

                                                            @endif
                                                        </span>
                                                    </div>
                                                </div>
                                                <div style="height: 140px;" class="promos hidden-sm d-md-block d-lg-block d-xl-block">
                                                    <?php echo $SPbyid1random->thong_so_ky_thuat ?>
                                                </div>

                                                @if ($SPbyid1random->id_khuyen_mai == 1)

                                        @else
                                        <span class="smart">
                                            -{{ $SPbyid1random->khuyenmai->gia_tri }}%
                                        </span>
                                        @endif

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>


                            @foreach ($SPbyid1s as $SPbyid1)
                            <div class="item-border col-md-15 col-sm-4 col-6 no-padding">
                                <div class="item_product_main">


                                    <div class="product-thumbnail">
                                        <a class="image_thumb scale_hover" href="{{ route('ChiTietSanPham',['ten_san_pham'=> $SPbyid1->ten_san_pham ]) }}"
                                            title="{{ $SPbyid1->ten_san_pham }}">
                                            <img class="lazyload"
                                                src="../images/producs/{{ $SPbyid1->hinh_anh }}" alt="{{ $SPbyid1->ten_san_pham }}">
                                        </a>

                                        @if ($SPbyid1->id_khuyen_mai == 1)

                                        @else
                                        <span class="smart">
                                            -{{ $SPbyid1->khuyenmai->gia_tri }}%
                                        </span>
                                        @endif

                                        <div class="action">
                                            <button class="hidden-xs btn-buy btn-cart btn btn-views left-to add_to_cart active"
                                            title="Thêm vào giỏ hàng" data-toggle="modal" data-target="#exampleModal">
                                            <input type="hidden" class="val_id_product" value="{{ $SPbyid1->id }}">
                                            <i class="fas fa-shopping-basket iconcart"></i>
                                        </button>


                                        <a title="Xem nhanh"
                                            href="{{ route('ChiTietSanPham',['ten_san_pham'=>$SPbyid1->ten_san_pham ]) }}"
                                            data-handle="macbook-pro-2017-mptr2"
                                            class="xem_nhanh btn right-to quick-view btn-views hidden-xs hidden-sm hidden-md">
                                            <i class="fas fa-search-plus"></i>
                                        </a>

                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name"><a href="{{ route('ChiTietSanPham',['ten_san_pham'=> $SPbyid1->ten_san_pham ]) }}"
                                                title="{{ $SPbyid1->ten_san_pham }}">{{ $SPbyid1->ten_san_pham }}</a></h3>
                                        <div class="price-box">
                                            @if (($SPbyid1->gia_sale) != '')
                                            {{ number_format($SPbyid1->gia_sale, 0,'.', '.') }}₫
                                            @else
                                            {{ number_format($SPbyid1->gia_goc, 0,'.', '.') }}₫
                                            @endif
                                            <span class="compare-price">
                                                @if (($SPbyid1->gia_sale) == true)
                                                {{ number_format($SPbyid1->gia_goc, 0,'.', '.') }}₫
                                                @else

                                                @endif
                                            </span>
                                        </div>

                                    </div>
                            </div>
                            </div>
                            @endforeach

                        </div>
                        @foreach ($SPbyid1randoms as $item)


                        <a href="{{ route('DanhSachById_get',['id'=> $item->danhmuc->ten_danh_muc]) }}" title="Xem tất cả"
                            class="viewmore_mobi d-sm-none d-md-none d-lg-none d-xl-none">Xem tất cả</a>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="awe-section-4">
    <section class="section_banner_big clearfix hidden-xs">
        <div class="container">
            <a class="scale_hover" href="#" title="Banner">
                <img class="lazyload banner_leng"
                    src="../images/maxresdefault.jpg"
                    data-src="../images/maxresdefault.jpg"
                    alt="Banner">
            </a>
        </div>
    </section>
</section>




<section class="awe-section-5">




    <div class="section_col_1 section_base">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="clearfix">
                        <div class="section-head clearfix">
                            @foreach ($SPbyid2z as $item)
                            <h2 class="title_base maygiat">
                                <i class="fas fa-check-double"></i>
                                <a href="{{ route('DanhSachById_get',['id'=> $item->danhmuc->ten_danh_muc]) }}" title="Điện thoại">
                                        {{ $item->danhmuc->ten_danh_muc }}
                                </a>
                            </h2>
                            @endforeach

                        </div>
                        <div class="clearfix">


                            <div class="slick_product slickphukien">
                                @foreach ($SPbyid2s as $SPbyid2)


                                <div class="item">
                                    <div class="item_product_main">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover" href="{{ route('ChiTietSanPham',['ten_san_pham'=> $SPbyid2->ten_san_pham ]) }}"
                                                title="{{ $SPbyid2->ten_san_pham }}">
                                                <img class="lazyload"
                                                    src="../images/producs/{{ $SPbyid2->hinh_anh }}" alt="{{ $SPbyid2->ten_san_pham }}">
                                            </a>

                                            @if ($SPbyid2->id_khuyen_mai == 1)

                                            @else
                                            <span class="smart">
                                                -{{ $SPbyid2->khuyenmai->gia_tri }}%
                                            </span>
                                            @endif

                                            <div class="action">
                                                <button class="hidden-xs btn-buy btn-cart btn btn-views left-to add_to_cart active"
                                                title="Thêm vào giỏ hàng" data-toggle="modal" data-target="#exampleModal">
                                                <input type="hidden" class="val_id_product" value="{{ $SPbyid2->id }}">
                                                <i class="fas fa-shopping-basket iconcart"></i>
                                            </button>


                                            <a title="Xem nhanh"
                                                href="{{ route('ChiTietSanPham',['ten_san_pham'=>$SPbyid2->ten_san_pham ]) }}"
                                                data-handle="macbook-pro-2017-mptr2"
                                                class="xem_nhanh btn right-to quick-view btn-views hidden-xs hidden-sm hidden-md">
                                                <i class="fas fa-search-plus"></i>
                                            </a>

                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-name"><a href="{{ route('ChiTietSanPham',['ten_san_pham'=> $SPbyid2->ten_san_pham ]) }}"
                                                    title="{{ $SPbyid2->ten_san_pham }}">{{ $SPbyid2->ten_san_pham }}</a></h3>
                                            <div class="price-box">
                                                @if (($SPbyid2->gia_sale) != '')
                                                {{ number_format($SPbyid2->gia_sale, 0,'.', '.') }}₫
                                                @else
                                                {{ number_format($SPbyid2->gia_goc, 0,'.', '.') }}₫
                                                @endif
                                                <span class="compare-price">
                                                    @if (($SPbyid2->gia_sale) == true)
                                                    {{ number_format($SPbyid2->gia_goc, 0,'.', '.') }}₫
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
                        @foreach ($SPbyid2z as $item)
                        <a href="{{ route('DanhSachById_get',['id'=> $item->danhmuc->ten_danh_muc]) }}" title="Xem tất cả"
                        class="viewmore_mobi d-sm-none d-md-none d-lg-none d-xl-none">Xem tất cả</a>

                        @endforeach

                            <div class="two_banner hidden-xs">
                            <div class="row">

                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <a class="scale_hover" href="#" title="Banner 2">
                                        <img class="img_banner lazyload"
                                            src="../images/banner_product_2.jpg"
                                            data-src="../images/banner_product_2.jpg"
                                            alt="Banner 2">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="awe-section-6">




    <div class="section_col_2 section_base">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="clearfix">
                        <div class="section-head clearfix">
                            @foreach ($SPbyid3z as $item)
                            <h2 class="title_base tv">
                                <i class="fas fa-check-double"></i>
                                <a href="{{ route('DanhSachById_get', ['id'=>$item->danhmuc->ten_danh_muc]) }}" title="Tivi - Loa âm thanh">{{ $item->danhmuc->ten_danh_muc }}</a>
                            </h2>
                            @endforeach
                        </div>
                        <div class="clearfix">


                            <div class="slick_product slickphukien">
                                @foreach ($SPbyid3s as $SPbyid3)


                                <div class="item">
                                    <div class="item_product_main">
                                        <div class="product-thumbnail">
                                            <a class="image_thumb scale_hover" href="{{ route('ChiTietSanPham',['ten_san_pham'=> $SPbyid3->ten_san_pham ]) }}"
                                                title="{{ $SPbyid3->ten_san_pham }}">
                                                <img class="lazyload"
                                                    src="../images/producs/{{ $SPbyid3->hinh_anh }}" alt="{{ $SPbyid3->ten_san_pham }}">
                                            </a>

                                            @if ($SPbyid3->id_khuyen_mai == 1)

                                            @else
                                            <span class="smart">
                                                -{{ $SPbyid3->khuyenmai->gia_tri }}%
                                            </span>
                                            @endif

                                            <div class="action">
                                                <button class="hidden-xs btn-buy btn-cart btn btn-views left-to add_to_cart active"
                                                title="Thêm vào giỏ hàng" data-toggle="modal" data-target="#exampleModal">
                                                <input type="hidden" class="val_id_product" value="{{ $SPbyid3->id }}">
                                                <i class="fas fa-shopping-basket iconcart"></i>
                                            </button>


                                            <a title="Xem nhanh"
                                                href="{{ route('ChiTietSanPham',['ten_san_pham'=>$SPbyid3->ten_san_pham ]) }}"
                                                data-handle="macbook-pro-2017-mptr2"
                                                class="xem_nhanh btn right-to quick-view btn-views hidden-xs hidden-sm hidden-md">
                                                <i class="fas fa-search-plus"></i>
                                            </a>

                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h3 class="product-name"><a href="{{ route('ChiTietSanPham',['ten_san_pham'=> $SPbyid3->ten_san_pham ]) }}"
                                                    title="{{ $SPbyid3->ten_san_pham }}">{{ $SPbyid3->ten_san_pham }}</a></h3>
                                            <div class="price-box">
                                                @if (($SPbyid3->gia_sale) != '')
                                                {{ number_format($SPbyid3->gia_sale, 0,'.', '.') }}₫
                                                @else
                                                {{ number_format($SPbyid3->gia_goc, 0,'.', '.') }}₫
                                                @endif
                                                <span class="compare-price">
                                                    @if (($SPbyid3->gia_sale) == true)
                                                    {{ number_format($SPbyid3->gia_goc, 0,'.', '.') }}₫
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
                        @foreach ($SPbyid3z as $item)
                        <a href="{{ route('DanhSachById_get', ['id'=>$item->danhmuc->ten_danh_muc]) }}" title="Xem tất cả"
                            class="viewmore_mobi d-sm-none d-md-none d-lg-none d-xl-none">Xem tất cả</a>

                        @endforeach

                            <div class="two_banner hidden-xs">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <a class="scale_hover" href="#" title="Banner 1">
                                        <img class="img_banner lazyload"
                                            src="../images/bannerbaixinxahang.png"
                                            data-src="../images/bannerbaixinxahang.png"
                                            alt="Banner 1">
                                    </a>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <a class="scale_hover" href="#" title="Banner 2">
                                        <img class="img_banner lazyload"
                                            src="../images/banner-eob-7566s.u2441.d20161121.t223852.772763.jpg"
                                            data-src="../images/banner-eob-7566s.u2441.d20161121.t223852.772763.jpg"
                                            alt="Banner 2">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="awe-section-7">



    <div class="section_giadung section_base">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="clearfix">
                        <div class="section-head clearfix">
                            <h2 class="title_base giadung">
                                @foreach ($SPbyid4z as $item)
                                <i class="fas fa-check-double"></i>
                            <a href="{{ route('DanhSachById_get', ['id'=> $item->danhmuc->ten_danh_muc]) }}" title="{{ $item->danhmuc->ten_danh_muc }}">{{ $item->danhmuc->ten_danh_muc }}</a>
                                @endforeach

                            </h2>

                        </div>
                        <div class="product-blocks row clearfix">

                            @foreach ($SPbyid4s as $SPbyid4)


                            <div class="item-border col-lg-4 col-sm-6 col-xs-12 no-padding big-item-product">
                                <div class="item_product_main">
                                    <div class="variants product-action">
                                        <div class="product_big news-item-products">
                                            <div class="product-thumbnail">
                                                <a class="image_thumb scale_hover" href="{{ route('ChiTietSanPham',['ten_san_pham'=> $SPbyid4->ten_san_pham ]) }}"
                                                    title="{{ $SPbyid4->ten_san_pham }}">
                                                    <img class="lazyload"
                                                        src="../images/producs/{{ $SPbyid4->hinh_anh }}" alt="{{ $SPbyid4->ten_san_pham }}">
                                                </a>

                                                <div class="action">

                                            <button class="hidden-xs btn-buy btn-cart btn btn-views left-to add_to_cart active"
                                                title="Thêm vào giỏ hàng" data-toggle="modal" data-target="#exampleModal">
                                                <input type="hidden" class="val_id_product" value="{{ $SPbyid4->id }}">
                                                <i class="fas fa-shopping-basket iconcart"></i>
                                            </button>


                                            <a title="Xem nhanh"
                                                href="{{ route('ChiTietSanPham',['ten_san_pham'=>$SPbyid4->ten_san_pham ]) }}"
                                                data-handle="macbook-pro-2017-mptr2"
                                                class="xem_nhanh btn right-to quick-view btn-views hidden-xs hidden-sm hidden-md">
                                                <i class="fas fa-search-plus"></i>
                                            </a>

                                                </div>
                                            </div>
                                            <div class="product-right-content">
                                                <div class="product-info">
                                                    <h3 class="product-name"><a href="{{ route('ChiTietSanPham',['ten_san_pham'=> $SPbyid4->ten_san_pham ]) }}"
                                                        title="{{ $SPbyid4->ten_san_pham }}">{{ $SPbyid4->ten_san_pham }}</a></h3>
                                                <div class="price-box">
                                                    @if (($SPbyid4->gia_sale) != '')
                                                    {{ number_format($SPbyid4->gia_sale, 0,'.', '.') }}₫
                                                    @else
                                                    {{ number_format($SPbyid4->gia_goc, 0,'.', '.') }}₫
                                                    @endif
                                                    <span class="compare-price">
                                                        @if (($SPbyid4->gia_sale) == true)
                                                        {{ number_format($SPbyid4->gia_goc, 0,'.', '.') }}₫
                                                        @else

                                                        @endif
                                                    </span>
                                                </div>
                                                </div>
                                                <div style="height: 70px;
                                                overflow: hidden;" class="promos d-sm-none d-md-block d-lg-block d-xl-block">
                                                    <?php echo $SPbyid4->thong_so_ky_thuat ?>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        @foreach ($SPbyid4z as $item)
                        <a href="{{ route('DanhSachById_get', ['id'=> $item->danhmuc->ten_danh_muc]) }}" title="Xem tất cả"
                            class="viewmore_mobi d-sm-none d-md-none d-lg-none d-xl-none">Xem tất cả</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

