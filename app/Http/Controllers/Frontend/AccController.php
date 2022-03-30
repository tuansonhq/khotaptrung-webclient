<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Library\AuthCustom;
use App\Library\DirectAPI;
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
        if(isset($result_Api) && $result_Api->httpcode == 200){
            $data = $result_Api->data;
        }else{
            return 'sai';
        }
//        return $data;
        return view('frontend.pages.account.getShowCategory')
            ->with('data',$data);
    }

    public function getShowCategory(Request $request,$slug_category,$slug){
            $url = '/acc';
            $method = "GET";
            $val = array();

        if ($slug_category == 'danh-muc'){
            if (isset($slug)){
                $valcategory = array();
                $valcategory['data'] = 'category_detail';
                $valcategory['slug'] = $slug;

                $result_Api_category = DirectAPI::_makeRequest($url,$valcategory,$method);
                $data = $result_Api_category->data;

                $val['data'] = 'list_acc';
                $val['cat_slug'] = $slug;

                $result_Api = DirectAPI::_makeRequest($url,$val,$method);

                if ($request->ajax()){
                    $page = $request->page;

                    $url = '/acc';
                    $method = "GET";
                    $val = array();
                    $valcategory = array();

                    $valcategory['data'] = 'category_detail';
                    $valcategory['slug'] = $slug;

                    $result_Api_category = DirectAPI::_makeRequest($url,$valcategory,$method);
                    $data = $result_Api_category->data;

                    $val['data'] = 'list_acc';
                    $val['cat_slug'] = $slug;
                    $val['page'] = $page;

                    if (isset($request->id_data) || $request->id_data != '' || $request->id_data != null){
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
                        foreach(explode('|',$select_data) as $val){
                            array_push($group_ids,$val);
                        }
                        $val['group_ids'] = $group_ids;
                    }

                    $result_Api = DirectAPI::_makeRequest($url,$val,$method);

                    if(isset($result_Api) && $result_Api->httpcode == 200){
                        $items = $result_Api->data;

                        $items = new LengthAwarePaginator($items->data,$items->total,$items->per_page,$items->current_page,$items->data);

                        $dataAttribute = $data->childs;
                        return view('frontend.pages.account.function.__account__data')
                            ->with('data',$data)
                            ->with('items',$items)
                            ->with('dataAttribute',$dataAttribute)
                            ->with('slug_category',$slug_category);
                    }else{
                        return 'sai';
                    }
                }

                if(isset($result_Api) && $result_Api->httpcode == 200){

                    $items = $result_Api->data;

                    $items = new LengthAwarePaginator($items->data,$items->total,$items->per_page,$items->current_page,$items->data);

                    $dataAttribute = $data->childs;

                    return view('frontend.pages.account.accountList')
                        ->with('data',$data)
                        ->with('dataAttribute',$dataAttribute)
                        ->with('items',$items)
                        ->with('slug',$slug)
                        ->with('slug_category',$slug_category);

                }else{
                    return 'sai';
                }
            }
        }elseif ($slug_category == 'acc'){

            $val['data'] = 'acc_detail';
            $val['id'] = $slug;

            $result_Api = DirectAPI::_makeRequest($url,$val,$method);

            if(isset($result_Api) && $result_Api->httpcode == 200){
                $data = $result_Api->data;
                $slug_cate = '';
                foreach ($data->groups as $da){
                    if ($da->module == 'acc_category'){
                        $slug_cate = $da->id;
                    }
                }
                $valcategory = array();
                $valcategory['data'] = 'category_detail';
                $valcategory['id'] = $slug_cate;

                $result_Api_category = DirectAPI::_makeRequest($url,$valcategory,$method);
                $data_category = $result_Api_category->data;

//                return $data_category;
                $dataAttribute = $data_category->childs;

                $valslider = array();
                $valslider['domain'] = "youtube.com";
                $valslider['secret_key'] = config('api.secret_key');
                $valslider['data'] = 'list_acc';
                $valslider['cat_slug'] = $data_category->slug;

                $result_Api_slider = DirectAPI::_makeRequest($url,$valslider,$method);
                $sliders = $result_Api_slider->data;
                $sliders = new LengthAwarePaginator($sliders->data,$sliders->total,$sliders->per_page,$sliders->current_page,$sliders->data);

                return view('frontend.pages.account.show')
                    ->with('data',$data)
                    ->with('sliders',$sliders)
                    ->with('dataAttribute',$dataAttribute)
                    ->with('data_category',$data_category);

            }else{
                return 'sai';
            }
        }

    }

    public function getShowCategoryData(Request $request,$slug_category,$slug){
        if ($request->ajax()){

            $id = $slug;

            $url = '/acc';
            $method = "GET";
            $val = array();

            $val['data'] = 'acc_detail';
            $val['id'] = $id;

            $result_Api = DirectAPI::_makeRequest($url,$val,$method);


            if(isset($result_Api) && $result_Api->httpcode == 200){
                $data = $result_Api->data;

                $valcategory = array();
                $valcategory['data'] = 'category_detail';
                $valcategory['id'] = $data->parent_id;

                $result_Api_category = DirectAPI::_makeRequest($url,$valcategory,$method);

                $data_category = $result_Api_category->data;
                $dataAttribute = $data_category->childs;

                $balance = 0;

                if (AuthCustom::check()){
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

                $price = $data->price;

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

            }else{
                return 'sai';
            }
        }
    }

    public function postBuyAccount(Request $request,$slug_category,$slug){

        if (AuthCustom::check()) {
            $url = '/acc';
            $method = "GET";
            $val = array();
            $val['id'] = $slug;
            $val['data'] = 'buy_acc';
            $val['user_id'] = AuthCustom::user()->id;

            $result_Api = DirectAPI::_makeRequest($url,$val,$method);

            if(isset($result_Api) && $result_Api->httpcode == 200){
                $data = $result_Api->data;

                if (isset($data->success)){
                    if ($data->success == 0){
                        return redirect()->route('getBuyAccountHistory')->with('content', $data->message );
                    }elseif ($data->success == 1 ){
                        return redirect()->route('getBuyAccountHistory')->with('content', 'Mua tài khoản thành công');
                    }
                }else{
                    return redirect('/');
                }

            }else{
                return redirect('/');
            }
        }
    }

    public function getBuyAccountHistory(Request $request)
    {
        if (AuthCustom::check()) {

//            Lấy danh sách acc khách hàng.
            $url = '/acc';
            $method = "GET";
            $val = array();

            $val['data'] = 'list_acc';
            $val['user_id'] = AuthCustom::user()->id;

            $result_Api = DirectAPI::_makeRequest($url,$val,$method);

            $valcategory['data'] = 'category_list';
            $valcategory['module'] = 'acc_category';
            $result_Api_category = DirectAPI::_makeRequest($url,$valcategory,$method);

            if ($request->ajax()) {
                $page = $request->page;

                $url = '/acc';
                $method = "GET";
                $val = array();
                $val['page'] = $page;
                $val['data'] = 'list_acc';
                $val['user_id'] = AuthCustom::user()->id;

                if (isset($request->serial) || $request->serial != '' || $request->serial != null) {
                    $val['serial'] = $request->serial;
                }

                if (isset($request->key) || $request->key != '' || $request->key != null) {
                    $val['key'] = $request->key;
                }

                if (isset($request->status) || $request->status != '' || $request->status != null) {
                    $val['status'] = $request->status;
                }

                if (isset($request->price) || $request->price != '' || $request->price != null) {
                    $val['price'] = $request->price;
                }

                if (isset($request->started_at) || $request->started_at != '' || $request->started_at != null) {
                    $val['started_at'] = $request->started_at;
                }

                if (isset($request->ended_at) || $request->ended_at != '' || $request->ended_at != null) {
                    $val['ended_at'] = $request->ended_at;
                }

                $result_Api = DirectAPI::_makeRequest($url, $val, $method);

                if (isset($result_Api) && $result_Api->httpcode == 200) {
                    $data = $result_Api->data;

                    if (isEmpty($data->data)) {
                        $data = new LengthAwarePaginator($data->data, $data->total, $data->per_page, $page, $data->data);
                    }

                    return view('frontend.pages.account.function.__get__buy__account__history')
                        ->with('data', $data);
                } else {
                    return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
                }
            }

            if(isset($result_Api) && $result_Api->httpcode == 200 && isset($result_Api_category) && $result_Api_category->httpcode == 200){
                $data = $result_Api->data;
                $datacategory = $result_Api_category->data;

                if (isEmpty($data->data)) {
                    $data = new LengthAwarePaginator($data->data, $data->total, $data->per_page, $data->current_page, $data->data);
                }

                return view('frontend.pages.account.getBuyAccountHistory')
                    ->with('data', $data)->with('datacategory', $datacategory);
            }else{
                return "sai";
            }
        }

    }
}
