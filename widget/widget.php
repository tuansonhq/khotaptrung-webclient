<?php


use App\Library\DirectAPI;
use Illuminate\Pagination\LengthAwarePaginator;
use function PHPUnit\Framework\isEmpty;

//theme1
View::composer('frontend.widget.__slider__banner', function ($view) {
    $url_slider = '/get-slider-banner';
    $method_slider = "GET";
    $val_slider = array();

    $result_Api_slider = DirectAPI::_makeRequest($url_slider,$val_slider,$method_slider);
    if(isset($result_Api_slider) && $result_Api_slider->httpcode == 200){
        $result_slider = $result_Api_slider->data;
        $data_slider = $result_slider->data;
    }else{
        return redirect('/404');
    }

    return $view->with('data_slider', $data_slider);
});





View::composer('frontend.widget.__content__home', function ($view) {




//    Acc
    $url = '/acc';
    $method = "GET";
    $val = array();
    $val['data'] = 'category_list';
    $val['module'] = 'acc_category';

    $result_Api = DirectAPI::_makeRequest($url,$val,$method);
//    if(isset($result_Api) && $result_Api->httpcode == 200){
//
//    }else{
//        return redirect('/404');
//    }
    $data= $result_Api->data;


//// Minigame.
//    $param['secret_key'] = config('api.secret_key');
//    $param['domain'] = \Request::server("HTTP_HOST");
//    $url = '/minigame/get-list-minigame';
//    $group_api = DirectAPI::_makeRequest($url,$param,$method);
//    if(isset($group_api) && $group_api->httpcode == 200){
//        $dataGame = $group_api->data;
//    }else{
//
//    }
////    Dich vụ
//
//    $urldichvu = '/get-show-service';
//    $methoddichvu = "GET";
//    $valdichvu = array();
//    $valdichvu['limit'] = 8;
//
//    $result_Apidichvu = DirectAPI::_makeRequest($urldichvu,$valdichvu,$methoddichvu);
//    if(isset($result_Apidichvu) && $result_Apidichvu->httpcode == 200){
//        $datadichvu = $result_Apidichvu->data;
//
//        $datadichvu = $datadichvu->data;
//
//        if (isset($datadichvu->data)){
//            $datadichvu = new LengthAwarePaginator($datadichvu->data, $datadichvu->total, $datadichvu->per_page, $datadichvu->current_page, $datadichvu->data);
//        }else{
//            return redirect('/404');
//        }
//    }


    return $view->with('data', $data);

//        ->with('dataGame', $dataGame)
//        ->with('datadichvu', $datadichvu);
});

View::composer('frontend.widget.__dichvu__lienquan', function ($view) {

    $url = '/get-show-service';
    $method = "GET";
    $val = array();

    $result_Api = DirectAPI::_makeRequest($url,$val,$method);

    if (isset($result_Api) && $result_Api->httpcode == 200) {

        $data = $result_Api->data;
        $data = $data->data;

        $data = new LengthAwarePaginator($data->data, $data->total, $data->per_page, $data->current_page, $data->data);
    }else{
        return redirect('/404');
    }
    return $view->with('data', $data);
});

View::composer('frontend.widget.__menu_category_desktop', function ($view) {

    $url_menu_category = '/menu-category';
    $method_menu_category  = "POST";
    $val_menu_category  = array();
    $result_Api_menu_category  = DirectAPI::_makeRequest($url_menu_category ,$val_menu_category ,$method_menu_category );
    $result_menu_category = $result_Api_menu_category->data;
    $data_menu_category  = $result_menu_category->data;

    return $view->with('data_menu_category', $data_menu_category);

});

View::composer('frontend.widget.__menu_category_mobile', function ($view) {

    $url_menu_category = '/menu-category';
    $method_menu_category  = "POST";
    $val_menu_category  = array();
    $result_Api_menu_category  = DirectAPI::_makeRequest($url_menu_category ,$val_menu_category ,$method_menu_category );
    $result_menu_category = $result_Api_menu_category->data;
    $data_menu_category  = $result_menu_category->data;

    return $view->with('data_menu_category', $data_menu_category);


});
View::composer('frontend.widget.__menu_category', function ($view) {
    $data_menu_category = null;
    $url_menu_category = '/menu-category';
    $method_menu_category  = "POST";
    $val_menu_category  = array();
    $result_Api_menu_category  = DirectAPI::_makeRequest($url_menu_category ,$val_menu_category ,$method_menu_category );
    if(isset($result_Api_menu_category) && $result_Api_menu_category->httpcode == 200){
        $data_menu_category  = $result_Api_menu_category->data->data;
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

    $url = '/article';
    $method = "GET";
    $val = array();

    $result_Api = DirectAPI::_makeRequest($url,$val,$method);
    $result = $result_Api->data;
    $datacategory = $result->datacategory;
    $count = $result->count;
    return $view->with('datacategory', $datacategory)->with('count', $count);
});

View::composer('frontend.widget.__top_nap_the', function ($view) {
    return $view;

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




