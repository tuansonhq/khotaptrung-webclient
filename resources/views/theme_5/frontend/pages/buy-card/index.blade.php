@extends('frontend.layouts.master')
@section('styles')
    <link rel="stylesheet" href="/assets/{{theme('')->theme_key}}/css/trong-style/distance.css">
    <link rel="stylesheet" href="/assets/{{theme('')->theme_key}}/css/trong-style/buy-card.css">
    <link rel="stylesheet" href="/assets/{{theme('')->theme_key}}/css/style_trong.css">
@endsection
@section('scripts')
    <script src="/assets/{{theme('')->theme_key}}/js/js_trong/buy-card.js"></script>
    <script src="/assets/{{theme('')->theme_key}}/js/js_trong/script_trong.js"></script>
    <script src="/assets/{{theme('')->theme_key}}/js/js_trong/input.js"></script>
@endsection
@section('content')
    <div class="container-fix container" id="buy-card">
        {{--        BANNER --}}
        <div class="poster__banner _mt-125 _mt-sm-0">
            <div class="swiper js--swiper__banner mb-n4">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="" class="banner__link">
                            <img src="/assets/{{theme('')->theme_key}}/image/buy-card/Rectangle 4.png" class="banner__image" alt="POSTER BANNER">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="" class="banner__link">
                            <img src="/assets/{{theme('')->theme_key}}/image/buy-card/Rectangle 4.png" class="banner__image" alt="POSTER BANNER">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="" class="banner__link">
                            <img src="/assets/{{theme('')->theme_key}}/image/buy-card/Rectangle 4.png" class="banner__image" alt="POSTER BANNER">
                        </a>
                    </div>
                </div>
                <div class="swiper-pagination --custom"></div>
            </div>
        </div>
        {{--        END BANNER--}}
        {{--breadcrum--}}
        <ul class="breadcrum--list">
            <li class="breadcrum--item">
                <a href="/" class="breadcrum--link">Trang chủ</a>
            </li>
            <li class="breadcrum--item">
                <a href="/mua-the" class="breadcrum--link">Mua thẻ</a>
            </li>
        </ul>
        {{-- end breadcrum--}}
        <div class="row mx-0">
            {{--            NAV CATEGORY--}}
            <div class="col-lg-3 d-none d-lg-block pl-0 _pr-125">
                <div class="card --custom card__nav">
                    <div class="card--head _py-075 pl-3">
                        <div class="card--title">Danh mục thẻ</div>
                    </div>
                    <div class="card--body">
                        <a class="section--card p-lg-3" data-toggle="collapse" href="#card--game__nav" role="button"
                           aria-expanded="true">
                            <span class="section--card__title">
                                THẺ GAME
                            </span>
                            <span class="d-flex align-items-center">
                                <i class="__icon --arrow --path__custom" style="--path : url(/assets/{{theme('')->theme_key}}/image/icons/arrows/arrow-down.png)"></i>
                            </span>
                        </a>
                        <ul class="collapse card-list show" id="card--game__nav">
                            <li class="card-item">
                                <a href="/mua-the-garena" class="card-item_link">
                                    <div class="card-item_thumb mr-2">
                                        <img src="/assets/{{theme('')->theme_key}}/image/cards-logo-sm/garena.png"
                                             alt="">
                                    </div>
                                    <span class="card-item_name">
                                        Thẻ Garena
                                    </span>
                                </a>
                            </li>
                            <li class="card-item">
                                <a href="/mua-the-garena" class="card-item_link">
                                    <div class="card-item_thumb mr-2">
                                        <img src="/assets/{{theme('')->theme_key}}/image/cards-logo-sm/gate.png" alt="">
                                    </div>
                                    <span class="card-item_name">
                                        Thẻ Gate
                                    </span>
                                </a>
                            </li>
                            <li class="card-item">
                                <a href="/mua-the-garena" class="card-item_link">
                                    <div class="card-item_thumb mr-2">
                                        <img src="/assets/{{theme('')->theme_key}}/image/cards-logo-sm/zing.png"
                                             alt="">
                                    </div>
                                    <span class="card-item_name">
                                        Thẻ Zing
                                    </span>
                                </a>
                            </li>
                            <li class="card-item">
                                <a href="/mua-the-garena" class="card-item_link">
                                    <div class="card-item_thumb mr-2">
                                        <img src="/assets/{{theme('')->theme_key}}/image/cards-logo-sm/vcoin.png"
                                             alt="">
                                    </div>
                                    <span class="card-item_name">
                                        Thẻ Vcoin
                                    </span>
                                </a>
                            </li>
                            <li class="card-item">
                                <a href="/mua-the-garena" class="card-item_link">
                                    <div class="card-item_thumb mr-2">
                                        <img src="/assets/{{theme('')->theme_key}}/image/cards-logo-sm/bit.png"
                                             alt="">
                                    </div>
                                    <span class="card-item_name">
                                        Thẻ BIT
                                    </span>
                                </a>
                            </li>
                            <li class="card-item">
                                <a href="/mua-the-garena" class="card-item_link">
                                    <div class="card-item_thumb mr-2">
                                        <img src="/assets/{{theme('')->theme_key}}/image/cards-logo-sm/ongame.png"
                                             alt="">
                                    </div>
                                    <span class="card-item_name">
                                        Thẻ Ongame
                                    </span>
                                </a>
                            </li>
                        </ul>

                        <a class="section--card p-lg-3" data-toggle="collapse" href="#card--phone__nav" role="button"
                           aria-expanded="true">
                            <span class="section--card__title">
                                THẺ ĐIỆN THOẠI
                            </span>
                            <span class="d-flex align-items-center">
                                <i class="__icon --arrow --path__custom"
                                   style="--path : url(/assets/{{theme('')->theme_key}}/image/icons/arrows/arrow-down.png)"></i>
                            </span>
                        </a>
                        <ul class="collapse card-list show" id="card--phone__nav">
                            <li class="card-item">
                                <a href="/mua-the-garena" class="card-item_link">
                                    <div class="card-item_thumb mr-2">
                                        <img src="/assets/{{theme('')->theme_key}}/image/cards-logo-sm/viettel.png"
                                             alt="">
                                    </div>
                                    <span class="card-item_name">
                                        Thẻ Viettel
                                    </span>
                                </a>
                            </li>
                            <li class="card-item">
                                <a href="/mua-the-garena" class="card-item_link">
                                    <div class="card-item_thumb mr-2">
                                        <img src="/assets/{{theme('')->theme_key}}/image/cards-logo-sm/mobifone.png"
                                             alt="">
                                    </div>
                                    <span class="card-item_name">
                                        Thẻ Mobifone
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            {{--            END NAV CATEGORY--}}

{{--            PAGE TITLE MOBILE--}}
            <div class="card --custom col-12 d-block d-lg-none">
                <div class="page--mobile__title">
                    Danh mục thẻ
                </div>
            </div>
{{--            END PAGE TITLE MOBILE--}}

            {{--            PAGE CONTENT--}}
            <div class="col-12 col-lg-9 p-0 page--card__content">
                {{--            CARD GAME --}}
                <div class="card --custom _mb-125 _mb-sm-075 px-3 px-lg-0" id="card-game">
                    <div class="card--head px-lg-3 _py-075">
                        <div class="card--title">
                            Thẻ Game
                        </div>
                    </div>
                    <div class="card--body p-lg-2">
                        <div class="row mx-lg-0 _px-sm-075 _pb-sm-075">
                            <div class="col-4 col-lg-3 px-1 px-lg-2 mb-lg-2">
                                <a href="/mua-the-garena" class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/{{theme('')->theme_key}}/image/cards-logo/garena.png"
                                             class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name" style="--bg-color: #CC2829;">
                                        Thẻ Garena
                                    </div>
                                </a>
                            </div>
                            <div class="col-4 col-lg-3 px-1 px-lg-2 mb-lg-2">
                                <a href="/mua-the-garena"  class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/{{theme('')->theme_key}}/image/cards-logo/gate.png"
                                             class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name" style="--bg-color: #E02729;">
                                        Thẻ Gate
                                    </div>
                                </a>
                            </div>
                            <div class="col-4 col-lg-3 px-1 px-lg-2 mb-lg-2">
                                <a href="/mua-the-garena" class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/{{theme('')->theme_key}}/image/cards-logo/zing.png"
                                             class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name" style="--bg-color: #009DDC;">
                                        Thẻ Zing
                                    </div>
                                </a>
                            </div>
                            <div class="col-4 col-lg-3 px-1 px-lg-2 mb-lg-2">
                                <a href="/mua-the-garena" class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/{{theme('')->theme_key}}/image/cards-logo/vcoin.png"
                                             class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name" style="--bg-color: #F7941D;">
                                        Thẻ Vcoin
                                    </div>
                                </a>
                            </div>
                            <div class="col-4 col-lg-3 px-1 px-lg-2 mb-lg-2">
                                <a href="/mua-the-garena" class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/{{theme('')->theme_key}}/image/cards-logo/bit.png"
                                             class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name" style="--bg-color: #071D59;">
                                        Thẻ BIT
                                    </div>
                                </a>
                            </div>
                            <div class="col-4 col-lg-3 px-1 px-lg-2 mb-lg-2">
                                <a href="/mua-the-garena" class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/{{theme('')->theme_key}}/image/cards-logo/ongame.png"
                                             class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name" style="--bg-color: #C64977;">
                                        Thẻ Ongame
                                    </div>
                                </a>
                            </div>
                            <div class="col-4 col-lg-3 px-1 px-lg-2 mb-lg-2">
                                <a href="/mua-the-garena" class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/{{theme('')->theme_key}}/image/cards-logo/scoin.png"
                                             class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name" style="--bg-color: #616A78;">
                                        Thẻ S-coin
                                    </div>
                                </a>
                            </div>
                            <div class="col-4 col-lg-3 px-1 px-lg-2 mb-lg-2">
                                <a href="/mua-the-garena" class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/{{theme('')->theme_key}}/image/cards-logo/appota.png"
                                             class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name" style="--bg-color: #0095DA;">
                                        Thẻ Appota
                                    </div>
                                </a>
                            </div>
                            <div class="col-4 col-lg-3 px-1 px-lg-2 mb-lg-2">
                                <a href="/mua-the-garena" class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/{{theme('')->theme_key}}/image/cards-logo/kulgame.png"
                                             class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name" style="--bg-color: #F16612;">
                                        Thẻ Kul Game
                                    </div>
                                </a>
                            </div>
                            <div class="col-4 col-lg-3 px-1 px-lg-2 mb-lg-2">
                                <a href="/mua-the-garena" class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/{{theme('')->theme_key}}/image/cards-logo/funcard.png"
                                             class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name" style="--bg-color: #F14308;">
                                        Thẻ Funcard
                                    </div>
                                </a>
                            </div>
                            <div class="col-4 col-lg-3 px-1 px-lg-2 mb-lg-2">
                                <a href="/mua-the-garena" class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/{{theme('')->theme_key}}/image/cards-logo/sohacoin.png"
                                             class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name" style="--bg-color: #76AB09;">
                                        Thẻ Sohacoin
                                    </div>
                                </a>
                            </div>
                            <div class="col-4 col-lg-3 px-1 px-lg-2 mb-lg-2">
                                <a href="/mua-the-garena" class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/{{theme('')->theme_key}}/image/cards-logo/gosu.png"
                                             class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name" style="--bg-color: #F07D4C;">
                                        Thẻ Gosu
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                {{--            END CARD GAME--}}

                {{--            CARD PHONE--}}
                <div class="card --custom _mb-125 _mb-sm-075 px-3 px-lg-0" id="card-phone">
                    <div class="card--head px-lg-3 _py-075">
                        <div class="card--title">
                            Thẻ Điện Thoại
                        </div>
                    </div>
                    <div class="card--body p-lg-2">
                        <div class="row mx-lg-0 _px-sm-075 _pb-sm-075">
                            <div class="col-4 col-lg-3 px-1 px-lg-2 mb-lg-2">
                                <a href="/mua-the-garena" class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/{{theme('')->theme_key}}/image/cards-logo/viettel.png" class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name" style="--bg-color: #EC2B2D;">
                                        Viettel
                                    </div>
                                </a>
                            </div>
                            <div class="col-4 col-lg-3 px-1 px-lg-2 mb-lg-2">
                                <a href="/mua-the-garena" class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/{{theme('')->theme_key}}/image/cards-logo/mobifone.png"
                                             class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name" style="--bg-color: #0060AF;">
                                       Mobifone
                                    </div>
                                </a>
                            </div>
                            <div class="col-4 col-lg-3 px-1 px-lg-2 mb-lg-2">
                                <a href="/mua-the-garena" class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/{{theme('')->theme_key}}/image/cards-logo/gmobile.png"
                                             class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name" style="--bg-color: #EFB209;">
                                        Gmobile
                                    </div>
                                </a>
                            </div>
                            <div class="col-4 col-lg-3 px-1 px-lg-2 mb-lg-2">
                                <a href="/mua-the-garena" class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/{{theme('')->theme_key}}/image/cards-logo/vinaphone.png"
                                             class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name" style="--bg-color: #00A1E4;">
                                        Vinaphone
                                    </div>
                                </a>
                            </div>
                            <div class="col-4 col-lg-3 px-1 px-lg-2 mb-lg-2">
                                <a href="/mua-the-garena" class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/{{theme('')->theme_key}}/image/cards-logo/vietnammobile.png"
                                             class="card--thumb__image py-1 py-lg-0" alt="">
                                    </div>
                                    <div class="card--name" style="--bg-color: #F48132;">
                                        Vietnammobile
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                {{--            END CARD PHONE--}}

                {{--            SERVICE RELATED--}}
                <div class="card --custom _mb-125 _mb-sm-075 p-3 p-lg-0" id="service-related">
                    <div class="card--header _m-125 _m-sm-0 _pb-125">
                        <div class="card--header__title">
                            <img width="24" height="24" src="/assets/{{theme('')->theme_key}}/image/icons/icon-title-service-related-buy-card.png"
                                 class="mr-2 d-block d-lg-none" alt="icon">
                            <h4>Các dịch vụ liên quan</h4>
                        </div>
                        <div class="card--header__tools">
                            <a href="/tin-tuc/slug" class="global__link">Xem thêm<i class="__icon --sm --link ml-1"
                                                                                    style="--path : url(/assets/{{theme('')->theme_key}}/image/icons/arrow-right-blue.png)"></i></a>
                        </div>
                    </div>
                    <div class="card--body px-lg-3">
                        <div class="swiper js-swipe-service overflow-hidden mb-lg-3">
                            <div class="swiper-wrapper service--wrap">
                                <div class="swiper-slide service--item">
                                    <div class="service--thumb">
                                        <a href="">
                                            <img src="/assets/{{theme('')->theme_key}}/image/mua-the/frame-6105.png"
                                                 class="service--thumb__image" alt="">
                                        </a>
                                    </div>
                                    <a href="" class="service--name p-lg-2 mt-3 mt-lg-2">
                                        Vòng quay may mắn
                                    </a>
                                </div>
                                <div class="swiper-slide service--item">
                                    <div class="service--thumb">
                                        <a href="">
                                            <img src="/assets/{{theme('')->theme_key}}/image/mua-the/frame-6105.png"
                                                 class="service--thumb__image" alt="">
                                        </a>
                                    </div>
                                    <a href="" class="service--name p-lg-2 mt-lg-2">
                                        Vòng quay may mắn
                                    </a>
                                </div>
                                <div class="swiper-slide service--item">
                                    <div class="service--thumb">
                                        <a href="">
                                            <img src="/assets/{{theme('')->theme_key}}/image/mua-the/frame-6105.png"
                                                 class="service--thumb__image" alt="">
                                        </a>
                                    </div>
                                    <a href="" class="service--name p-lg-2 mt-lg-2">
                                        Vòng quay may mắn
                                    </a>
                                </div>
                                <div class="swiper-slide service--item">
                                    <div class="service--thumb">
                                        <a href="">
                                            <img src="/assets/{{theme('')->theme_key}}/image/mua-the/frame-6105.png"
                                                 class="service--thumb__image" alt="">
                                        </a>
                                    </div>
                                    <a href="" class="service--name p-lg-2 mt-lg-2">
                                        Vòng quay may mắn
                                    </a>
                                </div>
                                <div class="swiper-slide service--item">
                                    <div class="service--thumb">
                                        <a href="">
                                            <img src="/assets/{{theme('')->theme_key}}/image/mua-the/frame-6105.png"
                                                 class="service--thumb__image" alt="">
                                        </a>
                                    </div>
                                    <a href="" class="service--name p-lg-2 mt-lg-2">
                                        Vòng quay may mắn
                                    </a>
                                </div>
                                <div class="swiper-slide service--item">
                                    <div class="service--thumb">
                                        <a href="">
                                            <img src="/assets/{{theme('')->theme_key}}/image/mua-the/frame-6105.png"
                                                 class="service--thumb__image" alt="">
                                        </a>
                                    </div>
                                    <a href="" class="service--name p-lg-2 mt-lg-2">
                                        Vòng quay may mắn
                                    </a>
                                </div>
                                <div class="swiper-slide service--item">
                                    <div class="service--thumb">
                                        <a href="">
                                            <img src="/assets/{{theme('')->theme_key}}/image/mua-the/frame-6105.png"
                                                 class="service--thumb__image" alt="">
                                        </a>
                                    </div>
                                    <a href="" class="service--name p-lg-2 mt-lg-2">
                                        Vòng quay may mắn
                                    </a>
                                </div>
                                <div class="swiper-slide service--item">
                                    <div class="service--thumb">
                                        <a href="">
                                            <img src="/assets/{{theme('')->theme_key}}/image/mua-the/frame-6105.png"
                                                 class="service--thumb__image" alt="">
                                        </a>
                                    </div>
                                    <a href="" class="service--name p-lg-2 mt-lg-2">
                                        Vòng quay may mắn
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--            END SERVICE RELATED--}}

                {{--                SERVICE DESC--}}
                <div class="card --custom p-3 p-lg-3">
                    <div class="card--desc__title mb-4">
                        Mô tả dịch vụ
                    </div>
                    <div class="card--desc__content content-video-in-add p-0    ">
                        <h5>Thẻ Garena là gì ?</h5>
                        Thẻ Garena (thẻ sò) là một loại thẻ game được phát hành bởi Garena. Đây là một nhà phát hành game dù
                        ra đời muộn hơn so với các nhà phát hành game lâu đời tại Việt Nam như FPT Gate, Vinagame, VTC,…
                        nhưng cộng đồng Garena lại vô cùng đông đảo bởi NPH liên tục ra mắt những tựa game vô cùng hấp dẫn
                        như Liên Minh Huyền Thoại; Chiến Cơ Huyền Thoại; Fifa online 3,4; Free Fire, Balde and Soul,... Để
                        phục vụ game thủ nhà phát hành này đã tạo ra loại thẻ của riêng họ gọi là thẻ Garena.
                        <br>
                        <br>
                        Game thủ sử dụng thẻ Sò (thẻ garena) với mục đích nạp tiền cho các game online do nhà phát hành game
                        này cung cấp. Khi nạp thành công, người chơi có thể dùng quy đổi ra tiền trong từng game ( FC, MC
                        Fifa ; RP liên minh huyền thoại; Kim cương Free Fire và Blade and Soul ) dùng để mua vật phẩm, trang
                        phục, nâng cấp nhân vật, … tạo sự hấp dẫn, đẹp mắt khi chơi game. Mặc dù việc này sẽ khiến cho gamer
                        khá tốn kém, nhưng trước sức hấp dẫn không thể cưỡng lại của game và các vật phẩm thì chắc chắn các
                        game thủ vẫn sẵn sàng chi ra một số tiền nhất định để mua thẻ game trong các trò chơi của mình.
                        <br>
                        <br>
                        Thẻ Garena hiện nay được bán ở khá nhiều nơi như: tiệm nét, cửa hàng tiện lợi, một số trung tâm điện
                        máy lớn, qua app, trang web trực tuyến,... Nhưng để tiện lợi và nhanh nhất nhiều người sẽ chọn
                        phương thức mua trực tuyến trên các website bán thẻ online. Điều quan trọng nhất khi mua thẻ Garena
                        online là các bạn phải biết được những cách mua thẻ game hiệu quả để vừa phục vụ nhanh chóng nhu cầu
                        chơi game. Hơn thế nữa, có thể giúp bạn tiết kiệm ngân sách và chi phí khi chọn được nơi mua thẻ
                        game trực tuyến uy tín và có nhiều chương trình ưu đãi.
                        <br>
                        <br>
                        Điều đặc biệt là website thegarenagiare.com không chỉ có bán thẻ Garena mà còn có tất cả các loại
                        thẻ như: Vcoin, Funcard, Soha, Scoin, Gate, Appota, Zing, Carot,... và cả thẻ điện thoại nữa. Và sau
                        đây chúng tôi sẽ giới thiệu đến bạn các cách mua thẻ Garena đơn giản và hiệu quả trên thị trường và
                        tại web nhé !
                        <br>
                        <br>
                        <h5>1. Những hình thức mua thẻ Garena thông dụng hiện nay</h5>
                        Như những gì chúng ta đã khẳng định, thế giới thẻ game online ngày một đa dạng trước sự ra đời của
                        nhiều thể loại game trực tuyến, vì vậy lẽ dĩ nhiên bạn sẽ có nhiều phương pháp mua thẻ game và đặc
                        biệt là thẻ Garena. Để chọn sử dụng lấy một hình thức thuận tiện mỗi khi cần. Sau đây,
                        thegarenagiare.com sẽ gửi tới bạn một số cách thức mua thẻ game phổ biến và mang lại hiệu quả phục
                        vụ người dùng tốt nhất.
                    </div>
                    <div class="col-md-12 left-right text-center js-toggle-content">
                        <div class="view-more">
                            <span class="global__link">Xem thêm<i class="__icon --sm --link ml-1" style="--path : url(/assets/{{theme('')->theme_key}}/image/icons/arrow-down.png)"></i></span>
                        </div>
                        <div class="view-less" style="display: none;">
                            <span class="global__link">Thu gọn<i class="__icon --sm --link ml-1" style="--path : url(/assets/{{theme('')->theme_key}}/image/icons/iconright.png)"></i></span>
                        </div>
                    </div>
                </div>
                {{--                END SERVICE DESC--}}

            </div>
            {{--            END PAGE CONTENT--}}
        </div>
    </div>
@endsection
