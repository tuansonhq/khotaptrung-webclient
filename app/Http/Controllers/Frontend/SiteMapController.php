<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Library\DirectAPI;
use Illuminate\Http\Request;

class SiteMapController extends Controller
{
    //
    public function __construct()
    {

    }

    public function index()
    {
//        menu
        $method  = "POST";
        $method_get  = "GET";
        $url_menu_category = '/menu-category';
        $val  = array();
        $result_Api_menu_category  = DirectAPI::_makeRequest($url_menu_category ,$val ,$method );
//        tin tức
        $url_article = '/article';
        $val_article = array();
        $result_article  = DirectAPI::_makeRequest($url_article ,$val_article ,$method_get );
//        chi tiết tin tức
        $url_article_category = '/get-category';
        $val_article_category = array();
        $result_article_category  = DirectAPI::_makeRequest($url_article_category ,$val_article_category ,$method_get );
//        mua acc
        $url_acc = '/acc';
        $val_acc = array();
        $val_acc['data'] = 'category_list';
        $val_acc['module'] = 'acc_category';
        $result_acc  = DirectAPI::_makeRequest($url_acc ,$val_acc ,$method_get );
//        dịch vụ
        $url_service = '/service';
        $val_service  = array();
        $result_service   = DirectAPI::_makeRequest($url_service ,$val_service ,$method_get );

        $response_data_menu_category = $result_Api_menu_category->response_data??null;
        $response_data_article = $result_article->response_data??null;
        $response_data_article_category = $result_article_category->response_data??null;
        $response_data_acc = $result_acc->response_data??null;
        $response_data_service = $result_service->response_data??null;



        if(isset($response_data_menu_category) && $response_data_menu_category->status == 1 && isset($response_data_menu_category) && $response_data_menu_category->status == 1 && isset($response_data_article) && $response_data_article->status == 1 ){
            $menu = $response_data_menu_category->data;
            $acc = $response_data_acc->data;

//            tin tức
            $article_category = $response_data_article_category->datacategory;
            $article = $response_data_article->data;
            $arrArticle = array();
            $arrArticleLastPage= $article->last_page;
//            dịch vụ
            $service= $response_data_service->data;
            $arrService = array();
            $arrServiceLastPage= $service->last_page;

            for ($i=1;$i<=$arrArticleLastPage;$i++){
                $url_article = '/article';
                $val_article = array();
                $val_article['page'] = $i;
                $result_article  = DirectAPI::_makeRequest($url_article ,$val_article ,$method_get );
                $article_data = $result_article->response_data->data->data;
                array_push($arrArticle,$article_data);

            }
            for ($i=1;$i<=$arrServiceLastPage;$i++){
                $url_service = '/service';
                $val_service = array();
                $val_service['page'] = $i;
                $result_service  = DirectAPI::_makeRequest($url_service ,$val_service ,$method_get );
                $service_data = $result_service->response_data->data->data;
                array_push($arrService,$service_data);

            }

            return response()->view('frontend.pages.sitemap.index', [
                'menu' => $menu,
                'acc' => $acc,
                'article_category' => $article_category,
                'arrArticle' => $arrArticle,
                'arrService' => $arrService,
            ])->header('Content-Type', 'text/xml');
        }

        else{
            return response()->json([
                'status' => 0,
                'message'=>$data->message??"Không thể lấy dữ liệu"
            ]);
        }

    }
}
