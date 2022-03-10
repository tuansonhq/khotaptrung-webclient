<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Library\DirectAPI;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class ChargeController extends Controller

{
    public function getDepositAuto()
    {
        try{
            $url = '/deposit-auto/get-telecom';
            $method = "GET";
            $data = array();
            $data['token'] =  session()->get('auth_token');
            $data['secret_key'] = config('api.secret_key');
            $data['domain'] = 'youtube.com';

            $result_Api = DirectAPI::_makeRequest($url,$data,$method);

            if(isset($result_Api) && $result_Api->httpcode == 500){
                $bank = $result_Api->data;
                if($bank->status == 1){
                    return view('frontend.pages.account.user.pay_card',compact('bank'));
                }
                else{
                    return redirect()->back()->withErrors($bank->message);

                }
            }else{
                return 'sai';
            }
        }
        catch(\Exception $e){
            Log::error($e);
            return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
        }
    }

    public function getDepositHistory()
    {
        try{
            $url = '/deposit-auto/history';
            $method = "GET";
            $data = array();
            $data['token'] =  session()->get('auth_token');
            $data['secret_key'] = config('api.secret_key');
            $data['domain'] = 'youtube.com';
            $result_Api = DirectAPI::_makeRequest($url,$data,$method);
            if(isset($result_Api) && $result_Api->httpcode == 200){
                $result = $result_Api->data;
                if($result->status == 1){
//                    $time = strtotime(Carbon::now());
//                    $exp_token = $result->exp_token;
//                    $time_exp_token = $time + $exp_token;
//                    session()->put('auth_token', $result->token);
//                    session()->put('exp_token', $result->exp_token);
//                    session()->put('time_exp_token', $time_exp_token);
                    return view('frontend.pages.account.user.transaction_history')->with('result',$result);
                }
                else{
                    return redirect()->back()->withErrors($result->message);

                }
            }else{
                return 'sai';
            }
        }
        catch(\Exception $e){
            Log::error($e);
            return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
        }
    }
    public function getTelecomDepositAuto(Request $request){
//        if ($request->ajax()) {
//            dd($request->all());
//            }


        try{
            $url = '/deposit-auto/history';
            $method = "GET";
            $data = array();
            $data['token'] =  session()->get('auth_token');
            $data['secret_key'] = config('api.secret_key');
            $data['domain'] = 'youtube.com';
            $result_Api = DirectAPI::_makeRequest($url,$data,$method);

            if(isset($result_Api) && $result_Api->httpcode == 200){
                $result = $result_Api->data;
                if($result->status == 1){
                    if ($request->ajax()) {
                        $telecom_value = null;
                        if (count($result) > 0) {
                            $keys = [];
                            foreach ($result as $item) {
                                array_push($keys, $item->key);
                            }
                            return response()->json([
                                'status' => 1,
                                'data' => $result
                            ]);
                        }else{
                            return response()->json([
                                'status' => 0,
                                'message' => "Không tìm thấy nhà mạng phù hợp"
                            ]);
                        }
                    }
                    else{
                        return response()->json([
                            'status' => 0,
                            'message' => "Bạn không có quyền truy cập !"
                        ]);
                    }
//                    return view('frontend.pages.account.user.transaction_history')->with('result',$result);
                }
                else{
                    return redirect()->back()->withErrors($result->message);

                }
            }else{
                return 'sai';
            }
        }
        catch(\Exception $e){
            Log::error($e);
            return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
        }



    }
}
