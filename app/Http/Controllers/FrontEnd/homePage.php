<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\SanPham_Model;
use App\Model\DanhMucSanPham_Model;
use App\Model\sliderShow;
use App\Model\GiftCode_Model;
use Illuminate\Support\Carbon;

class homePage extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $SPbyid1 = SanPham_Model::where('id_danh_muc', 1)->limit(8)->get();
        $SPbyid1random= SanPham_Model::where('id_danh_muc', 1)->limit(1)->inRandomOrder()->get();

        $SPbyid2 = SanPham_Model::where('id_danh_muc', 2)->limit(10)->get();
        $SPbyid2z= SanPham_Model::where('id_danh_muc', 2)->limit(1)->get();

        $SPbyid3 = SanPham_Model::where('id_danh_muc', 3)->limit(10)->get();
        $SPbyid3z= SanPham_Model::where('id_danh_muc', 3)->limit(1)->get();

        $SPbyid4 = SanPham_Model::where('id_danh_muc', 4)->limit(10)->get();
        $SPbyid4z= SanPham_Model::where('id_danh_muc', 4)->limit(1)->get();

        $slideshow = sliderShow::all();
        return view('frontEnd.pages.home',[
            'SPbyid1s'=>$SPbyid1,
            'SPbyid1randoms'=> $SPbyid1random,
            'SPbyid2s'=> $SPbyid2,
            'SPbyid2z'=> $SPbyid2z,

            'SPbyid3s'=> $SPbyid3,
            'SPbyid3z'=> $SPbyid3z,

            'SPbyid4s'=> $SPbyid4,
            'SPbyid4z'=> $SPbyid4z,
            'sliderShows'=> $slideshow
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

    public function gioiThieu(){
        return view('frontEnd.pages.gioi-thieu');
    }
    public function ChinhSachBaoHanh(){
        return view('frontEnd.pages.chinh-sach-bao-hanh');
    }
    public function LienHe(){
        return view('frontEnd.pages.lien-he');
    }
    public function HuongDanMuaHang(){
        return view('frontEnd.pages.huong-dan-mua-hang');
    }
    public function ChinhSachGiaoHang(){
        return view('frontEnd.pages.chinh-sach-giao-hang');
    }
    public function MaGiamGia(){
        $dbGiftCode = GiftCode_Model::where('ngay_ket_thuc', '>=', Carbon::now('Asia/Ho_Chi_Minh'))->get();
        return view('frontEnd.pages.ma-giam-gia', ['dbGiftCodes'=> $dbGiftCode]);
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
}
