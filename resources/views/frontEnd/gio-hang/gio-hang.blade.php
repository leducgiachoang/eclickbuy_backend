@extends('template.front_end')
@section('container_layout')

<link href="../css/cartpage.scss.css" rel="stylesheet" type="text/css">
<div class="bodywrap">
    <section class="bread-crumb">
        <span class="crumb-border"></span>
        <div class="container">
            <div class="rows">
                <div class="col-xs-12 a-left">
                    <ul class="breadcrumb">
                        <li class="home">
                            <a href="https://eco-shop-1.mysapo.net/"><span>Trang chủ</span></a>
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
                                    <div class="item-cart productid-34653884">
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
                </div>
            </div>
        </div>
        <div
            class="wrap_background_aside padding-top-15 margin-bottom-40 padding-left-0 padding-right-0 cartmbstyle">
            <div class="cart-mobile container">
                <form action="https://eco-shop-1.mysapo.net/cart" method="post" novalidate=""
                    class="margin-bottom-0">
                    <div class="header-cart">

                        <div class="title-cart title_cart_mobile">
                            <h3>Giỏ hàng</h3>
                        </div>

                    </div>

                    <div class="header-cart-content" style="background:#fff;">
                        <div class="cart_page_mobile content-product-list">
                            <div class="item-product item productid-34653884 ">
                                <div class="item-product-cart-mobile">
                                    <a href="https://eco-shop-1.mysapo.net/xiaomi-mi-8-64gb">
                                    </a><a class="product-images1" href="https://eco-shop-1.mysapo.net/cart"
                                        title="Xiaomi Mi 8 64GB">
                                        <img width="80" height="150"
                                            src="./Giỏ hàng_files/636683033477213503-xiaomi-mi8-xanh-1.jpg"
                                            alt="Xiaomi Mi 8 64GB">
                                    </a>

                                </div>
                                <div class="title-product-cart-mobile">
                                    <h3>
                                        <a href="https://eco-shop-1.mysapo.net/xiaomi-mi-8-64gb"
                                            title="Xiaomi Mi 8 64GB">Xiaomi Mi 8 64GB</a>
                                        <em style="font-size:11px; display:block"></em>
                                    </h3>
                                    <p>
                                        Giá: <span>10.000.000₫</span>
                                    </p>
                                </div>
                                <div class="select-item-qty-mobile">
                                    <div class="txt_center">
                                        <input class="variantID" type="hidden" name="variantId" value="34653884">
                                        <button
                                            onclick="var result = document.getElementById(&#39;qtyMobile34653884&#39;); var qtyMobile34653884 = result.value; if( !isNaN( qtyMobile34653884 ) &amp;&amp; qtyMobile34653884 &gt; 1 ) result.value--;return false;"
                                            class="reduced items-count btn-minus" type="button"><i
                                                class="fas fa-minus-circle"></i></button>
                                        <input type="text" maxlength="3" min="1"
                                            class="input-text number-sidebar qtyMobile34653884"
                                            id="qtyMobile34653884" name="Lines" size="4" value="2">
                                        <button
                                            onclick="var result = document.getElementById(&#39;qtyMobile34653884&#39;); var qtyMobile34653884 = result.value; if( !isNaN( qtyMobile34653884 )) result.value++;return false;"
                                            class="increase items-count btn-plus" type="button"><i
                                                class="fas fa-plus-circle"></i></button>
                                    </div>
                                    <a class="button remove-item remove-item-cart" href="javascript:;"
                                        data-id="34653884">Xoá</a>
                                </div>
                            </div>

                            <div class="item-product item productid-34652411 ">
                                <div class="item-product-cart-mobile">
                                    <a href="https://eco-shop-1.mysapo.net/ipad-pro-9-7-inch-wifi-cellular">
                                    </a><a class="product-images1" href="https://eco-shop-1.mysapo.net/cart"
                                        title="iPad Pro 9.7 inch Wifi Cellular">
                                        <img width="80" height="150"
                                            src="./Giỏ hàng_files/256gbgray1u696d20160331t224235.jpg"
                                            alt="iPad Pro 9.7 inch Wifi Cellular">
                                    </a>

                                </div>
                                <div class="title-product-cart-mobile">
                                    <h3>
                                        <a href="https://eco-shop-1.mysapo.net/ipad-pro-9-7-inch-wifi-cellular"
                                            title="iPad Pro 9.7 inch Wifi Cellular">iPad Pro 9.7 inch Wifi
                                            Cellular</a>
                                        <em style="font-size:11px; display:block"></em>
                                    </h3>
                                    <p>
                                        Giá: <span>9.000.000₫</span>
                                    </p>
                                </div>
                                <div class="select-item-qty-mobile">
                                    <div class="txt_center">
                                        <input class="variantID" type="hidden" name="variantId" value="34652411">
                                        <button
                                            onclick="var result = document.getElementById(&#39;qtyMobile34652411&#39;); var qtyMobile34652411 = result.value; if( !isNaN( qtyMobile34652411 ) &amp;&amp; qtyMobile34652411 &gt; 1 ) result.value--;return false;"
                                            class="reduced items-count btn-minus" type="button"><i
                                                class="fas fa-minus-circle"></i></button>
                                        <input type="text" maxlength="3" min="1"
                                            class="input-text number-sidebar qtyMobile34652411"
                                            id="qtyMobile34652411" name="Lines" size="4" value="1">
                                        <button
                                            onclick="var result = document.getElementById(&#39;qtyMobile34652411&#39;); var qtyMobile34652411 = result.value; if( !isNaN( qtyMobile34652411 )) result.value++;return false;"
                                            class="increase items-count btn-plus" type="button"><i
                                                class="fas fa-plus-circle"></i></button>
                                    </div>
                                    <a class="button remove-item remove-item-cart" href="javascript:;"
                                        data-id="34652411">Xoá</a>
                                </div>
                            </div>
                        </div>
                        <div class="header-cart-price">
                            <div class="title-cart">
                                <h3 class="text-xs-left">Tổng tiền</h3>
                                <a class="text-xs-right  totals_price_mobile">129.000.000₫</a>
                            </div>
                            <div class="checkout">
                                <a href="{{ route('thanhtoan_get') }}">
                                    <button class="btn-proceed-checkout-mobile" title="Tiến hành thanh toán"
                                    type="button">
                                    <span>Tiến hành thanh toán</span>
                                </button>
                                </a>

                                <button class="btn btn-white f-left" title="Tiếp tục mua hàng" type="button">
                                    <span>Tiếp tục mua hàng</span>
                                </button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </section>

    <link href="../css/bpr-products-module.css" rel="stylesheet" type="text/css">
    <div class="sapo-product-reviews-module"></div>

</div>


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
