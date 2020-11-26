<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'FrontEnd\homePage@index')->name('homepage');


Route::get('/admin', function () {
    return redirect(route('dashboard'));
});


Route::group(['prefix' => 'admin', 'namespace' => 'BackEnd', 'middleware'=>'CheckAdmin'], function () {


    Route::group(['prefix' => 'ajax'], function () {
        Route::get('don_hang_moi', 'homeController@ajax_don_hang_moi');
        Route::get('so_don_hang_moi', 'homeController@so_don_hang_moi');
        Route::get('danh_gia_moi', 'homeController@list_danh_gia_moi');
    });

    Route::get('dashboard', 'homeController@index')->name('dashboard');

    Route::group(['prefix' => 'danh-muc-san-pham'], function () {
        Route::get('them-moi', 'DanhMucSanPham_controller@index')->name('DanhMucSanPham_themmoi_get');
        Route::post('them-moi', 'DanhMucSanPham_controller@store')->name('DanhMucSanPham_themmoi_post');
        Route::get('chinh-sua/{id}', 'DanhMucSanPham_controller@edit')->name('DanhMucSanPham_sua_get');
        Route::post('chinh-sua/{id}', 'DanhMucSanPham_controller@update')->name('DanhMucSanPham_sua_post');
        Route::get('xoa/{id}', 'DanhMucSanPham_controller@destroy')->name('DanhMucSanPham_xoa');
    });

    Route::get('danh-sach', 'DanhMucSanPham_controller@show')->name('DanhMucSanPham_danhsach');

    //brand product
    Route::group(['prefix' => 'thuong-hieu-san-pham'], function () {
        Route::get('add-brand-product', 'BrandProduct@add_brand_product')->name('add-brand-product');
        Route::get('all-brand-product', 'BrandProduct@all_brand_product')->name('all-brand-product');


        Route::post('save-brand-product', 'BrandProduct@save_brand_product')->name('save-brand-product');
        Route::get('delete-brand-product/{id}', 'BrandProduct@delete_brand_product')->name('delete-brand-product');

        Route::get('unactive-brand-product/{id}', 'BrandProduct@unactive_brand_product')->name('unactive-brand-product');
        Route::get('active-brand-product/{id}', 'BrandProduct@active_brand_product')->name('active-brand-product');

        Route::get('edit-brand-product/{id}', 'BrandProduct@edit_brand_product')->name('edit-brand-product');
        Route::post('update-brand-product/{id}', 'BrandProduct@update_brand_product')->name('update-brand-product');
    });

    Route::group(['prefix' => 'danh-gia'], function () {
        Route::get('danh-sach', 'DanhGia_controller@index')->name('DanhGia_list_get');
        Route::get('xoa/{id}', 'DanhGia_controller@destroy')->name('XoaDanhGia_get');
    });

    //sale product
    Route::group(['prefix' => 'khuyen-mai-san-pham'], function () {
        Route::get('add-sale-product', 'SaleController@add_sale_product')->name('add-sale-product');
        Route::post('save-sale-product', 'SaleController@save_sale_product')->name('save-sale-product');
        Route::get('all-sale-product', 'SaleController@all_sale_product')->name('all-sale-product');
        Route::get('delete-sale-product/{id}', 'SaleController@delete_sale_product')->name('delete-sale-product');
        Route::get('edit-sale-product/{id}', 'SaleController@edit_sale_product')->name('edit-sale-product');
        Route::post('update-sale-product/{id}', 'SaleController@update_sale_product')->name('update-sale-product');

    });
    //gift product
    Route::group(['prefix' => 'giftcode-san-pham'], function () {
        Route::get('add-giftcode-product', 'GiftCodeController@add_giftcode_product')->name('add-giftcode-product');
        Route::post('save-giftcode-product', 'GiftCodeController@save_giftcode_product')->name('save-giftcode-product');
        Route::get('all-giftcode-product', 'GiftCodeController@all_giftcode_product')->name('all-giftcode-product');
        Route::get('delete-giftcode-product/{id}', 'GiftCodeController@delete_giftcode_product')->name('delete-giftcode-product');
        Route::get('edit-giftcode-product/{id}', 'GiftCodeController@edit_giftcode_product')->name('edit-giftcode-product');
        Route::post('update-giftcode-product/{id}', 'GiftCodeController@update_giftcode_product')->name('update-giftcode-product');

    });

    Route::group(['prefix' => 'don-hang'], function () {
        Route::get('tat-ca-don-hang', 'DonHangController@index')->name('DonHangAll');
        Route::get('page/{id}', 'DonHangController@show')->name('DonHangGetId');
        Route::get('chi-tiet-don-hang/{id}', 'DonHangController@ChiTietHoaDon')->name('ChiTietDonHang_Get');
        Route::get('cap-nhap-tinh-trang/{id}/{tinhTrang}', 'DonHangController@update')->name('CapNhapTrinhTrangDonHang');

    });

    //user
    Route::group(['prefix' => 'nguoi-dung'], function () {
        Route::get('add-user', 'UserController@add_user')->name('add-user');
        Route::get('all-user', 'UserController@all_user')->name('all-user');

        Route::post('save-user', 'UserController@save_user')->name('save-user');
        Route::get('delete-user/{id}', 'UserController@delete_user')->name('delete-user');

        Route::get('unactive-user/{id}', 'UserController@unactive_user')->name('unactive-user');
        Route::get('active-user/{id}', 'UserController@active_user')->name('active-user');

        Route::get('edit-user/{id}', 'UserController@edit_user')->name('edit-user');
        Route::post('update-user/{id}', 'UserController@update_user')->name('update-user');
    });

    Route::group(['prefix' => 'san-pham'], function () {

        Route::group(['prefix' => 'ajax'], function () {

        });

        Route::get('them-moi', 'productsController@index')->name('them_sanpham');
        Route::post('them-moi', 'productsController@store')->name('them_sanpham_post');
        Route::get('danh-sach','productsController@create')->name('danh_sach_product');
        Route::get('xoa/{id}','productsController@show')->name('xoa_san_pham');
        Route::get('chinh-sua/{id}','productsController@edit')->name('chinh_san_pham_get');
        Route::post('chinh-sua/{id}', 'productsController@update')->name('chinh_san_pham_post');

    });
    // slider
    Route::group(['prefix' => 'slider-san-pham'], function () {
        Route::get('them-moi', 'SliderController@add_slider')->name('view-page-slider');
        Route::post('them-moi', 'SliderController@add_slider_product')->name('save-slider');
        Route::get('danh-sach', 'SliderController@list_slider_product')->name('list-page-slider');
        Route::get('xoa/{id}', 'SliderController@delete_slider_product')->name('delete-slider');
        Route::get('chinh-sua/{id}', 'SliderController@edit_slider_product')->name('view-edit-slider');
        Route::post('chinh-sua/{id}', 'SliderController@update_slider_product')->name('update-slider');

    });
});


Route::group(['prefix' => 'danh-muc', 'namespace'=> 'FrontEnd'], function() {
    Route::get('/{id}', 'SanPhamController@DanhSachById')->name('DanhSachById_get');
});


Route::group(['prefix' => 'gio-hang', 'namespace'=> 'FrontEnd'], function() {

    Route::get('them/{id}', 'GioHangController@add_cart');
    Route::get('gio-hang', 'GioHangController@index')->name('gioHang_get');
    Route::post('cap_nhap', 'GioHangController@update')->name('CapNhapGioHnag_post');
    Route::get('xoa/{id}', 'GioHangController@destroy')->name('XoaHangById');
    Route::get('thanh-toan','GioHangController@thanhtoan')->name('thanhtoan_get')->middleware('CheckLogin');
    Route::post('thanh-toan','GioHangController@thanhtoan_post')->name('thanhtoan_post')->middleware('CheckLogin');
    Route::get('check_giftcode/{code}','GioHangController@giftCode');
    Route::post('them', 'GioHangController@them')->name('the_san_pham_cart_post');
    Route::get('mua-ngay/{id}', 'GioHangController@muangay')->name('mua_ngay_get');
});




Route::group(['prefix' => 'san-pham', 'namespace'=>'FrontEnd'], function() {
    Route::get('/{ten_san_pham}','SanPhamController@chi_tiet_san_pham')->name('ChiTietSanPham');
    Route::post('tim-kiem-san-pham', 'SanPhamController@TimKiemSanPham')->name('TimKiemSanPham_post');


    Route::group(['prefix' => 'ajax'], function () {
        Route::get('filter-duoi-2-000-000d/{id}', 'SanPhamController@filter_duoi_2_000_000d');
        Route::get('filter-2-000-000d-4-000-000d/{id}', 'SanPhamController@filter_2_000_000d_4_000_000d');
        Route::get('filter-4-000-000d-7-000-000d/{id}', 'SanPhamController@filter_4_000_000d_7_000_000d');
        Route::get('filter-7-000-000d-13-000-000d/{id}', 'SanPhamController@filter_7_000_000d_13_000_000d');
        Route::get('filter-tren13-000-000d/{id}', 'SanPhamController@filter_tren13_000_000d');
        Route::get('tat-ca/{id}', 'SanPhamController@tat_ca');
        Route::get('sap-xep/{kieu}/{id}','SanPhamController@sap_xep');
    });
});

Route::group(['prefix' => 'thuong-hieu', 'namespace'=>'FrontEnd'], function () {
    Route::get("/{thuong_hieu}", 'ThuongHieu_controller@ThuongHieuById')->name('ThuongHieu_get_Id');

    Route::group(['prefix' => 'ajax'], function () {
        Route::get('/{giax}/{id}', 'ThuongHieu_controller@SanPhanByGia');
        Route::get('sap-xep/{kieu}/{id}','SanPhamController@sap_xep');
    });
});

//dang nhap
Route::group(['prefix' => 'tai-khoan', 'namespace' => 'FrontEnd'], function () {
    Route::get('dang-nhap-tai-khoan', 'UserController@view_login')->name('dang-nhap');
    Route::post('dang-nhap-tai-khoan', 'UserController@login')->name('dang-nhap');
    Route::get('dang-xuat-tai-khoan', 'UserController@logout')->name('dang-xuat');
    Route::get('dang-ki-tai-khoan', 'UserController@view_register')->name('dang-ki');
    Route::post('dang-ki-tai-khoan', 'UserController@register')->name('dang-ki');
    Route::get('verify/{code}/{email}', 'UserController@verify')->name('kich-hoat');
    Route::get('ho-so/{id}', 'UserController@profile')->name('ho-so-tai-khoan');
    Route::post('update-profile/{id}', 'UserController@update_profile')->name('update-profile');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'don-hang', 'namespace'=> 'FrontEnd', 'middleware'=>'CheckLogin'], function () {
Route::get('don-hang-cua-toi', 'HoaDon_controller@donhangcuatoi')->name('DonHangCuaToi_get');
Route::get('chi-tiet-don-hang-cua-toi/{id}', 'HoaDon_controller@ChiTietDonHangCuaToi')->name('ChiTietDonHangCuaToi_get');
Route::get('don-hang-cua-toi/{id}', 'HoaDon_controller@DonHangCuaToiByid')->name('DonHangCuaToibyid');
Route::post('gui-danh-gia','HoaDon_controller@Guidanhgia')->name('GuiDanhGia_post');
Route::get('kiem-tra-don-hang','HoaDon_controller@KiemTraDonHang')->name('KiemTraDonHang_get');
Route::post('kiem-tra-don-hang','HoaDon_controller@KiemTraDonHang_post')->name('KiemTraDonHang_post');
Route::post('huy-don-hang', 'HoaDon_controller@huydonhang')->name('huydonhang_post');
});
