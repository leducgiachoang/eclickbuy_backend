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

Route::get('/', 'FrontEnd\homePage@index');


Route::get('/admin', function () {
    return redirect(route('dashboard'));
});


Route::group(['prefix' => 'admin', 'namespace' => 'BackEnd'], function () {


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
});


Route::group(['prefix' => 'danh-muc', 'namespace'=> 'FrontEnd'], function() {
    Route::get('/{id}', 'SanPhamController@DanhSachById')->name('DanhSachById_get');
});


Route::group(['prefix' => 'gio-hang', 'namespace'=> 'FrontEnd'], function() {

    Route::get('them/{id}', 'GioHangController@add_cart');
    Route::get('gio-hang', 'GioHangController@index')->name('gioHang_get');
    Route::post('cap_nhap', 'GioHangController@update')->name('CapNhapGioHnag_post');
    Route::get('xoa/{id}', 'GioHangController@destroy')->name('XoaHangById');
});




Route::group(['prefix' => 'san-pham', 'namespace'=>'FrontEnd'], function() {
    Route::get('/{ten_san_pham}','SanPhamController@chi_tiet_san_pham')->name('ChiTietSanPham');


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
