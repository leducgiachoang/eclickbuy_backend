<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class Danhmucsanphan_seeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('danh_muc_san_pham')->insert([
            'id' => Str::random(10),
           'ten_danh_muc' => 'Điện Thoại',
           'hinh_anh' => 'dienthoai.jpeg'
           ]);
    }
}
