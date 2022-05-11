<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Library\AuthCustom;
use App\Library\DirectAPI;
use App\Library\Helpers;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Session;
use function PHPUnit\Framework\isEmpty;

class AccController extends Controller
{
    public function getShowDanhmucCategory(Request $request){

        $url = '/acc';
        $method = "GET";
        $val = array();
        $val['data'] = 'category_list';
        $val['module'] = 'acc_category';
        $result_Api = DirectAPI::_makeRequest($url,$val,$method);

        if(isset($result_Api)){
            if( $result_Api->httpcode == 200){
                $data = $result_Api->data;

                Session::forget('return_url');
                Session::put('return_url', $_SERVER['REQUEST_URI']);
                return view('frontend.pages.account.getShowCategory')
                    ->with('data',$data);
            }
            else if($result_Api->httpcode == 401){
                $data = null;
                $message = "unauthencation";
                Session::forget('return_url');
                Session::put('return_url', $_SERVER['REQUEST_URI']);
                return view('frontend.pages.account.getShowCategory')
                    ->with('message',$message)
                    ->with('data',$data);
            }
            else if($result_Api->httpcode == 408){

                $data = null;
                $message = "Không có phản hồi từ máy chủ (408)";
                Session::forget('return_url');
                Session::put('return_url', $_SERVER['REQUEST_URI']);
                return view('frontend.pages.account.getShowCategory')
                    ->with('message',$message)
                    ->with('data',$data);
            }
            else{

                $data = null;
                $message = "Không có phản hồi từ máy chủ ('.$result_Api->httpcode.')";
                Session::forget('return_url');
                Session::put('return_url', $_SERVER['REQUEST_URI']);
                return view('frontend.pages.account.getShowCategory')
                    ->with('message',$message)
                    ->with('data',$data);
            }

        }
        else{

            $data = null;
            $message = "Lỗi không gọi được dữ liệu hệ thống";
            Session::forget('return_url');
            Session::put('return_url', $_SERVER['REQUEST_URI']);
            return view('frontend.pages.account.getShowCategory')
                ->with('message',$message)
                ->with('data',$data);

        }
    }

    public function getShowCategory(Request $request,$slug){
        $url = '/acc';
        $method = "GET";

        $valcategory = array();
        $valcategory['data'] = 'category_detail';
        $valcategory['slug'] = $slug;

        $result_Api_category = DirectAPI::_makeRequest($url,$valcategory,$method);

        if(isset($result_Api_category)){
            if( $result_Api_category->httpcode == 200 && $result_Api_category->data){

                $data = $result_Api_category->data;

                if (!isset($data->title)){

                    $data = null;
                    $message = "Không thấy tiêu đề";

                    return view('frontend.pages.account.accountList')
                        ->with('message',$message)
                        ->with('data',$data);
                }

                Session::forget('path');
                Session::put('path', $_SERVER['REQUEST_URI']);

                if ($request->ajax()){
                    $page = $request->page;

                    $url = '/acc';
                    $method = "GET";
                    $val = array();
                    $valcategory = array();

                    $valcategory['data'] = 'category_detail';
                    $valcategory['slug'] = $slug;

                    $result_Api_category = DirectAPI::_makeRequest($url,$valcategory,$method);

                    if(isset($result_Api_category) ){

                        if( $result_Api_category->httpcode == 200 && isset($result_Api_category->data)){
                            $data = $result_Api_category->data;

                            $val['data'] = 'list_acc';
                            $val['cat_slug'] = $slug;
                            $val['page'] = $page;
                            $val['status'] = 1;
                            $val['limit'] = 12;

                            if (isset($request->id_data) || $request->id_data != '' || $request->id_data != null){
//                        $checkid = decodeItemID($request->id_data);
                                $val['id'] = $request->id_data;
                            }

                            if (isset($request->title_data) || $request->title_data != '' || $request->title_data != null){
                                $val['title'] = $request->title_data;
                            }

                            if (isset($request->price_data) || $request->price_data != '' || $request->price_data != null){
                                $val['price'] = $request->price_data;
                            }

                            if (isset($request->status_data) || $request->status_data != '' || $request->status_data != null){
                                $val['status'] = $request->status_data;
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
                                $val['group_ids'] = $group_ids;
                            }

                            if (isset($request->sort_by_data) || $request->sort_by_data != '' || $request->sort_by_data != null){
                                $sort_by = $request->sort_by_data;
                                if ($sort_by == "random"){
                                    $val['sort'] = 'random';
                                }elseif ($sort_by == "price_start"){
                                    $val['sort_by'] = 'price';
                                    $val['sort'] = 'desc';
                                }elseif ($sort_by == "price_end"){
                                    $val['sort_by'] = 'price';
                                    $val['sort'] = 'asc';
                                }elseif ($sort_by == "created_at_start"){
                                    $val['sort_by'] = 'created_at';
                                    $val['sort'] = 'desc';
                                }elseif ($sort_by == "created_at_end"){
                                    $val['sort_by'] = 'created_at';
                                    $val['sort'] = 'asc';
                                }
                            }

                            $result_Api = DirectAPI::_makeRequest($url,$val,$method);

                            if(isset($result_Api)){

                                if( $result_Api->httpcode == 200 && isset($result_Api->data)){
                                    $items = $result_Api->data;

                                    $items = new LengthAwarePaginator($items->data,$items->total,$items->per_page,$items->current_page,$items->data);
                                    $items->setPath($request->url());

                                    $dataAttribute = $data->childs;

                                    if (!isset($dataAttribute)){
                                        return response()->json([
                                            'status' => 0,
                                            'message' => 'Không lấy được dữ liệu childs.',
                                        ]);
                                    }

                                    $htmlatr =  view('frontend.pages.account.widget.account_load_attribute_to_filter')
                                        ->with('dataAttribute',$dataAttribute)->render();

                                    $htmlatrmobile =  view('frontend.pages.account.widget.account_load_attribute_to_filter_mobile')
                                        ->with('dataAttribute',$dataAttribute)->render();

                                    $html =  view('frontend.pages.account.function.__account__data')
                                        ->with('data',$data)
                                        ->with('items',$items)
                                        ->with('dataAttribute',$dataAttribute)->render();

                                    if (count($items) == 0 && $page == 1){
                                        return response()->json([
                                            'status' => 0,
                                            'message' => 'Hiện tại không có dữ liệu nào phù hợp với yêu cầu của bạn! Hệ thống cập nhật nick thường xuyên bạn vui lòng theo dõi web trong thời gian tới !',
                                        ]);
                                    }

                                    return response()->json([
                                        'status' => 1,
                                        'data' => $html,
                                        'htmlatr' => $htmlatr,
                                        'htmlatrmobile' => $htmlatrmobile,
                                        'message' => 'Load du lieu thanh cong.',
                                    ]);
                                }
                                else if($result_Api->httpcode == 401){
                                    return response()->json([
                                        'status' => 0,
                                        'message'=>"unauthencation (401)"
                                    ]);
                                }
                                else if($result_Api->httpcode == 408){
                                    return response()->json([
                                        'status' => 0,
                                        'message'=>"Không có phản hồi từ máy chủ (408)"
                                    ]);
                                }
                                else{
                                    return response()->json([
                                        'status' => 0,
                                        'message'=>"Không có phản hồi từ máy chủ ('.$result_Api->httpcode.')"
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
                        else if($result_Api_category->httpcode == 401){
                            return response()->json([
                                'status' => 0,
                                'message'=>"unauthencation (401)"
                            ]);
                        }
                        else if($result_Api_category->httpcode == 408){
                            return response()->json([
                                'status' => 0,
                                'message'=>"Không có phản hồi từ máy chủ (408)"
                            ]);
                        }
                        else{
                            return response()->json([
                                'status' => 0,
                                'message'=>"Không có phản hồi từ máy chủ ('.$result_Api_category->httpcode.')"
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

                return view('frontend.pages.account.accountList')
                    ->with('data',$data)
                    ->with('slug',$slug);
            }
            else if($result_Api_category->httpcode == 401){
                $data = null;
                $message = "unauthencation";

                return view('frontend.pages.account.accountList')
                    ->with('message',$message)
                    ->with('data',$data);
            }
            else if($result_Api_category->httpcode == 408){

                $data = null;
                $message = "Không có phản hồi từ máy chủ (408)";

                return view('frontend.pages.account.accountList')
                    ->with('message',$message)
                    ->with('data',$data);
            }
            else{

                $data = null;
                $message = "Không có phản hồi từ máy chủ ('.$result_Api_category->httpcode.')";

                return view('frontend.pages.account.accountList')
                    ->with('message',$message)
                    ->with('data',$data);
            }

        }
        else{

            $message = "Lỗi không gọi được dữ liệu hệ thống";
            $data = null;

            return view('frontend.pages.account.accountList')
                ->with('message',$message)
                ->with('data',$data);
        }
    }

    public function getShowAccDetail(Request $request,$slug){

        Session::put('path', $_SERVER['REQUEST_URI']);
        return view('frontend.pages.account.show')
            ->with('slug',$slug);
    }

    public function getShowAccDetailData(Request $request,$slug){
        if ($request->ajax()){
            $url = '/acc';
            $method = "GET";
            $val = array();
            $val['data'] = 'acc_detail';
            $val['id'] = $slug;

            $result_Api = DirectAPI::_makeRequest($url,$val,$method);
            if(isset($result_Api)){
                if( $result_Api->httpcode == 200 && isset($result_Api->data)){
                    $data = $result_Api->data;
                    if (!isset($data->groups[1]) || !isset($data->groups[1]->id)){
                        return response()->json([
                            'status' => 0,
                            'message' => 'Không có dữ liệu groups.',
                        ]);
                    }

                    $valcategory = array();
                    $valcategory['data'] = 'category_detail';
                    $valcategory['id'] = $data->groups[1]->id;

                    $result_Api_category = DirectAPI::_makeRequest($url,$valcategory,$method);

                    if(isset($result_Api_category) ){

                        if( $result_Api_category->httpcode == 200 && isset($result_Api_category->data)){

                            $data_category = $result_Api_category->data;


                            if (!isset($data_category->childs) || !isset($data_category->slug)){
                                return response()->json([
                                    'status' => 0,
                                    'message' => 'Không có dữ liệu childs hoặc slug.',
                                ]);
                            }

                            $dataAttribute = $data_category->childs;

                            $valslider = array();
                            $valslider['data'] = 'list_acc';
                            $valslider['cat_slug'] = $data_category->slug;
                            $valslider['limit'] = 12;
                            $valslider['status'] = 1;

                            $result_Api_slider = DirectAPI::_makeRequest($url,$valslider,$method);

                            if(isset($result_Api_slider) ){

                                if( $result_Api_slider->httpcode == 200 && isset($result_Api_slider->data)){
                                    $sliders = $result_Api_slider->data;

                                    $sliders = new LengthAwarePaginator($sliders->data,$sliders->total,$sliders->per_page,$sliders->current_page,$sliders->data);

                                    $card_percent = setting('sys_card_percent');
                                    $atm_percent = setting('sys_atm_percent');

                                    $htmlmenu = view('frontend.pages.account.function.__data__menu__buyacc')
                                        ->with('data_category',$data_category)->render();

                                    $html = view('frontend.pages.account.function.__show__detail__acc')
                                        ->with('data_category',$data_category)
                                        ->with('data',$data)
                                        ->with('card_percent',$card_percent)
                                        ->with('atm_percent',$atm_percent)
                                        ->with('dataAttribute',$dataAttribute)->render();

                                    $htmlslider = view('frontend.pages.account.function.__show__slider__acc')
                                        ->with('data_category',$data_category)
                                        ->with('data',$data)
                                        ->with('sliders',$sliders)
                                        ->with('dataAttribute',$dataAttribute)->render();

                                    return response()->json([
                                        'data' => $html,
                                        'dataslider' => $htmlslider,
                                        'datamenu' => $htmlmenu,
                                        'status' => 1,
                                        'message' => 'Load dữ liệu thành công',
                                    ]);
                                }
                                else if($result_Api->httpcode == 401){
                                    session()->flush();
                                    return response()->json([
                                        'status' => 0,
                                        'message'=>"unauthencation (401)"
                                    ]);
                                }
                                else if($result_Api->httpcode == 408){
                                    return response()->json([
                                        'status' => 0,
                                        'message'=>"Không có phản hồi từ máy chủ (408)"
                                    ]);
                                }
                                else{
                                    return response()->json([
                                        'status' => 0,
                                        'message'=>"Không có phản hồi từ máy chủ ('.$result_Api_slider->httpcode.')"
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
                        else if($result_Api_category->httpcode == 401){

                            return response()->json([
                                'status' => 0,
                                'message'=>"unauthencation (401)"
                            ]);
                        }
                        else if($result_Api_category->httpcode == 408){
                            return response()->json([
                                'status' => 0,
                                'message'=>"Không có phản hồi từ máy chủ (408)"
                            ]);
                        }
                        else{
                            return response()->json([
                                'status' => 0,
                                'message'=>"Không có phản hồi từ máy chủ ('.$result_Api_category->httpcode.')"
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
                else if($result_Api->httpcode == 401){

                    return response()->json([
                        'status' => 0,
                        'message'=>"unauthencation (401)"
                    ]);
                }
                else if($result_Api->httpcode == 408){
                    return response()->json([
                        'status' => 0,
                        'message'=>"Không có phản hồi từ máy chủ (408)"
                    ]);
                }
                else{
                    return response()->json([
                        'status' => 0,
                        'message'=>"Không có phản hồi từ máy chủ ('.$result_Api->httpcode.')"
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

    }

    public function getShowCategoryBuyAccData(Request $request,$slug){
        if ($request->ajax()){
//            $slug = decodeItemID($slug);
            $id = $slug;

            $url = '/acc';
            $method = "GET";
            $val = array();

            $val['data'] = 'acc_detail';
            $val['id'] = $id;

            $result_Api = DirectAPI::_makeRequest($url,$val,$method);

            if(isset($result_Api) ){

                if( $result_Api->httpcode == 200 && isset($result_Api->data)){
                    $data = $result_Api->data;

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

                    $valcategory = array();
                    $valcategory['data'] = 'category_detail';
                    $valcategory['id'] = $data->parent_id;

                    $result_Api_category = DirectAPI::_makeRequest($url,$valcategory,$method);

                    if(isset($result_Api_category)){

                        if( $result_Api_category->httpcode == 200 && isset($result_Api_category->data)){
                            $data_category = $result_Api_category->data;
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

                            $html =  view('frontend.pages.account.function.buyacc')
                                ->with('dataAttribute',$dataAttribute)
                                ->with('data_category',$data_category)
                                ->with('price',$price)
                                ->with('balance',$balance)
                                ->with('data',$data)->render();

                            return response()->json([
                                'data' => $html,
                                'price' => $price,
                                'balance' => $balance,
                                'status' => 1,
                            ]);
                        }
                        else if($result_Api_category->httpcode == 401){
                            return response()->json([
                                'status' => 0,
                                'message'=>"unauthencation (401)"
                            ]);
                        }
                        else if($result_Api_category->httpcode == 408){
                            return response()->json([
                                'status' => 0,
                                'message'=>"Không có phản hồi từ máy chủ (408)"
                            ]);
                        }
                        else{
                            return response()->json([
                                'status' => 0,
                                'message'=>"Không có phản hồi từ máy chủ ('.$result_Api_category->httpcode.')"
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
                else if($result_Api->httpcode == 401){
                    session()->flush();
                    return response()->json([
                        'status' => 0,
                        'message'=>"unauthencation (401)"
                    ]);
                }
                else if($result_Api->httpcode == 408){
                    return response()->json([
                        'status' => 0,
                        'message'=>"Không có phản hồi từ máy chủ (408)"
                    ]);
                }
                else{
                    return response()->json([
                        'status' => 0,
                        'message'=>"Không có phản hồi từ máy chủ ('.$result_Api->httpcode.')"
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
    }

    public function postBuyAccount(Request $request,$slug_category,$slug){

        if (AuthCustom::check()) {
//            $slug = decodeItemID($slug);
            $urlshow = '/acc';
            $methodshow = "GET";
            $valshow = array();
            $valshow['data'] = 'acc_detail';
            $valshow['id'] = $slug;

            $result_Apishow = DirectAPI::_makeRequest($urlshow,$valshow,$methodshow);

            if(isset($result_Apishow) ){

                if( $result_Apishow->httpcode == 200 && isset($result_Apishow->data)){

                    $datashow = $result_Apishow->data;

                    if (!isset($datashow->price)){
                        return response()->json([
                            'status' => 0,
                            'message' => 'Không có dữ liệu price .',
                        ]);
                    }

                    $amount = $datashow->price;

                    $url = '/acc';
                    $method = "POST";
                    $val = array();
                    $val['id'] = $slug;
                    $val['data'] = 'buy_acc';
                    $val['user_id'] = AuthCustom::user()->id;
                    $val['amount'] = $amount;

//                return $val;
                    $result_Api = DirectAPI::_makeRequest($url,$val,$method);
                    if(isset($result_Api)){

                        if( $result_Api->httpcode == 200 && isset($result_Api->data)){
                            $data = $result_Api->data;
                            if (isset($data->success)){
                                if ($data->success == 0){
                                    return response()->json([
                                        'status' => 2,
                                        'message' => 'Nick đã có người mua. Vui lòng chọn nick khác nhé.',
                                    ]);
//                        return redirect()->route('getBuyAccountHistory')->with('content', $data->message );
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
                        else if($result_Api->httpcode == 401){
                            session()->flush();
                            return response()->json([
                                'status' => 0,
                                'message'=>"unauthencation (401)"
                            ]);
                        }
                        else if($result_Api->httpcode == 408){
                            return response()->json([
                                'status' => 0,
                                'message'=>"Không có phản hồi từ máy chủ (408)"
                            ]);
                        }
                        else{
                            return response()->json([
                                'status' => 0,
                                'message'=>"Không có phản hồi từ máy chủ ('.$result_Api->httpcode.')"
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
                else if($result_Apishow->httpcode == 401){
                    session()->flush();
                    return response()->json([
                        'status' => 0,
                        'message'=>"unauthencation (401)"
                    ]);
                }
                else if($result_Apishow->httpcode == 408){
                    return response()->json([
                        'status' => 0,
                        'message'=>"Không có phản hồi từ máy chủ (408)"
                    ]);
                }
                else{
                    return response()->json([
                        'status' => 0,
                        'message'=>"Không có phản hồi từ máy chủ ('.$result_Apishow->httpcode.')"
                    ]);
                }

            }
            else{

                return response()->json([
                    'status' => 0,
                    'message'=>"Lỗi không gọi được dữ liệu hệ thống"
                ]);
            }
        }else{
            return redirect('/login');
        }
    }

    public function getBuyAccountHistory(Request $request)
    {
        if (AuthCustom::check()) {

            if ($request->ajax()) {
                $page = $request->page;
                $time = null;
                $dataAttribute = null;

                $datashow = null;
                $slugen = null;
                $count = 0;
                $url = '/acc';
                $method = "GET";
                $val = array();
                $val['page'] = $page;
                $val['data'] = 'list_acc';
                $val['sort'] = 'desc';
                $val['sort_by'] = 'published_at';
                $val['limit'] = 12;
                $val['user_id'] = AuthCustom::user()->id;

                $chitiet_data = 0;
                $id_data = null;

                if (isset($request->chitiet_data) || $request->chitiet_data != '' || $request->chitiet_data != null) {
                    if (isset($request->id_data) || $request->id_data != '' || $request->id_data != null) {
                        $chitiet_data = $request->chitiet_data;
                        $id_data = $request->id_data;
                    }

                }
                if (isset($request->serial) || $request->serial != '' || $request->serial != null) {
//                    $checkid = decodeItemID($request->serial);
                    $val['id'] = $request->serial;
                }

                if (isset($request->key) || $request->key != '' || $request->key != null) {
                    $val['cat_slug'] = $request->key;
                }

                if (isset($request->status) || $request->status != '' || $request->status != null) {
                    $val['status'] = $request->status;
                }

                if (isset($request->price) || $request->price != '' || $request->price != null) {
                    $val['price'] = $request->price;
                }

                if (isset($request->started_at) || $request->started_at != '' || $request->started_at != null) {
                    $started_at = \Carbon\Carbon::parse($request->started_at)->format('Y-m-d H:i:s');
                    $val['started_at'] = $started_at;
                }

                if (isset($request->ended_at) || $request->ended_at != '' || $request->ended_at != null) {
                    $ended_at = \Carbon\Carbon::parse($request->ended_at)->format('Y-m-d H:i:s');
                    $val['ended_at'] = $ended_at;
                }

                if (isset($request->sort_by_data) || $request->sort_by_data != '' || $request->sort_by_data != null){
                    $sort_by = $request->sort_by_data;
                    if ($sort_by == "random"){
                        $val['sort'] = 'random';
                    }elseif ($sort_by == "price_start"){
                        $val['sort_by'] = 'price';
                        $val['sort'] = 'desc';
                    }elseif ($sort_by == "price_end"){
                        $val['sort_by'] = 'price';
                        $val['sort'] = 'asc';
                    }elseif ($sort_by == "created_at_start"){
                        $val['sort_by'] = 'created_at';
                        $val['sort'] = 'desc';
                    }elseif ($sort_by == "created_at_end"){
                        $val['sort_by'] = 'created_at';
                        $val['sort'] = 'asc';
                    }elseif ($sort_by == "published_at"){
                        $val['sort_by'] = 'published_at';
                        $val['sort'] = 'desc';
                    }
                }

                $result_Api = DirectAPI::_makeRequest($url, $val, $method);

                if(isset($result_Api) ){

                    if( $result_Api->httpcode == 200 && isset($result_Api->data)){
                        $data = $result_Api->data;

                        $key = null;
                        if (isset($request->chitiet_data) || $request->chitiet_data != '' || $request->chitiet_data != null) {
                            if (isset($request->id_data) || $request->id_data != '' || $request->id_data != null) {
                                $valshow =array();
                                $valshow['data'] = 'acc_detail';
                                $valshow['id'] = $id_data;

                                $result_Api_show = DirectAPI::_makeRequest($url,$valshow,$method);

                                if(isset($result_Api_show) ){

                                    if( $result_Api_show->httpcode == 200 && isset($result_Api_show->data)){

                                        $datashow = $result_Api_show->data;

                                        if (isset($datashow->params) && isset($datashow->params->show_password)){
                                            $params = $datashow->params->show_password;

                                            foreach($params as $keys => $param){
                                                if ($keys == 'time'){
                                                    $time = $param;
                                                }
                                            }
                                        }


                                        $slugen = $datashow->slug;

                                        $key = Helpers::Decrypt($datashow->slug,config('module.acc.encrypt_key'));

                                        if (!isset($datashow->groups[1]) || !isset($datashow->groups[1]->id)){
                                            return response()->json([
                                                'status' => 0,
                                                'message' => 'Không có dữ liệu groups.',
                                            ]);
                                        }

                                        $valcategory = array();
                                        $valcategory['data'] = 'category_detail';
                                        $valcategory['id'] = $datashow->groups[1]->id;

                                        $result_Api_category = DirectAPI::_makeRequest($url,$valcategory,$method);

                                        if(isset($result_Api_category) ){

                                            if( $result_Api_category->httpcode == 200 && isset($result_Api_category->data)){

                                                $data_category = $result_Api_category->data;

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
                                            else if($result_Api_category->httpcode == 401){
                                                session()->flush();
                                                return response()->json([
                                                    'status' => 0,
                                                    'message'=>"unauthencation (401)"
                                                ]);
                                            }
                                            else if($result_Api->httpcode == 408){
                                                return response()->json([
                                                    'status' => 0,
                                                    'message'=>"Không có phản hồi từ máy chủ (408)"
                                                ]);
                                            }
                                            else{
                                                return response()->json([
                                                    'status' => 0,
                                                    'message'=>"Không có phản hồi từ máy chủ ('.$result_Api_category->httpcode.')"
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
                                    else if($result_Api_show->httpcode == 401){
                                        session()->flush();
                                        return response()->json([
                                            'status' => 0,
                                            'message'=>"unauthencation (401)"
                                        ]);
                                    }
                                    else if($result_Api_show->httpcode == 408){
                                        return response()->json([
                                            'status' => 0,
                                            'message'=>"Không có phản hồi từ máy chủ (408)"
                                        ]);
                                    }
                                    else{
                                        return response()->json([
                                            'status' => 0,
                                            'message'=>"Không có phản hồi từ máy chủ ('.$result_Api_show->httpcode.')"
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

                        $valcate = array();
                        $valcate['data'] = 'category_list';
                        $valcate['module'] = 'acc_category';
                        $result_category = DirectAPI::_makeRequest($url,$valcate,$method);

                        if(isset($result_category) ){

                            if( $result_category->httpcode == 200 && isset($result_category->data)){

                                $datacategory = $result_category->data;

                                $htmlcategory = view('frontend.pages.account.function.lichsu.__game__category')
                                    ->with('datacategory', $datacategory)->render();

                                $html = view('frontend.pages.account.function.lichsu.__get__buy__account__history')
                                    ->with('data', $data)->render();

                                if (count($data) == 0 && $page == 1){
                                    return response()->json([
                                        'status' => 0,
                                        'message' => 'Hiện tại không có dữ liệu nào phù hợp với yêu cầu của bạn! Hệ thống cập nhật nick thường xuyên bạn vui lòng theo dõi web trong thời gian tới !',
                                    ]);
                                }

                                return response()->json([
                                    "success"=> true,
                                    "html" => $html,
                                    "htmlcategory" => $htmlcategory,
                                    "status" => 1,
                                    "data" => $data,
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
                            else if($result_Api->httpcode == 401){
                                session()->flush();
                                return response()->json([
                                    'status' => 401,
                                    'message'=>"unauthencation"
                                ]);
                            }
                            else if($result_Api->httpcode == 408){
                                return response()->json([
                                    'status' => 408,
                                    'message'=>"Không có phản hồi từ máy chủ (408)"
                                ]);
                            }
                            else{
                                return response()->json([
                                    'status' => 0,
                                    'message'=>"Không có phản hồi từ máy chủ ('.$result_Api->httpcode.')"
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
                    else if($result_Api->httpcode == 401){
                        session()->flush();
                        return response()->json([
                            'status' => 0,
                            'message'=>"unauthencation (401)"
                        ]);
                    }
                    else if($result_Api->httpcode == 408){
                        return response()->json([
                            'status' => 0,
                            'message'=>"Không có phản hồi từ máy chủ (408)"
                        ]);
                    }
                    else{
                        return response()->json([
                            'status' => 0,
                            'message'=>"Không có phản hồi từ máy chủ ('.$result_Api->httpcode.')"
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

            return view('frontend.pages.account.getBuyAccountHistory');
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
                $val = array();
                $val['id'] = $id;
                $val['data'] = 'show_password';
                $val['user_id'] = AuthCustom::user()->id;

                $result_Api = DirectAPI::_makeRequest($url, $val, $method);

                if(isset($result_Api) ){

                    if( $result_Api->httpcode == 200 && isset($result_Api->data)){
                        $data = $result_Api->data;

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
                    else if($result_Api->httpcode == 401){
                        return response()->json([
                            'status' => 0,
                            'message'=>"unauthencation (401)"
                        ]);
                    }
                    else if($result_Api->httpcode == 408){
                        return response()->json([
                            'status' => 0,
                            'message'=>"Không có phản hồi từ máy chủ (408)"
                        ]);
                    }
                    else{
                        return response()->json([
                            'status' => 0,
                            'message'=>"Không có phản hồi từ máy chủ ('.$result_Api->httpcode.')"
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
        }else{
            return redirect('/login');
        }
    }

}
