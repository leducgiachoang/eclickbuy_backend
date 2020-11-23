<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Model\ChiTietHoaDon_Model_h;
use App\Model\DonHang_Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HoaDon_controller extends Controller
{
    public function donhangcuatoi(){
        $dbHoaDon = DonHang_Model::where('id_tai_khoan', Auth::user()->id)->orderby('id', 'desc')->paginate(5);
        return view('frontEnd.hoa-don.hoa-don-cua-toi',[
            'dbHoaDon' => $dbHoaDon
        ]);
    }
    public function ChiTietDonHangCuaToi($id){
        $dbHoaDonsByid = DonHang_Model::where(
            [
                'id'=> $id,
                'id_tai_khoan'=> Auth::user()->id
            ]
        )->get();
        return view('frontEnd.hoa-don.chi-tiet-hoa-don', ['dbHoaDonsByid'=> $dbHoaDonsByid]);
    }
}
