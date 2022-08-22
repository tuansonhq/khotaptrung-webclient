<!doctype html>
<html lang="vi">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="path" content="" />
    @yield('meta_robots')

    <meta name="jwt" content="jwt" />
    @if(setting('sys_google_search_console') != '')
        <meta name="google-site-verification" content="{{setting('sys_google_search_console')}}" />
    @endif
    @if(Request::is('/'))
        @if(setting('sys_schema') != '')
            {!! setting('sys_schema') !!}
        @endif
    @endif
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/lib/sweetalert2/sw2.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/custom.boostrap.css">


{{--    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/lib/bootstrap/bootstrap.min.css">--}}
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/lib/select-nice/select-nice.css">

    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/line-awesome.min.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/node_modules/flickity/dist/flickity.min.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/lib/bootstrapdatepicker/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/lib/toastr/toastr.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/lib/swiper/swiper.min.css">

    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/main_trong.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/son/style.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/son/service-mobile.css">

    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/style-custom.css">


    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/trong/components.css">

    @yield('styles')
    <!--    <link rel="stylesheet" href="css/main.css">-->
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/style.css?v={{time()}}">

    <script src="/assets/frontend/{{theme('')->theme_key}}/lib/jquery.min.js"></script>
    <script src="/assets/frontend/{{theme('')->theme_key}}/lib/swiper/swiper.min.js"></script>

    <script src="/assets/frontend/{{theme('')->theme_key}}/lib/bootstrap/bootstrap.min.js"></script>
    <script src="/assets/frontend/{{theme('')->theme_key}}/lib/moment/moment.min.js"></script>
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/bootstrap-datetimepicker.min.js"></script>
    <script src="/assets/frontend/{{theme('')->theme_key}}/lib/bootstrapdatepicker/bootstrap-datepicker.min.js"></script>
    <script src="/assets/frontend/{{theme('')->theme_key}}/lib/sweetalert2/sw2.js"></script>
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/account_info.js?v={{time()}}"></script>
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/main.js?v={{time()}}"></script>
    <script src="/assets/frontend/{{theme('')->theme_key}}/lib/datetime-picker/bootstrap-datetimepicker.js" defer></script>

{{--    <script src="/assets/frontend/{{theme('')->theme_key}}/js/storecard/store_card.js"></script>--}}
    @stack('js')

    @yield('seo_head')

        @if(setting('sys_google_tag_manager_head') != '')
    <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','{{setting('sys_google_tag_manager_head') }}');</script>
        <!-- End Google Tag Manager -->
    @endif


<!-- Hubjs Tag Manager -->
    <script type="text/javascript">
        var _mtm = window._mtm = window._mtm || [];
        _mtm.push({'mtm.startTime': (new Date().getTime()), 'event': 'mtm.Start'});
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.type='text/javascript'; g.async=true; g.src='https://analytics.hub-js.com/js/container_pi4uNWv2.js'; s.parentNode.insertBefore(g,s);
    </script>
    <!-- End Hubjs Tag Manager -->
</head>

<body>
<!-- BEGIN Site -->
@if(setting('sys_google_tag_manager_body') != '')
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id={{setting('sys_google_tag_manager_body') }}"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
@endif
<div class="site">
    <!-- BEGIN Header -->
    @include('frontend.layouts.includes.header')

    <!-- BEGIn Site main -->
    <div class="site-main">
        <div class="container">
            <div class="site-content">
                <div class="site-content-inner">
                    @yield('content')

                </div>
            </div>
        </div>
    </div><!-- END Site Main -->
    <!-- Messenger Plugin chat Code -->
    <div id="fb-root" style="    z-index: 666;"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>
    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "{{setting('sys_id_chat_message') }}");

        chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml            : true,
                version          : 'v13.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- BEGIN Site Footer -->
    @include('frontend.layouts.includes.footer')




</div><!-- END SIte -->
<div class="overlay"></div>
<div class="offcanvas-nav">
    <button type="button" class="btn btn-close"><i class="las la-times"></i></button>
    <div class="offcanvas-nav-inner h-100 p-3">
        <ul class="nav flex-column">
            @include('frontend.widget.__menu_category_mobile')
{{--            {!! widget('frontend.widget.__menu_category_theme2') !!}--}}

{{--            <li class="nav-item item-home active"><a href="/" class="nav-link"><i class="las la-home icon"></i> Trang chủ</a></li>--}}
{{--            <li class="nav-item item-buy-card"><a href="/" class="nav-link"><i class="las la-credit-card icon"></i> Mua thẻ game điện thoại</a></li>--}}
{{--            <li class="nav-item item-history"><a href="/thong-tin#history" class="nav-link"><i class="las la-clock icon"></i> Lịch sử giao dịch</a></li>--}}
{{--            <li class="nav-item item-profile"><a href="/user/profile" class="nav-link"><i class="las la-user icon"></i> Thông tin cá nhân</a></li>--}}
{{--            <li class="nav-item item-article"><a href="/tin" class="nav-link"><i class="las la-newspaper icon"></i> Tin tức</a></li>--}}
{{--            <li class="nav-item item-article"><a href="/thong-tin#deposit" class="nav-link"><i class="las la-credit-card icon"></i> Lịch sử nạp thẻ</a></li>--}}
        </ul>
    </div>
</div>
<div class="scroll-top">
    <a href="#" class="scroll-top-link"><i class="las la-angle-double-up"></i></a>
</div>
<div class="text-center ajax-loading-store">
    <div id="overlay">
        <div class="cv-spinner">
            <span class="spinner"></span>
        </div>
    </div>
</div>

@if(!Request::is('/'))
    @if(Session::has('url_return.id_return'))
        @php
            Session::forget('url_return.id_return');
        @endphp
    @endif
@endif
<!-- Optional JavaScript; choose one of the two! -->
<script src="/assets/frontend/{{theme('')->theme_key}}/lib/bootstrap/bootstrap.min.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/js/config/swiper-slider-conf.js"></script>

<script src="/assets/frontend/{{theme('')->theme_key}}/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/node_modules/jquery/dist/jquery.min.js"></script>
{{--<script src="/assets/frontend/{{theme('')->theme_key}}/lib/jquery.min.js"></script>--}}
<script src="/assets/frontend/{{theme('')->theme_key}}/lib/select-nice/select-nice.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/lib/popper/popper.min.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/lib/popper/tippy-bundle.umd.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/node_modules/flickity/dist/flickity.pkgd.min.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/js/bootstrap-input-spinner.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/js/sticky-kit.min.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/lib/toastr/toastr.min.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/js/js_duong/style.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/js/custom/main.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/lib/bottom-sheet/main.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/lib/history-filter/handle.js"></script>

@yield('scripts')
</body>

</html>
