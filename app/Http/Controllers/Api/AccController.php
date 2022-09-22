<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Library\DirectAPI;
use Illuminate\Http\Request;

class AccController extends Controller
{
//    public function getShowAccRandom(Request $request){
//        if ($request->ajax()){
//            $url = '/acc';
//            $method = "GET";
//            $dataSend = array();
//            $dataSend['data'] = 'category_list_random';
//            $dataSend['module'] = 'acc_category';
//            if (theme('')->theme_key == "theme_3"){
//                $dataSend['limit_item'] =  4;
//            }
//
//            $result_Api = DirectAPI::_makeRequest($url,$dataSend,$method);
//            $response_data = $result_Api->response_data??null;
//
//            if(isset($response_data) && $response_data->status == 1){
//                $data = $response_data->data;
//
//                $html = view('frontend.widget.__data__nick__random')
//                    ->with('data',$data)->render();
//
//                return response()->json([
//                    'data' => $html,
//                    'status' => 1,
//                    'message' => 'Load dữ liệu thành công',
//                ]);
//            }else{
//                return response()->json([
//                    'status' => 0,
//                    'message'=>$response_data->message??"Không thể lấy dữ liệu"
//                ]);
//            }
//        }
//
//
//
//    }
}
