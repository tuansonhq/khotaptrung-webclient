<?php


namespace App\Library;

use Carbon\Carbon;
use App\Library\DirectAPI;
use Illuminate\Support\Facades\Cache;


class Theme
{
    public static function get($key){
        if ( isset($key) ) {
            $setting = self::getAllSettings();

            $setting_get_key = null;

                    $setting_get_key = $setting;
            if(empty($setting_get_key)){
                return null;
            }
            return self::castValue($setting_get_key->theme_key, $setting_get_key->theme_id);
        }
        return self::getAllSettings();
    }
    public static function getAllSettings(){
//        dd(111);
        if (Cache::has('settings.all')) {
            return Cache::get('settings.all');
        }
        return self::api();
    }
    private static function castValue($val, $castTo)
    {
        switch ($castTo) {
            case 'int':
            case 'integer':
                return intval($val);
                break;

            case 'bool':
            case 'boolean':
                return boolval($val);
                break;

            default:
                return $val;
        }
    }

    public static function api(){
        $url = '/theme/get-theme-config';
        $method = "GET";
        $data = array();

        $result = DirectAPITheme::_makeRequest($url ,$data ,$method);
        if(isset($result) && $result->httpcode == 200){

            $seo = $result->data->data;
            return Cache::rememberForever('settings.all', function() use ($seo) {
                return $seo;
            });
        }
        return Cache::get('settings.all');
    }

}
