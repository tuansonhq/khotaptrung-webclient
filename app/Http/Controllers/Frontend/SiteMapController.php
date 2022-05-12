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
        $url_menu_category = '/menu-category';
        $val  = array();
        $result_Api_menu_category  = DirectAPI::_makeRequest($url_menu_category ,$val ,$method );

        $url_article = '/article';
        $method_article = "GET";
        $val_article = array();
        $result_article  = DirectAPI::_makeRequest($url_article ,$val_article ,$method_article );

        $url_article_category = '/get-category';
        $method_article_category = "GET";
        $val_article_category = array();
        $result_article_category  = DirectAPI::_makeRequest($url_article_category ,$val_article_category ,$method_article_category );

        $response_data_menu_category = $result_Api_menu_category->response_data??null;
        $response_data_article = $result_article->response_data??null;
        $response_data_article_category = $result_article_category->response_data??null;
        if(isset($response_data_menu_category) && $response_data_menu_category->status == 1 && isset($response_data_menu_category) && $response_data_menu_category->status == 1 && isset($response_data_article) && $response_data_article->status == 1){
            $menu = $response_data_menu_category->data;

            $article_category = $response_data_article_category->datacategory;

            $article = $response_data_article->data;

//            dd($article);
            $arrArticle = array();
            $arrArticleLastPage= $article->last_page;

            for ($i=1;$i<=$arrArticleLastPage;$i++){
                $url_article = '/article';
                $method_article = "GET";
                $val_article = array();
                $val_article['page'] = $i;
                $result_article  = DirectAPI::_makeRequest($url_article ,$val_article ,$method_article );
                $article_data = $result_article->response_data->data->data;

                array_push($arrArticle,$article_data);

            }
            return response()->view('frontend.pages.sitemap.index', [
                'menu' => $menu,
                'article_category' => $article_category,
                'arrArticle' => $arrArticle,
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
