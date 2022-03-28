<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Library\AuthCustom;
use Illuminate\Http\Request;
use App\Library\DirectAPI;
use Carbon\Carbon;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
use function PHPUnit\Framework\isEmpty;
use Session;

class ChargeController extends Controller

{
//    public function getDepositAuto(Request $request)
//    {
//        if($request->hasCookie('jwt')){
//            try{
//
//                $url = '/deposit-auto/get-telecom';
//                $method = "GET";
//                $item = array();
//                $item['token'] = $request->cookie('jwt');
//                $item['secret_key'] = config('api.secret_key');
//                $item['domain'] = 'youtube.com';
//
//                $result_Api = DirectAPI::_makeRequest($url,$item,$method);
//
//                $url_history = '/deposit-auto/history';
//
//                $result_Api_history = DirectAPI::_makeRequest($url_history,$item,$method);
//
//                    if (isset($result_Api) && $result_Api->httpcode == 200 && isset($result_Api_history) == 200 && $result_Api_history->httpcode == 200) {
//                        $bank = $result_Api->data;
//                        $bankHistory = $result_Api_history->data;
//
//                        if ($bank->status == 1) {
//                            try{
//
//                                $url = '/deposit-auto/get-amount';
//                                $method = "GET";
//                                $item = array();
//                                $item['token'] =  $request->cookie('jwt');
//                                $item['secret_key'] = config('api.secret_key');
//                                $item['domain'] = 'youtube.com';
//                                $item['telecom'] = $bank->data[0]->key;
//
//                                $result_Api = DirectAPI::_makeRequest($url,$item,$method);
//
//                                if(isset($result_Api) && $result_Api->httpcode == 200){
//                                    $amount = $result_Api->data;
//                                    if($amount->status == 1){
//                                        $data = $bankHistory->data;
//
//                                        $data = new LengthAwarePaginator($data->data,$data->total,$data->per_page,$data->current_page,$data->data);
//
//                                        return view('frontend.pages.account.user.pay_card', compact('bank','amount','data'));
//                                    }
//                                    else{
//                                        return redirect()->back()->withErrors($amount->message);
//
//                                    }
//                                }else{
//                                     return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
//                                }
//                            }
//                            catch(\Exception $e){
//                                Log::error($e);
//                                return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
//                            }
//
//                        } else {
//                            return redirect()->back()->withErrors($bank->message);
//
//                        }
//                    } else {
//                         return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
//                    }
//            }
//            catch(\Exception $e){
//                Log::error($e);
//                return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
//            }
//
//        }
//        else{
//            return redirect('login');
//        }
//
//
//    }

//    public function getDepositAuto(Request $request)
//    {
//
//        try {
//
//            $url = '/deposit-auto/get-telecom';
//            $method = "GET";
//            $val = array();
//            $result_Api = DirectAPI::_makeRequest($url, $val, $method);
//
//            if (isset($result_Api) && $result_Api->httpcode == 200) {
//                $url_history = '/deposit-auto/history';
//                $jwt = Session::get('jwt');
//                $val['token'] = $jwt;
//                $result_Api_history = DirectAPI::_makeRequest($url_history, $val, $method);
//                if (isset($result_Api_history) == 200 && $result_Api_history->httpcode == 200) {
//                    $bankHistory = $result_Api_history->data;
//                    $result = $result_Api->data;
//                    $bank = $result->data;
//                    $data = $bankHistory->data;
//                    $data = new LengthAwarePaginator($data->data, $data->total, $data->per_page, $data->current_page, $data->data);
//                    return view('frontend.pages.account.user.pay_card', compact('bank', 'data'));
//                } else {
//                    $result = $result_Api->data;
//                    $bank = $result->data;
//                    return view('frontend.pages.account.user.pay_card', compact('bank'));
//                }
////            return view('frontend.pages.account.user.pay_atm', compact('tranferbank','data'));
//            } else {
//                return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
//            }
//        } catch (\Exception $e) {
//            Log::error($e);
//            return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
//        }
//
//
//    }
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
//            return view('frontend.pages.account.user.pay_atm', compact('tranferbank','data'));

        } catch (\Exception $e) {
            Log::error($e);
            return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
        }


    }
    public function getTelecom(Request $request)
    {

        try{
//            $jwt = Session::get('jwt');
//            if(empty($jwt)){
//                return response()->json([
//                    'status' => "LOGIN"
//                ]);
//            }
            $url = '/deposit-auto/get-telecom';
            $method = "GET";
            $data = array();
//            $data['token'] = $jwt;
//            dd(111);
            $result_Api = DirectAPI::_makeRequest($url,$data,$method);

            if(isset($result_Api) && $result_Api->httpcode == 200){
                $result = $result_Api->data;

                if($result->status == 1){
                    return response()->json([
                        'status' => true,
                        'tele' => $result->data,
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

        }
        catch(\Exception $e){
            Log::error($e);
            return response()->json([
                'status' => "ERROR"
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

//        \Validator::

        if ($request->ajax()) {
            try {
                $url = '/deposit-auto/get-amount';
                $method = "GET";
                $data = array();
                $data['telecom'] = $request->telecom;


                $result_Api = DirectAPI::_makeRequest($url, $data, $method);

                if (isset($result_Api) && $result_Api->httpcode == 200) {
                    $result = $result_Api->data;

                    if ($result->status == 1) {
                        return response()->json([
                            'status' => 1,
                            'data' => $result
                        ]);
                    } else {
                        return redirect()->back()->withErrors($result_Api->message);

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

    public function postTelecomDepositAuto(Request $request)
    {
        $validator = $this->validate($request, [
            'captcha' => 'required|captcha'
        ], [
            'captcha.required' => "Nhập mã capcha",
            'captcha.captcha' => "Sai mã capcha",
        ]);

        if (AuthCustom::check()) {
            try {

                $url = '/deposit-auto';

                $method = "POST";
                $data = array();
                $jwt = Session::get('jwt');

                if (empty($jwt)) {
                    return response()->json([
                        'status' => "LOGIN"
                    ]);
                }
                $data['token'] = $jwt;
                $data['type'] = $request->telecom;
                $data['amount'] = $request->amount;
                $data['pin'] = $request->pin;
                $data['serial'] = $request->serial;
                $result_Api = DirectAPI::_makeRequest($url, $data, $method);
                if (isset($result_Api) && $result_Api->httpcode == 200) {

                    $result = $result_Api->data;
                    $chargePost = $result_Api->data;
                    $message = $chargePost->message;
                    if ($result->status == 0) {

                        return Response()->json($result->message);
                    } else {
                        return response()->json([
                            'status' => 1,
                            'message' => $message,
                            'data' => $result
                        ]);
                    }
                } else {
                    return Response()->json($result_Api->data->message);
                    return redirect()->back()->withErrors($result_Api->data->message);
                    return Response()->json($result_Api->data->message);
                }
            } catch (\Exception $e) {
                Log::error($e);
                return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
            }

        } else {
            return view('frontend.pages.log_in');

        }

    }

    public function getAmountCharge(Request $request)
    {

        if ($request->ajax()) {
            try {
                $url = '/deposit-auto/get-amount';
                $method = "GET";
                $data = array();
                $data['telecom'] = $request->telecom;


                $result_Api = DirectAPI::_makeRequest($url, $data, $method);

                if (isset($result_Api) && $result_Api->httpcode == 200) {
                    $result = $result_Api->data;

                    if ($result->status == 1) {
                        return response()->json([
                            'status' => 1,
                            'data' => $result
                        ]);
                    } else {
                        return redirect()->back()->withErrors($result_Api->message);

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
            $val_telecome['token'] = $request->cookie('jwt');
            $val_telecome['secret_key'] = config('api.secret_key');
            $val_telecome['domain'] = 'youtube.com';

            $result_Api_telecome = DirectAPI::_makeRequest($url_telecome, $val_telecome, $method);

            if (isset($result_Api) && $result_Api->httpcode == 200 && isset($result_Api_telecome) && $result_Api_telecome->httpcode == 200) {
                $result = $result_Api->data;
                if ($result->status == 1) {

                    $data = $result->data;
                    $data_telecome = $result_Api_telecome->data;

                    $data_telecome = $data_telecome->data;

                    // Set default page
                    if (isEmpty($data->data)) {
                        $data = new LengthAwarePaginator($data->data, $data->total, $data->per_page, $data->current_page, $data->data);
                    }


                    return view('frontend.pages.account.user.pay_card_history')
                        ->with('data', $data)->with('data_telecome', $data_telecome);
                } else {
                    return redirect()->back()->withErrors($result->message);
                }
            } else {
                return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
            }
        }
    }

    public function getChargeDepositHistoryData(Request $request)
    {

        if ($request->ajax() && AuthCustom::check()) {
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
                $val['started_at'] = $request->started_at;
            }

            if (isset($request->ended_at) || $request->ended_at != '' || $request->ended_at != null) {
                $val['ended_at'] = $request->ended_at;
            }

            $result_Api = DirectAPI::_makeRequest($url, $val, $method);

            if (isset($result_Api) && $result_Api->httpcode == 200) {
                $result = $result_Api->data;
                if ($result->status == 1) {

                    $result = $result_Api->data;
                    $data = $result->data;

                    if (isEmpty($data->data)) {
                        $data = new LengthAwarePaginator($data->data, $data->total, $data->per_page, $page, $data->data);
                    }

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

    public function postDeposit(Request $request)
    {
        $validator = $this->validate($request, [
            'captcha' => 'required|captcha'
        ], [
            'captcha.required' => "Nhập mã capcha",
            'captcha.captcha' => "Sai mã capcha",
        ]);

        if (AuthCustom::check()) {
            try {
                $url = '/deposit-auto';

                $method = "POST";
                $data = array();
                $jwt = Session::get('jwt');
                if (empty($jwt)) {
                    return response()->json([
                        'status' => "LOGIN"
                    ]);
                }
                $data['token'] = $jwt;

                $data['type'] = $request->tele_card;
                $data['amount'] = $request->tele_amount;
                $data['pin'] = $request->pin;
                $data['serial'] = $request->serial;
                $result_Api = DirectAPI::_makeRequest($url, $data, $method);
                if (isset($result_Api) && $result_Api->httpcode == 200) {
                    $result = $result_Api->data;
                    $chargePost = $result_Api->data;
                    $message = $chargePost->message;

                    if ($result->status == 0) {
                        return Response()->json($result->message);
                    } else {
                        return response()->json([
                            'status' => 1,
                            'message' => $message,
                            'data' => $result
                        ]);
                    }
                } else {
                    return Response()->json($result_Api->data->message);
                    return redirect()->back()->withErrors($result_Api->data->message);
                    return Response()->json($result_Api->data->message);
                }
            } catch (\Exception $e) {
                Log::error($e);
                return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
            }

        } else {

            return redirect('/login');

        }

    }


}
