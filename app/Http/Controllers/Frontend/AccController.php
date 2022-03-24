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
            $val['domain'] = "youtube.com";
            $val['secret_key'] = config('api.secret_key');

        if ($slug_category == 'danh-muc'){

            $val['data'] = 'category_detail';
            $val['slug'] = $slug;

            $result_Api = DirectAPI::_makeRequest($url,$val,$method);
            if(isset($result_Api) && $result_Api->httpcode == 200){
                $data = $result_Api->data;

//                $items = $data->childs;
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

                return view('frontend.pages.account.show')->with('data',$data);

            }else{
                return 'sai';
            }


        }else{

            $valcategory = array();
            $valcategory['domain'] = "youtube.com";
            $valcategory['secret_key'] = config('api.secret_key');
            $valcategory['data'] = 'category_detail';
            $valcategory['slug'] = $slug;

            $result_Api_category = DirectAPI::_makeRequest($url,$valcategory,$method);
            $data = $result_Api_category->data;

            $val['data'] = 'list_acc';
            $val['cat_slug'] = $slug;
//            $val['group_ids'] = $ids;

            $result_Api = DirectAPI::_makeRequest($url,$val,$method);

            if(isset($result_Api) && $result_Api->httpcode == 200){

                $items = $result_Api->data;

                $items = new LengthAwarePaginator($items->data,$items->total,$items->per_page,$items->current_page,$items->data);

                return view('frontend.pages.account.accountList')->with('data',$data)->with('items',$items)->with('slug_category',$slug_category);

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
            $val['domain'] = "youtube.com";
            $val['secret_key'] = config('api.secret_key');

            $valcategory = array();
            $valcategory['domain'] = "youtube.com";
            $valcategory['secret_key'] = config('api.secret_key');
            $valcategory['data'] = 'category_detail';
            $valcategory['slug'] = $slug;

            $result_Api_category = DirectAPI::_makeRequest($url,$valcategory,$method);
            $data = $result_Api_category->data;

            $val['data'] = 'list_acc';
            $val['cat_slug'] = $slug;
            $val['page'] = $page;
            $result_Api = DirectAPI::_makeRequest($url,$val,$method);

            if(isset($result_Api) && $result_Api->httpcode == 200){
                $items = $result_Api->data;

                $items = new LengthAwarePaginator($items->data,$items->total,$items->per_page,$items->current_page,$items->data);

                return view('frontend.pages.account.function.__account__data')->with('items',$items)->with('slug_category',$slug_category);

            }else{
                return 'sai';
            }
        }
    }
}
