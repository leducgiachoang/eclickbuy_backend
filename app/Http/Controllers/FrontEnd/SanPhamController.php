<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\DanhMucSanPham_Model;
use App\Model\ThuongHieuSanPham_Model;
use App\Model\SanPham_Model;
class SanPhamController extends Controller
{
    public function DanhSachById($id){
        $thuonghieus = ThuongHieuSanPham_Model::inRandomOrder()->get();
        $danhmucs = DanhMucSanPham_Model::all();
        $ten = $id;
        $iddanhmucj = DanhMucSanPham_Model::where('ten_danh_muc', $id)->get();
        foreach($iddanhmucj as $iddanhmuc){
            $iddm = $iddanhmuc->id;
        }
        $sanphamByDanhMucs = SanPham_Model::where('id_danh_muc', $iddm)->get();

        return view('frontEnd.san-pham.danh-sach', [
            'danhmucs'=> $danhmucs,
            'thuonghieus'=> $thuonghieus,
            'tenth'=> $ten,
            'sanhams'=> $sanphamByDanhMucs,
            ]);
    }
}
