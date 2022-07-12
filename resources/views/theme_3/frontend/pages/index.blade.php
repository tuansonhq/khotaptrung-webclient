@extends('frontend.layouts.master')
@section('styles')
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/lib_bootstrap.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/minigame.css">
@endsection

@section('content')

    <div class="banner-home " >



        @include('frontend.widget.__slider__banner')
{{--            <div class="banner-image">--}}
{{--                <img src="/assets/frontend/{{theme('')->theme_key}}/image/banner.png" alt="">--}}
{{--            </div>--}}

        <div class="banner-content">
            <div class="container @if(isset(theme('')->theme_config->sys_menu_service) && theme('')->theme_config->sys_config_banner == 'banner_single') container-fix @endif" >
                <div class="d-flex justify-content-between">
                    @if(isset(theme('')->theme_config->sys_menu_service) && theme('')->theme_config->sys_menu_service == 'menu_service_1')
                        <div class="box-list-service d-g-lg-none">
                            <p><img src="/assets/frontend/{{theme('')->theme_key}}/image/service-page-icon.png" alt="" id="menu_service">Danh mục dịch vụ</p>
                            <hr>
                            @include('frontend.widget.__list_service')
                        </div>
                    @endif

                    @if(setting('sys_marquee'))
                    <div class="rotation-notify-home text-slider" @if(theme('')->theme_config->sys_menu_service == 'menu_service_1' && theme('')->theme_config->sys_top_charge == 'top_charge_open') @endif>
                        <img class="img-text-slider" src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/sound.svg" alt="">
                        <marquee class="rotation-marquee marquee-move">

                            <div class="rotation-marquee-item marquee-item">
                                {!! setting('sys_marquee') !!}
                            </div>
                        </marquee>
                    </div>
                        @endif
                    @if(isset(theme('')->theme_config->sys_top_charge) && theme('')->theme_config->sys_top_charge == 'top_charge_open')
                        <div class="box-list-top top-list d-g-lg-none">
                            <p><img src="/assets/frontend/{{theme('')->theme_key}}/image/star_top.png" alt="" id="menu_top_list"> Top nạp T{{Carbon\Carbon::now()->month}}</p>

                            @include('frontend.widget.__top_nap_the')


                        </div>
                    @endif
                </div>

            </div>
        </div>


    </div>
    <div class="container container-fix">

{{--        Dịch vụ nổi bật mobile--}}
        @if(isset(theme('')->theme_config->sys_menu_service) && theme('')->theme_config->sys_menu_service == 'menu_service_1')
            @include('frontend.widget.__list_serve_remark_mobile')
        @endif

{{--            Hot sale--}}
        @if(isset(theme('')->theme_config->sys_config_hotsale) && theme('')->theme_config->sys_config_hotsale == 'hot_sale_1')
             @include('frontend.widget.__hotsale')
        @endif
{{--            Chơi gần đây--}}
        @if(isset(theme('')->theme_config->sys_config_category_acc) && theme('')->theme_config->sys_config_category_acc == 'category_acc_1')
             @include('frontend.widget.__play__recently__home')
        @endif
{{--            Top nạp thẻ mobile--}}
        @if(isset(theme('')->theme_config->sys_top_charge) && theme('')->theme_config->sys_top_charge == 'top_charge_open')
            @include('frontend.widget.__top_nap_the_mobile')
        @endif
{{--        Dịch vụ game--}}
        @include('frontend.widget.__service_game')
{{--             Minigame--}}
        @if(isset(theme('')->theme_config->sys_config_minigame) && theme('')->theme_config->sys_config_minigame == 'minigame_0')
              @include('frontend.widget.__content__home__minigame')
        @endif

{{--             Dịch vụ nổi bật--}}
        @if(isset(theme('')->theme_config->sys_menu_service) && theme('')->theme_config->sys_menu_service == 'menu_service_1')
            @include('frontend.widget.__list_serve_remark')
        @endif
{{--                Nạp thẻ--}}
        @if(isset(theme('')->theme_config->sys_charge_card) && theme('')->theme_config->sys_charge_card == 'charge_card_1')
            @include('frontend.widget.__nap_the')
        @endif
{{--                Mua thẻ--}}
        @if(isset(theme('')->theme_config->sys_store_card) && theme('')->theme_config->sys_store_card == 'store_card_1')
            @include('frontend.widget.__card_purchase')
        @endif
{{--                Danh mục mua acc--}}
        @if(isset(theme('')->theme_config->sys_config_buy_acc) && theme('')->theme_config->sys_config_buy_acc == 'buy_acc_1')
             @include('frontend.widget.__content__home__game')
        @endif
        @if(isset(theme('')->theme_config->sys_config_nick) && theme('')->theme_config->sys_config_nick == 'nick_acc_1')
            @include('frontend.widget.__random__account')
        @endif
{{--                 Tin tức--}}
        @if(isset(theme('')->theme_config->sys_config_news) &&  theme('')->theme_config->sys_config_news == 'news_1')
            @include('frontend.widget.__tin__tuc')
        @endif

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
    <script src="/assets/frontend/theme_3/js/js_phu/purchase_card.js?v={{time()}}"></script>
    <script src="/assets/frontend/theme_3/js/charge/charge_home.js?v={{time()}}"></script>
    @if(\App\Library\AuthFrontendCustom::check())
        <script src="/assets/frontend/theme_3/js/transfer/transfer.js?v={{time()}}"></script>
    @endif
@endsection

