<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\SanPham_Model;
use App\Model\DanhMucSanPham_Model;
use Gloudemans\Shoppingcart\Facades\Cart;

class GioHangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function add_cart($id){
         $product = SanPham_Model::select()->find($id);
         $gia_goc = $product->gia_goc;
         if($product->gia_sale != ''){
             $gia_goc = $product->gia_sale;
         }
         if($product->id_khuyen_mai == 1){
            $gia_chinh_thuc = $gia_goc;
         }else{
             $khuyen_mai = $gia_goc * ($product->khuyenmai->gia_tri) / 100;
            $gia_chinh_thuc = $gia_goc - $khuyen_mai;
         }


        Cart::add([
                'id' => $id,
                'name' => $product->ten_san_pham,
                'qty' => 1,
                'price' => $gia_chinh_thuc,
                'weight' => 0,
                'options' => ['avatar' => $product->hinh_anh]
            ]);
         $itemCart = Cart::count();
         echo $itemCart;
     }
    public function index()
    {
        $danhmucs = DanhMucSanPham_Model::all();
        return view('frontEnd.gio-hang.gio-hang', ['danhmucs'=> $danhmucs]);
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
    public function update(Request $request)
    {
        $rowId = $request->variantId;
        $so_luong = $request->qtyProduct;
        Cart::update($rowId, $so_luong);
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
        Cart::remove($id);
        return redirect()->back();
    }
}
