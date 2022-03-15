<?php

namespace App\Providers;

use App\Library\DirectAPI;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;


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
        //
//        nam header

//
//        View::share('data_menu_category', $data_menu_category);
//        View::composer('*', function ($view) {
//            $url_menu_category = '/menu-category';
//            $method_menu_category  = "POST";
//            $val_menu_category  = array();
//            $val_menu_category ['domain'] = "youtube.com";
//            $val_menu_category ['secret_key'] = config('api.secret_key');
//            $result_Api_menu_category  = DirectAPI::_makeRequest($url_menu_category ,$val_menu_category ,$method_menu_category );
//            $result_menu_category = $result_Api_menu_category->data;
//            $data_menu_category  = $result_menu_category->data;
//            $url_menu_profile = '/menu-profile';
//            $result_Api_menu_profile = DirectAPI::_makeRequest($url_menu_profile ,$val_menu_category ,$method_menu_category );
//            $result_menu_profile= $result_Api_menu_profile->data;
//            $data_menu_profile = $result_menu_profile->data;
//
//            $url_menu_transaction = '/menu-transaction';
//            $result_Api_menu_transaction= DirectAPI::_makeRequest($url_menu_transaction ,$val_menu_category ,$method_menu_category );
//            $result_menu_transaction= $result_Api_menu_transaction->data;
//            $data_menu_transaction = $result_menu_transaction->data;
//
//            $view->with('data_menu_category', $data_menu_category)->with('data_menu_profile',$data_menu_profile)->with('data_menu_transaction',$data_menu_transaction);
//
//        });
//        View::share('NAME_VIEW_SHARE', 'Trương thanh hùng');
    }
}
