<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="index,follow" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="path" content="" />
    <meta name="jwt" content="jwt" />
    @if(setting('sys_google_search_console') != '')
        <meta name="google-site-verification" content="{{setting('sys_google_search_console')}}" />
    @endif
    @if(setting('sys_schema') != '')
        {!! setting('sys_schema') !!}
    @endif
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/frontend/theme_3/lib/sweetalert2/sw2.css">
    <link rel="stylesheet" href="/assets/frontend/theme_3/lib/bootstrap/bootstrap.min.css">
    <!--    swiper-->
    <link rel="stylesheet" href="/assets/frontend/theme_3/lib/swiper/swiper.min.css">
    <link rel="stylesheet" href="/assets/frontend/theme_3/lib/animate/animate.min.css">
    <link rel="stylesheet" href="/assets/frontend/theme_3/lib/OwlCarousel2/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/frontend/theme_3/lib/date-picker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="/assets/frontend/theme_3/lib/bootstrapdatepicker/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="/assets/frontend/theme_3/lib/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" href="/assets/frontend/theme_3/lib/fancybox/fancybox.css">
    <link rel="stylesheet" href="/assets/frontend/theme_3/lib/toastr/toastr.css">
    <link rel="stylesheet" href="/assets/frontend/theme_3/lib/steps/jquery-steps.css">
    @stack('style')
{{--    jquery--}}
    <script src="/assets/frontend/theme_3/lib/jquery/jquery.min.js"></script>
{{--    jquery--}}
    <script src="/assets/frontend/theme_3/lib/bootstrap/bootstrap.min.js"></script>
    <script src="/assets/frontend/theme_3/lib/date-picker/bootstrap-datetimepicker.min.js"></script>
    <script src="/assets/frontend/theme_3/lib/bootstrapdatepicker/bootstrap-datepicker.min.js"></script>
    <script src="/assets/frontend/theme_3/lib/lazyload/lazyloadGen.js"></script>
    <script src="/assets/frontend/theme_3/lib/toastr/toastr.min.js"></script>
    <script src="/assets/frontend/theme_3/lib/sweetalert2/sw2.js"></script>
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
</head>
<body>
@if(setting('sys_google_tag_manager_body') != '')
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id={{setting('sys_google_tag_manager_body') }}"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
@endif

    @include('frontend.layouts.includes.header')
    <div class="content" style="">
        @yield('content')
    </div>
    @include('frontend.layouts.includes.footer')

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

<script src="/assets/frontend/theme_3/lib/fancybox/fancybox.umd.js"></script>
<script src="/assets/frontend/theme_3/lib/fancybox/jquery.fancybox.min.js"></script>
<script src="/assets/frontend/theme_3/lib/OwlCarousel2/OwlCarousel2.min.js"></script>
<script src="/assets/frontend/theme_3/lib/slick/slick.min.js"></script>
<script src="/assets/frontend/theme_3/lib/swiper/swiper.min.js"></script>

</body>


</html>
