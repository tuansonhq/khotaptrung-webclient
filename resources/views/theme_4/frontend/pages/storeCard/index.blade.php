@extends('frontend.layouts.master')
@section('styles')
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/trong-style/distance.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/trong-style/buy-card.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/style_trong.css">
@endsection
@section('scripts')
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/js_trong/buy-card.js"></script>
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/js_trong/script_trong.js"></script>
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/js_trong/input.js"></script>
@endsection
@section('content')
    <div class="container-fix container" id="buy-card">
        <input type="hidden" value="{{ request()->route()->getName() }}" id="isRequest">
        {{--        BANNER --}}
        <div class="poster__banner _mt-125 _mt-sm-0">
            <div class="swiper js--swiper__banner mb-n4">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="" class="banner__link">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/buy-card/Rectangle 4.png" class="banner__image" alt="POSTER BANNER">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="" class="banner__link">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/buy-card/Rectangle 4.png" class="banner__image" alt="POSTER BANNER">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="" class="banner__link">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/buy-card/Rectangle 4.png" class="banner__image" alt="POSTER BANNER">
                        </a>
                    </div>
                </div>
                <div class="swiper-pagination --custom"></div>
            </div>
        </div>
        {{--        END BANNER--}}
        {{--breadcrum--}}
        <ul class="breadcrum--list">
            <li class="breadcrum--item">
                <a href="/" class="breadcrum--link">Trang chủ</a>
            </li>
            <li class="breadcrum--item">
                <a href="/mua-the" class="breadcrum--link">Mua thẻ</a>
            </li>
        </ul>
        {{-- end breadcrum--}}
        <div class="row mx-0">
            {{--            NAV CATEGORY--}}
            <div class="col-lg-3 d-none d-lg-block pl-0 _pr-125">
                <div class="card --custom card__nav">
                    <div class="card--head _py-075 pl-3">
                        <div class="card--title">Danh mục thẻ</div>
                    </div>
                    <div class="card--body">
                        <a class="section--card p-lg-3" data-toggle="collapse" href="#card--game__nav" role="button"
                           aria-expanded="true">
                            <span class="section--card__title">
                                THẺ GAME
                            </span>
                            <span class="d-flex align-items-center">
                                <i class="__icon --arrow --path__custom" style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/icons/arrows/arrow-down.png)"></i>
                            </span>
                        </a>
                        <ul class="collapse card-list show" id="card--game__nav">
                            {{-- CARD LINK HERE--}}
                        </ul>

                        <a class="section--card p-lg-3" data-toggle="collapse" href="#card--phone__nav" role="button"
                           aria-expanded="true">
                            <span class="section--card__title">
                                THẺ ĐIỆN THOẠI
                            </span>
                            <span class="d-flex align-items-center">
                                <i class="__icon --arrow --path__custom"
                                   style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/icons/arrows/arrow-down.png)"></i>
                            </span>
                        </a>
                        <ul class="collapse card-list show" id="card--phone__nav">
                            {{-- CARD LINK HERE--}}
                        </ul>
                    </div>
                </div>
            </div>
            {{--            END NAV CATEGORY--}}

{{--            PAGE TITLE MOBILE--}}
            <div class="card --custom col-12 d-block d-lg-none">
                <div class="page--mobile__title">
                    Danh mục thẻ
                </div>
            </div>
{{--            END PAGE TITLE MOBILE--}}

            {{--            PAGE CONTENT--}}
            <div class="col-12 col-lg-9 p-0 page--card__content">
                {{--            CARD GAME --}}
                <div class="card --custom _mb-125 _mb-sm-075 px-3 px-lg-0" id="card-game">
                    <div class="card--head px-lg-3 _py-075">
                        <div class="card--title">
                            Thẻ Game
                        </div>
                    </div>
                    <div class="card--body p-lg-2">
                        <div class="row mx-lg-0 _px-sm-075 _pb-sm-075" id="grid--game__card">
                                {{-- SHOW CARD HERE--}}
                            <div class="loader position-relative">
                                <div class="loading-spokes">
                                    <div class="spoke-container">
                                        <div class="spoke"></div>
                                    </div>
                                    <div class="spoke-container">
                                        <div class="spoke"></div>
                                    </div>
                                    <div class="spoke-container">
                                        <div class="spoke"></div>
                                    </div>
                                    <div class="spoke-container">
                                        <div class="spoke"></div>
                                    </div>
                                    <div class="spoke-container">
                                        <div class="spoke"></div>
                                    </div>
                                    <div class="spoke-container">
                                        <div class="spoke"></div>
                                    </div>
                                    <div class="spoke-container">
                                        <div class="spoke"></div>
                                    </div>
                                    <div class="spoke-container">
                                        <div class="spoke"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--            END CARD GAME--}}

                {{--            CARD PHONE--}}
                <div class="card --custom _mb-125 _mb-sm-075 px-3 px-lg-0" id="card-phone">
                    <div class="card--head px-lg-3 _py-075">
                        <div class="card--title">
                            Thẻ Điện Thoại
                        </div>
                    </div>
                    <div class="card--body p-lg-2">
                        <div class="row mx-lg-0 _px-sm-075 _pb-sm-075"  id="grid--phone__card">
                            {{-- SHOW CARD HERE--}}
                            <div class="loader position-relative">
                                <div class="loading-spokes">
                                    <div class="spoke-container">
                                        <div class="spoke"></div>
                                    </div>
                                    <div class="spoke-container">
                                        <div class="spoke"></div>
                                    </div>
                                    <div class="spoke-container">
                                        <div class="spoke"></div>
                                    </div>
                                    <div class="spoke-container">
                                        <div class="spoke"></div>
                                    </div>
                                    <div class="spoke-container">
                                        <div class="spoke"></div>
                                    </div>
                                    <div class="spoke-container">
                                        <div class="spoke"></div>
                                    </div>
                                    <div class="spoke-container">
                                        <div class="spoke"></div>
                                    </div>
                                    <div class="spoke-container">
                                        <div class="spoke"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--            END CARD PHONE--}}

                {{--            SERVICE RELATED--}}
                <div class="card --custom _mb-125 _mb-sm-075 p-3 p-lg-0" id="service-related">
                    <div class="card--header _m-125 _m-sm-0 _pb-125">
                        <div class="card--header__title">
                            <img width="24" height="24" src="/assets/frontend/{{theme('')->theme_key}}/image/icons/icon-title-service-related-buy-card.png"
                                 class="mr-2 d-block d-lg-none" alt="icon">
                            <h4>Các dịch vụ liên quan</h4>
                        </div>
                        <div class="card--header__tools">
                            <a href="/tin-tuc/slug" class="global__link">Xem thêm<i class="__icon --sm --link ml-1"
                                                                                    style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/icons/arrow-right-blue.png)"></i></a>
                        </div>
                    </div>
                    <div class="card--body px-lg-3">
                        <div class="swiper js-swipe-service overflow-hidden mb-lg-3">
                            <div class="swiper-wrapper service--wrap">
                                <div class="swiper-slide service--item">
                                    <div class="service--thumb">
                                        <a href="">
                                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/mua-the/frame-6105.png"
                                                 class="service--thumb__image" alt="">
                                        </a>
                                    </div>
                                    <a href="" class="service--name p-lg-2 mt-3 mt-lg-2">
                                        Vòng quay may mắn
                                    </a>
                                </div>
                                <div class="swiper-slide service--item">
                                    <div class="service--thumb">
                                        <a href="">
                                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/mua-the/frame-6105.png"
                                                 class="service--thumb__image" alt="">
                                        </a>
                                    </div>
                                    <a href="" class="service--name p-lg-2 mt-lg-2">
                                        Vòng quay may mắn
                                    </a>
                                </div>
                                <div class="swiper-slide service--item">
                                    <div class="service--thumb">
                                        <a href="">
                                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/mua-the/frame-6105.png"
                                                 class="service--thumb__image" alt="">
                                        </a>
                                    </div>
                                    <a href="" class="service--name p-lg-2 mt-lg-2">
                                        Vòng quay may mắn
                                    </a>
                                </div>
                                <div class="swiper-slide service--item">
                                    <div class="service--thumb">
                                        <a href="">
                                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/mua-the/frame-6105.png"
                                                 class="service--thumb__image" alt="">
                                        </a>
                                    </div>
                                    <a href="" class="service--name p-lg-2 mt-lg-2">
                                        Vòng quay may mắn
                                    </a>
                                </div>
                                <div class="swiper-slide service--item">
                                    <div class="service--thumb">
                                        <a href="">
                                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/mua-the/frame-6105.png"
                                                 class="service--thumb__image" alt="">
                                        </a>
                                    </div>
                                    <a href="" class="service--name p-lg-2 mt-lg-2">
                                        Vòng quay may mắn
                                    </a>
                                </div>
                                <div class="swiper-slide service--item">
                                    <div class="service--thumb">
                                        <a href="">
                                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/mua-the/frame-6105.png"
                                                 class="service--thumb__image" alt="">
                                        </a>
                                    </div>
                                    <a href="" class="service--name p-lg-2 mt-lg-2">
                                        Vòng quay may mắn
                                    </a>
                                </div>
                                <div class="swiper-slide service--item">
                                    <div class="service--thumb">
                                        <a href="">
                                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/mua-the/frame-6105.png"
                                                 class="service--thumb__image" alt="">
                                        </a>
                                    </div>
                                    <a href="" class="service--name p-lg-2 mt-lg-2">
                                        Vòng quay may mắn
                                    </a>
                                </div>
                                <div class="swiper-slide service--item">
                                    <div class="service--thumb">
                                        <a href="">
                                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/mua-the/frame-6105.png"
                                                 class="service--thumb__image" alt="">
                                        </a>
                                    </div>
                                    <a href="" class="service--name p-lg-2 mt-lg-2">
                                        Vòng quay may mắn
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--            END SERVICE RELATED--}}

                {{--                SERVICE DESC--}}
                <div class="card --custom p-3 p-lg-3">
                    <div class="card--desc__title mb-4">
                        Mô tả dịch vụ
                    </div>
                    <div class="card--desc__content content-video-in-add p-0">
                        {!! setting('sys_store_card_content') !!}
                    </div>
                    <div class="col-md-12 left-right text-center js-toggle-content">
                        <div class="view-more">
                            <span class="global__link">Xem thêm<i class="__icon --sm --link ml-1" style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/icons/arrow-down.png)"></i></span>
                        </div>
                        <div class="view-less" style="display: none;">
                            <span class="global__link">Thu gọn<i class="__icon --sm --link ml-1" style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/icons/iconright.png)"></i></span>
                        </div>
                    </div>
                </div>
                {{--                END SERVICE DESC--}}

            </div>
            {{--            END PAGE CONTENT--}}
        </div>
    </div>
@endsection
