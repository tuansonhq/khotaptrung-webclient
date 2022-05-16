<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Library\AuthCustom;
use App\Library\DirectAPI;
use App\Library\Helpers;
use App\Library\HelpersDecode;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Log;

use Redirect;
use Session;
use function PHPUnit\Framework\isEmpty;

class ServiceController extends Controller
{

    public function getShowService(Request $request){
        $url = '/service';
        $method = "GET";

        $dataSend = array();

        if ($request->ajax()){

            $page = $request->page;
            $url = '/service';
            $method = "GET";

            $dataSend = array();
            $dataSend['page'] = $page;
            
            if (isset($request->title) || $request->title != '' || $request->title != null) {
                $dataSend['search'] = $request->title;
            }

            $result_Api = DirectAPI::_makeRequest($url,$dataSend,$method);
            $response_data = $result_Api->response_data??null;

            if(isset($response_data) && $response_data->status == 1){

                $data = $response_data->data;

                $data = new LengthAwarePaginator($data->data, $data->total, $data->per_page, $page, $data->data);
                $data->setPath($request->url());
                $html = view('frontend.pages.service.function.__get__show__data')
                    ->with('data', $data)->render();

                if (count($data) == 0 && $page == 1){
                    return response()->json([
                        'status' => 0,
                        'message' => 'Không có dữ liệu.',
                    ]);
                }

                return response()->json([
                    "success"=> "Load dữ liệu thành công",
                    "status"=> 1,
                    "data" => $html,
                ], 200);

            }
            else{
                return response()->json([
                    'status' => 0,
                    'message'=>$response_data->message??"Không thể lấy dữ liệu"
                ]);
            }
        }

        $result_Api = DirectAPI::_makeRequest($url,$dataSend,$method);
        $response_data = $result_Api->response_data??null;

        if(isset($response_data) && $response_data->status == 1 && isset($response_data->data)){

            $data = $response_data->data;

            $data = new LengthAwarePaginator($data->data, $data->total, $data->per_page, $data->current_page, $data->data);
            $data->setPath($request->url());

            Session::forget('return_url');
            Session::put('return_url', $_SERVER['REQUEST_URI']);
            Session::put('path', $_SERVER['REQUEST_URI']);

            return view('frontend.pages.service.index')->with('data', $data);

        }
        else{
            return response()->json([
                'status' => 0,
                'message'=>$response_data->message??"Không thể lấy dữ liệu"
            ]);
        }
    }

    public function getShow(Request $request,$slug){

        $url = '/service/'.$slug;
        $method = "GET";
        $dataSend = array();
        $dataSend['slug'] = $slug;

        $result_Api = DirectAPI::_makeRequest($url,$dataSend,$method);
        $response_data = $result_Api->response_data??null;

        if(isset($response_data) && $response_data->status == 1){

            $data = $response_data->data;

            Session::put('path', $_SERVER['REQUEST_URI']);

            return view('frontend.pages.service.show')
                ->with('data', $data)
                ->with('slug', $slug);

        }
        else{
            return response()->json([
                'status' => 0,
                'message'=>$response_data->message??"Không thể lấy dữ liệu"
            ]);
        }
    }

    public function getShowData(Request $request,$slug){

        if ($request->ajax()){
            $url = '/get-show-service';
            $method = "GET";
            $dataSend = array();
            $dataSend['slug'] = $slug;

            $result_Api = DirectAPI::_makeRequest($url,$dataSend,$method);
            $response_data = $result_Api->response_data??null;
//            dd($response_data);
            if(isset($response_data) && $response_data->status == 1){

                $data = $response_data->data;

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
            else{
                return response()->json([
                    'status' => 0,
                    'message'=>$response_data->message??"Không thể lấy dữ liệu"
                ]);
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


            $url = '/service/'.$slug;
            $method = "GET";
            $dataSend = array();
            $dataSend['slug'] = $slug;

            $result_Api = DirectAPI::_makeRequest($url,$dataSend,$method);
            $response_data = $result_Api->response_data??null;
//            dd($response_data);
            if(isset($response_data) && $response_data->status == 1){

                $data = $response_data->data;

                $aucheck = 0;
                $balance = 0;

                if (AuthCustom::check()){
                    $aucheck = 1;
                    $balance = AuthCustom::user()->balance;
                }

                return response()->json([
                    'aucheck' => $aucheck,
                    'params' => $data->params,
                    'balance' => $balance,
                    'price' => $price,
                    'status' => 1,
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

    public function getBuyServiceHistory(Request $request)
    {
        if (AuthCustom::check()) {

            if ($request->ajax()) {
                $page = $request->page;
                $url = '/service/log';
                $method = "GET";
                $dataSend = array();
                $jwt = Session::get('jwt');
                if (empty($jwt)) {
                    return response()->json([
                        'status' => "LOGIN"
                    ]);
                }

                $dataSend['token'] = $jwt;
                $dataSend['author_id'] = AuthCustom::user()->id;
                $dataSend['page'] = $page;

                if (isset($request->id) || $request->id != '' || $request->id != null) {
//                    $checkid = decodeItemID($request->serial);
                    $dataSend['id'] = $request->id;
                }

                if (isset($request->key) || $request->key != '' || $request->key != null) {
                    $dataSend['slug_category'] = $request->key;
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


                $result_Api = DirectAPI::_makeRequest($url, $dataSend, $method);
                $response_data = $result_Api->response_data??null;

                if(isset($response_data) && $response_data->status == 1){

                    $data = $response_data->datatable;
                    $datacate = $response_data->categoryservice;

                    if (isEmpty($data->data)) {
                        $data = new LengthAwarePaginator($data->data, $data->total, $data->per_page, $data->current_page, $data->data);
                    }

                    if (count($data) == 0 && $page == 1){
                        $htmlcate = view('frontend.pages.service.function.__category__history__service')
                            ->with('datacate', $datacate)->render();

                        return response()->json([
                            'status' => 0,
                            "datacate" => $htmlcate,
                            'message' => 'Không có dữ liệu !',
                        ]);
                    }

                    $html = view('frontend.pages.service.function.__get__buy__service__history')
                        ->with('data', $data)->render();

                    $htmlcate = view('frontend.pages.service.function.__category__history__service')
                        ->with('datacate', $datacate)->render();

                    return response()->json([
                        "success"=> true,
                        "data" => $html,
                        "datacate" => $htmlcate,
                        "status" => 1,
                    ], 200);

                }
                else{
                    return response()->json([
                        'status' => 0,
                        'message'=>"Không thể tải dữ liệu vui lòng thử lại."
                    ]);
                }
            }

            return view('frontend.pages.service.getBuyServiceHistory');
        }

    }

    public function getShowBuyServiceHistory(Request $request,$id){
        if (AuthCustom::check()) {
            $url = '/service/log/detail';
            $method = "GET";
            $dataSend = array();
            $jwt = Session::get('jwt');
            if (empty($jwt)) {
                return response()->json([
                    'status' => "LOGIN"
                ]);
            }
            $dataSend['token'] = $jwt;
            $dataSend['id'] = $id;

            $result_Api = DirectAPI::_makeRequest($url, $dataSend, $method);
            $response_data = $result_Api->response_data??null;

            if(isset($response_data) && $response_data->status == 1){

                $data = $response_data->data;


                return view('frontend.pages.service.historydetails')->with('data', $data);

            }
            else{
                return response()->json([
                    'status' => 0,
                    'message'=>$response_data->message??"Không thể lấy dữ liệu"
                ]);
            }
        }
    }

    public function getDeleteServiceData(Request $request){

        if (AuthCustom::check()) {
            $id = $request->get('id');
            $url = '/service/log/detail';
            $method = "GET";
            $dataSend = array();
            $jwt = Session::get('jwt');
            if (empty($jwt)) {
                return response()->json([
                    'status' => "LOGIN"
                ]);
            }
            $dataSend['token'] = $jwt;
            $dataSend['id'] = $id;

            $result_Api = DirectAPI::_makeRequest($url, $dataSend, $method);
            $response_data = $result_Api->response_data??null;

            if(isset($response_data) && $response_data->status == 1){

                $data = $response_data->data;

                $input_auto = \App\Library\HelpersDecode::DecodeJson('input_auto', $data->itemconfig_ref->params);

                if ($input_auto==1 && ($data->itemconfig_ref->idkey!='' ||$data->itemconfig_ref->idkey!=null )){
                    return response()->json([
                        'status' => 0,
                        'message' => "Dịch vụ không thể xóa",
                    ]);
                }else{
                    return response()->json([
                        'status' => 1,
                        'message' => "Lấy dữ liệu thành công",
                    ]);
                }

            }
            else{
                return response()->json([
                    'status' => 0,
                    'message'=>$response_data->message??"Không thể lấy dữ liệu"
                ]);
            }
        }
    }

    public function getEditServiceData(Request $request){
        if (AuthCustom::check()) {

            $id = $request->get('id');
            $id = $request->get('id');
            $url = '/service/log/detail';
            $method = "GET";
            $dataSend = array();
            $jwt = Session::get('jwt');
            if (empty($jwt)) {
                return response()->json([
                    'status' => "LOGIN"
                ]);
            }
            $dataSend['token'] = $jwt;
            $dataSend['id'] = $id;

            $result_Api = DirectAPI::_makeRequest($url, $dataSend, $method);
            $response_data = $result_Api->response_data??null;

            if(isset($response_data) && $response_data->status == 1){

                $data = $response_data->data;

                $input_auto = \App\Library\HelpersDecode::DecodeJson('input_auto', $data->itemconfig_ref->params);

                if ($input_auto==1 && ($data->itemconfig_ref->idkey!='' ||$data->itemconfig_ref->idkey!=null )){
                    return response()->json([
                        'status' => 0,
                        'message' => "Dịch vụ không thể sửa",
                    ]);
                }else{
                    return response()->json([
                        'status' => 1,
                        'message' => "Lấy dữ liệu thành công",
                    ]);
                }

            }
            else{
                return response()->json([
                    'status' => 0,
                    'message'=>$response_data->message??"Không thể lấy dữ liệu"
                ]);
            }
        }
    }

    public function postDestroy(Request $request,$id){

        if (AuthCustom::check()) {
            $url = '/service/log/detail/destroy/'.$id;
            $method = "POST";
            $dataSend = array();
            $jwt = Session::get('jwt');
            if (empty($jwt)) {
                return response()->json([
                    'status' => "LOGIN"
                ]);
            }
            $dataSend['token'] = $jwt;
            $dataSend['mistake_by'] = $request->mistake_by;
            $dataSend['note'] = $request->note;

            $result_Api = DirectAPI::_makeRequest($url, $dataSend, $method);
            $response_data = $result_Api->response_data??null;

            if(isset($response_data) && $response_data->status == 1){

                if ($response_data->status == 1) {

                    return response()->json([
                        'status' => 1,
                        'message' => $response_data->message,
                    ]);
                } else {
                    return response()->json([
                        'status' => 0,
                        'message' => $response_data->message,
                    ]);
                }

            }
            else{
                return response()->json([
                    'status' => 0,
                    'message'=>$response_data->message??"Không thể lấy dữ liệu"
                ]);
            }
        }

    }

    public function postPurchase(Request $request,$id){

        if (AuthCustom::check()) {

            $index = $request->index;

            $url = '/service/purchase';
            $method = "POST";
            $dataSend = array();
            $jwt = Session::get('jwt');

            if (empty($jwt)) {
                return response()->json([
                    'status' => "LOGIN"
                ]);
            }

            $dataSend['token'] = $jwt;
            $dataSend['id'] = $id;

            $dataSend['selected'] = $request->selected;
            $dataSend['server'] = $request->get('server');

            if ((int)$index > 0){
                for ($i = 0; $i < $index; $i++){
                    $dataSend['customer_data'.$i] = $request->get('customer_data'.$i);
                }
            }
            $dataSend['rank_from'] = $request->get('rank_from');
            $dataSend['rank_to'] = $request->get('rank_to');

            $result_Api = DirectAPI::_makeRequest($url,$dataSend,$method);
            $response_data = $result_Api->response_data??null;

            if(isset($response_data) && $response_data->status == 1){
                return response()->json([
                    'status' => 1,
                    'message' => 'Mua dịch vụ thành công',
                ],200);
            }
            else{
                return response()->json([
                    'status' => 0,
                    'data' => $request->all(),
                    'message'=>$response_data->message??"Thanh toán thất bại vui lòng thử lại"
                ]);
            }
        }
    }

    public function editDestroy(Request $request,$id){

        if (AuthCustom::check()) {
//
            $index = $request->get('index');

            $url = '/service/log/detail/edit-info/'.$id;
            $method = "POST";
            $dataSend = array();
            $jwt = Session::get('jwt');
            if (empty($jwt)) {
                return response()->json([
                    'status' => "LOGIN"
                ]);
            }
            $dataSend['token'] = $jwt;

            if ((int)$index > 0){
                for ($i = 0; $i < $index; $i++){
                    $dataSend['customer_data'.$i] = $request->get('customer_data'.$i);
                }
            }
            $result_Api = DirectAPI::_makeRequest($url, $dataSend, $method);
            $response_data = $result_Api->response_data??null;

            if(isset($response_data) && $response_data->status == 1){

                if ($response_data->status == 1) {
                    return response()->json([
                        'status' => 1,
                        'message' => $response_data->message,
                    ]);
                } else {
                    return response()->json([
                        'status' => 0,
                        'message' => $response_data->message,
                    ]);
                }

            }
            else{
                return response()->json([
                    'status' => 0,
                    'message'=>$response_data->message??"Không thể lấy dữ liệu"
                ]);
            }
        }

    }
}
