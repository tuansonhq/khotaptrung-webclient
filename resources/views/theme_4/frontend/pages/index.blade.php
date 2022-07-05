@extends('frontend.layouts.master')
@section('styles')
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/lib_bootstrap.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/minigame.css">
@endsection
@section('seo_head')
    @include('frontend.widget.__seo_head')
@endsection
@section('content')

@include('frontend.widget.__slider__banner')


<div class="container container-fix">
    <div class="container-fix container">
        <div class="content__wrap" id="content-store-card">
            <div class="row" id="screen--first">
                <div class="col-12 col-lg-12 col-xl-8 px-lg-3 section--type__card buy-card">
                    <div class="card--mobile__title">
                        <span class="card--back box-account-mobile_open">
                            <img  src="/assets/frontend/{{theme('')->theme_key}}/image/icons/credit_card.png" alt="">
                        </span>
                        <h4 class="text-buy-card">Mua thẻ nhanh</h4>
                    </div>
                    <div class="card --custom ">
                        <div class="card--header">
                            <div class="card--header__title">
                                <div class="title__icon"><img
                                        src="/assets/frontend/{{theme('')->theme_key}}/image/icons/credit_card.png" alt=""></div>
                                <h4>Mua thẻ nhanh</h4>
                            </div>
                        </div>
                        <div class="card--body">
                            <ul class="nav nav-tabs tabs--cards" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="card-game-tab" data-toggle="tab" href="#card-game" role="tab" aria-controls="card-game" aria-selected="true">Thẻ game</a>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="card-phone-tab" data-toggle="tab" href="#card-phone" role="tab" aria-controls="card-phone" aria-selected="false">Thẻ điện thoại</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab--title">Chọn loại thẻ</div>
                                <div class="tab-pane fade show active select-tag-type" id="card-game" role="tabpanel" aria-labelledby="card-game-tab">
                                    <ul class="cards__list row" id="list-card-game">
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
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="card-phone" role="tabpanel" aria-labelledby="card-phone-tab">
                                    <ul class="cards__list row" id="list_card_phone">
                                        {{--JS GENERATE HTML HERE--}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-xl-4  pl-lg-1 section--amount__card choose-card">
                    <div class="card --custom">
                        <div class="card--body">
                            <div class="denos--wrap">
                                <div class="denos--title">
                                    Chọn mệnh giá
                                </div>
                                <ul class="deno__list row" id="list_card_deno">
                                    {{--JS GENERATE HTML HERE--}}
                                    <div class="loader position-relative mt-4">
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
                                </ul>
                                <div class="card--amount">
                                    <span class="card--amount__title">
                                        Số lượng thẻ
                                    </span>
                                    <div class="card--amount__group">
                                        <button class="btn--amount -minus js-amount" data-action="minus">
                                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/minus.png" alt="">
                                        </button>
                                        <input type="text" name="card-quantity" class="input--amount" value="1" numberic>
                                        <button class="btn--amount -add js-amount" data-action="add">
                                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/add.png" alt="">
                                        </button>
                                    </div>
                                </div>
                                <div class="discount">
                                    <span class="discount--title">
                                        Chiết khấu
                                    </span>
                                    <span class="discount--value">
                                        0%
                                    </span>
                                </div>
                                <div class="price--total">
                                    <span class="price--total__title">
                                        Thành tiền
                                    </span>
                                    <span class="price--total__value">
                                        0 đ
                                    </span>
                                </div>
                                @if(App\Library\AuthCustom::check())
                                    <button type="button" class="btn -primary btn-big" id="btn-confirm">Chọn mua</button>
                                @else
                                    <button type="button" class="btn -primary btn-big mt-3" onclick="openLoginModal();">Chọn mua</button>
                                @endif
                            </div>
                        </div>
                    </div>
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
                                            <img src="" alt="logo card">
                                        </div>
                                    </div>
                                </div>
                                <div class="card--attr">
                                    <div class="card--attr__name">
                                        Mệnh giá
                                    </div>
                                    <div class="card--attr__value" id="deno_modal">
                                        0 đ
                                    </div>
                                </div>
                                <div class="card--attr">
                                    <div class="card--attr__name">
                                        Số lượng
                                    </div>
                                    <div class="card--attr__value" id="quantity_modal">
                                        01
                                    </div>
                                </div>
                                <div class="card--attr">
                                    <div class="card--attr__name">
                                        Chiết khấu
                                    </div>
                                    <div class="card--attr__value" id="discount_modal">
                                        0%
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
                                    <div class="card--attr__value" id="total_modal">
                                        0 đ
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn -primary btn-big js-send-data">Xác nhận</button>
                        </div>
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

        </div>
    </div>
    @include('frontend.widget.__nap_the')
    @include('frontend.widget.__dichvu__lienquan')
    @include('frontend.widget.__tin__tuc')

    <div class="block-product mt-fix-20 service-mobile">

        <div class="box-product">
            <div class="swiper-container  list-intro" >
                <div class="swiper-wrapper">
                    <div class="swiper-slide" >
                        <div class="item-intro-img">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/intro1.png" alt=""></div>
                        <div class="list-intro-title">
                            Sản phẩm, dịch vụ đa dạng, cập nhật thường xuyên
                        </div>
                        <div class="list-intro-content">
                            Hệ thống luôn cung cấp, cập nhật những sản phẩm mới/hot nhất của các dòng game trên thị trường.
                        </div>

                    </div>
                    <div class="swiper-slide" >
                        <div class="item-intro-img">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/intro2.png" alt=""></div>
                        <div class="list-intro-title">
                            Hàng nghìn khách hàng tin tưởng
                        </div>
                        <div class="list-intro-content">
                            Hơn 260.000 giao dịch thành công mỗi ngày. Chúng tôi luôn đặt uy tín, chất lượng dịch vụ lên hàng đầu.
                        </div>

                    </div>
                    <div class="swiper-slide" >
                        <div class="item-intro-img">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/intro3.png" alt=""></div>
                        <div class="list-intro-title">
                            Trung tâm trợ giúp hỗ trợ tư vấn 24/24
                        </div>
                        <div class="list-intro-content">
                            Đội ngũ chăm sóc khách hàng luôn tư vấn và hỗ trợ nhiệt tình khi gặp sự cố trong quá trình trải nghiệm sản phẩm.
                        </div>

                    </div>
                    <div class="swiper-slide" >
                        <div class="item-intro-img">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/intro4.png" alt=""></div>
                        <div class="list-intro-title">
                            Giá cả ưu đãi, siêu rẻ trên thị trường
                        </div>
                        <div class="list-intro-content">
                            Cung cấp những sản phẩm với giá cả tốt nhất cùng với đó là những ưu đãi vô cùng hấp dẫn.
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@include('frontend.widget.modal.__charge')
@include('frontend.widget.modal.__success_charge')
@include('frontend.widget.modal.__reject_charge')
@include('frontend.widget.modal.__success_charge_atm')
@include('frontend.widget.modal.__success_wallet_card')
<script src="/assets/frontend/{{theme('')->theme_key}}/js/charge/charge_home.js?v={{time()}}"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/js/js_trong/buy-card-index.js?v={{time()}}"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/js/js_trong/input.js?v={{time()}}"></script>
@endsection
