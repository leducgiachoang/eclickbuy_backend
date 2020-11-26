<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\ThuongHieuSanPham_Model;
use App\Model\SanPham_Model;

class ThuongHieu_controller extends Controller
{
    public function ThuongHieuById($id){
        $thuonghieus = ThuongHieuSanPham_Model::inRandomOrder()->get();
        $ten = $id;
        $DbThuongHieuById = ThuongHieuSanPham_Model::where('ten_thuong_hieu', $id)->get();
        foreach($DbThuongHieuById as $DbThuongHieuByIdx){
            $IdThuongHIEU = $DbThuongHieuByIdx->id;
        }
        $SanPhamByThuongHieu = SanPham_Model::where('id_thuong_hieu', $IdThuongHIEU)->get();
        return view('frontEnd.thuong-hieu.danh-sach',[
            'thuonghieus' => $thuonghieus,
            'tenth'=> $ten,
            'sanhams' => $SanPhamByThuongHieu,
            'id_thuong_hieu'=>  $IdThuongHIEU,
        ]);
    }

    public function SanPhanByGia($giax, $id){

        if($giax == 'filter-duoi-2-000-000d'){
            $sanphambygia = SanPham_Model::where('id_thuong_hieu', $id)->whereBetween('gia_goc', [0, 2000000])->get();
        }elseif($giax == 'filter-2-000-000d-4-000-000d'){
            $sanphambygia = SanPham_Model::where('id_thuong_hieu', $id)->whereBetween('gia_goc', [2000000, 4000000])->get();
        }elseif($giax == 'filter-4-000-000d-7-000-000d'){
            $sanphambygia = SanPham_Model::where('id_thuong_hieu', $id)->whereBetween('gia_goc', [4000000, 7000000])->get();
        }elseif($giax == 'filter-7-000-000d-13-000-000d'){
            $sanphambygia = SanPham_Model::where('id_thuong_hieu', $id)->whereBetween('gia_goc', [7000000, 13000000])->get();
        }elseif($giax == 'filter-tren13-000-000d'){
            $sanphambygia = SanPham_Model::where('id_thuong_hieu', $id)->where('gia_goc','>', 13000000)->get();
        }elseif($giax == 'tat-ca'){
            $sanphambygia = SanPham_Model::where('id_thuong_hieu', $id)->get();
        }

        foreach ($sanphambygia as $sanphambygiab) {
            if($sanphambygiab->gia_sale){
                $gia = number_format($sanphambygiab->gia_sale, 0,'.',',');
            }else{
                $gia = number_format($sanphambygiab->gia_goc, 0,'.',',');
            }
            if($sanphambygiab->gia_sale == true){
                $giagoc = number_format($sanphambygiab->gia_goc, 0,'.', '.');
            }

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
                        <div class="price-box">'.$gia.'₫
                        <span class="compare-price">
                            '.$giagoc.'₫
                        </div>
                        </div>

                    </div>
            </div>
        </div>';
    }
}

public function SanPhamSapXep($kieu, $id){
    if($kieu == 'a_z'){
        $sanphambygia = SanPham_Model::where('id_thuong_hieu', $id)->orderBy('ten_san_pham', 'asc')->get();
    }elseif($kieu == 'z_a'){
        $sanphambygia = SanPham_Model::where('id_thuong_hieu', $id)->orderBy('ten_san_pham', 'desc')->get();
    }elseif($kieu == 'gia_tang'){
        $sanphambygia = SanPham_Model::where('id_thuong_hieu', $id)->orderBy('gia_goc', 'asc')->get();
    }elseif($kieu == 'gia_giam'){
        $sanphambygia = SanPham_Model::where('id_thuong_hieu', $id)->orderBy('gia_goc', 'desc')->get();
    }elseif($kieu == 'hang_moi'){
        $sanphambygia = SanPham_Model::where('id_danh_muc', $id)->orderBy('ngay_dang', 'desc')->get();
    }elseif($kieu == 'hang_cu'){
        $sanphambygia = SanPham_Model::where('id_thuong_hieu', $id)->orderBy('ngay_dang', 'asc')->get();
    }

    foreach ($sanphambygia as $sanphambygiab) {

        if($sanphambygiab->gia_sale){
            $gia = number_format($sanphambygiab->gia_sale, 0,'.',',');
        }else{
            $gia = number_format($sanphambygiab->gia_goc, 0,'.',',');
        }

        if($sanphambygiab->gia_sale == true){
            $giagoc = number_format($sanphambygiab->gia_goc, 0,'.', '.');
        }

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
                        <div class="price-box">'.$gia.'₫
                        <span class="compare-price">
                            '.$giagoc.'₫
                        </div>
                        </div>

                    </div>
            </div>
        </div>';
}}
}
