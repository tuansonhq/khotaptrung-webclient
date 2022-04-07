<?php

namespace App\Providers;

use App\Library\DirectAPI;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Session;


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
        Paginator::useBootstrap();



        //
//        nam header

//
//        View::share('data_menu_category', $data_menu_category);
//        View::composer('*', function ($view) {
//
//
//        });
//        View::share('NAME_VIEW_SHARE', 'Trương thanh hùng');
    }
}
