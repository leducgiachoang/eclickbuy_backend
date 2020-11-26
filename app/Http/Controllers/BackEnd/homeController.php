<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\NguoiDungModel;
use App\Model\DonHang_Model;
use App\Model\SanPham_Model;
use App\Model\ChiTietHoaDon_Model_h;
use App\Model\DanhGiaSanPham_model;

class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dbSanPham = SanPham_Model::all();
        $san_pham_da_ban = ChiTietHoaDon_Model_h::sum('so_luong');
        $cout_tien = DonHang_Model::sum('tong_tien');
        $cout_tk = NguoiDungModel::count();
        $cout_sp = SanPham_Model::count();
        return view('backEnd.dashboard', [
            'count_tk'=>$cout_tk,
            'count_tien'=> $cout_tien,
            'count_product'=> $cout_sp,
            'san_pham_da_ban'=> $san_pham_da_ban,
            'san_phams' => $dbSanPham,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function ajax_don_hang_moi(){
        $db_hoa_don = DonHang_Model::where('tinh_trang', 0)->orderBy('ngay_tao', 'desc')->limit(5)->get();
        $so_db_hoa_don = DonHang_Model::where('tinh_trang', 0)->count();
        foreach ($db_hoa_don as $db_don){


            echo '<a class="dropdown-item d-flex align-items-center" href="'.route('ChiTietDonHang_Get',['id'=>$db_don->id]).'">
            <div class="mr-3">
              <div class="icon-circle bg-primary">
                <i class="fas fa-file-alt text-white"></i>
              </div>
            </div>
            <div>
              <div class="small text-gray-500">'.date("d".' \T\h\á\n\g'." m". ' \N\ă\m'." Y", strtotime($db_don->ngay_tao)).'</div>
              <span class="font-weight-bold">'.$db_don->taikhoan->ho_ten.' đã đặt hàng thành công !</span>
            </div>
          </a>';
        }
    }

    public function so_don_hang_moi(){
        $count_hoa_don_moi = DonHang_Model::where('tinh_trang', 0)->count();
        echo $count_hoa_don_moi;

    }

    public function list_danh_gia_moi(){
        $list_danh_gias = DanhGiaSanPham_model::orderBy('ngay_tao', 'desc')->limit(5)->get();
        foreach($list_danh_gias as $list_danh_gia){
            echo '<a class="dropdown-item d-flex align-items-center" href="#">
            <div class="dropdown-list-image mr-3">
              <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
              <div class="status-indicator bg-success"></div>
            </div>
            <div class="font-weight-bold">
              <div class="text-truncate">'.$list_danh_gia->noi_dung .'</div>
              <div class="small text-gray-500">'.$list_danh_gia->taikhoan->ho_ten.' · '.date("d".' \T\h\á\n\g'." m". ' \N\ă\m'." Y", strtotime($list_danh_gia->ngay_tao)).'</div>
            </div>
          </a>';
        }
    }



}
