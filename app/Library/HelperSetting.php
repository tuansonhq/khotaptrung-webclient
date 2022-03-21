<?php


use App\Library\Setting;
use App\Library\Helpers;

if (! function_exists('setting')) {

    function setting($key, $default = null)
    {

        if (is_null($key)) {
           return \App\Library\Setting::getAllSettings();
        }

        if (is_array($key)) {

        }
        $value = \App\Library\Setting::get($key);
        return is_null($value) ? value($default) : $value;
    }
}


if (! function_exists('widget')) {

    function widget($view_name, $time_cache=null)
    {
        if($time_cache==null){
            return $viewRender = Cache::rememberForever('cache_'.$view_name, function () use($view_name){
                return $aCache =  view($view_name)->render();
            });
        }
        else{
            return $viewRender = Cache::remember('cache_'.$view_name, $time_cache, function () use($view_name){
                return $aCache =  view($view_name)->render();
            });
        }
    }
}

if (! function_exists('formatPrice')) {

    function formatPrice($price)
    {
        return Helpers::formatPrice($price);
    }
}

if (! function_exists('formatDateTime')) {

    function formatDateTime($date)
    {
        return Helpers::formatDateTime($date);
    }
}
