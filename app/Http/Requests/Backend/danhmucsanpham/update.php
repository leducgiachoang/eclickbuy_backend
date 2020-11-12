<?php

namespace App\Http\Requests\Backend\danhmucsanpham;

use Illuminate\Foundation\Http\FormRequest;

class update extends FormRequest
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
            'hinh_anhx' => 'image'
        ];
    }

    public function messages(){
        return[
            'hinh_anhx.image' => 'Vui lòng chọn file hình ảnh',
        ];
    }
}
