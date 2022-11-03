@extends('frontend.layouts.master')
@section('seo_head')
    @include('frontend.widget.__seo_head')
@endsection
@section('meta_robots')
    <meta name="robots" content="index,follow" />
@endsection
@section('content')
{{--    slide--}}
@include('frontend.widget.__slider__banner')

{{--mua thẻ--}}
<div id="content">
    @include('frontend.widget.__card_purchase')

</div>
{{--decription mua thẻ--}}
@if(setting('sys_intro_text'))
<div class="intro-text" style="margin:40px 0px;color:#fff">
    <div class="container">
        <!-- Begin: Testimonals 1 component -->
        <div class="c-content-client-logos-slider-1  c-bordered hidetext" data-slider="owl" style="color: black">
            <!-- Begin: Title 1 component -->
            {!! setting('sys_intro_text') !!}
        </div>
        <!-- End-->
        <span style="color: #2F6A7C;font-weight:bold;font-size:15px;float:right;padding-top:20px;" class="viewmore">Xem tất cả »</span>
    </div>
</div>
@endif
    @include('frontend.widget.__list_serve_remark_image')
{{--bài viết liên quan--}}
    @include('frontend.widget.__baiviet__trangchu')
<script src="/assets/frontend/{{theme('')->theme_key}}/js/storecard/store_card.js?v={{time()}}"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/js/config/swiper-slider-conf.js"></script>
@endsection
