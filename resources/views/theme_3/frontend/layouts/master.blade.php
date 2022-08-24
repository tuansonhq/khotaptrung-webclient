<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=0, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('meta_robots')
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta name="path" content=""/>
    <meta name="jwt" content="jwt"/>
    {{--    <meta name="google-site-verification" content="{{setting('sys_google_search_console')}}" />--}}
    @if(setting('sys_google_search_console') != '')
        <meta name="google-site-verification" content="{{setting('sys_google_search_console')}}" />
    @endif
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
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

    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/css_nam/style.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/css_nam/lib_bootstrap.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/css_nam/minigame.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/style_son.css?v={{time()}}">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/style_trong.css?ver={{time()}}">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/style_duong.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/style_phu/form_element.css">

    @if (!\App\Library\AuthCustom::check())
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/style_phu/login_modal.css">
    @endif

{{--    import css --}}
    @yield('styles')

    <script src="/assets/frontend/{{theme('')->theme_key}}/lib/jquery/jquery.min.js"></script>
    <script src="/assets/frontend/{{theme('')->theme_key}}/lib/bootstrap/bootstrap.min.js"></script>

    <script src="/assets/frontend/{{theme('')->theme_key}}/lib/lazyload/lazyloadGen.js"></script>
    <script src="/assets/frontend/{{theme('')->theme_key}}/lib/toastr/toastr.min.js"></script>
    <script src="/assets/frontend/{{theme('')->theme_key}}/lib/sweetalert2/sw2.js"></script>
    <script src="/assets/frontend/{{theme('')->theme_key}}/lib/select-nice/select-nice.js"></script>
    <script src="/assets/frontend/{{theme('')->theme_key}}/lib/popper/popper.min.js"></script>
    <script src="/assets/frontend/{{theme('')->theme_key}}/lib/popper/tippy-bundle.umd.js"></script>
    <script src="/assets/frontend/{{theme('')->theme_key}}/lib/steps/jquery-steps.js"></script>
    <script src="/assets/frontend/{{theme('')->theme_key}}/lib/easeJquery/easing.js"></script>
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/account_info.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.0/handlebars.min.js"></script>

    @if(setting('sys_google_tag_manager_head') != '')

        @foreach(explode('|',setting('sys_google_tag_manager_head')) as $tag => $sys)
            @if($tag == 0)
            <!-- Google Tag Manager -->
                <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
                    })(window,document,'script','dataLayer','{{ $sys }}');</script>
                <!-- End Google Tag Manager -->
            @elseif($tag == 1)
            <!-- Hubjs Tag Manager -->
                <script type="text/javascript">
                    var _mtm = window._mtm = window._mtm || [];
                    _mtm.push({'mtm.startTime': (new Date().getTime()), 'event': 'mtm.Start'});
                    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
                    g.type='text/javascript'; g.async=true; g.src='https://analytics.hub-js.com/js/container_{{ $sys }}.js'; s.parentNode.insertBefore(g,s);
                </script>
                <!-- End Hubjs Tag Manager -->
            @endif
        @endforeach

    @endif
</head>
<body>
@if(setting('sys_google_tag_manager_body') != '')
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id={{setting('sys_google_tag_manager_body') }}"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
@endif

<!-- Modal nạp tiền -->

<div class="modal fade show" id="rechargeModal" aria-modal="true">
    <div class="modal-dialog modal-lg modal-dialog-centered animated">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">Nạp tiền</div>
                <button type="button" class="close" data-dismiss="modal"></button>
            </div>
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" data-toggle="tab" href="#tab-modal-recharge" role="tab"
                       aria-selected="true">Nạp thẻ</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" data-toggle="tab" href="#tab-modal-atm" role="tab"
                       aria-selected="false">ATM</a>
                </li>
                {{--<li class="nav-item" role="presentation">
                    <a class="nav-link" data-toggle="tab" href="#tab-modal-wallet" role="tab"
                       aria-selected="false">Ví điện tử</a>
                </li>--}}
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade active show" id="tab-modal-recharge" role="tabpanel">
                    <form action="{{route('postTelecomDepositAuto')}}" id="modal-form-charge">
                        @csrf
                    <div class="modal-body">
                            <div class="t-sub-2 mb-2">Nhà cung cấp</div>
                            <select name="type" class="mb-fix-12" id="modal-telecom">
                                <!-- JS PASTE CODE HERE -->
                            </select>

                            <div class="t-sub-2 mb-2">Chọn mệnh giá</div>
                            <div class="list-card-deno" id="modal-amounts">
                                <!-- JS PASTE CODE HERE -->
                            </div>

                            <div class="t-sub-2 mb-2">Mã số thẻ</div>
                            <input autocomplete="off" class="input-form w-100 mb-fix-12" name="pin" type="text" placeholder="Nhập mã số thẻ" required="">

                            <div class="t-sub-2 mb-2">Số seri</div>
                            <input autocomplete="off" class="input-form w-100 mb-fix-12" name="serial" type="text" placeholder="Nhập số seri thẻ" required="">

                            <div class="default-form-group">
                                <label class="text-form">Mã bảo vệ</label>
                                <div class="row p-0">
                                    <div class="col-md-12 d-flex ">
                                        <input class="input-form w-100" name="captcha" type="text" placeholder="Nhập mã bảo vệ" required>
                                        <div class="captcha captcha_1">
                                            <span class="reload">
                                                {!! captcha_img('flat') !!}
                                            </span>
                                        </div>
                                        <button class="refresh-captcha" id="modal-reload-captcha" type="button">
                                            <img src="/assets/frontend/{{theme('')->theme_key}}/img/captcha_refresh.png" alt="">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        <div class="text-invalid message-form mt-2"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn -primary btn-big submit-modal-form-charge">Nạp tiền</button>
                    </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="tab-modal-atm" role="tabpanel">
                    <div class="modal-body">
                        <form action="">
                            <div class="box-charge-card">
                                {{--                                            <div class="atm-card-title mb-fix-20">--}}
                                {{--                                                <span>Để hoàn tất đơn nạp, bạn vui lòng chuyển khoản theo cú pháp sau:</span>--}}
                                {{--                                            </div>--}}
                                <div class="dialog--content mb-fix-20">
                                    <div class="card--gray">
                                        @if (setting('sys_tranfer_content') != "")
                                            {!! setting('sys_tranfer_content') !!}
                                        @endif
                                        <div class="card--attr transfer-title">
                                            <div class="card--attr__name">
                                                Nội dung chuyển tiền
                                            </div>
                                            <div class="card--attr__value d-flex">
                                                <div class="card__info transfer-code mr-3" id=""></div>

                                                <div class="icon--coppy js-copy-text" aria-describedby="tippy-7" >
                                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/copy-black.png" alt="">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                {{--<div class="tab-pane fade" id="tab-modal-wallet" role="tabpanel">

                </div>--}}
            </div>
        </div>
    </div>
</div>

@include('frontend.widget.modal.__success_charge')
<!-- end modal charge -->


<div class="modal-loader-container">
    <div class="modal-loader-content">
        <span class="modal-loader-spin"></span>
    </div>
</div>
@include('frontend.layouts.includes.header')
<div class="layout">


    <div class="content" style="">
        @yield('content')
    </div>


</div>
@if(Request::is('/'))
    <style>
        @media (max-width: 992px){
            .content{
                padding-bottom: 1rem;
            }
        }
    </style>
@include('frontend.layouts.includes.footer')

@endif
@include('frontend.widget.__theme')
<!-- Messenger Plugin chat Code -->
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

@if (!\App\Library\AuthCustom::check())
<script src="/assets/frontend/{{theme('')->theme_key}}/js/js_phu/login_modal.js"></script>
@endif
<script src="/assets/frontend/{{theme('')->theme_key}}/lib/fancybox/fancybox.umd.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/lib/fancybox/jquery.fancybox.min.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/lib/OwlCarousel2/OwlCarousel2.min.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/lib/slick/slick.min.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/lib/swiper/swiper.min.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/js/js_nam/main.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/js/js_nam/swiper.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/lib/date-picker/moment.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/lib/date-picker/i18n/vi.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/lib/date-picker/bootstrap-datetimepicker.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/js/js_trong/modal-charge.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/js/transfer/transfer.js?v={{time()}}"></script>
{{--impport script--}}
@yield('scripts')
</body>


</html>
