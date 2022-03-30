<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="jwt" content="" />
{{--    <title>Kho lưu trữ</title>--}}

    <link rel="stylesheet" href="/assets/frontend/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <!--    swiper-->
    <link rel="shortcut icon" href="/assets/frontend/images/icon_logo.png">
    <link rel="stylesheet" href="/assets/frontend/lib/swiper/swiper.min.css">
    <link rel="stylesheet" href="/assets/frontend/lib/animate/animate.min.css">
    <link rel="stylesheet" href="/assets/frontend/css/buyacc.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <link rel="stylesheet" href="/assets/frontend/lib/OwlCarousel2/owl.carousel.min.css">
    <!--    bootstrap-->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/frontend/lib/bootstrap/bootstrap.min.css">
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <!--    gallery-->
    <link rel="stylesheet" href="/assets/frontend/lib/steps/jquery-steps.css">
    <link rel="stylesheet" href="/assets/frontend/lib/select-nice/select-nice.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/frontend/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="/assets/frontend/lib/bootstrapdatepicker/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="/assets/frontend/lib/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" href="/assets/frontend/lib/fancybox/fancybox.css">
    <link rel="stylesheet" href="/assets/frontend/lib/fixed-sticky/fixedsticky.css">
    <link rel="stylesheet" href="/assets/frontend/lib/bootstrap-popover/bootstrap-popover-x.css">
    <link rel="stylesheet" href="/assets/frontend/lib/date-picker/tui-date-picker.css">
    <link rel="stylesheet" href="/assets/frontend/css/news.css">
    <link rel="stylesheet" href="/assets/frontend/css/account.css">
    <link rel="stylesheet" href="/assets/frontend/css/spin.css">
    <link rel="stylesheet" href="/assets/frontend/lib/toastr/toastr.css">
    <link rel="stylesheet" href="/assets/frontend/lib/steps/jquery-steps.css">
    <link rel="stylesheet" href="/assets/frontend/css/main.css">
    @stack('style')

    <script src="/assets/frontend/lib/jquery.min.js"></script>
    <script src="/assets/frontend/lib/bootstrap/bootstrap.min.js"></script>
    <script src="/assets/frontend/lib/moment/moment.min.js"></script>

    <script src="/assets/frontend/lib/bootstrap-popover/bootstrap-popover.js"></script>

    <script src="/assets/frontend/js/bootstrap-datetimepicker.min.js"></script>
    <script src="/assets/frontend/lib/toastr/toastr.min.js"></script>
    <script src="/assets/frontend/lib/bootstrapdatepicker/bootstrap-datepicker.min.js"></script>

    <script src="/assets/frontend/lib/rateit/jquery.barrating.min.js"></script>
    <script src="/assets/frontend/lib/rateit/examples.js"></script>

    <script src="/assets/frontend/lib/steps/jquery-steps.js"></script>
    <script src="/assets/frontend/lib/lazyload/lazyloadGen.js"></script>

    <script src="/assets/frontend/lib/select-nice/select-nice.js"></script>
    <script src="/assets/frontend/lib/easeJquery/easing.js"></script>
    <script src="/assets/frontend/lib/record/record.js"></script>
    <script src="/assets/frontend/js/sweetalert.min.js"></script>
    <script src="/assets/frontend/js/account_info.js"></script>
    @stack('js')


    @yield('seo_head')
        @if(Request::is('/'))
        <style>
            .content{
                padding-top: 140px;
            }
            @media only screen and (max-width: 1024px) {
                .content {
                    padding-top: 80px;
                }
            }
        </style>
    @else
        <style>
            .content{
                padding-top: 120px;
            }
            @media only screen and (max-width: 1024px) {
                .content {
                    padding-top: 100px;
                }
            }
        </style>
        @endif

</head>
<body>
<div class="{{ Request::is('/')?'main-lay-out':'' }}">
    @include('frontend.layouts.includes.header')
    <div class="content" style="">
        @yield('content')
    </div>
</div>
<div class="go-top">
    <i class="fas fa-arrow-alt-circle-up"></i>
</div>


@include('frontend.layouts.includes.footer')
<script src="/assets/frontend/lib/fancybox/fancybox.umd.js"></script>
<script src="/assets/frontend/lib/fancybox/jquery.fancybox.min.js"></script>

<script src="/assets/frontend/lib/OwlCarousel2/OwlCarousel2.min.js"></script>
<script src="/assets/frontend/lib/slick/slick.min.js"></script>

<script src="/assets/frontend/js/action.js"></script>
<script src="/assets/frontend/lib/swiper/swiper.min.js"></script>

<script src="/assets/frontend/js/swiper.js"></script>
<script src="/assets/frontend/js/jquery.cookie.min.js"></script>
<script src="/assets/frontend/js/account/account-list.js"></script>
<script src="/assets/frontend/js/account/buyacc.js"></script>

</body>


</html>
