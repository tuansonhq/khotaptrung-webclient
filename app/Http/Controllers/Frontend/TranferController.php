<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Library\DirectAPI;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Log;
use function PHPUnit\Framework\isEmpty;

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

                $val = array();

                $val['token'] = $request->cookie('jwt');
                $val['secret_key'] = config('api.secret_key');
                $val['domain'] = 'youtube.com';

                $result_Api = DirectAPI::_makeRequest($url,$val,$method);

                $result_ApiHistory = DirectAPI::_makeRequest($urlhistory,$val,$method);


                if (isset($result_Api) && $result_Api->httpcode == 200 && isset($result_ApiHistory)== 200 && $result_ApiHistory->httpcode == 200) {
                    $tranferbank = $result_Api->data;

                    $data = $result_ApiHistory->data;

                    $data = $data->data;

                    if (isEmpty($data->data)){
                        $data = new LengthAwarePaginator($data->data,$data->total,$data->per_page,$data->current_page,$data->data);
                    }

                    return view('frontend.pages.account.user.pay_atm', compact('tranferbank','data'));
                } else {
                    return 'sai';
                }
            }
            catch(\Exception $e){
                Log::error($e);
                return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
            }

        }
        else{
            return redirect('login');
        }

    }

    public function getBankData(Request $request)
    {
        if ($request->ajax() && $request->hasCookie('jwt')) {
            try{
                $page = $request->page;
                $urlhistory = '/transfer/history';

                $method = "GET";
                $val = array();
                $val['token'] = $request->cookie('jwt');
                $val['secret_key'] = config('api.secret_key');
                $val['domain'] = 'youtube.com';
                $val['page'] = $page;

                $result_ApiHistory = DirectAPI::_makeRequest($urlhistory,$val,$method);

                if (isset($result_ApiHistory)== 200 && $result_ApiHistory->httpcode == 200) {

                    $data = $result_ApiHistory->data;

                    if (isEmpty($data->data)){
                        $data = new LengthAwarePaginator($data->data,$data->total,$data->per_page,$page,$data->data);
                    }

                    return view('frontend.pages.account.user.function.__pay_atm', compact('data'));
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

    public function postDepositBank(Request $request)
    {
        if ($request->ajax()){
            if($request->hasCookie('jwt')){
                try{

                    $url = '/transfer/get-bank';
                    $method = "GET";
                    $data = array();
                    $data['token'] = $request->cookie('jwt');
                    $data['secret_key'] = config('api.secret_key');
                    $data['domain'] = 'youtube.com';

                    $result_Api = DirectAPI::_makeRequest($url,$data,$method);

                    if (isset($result_Api) && $result_Api->httpcode == 200) {
                        $tranferbank = $result_Api->data;

                        $tranferbankApi= $tranferbank->data[$request->dataid];
                        return response()->json([
                            'status' => 1,
                            'data' => [
                                'infoTranfer'=>$tranferbankApi,
                                'moneyBank'=>$request->money_bank
                            ]
                        ]);
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

    public function postTranferBank(Request $request)
    {
        $validator = $this->validate($request,[
            'captcha' => 'required|captcha'
        ],[
            'captcha.required' => "Nhập mã capcha",
            'captcha.captcha' =>"Sai mã capcha",
        ]);
//
//        if ($validator->fails()) {
//            return Response()->json($validator->errors());
//        }
        if($request->hasCookie('jwt')){
            try{
                $url = '/transfer';
                $method = "POST";
                $data = array();
                $data['token'] = $request->cookie('jwt');
                $data['secret_key'] = config('api.secret_key');
                $data['domain'] = 'youtube.com';
                $data['bank_id'] = $request->id_bank;
                $data['amount'] = $request->tranfer_money;
                $result_Api = DirectAPI::_makeRequest($url,$data,$method);

                if (isset($result_Api) && $result_Api->httpcode == 200) {
                    $tranferbankPost = $result_Api->data;
                    $message = $tranferbankPost->message;
                    if ($tranferbankPost->status==0){
                        return Response()->json($tranferbankPost->message);
                    }else{
                        return response()->json([
                            'status' => 1,
                            'message'=>$message,
                            'data' => $tranferbankPost
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
