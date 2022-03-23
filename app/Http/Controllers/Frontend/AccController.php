<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Library\DirectAPI;
use Illuminate\Http\Request;

class AccController extends Controller
{
    public function getShowCategory(Request $request,$slug_category,$slug){
        if ($slug_category == 'danh-muc'){
            $url = '/acc';
            $method = "GET";
            $val = array();
            $val['domain'] = "youtube.com";
            $val['secret_key'] = config('api.secret_key');
            $val['data'] = 'category_detail';
            $val['slug'] = $slug;

            $result_Api = DirectAPI::_makeRequest($url,$val,$method);
            if(isset($result_Api) && $result_Api->httpcode == 200){
                $data = $result_Api->data;

                return view('frontend.pages.account.getShowCategory')->with('data',$data);

            }else{
                return 'sai';
            }
        }else{

            $url = '/acc';
            $method = "GET";

            $val = array();
            $val['domain'] = "youtube.com";
            $val['secret_key'] = config('api.secret_key');
            $val['data'] = 'list_acc';
            $val['cat_slug'] = $slug;

            $result_Api = DirectAPI::_makeRequest($url,$val,$method);

//            return $result_Api;

            if(isset($result_Api) && $result_Api->httpcode == 200){
                $data = $result_Api->data;

                return view('frontend.pages.account.accountList');

            }else{
                return 'sai';
            }

        }

    }
}
