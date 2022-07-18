@extends('frontend.layouts.master')
@section('styles')
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/lib_bootstrap.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/minigame.css">
@endsection

@section('content')
    <div class="container container-fix">
        <section class="media-mobile">
            <div class=" banner-mobile-container-ct">
                <div class="row marginauto banner-mobile-row-ct">
                    <div class="col-auto left-right" style="width: 10%">
                        <a href="/" class="box-account-mobile_open">
                            <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/back.png" alt="" >
                        </a>

                    </div>

                    <div class="col-auto left-right banner-mobile-span text-center" style="width: 80%">
                        <p>Trang chủ</p>
                    </div>
                    <div class="col-auto left-right" style="width: 10%">
                    </div>
                </div>
            </div>
        </section>
        <section class="media-web mb-fix-16">
            <div class=" menu-container-ct">
                <ul class="d-flex" style="float: inherit">
                    <li><a href="/">Trang chủ</a></li>
                    <li class="menu-container-li-ct"><img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/arrow-right.png" alt=""></li>
                    <li class="menu-container-li-ct"><a href="">Danh mục vòng quay</a></li>
                </ul>
            </div>
        </section>
        <div class="block-mini-game ">
            <div class="row">
                <div class="col-lg-12 col-md-12 pr-md-0" >
                    <div class=" block-product ">
                        <div class="product-header d-flex">
                        <span>
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/minigame_title_detail.png" alt="">
                        </span>
                            <p class="text-title" >Top vòng quay</p>
                            <div class="navbar-spacer"></div>

                            <div class="text-view-more">

{{--                                <a href="/minigame" class="global__link">Xem thêm<i class="__icon --sm --link ml-1" style="--path : url(/assets/theme_3/image/icons/arrow-right-blue.png)"></i></a>--}}

                            </div>
                        </div>

                        @include('frontend.widget.__content__category__minigame')
                    </div>
                </div>

            </div>
        </div>

{{--        @include('frontend.widget.__hotsale')--}}

{{--        @include('frontend.widget.__play__recently')--}}

{{--        @include('frontend.widget.__minigame__related')--}}
    </div>
@endsection
