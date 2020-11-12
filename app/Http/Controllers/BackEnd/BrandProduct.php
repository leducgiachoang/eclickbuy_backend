<?php

namespace App\Http\Controllers\BackEnd;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();
class BrandProduct extends Controller
{
    public function add_brand_product()
    {
        return view('backEnd.thuong_hieu_san_pham.add_brand_product');
    }
    public function all_brand_product()
    {
        $all_brand_product = DB::table('thuong_hieu')->orderBy('id', 'desc')->get();
        $manager_brand = view('backEnd.thuong_hieu_san_pham.all_brand_product')->with('all_brand_product', $all_brand_product);
        return view('template.backend')->with('bachEnd.thuong_hieu-san_pham.all_brand_product', $manager_brand);
    }
    public function save_brand_product(Request $request)
    {
        $data = array();
        $this->validate(
            $request,
            [   //name ở form                            table       name colum table
                'brand_product_name' => 'required|unique:thuong_hieu,ten_thuong_hieu|min:3|max:100',

            ],
            [
                'brand_product_name.required' => 'Bạn chưa nhập tên danh mục',
                'brand_product_name.unique' => 'Tên danh mục đã tồn tại',
                'brand_product_name.min' => 'Tên danh mục ít nhất 3 kí tự',
                'brand_product_name.max' => 'Tên danh mục tối đa 100 kí tự'
            ]
        );
        $data['ten_thuong_hieu'] = $request->brand_product_name;
        $data['mo_ta'] = $request->brand_product_desc;
        $data['status'] = $request->brand_product_status;
        $get_image = $request->file('hinh_anh');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalExtension();
            $name_image = current(explode('.', $get_name_image));

            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('images/brand_product/', $new_image);
            $data['hinh_anh'] = $new_image;
            DB::table('thuong_hieu')->insert($data);
            Session::put('message', 'Thêm thương hiệu thành công');
            return redirect()->back();
        }
        $data['hinh_anh'] = '';
         // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        DB::table('thuong_hieu')->insert($data);
        Session::put('message', 'Thêm thương hiệu sản phẩm thành công');
        return redirect()->back();
    }
    public function delete_brand_product($id)
    {
        DB::table('thuong_hieu')->where('id', $id)->delete();
        Session::put('message', 'Xóa sản phẩm thành công');
        return redirect()->back();
    }
    public function unactive_brand_product($id)
    {
        DB::table('thuong_hieu')->where('id', $id)->update(['status' => 1]);
        Session::put('message', 'Ẩn thương hiệu sản phẩm thành công');
        return redirect()->back();
    }
    public function active_brand_product($id)
    {
        DB::table('thuong_hieu')->where('id', $id)->update(['status' => 0]);
        Session::put('message', 'Hiện thương hiệu sản phẩm thành công');
        return redirect()->back();
    }
    public function edit_brand_product($id)
    {
        $edit_brand_product = DB::table('thuong_hieu')->where('id', $id)->get();
        $manager_category = view('backEnd.thuong_hieu_san_pham.edit_brand_product')->with('edit_brand_product', $edit_brand_product);
        return view('template.backend')->with('backEnd.thuong_hieu_san_pham.edit_brand_product', $manager_category);
    }
    public function update_brand_product(Request $request,$id)
    {
        $data = array();
        $data['ten_thuong_hieu'] = $request->brand_product_name;
        $data['mo_ta'] = $request->brand_product_desc;
        $data['status'] = $request->brand_product_status;
        $get_image = $request->file('hinh_anh');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalExtension();
            $name_image = current(explode('.', $get_name_image));

            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('images/brand_product/', $new_image);
            $data['hinh_anh'] = $new_image;
            DB::table('thuong_hieu')->where('id', $id)->update($data);
            Session::put('message', 'Lưu thương hiệu thành công');
            return redirect()->back();
        }
        DB::table('thuong_hieu')->where('id', $id)->update($data);
        Session::put('message', 'Lưu thương hiệu sản phẩm thành công');
        return redirect()->back();
    }

}
