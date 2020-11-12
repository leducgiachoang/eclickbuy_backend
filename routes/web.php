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

Route::get('/admin', function() {
    return redirect(route('dashboard'));
});


Route::group(['prefix' => 'admin','namespace'=>'BackEnd'], function () {

    Route::group(['prefix' => 'ajax'], function () {
        Route::get('don_hang_moi', 'homeController@ajax_don_hang_moi');
        Route::get('so_don_hang_moi', 'homeController@so_don_hang_moi');
        Route::get('danh_gia_moi','homeController@list_danh_gia_moi');
    });

    Route::get('dashboard', 'homeController@index')->name('dashboard');

    Route::group(['prefix' => 'danh-muc-san-pham'], function () {
        Route::get('them-moi', 'DanhMucSanPham_controller@index')->name('DanhMucSanPham_themmoi_get');
        Route::post('them-moi', 'DanhMucSanPham_controller@store')->name('DanhMucSanPham_themmoi_post');
        Route::get('chinh-sua/{id}', 'DanhMucSanPham_controller@edit')->name('DanhMucSanPham_sua_get');
        Route::post('chinh-sua/{id}', 'DanhMucSanPham_controller@update')->name('DanhMucSanPham_sua_post');
        Route::get('xoa/{id}', 'DanhMucSanPham_controller@destroy')->name('DanhMucSanPham_xoa');

    });

    Route::group(['prefix' => 'don-hang'], function () {
        Route::get('tat-ca-don-hang', 'DonHangController@index')->name('DonHangAll');
        Route::get('page/{id}', 'DonHangController@show')->name('DonHangGetId');
        Route::get('chi-tiet-don-hang/{id}', 'DonHangController@ChiTietHoaDon')->name('ChiTietDonHang_Get');
        Route::get('cap-nhap-tinh-trang/{id}/{tinhTrang}','DonHangController@update')->name('CapNhapTrinhTrangDonHang');
    });

});
