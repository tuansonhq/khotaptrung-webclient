<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="index,follow"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta name="path" content=""/>
    <meta name="jwt" content="jwt"/>
    @yield('meta_robots')
    {{--    <meta name="google-site-verification" content="{{setting('sys_google_search_console')}}" />--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/lib/sweetalert2/sw2.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/lib/bootstrap/bootstrap.min.css">
    <!--    swiper-->
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/lib/swiper/swiper.min.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/lib/animate/animate.min.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/lib/OwlCarousel2/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/lib/date-picker/bootstrap-datetimepicker.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/lib/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/lib/fancybox/fancybox.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/lib/toastr/toastr.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/lib/steps/jquery-steps.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/lib/select-nice/select-nice.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/lib/nouislider/nouislider.css">


    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/son/login_modal.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/modal-custom.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/main.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/duong/style.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/normalize.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/main.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/style-custom.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/son/style.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/phu/style.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/nam/header.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/nam/menu-category.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/nam/menu-bottom.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/nam/slide-banner.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/nam/change-password.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/lib/range-slider-master/css/rSlider.min.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/son/service-mobile.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/duong/component-style.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/trong/components.css">

{{--js--}}
    <script src="/assets/frontend/{{theme('')->theme_key}}/lib/jquery/jquery.min.js"></script>


    <script src="/assets/frontend/{{theme('')->theme_key}}/js/store-card/store-card.js"></script>
    <!-- js chứa các hàm cần load trước tiên -->
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/custom/preload.js"></script>

{{--    import css --}}
    @yield('styles')
    @if(setting('sys_google_tag_manager_head') != '')
    <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','{{setting('sys_google_tag_manager_head') }}');</script>
        <!-- End Google Tag Manager -->
    @endif
</head>
<body>
@if(setting('sys_google_tag_manager_body') != '')
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id={{setting('sys_google_tag_manager_body') }}"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
@endif

@include('frontend.layouts.includes.header')
<div class="layout" >
    <div class="content" style="">
        @yield('content')
    </div>
</div>

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

@include('frontend.layouts.includes.footer')

@include('frontend.layouts.includes.menu-bottom')
<div class="modal-loader-container">
    <div class="modal-loader-content">
        <span class="modal-loader-spin"></span>
    </div>
</div>
<!-- Messenger Plugin chat Code -->
@if(Session::has('check_login'))
    <script>
        $(document).ready(function () {
            let width = $(window).width();
            setTimeout(function(){
                if ( width > 1200 ) {
                    $('#loginModal').modal('show');
                    setTimeout(() => {
                        $('#loginModal #modal-login-container').removeClass('right-panel-active');
                    }, 200);
                } else {
                    $('.mobile-auth').toggleClass('hidden');
                    $('.mobile-auth-form #formLoginMobile').css('display', 'flex');
                    $('.mobile-auth-form #formRegisterMobile').css('display', 'none');
                    $('.mobile-auth .head-mobile h1').text('Đăng nhập');
                }
            }, 0);
        });
    </script>
    @php
        Session::pull('check_login');
    @endphp
@endif

@if (!\App\Library\AuthCustom::check())
    @include('frontend.widget.modal.__login')
@endif
@if(!Request::is('/'))
    @if(Session::has('url_return.id_return'))
        @php
            Session::forget('url_return.id_return');
        @endphp
    @endif
@endif

<script src="/assets/frontend/{{theme('')->theme_key}}/lib/bootstrap/bootstrap.min.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/lib/lazyload/lazyloadGen.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/lib/wnumb-1.2.0/wNumb.min.js"></script>

<script src="/assets/frontend/{{theme('')->theme_key}}/lib/toastr/toastr.min.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/lib/sweetalert2/sw2.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/lib/select-nice/select-nice.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/lib/popper/popper.min.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/lib/popper/tippy-bundle.umd.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/lib/steps/jquery-steps.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/lib/easeJquery/easing.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/js/login/login_modal.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/lib/nouislider/nouislider.min.js"></script>

<script src="/assets/frontend/{{theme('')->theme_key}}/lib/fancybox/fancybox.umd.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/lib/fancybox/jquery.fancybox.min.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/lib/OwlCarousel2/OwlCarousel2.min.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/lib/slick/slick.min.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/lib/swiper/swiper.min.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/js/config/swiper-slider-conf.js"></script>

<script src="/assets/frontend/{{theme('')->theme_key}}/lib/date-picker/moment.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/lib/date-picker/bootstrap-datetimepicker.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/lib/validate-form/validate.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/js/config/form-validate.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/lib/date-picker/i18n/vi.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/js/custom/main.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/js/nam/header.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/js/nam/swiper-banner.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/js/nam/login.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/lib/bottom-sheet/main.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/lib/history-filter/handle.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/js/account_info.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/js/js_duong/style.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/js/charge/charge.js"></script>
@if(\App\Library\AuthFrontendCustom::check())
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/transfer/transfer.js?v={{time()}}"></script>
@endif
{{--impport script--}}
@yield('scripts')
</body>


</html>
