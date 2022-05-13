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
        Session::forget('return_url');
        Session::put('return_url', $_SERVER['REQUEST_URI']);
        return view('frontend.pages.account.user.pay_card');

    }

    public function getDepositAutoData(Request $request){

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

                    $arrpin = array();

                    for ($i = 0; $i < count($data->data); $i++){
                        $pin = $data->data[$i]->pin;
                        $pin = Helpers::Decrypt($pin,config('module.charge.key_encrypt'));
                        array_push($arrpin,$pin);
                    }

                    $data = new LengthAwarePaginator($data->data, $data->total, $data->per_page, $page, $data->data);

                    return view('frontend.pages.account.user.function.__pay_card')
                        ->with('data', $data)->with('arrpin',$arrpin);
                } else {
                    return redirect()->back()->withErrors($result->message);
                }
            } else {
                return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
            }
        }
    }

    public function getTelecom(Request $request)
    {

        try{
            $url = '/deposit-auto/get-telecom';
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

    public function getTelecomDepositAuto(Request $request)
    {
        try {
            $url = '/deposit-auto/get-amount';
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
            $dataSend = array();
            $dataSend['token'] = session()->get('jwt');
            $dataSend['type'] = $request->type;
            $dataSend['amount'] = $request->amount;
            $dataSend['pin'] = $request->pin;
            $dataSend['serial'] = $request->serial;
            $result_Api = DirectAPI::_makeRequest($url, $dataSend, $method);
            $data = $result_Api->response_data??null;

            if(isset($data) && $data->status == 1){
                return response()->json([
                    'status' => 1,
                    'message' => $data->message,
                    'data' => $data,
                ],200);
            } elseif(isset($result_Api) && $result_Api->response_code == 401){
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

    public function getChargeDepositHistory(Request $request)
    {

        if (AuthCustom::check()) {
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

            $result_Api = DirectAPI::_makeRequest($url, $val, $method);

            $url_telecome = '/deposit-auto/get-telecom';
            $val_telecome = array();

            $result_Api_telecome = DirectAPI::_makeRequest($url_telecome, $val_telecome, $method);

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

                if (isset($request->serial) || $request->serial != '' || $request->serial != null) {
                    $val['serial'] = $request->serial;
                }

                if (isset($request->key) || $request->key != '' || $request->key != null) {
                    $val['key'] = $request->key;
                }

                if (isset($request->status) || $request->status != '' || $request->status != null) {
                    $val['status'] = $request->status;
                }

                if (isset($request->started_at) || $request->started_at != '' || $request->started_at != null) {
                    $started_at = \Carbon\Carbon::parse($request->started_at)->format('Y-m-d H:i:s');
                    $val['started_at'] = $started_at;
                }

                if (isset($request->ended_at) || $request->ended_at != '' || $request->ended_at != null) {
                    $ended_at = \Carbon\Carbon::parse($request->ended_at)->format('Y-m-d H:i:s');
                    $val['ended_at'] = $ended_at;
                }

                $result_Api = DirectAPI::_makeRequest($url, $val, $method);

                if (isset($result_Api) && $result_Api->httpcode == 200) {
                    $result = $result_Api->data;


                    if ($result->status == 1) {

                        $result = $result_Api->data;
                        $data = $result->data;

                        $arrpin = array();
                        $arrserial = array();

                        for ($i = 0; $i < count($data->data); $i++){
                            $serial = $data->data[$i]->serial;
                            $serial = Helpers::Decrypt($serial,config('module.charge.key_encrypt'));
                            array_push($arrserial,$serial);
                        }

                        for ($i = 0; $i < count($data->data); $i++){
                            $pin = $data->data[$i]->pin;
                            $pin = Helpers::Decrypt($pin,config('module.charge.key_encrypt'));
                            array_push($arrpin,$pin);
                        }

                        if (isEmpty($data->data)) {
                            $data = new LengthAwarePaginator($data->data, $data->total, $data->per_page, $page, $data->data);
                            $data->setPath($request->url());
                        }

                        return view('frontend.pages.account.user.function.__pay_card_history')
                            ->with('data',$data)->with('arrpin',$arrpin)->with('arrserial',$arrserial);
                    } else {
                        return redirect()->back()->withErrors($result->message);
                    }
                } else {
                    return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
                }
            }

            if (isset($result_Api) && $result_Api->httpcode == 200 && isset($result_Api_telecome) && $result_Api_telecome->httpcode == 200) {
                $result = $result_Api->data;
                if ($result->status == 1) {

                    $data = $result->data;

                    $arrpin = array();
                    $arrserial = array();

                    for ($i = 0; $i < count($data->data); $i++){
                        $serial = $data->data[$i]->serial;
                        $serial = Helpers::Decrypt($serial,config('module.charge.key_encrypt'));
                        array_push($arrserial,$serial);
                    }

                    for ($i = 0; $i < count($data->data); $i++){
                        $pin = $data->data[$i]->pin;
                        $pin = Helpers::Decrypt($pin,config('module.charge.key_encrypt'));
                        array_push($arrpin,$pin);
                    }

                    $data_telecome = $result_Api_telecome->data;

                    $data_telecome = $data_telecome->data;

                    // Set default page
                    if (isEmpty($data->data)) {
                        $data = new LengthAwarePaginator($data->data, $data->total, $data->per_page, $data->current_page, $data->data);
                        $data->setPath($request->url());
                    }


                    return view('frontend.pages.account.user.pay_card_history')
                        ->with('data', $data)->with('data_telecome', $data_telecome)->with('arrpin',$arrpin)->with('arrserial',$arrserial);
                } else {
                    return redirect()->back()->withErrors($result->message);
                }
            } else {
                return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
            }
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
