<?php

namespace App\Http\Controllers\Frontend\Theme;

use App\Http\Controllers\Controller;
use App\Library\AuthCustom;
use App\Library\DirectAPI;
use App\Library\Helpers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
use Session;
use function PHPUnit\Framework\isEmpty;


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
        return view('frontend.'.theme('')->theme_key.'.pages.account.user.index');

    }

    public function profile(Request $request)
    {
//        return view('frontend.'.theme('')->theme_key.'.pages.account.user.index');
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

            if ($request->ajax()) {

                $page = $request->page;
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
                $data['page'] = $page;

                if (isset($request->config) || $request->config != '' || $request->config != null) {
                    $data['trade_type'] = $request->config;
                }

                if (isset($request->status) || $request->status != '' || $request->status != null) {
                    $data['status'] = $request->status;
                }

                if (isset($request->started_at) || $request->started_at != '' || $request->started_at != null) {
                    $started_at = \Carbon\Carbon::parse($request->started_at)->format('Y-m-d H:i:s');
                    $data['started_at'] = $started_at;
                }

                if (isset($request->ended_at) || $request->ended_at != '' || $request->ended_at != null) {
                    $ended_at = \Carbon\Carbon::parse($request->ended_at)->format('Y-m-d H:i:s');
                    $data['ended_at'] = $ended_at;
                }

                $result_Api = DirectAPI::_makeRequest($url,$data,$method);


                $result = $result_Api->data;

                $config = $result->config;
                $status = $result->status;
                $data = $result->data;

                $data = new LengthAwarePaginator($data->data, $data->total, $data->per_page, $page, $data->data);

                return view('frontend.'.theme('')->theme_key.'.pages.account.user.function.__lich__su__giao__dich__data')
                    ->with('data', $data)->with('status', $status)->with('config',$config);
            }

            if(isset($result_Api) && $result_Api->httpcode == 200){
                $result = $result_Api->data;

                $config = $result->config;
                $status = $result->status;
                $data = $result->data;

                $data = new LengthAwarePaginator($data->data, $data->total, $data->per_page, $data->current_page, $data->data);

                return view('frontend.'.theme('')->theme_key.'.pages.account.user.lich-su-giao-dich')
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
