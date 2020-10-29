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

Route::group(['prefix' => 'admin','namespace'=>'BackEnd'], function () {

    Route::get('dashboard', 'homeController@index');

    Route::group(['prefix' => 'danh-muc-san-pham'], function () {
        Route::get('them-moi', 'DanhMucSanPham_controller@index')->name('DanhMucSanPham_themmoi_get');
        Route::post('them-moi', 'DanhMucSanPham_controller@store')->name('DanhMucSanPham_themmoi_post');

        Route::get('xoa/{id}', 'DanhMucSanPham_controller@destroy')->name('DanhMucSanPham_xoa');

        Route::get('danh-sach', 'DanhMucSanPham_controller@show')->name('DanhMucSanPham_danhsach');

    });

});
