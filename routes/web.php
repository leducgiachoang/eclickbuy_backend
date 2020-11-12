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

Route::group(['prefix' => 'admin', 'namespace' => 'BackEnd'], function () {

    Route::get('dashboard', 'homeController@index');

    Route::group(['prefix' => 'danh-muc-san-pham'], function () {
        Route::get('them-moi', 'DanhMucSanPham_controller@index')->name('DanhMucSanPham_themmoi_get');
        Route::post('them-moi', 'DanhMucSanPham_controller@store')->name('DanhMucSanPham_themmoi_post');

        Route::get('xoa/{id}', 'DanhMucSanPham_controller@destroy')->name('DanhMucSanPham_xoa');

        Route::get('danh-sach', 'DanhMucSanPham_controller@show')->name('DanhMucSanPham_danhsach');
    });
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
});
