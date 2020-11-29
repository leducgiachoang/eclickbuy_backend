<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\DanhMucSanPham_Model;
use App\Model\NguoiDungModel;
use App\Model\DonHang_Model;
use App\Model\SanPham_Model;

class SearchController extends Controller
{
    public function searchPost(Request $request){

        $item = DanhMucSanPham_Model::where('ten_danh_muc','like','%'.$request->get('searchQuesr').'%')->get();
        return json_encode($item);
    }
    public function searchProduct(Request $request){

        $item1 = SanPham_Model::where('ten_san_pham','like','%'.$request->get('searchProduct').'%')->orWhere('so_luong','like','%'.$request->get('searchProduct').'%')->get();
        return json_encode($item1);
    }
    public function searchUser(Request $request){

        $item2 = NguoiDungModel::where('ho_ten','like','%'.$request->get('searchUser').'%')
        ->orWhere('so_dien_thoai','like','%'.$request->get('searchUser').'%')
        ->orWhere('email','like','%'.$request->get('searchUser').'%')->orderBy('id', 'desc')
        ->get();
        return json_encode($item2);
    }
    // public function searchOrder(Request $request){

    //     $item1 = DonHang_Model::where('ten_san_pham','like','%'.$request->get('searchProduct').'%')->orWhere('so_luong','like','%'.$request->get('searchProduct').'%')->get();
    //     return json_encode($item1);
    // }
}
