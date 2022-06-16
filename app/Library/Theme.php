<?php


namespace App\Library;

use App\Library\DirectAPITheme;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;


class Theme
{
    public static function getTheme($key){
        return Cache::rememberForever('_theme', function() {
            $url = '/theme/get-theme-config';
            $method = "GET";
            $data = array();
            $result = DirectAPI::_makeRequest($url ,$data ,$method);
            if(isset($result) && $result->response_code == 200){
                $seo = $result->response_data->data;
            }
            return $seo;
        });

    }
//    public static function getTheme($key){
//      if (empty($key)){
//          return self::getAllTheme();
//      }
//        $theme = self::getAllTheme();
//        return $theme;
//
//    }
//    public static function getAllTheme(){
//        if (Cache::has('_theme')) {
//            return Cache::get('_theme');
//        }
//        return self::api();
//    }
//    public static function api(){
//        $url = '/theme/get-theme-config';
//        $method = "GET";
//        $data = array();
//        $result = DirectAPITheme::_makeRequest($url ,$data ,$method);
//        if(isset($result) && $result->httpcode == 200){
//            $seo = $result->data->data;
//            return Cache::rememberForever('_theme', function() use ($seo) {
//                return $seo;
//            });
//        }
//
//        return Cache::get('_theme');
//    }
//

}
