<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class NguoiDungModel extends Model
{
    protected $table = 'tai_khoan';
    public $timestamps = false;


    public function product()
    {
        return $this->belongsToMany('App\Model\SanPham_Model', 'danh_gia', 'id_tai_khoan ', 'id_san_pham ')->withPivot('id','noi_dung','so_sao','ngay_tao');
    }


}
