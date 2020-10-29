<?php

namespace App\Http\Requests\Backend\danhmucsanpham;

use Illuminate\Foundation\Http\FormRequest;

class themmoi extends FormRequest
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
            'ten_danh_muc' => 'required|unique:App\Model\DanhMucSanPham_Model,ten_danh_muc'
        ];
    }

    public function messages(){
        return[
            'ten_danh_muc.required' => 'Vui lòng nhập tên danh mục',
            'ten_danh_muc.unique' => 'Tên Danh mục đã tồn tại',
        ];
    }
}
