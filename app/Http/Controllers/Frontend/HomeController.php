<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Library\AuthCustom;
use App\Library\DirectAPI;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        return view('frontend.pages.index');
    }

    public function profile(){

        $url_menu_profile = '/menu-profile';
        $method_menu_category  = "POST";
        $val_menu_profile = array();
        $val_menu_profile ['domain'] = "youtube.com";
        $val_menu_category ['secret_key'] = config('api.secret_key');
        $result_Api_menu_profile = DirectAPI::_makeRequest($url_menu_profile ,$val_menu_category ,$method_menu_category );
        $result_menu_profile= $result_Api_menu_profile->data;
        $data_menu_profile = $result_menu_profile->data;

        return view('frontend.pages.index')
            ->with('$data_menu_profile',$data_menu_profile);
    }


}
