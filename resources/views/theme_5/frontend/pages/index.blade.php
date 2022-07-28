@extends('frontend.layouts.master')
@section('styles')
    <link rel="stylesheet" href="/assets/{{theme('')->theme_key}}/css/lib_bootstrap.css">
    <link rel="stylesheet" href="/assets/{{theme('')->theme_key}}/css/minigame.css">
@endsection
@section('content')

@include('frontend.widget.__slider__banner')

    <div class="container container-fix">
        <div class="block-product mt-fix-20 d-none d-g-md-block">
            <div class="product-header d-flex">

                <p class="text-title" >Dịch vụ nổi bật</p>
                <div class="navbar-spacer"></div>

                <div class="text-view-more">

                    <a href="/dich-vu" class="global__link">Xem thêm<i class="__icon --sm --link ml-1" style="--path : url(/assets/theme_5/image/icons/arrow-right-blue.png)"></i></a>

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
                    <a href="/mua-acc" class="global__link">Xem thêm<i class="__icon --sm --link ml-1" style="--path : url(/assets/theme_5/image/icons/arrow-right-blue.png)"></i></a>
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
                                    Xem thêm <img src="/assets/theme_5/image/icons/arrow-down.png" alt="">
                                </div>
                                <div class="view-less-top ">
                                    Rút gọn <img src="/assets/theme_5/image/icons/iconright.png" alt="">
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="block-mini-game mt-fix-20">
            <div class="row">
                <div class="col-lg-12 col-md-12 " >
                    <div class=" block-product ">
                        <div class="product-header d-flex">
                        <span>
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/minigame_title.png" alt="">
                        </span>
                            <p class="text-title" >Vòng quay may mắn</p>
                            <div class="navbar-spacer"></div>

                            <div class="text-view-more">
                                <a href="/minigame" class="global__link">Xem thêm<i class="__icon --sm --link ml-1" style="--path : url(/assets/theme_5/image/icons/arrow-right-blue.png)"></i></a>
                            </div>
                        </div>
                        <div class="box-product " >
                            <div class="row  list-minigame" >

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

    @include('frontend.widget.__content__home__game')

        <div class=" block-product mt-fix-20">
            <div class="product-header d-flex">
                    <span>
                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/flash_sales.png" alt="">
                    </span>
                <p class="text-title">Danh mục xu khóa</p>
                <div class="product-catecory" ></div>
                <div class="text-view-more">
                    <a href="/mua-acc" class="global__link">Xem thêm<i class="__icon --sm --link ml-1" style="--path : url(/assets/theme_5/image/icons/arrow-right-blue.png)"></i></a>
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
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product/xu_khoa_1.png" alt="">
                                    </div>
                                    <div class="item-product__box-content">
                                        <div class="item-product__box-name">
                                            Vòng quay tiệc bể bơi
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
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product/xu_khoa_2.png" alt="">
                                    </div>
                                    <div class="item-product__box-content">
                                        <div class="item-product__box-name">
                                            Đi tìm ve sầu
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
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product/xu_khoa_3.png" alt="">
                                    </div>
                                    <div class="item-product__box-content">
                                        <div class="item-product__box-name">
                                            Cánh diều tuổi thơ
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
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product/xu_khoa_4.png" alt="">
                                    </div>
                                    <div class="item-product__box-content">
                                        <div class="item-product__box-name">
                                            Vòng quay mùa hè mát...
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
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product/xu_khoa_1.png" alt="">
                                    </div>
                                    <div class="item-product__box-content">
                                        <div class="item-product__box-name">
                                            Vòng quay tiệc bể bơi
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
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product/xu_khoa_2.png" alt="">
                                    </div>
                                    <div class="item-product__box-content">
                                        <div class="item-product__box-name">
                                            Đi tìm ve sầu
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
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product/xu_khoa_1.png" alt="">
                                    </div>
                                    <div class="item-product__box-content">
                                        <div class="item-product__box-name">
                                            Vòng quay tiệc bể bơi
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
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product/xu_khoa_2" alt="">
                                    </div>
                                    <div class="item-product__box-content">
                                        <div class="item-product__box-name">
                                            Đi tìm ve sầu
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
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product/xu_khoa_2.png" alt="">
                                    </div>
                                    <div class="item-product__box-content">
                                        <div class="item-product__box-name">
                                            Cánh diều tuổi thơ
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
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product/xu_khoa_4.png" alt="">
                                    </div>
                                    <div class="item-product__box-content">
                                        <div class="item-product__box-name">
                                            Vòng quay mùa hè mát...
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

                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product/xu_khoa_1.png" alt="">

                                    </div>
                                    <div class="item-product__box-content">
                                        <div class="item-product__box-name">
                                            Vòng quay tiệc bể bơi
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
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product/xu_khoa_1.png" alt="">
                                    </div>
                                    <div class="item-product__box-content">
                                        <div class="item-product__box-name">
                                            Vòng quay tiệc bể bơi
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
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product/xu_khoa_2" alt="">
                                    </div>
                                    <div class="item-product__box-content">
                                        <div class="item-product__box-name">
                                            Đi tìm ve sầu
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
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product/xu_khoa_3.png" alt="">
                                    </div>
                                    <div class="item-product__box-content">
                                        <div class="item-product__box-name">
                                            Cánh diều tuổi thơ
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
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product/xu_khoa_4.png" alt="">
                                    </div>
                                    <div class="item-product__box-content">
                                        <div class="item-product__box-name">
                                            Vòng quay mùa hè mát...
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
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product/xu_khoa_1.png" alt="">
                                    </div>
                                    <div class="item-product__box-content">
                                        <div class="item-product__box-name">
                                            Vòng quay tiệc bể bơi
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
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product/xu_khoa_2.png" alt="">
                                    </div>
                                    <div class="item-product__box-content">
                                        <div class="item-product__box-name">
                                            Đi tìm ve sầu
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

   @include('frontend.widget.__dichvu__lienquan')

        @include('frontend.widget.__tin__tuc')

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

    @include('theme_5.frontend.widget.modal.__charge')
    @include('theme_5.frontend.widget.modal.__success_charge')
    @include('theme_5.frontend.widget.modal.__reject_charge')
    @include('theme_5.frontend.widget.modal.__success_charge_atm')
    @include('theme_5.frontend.widget.modal.__success_wallet_card')
@endsection
