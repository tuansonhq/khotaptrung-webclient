<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Library\DirectAPI;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class AccController extends Controller
{
    public function getShowCategory(Request $request,$slug_category,$slug){

        if ($slug_category == 'danh-muc'){
            $url = '/acc';
            $method = "GET";
            $val = array();
            $val['domain'] = "youtube.com";
            $val['secret_key'] = config('api.secret_key');
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

            return view('frontend.pages.account.show');
        }else{

            $url = '/acc';
            $method = "GET";

            $valcategory['domain'] = "youtube.com";
            $valcategory['secret_key'] = config('api.secret_key');
            $valcategory['data'] = 'category_detail';
            $valcategory['slug'] = $slug;

            $result_Api_category = DirectAPI::_makeRequest($url,$valcategory,$method);
            $data = $result_Api_category->data;
//            $datachild = $data_categorys->childs;
//
//            $ids = array();
//
//            array_push($ids,$data_categorys->id);


//            return $ids;
            $val = array();
            $val['domain'] = "youtube.com";
            $val['secret_key'] = config('api.secret_key');
            $val['data'] = 'list_acc';
            $val['cat_slug'] = $slug;
//            $val['group_ids'] = $ids;

            $result_Api = DirectAPI::_makeRequest($url,$val,$method);

            if(isset($result_Api) && $result_Api->httpcode == 200){
                $items = $result_Api->data;

                $items = new LengthAwarePaginator($items->data,$items->total,$items->per_page,$items->current_page,$items->data);

//                return $items;
                return view('frontend.pages.account.accountList')->with('data',$data)->with('items',$items);

            }else{
                return 'sai';
            }

        }

    }
}
