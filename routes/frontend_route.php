<?php

use App\Http\Controllers\Frontend\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Library\DirectAPI;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/test-login',function(){
    $url = '/login';
    $data = array();
    $data['username'] = 'truongtest01';
    $data['password'] = '123@@123';
    $data['secret_key'] = 'ZmpVMXozMTJQVDFoSFUrSmFkYVdNZWNpVDg0eHpZRVBjbEl4SE0zUVk0dz0=';
    $data['domain'] = 'youtube.com';
    $method = "POST";
    $result_Api = DirectAPI::_makeRequest($url,$data,$method);
    dd($result_Api);
});
Route::get('/test-profile',function(){
    $url = '/profile';
    $data = array();
    $data['token'] = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvYmFja2VuZC10dC5uaWNrLnZuXC9hcGlcL3YxXC9sb2dpbiIsImlhdCI6MTY0NjIwNzM4NiwiZXhwIjoxNjQ2MjEwOTg2LCJuYmYiOjE2NDYyMDczODYsImp0aSI6Im1xQWxWSnNOOTA3VEpTSWkiLCJzdWIiOjQ0NzYsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.nb--9bFRjpXrkG-5vLZMwMF0hxYJpE_gUtj7Tf3Xsqg';
    $data['secret_key'] = 'ZmpVMXozMTJQVDFoSFUrSmFkYVdNZWNpVDg0eHpZRVBjbEl4SE0zUVk0dz0=';
    $data['domain'] = 'youtube.com';
    $method = "GET";
    $result_Api = DirectAPI::_makeRequest($url,$data,$method);
    dd($result_Api);
});


Route::get('/', function () {
//    if(session()->has('auth_token')){
//        return view('frontend.pages.index');
//        return "Đăng nhập thành công";
//    }else{
    $url = '/serviceson';
    $method = "GET";
    $val = array();
    //$data['token'] = session()->get('auth_token');
    $val['domain'] = "youtube.com";
    $val['secret_key'] = config('api.secret_key');
    $result_Api = DirectAPI::_makeRequest($url,$val,$method);
    $result = $result_Api->data;
    $data = $result->data;

    return view('frontend.pages.index')->with('data',$data);
//    }

});
//Route::get('/logout', function () {
//    return view('frontend.pages.index');
////   return "Đã đăng xuất";
//});

Route::get('/dich-vu', function () {

    return view('frontend.pages.regist');
});

Route::get('/regist', function () {
    return view('frontend.pages.regist');
});

//Route::get('/tin-tuc', function () {
//    return view('frontend.pages.news');
//});

Route::get('/tin-tuc',[ArticleController::class,"index"]);
Route::get('/tin-tuc/data',[ArticleController::class,"getData"]);

Route::get('/tin-tuc/{slug}',[ArticleController::class,"show"]);

//Route::get('/thong-tin', function () {
//    return view('frontend.pages.account.user.index');
//});
Route::get('/rut-vat-pham', function () {
    return view('frontend.pages.account.user.rutvatpham');
});
Route::get('/lich-su-giao-dich', function () {
    return view('frontend.pages.account.user.transaction_history');
});

Route::get('/quay-ngay', function () {
    return view('frontend.pages.item_spin');
});

Route::get('/choi-ngay', function () {
    return view('frontend.pages.item_play');
});

Route::get('/mua-ngay', function () {
    return view('frontend.pages.item_buy');
});
Route::get('/mua-ngay/chi-tiet', function () {
    return view('frontend.pages.item_buy_detail');
});
Route::get('/nap-the-tu-dong', function () {
    return view('frontend.pages.account.user.pay_card');
});
Route::get('/lich-su-nap-the', function () {
    return view('frontend.pages.account.user.pay_card_history');
});
Route::get('/recharge-atm', function () {
    return view('frontend.pages.account.user.pay_atm');
});
Route::get('/tai-khoan-da-mua', function () {
    return view('frontend.pages.account.user.account_buy');
});


Route::get('/tai-khoan-tra-gop', function () {
    return view('frontend.pages.account.user.account_installment');
});



Route::get('/lich-su-quay-thuong', function () {
    return view('frontend.pages.account.user.spin_history');
});

Route::get('/gieo-que', function () {
    return view('frontend.pages.account.user.gieoque');
});

//Route::get('/log-in', function () {
//    return view('frontend.pages.log_in');
//});
Route::get('/login',[\App\Http\Controllers\Frontend\Auth\LoginController::class,'login'])->name('login');
Route::post('loginApi',[\App\Http\Controllers\Frontend\Auth\LoginController::class,'loginApi'])->name('loginApi');
Route::get('/logout',[\App\Http\Controllers\Frontend\Auth\LoginController::class,'logout'])->name('logout');
Route::get('/register',[\App\Http\Controllers\Frontend\Auth\RegisterController::class,'register'])->name('register');
Route::post('registerApi',[\App\Http\Controllers\Frontend\Auth\RegisterController::class,'registerApi'])->name('registerApi');
Route::get('/thong-tin',[\App\Http\Controllers\Frontend\UserController::class,'index'])->name('index');

//Route::get('/thong-tin', function () {
//    return view('frontend.pages.account.user.index');
//});
