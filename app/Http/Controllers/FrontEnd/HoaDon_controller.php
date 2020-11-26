<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Model\ChiTietHoaDon_Model_h;
use App\Model\DanhGiaSanPham_model;
use App\Model\DonHang_Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class HoaDon_controller extends Controller
{
    public function donhangcuatoi(){
        $dbHoaDon = DonHang_Model::where('id_tai_khoan', Auth::user()->id)->orderby('id', 'desc')->paginate(5);
        $dbHoaDon_count = DonHang_Model::where('id_tai_khoan', Auth::user()->id)->count();
        return view('frontEnd.hoa-don.hoa-don-cua-toi',[
            'dbHoaDon' => $dbHoaDon,
            'dbHoaDonsByid_count'=> $dbHoaDon_count
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

    public function Guidanhgia(Request $request){
        $saveDanhgia = new DanhGiaSanPham_model;
        $saveDanhgia->id_san_pham = $request->id_san_pham;
        $saveDanhgia->id_tai_khoan = Auth::user()->id;
        $saveDanhgia->so_sao = $request->star;
        $saveDanhgia->noi_dung = $request->noi_dung;
        $saveDanhgia->ngay_tao = Carbon::now();
        $saveDanhgia->save();
        return redirect()->back()->with('success', 'Bạn đã gửi đánh giá thành công!');
    }

    public function DonHangCuaToiByid($id){
        $dbHoaDonsByid = DonHang_Model::where([
            'tinh_trang' => $id,
            'id_tai_khoan' => Auth::user()->id
        ])->orderby('id', 'desc')->paginate(5);

        $dbHoaDonsByid_count = DonHang_Model::where([
            'tinh_trang' => $id,
            'id_tai_khoan' => Auth::user()->id
        ])->count();
        return view('frontEnd.hoa-don.hoa-don-cua-toi', ['dbHoaDon'=> $dbHoaDonsByid, 'dbHoaDonsByid_count'=> $dbHoaDonsByid_count]);
    }
    public function KiemTraDonHang(Request $request){
        return view('frontEnd.hoa-don.kiem-tra-don-hang');
    }
    public function KiemTraDonHang_post(Request $request){
        $dbHoaDonsByid = DonHang_Model::where([
            'id'=> $request->id_hoa_don,
            'id_tai_khoan'=> Auth::user()->id
        ])->get();
        $dbHoaDonsByid_count = DonHang_Model::where([
            'id'=> $request->id_hoa_don,
            'id_tai_khoan'=> Auth::user()->id
        ])->count();

        if($dbHoaDonsByid_count != 0 ){
            return view('frontEnd.hoa-don.chi-tiet-hoa-don', ['dbHoaDonsByid'=> $dbHoaDonsByid]);
        }else{
            echo redirect()->back()->with('danger', 'Đơn hàng không tồn tại. Vui lòng thử lại !');
        }

    }

    public function huydonhang(Request $request){
        DonHang_Model::where('id',$request->id_hoa_don)->update([
            'tinh_trang'=>2
        ]);
        return redirect()->back()->with('success', 'Hủy đơn hàng thành công!');
    }
}
