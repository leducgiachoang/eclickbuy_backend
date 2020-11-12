<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DonHang_Model extends Model
{
    protected $table = 'hoa_don';
    public $timestamps = false;

    public function taikhoan()
    {
        return $this->belongsTo('App\Model\NguoiDungModel', 'id_tai_khoan', 'id');
    }

    public function giftcode()
    {
        return $this->belongsTo('App\Model\GiftCode_Model', 'id_giftcode', 'id');
    }

    public function sanpham()
    {
        return $this->belongsToMany('App\Model\SanPham_Model', 'chi_tiet_hoa_don', 'id_hoa_don', 'id_san_pham')->withPivot('so_luong', 'don_gia');;
    }
}
