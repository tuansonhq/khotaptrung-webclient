@extends('frontend.layouts.master')
@section('content')
{{--    slide--}}
<div class="container">
    <div id="banner">
        <div class="c-content-box">
            <div id="slider" class="owl-theme section section-cate slideshow_full_width ">
                <div id="slide_banner" class="owl-carousel owl-loaded owl-drag">

                    <div class="owl-stage-outer" data-position="0">
                        <div class="owl-stage"
                             style="transform: translate3d(-2220px, 0px, 0px); transition: all 0.25s ease 0s; width: 5550px;">
                            <div class="owl-item cloned" style="width: 1110px;">
                                <div class="item">
                                    <a href="/" alt="mua thẻ garena bảo mật, nhanh chóng, tiện lợi">
                                        <img
                                            src="/assets/frontend/theme_card_2/image/image_slide_home.jpg"
                                            alt="mua thẻ garena bảo mật, nhanh chóng, tiện lợi">
                                    </a>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 1110px;">
                                <div class="item">
                                    <a href="/" alt="mua thẻ garena bảo mật, nhanh chóng, tiện lợi">
                                        <img
                                            src="/assets/frontend/theme_card_2/image/image_slide_home.jpg"
                                            alt="mua thẻ garena bảo mật, nhanh chóng, tiện lợi">
                                    </a>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 1110px;">
                                <div class="item">
                                    <a href="/" alt="mua thẻ garena bảo mật, nhanh chóng, tiện lợi">
                                        <img
                                            src="/assets/frontend/theme_card_2/image/image_slide_home.jpg"
                                            alt="mua thẻ garena bảo mật, nhanh chóng, tiện lợi">
                                    </a>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 1110px;">
                                <div class="item">
                                    <a href="/" alt="mua thẻ garena bảo mật, nhanh chóng, tiện lợi">
                                        <img
                                            src="/assets/frontend/theme_card_2/image/image_slide_home.jpg"
                                            alt="mua thẻ garena bảo mật, nhanh chóng, tiện lợi">
                                    </a>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 1110px;">
                                <div class="item">
                                    <a href="/" alt="mua thẻ garena bảo mật, nhanh chóng, tiện lợi">
                                        <img
                                            src="/assets/frontend/theme_card_2/image/image_slide_home.jpg"
                                            alt="mua thẻ garena bảo mật, nhanh chóng, tiện lợi">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-nav disabled" data-position="1">
                        <button type="button" role="presentation" class="owl-prev"><i
                                class="fa fa-angle-left"></i></button>
                        <button type="button" role="presentation" class="owl-next"><i
                                class="fa fa-angle-right right_button" aria-hidden="true"></i></button>
                    </div>
                    <div class="owl-dots disabled" data-position="2">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{--mua thẻ--}}
<div id="content">
    @include('frontend.widget.__card_purchase')

</div>
{{--decription mua thẻ--}}
<div class="intro-text" style="margin:40px 0px;color:#fff">
    <div class="container">
        <!-- Begin: Testimonals 1 component -->
        <div class="c-content-client-logos-slider-1  c-bordered hidetext" data-slider="owl">
            <!-- Begin: Title 1 component -->

        </div>
        <!-- End-->
        <span style="color: #2F6A7C;font-weight:bold;font-size:15px;float:right;padding-top:20px;"
              class="viewmore">Xem tất cả »</span>
    </div>
</div>

{{--bài viết liên quan--}}
    @include('theme_card_2.frontend.pages.news')
<script src="/assets/frontend/{{theme('')->theme_key}}/js/storecard/store_card.js?v={{time()}}"></script>

@endsection
