<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\DonHang_Model;
use App\Model\NguoiDungModel;

class DonHangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $db_don = DonHang_Model::orderBy('id', 'desc')->paginate(7);
        return view('backEnd.don_hang.list', ['db_dons'=> $db_don]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
        $db_don = DonHang_Model::where('tinh_trang', $id)->paginate(7);
        return view('backEnd.don_hang.list', ['db_dons'=>$db_don, 'id' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function ChiTietHoaDon($id){
         $db_chi_tiets = DonHang_Model::where('id', $id)->get();
         return view('backEnd.don_hang.chi_tiet',['id'=>$id, 'db_chi_tiets'=> $db_chi_tiets]);
     }

    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id , $tinhTrang)
    {
        $idx = base64_decode(base64_decode(base64_decode(base64_decode($id))));
        $tinhTrangx = base64_decode(base64_decode(base64_decode(base64_decode($tinhTrang))));
        DonHang_Model::where('id', $idx)->update([
            'tinh_trang' => $tinhTrangx
        ]);

        return redirect()->back();
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
