<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Library\AuthCustom;
use App\Library\DirectAPI;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Log;

class StoreCardController extends Controller
{
    public function getStoreCard(){
        return view('frontend.'.theme('')->theme_key.'.pages.buy_card');
    }
    public function getTelecomStoreCard(Request $request){
        try{
            $url = '/store-card/get-telecom';
            $method = "GET";
            $data = array();

            $result_Api = DirectAPI::_makeRequest($url,$data,$method);
            if(isset($result_Api) && $result_Api->httpcode == 200){
                $result = $result_Api->data;
                if($result->status == 1){
                    return response()->json([
                        'status' => 1,
                        'message' => 'Thành công',
                        'data' => $result->data,
                    ],200);
                }
            }
            if(isset($result_Api) && $result_Api->httpcode == 401){
                session()->flush();
                return response()->json([
                    'status' => 401,
                    'message'=>"unauthencation"
                ]);
            }
        }
        catch(\Exception $e){
            Log::error($e);
            return response()->json([
                'status' => 0,
                'message' => 'Có lỗi phát sinh khi lấy nhà mạng nạp thẻ, vui lòng liên hệ QTV để xử lý.',
            ]);
        }


    }
    public function getAmountStoreCard(Request $request)
    {

        try {
            $url = '/store-card/get-amount';
            $method = "GET";
            $data = array();
            $data['telecom'] = $request->telecom;
            $result_Api = DirectAPI::_makeRequest($url, $data, $method);
            if(isset($result_Api) && $result_Api->httpcode == 200){
                $result = $result_Api->data;
                if($result->status == 1){
                    return response()->json([
                        'status' => 1,
                        'message' => 'Thành công',
                        'data' => $result->data,
                    ]);
                }
            }
            if(isset($result_Api) && $result_Api->httpcode == 401){
                session()->flush();
                return response()->json([
                    'status' => 401,
                    'message'=>"unauthencation"
                ]);
            }
        } catch (\Exception $e) {
            Log::error($e);
            return response()->json([
                'status' => 0,
                'message' => 'Có lỗi phát sinh khi lấy nhà mệnh giá nhà mạng nạp thẻ, vui lòng liên hệ QTV để xử lý.',
            ]);
        }

    }

    public function postStoreCard(Request $request)
    {
        try {
            $url = '/deposit-auto';
            $method = "POST";
            $data = array();
            $data['token'] = session()->get('jwt');
            $data['telecom_key'] = $request->telecom;
            $data['amount'] = $request->amount;
            $data['quantity'] = $request->quantity;
            $result_Api = DirectAPI::_makeRequest($url, $data, $method);
            if(isset($result_Api) && $result_Api->httpcode == 401){
                session()->flush();
                return response()->json([
                    'status' => 401,
                    'message'=>"unauthencation"
                ]);
            }
            if(isset($result_Api) && $result_Api->httpcode == 200){
                $result = $result_Api->data;
                if($result->status == 1){
                    return response()->json([
                        'status' => 1,
                        'message' => $result->message,
                    ]);
                }
                if($result->status == 0){
                    return response()->json([
                        'status' => 0,
                        'message' => $result->message,
                    ]);
                }
                else{
                    return response()->json([
                        'status' => 0,
                        'message' => 'Đã xảy ra lỗi trong quá trình xử lý dữ liệu, vui lòng kiểm tra lại.',
                    ]);
                }
            }
        }
        catch (\Exception $e) {
            Log::error($e);
            return response()->json([
                'status' => 0,
                'message' => 'Có lỗi phát sinh từ hệ thống.Vui lòng liên hệ QTV để kịp thời xử lý',
            ]);
        }
    }



}
