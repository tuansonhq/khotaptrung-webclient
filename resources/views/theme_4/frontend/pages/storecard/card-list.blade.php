@extends('frontend.layouts.master')
@section('seo_head')
{{--    @include('frontend.widget.__seo_head',with(['data'=>$data]))--}}
@endsection
@section('styles')
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/trong-style/distance.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/trong-style/buy-card.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/style_trong.css">
@endsection
@section('scripts')
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/js_trong/buy-card.js"></script>
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/js_trong/script_trong.js"></script>
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/js_trong/input.js"></script>
@endsection
@section('content')
    <div class="container-fix container" id="buy-card">
        <input type="hidden" value="{{ request()->route()->getName() }}" id="isRequest">
        <input type="hidden" value="{{ request()->route('card') }}" id="isTelecom">
        <input type="hidden" value="{{ App\Library\AuthCustom::check() }}" id="auth">
        {{--        BANNER --}}
        <div class="poster__banner _mt-125 _mt-sm-0 d-none d-lg-block">
            <div class="swiper js--swiper__banner mb-n4">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/buy-card/Rectangle 4.png"
                                 alt="POSTER BANNER">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/buy-card/Rectangle 4.png"
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
                                <i class="__icon --arrow --path__custom" style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/icons/arrows/arrow-down.png)"></i>
                            </span>
                        </a>
                        <ul class="collapse card-list show" id="card--game__nav">
                            {{--SHOW NAV LINK HERE--}}
                        </ul>

                        <a class="section--card p-lg-3" data-toggle="collapse" href="#card--phone__nav" role="button"
                           aria-expanded="true">
                            <span class="section--card__title">
                                THẺ ĐIỆN THOẠI
                            </span>
                            <span class="d-flex align-items-center">
                                <i class="__icon --arrow --path__custom"
                                   style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/icons/arrows/arrow-down.png)"></i>
                            </span>
                        </a>
                        <ul class="collapse card-list show" id="card--phone__nav">
                            {{--SHOW NAV LINK HERE--}}
                        </ul>
                    </div>
                </div>
            </div>
            {{--            END NAV CATEGORY--}}

            {{--            PAGE CONTENT--}}
            <div class="col-12 col-lg-9 p-0 page--card__content">

                {{--                CARD LIST--}}
                <div class="card --custom _mb-125 _mb-sm-075" id="card--value">
                    <div class="card--head card--mobile__title px-lg-3 _py-075">
                        <a href="/mua-the" class="card--back d-lg-none d-block">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/back.png" alt="">
                        </a>
                        <h4 class="card--title" style="text-transform: capitalize;">
                            Thẻ
                        </h4>
                    </div>
{{--                    DESKTOP--}}
                    <div class="card--body p-lg-2 d-none d-lg-block">
                        <div class="row mx-lg-0" id="card--desktop__value">
                            {{-- SHOW CARD HERE--}}
                            <div class="loader position-relative">
                                <div class="loading-spokes">
                                    <div class="spoke-container">
                                        <div class="spoke"></div>
                                    </div>
                                    <div class="spoke-container">
                                        <div class="spoke"></div>
                                    </div>
                                    <div class="spoke-container">
                                        <div class="spoke"></div>
                                    </div>
                                    <div class="spoke-container">
                                        <div class="spoke"></div>
                                    </div>
                                    <div class="spoke-container">
                                        <div class="spoke"></div>
                                    </div>
                                    <div class="spoke-container">
                                        <div class="spoke"></div>
                                    </div>
                                    <div class="spoke-container">
                                        <div class="spoke"></div>
                                    </div>
                                    <div class="spoke-container">
                                        <div class="spoke"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
{{--                    END DESKTOP--}}

{{--                    MOBILE--}}
                    <div class="card--body px-3 _py-075 d-block d-lg-none">
                        <div class="swiper js--card__swipe">
                            <div class="swiper-wrapper" id="card--value__mobile">
{{--                                JS GENERATE HTML HERE--}}
                            </div>
                        </div>
                    </div>
{{--                    END MOBILE--}}
                </div>
                {{--                END CARD LIST--}}

                {{--                CARD OTHER--}}
                <div class="card --custom _mb-125 _mb-sm-075" id="card--other">
                    <div class="card--head px-3 px-lg-3 _py-075">
                        <div class="card--title">
                            Các loại thẻ khác
                        </div>
                        <div class="swiper__paginate d-none d-lg-flex">
                            <div class="card-other-prev"></div>
                            <div class="mx-lg-1"></div>
                            <div class="card-other-next"></div>
                        </div>
                    </div>
                    <div class="card--body px-3 py-3 py-lg-2 px-lg-3">
                        <div class="swiper card--other__swipe">
                            <div class="swiper-wrapper" id="card--other__wrapper">
                                {{--JS GENERATE HTML HERE--}}
                                <div class="loader position-relative">
                                    <div class="loading-spokes">
                                        <div class="spoke-container">
                                            <div class="spoke"></div>
                                        </div>
                                        <div class="spoke-container">
                                            <div class="spoke"></div>
                                        </div>
                                        <div class="spoke-container">
                                            <div class="spoke"></div>
                                        </div>
                                        <div class="spoke-container">
                                            <div class="spoke"></div>
                                        </div>
                                        <div class="spoke-container">
                                            <div class="spoke"></div>
                                        </div>
                                        <div class="spoke-container">
                                            <div class="spoke"></div>
                                        </div>
                                        <div class="spoke-container">
                                            <div class="spoke"></div>
                                        </div>
                                        <div class="spoke-container">
                                            <div class="spoke"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--                END CARD OTHER--}}
                {{--                SERVICE DESC--}}
                <div class="card --custom p-3 p-lg-3">
                    <div class="card--desc__title mb-4">
                        Mô tả dịch vụ
                    </div>
                    <div class="card--desc__content content-video-in-add p-0">
                        {!! setting('sys_store_card_content') !!}
                    </div>
                    <div class="col-md-12 left-right text-center js-toggle-content">
                        <div class="view-more">
                            <span class="global__link">Xem thêm<i class="__icon --sm --link ml-1" style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/icons/arrow-down.png)"></i></span>
                        </div>
                        <div class="view-less" style="display: none;">
                            <span class="global__link">Thu gọn<i class="__icon --sm --link ml-1" style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/icons/iconright.png)"></i></span>
                        </div>
                    </div>
                </div>
                {{--                END SERVICE DESC--}}
            </div>
            {{--            END PAGE CONTENT--}}
        </div>
    </div>

    <!-- Xác Nhận Thanh Toán Mobile-->
    <div class="mobile--confirm__payment step">
        <div class="step--header">
            <a href="" class="step--back js_step" data-go_to="step1">
                <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/back.png" alt="">
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
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/cards-logo/zing.png" alt="" id="detail--logo__mobile">
                        </div>
                    </div>
                </div>
                <div class="card--attr">
                    <div class="card--attr__name">
                        Giá niêm yết
                    </div>
                    <div class="card--attr__value" id="detail--deno__mobile">
                        10.000 đ
                    </div>
                </div>
                <div class="card--attr">
                    <div class="card--attr__name">
                        Số lượng
                    </div>
                    <div class="card--attr__value" id="detail--quantity__mobile">
                        01
                    </div>
                </div>
                <div class="card--attr">
                    <div class="card--attr__name">
                        Chiết khấu
                    </div>
                    <div class="card--attr__value" id="detail--discount__mobile">
                        3%
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
                    <div class="card--attr__value -bold" id="detail--total__mobile">
                        9.700 đ
                    </div>
                </div>
            </div>
            <button type="button" class="btn -primary btn-big -ps__end js-send-data">Xác nhận</button>
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
                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/close.png" alt="">
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
                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/cards-logo/zing.png" alt="" id="detail--logo__card">
                                </div>
                            </div>
                        </div>
                        <div class="card--attr">
                            <div class="card--attr__name">
                                Mệnh giá
                            </div>
                            <div class="card--attr__value" id="detail--deno__card">
                                10.000 đ
                            </div>
                        </div>
                        <div class="card--attr">
                            <div class="card--attr__name">
                                Số lượng
                            </div>
                            <div class="card--attr__value" id="detail--quantity__card">
                                01
                            </div>
                        </div>
                        <div class="card--attr">
                            <div class="card--attr__name">
                                Chiết khấu
                            </div>
                            <div class="card--attr__value" id="detail--discount__card">
                                3%
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
                            <div class="card--attr__value" id="detail--total__card">
                                9.700 đ
                            </div>
                        </div>
                    </div>
{{--                    <button type="submit" class="btn -primary btn-big" data-dismiss="modal" data-toggle="modal" data-target="#modal--success__payment">Xác nhận</button>--}}
                    <button type="button" class="btn -primary btn-big js-send-data">Xác nhận</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Thanh Toán Thành Công Mobile-->
    <div class="modal fade" id="modal--success__payment" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content -custom dialog">
                <div class="dialog--header">
                    <div class="dialog--header__title">
                        Mua thẻ thành công
                    </div>
                    <button type="button" class="close dialog__close" data-dismiss="modal">
                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/close.png" alt="">
                    </button>
                </div>
                <div class="dialog--content">
                    <div class="card--gray card__notify">
                        <div class="card__message">
                            Chúc mừng bạn đã giao dịch thành công
                        </div>
                        <div class="card--success__icon">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/success.png" alt="">
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
                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/cards-logo/zing.png"
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
                                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/cards-logo/zing.png" alt="">
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
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/coppy.png" alt="">
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
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/coppy.png" alt="">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide card__detail">
                                <div class="card--header__detail">
                                    <div class="card--info__wrap">
                                        <div class="card--logo">
                                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/cards-logo/zing.png" alt="">
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
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/coppy.png" alt="">
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
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/coppy.png" alt="">
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
    <!-- Thanh Toán Không Thành Công Mobile-->
    <div class="mobile--fail__payment step" style="display: none">
        <div class="step--header">
            <a href="" class="step--back js_step" data-go_to="step2">
                <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/back.png" alt="">
            </a>
            <div class="step--header__title">
                Mua thẻ không thành công
            </div>
        </div>
        <div class="step--content">
            <div class="card--gray card__notify">
                <div class="card__message">
                    Rất tiếc, giao dịch của bạn đã thất bại
                </div>
                <div class="card--success__icon">
                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/reject.png" alt="">
                </div>
            </div>
            <div class="step--content__end">
                <a href="/" class="btn -secondary btn-big">Về trang chủ</a>
                <a href="/nap-tien" class="btn -primary btn-big">Nạp tiền</a>
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
                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/close.png" alt="">
                    </button>
                </div>
                <div class="dialog--content">
                    <div class="card--gray card__notify">
                        <div class="card__message">
                            Chúc mừng bạn đã giao dịch thành công
                        </div>
                        <div class="card--success__icon">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/success.png" alt="icon">
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
                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/cards-logo/zing.png" class="telecom__logo" alt="logo">
                                </div>
                            </div>
                        </div>
                        <div class="card--attr">
                            <div class="card--attr__name">
                                Mệnh giá
                            </div>
                            <div class="card--attr__value card--attr__deno">
                                10.000 đ
                            </div>
                        </div>
                        <div class="card--attr">
                            <div class="card--attr__name">
                                Số lượng
                            </div>
                            <div class="card--attr__value card--attr__quantity">
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
                                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/cards-logo/zing.png" alt="">
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
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/coppy.png" alt="">
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
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/coppy.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide card__detail">
                                <div class="card--header__detail">
                                    <div class="card--info__wrap">
                                        <div class="card--logo">
                                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/cards-logo/zing.png" alt="">
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
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/coppy.png" alt="">
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
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/coppy.png" alt="">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn -primary btn-big">Mua thêm</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Mua Thất Bại-->
    <div class="modal fade login show default-Modal" id="modal--fail__payment" aria-modal="true">
        <div class="modal-dialog modal-md modal-dialog-centered login animated">
            <!--        <div class="image-login"></div>-->
            <div class="modal-content">
                <div class="modal-header modal-header-success-ct">
                    <div class="row marginauto modal-header-success-row-ct text-center">
                        <div class="col-md-12 text-center" style="position: relative">
                            <span>Mua thẻ không thành công</span>
                            <div class="close" data-dismiss="modal" aria-label="Close">
                                <img class="lazy img-close-ct close-modal-default" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/close.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-body modal-body-success-ct">
                    <div class="row marginauto justify-content-center">
                        <div class="col-auto">
                            <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/reject.png" alt="">
                        </div>
                    </div>
                    <div class="row marginauto modal-body-span-success-ct justify-content-center">
                        <div class="col-md-12 left-right text-center">
                            <span style="font-size: 14px" id="message--error--buy"></span>
                        </div>

                    </div>
                    <div class="row marginauto justify-content-center modal-footer-success-ct">

                        <div class="col-md-12 col-6 modal-footer-success-col-right-ct">
                            <div class="row marginauto modal-footer-success-row-ct">
                                <div class="col-md-12 left-right">
                                    <a href="/nap-the" class="button-bg-ct" style="display: flex;justify-content: center"><span>Nạp thẻ</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
