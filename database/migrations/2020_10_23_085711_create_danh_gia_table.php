<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDanhGiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('danh_gia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_san_pham')->unsigned();
            $table->foreign('id_san_pham')->references('id')->on('san_pham')->onDelete('cascade');
            $table->integer('id_tai_khoan')->unsigned();
            $table->foreign('id_tai_khoan')->references('id')->on('tai_khoan')->onDelete('cascade');
            $table->integer('so_sao')->unsigned();
            $table->text('noi_dung')->nullable();
            $table->date('ngay_tao');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('danh_gia');
    }
}
