<?php

namespace App\Providers;
use App\Model\DanhMucSanPham_Model;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $danhmucs = DanhMucSanPham_Model::all();
        view::share('danhmucs', $danhmucs);


    }
}
