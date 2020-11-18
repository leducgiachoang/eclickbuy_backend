<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaiKhoanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tai_khoan', function (Blueprint $table) {
           $table->increments('id');
           $table->string('ho_ten');
           $table->string('so_dien_thoai')->unique();
           $table->string('email')->unique();
           $table->string('mat_khau');
           $table->integer('vai_tro')->default(0);
           $table->string('anh_dai_dien')->nullable();
           $table->date('ngay_sinh')->nullable();
           $table->date('ngay_tao')->nullable();
           $table->string('code')->nullable();
           $table->string('remenber_token')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tai_khoan');
    }
}
