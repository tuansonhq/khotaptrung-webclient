<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Library\AuthCustom;
use App\Library\DirectAPI;
use App\Library\HelpersDecode;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Log;

use Session;
use function PHPUnit\Framework\isEmpty;

class ServiceController extends Controller
{

    public function getShowService(Request $request){

        $url = '/get-show-service';
        $method = "GET";
        $val = array();

        $result_Api = DirectAPI::_makeRequest($url,$val,$method);

        if (isset($result_Api) && $result_Api->httpcode == 200) {

            $data = $result_Api->data;
            $data = $data->data;

            $data = new LengthAwarePaginator($data->data, $data->total, $data->per_page, $data->current_page, $data->data);
            Session::put('path', $_SERVER['REQUEST_URI']);
            return view('frontend.'.theme('')->theme_key.'.pages.service.index')
                ->with('data', $data);
        } else {
            return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
        }

    }

    public function getShowServiceData(Request $request)
    {
        if ($request->ajax()){

            $page = $request->page;
            $url = '/get-show-service';
            $method = "GET";

            $valajax = array();
            $valajax['page'] = $page;

            if (isset($request->title) || $request->title != '' || $request->title != null) {

                $valajax['title'] = $request->title;
            }

            $result_Apiajax = DirectAPI::_makeRequest($url,$valajax,$method);

            if (isset($result_Apiajax) && $result_Apiajax->httpcode == 200) {

                $dataajax = $result_Apiajax->data;
                $dataajax = $dataajax->data;

                $dataajax = new LengthAwarePaginator($dataajax->data, $dataajax->total, $dataajax->per_page, $page, $dataajax->data);

                return view('frontend.'.theme('')->theme_key.'.pages.service.function.__get__show__data')
                    ->with('data', $dataajax);
            } else {
                return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
            }
        }
    }

    public function getShow(Request $request,$slug){

        $url = '/get-show-service';
        $method = "GET";
        $val = array();
        $val['slug'] = $slug;

        $result_Api = DirectAPI::_makeRequest($url,$val,$method);


        if(isset($result_Api) && $result_Api->httpcode == 200) {
            $result = $result_Api->data;
            $data = $result->data;
            if (isset($result->categoryservice)){
                $categoryservice = $result->categoryservice;
                $categoryservice = $categoryservice->data;



                Session::put('path', $_SERVER['REQUEST_URI']);

                return view('frontend.'.theme('')->theme_key.'.pages.service.show')
                    ->with('categoryservice', $categoryservice)
                    ->with('data', $data)
                    ->with('slug', $slug);
            }else{

                Session::put('path', $_SERVER['REQUEST_URI']);

                return view('frontend.'.theme('')->theme_key.'.pages.service.show')
                    ->with('data', $data)
                    ->with('slug', $slug);
            }

        }

    }

    public function getShowData(Request $request,$slug){

        if ($request->ajax()){
            $url = '/get-show-service';
            $method = "GET";
            $val = array();
            $val['slug'] = $slug;

            $result_Api = DirectAPI::_makeRequest($url,$val,$method);
            if(isset($result_Api) && $result_Api->httpcode == 200) {
                $result = $result_Api->data;
                $data = $result->data;

                $sluggroup = '';
                if (isset($data->groups[0]->slug)){
                    $sluggroup = $data->groups[0]->slug;
                }
                $titlegroup = '';
                if (isset($data->groups[0]->title)){
                    $titlegroup = $data->groups[0]->title;
                }

                $descriptiondetail = $data->description;
                $imagedetail = $data->image;
                $titledetail = $data->title;
//Kiem tra may chu.

                $server_mode = null;
                $server_data = null;
                $server_id = null;

                $server_mode = HelpersDecode::DecodeJson('server_mode',$data->params);

                if ($server_mode == 1){
                    $server_data = HelpersDecode::DecodeJson('server_data',$data->params);
                    $server_id = HelpersDecode::DecodeJson('server_id',$data->params);
                }

//dich vu may chu khac
                $filter_type = null;
                $name = null;
                $price = null;
                $filter_name = null;
                $input_pack_min = null;
                $input_pack_max = null;
                $params = null;
                $params = $data->params;

                $filter_type = HelpersDecode::DecodeJson('filter_type',$data->params);

                if ($filter_type == 4){
                    $name= HelpersDecode::DecodeJson('name',$data->params);
                    $price= HelpersDecode::DecodeJson('price',$data->params);
                    $filter_name = HelpersDecode::DecodeJson('filter_name',$data->params);

                    return response()->json([
                        'sluggroup' => $sluggroup,
                        'titlegroup' => $titlegroup,
                        'descriptiondetail' => $descriptiondetail,
                        'imagedetail' => $imagedetail,
                        'titledetail' => $titledetail,
                        'server_mode' => $server_mode,
                        'server_data' => $server_data,
                        'server_id' => $server_id,
                        'filter_type' => $filter_type,
                        'name' => $name,
                        'price' => $price,
                        'params' => $params,
                        'filter_name' => $filter_name,
                        'status' => 1,
                    ]);
                }elseif ($filter_type == 7){
                    $input_pack_min = HelpersDecode::DecodeJson('input_pack_min',$data->params);
                    $input_pack_max = HelpersDecode::DecodeJson('input_pack_max',$data->params);
                    $filter_name = HelpersDecode::DecodeJson('filter_name',$data->params);

                    return response()->json([
                        'sluggroup' => $sluggroup,
                        'titlegroup' => $titlegroup,
                        'descriptiondetail' => $descriptiondetail,
                        'imagedetail' => $imagedetail,
                        'titledetail' => $titledetail,
                        'server_mode' => $server_mode,
                        'server_data' => $server_data,
                        'server_id' => $server_id,
                        'filter_name' => $filter_name,
                        'params' => $params,
                        'filter_type' => $filter_type,
                        'input_pack_min' => $input_pack_min,
                        'input_pack_max' => $input_pack_max,
                        'status' => 1,
                    ]);
                }elseif ($filter_type == 5){
                    $name= HelpersDecode::DecodeJson('name',$data->params);
                    $price= HelpersDecode::DecodeJson('price',$data->params);
                    $filter_name = HelpersDecode::DecodeJson('filter_name',$data->params);

                    return response()->json([
                        'sluggroup' => $sluggroup,
                        'titlegroup' => $titlegroup,
                        'descriptiondetail' => $descriptiondetail,
                        'imagedetail' => $imagedetail,
                        'titledetail' => $titledetail,
                        'server_mode' => $server_mode,
                        'server_data' => $server_data,
                        'server_id' => $server_id,
                        'filter_type' => $filter_type,
                        'name' => $name,
                        'price' => $price,
                        'params' => $params,
                        'filter_name' => $filter_name,
                        'status' => 1,
                    ]);
                }elseif ($filter_type == 6){

                    $name= HelpersDecode::DecodeJson('name',$data->params);
                    $price= HelpersDecode::DecodeJson('price',$data->params);
                    $filter_name = HelpersDecode::DecodeJson('filter_name',$data->params);

                    $aucheck = 0;

                    if (AuthCustom::check()){
                        $aucheck = 1;
                    }


                    return response()->json([
                        'sluggroup' => $sluggroup,
                        'titlegroup' => $titlegroup,
                        'descriptiondetail' => $descriptiondetail,
                        'imagedetail' => $imagedetail,
                        'titledetail' => $titledetail,
                        'server_mode' => $server_mode,
                        'server_data' => $server_data,
                        'server_id' => $server_id,
                        'filter_type' => $filter_type,
                        'name' => $name,
                        'price' => $price,
                        'aucheck' => $aucheck,
                        'filter_name' => $filter_name,
                        'status' => 1,
                    ]);
                }
            }
        }

    }

    public function getShowModalData(Request $request,$slug){

        if ($request->ajax()){
            $price = $request->price;

            if ($price <= 0 || $price == '' || $price == null){
                return response()->json([
                    'status' => 0,
                    'price' => $price,
                    'message' => 'Số tiền không hợp lệ',
                ]);
            }


            $url = '/get-show-service';
            $method = "GET";
            $val = array();
            $val['slug'] = $slug;

            $result_Api = DirectAPI::_makeRequest($url,$val,$method);

            if(isset($result_Api) && $result_Api->httpcode == 200) {
                $result = $result_Api->data;
                $data = $result->data;

                $aucheck = 0;
                $balance = 0;

                if (AuthCustom::check()){
                    $aucheck = 1;
                    $jwt = Session::get('jwt');
                    if(empty($jwt)){
                        return response()->json([
                            'status' => "LOGIN"
                        ]);
                    }

                    $urlbalance = '/profile';
                    $methodbalance = "GET";
                    $databalance = array();
                    $databalance['token'] = $jwt;

                    $result_Apibalance = DirectAPI::_makeRequest($urlbalance,$databalance,$methodbalance);

                    if(isset($result_Apibalance) && $result_Apibalance->httpcode == 200) {
                        $resultbalance = $result_Apibalance->data;
                        $balance = $resultbalance->user->balance;
                    }
                }

                return response()->json([
                    'aucheck' => $aucheck,
                    'params' => $data->params,
                    'balance' => $balance,
                    'price' => $price,
                    'status' => 1,
                ]);
            }
        }

    }

    public function getBuyServiceHistory(Request $request)
    {
        if (AuthCustom::check()) {
            $url = '/service-history';
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



            if (isset($result_Api) && $result_Api->httpcode == 200) {
                $result = $result_Api->data;

                if ($result->status == 1) {

                    $categoryservice = $result->categoryservice;
//                    return  $categoryservice;

                    return view('frontend.'.theme('')->theme_key.'.pages.service.getBuyServiceHistory')->with('categoryservice', $categoryservice);
                } else {
                    return redirect()->back()->withErrors($result->message);
                }
            } else {
                return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
            }
        }

    }

    public function postPurchase(Request $request,$id){

        if (AuthCustom::check()) {

            $url_detail = '/get-show-service';
            $method_detail = "GET";
            $val_detail = array();
            $val_detail['id'] = $id;

            $result_Api_detail = DirectAPI::_makeRequest($url_detail,$val_detail,$method_detail);

            if(isset($result_Api_detail) && $result_Api_detail->httpcode == 200) {
                $result_detail = $result_Api_detail->data;
                $data_detail = $result_detail->data;

                $filter_type = HelpersDecode::DecodeJson('filter_type',$data_detail->params);

                $selected = $request->selected;
                $server = $request->get('server');

                $index = $request->index;

                $url = '/service/purchase';
                $method = "POST";
                $val = array();
                $jwt = Session::get('jwt');
                if (empty($jwt)) {
                    return response()->json([
                        'status' => "LOGIN"
                    ]);
                }

                $val['token'] = $jwt;
                $val['id'] = $id;
                $val['selected'] = $selected;

                if (!isset($server) || $server == null || $server == '' || $server == 'NaN'){}else{
                    $val['server'] = $server;
                }

                if ((int)$index > 0){
                    for ($i = 0; $i < $index; $i++){
                        $val['customer_data'.$i] = $request->get('customer_data'.$i);
                    }
                }

                if ($filter_type == 6){
                    $rank_from = $request->get('rank_from');
                    $rank_to = $request->get('rank_to');
                    $val['rank_from'] = $rank_from;
                    $val['rank_to'] = $rank_to;
                }

                $result_Api = DirectAPI::_makeRequest($url,$val,$method);


                if(isset($result_Api) && $result_Api->httpcode == 200){
                    $data = $result_Api->data;

                    if (isset($data->status)){
                        if ($data->status == 0){

                            return response()->json([
                                'status' => 2,
                                'message' => $data->message,
                            ]);
//                        return redirect()->route('getBuyAccountHistory')->with('content', $data->message );
                        }elseif ($data->status == 1 ){
                            return response()->json([
                                'status' => 1,
                                'message' => $data->message,
                            ]);
//                        return redirect()->route('getBuyAccountHistory')->with('content', 'Mua tài khoản thành công');
                        }
                    }elseif (isset($data->error)){
                        return response()->json([
                            'status' => 0,
                            'message' => "Hệ thống gặp sự cố.Vui lòng liên hệ chăm sóc khách hàng để được hỗ trợ.",
                        ]);
//                    return redirect()->route('getBuyAccountHistory')->with('content', 'Hệ thống gặp sự cố.Vui lòng liên hệ chăm sóc khách hàng để được hỗ trợ.' );
                    }else{
                        return response()->json([
                            'status' => 0,
                            'message' => "Hệ thống gặp sự cố.Vui lòng liên hệ chăm sóc khách hàng để được hỗ trợ.",
                        ]);
                    }

                }else{
                    return response()->json([
                        'status' => 0,
                        'message' => "Hệ thống gặp sự cố.Vui lòng liên hệ chăm sóc khách hàng để được hỗ trợ.",
                    ]);
                }

            }
        }
    }

}
