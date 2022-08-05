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
                Mua thẻ
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
                Danh mục thẻ
            </p>
            <hr class="c-mx-n16">
        </div>
        <ul class="nav nav-tabs size-auto c-mx-n16 d-table d-lg-none vw-100" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="tab active" data-toggle="tab" href="#tab-card-game" role="tab" aria-selected="false">Thẻ game</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="tab" data-toggle="tab" href="#tab-card-phone" role="tab" aria-selected="true">Thẻ điện thoại</a>
            </li>
        </ul>
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
            <div class="page--card__content c-ml-16 c-ml-lg-0">
                {{--            CARD GAME --}}
                <div class="card c-mb-16 d-none d-lg-block" id="card-game">
                    <div class="card--head c-px-16 c-py-12">
                        <div class="t-title-2">
                            Thẻ Game
                        </div>
                    </div>
                    <div class="c-px-16">
                        <hr>
                    </div>
                    <div class="card-body c-px-16 c-pt-16 c-pb-0">
                        <div class="row c-mx-n8">
                            <div class="col-6 col-lg-3 c-px-8 c-mb-16">
                                <a href="mua-the-garena-v2" class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/frontend/theme_5/image/trong/garena.png"
                                             class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name t-sub-2" style="--bg-color: #CC2829;">
                                        Thẻ Garena
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-lg-3 c-px-8 c-mb-16">
                                <a href="mua-the-garena-v2"  class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/frontend/theme_5/image/trong/garena.png"
                                             class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name t-sub-2" style="--bg-color: #E02729;">
                                        Thẻ Gate
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-lg-3 c-px-8 c-mb-16">
                                <a href="mua-the-garena-v2" class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/frontend/theme_5/image/trong/garena.png"
                                             class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name t-sub-2" style="--bg-color: #009DDC;">
                                        Thẻ Zing
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-lg-3 c-px-8 c-mb-16">
                                <a href="mua-the-garena-v2" class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/frontend/theme_5/image/trong/garena.png"
                                             class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name t-sub-2" style="--bg-color: #009DDC;">
                                        Thẻ Zing
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-lg-3 c-px-8 c-mb-16">
                                <a href="mua-the-garena-v2" class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/frontend/theme_5/image/trong/garena.png"
                                             class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name t-sub-2" style="--bg-color: #009DDC;">
                                        Thẻ Zing
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-lg-3 c-px-8 c-mb-16">
                                <a href="mua-the-garena-v2" class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/frontend/theme_5/image/trong/garena.png"
                                             class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name t-sub-2" style="--bg-color: #009DDC;">
                                        Thẻ Zing
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-lg-3 c-px-8 c-mb-16">
                                <a href="mua-the-garena-v2" class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/frontend/theme_5/image/trong/garena.png"
                                             class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name t-sub-2" style="--bg-color: #009DDC;">
                                        Thẻ Zing
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-lg-3 c-px-8 c-mb-16">
                                <a href="mua-the-garena-v2" class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/frontend/theme_5/image/trong/garena.png"
                                             class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name t-sub-2" style="--bg-color: #009DDC;">
                                        Thẻ Zing
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                {{--            END CARD GAME--}}

            <!-- Thẻ điẹn thoại -->
                <div class="card c-mb-16 d-none d-lg-block" id="card-phone">
                    <div class="card--head c-px-16 c-py-12">
                        <div class="t-title-2">
                            Thẻ điện thoại
                        </div>
                    </div>
                    <div class="c-px-16">
                        <hr>
                    </div>
                    <div class="card-body c-px-16 c-pt-16 c-pb-0">
                        <div class="row c-mx-n8">
                            <div class="col-6 col-lg-3 c-px-8 c-mb-16">
                                <a href="mua-the-garena-v2" class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/frontend/theme_5/image/trong/garena.png"
                                             class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name t-sub-2" style="--bg-color: #CC2829;">
                                        Thẻ Garena
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-lg-3 c-px-8 c-mb-16">
                                <a href="mua-the-garena-v2"  class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/frontend/theme_5/image/trong/garena.png"
                                             class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name t-sub-2" style="--bg-color: #E02729;">
                                        Thẻ Gate
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-lg-3 c-px-8 c-mb-16">
                                <a href="mua-the-garena-v2" class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/frontend/theme_5/image/trong/garena.png"
                                             class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name t-sub-2" style="--bg-color: #009DDC;">
                                        Thẻ Zing
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-lg-3 c-px-8 c-mb-16">
                                <a href="mua-the-garena-v2" class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/frontend/theme_5/image/trong/garena.png"
                                             class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name t-sub-2" style="--bg-color: #009DDC;">
                                        Thẻ Zing
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-lg-3 c-px-8 c-mb-16">
                                <a href="mua-the-garena-v2" class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/frontend/theme_5/image/trong/garena.png"
                                             class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name t-sub-2" style="--bg-color: #009DDC;">
                                        Thẻ Zing
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-lg-3 c-px-8 c-mb-16">
                                <a href="mua-the-garena-v2" class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/frontend/theme_5/image/trong/garena.png"
                                             class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name t-sub-2" style="--bg-color: #009DDC;">
                                        Thẻ Zing
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-lg-3 c-px-8 c-mb-16">
                                <a href="mua-the-garena-v2" class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/frontend/theme_5/image/trong/garena.png"
                                             class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name t-sub-2">
                                        Thẻ Zing
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-lg-3 c-px-8 c-mb-16">
                                <a href="mua-the-garena-v2" class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/frontend/theme_5/image/trong/garena.png"
                                             class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name t-sub-2" style="--bg-color: #009DDC;">
                                        Thẻ Zing
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-content d-block d-lg-none">
                    <div class="tab-pane fade active show" id="tab-card-game" role="tabpanel">
                        <div class="row c-mx-lg-n6">
                            <div class="col-6 c-px-lg-6 c-mb-lg-12">
                                <a href="mua-the-garena-v2" class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/frontend/theme_5/image/trong/garena.png"
                                             class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name t-sub-2" style="--bg-color: #CC2829;">
                                        Thẻ Garena
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 c-px-lg-6 c-mb-lg-12">
                                <a href="mua-the-garena-v2" class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/frontend/theme_5/image/trong/garena.png"
                                             class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name t-sub-2" style="--bg-color: #CC2829;">
                                        Thẻ Garena
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 c-px-lg-6 c-mb-lg-12">
                                <a href="mua-the-garena-v2" class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/frontend/theme_5/image/trong/garena.png"
                                             class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name t-sub-2" style="--bg-color: #CC2829;">
                                        Thẻ Garena
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 c-px-lg-6 c-mb-lg-12">
                                <a href="mua-the-garena-v2" class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/frontend/theme_5/image/trong/garena.png"
                                             class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name t-sub-2" style="--bg-color: #CC2829;">
                                        Thẻ Garena
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 c-px-lg-6 c-mb-lg-12">
                                <a href="mua-the-garena-v2" class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/frontend/theme_5/image/trong/garena.png"
                                             class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name t-sub-2" style="--bg-color: #CC2829;">
                                        Thẻ Garena
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 c-px-lg-6 c-mb-lg-12">
                                <a href="mua-the-garena-v2" class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/frontend/theme_5/image/trong/garena.png"
                                             class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name t-sub-2" style="--bg-color: #CC2829;">
                                        Thẻ Garena
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 c-px-lg-6 c-mb-lg-12">
                                <a href="mua-the-garena-v2" class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/frontend/theme_5/image/trong/garena.png"
                                             class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name t-sub-2" style="--bg-color: #CC2829;">
                                        Thẻ Garena
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-card-phone" role="tabpanel">
                        <div class="row c-mx-lg-n6">
                            <div class="col-6 c-px-lg-6 c-mb-lg-12">
                                <a href="mua-the-garena-v2" class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/frontend/theme_5/image/trong/garena.png"
                                             class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name t-sub-2" style="--bg-color: #CC2829;">
                                        Thẻ Garena
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 c-px-lg-6 c-mb-lg-12">
                                <a href="mua-the-garena-v2" class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/frontend/theme_5/image/trong/garena.png"
                                             class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name t-sub-2" style="--bg-color: #CC2829;">
                                        Thẻ Garena
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 c-px-lg-6 c-mb-lg-12">
                                <a href="mua-the-garena-v2" class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/frontend/theme_5/image/trong/garena.png"
                                             class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name t-sub-2" style="--bg-color: #CC2829;">
                                        Thẻ Garena
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 c-px-lg-6 c-mb-lg-12">
                                <a href="mua-the-garena-v2" class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/frontend/theme_5/image/trong/garena.png"
                                             class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name t-sub-2" style="--bg-color: #CC2829;">
                                        Thẻ Garena
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 c-px-lg-6 c-mb-lg-12">
                                <a href="mua-the-garena-v2" class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/frontend/theme_5/image/trong/garena.png"
                                             class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name t-sub-2" style="--bg-color: #CC2829;">
                                        Thẻ Garena
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 c-px-lg-6 c-mb-lg-12">
                                <a href="mua-the-garena-v2" class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/frontend/theme_5/image/trong/garena.png"
                                             class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name t-sub-2" style="--bg-color: #CC2829;">
                                        Thẻ Garena
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 c-px-lg-6 c-mb-lg-12">
                                <a href="mua-the-garena-v2" class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/frontend/theme_5/image/trong/garena.png"
                                             class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name t-sub-2" style="--bg-color: #CC2829;">
                                        Thẻ Garena
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Dịch vụ liên quan -->
            @include('frontend.widget.__services__other')
                <!-- Mô tả dịch vụ -->
                <div class="card overflow-hidden c-mt-16 c-mb-24 c-mb-lg-16">
                    <div class="card-body c-px-16">
                        <h2 class="text-title-bold c-mb-24">Chi tiết dịch vụ</h2>
                        <div class="content-desc">
                            Garena Liên Quân Mobile có nguồn gốc từ trò chơi Vương Giả Vinh Diệu (Honor of Kings) của Tencent Games phát triển và phát hành tại Trung Quốc. Vì trò chơi Vương Giả Vinh Diệu có những nhân vật trong lịch sử Trung Quốc nên không phát hành ở nước ngoài. Vì vậy Tencent Games đã thay đổi, cải thiện hình ảnh các nhân vật lên quốc tế hóa và phân phối cho Garena phát hành tại thị trường Đài Loan với tên Truyền Thuyết Đối Quyết (tiếng Trung: 傳說對決) vào ngày 14/10/2016. Về sau trò chơi được Garena phát hành ở các nước Đông Nam Á còn lại và do chính Tencent Games phát hành ở Châu Âu, Châu Mỹ và Ấn Độ.
                            <br>
                            <br>
                            Vào tháng 4 năm 2017, nhà phát triển Tencent Games mua lại bản quyền hình ảnh các nhân vật siêu anh hùng đến từ công ty DC Comics, cho ra mắt ở máy chủ thử nghiệm với các vị tướng độc quyền DC như Batman, Superman, Joker, Wonder Woman, The Flash rồi phát hành rộng rãi lên các máy chủ chính thức.
                            <br>
                            <br>
                            Ngày 29 tháng 7 năm 2018 được đánh dấu như là ngày kỷ niệm sinh nhật Liên Quân đầu tiên trên toàn thế giới, đồng thời đây cũng là ngày trận chung kết AWC 2018 diễn ra tại Los Angeles, Hoa Kỳ.
                            <br>
                            Garena Liên Quân Mobile có nguồn gốc từ trò chơi Vương Giả Vinh Diệu (Honor of Kings) của Tencent Games phát triển và phát hành tại Trung Quốc. Vì trò chơi Vương Giả Vinh Diệu có những nhân vật trong lịch sử Trung Quốc nên không phát hành ở nước ngoài. Vì vậy Tencent Games đã thay đổi, cải thiện hình ảnh các nhân vật lên quốc tế hóa và phân phối cho Garena phát hành tại thị trường Đài Loan với tên Truyền Thuyết Đối Quyết (tiếng Trung: 傳說對決) vào ngày 14/10/2016. Về sau trò chơi được Garena phát hành ở các nước Đông Nam Á còn lại và do chính Tencent Games phát hành ở Châu Âu, Châu Mỹ và Ấn Độ.
                            <br>
                            <br>
                            Vào tháng 4 năm 2017, nhà phát triển Tencent Games mua lại bản quyền hình ảnh các nhân vật siêu anh hùng đến từ công ty DC Comics, cho ra mắt ở máy chủ thử nghiệm với các vị tướng độc quyền DC như Batman, Superman, Joker, Wonder Woman, The Flash rồi phát hành rộng rãi lên các máy chủ chính thức.
                            <br>
                            <br>
                            Ngày 29 tháng 7 năm 2018 được đánh dấu như là ngày kỷ niệm sinh nhật Liên Quân đầu tiên trên toàn thế giới, đồng thời đây cũng là ngày trận chung kết AWC 2018 diễn ra tại Los Angeles, Hoa Kỳ.
                            <br>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <span class="see-more" data-content="Xem thêm nội dung"></span>
                    </div>
                </div>

            </div>
            {{--            END PAGE CONTENT--}}
        </div>
    </div>
@endsection
@section('scripts')
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/store-card-v2/main.js"></script>
@endsection
