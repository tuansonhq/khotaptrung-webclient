@extends('frontend.layouts.master')
@section('seo_head')
    @include('frontend.widget.__seo_head')
@endsection
@push('style')
@endpush
@push('js')
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/top_charge/top_charge.js"></script>
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/charge/charge.js"></script>
@endpush
{{--@section('content')--}}
@section('content')

    <div class="layout-page">
        <div class="content-layout" >
            <div class="content-banner container">
                <div class="content-banner-card">
                    <ul class="nav " role="tablist" >
                        <li role="presentation" class="nav-item active" >
                            <a  class="active" data-toggle="tab" href="#top_napthe" role="tab"  >
                                TOP NẠP THẺ THÁNG 02
                            </a>
                        </li>
                        <li role="presentation" class="" >

                            <a  class="nav-item " data-toggle="tab" href="#napthe" role="tab"  >
                                NẠP THẺ

                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane  fade show active" id="top_napthe">
                            <div class="content-banner-card-box">
                                @include('frontend.widget.__top_nap_the');


                            </div>
                        </div>
                        <div class="tab-pane  fade show " id="napthe">
                            <div class="content-banner-card-form">
                                @include('frontend.widget.__nap_the');
{{--                                {!! widget('frontend.widget.__nap_the') !!}--}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-banner-slide">
                    <div class="slider "  >
                        <div class="row" style="position: relative">
                            <div class="col-12 slider_in" >
                                <div class="swiper-container mySwiper slider_detail">
                                    <div class="swiper-wrapper">
                                        @include('frontend.widget.__slider__banner')
                                    </div>
                                    <!--                                  <div class="swiper-pagination"></div>-->
                                </div>
                                <div class="swiper-button-prev">
                                    <i class="fas fa-chevron-left"></i>
                                </div>
                                <div class="swiper-button-next">
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-advertise ">
                <div class="container">

                    <marquee width="100%" behavior="scroll" >

                        <p style=""><strong>{!! setting('sys_marquee') !!}</strong>  </p>

                    </marquee>
                </div>
            </div>

            @include('frontend.widget.__content__home__game')

            @include('frontend.widget.__content__home__dichvu')

            @include('frontend.widget.__content__home__minigame')

            <div class="content-video intro_text" id="lockmoney_taget">
                <div class="container">
                    <div class="content-video-in">
                        {!! setting('sys_intro_text') !!}
                    </div>
                    <div class="view-more">
                        Xem tất cả »
                    </div>
                    <div class="view-less">
                        « Thu gọn
                    </div>
                </div>
            </div>

        </div>


        @include('frontend.widget.__menu__taget')

    </div>




    <script>
        $(document).ready(function(){
            var key = 1;

            $(function() {
                $('.content-items').each(function(key,value){

                    $(this).attr('id', 'target_'+key);
                });
            });
        })
    </script>
@endsection

