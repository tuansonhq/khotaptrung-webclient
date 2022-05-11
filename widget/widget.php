<?php


use App\Library\DirectAPI;
use Illuminate\Pagination\LengthAwarePaginator;
use function PHPUnit\Framework\isEmpty;

//theme1
View::composer('frontend.widget.__slider__banner', function ($view) {

    $data = \Cache::rememberForever('__slider__banner', function() {
        $url = '/get-slider-banner';
        $method = "GET";
        $dataSend = array();

        $result_Api = DirectAPI::_makeRequest($url,$dataSend,$method);
        return $data = $result_Api->dataOfApi->data??null;

    });

    return $view->with('data',$data);

});



View::composer('frontend.widget.__content__home__game', function ($view) {

//    Acc

    $data = \Cache::rememberForever('__content__home__game', function() {

        $url = '/acc';
        $method = "GET";
        $dataSend = array();
        $dataSend['data'] = 'category_list';
        $dataSend['module'] = 'acc_category';

        $result_Api = DirectAPI::_makeRequest($url,$dataSend,$method);

        return $data = $result_Api->dataOfApi->data??null;
    });

    return $view->with('data', $data);
});

View::composer('frontend.widget.__content__home__minigame', function ($view) {

//    Minigame

    $data = \Cache::rememberForever('__content__home__minigame', function() {

        $url = '/minigame/get-list-minigame';
        $method = "GET";
        $dataSend = array();
//        $param['secret_key'] = config('api.secret_key');
//        $param['domain'] = \Request::server("HTTP_HOST");

        $result_Api = DirectAPI::_makeRequest($url,$dataSend,$method);

        return $data = $result_Api->dataOfApi->data??null;
    });

    return $view->with('data', $data);

});

View::composer('frontend.widget.__content__home__dichvu', function ($view) {

    $data = \Cache::rememberForever('__content__home__dichvu', function() {
        $url = '/get-show-service';
        $method = "GET";
        $dataSend = array();
        $dataSend['limit'] = 8;

        $result_Api = DirectAPI::_makeRequest($url,$dataSend,$method);

//        $data = $data->data;
//
//        dd($data->data);
//        $data = new LengthAwarePaginator($data->data, $data->total, $data->per_page, $data->current_page, $data->data);

        return $data = $result_Api->dataOfApi->data->data??null;
    });

    return $view->with('data', $data);

});

View::composer('frontend.widget.__dichvu__lienquan', function ($view) {

    $data = \Cache::rememberForever('__dichvu__lienquan', function() {
        $url = '/service';
        $method = "GET";
        $val = array();

        $result_Api = DirectAPI::_makeRequest($url,$val,$method);

        return $data = $result_Api->dataOfApi->data??null;
    });

    return $view->with('data', $data);
});

View::composer('frontend.widget.__menu_category_desktop', function ($view) {


    $data = \Cache::rememberForever('__menu_category_desktop', function() {
        $url = '/menu-category';
        $method = "POST";
        $dataSend = array();

        $result_Api = DirectAPI::_makeRequest($url,$dataSend,$method);
        return $data = $result_Api->dataOfApi->data;

    });
    return $view->with('data',$data);


});

View::composer('frontend.widget.__menu_category_mobile', function ($view) {


    $data = \Cache::rememberForever('__menu_category_desktop', function() {
        $url = '/menu-category';
        $method = "POST";
        $dataSend = array();

        $result_Api = DirectAPI::_makeRequest($url,$dataSend,$method);
        return $data = $result_Api->dataOfApi->data;

    });
    return $view->with('data',$data);


});
View::composer('frontend.widget.__menu_category', function ($view) {

    try{
        $data_menu_category = \Cache::forever('__menu_category', function() {
            $url_menu_category = '/menu-category';
            $method_menu_category  = "POST";
            $val_menu_category  = array();
            $result_Api_menu_category  = DirectAPI::_makeRequest($url_menu_category ,$val_menu_category ,$method_menu_category );
            return $result_Api_menu_category->data;
        });
    }
    catch(\Exception $e){
        $data_menu_category = null;
    }

    return $view->with('data_menu_category', $data_menu_category);

});
View::composer('frontend.widget.__menu_category_theme2', function ($view) {

    $url_menu_category = '/menu-category';
    $method_menu_category  = "POST";
    $val_menu_category  = array();
    $result_Api_menu_category  = DirectAPI::_makeRequest($url_menu_category ,$val_menu_category ,$method_menu_category );
    $result_menu_category = $result_Api_menu_category->data;
    $data_menu_category  = $result_menu_category->data;

    return $view->with('data_menu_category', $data_menu_category);

});

View::composer('frontend.widget.__menu_profile', function ($view) {

    $url_menu_profile = '/menu-profile';
    $method_menu_profile = "POST";
    $val_menu_profile = array();
    $result_Api_menu_profile = DirectAPI::_makeRequest($url_menu_profile ,$val_menu_profile ,$method_menu_profile );
    $result_menu_profile = $result_Api_menu_profile->data;
    $data_menu_profile = $result_menu_profile->data;

    return $view->with('data_menu_profile', $data_menu_profile);

});

View::composer('frontend.widget.__menu_transaction', function ($view) {

    $url_menu_transaction = '/menu-transaction';
    $method_menu_transaction = "POST";
    $val_menu_transaction = array();
    $result_Api_menu_transaction = DirectAPI::_makeRequest($url_menu_transaction ,$val_menu_transaction ,$method_menu_transaction);
    $result_menu_transaction = $result_Api_menu_transaction->data;
    $data_menu_transaction= $result_menu_transaction->data;

    return $view->with('data_menu_transaction', $data_menu_transaction);
});

View::composer('frontend.widget.__menu__category__article', function ($view) {

    $data = \Cache::rememberForever('__menu__category__article', function() {
        $url = '/get-category';
        $method = "GET";
        $val = array();

        $result_Api = DirectAPI::_makeRequest($url,$val,$method);

        return $data = $result_Api->dataOfApi->datacategory??null;
    });

    return $view->with('data', $data);
});

View::composer('frontend.widget.__top_nap_the', function ($view) {


    $data = \Cache::rememberForever('__top_nap_the', function() {
        $url = '/top-charge';
        $method = "GET";
        $dataSend = array();

        $result_Api = DirectAPI::_makeRequest($url,$dataSend,$method);
        return $data = $result_Api->dataOfApi->data;

    });
    return $view->with('data',$data);



});

View::composer('frontend.widget.__nap_the', function ($view) {
    return $view;

});
//theme 2
View::composer('frontend.widget.__menu__category__article__index', function ($view) {

    $url = '/article';
    $method = "GET";
    $val = array();
    $result_Api = DirectAPI::_makeRequest($url,$val,$method);

    $result = $result_Api->data;
    $datacategory = $result->datacategory;

    $urlshow = '/article';
    $methodshow = "GET";
    $valshow = array();
    $valshow['slug'] = 'tin-moi';

    if (isset($datacategory[1]->slug)){
        $valshow['slug'] = $datacategory[1]->slug;
    }

    $result_Apishow = DirectAPI::_makeRequest($urlshow,$valshow,$methodshow);
    $resultshow = $result_Apishow->data;
    $data = $resultshow->data;
    $data = new LengthAwarePaginator($data->data, $data->total, $data->per_page, $data->current_page, $data->data);
    return $view->with('data', $data);

});

View::composer('frontend.widget.__huongdan__trangchu', function ($view) {

    $url = '/article';
    $method = "GET";
    $val = array();
    $result_Api = DirectAPI::_makeRequest($url,$val,$method);

    $result = $result_Api->data;
    $datacategory = $result->datacategory;

    $urlshow = '/article';
    $methodshow = "GET";
    $valshow = array();
    $valshow['slug'] = 'huong-dan';

    if (isset($datacategory[0]->slug)){
        $valshow['slug'] = $datacategory[0]->slug;
    }

    $result_Apishow = DirectAPI::_makeRequest($urlshow,$valshow,$methodshow);
    $resultshow = $result_Apishow->data;
    $data = $resultshow->data;
    $data = new LengthAwarePaginator($data->data, $data->total, $data->per_page, $data->current_page, $data->data);
    return $view->with('data', $data);

});

View::composer('frontend.widget.__baiviet__lienquan', function ($view) {

    $url = '/article';
    $method = "GET";
    $val = array();
    $result_Api = DirectAPI::_makeRequest($url,$val,$method);

    $result = $result_Api->data;
    $data = $result->data;

    $data = new LengthAwarePaginator($data->data, $data->total, $data->per_page, $data->current_page, $data->data);

    return $view->with('data', $data);

});

View::composer('frontend.widget.__baiviet__trangchu', function ($view) {

    $url = '/article';
    $method = "GET";
    $val = array();
    $result_Api = DirectAPI::_makeRequest($url,$val,$method);

    $result = $result_Api->data;
    $data = $result->data;

    $data = new LengthAwarePaginator($data->data, $data->total, $data->per_page, $data->current_page, $data->data);

    return $view->with('data', $data);

});

View::composer('frontend.widget.__menu__article', function ($view) {

    $url = '/article';
    $method = "GET";
    $val = array();
    $result_Api = DirectAPI::_makeRequest($url,$val,$method);

    $result = $result_Api->data;
    $datacategory = $result->datacategory;

    return $view->with('datacategory', $datacategory);

});



//View::composer('frontend.widget.__charge', function ($view) {
////    if($request->hasCookie('jwt')){
////    dd($request->cookie('jwt'));
////        try{
//            dd(111);
//            $url = '/deposit-auto/get-telecom';
//            $method = "GET";
//            $item = array();
//            $item['token'] = 'dsdsd';
//            $item['secret_key'] = config('api.secret_key');
//            $item['domain'] = 'youtube.com';
//
//            $result_Api = DirectAPI::_makeRequest($url,$item,$method);
//
//            if (isset($result_Api) && $result_Api->httpcode == 200 ) {
//                $result = $result_Api->data;
//
//                if ($result->status == 1) {
//                    return view('frontend.pages.index', compact('result'));
//                }
//                else {
//                    return redirect()->back()->withErrors($result->message);
//
//                }
//            } else {
//                return 'sai';
//            }
//
//        }
//        catch(\Exception $e){
//
//            Log::error($e);
//            return redirect()->back()->withErrors('Có lỗi phát sinh.Xin vui lòng thử lại !');
//        }
//
////    }
////    else{
////        return redirect('login');
////    }
//});




