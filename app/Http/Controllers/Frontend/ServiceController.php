<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Library\DirectAPI;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Request $request){

        $url = '/serviceson';
        $method = "GET";
        $val = array();
        //$data['token'] = session()->get('auth_token');
        $val['domain'] = "youtube.com";
        $val['secret_key'] = config('api.secret_key');
        $result_Api = DirectAPI::_makeRequest($url,$val,$method);
        $result = $result_Api->data;
        $data = $result->data;

        return view('frontend.pages.index')->with('data',$data);
    }
}
