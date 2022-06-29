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

Route::get('/updategit', function ()
{

    $command='git pull https://'.config('git.git_secret').'@github.com/tannm2611/khotaptrung-webclient.git '.config('git.git_branch').' 2>&1';

    $output = shell_exec($command);
//    Lam sao day em oi

    dd($command, $output);
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
//if (isset(theme('')->theme_key)){
//    if (theme('')->theme_key == 'theme_1'){

Route::group(array('middleware' => ['theme']) , function (){
    Route::group(array('middleware' => ['throttle:300,1','verify_shop']) , function (){


        Route::get('/tesstt', function ()
        {
            $url = '/get-random-acc';
            $method = "GET";
            $dataSend = array();

            $result_Api = DirectAPI::_makeRequest($url,$dataSend,$method);

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

                


