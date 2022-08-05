@extends('frontend.layouts.master')
@section('styles')
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/trong/buy-card-v2.css">
@endsection
@section('content')
    <div class="c-container container">
        <!-- head mobile -->
        <div class="head-mobile">
            <a href="/" class="link-back"></a>

            <h1 class="head-title t-sub-2">
                Thẻ Garena
            </h1>

            <a href="/" class="home"></a>
        </div>
        <!-- breadcrum -->
        <ul class="breadcrumb-list">
            <li class="breadcrumb-item">
                <a href="/" class="breadcrumb-link">Trang chủ</a>
            </li>
            <li class="breadcrumb-item">
                <a href="/mua-the" class="breadcrumb-link">Mua thẻ</a>
            </li>
        </ul>
        <!-- end breadcrum -->
        <!-- Banner -->
    @include('frontend.widget.__slider__banner')
    <!-- End -->
        <div class="c-mt-32 d-block d-lg-none">
            <p class="t-title-1 c-mb-0 c-pb-8">
                Thẻ Garena
            </p>
            <hr class="c-mx-n16">
        </div>
        <div class="content-wrap c-mt-24 c-mt-lg-0">
            <!-- Nav danh mục -->
            <div class="nav-buy-card d-none d-lg-block">
                <div class="card">
                    <div class="c-px-16 c-py-12">
                        <div class="t-title-1 title-color">Danh mục thẻ</div>
                    </div>
                    <div class="card-body c-p-0">
                        <a class="section--card p-lg-3" data-toggle="collapse" href="#card--game__nav" role="button" aria-expanded="true">
                            <span class="t-sub-1">
                                THẺ GAME
                            </span>
                            <span class="d-flex align-items-center">
                                <i class="icon-default size-20" style="--path : url(/assets/frontend/theme_5/image/svg/arrow-down.svg)"></i>
                            </span>
                        </a>
                        <ul class="collapse card-list show" id="card--game__nav">
                            <!-- JS PASTE HTML HERE -->
                        </ul>

                        <a class="section--card p-lg-3" data-toggle="collapse" href="#card--phone__nav" role="button" aria-expanded="true">
                            <span class="t-sub-1">
                                THẺ ĐIỆN THOẠI
                            </span>
                            <span class="d-flex align-items-center">
                                <i class="icon-default size-20" style="--path : url(/assets/frontend/theme_5/image/svg/arrow-down.svg)"></i>
                            </span>
                        </a>
                        <ul class="collapse card-list show" id="card--phone__nav">
                            <!-- JS PASTE HTML HERE -->
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End nav danh mục -->
            {{--            PAGE CONTENT--}}
            <div class="page--card__content">
                <!-- Các mệnh giá thẻ -->
                <div class="c-py-12 d-none d-lg-block">
                    <h2 class="t-title-2 title-color">
                        Thẻ Garena
                    </h2>
                </div>
                <div class="row c-mx-n8 list-card d-none d-lg-flex" id="wrap-desktop">
                    <div class="col-lg-3 c-px-8 c-mb-16">
                        <div class="card">
                            <div class="card-body c-p-16">
                                <a href="/mua-the-garena-10k-v2" class="scratch-card c-mb-12">
                                    <div class="card--thumb">
                                        <img src="/assets/frontend/theme_5/image/trong/garena.png"
                                             class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name t-title-2 deno-card-color">
                                        20.000 VND
                                    </div>
                                </a>
                                <span class="t-sub-2">
                                    Thẻ Garena 50K
                                </span>
                                <div class="t-body-1 link-color">
                                    Đơn giá: 20.000 đ
                                </div>
                                <div class="d-flex justify-content-between align-items-center c-mt-12">
                                    <span class="t-body-2">
                                        Số lượng
                                    </span>
                                    <div class="js-quantity sm">
                                        <div class="js-quantity-minus"></div>
                                        <input type="text" class="js-quantity-input" value="1">
                                        <div class="js-quantity-add"></div>
                                    </div>
                                </div>
                                <div class="group-btn c-mt-16">
                                    <a href="" class="btn secondary">
                                        Chọn mua
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-block d-lg-none">
                    <div class="swiper swiper-card c-my-16">
                        <div class="swiper-wrapper" id="wrap-mobile">
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card-body c-p-16">
                                        <a href="/mua-the-garena-10k-v2" class="scratch-card c-mb-12">
                                            <div class="card--thumb">
                                                <img src="/assets/frontend/theme_5/image/trong/garena.png"
                                                     class="card--thumb__image py-1 py-lg-0" alt="">
                                            </div>
                                            <div class="card--name t-title-2 deno-card-color">
                                                20.000 VND
                                            </div>
                                        </a>
                                        <span class="t-sub-2">
                                    Thẻ Garena 50K
                                </span>
                                        <div class="t-body-1 link-color">
                                            Đơn giá: 20.000 đ
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center c-mt-12">
                                    <span class="t-body-2">
                                        Số lượng
                                    </span>
                                            <div class="js-quantity sm">
                                                <div class="js-quantity-minus"></div>
                                                <input type="text" class="js-quantity-input" value="1">
                                                <div class="js-quantity-add"></div>
                                            </div>
                                        </div>
                                        <div class="group-btn c-mt-16">
                                            <a href="" class="btn secondary">
                                                Chọn mua
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card-body c-p-16">
                                        <a href="/mua-the-garena-10k-v2" class="scratch-card c-mb-12">
                                            <div class="card--thumb">
                                                <img src="/assets/frontend/theme_5/image/trong/garena.png"
                                                     class="card--thumb__image py-1 py-lg-0" alt="">
                                            </div>
                                            <div class="card--name t-title-2 deno-card-color">
                                                20.000 VND
                                            </div>
                                        </a>
                                        <span class="t-sub-2">
                                    Thẻ Garena 50K
                                </span>
                                        <div class="t-body-1 link-color">
                                            Đơn giá: 20.000 đ
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center c-mt-12">
                                    <span class="t-body-2">
                                        Số lượng
                                    </span>
                                            <div class="js-quantity sm">
                                                <div class="js-quantity-minus"></div>
                                                <input type="text" class="js-quantity-input" value="1">
                                                <div class="js-quantity-add"></div>
                                            </div>
                                        </div>
                                        <div class="group-btn c-mt-16">
                                            <a href="" class="btn secondary">
                                                Chọn mua
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card-body c-p-16">
                                        <a href="/mua-the-garena-10k-v2" class="scratch-card c-mb-12">
                                            <div class="card--thumb">
                                                <img src="/assets/frontend/theme_5/image/trong/garena.png"
                                                     class="card--thumb__image py-1 py-lg-0" alt="">
                                            </div>
                                            <div class="card--name t-title-2 deno-card-color">
                                                20.000 VND
                                            </div>
                                        </a>
                                        <span class="t-sub-2">
                                    Thẻ Garena 50K
                                </span>
                                        <div class="t-body-1 link-color">
                                            Đơn giá: 20.000 đ
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center c-mt-12">
                                    <span class="t-body-2">
                                        Số lượng
                                    </span>
                                            <div class="js-quantity sm">
                                                <div class="js-quantity-minus"></div>
                                                <input type="text" class="js-quantity-input" value="1">
                                                <div class="js-quantity-add"></div>
                                            </div>
                                        </div>
                                        <div class="group-btn c-mt-16">
                                            <a href="" class="btn secondary">
                                                Chọn mua
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card-body c-p-16">
                                        <a href="/mua-the-garena-10k-v2" class="scratch-card c-mb-12">
                                            <div class="card--thumb">
                                                <img src="/assets/frontend/theme_5/image/trong/garena.png"
                                                     class="card--thumb__image py-1 py-lg-0" alt="">
                                            </div>
                                            <div class="card--name t-title-2 deno-card-color">
                                                20.000 VND
                                            </div>
                                        </a>
                                        <span class="t-sub-2">
                                    Thẻ Garena 50K
                                </span>
                                        <div class="t-body-1 link-color">
                                            Đơn giá: 20.000 đ
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center c-mt-12">
                                    <span class="t-body-2">
                                        Số lượng
                                    </span>
                                            <div class="js-quantity sm">
                                                <div class="js-quantity-minus"></div>
                                                <input type="text" class="js-quantity-input" value="1">
                                                <div class="js-quantity-add"></div>
                                            </div>
                                        </div>
                                        <div class="group-btn c-mt-16">
                                            <a href="" class="btn secondary">
                                                Chọn mua
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card-body c-p-16">
                                        <a href="/mua-the-garena-10k-v2" class="scratch-card c-mb-12">
                                            <div class="card--thumb">
                                                <img src="/assets/frontend/theme_5/image/trong/garena.png"
                                                     class="card--thumb__image py-1 py-lg-0" alt="">
                                            </div>
                                            <div class="card--name t-title-2 deno-card-color">
                                                20.000 VND
                                            </div>
                                        </a>
                                        <span class="t-sub-2">
                                    Thẻ Garena 50K
                                </span>
                                        <div class="t-body-1 link-color">
                                            Đơn giá: 20.000 đ
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center c-mt-12">
                                    <span class="t-body-2">
                                        Số lượng
                                    </span>
                                            <div class="js-quantity sm">
                                                <div class="js-quantity-minus"></div>
                                                <input type="text" class="js-quantity-input" value="1">
                                                <div class="js-quantity-add"></div>
                                            </div>
                                        </div>
                                        <div class="group-btn c-mt-16">
                                            <a href="" class="btn secondary">
                                                Chọn mua
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card card-other c-mb-16 unset-lg">
                    <div class="card-body c-px-16 c-px-lg-0 c-py-0">
                        <h2 class="t-title-2 c-py-12">
                            Các loại thẻ khác
                        </h2>
                        <hr>
                        <div class="swiper swiper-card c-my-12">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="mua-the-garena-v2" class="scratch-card">
                                        <div class="card--thumb">
                                            <img src="/assets/frontend/theme_5/image/trong/garena.png" class="card--thumb__image py-1 py-lg-0" alt="">
                                        </div>
                                        <div class="card--name t-sub-2">
                                            Thẻ Garena
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="mua-the-garena-v2" class="scratch-card">
                                        <div class="card--thumb">
                                            <img src="/assets/frontend/theme_5/image/trong/garena.png" class="card--thumb__image py-1 py-lg-0" alt="">
                                        </div>
                                        <div class="card--name t-sub-2">
                                            Thẻ Garena
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="mua-the-garena-v2" class="scratch-card">
                                        <div class="card--thumb">
                                            <img src="/assets/frontend/theme_5/image/trong/garena.png" class="card--thumb__image py-1 py-lg-0" alt="">
                                        </div>
                                        <div class="card--name t-sub-2">
                                            Thẻ Garena
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="mua-the-garena-v2" class="scratch-card">
                                        <div class="card--thumb">
                                            <img src="/assets/frontend/theme_5/image/trong/garena.png" class="card--thumb__image py-1 py-lg-0" alt="">
                                        </div>
                                        <div class="card--name t-sub-2">
                                            Thẻ Garena
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="navigation slider-prev"></div>
                        <div class="navigation slider-next"></div>
                    </div>
                </div>
        </div>
    </div>
        <input type="hidden" value="amount" data-key="{{ @$key }}" id="is_view">
        @endsection
@section('scripts')
            <script src="/assets/frontend/{{theme('')->theme_key}}/js/store-card-v2/main.js"></script>
@endsection
