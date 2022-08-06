<div class="row c-mt-16">
    <div class="col-12 col-lg-3 c-pr-12 c-p-sm-0">
        <h1 class="buy-card-title fw-700 fz-20 lh-28 c-mt-0 c-mb-8 c-py-8 d-none d-lg-block">Mua thẻ</h1>
        <div class="buy-card-container brs-12 brs-lg-0">
            <div class="buy-card-tab brs-12 brs-lg-0 c-px-15">
                <ul class="nav justify-content-between row" role="tablist" >
                    <li class="nav-item col-6 col-lg-12 p-0" role="presentation">
                        <p class="nav-link active mb-0 c-py-10 fw-500 fz-15" data-toggle="tab" href="#gameCard" role="tab" aria-selected="true">Thẻ Game</p>
                    </li >
                    <li class="nav-item col-6 col-lg-12 p-0" role="presentation">
                        <p class="nav-link mb-0 c-py-10 fw-500 fz-15" data-toggle="tab" href="#mobileCard" role="tab" aria-selected="false">Thẻ điện thoại</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="head-mobile">
        <a href="#" class="link-back close-step"></a>

        <h1 class="head-title text-title">Mua thẻ</h1>

        <a href="/" class="home"></a>
    </div>
    <div class="col-12 col-lg-9 c-pl-12 c-p-sm-0">
        <div class="row">
            <div class=" tab-content col-12 col-lg-6 c-pr-12 c-pl-12 c-px-sm-24">
                <div class="tab-pane fade active show" id="gameCard" role="tabpanel">
                    <div class="buy-card-section c-mb-8 c-mb-sm-0">
                        <label class="text-form fz-13 fw-500 c-py-16 c-mb-sm-0 c-pb-sm-8">Chọn loại thẻ</label>
                        <div class="col-md-12 p-0">
                            <div class="row m-0" id="cardGameList">
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
                    </div>
                </div>
                <div class="tab-pane fade" id="mobileCard" role="tabpanel" >
                    <div class="buy-card-section c-mb-8 c-mb-sm-0">
                        <label class="text-form fz-13 fw-500 c-py-16 c-mb-sm-0 c-pb-sm-8">Chọn loại thẻ</label>
                        <div class="col-md-12 p-0">
                            <div class="row m-0" id="cardPhoneList">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="cardPriceInfo" class="col-12 col-lg-6 c-pl-12 c-px-sm-24">

                <div class="loader position-relative d-none" style="margin: 2rem 0">
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

                <div id="cardPriceContent" class="d-none">
                    <div class="buy-card-section c-mb-8">
                        <label class="text-form fz-13 fw-500 c-py-16 c-mb-sm-0 c-py-sm-8">Chọn mệnh giá</label>
                        <div class="col-md-12 p-0">
                            <div class="row m-0" id="cardAmountList">

                            </div>
                        </div>
                    </div>
                    <div class="buy-card-info c-p-16 c-mb-20 brs-12">
                        <div class="buy-card-info-block d-flex justify-content-between align-items-center c-mb-12">
                            <span class="buy-card-info-title fw-500 fz-13">Số lượng thẻ</span>
                            <div class="js-quantity">
                                <div class="js-quantity-minus"></div>
                                <input type="text" name="card-amount" value="1" class="js-quantity-input">
                                <div class="js-quantity-add"></div>
                            </div>
                        </div>
                        <div class="buy-card-info-block d-flex justify-content-between align-items-center c-mb-12">
                            <input name="card-discount" type="hidden" value="">
                            <span class="buy-card-info-title fw-500 fz-13">Chiết khấu</span>
                            <span class="buy-card-discount fw-400 fz-13"></span>
                        </div>
                        <div class="buy-card-info-block d-flex justify-content-between align-items-center">
                            <span class="buy-card-info-title fw-500 fz-13">Thành tiền</span>
                            <span class="buy-card-total fw-500 fz-15"></span>
                        </div>
                    </div>
                    <button class="btn primary w-100 d-none d-lg-block" id="btn-confirm" data-toggle="modal" data-target="#modalConfirmPayment" type="button">
                        Mua ngay
                    </button>
                    <div class="footer-mobile group-btn c-px-16 c-pt-16 d-flex d-lg-none">
                        <button id="btn-confirm-mobile" class="btn primary js-step" data-target="#step2" type="button">Mua ngay</button>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
