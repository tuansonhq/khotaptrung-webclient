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


        <div class="adthisbutton">
            @if(isset($data_menu_transaction))
                @foreach($data_menu_transaction as $key => $val)
                    @if($val->target == 2)

                        <a class="freefire freefire{{ $key }}" style="color:#fff" href="javascript:void(0)">
                            <img src="{{  config('api.url_media').$val->image }}" alt="">
                            <span>{{ $val->title }}</span>
                        </a>

                    @else
                    <a class="freefire" style="color:#fff" href="#target_{{ $key }}">
                        <img src="{{  config('api.url_media').$val->image }}" alt="">
                        <span>{{ $val->title }}</span>
                    </a>
                    @endif
                @endforeach
            @endif
        </div>

    </div>

    @if(isset($data_menu_transaction))
        @foreach($data_menu_transaction as $key => $val)
            @if($val->target == 2)
                <div class="modal fade in noticeEventModal{{ $key }}" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Thông báo</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body" style="font-family: helvetica, arial, sans-serif;">
                                {!! $val->content !!}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    $(document).ready(function(){
                        $('body').on('click','.freefire{{ $key }}',function(e){
                            $('.noticeEventModal{{ $key }}').modal('show');
                        })
                    })
                </script>
            @endif
        @endforeach
    @endif
@endsection

