<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DanhGiaSanPham_model extends Model
{
    protected $table = 'danh_gia';
    public $timestamps = false;

    public function sanpham()
    {
        return $this->belongsTo('App\Model\SanPham_Model', 'id_san_pham', 'id');
    }

    public function taikhoan()
    {
        return $this->belongsTo('App\Model\NguoiDungModel', 'id_tai_khoan', 'id');
    }
}
