@extends('frontend.layouts.master')
@section('seo_head')
    @include('frontend.widget.__seo_head')
@endsection
@section('meta_robots')
    <meta name="robots" content="index,follow" />
@endsection
<script src="/assets/frontend/{{theme('')->theme_key}}/js/service/style.js"></script>
@section('content')
    <div style="width:100%;position: relative;" class="homeitem">
        <div class="item">
            <div class="index_title">
                <span><img src="/assets/frontend/{{theme('')->theme_key}}/image/svg/ic_h1.svg" alt="mua thẻ điện thoại online"></span>
                <h1> mua thẻ online</h1>
            </div>
            @include('frontend.widget.__card_purchase')
        </div>
        <!--popup work start here-->
        <div class="d-flex justify-content-between" style="padding-top: 24px">
            <div class="main-title">
                <h1>Dịch vụ game</h1>
            </div>
            <div class="service-search d-none d-lg-block ">
                <div class="input-group p-box">
                    <input type="text" id="txtSearch" placeholder="Tìm dịch vụ" value="" class="" width="200px">
                    <span class="icon-search"><i class="fas fa-search"></i></span>
                </div>
            </div>
        </div>
        @include('frontend.widget.__content__home__dichvu')
        @include('frontend.widget.__content__home__game')
        <div class="clr"></div>
        @if(setting('sys_intro_text'))
        <div class="wp_content_post_index">
            <div class="post_index">
                    <div class="content_bvct">
                        {!! setting('sys_intro_text') !!}
                    </div>
                    <span class="xt more">Xem thêm</span>
                    <span class="xt tg" style="display: none;">Thu gọn</span>

                    <script type="text/javascript">
                        $('.more').click(function () {
                            $('.content_bvct').css('height', 'unset');
                            $('.more').hide();
                            $('.tg').show();
                        });
                        $('.tg').click(function () {
                            $('.content_bvct').css('height', '1000px');
                            $('.more').show();
                            $('.tg').hide();
                        });
                    </script>
                </div>
        </div>
        @endif
    </div>
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/storecard/store_card.js?v={{time()}}"></script>
@endsection
