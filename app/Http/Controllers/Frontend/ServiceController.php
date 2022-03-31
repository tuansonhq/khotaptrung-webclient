<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Library\DirectAPI;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Log;

use function PHPUnit\Framework\isEmpty;

class ServiceController extends Controller
{

    public function getShowService(Request $request){

        $url = '/get-show-service';
        $method = "GET";
        $val = array();

        $result_Api = DirectAPI::_makeRequest($url,$val,$method);

        if ($request->ajax()){
            $page = $request->page;
            $url = '/get-show-service';
            $method = "GET";
            $val = array();

            $result_Api = DirectAPI::_makeRequest($url,$val,$method);

            if (isset($result_Api) && $result_Api->httpcode == 200) {

                $data = $result_Api->data;
                $data = $data->data;

                $data = new LengthAwarePaginator($data->data, $data->total, $data->per_page, $data->current_page, $data->data);

                return view('frontend.pages.service.function.__get__show__data')
                    ->with('data', $data);
            } else {
                return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
            }
        }


        if (isset($result_Api) && $result_Api->httpcode == 200) {

            $data = $result_Api->data;
            $data = $data->data;

            $data = new LengthAwarePaginator($data->data, $data->total, $data->per_page, $data->current_page, $data->data);

            return view('frontend.pages.service.index')
                ->with('data', $data);
        } else {
            return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
        }

//        try {
//
//
//        } catch (\Exception $e) {
//            Log::error($e);
//            return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
//        }
    }

//    public function showServiceCategory(Request $request,$slug){
//        $url = '/show-service-category';
//        $method = "GET";
//        $val = array();
//        $val['slug'] = $slug;
//        $result_Api = DirectAPI::_makeRequest($url,$val,$method);
//        if(isset($result_Api) && $result_Api->httpcode == 200){
//            $result = $result_Api->data;
//            //return $result;
//            if ($result->is_router == false){
//                $data = $result->data;
//                $categoryservice = $result->categoryservice;
//                $categoryservice = $categoryservice->data;
//
//                return view('frontend.pages.service.show')
//                    ->with('categoryservice',$categoryservice)
//                    ->with('data',$data)
//                    ->with('slug',$slug);
//            }
//            $data = $result->categoryservice;
//
//            return view('frontend.pages.service.show_service_category')
//                ->with('slug',$slug)
//                ->with('data',$data);
//        }else{
//            return 'sai';
//        }
//
//    }
//
//
//    public function showServiceCategoryData(Request $request,$slug){
//        if ($request->ajax()){
//            $page = $request->page;
//            $append = $request->append;
//
//            $url = '/show-service-category';
//            $method = "GET";
//            $val = array();
//            $val['page'] = $page;
//            $val['slug'] = $slug;
//            if (isset($request->querry) || $request->querry != '' || $request->querry != null){
//                $val['querry'] = $request->querry;
//            }
//
//            $result_Api = DirectAPI::_makeRequest($url,$val,$method);
//            if(isset($result_Api) && $result_Api->httpcode == 200){
//                $result = $result_Api->data;
//                if ($result->is_over){
//                    return response()->json([
//                        'is_over'=>true
//                    ]);
//                }
//                $data = $result->data;
//
//                $data = $data->data;
//
//                return response()->json([
//                    'data' => $data,
//                    'append' => $append,
//                    'is_over'=>false
//                ]);
//            }else{
//                return 'sai';
//            }
//
//        }
//    }
//
//    public function getBuyServiceHistory(Request $request)
//    {
//        if (AuthCustom::check()) {
//            $url = '/deposit-auto/history';
//            $method = "GET";
//            $val = array();
//            $jwt = Session::get('jwt');
//            if (empty($jwt)) {
//                return response()->json([
//                    'status' => "LOGIN"
//                ]);
//            }
//            $val['token'] = $jwt;
//            $result_Api = DirectAPI::_makeRequest($url, $val, $method);
//
//            $url_telecome = '/deposit-auto/get-telecom';
//            $val_telecome = array();
//            $val_telecome['token'] = $jwt;
//
//            $result_Api_telecome = DirectAPI::_makeRequest($url_telecome, $val_telecome, $method);
//
//            if (isset($result_Api) && $result_Api->httpcode == 200 && isset($result_Api_telecome) && $result_Api_telecome->httpcode == 200) {
//                $result = $result_Api->data;
//                if ($result->status == 1) {
//
//                    $data = $result->data;
//                    $data_telecome = $result_Api_telecome->data;
//
//                    $data_telecome = $data_telecome->data;
//
//                    // Set default page
//                    if (isEmpty($data->data)) {
//                        $data = new LengthAwarePaginator($data->data, $data->total, $data->per_page, $data->current_page, $data->data);
//                    }
//
//
//                    return view('frontend.pages.service.getBuyServiceHistory')
//                        ->with('data', $data)->with('data_telecome', $data_telecome);
//                } else {
//                    return redirect()->back()->withErrors($result->message);
//                }
//            } else {
//                return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
//            }
//        }
//
//    }
//
//    public function getBuyServiceHistoryData(Request $request)
//    {
//
//        if ($request->ajax()) {
//            $page = $request->page;
//
//            $url = '/deposit-auto/history';
//
//            $method = "GET";
//            $val = array();
//            $jwt = Session::get('jwt');
//            if (empty($jwt)) {
//                return response()->json([
//                    'status' => "LOGIN"
//                ]);
//            }
//            $val['token'] = $jwt;
//            $val['page'] = $page;
//
//            if (isset($request->serial) || $request->serial != '' || $request->serial != null) {
//                $val['serial'] = $request->serial;
//            }
//
//            if (isset($request->key) || $request->key != '' || $request->key != null) {
//                $val['key'] = $request->key;
//            }
//
//            if (isset($request->status) || $request->status != '' || $request->status != null) {
//                $val['status'] = $request->status;
//            }
//
//            if (isset($request->started_at) || $request->started_at != '' || $request->started_at != null) {
//                $val['started_at'] = $request->started_at;
//            }
//
//            if (isset($request->ended_at) || $request->ended_at != '' || $request->ended_at != null) {
//                $val['ended_at'] = $request->ended_at;
//            }
//
//            $result_Api = DirectAPI::_makeRequest($url, $val, $method);
//
//            if (isset($result_Api) && $result_Api->httpcode == 200) {
//                $result = $result_Api->data;
//                if ($result->status == 1) {
//
//                    $result = $result_Api->data;
//                    $data = $result->data;
//
//                    if (isEmpty($data->data)) {
//                        $data = new LengthAwarePaginator($data->data, $data->total, $data->per_page, $page, $data->data);
//                    }
//
//                    return view('frontend.pages.service.function.__get__buy__service__history')
//                        ->with('data', $data);
//                } else {
//                    return redirect()->back()->withErrors($result->message);
//                }
//            } else {
//                return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
//            }
//        }
//    }
}
