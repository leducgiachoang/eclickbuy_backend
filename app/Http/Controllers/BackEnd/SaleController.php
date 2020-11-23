<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class SaleController extends Controller
{
    public function add_sale_product()
    {
        return view('backEnd.khuyen_mai.add_sale_product');
    }
    public function all_sale_product(){
        $all_sale_product = DB::table('khuyen_mai')->orderBy('id', 'desc')->get();
        $manager_sale = view('backEnd.khuyen_mai.all_sale_product')->with('all_sale_product', $all_sale_product);
        return view('template.backend')->with('backEnd.khuyen_mai.all_sale_product', $manager_sale);
    }
    public function save_sale_product(Request $request)
    {
        $data = array();
        $this->validate(
            $request,
            [
                'noi_dung_khuyen_mai' => 'required|min:5|max:255',
                'gia_tri' => 'required',

            ],
            [
                'noi_dung_khuyen_mai.required' => 'Bạn chưa nhập nội dung khuyến mãi',
                'noi_dung_khuyen_mai.min' => 'Nội dung khuyến mãi quá ngắn',
                'noi_dung_khuyen_mai.max' => 'Nội dung khuyến mãi quá dài',
                'gia_tri.required' => 'Bạn chưa nhập giá trị cho khuyến mãi',
            ]
        );
        $data['noi_dung_khuyen_mai'] = $request->noi_dung_khuyen_mai;
        $data['gia_tri'] = $request->gia_tri;
        DB::table('khuyen_mai')->insert($data);
        Session::put('message', 'Thêm khuyến mãi thành công');
        return redirect()->back();
    }
    public function delete_sale_product($id)
    {
        DB::table('khuyen_mai')->where('id', $id)->delete();
        Session::put('message', 'Xóa khuyến mãi thành công');
        return redirect()->back();
    }
    public function edit_sale_product($id)
    {
        $edit_sale_product = DB::table('khuyen_mai')->where('id', $id)->get();
        $manager_sale = view('backEnd.khuyen_mai.edit_sale_product')->with('edit_sale_product', $edit_sale_product);
        return view('template.backend')->with('backEnd.khuyen_mai.edit_sale_product', $manager_sale);
    }
    public function update_sale_product(Request $request,$id)
    {
        $data = array();
        $this->validate(
            $request,
            [
                'noi_dung_khuyen_mai' => 'required|min:5|max:255',
                'gia_tri' => 'required',

            ],
            [
                'noi_dung_khuyen_mai.required' => 'Bạn chưa nhập nội dung khuyến mãi',
                'noi_dung_khuyen_mai.min' => 'Nội dung khuyến mãi quá ngắn',
                'noi_dung_khuyen_mai.max' => 'Nội dung khuyến mãi quá dài',
                'gia_tri.required' => 'Bạn chưa nhập giá trị cho khuyến mãi',
            ]
        );
        $data['noi_dung_khuyen_mai'] = $request->noi_dung_khuyen_mai;
        $data['gia_tri'] = $request->gia_tri;

        DB::table('khuyen_mai')->where('id', $id)->update($data);
        Session::put('message', 'Lưu khuyến mãi thành công');
        return redirect()->back();
    }
}
