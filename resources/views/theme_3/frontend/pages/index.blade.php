
@extends('frontend.layouts.master')
@section('styles')
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/lib_bootstrap.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/minigame.css">
@endsection

@section('content')
    <div class="banner-home " style=" background: url(/assets/frontend/{{theme('')->theme_key}}/image/banner.png) no-repeat center center / cover;">
        <div class="container container-fix">
            <div class="d-flex justify-content-between">
                <div class="box-list-service d-g-lg-none">
                    <p>Dịch vụ</p>
                    <ul class="list-service">
                        <li class="item-service">
                            <a href="/nap-the">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/service_significant7.png" alt="">
                                <div>Nạp thẻ cào</div>
                            </a>

                        </li>
                        <li class="item-service">
                            <a href="/nap-the">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/service_significant1.png" alt="">
                                <div>Nạp ATM- VÍ</div>
                            </a>

                        </li>
                        <li class="item-service">
                            <a href="/mua-the">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/service_significant2.png" alt="">
                                <div>Mua thẻ game</div>
                            </a>

                        </li>
                        <li class="item-service">
                            <a href="/mua-acc">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/service_significant3.png" alt="">
                                <div>Mua Acc game</div>
                            </a>

                        </li>
                        <li class="item-service">
                            <a href="/dich-vu">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/service_significant4.png" alt="">
                                <div>Dịch vụ game</div>
                            </a>

                        </li>
                        <li class="item-service">
                            <a href="/minigame">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/service_significant5.png" alt="">
                                <div>Vòng quay</div>
                            </a>

                        </li>
                        <li class="item-service">
                            <a href="/recharge-game">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/service_significant6.png" alt="">
                                <div>Nạp tài khoản game</div>
                            </a>

                        </li>
                        <li class="item-service">
                            <a href="/tin-tuc">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/service_significant9.png" alt="">
                                <div>Tin tức</div>
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="box-list-top top-list d-g-lg-none">
                    <p><img src="/assets/frontend/{{theme('')->theme_key}}/image/star_top.png" alt=""> Top nạp thẻ</p>
                    <div class="top-days default-tab pr-fix-16 pl-fix-16">
                        <ul class="nav justify-content-between row" role="tablist" >
                            <li class="nav-item col-md-4 p-md-0" role="presentation">
                                <a  class=" active pb-fix-8 d-flex justify-content-center" id="sevendays-tab" data-toggle="tab" href="#sevendays" role="tab" aria-selected="true">7 ngày</a>
                            </li >
                            <li class="nav-item col-md-4 p-md-0" role="presentation">
                                <a  class="pb-fix-8 pb-fix-8 d-flex justify-content-center"  id="thirtyday-tab" data-toggle="tab" href="#thirtydays" role="tab" aria-selected="false"> 30 ngày</a>
                            </li>
                            <li class="nav-item col-md-4 p-md-0" role="presentation">
                                <a  class="pb-fix-8 pb-fix-8 d-flex justify-content-center" id="sixty-tab" data-toggle="tab" href="#sixtydays" role="tab" aria-selected="false">60 ngày</a>
                            </li>
                        </ul>
                    </div>
                    <div class="top-content tab-content">
                        <div class="tab-pane fade active show item-top mt-3" id="sevendays" role="tabpanel" aria-labelledby="sevendays-tab" >
                            <ul class="nav flex-column">
                                <li class="d-flex">
                                    <span><img src="/assets/frontend/{{theme('')->theme_key}}/image/top_star.png" alt=""></span>
                                    <span class="top-name">Tên dài hai dòng </span>
                                    <span class="float-right top-amount">100.000.000đ</span>
                                </li>
                                <li class="d-flex">
                                    <span><img src="/assets/frontend/{{theme('')->theme_key}}/image/top_star.png" alt=""></span>
                                    <span class="top-name">Tên dài </span>
                                    <span class="float-right top-amount">100.000.000đ</span>
                                </li>
                                <li class="d-flex">
                                    <span><img src="/assets/frontend/{{theme('')->theme_key}}/image/top_star.png" alt=""></span>
                                    <span class="top-name">Tên dài </span>
                                    <span class="float-right top-amount">100.000.000đ</span>
                                </li>
                                <li class="d-flex">
                                    <span class="top-rank"><div style="">4</div></span>
                                    <span class="top-name">Tên dài hai dòng</span>
                                    <span class="float-right top-amount">100.000.000đ</span>
                                </li>
                                <li class="d-flex">
                                    <span class="top-rank"><div style="">5</div></span>
                                    <span class="top-name">Tên dài hai dòngg</span>
                                    <span class="float-right top-amount">100.000.000đ</span>
                                </li>
                                <li class="d-flex">
                                    <span class="top-rank"><div style="">6</div></span>
                                    <span class="top-name">Tên dài hai dòngg</span>
                                    <span class="float-right top-amount">100.000.000đ</span>
                                </li>


                            </ul>
                        </div>
                        <div class="tab-pane fade item-top mt-3" id="thirtydays" role="tabpanel" aria-labelledby="thirtyday-tab">
                            <ul class="nav flex-column">
                                <li class="d-flex">
                                    <span><img src="/assets/frontend/{{theme('')->theme_key}}/image/top_star.png" alt=""></span>
                                    <span class="top-name">Tên dài hai dòng </span>
                                    <span class="float-right top-amount">100.000.000đ</span>
                                </li>
                                <li class="d-flex">
                                    <span><img src="/assets/frontend/{{theme('')->theme_key}}/image/top_star.png" alt=""></span>
                                    <span class="top-name">Tên dài </span>
                                    <span class="float-right top-amount">100.000.000đ</span>
                                </li>
                                <li class="d-flex">
                                    <span><img src="/assets/frontend/{{theme('')->theme_key}}/image/top_star.png" alt=""></span>
                                    <span class="top-name">Tên dài </span>
                                    <span class="float-right top-amount">100.000.000đ</span>
                                </li>
                                <li class="d-flex">
                                    <span class="top-rank"><div style="">4</div></span>
                                    <span class="top-name">Tên dài hai dòng Tên dài hai dòng</span>
                                    <span class="float-right top-amount">100.000.000đ</span>
                                </li>
                                <li class="d-flex">
                                    <span class="top-rank"><div style="">5</div></span>
                                    <span class="top-name">Tên dài hai dòngg</span>
                                    <span class="float-right top-amount">100.000.000đ</span>
                                </li>
                                <li class="d-flex">
                                    <span class="top-rank"><div style="">6</div></span>
                                    <span class="top-name">Tên dài hai dòngg</span>
                                    <span class="float-right top-amount">100.000.000đ</span>
                                </li>


                            </ul>
                        </div>
                        <div class="tab-pane  fade item-top mt-3" id="sixtydays"  role="tabpanel" aria-labelledby="sixty-tab">
                            <ul class="nav flex-column">
                                <li class="d-flex">
                                    <span><img src="/assets/frontend/{{theme('')->theme_key}}/image/top_star.png" alt=""></span>
                                    <span class="top-name">Tên dài hai dòng </span>
                                    <span class="float-right top-amount">100.000.000đ</span>
                                </li>
                                <li class="d-flex">
                                    <span><img src="/assets/frontend/{{theme('')->theme_key}}/image/top_star.png" alt=""></span>
                                    <span class="top-name">Tên dài </span>
                                    <span class="float-right top-amount">100.000.000đ</span>
                                </li>
                                <li class="d-flex">
                                    <span><img src="/assets/frontend/{{theme('')->theme_key}}/image/top_star.png" alt=""></span>
                                    <span class="top-name">Tên dài </span>
                                    <span class="float-right top-amount">100.000.000đ</span>
                                </li>
                                <li class="d-flex">
                                    <span class="top-rank"><div style="">4</div></span>
                                    <span class="top-name">Tên dài hai dòng Tên dài hai dòng</span>
                                    <span class="float-right top-amount">100.000.000đ</span>
                                </li>
                                <li class="d-flex">
                                    <span class="top-rank"><div style="">5</div></span>
                                    <span class="top-name">Tên dài hai dòngg</span>
                                    <span class="float-right top-amount">100.000.000đ</span>
                                </li>
                                <li class="d-flex">
                                    <span class="top-rank"><div style="">6</div></span>
                                    <span class="top-name">Tên dài hai dòngg</span>
                                    <span class="float-right top-amount">100.000.000đ</span>
                                </li>


                            </ul>
                        </div>
                    </div>


                </div>
            </div>

        </div>

    </div>


    <div class="container container-fix">
        <div class="block-product mt-fix-20 d-none d-g-md-block">
            <div class="product-header d-flex">

                <p class="text-title" >Dịch vụ nổi bật</p>
                <div class="navbar-spacer"></div>

                <div class="text-view-more">

                    <a href="/dich-vu" class="global__link">Xem thêm<i class="__icon --sm --link ml-1" style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/icons/arrow-right-blue.png)"></i></a>

                </div>
            </div>
            <div class="box-product">
                <div class=" d-flex justify-content-lg-between row" >
                    <div class="item-product item-product-service col-lg-auto col-md-3 col-4 mb-fix-16">
                        <a href="/nap-the">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/service_significant1.png" alt="">
                            <div>Nạp thẻ cào</div>
                        </a>

                    </div>
                    <div class="item-product item-product-service col-lg-auto col-md-3 col-4 mb-fix-16">
                        <a href="/nap-the">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/service_significant2.png" alt="">
                            <div>Nạp ATM -Ví</div>
                        </a>

                    </div>
                    <div class="item-product item-product-service col-lg-auto col-md-3 col-4 mb-fix-16">
                        <a href="/mua-the">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/service_significant3.png" alt="">
                            <div>Mua thẻ Game</div>
                        </a>
                    </div>
                    <div class="item-product item-product-service col-lg-auto col-md-3 col-4 mb-fix-16">
                        <a href="/mua-acc">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/service_significant4.png" alt="">

                            <div>Mua Acc Game</div>
                        </a>
                    </div>
                    <div class="item-product item-product-service col-lg-auto col-md-3 col-4 mb-fix-16">
                        <a href="/dich-vu">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/service_significant5.png" alt="">
                            <div>Dịch vụ Game</div>
                        </a>
                    </div>
                    <div class="item-product item-product-service col-lg-auto col-md-3 col-4 mb-fix-16">
                        <a href="/minigame">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/service_significant6.png" alt="">
                            <br>
                            <div>Vòng quay</div>
                        </a>
                    </div>
                    <div class="item-product item-product-service col-lg-auto col-md-3 col-4 mb-fix-16">
                        <a href="/recharge-game">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/service_significant7.png" alt="">
                            <div>Nạp game</div>
                        </a>
                    </div>
                    <div class="item-product item-product-service col-lg-auto col-md-3 col-4 mb-fix-16">
                        <a href="/nap-the">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/service_significant9.png" alt="">
                            <div>Tin tức</div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <div class="flash-sales block-product mt-fix-20 ">
            <div class="product-header d-flex">
                    <span>
                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/flash_sales.png" alt="">
                    </span>
                <p class="text-title">Giảm sốc <span class="d-g-md-none"> trong ngày</span></p>
                <div class="timer d-flex" id="timer">
                    <div id="hourHome"></div>
                    <div id="minuteHome"></div>
                    <div id="secondHome"></div>
                </div>

                <div class="text-view-more">
                    <a href="/mua-acc" class="global__link">Xem thêm<i class="__icon --sm --link ml-1" style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/icons/arrow-right-blue.png)"></i></a>
                </div>
            </div>
            <div class="box-product">
                <div class="swiper-container list-product" >
                    <div class="swiper-wrapper">
                        <div class="swiper-slide " >
                            <a href="/acc/id">
                                <div class="item-product__box-img">

                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/product2.gif" alt="">

                                </div>
                                <div class="item-product__box-content">


                                    <div class="item-product__box-name">
                                        Acc liên quan siêu vip
                                    </div>
                                    <div class="item-product__box-sale">
                                        Đã bán: 68,9K
                                    </div>
                                    <div class="item-product__box-price">

                                        <div class="special-price">15.000đ</div>
                                        <div class="old-price">30.000đ</div>
                                        <div class="item-product__sticker-percent">
                                            -50%
                                        </div>
                                    </div>

                                </div>
                            </a>

                        </div>
                        <div class="swiper-slide " >
                            <a href="/acc/id">
                                <div class="item-product__box-img">

                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/product3.gif" alt="">

                                </div>
                                <div class="item-product__box-content">


                                    <div class="item-product__box-name">
                                        Acc liên quan siêu vip
                                    </div>
                                    <div class="item-product__box-sale">
                                        Đã bán: 68,9K
                                    </div>
                                    <div class="item-product__box-price">

                                        <div class="special-price">15.000đ</div>
                                        <div class="old-price">30.000đ</div>
                                        <div class="item-product__sticker-percent">
                                            -50%
                                        </div>
                                    </div>

                                </div>
                            </a>

                        </div>
                        <div class="swiper-slide " >
                            <a href="/acc/id">
                                <div class="item-product__box-img">

                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/product1.gif" alt="">

                                </div>
                                <div class="item-product__box-content">


                                    <div class="item-product__box-name">
                                        Acc liên quan siêu vip
                                    </div>
                                    <div class="item-product__box-sale">
                                        Đã bán: 68,9K
                                    </div>
                                    <div class="item-product__box-price">

                                        <div class="special-price">15.000đ</div>
                                        <div class="old-price">30.000đ</div>
                                        <div class="item-product__sticker-percent">
                                            -50%
                                        </div>
                                    </div>

                                </div>
                            </a>

                        </div>
                        <div class="swiper-slide " >
                            <a href="/acc/id">
                                <div class="item-product__box-img">

                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/product2.gif" alt="">

                                </div>
                                <div class="item-product__box-content">


                                    <div class="item-product__box-name">
                                        Acc liên quan siêu vip
                                    </div>
                                    <div class="item-product__box-sale">
                                        Đã bán: 68,9K
                                    </div>
                                    <div class="item-product__box-price">

                                        <div class="special-price">15.000đ</div>
                                        <div class="old-price">30.000đ</div>
                                        <div class="item-product__sticker-percent">
                                            -50%
                                        </div>
                                    </div>

                                </div>
                            </a>

                        </div>
                        <div class="swiper-slide " >
                            <a href="/acc/id">
                                <div class="item-product__box-img">

                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/product2.gif" alt="">

                                </div>
                                <div class="item-product__box-content">


                                    <div class="item-product__box-name">
                                        Acc liên quan siêu vip
                                    </div>
                                    <div class="item-product__box-sale">
                                        Đã bán: 68,9K
                                    </div>
                                    <div class="item-product__box-price">

                                        <div class="special-price">15.000đ</div>
                                        <div class="old-price">30.000đ</div>
                                        <div class="item-product__sticker-percent">
                                            -50%
                                        </div>
                                    </div>

                                </div>
                            </a>

                        </div>
                        <div class="swiper-slide " >
                            <a href="/acc/id">
                                <div class="item-product__box-img">

                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/product2.gif" alt="">

                                </div>
                                <div class="item-product__box-content">


                                    <div class="item-product__box-name">
                                        Acc liên quan siêu vip
                                    </div>
                                    <div class="item-product__box-sale">
                                        Đã bán: 68,9K
                                    </div>
                                    <div class="item-product__box-price">

                                        <div class="special-price">15.000đ</div>
                                        <div class="old-price">30.000đ</div>
                                        <div class="item-product__sticker-percent">
                                            -50%
                                        </div>
                                    </div>

                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" block-product mt-fix-20">
            <div class="product-header d-flex">
                    <span>
                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/flash_sales.png" alt="">
                    </span>
                <p class="text-title">Dành cho bạn</p>
                <div class="product-catecory" >
                    <ul class="nav d-g-md-none" role="tablist" >
                        <li class="nav-item" role="presentation">
                            <a  class="nav-link active" id="account-tab" data-toggle="tab" href="#account" role="tab" aria-selected="true">Tài khoản game</a>
                        </li >
                        <li class="nav-item" role="presentation">
                            <a  class="nav-link"  id="favourite_game-tab" data-toggle="tab" href="#favourite_game" role="tab" aria-selected="false"> Game yêu thích</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a  class="nav-link" id="suggestions-tab" data-toggle="tab" href="#suggestions" role="tab" aria-selected="false">Gợi ý cho bạn</a>
                        </li>
                    </ul>
                </div>

                <div class="text-view-more">

                    <a href="/mua-acc" class="global__link">Xem thêm<i class="__icon --sm --link ml-1" style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/icons/arrow-right-blue.png)"></i></a>

                </div>
            </div>
            <div class="product-catecory d-none d-g-lg-block pt-fix-16 pr-fix-16 pl-fix-16" >
                <ul class="nav justify-content-between row" role="tablist" >
                    <li class="nav-item col-4 p-0 col-md-4 p-md-0" role="presentation">
                        <a  class="pb-fix-8 d-flex justify-content-center active"  data-toggle="tab" href="#account" role="tab" aria-selected="true">Tài khoản game</a>
                    </li >
                    <li class="nav-item col-4 p-0 col-md-4 p-md-0" role="presentation">
                        <a  class="pb-fix-8 d-flex justify-content-center"  data-toggle="tab" href="#favourite_game" role="tab" aria-selected="false"> Game yêu thích</a>
                    </li>
                    <li class="nav-item col-4 p-0 col-md-4 p-md-0" role="presentation">
                        <a  class="pb-fix-8 d-flex justify-content-center" data-toggle="tab" href="#suggestions" role="tab" aria-selected="false">Gợi ý cho bạn</a>
                    </li>
                </ul>
            </div>
            <div class="box-product-content tab-content">
                <div class="box-product tab-pane fade active show" id="account" role="tabpanel" aria-labelledby="account-tab">
                    <div class="swiper-container list-product" >
                        <div class="swiper-wrapper">
                            <div class="swiper-slide " >
                                <a href="/acc/id">
                                    <div class="item-product__box-img">

                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product3.gif" alt="">

                                    </div>
                                    <div class="item-product__box-content">


                                        <div class="item-product__box-name">
                                            Acc liên quan siêu vip
                                        </div>
                                        <div class="item-product__box-sale">
                                            Đã bán: 68,9K
                                        </div>
                                        <div class="item-product__box-price">

                                            <div class="special-price">15.000đ</div>
                                            <div class="old-price">30.000đ</div>
                                            <div class="item-product__sticker-percent">
                                                -50%
                                            </div>
                                        </div>

                                    </div>
                                </a>

                            </div>
                            <div class="swiper-slide " >
                                <a href="/acc/id">
                                    <div class="item-product__box-img">

                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product2.gif" alt="">

                                    </div>
                                    <div class="item-product__box-content">


                                        <div class="item-product__box-name">
                                            Acc liên quan siêu vip
                                        </div>
                                        <div class="item-product__box-sale">
                                            Đã bán: 68,9K
                                        </div>
                                        <div class="item-product__box-price">

                                            <div class="special-price">15.000đ</div>
                                            <div class="old-price">30.000đ</div>
                                            <div class="item-product__sticker-percent">
                                                -50%
                                            </div>
                                        </div>

                                    </div>
                                </a>

                            </div>
                            <div class="swiper-slide " >
                                <a href="/acc/id">
                                    <div class="item-product__box-img">

                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product1.gif" alt="">

                                    </div>
                                    <div class="item-product__box-content">


                                        <div class="item-product__box-name">
                                            Acc liên quan siêu vip
                                        </div>
                                        <div class="item-product__box-sale">
                                            Đã bán: 68,9K
                                        </div>
                                        <div class="item-product__box-price">

                                            <div class="special-price">15.000đ</div>
                                            <div class="old-price">30.000đ</div>
                                            <div class="item-product__sticker-percent">
                                                -50%
                                            </div>
                                        </div>

                                    </div>
                                </a>

                            </div>
                            <div class="swiper-slide " >
                                <a href="/acc/id">
                                    <div class="item-product__box-img">

                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product2.gif" alt="">

                                    </div>
                                    <div class="item-product__box-content">


                                        <div class="item-product__box-name">
                                            Acc liên quan siêu vip
                                        </div>
                                        <div class="item-product__box-sale">
                                            Đã bán: 68,9K
                                        </div>
                                        <div class="item-product__box-price">

                                            <div class="special-price">15.000đ</div>
                                            <div class="old-price">30.000đ</div>
                                            <div class="item-product__sticker-percent">
                                                -50%
                                            </div>
                                        </div>

                                    </div>
                                </a>

                            </div>
                            <div class="swiper-slide " >
                                <a href="/acc/id">
                                    <div class="item-product__box-img">

                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product2.gif" alt="">

                                    </div>
                                    <div class="item-product__box-content">


                                        <div class="item-product__box-name">
                                            Acc liên quan siêu vip
                                        </div>
                                        <div class="item-product__box-sale">
                                            Đã bán: 68,9K
                                        </div>
                                        <div class="item-product__box-price">

                                            <div class="special-price">15.000đ</div>
                                            <div class="old-price">30.000đ</div>
                                            <div class="item-product__sticker-percent">
                                                -50%
                                            </div>
                                        </div>

                                    </div>
                                </a>

                            </div>
                            <div class="swiper-slide " >
                                <a href="/acc/id">
                                    <div class="item-product__box-img">

                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product2.gif" alt="">

                                    </div>
                                    <div class="item-product__box-content">


                                        <div class="item-product__box-name">
                                            Acc liên quan siêu vip
                                        </div>
                                        <div class="item-product__box-sale">
                                            Đã bán: 68,9K
                                        </div>
                                        <div class="item-product__box-price">

                                            <div class="special-price">15.000đ</div>
                                            <div class="old-price">30.000đ</div>
                                            <div class="item-product__sticker-percent">
                                                -50%
                                            </div>
                                        </div>

                                    </div>
                                </a>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="box-product tab-pane fade" id="favourite_game" role="tabpanel" aria-labelledby="favourite_game-tab">
                    <div class="swiper-container list-product" >
                        <div class="swiper-wrapper">
                            <div class="swiper-slide " >
                                <a href="/acc/id">
                                    <div class="item-product__box-img">

                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product2.gif" alt="">

                                    </div>
                                    <div class="item-product__box-content">


                                        <div class="item-product__box-name">
                                            Acc liên quan siêu vip
                                        </div>
                                        <div class="item-product__box-sale">
                                            Đã bán: 68,9K
                                        </div>
                                        <div class="item-product__box-price">

                                            <div class="special-price">15.000đ</div>
                                            <div class="old-price">30.000đ</div>
                                            <div class="item-product__sticker-percent">
                                                -50%
                                            </div>
                                        </div>

                                    </div>
                                </a>

                            </div>
                            <div class="swiper-slide " >
                                <a href="/acc/id">
                                    <div class="item-product__box-img">

                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product2.gif" alt="">

                                    </div>
                                    <div class="item-product__box-content">


                                        <div class="item-product__box-name">
                                            Acc liên quan siêu vip
                                        </div>
                                        <div class="item-product__box-sale">
                                            Đã bán: 68,9K
                                        </div>
                                        <div class="item-product__box-price">

                                            <div class="special-price">15.000đ</div>
                                            <div class="old-price">30.000đ</div>
                                            <div class="item-product__sticker-percent">
                                                -50%
                                            </div>
                                        </div>

                                    </div>
                                </a>

                            </div>
                            <div class="swiper-slide " >
                                <a href="/acc/id">
                                    <div class="item-product__box-img">

                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product2.gif" alt="">

                                    </div>
                                    <div class="item-product__box-content">


                                        <div class="item-product__box-name">
                                            Acc liên quan siêu vip
                                        </div>
                                        <div class="item-product__box-sale">
                                            Đã bán: 68,9K
                                        </div>
                                        <div class="item-product__box-price">

                                            <div class="special-price">15.000đ</div>
                                            <div class="old-price">30.000đ</div>
                                            <div class="item-product__sticker-percent">
                                                -50%
                                            </div>
                                        </div>

                                    </div>
                                </a>

                            </div>
                            <div class="swiper-slide " >
                                <a href="/acc/id">
                                    <div class="item-product__box-img">

                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product2.gif" alt="">

                                    </div>
                                    <div class="item-product__box-content">


                                        <div class="item-product__box-name">
                                            Acc liên quan siêu vip
                                        </div>
                                        <div class="item-product__box-sale">
                                            Đã bán: 68,9K
                                        </div>
                                        <div class="item-product__box-price">

                                            <div class="special-price">15.000đ</div>
                                            <div class="old-price">30.000đ</div>
                                            <div class="item-product__sticker-percent">
                                                -50%
                                            </div>
                                        </div>

                                    </div>
                                </a>

                            </div>
                            <div class="swiper-slide " >
                                <a href="/acc/id">
                                    <div class="item-product__box-img">

                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product2.gif" alt="">

                                    </div>
                                    <div class="item-product__box-content">


                                        <div class="item-product__box-name">
                                            Acc liên quan siêu vip
                                        </div>
                                        <div class="item-product__box-sale">
                                            Đã bán: 68,9K
                                        </div>
                                        <div class="item-product__box-price">

                                            <div class="special-price">15.000đ</div>
                                            <div class="old-price">30.000đ</div>
                                            <div class="item-product__sticker-percent">
                                                -50%
                                            </div>
                                        </div>

                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-product tab-pane fade" id="suggestions" role="tabpanel" aria-labelledby="suggestions-tab">
                    <div class="swiper-container list-product" >
                        <div class="swiper-wrapper">
                            <div class="swiper-slide " >
                                <a href="/acc/id">
                                    <div class="item-product__box-img">

                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product2.gif" alt="">

                                    </div>
                                    <div class="item-product__box-content">


                                        <div class="item-product__box-name">
                                            Acc liên quan siêu vip
                                        </div>
                                        <div class="item-product__box-sale">
                                            Đã bán: 68,9K
                                        </div>
                                        <div class="item-product__box-price">

                                            <div class="special-price">15.000đ</div>
                                            <div class="old-price">30.000đ</div>
                                            <div class="item-product__sticker-percent">
                                                -50%
                                            </div>
                                        </div>

                                    </div>
                                </a>

                            </div>
                            <div class="swiper-slide " >
                                <a href="/acc/id">
                                    <div class="item-product__box-img">

                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product2.gif" alt="">

                                    </div>
                                    <div class="item-product__box-content">


                                        <div class="item-product__box-name">
                                            Acc liên quan siêu vip
                                        </div>
                                        <div class="item-product__box-sale">
                                            Đã bán: 68,9K
                                        </div>
                                        <div class="item-product__box-price">

                                            <div class="special-price">15.000đ</div>
                                            <div class="old-price">30.000đ</div>
                                            <div class="item-product__sticker-percent">
                                                -50%
                                            </div>
                                        </div>

                                    </div>
                                </a>

                            </div>
                            <div class="swiper-slide " >
                                <a href="/acc/id">
                                    <div class="item-product__box-img">

                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product2.gif" alt="">

                                    </div>
                                    <div class="item-product__box-content">


                                        <div class="item-product__box-name">
                                            Acc liên quan siêu vip
                                        </div>
                                        <div class="item-product__box-sale">
                                            Đã bán: 68,9K
                                        </div>
                                        <div class="item-product__box-price">

                                            <div class="special-price">15.000đ</div>
                                            <div class="old-price">30.000đ</div>
                                            <div class="item-product__sticker-percent">
                                                -50%
                                            </div>
                                        </div>

                                    </div>
                                </a>

                            </div>
                            <div class="swiper-slide " >
                                <a href="/acc/id">
                                    <div class="item-product__box-img">

                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product2.gif" alt="">

                                    </div>
                                    <div class="item-product__box-content">


                                        <div class="item-product__box-name">
                                            Acc liên quan siêu vip
                                        </div>
                                        <div class="item-product__box-sale">
                                            Đã bán: 68,9K
                                        </div>
                                        <div class="item-product__box-price">

                                            <div class="special-price">15.000đ</div>
                                            <div class="old-price">30.000đ</div>
                                            <div class="item-product__sticker-percent">
                                                -50%
                                            </div>
                                        </div>

                                    </div>
                                </a>

                            </div>
                            <div class="swiper-slide " >
                                <a href="/acc/id">
                                    <div class="item-product__box-img">

                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product2.gif" alt="">

                                    </div>
                                    <div class="item-product__box-content">


                                        <div class="item-product__box-name">
                                            Acc liên quan siêu vip
                                        </div>
                                        <div class="item-product__box-sale">
                                            Đã bán: 68,9K
                                        </div>
                                        <div class="item-product__box-price">

                                            <div class="special-price">15.000đ</div>
                                            <div class="old-price">30.000đ</div>
                                            <div class="item-product__sticker-percent">
                                                -50%
                                            </div>
                                        </div>

                                    </div>
                                </a>

                            </div>
                            <div class="swiper-slide " >
                                <a href="/acc/id">
                                    <div class="item-product__box-img">

                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product2.gif" alt="">

                                    </div>
                                    <div class="item-product__box-content">


                                        <div class="item-product__box-name">
                                            Acc liên quan siêu vip
                                        </div>
                                        <div class="item-product__box-sale">
                                            Đã bán: 68,9K
                                        </div>
                                        <div class="item-product__box-price">

                                            <div class="special-price">15.000đ</div>
                                            <div class="old-price">30.000đ</div>
                                            <div class="item-product__sticker-percent">
                                                -50%
                                            </div>
                                        </div>

                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="top-list row d-md-none d-block mt-fix-20">
            <div class=" col-md-12" >
                <p class="text-center"><img src="/assets/frontend/{{theme('')->theme_key}}/image/star_top.png" alt=""> Top nạp thẻ</p>
                <div class="top-days default-tab">
                    <ul class="nav justify-content-between row pr-fix-16 pl-fix-16" role="tablist" >
                        <li class="nav-item col-4 col-md-4 p-0  p-md-0" role="presentation">
                            <a  class="active pb-fix-8 d-flex justify-content-center" id="sevendays-minigame-tab" data-toggle="tab" href="#sevendays-minigame" role="tab" aria-selected="true">7 ngày</a>
                        </li >
                        <li class="nav-item col-4 col-md-4 p-0 p-md-0" role="presentation">
                            <a  class="pb-fix-8 d-flex justify-content-center"  id="thirtyday-minigame-tab" data-toggle="tab" href="#thirtydays-minigame" role="tab" aria-selected="false"> 30 ngày</a>
                        </li>
                        <li class="nav-item col-4 col-md-4 p-0 p-md-0" role="presentation">
                            <a  class=" pb-fix-8 d-flex justify-content-center" id="sixty-minigame-tab" data-toggle="tab" href="#sixtydays-minigame" role="tab" aria-selected="false">60 ngày</a>
                        </li>
                    </ul>
                </div>
                <div class="top-content tab-content">
                    <div class="tab-pane fade active show item-top mt-3" id="sevendays-minigame" role="tabpanel" aria-labelledby="sevendays-minigame-tab" >
                        <div class="item-top-content">
                            <ul class="nav flex-column">
                                <li class="d-flex">
                                    <span><img src="/assets/frontend/{{theme('')->theme_key}}/image/top_star.png" alt=""></span>
                                    <span class="top-name">Tên dài hai dòng </span>
                                    <span class="float-right top-amount">100.000.000đ</span>
                                </li>
                                <li class="d-flex">
                                    <span><img src="/assets/frontend/{{theme('')->theme_key}}/image/top_star.png" alt=""></span>
                                    <span class="top-name">Tên dài </span>
                                    <span class="float-right top-amount">100.000.000đ</span>
                                </li>
                                <li class="d-flex">
                                    <span><img src="/assets/frontend/{{theme('')->theme_key}}/image/top_star.png" alt=""></span>
                                    <span class="top-name">Tên dài </span>
                                    <span class="float-right top-amount">100.000.000đ</span>
                                </li>
                                <li class="d-flex">
                                    <span class="top-rank"><div style="">4</div></span>
                                    <span class="top-name">Tên dài hai dòng Tên dài hai dòng</span>
                                    <span class="float-right top-amount">100.000.000đ</span>
                                </li>
                                <li class="d-flex">
                                    <span class="top-rank"><div style="">5</div></span>
                                    <span class="top-name">Tên dài hai dòng Tên dài hai dòng</span>
                                    <span class="float-right top-amount">100.000.000đ</span>
                                </li>
                                <li class="d-flex">
                                    <span class="top-rank"><div style="">6</div></span>
                                    <span class="top-name">Tên dài hai dòng Tên dài hai dòng</span>
                                    <span class="float-right top-amount">100.000.000đ</span>
                                </li>
                                <li class="d-flex">
                                    <span class="top-rank"><div style="">7</div></span>
                                    <span class="top-name">Tên dài hai dòng Tên dài hai dòng</span>
                                    <span class="float-right top-amount">100.000.000đ</span>
                                </li>


                            </ul>
                        </div>

                        <div class="footer-row-ct d-lg-none d-block">
                            <div  class="col-md-12 left-right text-center js-toggle-content">
                                <div class="view-more-top ">
                                    Xem thêm <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/arrow-down.png" alt="">
                                </div>
                                <div class="view-less-top ">
                                    Rút gọn <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/iconright.png" alt="">
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="block-mini-game mt-fix-20">
            <div class="row">
                <div class="col-lg-12 col-md-12 pr-md-0" >
                    <div class=" block-product ">
                        <div class="product-header d-flex">
                        <span>
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/minigame_title.png" alt="">
                        </span>
                            <p class="text-title" >Vòng quay may mắn</p>
                            <div class="navbar-spacer"></div>

                            <div class="text-view-more">

                                <a href="/minigame" class="global__link">Xem thêm<i class="__icon --sm --link ml-1" style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/icons/arrow-right-blue.png)"></i></a>

                            </div>
                        </div>
                        <div class="box-product " >
                            <div class="row list-product list-minigame" >

                                <div class="list-minigame_box-left col-md-8 px-2">
                                    <div class="item-minigame_first ">
                                        <a href="/minigame/slug">
                                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/minigame.png" alt="">
                                            <div class="item-minigame-content">
                                                <div class="item-minigame-name">Vòng quay tiệc bể bơi</div>
                                                <div class="item-minigame-user">Đã chơi: 40K</div>
                                                <div class="item-minigame-price">

                                                    <div class="special-price__minigame">15.000đ</div>
                                                    <div class="old-price__minigame">30.000đ</div>
                                                    <div class="item-product__sticker-percent__minigame">
                                                        -50%
                                                    </div>
                                                </div>
                                            </div>
                                        </a>


                                    </div>
                                </div>
                                <div class="list-minigame_box-right col-md-4">
                                    <div class="row">
                                        <div class="col-md-12 pr-fix-8 pl-fix-8 ">
                                            <div class="item-minigame_second">
                                                <a href="/minigame/slug">
                                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/minigame1.gif" alt="">
                                                    <div class="item-minigame-content">
                                                        <div class="item-minigame-name">Vòng quay tiệc bể bơi</div>
                                                        <div class="item-minigame-user">Đã chơi: 40K</div>
                                                        <div class="item-minigame-price">

                                                            <div class="special-price__minigame">15.000đ</div>
                                                            <div class="old-price__minigame">30.000đ</div>
                                                            <div class="item-product__sticker-percent__minigame">
                                                                -50%
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>

                                            </div>

                                        </div>
                                        <div class="col-md-12 pr-fix-8 pl-fix-8">
                                            <div class="item-minigame_second">
                                                <a href="/minigame/slug">
                                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/minigame3.gif" alt="">
                                                    <div class="item-minigame-content">
                                                        <div class="item-minigame-name">Vòng quay tiệc bể bơi</div>
                                                        <div class="item-minigame-user">Đã chơi: 40K</div>
                                                        <div class="item-minigame-price">

                                                            <div class="special-price__minigame">15.000đ</div>
                                                            <div class="old-price__minigame">30.000đ</div>
                                                            <div class="item-product__sticker-percent__minigame">
                                                                -50%
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>


                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="list-minigame_box-right col-md-12">
                                    <div class="row">
                                        <div class="col-md-4 pr-fix-8 pl-fix-8 ">
                                            <div class="item-minigame_second">
                                                <a href="/minigame/slug">
                                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/minigame4.gif" alt="">
                                                    <div class="item-minigame-content">
                                                        <div class="item-minigame-name">Vòng quay tiệc bể bơi</div>
                                                        <div class="item-minigame-user">Đã chơi: 40K</div>
                                                        <div class="item-minigame-price">

                                                            <div class="special-price__minigame">15.000đ</div>
                                                            <div class="old-price__minigame">30.000đ</div>
                                                            <div class="item-product__sticker-percent__minigame">
                                                                -50%
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>

                                            </div>

                                        </div>
                                        <div class="col-md-4 pr-fix-8 pl-fix-8">
                                            <div class="item-minigame_second">
                                                <a href="/minigame/slug">
                                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/minigame6.gif" alt="">
                                                    <div class="item-minigame-content">
                                                        <div class="item-minigame-name">Vòng quay tiệc bể bơi</div>
                                                        <div class="item-minigame-user">Đã chơi: 40K</div>
                                                        <div class="item-minigame-price">

                                                            <div class="special-price__minigame">15.000đ</div>
                                                            <div class="old-price__minigame">30.000đ</div>
                                                            <div class="item-product__sticker-percent__minigame">
                                                                -50%
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>


                                            </div>
                                        </div>
                                        <div class="col-md-4 pr-fix-8 pl-fix-8">
                                            <div class="item-minigame_second">
                                                <a href="/minigame/slug">
                                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/minigame3.gif" alt="">
                                                    <div class="item-minigame-content">
                                                        <div class="item-minigame-name">Vòng quay tiệc bể bơi</div>
                                                        <div class="item-minigame-user">Đã chơi: 40K</div>
                                                        <div class="item-minigame-price">

                                                            <div class="special-price__minigame">15.000đ</div>
                                                            <div class="old-price__minigame">30.000đ</div>
                                                            <div class="item-product__sticker-percent__minigame">
                                                                -50%
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>


                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="list-minigame_mobile">
                                <div class="list-minigame_box-left w-100">
                                    <div class="item-minigame_first">
                                        <a href="/minigame/slug">
                                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/minigame2.gif" alt="">
                                            <div class="item-minigame-content">
                                                <div class="item-minigame-name">Vòng quay tiệc bể bơi</div>
                                                <div class="item-minigame-user">Đã chơi: 40K</div>
                                                <div class="item-minigame-price">

                                                    <div class="special-price__minigame">15.000đ</div>
                                                    <div class="old-price__minigame">30.000đ</div>
                                                    <div class="item-product__sticker-percent__minigame">
                                                        -50%
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>


                                </div>
                                <div class="list-minigame_box-right minigame-swiper swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="item-minigame_second">
                                                <a href="/minigame/slug">
                                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/minigame1.gif" alt="">
                                                    <div class="item-minigame-content">
                                                        <div class="item-minigame-name">Vòng quay tiệc bể bơi</div>
                                                        <div class="item-minigame-user">Đã chơi: 40K</div>
                                                        <div class="item-minigame-price">

                                                            <div class="special-price__minigame">15.000đ</div>
                                                            <div class="old-price__minigame">30.000đ</div>
                                                            <div class="item-product__sticker-percent__minigame">
                                                                -50%
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="item-minigame_second">
                                                <a href="/minigame/slug">
                                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/minigame2.gif" alt="">
                                                    <div class="item-minigame-content">
                                                        <div class="item-minigame-name">Vòng quay tiệc bể bơi</div>
                                                        <div class="item-minigame-user">Đã chơi: 40K</div>
                                                        <div class="item-minigame-price">

                                                            <div class="special-price__minigame">15.000đ</div>
                                                            <div class="old-price__minigame">30.000đ</div>
                                                            <div class="item-product__sticker-percent__minigame">
                                                                -50%
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="item-minigame_second">
                                                <a href="/minigame/slug">
                                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/minigame3.gif" alt="">
                                                    <div class="item-minigame-content">
                                                        <div class="item-minigame-name">Vòng quay tiệc bể bơi</div>
                                                        <div class="item-minigame-user">Đã chơi: 40K</div>
                                                        <div class="item-minigame-price">

                                                            <div class="special-price__minigame">15.000đ</div>
                                                            <div class="old-price__minigame">30.000đ</div>
                                                            <div class="item-product__sticker-percent__minigame">
                                                                -50%
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="item-minigame_second">
                                                <a href="/minigame/slug">
                                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/minigame1.gif" alt="">
                                                    <div class="item-minigame-content">
                                                        <div class="item-minigame-name">Vòng quay tiệc bể bơi</div>
                                                        <div class="item-minigame-user">Đã chơi: 40K</div>
                                                        <div class="item-minigame-price">

                                                            <div class="special-price__minigame">15.000đ</div>
                                                            <div class="old-price__minigame">30.000đ</div>
                                                            <div class="item-product__sticker-percent__minigame">
                                                                -50%
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="item-minigame_second">
                                                <a href="/minigame/slug">
                                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/minigame4.gif" alt="">
                                                    <div class="item-minigame-content">
                                                        <div class="item-minigame-name">Vòng quay tiệc bể bơi</div>
                                                        <div class="item-minigame-user">Đã chơi: 40K</div>
                                                        <div class="item-minigame-price">

                                                            <div class="special-price__minigame">15.000đ</div>
                                                            <div class="old-price__minigame">30.000đ</div>
                                                            <div class="item-product__sticker-percent__minigame">
                                                                -50%
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="block-product mt-fix-20 d-g-md-none">
            <div class="product-header d-flex">

                <p class="text-title" >Dịch vụ nổi bật</p>
                <div class="navbar-spacer"></div>

                <div class="text-view-more">
                    {{--                <a href="">--}}
                    {{--                    Xem thêm <img src="/assets/frontend/{{theme('')->theme_key}}/image/view_more.png" alt="">--}}
                    {{--                </a>--}}
                    <a href="/dich-vu" class="global__link">Xem thêm<i class="__icon --sm --link ml-1" style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/icons/arrow-right-blue.png)"></i></a>
                </div>
            </div>
            <div class="box-product">
                <div class=" list-product  d-flex justify-content-lg-between row" >
                    <div class="item-product item-product-service col-lg-auto col-md-3 col-4">
                        <a href="/nap-the">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/service_significant1.png" alt="">
                            <div>Nạp thẻ cào</div>
                        </a>

                    </div>
                    <div class="item-product item-product-service col-lg-auto col-md-3 col-4">
                        <a href="/nap-the">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/service_significant2.png" alt="">
                            <div>Nạp ATM -Ví</div>
                        </a>

                    </div>
                    <div class="item-product item-product-service col-lg-auto col-md-3 col-4">
                        <a href="/mua-the">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/service_significant3.png" alt="">
                            <div>Mua thẻ Game</div>
                        </a>
                    </div>
                    <div class="item-product item-product-service col-lg-auto col-md-3 col-4">
                        <a href="/mua-acc">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/service_significant4.png" alt="">

                            <div>Mua Acc Game</div>
                        </a>
                    </div>
                    <div class="item-product item-product-service col-lg-auto col-md-3 col-4">
                        <a href="/dich-vu">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/service_significant5.png" alt="">
                            <div>Dịch vụ Game</div>
                        </a>
                    </div>
                    <div class="item-product item-product-service col-lg-auto col-md-3 col-4">
                        <a href="/minigame">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/service_significant6.png" alt="">
                            <br>
                            <div>Vòng quay</div>
                        </a>
                    </div>
                    <div class="item-product item-product-service col-lg-auto col-md-3 col-4">
                        <a href="/nap-the">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/service_significant7.png" alt="">
                            <div>Nạp thẻ cào</div>
                        </a>
                    </div>
                    <div class="item-product item-product-service col-lg-auto col-md-3 col-4">
                        <a href="/nap-the">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/service_significant9.png" alt="">
                            <div>Tin tức</div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <div class="block-card-item mt-fix-20">
            <div class="row">
                <div class="col-lg-5 col-md-12"  style="min-height: 100%">
                    <div class=" block-product "  >
                        <div class="product-header d-flex">
                        <span>
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/charge_card_icon.png" alt="">
                        </span>
                            <p class="text-title" >Nạp tiền</p>
                            <div class="navbar-spacer"></div>

                            {{--                        <div class="text-view-more">--}}

                            {{--                            <a href="/nap-the" class="global__link">Xem thêm<i class="__icon --sm --link ml-1" style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/icons/arrow-right-blue.png)"></i></a>--}}

                            {{--                        </div>--}}
                        </div>
                        <div class="box-product " >
                            <div class="default-tab pr-fix-16 pl-fix-16">
                                <ul class="nav justify-content-between row" role="tablist" >
                                    <li class="nav-item col-4 col-md-4 p-0  p-md-0" role="presentation">
                                        <a  class="nav-link active text-center " data-toggle="tab" href="#charge_card" role="tab" aria-selected="true">Nạp thẻ <span class="d-g-none">cào</span> </a>
                                    </li >
                                    <li class="nav-item col-4 col-md-4 p-0 p-md-0" role="presentation">
                                        <a  class="nav-link text-center "  data-toggle="tab" href="#atm_card" role="tab" aria-selected="false"> ATM <span class="d-g-none">tự động</span> </a>
                                    </li>
                                    <li class="nav-item col-4 col-md-4 p-0 p-md-0" role="presentation">
                                        <a  class="nav-link text-center " data-toggle="tab" href="#wallet_card" role="tab" aria-selected="false">Ví điện tử</a>
                                    </li>
                                </ul>
                            </div>

                            <div class=" tab-content">
                                <div class="tab-pane fade active show  mt-3" id="charge_card" role="tabpanel" >
                                    <form action="">
                                        <div class="box-charge-card">
                                            <div class="default-form-group mb-fix-20">
                                                <label class="text-form">Nhà cung cấp</label>
                                                <div class="col-md-12 p-0">
                                                    <select class="select-form w-100" name="select">
                                                        <option value="">Viettel - Nhận 100.0%</option>
                                                        <option value="3">VinaPhone - Nhận 70.0%</option>
                                                        <option value="4">Garena - Nhận 60.0%</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="default-form-group mb-fix-20">
                                                <label class="text-form">Chọn mệnh giá</label>
                                                <div class="col-md-12 p-0">
                                                    <div class="row m-0">
                                                        <div class=" col-4 col-md-4 pl-fix-4 pr-fix-4 check-radio-form charge-card-form">
                                                            <input checked name="amount" type="radio" id="recharge_amount_1" hidden>
                                                            <label for="recharge_amount_1">
                                                                <p>10.000đ</p>
                                                            </label>
                                                        </div>
                                                        <div class=" col-4 col-md-4 pl-fix-4 pr-fix-4 check-radio-form charge-card-form">
                                                            <input name="amount"  type="radio" id="recharge_amount_2" hidden>
                                                            <label for="recharge_amount_2">
                                                                <p>20.000đ</p>
                                                            </label>
                                                        </div>
                                                        <div class=" col-4 col-md-4 pl-fix-4 pr-fix-4 check-radio-form charge-card-form">
                                                            <input name="amount" type="radio" id="recharge_amount_3" hidden>
                                                            <label for="recharge_amount_3">
                                                                <p>30.000đ</p>
                                                            </label>
                                                        </div>
                                                        <div class=" col-4 col-md-4 pl-fix-4 pr-fix-4 check-radio-form charge-card-form">
                                                            <input name="amount" type="radio" id="recharge_amount_4" hidden>
                                                            <label for="recharge_amount_4">
                                                                <p>40.000đ</p>
                                                            </label>
                                                        </div>
                                                        <div class="col-4 col-md-4 pl-fix-4 pr-fix-4 check-radio-form charge-card-form">
                                                            <input name="amount" type="radio" id="recharge_amount_5" hidden>
                                                            <label for="recharge_amount_5">
                                                                <p>50.000đ</p>
                                                            </label>
                                                        </div>
                                                        <div class=" col-4 col-md-4 pl-fix-4 pr-fix-4 check-radio-form charge-card-form">
                                                            <input name="amount" type="radio" id="recharge_amount_6" hidden>
                                                            <label for="recharge_amount_6">
                                                                <p>60.000đ</p>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="default-form-group mb-fix-20">
                                                <label class="text-form">Mã số thẻ</label>
                                                <div class="col-md-12 p-0">
                                                    <input class="input-form w-100" type="text" placeholder="Nhập mã số thẻ">

                                                </div>
                                            </div>
                                            <div class="default-form-group mb-fix-20">
                                                <label class="text-form">Số Seri</label>
                                                <div class="col-md-12 p-0">
                                                    <input class="input-form w-100" type="text" placeholder="Nhập số seri thẻ">

                                                </div>
                                            </div>
                                            <div class="default-form-group mb-fix-20">
                                                <label class="text-form">Mã bảo vệ</label>
                                                <div class="col-md-12 p-0 d-flex">
                                                    <input class="input-form w-100" type="text" placeholder="Nhập mã bảo vệ ">
                                                    <div class="captcha">
                                                        <div>
                                                        <span>
                                                              <img src="/assets/frontend/{{theme('')->theme_key}}/image/capcha_example.png" alt="">
                                                        </span>
                                                        </div>
                                                    </div>
                                                    <button class="refresh-captcha">
                                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/captcha_refresh.png" alt="">
                                                    </button>

                                                </div>
                                            </div>
                                            <div class="default-form-group mb-fix-20 ">
                                                <button  class="w-100 primary-button button-default-ct btn-charge-data" type="button">
                                                    Nạp ngay
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade mt-3" id="atm_card" role="tabpanel" >
                                    <form action="">
                                        <div class="box-charge-card">
                                            <div class="atm-card-title mb-fix-20">
                                                <span>Để hoàn tất đơn nạp, bạn vui lòng chuyển khoản theo cú pháp sau:</span>
                                            </div>
                                            <div class="dialog--content mb-fix-20">
                                                <div class="card--gray">
                                                    <div class="card--attr">
                                                        <div class="card--attr__name">
                                                            Ngân hàng Kỹ thương Việt Nam
                                                            (Techcombank)
                                                        </div>
                                                        <div class="card--attr__value">
                                                            <div class="card--logo">
                                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/cards-logo/zing.png" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card--attr">
                                                        <div class="card--attr__name">
                                                            Chủ tài khoản
                                                        </div>
                                                        <div class="card--attr__value">
                                                            BUI THI NHAM
                                                        </div>
                                                    </div>
                                                    <div class="card--attr">
                                                        <div class="card--attr__name">
                                                            Số tài khoản
                                                        </div>
                                                        <div class="card--attr__value d-flex">

                                                            <div class="card__info"> 19037861065016</div>

                                                            <div class="icon--coppy js-copy-text" aria-describedby="tippy-7">
                                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/copy-black.png" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card--attr">
                                                        <div class="card--attr__name">
                                                            Nội dung chuyển tiền
                                                        </div>
                                                        <div class="card--attr__value d-flex">
                                                            <div class="card__info"> NAP DTGRN 103764</div>

                                                            <div class="icon--coppy js-copy-text" aria-describedby="tippy-7">
                                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/copy-black.png" alt="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="default-form-group ">
                                                <button  class="w-100 primary-button button-default-ct btn-data-charge_atm" type="button">
                                                    Xác nhận
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade mt-3" id="wallet_card" role="tabpanel" >
                                    <form action="">
                                        <div class="box-charge-card">
                                            <div class="default-form-group">
                                                <p class="wallet-card-title"> Vui lòng chọn chuyển khoản vào 1 trong các tài khoản ví dưới đây</p>
                                                <div class="col-md-12 p-0">
                                                    <div class="row m-0">
                                                        <div class=" col-12 col-md-12 pr-fix-4 pl-fix-4 mb-fix-16 check-radio-form">
                                                            <input checked name="amount" type="radio" id="walet_card_1" hidden>
                                                            <label for="walet_card_1">
                                                                <div class="wallet-card d-flex justify-content-between">
                                                                    <div class="wallet-card-img">
                                                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/wallet_logo.png" alt="">
                                                                    </div>
                                                                    <div class="wallet-card-content">
                                                                        <div class="wallet-card-name">
                                                                            Chủ tài khoản: Trần Văn Sơn
                                                                        </div>
                                                                        <div class="wallet-card-address">
                                                                            Chi nhánh: Hà Nội
                                                                        </div>
                                                                        <div class="wallet-card-web">
                                                                            thesieure.com
                                                                        </div>

                                                                    </div>
                                                                    <div class="wallet-card-qr">
                                                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/wallet_qr.png" alt="">
                                                                    </div>
                                                                </div>
                                                            </label>
                                                        </div>
                                                        <div class=" col-12 col-md-12 pr-fix-4 pl-fix-4 mb-fix-16 check-radio-form">
                                                            <input checked name="amount" type="radio" id="walet_card_2" hidden>
                                                            <label for="walet_card_2">
                                                                <div class="wallet-card d-flex justify-content-between">
                                                                    <div class="wallet-card-img">
                                                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/wallet_logo.png" alt="">
                                                                    </div>
                                                                    <div class="wallet-card-content">
                                                                        <div class="wallet-card-name">
                                                                            Chủ tài khoản: Trần Văn Sơn
                                                                        </div>
                                                                        <div class="wallet-card-address">
                                                                            Chi nhánh: Hà Nội
                                                                        </div>
                                                                        <div class="wallet-card-web">
                                                                            thesieure.com
                                                                        </div>

                                                                    </div>
                                                                    <div class="wallet-card-qr">
                                                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/wallet_qr.png" alt="">
                                                                    </div>
                                                                </div>
                                                            </label>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="wallet-card-title mb-fix-8"> Nội dung thanh toán:</div>
                                                <span class="wallet-card-title wallet-card-title-content"> Doithegarena.com + [ID tài khoản hoặc tên tài khoản]</span>
                                            </div>

                                            <div class="default-form-group mt-fix-16">
                                                <button  class="w-100 primary-button button-default-ct btn-data-wallet_card" type="button">
                                                    Xác nhận
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-lg-7 col-md-12 pl-0 d-g-md-none " style="min-height: 100%">
                    <img class="w-100" src="/assets/frontend/{{theme('')->theme_key}}/image/charge_card.png" alt="" style="min-height: 100%">
                </div>
            </div>
        </div>
        <div class="block-product mt-fix-20">
            <div class="product-header d-flex">
                    <span>
                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/nick_title.png" alt="">
                    </span>
                <p class="text-title" >Nick ngon giá rẻ</p>
                <div class="navbar-spacer"></div>

                <div class="text-view-more">

                    <a href="/mua-acc" class="global__link">Xem thêm<i class="__icon --sm --link ml-1" style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/icons/arrow-right-blue.png)"></i></a>

                </div>
            </div>
            <div class="box-product">
                <div class=" list-product d-flex flex-wrap" >
                    <div class="item-product item-nick ">
                        <a href="/mua-acc/slug">
                            <div class="item-nick-img">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/nick_game1.png" alt="">
                            </div>

                            <div class="item-nick-name">Liên quân Mobile</div>
                        </a>

                    </div>
                    <div class="item-product  item-nick">
                        <a href="/mua-acc/slug">
                            <div class="item-nick-img">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/nick_game2.png" alt="">
                            </div>
                            <div class="item-nick-name">Garena freefire</div>
                        </a>

                    </div>
                    <div class="item-product  item-nick">
                        <a href="">
                            <div class="item-nick-img">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/nick_game3.png" alt="">
                            </div>
                            <div class="item-nick-name">PUBG Mobile</div>
                        </a>

                    </div>
                    <div class="item-product  item-nick">
                        <a href="/mua-acc/slug">
                            <div class="item-nick-img">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/nick_game4.png" alt="">
                            </div>
                            <div class="item-nick-name">Liên Minh Huyền Thoại</div>
                        </a>

                    </div>
                    <div class="item-product  item-nick">
                        <a href="/mua-acc/slug">
                            <div class="item-nick-img">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/nick_game5.png" alt="">
                            </div>
                            <div class="item-nick-name">Cyber Punk 2077</div>
                        </a>

                    </div>
                    <div class="item-product  item-nick">
                        <a href="/mua-acc/slug">
                            <div class="item-nick-img">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/nick_game6.png" alt="">
                            </div>
                            <div class="item-nick-name">Tốc chiến</div>
                        </a>

                    </div>
                    <div class="item-product  item-nick">
                        <a href="/mua-acc/slug">
                            <div class="item-nick-img">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/nick_game7.png" alt="">
                            </div>
                            <div class="item-nick-name">Auto Chess</div>
                        </a>

                    </div>
                    <div class="item-product  item-nick">
                        <a href="/mua-acc/slug">
                            <div class="item-nick-img">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/nick_game8.png" alt="">
                            </div>
                            <div class="item-nick-name">Bang Bangi</div>
                        </a>

                    </div>

                </div>
            </div>
        </div>
        <div class="block-other-nick mt-fix-20">
            <div class="row mr-fix-10 ml-fix-10">
                <div class="col-12 col-md-6 col-lg-3 pr-fix-10 pl-fix-10 ">
                    <div class="block-product mb-md-fix-12">
                        <div class="product-header d-flex">
                                <span>
                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/nick_dif.png" alt="">
                                </span>
                            <p class="text-title" >Liên quân Mobile</p>
                            <div class="navbar-spacer"></div>

                            {{--                        <div class="text-view-more">--}}

                            {{--                            <a href="/mua-acc/slug" class="global__link">Xem thêm<i class="__icon --sm --link ml-1" style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/icons/arrow-right-blue.png)"></i></a>--}}

                            {{--                        </div>--}}
                        </div>
                        <div class="box-product box-other-nick" >
                            <div class="list-product d-g-md-none mt-fix-4">
                                <div class="item-product item-other-nick mt-fix-16">
                                    <a href="/acc/id">
                                        <div class="item-product__box-img">

                                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/product1.gif" alt="">

                                        </div>
                                        <div class="item-product__box-content">


                                            <div class="item-product__box-name">
                                                Acc liên quan siêu vip
                                            </div>
                                            <div class="item-product__box-id">
                                                ID: #1365898
                                            </div>
                                            <div class="item-product__box-rank">
                                                <div>Rank: 91</div>
                                                <div>Rank: 91</div>
                                                <div>Rank: 91</div>

                                            </div>
                                            <div class="item-product__box-price">

                                                <div class="special-price">15.000đ</div>
                                                <div class="old-price">30.000đ</div>
                                                <div class="item-product__sticker-percent">
                                                    -50%
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="item-product item-other-nick mt-fix-16">
                                    <a href="/acc/id">
                                        <div class="item-product__box-img">

                                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/product3.gif" alt="">
                                        </div>
                                        <div class="item-product__box-content">


                                            <div class="item-product__box-name">
                                                Acc liên quan siêu vip
                                            </div>
                                            <div class="item-product__box-id">
                                                ID: #1365898
                                            </div>
                                            <div class="item-product__box-rank">
                                                <div>Rank: 91</div>
                                                <div>Rank: 91</div>
                                                <div>Rank: 91</div>

                                            </div>
                                            <div class="item-product__box-price">

                                                <div class="special-price">15.000đ</div>
                                                <div class="old-price">30.000đ</div>
                                                <div class="item-product__sticker-percent">
                                                    -50%
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="item-product item-other-nick mt-fix-16">
                                    <a href="/acc/id">
                                        <div class="item-product__box-img">

                                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/product2.gif" alt="">

                                        </div>
                                        <div class="item-product__box-content">


                                            <div class="item-product__box-name">
                                                Acc liên quan siêu vip
                                            </div>
                                            <div class="item-product__box-id">
                                                ID: #1365898
                                            </div>
                                            <div class="item-product__box-rank">
                                                <div>Rank: 91</div>
                                                <div>Rank: 91</div>
                                                <div>Rank: 91</div>

                                            </div>
                                            <div class="item-product__box-price">

                                                <div class="special-price">15.000đ</div>
                                                <div class="old-price">30.000đ</div>
                                                <div class="item-product__sticker-percent">
                                                    -50%
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>


                            </div>
                            <div class="swiper-container list-product list-other-nick mt-fix-12 d-none d-g-md-block"   >
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" >
                                        <div class="item-product__box-img">
                                            <a href="/acc/id">
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/product2.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="item-product__box-content">

                                            <a href="/acc/id">
                                                <div class="item-product__box-name">
                                                    Acc liên quan siêu vip
                                                </div>
                                                <div class="item-product__box-id">
                                                    ID: #1365898
                                                </div>
                                                <div class="item-product__box-rank">
                                                    <div class="item-product__box-rank">
                                                        <div>Rank: 91</div>
                                                        <div>Rank: 91</div>
                                                        <div>Rank: 91</div>
                                                    </div>
                                                </div>
                                                <div class="item-product__box-price">

                                                    <div class="special-price">15.000đ</div>
                                                    <div class="old-price">30.000đ</div>
                                                    <div class="item-product__sticker-percent">
                                                        -50%
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="item-product__box-img">
                                            <a href="/acc/id">
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/product3.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="item-product__box-content">

                                            <a href="/acc/id">
                                                <div class="item-product__box-name">
                                                    Acc liên quan siêu vip
                                                </div>
                                                <div class="item-product__box-id">
                                                    ID: #1365898
                                                </div>
                                                <div class="item-product__box-rank">
                                                    <div class="item-product__box-rank">
                                                        <div>Rank: 91</div>
                                                        <div>Rank: 91</div>
                                                        <div>Rank: 91</div>
                                                    </div>
                                                </div>
                                                <div class="item-product__box-price">

                                                    <div class="special-price">15.000đ</div>
                                                    <div class="old-price">30.000đ</div>
                                                    <div class="item-product__sticker-percent">
                                                        -50%
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="item-product__box-img">
                                            <a href="/acc/id">
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/product6.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="item-product__box-content">

                                            <a href="/acc/id">
                                                <div class="item-product__box-name">
                                                    Acc liên quan siêu vip
                                                </div>
                                                <div class="item-product__box-id">
                                                    ID: #1365898
                                                </div>
                                                <div class="item-product__box-rank">
                                                    <div class="item-product__box-rank">
                                                        <div>Rank: 91</div>
                                                        <div>Rank: 91</div>
                                                        <div>Rank: 91</div>
                                                    </div>
                                                </div>
                                                <div class="item-product__box-price">

                                                    <div class="special-price">15.000đ</div>
                                                    <div class="old-price">30.000đ</div>
                                                    <div class="item-product__sticker-percent">
                                                        -50%
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="item-product__box-img">
                                            <a href="/acc/id">
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/product1.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="item-product__box-content">

                                            <a href="/acc/id">
                                                <div class="item-product__box-name">
                                                    Acc liên quan siêu vip
                                                </div>
                                                <div class="item-product__box-id">
                                                    ID: #1365898
                                                </div>
                                                <div class="item-product__box-rank">
                                                    <div class="item-product__box-rank">
                                                        <div>Rank: 91</div>
                                                        <div>Rank: 91</div>
                                                        <div>Rank: 91</div>
                                                    </div>
                                                </div>
                                                <div class="item-product__box-price">

                                                    <div class="special-price">15.000đ</div>
                                                    <div class="old-price">30.000đ</div>
                                                    <div class="item-product__sticker-percent">
                                                        -50%
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="item-product__box-img">
                                            <a href="/acc/id">
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/product1.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="item-product__box-content">

                                            <a href="/acc/id">
                                                <div class="item-product__box-name">
                                                    Acc liên quan siêu vip
                                                </div>
                                                <div class="item-product__box-id">
                                                    ID: #1365898
                                                </div>
                                                <div class="item-product__box-rank">
                                                    <div class="item-product__box-rank">
                                                        <div>Rank: 91</div>
                                                        <div>Rank: 91</div>
                                                        <div>Rank: 91</div>
                                                    </div>
                                                </div>
                                                <div class="item-product__box-price">

                                                    <div class="special-price">15.000đ</div>
                                                    <div class="old-price">30.000đ</div>
                                                    <div class="item-product__sticker-percent">
                                                        -50%
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-12 col-md-6 col-lg-3 pr-fix-10 pl-fix-10">
                    <div class="block-product mb-md-fix-12">
                        <div class="product-header d-flex">
                                <span>
                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/nick_dif.png" alt="">
                                </span>
                            <p class="text-title" >PUBG</p>
                            <div class="navbar-spacer"></div>


                        </div>
                        <div class="box-product box-other-nick" >
                            <div class="list-product d-g-md-none mt-fix-4">
                                <div class="item-product item-other-nick mt-fix-16">
                                    <a href="/acc/id">
                                        <div class="item-product__box-img">

                                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/product3.gif" alt="">

                                        </div>
                                        <div class="item-product__box-content">


                                            <div class="item-product__box-name">
                                                Acc liên quan siêu vip
                                            </div>
                                            <div class="item-product__box-id">
                                                ID: #1365898
                                            </div>
                                            <div class="item-product__box-rank">
                                                <div>Rank: 91</div>
                                                <div>Rank: 91</div>
                                                <div>Rank: 91</div>

                                            </div>
                                            <div class="item-product__box-price">

                                                <div class="special-price">15.000đ</div>
                                                <div class="old-price">30.000đ</div>
                                                <div class="item-product__sticker-percent">
                                                    -50%
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="item-product item-other-nick mt-fix-16">
                                    <a href="/acc/id">
                                        <div class="item-product__box-img">

                                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/product1.gif" alt="">

                                        </div>
                                        <div class="item-product__box-content">


                                            <div class="item-product__box-name">
                                                Acc liên quan siêu vip
                                            </div>
                                            <div class="item-product__box-id">
                                                ID: #1365898
                                            </div>
                                            <div class="item-product__box-rank">
                                                <div>Rank: 91</div>
                                                <div>Rank: 91</div>
                                                <div>Rank: 91</div>

                                            </div>
                                            <div class="item-product__box-price">

                                                <div class="special-price">15.000đ</div>
                                                <div class="old-price">30.000đ</div>
                                                <div class="item-product__sticker-percent">
                                                    -50%
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="item-product item-other-nick mt-fix-16">
                                    <a href="/acc/id">
                                        <div class="item-product__box-img">

                                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/product3.gif" alt="">

                                        </div>
                                        <div class="item-product__box-content">


                                            <div class="item-product__box-name">
                                                Acc liên quan siêu vip
                                            </div>
                                            <div class="item-product__box-id">
                                                ID: #1365898
                                            </div>
                                            <div class="item-product__box-rank">
                                                <div>Rank: 91</div>
                                                <div>Rank: 91</div>
                                                <div>Rank: 91</div>

                                            </div>
                                            <div class="item-product__box-price">

                                                <div class="special-price">15.000đ</div>
                                                <div class="old-price">30.000đ</div>
                                                <div class="item-product__sticker-percent">
                                                    -50%
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>


                            </div>
                            <div class="swiper-container list-product list-other-nick mt-fix-12 d-none d-g-md-block"   >
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" >
                                        <div class="item-product__box-img">
                                            <a href="/acc/id">
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/product1.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="item-product__box-content">

                                            <a href="/acc/id">
                                                <div class="item-product__box-name">
                                                    Acc liên quan siêu vip
                                                </div>
                                                <div class="item-product__box-id">
                                                    ID: #1365898
                                                </div>
                                                <div class="item-product__box-rank">
                                                    <div class="item-product__box-rank">
                                                        <div>Rank: 91</div>
                                                        <div>Rank: 91</div>
                                                        <div>Rank: 91</div>
                                                    </div>
                                                </div>
                                                <div class="item-product__box-price">

                                                    <div class="special-price">15.000đ</div>
                                                    <div class="old-price">30.000đ</div>
                                                    <div class="item-product__sticker-percent">
                                                        -50%
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="item-product__box-img">
                                            <a href="/acc/id">
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/product1.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="item-product__box-content">

                                            <a href="/acc/id">
                                                <div class="item-product__box-name">
                                                    Acc liên quan siêu vip
                                                </div>
                                                <div class="item-product__box-id">
                                                    ID: #1365898
                                                </div>
                                                <div class="item-product__box-rank">
                                                    <div class="item-product__box-rank">
                                                        <div>Rank: 91</div>
                                                        <div>Rank: 91</div>
                                                        <div>Rank: 91</div>
                                                    </div>
                                                </div>
                                                <div class="item-product__box-price">

                                                    <div class="special-price">15.000đ</div>
                                                    <div class="old-price">30.000đ</div>
                                                    <div class="item-product__sticker-percent">
                                                        -50%
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="item-product__box-img">
                                            <a href="/acc/id">
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/product1.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="item-product__box-content">

                                            <a href="/acc/id">
                                                <div class="item-product__box-name">
                                                    Acc liên quan siêu vip
                                                </div>
                                                <div class="item-product__box-id">
                                                    ID: #1365898
                                                </div>
                                                <div class="item-product__box-rank">
                                                    <div class="item-product__box-rank">
                                                        <div>Rank: 91</div>
                                                        <div>Rank: 91</div>
                                                        <div>Rank: 91</div>
                                                    </div>
                                                </div>
                                                <div class="item-product__box-price">

                                                    <div class="special-price">15.000đ</div>
                                                    <div class="old-price">30.000đ</div>
                                                    <div class="item-product__sticker-percent">
                                                        -50%
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="item-product__box-img">
                                            <a href="/acc/id">
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/product1.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="item-product__box-content">

                                            <a href="/acc/id">
                                                <div class="item-product__box-name">
                                                    Acc liên quan siêu vip
                                                </div>
                                                <div class="item-product__box-id">
                                                    ID: #1365898
                                                </div>
                                                <div class="item-product__box-rank">
                                                    <div class="item-product__box-rank">
                                                        <div>Rank: 91</div>
                                                        <div>Rank: 91</div>
                                                        <div>Rank: 91</div>
                                                    </div>
                                                </div>
                                                <div class="item-product__box-price">

                                                    <div class="special-price">15.000đ</div>
                                                    <div class="old-price">30.000đ</div>
                                                    <div class="item-product__sticker-percent">
                                                        -50%
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="item-product__box-img">
                                            <a href="/acc/id">
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/product1.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="item-product__box-content">

                                            <a href="/acc/id">
                                                <div class="item-product__box-name">
                                                    Acc liên quan siêu vip
                                                </div>
                                                <div class="item-product__box-id">
                                                    ID: #1365898
                                                </div>
                                                <div class="item-product__box-rank">
                                                    <div class="item-product__box-rank">
                                                        <div>Rank: 91</div>
                                                        <div>Rank: 91</div>
                                                        <div>Rank: 91</div>
                                                    </div>
                                                </div>
                                                <div class="item-product__box-price">

                                                    <div class="special-price">15.000đ</div>
                                                    <div class="old-price">30.000đ</div>
                                                    <div class="item-product__sticker-percent">
                                                        -50%
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 pr-fix-10 pl-fix-10 ">
                    <div class="block-product mb-md-fix-12">
                        <div class="product-header d-flex">
                                <span>
                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/nick_dif.png" alt="">
                                </span>
                            <p class="text-title" >Pokemon Go</p>
                            <div class="navbar-spacer"></div>


                        </div>
                        <div class="box-product box-other-nick" >
                            <div class="list-product d-g-md-none mt-fix-4">
                                <div class="item-product item-other-nick mt-fix-16">
                                    <a href="/acc/id">
                                        <div class="item-product__box-img">

                                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/product3.gif" alt="">

                                        </div>
                                        <div class="item-product__box-content">


                                            <div class="item-product__box-name">
                                                Acc liên quan siêu vip
                                            </div>
                                            <div class="item-product__box-id">
                                                ID: #1365898
                                            </div>
                                            <div class="item-product__box-rank">
                                                <div>Rank: 91</div>
                                                <div>Rank: 91</div>
                                                <div>Rank: 91</div>

                                            </div>
                                            <div class="item-product__box-price">

                                                <div class="special-price">15.000đ</div>
                                                <div class="old-price">30.000đ</div>
                                                <div class="item-product__sticker-percent">
                                                    -50%
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="item-product item-other-nick mt-fix-16">
                                    <a href="/acc/id">
                                        <div class="item-product__box-img">

                                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/product6.gif" alt="">

                                        </div>
                                        <div class="item-product__box-content">


                                            <div class="item-product__box-name">
                                                Acc liên quan siêu vip
                                            </div>
                                            <div class="item-product__box-id">
                                                ID: #1365898
                                            </div>
                                            <div class="item-product__box-rank">
                                                <div>Rank: 91</div>
                                                <div>Rank: 91</div>
                                                <div>Rank: 91</div>

                                            </div>
                                            <div class="item-product__box-price">

                                                <div class="special-price">15.000đ</div>
                                                <div class="old-price">30.000đ</div>
                                                <div class="item-product__sticker-percent">
                                                    -50%
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="item-product item-other-nick mt-fix-16">
                                    <a href="/acc/id">
                                        <div class="item-product__box-img">

                                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/product2.gif" alt="">

                                        </div>
                                        <div class="item-product__box-content">


                                            <div class="item-product__box-name">
                                                Acc liên quan siêu vip
                                            </div>
                                            <div class="item-product__box-id">
                                                ID: #1365898
                                            </div>
                                            <div class="item-product__box-rank">
                                                <div>Rank: 91</div>
                                                <div>Rank: 91</div>
                                                <div>Rank: 91</div>

                                            </div>
                                            <div class="item-product__box-price">

                                                <div class="special-price">15.000đ</div>
                                                <div class="old-price">30.000đ</div>
                                                <div class="item-product__sticker-percent">
                                                    -50%
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>

                            </div>
                            <div class="swiper-container list-product list-other-nick mt-fix-12 d-none d-g-md-block"   >
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" >
                                        <div class="item-product__box-img">
                                            <a href="/acc/id">
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/product1.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="item-product__box-content">

                                            <a href="/acc/id">
                                                <div class="item-product__box-name">
                                                    Acc liên quan siêu vip
                                                </div>
                                                <div class="item-product__box-id">
                                                    ID: #1365898
                                                </div>
                                                <div class="item-product__box-rank">
                                                    <div class="item-product__box-rank">
                                                        <div>Rank: 91</div>
                                                        <div>Rank: 91</div>
                                                        <div>Rank: 91</div>
                                                    </div>
                                                </div>
                                                <div class="item-product__box-price">

                                                    <div class="special-price">15.000đ</div>
                                                    <div class="old-price">30.000đ</div>
                                                    <div class="item-product__sticker-percent">
                                                        -50%
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="item-product__box-img">
                                            <a href="/acc/id">
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/product1.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="item-product__box-content">

                                            <a href="/acc/id">
                                                <div class="item-product__box-name">
                                                    Acc liên quan siêu vip
                                                </div>
                                                <div class="item-product__box-id">
                                                    ID: #1365898
                                                </div>
                                                <div class="item-product__box-rank">
                                                    <div class="item-product__box-rank">
                                                        <div>Rank: 91</div>
                                                        <div>Rank: 91</div>
                                                        <div>Rank: 91</div>
                                                    </div>
                                                </div>
                                                <div class="item-product__box-price">

                                                    <div class="special-price">15.000đ</div>
                                                    <div class="old-price">30.000đ</div>
                                                    <div class="item-product__sticker-percent">
                                                        -50%
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="item-product__box-img">
                                            <a href="/acc/id">
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/product1.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="item-product__box-content">

                                            <a href="/acc/id">
                                                <div class="item-product__box-name">
                                                    Acc liên quan siêu vip
                                                </div>
                                                <div class="item-product__box-id">
                                                    ID: #1365898
                                                </div>
                                                <div class="item-product__box-rank">
                                                    <div class="item-product__box-rank">
                                                        <div>Rank: 91</div>
                                                        <div>Rank: 91</div>
                                                        <div>Rank: 91</div>
                                                    </div>
                                                </div>
                                                <div class="item-product__box-price">

                                                    <div class="special-price">15.000đ</div>
                                                    <div class="old-price">30.000đ</div>
                                                    <div class="item-product__sticker-percent">
                                                        -50%
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="item-product__box-img">
                                            <a href="/acc/id">
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/product1.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="item-product__box-content">

                                            <a href="/acc/id">
                                                <div class="item-product__box-name">
                                                    Acc liên quan siêu vip
                                                </div>
                                                <div class="item-product__box-id">
                                                    ID: #1365898
                                                </div>
                                                <div class="item-product__box-rank">
                                                    <div class="item-product__box-rank">
                                                        <div>Rank: 91</div>
                                                        <div>Rank: 91</div>
                                                        <div>Rank: 91</div>
                                                    </div>
                                                </div>
                                                <div class="item-product__box-price">

                                                    <div class="special-price">15.000đ</div>
                                                    <div class="old-price">30.000đ</div>
                                                    <div class="item-product__sticker-percent">
                                                        -50%
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="item-product__box-img">
                                            <a href="/acc/id">
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/product1.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="item-product__box-content">

                                            <a href="/acc/id">
                                                <div class="item-product__box-name">
                                                    Acc liên quan siêu vip
                                                </div>
                                                <div class="item-product__box-id">
                                                    ID: #1365898
                                                </div>
                                                <div class="item-product__box-rank">
                                                    <div class="item-product__box-rank">
                                                        <div>Rank: 91</div>
                                                        <div>Rank: 91</div>
                                                        <div>Rank: 91</div>
                                                    </div>
                                                </div>
                                                <div class="item-product__box-price">

                                                    <div class="special-price">15.000đ</div>
                                                    <div class="old-price">30.000đ</div>
                                                    <div class="item-product__sticker-percent">
                                                        -50%
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-12 col-md-6 col-lg-3 pr-fix-10 pl-fix-10 ">
                    <div class="block-product mb-md-fix-12">
                        <div class="product-header d-flex">
                                <span>
                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/nick_dif.png" alt="">
                                </span>
                            <p class="text-title" >Pokemon Go</p>
                            <div class="navbar-spacer"></div>


                        </div>
                        <div class="box-product box-other-nick" >
                            <div class="list-product d-g-md-none mt-fix-4">
                                <div class="item-product item-other-nick mt-fix-16">
                                    <a href="/acc/id">
                                        <div class="item-product__box-img">

                                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/product2.gif" alt="">

                                        </div>
                                        <div class="item-product__box-content">


                                            <div class="item-product__box-name">
                                                Acc liên quan siêu vip
                                            </div>
                                            <div class="item-product__box-id">
                                                ID: #1365898
                                            </div>
                                            <div class="item-product__box-rank">
                                                <div>Rank: 91</div>
                                                <div>Rank: 91</div>
                                                <div>Rank: 91</div>

                                            </div>
                                            <div class="item-product__box-price">

                                                <div class="special-price">15.000đ</div>
                                                <div class="old-price">30.000đ</div>
                                                <div class="item-product__sticker-percent">
                                                    -50%
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="item-product item-other-nick mt-fix-16">
                                    <a href="/acc/id">
                                        <div class="item-product__box-img">

                                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/product2.gif" alt="">

                                        </div>
                                        <div class="item-product__box-content">


                                            <div class="item-product__box-name">
                                                Acc liên quan siêu vip
                                            </div>
                                            <div class="item-product__box-id">
                                                ID: #1365898
                                            </div>
                                            <div class="item-product__box-rank">
                                                <div>Rank: 91</div>
                                                <div>Rank: 91</div>
                                                <div>Rank: 91</div>

                                            </div>
                                            <div class="item-product__box-price">

                                                <div class="special-price">15.000đ</div>
                                                <div class="old-price">30.000đ</div>
                                                <div class="item-product__sticker-percent">
                                                    -50%
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="item-product item-other-nick mt-fix-16">
                                    <a href="/acc/id">
                                        <div class="item-product__box-img">

                                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/product2.gif" alt="">

                                        </div>
                                        <div class="item-product__box-content">


                                            <div class="item-product__box-name">
                                                Acc liên quan siêu vip
                                            </div>
                                            <div class="item-product__box-id">
                                                ID: #1365898
                                            </div>
                                            <div class="item-product__box-rank">
                                                <div>Rank: 91</div>
                                                <div>Rank: 91</div>
                                                <div>Rank: 91</div>

                                            </div>
                                            <div class="item-product__box-price">

                                                <div class="special-price">15.000đ</div>
                                                <div class="old-price">30.000đ</div>
                                                <div class="item-product__sticker-percent">
                                                    -50%
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>


                            </div>
                            <div class="swiper-container list-product list-other-nick mt-fix-12 d-none d-g-md-block"   >
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide" >
                                        <div class="item-product__box-img">
                                            <a href="/acc/id">
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/product1.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="item-product__box-content">

                                            <a href="/acc/id">
                                                <div class="item-product__box-name">
                                                    Acc liên quan siêu vip
                                                </div>
                                                <div class="item-product__box-id">
                                                    ID: #1365898
                                                </div>
                                                <div class="item-product__box-rank">
                                                    <div>Rank: 91</div>
                                                    <div>Rank: 91</div>
                                                    <div>Rank: 91</div>
                                                </div>
                                                <div class="item-product__box-price">

                                                    <div class="special-price">15.000đ</div>
                                                    <div class="old-price">30.000đ</div>
                                                    <div class="item-product__sticker-percent">
                                                        -50%
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="item-product__box-img">
                                            <a href="/acc/id">
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/product1.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="item-product__box-content">

                                            <a href="/acc/id">
                                                <div class="item-product__box-name">
                                                    Acc liên quan siêu vip
                                                </div>
                                                <div class="item-product__box-id">
                                                    ID: #1365898
                                                </div>
                                                <div class="item-product__box-rank">
                                                    <div class="item-product__box-rank">
                                                        <div>Rank: 91</div>
                                                        <div>Rank: 91</div>
                                                        <div>Rank: 91</div>
                                                    </div>
                                                </div>
                                                <div class="item-product__box-price">

                                                    <div class="special-price">15.000đ</div>
                                                    <div class="old-price">30.000đ</div>
                                                    <div class="item-product__sticker-percent">
                                                        -50%
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="item-product__box-img">
                                            <a href="/acc/id">
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/product1.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="item-product__box-content">

                                            <a href="/acc/id">
                                                <div class="item-product__box-name">
                                                    Acc liên quan siêu vip
                                                </div>
                                                <div class="item-product__box-id">
                                                    ID: #1365898
                                                </div>
                                                <div class="item-product__box-rank">
                                                    <div class="item-product__box-rank">
                                                        <div>Rank: 91</div>
                                                        <div>Rank: 91</div>
                                                        <div>Rank: 91</div>
                                                    </div>
                                                </div>
                                                <div class="item-product__box-price">

                                                    <div class="special-price">15.000đ</div>
                                                    <div class="old-price">30.000đ</div>
                                                    <div class="item-product__sticker-percent">
                                                        -50%
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="item-product__box-img">
                                            <a href="/acc/id">
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/product1.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="item-product__box-content">

                                            <a href="/acc/id">
                                                <div class="item-product__box-name">
                                                    Acc liên quan siêu vip
                                                </div>
                                                <div class="item-product__box-id">
                                                    ID: #1365898
                                                </div>
                                                <div class="item-product__box-rank">
                                                    <div class="item-product__box-rank">
                                                        <div>Rank: 91</div>
                                                        <div>Rank: 91</div>
                                                        <div>Rank: 91</div>
                                                    </div>
                                                </div>
                                                <div class="item-product__box-price">

                                                    <div class="special-price">15.000đ</div>
                                                    <div class="old-price">30.000đ</div>
                                                    <div class="item-product__sticker-percent">
                                                        -50%
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="swiper-slide" >
                                        <div class="item-product__box-img">
                                            <a href="/acc/id">
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/product1.gif" alt="">
                                            </a>
                                        </div>
                                        <div class="item-product__box-content">

                                            <a href="/acc/id">
                                                <div class="item-product__box-name">
                                                    Acc liên quan siêu vip
                                                </div>
                                                <div class="item-product__box-id">
                                                    ID: #1365898
                                                </div>
                                                <div class="item-product__box-rank">
                                                    <div class="item-product__box-rank">
                                                        <div>Rank: 91</div>
                                                        <div>Rank: 91</div>
                                                        <div>Rank: 91</div>
                                                    </div>
                                                </div>
                                                <div class="item-product__box-price">

                                                    <div class="special-price">15.000đ</div>
                                                    <div class="old-price">30.000đ</div>
                                                    <div class="item-product__sticker-percent">
                                                        -50%
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class=" block-product mt-fix-20 mt-md-fix-8">
            <div class="product-header d-flex">
                    <span>
                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/news.png" alt="">
                    </span>
                <p class="text-title">Tin tức</p>
                <div class="product-catecory " >
                    <ul class="nav d-g-md-none" role="tablist" >
                        <li class="nav-item" role="presentation">
                            <a  class="nav-link active"  data-toggle="tab" href="#news_game" role="tab" aria-selected="true">Tin game</a>
                        </li >
                        <li class="nav-item" role="presentation">
                            <a  class="nav-link"   data-toggle="tab" href="#news_gamble" role="tab" aria-selected="false"> Cá độ</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a  class="nav-link"  data-toggle="tab" href="#news_soccer" role="tab" aria-selected="false">Bóng đá</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a  class="nav-link"  data-toggle="tab" href="#news_soccer" role="tab" aria-selected="false">Bóng đá</a>
                        </li>
                    </ul>
                </div>


                <div class="text-view-more">

                    <a href="/tin-tuc/slug" class="global__link">Xem thêm<i class="__icon --sm --link ml-1" style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/icons/arrow-right-blue.png)"></i></a>

                </div>
            </div>
            <div class="product-catecory d-none d-g-lg-block pt-fix-16 pr-fix-16 pl-fix-16" >
                <ul class="nav justify-content-between row" role="tablist" >
                    <li class="nav-item col-3 p-0 col-md-4 p-md-0" role="presentation">
                        <a  class="pb-fix-8 d-flex justify-content-center active"  data-toggle="tab" href="#news_game" role="tab" aria-selected="true">Tin game</a>
                    </li >
                    <li class="nav-item col-3 p-0 col-md-4 p-md-0" role="presentation">
                        <a  class="pb-fix-8 d-flex justify-content-center"  data-toggle="tab" href="#news_gamble" role="tab" aria-selected="false"> Cá độ</a>
                    </li>
                    <li class="nav-item col-3 p-0 col-md-4 p-md-0" role="presentation">
                        <a  class="pb-fix-8 d-flex justify-content-center" data-toggle="tab" href="#news_soccer" role="tab" aria-selected="false"> Bóng đá</a>
                    </li>
                    <li class="nav-item col-3 p-0 col-md-4 p-md-0" role="presentation">
                        <a  class="pb-fix-8 d-flex justify-content-center" data-toggle="tab" href="#news_soccer" role="tab" aria-selected="false"> Idol</a>
                    </li>
                </ul>
            </div>
            <div class="box-product-content tab-content">
                <div class="box-product tab-pane fade active show" id="news_game" role="tabpanel" >
                    <div class="swiper-container  list-news" >
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" >
                                <a href="/tin-tuc">
                                    <div class="item-product__box-img item-news-img">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/news_image.png" alt="">
                                    </div>
                                    <div class="item-product__box-content item-news-content">


                                        <div class="item-product__box-name">
                                            U23 Việt Nam và giấc mơ vô địch
                                        </div>
                                        <div class="item-product__box-date">
                                            21/01/2022
                                        </div>


                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide" >
                                <a href="/tin-tuc">
                                    <div class="item-product__box-img item-news-img">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/news_image.png" alt="">
                                    </div>
                                    <div class="item-product__box-content item-news-content">


                                        <div class="item-product__box-name">
                                            U23 Việt Nam và giấc mơ vô địch
                                        </div>
                                        <div class="item-product__box-date">
                                            21/01/2022
                                        </div>


                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide" >
                                <a href="/tin-tuc">
                                    <div class="item-product__box-img item-news-img">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/news_image2.png" alt="">
                                    </div>
                                    <div class="item-product__box-content item-news-content">


                                        <div class="item-product__box-name">
                                            U23 Việt Nam và giấc mơ vô địch
                                        </div>
                                        <div class="item-product__box-date">
                                            21/01/2022
                                        </div>


                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide" >
                                <a href="/tin-tuc">
                                    <div class="item-product__box-img item-news-img">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/news_image2.png" alt="">
                                    </div>
                                    <div class="item-product__box-content item-news-content">


                                        <div class="item-product__box-name">
                                            U23 Việt Nam và giấc mơ vô địch
                                        </div>
                                        <div class="item-product__box-date">
                                            21/01/2022
                                        </div>


                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide" >
                                <a href="/tin-tuc">
                                    <div class="item-product__box-img item-news-img">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/news_image.png" alt="">
                                    </div>
                                    <div class="item-product__box-content item-news-content">


                                        <div class="item-product__box-name">
                                            U23 Việt Nam và giấc mơ vô địch
                                        </div>
                                        <div class="item-product__box-date">
                                            21/01/2022
                                        </div>


                                    </div>
                                </a>
                            </div>




                        </div>

                    </div>
                </div>
                <div class="box-product tab-pane fade " id="news_gamble" role="tabpanel" >
                    <div class="swiper-container  list-news" >
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" >
                                <a href="">
                                    <div class="item-product__box-img item-news-img">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/news_image.png" alt="">
                                    </div>
                                    <div class="item-product__box-content item-news-content">


                                        <div class="item-product__box-name">
                                            U23 Việt Nam và giấc mơ vô địch
                                        </div>
                                        <div class="item-product__box-date">
                                            21/01/2022
                                        </div>


                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide" >
                                <a href="">
                                    <div class="item-product__box-img item-news-img">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/news_image.png" alt="">
                                    </div>
                                    <div class="item-product__box-content item-news-content">


                                        <div class="item-product__box-name">
                                            U23 Việt Nam và giấc mơ vô địch
                                        </div>
                                        <div class="item-product__box-date">
                                            21/01/2022
                                        </div>


                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide" >
                                <a href="">
                                    <div class="item-product__box-img item-news-img">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/news_image.png" alt="">
                                    </div>
                                    <div class="item-product__box-content item-news-content">


                                        <div class="item-product__box-name">
                                            U23 Việt Nam và giấc mơ vô địch
                                        </div>
                                        <div class="item-product__box-date">
                                            21/01/2022
                                        </div>


                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide" >
                                <a href="">
                                    <div class="item-product__box-img item-news-img">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/news_image.png" alt="">
                                    </div>
                                    <div class="item-product__box-content item-news-content">


                                        <div class="item-product__box-name">
                                            U23 Việt Nam và giấc mơ vô địch
                                        </div>
                                        <div class="item-product__box-date">
                                            21/01/2022
                                        </div>


                                    </div>
                                </a>
                            </div>



                        </div>
                    </div>
                </div>
                <div class="box-product tab-pane fade " id="news_soccer" role="tabpanel" >
                    <div class="swiper-containe list-news" >
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" >
                                <a href="">
                                    <div class="item-product__box-img item-news-img">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/news_image.png" alt="">
                                    </div>
                                    <div class="item-product__box-content item-news-content">


                                        <div class="item-product__box-name">
                                            U23 Việt Nam và giấc mơ vô địch
                                        </div>
                                        <div class="item-product__box-date">
                                            21/01/2022
                                        </div>


                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide" >
                                <a href="">
                                    <div class="item-product__box-img item-news-img">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/news_image.png" alt="">
                                    </div>
                                    <div class="item-product__box-content item-news-content">


                                        <div class="item-product__box-name">
                                            U23 Việt Nam và giấc mơ vô địch
                                        </div>
                                        <div class="item-product__box-date">
                                            21/01/2022
                                        </div>


                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide" >
                                <a href="">
                                    <div class="item-product__box-img item-news-img">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/news_image.png" alt="">
                                    </div>
                                    <div class="item-product__box-content item-news-content">


                                        <div class="item-product__box-name">
                                            U23 Việt Nam và giấc mơ vô địch
                                        </div>
                                        <div class="item-product__box-date">
                                            21/01/2022
                                        </div>


                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide" >
                                <a href="">
                                    <div class="item-product__box-img item-news-img">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/news_image.png" alt="">
                                    </div>
                                    <div class="item-product__box-content item-news-content">


                                        <div class="item-product__box-name">
                                            U23 Việt Nam và giấc mơ vô địch
                                        </div>
                                        <div class="item-product__box-date">
                                            21/01/2022
                                        </div>


                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide" >
                                <a href="">
                                    <div class="item-product__box-img item-news-img">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/news_image.png" alt="">
                                    </div>
                                    <div class="item-product__box-content item-news-content">


                                        <div class="item-product__box-name">
                                            U23 Việt Nam và giấc mơ vô địch
                                        </div>
                                        <div class="item-product__box-date">
                                            21/01/2022
                                        </div>


                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide" >
                                <a href="">
                                    <div class="item-product__box-img item-news-img">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/news_image.png" alt="">
                                    </div>
                                    <div class="item-product__box-content item-news-content">


                                        <div class="item-product__box-name">
                                            U23 Việt Nam và giấc mơ vô địch
                                        </div>
                                        <div class="item-product__box-date">
                                            21/01/2022
                                        </div>


                                    </div>
                                </a>
                            </div>



                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="block-product mt-fix-20">

            <div class="box-product">
                <div class="swiper-container  list-intro" >
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" >
                            <div class="item-intro-img">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/intro1.png" alt=""></div>
                            <div class="list-intro-title">
                                Sản phẩm, dịch vụ đa dạng, cập nhật thường xuyên
                            </div>
                            <div class="list-intro-content">
                                Hệ thống luôn cung cấp, cập nhật những sản phẩm mới/hot nhất của các dòng game trên thị trường.
                            </div>

                        </div>
                        <div class="swiper-slide" >
                            <div class="item-intro-img">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/intro2.png" alt=""></div>
                            <div class="list-intro-title">
                                Hàng nghìn khách hàng tin tưởng
                            </div>
                            <div class="list-intro-content">
                                Hơn 260.000 giao dịch thành công mỗi ngày. Chúng tôi luôn đặt uy tín, chất lượng dịch vụ lên hàng đầu.
                            </div>

                        </div>
                        <div class="swiper-slide" >
                            <div class="item-intro-img">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/intro3.png" alt=""></div>
                            <div class="list-intro-title">
                                Trung tâm trợ giúp hỗ trợ tư vấn 24/24
                            </div>
                            <div class="list-intro-content">
                                Đội ngũ chăm sóc khách hàng luôn tư vấn và hỗ trợ nhiệt tình khi gặp sự cố trong quá trình trải nghiệm sản phẩm.
                            </div>

                        </div>
                        <div class="swiper-slide" >
                            <div class="item-intro-img">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/intro4.png" alt=""></div>
                            <div class="list-intro-title">
                                Giá cả ưu đãi, siêu rẻ trên thị trường
                            </div>
                            <div class="list-intro-content">
                                Cung cấp những sản phẩm với giá cả tốt nhất cùng với đó là những ưu đãi vô cùng hấp dẫn.
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@include('theme_3.frontend.widget.modal.__charge')
@include('theme_3.frontend.widget.modal.__success_charge')
@include('theme_3.frontend.widget.modal.__reject_charge')
@include('theme_3.frontend.widget.modal.__success_charge_atm')
@include('theme_3.frontend.widget.modal.__success_wallet_card')
@endsection
