<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGiftcodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giftcode', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->unique();
            $table->integer('gia_tri');
            $table->date('ngay_bat_dau');
            $table->date('ngay_ket_thuc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('giftcode');
    }
}
