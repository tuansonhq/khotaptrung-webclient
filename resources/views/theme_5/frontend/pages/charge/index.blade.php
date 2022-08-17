@extends('frontend.layouts.master')

@section('meta_robots')
    <meta name="robots" content="noindex,nofollow" />
@endsection

@section('content')
    <div class="container c-container">
        <ul class="breadcrumb-list">
            <li class="breadcrumb-item">
                <a href="/" class="breadcrumb-link">Trang chủ</a>
            </li>
            <li class="breadcrumb-item">
                <a href="/mua-acc" class="breadcrumb-link">Shop Account</a>
            </li>
            <li class="breadcrumb-item">
                <a href="/mua-acc/id" class="breadcrumb-link">Danh sách Nick Liên Quân</a>
            </li>
        </ul>

        {{--            Slider banner    --}}
        <div class="d-none d-lg-block">
            @include('frontend.widget.__slider__banner__napthe')
        </div>

        <h2 class="section-title c-mt-24  c-mb-lg-8 d-none d-lg-flex">
            <i class="icon-title c-mr-8" style="--path:url(/assets/frontend/{{theme('')->theme_key}}/image/son/naptien.svg)"></i>
            Nạp tiền
        </h2>

        {{--        nạp thẻ--}}

        <div class="row c-mt-16 c-mb-24 c-mt-lg-50 c-mt-md-0">

            <div class="col-12 col-lg-8 c-pr-8 c-px-sm-0 ">
                <div class="recharge-money-container brs-12 brs-sm-0 c-pt-lg-4">
                    <div class="recharge-money-tab c-px-16">
                        <ul class="nav justify-content-between row" role="tablist" >
                            <li class="nav-item col-6 p-0" role="presentation">
                                <p id="chargeNavTab" class="nav-link active text-center mb-0 fw-400 fz-13" data-toggle="tab" href="#charge_card" role="tab" aria-selected="true">Nạp thẻ cào </p>
                            </li >
                            <li class="nav-item col-6 p-0" role="presentation">
                                <p id="atmNavTab" class="nav-link text-center mb-0 fw-400 fz-13" data-toggle="tab" href="#atm_card" role="tab" aria-selected="false"> ATM tự động </p>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content">
                        <div class="tab-pane fade active show c-p-16" id="charge_card" role="tabpanel">
                            <div class="row text-center loader-container">
                                <div class="col-12">
                                    <div class="loader position-relative" style="margin: 2rem 0">
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
                            <form class="w-100" action="" id="chargeCardForm">
                                <div class="row content-block d-none">
                                    <div class="col-12 col-lg-6 c-pr-8">
                                        <div class="money-form-group c-mb-16">
                                            <label class="text-form fz-13 fw-500 c-mb-4">Nhà cung cấp</label>
                                            <div class="col-md-12 p-0">
                                                <select class="select-form w-100" name="type" id="telecom">
    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="money-form-group c-mb-12 d-block d-lg-none">
                                            <label class="text-form fz-13 fw-500 c-mb-8">Chọn mệnh giá</label>
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
                                            <div class="col-md-12 p-0">
                                                <div class="row m-0" id="cardAmountMobile">
    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="money-form-group c-mb-8">
                                            <label class="text-form fz-13 fw-500 c-mb-4">Mã số thẻ</label>
                                            <div class="col-md-12 p-0">
                                                <div class="input-group">
                                                    <input class="input-form w-100" name="pin" type="text" placeholder="Nhập mã số thẻ của bạn">
                                                    <p class="text-error c-mb-0 c-mt-4"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="money-form-group c-mb-8">
                                            <label class="text-form fz-13 fw-500 c-mb-4">Số sê-ri</label>
                                            <div class="col-md-12 p-0">
                                                <div class="input-group">
                                                    <input class="input-form w-100" name="serial" type="text" placeholder="Nhập mã số sê-ri trên thẻ">
                                                    <p class="text-error c-mb-0 c-mt-4"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="money-form-group">
                                            <label class="text-form fz-13 fw-500 c-mb-4">Mã bảo vệ</label>
                                            <div class="input-group">
                                                <div class="col-md-12 p-0 d-flex">
                                                    <div style="flex: 1;">
                                                        <input class="input-form w-100" name="captcha" type="text" placeholder="Nhập mã bảo vệ ">
                                                    </div>
                                                    <div class="captcha c-mx-8">
                                                        <div>
                                                        <span id="capchaImage">
                                                            {!! captcha_img('flat') !!}
                                                        </span>
                                                        </div>
                                                    </div>
                                                    <button class="refresh-captcha brs-8" type="button" id="reload_1">
                                                        <img class="spinImg paused" src="/assets/frontend/{{theme('')->theme_key}}/image/phu/captcha_refresh.png" alt="">
                                                    </button>
                                                </div>
                                                <p class="text-error c-mb-0 c-mt-4"></p>
                                            </div>
                                        </div>
                                        <div class="group-btn c-mt-24 d-flex d-lg-none">
                                            @if (\App\Library\AuthCustom::check())
                                                <button class="btn primary d-block d-lg-none" type="submit">Nạp ngay</button>
                                            @else
                                                <button class="btn primary d-block d-lg-none" onclick="openLoginModal();">Nạp ngay</button>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6 c-pl-8 d-none d-lg-flex flex-column justify-content-between">
                                        <div class="money-form-group c-mb-16">
                                            <label class="text-form fz-13 fw-500 c-mb-4">Chọn mệnh giá</label>
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
                                            <div class="col-md-12 p-0">
                                                <div class="row m-0" id="cardAmount">
    
                                                </div>
                                            </div>
                                        </div>
                                        @if (\App\Library\AuthCustom::check())
                                            <button class="btn primary d-none d-lg-block" type="submit">Nạp ngay</button>
                                        @else
                                            <button class="btn primary d-none d-lg-block" onclick="openLoginModal();">Nạp ngay</button>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade c-p-16" id="atm_card" role="tabpanel" >
                            <div class="row text-center loader-container">
                                <div class="col-12">
                                    <div class="loader position-relative" style="margin: 2rem 0">
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
                            <div class="row content-block d-none">
                                {{-- <div class="col-12 col-lg-6 c-pr-8 d-none d-lg-block">
                                    <div class="atm-recharge-left c-p-16 brs-8 d-flex justify-content-between align-items-center">
                                        <p class="fz-13 fw-400 mb-0">Ngân hàng Kỹ thương Việt Nam (Techcombank)</p>
                                        <div>
                                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/phu/tech_logo.png" alt="">
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="col-12 col-lg-12">
                                    <div class="atm-recharge-right c-p-16 brs-8">
                                        <div class="atm-recharge-guide">
                                            <img class="w-100 c-mb-16" src="/assets/frontend/{{theme('')->theme_key}}/image/phu/atm_recharge_guide.png" alt="">
                                            <p class="fz-13 fw-400">Để hoàn tất đơn nạp, bạn vui lòng chuyển khoản theo cú pháp sau:</p>
                                        </div>
                                        <div class="atm-recharge-content c-p-sm-12 brs-sm-8">
                                            @if (setting('sys_tranfer_content') != "")
                                                {!! setting('sys_tranfer_content') !!}
                                            @endif
                                            <div class="atm-recharge-attr d-flex justify-content-between align-items-center">
                                                <p class="fz-13 fw-400 mb-0">Nội dung chuyển khoản</p>
                                                <div class="fz-13 fw-500" id="transactionContent"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 c-pl-8 d-none d-lg-flex">
                <a href="javascript:void(0);" class="money-recharge-coupon d-block brs-12" style="height: 100%">
                    <img class="brs-12" src="/assets/frontend/{{theme('')->theme_key}}/image/phu/recharge-coupon.png" alt="">
                </a>
            </div>
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
                <div class="group-btn" >
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

        {{--            Dịch vụ khác   --}}
        <div class="c-mb-40">
            @include('frontend.widget.__services__other')
        </div>


    </div>

@endsection

