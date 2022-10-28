<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Library\AuthCustom;
use App\Library\DirectAPI;
use App\Library\Helpers;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Session;
use Illuminate\Support\Facades\Log;
use function PHPUnit\Framework\isEmpty;

class StoreCardController extends Controller
{
    public function getStoreCard(Request $request, $slug){

        $url = '/get-category/'.$slug;
        $method = "GET";
        $val = array();
        $val['type'] = 4;
        $val['limit'] = 50;
        $result_Api = DirectAPI::_makeRequest($url,$val,$method,false,0,1);

        if(isset($result_Api)){
            
            $data_api = $result_Api->response_data->data->product->data;
            $data_nha_mang = [];
            $data_menh_gia = [];

            foreach($data_api as $item) {
                foreach($item->product_attribute as $attribute) {
                    if ($attribute->attribute->idkey == "nha_mang_thecao") {
                        $data_nha_mang[$attribute->product_attribute_value_able->id] = $attribute->product_attribute_value_able->title;
                    }
                }
            }

            $data_nha_mang = json_decode(json_encode($data_nha_mang), FALSE);

            foreach ( $data_nha_mang as $key => $data ) {

                $array_menhgia = [];

                foreach( $data_api as $item ) {
                    $productPrice = $item->price;
                    foreach($item->product_attribute as $attribute) {
                        if ($attribute->product_attribute_value_able->id == $key) {
                            foreach ($item->product_attribute as $attribute) {
                                if ($attribute->attribute->idkey == "menh_gia_thecao") {

                                    $productValue = new \stdClass();
                                    $amount = $attribute->product_attribute_value_able->title;
                                    //Calculate ratio
                                    $ratio = 100 - ( ($productPrice / $amount) * 100 );
                                    $ratio = round($ratio, 2);

                                    $productValue->ratio = $ratio;
                                    $productValue->amount = (int)$amount;
                                    $array_menhgia[$item->id] = $productValue;
                                }
                            }
                        }
                    }
                }

                $data_menh_gia[$key] = $array_menhgia;
            }

            // dd($data_nha_mang, $data_menh_gia);
            Session::get('auth_custom');

            return view('frontend.pages.storecard.index')
                ->with('data_nha_mang',$data_nha_mang)->with('data_menh_gia', $data_menh_gia);
        }
        else{

            $data = null;
            $message = $response_data->message??"Không thể lấy dữ liệu";

            Session::get('auth_custom');

            return view('frontend.pages.storecard.index')
                ->with('message',$message)
                ->with('data',$data);
        }

    }

    public function getTelecomStoreCard(Request $request){
        try{
            $url = '/store-card/get-telecom';
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

    public function getAmountStoreCard(Request $request)
    {
        try {
            $url = '/store-card/get-amount';
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

    public function postStoreCard(Request $request)

    {
        try{
            $url = '/store-card';
            $method = "POST";
            $val = array();
            $val['id'] = (int)$request->id;
            $val['quantity'] = $request->quantity;
            $val['token'] = session()->get('jwt');
            $result_Api = DirectAPI::_makeRequest($url,$val,$method,false,0,1);
            $data = $result_Api->response_data??null;
            if(isset($data) && $data->status == 1){
                return response()->json([
                    'status' => 1,
                    'message' => $data->message,
                    'data' => $data,
                ]);
            }elseif(isset($result_Api) && $result_Api->response_code == 401){
                return response()->json([
                    'status' => 401,
                    'message'=>"unauthencation"
                ]);
            }
            elseif ( isset($data) && $data->status == 0 ) {
                return response()->json([
                    'status' => 0,
                    'message'=>$data->message??"Không thể lấy dữ liệu"
                ]);
            } else {
                return response()->json([
                    'status' => 2,
                    'message'=>$data->message??"Giao dịch đang chờ xử lý, vui lòng liên hệ QTV để xác thực giao dịch."
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

    public function showListCard(Request $request,$name)
    {
        /*Get telecom*/
        $url = '/store-card/get-telecom';
        $method = "GET";
        $dataSend = array();
        $result_Api = DirectAPI::_makeRequest($url,$dataSend,$method);
        $data_telecoms = $result_Api->response_data??null;

        if ($data_telecoms && $data_telecoms->status == 1 ){
            /*Get amount*/
            $url = '/store-card/get-amount';
            $method = "GET";
            $dataSend = array();
            $dataSend['telecom'] = $name;
            $result_api_amount = DirectAPI::_makeRequest($url,$dataSend,$method);
            $data_amounts = $result_api_amount->response_data??null;
            if ($data_amounts && $data_amounts->status == 1) {
                $data_view = [
                    'key'=>$name,
                    'data_telecoms'=>$data_telecoms,
                    'data_amounts'=>$data_amounts,
                    'status'=>1,
                ];
                return view(''.theme('')->theme_key.'.frontend.pages.storecard-v2.card-list',$data_view);
            }
        }
    }
    public function showDetailCard($name,$value)
    {
        /*Get telecom*/
        $url = '/store-card/get-telecom';
        $method = "GET";
        $dataSend = array();
        $result_Api = DirectAPI::_makeRequest($url,$dataSend,$method);
        $data_telecoms = $result_Api->response_data??null;

        if ($data_telecoms && $data_telecoms->status == 1 ){
            /*Get amount*/
            $url = '/store-card/get-amount';
            $method = "GET";
            $dataSend = array();
            $dataSend['telecom'] = $name;
            $result_api_amount = DirectAPI::_makeRequest($url,$dataSend,$method);
            $data_amounts = $result_api_amount->response_data??null;
            if ($data_amounts && $data_amounts->status == 1) {
                $data_view = [
                    'key'=>$name,
                    'value'=>$value,
                    'data_telecoms'=>$data_telecoms,
                    'data_amounts'=>$data_amounts,
                    'status'=>1,
                ];
                return view(''.theme('')->theme_key.'.frontend.pages.storecard-v2.card-single',$data_view);
            }
        }

    }

    public function getStoreCardHistory(Request $request)
    {
        if (AuthCustom::check()) {

            if ($request->ajax()) {
                $page = $request->page;

                $url = '/store-card/history';
                $method = "GET";
                $val = array();
                $val['type'] = 4;
                $val['limit'] = 5;
                $val['page'] = $page;
                $result_Api = DirectAPI::_makeRequest($url,$val,$method,false,0,1);
                $response_data = $result_Api->response_data??null;
                // dd($result_Api);
                
                if ( isset($result_Api) && $result_Api->response_code == 200 ) {
                    $data = $response_data->data;

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

                    $html =  view(''.theme('')->theme_key.'.frontend.pages.storecard.widget.__store__card__history')->with('total',$total)->with('per_page',$per_page)
                        ->with('data',$data)->render();

                    return response()->json([
                        'status' => 1,
                        'data' => $html,
                        'message' => 'Load du lieu thanh cong.',
                    ]);
                }

            } else {
                return view(''.theme('')->theme_key.'.frontend.pages.storecard.logs');
            }
        } else {
            return redirect('/login');
        }
    }
}
