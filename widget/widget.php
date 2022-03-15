<?php


use App\Library\DirectAPI;

View::composer('frontend.widget.__slider__banner', function ($view) {

    $url_slider = '/get-slider-banner';
    $method_slider = "GET";
    $val_slider = array();
    $val_slider['domain'] = "youtube.com";
    $val_slider['secret_key'] = config('api.secret_key');

    $result_Api_slider = DirectAPI::_makeRequest($url_slider,$val_slider,$method_slider);
    $result_slider = $result_Api_slider->data;
    $data_slider = $result_slider->data;

    return $view->with('data_slider', $data_slider);
});

View::composer('frontend.widget.__content__home', function ($view) {

    $url = '/serviceson';
    $method = "GET";
    $val = array();

    $val['domain'] = "youtube.com";
    $val['secret_key'] = config('api.secret_key');
    $result_Api = DirectAPI::_makeRequest($url,$val,$method);
    $result = $result_Api->data;
    $data = $result->data;

    return $view->with('data', $data);
});




