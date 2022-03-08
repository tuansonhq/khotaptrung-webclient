<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Library\DirectAPI;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request){

        $url = '/article';
        $method = "GET";
        $val = array();
        $val['domain'] = "youtube.com";
        $val['secret_key'] = config('api.secret_key');
        $result_Api = DirectAPI::_makeRequest($url,$val,$method);
        $result = $result_Api->data;
        $data = $result->data;
        $data = $data->data;
        $count = $result->count;
        $datacategory = $result->datacategory;
        $is_over = $result->is_over;

        return view('frontend.pages.news')
            ->with('datacategory',$datacategory)
            ->with('is_over',$is_over)
            ->with('count',$count);
    }

    public function getData(Request $request){
        if ($request->ajax()){
            $page = $request->page;
            $append = $request->append;

            $url = '/article';
            $method = "GET";
            $val = array();
            $val['domain'] = "youtube.com";
            $val['page'] = $page;

            if (isset($request->querry) || $request->querry != '' || $request->querry != null){
                $val['querry'] = $request->querry;
            }

            if (isset($request->slug) || $request->slug != '' || $request->slug != null){
                $val['slug'] = $request->slug;
            }

            $val['secret_key'] = config('api.secret_key');
            $result_Api = DirectAPI::_makeRequest($url,$val,$method);

            $result = $result_Api->data;
            if ($result->is_over){
                return response()->json([
                    'is_over'=>true
                ]);
            }
            $data = $result->data;
            $data = $data->data;

            return response()->json([
                'data' => $data,
                'append' => $append,
                'is_over'=>false
            ]);
        }
    }

    public function show(Request $request,$slug){

        $url = '/article/'.$slug;
        $method = "GET";
        $val = array();
        $val['domain'] = "youtube.com";
        $val['secret_key'] = config('api.secret_key');
        $result_Api = DirectAPI::_makeRequest($url,$val,$method);
        $result = $result_Api->data;
        $data = $result->data;
        $count = $result->count;
        $datacategory = $result->datacategory;

        return view('frontend.pages.news_detail')
            ->with('data',$data)
            ->with('datacategory',$datacategory)
            ->with('count',$count);
    }
}
