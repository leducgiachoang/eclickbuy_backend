<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanPhamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('san_pham', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_san_pham')->unique();
            $table->integer('so_luong')->nullable()->default(0);
            $table->integer('gia_goc')->nullable()->default(0);
            $table->integer('gia_sale')->nullable()->default(0);
            $table->text('mo_ta')->nullable();
            $table->string('hinh_anh')->nullable();
            $table->date('ngay_dang')->nullable();
            $table->integer('id_danh_muc')->unsigned()->nullable()->default(1);
            $table->foreign('id_danh_muc')->references('id')->on('danh_muc_san_pham')->onDelete('cascade');
            $table->integer('id_thuong_hieu')->unsigned()->nullable()->default(1);
            $table->foreign('id_thuong_hieu')->references('id')->on('thuong_hieu')->onDelete('cascade');
            $table->text('thong_so_ky_thuat')->nullable();
            $table->integer('id_khuyen_mai')->unsigned()->nullable()->default(1);
            $table->foreign('id_khuyen_mai')->references('id')->on('khuyen_mai')->onDelete('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('san_pham');
    }
}
