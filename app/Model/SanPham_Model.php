<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SanPham_Model extends Model
{
    protected $table = 'san_pham';
    public $timestamps = false;

    public function chitiethoadon()
    {
        return $this->hasOne('App\Model\ChiTietHoaDon_Model_h', 'id_san_pham', 'id');
    }


    public function khuyenmai()
    {
        return $this->belongsTo('App\Model\KhuyenMai_Model', 'id_khuyen_mai', 'id');
    }

    public function danhmuc(){
        return $this->belongsTo('App\Model\DanhMucSanPham_Model', 'id_danh_muc', 'id');
    }

    public function thuonghieu()
    {
        return $this->belongsTo('App\Model\ThuongHieuSanPham_Model', 'id_thuong_hieu', 'id');
    }



}
