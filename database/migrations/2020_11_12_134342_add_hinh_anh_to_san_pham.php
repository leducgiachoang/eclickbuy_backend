<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddHinhAnhToSanPham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('san_pham', function (Blueprint $table) {
            $table->string('hinh_anh1')->nullable();
            $table->string('hinh_anh2')->nullable();
            $table->string('hinh_anh3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('san_pham', function (Blueprint $table) {
            $table->dropColumn('hinh_anh1');
            $table->dropColumn('hinh_anh2');
            $table->dropColumn('hinh_anh3');
        });
    }
}
