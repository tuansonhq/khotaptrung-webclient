{{--@dd($data)--}}
@if(isset(theme('')->theme_config->sys_config_banner) )
    <div class="banner-home " >


        @if(theme('')->theme_config->sys_config_banner =='banner_single')
            <div class="banner-image">
                <img src="/assets/frontend/{{theme('')->theme_key}}/image/banner.png" alt="">
            </div>
        @elseif(theme('')->theme_config->sys_config_banner =='banner_slide')
            <div class="banner-slide swiper-container container container-fix " >
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/banner.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="/assets/frontend/theme_3/image/minigame3.gif" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="//backend.dev.tichhop.pro/storage/upload/images/RANDOM-FF-VIP-2.gif" alt="">
                    </div>
                </div>
            </div>
        @endif
        <div class="banner-content">
            <div class="container @if(theme('')->theme_config->sys_config_banner == 'banner_single') container-fix @endif" >
                <div class="d-flex justify-content-between">
                    {{--                @if(isset(theme('')->theme_config->sys_menu_service) && theme('')->theme_config->sys_menu_service == 'menu_service_1')--}}
                    {{--                    <div class="box-list-service d-g-lg-none">--}}
                    {{--                        <p>Dịch vụ</p>--}}

                    {{--                        @include('frontend.widget.__list_service')--}}
                    {{--                    </div>--}}
                    {{--                @endif--}}

                    @if(setting('sys_marquee'))
                        <div class="rotation-notify text-slider" >
                            <marquee class="rotation-marquee marquee-move">
                                <img class="img-text-slider" src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/sound.svg" alt="">
                                <div class="rotation-marquee-item marquee-item">
                                    {!! setting('sys_marquee') !!}
                                </div>
                            </marquee>
                        </div>
                    @endif
                    {{--                @if(isset(theme('')->theme_config->sys_top_charge) && theme('')->theme_config->sys_top_charge == 'top_charge_open')--}}
                    {{--                    <div class="box-list-top top-list d-g-lg-none">--}}
                    {{--                        <p><img src="/assets/frontend/{{theme('')->theme_key}}/image/star_top.png" alt=""> Top nạp T{{Carbon\Carbon::now()->month}}</p>--}}

                    {{--                        @include('frontend.widget.__top_nap_the')--}}


                    {{--                    </div>--}}
                    {{--                @endif--}}
                </div>

            </div>
        </div>


    </div>
@endif
{{--<div class="container container-fix">--}}
{{--    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">--}}
{{--        <div class="rotation-notify text-slider">--}}
{{--            <img class="img-text-slider" src="frontend/{{theme('')->theme_key}}/images_1/sound.svg" alt="">--}}
{{--            <marquee class="rotation-marquee marquee-move">--}}
{{--                <div class="rotation-marquee-item marquee-item">--}}
{{--                    {!! setting('sys_marquee') !!}--}}
{{--                </div>--}}
{{--            </marquee>--}}
{{--        </div>--}}
{{--        <ol class="carousel-indicators">--}}
{{--            @forelse($data as $k_banner => $banner)--}}
{{--                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $k_banner }}" class="{{ !$k_banner ? 'active' : '' }}"></li>--}}
{{--            @empty--}}
{{--            @endforelse--}}
{{--        </ol>--}}
{{--        <div class="carousel-inner carousel-slider-item">--}}
{{--            @forelse($data as $k_banner => $banner)--}}
{{--            <div class="carousel-item {{ !$k_banner ? 'active' : '' }}">--}}
{{--                <a href="{{ @$banner->url }}">--}}
{{--                    <img class="d-block w-100 img-slider img-slider-mobile" src="{{ @$banner->image }}" alt="Banner">--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            @empty--}}
{{--            @endforelse--}}
{{--        </div>--}}
{{--        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">--}}
{{--            <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--            <span class="sr-only">Previous</span>--}}
{{--        </a>--}}
{{--        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">--}}
{{--            <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--            <span class="sr-only">Next</span>--}}
{{--        </a>--}}
{{--    </div>--}}
{{--</div>--}}
