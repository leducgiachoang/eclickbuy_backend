<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD
class ThemDateThuongHieuSanPham extends Migration
=======
<<<<<<< HEAD:vendor.hoang/laravel/framework/src/Illuminate/Database/Migrations/stubs/migration.create.stub
class {{ class }} extends Migration
=======
class ThemDateThuongHieuSanPham extends Migration
>>>>>>> 56c39d6c015f7327c8e1258df0facd160b5e2bd5:database/migrations/2020_11_02_063822_them_date_thuong_hieu_san_pham.php
>>>>>>> 56c39d6c015f7327c8e1258df0facd160b5e2bd5
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD
        Schema::table('thuong_hieu', function (Blueprint $table) {
=======
<<<<<<< HEAD:vendor.hoang/laravel/framework/src/Illuminate/Database/Migrations/stubs/migration.create.stub
        Schema::create('{{ table }}', function (Blueprint $table) {
            $table->id();
=======
        Schema::table('thuong_hieu', function (Blueprint $table) {
>>>>>>> 56c39d6c015f7327c8e1258df0facd160b5e2bd5:database/migrations/2020_11_02_063822_them_date_thuong_hieu_san_pham.php
>>>>>>> 56c39d6c015f7327c8e1258df0facd160b5e2bd5
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
<<<<<<< HEAD
        Schema::table('thuong_hieu', function (Blueprint $table) {
            $table->dropColumn('thuong_hieu');
        });
=======
<<<<<<< HEAD:vendor.hoang/laravel/framework/src/Illuminate/Database/Migrations/stubs/migration.create.stub
        Schema::dropIfExists('{{ table }}');
=======
        Schema::table('thuong_hieu', function (Blueprint $table) {
            $table->dropColumn('thuong_hieu');
        });
>>>>>>> 56c39d6c015f7327c8e1258df0facd160b5e2bd5:database/migrations/2020_11_02_063822_them_date_thuong_hieu_san_pham.php
>>>>>>> 56c39d6c015f7327c8e1258df0facd160b5e2bd5
    }
}
