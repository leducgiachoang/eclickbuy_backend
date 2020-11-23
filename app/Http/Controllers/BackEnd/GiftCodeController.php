<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use Session;
session_start();

class giftcodeController extends Controller
{
    public function add_giftcode_product()
    {
        return view('backEnd.gift_code.add_giftcode_product');
    }
    public function all_giftcode_product(){
        $all_giftcode_product = DB::table('giftcode')->orderBy('id', 'desc')->get();
        $manager_giftcode = view('backEnd.gift_code.all_giftcode_product')->with('all_giftcode_product', $all_giftcode_product);
        return view('template.backend')->with('backEnd.gift_code.all_giftcode_product', $manager_giftcode);
    }
    public function save_giftcode_product(Request $request)
    {
        $data = array();
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        $this->validate(
            $request,
            [
                'code' => 'required|min:6|max:255',
                'gia_tri_gift' => 'required',
                'ngay_bat_dau' => 'required',
                'ngay_ket_thuc' => 'required',

            ],
            [
                'code.required' => 'Bạn chưa Mã Code',
                'code.min' => 'Mã Code gồm 6 kí tự',
                'code.max' => 'Mã Code nhỏ hơn 255 kí tự',
                'gia_tri_gift.required' => 'Bạn chưa nhập giá trị cho khuyến mãi',
                'ngay_bat_dau.required' => 'Bạn chưa nhập ngày bắt đầu',
                'ngay_ket_thuc.required' => 'Bạn chưa nhập ngày kết thúc',
            ]
        );
        $data['ngay_bat_dau'] = $request->ngay_bat_dau;
        $ngay_bat_dau =  $data['ngay_bat_dau'];
        $data['ngay_ket_thuc'] = $request->ngay_ket_thuc;
        $ngay_ket_thuc =  $data['ngay_ket_thuc'];
        if($ngay_bat_dau < $dt && $ngay_ket_thuc <= $dt) {
            Session::put('message', 'Vui lòng nhập lại ngày bắt đầu và ngày kết thúc cho hợp lí nghĩa là ngày bắt đầu phải lớn hơn hoặc bằng với ngày hiện
            tại và ngày kết thúc phải lớn hơn ngày hiện tại');
            return redirect()->back();
        }else{
            $data['code'] = $request->code;
            $data['gia_tri'] = $request->gia_tri_gift;
            $data['ngay_bat_dau'] = $request->ngay_bat_dau;
            $data['ngay_ket_thuc'] = $request->ngay_ket_thuc;
            DB::table('giftcode')->insert($data);
            Session::put('message', 'Thêm GiftCode thành công');
            return redirect()->back();
        }

    }
    public function delete_giftcode_product($id)
    {
        DB::table('giftcode')->where('id', $id)->delete();
        Session::put('message', 'Xóa khuyến mãi thành công');
        return redirect()->back();
    }
    public function edit_giftcode_product($id)
    {
        $edit_giftcode_product = DB::table('giftcode')->where('id', $id)->get();
        $manager_giftcode = view('backEnd.gift_code.edit_giftcode_product')->with('edit_giftcode_product', $edit_giftcode_product);
        return view('template.backend')->with('backEnd.gift_code.edit_giftcode_product', $manager_giftcode);
    }
    public function update_giftcode_product(Request $request,$id)
    {
        $data = array();
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        $data['ngay_bat_dau'] = $request->ngay_bat_dau;
        $ngay_bat_dau =  $data['ngay_bat_dau'];
        $data['ngay_ket_thuc'] = $request->ngay_ket_thuc;
        $ngay_ket_thuc =  $data['ngay_ket_thuc'];
        if($ngay_bat_dau < $dt && $ngay_ket_thuc <= $dt) {
            Session::put('message2', 'Vui lòng nhập lại ngày bắt đầu và ngày kết thúc cho hợp lí nghĩa là ngày bắt đầu phải lớn hơn hoặc bằng với ngày hiện
            tại và ngày kết thúc phải lớn hơn ngày hiện tại');
            return redirect()->back();
        }else{
            $data['code'] = $request->code;
            $data['gia_tri'] = $request->gia_tri;
            $data['ngay_bat_dau'] = $request->ngay_bat_dau;
            $data['ngay_ket_thuc'] = $request->ngay_ket_thuc;
            DB::table('giftcode')->where('id', $id)->update($data);
            Session::put('message2', 'Cập nhật GiftCode thành công');
            return redirect()->back();
        }
    }
}
