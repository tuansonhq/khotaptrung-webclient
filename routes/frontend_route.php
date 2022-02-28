<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('frontend.pages.index');
});
Route::get('/log-in', function () {
    return view('frontend.pages.log_in');
});
Route::get('/regist', function () {
    return view('frontend.pages.regist');
});

Route::get('/tin-tuc', function () {
    return view('frontend.pages.news');
});

Route::get('/tin-tuc/chi-tiet', function () {
    return view('frontend.pages.news_detail');
});

Route::get('/thong-tin', function () {
    return view('frontend.pages.account.user.index');
});
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

