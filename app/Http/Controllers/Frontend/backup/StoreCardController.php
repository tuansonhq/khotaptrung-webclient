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
        return view('frontend.pages.buy_card');
    }
    public function getTelecomStoreCard(Request $request){

        try{
            $url = '/store-card/get-telecom';
            $method = "GET";
            $data = array();
            $result_Api = DirectAPI::_makeRequest($url,$data,$method);
            dd($result_Api);
        }
        catch(\Exception $e){
            Log::error($e);
            return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
        }


    }
    public function getAmountStoreCard(Request $request)
    {

        if ($request->ajax()){
//            if($request->hasCookie('jwt')){
                try{

                    $url = '/store-card/get-amount';
                    $method = "GET";
                    $data = array();
                    $jwt = Session::get('jwt');
                    if(empty($jwt)){
                        return response()->json([
                            'status' => "LOGIN"
                        ]);
                    }
                    $data['token'] =$jwt;
                    $data['telecom'] = $request->telecom;


                    $result_Api = DirectAPI::_makeRequest($url,$data,$method);

                    if (isset($result_Api) && $result_Api->httpcode == 200) {
                        $result = $result_Api->data;
                        if($result->status == 1){
                            return response()->json([
                                'status' => 1,
                                'data' => $result
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

//            }
        }

    }

    public function postStoreCard(Request $request)
    {
        if(AuthCustom::check()){
            try{
                $url = '/store-card';
                $method = "POST";
                $data = array();
                $jwt = Session::get('jwt');
                if(empty($jwt)){
                    return response()->json([
                        'status' => "LOGIN"
                    ]);
                }
                $data['token'] =$jwt;
                $data['telecom_key'] = $request->telecom_key;
                $data['amount'] = $request->amount;
                $data['quantity'] = $request->quantity;
                $result_Api = DirectAPI::_makeRequest($url,$data,$method);
                if (isset($result_Api) && $result_Api->httpcode == 200) {
                    $storeCardPost = $result_Api->data;
                    $message = $storeCardPost->message;
                    if ($storeCardPost->status==0){
                        return Response()->json($storeCardPost->message);
                    }else{
                        return response()->json([
                            'status' => 1,
                            'message'=>$message,
                            'data' => $storeCardPost
                        ]);
                    }
                } else {
                    return Response()->json($result_Api->data->message);
                }
            }
            catch(\Exception $e){
                Log::error($e);
                return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
            }

        }
    }



}
