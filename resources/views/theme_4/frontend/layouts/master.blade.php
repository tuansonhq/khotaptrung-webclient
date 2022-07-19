
<!DOCTYPE html>
<html lang="vi">
<head>

    <meta charset="utf-8"/>
    <title>Nạp All Game Giá Rẻ, Uy Tín Số 1 Việt Nam</title>
    <meta name="description" content="Website nạp all game ( liên minh, liên quân, free fire, pubg mobile, tốc chiến, .... ) giá rẻ, uy tín số 1 Việt Nam với 50.000 lượt nạp thành công mỗi ngày. Napgamegiare.net - Địa chỉ nạp game tin cậy của game thủ Việt">
    <meta name="keywords" content="">
    <link rel="shortcut icon" href="/assets/frontend/{{theme('')->theme_key}}/image/nHOb2jr8HK_1626233668.jpg" type="image/x-icon">
    <link rel="canonical" href="https://napgamegiare.net">
    <meta name="robots" content="index,follow" />
    <meta name="author" content="napgamegiare.net"/>
    <meta content="" name="author"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://napgamegiare.net"/>
    <meta property="og:title" content="Nạp All Game Giá Rẻ, Uy Tín Số 1 Việt Nam"/>
    <meta property="og:description" content="Website nạp all game ( liên minh, liên quân, free fire, pubg mobile, tốc chiến, .... ) giá rẻ, uy tín số 1 Việt Nam với 50.000 lượt nạp thành công mỗi ngày. Napgamegiare.net - Địa chỉ nạp game tin cậy của game thủ Việt"/>
    <meta property="og:image" content="https://napgamegiare.netassets/frontend/images/image-share.jpg"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta name="jwt" content="jwt"/>
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/jquery-3.5.1.min.js"></script>
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/bootstrap.min.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="/assets/frontend/{{theme('')->theme_key}}/css/bootstrap.min.css" rel="stylesheet">
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <link href="/assets/frontend/{{theme('')->theme_key}}/css/style.css?v=10122021" rel="stylesheet">
    <link href="/assets/frontend/{{theme('')->theme_key}}/css/style_custom.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/assets/frontend/{{theme('')->theme_key}}/js/slick.js"/>
    <link rel="stylesheet" type="text/css" href="/assets/frontend/{{theme('')->theme_key}}/css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/frontend/{{theme('')->theme_key}}/css/slick-theme.css"/>

    <link rel="stylesheet" type="text/css" href="/assets/frontend/{{theme('')->theme_key}}/css/account.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/frontend/{{theme('')->theme_key}}/css/style_nam.css"/>

    <style>
        #txtPrice {

            width: 100%;
            background: rgb(238, 70, 35) !important;
            font-size: 13px;
            color: #ffffff;
            text-align: center;
            -webkit-border-radius: 8px;
            -moz-border-radius: 8px;
            -ms-border-radius: 8px;
            -o-border-radius: 8px;
            border-radius: 8px;
            border: 2px solid rgb(238, 70, 35) !important;
            padding: 11px 0;
            margin-top: 10px;
        }

        .btn-auth {
            width: 100%;
            background: #28a745;
            font-size: 13px;
            color: #ffffff;
            text-align: center;
            -webkit-border-radius: 8px;
            -moz-border-radius: 8px;
            -ms-border-radius: 8px;
            -o-border-radius: 8px;
            border-radius: 8px;
            border: 2px solid #28a745;
            padding: 11px 0;
            margin-top: 10px;
        }

        .btn-auth:hover {
            color: #ffffff;
        }

    </style>
</head>
<body>

<!-- End Google Tag Manager (noscript) -->
<div class="search-input_out">
    <div class="search-input_out_nav">
        <div class=" search-input_in">
            <i class="fas fa-arrow-left  icon-close"></i>

            <div class="search-input">
                <input class="input-search" id="txtSearchMobile" placeholder="Tìm kiếm" autocomplete="off" type="text">

            </div>
            <button class="icon-delete"><i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="search-input_in_content ">
        <div class="" id="result-search-mobile">

        </div>

        <div class="search-input_in_content-detail-load-more" style="display: none">
            <p>Xem thêm  <span><img src="/assets/frontend/{{theme('')->theme_key}}/image/xuocdoi_xuong.svg" alt=""></span></p>
        </div>
    </div>
</div>

@if(Session::has('check_login'))
    <script>
        $(document).ready(function () {
            $('#modal-login').modal('show');
            setTimeout(() => {
                $('#loginModal #modal-login-container').removeClass('right-panel-active');
            }, 200);

        });
    </script>
    @php
        Session::pull('check_login');
    @endphp
@endif
@if (!\App\Library\AuthCustom::check())
    @include('frontend.widget.modal.__login')
@endif
@include('frontend.layouts.includes.header')

@yield('content')

@include('frontend.layouts.includes.footer')

<style>
    .footer {
        border-top: 1px solid #eeeeee;
        padding: 14px 0;
        background: #fff;
        text-align: center;
    }
</style>

<!-- Messenger Plugin chat Code -->
<div id="fb-root"></div>

<!-- Your Plugin chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<div id="m_scroll_top" class="m-scroll-top">
    <i class="fas fa-arrow-up"></i>
</div>


<style>
    .m-scroll-top.show {
        display: block;
    }
    .m-scroll-top {
        width: 40px;
        height: 40px;
        position: fixed;
        bottom: 120px;
        right: 20px;
        cursor: pointer;
        text-align: center;
        vertical-align: middle;
        display: none;
        padding-top: 9px;
        z-index: 110;
        border-radius: 100%;
        background-color: #fff;
        box-shadow: 0 2px 6px 0 rgb(0 0 0 / 20%), 0 1px 1px 0 rgb(0 0 0 / 20%);
    }
</style>



<!-- Modal -->
<div class="modal fade" id="modal-atm" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <form method="POST" action="https://napgamegiare.net" accept-charset="UTF-8" enctype="multipart/form-data"><input name="_token" type="hidden" value="1d1UtKProIOHCYvd7GjOQ1mwzvuWei6FP3awwoKP">


                <div class="modal-header">
                    <div class="col-1"></div>
                    <div class="col-10 text-center"><h6 class="modal-title">Nạp tiền từ ATM/Ví điện tử</h6></div>
                    <div class="col-1 ">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>

                <div class="modal-body">
                    <div class="c-content-tab-4 c-opt-3" role="tabpanel">


                        <!--<div class="text-center" style="text-transform: uppercase;margin: 20px 0;"><a href="/huong-dan-mua-nick-bang-atm-tai-nickvn" style="color: #f31700 !important;font-size: 15px">Hướng dẫn chi tiết nạp tiền từ ATM - VÍ Tại đây</a></div>-->
                        <ul class="nav  justify-content-center atm-control" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#bank" role="tab" data-toggle="tab" class="c-font-16 active"  aria-expanded="true">ATM</a>
                            </li>
                            <li role="presentation" class="">
                                <a href="#wallet" role="tab" data-toggle="tab" class="c-font-16" aria-expanded="false">Ví điện tử</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in show" id="bank">
                                <div>
                                    <p style="text-align:center"><strong>&gt;&gt; <a href="https://napgamegiare.net/tin-tuc/huong-dan-nap-tien-vao-website-napgamegiarenet"><span style="color:#2980b9">Hướng dẫn nạp&nbsp;Game&nbsp;bằng ATM</span></a> &lt;&lt;</strong></p>

                                    <table align="center" border="1" cellpadding="10" cellspacing="1" class="table table-bordered table-striped">
                                        <tbody>
                                        <tr>
                                            <th colspan="2">T&ecirc;n chủ khoản: TRẦN VĂN SƠN</th>
                                            <th>Chi nh&aacute;nh</th>
                                        </tr>
                                        <tr>
                                            <td><strong>Vietcombank</strong></td>
                                            <th style="text-align:right"><strong>0491000165748</strong></th>
                                            <td style="text-align:center"><strong>H&Agrave; NỘI</strong></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Agribank</strong></td>
                                            <th style="text-align:right"><strong>1507205852938</strong></th>
                                            <td style="text-align:center"><strong>H&Agrave; NỘI</strong></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Techcombank</strong></td>
                                            <th style="text-align:right"><strong>19032691413020</strong></th>
                                            <td style="text-align:center"><strong>H&Agrave; NỘI</strong></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Mbbank</strong></td>
                                            <th style="text-align:right"><strong>0080114849007</strong></th>
                                            <td style="text-align:center"><strong>H&Agrave; NỘI</strong></td>
                                        </tr>
                                        <tr>
                                            <td><strong>VietinBank</strong></td>
                                            <th style="text-align:right"><strong>100873246867</strong></th>
                                            <td style="text-align:center"><strong>H&Agrave; NỘI</strong></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="tut-charge" style="background-color: #ffffff;padding-top: 15px">
                                    <p style="text-align:center"><span style="color:#000000">Nội dung thanh to&aacute;n:&nbsp;<strong>&nbsp;napgamegiare.net&nbsp;+&nbsp;{ID web hoặc T&ecirc;n TK đăng k&yacute;}</strong></span></p>

                                    <p style="text-align:center"><span style="color:#000000">Chuyển xong li&ecirc;n hệ fanpage :&nbsp;</span><u><a href="https://www.facebook.com/Na%CC%A3p-all-game-online-uy-ti%CC%81n-gia%CC%81-re%CC%89-101990968825701" target="_blank"><span style="color:#c0392b"><strong>Chăm S&oacute;c Kh&aacute;ch H&agrave;ng</strong></span></a></u><span style="color:#000000">&nbsp;hoặc Hotline&nbsp;<strong>0792.000.792</strong>&nbsp;để được xử l&yacute;</span></p>
                                </div>


                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="wallet">
                                <div>
                                    <p style="text-align:center"><strong>&gt;&gt; <a href="https://napgamegiare.net/tin-tuc/huong-dan-nap-tien-vao-website-napgamegiarenet"><span style="color:#2980b9">Hướng dẫn nạp&nbsp;Game&nbsp;bằng V&iacute; Điện Tử</span></a> &lt;&lt;</strong></p>

                                    <table align="center" border="1" cellpadding="10" cellspacing="1" class="table table-bordered table-striped">
                                        <tbody>
                                        <tr>
                                            <td><strong>Tsr (thesieure.com)</strong></td>
                                            <td style="text-align:center"><strong>dichvume</strong></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Azpro ( azpro.vn)</strong></td>
                                            <td style="text-align:center"><strong>dichvume</strong></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tut-charge" style="background-color: #ffffff;padding-top: 15px">
                                    <p style="text-align:center"><span style="color:#000000">Nội dung thanh to&aacute;n:&nbsp;<strong>&nbsp;napgamegiare.net&nbsp;+&nbsp;{ID web hoặc T&ecirc;n TK đăng k&yacute;}</strong></span></p>

                                    <p style="text-align:center"><span style="color:#000000">Chuyển xong li&ecirc;n hệ fanpage :&nbsp;</span><u><a href="https://www.facebook.com/Na%CC%A3p-all-game-online-uy-ti%CC%81n-gia%CC%81-re%CC%89-101990968825701" target="_blank"><span style="color:#c0392b"><strong>Chăm S&oacute;c Kh&aacute;ch H&agrave;ng</strong></span></a></u><span style="color:#000000">&nbsp;hoặc Hotline&nbsp;<strong>0792.000.792</strong>&nbsp;để được xử l&yacute;</span></p>
                                </div>


                            </div>
                        </div>
                    </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>

                </div>
            </form>

        </div>
    </div>
</div>

<script type="text/javascript" src="/assets/frontend/{{theme('')->theme_key}}/js/slick.min.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<script type="text/javascript" src="/assets/frontend/{{theme('')->theme_key}}/js/script.js"></script>
<script  type="text/javascript" src="/assets/frontend/{{theme('')->theme_key}}/js/account_info.js"></script>

<script>

    function formatNumber(num) {
        return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
    }

</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#btn-expand-content').on('click', function(e) {

            $('.special-text').toggleClass('-expanded');

            if ($('.special-text').hasClass('-expanded')) {
                $(this).html('Thu gọn nội dung');
            } else {
                $(this).html('Xem thêm nội dung');
            }
        });
    });

</script>

<!-- Messenger Plugin chat Code -->
<div id="fb-root"></div>

<!-- Your Plugin chat code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "101990968825701");
    chatbox.setAttribute("attribution", "biz_inbox");

    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v11.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
</body>
</html>
