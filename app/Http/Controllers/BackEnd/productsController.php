<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\DanhMucSanPham_Model;
use App\Model\ThuongHieuSanPham_Model;
use App\Model\KhuyenMai_Model;
use App\Http\Requests\Backend\sanpham\them;
use App\Model\SanPham_Model;
use Carbon\Carbon;




class productsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $danhmucs = DanhMucSanPham_Model::all();
        $thuonghieus = ThuongHieuSanPham_Model::all();
        $khuyenmais = KhuyenMai_Model::all();
        return view('backEnd.san-pham.new', [
            'danhmucs' => $danhmucs,
            'thuonghieus' => $thuonghieus,
            'khuyenmais' => $khuyenmais
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $db_sps = SanPham_Model::paginate(15);
        return view('backEnd.san-pham.list', ['db_sps'=>$db_sps]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(them $request)
    {

        if ($request->hasFile('hinh_anh')) {
            $linkHinhanh = $request->file('hinh_anh')->getClientOriginalExtension();
            $hinhanh = time() . rand(999, 9999) . '.' . $linkHinhanh;
            $request->file('hinh_anh')->move('images/producs/', $hinhanh);
        }


        if ($request->hasFile('hinh_anh1')) {
            $linkhinh_anh1 = $request->file('hinh_anh1')->getClientOriginalExtension();
            $hinh_anh1 = time() . rand(999, 9999) . '.' . $linkhinh_anh1;
            $request->file('hinh_anh1')->move('images/producs/', $hinh_anh1);
        }


        if ($request->hasFile('hinh_anh2')) {
            $linkhinh_anh2 = $request->file('hinh_anh2')->getClientOriginalExtension();
            $hinh_anh2 = time() . rand(999, 9999) . '.' . $linkhinh_anh2;
            $request->file('hinh_anh2')->move('images/producs/', $hinh_anh2);
        }


        if ($request->hasFile('hinh_anh3')) {
            $linkhinh_anh3 = $request->file('hinh_anh3')->getClientOriginalExtension();
            $hinh_anh3 = time() . rand(999, 9999) . '.' . $linkhinh_anh3;
            $request->file('hinh_anh3')->move('images/producs/', $hinh_anh3);
        }
        $saveProduct = new SanPham_Model;
        $saveProduct->ten_san_pham = $request->ten_san_pham;
        $saveProduct->so_luong = $request->so_luong;
        $saveProduct->gia_goc = $request->gia_goc;
        $saveProduct->gia_sale = $request->gia_sale;
        $saveProduct->mo_ta = $request->mo_ta;
        $saveProduct->hinh_anh = $hinhanh;
        $saveProduct->ngay_dang = Carbon::now();
        $saveProduct->id_danh_muc = $request->id_danh_muc;
        $saveProduct->id_thuong_hieu = $request->id_thuong_hieu;
        $saveProduct->thong_so_ky_thuat = $request->thong_so_ky_thuat;
        $saveProduct->id_khuyen_mai = $request->id_khuyen_mai;
        $saveProduct->hinh_anh1 = $hinh_anh1;
        $saveProduct->hinh_anh2 = $hinh_anh2;
        $saveProduct->hinh_anh3 = $hinh_anh3;
        $saveProduct->save();

        return redirect()->back()->with('success', 'Thêm sản phẩm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        SanPham_Model::where('id', $id)->delete();
        return redirect()->back()->with('success','Xóa sản phẩm thành công');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $danhmucs = DanhMucSanPham_Model::all();
        $thuonghieus = ThuongHieuSanPham_Model::all();
        $khuyenmais = KhuyenMai_Model::all();
        $sanpham_byId = SanPham_Model::where('id', $id)->get();
        return view('backEnd.san-pham.edit',[
            'danhmucs' => $danhmucs,
            'thuonghieus' => $thuonghieus,
            'khuyenmais' => $khuyenmais,
            'sanpham_byIds' => $sanpham_byId
        ]);
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
        $hinhanh = $request->hinh_anh;
        if ($request->hasFile('hinh_anhx')) {
            $linkHinhanh = $request->file('hinh_anhx')->getClientOriginalExtension();
            $hinhanh = time() . rand(999, 9999) . '.' . $linkHinhanh;
            $request->file('hinh_anhx')->move('images/producs/', $hinhanh);
        }
        $hinh_anh1 = $request->hinh_anh1;
        if ($request->hasFile('hinh_anh1x')) {
            $linkhinh_anh1 = $request->file('hinh_anh1x')->getClientOriginalExtension();
            $hinh_anh1 = time() . rand(999, 9999) . '.' . $linkhinh_anh1;
            $request->file('hinh_anh1x')->move('images/producs/', $hinh_anh1);
        }

        $hinh_anh2 = $request->hinh_anh2;
        if ($request->hasFile('hinh_anh2x')) {
            $linkhinh_anh2 = $request->file('hinh_anh2x')->getClientOriginalExtension();
            $hinh_anh2 = time() . rand(999, 9999) . '.' . $linkhinh_anh2;
            $request->file('hinh_anh2x')->move('images/producs/', $hinh_anh2);
        }

        $hinh_anh3 = $request->hinh_anh3;
        if ($request->hasFile('hinh_anh3x')) {
            $linkhinh_anh3 = $request->file('hinh_anh3x')->getClientOriginalExtension();
            $hinh_anh3 = time() . rand(999, 9999) . '.' . $linkhinh_anh3;
            $request->file('hinh_anh3x')->move('images/producs/', $hinh_anh3);
        }

        SanPham_Model::where('id', $id)->update([
            'ten_san_pham'=> $request->ten_san_pham,
            'so_luong'=> $request->so_luong,
            'gia_goc'=> $request->gia_goc,
            'gia_sale'=> $request->gia_sale,
            'mo_ta' => $request->mo_ta,
            'hinh_anh' => $hinhanh,
            'id_danh_muc' => $request->id_danh_muc,
            'id_thuong_hieu' => $request->id_thuong_hieu,
            'thong_so_ky_thuat' => $request->thong_so_ky_thuat,
            'id_khuyen_mai' => $request->id_khuyen_mai,
            'hinh_anh1' => $hinh_anh1,
            'hinh_anh2' => $hinh_anh2,
            'hinh_anh3' => $hinh_anh3,
        ]);

        return redirect()->back()->with('success', 'cập nhập sản phẩm thành công');
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
