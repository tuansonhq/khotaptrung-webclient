<?php
use App\Http\Controllers\Frontend\AccController;
use App\Http\Controllers\Frontend\ArticleController;
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
    \Artisan::call('cache:clear');
    \Artisan::call('config:cache');
    \Artisan::call('view:clear');
    \Artisan::call('route:clear');
    Cache::flush();
    return response()->json([
        'status' => 1,
        'message' => 'Thành công!',

    ]);
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
Route::get('/switch-theme/{id}', [\App\Library\Theme::class , 'getTheme'])->name('getTheme');


Route::get('/tesstt', function ()
{
    $url = '/get-random-acc';
    $method = "GET";
    $dataSend = array();

    $result_Api = DirectAPI::_makeRequest($url,$dataSend,$method);

    return view('index');
});

Route::group(array('middleware' => ['theme']) , function (){
    Route::group(array('middleware' => ['throttle:300,1','verify_shop']) , function (){

        Route::get('/top-charge', [\App\Http\Controllers\Frontend\HomeController::class , 'getTopCharge'])->name('getTopCharge');
        Route::group(['middleware' => ['cacheResponse: 2592000','tracking']], function (){


            Route::group(['middleware' => ['intend']], function () {
                Route::get('/', [HomeController::class , "index"])->middleware('intend');

                Route::get('/tin-tuc', [ArticleController::class , "getList"]);
                Route::get('/tin-tuc/{slug}', [ArticleController::class , "getDetail"]);

                Route::get('/blog', [ArticleController::class , "getList"]);
                Route::get('/blog/{slug}', [ArticleController::class , "getDetail"]);


                Route::get('/dich-vu', [ServiceController::class, "getList"]);
                Route::get('/dich-vu/{slug}', [ServiceController::class, "getDetail"]);
                Route::get('/mua-acc', [AccController::class , "getCategory"]);
                Route::get('/minigame', [\App\Http\Controllers\Frontend\MinigameController::class , 'getCategory'])->name('getCategory');




                Route::get('/mua-the', [\App\Http\Controllers\Frontend\StoreCardController::class , 'getStoreCard'])->name('getStoreCard');
                Route::get('/mua-the-{card}-{value}',[\App\Http\Controllers\Frontend\StoreCardController::class,'showDetailCard'])->name('showDetailCard');
                Route::get('/mua-the-{card}',[\App\Http\Controllers\Frontend\StoreCardController::class,'showListCard'])->name('showListCard');
            });
            Route::get('/show-bot', [ServiceController::class , "showBot"]);
            Route::get('/lich-su-tra-gop',function(){
                return view('frontend.pages.account.logs-installment');
            });
            Route::group(['middleware' => ['intend']], function () {


            });
            Route::group(['middleware' => ['doNotCacheResponse']], function (){
                Route::group(['middleware' => ['intend']], function (){

                    Route::get('/mua-acc/{slug}', [AccController::class , "getList"]);
                    Route::get('/acc/{slug}', [AccController::class , "getDetail"]);
                    Route::get('/acc/{id}/databuy', [AccController::class , "getBuyAccount"]);

                });
                Route::get('/mua-nick-random', [AccController::class , "getShowAccRandom"]);
                Route::get('/related-acc', [AccController::class , "getRelated"]);
                Route::post('/lich-su-mua-nick-{id}/showpass', [\App\Http\Controllers\Frontend\AccController::class , 'getShowpassNick'])->name('getShowpassNick');
                Route::get('/acc/{slug}/showacc', [AccController::class , "getShowDetail"]);
                Route::post('/user/account_info', [UserController::class , "getInfo"]);
                Route::get('/profile', [UserController::class , "profileSidebar"])->name('profile');
                // lấy nhà mạng mua thẻ
                Route::get('/store-card/get-telecom', [\App\Http\Controllers\Frontend\StoreCardController::class , 'getTelecomStoreCard'])->name('getTelecomStoreCard');
                Route::get('/lich-su-mua-the', [\App\Http\Controllers\Frontend\StoreCardController::class , 'getStoreCardHistory']);
                // lấy mệnh giá trong mua thẻ
                Route::get('/store-card/get-amount', [\App\Http\Controllers\Frontend\StoreCardController::class , 'getAmountStoreCard'])->name('getAmountStoreCard');
//                get api atm
                Route::get('/transfer-code', [\App\Http\Controllers\Frontend\TranferController::class , 'getIdCode'])->name('getIdCode');
//                captcha
                Route::get('/first-captcha', [ChargeController::class , 'myCaptcha']);
                Route::get('/reload-captcha', [ChargeController::class , 'reloadCaptcha']);
                Route::get('/reload-captcha2', [ChargeController::class , 'reloadCaptcha2']);
//                 ROUTE cần auth load dữ liệu không cache
                Route::group(['middleware' => ['auth_custom']], function (){
//                    profile
                    Route::get('/profile-info', [\App\Http\Controllers\Frontend\UserController::class , 'profile'])->name('index');
                    Route::get('/thong-tin', [\App\Http\Controllers\Frontend\UserController::class , 'getThongTin'])->name('getThongTin');
                    Route::get('/the-cao-da-mua', [\App\Http\Controllers\Frontend\UserController::class , 'getLogsStore'])->name('getLogsStoreCard');
                    Route::get('/the-cao-da-mua-{id}', [\App\Http\Controllers\Frontend\UserController::class , 'getShowLogsStore'])->name('getShowLogsStore');
                    Route::get('/the-cao-da-mua/data', [\App\Http\Controllers\Frontend\UserController::class , 'getLogsStoreData'])->name('getLogsStoreData');
                    Route::get('/thong-tin', [\App\Http\Controllers\Frontend\UserController::class , 'info']);
                    Route::get('/nap-the', [\App\Http\Controllers\Frontend\ChargeController::class , 'getDepositAuto'])->name('getDepositAuto');
//                    lịch sử nạp thẻ
                    Route::get('/lich-su-nap-the', [\App\Http\Controllers\Frontend\ChargeController::class , 'getChargeDepositHistory'])->name('getChargeDepositHistory');
                    Route::get('/lich-su-nap-the-{id}', [\App\Http\Controllers\Frontend\ChargeController::class , 'getChargeDepositHistoryDetail'])->name('getChargeDepositHistoryDetail');
                    Route::post('{slug_category}/{id}/databuy', [AccController::class , "postBuyAccount"]);

                    if (theme('')->theme_key == "theme_1"||theme('')->theme_key == "theme_4"){
                        /*Theme_1*/
                        Route::get('/lich-su-mua-account', [\App\Http\Controllers\Frontend\AccController::class , 'getLogs'])->name('getBuyAccountHistory');
                    }else {
                        /*Theme_3*/
                        Route::get('/lich-su-mua-account', [\App\Http\Controllers\Frontend\AccController::class ,  'getLogsCustom'])->name('nick-buyed');
                    }
                    Route::get('/lich-su-mua-account-{id}', [\App\Http\Controllers\Frontend\AccController::class , 'getLogsCustomDetails'])->name('getLogsCustomDetails');
                    Route::get('/lich-su-mua-account/get-first-pass', [\App\Http\Controllers\Frontend\AccController::class , 'getFirstPass'])->name('get-first-pass');
                    Route::get('/lich-su-mua-account/showpass', [\App\Http\Controllers\Frontend\AccController::class , 'getShowpass'])->name('getShowpass');
//                    dịch vụ
                    Route::get('/dich-vu-da-mua', [\App\Http\Controllers\Frontend\ServiceController::class , 'getLogs'])->name('getBuyServiceHistory');
                    Route::get('/dich-vu-da-mua-{id}', [\App\Http\Controllers\Frontend\ServiceController::class , 'getLogsDetail']);
                    Route::get('/inbox/send/{id}', [\App\Http\Controllers\Frontend\ServiceController::class , 'getInbox'])->name('getInbox');
                    Route::post('/inbox/send/{id}', [\App\Http\Controllers\Frontend\ServiceController::class , 'portInbox'])->name('portInbox');
                    Route::get('/destroyservice', [\App\Http\Controllers\Frontend\ServiceController::class , 'getDelete'])->name('getDeleteServiceData');
                    Route::get('/editservice', [\App\Http\Controllers\Frontend\ServiceController::class , 'getEdit'])->name('getEditServiceData');
                    Route::post('/dich-vu-da-mua-{id}/destroy',[\App\Http\Controllers\Frontend\ServiceController::class , 'postDestroy'])->name('postDestroy');
                    Route::post('/dich-vu-da-mua-{id}/edit',[\App\Http\Controllers\Frontend\ServiceController::class , 'postEdit'])->name('postEdit');
                    Route::post('/dich-vu/{id}/purchase',[\App\Http\Controllers\Frontend\ServiceController::class , 'postPurchase']);
//                    lịch sử giao dịch
                    Route::get('/lich-su-giao-dich-tich-hop', [\App\Http\Controllers\Frontend\UserController::class , 'getTransactionShopCard']);
                    Route::get('/lich-su-nap-the-tich-hop', [\App\Http\Controllers\Frontend\UserController::class , 'getChargeHistory']);
                    Route::get('/lich-su-nap-the-atm', [\App\Http\Controllers\Frontend\UserController::class , 'getChargeATMHistory']);
                    Route::get('/lich-su-mua-the-tich-hop', [\App\Http\Controllers\Frontend\UserController::class , 'getStoreHistory']);
                    Route::get('/lich-su-giao-dich', [\App\Http\Controllers\Frontend\UserController::class , 'getTran']);
                    Route::get('/lich-su-giao-dich-{id}',[\App\Http\Controllers\Frontend\UserController::class , 'getTranDetail']);
                    //Nạp thẻ Atm
                    Route::get('/recharge-atm', [\App\Http\Controllers\Frontend\TranferController::class , 'index']);
                    Route::get('/lich-su-atm-tu-dong', [\App\Http\Controllers\Frontend\TranferController::class , 'logs']);
                    Route::get('/lich-su-atm-tu-dong-{id}', [\App\Http\Controllers\Frontend\TranferController::class , 'logsDetail']);
                    Route::get('/changepassword', [\App\Http\Controllers\Frontend\Auth\LoginController::class , 'changePassword'])->name('changePassword');

                    Route::post('/post-deposit', [\App\Http\Controllers\Frontend\ChargeController::class , 'postDeposit'])->name('postDeposit');
                });
                Route::get('/transfer/data', [\App\Http\Controllers\Frontend\TranferController::class , 'getHistoryTranfer']);
                Route::get('/get-amount-card', [\App\Http\Controllers\Frontend\ChargeController::class , 'getAmountCharge'])->name('getAmountCharge');
                Route::post('/changePasswordApi', [\App\Http\Controllers\Frontend\Auth\LoginController::class , 'changePasswordApi'])->name('changePasswordApi');

                Route::get('/get-tele-card', [\App\Http\Controllers\Frontend\ChargeController::class , 'getTelecom']);
                Route::get('/get-tele-card/data', [\App\Http\Controllers\Frontend\ChargeController::class , 'getDepositAutoData']);
                Route::get('/get-amount-tele-card', [\App\Http\Controllers\Frontend\ChargeController::class , 'getTelecomDepositAuto']);
                Route::post('/nap-the', [\App\Http\Controllers\Frontend\ChargeController::class , 'postTelecomDepositAuto'])->name('postTelecomDepositAuto');
            });
            // Route không cần Auth load dữ liệu không cache
            Route::group(['middleware' => ['doNotCacheResponse']], function (){
//                đăng nhập, đăng xuất, đăng ký
                Route::post('/logout', [\App\Http\Controllers\Frontend\Auth\LoginController::class , 'logout'])->name('logout');
                Route::get('/login', [\App\Http\Controllers\Frontend\Auth\LoginController::class , 'login'])->name('login');
                Route::get('/user/access', [\App\Http\Controllers\Frontend\Auth\LoginController::class , 'accesUser']);
                Route::post('/login', [\App\Http\Controllers\Frontend\Auth\LoginController::class , 'postLogin']);
                Route::post('/loginApi', [\App\Http\Controllers\Frontend\Auth\LoginController::class , 'loginApi'])->name('loginApi');
                Route::get('/loginfacebook', [\App\Http\Controllers\Frontend\Auth\LoginController::class , 'loginfacebook'])->name('loginfacebook');
                Route::get('/register', [\App\Http\Controllers\Frontend\Auth\RegisterController::class , 'showFormRegister'])->name('register');
                Route::post('register', [\App\Http\Controllers\Frontend\Auth\RegisterController::class , 'register']);
//                site map
                Route::get('/sitemap.xml', [\App\Http\Controllers\Frontend\SiteMapController::class , 'index']);
                Route::get('/rss', [\App\Http\Controllers\Frontend\RssController::class , 'index']);
                Route::get('/rss-detail', [\App\Http\Controllers\Frontend\RssController::class , 'detail']);

                Route::get('/robots.txt', function ()
                {
                    return view('frontend.pages.robots.robots.txt');
                });

                Route::get('/rss-minigame', function ()
                {
                    return response()->view('frontend.pages.rss.minigame')->header('Content-Type', 'application/xml');
                });
                Route::get('/rss-article', function ()
                {
                    return response()->view('frontend.pages.rss.article')->header('Content-Type', 'application/xml');
                });
                Route::get('/rss-service', function ()
                {
                    return response()->view('frontend.pages.rss.service')->header('Content-Type', 'application/xml');
                });
                Route::get('/rss-nick', function ()
                {
                    return response()->view('frontend.pages.rss.nick')->header('Content-Type', 'application/xml');
                });
                Route::get('/rss', [\App\Http\Controllers\Frontend\RssController::class , 'index']);
                Route::get('/rss', [\App\Http\Controllers\Frontend\RssController::class , 'index']);
                Route::get('/rss', [\App\Http\Controllers\Frontend\RssController::class , 'index']);
                Route::get('/rss', [\App\Http\Controllers\Frontend\RssController::class , 'index']);
//                404
                Route::get('/404', function ()
                {
                    return view('frontend.pages.404')->name('404');
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
                Route::get('/updategit', function ()
                {
                    $command='git pull https://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@github.com/tannm2611/khotaptrung-webclient.git dev 2>&1';
                    $output = shell_exec($command);
                    \Artisan::call('cache:clear');
                    return response()->json([
                        'status' => 1,
                        'message' => 'Thành công!',
                        'message-git' => $output,
                    ]);
                });
            });

            //minigame
            Route::group(['middleware' => ['doNotCacheResponse']], function (){

                Route::post('/minigame-play', [\App\Http\Controllers\Frontend\MinigameController::class , 'postRoll'])->name('postRoll');
                Route::post('/minigame-bonus', [\App\Http\Controllers\Frontend\MinigameController::class , 'postBonus'])->name('postBonus');
                Route::get('/minigame-log-{id}', [\App\Http\Controllers\Frontend\MinigameController::class , 'getLog'])->name('getLog');
                Route::get('/minigame-logacc-{id}', [\App\Http\Controllers\Frontend\MinigameController::class , 'getLogAcc'])->name('getLogAcc');
//                Route::get('/trong-test',[\App\Http\Controllers\Frontend\MinigameController::class,'getIndexUpdate']);
                Route::get('/withdrawitem-{game_type}', [\App\Http\Controllers\Frontend\MinigameController::class , 'getWithdrawItem'])->name('getWithdrawItem');
                Route::post('/withdrawitem-{game_type}', [\App\Http\Controllers\Frontend\MinigameController::class , 'postWithdrawItem'])->name('postWithdrawItem');
                Route::post('/withdrawitemajax-{game_type}', [\App\Http\Controllers\Frontend\MinigameController::class , 'postWithdrawItemAjax'])->name('postWithdrawItemAjax');

                Route::get('/withdrawitemajax-{game_type}', [\App\Http\Controllers\Frontend\MinigameController::class , 'getWithdrawItemAjax'])->name('getWithdrawItemAjax');
                Route::post('/postwithdrawitemajax-{game_type}',[\App\Http\Controllers\Frontend\MinigameController::class,'sendWithDrawItem']);

                Route::get('/ajax-modal-logs-spin-bonus',[\App\Http\Controllers\Frontend\MinigameController::class,'getLogsModalSpinBonus']);
                Route::get('/ajax-modal-logs-spin-bonus-acc',[\App\Http\Controllers\Frontend\MinigameController::class,'getLogsModalSpinBonus']);


                Route::group(['middleware' => ['intend']], function () {

                    Route::get('/minigame-{slug}', [\App\Http\Controllers\Frontend\MinigameController::class , 'getIndex'])->name('getIndex');

                });

            });
        });

        Route::post('/mua-the', [\App\Http\Controllers\Frontend\StoreCardController::class , 'postStoreCard'])->name('postStoreCard');
        Route::get('/service-mobile', [\App\Http\Controllers\Frontend\ServiceController::class , 'getListMobile'])->name('getListMobile');
    });
});






