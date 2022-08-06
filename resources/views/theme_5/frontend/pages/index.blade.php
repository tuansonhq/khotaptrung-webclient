@extends('frontend.layouts.master')

@section('content')

    <div class="container c-container">

{{--        Slider banner  --}}
        @include('frontend.widget.__slider__banner__home')

{{--        Dịch vụ nổi bật  --}}
        @include('frontend.widget.__dich__vu__noi__bat')

{{--        Giá sốc  --}}
{{--        @include('frontend.widget.__gia__soc')--}}

{{--        Dành cho bạn  --}}
{{--        @include('frontend.widget.__danh__cho__ban')--}}

        {{--        Dịch vụ  --}}
        @include('frontend.widget.__content__home__dichvu')

{{--        Vòng quay  --}}
        @include('frontend.widget.__content__home__minigame')

        {{--        Nạp thẻ  --}}
        @include('frontend.widget.__napthe')

{{--        nick ngon giá re  --}}
        @include('frontend.widget.__content__home__game')

{{--        Free fire  --}}
{{--        @include('frontend.widget.__free__fire')--}}

{{--        Liên quân  --}}
{{--        @include('frontend.widget.__lien__quan')--}}

        {{--        Ngoc rong online  --}}
{{--        @include('frontend.widget.__ngoc__rong__online')--}}

        {{--        Tin tức  --}}
        @include('frontend.widget.__tin__tuc')

{{--    Giới thiệu web       --}}
        @include('frontend.widget.__abount__us')

    </div>

    {{--  sử lý step thanh toán --}}
    <div class="step" id="step2">
        <div class="head-mobile">
            <a href="javascript:void(0) " class="link-back close-step"></a>

            <h1 class="head-title text-title">Xác nhận thanh toán</h1>

            <a href="/" class="home"></a>
        </div>
        <div class="body-mobile">
            <div class="body-mobile-content c-p-16">
                <div class="dialog--content__title fw-700 fz-15 c-mb-12 text-title-theme">
                    Thông tin nạp thẻ
                </div>
                <div class="card--gray c-mb-16 c-pt-8 c-pb-8 c-pl-12 c-pr-12 brs-8 g_mobile-content">
                    <div class="card--attr justify-content-between d-flex c-mb-8 text-center">
                        <div class="card--attr__name fw-400 fz-13 text-center text-order">
                            Nhà mạng
                        </div>
                        <div class="card--attr__value fz-13 fw-500" id="confirmTitleMobile"></div>
                    </div>
                    <div class="card--attr justify-content-between d-flex c-mb-8 text-center">
                        <div class="card--attr__name fw-400 fz-13 text-center text-order">
                            Giá niêm yết
                        </div>
                        <div class="card--attr__value fz-13 fw-500" id="confirmPriceMobile"></div>
                    </div>
                    <div class="card--attr justify-content-between d-flex text-center">
                        <div class="card--attr__name fw-400 fz-13 text-center text-order">
                            Chiết khấu
                        </div>
                        <div class="card--attr__value fz-13 fw-500" id="confirmDiscountMobile"></div>
                    </div>
                </div>
                <div class="card--gray c-mb-16 c-pt-8 c-pb-8 c-pl-12 c-pr-12 brs-8 g_mobile-content">
                    <div class="card--attr justify-content-between d-flex text-center">
                        <div class="card--attr__name fw-400 fz-13 text-center text-order">
                            Phí thanh toán
                        </div>
                        <div class="card--attr__value fz-13 fw-500">
                            Miễn phí
                        </div>
                    </div>
                </div>
                <div class="card--gray c-mb-0 c-pt-8 c-pb-8 c-pl-12 brs-8 c-pr-12 g_mobile-content">
                    <div class="card--attr__total justify-content-between d-flex text-center">
                        <div class="card--attr__name fw-400 fz-13 text-center text-order">
                            Số tiền thực nhận
                        </div>
                        <div class="card--attr__value fz-13 fw-500"><a href="javascript:void(0)" class="c-text-primary" id="totalBillMobile"></a></div>
                    </div>
                </div>
            </div>

        </div>

        <div class="footer-mobile v2">
            <div class="c-px-16 c-pt-16 group-btn" >
                <button class="btn primary btn-success-mobile" id="confirmSubmitButtonMobile">Xác nhận</button>
            </div>
        </div>
    </div>

    {{--    Modal xác nhận thanh toán--}}
    <div class="modal fade modal-big" id="orderCharge">
        <div class="modal-dialog modal-dialog-centered modal-custom">
            <div class="modal-content c-p-24">
                <div class="modal-header">
                    <h2 class="modal-title center">Xác nhận thanh toán</h2>
                    <button type="button" class="close" data-dismiss="modal"></button>
                </div>
                <div class="modal-body pl-0 pr-0 c-pt-24 c-pb-24">
                    <div class="dialog--content__title fw-700 fz-13 c-mb-12 text-title-theme">
                        Thông tin nạp thẻ
                    </div>
                    <div class="card--gray c-mb-16 c-pt-8 c-pb-8 c-pl-12 c-pr-12">
                        <div class="card--attr justify-content-between d-flex c-mb-8 text-center">
                            <div class="card--attr__name fw-400 fz-13 text-center">
                                Nhà mạng
                            </div>
                            <div class="card--attr__value fz-13 fw-500" id="confirmTitle"></div>
                        </div>
                        <div class="card--attr justify-content-between d-flex c-mb-8 text-center">
                            <div class="card--attr__name fw-400 fz-13 text-center">
                                Giá niêm yết
                            </div>
                            <div class="card--attr__value fz-13 fw-500" id="confirmPrice"></div>
                        </div>
                        <div class="card--attr justify-content-between d-flex c-mb-8 text-center">
                            <div class="card--attr__name fw-400 fz-13 text-center">
                                Chiết khấu
                            </div>
                            <div class="card--attr__value fz-13 fw-500" id="confirmDiscount"></div>
                        </div>
                    </div>
                    <div class="card--gray c-mb-16 c-pt-8 c-pb-8 c-pl-12 c-pr-12">
                        <div class="card--attr justify-content-between d-flex c-mb-8 text-center">
                            <div class="card--attr__name fz-13 fw-400 text-center">
                                Phí thanh toán
                            </div>
                            <div class="card--attr__value fz-13 fw-500">
                                Miễn phí
                            </div>
                        </div>
                    </div>
                    <div class="card--gray  c-mb-0 c-pt-8 c-pb-8 c-pl-12 c-pr-12">
                        <div class="card--attr justify-content-between d-flex c-mb-8 text-center">
                            <div class="card--attr__name fw-400 fz-13 text-center">
                                Số tiền thực nhận
                            </div>
                            <div class="card--attr__value fz-13 fw-500"><a href="javascript:void(0)" class="c-text-primary" id="totalBill"></a></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn primary" type="button" id="confirmSubmitButton">Xác nhận</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal thành công --}}
    <div class="modal fade modal-small" id="modalSuccessPayment">
        <div class="modal-dialog modal-dialog-centered modal-custom">
            <div class="modal-content">
                <div class="modal-header justify-content-center p-0">
                    <img class="c-pt-20 c-pb-20" src="/assets/frontend/{{theme('')->theme_key}}/image/son/success.png" alt="">
                </div>
                <div class="modal-body text-center c-pl-24 c-pr-24 pt-0 pb-0">
                    <p class="fw-700 fz-15 c-mt-12 mb-0 text-title-theme">Nạp thẻ thành công</p>
                    <p class="fw-400 fz-13 c-mt-10 mb-0" id="successMessage"></p>
                </div>
                <div class="modal-footer c-p-24">
                    <a class="btn secondary" data-dismiss="modal">Trang chủ</a>
                    <button class="btn primary">Nạp thêm</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal thất bại --}}
    <div class="modal fade modal-small" id="modalFailPayment">
        <div class="modal-dialog modal-dialog-centered modal-custom">
            <div class="modal-content">
                <div class="modal-header justify-content-center p-0">
                    <img class="c-pt-16 c-pb-16" src="/assets/frontend/{{theme('')->theme_key}}/image/son/thatbai.png" alt="">
                </div>
                <div class="modal-body text-center c-pl-24 c-pr-24 pt-0 pb-0">
                    <p class="fw-700 fz-15 c-mt-12 mb-0 text-title-theme">Nạp thẻ thất bại</p>
                    <p class="fw-400 fz-13 c-mt-10 mb-0" id="failMessage"></p>
                </div>
                <div class="modal-footer c-p-24">
                    <button class="btn ghost" data-dismiss="modal">Thoát</button>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script src="/assets/frontend/theme_5/js/js_duong/style.js"></script>
@endsection
