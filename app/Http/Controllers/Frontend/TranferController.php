<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Library\DirectAPI;
use Illuminate\Http\Request;

class TranferController extends Controller
{
    //
    public function getBank(Request $request)
    {
        if($request->hasCookie('jwt')){
            try{
                $urlhistory = '/transfer/history';


                $url = '/transfer/get-bank';
                $method = "GET";
                $data = array();
                $data['token'] = $request->cookie('jwt');
                $data['secret_key'] = config('api.secret_key');
                $data['domain'] = 'youtube.com';

                $result_Api = DirectAPI::_makeRequest($url,$data,$method);
                $result_ApiHistory = DirectAPI::_makeRequest($urlhistory,$data,$method);

                if (isset($result_Api) && $result_Api->httpcode == 200 && isset($result_ApiHistory)== 200 && $result_ApiHistory->httpcode == 200) {
                    $tranferbank = $result_Api->data;
                    $tranferbankHistory = $result_ApiHistory->data;
                    dd($tranferbank->data->where($tranferbank->title));
//                    dd($tranferbank);
//                    if ($tranferbank->status == 1) {

                        return view('frontend.pages.account.user.pay_atm', compact('tranferbank','tranferbankHistory'));
//                    }
//
//                    else {
//                        return redirect()->back()->withErrors($tranferbank->message);
//
//                    }
                } else {
                    return 'sai';
                }
            }
            catch(\Exception $e){
                Log::error($e);
                return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
            }

        }


    }
}
