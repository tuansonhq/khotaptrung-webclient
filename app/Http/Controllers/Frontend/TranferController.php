<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Library\AuthCustom;
use App\Library\DirectAPI;
use App\Library\Helpers;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Log;
use Session;
use function PHPUnit\Framework\isEmpty;

class TranferController extends Controller
{
    public function index(Request $request)
    {
        if (theme('')->theme_key == 'theme_1'){
            return view('frontend.pages.transfer.index');
        }else{
            return view('frontend.pages.charge.index');
        }


    }

    public function getIdCode(Request $request)
    {

        Session::push('url_return.id_return','1');

        try {
            $url = '/transfer/get-code';
            $method = "GET";
            $dataSend = array();
            $dataSend['token'] = session()->get('jwt');
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

        }   catch(\Exception $e){
            Log::error($e);
            return response()->json([
                'status' => 0,
                'message' => 'Có lỗi phát sinh ',
            ]);
        }
    }

    public function getHistoryTranfer(Request $request){

        if ($request->ajax()) {

            $page = $request->page;

            $url = '/transfer/history';

            $method = "GET";
            $sendData = array();
            $jwt = Session::get('jwt');
            if (empty($jwt)) {
                return response()->json([
                    'status' => "LOGIN"
                ]);
            }
            $sendData['token'] = $jwt;
            $sendData['page'] = $page;

            $result_Api = DirectAPI::_makeRequest($url, $sendData, $method);

            $response_data = $result_Api->response_data??null;

            if(isset($response_data) && $response_data->status == 1){

                $data = $response_data->data;

                $data = new LengthAwarePaginator($data->data, $data->total, $data->per_page, $page, $data->data);

                $html =  view('frontend.pages.transfer.widget.__tranfer_history')
                    ->with('data', $data)->render();

                if (count($data) == 0 && $page == 1){
                    return response()->json([
                        'status' => 0,
                        'message' => 'Hiện tại không có dữ liệu nào phù hợp với yêu cầu của bạn! Hệ thống cập nhật nick thường xuyên bạn vui lòng theo dõi web trong thời gian tới !',
                    ]);
                }

                return response()->json([
                    'status' => 1,
                    'data' => $html,
                    'message' => 'Load du lieu thanh cong.',
                ]);
            }
            else{
                return response()->json([
                    'status' => 0,
                    'message'=>$response_data->message??"Không thể lấy dữ liệu"
                ]);
            }
        }
    }

    public function logs(Request $request)
    {
        try {

            return view('frontend.pages.transfer.logs');

        }   catch(\Exception $e){
            Log::error($e);
            return response()->json([
                'status' => 0,
                'message' => 'Có lỗi phát sinh ',
            ]);
        }
    }
//    public function getBankData(Request $request)
//    {
//        if ($request->ajax() && AuthCustom::check()) {
//            try{
//                $page = $request->page;
//                $urlhistory = '/transfer/history';
//
//                $method = "GET";
//                $val = array();
//                $jwt = Session::get('jwt');
//                if(empty($jwt)){
//                    return response()->json([
//                        'status' => "LOGIN"
//                    ]);
//                }
//                $val['token'] =$jwt;
//                $val['page'] = $page;
//
//                $result_ApiHistory = DirectAPI::_makeRequest($urlhistory,$val,$method);
//
//                if (isset($result_ApiHistory)== 200 && $result_ApiHistory->httpcode == 200) {
//
//                    $data = $result_ApiHistory->data;
//
//                    if (isEmpty($data->data)){
//                        $data = new LengthAwarePaginator($data->data,$data->total,$data->per_page,$page,$data->data);
//                    }
//
//                    return view('frontend.pages.account.user.function.__pay_atm', compact('data'));
//                } else {
//                    return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
//                }
//            }
//            catch(\Exception $e){
//                Log::error($e);
//                return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
//            }
//        }
//    }


}
