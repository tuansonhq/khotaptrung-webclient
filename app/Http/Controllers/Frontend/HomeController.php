<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Library\DirectAPI;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        //    if(session()->has('auth_token')){
        //        return view('frontend.pages.index');
        //        return "Đăng nhập thành công";
        //    }else{
        $url = '/serviceson';
        $method = "GET";
        $val = array();
        //$data['token'] = session()->get('auth_token');
        $val['domain'] = "youtube.com";
        $val['secret_key'] = config('api.secret_key');
        $result_Api = DirectAPI::_makeRequest($url,$val,$method);
        $result = $result_Api->data;
        $data = $result->data;

        //Slider
        $url_slider = '/get-slider-banner';
        $method_slider = "GET";
        $val_slider = array();
        $val_slider['domain'] = "youtube.com";
        $val_slider['secret_key'] = config('api.secret_key');
        $result_Api_slider = DirectAPI::_makeRequest($url_slider,$val_slider,$method_slider);
        $result_slider = $result_Api_slider->data;
        $data_slider = $result_slider->data;

//        nam header
        $url_menu_category = '/menu-category';
        $method_menu_category  = "POST";
        $val_menu_category  = array();
        $val_menu_category ['domain'] = "youtube.com";
        $val_menu_category ['secret_key'] = config('api.secret_key');
        $result_Api_menu_category  = DirectAPI::_makeRequest($url_menu_category ,$val_menu_category ,$method_menu_category );
        $result_menu_category = $result_Api_menu_category->data;
        $data_menu_category  = $result_menu_category->data;


        return view('frontend.pages.index')
            ->with('data_slider',$data_slider)
            ->with('data',$data)
            ->with('data_menu_category',$data_menu_category);
    }
}
