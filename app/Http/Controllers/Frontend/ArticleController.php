<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Library\DirectAPI;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Session;

class ArticleController extends Controller
{

    public function index(Request $request){

        $url = '/article';
        $method = "GET";
        $val = array();

        if ($request->ajax()){

            $page = $request->page;

            $val['page'] = $page;

            if (isset($request->querry) || $request->querry != '' || $request->querry != null){
                $val['querry'] = $request->querry;
            }

            if (isset($request->slug) || $request->slug != '' || $request->slug != null){

                $val['slug'] = $request->slug;
            }

            $result_Api = DirectAPI::_makeRequest($url,$val,$method);

            if(isset($result_Api) && $result_Api->httpcode == 200){
                $result = $result_Api->dataOfApi;
                $data = $result->data;

                $data = new LengthAwarePaginator($data->data, $data->total, $data->per_page, $data->current_page, $data->data);
                $data->setPath($request->url());

                return view('frontend.pages.article.function.__new__data')
                    ->with('data',$data);
            }else{
                return redirect('/404');
            }
        }

        $result_Api = DirectAPI::_makeRequest($url,$val,$method);

        if(isset($result_Api)){
            if( $result_Api->httpcode == 200 && isset($result_Api->dataOfApi)){
                $result = $result_Api->dataOfApi;
                $data = $result->data;

                $data = new LengthAwarePaginator($data->data, $data->total, $data->per_page, $data->current_page, ['path'=>url()->current()]);

                $data->setPath($request->url());

                Session::forget('return_url');
                Session::put('return_url', $_SERVER['REQUEST_URI']);

                return view('frontend.pages.article.index')
                    ->with('data',$data);
            }
            else if($result_Api->httpcode == 401){

                $data = null;
                $message = "unauthencation (401)";

                return view('frontend.pages.article.index')
                    ->with('message',$message)
                    ->with('data',$data);
            }
            else if($result_Api->httpcode == 408){

                $data = null;
                $message = "Không có phản hồi từ máy chủ (408)";

                return view('frontend.pages.article.index')
                    ->with('message',$message)
                    ->with('data',$data);
            }
            else{

                $data = null;
                $message = "Không có phản hồi từ máy chủ ('.$result_Api->httpcode.')";

                return view('frontend.pages.article.index')
                    ->with('message',$message)
                    ->with('data',$data);
            }

        }
        else{

            $data = null;
            $message = "Lỗi không gọi được dữ liệu hệ thống";

            return view('frontend.pages.article.index')
                ->with('message',$message)
                ->with('data',$data);
        }
    }

    public function indexThem2(Request $request){

        $url = '/article';
        $method = "GET";
        $val = array();
        $result_Api = DirectAPI::_makeRequest($url,$val,$method);

        if(isset($result_Api) && $result_Api->httpcode == 200){
            $result = $result_Api->dataOfApi;
            $data = $result->data;
            $per_page = 0;
            $total = 0;
            if (isset($data->total)){
                $total = $data->total;
            }

            if (isset($data->to)){
                $per_page = $data->to;
            }


            $data = new LengthAwarePaginator($data->data, $data->total, $data->per_page, $data->current_page, ['path'=>url()->current()]);

            $data->setPath($request->url());

            $category = true;
            Session::forget('return_url');
            Session::put('return_url', $_SERVER['REQUEST_URI']);

            if($request->ajax()){
                return view('frontend.pages.article.function.__new__data')
                    ->with('data',$data)
                    ->with('total',$total)
                    ->with('per_page',$per_page)
                    ->with('category',$category);
            }
            else{
                if (theme('')->theme_key == 'theme_1'){
                    return view('frontend.pages.article.index')
                        ->with('data',$data)
                        ->with('category',$category);
                }elseif (theme('')->theme_key == 'theme_2'){
                    return view('frontend.pages.article.index')
                        ->with('data',$data)
                        ->with('category',$category)
                        ->with('total',$total)
                        ->with('per_page',$per_page);
                }

            }


        }else{
            return redirect('/404');
        }
    }

    public function getData(Request $request){

        if ($request->ajax()){

            $page = $request->page;

            $url = '/article';
            $method = "GET";
            $val = array();
            $val['page'] = $page;

            if (isset($request->querry) || $request->querry != '' || $request->querry != null){
                $val['querry'] = $request->querry;
            }

            if (isset($request->slug) || $request->slug != '' || $request->slug != null){

                $val['slug'] = $request->slug;
            }

            $result_Api = DirectAPI::_makeRequest($url,$val,$method);

            if(isset($result_Api) && $result_Api->httpcode == 200){
                $result = $result_Api->dataOfApi;
                $data = $result->data;

                $data = new LengthAwarePaginator($data->data, $data->total, $data->per_page, $data->current_page, $data->data);
                $data->setPath($request->url());

                return view('frontend.pages.article.function.__new__data')
                    ->with('data',$data);
            }else{
                return redirect('/404');
            }
        }
    }

    public function getDataThem2(Request $request){

        if ($request->ajax()){
            $page = $request->page;

            $url = '/article';
            $method = "GET";
            $val = array();
            $val['page'] = $page;

            if (isset($request->querry) || $request->querry != '' || $request->querry != null){
                $val['querry'] = $request->querry;
            }

            if (isset($request->slug) || $request->slug != '' || $request->slug != null){

                $val['slug'] = $request->slug;
            }

            $result_Api = DirectAPI::_makeRequest($url,$val,$method);

            if(isset($result_Api) && $result_Api->httpcode == 200){
                $result = $result_Api->dataOfApi;
                $data = $result->data;
                $per_page = 0;
                $total = 0;

                if (isset($data->total)){
                    $total = $data->total;
                }

                if (isset($data->to)){
                    $per_page = $data->to;
                }

                $data = new LengthAwarePaginator($data->data, $data->total, $data->per_page, $data->current_page, $data->data);
                $data->setPath($request->url());
                $category = true;

                return view('frontend.pages.article.function.__new__data')
                    ->with('data',$data)
                    ->with('total',$total)
                    ->with('per_page',$per_page)
                    ->with('category',$category);
            }else{
                return redirect('/404');
            }
        }
    }

    public function getCategoryData(Request $request,$slug){

        if ($request->ajax()){
            $page = $request->page;

            $url = '/article/'.$slug;
            $method = "GET";
            $val = array();
            $val['page'] = $page;

            if (isset($request->querry) || $request->querry != '' || $request->querry != null){
                $val['querry'] = $request->querry;
            }

            $result_Api = DirectAPI::_makeRequest($url,$val,$method);

            if(isset($result_Api) && $result_Api->httpcode == 200){
                $result = $result_Api->dataOfApi;
                if ($result->is_over){
                    return response()->json([
                        'is_over'=>true
                    ]);
                }
                $data = $result->data;
                $datacategory = $result->datacategory;
//                $data = $data->data;
                $title = $result->categoryarticle;

                $per_page = 0;
                $total = 0;
                if (isset($data->total)){
                    $total = $data->total;
                }

                if (isset($data->to)){
                    $per_page = $data->to;
                }

                $data = new LengthAwarePaginator($data->data, $data->total, $data->per_page, $data->current_page, $data->data);
                $data->setPath($request->url());
                Session::put('path', $_SERVER['REQUEST_URI']);
                return view('frontend.pages.article.function.__new__data')
                    ->with('title',$title)
                    ->with('data',$data)
                    ->with('per_page',$per_page)
                    ->with('total',$total)
                    ->with('datacategory',$datacategory)
                    ->with('slug',$slug);

            }else{
                return redirect('/404');
            }
        }
    }

    public function show(Request $request,$slug){

        $url = '/article/'.$slug;
        $method = "GET";
        $val = array();

        if ($request->ajax()){
            $page = $request->page;

            $val['page'] = $page;

            if (isset($request->querry) || $request->querry != '' || $request->querry != null){
                $val['querry'] = $request->querry;
            }

            $result_Api = DirectAPI::_makeRequest($url,$val,$method);

            if(isset($result_Api) && $result_Api->httpcode == 200){
                $result = $result_Api->dataOfApi;
                if ($result->is_over){
                    return response()->json([
                        'is_over'=>true
                    ]);
                }
                $data = $result->data;

                $title = $result->categoryarticle;

                $data = new LengthAwarePaginator($data->data, $data->total, $data->per_page, $data->current_page, $data->data);
                $data->setPath($request->url());
                Session::put('path', $_SERVER['REQUEST_URI']);
                return view('frontend.pages.article.function.__new__data')
                    ->with('title',$title)
                    ->with('data',$data)
                    ->with('slug',$slug);

            }else{
                return redirect('/404');
            }
        }

        $result_Api = DirectAPI::_makeRequest($url,$val,$method);



        if(isset($result_Api) && $result_Api->httpcode == 200){
            $result = $result_Api->dataOfApi;

            if ($result->item == 1){
                $data = $result->data;

                $dataitem = $result->dataitem;
                Session::put('path', $_SERVER['REQUEST_URI']);
                $slug = $data->slug;
                $id = $data->id;
                return view('frontend.pages.article.show')
                    ->with('dataitem',$dataitem)
                    ->with('slug',$slug)
                    ->with('id',$id)
                    ->with('data',$data);
            }else{

                $result = $result_Api->dataOfApi;
                $data = $result->data;
                $title = $result->categoryarticle;

                $data = new LengthAwarePaginator($data->data, $data->total, $data->per_page, $data->current_page, $data->data);

                Session::put('path', $_SERVER['REQUEST_URI']);
                return view('frontend.pages.article.indexcategory')
                    ->with('title',$title)
                    ->with('data',$data)
                    ->with('slug',$slug);
            }

        }else{
            return redirect('/404');
        }
    }

    public function showThame2(Request $request,$slug){

        $url = '/article/'.$slug;
        $method = "GET";
        $val = array();
        $result_Api = DirectAPI::_makeRequest($url,$val,$method);

        if(isset($result_Api) && $result_Api->httpcode == 200){
            $result = $result_Api->dataOfApi;

            if ($result->item == 1){
                $data = $result->data;

                $dataitem = $result->dataitem;
                Session::put('path', $_SERVER['REQUEST_URI']);
                $slug = $data->slug;
                $id = $data->id;
                return view('frontend.pages.article.show')
                    ->with('dataitem',$dataitem)
                    ->with('slug',$slug)
                    ->with('id',$id)
                    ->with('data',$data);
            }else{
                $result = $result_Api->data;
                $data = $result->data;
                $datacategory = $result->datacategory;
                $title = $result->categoryarticle;

                $per_page = 0;
                $total = 0;
                if (isset($data->total)){
                    $total = $data->total;
                }

                if (isset($data->to)){
                    $per_page = $data->to;
                }

                $data = new LengthAwarePaginator($data->data, $data->total, $data->per_page, $data->current_page, $data->data);

                Session::put('path', $_SERVER['REQUEST_URI']);
                if (theme('')->theme_key == 'theme_1'){
                    return view('frontend.pages.article.index')
                        ->with('title',$title)
                        ->with('data',$data)
                        ->with('slug',$slug);
                }elseif (theme('')->theme_key == 'theme_2'){
                    return view('frontend.pages.article.indexcategory')
                        ->with('title',$title)
                        ->with('data',$data)
                        ->with('per_page',$per_page)
                        ->with('total',$total)
                        ->with('datacategory',$datacategory)
                        ->with('slug',$slug);
                }

            }

        }else{
            return redirect('/404');
        }
    }

    public function showArticleCategory(Request $request,$slug){
        $url = '/show-service-category';
        $method = "GET";
        $val = array();
        $val['slug'] = $slug;

        $result_Api = DirectAPI::_makeRequest($url,$val,$method);
        if(isset($result_Api) && $result_Api->httpcode == 200){
            $result = $result_Api->dataOfApi;

            if ($result->is_router == false){
                $data = $result->data;
                $categoryservice = $result->categoryservice;
                $categoryservice = $categoryservice->data;
                //return $data;

                return view('frontend.pages.service.show')
                    ->with('categoryservice',$categoryservice)
                    ->with('data',$data)
                    ->with('slug',$slug);
            }


            $data = $result->categoryservice;

            return view('frontend.pages.service.show_service_category')
                ->with('slug',$slug)
                ->with('data',$data);
        }else{
            return redirect('/404');
        }

    }
}
