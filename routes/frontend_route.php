<?php

use App\Http\Controllers\Frontend\ArticleController;
use App\Http\Controllers\Frontend\CaptchaServiceController;
use App\Http\Controllers\Frontend\ChargeController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Library\DirectAPI;
use App\Library\AuthCustom;

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


// Route::get('/test-login',function(){
//     $url = '/login';
//     $data = array();
//     $data['username'] = 'truongtest01';
//     $data['password'] = '123@@123';
//     $data['secret_key'] = 'ZmpVMXozMTJQVDFoSFUrSmFkYVdNZWNpVDg0eHpZRVBjbEl4SE0zUVk0dz0=';
//     $data['domain'] = 'youtube.com';
//     $method = "POST";
//     $result_Api = DirectAPI::_makeRequest($url,$data,$method);
//     dd($result_Api);
// });
// Route::get('/test-profile',function(){
//     $url = '/profile';
//     $data = array();
//     $data['token'] = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczpcL1wvYmFja2VuZC10dC5uaWNrLnZuXC9hcGlcL3YxXC9sb2dpbiIsImlhdCI6MTY0NjIwNzM4NiwiZXhwIjoxNjQ2MjEwOTg2LCJuYmYiOjE2NDYyMDczODYsImp0aSI6Im1xQWxWSnNOOTA3VEpTSWkiLCJzdWIiOjQ0NzYsInBydiI6IjIzYmQ1Yzg5NDlmNjAwYWRiMzllNzAxYzQwMDg3MmRiN2E1OTc2ZjcifQ.nb--9bFRjpXrkG-5vLZMwMF0hxYJpE_gUtj7Tf3Xsqg';
//     $data['secret_key'] = 'ZmpVMXozMTJQVDFoSFUrSmFkYVdNZWNpVDg0eHpZRVBjbEl4SE0zUVk0dz0=';
//     $data['domain'] = 'youtube.com';
//     $method = "GET";
//     $result_Api = DirectAPI::_makeRequest($url,$data,$method);
//     dd($result_Api);
// });

Route::get('/',[HomeController::class,"index"]);


//Route::get('/logout', function () {
//    return view('frontend.pages.index');
////   return "Đã đăng xuất";
//});

Route::get('/dich-vu', function () {

    return view('frontend.pages.regist');
});

Route::get('/tin-tuc',[ArticleController::class,"index"]);
Route::get('/tin-tuc/data',[ArticleController::class,"getData"]);

Route::get('/tin-tuc/{slug}',[ArticleController::class,"show"]);

//dichj vụ
Route::get('/dich-vu',[ServiceController::class,"getServiceCategory"]);
Route::get('/dich-vu/data',[ServiceController::class,"getServiceCategoryData"]);
Route::get('/dich-vu/{slug}',[ServiceController::class,"showServiceCategory"]);
Route::get('/dich-vu/{slug}/data',[ServiceController::class,"showServiceCategoryData"]);

//Route::get('/thong-tin', function () {
//    return view('frontend.pages.account.user.index');
//});
Route::get('/rut-vat-pham', function () {
    return view('frontend.pages.account.user.rutvatpham');
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
Route::post('/login',[\App\Http\Controllers\Frontend\Auth\LoginController::class,'postLogin']);
Route::post('loginApi',[\App\Http\Controllers\Frontend\Auth\LoginController::class,'loginApi'])->name('loginApi');
Route::get('/logout',[\App\Http\Controllers\Frontend\Auth\LoginController::class,'logout'])->name('logout');
Route::get('/register',[\App\Http\Controllers\Frontend\Auth\RegisterController::class,'register'])->name('register');
Route::post('registerApi',[\App\Http\Controllers\Frontend\Auth\RegisterController::class,'registerApi'])->name('registerApi');
Route::get('/thong-tin',[\App\Http\Controllers\Frontend\UserController::class,'index'])->name('index');
Route::get('/changepassword',[\App\Http\Controllers\Frontend\Auth\LoginController::class,'changePassword'])->name('changePassword');
Route::post('/changePasswordApi',[\App\Http\Controllers\Frontend\Auth\LoginController::class,'changePasswordApi'])->name('changePasswordApi');
Route::get('/lich-su-giao-dich',[\App\Http\Controllers\Frontend\ChargeController::class,'getDepositHistory'])->name('getDepositHistory');
Route::get('/nap-the-tu-dong',[\App\Http\Controllers\Frontend\ChargeController::class,'getDepositAuto'])->name('getDepositAuto');
Route::post('/nap-the-tu-dong-api',[\App\Http\Controllers\Frontend\ChargeController::class,'postTelecomDepositAuto'])->name('postTelecomDepositAuto');
Route::get('/telecom-deposit-auto',[\App\Http\Controllers\Frontend\ChargeController::class,'getTelecomDepositAuto'])->name('getTelecomDepositAuto');

Route::get('/lich-su-nap-the',[ChargeController::class,'getChargeDepositHistory'])->name('getChargeDepositHistory');
Route::get('/lich-su-nap-the/data',[ChargeController::class,'getChargeDepositHistoryData'])->name('getChargeDepositHistoryData');

Route::get('/recharge-atm',[\App\Http\Controllers\Frontend\TranferController::class,'getBank'])->name('getBank');
Route::get('/recharge-atm-bank',[\App\Http\Controllers\Frontend\TranferController::class,'postDepositBank'])->name('postDepositBank');
Route::post('/recharge-atm-api',[\App\Http\Controllers\Frontend\TranferController::class,'postTranferBank'])->name('postTranferBank');
Route::post('/post-Store-Card',[\App\Http\Controllers\Frontend\StoreCardController::class,'postStoreCard'])->name('postStoreCard');
//Route::get('/mua-the',[\App\Http\Controllers\Frontend\TranferController::class,'postTranferBank'])->name('postTranferBank');


Route::get('/mua-the',[\App\Http\Controllers\Frontend\StoreCardController::class,'getTelecomStoreCard'])->name('getTelecomStoreCard');
Route::get('/mua-the-api',[\App\Http\Controllers\Frontend\StoreCardController::class,'getAmountStoreCard'])->name('getAmountStoreCard');
Route::get('/reload-captcha', [CaptchaServiceController::class, 'reloadCaptcha']);

//Route::get('/lich-su-nap-the', function () {
//    return view('frontend.pages.account.user.pay_card_history');
//});
//Route::get('/nap-the-tu-dong', function () {
//    return view('frontend.pages.account.user.pay_card');
//});
//Route::get('/thong-tin', function () {
//    return view('frontend.pages.account.user.index');
//});


Route::get('/show', function () {

    return view('frontend.pages.service.show');
});

Route::get('/show2', function () {

    return view('frontend.pages.service.show2');
});

Route::get('/show3', function () {

    return view('frontend.pages.service.show3');
});

Route::get('/show4', function () {

    return view('frontend.pages.service.show4');
});

Route::get('/show5', function () {

    return view('frontend.pages.service.show5');
});

Route::get('/show6', function () {

    return view('frontend.pages.service.show6');
});
