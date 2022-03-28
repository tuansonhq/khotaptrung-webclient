@extends('frontend.layouts.master')
@section('seo_head')
    @include('frontend.widget.__seo_head')
@endsection
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
                                {!! widget('frontend.widget.__top_nap_the',60) !!}

                            </div>
                        </div>
                        <div class="tab-pane  fade show " id="napthe">
                            <div class="content-banner-card-form">
                                {!! widget('frontend.widget.__nap_the') !!}
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
                                        {!! widget('frontend.widget.__slider__banner',60) !!}
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

            {!! widget('frontend.widget.__content__home',60) !!}

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

        <div class="adthisbutton">
            <a class="freefire" style="color:#fff" href="#freefire_taget">
                <img src="https://shopas.net/storage/images/EZ94JFicXW_1634524794.png" alt="">
                <span>Mục Liên Quân</span>
            </a>
            <a class="lienquan" style="color:#fff" href="#lienquan_taget">
                <img src="https://shopas.net/storage/images/oVE6PWWiom_1634524794.png" alt="">
                <span>Mục Free Fire</span>
            </a>


            <a class="lockmoney" style="color:#fff" href="#lockmoney_taget">
                <img src="https://shopas.net/storage/images/sa2TgJvgE9_1634524794.jpg" alt="">
                <span>Mục Tiền Khóa</span>
            </a>
            <a class="hoteventmodal" style="color:#fff" href="javascript://">
                <img src="https://shopas.net/storage/images/m8zObXwTac_1634524794.png" alt="">
                <span>Mục Sự Kiện</span>
            </a>
        </div>
    </div>

@endsection

