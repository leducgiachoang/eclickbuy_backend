<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\DanhMucSanPham_Model;
use App\Model\ThuongHieuSanPham_Model;
use App\Model\SanPham_Model;

class SanPhamController extends Controller
{
    public function DanhSachById($id)
    {
        $thuonghieus = ThuongHieuSanPham_Model::inRandomOrder()->get();
        $danhmucs = DanhMucSanPham_Model::all();
        $ten = $id;
        $iddanhmucj = DanhMucSanPham_Model::where('ten_danh_muc', $id)->get();
        foreach ($iddanhmucj as $iddanhmuc) {
            $iddm = $iddanhmuc->id;
        }
        $sanphamByDanhMucs = SanPham_Model::where('id_danh_muc', $iddm)->get();

        return view('frontEnd.san-pham.danh-sach', [
            'danhmucs' => $danhmucs,
            'thuonghieus' => $thuonghieus,
            'tenth' => $ten,
            'sanhams' => $sanphamByDanhMucs,
            'id_danh_muc' => $iddm,
        ]);
    }

    public function sap_xep($kieu, $id){
        if($kieu == 'a_z'){
            $sanphambygia = SanPham_Model::where('id_danh_muc', $id)->orderBy('ten_san_pham', 'asc')->get();
        }elseif($kieu == 'z_a'){
            $sanphambygia = SanPham_Model::where('id_danh_muc', $id)->orderBy('ten_san_pham', 'desc')->get();
        }elseif($kieu == 'gia_tang'){
            $sanphambygia = SanPham_Model::where('id_danh_muc', $id)->orderBy('gia_goc', 'asc')->get();
        }elseif($kieu == 'gia_giam'){
            $sanphambygia = SanPham_Model::where('id_danh_muc', $id)->orderBy('gia_goc', 'desc')->get();
        }elseif($kieu == 'hang_moi'){
            $sanphambygia = SanPham_Model::where('id_danh_muc', $id)->orderBy('ngay_dang', 'desc')->get();
        }elseif($kieu == 'hang_cu'){
            $sanphambygia = SanPham_Model::where('id_danh_muc', $id)->orderBy('ngay_dang', 'asc')->get();
        }

        foreach ($sanphambygia as $sanphambygiab) {
            echo '<div class="col-6 col-sm-6 col-lg-3 col-lg-fix-5 product-col item-border no-padding">
            <div class="item_product_main">

        <div class="product-thumbnail">
            <a class="image_thumb scale_hover"
            href="'.route('ChiTietSanPham',['ten_san_pham'=>$sanphambygiab->ten_san_pham ]).'"
                title="'.$sanphambygiab->ten_san_pham.'">
                <img class="lazyload"
                    src="../images/producs/'. $sanphambygiab->hinh_anh .'" alt="Macbook Pro 2017 MPTR2">
            </a>

            <div class="action">
                <a title="Xem nhanh"
                href="'.route('ChiTietSanPham',['ten_san_pham'=>$sanphambygiab->ten_san_pham ]).'"
                    data-handle="macbook-pro-2017-mptr2"
                    class="xem_nhanh btn right-to quick-view btn-views hidden-xs hidden-sm hidden-md">
                    <i class="fas fa-search-plus"></i>
                </a>

            </div>
        </div>
                    <div class="product-info">
                        <h3 class="product-name"><a
                        href="'.route('ChiTietSanPham',['ten_san_pham'=>$sanphambygiab->ten_san_pham ]).'"
                                title="'.$sanphambygiab->ten_san_pham.'">'.
                                 $sanphambygiab->ten_san_pham .'</a></h3>
                        <div class="price-box">'. number_format($sanphambygiab->gia_goc, 3,'.',',') .'₫
                        </div>

                    </div>
            </div>
        </div>';
        }
    }

// 1
    public function filter_duoi_2_000_000d($id)
    {
        $sanphambygia = SanPham_Model::where('id_danh_muc', $id)->whereBetween('gia_goc', [0, 2000000])->get();
        foreach ($sanphambygia as $sanphambygiab) {
            echo '<div class="col-6 col-sm-6 col-lg-3 col-lg-fix-5 product-col item-border no-padding">
            <div class="item_product_main">

        <div class="product-thumbnail">
            <a class="image_thumb scale_hover"
            href="'.route('ChiTietSanPham',['ten_san_pham'=>$sanphambygiab->ten_san_pham ]).'"
            title="'.$sanphambygiab->ten_san_pham.'">
                <img class="lazyload"
                    src="../images/producs/'. $sanphambygiab->hinh_anh .'" alt="Macbook Pro 2017 MPTR2">
            </a>

            <div class="action">

                <a title="Xem nhanh"
                href="'.route('ChiTietSanPham',['ten_san_pham'=>$sanphambygiab->ten_san_pham ]).'"
                    data-handle="macbook-pro-2017-mptr2"
                    class="xem_nhanh btn right-to quick-view btn-views hidden-xs hidden-sm hidden-md">
                    <i class="fas fa-search-plus"></i>
                </a>

            </div>
        </div>
                    <div class="product-info">
                        <h3 class="product-name"><a
                        href="'.route('ChiTietSanPham',['ten_san_pham'=>$sanphambygiab->ten_san_pham ]).'"
                                title="'.$sanphambygiab->ten_san_pham.'">'.
                                 $sanphambygiab->ten_san_pham .'</a></h3>
                        <div class="price-box">'. number_format($sanphambygiab->gia_goc, 3,'.',',') .'₫
                        </div>

                    </div>
            </div>
        </div>';
        }
    }
//2
    public function filter_2_000_000d_4_000_000d($id)
    {
        $sanphambygia = SanPham_Model::where('id_danh_muc', $id)->whereBetween('gia_goc', [2000000, 4000000])->get();
        foreach ($sanphambygia as $sanphambygiab) {
            echo '<div class="col-6 col-sm-6 col-lg-3 col-lg-fix-5 product-col item-border no-padding">
            <div class="item_product_main">

        <div class="product-thumbnail">
            <a class="image_thumb scale_hover"
            href="'.route('ChiTietSanPham',['ten_san_pham'=>$sanphambygiab->ten_san_pham ]).'"
            title="'.$sanphambygiab->ten_san_pham.'">
                <img class="lazyload"
                    src="../images/producs/'. $sanphambygiab->hinh_anh .'" alt="Macbook Pro 2017 MPTR2">
            </a>

            <div class="action">

                <a title="Xem nhanh"
                href="'.route('ChiTietSanPham',['ten_san_pham'=>$sanphambygiab->ten_san_pham ]).'"
                    data-handle="macbook-pro-2017-mptr2"
                    class="xem_nhanh btn right-to quick-view btn-views hidden-xs hidden-sm hidden-md">
                    <i class="fas fa-search-plus"></i>
                </a>

            </div>
        </div>
                    <div class="product-info">
                        <h3 class="product-name"><a
                        href="'.route('ChiTietSanPham',['ten_san_pham'=>$sanphambygiab->ten_san_pham ]).'"
                                title="Macbook Pro 2017 MPTR2">'.
                                 $sanphambygiab->ten_san_pham .'</a></h3>
                        <div class="price-box">'. number_format($sanphambygiab->gia_goc, 3,'.',',') .'₫
                        </div>

                    </div>
            </div>
        </div>';
        }
    }

    //3
    public function filter_4_000_000d_7_000_000d($id)
    {
        $sanphambygia = SanPham_Model::where('id_danh_muc', $id)->whereBetween('gia_goc', [4000000, 7000000])->get();
        foreach ($sanphambygia as $sanphambygiab) {
            echo '<div class="col-6 col-sm-6 col-lg-3 col-lg-fix-5 product-col item-border no-padding">
            <div class="item_product_main">

        <div class="product-thumbnail">
            <a class="image_thumb scale_hover"
            href="'.route('ChiTietSanPham',['ten_san_pham'=>$sanphambygiab->ten_san_pham ]).'"
            title="'.$sanphambygiab->ten_san_pham.'">
                <img class="lazyload"
                    src="../images/producs/'. $sanphambygiab->hinh_anh .'" alt="Macbook Pro 2017 MPTR2">
            </a>

            <div class="action">
                <a title="Xem nhanh"
                href="'.route('ChiTietSanPham',['ten_san_pham'=>$sanphambygiab->ten_san_pham ]).'"
                    data-handle="macbook-pro-2017-mptr2"
                    class="xem_nhanh btn right-to quick-view btn-views hidden-xs hidden-sm hidden-md">
                    <i class="fas fa-search-plus"></i>
                </a>

            </div>
        </div>
                    <div class="product-info">
                        <h3 class="product-name"><a
                        href="'.route('ChiTietSanPham',['ten_san_pham'=>$sanphambygiab->ten_san_pham ]).'"
                                title="Macbook Pro 2017 MPTR2">'.
                                 $sanphambygiab->ten_san_pham .'</a></h3>
                        <div class="price-box">'. number_format($sanphambygiab->gia_goc, 3,'.',',') .'₫
                        </div>

                    </div>
            </div>
        </div>';
        }
    }

    //4
    public function filter_7_000_000d_13_000_000d($id)
    {
        $sanphambygia = SanPham_Model::where('id_danh_muc', $id)->whereBetween('gia_goc', [7000000, 13000000])->get();
        foreach ($sanphambygia as $sanphambygiab) {
            echo '<div class="col-6 col-sm-6 col-lg-3 col-lg-fix-5 product-col item-border no-padding">
            <div class="item_product_main">

        <div class="product-thumbnail">
            <a class="image_thumb scale_hover"
            href="'.route('ChiTietSanPham',['ten_san_pham'=>$sanphambygiab->ten_san_pham ]).'"
            title="'.$sanphambygiab->ten_san_pham.'">
                <img class="lazyload"
                    src="../images/producs/'. $sanphambygiab->hinh_anh .'" alt="Macbook Pro 2017 MPTR2">
            </a>

            <div class="action">
                <a title="Xem nhanh"
                href="'.route('ChiTietSanPham',['ten_san_pham'=>$sanphambygiab->ten_san_pham ]).'"
                    data-handle="macbook-pro-2017-mptr2"
                    class="xem_nhanh btn right-to quick-view btn-views hidden-xs hidden-sm hidden-md">
                    <i class="fas fa-search-plus"></i>
                </a>

            </div>
        </div>
                    <div class="product-info">
                        <h3 class="product-name"><a
                        href="'.route('ChiTietSanPham',['ten_san_pham'=>$sanphambygiab->ten_san_pham ]).'"
                                title="Macbook Pro 2017 MPTR2">'.
                                 $sanphambygiab->ten_san_pham .'</a></h3>
                        <div class="price-box">'. number_format($sanphambygiab->gia_goc, 3,'.',',') .'₫
                        </div>

                    </div>
            </div>
        </div>';
        }
    }

    //5
    public function filter_tren13_000_000d($id)
    {
        $sanphambygia = SanPham_Model::where('id_danh_muc', $id)->where('gia_goc','>',  2000000)->get();
        foreach ($sanphambygia as $sanphambygiab) {
            echo '<div class="col-6 col-sm-6 col-lg-3 col-lg-fix-5 product-col item-border no-padding">
            <div class="item_product_main">

        <div class="product-thumbnail">
            <a class="image_thumb scale_hover"
            href="'.route('ChiTietSanPham',['ten_san_pham'=>$sanphambygiab->ten_san_pham ]).'"
            title="'.$sanphambygiab->ten_san_pham.'">
                <img class="lazyload"
                    src="../images/producs/'. $sanphambygiab->hinh_anh .'" alt="Macbook Pro 2017 MPTR2">
            </a>

            <div class="action">
                <a title="Xem nhanh"
                href="'.route('ChiTietSanPham',['ten_san_pham'=>$sanphambygiab->ten_san_pham ]).'"
                    data-handle="macbook-pro-2017-mptr2"
                    class="xem_nhanh btn right-to quick-view btn-views hidden-xs hidden-sm hidden-md">
                    <i class="fas fa-search-plus"></i>
                </a>

            </div>
        </div>
                    <div class="product-info">
                        <h3 class="product-name"><a
                        href="'.route('ChiTietSanPham',['ten_san_pham'=>$sanphambygiab->ten_san_pham ]).'"
                                title="Macbook Pro 2017 MPTR2">'.
                                 $sanphambygiab->ten_san_pham .'</a></h3>
                        <div class="price-box">'. number_format($sanphambygiab->gia_goc, 3,'.',',') .'₫
                        </div>

                    </div>
            </div>
        </div>';
        }
    }

    public function tat_ca($id)
    {
        $sanphambygia = SanPham_Model::where('id_danh_muc', $id)->get();
        foreach ($sanphambygia as $sanphambygiab) {
            echo '<div class="col-6 col-sm-6 col-lg-3 col-lg-fix-5 product-col item-border no-padding">
            <div class="item_product_main">

        <div class="product-thumbnail">
            <a class="image_thumb scale_hover"
            href="'.route('ChiTietSanPham',['ten_san_pham'=>$sanphambygiab->ten_san_pham ]).'"
            title="'.$sanphambygiab->ten_san_pham.'">
                <img class="lazyload"
                    src="../images/producs/'. $sanphambygiab->hinh_anh .'" alt="Macbook Pro 2017 MPTR2">
            </a>

            <div class="action">
                <a title="Xem nhanh"
                href="'.route('ChiTietSanPham',['ten_san_pham'=>$sanphambygiab->ten_san_pham ]).'"
                    data-handle="macbook-pro-2017-mptr2"
                    class="xem_nhanh btn right-to quick-view btn-views hidden-xs hidden-sm hidden-md">
                    <i class="fas fa-search-plus"></i>
                </a>

            </div>
        </div>
                    <div class="product-info">
                        <h3 class="product-name"><a
                                href="'.route('ChiTietSanPham',['ten_san_pham'=>$sanphambygiab->ten_san_pham ]).'"
                                title="'.$sanphambygiab->ten_san_pham.'">'.
                                 $sanphambygiab->ten_san_pham .'</a></h3>
                        <div class="price-box">'. number_format($sanphambygiab->gia_goc, 3,'.',',') .'₫
                        </div>

                    </div>
            </div>
        </div>';
        }
    }

    public function chi_tiet_san_pham($ten_san_pham){
        $danhmucs = DanhMucSanPham_Model::all();
        $sanPhamd = SanPham_Model::where('ten_san_pham', $ten_san_pham)->get();
        foreach($sanPhamd as $sp){
            $spIdDm = $sp->id_danh_muc;
        }
        $sanphamlienquan = SanPham_Model::where('id_danh_muc', $spIdDm)->limit(12)->get();
        return view('frontEnd.san-pham.chi-tiet-san-pham', ['danhmucs'=> $danhmucs, 'sanphams'=>$sanPhamd, 'sanphamcungloais'=>$sanphamlienquan]);
    }


}
