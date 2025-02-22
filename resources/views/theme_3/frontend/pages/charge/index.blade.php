@extends('frontend.layouts.master')
@section('styles')
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/lib_bootstrap.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/minigame.css">
@endsection
{{--@push('js')--}}

{{--@endpush--}}
@section('content')

    <div class="container container-fix">
        <div class="block-card-item " >
            <fieldset id="fieldset-one_transaction">
                <section class="media-mobile">
                    <div class=" banner-mobile-container-ct">
                        <div class="row marginauto banner-mobile-row-ct">
                            <div class="col-auto left-right box-account-mobile_open" style="width: 10%" >
                                <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/back.png" alt="" >
                            </div>

                            <div class="col-auto left-right banner-mobile-span text-center" style="width: 80%">
                                <h3>Nạp thẻ</h3>
                            </div>
                            <div class="col-auto left-right" style="width: 10%">
                            </div>
                        </div>
                    </div>
                </section>
                <section class="media-web mb-fix-16">
                    <div class=" menu-container-ct">
                        <ul class="d-flex" style="float: inherit">
                            <li><a href="">Trang chủ</a></li>
                            <li class="menu-container-li-ct"><img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/arrow-right.png" alt=""></li>
                            <li class="menu-container-li-ct"><a href="">Nạp tiền</a></li>
                            {{--                            <li class="menu-container-li-ct"><img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/arrow-right.png" alt=""></li>--}}
                            {{--                            <li class="menu-container-li-ct"><a href="">Cày xếp hạng ELO/ Liên Minh</a></li>--}}
                        </ul>
                    </div>
                </section>
                <div class="row">
                    <div class="col-lg-5 col-md-12"  style="min-height: 100%">
                        <div class=" block-product "  style="min-height: 780px">
                            <div class="product-header d-none d-md-flex">
                                <span>
                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/charge_card_icon.png" alt="">
                                </span>
                                <p class="text-title" >Nạp tiền</p>
                                <div class="navbar-spacer"></div>
                            </div>
                            <div class="box-product " >
                                <div class="default-tab pr-fix-16 pl-fix-16">
                                <ul class="nav justify-content-between row" role="tablist" >
                                    <li class="nav-item col-6 col-md-6 p-0  p-md-0" role="presentation">
                                        <a  class="nav-link active text-center " data-toggle="tab" href="#charge_card" role="tab" aria-selected="true">Nạp thẻ <span class="d-g-none">cào</span> </a>
                                    </li >
                                    <li class="nav-item col-6 col-md-6 p-0 p-md-0" role="presentation">
                                        <a  class="nav-link text-center "  data-toggle="tab" href="#atm_card" role="tab" aria-selected="false"> ATM <span class="d-g-none">tự động</span> </a>
                                    </li>
{{--                                    <li class="nav-item col-6col-md-6 p-0 p-md-0" role="presentation">--}}
{{--                                        <a  class="nav-link text-center " data-toggle="tab" href="#wallet_card" role="tab" aria-selected="false">Ví điện tử</a>--}}
{{--                                    </li>--}}
                                </ul>
                            </div>
                                <div class=" tab-content">
                                <div class="tab-pane fade active show  mt-3" id="charge_card" role="tabpanel" >
                                    <div class="loading-data">
                                        <div class="loader">
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
                                    <form action="{{route('postTelecomDepositAuto')}}" method="POST" class="form-charge hide_charge" id="form-charge2">
                                        @csrf
                                        <div class="box-charge-card">
                                            <div class="default-form-group mb-fix-20">
                                                <label class="text-form">Nhà cung cấp</label>
                                                <div class="col-md-12 p-0" >
                                                    <select class="select-form w-100" name="type" id="telecom">


                                                    </select>
                                                </div>
                                            </div>
                                            <div class="default-form-group mb-fix-20">
                                                <label class="text-form">Chọn mệnh giá</label>
                                                <div class="col-md-12 p-0" >
                                                    <div class="row m-0" id="amount">
                                                        <div class="amount-loading">
                                                            <div class="loader">
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
                                            <div class="default-form-group mb-fix-20">
                                                <label class="text-form">Mã số thẻ</label>
                                                <div class="col-md-12 p-0">
                                                    <input class="input-form w-100" type="text" name="pin" placeholder="Nhập mã số thẻ" required>

                                                </div>
                                            </div>
                                            <div class="default-form-group mb-fix-20">
                                                <label class="text-form">Số Seri</label>
                                                <div class="col-md-12 p-0">
                                                    <input class="input-form w-100" type="text" name="serial" placeholder="Nhập số seri thẻ" required>

                                                </div>
                                            </div>
                                            <div class="default-form-group mb-fix-20">
                                                <label class="text-form">Mã bảo vệ</label>
                                                <div class="col-md-12 p-0 d-flex">
                                                    <input class="input-form w-100" name="captcha" type="text" placeholder="Nhập mã bảo vệ" required>
                                                    <div class="captcha captcha_1" >
                                                        <span class="reload">
                                                             {!! captcha_img('flat') !!}
                                                        </span>
                                                    </div>
                                                    <button class="refresh-captcha" id="reload_1" type="button">
                                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/captcha_refresh.png" alt="">
                                                    </button>

                                                </div>
                                            </div>
                                            <div class="default-form-group mb-fix-20 d-none d-md-block ">
{{--                                                btn-charge-data--}}
                                                <button  class="w-100 primary-button button-default-ct " type="submit">
                                                    Nạp ngay
                                                </button>
                                            </div>
                                            <div class="col-md-12 left-right padding-order-footer-mobile-ct fixcungbuttonmobile d-block d-md-none">
                                                <div class="row marginauto" style="padding: 12px 16px">
                                                    <div class="col-md-12 left-right">
                                                        <button id="charge_next" class="button-default-ct button-next-step-one" type="submit">Nạp ngay</button>
                                                    </div>
                                                </div>
                                            </div>
                                            @include('frontend.widget.modal.__charge')
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade  mt-3 " id="atm_card" role="tabpanel" >
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
                                                    <div class="card--attr">
                                                        <div class="card--attr__name">
                                                            Nội dung chuyển tiền
                                                        </div>
                                                        <div class="card--attr__value d-flex " >
                                                            <div class="card__info transfer-code" id=""></div>

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
                            </div>
                         </div>
                    </div>
                    <div class="col-lg-7 col-md-12 pl-0 d-g-md-none " style="min-height: 100%">
                        <img class="w-100" src="/assets/frontend/{{theme('')->theme_key}}/image/charge_card.png" alt="" style="min-height: 100%">
                    </div>
                 </div>
             </fieldset>
            <fieldset id="fieldset-two-charge" style="background-color: white">
                <section>
                    <div class="container container-fix banner-mobile-container-ct">
                        <div class="row marginauto banner-mobile-row-ct">
                            <div class="col-auto left-right" style="width: 10%">
                                <img id="charge_prev" class="lazy previous-step-one" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/back.png" alt="" >
                            </div>

                            <div class="col-auto left-right banner-mobile-span text-center" style="width: 80%">
                                <h3>Xác nhận thanh toán</h3>
                            </div>
                            <div class="col-auto left-right" style="width: 10%">
                            </div>
                        </div>

                    </div>
                </section>

                <section>
                    <div class="row marginauto" style="padding: 12px 16px">

                        <div class="col-md-12 left-right title-order-ct">
                            <span>Thông tin nạp thẻ</span>
                        </div>
                        <div class="col-md-12 left-right padding-order-ct">
                            <div class="row marginauto">
                                <div class="col-md-12 left-right background-order-ct">
                                    <div class="row marginauto background-order-body-row-ct">
                                        <div class="col-auto left-right background-order-col-left-ct">
                                            <span>Nhà mạng</span>
                                        </div>
                                        <div class="col-auto left-right background-order-col-right-ct charge_name">

                                        </div>
                                    </div>

                                    <div class="row marginauto background-order-body-row-ct">
                                        <div class="col-auto left-right background-order-col-left-ct">
                                            <span>Giá niêm yết</span>
                                        </div>
                                        <div class="col-auto left-right background-order-col-right-ct charge_amount">

                                        </div>
                                    </div>

                                    <div class="row marginauto background-order-body-row-ct">
                                        <div class="col-auto left-right background-order-col-left-ct">
                                            <span>Chiết khấu</span>
                                        </div>
                                        <div class="col-auto left-right background-order-col-right-ct charge_ratito">

                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>

                        <div class="col-md-12 left-right padding-order-ct">
                            <div class="row marginauto">
                                <div class="col-md-12 left-right background-order-ct">
                                    <div class="row marginauto background-order-body-bottom-ct">
                                        <div class="col-auto left-right background-order-col-left-ct">
                                            <span>Phí thanh toán</span>
                                        </div>
                                        <div class="col-auto left-right background-order-col-right-ct">
                                            <small>Miễn phí</small>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="col-md-12 left-right padding-order-ct">
                            <div class="row marginauto">
                                <div class="col-md-12 left-right background-order-ct">
                                    <div class="row marginauto background-order-row-ct">
                                        <div class="col-auto left-right background-order-col-left-ct">
                                            <span>Số tiền thực nhận</span>
                                        </div>
                                        <div class="col-auto left-right background-order-col-right-ct">
                                            <span>97.000 đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 left-right padding-order-footer-mobile-ct fixcungbuttonmobile">
                            <div class="row marginauto" style="padding: 12px 16px">
                                <div class="col-md-12 left-right">
                                    <button class="button-default-ct button-next-step-two btn-confirm-charge" type="button">Xác nhận</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

              <input type="hidden" name="previous" class="input-back-step-two" value="Trang trước"/>

        </fieldset>

         </div>
    </div>

    @include('theme_3.frontend.widget.modal.__success_charge')
    @include('theme_3.frontend.widget.modal.__reject_charge')
    @include('theme_3.frontend.widget.modal.__success_charge_atm')
    @include('theme_3.frontend.widget.modal.__success_wallet_card')

    <script src="/assets/frontend/theme_3/js/charge/charge.js?v={{time()}}"></script>
    <script src="/assets/frontend/theme_3/js/transfer/transfer.js?v={{time()}}"></script>

@endsection
