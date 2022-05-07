<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Library\AuthCustom;
use App\Library\DirectAPI;
use App\Library\Helpers;
use Illuminate\Http\Request;
use Session;

class HomeController extends Controller
{
    public function index(){

//        $url_menu_transaction = '/menu-transaction';
//        $method_menu_transaction = "POST";
//
//        $val_menu_transaction = array();
//        $result_Api_menu_transaction = DirectAPI::_makeRequest($url_menu_transaction ,$val_menu_transaction ,$method_menu_transaction);
//        $result_menu_transaction = $result_Api_menu_transaction->data;
//        $data_menu_transaction = $result_menu_transaction->data;
//        Session::forget('path');
//        Session::put('path', $_SERVER['REQUEST_URI']);
//
        return view('frontend.pages.index');
    }

    public function profile(){

        $url_menu_profile = '/menu-profile';
        $method_menu_category  = "POST";
        $val_menu_profile = array();
//        $val_menu_profile ['domain'] = "youtube.com";
//        $val_menu_category ['secret_key'] = config('api.secret_key');
        $result_Api_menu_profile = DirectAPI::_makeRequest($url_menu_profile ,$method_menu_category ,$val_menu_profile );
        $result_menu_profile= $result_Api_menu_profile->data;
        $data_menu_profile = $result_menu_profile->data;


        return view('frontend.pages.index')
            ->with('$data_menu_profile',$data_menu_profile);
    }

    public function getTopCharge(Request $request)
    {
            try{

                $url = '/top-charge';
                $method = "GET";
                $data = array();

                $result_Api = DirectAPI::_makeRequest($url,$data,$method);
                if (isset($result_Api) && $result_Api->httpcode == 200) {
                    $result = $result_Api->data;
                    if($result->status == 1){
                        return response()->json([
                            'status' => 1,
                            'data' => $result->data
                        ]);
                    }

                    else {
                        return redirect()->back()->withErrors($result_Api->message);

                    }
                } else {
                    return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
                }
            }
            catch(\Exception $e){
                Log::error($e);
                return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
            }

        }



}
