<?php

namespace App\Http\Requests\Backend\sanpham;

use Illuminate\Foundation\Http\FormRequest;

class them extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'ten_san_pham'=> 'required|unique:App\Model\SanPham_Model,ten_san_pham',
            'so_luong'=> 'required|integer|min:1',
            'gia_goc'=> 'required|integer|min: 1000',
            'hinh_anh'=> 'required|image',
            'id_danh_muc'=> 'required',
            'id_thuong_hieu'=> 'required',
            'id_khuyen_mai'=> 'required',
            'mo_ta'=> 'required|min: 10',
            'thong_so_ky_thuat'=> 'required|min:10'
        ];
    }

    public function messages(){
        return[
            'ten_san_pham.required'=>'Vui lòng không được để trống !',
            'ten_san_pham.unique' => 'Tên sản phẩm đã tồn tài',
            'so_luong.required'=>'Vui lòng không được để trống !',
            'so_luong.integer'=> 'Kiểu dữ liệu phải là số',
            'integer.min'=> 'Vui lòng nhập số lớn hơn 0',
            'gia_goc.required'=>'Vui lòng không được để trống !',
            'gia_goc.integer'=> 'Kiểu dữ liệu phải là số',
            'gia_goc.min'=> 'Vui lòng nhập giá trên 1000đ',
            'hinh_anh.required'=>'Vui lòng không được để trống !',
            'image.image'=> 'Vui lòng chọn định dạng ảnh',
            'id_danh_muc.required'=>'Vui lòng không được để trống !',
            'id_thuong_hieu.required'=>'Vui lòng không được để trống !',
            'id_khuyen_mai.required'=>'Vui lòng không được để trống !',
            'mo_ta.required'=>'Vui lòng không được để trống !',
            'mo_ta.min'=> 'Vui lòng nhập tối thiểu 10 ký tự',
            'thong_so_ky_thuat.required'=>'Vui lòng không được để trống !',
            'thong_so_ky_thuat.min'=> 'Vui lòng nhập tối thiểu 10 ký tự',
        ];
    }
}
