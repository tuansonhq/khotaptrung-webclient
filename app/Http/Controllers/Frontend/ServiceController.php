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
        Session::forget('return_url');
        Session::put('return_url', $_SERVER['REQUEST_URI']);
        Session::put('path', $_SERVER['REQUEST_URI']);

        return view('frontend.pages.service.index');

    }

    public function getShowServiceData(Request $request)
    {
        if ($request->ajax()){

            $page = $request->page;
            $url = '/service';
            $method = "GET";

            $val = array();
            $val['page'] = $page;

            if (isset($request->title) || $request->title != '' || $request->title != null) {

                $val['search'] = $request->title;
            }

            $result_Api = DirectAPI::_makeRequest($url,$val,$method);

            if (!isset($result_Api) || !$result_Api->httpcode == 200){
                return redirect('/408');
            }

            if (!isset($result_Api->data)){
                return response()->json([
                    'status' => 0,
                    'message' => 'Data không tồn tại.',
                ]);
            }

            $data = $result_Api->data;

            if (!isset($data->data)){
                return response()->json([
                    'status' => 0,
                    'message' => 'Data không tồn tại.',
                ]);
            }

            $data = new LengthAwarePaginator($data->data, $data->total, $data->per_page, $page, $data->data);

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
    }

    public function getShow(Request $request,$slug){

        $url = '/service/'.$slug;
        $method = "GET";
        $val = array();
        $val['slug'] = $slug;

        $result_Api = DirectAPI::_makeRequest($url,$val,$method);

        if (!isset($result_Api) || !$result_Api->httpcode == 200){
            return redirect('/408');
        }

        if (!isset($result_Api->data)){
            return response()->json([
                'status' => 0,
                'message' => 'Data không tồn tại.',
            ]);
        }

        $data = $result_Api->data;

        Session::put('path', $_SERVER['REQUEST_URI']);

        return view('frontend.pages.service.show')
            ->with('data', $data)
            ->with('slug', $slug);

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


            $url = '/service/'.$slug;
            $method = "GET";
            $val = array();
            $val['slug'] = $slug;

            $result_Api = DirectAPI::_makeRequest($url,$val,$method);

            if(!isset($result_Api) && !$result_Api->httpcode == 200){
                return redirect('/408');
            }


            if (!isset($result_Api->data)){
                return response()->json([
                    'status' => 0,
                    'message' => 'Data không tồn tại.',
                ]);
            }

            $data = $result_Api->data;

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

    }

    public function getBuyServiceHistory(Request $request)
    {
        if (AuthCustom::check()) {
            return view('frontend.pages.service.getBuyServiceHistory');
        }

    }

    public function getBuyServiceHistoryData(Request $request)
    {
        if (AuthCustom::check()) {
            if ($request->ajax()) {
                $page = $request->page;
                $url = '/service/log';
                $method = "GET";
                $val = array();
                $jwt = Session::get('jwt');
                if (empty($jwt)) {
                    return response()->json([
                        'status' => "LOGIN"
                    ]);
                }

                $val['token'] = $jwt;
                $val['author_id'] = AuthCustom::user()->id;
                $val['page'] = $page;

                if (isset($request->id) || $request->id != '' || $request->id != null) {
//                    $checkid = decodeItemID($request->serial);
                    $val['id'] = $request->id;
                }

                if (isset($request->key) || $request->key != '' || $request->key != null) {
                    $val['slug_category'] = $request->key;
                }

                if (isset($request->status) || $request->status != '' || $request->status != null) {
                    $val['status'] = $request->status;
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

//                return $result_Api;
                if(!isset($result_Api) && !$result_Api->httpcode == 200){
                    return redirect('/408');
                }

                return $result_Api;

                if (isset($result_Api) && $result_Api->httpcode == 200) {

                    $result = $result_Api->data;
                    $data = $result->datatable;

                    $categoryservice = $result->categoryservice;

                    if (isEmpty($data->data)) {
                        $data = new LengthAwarePaginator($data->data, $data->total, $data->per_page, $data->current_page, $data->data);
                    }

                    $html = view('frontend.pages.service.function.__get__buy__service__history')
                        ->with('data', $data)->render();

                    return response()->json([
                        "success"=> true,
                        "data" => $html,
                        "status" => 1,
                    ], 200);

                } else {
                    return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
                }
            }
        }
    }

    public function getShowBuyServiceHistory(Request $request,$id){
        if (AuthCustom::check()) {
            $url = '/service/log';
            $method = "GET";
            $val = array();
            $jwt = Session::get('jwt');
            if (empty($jwt)) {
                return response()->json([
                    'status' => "LOGIN"
                ]);
            }
            $val['token'] = $jwt;
            $val['author_id'] = AuthCustom::user()->id;
            $val['id'] = $id;

            $result_Api = DirectAPI::_makeRequest($url, $val, $method);


            if (isset($result_Api) && $result_Api->httpcode == 200) {
                $result = $result_Api->data;
                $data = $result->datatable;

                if ($result->status == 1) {
                    $data = $data->data;
                    $data = $data[0];
                    $categoryservice = $result->categoryservice;

                    return view('frontend.pages.service.historydetails')->with('categoryservice', $categoryservice)->with('data', $data);
                } else {
                    return redirect()->back()->withErrors($result->message);
                }
            } else {
                return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
            }
        }
    }

    public function getDeleteServiceData(Request $request){

        if (AuthCustom::check()) {
            $id = $request->get('id');
            $url = '/service/log';
            $method = "GET";
            $val = array();
            $jwt = Session::get('jwt');
            if (empty($jwt)) {
                return response()->json([
                    'status' => "LOGIN"
                ]);
            }
            $val['token'] = $jwt;
            $val['author_id'] = AuthCustom::user()->id;
            $val['id'] = $id;

            $result_Api = DirectAPI::_makeRequest($url, $val, $method);


            if (isset($result_Api) && $result_Api->httpcode == 200) {
                $result = $result_Api->data;
                $data = $result->datatable;

                if ($result->status == 1) {
                    $data = $data->data;
                    $data = $data[0];
                    $input_auto = \App\Library\HelpersDecode::DecodeJson('input_auto', $data->item_ref->params);

                    if (isset($data) && $data->status == 1){
                        if ($input_auto==1 && ($data->item_ref->idkey!='' ||$data->item_ref->idkey!=null )){}else{
                            return response()->json([
                                'status' => 1,
                            ]);
                        }
                    }else{
                        return response()->json([
                            'status' => 0,
                            'message' => "Hệ thống gặp sự cố.Vui lòng liên hệ chăm sóc khách hàng để được hỗ trợ.",
                        ]);
                    }
                } else {
                    return redirect()->back()->withErrors($result->message);
                }
            } else {
                return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
            }
        }
    }

    public function getEditServiceData(Request $request){
        if (AuthCustom::check()) {

            $id = $request->get('id');
            $url = '/service/log';
            $method = "GET";
            $val = array();
            $jwt = Session::get('jwt');
            if (empty($jwt)) {
                return response()->json([
                    'status' => "LOGIN"
                ]);
            }
            $val['token'] = $jwt;
            $val['author_id'] = AuthCustom::user()->id;
            $val['id'] = $id;

            $result_Api = DirectAPI::_makeRequest($url, $val, $method);


            if (isset($result_Api) && $result_Api->httpcode == 200) {
                $result = $result_Api->data;
                $data = $result->datatable;

                if ($result->status == 1) {
                    $data = $data->data;
                    $data = $data[0];
                    $input_auto = \App\Library\HelpersDecode::DecodeJson('input_auto', $data->item_ref->params);

                    if (isset($data) && $data->status == 1){
                        if ($input_auto==1 && ($data->item_ref->idkey!='' ||$data->item_ref->idkey!=null )){}else{
                            return response()->json([
                                'status' => 1,
                            ]);
                        }
                    }else{
                        return response()->json([
                            'status' => 0,
                            'message' => "Hệ thống gặp sự cố.Vui lòng liên hệ chăm sóc khách hàng để được hỗ trợ.",
                        ]);
                    }
                } else {
                    return redirect()->back()->withErrors($result->message);
                }
            } else {
                return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
            }
        }
    }

    public function postDestroy(Request $request,$id){

        if (AuthCustom::check()) {
            $url = '/service/log/detail/destroy/'.$id;
            $method = "POST";
            $val = array();
            $jwt = Session::get('jwt');
            if (empty($jwt)) {
                return response()->json([
                    'status' => "LOGIN"
                ]);
            }
            $val['token'] = $jwt;
            $val['mistake_by'] = $request->mistake_by;
            $val['note'] = $request->note;

            $result_Api = DirectAPI::_makeRequest($url, $val, $method);

            if (isset($result_Api) && $result_Api->httpcode == 200) {
                $result = $result_Api->data;

                if ($result->status == 1) {

                    return response()->json([
                        'status' => 1,
                        'message' => $result->message,
                    ]);
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

            if (!isset($request->selected) || $request->selected == null || $request->selected == '' || $request->selected == 'NaN'){}else{
                $val['selected'] = $request->selected;
            }

            if ($request->get('server') || $request->get('server') == null || $request->get('server') == '' || $request->get('server') == 'NaN'){}else{
                $val['server'] = $request->get('server');
            }

            if ((int)$index > 0){
                for ($i = 0; $i < $index; $i++){
                    $val['customer_data'.$i] = $request->get('customer_data'.$i);
                }
            }

            if (!$request->get('rank_from') || $request->get('rank_from') == null || $request->get('rank_from') == '' || $request->get('rank_from') == 'NaN'){}else{
                $val['rank_from'] = $request->get('rank_from');
            }
            if (!$request->get('rank_to') || $request->get('rank_to') == null || $request->get('rank_to') == '' || $request->get('rank_to') == 'NaN'){}else{
                $val['rank_to'] = $request->get('rank_to');
            }
//            return $val;
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

    public function editDestroy(Request $request,$id){

        if (AuthCustom::check()) {
//
            $index = $request->get('index');

            $url = '/service/log/detail/edit-info/'.$id;
            $method = "POST";
            $val = array();
            $jwt = Session::get('jwt');
            if (empty($jwt)) {
                return response()->json([
                    'status' => "LOGIN"
                ]);
            }
            $val['token'] = $jwt;

            if ((int)$index > 0){
                for ($i = 0; $i < $index; $i++){
                    $val['customer_data'.$i] = $request->get('customer_data'.$i);
                }
            }

            $result_Api = DirectAPI::_makeRequest($url, $val, $method);

            if (isset($result_Api) && $result_Api->httpcode == 200) {
                $result = $result_Api->data;

                if ($result->status == 1) {

                    return Redirect::back()->with('message', $result->message);

                }
                else {
                    return redirect()->back()->withErrors($result->message);
                }
            }
            else {
                return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
            }
        }

    }
}
