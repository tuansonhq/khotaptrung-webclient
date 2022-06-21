<?php
use App\Http\Controllers\Frontend\AccController;
use App\Http\Controllers\Frontend\ArticleController;
use App\Http\Controllers\Frontend\CaptchaController;
use App\Http\Controllers\Frontend\CaptchaServiceController;
use App\Http\Controllers\Frontend\ChargeController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\ServiceController;
use Carbon\Carbon;
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

Route::get('/clear-cache', function ()
{

});



Route::get('/session', function ()
{
    Session::flush();
    return redirect()->to('/');
});
Route::get('/github/test', function (Request $request)
{
    $path = storage_path() ."/logs/github/";
    if(!\File::exists($path)){
        \File::makeDirectory($path, $mode = "0755", true, true);
    }
    $txt = Carbon::now().":".$request->fullUrl().json_encode($request->all());
    \File::append($path.Carbon::now()->format('Y-m-d').".txt",$txt."\n");
});

Route::get('/test111', function ()
{
    return 1111;
})->middleware('throttle:5,1');

//if (isset(theme('')->theme_key)){
//    if (theme('')->theme_key == 'theme_1'){

Route::group(array('middleware' => ['theme']) , function (){
        Route::group(array('middleware' => ['throttle:300,1','verify_shop']) , function (){
            Route::get('/updategit', function ()
            {


                $command='git pull https://'.config('git.git_secret').'@github.com/tannm2611/khotaptrung-webclient.git '.config('git.git_branch');

                $output = shell_exec($command);
                dd($command,$output);
                \Artisan::call('cache:clear');
                \Artisan::call('config:cache');
                \Artisan::call('view:clear');
                \Artisan::call('route:clear');
                Cache::flush();

                return response()->json([
                    'status' => 1,
                    'message' => 'Thành công!',
                    'message-git' => $output
                ]);
            });
            Route::get('/tesstt', function ()
            {
                $url = '/get-random-acc';
                $method = "GET";
                $dataSend = array();
                $dataSend['module'] = 'acc_category';

                $result_Api = DirectAPI::_makeRequest($url,$dataSend,$method);

                return $result_Api;
                return view('index');
            });
            Route::get('/theme', function ()
            {
                return view('index');
            });
            Route::get('/clear', function ()
            {
                \Artisan::call('cache:clear');
                \Artisan::call('config:cache');
                \Artisan::call('view:clear');
                \Artisan::call('route:clear');
                Cache::flush();
                return response()->json([
                    'status' => 1,
                    'message' => 'Thành công!'
                ]);
            });


            Route::get('/top-charge', [\App\Http\Controllers\Frontend\HomeController::class , 'getTopCharge'])->name('getTopCharge');
            Route::group(['middleware' => ['cacheResponse: 604800']], function (){
                Route::get('/', [HomeController::class , "index"]);
                Route::get('/ip', function (\Illuminate\Http\Request $request)
                {
                    return $request->getClientIp();
                    foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key){
                        if (array_key_exists($key, $_SERVER) === true){
                            foreach (explode(',', $_SERVER[$key]) as $ip){
                                $ip = trim($ip); // just to be safe
                                if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false){
                                    return $ip;
                                }
                            }
                        }
                    }
                    return request()->ip(); // it will return server ip when no client ip found

                });

                Route::get('/tin-tuc', [ArticleController::class , "getList"]);

                Route::get('/tin-tuc/{slug}', [ArticleController::class , "getDetail"]);

                Route::get('/dich-vu', [ServiceController::class , "getList"]);

                Route::get('/dich-vu/{slug}', [ServiceController::class , "getDetail"]);

                Route::get('/show-bot', [ServiceController::class , "showBot"]);

                Route::get('/mua-acc', [AccController::class , "getCategory"]);

                Route::get('/mua-acc', [AccController::class , "getCategory"]);

                Route::get('/mua-acc/{slug}', [AccController::class , "getList"]);

                Route::get('/lich-su-tra-gop',function(){
                    return view('frontend.pages.account.logs-installment');
                });

                Route::get('/related-acc', [AccController::class , "getRelated"]);

                Route::get('/acc/{slug}', [AccController::class , "getDetail"]);
                Route::get('/acc/{slug}/showacc', [AccController::class , "getShowDetail"]);

                Route::get('/acc/{id}/databuy', [AccController::class , "getBuyAccount"]);


                Route::group(['middleware' => ['auth_custom']], function (){


                });

                    Route::group(['middleware' => ['doNotCacheResponse']], function (){


                        Route::post('/user/account_info', [UserController::class , "getInfo"]);
                        Route::get('/mua-the', [\App\Http\Controllers\Frontend\StoreCardController::class , 'getStoreCard'])->name('getStoreCard');
                        // lấy nhà mạng mua thẻ
                        Route::get('/store-card/get-telecom', [\App\Http\Controllers\Frontend\StoreCardController::class , 'getTelecomStoreCard'])->name('getTelecomStoreCard');
                        // lấy mệnh giá trong mua thẻ
                        Route::get('/store-card/get-amount', [\App\Http\Controllers\Frontend\StoreCardController::class , 'getAmountStoreCard'])
                            ->name('getAmountStoreCard');
                        Route::group(['middleware' => ['auth_custom']], function (){
                            //profile
                            Route::get('/profile-info', [\App\Http\Controllers\Frontend\UserController::class , 'profile'])
                                ->name('index');

                            Route::get('/thong-tin', [\App\Http\Controllers\Frontend\UserController::class , 'getThongTin'])
                                ->name('getThongTin');

                            Route::get('/the-cao-da-mua', [\App\Http\Controllers\Frontend\UserController::class , 'getLogsStore'])
                                ->name('getLogsStore');

                            Route::get('/the-cao-da-mua/data', [\App\Http\Controllers\Frontend\UserController::class , 'getLogsStoreData'])
                                ->name('getLogsStore');

                            Route::get('/thong-tin', [\App\Http\Controllers\Frontend\UserController::class , 'info']);

                            Route::get('/nap-the', [\App\Http\Controllers\Frontend\ChargeController::class , 'getDepositAuto'])->name('getDepositAuto');
                            // route post mua thẻ

                            //lịch sử nạp thẻ


                            Route::get('/lich-su-nap-the', [\App\Http\Controllers\Frontend\ChargeController::class , 'getChargeDepositHistory'])
                                ->name('getChargeDepositHistory');

                            Route::post('{slug_category}/{id}/databuy', [AccController::class , "postBuyAccount"]);

                            Route::get('/lich-su-mua-account', [\App\Http\Controllers\Frontend\AccController::class , 'getLogs'])
                                ->name('getBuyAccountHistory');
                            Route::get('/lich-su-mua-account/showpass', [\App\Http\Controllers\Frontend\AccController::class , 'getShowpass'])
                                ->name('getShowpass');
                            //dịch vụ
                            Route::get('/dich-vu-da-mua', [\App\Http\Controllers\Frontend\ServiceController::class , 'getLogs'])
                                ->name('getBuyServiceHistory');

                            Route::get('/dich-vu-da-mua-{id}', [\App\Http\Controllers\Frontend\ServiceController::class , 'getLogsDetail']);

                            Route::get('/inbox/send/{id}', [\App\Http\Controllers\Frontend\ServiceController::class , 'getInbox'])
                                ->name('getInbox');
                            Route::post('/inbox/send/{id}', [\App\Http\Controllers\Frontend\ServiceController::class , 'portInbox'])
                                ->name('portInbox');
                            Route::get('/destroyservice', [\App\Http\Controllers\Frontend\ServiceController::class , 'getDelete'])
                                ->name('getDeleteServiceData');

                            Route::get('/editservice', [\App\Http\Controllers\Frontend\ServiceController::class , 'getEdit'])
                                ->name('getEditServiceData');

                            Route::post('/dich-vu-da-mua-{id}/destroy',[\App\Http\Controllers\Frontend\ServiceController::class , 'postDestroy'])
                                ->name('postDestroy');

                            Route::post('/dich-vu-da-mua-{id}/edit',[\App\Http\Controllers\Frontend\ServiceController::class , 'postEdit'])
                                ->name('postEdit');

                            Route::post('/dich-vu/{id}/purchase',[\App\Http\Controllers\Frontend\ServiceController::class , 'postPurchase']);

                            Route::get('/lich-su-giao-dich-tich-hop', [\App\Http\Controllers\Frontend\UserController::class , 'getTransactionShopCard']);

                            Route::get('/lich-su-nap-the-tich-hop', [\App\Http\Controllers\Frontend\UserController::class , 'getChargeHistory']);
                            Route::get('/lich-su-nap-the-atm', [\App\Http\Controllers\Frontend\UserController::class , 'getChargeATMHistory']);

                            Route::get('/lich-su-mua-the-tich-hop', [\App\Http\Controllers\Frontend\UserController::class , 'getStoreHistory']);

                            Route::get('/lich-su-giao-dich', [\App\Http\Controllers\Frontend\UserController::class , 'getTran']);
                            //Nạp thẻ Atm

                            Route::get('/transfer', [\App\Http\Controllers\Frontend\TranferController::class , 'index']);

                            Route::get('/transfer-code', [\App\Http\Controllers\Frontend\TranferController::class , 'getIdCode'])
                                ->name('getIdCode');

                            Route::get('/lich-su-atm-tu-dong', [\App\Http\Controllers\Frontend\TranferController::class , 'logs']);

                            Route::get('/transfer/data', [\App\Http\Controllers\Frontend\TranferController::class , 'getHistoryTranfer']);

                        });
                        // ROUTE cần auth load dữ liệu không cache

                        Route::get('/get-tele-card', [\App\Http\Controllers\Frontend\ChargeController::class , 'getTelecom']);
                        Route::get('/get-tele-card/data', [\App\Http\Controllers\Frontend\ChargeController::class , 'getDepositAutoData']);
                        Route::get('/get-amount-tele-card', [\App\Http\Controllers\Frontend\ChargeController::class , 'getTelecomDepositAuto']);
                        Route::post('/nap-the', [\App\Http\Controllers\Frontend\ChargeController::class , 'postTelecomDepositAuto'])->name('postTelecomDepositAuto');


                    });

                // Route không cần Auth load dữ liệu không cache
                Route::group(['middleware' => ['doNotCacheResponse']], function (){
                    Route::post('/logout', [\App\Http\Controllers\Frontend\Auth\LoginController::class , 'logout'])->name('logout');
                    Route::get('/sitemap.xml', [\App\Http\Controllers\Frontend\SiteMapController::class , 'index']);
                    Route::get('/login', [\App\Http\Controllers\Frontend\Auth\LoginController::class , 'login'])
                        ->name('login');
                    Route::get('/user/access', [\App\Http\Controllers\Frontend\Auth\LoginController::class , 'accesUser']);
                    Route::post('/login', [\App\Http\Controllers\Frontend\Auth\LoginController::class , 'postLogin']);
                    Route::post('loginApi', [\App\Http\Controllers\Frontend\Auth\LoginController::class , 'loginApi'])
                        ->name('loginApi');
                    Route::get('/404', function ()
                    {
                        return view('frontend.pages.404');
                    });
                    Route::get('/loginfacebook', [\App\Http\Controllers\Frontend\Auth\LoginController::class , 'loginfacebook'])
                        ->name('loginfacebook');
                    //capcha
                    Route::get('/first-captcha', [ChargeController::class , 'myCaptcha']);
                    Route::get('/reload-captcha', [ChargeController::class , 'reloadCaptcha']);
                    Route::get('/reload-captcha2', [ChargeController::class , 'reloadCaptcha2']);


                    Route::get('/contact-form', [ChargeController::class, 'index']);
                    Route::post('/captcha-validation', [ChargeController::class, 'capthcaFormValidate']);

                });

                //        Route::get('/{slug_category}/{slug}/data',[AccController::class,"getShowCategoryData"]);
                Route::get('/rut-vat-pham', function ()
                {
                    return view('frontend.pages.account.user.rutvatpham');
                });

                Route::get('/quay-ngay', function ()
                {
                    return view('frontend.pages.item_spin');
                });

                Route::get('/choi-ngay', function ()
                {
                    return view('frontend.pages.item_play');
                });

                Route::get('/mua-ngay', function ()
                {
                    return view('frontend.pages.item_buy');
                });
                Route::get('/mua-ngay/chi-tiet', function ()
                {
                    return view('frontend.pages.item_buy_detail');
                });
                Route::get('/tai-khoan-da-mua', function ()
                {
                    return view('frontend.pages.account.user.account_buy');
                });
                Route::get('/tai-khoan-tra-gop', function ()
                {
                    return view('frontend.pages.account.user.account_installment');
                });
                Route::get('/lich-su-quay-thuong', function ()
                {
                    return view('frontend.pages.account.user.spin_history');
                });

                Route::get('/gieo-que', function ()
                {
                    return view('frontend.pages.account.user.gieoque');
                });
                //đăng nhập, đăng xuất, đăng ký

                Route::get('/register', [\App\Http\Controllers\Frontend\Auth\RegisterController::class , 'showFormRegister'])
                    ->name('register');
                Route::post('register', [\App\Http\Controllers\Frontend\Auth\RegisterController::class , 'register']);
                Route::get('/changepassword', [\App\Http\Controllers\Frontend\Auth\LoginController::class , 'changePassword'])
                    ->name('changePassword');
                Route::post('/changePasswordApi', [\App\Http\Controllers\Frontend\Auth\LoginController::class , 'changePasswordApi'])
                    ->name('changePasswordApi');


                Route::get('/show', function ()
                {
                    return view('frontend.pages.service.show');
                });

                Route::group(array(
                    'middleware' => ['auth']
                ) , function ()
                {

                    Route::post('/post-deposit', [\App\Http\Controllers\Frontend\ChargeController::class , 'postDeposit'])
                        ->name('postDeposit');
                    Route::get('/get-amount-card', [\App\Http\Controllers\Frontend\ChargeController::class , 'getAmountCharge'])
                        ->name('getAmountCharge');


//
//
//                    Route::get('/transfer-bank', [\App\Http\Controllers\Frontend\TranferController::class , 'postDepositBank'])
//                        ->name('postDepositBank');
//                    Route::get('/get-bank', [\App\Http\Controllers\Frontend\TranferController::class , 'getBankTranfer']);
//                    Route::post('/transfer-api', [\App\Http\Controllers\Frontend\TranferController::class , 'postTranferBank'])
//                        ->name('postTranferBank');


                });

                //minigame
                Route::group(['middleware' => ['doNotCacheResponse']], function (){
                    Route::post('/minigame-play', [\App\Http\Controllers\Frontend\MinigameController::class , 'postRoll'])
                        ->name('postRoll');
                    Route::post('/minigame-bonus', [\App\Http\Controllers\Frontend\MinigameController::class , 'postBonus'])
                        ->name('postBonus');
                    Route::get('/minigame-log-{id}', [\App\Http\Controllers\Frontend\MinigameController::class , 'getLog'])
                        ->name('getLog');
                    Route::get('/minigame-logacc-{id}', [\App\Http\Controllers\Frontend\MinigameController::class , 'getLogAcc'])
                        ->name('getLogAcc');
                    Route::get('/minigame-{slug}', [\App\Http\Controllers\Frontend\MinigameController::class , 'getIndex'])
                        ->name('getIndex');
                    Route::get('/withdrawitem-{game_type}', [\App\Http\Controllers\Frontend\MinigameController::class , 'getWithdrawItem'])
                        ->name('getWithdrawItem');
                    Route::post('/withdrawitem-{game_type}', [\App\Http\Controllers\Frontend\MinigameController::class , 'postWithdrawItem'])
                        ->name('postWithdrawItem');
                    Route::post('/withdrawitemajax-{game_type}', [\App\Http\Controllers\Frontend\MinigameController::class , 'postWithdrawItemAjax'])
                        ->name('postWithdrawItemAjax');
                });


            });
            Route::post('/mua-the', [\App\Http\Controllers\Frontend\StoreCardController::class , 'postStoreCard'])->name('postStoreCard');

//    Route::group(['middleware' => ['auth_custom']], function (){
//        Route::group(['middleware' => ['cacheResponse:300']], function (){
//            Route::get('/nap-the', [\App\Http\Controllers\Frontend\ChargeController::class , 'getDepositAuto'])
//            ->name('getDepositAuto');
//        });
//    });
        });
});

//    }
//    elseif (theme('')->theme_key == 'theme_2'){
//        Route::group(array('middleware' => ['verify_shop']) , function (){
//            Route::group(['middleware' => ['cacheResponse:300']], function (){
//                Route::group(['middleware' => ['doNotCacheResponse']], function (){
//                    Route::post('/logout', [\App\Http\Controllers\Frontend\Auth\LoginController::class , 'logout'])->name('logout');
//
//
//                });
//                //đăng nhập, đăng xuất, đăng ký
//                Route::get('/login', [\App\Http\Controllers\Frontend\Auth\LoginController::class , 'login'])
//                    ->name('login');
//                Route::post('/login', [\App\Http\Controllers\Frontend\Auth\LoginController::class , 'postLogin']);
//                Route::post('loginApi', [\App\Http\Controllers\Frontend\Auth\LoginController::class , 'loginApi'])
//                    ->name('loginApi');
//                Route::get('/loginfacebook', [\App\Http\Controllers\Frontend\Auth\LoginController::class , 'loginfacebook'])
//                    ->name('loginfacebook');
//                Route::get('/register', [\App\Http\Controllers\Frontend\Auth\RegisterController::class , 'showFormRegister'])
//                    ->name('register');
//                Route::post('register', [\App\Http\Controllers\Frontend\Auth\RegisterController::class , 'register']);
//                Route::get('/changepassword', [\App\Http\Controllers\Frontend\Auth\LoginController::class , 'changePassword'])
//                    ->name('changePassword');
//                Route::post('/changePasswordApi', [\App\Http\Controllers\Frontend\Auth\LoginController::class , 'changePasswordApi'])
//                    ->name('changePasswordApi');
//
//
//
//                Route::get('/blog', [ArticleController::class , "index"]);
//                Route::get('/blog/data', [ArticleController::class , "getData"]);
//                Route::get('/blog/{slug}/data', [ArticleController::class , "getCategoryData"]);
//                Route::get('/blog/{slug}', [ArticleController::class , "show"]);
//
//                Route::get('/', function ()
//                {
//                    return view('frontend.theme_2.pages.index');
//                });
//                Route::get('/user/profile', function ()
//                {
//                    return view('frontend.theme_2.pages.user.profile');
//                });
////                Route::get('/blog', function ()
////                {
////                    return view('frontend.theme_2.pages.blog');
////                });
////                Route::get('/blog/single', function ()
////                {
////                    return view('frontend.theme_2.pages.blog_single');
////                });
//                Route::get('/nap-the', function ()
//                {
//                    return view('frontend.theme_2.pages.deposit');
//                });
//                Route::get('/mua-the', function ()
//                {
//                    return view('frontend.theme_2.pages.buy');
//                });
//                Route::get('/ho-tro', function ()
//                {
//                    return view('frontend.theme_2.pages.support');
//                });
//            });
//        });
//    }
//}




