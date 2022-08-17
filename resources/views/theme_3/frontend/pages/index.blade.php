@extends('frontend.layouts.master')
@section('seo_head')
    @include('frontend.widget.__seo_head')
@endsection
@section('styles')
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/lib_bootstrap.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/minigame.css">
@endsection

@section('content')
    @if(isset(theme('')->theme_config->sys_theme_ver))
        <div class="banner-home " >
            @include('frontend.widget.__slider__banner')
            @if(theme('')->theme_config->sys_theme_ver == 'sys_theme_ver3.0' || theme('')->theme_config->sys_theme_ver == 'sys_theme_ver3.3')
                <div class="banner-content">
                    <div class="container  container-fix" >
                        <div class="d-flex justify-content-between">
                            <div class="box-list-service d-g-lg-none">
                                <p><img src="/assets/frontend/{{theme('')->theme_key}}/image/service-page-icon.png" alt="" id="menu_service">Danh mục dịch vụ</p>
                                <hr>
                                @include('frontend.widget.__list_service')
                            </div>

                            @if(setting('sys_marquee'))
                                <div class="rotation-notify-home text-slider">
                                    <img class="img-text-slider" src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/sound.svg" alt="">
                                    <marquee class="rotation-marquee marquee-move">

                                        <div class="rotation-marquee-item marquee-item">
                                            {!! setting('sys_marquee') !!}
                                        </div>
                                    </marquee>
                                </div>
                            @endif
                            <div class="box-list-top top-list d-g-lg-none">
                                <p><img src="/assets/frontend/{{theme('')->theme_key}}/image/star_top.png" alt="" id="menu_top_list"> Top nạp T{{Carbon\Carbon::now()->month}}</p>

                                @include('frontend.widget.__top_nap_the')

                            </div>
                        </div>

                    </div>
                </div>
            @elseif(theme('')->theme_config->sys_theme_ver == 'sys_theme_ver3.1' || theme('')->theme_config->sys_theme_ver == 'sys_theme_ver3.2')
                <div class="banner-content">
                    <div class="container  " >
                        <div class="d-flex justify-content-between">
                            @if(setting('sys_marquee'))
                                <div class="rotation-notify-home text-slider  rotation-notify-home-fix">
                                    <img class="img-text-slider" src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/sound.svg" alt="">
                                    <marquee class="rotation-marquee marquee-move">

                                        <div class="rotation-marquee-item marquee-item">
                                            {!! setting('sys_marquee') !!}
                                        </div>
                                    </marquee>
                                </div>
                            @endif

                        </div>

                    </div>
                </div>
            @endif
        </div>
        <div class="container container-fix">
            {{--        Dịch vụ nổi bật mobile--}}
            @if(theme('')->theme_config->sys_theme_ver == 'sys_theme_ver3.0')
                @include('frontend.widget.__list_serve_remark_mobile')
            @endif
            {{--            --}}{{--            Hot sale--}}
            {{--            @if(theme('')->theme_config->sys_theme_ver == 'sys_theme_ver3.0' || theme('')->theme_config->sys_theme_ver == 'sys_theme_ver3.3')--}}
            {{--                 @include('frontend.widget.__hotsale')--}}
            {{--            @endif--}}
            {{--           --}}{{--            Chơi gần đây--}}
            {{--            @if(theme('')->theme_config->sys_theme_ver == 'sys_theme_ver3.0')--}}
            {{--                @include('frontend.widget.__play__recently__home')--}}
            {{--            @endif--}}
            {{--            Top nạp thẻ mobile--}}
            @if(theme('')->theme_config->sys_theme_ver == 'sys_theme_ver3.0')
                @include('frontend.widget.__top_nap_the_mobile')
            @endif
            {{--        Dịch vụ game--}}
            @if(theme('')->theme_config->sys_theme_ver == 'sys_theme_ver3.2')
                @include('frontend.widget.__service_game')
            @endif
            {{--             Minigame--}}
            @if(theme('')->theme_config->sys_theme_ver == 'sys_theme_ver3.0' || theme('')->theme_config->sys_theme_ver == 'sys_theme_ver3.3')
                @include('frontend.widget.__content__home__minigame')
            @endif

            {{--        Dịch vụ nổi bật icon--}}
            @if(theme('')->theme_config->sys_theme_ver == 'sys_theme_ver3.0')
                @include('frontend.widget.__list_serve_remark')
            @endif
            @if(theme('')->theme_config->sys_theme_ver == 'sys_theme_ver3.2' )
                @include('frontend.widget.__nap_the')
            @endif
            {{--                Mua thẻ--}}
            @if(theme('')->theme_config->sys_theme_ver == 'sys_theme_ver3.1' || theme('')->theme_config->sys_theme_ver == 'sys_theme_ver3.2')
                @include('frontend.widget.__card_purchase')
            @endif

            {{--                 Nạp thẻ--}}
            @if(theme('')->theme_config->sys_theme_ver == 'sys_theme_ver3.0' || theme('')->theme_config->sys_theme_ver == 'sys_theme_ver3.1' )
                @include('frontend.widget.__nap_the')
            @endif
            {{--                Danh mục mua acc shop idol--}}


            @if(theme('')->theme_config->sys_theme_ver == 'sys_theme_ver3.3')
                @include('frontend.widget.__buy__acc__home')
                {{--                @include('frontend.widget.__log__coin__home')--}}


            @endif
            {{--                Danh mục mua acc--}}
            @if(theme('')->theme_config->sys_theme_ver == 'sys_theme_ver3.0')
                @include('frontend.widget.__content__home__game__random')
                @include('frontend.widget.__content__home__game_thuong')
            @endif
            @if(theme('')->theme_config->sys_theme_ver == 'sys_theme_ver3.0')
                {{--                 @include('frontend.widget.__random__account')--}}
            @endif

            {{--            Dịch vụ nổi bật--}}
            @if(theme('')->theme_config->sys_theme_ver !== 'sys_theme_ver3.0' )
                @include('frontend.widget.__list_serve_remark_image')
            @endif
            {{--                 Tin tức--}}
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
    @else
        <div class="banner-home " >
            @include('frontend.widget.__slider__banner')
            <div class="banner-content">
                <div class="container  container-fix" >
                    <div class="d-flex justify-content-between">
                        <div class="box-list-service d-g-lg-none">
                            <p><img src="/assets/frontend/{{theme('')->theme_key}}/image/service-page-icon.png" alt="" id="menu_service">Danh mục dịch vụ</p>
                            <hr>
                            @include('frontend.widget.__list_service')
                        </div>

                        @if(setting('sys_marquee'))
                            <div class="rotation-notify-home text-slider  ">
                                <img class="img-text-slider" src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/sound.svg" alt="">
                                <marquee class="rotation-marquee marquee-move">

                                    <div class="rotation-marquee-item marquee-item">
                                        {!! setting('sys_marquee') !!}
                                    </div>
                                </marquee>
                            </div>
                        @endif
                        <div class="box-list-top top-list d-g-lg-none">
                            <p><img src="/assets/frontend/{{theme('')->theme_key}}/image/star_top.png" alt="" id="menu_top_list"> Top nạp T{{Carbon\Carbon::now()->month}}</p>

                            @include('frontend.widget.__top_nap_the')

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container container-fix">
            @include('frontend.widget.__list_serve_remark_mobile')
            {{--            Hot sale--}}
            @include('frontend.widget.__hotsale')
            {{--            Chơi gần đây--}}
            @include('frontend.widget.__play__recently__home')
            {{--            Top nạp thẻ mobile--}}
            @include('frontend.widget.__top_nap_the_mobile')
            {{--        Dịch vụ game--}}
            @include('frontend.widget.__service_game')
            {{--             Minigame--}}
            @include('frontend.widget.__content__home__minigame')
            @include('frontend.widget.__list_serve_remark')
            {{--                        Nạp thẻ--}}
            @include('frontend.widget.__nap_the')
            {{--                Danh mục mua acc--}}
            @include('frontend.widget.__content__home__game__random')
            @include('frontend.widget.__content__home__game_thuong')
            {{--                @include('frontend.widget.__random__account')--}}
            {{--                     Dịch vụ nổi bật--}}
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
    @endif
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

