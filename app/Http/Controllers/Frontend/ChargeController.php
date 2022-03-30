<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Library\AuthCustom;
use App\Library\Helpers;
use Illuminate\Http\Request;
use App\Library\DirectAPI;
use Carbon\Carbon;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
use function PHPUnit\Framework\isEmpty;
use Session;
use Validator;

class ChargeController extends Controller

{
    public function getDepositAuto(Request $request)
    {

        try {
               $method = "GET";
                $url_history = '/deposit-auto/history';
                $jwt = Session::get('jwt');
                $val['token'] = $jwt;
                $result_Api_history = DirectAPI::_makeRequest($url_history, $val, $method);
                if (isset($result_Api_history) == 200 && $result_Api_history->httpcode == 200) {
                    $bankHistory = $result_Api_history->data;
                    $data = $bankHistory->data;

                    $data = new LengthAwarePaginator($data->data, $data->total, $data->per_page, $data->current_page, $data->data);
                    return view('frontend.pages.account.user.pay_card', compact( 'data'));
                }

        } catch (\Exception $e) {
            Log::error($e);
            return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
        }


    }
    public function getTelecom(Request $request)
    {
        try{
            $url = '/deposit-auto/get-telecom';
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


    public function getDepositAutoData(Request $request)
    {
        if ($request->ajax()) {
            $page = $request->page;

            $url = '/deposit-auto/history';

            $method = "GET";
            $val = array();
            $jwt = Session::get('jwt');
            if (empty($jwt)) {
                return response()->json([
                    'status' => "LOGIN"
                ]);
            }
            $val['token'] = $jwt;
            $val['page'] = $page;

            $result_Api = DirectAPI::_makeRequest($url, $val, $method);

            if (isset($result_Api) && $result_Api->httpcode == 200) {
                $result = $result_Api->data;
                if ($result->status == 1) {

                    $data = $result->data;

                    $data = new LengthAwarePaginator($data->data, $data->total, $data->per_page, $page, $data->data);

                    return view('frontend.pages.account.user.function.__pay_card_history')
                        ->with('data', $data);
                } else {
                    return redirect()->back()->withErrors($result->message);
                }
            } else {
                return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
            }
        }

    }

    public function getTelecomDepositAuto(Request $request)
    {
        try {
            $url = '/deposit-auto/get-amount';
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

    public function postTelecomDepositAuto(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'captcha' => 'required|captcha',
            'type' => 'required|regex:/^([A-Za-z0-9])+$/i',
            'amount' => 'required|integer|in:10000,20000,30000,50000,100000,200000,300000,500000,1000000,2000000,3000000,5000000',
            'pin' => 'required|between::9,22|regex:/^([A-Za-z0-9])+$/i',
            'serial' => 'required|between:9,22|regex:/^([A-Za-z0-9])+$/i',
        ],[
            'captcha.required' => "Nhập mã capcha",
            'captcha.captcha' => "Sai mã capcha",
            'type.required' => __("Vui lòng chọn loại thẻ"),
            'type.regex' => __('Loại thẻ không được có ký tự đặc biệt'),
            'amount.required' => __("Vui lòng chọn mệnh giá"),
            'amount.in' => __("Mệnh giá không đúng định dạng"),
            'amount.integer' => __("Mệnh giá không đúng định dạng"),
            'pin.required' => __("Vui lòng nhập mã thẻ"),
            'pin.between' => __("Mã thẻ phải từ 9 - 16 ký tự"),
            'pin.regex' => __('Mã thẻ không được có ký tự đặc biệt'),
            'serial.required' => __("Vui lòng nhập số serial"),
            'serial.between' => __("Serial thẻ phải từ 9 - 16 ký tự"),
            'serial.regex' => __('Serial thẻ không được có ký tự đặc biệt'),
        ]);
        if($validator->fails()){
            return response()->json([
                'message' => $validator->errors()->first(),
                'status' => 0
            ]);
        }
        try {
            $url = '/deposit-auto';
            $method = "POST";
            $data = array();
            $data['token'] = session()->get('jwt');
            $data['type'] = $request->type;
            $data['amount'] = $request->amount;
            $data['pin'] = $request->pin;
            $data['serial'] = $request->serial;
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


    public function getDepositHistory(Request $request)
    {
        if (AuthCustom::check()) {
            try {
                $url = '/deposit-auto/history';
                $method = "GET";
                $data = array();
                $jwt = Session::get('jwt');
                if (empty($jwt)) {
                    return response()->json([
                        'status' => "LOGIN"
                    ]);
                }
                $data['token'] = $jwt;

                $result_Api = DirectAPI::_makeRequest($url, $data, $method);
                if (isset($result_Api) && $result_Api->httpcode == 200) {
                    $result = $result_Api->data;
                    if ($result->status == 1) {

                        return view('frontend.pages.account.user.transaction_history')->with('result', $result);
                    } else {
                        return redirect()->back()->withErrors($result->message);

                    }
                } else {
                    return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
                }
            } catch (\Exception $e) {
                Log::error($e);
                return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
            }
        }

    }


}
