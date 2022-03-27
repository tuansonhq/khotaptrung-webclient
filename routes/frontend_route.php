<?php

use App\Http\Controllers\Frontend\AccController;
use App\Http\Controllers\Frontend\ArticleController;
use App\Http\Controllers\Frontend\CaptchaServiceController;
use App\Http\Controllers\Frontend\ChargeController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Library\DirectAPI;
use App\Library\AuthCustom;
use Illuminate\Support\Facades\Cache;
use \Illuminate\Support\Facades\Session;

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

Route::get('/clear-cache',function(){

    \Artisan::call('cache:clear');
   \Artisan::call('config:cache');
    \Artisan::call('view:clear');
    \Artisan::call('route:clear');


    Cache::flush();
    return json_encode([
        'status'=>1,
        'message'=>"Clear cache success"
    ]);

});


Route::get('/session',function(){
    Session::flush();
    return redirect()->to('/');
});
//Route::group(array('middleware' => ['verify_shop'],'namespace' => 'Frontend'),function(){
Route::group(array('middleware' => ['verify_shop']),function(){
    Route::post('/user/account_info', [UserController::class, "getInfo"]);
    Route::group(['middleware' => ['cacheResponse:300']], function () {
        Route::get('/', [HomeController::class, "index"]);
        Route::post('/logout', [\App\Http\Controllers\Frontend\Auth\LoginController::class, 'logout'])->name('logout');
        Route::get('/test', function () {
            return view(theme('theme_id') . '.frontend.pages.index');
        });


        Route::get('/test',function(){
            return view(theme('theme_id').'.frontend.pages.index');
        });


        Route::get('/acb', function () {
            dd(1111);
        });

        Route::get('/dich-vu', function () {

            return view('frontend.pages.regist');
        });

        Route::get('/tin-tuc',[ArticleController::class,"index"]);
        Route::get('/tin-tuc/data',[ArticleController::class,"getData"]);
        Route::get('/tin-tuc/{slug}/data',[ArticleController::class,"getCategoryData"]);
        Route::get('/tin-tuc/{slug}',[ArticleController::class,"show"]);

//dichj vụ
        Route::get('/dich-vu',[ServiceController::class,"getServiceCategory"]);
        Route::get('/dich-vu/data',[ServiceController::class,"getServiceCategoryData"]);
        Route::get('/dich-vu/{slug}',[ServiceController::class,"showServiceCategory"]);
        Route::get('/dich-vu/{slug}/data',[ServiceController::class,"showServiceCategoryData"]);

//Danh muc game


        Route::get('/{slug_category}/{slug}',[AccController::class,"getShowCategory"]);
        Route::get('/buy-acc/{id}/databuy', [AccController::class,"getBuyAccount"]);
        Route::get('/{slug_category}/{slug}/data',[AccController::class,"getShowCategoryData"]);

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


        Route::get('/loginfacebook',[\App\Http\Controllers\Frontend\Auth\LoginController::class,'loginfacebook'])->name('loginfacebook');

        Route::get('/register',[\App\Http\Controllers\Frontend\Auth\RegisterController::class,'showFormRegister'])->name('register');
        Route::post('register',[\App\Http\Controllers\Frontend\Auth\RegisterController::class,'register']);
        Route::get('/thong-tin',[\App\Http\Controllers\Frontend\UserController::class,'index'])->name('index');
        Route::get('/changepassword',[\App\Http\Controllers\Frontend\Auth\LoginController::class,'changePassword'])->name('changePassword');
        Route::post('/changePasswordApi',[\App\Http\Controllers\Frontend\Auth\LoginController::class,'changePasswordApi'])->name('changePasswordApi');
        Route::get('/lich-su-giao-dich',[\App\Http\Controllers\Frontend\ChargeController::class,'getDepositHistory'])->name('getDepositHistory');





        Route::get('/reload-captcha', [CaptchaServiceController::class, 'reloadCaptcha']);

//        Route::get('/lich-su-nap-the', function () {
//            return view('frontend.pages.account.user.pay_card_history');
//        });
//Route::get('/nap-the-tu-dong', function () {
//    return view('frontend.pages.account.user.pay_card');
//});
//Route::get('/thong-tin', function () {
//    return view('frontend.pages.account.user.index');
//});


        Route::get('/show', function () {

            return view('frontend.pages.service.show');
        });



        Route::group(array('middleware' => ['auth']),function(){
            Route::get('/lich-su-nap-the',[\App\Http\Controllers\Frontend\ChargeController::class,'getChargeDepositHistory'])->name('getChargeDepositHistory');
            Route::get('/lich-su-nap-the/data',[\App\Http\Controllers\Frontend\ChargeController::class,'getChargeDepositHistoryData'])->name('getChargeDepositHistoryData');

            Route::get('/nap-the',[\App\Http\Controllers\Frontend\ChargeController::class,'getDepositAuto'])->name('getDepositAuto');
            Route::get('/nap-the/data',[\App\Http\Controllers\Frontend\ChargeController::class,'getDepositAutoData'])->name('getDepositAutoData');
            Route::post('/nap-the-tu-dong-api',[\App\Http\Controllers\Frontend\ChargeController::class,'postTelecomDepositAuto'])->name('postTelecomDepositAuto');
            Route::get('/telecom-deposit-auto',[\App\Http\Controllers\Frontend\ChargeController::class,'getTelecomDepositAuto'])->name('getTelecomDepositAuto');

            Route::get('/recharge-atm',[\App\Http\Controllers\Frontend\TranferController::class,'getBank'])->name('getBank');
            Route::get('/recharge-atm/data',[\App\Http\Controllers\Frontend\TranferController::class,'getBankData'])->name('getBankData');

            Route::get('/recharge-atm-bank',[\App\Http\Controllers\Frontend\TranferController::class,'postDepositBank'])->name('postDepositBank');
            Route::post('/recharge-atm-api',[\App\Http\Controllers\Frontend\TranferController::class,'postTranferBank'])->name('postTranferBank');
            Route::post('/post-Store-Card',[\App\Http\Controllers\Frontend\StoreCardController::class,'postStoreCard'])->name('postStoreCard');
            Route::post('/post-deposit',[\App\Http\Controllers\Frontend\ChargeController::class,'postDeposit'])->name('postDeposit');
//Route::get('/mua-the',[\App\Http\Controllers\Frontend\TranferController::class,'postTranferBank'])->name('postTranferBank');
            Route::get('/get-amount-card',[\App\Http\Controllers\Frontend\ChargeController::class,'getAmountCharge'])->name('getAmountCharge');

            Route::get('/mua-the',[\App\Http\Controllers\Frontend\StoreCardController::class,'getTelecomStoreCard'])->name('getTelecomStoreCard');
            Route::get('/mua-the-api',[\App\Http\Controllers\Frontend\StoreCardController::class,'getAmountStoreCard'])->name('getAmountStoreCard');

            Route::post('/buy-acc/{id}/databuy', [AccController::class,"postBuyAccount"]);
        });

        Route::group(['middleware' => ['doNotCacheResponse']], function () {
            //minigame
            Route::post('/minigame-play', [\App\Http\Controllers\Frontend\MinigameController::class,'postRoll'])->name('postRoll');
            Route::post('/minigame-bonus', [\App\Http\Controllers\Frontend\MinigameController::class,'postBonus'])->name('postBonus');
            Route::get('/minigame-log-{id}',[\App\Http\Controllers\Frontend\MinigameController::class,'getLog'])->name('getLog');
            Route::get('/minigame-logacc-{id}',[\App\Http\Controllers\Frontend\MinigameController::class,'getLogAcc'])->name('getLogAcc');
            Route::get('/minigame-{slug}',[\App\Http\Controllers\Frontend\MinigameController::class,'getIndex'])->name('getIndex');
            Route::get('/withdrawitem-{game_type}',[\App\Http\Controllers\Frontend\MinigameController::class,'getWithdrawItem'])->name('getWithdrawItem');
            Route::post('/withdrawitem-{game_type}',[\App\Http\Controllers\Frontend\MinigameController::class,'postWithdrawItem'])->name('postWithdrawItem');
        });

    });

});

