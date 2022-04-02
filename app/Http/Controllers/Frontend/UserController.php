<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Library\AuthCustom;
use App\Library\DirectAPI;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
use Session;


class UserController extends Controller
{

    public function getInfo(Request $request){

        try{
            $jwt = Session::get('jwt');
            if(empty($jwt)){
                return response()->json([
                    'status' => "LOGIN"
                ]);
            }
            $url = '/profile';
            $method = "GET";
            $data = array();
            $data['token'] = $jwt;
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

    public function info(Request $request)
    {
        return view('frontend.pages.account.user.index');

    }

    public function profile(Request $request)
    {
//        return view('frontend.pages.account.user.index');
        try{
            $jwt = Session::get('jwt');
            if(empty($jwt)){
                return response()->json([
                    'status' => "LOGIN"
                ]);
            }
            $url = '/profile';
            $method = "GET";
            $data = array();
            $data['token'] = $jwt;
//            dd(111);
            $result_Api = DirectAPI::_makeRequest($url,$data,$method);
            if(isset($result_Api) && $result_Api->httpcode == 200){
                $result = $result_Api->data;
                $request->session()->put('auth_custom', $result->user);

//                dd($result);
                if($result->status == 1){
                    return response()->json([
                        'status' => true,
                        'info' => $result->user,
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


    public function getTran(Request $request){
        try{

            $jwt = Session::get('jwt');
            if(empty($jwt)){
                return response()->json([
                    'status' => "LOGIN"
                ]);
            }

            $id_user = AuthCustom::user()->id;

            $url = '/get-txns';
            $method = "GET";
            $data = array();
            $data['token'] = $jwt;
            $data['user_id'] = $id_user;

            $result_Api = DirectAPI::_makeRequest($url,$data,$method);

            if(isset($result_Api) && $result_Api->httpcode == 200){
                $result = $result_Api->data;

                $config = $result->config;
                $status = $result->status;
                $data = $result->data;

                $data = new LengthAwarePaginator($data->data, $data->total, $data->per_page, $data->current_page, $data->data);

                return view('frontend.pages.account.user.lich-su-giao-dich')
                    ->with('data', $data)->with('status', $status)->with('config',$config);
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

}
