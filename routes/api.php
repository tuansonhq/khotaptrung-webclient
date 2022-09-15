<?php

use App\Http\Controllers\Frontend\AccController;
use App\Http\Controllers\Frontend\ChargeController;
use App\Http\Controllers\Frontend\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/clear-cache', [App\Http\Controllers\Api\CacheController::class, 'clearCache']);

Route::get('/ip', [App\Http\Controllers\Api\IPController::class, 'getIp']);

Route::get('/git-pull', [App\Http\Controllers\Api\GitPullController::class, 'getGitPull']);

Route::get('/mua-nick-random', [AccController::class , "getShowAccRandom"]);
Route::post('/user/account_info', [UserController::class , "getInfo"]);

Route::get('/store-card/get-telecom', [\App\Http\Controllers\Frontend\StoreCardController::class , 'getTelecomStoreCard'])->name('getTelecomStoreCard');
Route::get('/get-tele-card', [\App\Http\Controllers\Frontend\ChargeController::class , 'getTelecom']);
//                get api atm
Route::get('/transfer-code', [\App\Http\Controllers\Frontend\TranferController::class , 'getIdCode'])->name('getIdCode');

// lấy mệnh giá trong mua thẻ
Route::get('/store-card/get-amount', [\App\Http\Controllers\Frontend\StoreCardController::class , 'getAmountStoreCard'])->name('getAmountStoreCard');
Route::get('/get-amount-tele-card', [\App\Http\Controllers\Frontend\ChargeController::class , 'getTelecomDepositAuto']);
Route::get('/reload-captcha', [ChargeController::class , 'reloadCaptcha']);
