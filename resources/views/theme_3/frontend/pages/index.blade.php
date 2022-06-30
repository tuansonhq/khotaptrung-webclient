
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
                    @include('frontend.widget.__list_service')

                </div>
                <div class="box-list-top top-list d-g-lg-none">
                    <p><img src="/assets/frontend/{{theme('')->theme_key}}/image/star_top.png" alt=""> Top nạp thẻ</p>
                    @include('frontend.widget.__top_nap_the')
                </div>
            </div>

        </div>

    </div>
    <div class="container container-fix">
        @include('frontend.widget.__list_serve_remark_mobile')

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

        @include('frontend.widget.__content__home__minigame')

        @include('frontend.widget.__list_serve_remark')
        @include('frontend.widget.__nap_the')

        @include('frontend.widget.__content__home__game')

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

    @include('theme_3.frontend.widget.modal.__charge')
    @include('theme_3.frontend.widget.modal.__success_charge')
    @include('theme_3.frontend.widget.modal.__reject_charge')
    @include('theme_3.frontend.widget.modal.__success_charge_atm')
    @include('theme_3.frontend.widget.modal.__success_wallet_card')
    <script src="/assets/frontend/theme_3/js/charge/charge_home.js?v={{time()}}"></script>

@endsection

