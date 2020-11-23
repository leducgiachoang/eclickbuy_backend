<?php

namespace App\Http\Controllers\BackEnd;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();
class SliderController extends Controller
{
    public function add_slider()
    {
        return view('backEnd.slider.add_slider');
    }
    public function list_slider_product()
    {
        $all_slider_product = DB::table('slider')->orderBy('id', 'desc')->get();
        $manager_slider = view('backEnd.slider.all_slider')->with('all_slider_product', $all_slider_product);
        return view('template.backend')->with('backEnd.slider.all_slider', $manager_slider);
    }
    public function add_slider_product(Request $request)
    {
        $data = array();
        $this->validate(
            $request,
            [
                'hinh_anh' => 'required',

            ],
            [
                'hinh_anh.required' => 'Bạn chưa chọn hình ảnh cho Slider',
            ]
        );
        $data['noi_dung_hinh_anh'] = $request->noi_dung_hinh_anh;
        $get_image = $request->file('hinh_anh');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalExtension();
            $name_image = current(explode('.', $get_name_image));

            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('images/slider/', $new_image);
            $data['hinh_anh'] = $new_image;
            DB::table('slider')->insert($data);
            Session::put('message', 'Thêm Slider thành công');
            return redirect()->back();
        }
         // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        DB::table('slider')->insert($data);
        Session::put('message', 'Thêm Slider thành công');
        return redirect()->back();
    }
    public function delete_slider_product($id)
    {
        DB::table('slider')->where('id', $id)->delete();
        Session::put('message', 'Xóa Slider thành công');
        return redirect()->back();
    }
    public function edit_slider_product($id)
    {
        $edit_slider = DB::table('slider')->where('id', $id)->get();
        $manager_category = view('backEnd.slider.edit_slider')->with('edit_slider', $edit_slider);
        return view('template.backend')->with('backEnd.slider.edit_slider', $manager_category);
    }
    public function update_slider_product(Request $request,$id)
    {
        $data = array();
        // $this->validate(
        //     $request,
        //     [   //name ở form                            table       name colum table
        //         'brand_product_name' => 'required|unique:slider,ten_slider|min:1|max:100',

        //     ],
        //     [
        //         'brand_product_name.required' => 'Bạn chưa nhập tên thương hiệu',
        //         'brand_product_name.unique' => 'Tên thương hiệu đã tồn tại',
        //         'brand_product_name.min' => 'Tên thương hiệu ít nhất 1 kí tự',
        //         'brand_product_name.max' => 'Tên thương hiệu tối đa 100 kí tự'
        //     ]
        // );
        $data['noi_dung_hinh_anh'] = $request->noi_dung_hinh_anh;
        $get_image = $request->file('hinh_anh');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalExtension();
            $name_image = current(explode('.', $get_name_image));

            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('images/slider/', $new_image);
            $data['hinh_anh'] = $new_image;
            DB::table('slider')->where('id', $id)->update($data);
            Session::put('message', 'Lưu Slider thành công');
            return redirect()->back();
        }
        DB::table('slider')->where('id', $id)->update($data);
        Session::put('message', 'Lưu Slider thành công');
        return redirect()->back();
    }

}
