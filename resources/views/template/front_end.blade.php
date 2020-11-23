<!DOCTYPE html>
<html lang="vi">

<head>
	<meta charset="UTF-8">
	<meta name='revisit-after' content='2 days'>
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <base href="{{ asset('') }}">
    <title>EClickBuy </title>

    <link rel="shortcut icon" href="images/ovo.png">
	<meta name="keywords" content="Cập nhật sau">


    <link rel="stylesheet" href="../css/home/bootstrap-4-3-min.css">
	<link href="../css/home/main.scss.css" rel="stylesheet" type="text/css">
	<link href="../css/home/font-roboto.scss.css" rel="stylesheet" type="text/css">
	<link href="../css/home/index.scss.css" rel="stylesheet" type="text/css">
	<link href="../css/home/responsive.scss.css" rel="stylesheet" type="text/css">

    <link href="../css/account_oder_style.scss.css" rel="stylesheet" type="text/css">
    <script src="../js/home.js"></script>


	<script src="../js/home.js"></script>
    <link href="../css/account_oder_style.scss.css" rel="stylesheet" type="text/css">
    <script src="../js/home.js"></script>


</head>

<body>
	<div class="opacity_menu"></div>
	{{--  <div class="tophead clearfix">
		<div class="header_banner_top d-none d-sm-block d-md-block d-lg-block ">
			<a class="scale_hovers" href="#" title="Banner header">
				<img class="lazyload img_banner"
					src="https://c.wallhere.com/images/28/c6/ef27f2cc88f1547e76713b511769-1582587.jpg!d" alt="Banner header">
			</a>
		</div>
	</div>  --}}
	<div class="wraphead_mobile clearfix">
		<div class="container">
			<div class="row">
				<div class="col-xl-3 col-lg-2 col-md-12 col-sm-12 col-12">
					<span class="menubutton"><i class="fas fa-bars"></i></span>
					<div class="logo">

						<a href="#" class="logo-wrapper ">
							<img src="../images/logo2.png" alt="logo EClickBuy">
						</a>

					</div>
				</div>
				<div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 col-12">
					<div class="col-search-engine hidden-991">
						<div class="header_search">
							<form class="input-group search-bar" action="/search" method="get" role="search">
								<div class="collection-selector hidden-xs hidden-sm">
									<div class="search_text">Chọn danh mục</div>
									<div id="search_info" class="list_search" style="display: none;">

										<div class="search_item" data-coll-id="2299263" title="Phụ kiện">Phụ kiện</div>

										<div class="search_item" data-coll-id="2299262" title="Kỹ thuật số">Kỹ thuật số
										</div>

										<div class="search_item" data-coll-id="2299261" title="Thiết bị văn phòng">Thiết
											bị văn phòng</div>

										<div class="search_item" data-coll-id="2299260" title="Gia dụng - Thiết bị bếp">
											Gia dụng - Thiết bị bếp</div>

										<div class="search_item" data-coll-id="2299259" title="Điều hoà nhiệt độ">Điều
											hoà nhiệt độ</div>

										<div class="search_item" data-coll-id="2299258" title="Tivi - Loa âm thanh">Tivi
											- Loa âm thanh</div>

										<div class="search_item" data-coll-id="2299257" title="Máy giặt - Máy sấy">Máy
											giặt - Máy sấy</div>

										<div class="search_item" data-coll-id="2299243" title="Laptop - Laptop gaming">
											Laptop - Laptop gaming</div>

										<div class="search_item" data-coll-id="2299242"
											title="Điện thoại - Máy tính bảng">Điện thoại - Máy tính ...</div>

										<div class="search_item" data-coll-id="2299241" title="Sản phẩm khuyến mãi">Sản
											phẩm khuyến mãi</div>

										<div class="search_item" data-coll-id="2299240" title="Sản phẩm mới">Sản phẩm
											mới</div>

										<div class="search_item" data-coll-id="2299239" title="Sản phẩm nổi bật">Sản
											phẩm nổi bật</div>

										<div class="liner_search"></div>
										<div class="search_item active" data-coll-id="0">Tất cả</div>
									</div>
								</div>
								<input type="search" name="query" value="" placeholder="Bạn cần tìm gì hôm nay... "
									class="input-group-field st-default-search-input search-text" autocomplete="off"
									required="">
								<span class="input-group-btn">
									<button class="btn icon-fallback-text">
										<img src="../images/icon/i_search.png"
											alt="">
									</button>
								</span>
							</form>
						</div>
					</div>
					<div class="rightcart">
						<div class="cartsearch">
							<div class="searchhd hidden-md">
								<form action="/search" method="get" class="input-group search-bar" role="search">
									<input type="text" name="query" value="" autocomplete="off" required=""
										placeholder="Bạn cần tìm gì hôm nay..." class="input-group-field auto-search">
									<button type="submit" class="visible_index btn icon-fallback-text">
										<img src="../images/icon/i_search.png"
											alt="">
									</button>
								</form>
							</div>
							<div class="carthd">

								<div class="mini-cart text-xs-center">
									<div class="phone_top hidden-xs hidden-sm">
										<img src="../images/icon/i_phone.png"
											alt="Giỏ hàng">
										Hotline:
										<a class="fone" href="tel:18006750">1800 6750</a>
									</div>
									<div class="accout hidden-xs hidden-sm">
										<div class="tkname">
											<img src="../images/icon/i_user.png"
                                                alt="khách hàng">
                                            @if (!auth()->check())
                                            <span>Tài khoản</span>
                                            @else
                                            <span class="btnx" href="">{{ Auth::user()->ho_ten }}</span>
                                            @endif
										</div>
										<div class="group_ac">
                                            @if (!auth()->check())
								            <a class="btnx" href="{{route('dang-nhap')}}">Đăng nhập</a>
											<a href="{{route('dang-ki')}}">Đăng ký</a>
                                            @else
                                        	<a class="btnx" href="{{route('dashboard')}}">Quản lí</a>
                                            <a class="btnx" href="">Hồ sơ</a>
                                            <a class="btnx" href="{{route('DonHangCuaToi_get')}}">Đơn hàng của tôi</a>
                                            <a class="btnx" href="{{route('dang-xuat')}}">Đăng xuất</a>
                                            @endif
                                            {{-- @if(isset(Auth::user()->vai_tro)) --}}
										</div>
									</div>
									<div class="heading-cart cart_header">
										<a class="img_hover_cart" href="{{ route('gioHang_get') }}" title="Xem giỏ hàng">
											<div class="icon_hotline">
												<img src="../images/icon/i_cart.png"
                                                    alt="Giỏ hàng">
                                                    <span id="so_cart" class="count_item count_item_pr">{{ Cart::count() }}</span></span>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section menupc">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col-mega hidden-sm hidden-xs">
					<div id="box_menu_group_header" class="menu_mega">
						<div class="title_menu">
							<span class="title_">Danh mục sản phẩm</span>
							<span class="nav_button"><span><i class="fa fa-bars" aria-hidden="true"></i></span></span>
                        </div>

						<div id="menu_header_menu" class="menu_all_site menu_index_site col-lg-3 col-md-3">
							<ul class="ul_menu site-nav-vetical">


                                @foreach ($danhmucs as $danhmuc)
								<li class="lev-1 lv1 li_check">
                                    <img style="width: 20px;height: 20px;border-radius: 50%;margin: 0 15px;" src="../images/category_product/{{ $danhmuc->hinh_anh }}" alt="">
									<a href="{{ route('DanhSachById_get',['id'=>$danhmuc->ten_danh_muc]) }}" title="Laptop - Laptop Gaming">
                                        {{ $danhmuc->ten_danh_muc }}
									</a>
                                </li>
                                @endforeach
							</ul>
						</div>
					</div>
				</div>

				<div class="col-lg-9 col-md-9 no-padding">
					<div class="right_content">



						<div class="item">
							<i class="fas fa-gift"></i>
							<span class="info">
								<span>Sản phẩm khuyến mãi</span>
							</span>
						</div>



						<div class="item">
							<i class="fas fa-sync-alt"></i>
							<span class="info">
								<span>Đổi trả hàng trong 15 ngày</span>
							</span>
						</div>



						<div class="item">
							<i class="fas fa-truck"></i>
							<span class="info">
								<span>Miễn phí giao hàng toàn quốc</span>
							</span>
						</div>



						<div class="item">
							<i class="fas fa-hand-holding-usd"></i>
							<span class="info">
								<span>Thanh toán khi nhận hàng</span>
							</span>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapmenu_right d-lg">
		<div class="wrapmenu">
			<div class="wrapmenu_full menumain_full">
				<div class="containers">
					<!-- Menu mobile -->
					<div class="contenttop">
						<div class="section margin-bottom-10 margin-top-20">

                        <a class="btnx" href="{{route('dang-nhap')}}">Đăng nhập</a>&nbsp;/
							<a href="{{route('dang-ki')}}">Đăng ký</a>

						</div>
					</div>
					<div class="menu_mobile">
						<ul class="ul_collections">

							<li class="level0 level-top parent">
								<a href="index.htm">Trang chủ</a>

							</li>

							<li class="level0 level-top parent">
								<a href="gioi-thieu.html">Giới thiệu</a>

							</li>

							<li class="level0 level-top parent">
								<a href="collections/all.html">Sản phẩm</a>

								<i class="fa fa-plus"></i>
								<ul class="level0" style="display:none;">
                                    @foreach ($danhmucs as $danhmuc)
                                    <li class="level1">
                                        <a href="{{ route('DanhSachById_get',['id'=>$danhmuc->ten_danh_muc]) }}">
                                            <span>{{ $danhmuc->ten_danh_muc }}</span>
                                        </a>
                                    </li>
                                    @endforeach


									<li class="level1 ">
										<a href="phu-kien.html"> <span>Phụ kiện</span> </a>

									</li>

								</ul>

							</li>

							<li class="level0 level-top parent">
								<a href="tin-tuc.html">Tin tức</a>

							</li>

							<li class="level0 level-top parent">
								<a href="lien-he.html">Liên hệ</a>

							</li>

						</ul>
					</div>
				</div>
			</div>

		</div>
	</div>
	<div class="bodywrap">
		<h1 class="d-none">EClickBuy - </h1>




		<section class="awe-section-1">
			<section class="s_slider">
				<div class="container">
					<div class="row">
						<div class="col-xl-3">
                        </div>


						<div id="banner_header_menu" class="col-xl-9 padding-left-0">
                            <div style="overflow: hidden;
                            height: 402px;
                            width: 100%;">
                                <img width="100%" height="100%" src="https://c.wallhere.com/images/28/c6/ef27f2cc88f1547e76713b511769-1582587.jpg!d" alt="">

                            </div>
						</div>

					</div>
				</div>
			</section>
		</section>

<div class="container">
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
</div>

@yield('container_layout')

		<div class="section footer_wwap clearfix">
			<footer class="footer">
				<div class="site-footer">
					<div class="mid-footer section">
						<div class="container">
							<div class="getmail getmail_top section">
								<div class="row">
									<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
										<div class="title_mail">
											<img class="lazyload"
												src="data:image/png;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA="
												data-src="//bizweb.dktcdn.net/100/397/652/themes/792901/assets/mailing.png?1603341153354"
												alt="EClickBuy">
											<div class="right_title">
												<h3>
													Đăng ký nhận bản tin ECLICKBUY
												</h3>
												<p>
													Đừng bỏ lỡ hàng ngàn sản phẩm và chương trình siêu hấp dẫn
												</p>
											</div>
										</div>
									</div>
									<div class="col-lg-7 col-md-12 col-sm-12 col-xs-12 first_email">
										<div class="mail_footer subscribe">
											<form id="mc-form" class="newsletter-form" data-toggle="validator">
												<div class="input-group">
													<div class="groupiput">
														<input aria-label="Địa chỉ Email" type="email"
															class="form-control"
															placeholder="Nhập email đăng ký của bạn" name="EMAIL"
															required="" autocomplete="off">
													</div>
													<span class="input-group-append subscribe">
														<button class="btn btn-default" type="submit"
															aria-label="Đăng ký nhận tin" name="subscribe">Đăng
															ký</button>
													</span>
												</div>
											</form>

										</div>

									</div>
								</div>
							</div>
						</div>
						<div class="container">
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
									<div class="widget-ft first before">
										<h4 class="title-menu">
											<a role="button" class="collapsed" data-toggle="collapse"
												aria-expanded="false" data-target="#collapseListMenu01"
												aria-controls="collapseListMenu01">
												Thông tin công ty <i class="fas fa-angle-down" aria-hidden="true"></i>
											</a>
										</h4>
										<div class="collapse" id="collapseListMenu01">
											<ul class="list-menu">

												<li class="li_menu"><a href="index.htm" title="Trang chủ">Trang chủ</a>
												</li>

												<li class="li_menu"><a href="gioi-thieu.html" title="Giới thiệu">Giới
														thiệu</a></li>

												<li class="li_menu"><a href="collections/all.html" title="Sản phẩm">Sản
														phẩm</a></li>

												<li class="li_menu"><a href="tin-tuc.html" title="Tin tức">Tin tức</a>
												</li>

												<li class="li_menu"><a href="lien-he.html" title="Liên hệ">Liên hệ</a>
												</li>

											</ul>
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
									<div class="widget-ft first before">
										<h4 class="title-menu">
											<a role="button" class="collapsed" data-toggle="collapse"
												aria-expanded="false" data-target="#collapseListMenu02"
												aria-controls="collapseListMenu02">
												Chính sách <i class="fas fa-angle-down" aria-hidden="true"></i>
											</a>
										</h4>
										<div class="collapse" id="collapseListMenu02">
											<ul class="list-menu">

												<li class="li_menu"><a href="index.htm" title="Trang chủ">Trang chủ</a>
												</li>

												<li class="li_menu"><a href="gioi-thieu.html" title="Giới thiệu">Giới
														thiệu</a></li>

												<li class="li_menu"><a href="collections/all.html" title="Sản phẩm">Sản
														phẩm</a></li>

												<li class="li_menu"><a href="tin-tuc.html" title="Tin tức">Tin tức</a>
												</li>

												<li class="li_menu"><a href="lien-he.html" title="Liên hệ">Liên hệ</a>
												</li>

											</ul>
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
									<div class="widget-ft first before lasst">
										<h4 class="title-menu">
											<a role="button" class="collapsed" data-toggle="collapse"
												aria-expanded="false" data-target="#collapseListMenu03"
												aria-controls="collapseListMenu03">
												Tổng đài gọi hỗ trợ <i class="fas fa-angle-down" aria-hidden="true"></i>
											</a>
										</h4>
										<div class="collapse" id="collapseListMenu03">
											<div class="getmail section">
												<div class="adress">
													Bán hàng:
													<a class="fone" href="tel:18006750">1800 6750</a>
												</div>

												<div class="adress">
													Bán hàng:
													<a class="fone" href="tel:18006750">1800 6750</a>
												</div>

												<div class="social">
													<h4>
														Kết nối với chúng tôi
													</h4>

													<a class="tw" href="index-1.htm" title="Theo dõi trên Twitter"><i
															class="fab fa-twitter"></i></a>


													<a class="fb" href="sapowebvietnam/index.htm"
														title="Theo dõi trên Facebook"><i
															class="fab fa-facebook-f"></i></a>


													<a class="pi" href="index-2.htm" title="Theo dõi trên Pinterest"><i
															class="fab fa-pinterest-p"></i></a>


													<a class="go" href="index-3.htm" title="Theo dõi trên Google"><i
															class="fab fa-google-plus-g"></i></a>


													<a class="yt" href="index-4.htm" title="Theo dõi trên Youtube"><i
															class="fab fa-youtube"></i></a>

												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-12">
									<div class="left_title clearfix">
										<h3>
											Chấp nhận thanh toán:
										</h3>
										<img class="lazyload"
											src="" alt="EClickBuy">
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="bg-footer-bottom copyright clearfix">
						<div class="container">
							<div class="inner clearfix">
								<div class="row tablet">
									<div id="copyright" class="col-lg-12 a-center fot_copyright">
										<span class="wsp">

											<span class="mobile">© Bản quyền thuộc về <b>Awesome Team</b>
												<span class="dash hidden-xs">|</span>
											</span>

											<span class="opacity1">Cung cấp bởi</span>

											<a href="index-5.htm?utm_campaign=cpn:site_khach_hang-plm:footer&utm_source=site_khach_hang&utm_medium=referral&utm_content=fm:text_link-km:-sz:&utm_term=&campaign=site_khach_hang"
												rel="nofollow" title="Sapo" target="_blank">Sapo</a>

										</span>
									</div>
								</div>
							</div>

							<a href="#" class="backtop" title="Lên đầu trang"><i class="fa fa-angle-up"
									aria-hidden="true"></i></a>

						</div>
					</div>
				</div>
			</footer>
		</div>
    </div>
    <script>
        $(document).ready(function(){
            $('.add_to_cart').click(function(){
                var $idprd = $(this).find('.val_id_product').val();
                $.get('/gio-hang/them/'+ $idprd, function(data){
                    $('#so_cart').html(data);
                });
            });
        });
    </script>



	<script src="../js/index.js" type="text/javascript"></script>

	<script src="../js/main.js" type="text/javascript"></script>


	<script type='text/javascript'>
		var timer = undefined;
		timer = setTimeout(() => {
			//<![CDATA[
			function loadCSS(e, t, n) {
				"use strict";
				var i = window.document.createElement("link");
				var o = t || window.document.getElementsByTagName("footer")[0];
				i.rel = "stylesheet";
				i.href = e;
				i.media = "only x";
				o.parentNode.insertBefore(i, o);
				setTimeout(function () {
					i.media = n || "all"
				})
			}
			loadCSS("https://use.fontawesome.com/releases/v5.7.2/css/all.css");
			//]]>
			timer = undefined;
		}, 1500)
    </script>



    @yield('script')
    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content alert alert-success">
              <p style="text-align: center; font-size: 20px">
                <i style="font-size: 50px" class="fas fa-cart-arrow-down"></i> <br/> Thêm vào giỏ hàng thành công
                <br/><a href="{{ route('gioHang_get') }}"><button  class="btn btn-outline-success">Xem giỏ hàng</button></a>
            </p>
          </div>
        </div>
      </div>

</body>

</html>
