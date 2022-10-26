<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Library\AuthCustom;
use App\Library\DirectAPI;
use App\Library\Helpers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Session;
use Cache;
use function PHPUnit\Framework\isEmpty;

class AccController extends Controller
{
    public function getCategory(Request $request){

        $url = '/acc';
        $method = "GET";
        $dataSend = array();
        $dataSend['data'] = 'category_list';
        $dataSend['module'] = 'acc_category';
        $result_Api = DirectAPI::_makeRequest($url,$dataSend,$method);
        $response_data = $result_Api->response_data??null;


        if(isset($response_data) && $response_data->status == 1){

            $data = $response_data->data;


            Session::get('auth_custom');

            return view('frontend.pages.account.category')
                ->with('data',$data);
        }
        else{

            $data = null;
            $message = $response_data->message??"Không thể lấy dữ liệu";

            Session::get('auth_custom');

            return view('frontend.pages.account.category')
                ->with('message',$message)
                ->with('data',$data);
        }
    }

    public function getList(Request $request,$slug){
        $url = '/get-category/'.$slug;
        $method = "GET";

        $val = array();
        $val['page'] = $request->page;
//        $data = DirectAPI::_makeRequest($url,$val,$method,false,0,1);
//        $response_data = $data->response_data;

        if ($request->ajax()){
            $page = $request->page;
                $val = array();
                $val['page'] = $page;

                $result_Api = DirectAPI::_makeRequest($url,$val,$method,false,0,1);
                $response_data = $result_Api->response_data??null;
                if(isset($response_data) && $response_data->status == 1){
                    $data = $response_data->data;
                    $items = $response_data->data->product;
                    $dataAttribute = $response_data->data->attribute_set;
                    if (isset($items->status) && $items->status == 0){
                        return response()->json([
                            'status' => 0,
                            'message' => 'Hiện tại không có dữ liệu nào phù hợp với yêu cầu của bạn! Hệ thống cập nhật nick thường xuyên bạn vui lòng theo dõi web trong thời gian tới !',
                        ]);
                    }

                    $nick_total = 0;
                    if (isset($items->total)){
                        $nick_total = $items->total;
                    }

                    $items = new LengthAwarePaginator($items->data,$items->total,$items->per_page,$items->current_page,$items->data);

                    $items->setPath($request->url());

                    $balance = 0;

                    if (AuthCustom::check()){
                        $balance = AuthCustom::user()->balance;
                    }

                    $html = view('frontend.pages.account.widget.__datalist')
                        ->with('data',$data)
                        ->with('dataAttribute',$dataAttribute)
                        ->with('nick_total',$nick_total)
                        ->with('balance',$balance)
                        ->with('items',$items)->render();

                    if (count($items) == 0 && $page == 1){
                        return response()->json([
                            'status' => 0,
                            'message' => 'Hiện tại không có dữ liệu nào phù hợp với yêu cầu của bạn! Hệ thống cập nhật nick thường xuyên bạn vui lòng theo dõi web trong thời gian tới !',
                        ]);
                    }
                    return response()->json([
                        'status' => 1,
                        'data' => $html,
                        'nick_total' => $nick_total,
                        'message' => 'Load du lieu thanh cong.',
                        'last_page'=>$items->lastPage()
                    ]);
                }
                else{
                    return response()->json([
                        'status' => 0,
                        'message'=>$response_data->message??"Không thể lấy dữ liệu"
                    ]);
                }

        }
        $result_Api = DirectAPI::_makeRequest($url,$val,$method,false,0,1);
        $response_data = $result_Api->response_data??null;


        if(isset($response_data) && $response_data->status == 1){
            $dataAttribute = $response_data->data->attribute_set;
            return view('frontend.pages.account.list')
                    ->with('slug',$slug)
                    ->with('dataAttribute',$dataAttribute);

        } else{
            $data = null;
            return view('frontend.pages.account.list')
                ->with('data',$data);

        }


//        if(isset($response_data) && $response_data->status == 1 && isset($response_data->data)){
//            $data = $response_data->data->product;
//            $data_filter = $response_data->data;
//            $per_page = 0;
//            $total = 0;
//            if (isset($data->product->total)){
//                $total = $data->product->total;
//            }
//
//            if (isset($data->product->to)){
//                $per_page = $data->product->to;
//            }
//
//            $data = new LengthAwarePaginator($data->data, $data->total , $data->per_page, $data->current_page,$data->data);
//            $data->setPath($request->url());
//            return view('frontend.pages.account.list')->with('data',$data)->with('total',$total)->with('per_page',$per_page)->with('data_filter',$data_filter);
//        }
//        else{
//
//            $data = null;
//            $message = $response_cate_data->message??"Không thể lấy dữ liệu hoặc tài khoản không tồn tại.";
//
//            return view('frontend.pages.account.detail')
//                ->with('message',$message)
//                ->with('data',$data);
//
//        }

    }


    public function getDetail(Request $request,$slug){

        $url = '/get-product/'.$slug;
        $method = "GET";
        $val = array();
        $data = DirectAPI::_makeRequest($url,$val,$method,false,0,1);
        $response_data = $data->response_data;
        if(isset($response_data) && $response_data->status == 1 && isset($response_data->data)){
            $data = $response_data->data;
            $data_related = $response_data->product_relate;






            $attribute = array();
            if (isset($data->product_attribute) && count($data->product_attribute)>0){
                foreach ($data->product_attribute as $item){
                    $attribute[$item->attribute->id][$item->attribute->title][] = $item->product_attribute_value_able->title;
                }
            }




            return view('frontend.pages.account.detail')->with('data',$data)->with('data_related',$data_related)->with('attribute',$attribute);
        }
        else{

            $data = null;
            $message = $response_cate_data->message??"Không thể lấy dữ liệu hoặc tài khoản không tồn tại.";

            return view('frontend.pages.account.detail')
                ->with('message',$message)
                ->with('data',$data);

        }


    }

    public function getShowDetail(Request $request,$slug){

        if ($request->ajax()){

            $url = '/acc';
            $method = "GET";
            $dataSend = array();
            $dataSend['data'] = 'acc_detail';
            $dataSend['id'] = \App\Library\Helpers::decodeItemID($slug);

            $result_Api = DirectAPI::_makeRequest($url,$dataSend,$method);
            $response_data = $result_Api->response_data??null;

            if(isset($response_data) && $response_data->status == 1){
                $data = $response_data->data;

                $data_category = $data->category;
                $dataAttribute = $data_category->childs;
                $card_percent = (int)setting('sys_card_setting');

                $game_auto_props =null;

                if (isset($data->game_auto_props) && count($data->game_auto_props) > 0){
                    $game_auto_props = $data->game_auto_props;
                }

//                $atm_percent = setting('sys_atm_percent');
                $htmlmenu = view('frontend.pages.account.widget.__datamenu')
                    ->with('data',$data)->render();

                $html = view('frontend.pages.account.widget.__datadetail')
                    ->with('data_category',$data_category)
                    ->with('game_auto_props',$game_auto_props)
                    ->with('data',$data)
                    ->with('data',$data)
                    ->with('card_percent',$card_percent)->render();

                return response()->json([
                    'data' => $html,
                    'datamenu' => $htmlmenu,
                    'status' => 1,
                    'id' => encodeItemID($data->id),
                    'message' => 'Load dữ liệu thành công',
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

    public function getRelated(Request $request){
        if ($request->ajax()){
            $slug = $request->slug;
            $url = '/acc';
            $method = "GET";

            $dataSend = array();
            $dataSend['data'] = 'list_acc';
            $dataSend['cat_slug'] = $slug;
            $dataSend['status'] = 1;
            $dataSend['limit'] = 12;

            $result_Api = DirectAPI::_makeRequest($url,$dataSend,$method);
            $response_data = $result_Api->response_data??null;

            if(isset($response_data) && $response_data->status == 1){
                $data = $response_data->data;

                $data = new LengthAwarePaginator($data->data,$data->total,$data->per_page,$data->current_page,$data->data);

                $htmlslider = view('frontend.pages.account.widget.__related')
                    ->with('data',$data)->render();

                return response()->json([
                    'dataslider' => $htmlslider,
                    'status' => 1,
                    'message' => 'Load dữ liệu thành công',
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

    public function getBuyAccount(Request $request,$slug){
        if ($request->ajax()){
//            $slug = decodeItemID($slug);
            $id = $slug;

            $url = '/acc';
            $method = "GET";
            $dataSend = array();

            $dataSend['data'] = 'acc_detail';
            $dataSend['id'] = $id;

            $result_Api = DirectAPI::_makeRequest($url,$dataSend,$method);
            $response_data = $result_Api->response_data??null;

            if(isset($response_data) && $response_data->status == 1){

                $data = $response_data->data;

                if (!isset($data->parent_id) || !isset($data->price)){
                    return response()->json([
                        'status' => 0,
                        'message' => 'Không có dữ liệu parent_id hoặc price.',
                    ]);
                }

                $price = $data->price;

                if ($price <= 0){
                    return response()->json([
                        'status' => 0,
                        'message' => 'Số tiền không đúng.',
                    ]);
                }

                $dataSendcate = array();
                $dataSendcate['data'] = 'category_detail';
                $dataSendcate['id'] = $data->parent_id;

                $result_Api_cate = DirectAPI::_makeRequest($url,$dataSendcate,$method);
                $response_cate_data = $result_Api_cate->response_data??null;

                if(isset($response_cate_data) && $response_cate_data->status == 1){

                    $data_category = $response_cate_data->data;
                    if (!isset($data_category->childs)){
                        return response()->json([
                            'status' => 0,
                            'message' => 'Không có dữ liệu childs .',

                        ]);
                    }
                    $dataAttribute = $data_category->childs;

                    $balance = 0;

                    if (AuthCustom::check()){
                        $balance = AuthCustom::user()->balance;
                    }

                    $html =  view('frontend.pages.account.widget.__buyacc')
                        ->with('dataAttribute',$dataAttribute)
                        ->with('data_category',$data_category)
                        ->with('price',$price)
                        ->with('balance',$balance)
                        ->with('data',$data)->render();

                    return response()->json([
                        'data' => $html,
                        'price' => $price,
                        'id' => $id,
                        'balance' => $balance,
                        'status' => 1,
                    ]);
                }
                else{
                    return response()->json([
                        'status' => 0,
                        'message'=>$response_cate_data->message??"Không thể lấy dữ liệu"
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

    public function postBuyAccount(Request $request,$slug_category,$slug){

        if (AuthCustom::check()) {
            $url = '/acc';
            $method = "POST";
            $dataSend = array();
            $dataSend['id'] = $slug;
            $dataSend['data'] = 'buy_acc';
            $dataSend['user_id'] = AuthCustom::user()->id;

            $result_Api = DirectAPI::_makeRequest($url,$dataSend,$method);
            $response_data = $result_Api->response_data??null;

            if(isset($response_data) && $response_data->status == 1){

                $data = $response_data->data;

                if (isset($data->success)){
                    if ($data->success == 0){
                        return response()->json([
                            'status' => 2,
                            'message' => $data->message,
                        ]);
                    }elseif ($data->success == 1 ){
                        return response()->json([
                            'status' => 1,
                            'message' => "Mua tài khoản thành công",
                        ]);
//                        return redirect()->route('getBuyAccountHistory')->with('content', 'Mua tài khoản thành công');
                    }
                }elseif (isset($data->error)){
                    return response()->json([
                        'status' => 0,
                        'message' => $data->error,
                    ]);
                }else{
                    return response()->json([
                        'status' => 0,
                        'message' => 'Dữ liệu trả về không đúng.',
                    ]);
                }
            }
            else{
                return response()->json([
                    'status' => 0,
                    'message'=>$response_data->message??"Không thể lấy dữ liệu"
                ]);
            }
        }else{
            return redirect('/login');
        }
    }

    public function getLogs(Request $request)
    {
        if (AuthCustom::check()) {

            $url = '/acc';
            $method = "GET";

            if ($request->ajax()) {
                $page = $request->page;
                $time = null;
                $dataAttribute = null;

                $datashow = null;
                $slugen = null;
                $count = 0;
                $dataSend = array();
                $dataSend['page'] = $page;
                $dataSend['data'] = 'list_acc';
                $dataSend['sort'] = 'desc';
                $dataSend['sort_by'] = 'published_at';
                $dataSend['limit'] = 10;
                $dataSend['user_id'] = AuthCustom::user()->id;

                $chitiet_data = 0;
                $id_data = null;

                if (isset($request->chitiet_data) || $request->chitiet_data != '' || $request->chitiet_data != null) {
                    if (isset($request->id_data) || $request->id_data != '' || $request->id_data != null) {
                        $chitiet_data = $request->chitiet_data;
                        $id_data = $request->id_data;
                    }

                }

                $dataSend['id'] = $request->serial;
                $dataSend['cat_slug'] = $request->key;
                $dataSend['status'] = $request->status;
                $dataSend['price'] = $request->price;

                if ($request->filled('started_at')) {
                    $started_at = \Carbon\Carbon::parse($request->started_at)->format('Y-m-d H:i:s');
                    $dataSend['started_at'] = $started_at;
                }

                if ($request->filled('ended_at')) {
                    $ended_at = \Carbon\Carbon::parse($request->ended_at)->format('Y-m-d H:i:s');
                    $dataSend['ended_at'] = $ended_at;
                }

                if (isset($request->sort_by_data) || $request->sort_by_data != '' || $request->sort_by_data != null){
                    $sort_by = $request->sort_by_data;
                    if ($sort_by == "random"){
                        $dataSend['sort'] = 'random';
                    }elseif ($sort_by == "price_start"){
                        $dataSend['sort_by'] = 'price';
                        $dataSend['sort'] = 'desc';
                    }elseif ($sort_by == "price_end"){
                        $dataSend['sort_by'] = 'price';
                        $dataSend['sort'] = 'asc';
                    }elseif ($sort_by == "created_at_start"){
                        $dataSend['sort_by'] = 'created_at';
                        $dataSend['sort'] = 'desc';
                    }elseif ($sort_by == "created_at_end"){
                        $dataSend['sort_by'] = 'created_at';
                        $dataSend['sort'] = 'asc';
                    }elseif ($sort_by == "published_at"){
                        $dataSend['sort_by'] = 'published_at';
                        $dataSend['sort'] = 'desc';
                    }
                }

                $result_Api = DirectAPI::_makeRequest($url, $dataSend, $method);

                $response_data = $result_Api->response_data??null;

                if(isset($response_data) && $response_data->status == 1){

                    $data = $response_data->data;

                    $key = null;
                    if (isset($request->chitiet_data) || $request->chitiet_data != '' || $request->chitiet_data != null) {
                        if (isset($request->id_data) || $request->id_data != '' || $request->id_data != null) {
                            $dataSendShow =array();
                            $dataSendShow['data'] = 'acc_detail';
                            $dataSendShow['id'] = $id_data;

                            $result_show_api = DirectAPI::_makeRequest($url,$dataSendShow,$method);
                            $response_show_data = $result_show_api->response_data??null;

                            if(isset($response_show_data) && $response_show_data->status == 1){

                                $datashow = $response_show_data->data;

                                if (isset($datashow->params) && isset($datashow->params->show_password)){
                                    $params = $datashow->params->show_password;

                                    foreach($params as $keys => $param){
                                        if ($keys == 'time'){
                                            $time = $param;
                                        }
                                    }
                                }

                                $slugen = $datashow->slug;

                                if (isset($time) && $time != null){
                                    $key = Helpers::Decrypt($datashow->slug,config('module.acc.encrypt_key'));
                                }

                                if (!isset($datashow->groups[1]) || !isset($datashow->groups[1]->id)){
                                    return response()->json([
                                        'status' => 0,
                                        'message' => 'Không có dữ liệu groups.',
                                    ]);
                                }

                                $dataSendCategory = array();
                                $dataSendCategory['data'] = 'category_detail';
                                $dataSendCategory['id'] = $datashow->groups[1]->id;

                                $result_category_Api = DirectAPI::_makeRequest($url,$dataSendCategory,$method);
                                $response_category_data = $result_category_Api->response_data??null;

                                if(isset($response_category_data) && $response_category_data->status == 1){

                                    $data_category = $response_category_data->data;

                                    if (!isset($data_category->childs)){
                                        return response()->json([
                                            'status' => 0,
                                            'message' => 'Không có dữ liệu childs.',
                                        ]);
                                    }

                                    $dataAttribute = $data_category->childs;

                                    if (isset($dataAttribute)){
                                        $count = count($dataAttribute);
                                    }
                                }
                                else{
                                    return response()->json([
                                        'status' => 0,
                                        'message'=>$response_category_data->message??"Không thể lấy dữ liệu"
                                    ]);
                                }
                            }
                            else{
                                return response()->json([
                                    'status' => 0,
                                    'message'=>$response_show_data->message??"Không thể lấy dữ liệu"
                                ]);
                            }
                        }
                    }

                    if (isEmpty($data->data)) {
                        $data = new LengthAwarePaginator($data->data, $data->total, $data->per_page, $page, $data->data);
                        $data->setPath($request->url());
                    }else{
                        return response()->json([
                            'status' => 0,
                            'message' => 'Không có dữ liệu data.',
                        ]);
                    }

                    $html = view('frontend.pages.account.widget.__datalogs')
                        ->with('data', $data)->render();

                    if (count($data) == 0 && $page == 1){
                        return response()->json([
                            'status' => 0,
                            'message' => 'Không có dữ liệu !',
                        ]);
                    }


                    return response()->json([
                        "success"=> true,
                        "html" => $html,
                        "status" => 1,
                        "time" => $time,
                        "dataAttribute" => $dataAttribute,
                        "chitiet_data" => $chitiet_data,
                        "id_data" => $id_data,
                        "datashow" => $datashow,
                        "key" => $key,
                        "slugen" => $slugen,
                        "count" => $count
                    ], 200);

                }
                else{
                    return response()->json([
                        'status' => 0,
                        'message'=>$response_data->message??"Không thể lấy dữ liệu"
                    ]);
                }
            }

            $dataSendCate = array();
            $dataSendCate['data'] = 'category_list';
            $dataSendCate['module'] = 'acc_category';
            $result_cate_api = DirectAPI::_makeRequest($url,$dataSendCate,$method);
            $response_cate_data = $result_cate_api->response_data??null;

            if(isset($response_cate_data) && $response_cate_data->status == 1){

                $datacategory = $response_cate_data->data;

            }
            else{
                return response()->json([
                    'status' => 0,
                    'message'=>$response_cate_data->message??"Không thể lấy dữ liệu"
                ]);
            }

            return view('frontend.pages.account.logs')->with('datacategory',$datacategory);
        }else{
            return redirect('/login');
        }
    }

    public function getLogsCustom(Request $request)
    {
        if (AuthCustom::check()) {
            $url = '/acc';
            $method = "GET";

            if ($request->ajax()) {
                $page = $request->page;
                $dataSend = array();
                $dataSend['page'] = $page;
                $dataSend['data'] = 'list_acc';
                $dataSend['sort'] = 'desc';
                $dataSend['sort_by'] = 'published_at';
                $dataSend['limit'] = 10;
                $dataSend['user_id'] = AuthCustom::user()->id;
                $dataSend['id'] = $request->serial;
                $dataSend['cat_slug'] = $request->key;
                $dataSend['status'] = $request->status;
                $dataSend['price'] = $request->price;

                if ($request->filled('started_at')) {
                    $started_at = \Carbon\Carbon::parse($request->started_at)->format('Y-m-d H:i:s');
                    $dataSend['started_at'] = $started_at;
                }

                if ($request->filled('ended_at')) {
                    $ended_at = \Carbon\Carbon::parse($request->ended_at)->format('Y-m-d H:i:s');
                    $dataSend['ended_at'] = $ended_at;
                }

                if ($request->has('sort_by_data')){
                    switch ($request->sort_by_data){
                        case "random":
                            $dataSend['sort'] = 'random';
                            break;
                        case "price_start":
                            $dataSend['sort_by'] = 'price';
                            $dataSend['sort'] = 'desc';
                            break;
                        case "price_end":
                            $dataSend['sort_by'] = 'price';
                            $dataSend['sort'] = 'asc';
                            break;
                        case "created_at_start":
                            $dataSend['sort_by'] = 'created_at';
                            $dataSend['sort'] = 'desc';
                            break;
                        case "created_at_end":
                            $dataSend['sort_by'] = 'created_at';
                            $dataSend['sort'] = 'asc';
                            break;
                        case "published_at":
                            $dataSend['sort_by'] = 'published_at';
                            $dataSend['sort'] = 'desc';
                            break;
                    }
                }

                $result_Api = DirectAPI::_makeRequest($url, $dataSend, $method);
                $response_data = $result_Api->response_data??null;
                $data = $response_data->data;

                if($response_data->status){

                    if (!!$data->total) {
                        $data = new LengthAwarePaginator($data->data, $data->total, $data->per_page, $page, $data->data);
                        $data->setPath($request->url());
                    }else {
                        return response()->json([
                            'status' => 0,
                            'message' => 'Không có dữ liệu data.',
                        ]);
                    }

                    $html = view('frontend.pages.account.widget.__datalogs__custom')->with('data', $data)->render();

                    if (count($data) == 0 && $page == 1){
                        return response()->json([
                            'status' => 0,
                            'message' => 'Không có dữ liệu !',
                        ]);
                    }

                    if ($page > $data->lastPage()) {
                        return response()->json([
                            'status' => 404,
                            'message'=>'Trang này không tồn tại',
                        ]);
                    }

                    return response()->json([
                        "html" => $html,
                        "status" => 1,
                        "last_page"=>$data->lastPage(),
                    ], 200);

                }
                else{
                    return response()->json([
                        'status' => 0,
                        'message'=>$response_data->message??"Không thể lấy dữ liệu",
                    ]);
                }
            }

            $dataSendCate = array();
            $dataSendCate['data'] = 'category_list';
            $dataSendCate['module'] = 'acc_category';
            $result_cate_api = DirectAPI::_makeRequest($url,$dataSendCate,$method);
            $response_cate_data = $result_cate_api->response_data??null;

            if(isset($response_cate_data) && $response_cate_data->status == 1){
                $datacategory = $response_cate_data->data;
            }
            else{
                return response()->json([
                    'status' => 0,
                    'message'=>$response_cate_data->message??"Không thể lấy dữ liệu"
                ]);
            }
            return view('frontend.pages.account.logs-custom')->with('datacategory',$datacategory);
        }else{
            return redirect('/login');
        }
    }

    public function getLogsCustomDetails(Request $request,$id){

        if (AuthCustom::check()) {
            $url = '/acc';
            $method = "GET";
            $dataSend = array();
            $dataSend['data'] = 'list_acc';
            $dataSend['user_id'] = AuthCustom::user()->id;
            $dataSend['id'] = $id;

            $result_Api = DirectAPI::_makeRequest($url, $dataSend, $method);
            $response_data = $result_Api->response_data??null;


            if(isset($response_data) && $response_data->status == 1){
                if (isset($response_data->data)){
                    $data = $response_data->data;
                    if (isset($data->data) && count($data->data) > 0){
                        $item = $data->data[0];

                        $dataSendCategory = array();
                        $dataSendCategory['data'] = 'category_detail';
                        $dataSendCategory['id'] = $item->groups[1]->id;

                        $result_category_Api = DirectAPI::_makeRequest($url,$dataSendCategory,$method);
                        $response_category_data = $result_category_Api->response_data??null;

                        if(isset($response_category_data) && $response_category_data->status == 1){

                            $data_category = $response_category_data->data;

                            if (!isset($data_category->childs)){
                                return response()->json([
                                    'status' => 0,
                                    'message' => 'Không có dữ liệu childs.',
                                ]);
                            }

                            $dataAttribute = $data_category->childs;

                            if (isset($dataAttribute)){
                                $count = count($dataAttribute);
                            }

                            $checkpass = false;
                            $time = null;
                            if (isset($item->params)){
                                if (isset($item->params->show_password)){
                                    $checkpass = true;
                                    foreach($item->params->show_password as $keys => $param){
                                        if ($keys == 'time'){
                                            $time = $param;
                                        }
                                    }
                                }
                            }

                            return view('frontend.pages.account.logsdetail')->with('item',$item)->with('dataAttribute',$dataAttribute)->with('checkpass',$checkpass)->with('time',$time);
                        }
                        else{
                            return response()->json([
                                'status' => 0,
                                'message'=>$response_category_data->message??"Không thể lấy dữ liệu"
                            ]);
                        }
                    }else{
                        return response()->json([
                            'status' => 0,
                            'message'=>$response_data->message??"Không thể lấy dữ liệu",
                        ]);
                    }
                }else{
                    return response()->json([
                        'status' => 0,
                        'message'=>$response_data->message??"Không thể lấy dữ liệu",
                    ]);
                }

            }else{
                return response()->json([
                    'status' => 0,
                    'message'=>$response_data->message??"Không thể lấy dữ liệu",
                ]);
            }

        }else{
            return redirect('/login');
        }

    }

    public function getShowpass(Request $request){

        if (AuthCustom::check()) {
            if ($request->ajax()) {
                $id = $request->get('id');
                $slug = $request->get('slug');
                $url = '/acc';
                $method = "GET";
                $dataSend = array();
                $dataSend['id'] = $id;
                $dataSend['data'] = 'show_password';
                $dataSend['user_id'] = AuthCustom::user()->id;

                $result_Api = DirectAPI::_makeRequest($url, $dataSend, $method);
                $response_data = $result_Api->response_data??null;

                if(isset($response_data) && $response_data->status == 1){

                    $data = $response_data->data;

                    if ($data->success == 1){
                        $key = Helpers::Decrypt($slug,config('module.acc.encrypt_key'));
                        $time = date('Y-m-d H:i:s');
                        return response()->json([
                            'status' => 1,
                            'message' => 'Lấy mật khẩu thành công',
                            'data'=>$data,
                            'time'=>$time,
                            'key'=>$key,
                        ]);
                    }else{
                        return response()->json([
                            'status' => 0,
                            'message' => 'Đã lấy mật khẩu trước đó',
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
        }else{
            return redirect('/login');
        }
    }

    public function getShowpassNick(Request $request,$id){
        if (AuthCustom::check()) {
            if ($request->ajax()) {
                $url = '/acc';
                $method = "GET";
                $dataSend = array();
                $dataSend['id'] = $id;
                $dataSend['data'] = 'show_password';
                $dataSend['user_id'] = AuthCustom::user()->id;

                $result_Api = DirectAPI::_makeRequest($url, $dataSend, $method);
                $response_data = $result_Api->response_data??null;

                if(isset($response_data) && $response_data->status == 1){

                    $data = $response_data->data;

                    if ($data->success == 1){
                        return response()->json([
                            'status' => 1,
                            'message' => 'Lấy mật khẩu thành công',
                        ]);
                    }else{
                        return response()->json([
                            'status' => 0,
                            'message' => $data->message,
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
        }else {
            return redirect('/login');
        }

    }

    public function getFirstPass(Request $request)
    {
        if (AuthCustom::check()){
            if ($request->ajax()){
                $id = $request->id;
                $url = '/acc';
                $method = "GET";
                $dataSend = array();
                $dataSend['id'] = $id;
                $dataSend['data'] = 'show_password';
                $dataSend['user_id'] = AuthCustom::user()->id;

                $result_Api = DirectAPI::_makeRequest($url, $dataSend, $method);
                $response_data = $result_Api->response_data??null;

                if ($response_data->data->success){
                    $data_send_detail = array();
                    $data_send_detail['data'] = 'acc_detail';
                    $data_send_detail['id'] = $id;
                    $result_detail_api = DirectAPI::_makeRequest($url,$data_send_detail,$method);
                    if ($result_detail_api->response_code == 200){
                        $data = $result_detail_api->response_data->data;
                        return response()->json([
                            'status' => 1,
                            'message' => 'Lấy mật khẩu thành công',
                            'time'=>$data->params->show_password->time,
                            'id'=>$id,
                            'key'=>Helpers::Decrypt($data->slug,config('module.acc.encrypt_key')),
                        ]);
                    }
                } else {
                    return response()->json([
                        'status' => 0,
                        'message' => 'Đã lấy mật khẩu trước đó',
                    ]);
                }
            }
        }else {
            return redirect('/login');
        }
    }

    public function getShowAccRandom(Request $request){

        if ($request->ajax()){

            $url = '/acc';
            $method = "GET";
            $dataSend = array();
            $dataSend['data'] = 'category_list_random';
            $dataSend['module'] = 'acc_category';
            if (theme('')->theme_key == "theme_3"){
                $dataSend['limit_item'] =  4;
            }

            $result_Api = DirectAPI::_makeRequest($url,$dataSend,$method);
            $response_data = $result_Api->response_data??null;

            if(isset($response_data) && $response_data->status == 1){
                $data = $response_data->data;

                $html = view(''.theme('')->theme_key.'.frontend.widget.__data__nick__random')
                    ->with('data',$data)->render();

                return response()->json([
                    'data' => $html,
                    'status' => 1,
                    'message' => 'Load dữ liệu thành công',
                ]);
            }else{
                return response()->json([
                    'status' => 0,
                    'message'=>$response_data->message??"Không thể lấy dữ liệu"
                ]);
            }
        }



    }
}
