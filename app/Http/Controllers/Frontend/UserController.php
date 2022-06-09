<?php

namespace App\Http\Controllers\Frontend;

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
            if(isset($result_Api) ){
                if( $result_Api->response_code == 200){
                    $result = $result_Api->response_data;
                    Session::put('auth_custom', $result->user);
//                    $request->session()->put('auth_custom', $result->user);

                    if($result->status == 1){
                        return response()->json([
                            'status' => true,
                            'jwt' => $jwt,
                            'info' => $result->user,
                        ]);
                    }
                }
                else if($result_Api->response_code == 401){
                    session()->flush();
                    return response()->json([
                        'status' => 401,
                        'message'=>"unauthencation"
                    ]);
                }
                else if($result_Api->response_code == 408){
                    return response()->json([
                        'status' => 408,
                        'message'=>"Không có phản hồi từ máy chủ (408)"
                    ]);
                }
                else{
                    return response()->json([
                        'status' => 0,
                        'message'=>"Không có phản hồi từ máy chủ ('.$result_Api->response_code.')"
                    ]);
                }

            }
            else{
                return response()->json([
                    'status' => 0,
                    'message'=>"Lỗi không gọi được dữ liệu hệ thống"
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
        return view('frontend.pages.profile.index');

    }

    public function profile(Request $request)
    {
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
            if(isset($result_Api) && $result_Api->response_code == 200){
                $result = $result_Api->response_data;
                Session::forget('return_url');
                Session::put('return_url', $_SERVER['REQUEST_URI']);
                $request->session()->put('auth_custom', $result->user);

//                dd($result);
                if($result->status == 1){
                    return response()->json([
                        'status' => true,
                        'info' => $result->user,
                    ]);
                }
            }
            if(isset($result_Api) && $result_Api->response_code == 401){
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

    public function getThongTin(Request $request)
    {
        try{

            return view('theme_2.frontend.pages.account.user.index');
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

            if ($request->ajax()) {
                $id_user = AuthCustom::user()->id;

                $url = '/get-txns';
                $method = "GET";
                $dataSend = array();
                $dataSend['token'] = $jwt;
                $dataSend['user_id'] = $id_user;

                $page = $request->page;

                $jwt = Session::get('jwt');
                if(empty($jwt)){
                    return response()->json([
                        'status' => "LOGIN"
                    ]);
                }

                $dataSend['page'] = $page;

                if (isset($request->config) || $request->config != '' || $request->config != null) {
                    $dataSend['trade_type'] = $request->config;
                }

                if (isset($request->status) || $request->status != '' || $request->status != null) {
                    $dataSend['status'] = $request->status;
                }

                if (isset($request->started_at) || $request->started_at != '' || $request->started_at != null) {
                    $started_at = \Carbon\Carbon::parse($request->started_at)->format('Y-m-d H:i:s');
                    $dataSend['started_at'] = $started_at;
                }

                if (isset($request->ended_at) || $request->ended_at != '' || $request->ended_at != null) {
                    $ended_at = \Carbon\Carbon::parse($request->ended_at)->format('Y-m-d H:i:s');
                    $dataSend['ended_at'] = $ended_at;
                }

                if (isset($request->sort_by) || $request->sort_by != '' || $request->sort_by != null){
                    $sort_by = $request->sort_by;
                    if ($sort_by == "random"){
                        $dataSend['sort'] = 'random';
                    }elseif ($sort_by == "created_at_start"){
                        $dataSend['sort_by'] = 'created_at';
                        $dataSend['sort'] = 'desc';
                    }elseif ($sort_by == "created_at_end"){
                        $dataSend['sort_by'] = 'created_at';
                        $dataSend['sort'] = 'asc';
                    }
                }

                $result_Api = DirectAPI::_makeRequest($url,$dataSend,$method);
                $response_data = $result_Api->response_data??null;

                if(isset($response_data) && $response_data->status == 1){

                    $data = $response_data->data;
                    $config = config('module.txns.trade_type_api');
                    $status = config('module.txns.status');
                    $data = new LengthAwarePaginator($data->data, $data->total, $data->per_page, $page, $data->data);
                    $data->setPath($request->url());

                    $htmlconfig =  view('frontend.pages.transaction.widget.__data_config')
                        ->with('config', $config)->render();
                    $htmlstatus =  view('frontend.pages.transaction.widget.__data_status')
                        ->with('status', $status)->render();

                    //dd($data);
                    $html =  view('frontend.pages.transaction.widget.__transaction_history')
                        ->with('data', $data)->with('config', $config)->with('status', $status)->render();

                    if (count($data) == 0 && $page == 1){
                        return response()->json([
                            'status' => 0,
                            'datastatus' => $htmlstatus,
                            'dataconfig' => $htmlconfig,
                            'message' => 'Không có dữ liệu !',
                        ]);
                    }

                    return response()->json([
                        'data' => $html,
                        'datastatus' => $htmlstatus,
                        'dataconfig' => $htmlconfig,
                        'status' => 1,
                        'message' => "Lấy dữ liệu thành công",
                    ]);
                }
                else{
                    return response()->json([
                        'status' => 0,
                        'message'=>$response_data->message??"Không thể lấy dữ liệu"
                    ]);
                }
            }

            return view('theme_1.frontend.pages.transaction.logs');

        }
        catch(\Exception $e){
            Log::error($e);
            return response()->json([
                'status' => "ERROR"
            ]);
        }
    }

    public function getTransactionShopCard(Request $request){

        try{

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

                if (isset($request->id) || $request->id != '' || $request->id != null) {
                    $data['id'] = $request->id;
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


                if (isset($result_Api) && $result_Api->response_code == 200) {
                    $result = $result_Api->response_data;
                    $data = $result->data;

                    $config = $result->dataconfig;
                    $status = $result->datastatus;
                    $per_page = 0;
                    $total = 0;

                    if (isset($data->total)){
                        $total = $data->total;
                    }

                    if (isset($data->to)){
                        $per_page = $data->to;
                    }

                    $data = new LengthAwarePaginator($data->data, $data->total, $data->per_page, $page, $data->data);

                    return view('frontend.pages.transaction.logs')
                        ->with('data', $data)
                        ->with('total',$total)
                        ->with('status',$status)
                        ->with('config',$config)
                        ->with('per_page',$per_page);
                }else{
                    return redirect('/404');
                }

            }

        }
        catch(\Exception $e){
            Log::error($e);
            return response()->json([
                'status' => "ERROR"
            ]);
        }
    }

    public function getChargeHistory(Request $request){

        try{

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


                if (isset($request->started_at) || $request->started_at != '' || $request->started_at != null) {
                    $started_at = \Carbon\Carbon::parse($request->started_at)->format('Y-m-d H:i:s');
                    $val['started_at'] = $started_at;
                }

                if (isset($request->ended_at) || $request->ended_at != '' || $request->ended_at != null) {
                    $ended_at = \Carbon\Carbon::parse($request->ended_at)->format('Y-m-d H:i:s');
                    $val['ended_at'] = $ended_at;
                }

                $result_Api = DirectAPI::_makeRequest($url, $val, $method);


                if (isset($result_Api) && $result_Api->response_code == 200) {
                    $result = $result_Api->response_data;


                    if ($result->status == 1) {

                        $result = $result_Api->response_data;
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

                        $per_page = 0;
                        $total = 0;
                        if (isset($data->total)){
                            $total = $data->total;
                        }

                        if (isset($data->to)){
                            $per_page = $data->to;
                        }

                        if (isEmpty($data->data)) {
                            $data = new LengthAwarePaginator($data->data, $data->total, $data->per_page, $page, $data->data);
                            $data->setPath($request->url());
                        }

                        return view('frontend.pages.charge.logs')
                            ->with('data',$data)
                            ->with('arrpin',$arrpin)
                            ->with('total',$total)
                            ->with('per_page',$per_page)
                            ->with('arrserial',$arrserial);
                    } else {
                        return redirect()->back()->withErrors($result->message);
                    }
                }else{
                    return redirect('/404');
                }
            }

        }
        catch(\Exception $e){
            Log::error($e);
            return response()->json([
                'status' => "ERROR"
            ]);
        }
    }

    public function getStoreHistory(Request $request){

        try{

            if ($request->ajax()) {
                $page = $request->page;

                $url = '/store-card/history';

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

                if (isset($request->id) || $request->id != '' || $request->id != null) {
                    $data['id'] = $request->id;
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


                if (isset($result_Api) && $result_Api->response_code == 200) {
                    $result = $result_Api->response_data;


                    if ($result->status == 1) {

                        $result = $result_Api->response_data;
                        $data = $result->data;

                        $arrpin = array();
                        $arrserial = array();

//                        for ($i = 0; $i < count($data->data); $i++){
//                            for ($i = 0; $i < count($data->data[$i]->card); $i++){
//
//                                $serial = $data->data[$i]->card[0]->serial;
//
//                                $serial = Helpers::Decrypt($serial,config('module.charge.key_encrypt'));
//
//                                array_push($arrserial,$serial);
//
//                                $pin = $data->data[$i]->card[0]->pin;
//                                $pin = Helpers::Decrypt($pin,config('module.charge.key_encrypt'));
//
//                                array_push($arrpin,$pin);
//
//                            }
//                            dd($arrpin);
//                        }



                        $per_page = 0;
                        $total = 0;
                        if (isset($data->total)){
                            $total = $data->total;
                        }

                        if (isset($data->to)){
                            $per_page = $data->to;
                        }

                       if (isEmpty($data->data)) {
                           $data = new LengthAwarePaginator($data->data, $data->total, $data->per_page, $page, $data->data);
                           $data->setPath($request->url());
                       }


                        return view('frontend.pages.storecard.logs')
                            ->with('data',$data)
                            ->with('total',$total)
                            ->with('per_page',$per_page)
                            ->with('arrpin',$arrpin)
                            ->with('arrserial',$arrserial);
                    } else {

                        return redirect()->back()->withErrors($result->message);
                    }
                } else{
                    return redirect('/404');
                }
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
