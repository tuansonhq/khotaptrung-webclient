<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Library\DirectAPI;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;


class UserController extends Controller
{

    public function getInfo(Request $request){
        try{
            if(!$request->hasCookie('jwt')){
                return response()->json([
                    'status' => "LOGIN"
                ]);
            }
            $url = '/profile';
            $method = "GET";
            $data = array();
            $data['token'] = $request->session()->get('jwt');
            $result_Api = DirectAPI::_makeRequest($url,$data,$method);
            if(isset($result_Api) && $result_Api->httpcode == 200){
                $result = $result_Api->data;
                $request->session()->put('auth_custom', $result->user);
                if($result->status == 1){
                    return response()->json([
                        'status' => true,
                        'info' => $result->user,
                    ]);
                }
            }
            return response()->json([
                'status' => "LOGIN"
            ]);
        }
        catch(\Exception $e){
            Log::error($e);
            return response()->json([
                'status' => "ERROR"
            ]);
        }
    }




    public function index(Request $request)
    {
        if($request->hasCookie('jwt')){
            try{

                $url = '/profile';
                $method = "GET";
                $data = array();
                $data['token'] = $request->cookie('jwt');
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
                        return view('frontend.pages.account.user.index')->with('result',$result);
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
