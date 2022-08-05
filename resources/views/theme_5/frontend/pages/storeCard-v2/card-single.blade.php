@extends('frontend.layouts.master')
@section('styles')
    <link rel="stylesheet" href="/assets/frontend/{{env('THEME_VERSION')}}/css/trong/buy-card-v2.css">
@endsection
@section('content')
    <div class="c-container container">
        <!-- head mobile -->
        <div class="head-mobile">
            <a href="/" class="link-back"></a>

            <h1 class="head-title t-sub-2">
                Thẻ Garena 20K
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
                Thẻ Garena 20K
            </p>
            <hr class="c-mx-n16">
        </div>
        <div class="content-wrap c-mt-24">
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
                            <li class="card-item">
                                <a href="mua-the-garena-v2" class="card-item_link">
                                    <div class="card-item_thumb mr-2">
                                        <img src="/assets/frontend/theme_5/image/trong/garena.png" alt="">
                                    </div>
                                    <span class="t-body-1">
                                        Thẻ Garena
                                    </span>
                                </a>
                            </li>
                            <li class="card-item">
                                <a href="mua-the-garena-v2" class="card-item_link">
                                    <div class="card-item_thumb mr-2">
                                        <img src="/assets/frontend/theme_5/image/trong/garena.png" alt="">
                                    </div>
                                    <span class="card-item_name">
                                        Thẻ Gate
                                    </span>
                                </a>
                            </li>
                            <li class="card-item">
                                <a href="mua-the-garena-v2" class="card-item_link">
                                    <div class="card-item_thumb mr-2">
                                        <img src="/assets/frontend/theme_5/image/trong/garena.png" alt="">
                                    </div>
                                    <span class="card-item_name">
                                        Thẻ Zing
                                    </span>
                                </a>
                            </li>
                            <li class="card-item">
                                <a href="mua-the-garena-v2" class="card-item_link">
                                    <div class="card-item_thumb mr-2">
                                        <img src="/assets/frontend/theme_5/image/trong/garena.png" alt="">
                                    </div>
                                    <span class="card-item_name">
                                        Thẻ Vcoin
                                    </span>
                                </a>
                            </li>
                            <li class="card-item">
                                <a href="mua-the-garena-v2" class="card-item_link">
                                    <div class="card-item_thumb mr-2">
                                        <img src="/assets/frontend/theme_5/image/trong/garena.png" alt="">
                                    </div>
                                    <span class="card-item_name">
                                        Thẻ BIT
                                    </span>
                                </a>
                            </li>
                            <li class="card-item">
                                <a href="mua-the-garena-v2" class="card-item_link">
                                    <div class="card-item_thumb mr-2">
                                        <img src="/assets/frontend/theme_5/image/trong/garena.png" alt="">
                                    </div>
                                    <span class="card-item_name">
                                        Thẻ Ongame
                                    </span>
                                </a>
                            </li>
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
                            <li class="card-item">
                                <a href="mua-the-garena-v2" class="card-item_link">
                                    <div class="card-item_thumb mr-2">
                                        <img src="/assets/frontend/theme_5/image/trong/garena.png"
                                             alt="">
                                    </div>
                                    <span class="card-item_name">
                                        Thẻ Viettel
                                    </span>
                                </a>
                            </li>
                            <li class="card-item">
                                <a href="mua-the-garena-v2" class="card-item_link">
                                    <div class="card-item_thumb mr-2">
                                        <img src="/assets/frontend/theme_5/image/trong/garena.png"
                                             alt="">
                                    </div>
                                    <span class="card-item_name">
                                        Thẻ Mobifone
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End nav danh mục -->
            {{--            PAGE CONTENT--}}
            <div class="page--card__content">
                <!-- Các mệnh giá thẻ -->
                <div class="row c-mx-n8">
                    <div class="col-12 col-lg-3 c-px-8 c-mb-16 list-card">
                        <div class="card unset-lg">
                            <div class="card-body c-p-16 c-p-lg-0">
                                <div class="scratch-card c-mb-12 card-single">
                                    <div class="card--thumb">
                                        <img src="/assets/frontend/theme_5/image/trong/garena.png"
                                             class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name t-title-2 deno-card-color">
                                        20.000 VND
                                    </div>
                                </div>
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

                    <!-- Desktop -->
                    <div class="col-12 col-lg-9 c-pl-24 d-none d-lg-block">
                        <div class="t-title-2 c-mb-12">
                            Thẻ Garena là gì ?
                        </div>
                        <span class="t-body-1">
                                Nạp mỗi thẻ  Garena 20.000 đ trong tài khoản Garena của bạn. Bạn có thể sử dụng Xu cho tất cả các game do Garena phát hành.
                            <br>
                            <br>
                                Khách hàng ở Việt Nam có thể sử dụng thẻ ATM nội địa (đã đăng ký Internet banking) hoặc thẻ tín dụng Visa, Master để mua Zing Card
                            <br>
                            <br>
                                Khách hàng ở ngoài nước có thể mua thẻ Zing bằng Paypal, thẻ Visa và MasterCard
                        </span>
                    </div>

                    <!-- Mobile -->
                    <div class="col-12 c-px-0 d-block d-lg-none">
                        <div class="card">
                            <div class="card-body c-p-16">
                                <div class="t-title-2 c-mb-12">
                                    Thẻ Garena là gì ?
                                </div>
                                <span class="t-body-1">
                                Nạp mỗi thẻ  Garena 20.000 đ trong tài khoản Garena của bạn. Bạn có thể sử dụng Xu cho tất cả các game do Garena phát hành.
                            <br>
                            <br>
                                Khách hàng ở Việt Nam có thể sử dụng thẻ ATM nội địa (đã đăng ký Internet banking) hoặc thẻ tín dụng Visa, Master để mua Zing Card
                            <br>
                            <br>
                                Khách hàng ở ngoài nước có thể mua thẻ Zing bằng Paypal, thẻ Visa và MasterCard
                        </span>
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
@endsection
