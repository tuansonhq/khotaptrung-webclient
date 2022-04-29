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
        if(isset($result_Api_menu_category) && $result_Api_menu_category->httpcode == 200 && isset($result_article) && $result_article->httpcode == 200){
            $menu = $result_Api_menu_category->data;

            $article_category = $result_article->data;
            $article = $result_article->data->data;
            $arrArticle = array();
            $arrArticleLastPage= $article->last_page;
            for ($i=1;$i<=$arrArticleLastPage;$i++){
                $url_article = '/article';
                $method_article = "GET";
                $val_article = array();
                $val_article['page'] = $i;
                $result_article  = DirectAPI::_makeRequest($url_article ,$val_article ,$method_article );
                $article_data = $result_article->data->data->data;
                array_push($arrArticle,$article_data);

            }
            return response()->view('frontend.pages.sitemap.index', [
                'menu' => $menu->data,
                'article_category' => $article_category->datacategory,
                'arrArticle' => $arrArticle,
            ])->header('Content-Type', 'text/xml');
        }
    }
}
