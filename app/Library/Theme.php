<?php


namespace App\Library;

use Carbon\Carbon;
use App\Library\DirectAPI;
use Illuminate\Support\Facades\Cache;


class Theme
{
    public static function getTheme($key){
        if ( isset($key) ) {
            $setting = self::getAllTheme();
            $setting_get_key = null;

            $setting_get_key = $setting;
            $setting_get_key_2 = $setting;
            if(empty($setting_get_key)){
                return null;
            }

            return self::getAllTheme();
        }
        return self::getAllTheme();
    }
    public static function getAllTheme(){
//        dd(111);

//        if (Cache::has('themes.all')) {
//            dd(Cache::get('themes.all'));
//            return Cache::getTheme('themes.all');
//        }

        return self::apiTheme();
    }


    public static function apiTheme(){
        if (Cache::get('themes_nick.vn')){
            Cache::get('themes_nick.vn');
        }
        $url = '/theme/get-theme-config';
        $method = "GET";
        $data = array();
        $result = DirectAPITheme::_makeRequest($url ,$data ,$method);

        if(isset($result) && $result->httpcode == 200){

            $seo222 = $result->data->data;

            return Cache::rememberForever('themes_nick.vn', function() use ($seo222) {
                return $seo222;

            });
        }

        return Cache::get('themes_nick.vn');
    }

}
