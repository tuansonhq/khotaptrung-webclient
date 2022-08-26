<div class="block-card-item mt-fix-20">
    <div class="row">
        <div class="col-lg-8 col-md-12"  style="min-height: 100%">

            <div class=" block-product " style="min-height: 532px">
                <div class="product-header d-flex d-md-flex">
                    <span>
                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/svg/naptienindex.svg" alt="">
                    </span>
                    <h2 class="text-title" >{{ $title??'Nạp tiền' }}</h2>
                    <div class="navbar-spacer"></div>
                </div>
                <div class="box-product position-static" >
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
                                <div class="box-charge-card row">
                                    <div class="col-md-6">
                                        <div class="default-form-group mb-fix-20">
                                            <label class="text-form">Nhà cung cấp</label>
                                            <div class="col-md-12 p-0" >
                                                <select class="select-form w-100" name="type" id="telecom">


                                                </select>
                                            </div>
                                        </div>
                                        <div class="default-form-group mb-fix-20 d-block d-lg-none">
                                            <label class="text-form">Chọn mệnh giá</label>
                                            <div class="col-md-12 p-0" >
                                                <div class="row m-0 amount_charge" id="amount_mobile">
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
                                            <div class="row p-0">
                                                <div class="col-md-12 d-flex ">
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
                                                <div class="col-md-5 mt-md-fix-20 d-block d-lg-none">
                                                    <button  class=" primary-button button-default-ct w-75 w-md-100"  type="submit" style="float: right">
                                                        Nạp ngay
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-6  d-none d-lg-flex" style="    justify-content: space-between;flex-direction: column;">
                                        <div class="default-form-group mb-fix-20">
                                            <label class="text-form">Chọn mệnh giá</label>
                                            <div class="col-md-12 p-0" >
                                                <div class="row m-0 amount_charge" id="amount">
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
                                        <button  class=" primary-button button-default-ct w-100 mb-fix-20"  type="submit" style="float: right">
                                            Nạp ngay
                                        </button>
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
                                            <div class="error_transfer_code">
                                                <p style="text-align: center; margin: auto; color: red;font-weight: 600;font-size: 14px"> Vui lòng đăng nhập để nhận được nội dung chuyển tiền </p>
                                            </div>
                                            <div class="card--attr transfer-title">
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
        <div class="col-lg-4 col-md-12 pl-0 d-g-md-none " style="min-height: 100%">
            <div class="charge-content" style="">
                <div class="charge-content-img" style="">
                </div>
                @if(theme('')->theme_config->sys_theme_ver == 'sys_theme_ver3.2' )
                    <div class="charge-content-detail" style="  ">
                        <div class="" role="alert">
                            @if (setting('sys_charge_content') != "")

                                {!! setting('sys_charge_content') !!}


                            @endif
                        </div>
                    </div>
                @endif

            </div>

        </div>
    </div>
</div>
