<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Library\DirectAPI;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class AccController extends Controller
{
    public function getShowCategory(Request $request,$slug_category,$slug){
            $url = '/acc';
            $method = "GET";
            $val = array();

        if ($slug_category == 'danh-muc'){

            $val['data'] = 'category_detail';
            $val['slug'] = $slug;

            $result_Api = DirectAPI::_makeRequest($url,$val,$method);
            if(isset($result_Api) && $result_Api->httpcode == 200){
                $data = $result_Api->data;

                return view('frontend.pages.account.getShowCategory')->with('data',$data);

            }else{
                return 'sai';
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
        }else{

            $valcategory = array();
            $valcategory['data'] = 'category_detail';
            $valcategory['slug'] = $slug;

            $result_Api_category = DirectAPI::_makeRequest($url,$valcategory,$method);
            $data = $result_Api_category->data;

            $val['data'] = 'list_acc';
            $val['cat_slug'] = $slug;

            $result_Api = DirectAPI::_makeRequest($url,$val,$method);

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

    }

    public function getShowCategoryData(Request $request,$slug_category,$slug){
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
    }

    public function getBuyAccount(Request $request,$slug){

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

                $html =  view('frontend.pages.account.function.buyacc')
                    ->with('dataAttribute',$dataAttribute)
                    ->with('data_category',$data_category)
                    ->with('data',$data)->render();

                return response()->json([
                    'data' => $html,
                    'status' => 1,
                ]);

            }else{
                return 'sai';
            }
        }
    }

    public function postBuyAccount(Request $request,$slug){

        $url = '/acc';
        $method = "GET";
        $val = array();
        $val['id'] = $slug;
        $val['data'] = 'buy_acc';

        $result_Api = DirectAPI::_makeRequest($url,$val,$method);

//        return $result_Api;
        if(isset($result_Api) && $result_Api->httpcode == 200){
            $data = $result_Api->data;

            if (isset($data->success)){
                if ($data->success == 0){
                    return redirect()->back()->with('content', $data->message );
                }elseif ($data->success == 1 ){
//                return redirect()->to('/tran/acc/thanhcong')->with('content', \App\Library\Helpers::DecodeJson('buyacc_popup',$data->groups[0]->content_json))->with('success', 'Mua tài khoản thành công');
                    return redirect()->back()->with('content', 'Mua tài khoản thành công');
                }
            }else{
                return redirect('/');
            }


        }else{
            return redirect('/');
        }
    }

}
