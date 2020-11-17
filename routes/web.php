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



Route::group(['prefix' => 'san-pham', 'namespace'=>'FrontEnd'], function() {
    Route::get('/{id}', 'SanPhamController@DanhSachById')->name('DanhSachById_get');
});

//dang nhap
Route::group(['prefix' => 'tai-khoan', 'namespace' => 'FrontEnd'], function () {
    Route::get('dang-nhap', 'UserController@view_login')->name('dang-nhap');
    Route::post('dang-nhap', 'UserController@login')->name('dang-nhap');
    Route::get('dang-xuat', 'UserController@logout')->name('dang-xuat');
    Route::get('dang-ki', 'UserController@view_register')->name('dang-ki');
    Route::post('dang-ki', 'UserController@register')->name('dang-ki');
    Route::get('verify/{code}/{email}', 'UserController@verify')->name('kich-hoat');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
