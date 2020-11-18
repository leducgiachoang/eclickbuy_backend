<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThuongHieuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thuong_hieu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_thuong_hieu')->unique();
            $table->string('hinh_anh')->nullable();
            $table->text('mo_ta')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thuong_hieu');
    }
}
