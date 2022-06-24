@extends('frontend.layouts.master')
@section('styles')
    <link rel="stylesheet" href="/assets/{{env('THEME_VERSION')}}/css/trong-style/distance.css">
    <link rel="stylesheet" href="/assets/{{env('THEME_VERSION')}}/css/trong-style/buy-card.css">
    <link rel="stylesheet" href="/assets/{{env('THEME_VERSION')}}/css/style_trong.css">
@endsection
@section('scripts')
    <script src="/assets/{{env('THEME_VERSION')}}/js/js_trong/buy-card.js"></script>
    <script src="/assets/{{env('THEME_VERSION')}}/js/js_trong/script_trong.js"></script>
    <script src="/assets/{{env('THEME_VERSION')}}/js/js_trong/input.js"></script>
@endsection
@section('content')
    <div class="container-fix container" id="buy-card">
        {{--        BANNER --}}
        <div class="poster__banner _mt-125 _mt-sm-0 d-none d-lg-block">
            <div class="swiper js--swiper__banner mb-n4">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="">
                            <img src="/assets/{{env('THEME_VERSION')}}/image/buy-card/Rectangle 4.png"
                                 alt="POSTER BANNER">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <img src="/assets/{{env('THEME_VERSION')}}/image/buy-card/Rectangle 4.png"
                                 alt="POSTER BANNER">
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
            <li class="breadcrum--item">
                <a href="/mua-the-garena" class="breadcrum--link">Thẻ Garena</a>
            </li>
            <li class="breadcrum--item">
                <a href="/mua-the-garena-20k" class="breadcrum--link">Thẻ 20k</a>
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
                                <i class="__icon --arrow --path__custom" style="--path : url(/assets/{{env('THEME_VERSION')}}/image/icons/arrows/arrow-down.png)"></i>
                            </span>
                        </a>
                        <ul class="collapse card-list show" id="card--game__nav">
                            <li class="card-item active">
                                <a href="/mua-the-garena" class="card-item_link">
                                    <div class="card-item_thumb mr-2">
                                        <img src="/assets/{{env('THEME_VERSION')}}/image/cards-logo-sm/garena.png"
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
                                        <img src="/assets/{{env('THEME_VERSION')}}/image/cards-logo-sm/gate.png" alt="">
                                    </div>
                                    <span class="card-item_name">
                                        Thẻ Gate
                                    </span>
                                </a>
                            </li>
                            <li class="card-item">
                                <a href="/mua-the-garena" class="card-item_link">
                                    <div class="card-item_thumb mr-2">
                                        <img src="/assets/{{env('THEME_VERSION')}}/image/cards-logo-sm/zing.png"
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
                                        <img src="/assets/{{env('THEME_VERSION')}}/image/cards-logo-sm/vcoin.png"
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
                                        <img src="/assets/{{env('THEME_VERSION')}}/image/cards-logo-sm/bit.png"
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
                                        <img src="/assets/{{env('THEME_VERSION')}}/image/cards-logo-sm/ongame.png"
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
                                   style="--path : url(/assets/{{env('THEME_VERSION')}}/image/icons/arrows/arrow-down.png)"></i>
                            </span>
                        </a>
                        <ul class="collapse card-list show" id="card--phone__nav">
                            <li class="card-item">
                                <a href="/mua-the-garena" class="card-item_link">
                                    <div class="card-item_thumb mr-2">
                                        <img src="/assets/{{env('THEME_VERSION')}}/image/cards-logo-sm/viettel.png"
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
                                        <img src="/assets/{{env('THEME_VERSION')}}/image/cards-logo-sm/mobifone.png"
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

            {{--            PAGE CONTENT--}}
            <div class="col-12 col-lg-9 p-0 page--card__content">
                {{--                CARD SINGLE--}}
                <div class="card --custom _mb-125" id="card--value">
                    <div class="card--head card--mobile__title px-lg-3 _py-075">
                        <a href="/mua-the-garena" class="card--back d-lg-none d-block">
                            <img src="/assets/{{env('THEME_VERSION')}}/image/icons/back.png" alt="">
                        </a>
                        <h4 class="card--title">
                            Thẻ Garena 20K
                        </h4>
                    </div>
                    <div class="card--body p-lg-2 p-3">
                        <div class="row mx-lg-0">
                            <div class="col-12 col-lg-3 px-lg-2 mb-lg-4">
                                <span class="scratch-card col-8 col-lg-12 card--single">
                                    <div class="card--thumb">
                                        <img src="/assets/{{env('THEME_VERSION')}}/image/cards-logo/garena.png" class="card--thumb__image" alt="">
                                    </div>
                                    <div class="card--name" style="--bg-color: #CC2829;">
                                        20.000 VND
                                    </div>
                                </span>
                                <div class="card--deno my-lg-1">
                                    Mệnh giá 20.000 đ
                                </div>
                                <div class="card--unit__price">
                                    Đơn giá: 20.000 đ
                                </div>
                                <div class="card--amount _mt-075">
                                    <span class="card--amount__title">
                                        Số lượng
                                    </span>
                                    <div class="card--amount__group">
                                        <button class="btn--amount -minus js-amount" data-action="minus">
                                            <img src="/assets/{{env('THEME_VERSION')}}/image/icons/minus.png" alt="">
                                        </button>
                                        <input type="text" name="card-amount" class="input--amount" value="1" numberic="">
                                        <button class="btn--amount -add js-amount" data-action="add">
                                            <img src="/assets/{{env('THEME_VERSION')}}/image/icons/add.png" alt="">
                                        </button>
                                    </div>
                                </div>
                                <button type="button" class="btn -primary w-100 _mt-075 js_step" data-go_to="step2" data-toggle="modal" data-target="#modal--confirm__payment">Chọn mua</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{--                CARD SINGLE--}}
                {{--                SERVICE DESC--}}
                <div class="card --custom p-3 p-lg-3 _mb-125">
                    <div class="card--desc__title mb-4">
                        Mô tả dịch vụ
                    </div>
                    <div class="card--desc__content content-video-in-add p-0">
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
                            <span class="global__link">Xem thêm<i class="__icon --sm --link ml-1" style="--path : url(/assets/{{env('THEME_VERSION')}}/image/icons/arrow-down.png)"></i></span>
                        </div>
                        <div class="view-less" style="display: none;">
                            <span class="global__link">Thu gọn<i class="__icon --sm --link ml-1" style="--path : url(/assets/{{env('THEME_VERSION')}}/image/icons/iconright.png)"></i></span>
                        </div>
                    </div>
                </div>
                {{--                END SERVICE DESC--}}

                {{--                SAME KIND--}}
                <div class="card --custom" id="card--same">
                    <div class="card--head px-3 px-lg-3 _py-075">
                        <div class="card--title">
                            Sản phẩm cùng loại
                        </div>
                    </div>
{{--                    DESKTOP--}}
                    <div class="card--body p-lg-2 d-none d-lg-block">
                        <div class="row mx-lg-0">
                            <div class="col-4 col-lg-3 px-lg-2 _mb-075">
                                <a href="/mua-the-garena-20k" class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/{{env('THEME_VERSION')}}/image/cards-logo/garena.png"
                                             class="card--thumb__image" alt="">
                                    </div>
                                    <div class="card--name" style="--bg-color: #CC2829;">
                                        50.000 VND
                                    </div>
                                </a>
                            </div>
                            <div class="col-4 col-lg-3 px-lg-2 _mb-075">
                                <a href="/mua-the-garena-20k" class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/{{env('THEME_VERSION')}}/image/cards-logo/garena.png"
                                             class="card--thumb__image" alt="">
                                    </div>
                                    <div class="card--name" style="--bg-color: #CC2829;">
                                        100.000 VND
                                    </div>
                                </a>
                            </div>
                            <div class="col-4 col-lg-3 px-lg-2 _mb-075">
                                <a href="/mua-the-garena-20k" class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/{{env('THEME_VERSION')}}/image/cards-logo/garena.png"
                                             class="card--thumb__image" alt="">
                                    </div>
                                    <div class="card--name" style="--bg-color: #CC2829;">
                                        200.000 VND
                                    </div>
                                </a>
                            </div>
                            <div class="col-4 col-lg-3 px-lg-2 _mb-075">
                                <a href="/mua-the-garena-20k" class="scratch-card">
                                    <div class="card--thumb">
                                        <img src="/assets/{{env('THEME_VERSION')}}/image/cards-logo/garena.png"
                                             class="card--thumb__image" alt="">
                                    </div>
                                    <div class="card--name" style="--bg-color: #CC2829;">
                                        500.000 VND
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
{{--                    END DESKTOP--}}

{{--                    MOBILE--}}
                    <div class="card--body px-3 pb-3 d-block d-lg-none">
                        <div class="swiper js--card__swipe">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="/mua-the-garena-20k" class="scratch-card">
                                        <div class="card--thumb">
                                            <img src="/assets/{{env('THEME_VERSION')}}/image/cards-logo/garena.png"
                                                 class="card--thumb__image" alt="">
                                        </div>
                                        <div class="card--name" style="--bg-color: #CC2829;">
                                            50.000 VND
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="/mua-the-garena-20k" class="scratch-card">
                                        <div class="card--thumb">
                                            <img src="/assets/{{env('THEME_VERSION')}}/image/cards-logo/garena.png"
                                                 class="card--thumb__image" alt="">
                                        </div>
                                        <div class="card--name" style="--bg-color: #CC2829;">
                                            50.000 VND
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
{{--                    END MOBILE--}}
                </div>
                {{--                END SAME KIND--}}
            </div>
            {{--            END PAGE CONTENT--}}
        </div>
    </div>


    {{-- confirm payment mobile--}}
    <div class="mobile--confirm__payment step">
        <div class="step--header">
            <a href="" class="step--back js_step" data-go_to="step1">
                <img src="/assets/{{env('THEME_VERSION')}}/image/icons/back.png" alt="">
            </a>
            <div class="step--header__title">
                Xác nhận thanh toán
            </div>
        </div>
        <div class="step--content">
            <div class="card--gray">
                <div class="card--attr">
                    <div class="card--attr__name">
                        Loại thẻ
                    </div>
                    <div class="card--attr__value">
                        <div class="card--logo">
                            <img src="/assets/{{env('THEME_VERSION')}}/image/cards-logo/zing.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="card--attr">
                    <div class="card--attr__name">
                        Giá niêm yết
                    </div>
                    <div class="card--attr__value">
                        10.000 đ
                    </div>
                </div>
                <div class="card--attr">
                    <div class="card--attr__name">
                        Số lượng
                    </div>
                    <div class="card--attr__value">
                        01
                    </div>
                </div>
                <div class="card--attr">
                    <div class="card--attr__name">
                        Chiết khấu
                    </div>
                    <div class="card--attr__value">
                        3%
                    </div>
                </div>
                <div class="card--attr">
                    <div class="card--attr__name">
                        Thành tiền
                    </div>
                    <div class="card--attr__value">
                        9.700 đ
                    </div>
                </div>
            </div>
            <div class="card--gray">
                <div class="card--attr">
                    <div class="card--attr__name">
                        Phương thức thanh toán
                    </div>
                    <div class="card--attr__value -bold -primary">
                        Tài khoản Shopbrand
                    </div>
                </div>
                <div class="card--attr">
                    <div class="card--attr__name">
                        Phí thanh toán
                    </div>
                    <div class="card--attr__value -bold">
                        Miễn phí
                    </div>
                </div>
            </div>
            <div class="card--gray">
                <div class="card--attr">
                    <div class="card--attr__name -bold">
                        Số tiền thanh toán
                    </div>
                    <div class="card--attr__value -bold">
                        9.700 đ
                    </div>
                </div>
            </div>
            <button type="submit" class="btn -primary btn-big -ps__end js_step" data-go_to="step3">Xác nhận
            </button>
        </div>
    </div>
    <!-- Modal Xác Nhận Thanh Toán-->
    <div class="modal fade" id="modal--confirm__payment" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered animated">
            <div class="modal-content -custom dialog">
                <div class="dialog--header">
                    <div class="dialog--header__title">
                        Xác nhận thanh toán
                    </div>
                    <button type="button" class="close dialog__close" data-dismiss="modal">
                        <img src="/assets/{{env('THEME_VERSION')}}/image/icons/close.png" alt="">
                    </button>
                </div>
                <div class="dialog--content">
                    <div class="dialog--content__title">
                        Thông tin mua thẻ
                    </div>
                    <div class="card--gray">
                        <div class="card--attr">
                            <div class="card--attr__name">
                                Loại thẻ
                            </div>
                            <div class="card--attr__value">
                                <div class="card--logo">
                                    <img src="/assets/{{env('THEME_VERSION')}}/image/cards-logo/zing.png"
                                         alt="">
                                </div>
                            </div>
                        </div>
                        <div class="card--attr">
                            <div class="card--attr__name">
                                Giá niêm yết
                            </div>
                            <div class="card--attr__value">
                                10.000 đ
                            </div>
                        </div>
                        <div class="card--attr">
                            <div class="card--attr__name">
                                Số lượng
                            </div>
                            <div class="card--attr__value">
                                01
                            </div>
                        </div>
                        <div class="card--attr">
                            <div class="card--attr__name">
                                Chiết khấu
                            </div>
                            <div class="card--attr__value">
                                3%
                            </div>
                        </div>
                        <div class="card--attr">
                            <div class="card--attr__name">
                                Thành tiền
                            </div>
                            <div class="card--attr__value">
                                9.700 đ
                            </div>
                        </div>
                    </div>
                    <div class="card--gray">
                        <div class="card--attr">
                            <div class="card--attr__name">
                                Phương thức thanh toán
                            </div>
                            <div class="card--attr__value">
                                Tài khoản Shopbrand
                            </div>
                        </div>
                        <div class="card--attr">
                            <div class="card--attr__name">
                                Phí thanh toán
                            </div>
                            <div class="card--attr__value">
                                Miễn phí
                            </div>
                        </div>
                    </div>
                    <div class="card--gray">
                        <div class="card--attr__total">
                            <div class="card--attr__name">
                                Tổng thanh toán
                            </div>
                            <div class="card--attr__value">
                                9.700 đ
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn -primary btn-big" data-dismiss="modal" data-toggle="modal" data-target="#modal--success__payment">Xác nhận</button>
                </div>
            </div>
        </div>
    </div>
    {{-- success payment mobile--}}
    <div class="mobile--success__payment step">
        <div class="step--header">
            <a href="" class="step--back js_step" data-go_to="step2">
                <img src="/assets/{{env('THEME_VERSION')}}/image/icons/back.png" alt="">
            </a>
            <div class="step--header__title">
                Mua thẻ thành công
            </div>
        </div>
        <div class="step--content">
            <div class="card--gray card__notify">
                <div class="card__message">
                    Chúc mừng bạn đã giao dịch thành công
                </div>
                <div class="card--success__icon">
                    <img src="/assets/{{env('THEME_VERSION')}}/image/icons/success.png" alt="">
                </div>
            </div>
            <div class="step--content__title">
                Thông tin thẻ
            </div>
            <div class="card--list">
                <div class="card__detail">
                    <div class="card--header__detail">
                        <div class="card--info__wrap">
                            <div class="card--logo">
                                <img src="/assets/{{env('THEME_VERSION')}}/image/cards-logo/zing.png" alt="">
                            </div>
                            <div class="card--info">
                                <div class="card--info__name">
                                    Zing 1
                                </div>
                                <div class="card--info__value">
                                    100.000 đ
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card--gray">
                        <div class="card--attr">
                            <div class="card--attr__name">
                                Mã thẻ
                            </div>
                            <div class="card--attr__value -bold">
                                <div class="card__info">
                                    48563415693486456
                                </div>
                                <div class="icon--coppy js-copy-text">
                                    <img src="/assets/{{env('THEME_VERSION')}}/image/icons/coppy.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="card--attr">
                            <div class="card--attr__name">
                                Seri
                            </div>
                            <div class="card--attr__value -bold">
                                <div class="card__info">
                                    12121212121
                                </div>
                                <div class="icon--coppy js-copy-text">
                                    <img src="/assets/{{env('THEME_VERSION')}}/image/icons/coppy.png" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card__detail">
                    <div class="card--header__detail">
                        <div class="card--info__wrap">
                            <div class="card--logo">
                                <img src="/assets/{{env('THEME_VERSION')}}/image/cards-logo/zing.png" alt="">
                            </div>
                            <div class="card--info">
                                <div class="card--info__name">
                                    Zing 1
                                </div>
                                <div class="card--info__value">
                                    100.000 đ
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card--gray">
                        <div class="card--attr">
                            <div class="card--attr__name">
                                Mã thẻ
                            </div>
                            <div class="card--attr__value -bold">
                                <div class="card__info">
                                    48563415693486456
                                </div>
                                <div class="icon--coppy js-copy-text">
                                    <img src="/assets/{{env('THEME_VERSION')}}/image/icons/coppy.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="card--attr">
                            <div class="card--attr__name">
                                Seri
                            </div>
                            <div class="card--attr__value -bold">
                                <div class="card__info">
                                    12121212121
                                </div>
                                <div class="icon--coppy js-copy-text">
                                    <img src="/assets/{{env('THEME_VERSION')}}/image/icons/coppy.png" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card__detail">
                    <div class="card--header__detail">
                        <div class="card--info__wrap">
                            <div class="card--logo">
                                <img src="/assets/{{env('THEME_VERSION')}}/image/cards-logo/zing.png" alt="">
                            </div>
                            <div class="card--info">
                                <div class="card--info__name">
                                    Zing 1
                                </div>
                                <div class="card--info__value">
                                    100.000 đ
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card--gray">
                        <div class="card--attr">
                            <div class="card--attr__name">
                                Mã thẻ
                            </div>
                            <div class="card--attr__value -bold">
                                <div class="card__info">
                                    48563415693486456
                                </div>
                                <div class="icon--coppy js-copy-text">
                                    <img src="/assets/{{env('THEME_VERSION')}}/image/icons/coppy.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="card--attr">
                            <div class="card--attr__name">
                                Seri
                            </div>
                            <div class="card--attr__value -bold">
                                <div class="card__info">
                                    12121212121
                                </div>
                                <div class="icon--coppy js-copy-text">
                                    <img src="/assets/{{env('THEME_VERSION')}}/image/icons/coppy.png" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="step--content__end">
                <a href="" class="btn -secondary btn-big">Về trang chủ</a>
                <a href="" class="btn -primary btn-big">Mua thêm</a>
            </div>
        </div>
    </div>
    <!-- Modal Mua Thành Công-->
    <div class="modal fade" id="modal--success__payment" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content -custom dialog">
                <div class="dialog--header">
                    <div class="dialog--header__title">
                        Mua thẻ thành công
                    </div>
                    <button type="button" class="close dialog__close" data-dismiss="modal">
                        <img src="/assets/{{env('THEME_VERSION')}}/image/icons/close.png" alt="">
                    </button>
                </div>
                <div class="dialog--content">
                    <div class="card--gray card__notify">
                        <div class="card__message">
                            Chúc mừng bạn đã giao dịch thành công
                        </div>
                        <div class="card--success__icon">
                            <img src="/assets/{{env('THEME_VERSION')}}/image/icons/success.png" alt="">
                        </div>
                    </div>
                    <div class="dialog--content__title">
                        Thông tin thẻ
                    </div>
                    <div class="card--gray">
                        <div class="card--attr">
                            <div class="card--attr__name">
                                Loại thẻ
                            </div>
                            <div class="card--attr__value">
                                <div class="card--logo">
                                    <img src="/assets/{{env('THEME_VERSION')}}/image/cards-logo/zing.png"
                                         alt="">
                                </div>
                            </div>
                        </div>
                        <div class="card--attr">
                            <div class="card--attr__name">
                                Giá niêm yết
                            </div>
                            <div class="card--attr__value">
                                10.000 đ
                            </div>
                        </div>
                        <div class="card--attr">
                            <div class="card--attr__name">
                                Số lượng
                            </div>
                            <div class="card--attr__value">
                                01
                            </div>
                        </div>
                    </div>
                    <div class="swiper slider--card">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide card__detail">
                                <div class="card--header__detail">
                                    <div class="card--info__wrap">
                                        <div class="card--logo">
                                            <img src="/assets/{{env('THEME_VERSION')}}/image/cards-logo/zing.png" alt="">
                                        </div>
                                        <div class="card--info">
                                            <div class="card--info__name">
                                                Zing 1
                                            </div>
                                            <div class="card--info__value">
                                                100.000 đ
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card--gray">
                                    <div class="card--attr">
                                        <div class="card--attr__name">
                                            Mã thẻ
                                        </div>
                                        <div class="card--attr__value">
                                            <div class="card__info">
                                                48563415693486456
                                            </div>
                                            <div class="icon--coppy js-copy-text">
                                                <img src="/assets/{{env('THEME_VERSION')}}/image/icons/coppy.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card--attr">
                                        <div class="card--attr__name">
                                            Seri
                                        </div>
                                        <div class="card--attr__value">
                                            <div class="card__info">
                                                12121212121
                                            </div>
                                            <div class="icon--coppy js-copy-text">
                                                <img src="/assets/{{env('THEME_VERSION')}}/image/icons/coppy.png" alt="">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide card__detail">
                                <div class="card--header__detail">
                                    <div class="card--info__wrap">
                                        <div class="card--logo">
                                            <img src="/assets/{{env('THEME_VERSION')}}/image/cards-logo/zing.png" alt="">
                                        </div>
                                        <div class="card--info">
                                            <div class="card--info__name">
                                                Zing 1
                                            </div>
                                            <div class="card--info__value">
                                                100.000 đ
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card--gray">
                                    <div class="card--attr">
                                        <div class="card--attr__name">
                                            Mã thẻ
                                        </div>
                                        <div class="card--attr__value">
                                            <div class="card__info">
                                                48563415693486456
                                            </div>
                                            <div class="icon--coppy js-copy-text">
                                                <img src="/assets/{{env('THEME_VERSION')}}/image/icons/coppy.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card--attr">
                                        <div class="card--attr__name">
                                            Seri
                                        </div>
                                        <div class="card--attr__value">
                                            <div class="card__info">
                                                12121212121
                                            </div>
                                            <div class="icon--coppy js-copy-text">
                                                <img src="/assets/{{env('THEME_VERSION')}}/image/icons/coppy.png" alt="">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn -primary btn-big">Mua thêm</button>
                </div>
            </div>
        </div>
    </div>
@endsection
