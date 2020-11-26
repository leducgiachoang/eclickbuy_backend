<?php

namespace App\Providers;
use App\Model\DanhMucSanPham_Model;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Model\sliderShow;

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
        $sliderShows  = sliderShow::all();
        
        view::share([
            'danhmucs'=> $danhmucs,
            'sliderShows'=> $sliderShows
        ]);


    }
}
