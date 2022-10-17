<?php


namespace App\Library;

use App\Library\DirectAPITheme;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;


class Theme
{
    public static function getTheme($id){
        return Cache::rememberForever('_theme', function() {
            $seo = null;
            $url = '/theme/get-theme-config';
            $method = "GET";
            $data = array();
            $result = DirectAPI::_makeRequest($url ,$data ,$method);

            if(isset($result) && $result->response_code == 200){
                $seo = $result->response_data->data;

                if (empty(get_object_vars($seo))){
                    $data = new \stdClass();
                    $data->theme_key = 'theme_1';
                    $seo = $data;
                }
            }

            return $seo;
        });

    }

//    public static function getTheme($id){
//        if ($id){
//            \Artisan::call('cache:clear');
//            \Artisan::call('config:cache');
//            \Artisan::call('view:clear');
//            \Artisan::call('route:clear');
//            Cache::flush();
//            return Cache::rememberForever('_theme', function() use ($id) {
//                $data = new \stdClass();
//                $data->theme_key = 'theme_'.$id;
//                $seo = $data;
//                return $seo;
//            });
//        }else{
//            return Cache::rememberForever('_theme', function() {
//                $seo = null;
//                $url = '/theme/get-theme-config';
//                $method = "GET";
//                $data = array();
//                $result = DirectAPI::_makeRequest($url ,$data ,$method);
//
//                if(isset($result) && $result->response_code == 200){
//
//                    $seo = $result->response_data->data;
//                    if (empty(get_object_vars($seo))){
//                        $data = new \stdClass();
//                        $data->theme_key = 'theme_1';
//                        $seo = $data;
//                    }
//                }
//                return $seo;
//            });
//        }
//
//
//    }
}
