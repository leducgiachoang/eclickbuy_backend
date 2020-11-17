$(document).ready(function ($) {
	$('.section_base .button_show_tab').on('click', function(e){
		e.preventDefault();
		var $this = $(this);
		$this.parents('.section_base .section-head').find('.viewallcat').stop().slideToggle();
		$(this).toggleClass('active')
		return false;
	});
	$('.slickpro').slick({
		autoplay: false,
		autoplaySpeed: 6000,
		dots: false,
		arrows: true,
		loop: false,
		infinite:false,
		speed: 300,
		rows: 1,
		slidesToShow: 6,
		slidesToScroll: 3,
		responsive: [
			{
				breakpoint: 1365,
				settings: {
					slidesToShow: 5,
					slidesToScroll: 5
				}
			},
			{
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

	$('.slickprolist').slick({
		autoplay: false,
		autoplaySpeed: 5000,
		dots: false,
		arrows: true,
		speed: 300,
		rows: 1,
		loop: false,
		infinite:false,
		slidesToShow: 5,
		slidesToScroll: 3,
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 3
				}
			},
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 3
				}
			},
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 3,
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
	$('.slickphukien').slick({
		autoplay: true,
		autoplaySpeed: 5000,
		dots: false,
		arrows: true,
		speed: 300,
		rows: 1,
		loop: false,
		infinite:false,
		slidesToShow: 5,
		slidesToScroll: 5,
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 5,
					slidesToScroll: 5
				}
			},
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 4
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



	$('.slickblog').slick({
		autoplay: false,
		autoplaySpeed: 6000,
		dots: true,
		arrows: false,
		infinite: false,
		speed: 300,
		slidesToShow: 1,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
	});
	$('.slickbrand').slick({
		autoplay: true,
		autoplaySpeed: 6000,
		dots: false,
		arrows: false,
		infinite: false,
		speed: 300,
		slidesToShow: 6,
		slidesToScroll: 6,
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 6,
					slidesToScroll:6
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

$(".not-dqtab").each( function(e){
	/*khai báo khởi tạo ban đầu cho 2 kiểu tab*/
	var $this1 = $(this);
	var $this2 = $(this);
	var datasection = $this1.closest('.not-dqtab').attr('data-section');
	$this1.find('.tabs-title .item:first-child').addClass('current');
	$this1.find('.tab-content').first().addClass('current');

	/*khai báo cho chức năng dành cho mobile tab*/
	var _this = $(this).find('.wrap_tab_index .title_module_main');
	var droptab = $(this).find('.link_tab_check_click');


	/*type 1*/ //kiểu 1 này thì load có owl carousel
	$this1.find('.tabtitle1.ajax .item').click(function(){
		var $this2 = $(this),
			tab_id = $this2.attr('data-tab'),
			url = $this2.attr('data-url');
		var etabs = $this2.closest('.e-tabs');
		etabs.find('.tab-viewall').attr('href',url);
		etabs.find('.tabs-title .item').removeClass('current');
		etabs.find('.tab-content').removeClass('current');
		$this2.addClass('current');
		etabs.find("."+tab_id).addClass('current');
		//Nếu đã load rồi thì không load nữa
		if(!$this2.hasClass('has-content')){
			$this2.addClass('has-content');		
			getContentTab(url,"."+ datasection+" ."+tab_id);
		}
	});


});


// Get content cho tab
function getContentTab(url,selector){
	url = url+"?view=ajaxload";
	var loading = '<div class="a-center"><img src="//bizweb.dktcdn.net/100/397/652/themes/792901/assets/rolling.svg?1603341105411" alt="loading"/></div>';
	$.ajax({
		type: 'GET',
		url: url,
		beforeSend: function() {
			$(selector).html(loading);
		},
		success: function(data) {
			var content = $(data);
			setTimeout(function(){
				$(selector).html(content.html());
				ajaxSlick(selector);
				awe_lazyloadImage();
				$('.add_to_cart').click(function(e){
					e.preventDefault();
					var $this = $(this);						   
					var form = $this.parents('form');						   
					$.ajax({
						type: 'POST',
						url: '/cart/add.js',
						async: false,
						data: form.serialize(),
						dataType: 'json',
						error: addToCartFail,
						beforeSend: function() {  
							if(window.theme_load == "icon"){
								awe_showLoading('.btn-addToCart');
							} else{
								awe_showPopup('.loading');
							}
						},
						success: addToCartSuccess,
						cache: false
					});
				});

			},500);
		},
		dataType: "html"
	});
}
// Ajax carousel
function ajaxSlick(selector,dataLgg){
	$(selector+' .slicktwo').each( function(){
		$(this).slick({
			autoplay: true,
			autoplaySpeed: 6000,
			dots: false,
			arrows: true,
			rows: 2,
			loop: false,
			infinite:false,
			speed: 300,
			slidesToShow: 4,
			slidesToScroll: 2,
			centerPadding: 15,
			responsive: [
				{
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
	$(selector+' .slickone').each( function(){
		$(this).slick({
			autoplay: true,
			autoplaySpeed: 6000,
			dots: false,
			arrows: true,
			rows: 1,
			loop: false,
			infinite:false,
			speed: 300,
			slidesToShow: 4,
			slidesToScroll: 2,
			centerPadding: 15,
			responsive: [
				{
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
	})
}


$('.slicktwo_frist').slick({
	autoplay: true,
	autoplaySpeed: 6000,
	dots: false,
	arrows: true,
	rows: 2,
	loop: false,
	infinite:false,
	speed: 300,
	slidesToShow: 4,
	slidesToScroll: 2,
	centerPadding: 15,
	responsive: [
		{
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
$('.slickone_first').slick({
	autoplay: true,
	autoplaySpeed: 6000,
	dots: false,
	arrows: true,
	rows: 1,
	loop: false,
	infinite:false,
	speed: 300,
	slidesToShow: 4,
	slidesToScroll: 2,
	centerPadding: 15,
	responsive: [
		{
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

$(document).ready(function(){
	if ($(window).width() < 768) {
		$(".remove_html").html("")
	}
	hide_img = function () {
		$(".magik-slideshow").removeClass('hidden');
		$('.base_slide>picture').remove();
	}
	setTimeout(function(){
		var slider = tns({
			container: '.magik-slideshow',
			autoplay: true,
			autoplayTimeout: 5000,
			mouseDrag: true,
			autoplayButtonOutput: false,
			controls: false,
			autoHeight: false,
			mode: 'gallery',
			items: 1,
			swipeAngle: false,
			speed: 1000,
			onInit: hide_img
		});
	},3000);

});