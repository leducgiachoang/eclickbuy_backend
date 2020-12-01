<!DOCTYPE html>
<html class="floating-labels">
    <head>
    <link rel="shortcut icon" href="../images/ovo.png">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title>EclikBuy - Thanh toán đơn hàng</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/checkout.min.css">
    <script src="../css/checkout.min.js"></script>
    <link href="../css/fontawesome.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="../js/jquery.number.min.js"></script>
    <title>EClickBuy - Thanh Toán đơn hàng</title>
</head>

<body data-no-turbolink="">
    <form action="{{ route('thanhtoan_post') }}" method="POST">
        @csrf
	<aside>
		<button class="order-summary-toggle" data-toggle="#order-summary" data-toggle-class="order-summary--is-collapsed">
			<span class="wrap">
				<span class="order-summary-toggle__inner">
					<span class="order-summary-toggle__text">
						Đơn hàng ({{ Cart::count() }} sản phẩm)
					</span>
					<span class="order-summary-toggle__btn expandable">Xem chi tiết </span>
				</span>
			</span>
		</button>
	</aside>
	<div class="content">
			<div class="wrap">
				<main class="main">
					<header class="main__header">
						<div class="logo logo--left ">

		<h1 class="shop__name">
			Thanh toán
		</h1>

</div>
					</header>
					<div class="main__content">
						<article class="animate-floating-labels row">
							<div class="col col--two">
								<section class="section">
									<div class="section__header">
										<div class="layout-flex">
											<h2 class="section__title layout-flex__item layout-flex__item--stretch">
												<i class="fa fa-id-card-o fa-lg section__title--icon hide-on-desktop"></i>

												Thông tin nhận hàng

											</h2>
										</div>
									</div>
									<div class="section__content">
										<div class="fieldset">




											<div class="field " data-bind-class="{&#39;field--show-floating-label&#39;: email}">
												<div class="field__input-wrapper">
													<label for="email">
														Email
													</label>
													<input placeholder="Email" name="email" id="email" type="email" class="field__input" data-bind="email" value="{{ Auth::user()->email }}">
                                                    @error('email')
                                                    <div style="background: moccasin;font-weight: 600;color: red;" class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>

											</div>



											<div class="field " data-bind-class="{&#39;field--show-floating-label&#39;: billing.name}">
												<div class="field__input-wrapper">
													<label for="billingName">Họ và tên</label>
                                                    <input placeholder="Họ và tên" name="ho_ten" id="billingName" type="text" class="field__input" data-bind="billing.name" value="{{ Auth::user()->ho_ten }}">
                                                    @error('ho_ten')
                                                    <div style="background: moccasin;font-weight: 600;color: red;" class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
												</div>

											</div>

											<div class="field " data-bind-class="{&#39;field--show-floating-label&#39;: billing.phone}">
												<div class="field__input-wrapper">
													<label for="billingPhone">
														Số điện thoại (tùy chọn)
													</label>
                                                    <input placeholder="Số điện thoại" name="so_dien_thoai" id="billingPhone" type="tel" class="field__input" data-bind="billing.phone" value="{{ Auth::user()->so_dien_thoai }}">
                                                    @error('so_dien_thoai')
                                                    <div style="background: moccasin;font-weight: 600;color: red;" class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
												</div>

											</div>


											<div class="field " data-bind-class="{&#39;field--show-floating-label&#39;: billing.address}">
												<div class="field__input-wrapper">
													<label for="dia_chi_noi_nhan ">
														Địa chỉ giao hàng
                                                    </label>
                                                    <textarea placeholder="Địa chỉ người nhận" name="dia_chi_noi_nhan" required id="" class="field__input" cols="30" rows="10"></textarea>
                                                    @error('dia_chi_noi_nhan')
                                                    <div style="background: moccasin;font-weight: 600;color: red;" class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
												</div>

											</div>
										</div>
									</div>
								</section>

								<div class="fieldset">
									<h3 class="visually-hidden">Ghi chú</h3>
									<div class="field " data-bind-class="{&#39;field--show-floating-label&#39;: note}">
										<div class="field__input-wrapper">
											<label for="note">
												Ghi chú (tùy chọn)
											</label>
											<textarea name="loi_nhan" id="note" type="text" class="field__input" data-bind="note"></textarea>
										</div>

									</div>
								</div>

							</div>
							<div class="col col--two">
								<section class="section">
									<div class="section__header">
										<div class="layout-flex">
											<h2 class="section__title layout-flex__item layout-flex__item--stretch">
												<i class="fa fa-credit-card fa-lg section__title--icon hide-on-desktop"></i>
												Thanh toán
											</h2>
										</div>
									</div>
									<div class="section__content">

										<div class="content-box">
											<div class="content-box__row">
												<div class="radio-wrapper">
													<div class="radio__input">
														<input name="paymentMethod" id="paymentMethod-470984" type="radio" class="input-radio" data-bind="paymentMethod" value="470984" checked="">
													</div>
													<label for="paymentMethod-470984" class="radio__label">
														<span class="radio__label__primary">Thanh toán khi giao hàng (COD)</span>
														<span class="radio__label__accessory">
															<span class="radio__label__icon">
																<i class="fas fa-shipping-fast"></i>
															</span>
														</span>
													</label>
												</div>

												<div class="content-box__row__desc" data-bind-show="paymentMethod == 470984">
													<p>Bạn chỉ phải thanh toán khi nhận được hàng</p>

												</div>

											</div>

										</div>
									</div>
								</section>
							</div>
						</article>

					</div>






                </main>

				<aside class="sidebar">
					<div class="sidebar__header">
						<h2 class="sidebar__title">
							Đơn hàng ({{ Cart::count() }} sản phẩm)
						</h2>
					</div>
					<div class="sidebar__content">
						<div id="order-summary" class="order-summary order-summary--is-collapsed">
							<div class="order-summary__sections">
								<div class="order-summary__section order-summary__section--product-list order-summary__section--is-scrollable order-summary--collapse-element">
									<table class="product-table">
										<caption class="visually-hidden">Chi tiết đơn hàng</caption>
										<thead class="product-table__header">
											<tr>
												<th>
													<span class="visually-hidden">Ảnh sản phẩm</span>
												</th>
												<th>
													<span class="visually-hidden">Mô tả</span>
												</th>
												<th>
													<span class="visually-hidden">Sổ lượng</span>
												</th>
												<th>
													<span class="visually-hidden">Đơn giá</span>
												</th>
											</tr>
										</thead>
										<tbody>
                                            @foreach (Cart::content() as $row)


											<tr class="product">
												<td class="product__image">
													<div class="product-thumbnail">
														<div class="product-thumbnail__wrapper" data-tg-static="">

															<img src="../images/producs/{{ $row->options->avatar }}" alt="" class="product-thumbnail__image">

														</div>
														<span class="product-thumbnail__quantity">{{ $row->qty }}</span>
													</div>
												</td>
												<th class="product__description">
													<span class="product__description__name">
														{{ $row->name }}
													</span>


												</th>
												<td class="product__quantity visually-hidden"><em>Số lượng:</em> 12</td>
												<td class="product__price">
													{{ number_format($row->price, 2,'.', ',') }}₫
												</td>
                                            </tr>
                                            @endforeach
										</tbody>
									</table>
								</div>
								<div class="order-summary__section order-summary__section--discount-code" data-tg-refresh="refreshDiscount" id="discountCode">
									<h3 class="visually-hidden">Mã khuyến mại</h3>
									<div class="edit_checkout animate-floating-labels">
										<div class="fieldset">
											<div class="field">
												<div class="field__input-btn-wrapper">
													<div class="field__input-wrapper">
														<input placeholder="Mã khuyến mãi" class="field__input" name="code_gift" id="reductionCode" type="text">
													</div>
													<button class="field__input-btn btn spinner btn--disabled" id="button_add_gift" type="button">
														<span class="spinner-label">Áp dụng</span>
                                                    </button>

                                                </div>
                                                <div style="background: #ffeeba;
                                                padding: 0px 5px;
                                                border-radius: 5px;
                                                margin-top: 5px;" class="thongbaoGift"></div>
                                                <div style="background: #00a2ff;
                                                padding: 0px 5px;
                                                border-radius: 5px;color: white;
                                                margin-top: 5px;" class="thongbaoGiftSu"></div>
                                                <script>
                                                    $(document).ready(function(){
                                                        $('#button_add_gift').click(function(){
                                                            var $codeGift = $('#reductionCode').val();
                                                            if(!$codeGift){
                                                                alert('Vui lòng nhập mã khuyến mãi');
                                                            }else{
                                                                $.get('check_giftcode/'+$codeGift, function(data){
                                                                    if(data == ''){
                                                                        var $thongbaoda = $('.thongbaoGift').text('Mã khuyến mãi không chính xác hoặc hết hạn sử dụng !')
                                                                        $('#reductionCode').val('');
                                                                        var hideda = function(){
                                                                            $thongbaoda.hide();
                                                                        }
                                                                        setTimeout(hideda, 2000);
                                                                    }else{
                                                                        var $thongbaoda = $('.thongbaoGiftSu').text('Áp dụng mã khuyến mãi thành công');
                                                                        $('#reductionCode').prop('readonly', true);
                                                                        var hideda = function(){
                                                                            $thongbaoda.hide();
                                                                        }
                                                                        setTimeout(hideda, 2000);
                                                                        <?php
                                                                        $tongtien = str_replace(',', '', Cart::subtotal(0, 3));
                                                                        ?>
                                                                        var $tien = <?php echo (int) $tongtien ?> ;
                                                                        var $tientamtinh = $.number($tien - ($tien*data/100),2)+'₫' ;
                                                                        $('#tientamtinh').html($tientamtinh);
                                                                        var $tongcong = $.number(($tien - ($tien*data/100)) + 30000,2)+'₫' ;
                                                                        $('#tongcongId').html($tongcong);
                                                                        $('#tongcongIdInput').val(($tien - ($tien*data/100)) + 30000)
                                                                    }
                                                                })
                                                            }
                                                        })
                                                    })
                                                </script>

												<p class="field__message field__message--error field__message--error-always-show hide" data-bind-show="!isLoadingReductionCode &amp;&amp; isLoadingReductionCodeError" data-bind="loadingReductionCodeErrorMessage">Có lỗi xảy ra khi áp dụng khuyến mãi. Vui lòng thử lại</p>
											</div>

										</div>
									</div>
								</div>
								<div class="order-summary__section order-summary__section--total-lines" id="orderSummary">
									<table class="total-line-table">
										<caption class="visually-hidden">Tổng giá trị</caption>
										<thead>
											<tr>
												<td><span class="visually-hidden">Mô tả</span></td>
												<td><span class="visually-hidden">Giá tiền</span></td>
											</tr>
										</thead>
										<tbody class="total-line-table__tbody">
											<tr class="total-line total-line--subtotal">
												<th class="total-line__name">
													Tạm tính
												</th>
												<td id="tientamtinh" class="total-line__price">{{ Cart::subtotal() }}₫</td>
											</tr>

											<tr class="total-line total-line--shipping-fee">
												<th class="total-line__name">
													Phí vận chuyển
												</th>
												<td class="total-line__price" data-bind="getTextShippingPrice()">
                                                    30,000₫
                                                </td>
											</tr>

										</tbody>
										<tfoot class="total-line-table__footer">
											<tr class="total-line payment-due">
												<th class="total-line__name">
													<span class="payment-due__label-total">
														Tổng cộng
													</span>
												</th>
												<td class="total-line__price">

													<span id="tongcongId" class="payment-due__price"><?php  echo number_format((int) $tongtien + 30000,2,",","."); ?>₫</span>

                                                    <input id="tongcongIdInput" type="hidden" name="tong_tien" value="{{ (int) $tongtien + 30000 }}">
                                                </td>
											</tr>
										</tfoot>
									</table>
								</div>
								<div class="order-summary__nav field__input-btn-wrapper hide-on-mobile">

									<a href="{{ route('gioHang_get') }}" class="previous-link">
										<i class="previous-link__arrow">❮</i>
										<span class="previous-link__content">Quay về giỏ hàng</span>
									</a>

									<button type="submit" class="btn btn-checkout spinner">
										<span class="spinner-label">ĐẶT HÀNG</span>
									</button>
								</div>

								<div id="common-alert-sidebar" data-tg-refresh="refreshError">


									<div class="alert alert--danger hide-on-mobile hide" data-bind-show="!isSubmitingCheckout &amp;&amp; isSubmitingCheckoutError" data-bind="submitingCheckoutErrorMessage">Có lỗi xảy ra khi xử lý. Vui lòng thử lại</div>
								</div>
							</div>
						</div>
					</div>
                </aside>

			</div>
	</div>
</form>
</body>
</html>
