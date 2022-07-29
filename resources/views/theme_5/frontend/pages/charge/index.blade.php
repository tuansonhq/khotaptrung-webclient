@extends('frontend.layouts.master')
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
            @include('frontend.widget.__slider__banner')
        </div>

        <h2 class="section-title c-mt-24  c-mb-lg-8 d-none d-lg-flex">
            <i class="icon-title c-mr-8" style="--path:url(/assets/frontend/{{theme('')->theme_key}}/image/son/naptien.svg)"></i>
            Nạp tiền
        </h2>

{{--        nạp thẻ--}}
        <div class="row c-mt-16 c-mb-24 c-mt-lg-0" id="charge-detail">

            <div class="col-12 col-lg-8 c-pr-8 c-px-sm-0 ">
                <div class="recharge-money-container brs-12 brs-sm-0 c-pt-lg-4">
                    <div class="recharge-money-tab c-px-16">
                        <ul class="nav justify-content-between row" role="tablist" >
                            <li class="nav-item col-4 p-0" role="presentation">
                                <p class="nav-link active text-center mb-0 fw-400 fz-13" data-toggle="tab" href="#charge_card" role="tab" aria-selected="true">Nạp thẻ cào </p>
                            </li >
                            <li class="nav-item col-4 p-0" role="presentation">
                                <p class="nav-link text-center mb-0 fw-400 fz-13" data-toggle="tab" href="#atm_card" role="tab" aria-selected="false"> ATM tự động </p>
                            </li>
                            <li class="nav-item col-4 p-0" role="presentation">
                                <p class="nav-link text-center mb-0 fw-400 fz-13" data-toggle="tab" href="#wallet_card" role="tab" aria-selected="false">Ví điện tử</p>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content">
                        <div class="tab-pane fade active show c-p-16" id="charge_card" role="tabpanel">
                            <form action="">
                                <div class="row">
                                    <div class="col-12 col-md-6 c-pr-8">
                                        <div class="money-form-group c-mb-16">
                                            <label class="text-form fz-13 fw-500 c-mb-4">Nhà cung cấp</label>
                                            <div class="col-md-12 p-0">
                                                <select class="select-form w-100" name="select">
                                                    <option value="">Viettel - Nhận 100.0%</option>
                                                    <option value="3">VinaPhone - Nhận 70.0%</option>
                                                    <option value="4">Garena - Nhận 60.0%</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="money-form-group c-mb-12 d-block d-md-none">
                                            <label class="text-form fz-13 fw-500 c-mb-8">Chọn mệnh giá</label>
                                            <div class="col-md-12 p-0">
                                                <div class="row m-0">
                                                    <div class="col-4 c-px-6 money-radio-form">
                                                        <input name="amount" id="recharge_amount_0" type="radio" hidden="" checked="">
                                                        <label for="recharge_amount_0" class="c-py-16 c-px-8 c-mb-8 brs-8">
                                                            <p class="fw-500 fs-15 mb-0">10.000đ</p>
                                                        </label>
                                                    </div>
                                                    <div class="col-4 c-px-6 money-radio-form">
                                                        <input name="amount" id="recharge_amount_1" type="radio" hidden="">
                                                        <label for="recharge_amount_1" class="c-py-16 c-px-8 c-mb-8 brs-8">
                                                            <p class="fw-500 fs-15 mb-0">10.000đ</p>
                                                        </label>
                                                    </div>
                                                    <div class="col-4 c-px-6 money-radio-form">
                                                        <input name="amount" id="recharge_amount_2" type="radio" hidden="">
                                                        <label for="recharge_amount_2" class="c-py-16 c-px-8 c-mb-8 brs-8">
                                                            <p class="fw-500 fs-15 mb-0">10.000đ</p>
                                                        </label>
                                                    </div>
                                                    <div class="col-4 c-px-6 money-radio-form">
                                                        <input name="amount" id="recharge_amount_3" type="radio" hidden="">
                                                        <label for="recharge_amount_3" class="c-py-16 c-px-8 c-mb-8 brs-8">
                                                            <p class="fw-500 fs-15 mb-0">10.000đ</p>
                                                        </label>
                                                    </div>
                                                    <div class="col-4 c-px-6 money-radio-form">
                                                        <input name="amount" id="recharge_amount_4" type="radio" hidden="">
                                                        <label for="recharge_amount_4" class="c-py-16 c-px-8 c-mb-8 brs-8">
                                                            <p class="fw-500 fs-15 mb-0">10.000đ</p>
                                                        </label>
                                                    </div>
                                                    <div class="col-4 c-px-6 money-radio-form">
                                                        <input name="amount" id="recharge_amount_5" type="radio" hidden="">
                                                        <label for="recharge_amount_5" class="c-py-16 c-px-8 c-mb-8 brs-8">
                                                            <p class="fw-500 fs-15 mb-0">10.000đ</p>
                                                        </label>
                                                    </div>
                                                    <div class="col-4 c-px-6 money-radio-form">
                                                        <input name="amount" id="recharge_amount_6" type="radio" hidden="">
                                                        <label for="recharge_amount_6" class="c-py-16 c-px-8 c-mb-8 brs-8">
                                                            <p class="fw-500 fs-15 mb-0">10.000đ</p>
                                                        </label>
                                                    </div>
                                                    <div class="col-4 c-px-6 money-radio-form">
                                                        <input name="amount" id="recharge_amount_7" type="radio" hidden="">
                                                        <label for="recharge_amount_7" class="c-py-16 c-px-8 c-mb-8 brs-8">
                                                            <p class="fw-500 fs-15 mb-0">10.000đ</p>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="money-form-group c-mb-8">
                                            <label class="text-form fz-13 fw-500 c-mb-4">Mã số thẻ</label>
                                            <div class="col-md-12 p-0">
                                                <input class="input-form w-100" type="text" placeholder="Nhập mã số thẻ của bạn">
                                            </div>
                                        </div>
                                        <div class="money-form-group c-mb-8">
                                            <label class="text-form fz-13 fw-500 c-mb-4">Số sê-ri</label>
                                            <div class="col-md-12 p-0">
                                                <input class="input-form w-100" type="text" placeholder="Nhập mã số sê-ri trên thẻ">
                                            </div>
                                        </div>
                                        <div class="money-form-group">
                                            <label class="text-form fz-13 fw-500 c-mb-4">Mã bảo vệ</label>
                                            <div class="col-md-12 p-0 d-flex">
                                                <div style="flex: 1;">
                                                    <input class="input-form w-100" type="text" placeholder="Nhập mã bảo vệ ">
                                                </div>
                                                <div class="captcha c-mx-8">
                                                    <div>
                                                    <span>
                                                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/phu/capcha_example.png" alt="">
                                                    </span>
                                                    </div>
                                                </div>
                                                <button class="refresh-captcha brs-8">
                                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/phu/captcha_refresh.png" alt="">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-12 p-0 c-mt-12 d-flex d-md-none">
                                            <button class="btn primary w-100 js-step"  data-target="#step2" type="button">
                                                Nạp ngay
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-md-6 c-pl-8 d-none d-md-flex flex-column justify-content-between">
                                        <div class="money-form-group c-mb-16">
                                            <label class="text-form fz-13 fw-500 c-mb-4">Chọn mệnh giá</label>
                                            <div class="col-md-12 p-0">
                                                <div class="row m-0">
                                                    <div class="col-4 c-px-4 money-radio-form">
                                                        <input name="amount" id="recharge_amount_0" type="radio" hidden="" checked="">
                                                        <label for="recharge_amount_0" class="c-py-16 c-px-8 c-mb-8 brs-8">
                                                            <p class="fw-500 fs-15 mb-0">10.000đ</p>
                                                        </label>
                                                    </div>
                                                    <div class="col-4 c-px-4 money-radio-form">
                                                        <input name="amount" id="recharge_amount_1" type="radio" hidden="">
                                                        <label for="recharge_amount_1" class="c-py-16 c-px-8 c-mb-8 brs-8">
                                                            <p class="fw-500 fs-15 mb-0">10.000đ</p>
                                                        </label>
                                                    </div>
                                                    <div class="col-4 c-px-4 money-radio-form">
                                                        <input name="amount" id="recharge_amount_2" type="radio" hidden="">
                                                        <label for="recharge_amount_2" class="c-py-16 c-px-8 c-mb-8 brs-8">
                                                            <p class="fw-500 fs-15 mb-0">10.000đ</p>
                                                        </label>
                                                    </div>
                                                    <div class="col-4 c-px-4 money-radio-form">
                                                        <input name="amount" id="recharge_amount_3" type="radio" hidden="">
                                                        <label for="recharge_amount_3" class="c-py-16 c-px-8 c-mb-8 brs-8">
                                                            <p class="fw-500 fs-15 mb-0">10.000đ</p>
                                                        </label>
                                                    </div>
                                                    <div class="col-4 c-px-4 money-radio-form">
                                                        <input name="amount" id="recharge_amount_4" type="radio" hidden="">
                                                        <label for="recharge_amount_4" class="c-py-16 c-px-8 c-mb-8 brs-8">
                                                            <p class="fw-500 fs-15 mb-0">10.000đ</p>
                                                        </label>
                                                    </div>
                                                    <div class="col-4 c-px-4 money-radio-form">
                                                        <input name="amount" id="recharge_amount_5" type="radio" hidden="">
                                                        <label for="recharge_amount_5" class="c-py-16 c-px-8 c-mb-8 brs-8">
                                                            <p class="fw-500 fs-15 mb-0">10.000đ</p>
                                                        </label>
                                                    </div>
                                                    <div class="col-4 c-px-4 money-radio-form">
                                                        <input name="amount" id="recharge_amount_6" type="radio" hidden="">
                                                        <label for="recharge_amount_6" class="c-py-16 c-px-8 c-mb-8 brs-8">
                                                            <p class="fw-500 fs-15 mb-0">10.000đ</p>
                                                        </label>
                                                    </div>
                                                    <div class="col-4 c-px-4 money-radio-form">
                                                        <input name="amount" id="recharge_amount_7" type="radio" hidden="">
                                                        <label for="recharge_amount_7" class="c-py-16 c-px-8 c-mb-8 brs-8">
                                                            <p class="fw-500 fs-15 mb-0">10.000đ</p>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn primary btn-charge" type="button" >
                                            Nạp ngay
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade c-p-16" id="atm_card" role="tabpanel" >
                            <form action="">
                                <div class="row">
                                    <div class="col-12 col-md-6 c-pr-8 d-none d-md-block">
                                        <div class="atm-recharge-left c-p-16 brs-8 d-flex justify-content-between align-items-center">
                                            <p class="fz-13 fw-400 mb-0">Ngân hàng Kỹ thương Việt Nam (Techcombank)</p>
                                            <div>
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/phu/tech_logo.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="atm-recharge-right c-p-16 brs-8">
                                            <div class="atm-recharge-guide">
                                                <img class="w-100 c-mb-16" src="/assets/frontend/{{theme('')->theme_key}}/image/phu/atm_recharge_guide.png" alt="">
                                                <p class="fz-13 fw-400">Để hoàn tất đơn nạp, bạn vui lòng chuyển khoản theo cú pháp sau:</p>
                                            </div>
                                            <div class="atm-recharge-content c-p-sm-12 brs-sm-8">
                                                <div class="atm-recharge-attr c-mb-12 d-flex justify-content-between align-items-center d-md-none">
                                                    <p class="fz-13 fw-400 mb-0">Ngân hàng Kỹ thương Việt Nam (Techcombank)</p>
                                                    <div class="fz-13 fw-500">
                                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/phu/tech_logo.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="atm-recharge-attr c-mb-12 d-flex justify-content-between align-items-center">
                                                    <p class="fz-13 fw-400 mb-0">Chủ tài khoản</p>
                                                    <div class="fz-13 fw-500">BUI THI NHAM</div>
                                                </div>
                                                <div class="atm-recharge-attr c-mb-12 d-flex justify-content-between align-items-center">
                                                    <p class="fz-13 fw-400 mb-0">Số tài khoản</p>
                                                    <div class="fz-13 fw-500">1903 7861 065 016</div>
                                                </div>
                                                <div class="atm-recharge-attr d-flex justify-content-between align-items-center">
                                                    <p class="fz-13 fw-400 mb-0">Nội dung</p>
                                                    <div class="fz-13 fw-500">NAP DTGRN 103764</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade c-p-16" id="wallet_card" role="tabpanel" >
                            <form action="">
                                <div class="row">
                                    <div class="col-12 col-md-6 c-pr-8">
                                        <div class="atm-recharge-guide">
                                            <img class="w-100 c-mb-16" src="/assets/frontend/{{theme('')->theme_key}}/image/phu/wallet_recharge_guide.png" alt="">
                                        </div>
                                        <p class="wallet-recharge-title c-mb-30 c-mb-sm-16 fw-700 fz-13">Vui lòng chọn chuyển khoản vào 1 trong các tài khoản ví dưới đây</p>
                                        <div class="wallet-card brs-8 c-p-8 c-mb-16 d-flex">
                                            <div class="wallet-card-img c-mr-8">
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/phu/thesieure.png" alt="">
                                            </div>
                                            <div class="wallet-card-content">
                                                <div class="wallet-card-name fw-500 fz-13">
                                                    Chủ tài khoản: Trần Văn Sơn
                                                </div>
                                                <div class="wallet-card-address fw-400 fz-13">
                                                    Chi nhánh: Hà Nội
                                                </div>
                                                <div class="wallet-card-web fw-400 fz-13">
                                                    thesieure.com
                                                </div>
                                            </div>
                                            <div class="wallet-card-qr">
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/phu/qr_code.png" alt="">
                                            </div>
                                        </div>
                                        <div class="wallet-card brs-8 c-p-8 d-flex">
                                            <div class="wallet-card-img c-mr-8">
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/phu/thesieure.png" alt="">
                                            </div>
                                            <div class="wallet-card-content">
                                                <div class="wallet-card-name fw-500 fz-13">
                                                    Chủ tài khoản: Trần Văn Sơn
                                                </div>
                                                <div class="wallet-card-address fw-400 fz-13">
                                                    Chi nhánh: Hà Nội
                                                </div>
                                                <div class="wallet-card-web fw-400 fz-13">
                                                    thesieure.com
                                                </div>
                                            </div>
                                            <div class="wallet-card-qr">
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/phu/qr_code.png" alt="">
                                            </div>
                                        </div>
                                        <div class="c-mt-24 d-block d-md-none">
                                            <p class="wallet-recharge-title c-mb-4 fw-700 fz-13">Nội dung thanh toán</p>
                                            <p class="wallet-recharge-message fw-400 fz-13 mb-0">Doithegarena.com + [ID tài khoản hoặc tên tài khoản]</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 c-pl-8 d-none d-md-block">
                                        <p class="wallet-recharge-title c-mb-4 fw-700 fz-13">Nội dung thanh toán</p>
                                        <p class="wallet-recharge-message fw-400 fz-13 mb-0">Doithegarena.com + [ID tài khoản hoặc tên tài khoản]</p>
                                    </div>
                                </div>
                            </form>
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
                        Thông tin mua thẻ
                    </div>
                    <div class="card--gray c-mb-16 c-pt-8 c-pb-8 c-pl-12 c-pr-12 brs-8 g_mobile-content">
                        <div class="card--attr justify-content-between d-flex c-mb-8 text-center">
                            <div class="card--attr__name fw-400 fz-13 text-center text-order">
                                Nhà mạng
                            </div>
                            <div class="card--attr__value fz-13 fw-500">Viettel</div>
                        </div>
                        <div class="card--attr justify-content-between d-flex c-mb-8 text-center">
                            <div class="card--attr__name fw-400 fz-13 text-center text-order">
                                Giá niêm yết
                            </div>
                            <div class="card--attr__value fz-13 fw-500">20.000đ</div>
                        </div>
                        <div class="card--attr justify-content-between d-flex c-mb-8 text-cente text-order">
                            <div class="card--attr__name fw-400 fz-13 text-center">
                                Số lượng
                            </div>
                            <div class="card--attr__value fz-13 fw-500">01</div>
                        </div>
                        <div class="card--attr justify-content-between d-flex c-mb-8 text-center text-order">
                            <div class="card--attr__name fw-400 fz-13 text-center">
                                Chiết khấu
                            </div>
                            <div class="card--attr__value fz-13 fw-500">1%</div>
                        </div>
                    </div>
                    <div class="card--gray c-mb-16 c-pt-8 c-pb-8 c-pl-12 c-pr-12 brs-8 g_mobile-content">
                        <div class="card--attr justify-content-between d-flex  c-mb-8 text-center">
                            <div class="card--attr__name fz-13 fw-400 text-center text-order">
                                Phương thức thanh toán
                            </div>
                            <div class="card--attr__value fz-13 fw-500">
                                Tài khoản Shopbrand
                            </div>
                        </div>
                        <div class="card--attr justify-content-between d-flex  c-mb-8 text-center">
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
                            <div class="card--attr__value fz-13 fw-500"><a href="javascript:void(0)" class="c-text-primary">9.900 đ</a></div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="footer-mobile v2">
                <div class="c-px-16 c-pt-16 group-btn" >
                    <button class="btn primary btn-success-mobile">Xác nhận</button>
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
                            Thông tin mua thẻ
                        </div>
                        <div class="card--gray c-mb-16 c-pt-8 c-pb-8 c-pl-12 c-pr-12">
                            <div class="card--attr justify-content-between d-flex c-mb-8 text-center">
                                <div class="card--attr__name fw-400 fz-13 text-center">
                                    Nhà mạng
                                </div>
                                <div class="card--attr__value fz-13 fw-500">Viettel</div>
                            </div>
                            <div class="card--attr justify-content-between d-flex c-mb-8 text-center">
                                <div class="card--attr__name fw-400 fz-13 text-center">
                                    Giá niêm yết
                                </div>
                                <div class="card--attr__value fz-13 fw-500">10.000đ</div>
                            </div>
                            <div class="card--attr justify-content-between d-flex c-mb-8 text-center">
                                <div class="card--attr__name fw-400 fz-13 text-center">
                                    Số lượng
                                </div>
                                <div class="card--attr__value fz-13 fw-500">01</div>
                            </div>
                            <div class="card--attr justify-content-between d-flex c-mb-8 text-center">
                                <div class="card--attr__name fw-400 fz-13 text-center">
                                    Chiết khấu
                                </div>
                                <div class="card--attr__value fz-13 fw-500">1%</div>
                            </div>
                            <div class="card--attr justify-content-between d-flex c-mb-8 text-center">
                                <div class="card--attr__name fw-400 fz-13 text-center">
                                    Số điện thoại được nạp
                                </div>
                                <div class="card--attr__value fz-13 fw-500">098 1234 1223</div>
                            </div>
                        </div>
                        <div class="card--gray c-mb-16 c-pt-8 c-pb-8 c-pl-12 c-pr-12">
                            <div class="card--attr justify-content-between d-flex c-mb-8 text-center">
                                <div class="card--attr__name fz-13 fw-400 text-center">
                                    Phương thức thanh toán
                                </div>
                                <div class="card--attr__value fz-13 fw-500">
                                    Tài khoản Shopbrand
                                </div>
                            </div>
                            <div class="card--attr justify-content-between d-flex c-mb-8 text-center">
                                <div class="card--attr__name fw-400 fz-13 text-center">
                                    Giá niêm yết
                                </div>
                                <div class="card--attr__value fz-13 fw-500">
                                    20.000đ
                                </div>
                            </div>
                        </div>
                        <div class="card--gray  c-mb-0 c-pt-8 c-pb-8 c-pl-12 c-pr-12">
                            <div class="card--attr justify-content-between d-flex c-mb-8 text-center">
                                <div class="card--attr__name fw-400 fz-13 text-center">
                                    Số tiền thực nhận
                                </div>
                                <div class="card--attr__value fz-13 fw-500"><a href="javascript:void(0)" class="c-text-primary">9.900 đ</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn primary">Xác nhận</button>

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
@section('scripts')
    <script>
        $('body').on('click','#charge-detail .btn-charge',function(e){
            e.preventDefault();
            $('#orderCharge').modal('show');
        })

    </script>
@endsection
