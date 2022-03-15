<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Library\DirectAPI;
use Carbon\Carbon;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class ChargeController extends Controller

{
    public function getDepositAuto(Request $request)
    {
        if($request->hasCookie('jwt')){
            try{
                $urlhistory = '/deposit-auto/history';


                $url = '/deposit-auto/get-telecom';
                $method = "GET";
                $data = array();
                $data['token'] = $request->cookie('jwt');
                $data['secret_key'] = config('api.secret_key');
                $data['domain'] = 'youtube.com';

                $result_Api = DirectAPI::_makeRequest($url,$data,$method);
                $result_ApiHistory = DirectAPI::_makeRequest($urlhistory,$data,$method);

                    if (isset($result_Api) && $result_Api->httpcode == 200 && isset($result_ApiHistory)== 200 && $result_ApiHistory->httpcode == 200) {
                        $bank = $result_Api->data;
                        $bankHistory = $result_ApiHistory->data;

                        if ($bank->status == 1) {
                            try{
                                $url = '/deposit-auto/get-amount';
                                $method = "GET";
                                $data = array();
                                $data['token'] =  $request->cookie('jwt');
                                $data['secret_key'] = config('api.secret_key');
                                $data['domain'] = 'youtube.com';
                                $data['telecom'] = $bank->data[0]->key;
                                $result_Api = DirectAPI::_makeRequest($url,$data,$method);

                                if(isset($result_Api) && $result_Api->httpcode == 200){
                                    $amount = $result_Api->data;
                                    if($amount->status == 1){
                                        return view('frontend.pages.account.user.pay_card', compact('bank','amount','bankHistory'));
//                    return view('frontend.pages.account.user.transaction_history')->with('result',$result);
                                    }
                                    else{
                                        return redirect()->back()->withErrors($amount->message);

                                    }
                                }else{
                                    return 'sai';
                                }
                            }
                            catch(\Exception $e){
                                Log::error($e);
                                return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
                            }

                        } else {
                            return redirect()->back()->withErrors($bank->message);

                        }
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



    public function getTelecomDepositAuto(Request $request)
    {

//        \Validator::

        if($request->hasCookie('jwt')){
            try{
                $url = '/deposit-auto/get-amount';
                $method = "GET";
                $data = array();
                $data['token'] =  $request->cookie('jwt');
                $data['secret_key'] = config('api.secret_key');
                $data['domain'] = 'youtube.com';
                $data['telecom'] = $request->telecom;
                $result_Api = DirectAPI::_makeRequest($url,$data,$method);

                if(isset($result_Api) && $result_Api->httpcode == 200){
                    $result = $result_Api->data;
                    if($result->status == 1){
                        return response()->json([
                            'status' => 1,
                            'data' => $result
                        ]);
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
    public function postTelecomDepositAuto(Request $request)
    {
        $validator = $this->validate($request,[
            'captcha' => 'required|captcha'
        ],[
            'captcha.required' => "Nhập mã capcha",
            'captcha.captcha' =>"Sai mã capcha",
        ]);

        if($request->hasCookie('jwt')){
            try{
                $url = '/deposit-auto';
                $method = "POST";
                $data = array();
                $data['token'] =  $request->cookie('jwt');
                $data['secret_key'] = config('api.secret_key');
                $data['domain'] = 'youtube.com';
                $data['type'] = $request->telecom;
                $data['amount'] = $request->amount;
                $data['pin'] = $request->pin;
                $data['serial'] = $request->serial;

                $result_Api = DirectAPI::_makeRequest($url,$data,$method);
                if(isset($result_Api) && $result_Api->httpcode == 200){
                    $result = $result_Api->data;
                    $chargePost = $result_Api->data;
                    $message = $chargePost->message;

                    if($result->status == 1){
//                        return response()->json([
//                            'status' => 1,
//                            'data' => $result
//                        ]);
                        return response()->json([
                            'status' => 1,
                            'message'=>$message,
                            'data' => $chargePost
                        ]);
//                    return view('frontend.pages.account.user.transaction_history')->with('result',$result);
                    }
                    else{
                        return redirect()->back()->withErrors($result->message);

                    }
                }else{
                    return Response()->json($result_Api->data->message);
                }
            }
            catch(\Exception $e){
                Log::error($e);
                return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
            }

        }


    }

    public function getChargeDepositHistory(Request $request)
    {

        $url = '/deposit-auto/history';
        $method = "GET";
        $val = array();
        $val['token'] = $request->cookie('jwt');
        $val['secret_key'] = config('api.secret_key');
        $val['domain'] = 'youtube.com';

        $result_Api = DirectAPI::_makeRequest($url,$val,$method);

        $url_telecome = '/deposit-auto/get-telecom';
        $val_telecome = array();
        $val_telecome['token'] = $request->cookie('jwt');
        $val_telecome['secret_key'] = config('api.secret_key');
        $val_telecome['domain'] = 'youtube.com';

        if (isset($request->serial) || $request->serial != '' || $request->serial != null){
            $val['serial'] = $request->serial;
        }

        if (isset($request->key) || $request->key != '' || $request->key != null){
            $val['key'] = $request->key;
        }

        if (isset($request->status) || $request->status != '' || $request->status != null){
            $val['status'] = $request->status;
        }

        if (isset($request->started_at) || $request->started_at != '' || $request->started_at != null){
            $val['started_at'] = $request->started_at;
        }

        if (isset($request->ended_at) || $request->ended_at != '' || $request->ended_at != null){
            $val['ended_at'] = $request->ended_at;
        }

        $result_Api_telecome = DirectAPI::_makeRequest($url_telecome,$val_telecome,$method);


        if(isset($result_Api) && $result_Api->httpcode == 200){
            $result = $result_Api->data;
            if($result->status == 1){

                $data = $result->data;
                $data_telecome = $result_Api_telecome->data;

                $data_telecome = $data_telecome->data;

                // Set default page
                $data = new LengthAwarePaginator($data->data,$data->total,$data->per_page,$data->current_page,$data->data);

                return view('frontend.pages.account.user.pay_card_history')
                    ->with('data',$data)->with('data_telecome',$data_telecome);
            }
            else{
                return redirect()->back()->withErrors($result->message);
            }
        }else{
            return 'sai';
        }

    }

    public function getChargeDepositHistoryData(Request $request){

        if ($request->ajax()){
            $page = $request->page;

            $url = '/deposit-auto/history';

            $method = "GET";
            $val = array();
            $val['token'] = $request->cookie('jwt');
            $val['secret_key'] = config('api.secret_key');
            $val['domain'] = 'youtube.com';
            $val['page'] = $page;

            $result_Api = DirectAPI::_makeRequest($url,$val,$method);

            $result = $result_Api->data;
            $data = $result->data;

            $data = new LengthAwarePaginator($data->data,$data->total,$data->per_page,$page,$data->data);

            return view('frontend.pages.account.user.function.__pay_card_history')
                ->with('data',$data);

        }
    }

    public function getDepositHistory(Request $request)
    {
        if($request->hasCookie('jwt')){
            try{
                $url = '/deposit-auto/history';
                $method = "GET";
                $data = array();
                $data['token'] = $request->cookie('jwt');
                $data['secret_key'] = config('api.secret_key');
                $data['domain'] = 'youtube.com';

                $result_Api = DirectAPI::_makeRequest($url,$data,$method);
                if(isset($result_Api) && $result_Api->httpcode == 200){
                    $result = $result_Api->data;
                    if($result->status == 1){

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

    }


}
