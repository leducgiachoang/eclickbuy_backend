<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\DanhMucSanPham_Model;
use App\Http\Requests\Backend\danhmucsanpham\update;
use App\Http\Requests\Backend\danhmucsanpham\themmoi;
class DanhMucSanPham_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $danhsach = DanhMucSanPham_Model::paginate(1);
        return view('backEnd.danh_muc_san_pham.new',['danhsach'=>$danhsach]);
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
    public function store(themmoi $request)
    {
        if($request->hinh_anh != ''){
            $hinhanh = $request->file('hinh_anh')->getClientOriginalName();
            $request->file('hinh_anh')->move('images/category_product/',$hinhanh);
        }else{
            $hinhanh = 'category.png';
        }


        $store = new DanhMucSanPham_Model;
        $store->ten_danh_muc = $request->ten_danh_muc;
        $store->hinh_anh = $hinhanh;
        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $danhsach = DanhMucSanPham_Model::all();

        return view('backEnd.danh_muc_san_pham.list', ['danhsach'=>$danhsach]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $danhsach = DanhMucSanPham_Model::all();
        $show = DanhMucSanPham_Model::where('id',$id)->get();
        return view('backEnd.danh_muc_san_pham.edit', ['dbedit'=> $show, 'danhsach'=>$danhsach]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(update $request, $id)
    {
        $db = DanhMucSanPham_Model::find($id);

        if($request->ten_danh_muc == ''){
            $ten_danh_muc = $db->ten_danh_muc;
        }else{
            $ten_danh_muc = $request->ten_danh_muc;
        }

        $hinhanh = $request->hinh_anh;
        if (($request->file('hinh_anhx')) != '') {
            $hinhanh = $request->file('hinh_anhx')->getClientOriginalName();
            $request->file('hinh_anhx')->move('images/category_product/', $hinhanh);
            }

        DanhMucSanPham_Model::where('id', $id)->update([
            'ten_danh_muc'=>$ten_danh_muc,
            'hinh_anh'=> $hinhanh
        ]
        );

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
        DanhMucSanPham_Model::where('id',$id)->delete();
        return redirect()->back();
    }
}
