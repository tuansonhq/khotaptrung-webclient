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

                $valcategory = array();
                $valcategory['data'] = 'category_detail';
                $valcategory['id'] = $data->id;

                $result_Api_category = DirectAPI::_makeRequest($url,$valcategory,$method);
                $data_category = $result_Api_category->data;
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
            $result_Api = DirectAPI::_makeRequest($url,$val,$method);

            if(isset($result_Api) && $result_Api->httpcode == 200){
                $items = $result_Api->data;

                $items = new LengthAwarePaginator($items->data,$items->total,$items->per_page,$items->current_page,$items->data);

                $dataAttribute = $data->childs;
                return view('frontend.pages.account.function.__account__data')
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

            $url = '/acc';
            $method = "GET";
            $val = array();
            $val['domain'] = "youtube.com";
            $val['secret_key'] = config('api.secret_key');

            $val['data'] = 'acc_detail';
            $val['id'] = $slug;

            $result_Api = DirectAPI::_makeRequest($url,$val,$method);

            if(isset($result_Api) && $result_Api->httpcode == 200){
                $data = $result_Api->data;

                $valcategory = array();
                $valcategory['data'] = 'category_detail';
                $valcategory['id'] = $data->id;

                $result_Api_category = DirectAPI::_makeRequest($url,$valcategory,$method);
                $data_category = $result_Api_category->data;
                $dataAttribute = $data_category->childs;

                $valslider = array();
                $valslider['data'] = 'list_acc';
                $valslider['cat_slug'] = $data_category->slug;
//            $val['group_ids'] = $ids;

                $result_Api_slider = DirectAPI::_makeRequest($url,$valslider,$method);
                $sliders = $result_Api_slider->data;
                $sliders = new LengthAwarePaginator($sliders->data,$sliders->total,$sliders->per_page,$sliders->current_page,$sliders->data);

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
        $slug = $request->id;
        $url = '/acc';
        $method = "GET";
        $val = array();
        $val['id'] = $slug;
        $val['data'] = 'buy_acc';

        $result_Api = DirectAPI::_makeRequest($url,$val,$method);
        if(isset($result_Api) && $result_Api->httpcode == 200){
            $data = $result_Api->data;

            if ($data->success == 0){
                return redirect()->back()->with('content', 'Account đã có sở hữu');
            }elseif ($data->success == 1 ){
//                return redirect()->to('/tran/acc/thanhcong')->with('content', \App\Library\Helpers::DecodeJson('buyacc_popup',$data->groups[0]->content_json))->with('success', 'Mua tài khoản thành công');
                return redirect()->back()->with('content', 'Mua tài khoản thành công');
            }

        }
    }


}
