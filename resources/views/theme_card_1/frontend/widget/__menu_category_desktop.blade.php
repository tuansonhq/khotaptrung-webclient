@foreach($data??[] as $item)

    @if ($item->parent_id == 0)
        @if($item->url == "/tin-tuc")
            @if(setting('sys_zip_shop') && setting('sys_zip_shop') != '')


                <li class="m1">
                    <a href="{{ setting('sys_zip_shop') }}" @if($item->target==1) target="_blank" @endif>{{$item->title}}</a>
                </li>
            @else
                <li class="m1">
                    <a href="{{$item->url}}" @if($item->target==1) target="_blank" @endif>{{$item->title}}</a>
                </li>
            @endif
        @elseif($item->url == '/nap-the' || $item->url =='/recharge-atm')

            @if(!App\Library\AuthCustom::check())
                <li class="m1">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#signin" @if($item->target==1) target="_blank" @endif>{{$item->title}}</a>
                </li>
            @else
                <li class="m1">
                    <a href="javascript:void(0)" data-toggle="modal" data-target="#rechargeModal" @if($item->target==1) target="_blank" @endif>{{$item->title}}</a>
                </li>
            @endif
        @else
            <li class="m1 ">
                <a href="{{$item->url}}" @if($item->target==1) target="_blank" @endif>{{$item->title}}</a>
                <ul class="sub-menu" >
                    @foreach ($data??[] as $key_child => $child_item)
                        @if ($item->id == $child_item->parent_id)
                            <li class="menu-item">
                                <a  href="{{$child_item->url}}" class="\">{{$child_item->title}}</a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </li>
        @endif
    @endif
@endforeach

<div class="modal fade modal-big show" id="rechargeModal" style="display: block; padding-right: 17px;" aria-modal="true">
    <div class="modal-dialog modal-dialog-centered modal-custom">
        <div class="modal-content p-0">
            <div class="modal-header c-pl-24 c-pr-24 c-pt-24 c-pb-16" style="border-bottom: 1px solid #E4E5F0">
                <p class="modal-title center" style="
    margin-top: 0;
    font-weight: 700;
    font-size: 15px;
    line-height: 24px;
    width: 100%;
    text-align: center;">Nạp tiền</p>
                <button type="button" class="close" data-dismiss="modal" style="right: 24px;top: 36px"></button>
            </div>
            <div class="modal-body pl-0 pr-0 c-pt-0 c-pb-24">
                <section class="section-category-tab">
                    <div class="c-mb-16 c-mb-lg-16">
                        <ul class="nav nav-tabs size-auto" role="tablist" style="width: 100%;margin: 0 auto">
                            <li class="nav-item" role="presentation">
                                <a class="tab active" data-toggle="tab" href="#charge_card_modal" role="tab" aria-selected="true">Nạp thẻ cào</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="tab" data-toggle="tab" href="#atm_card_modal" role="tab" aria-selected="false">ATM tự động</a>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content c-pl-24 c-pl-lg-16 c-pr-24 c-pr-lg-16">
                        <div class="tab-pane fade show active" id="charge_card_modal" role="tabpanel">
                            <form class="w-100" action="" id="chargeCardModalForm">
                                <div class="row content-block">
                                    <div class="col-12 c-pr-8">
                                        <div class="money-form-group c-mb-16">
                                            <label class="text-form fz-13 fw-500 c-mb-4">Nhà cung cấp</label>
                                            <div class="col-md-12 p-0">
                                                <select class="select-form w-100" name="type" id="telecom_modal" style="display: none;">
                                                    <option value="Viettel">Viettel - Nhận 70%</option>
                                                    <option value="VIETNAMMOBILE">VIETNAMMOBILE</option>
                                                    <option value="VINAPHONE">VINAPHONE</option>
                                                    <option value="MOBIFONE">MOBIFONE</option>
                                                    <option value="GARENA">GARENA</option>
                                                </select><div class="nice-select select-form w-100" tabindex="0"><span class="current">Viettel - Nhận 70%</span><ul class="list"><li data-value="Viettel" class="option selected focus">Viettel - Nhận 70%</li><li data-value="VIETNAMMOBILE" class="option">VIETNAMMOBILE</li><li data-value="VINAPHONE" class="option">VINAPHONE</li><li data-value="MOBIFONE" class="option">MOBIFONE</li><li data-value="GARENA" class="option">GARENA</li></ul></div>
                                            </div>
                                        </div>
                                        <div class="money-form-group c-mb-12">
                                            <label class="text-form fz-13 fw-500 c-mb-8">Chọn mệnh giá</label>
                                            <div class="col-md-12 p-0">
                                                <div class="row m-0 c-mx-n4" id="cardAmountModal"><div class="col-4 c-px-4 money-radio-form"><input name="amount" type="radio" id="recharge_amount_modal_0" data-ratio="70.0" value="10000" hidden="" checked=""><label for="recharge_amount_modal_0" class="c-py-16 c-px-8 c-mb-8 brs-8 p_recharge_amount"><p class="fw-500 fs-15 mb-0">10.000đ</p></label></div><div class="col-4 c-px-4 money-radio-form"><input name="amount" type="radio" id="recharge_amount_modal_1" data-ratio="100.0" value="20000" hidden=""><label for="recharge_amount_modal_1" class="c-py-16 c-px-8 c-mb-8 brs-8 p_recharge_amount"><p class="fw-500 fs-15 mb-0">20.000đ</p></label></div><div class="col-4 c-px-4 money-radio-form"><input name="amount" type="radio" id="recharge_amount_modal_2" data-ratio="100.0" value="30000" hidden=""><label for="recharge_amount_modal_2" class="c-py-16 c-px-8 c-mb-8 brs-8 p_recharge_amount"><p class="fw-500 fs-15 mb-0">30.000đ</p></label></div><div class="col-4 c-px-4 money-radio-form"><input name="amount" type="radio" id="recharge_amount_modal_3" data-ratio="100.0" value="50000" hidden=""><label for="recharge_amount_modal_3" class="c-py-16 c-px-8 c-mb-8 brs-8 p_recharge_amount"><p class="fw-500 fs-15 mb-0">50.000đ</p></label></div><div class="col-4 c-px-4 money-radio-form"><input name="amount" type="radio" id="recharge_amount_modal_4" data-ratio="100.0" value="100000" hidden=""><label for="recharge_amount_modal_4" class="c-py-16 c-px-8 c-mb-8 brs-8 p_recharge_amount"><p class="fw-500 fs-15 mb-0">100.000đ</p></label></div><div class="col-4 c-px-4 money-radio-form"><input name="amount" type="radio" id="recharge_amount_modal_5" data-ratio="100.0" value="200000" hidden=""><label for="recharge_amount_modal_5" class="c-py-16 c-px-8 c-mb-8 brs-8 p_recharge_amount"><p class="fw-500 fs-15 mb-0">200.000đ</p></label></div><div class="col-4 c-px-4 money-radio-form"><input name="amount" type="radio" id="recharge_amount_modal_6" data-ratio="100.0" value="500000" hidden=""><label for="recharge_amount_modal_6" class="c-py-16 c-px-8 c-mb-8 brs-8 p_recharge_amount"><p class="fw-500 fs-15 mb-0">500.000đ</p></label></div><div class="col-4 c-px-4 money-radio-form"><input name="amount" type="radio" id="recharge_amount_modal_7" data-ratio="100.0" value="1000000" hidden=""><label for="recharge_amount_modal_7" class="c-py-16 c-px-8 c-mb-8 brs-8 p_recharge_amount"><p class="fw-500 fs-15 mb-0">1.000.000đ</p></label></div></div>
                                            </div>
                                        </div>
                                        <div class="money-form-group c-mb-8">
                                            <label class="text-form fz-13 fw-500 c-mb-4 d-none d-lg-block">Mã số thẻ</label>
                                            <div class="col-md-12 p-0">
                                                <div class="input-group">
                                                    <input class="input-form w-100" name="pin" type="text" placeholder="Nhập mã số thẻ của bạn">
                                                    <p class="text-error c-mb-0 c-mt-4"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="money-form-group c-mb-8">
                                            <label class="text-form fz-13 fw-500 c-mb-4 d-none d-lg-block">Số sê-ri</label>
                                            <div class="col-md-12 p-0">
                                                <div class="input-group">
                                                    <input class="input-form w-100" name="serial" type="text" placeholder="Nhập mã số sê-ri trên thẻ">
                                                    <p class="text-error c-mb-0 c-mt-4"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="money-form-group">
                                            <label class="text-form fz-13 fw-500 c-mb-4 d-none d-lg-block">Mã bảo vệ</label>
                                            <div class="input-group">
                                                <div class="col-md-12 p-0 d-flex">
                                                    <div style="flex: 1;">
                                                        <input class="input-form w-100" name="captcha" type="text" placeholder="Nhập mã bảo vệ ">
                                                    </div>
                                                    <div class="captcha c-mx-8">
                                                        <div>
                                                            <span class="capchaImage"><img src="https://frontend.theme-5.tichhop.pro/captcha/default?RU84hB44"></span>
                                                        </div>
                                                    </div>
                                                    <button class="refresh-captcha brs-8" type="button" id="reload_modal_btn">
                                                        <img class="spinImg paused" src="/assets/frontend/theme_5/image/phu/captcha_refresh.png" alt="">
                                                    </button>
                                                </div>
                                                <p class="text-error c-mb-0 c-mt-4"></p>
                                            </div>
                                        </div>
                                        <div class="group-btn c-mt-24 d-flex">
                                            <button class="btn primary" type="button" onclick="openLoginModal();" data-dismiss="modal">Nạp ngay</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="atm_card_modal" role="tabpanel">
                            <div class="row content-block">
                                <div class="col-12 col-lg-12">
                                    <div class="atm-recharge-right c-p-16 brs-8">
                                        <div class="atm-recharge-guide">
                                            <img class="w-100 c-mb-16" src="/assets/frontend/theme_5/image/phu/atm_recharge_guide.png" alt="">
                                            <p class="fz-13 fw-400">Để hoàn tất đơn nạp, bạn vui lòng chuyển khoản theo cú pháp sau:</p>
                                        </div>
                                        <div class="atm-recharge-content c-p-sm-12 brs-sm-8">
                                            <table align="center" border="1" cellpadding="1" cellspacing="1">
                                                <tbody>
                                                <tr>
                                                    <th colspan="2">Tên chủ tài khoản: BUI THI NHAM&nbsp;</th>
                                                    <th>Chi nhánh</th>
                                                </tr>
                                                <tr>
                                                    <td><strong>VIETCOMBANK</strong></td>
                                                    <th>1024033539</th>
                                                    <td><strong>HÀ NỘI</strong></td>
                                                </tr>
                                                </tbody>
                                            </table>

                                            <p>&nbsp;</p>

                                            <table align="center" border="1" cellpadding="1" cellspacing="1">
                                                <tbody>
                                                <tr>
                                                    <th colspan="2">Tên chủ tài khoản: Hoàng Thị Như Quỳnh&nbsp;</th>
                                                </tr>
                                                <tr>
                                                    <td><strong>MoMo</strong></td>
                                                    <th>01626282869&nbsp;</th>
                                                </tr>
                                                </tbody>
                                            </table>

                                            <p>&nbsp;</p>

                                            <p>Nếu sau 5 phút&nbsp;không được cộng tiền vui lòng&nbsp;liên hệ fanpage :&nbsp;<a href="https://www.facebook.com/Shopngocrongnet" rel="nofollow" target="_blank"><u><strong>Chăm Sóc Khách Hàng</strong></u></a>&nbsp;hoặc Hotline&nbsp;<strong>0792.000.792</strong>&nbsp;để được xử lý.</p>

                                            <p><strong>*Chú Ý: Chuyển đúng cú pháp, sai nội dung bị chuyển qua ID khác shop không chịu trách nhiệm</strong></p>

                                            <p>Nội dung chuyển khoản:</p>
                                            <div class="atm-recharge-attr" style="text-align: center">
                                                <p class="fz-14 fw-600 mb-0" style="color: red; max-width: 100% !important;">Vui lòng đăng nhập để nhận được nội dung chuyển tiền!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
            </div>

        </div>
    </div>
</div>
