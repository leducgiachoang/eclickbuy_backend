<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoaDonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoa_don', function (Blueprint $table) {
            $table->increments('id');
            $table->double('tong_tien');
            $table->string('dia_chi_noi_gui');
            $table->string('dia_chi_noi_nhan');
            $table->integer('id_tai_khoan')->unsigned();
            $table->foreign('id_tai_khoan')->references('id')->on('tai_khoan')->onDelete('cascade');
            $table->string('so_dien_thoai');
            $table->text('loi_nhan')->nullable();
            $table->integer('tinh_trang')->default(0);
            $table->integer('id_giftcode')->unsigned();
            $table->date('ngay_tao');
            $table->foreign('id_giftcode')->references('id')->on('giftcode')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoa_don');
    }
}
