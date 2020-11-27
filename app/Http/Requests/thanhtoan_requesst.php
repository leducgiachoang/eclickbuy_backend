<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use phpDocumentor\Reflection\PseudoTypes\True_;

class thanhtoan_requesst extends FormRequest
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
            'email'  => 'required|email',
            'ho_ten' => 'required',
            'so_dien_thoai' => 'required',
            'dia_chi_noi_nhan' => 'required|min: 20',
        ];
    }

    public function messages(){
        return[
            'email.required'=> 'Vui lòng điền email',
            'email.email'=> 'Vui lòng điền đúng định dạng email',
            'ho_ten.required'=> 'Vui lòng điền họ tên của người nhận hàng!',
            'so_dien_thoai.required'=> 'Vui lòng điền số điện thoại',
            'dia_chi_noi_nhan.required'=> 'Vui lòng điện địa chỉ nhận hàng',
            'dia_chi_noi_nhan.min'=> 'Bạn vui lòng điền đầy đủ tất cả chi tiết địa chỉ nhận hàng'
        ];
    }
}
