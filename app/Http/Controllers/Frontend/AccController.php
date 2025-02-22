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

            Session::forget('return_url');
            Session::get('auth_custom');
            Session::put('return_url', $_SERVER['REQUEST_URI']);
            return view('frontend.pages.account.category')
                ->with('data',$data);
        }
        else{

            $data = null;
            $message = $response_data->message??"Không thể lấy dữ liệu";
            Session::forget('return_url');
            Session::get('auth_custom');
            Session::put('return_url', $_SERVER['REQUEST_URI']);
            return view('frontend.pages.account.category')
                ->with('message',$message)
                ->with('data',$data);
        }
    }

    public function getList(Request $request,$slug){

        $url = '/acc';
        $method = "GET";
        $dataSendCate = array();
        $dataSendCate['data'] = 'category_detail';
        $dataSendCate['slug'] = $slug;
        $result_Api_cate = DirectAPI::_makeRequest($url,$dataSendCate,$method);
        $response_cate_data = $result_Api_cate->response_data??null;

        if ($request->ajax()){
            $page = $request->page;

            if(isset($response_cate_data) && $response_cate_data->status == 1){
                $data = $response_cate_data->data;
                $dataAttribute = $data->childs;

                $dataSend = array();
                $dataSend['data'] = 'list_acc';
                $dataSend['cat_slug'] = $slug;
                $dataSend['page'] = $page;
                $dataSend['status'] = 1;
                $dataSend['limit'] = 12;

                if (isset($request->id_data) || $request->id_data != '' || $request->id_data != null){
                    $dataSend['id'] = $request->id_data;
                }

                if (isset($request->title_data) || $request->title_data != '' || $request->title_data != null){
                    $dataSend['title'] = $request->title_data;
                }

                if (isset($request->price_data) || $request->price_data != '' || $request->price_data != null){
                    $dataSend['price'] = $request->price_data;
                }

                if (isset($request->status_data) || $request->status_data != '' || $request->status_data != null){
                    $dataSend['status'] = $request->status_data;
                }

                if (isset($request->select_data) || $request->select_data != '' || $request->select_data != null){
                    $select_data = $request->select_data;
                    $group_ids = array();
                    foreach(explode('|',$select_data) as $v){
                        if ($v == "" || $v == null){


                        }else{
                            array_push($group_ids,$v);
                        }

                    }
                    $dataSend['group_ids'] = $group_ids;
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
                    }
                }

                $result_Api = DirectAPI::_makeRequest($url,$dataSend,$method);
                $response_data = $result_Api->response_data??null;

                if(isset($response_data) && $response_data->status == 1){

                    $items = $response_data->data;

                    if (isset($items->status) && $items->status == 0){
                        return response()->json([
                            'status' => 0,
                            'message' => 'Hiện tại không có dữ liệu nào phù hợp với yêu cầu của bạn! Hệ thống cập nhật nick thường xuyên bạn vui lòng theo dõi web trong thời gian tới !',
                        ]);
                    }

                    $items = new LengthAwarePaginator($items->data,$items->total,$items->per_page,$items->current_page,$items->data);
                    $items->setPath($request->url());

                    $balance = 0;

                    if (AuthCustom::check()){
                        $balance = AuthCustom::user()->balance;
                    }

                    $html =  view('frontend.pages.account.widget.__datalist')
                        ->with('data',$data)
                        ->with('balance',$balance)
                        ->with('dataAttribute',$dataAttribute)
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
            else{
                return response()->json([
                    'status' => 0,
                    'message'=>$response_cate_data->message??"Không thể lấy dữ liệu"
                ]);
            }
        }

        if(isset($response_cate_data) && $response_cate_data->status == 1){

            $data = $response_cate_data->data;

            $dataAttribute = $data->childs;

            if (!isset($dataAttribute)){
                return response()->json([
                    'status' => 0,
                    'message' => 'Không lấy được dữ liệu childs.',
                ]);
            }
//                return $data;
            if (!isset($data->title)){

                $data = null;
                $message = "Không thấy tiêu đề";

                return view('frontend.pages.account.list')
                    ->with('message',$message)
                    ->with('data',$data);
            }

            Session::forget('return_url');
            Session::get('auth_custom');
            Session::put('return_url', $_SERVER['REQUEST_URI']);

            return view('frontend.pages.account.list')
                ->with('data',$data)
                ->with('dataAttribute',$dataAttribute)
                ->with('slug',$slug);
        }
        else{
            $data = null;
            $message = $response_cate_data->message??"Không thể lấy dữ liệu";

            return view('frontend.pages.account.list')
                ->with('message',$message)
                ->with('data',$data);
        }
    }

    public function getDetail(Request $request,$slug){
        $url = '/acc';
        $method = "GET";
        $dataSend = array();
        $dataSend['data'] = 'acc_detail';
        $dataSend['id'] = $slug;

        $result_Api = DirectAPI::_makeRequest($url,$dataSend,$method);
        $response_data = $result_Api->response_data??null;

//        return $result_Api;
        if(isset($response_data) && $response_data->status == 1){
            $data = $response_data->data;
            return view('frontend.pages.account.detail')->with('data',$data)->with('slug',$slug);
        }
        else{
            $data = null;
            $message = $response_cate_data->message??"Không thể lấy dữ liệu";

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
            $dataSend['id'] = $slug;

            $result_Api = DirectAPI::_makeRequest($url,$dataSend,$method);
            $response_data = $result_Api->response_data??null;

            if(isset($response_data) && $response_data->status == 1){
                $data = $response_data->data;
                $data_category = $data->category;

                $card_percent = setting('sys_card_percent');
                $atm_percent = setting('sys_atm_percent');
                $htmlmenu = view('frontend.pages.account.widget.__datamenu')
                    ->with('data',$data)->render();


                $html = view('frontend.pages.account.widget.__datadetail')
                    ->with('data_category',$data_category)
                    ->with('data',$data)
                    ->with('card_percent',$card_percent)
                    ->with('atm_percent',$atm_percent)->render();

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
            $url = '/get-relate-acc';
            $method = "GET";

            $dataSend = array();
            $dataSend['id'] = $slug;
            $dataSend['limit'] = 12;
            $dataSend['status'] = 1;

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
                            'key'=>$key
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

}
