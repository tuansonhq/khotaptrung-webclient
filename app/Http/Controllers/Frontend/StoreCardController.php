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
        Session::forget('return_url');
        Session::put('return_url', $_SERVER['REQUEST_URI']);
        if (theme('')->theme_key=='theme_1'){
            return redirect('/');
        }else{
            return view('frontend.pages.storecard.index');
        }

    }
    public function getTelecomStoreCard(Request $request){
        try{
            $url = '/store-card/get-telecom';
            $method = "GET";
            $dataSend = array();
            $result_Api = DirectAPI::_makeRequest($url,$dataSend,$method);
            $data = $result_Api->response_data??null;
            if(isset($data) && $data->status == 1){
                return response()->json([
                    'status' => 1,
                    'message' => 'Thành công',
                    'data' => $data->data,
                ],200);
            }
            else{
                return response()->json([
                    'status' => 0,
                    'message'=>$data->message??"Không thể lấy dữ liệu"
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

        try{
            $url = '/store-card/get-amount';
            $method = "GET";
            $dataSend = array();
            $dataSend['telecom'] = $request->telecom;
            $result_Api = DirectAPI::_makeRequest($url,$dataSend,$method);
            $data = $result_Api->response_data??null;
            if(isset($data) && $data->status == 1){
                return response()->json([
                    'status' => 1,
                    'message' => 'Thành công',
                    'data' => $data->data,
                ],200);
            }
            else{
                return response()->json([
                    'status' => 0,
                    'message'=>$data->message??"Không thể lấy dữ liệu"
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

    public function postStoreCard(Request $request)

    {
        try{
            $url = '/store-card';
            $method = "POST";
            $dataSend = array();
            $dataSend['token'] = session()->get('jwt');
            $dataSend['telecom_key'] = $request->telecom;
            $dataSend['amount'] = $request->amount;
            $dataSend['quantity'] = $request->quantity;
            $result_Api = DirectAPI::_makeRequest($url,$dataSend,$method);
            $data = $result_Api->response_data??null;
            if(isset($data) && $data->status == 1){
                return response()->json([
                    'status' => 1,
                    'message' => $data->message,
                    'data' => $data,
                ]);
            }elseif(isset($result_Api) && $result_Api->response_code == 401){
                return response()->json([
                    'status' => 401,
                    'message'=>"unauthencation"
                ]);
            }
            else{
                return response()->json([
                    'status' => 0,
                    'message'=>$data->message??"Không thể lấy dữ liệu"
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
}
