@extends('frontend.'.theme('')->theme_key.'.layouts.master')
@section('seo_head')
{{--    @include('frontend.widget.__seo_head')--}}
@endsection
@section('content')
<div class="site-content-body first">
    <div class="row">
        <div class="col-lg-9">
            <div class="nav-qp-tabs-wrap">
                <!-- BEGIN Tabs -->
                <ul class="nav nav-qp-tabs mb-4" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" href="#" id="game-tab" data-bs-toggle="tab" data-bs-target="#game" type="button" role="tab" aria-controls="game" aria-selected="true"><span><i class="las la-gamepad"></i> <span><span class="d-none d-md-inline">Mua thẻ</span> Game</span></a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="#" id="mobile-tab" data-bs-toggle="tab" data-bs-target="#mobile" type="button" role="tab" aria-controls="mobile" aria-selected="true"><span><i class="las la-mobile"></i> <span class="d-none d-md-inline">Mua thẻ</span> Điện thoại</span></a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="#" id="data-tab" data-bs-toggle="tab" data-bs-target="#data" type="button" role="tab" aria-controls="data" aria-selected="true"><span><i class="las la-wifi"></i> <span class="d-none d-md-inline">Nạp tiền</span> 3G/4G</span></a>
                    </li>
                </ul>
            </div>
            <div class="tab-content mb-4">
                <div class="tab-pane fade show active" id="game" role="tabpanel" aria-labelledby="game-tab">
                    <div class="pb-5 block-number">
                        <div class="icon">1</div>
                        <h6 class="text-uppercase title-small mb-3">Lụa chọn nhà cung cấp</h6>
                        <div class="row row-gateway g-0">
                            <div class="col-md-3 col-6">
                                <div class="item-gateway me-2">
                                    <div class="text-center">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/img/gateway/garena.png" class="mw-100 img" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="item-gateway me-2">
                                    <div class="text-center">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/img/gateway/funcard.png" class="mw-100 img" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="item-gateway me-2">
                                    <div class="text-center">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/img/gateway/zing.png" class="mw-100 img" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="item-gateway me-2">
                                    <div class="text-center">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/img/gateway/scoin.png" class="mw-100 img" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="item-gateway me-2">
                                    <div class="text-center">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/img/gateway/gate.png" class="mw-100 img" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pb-5 block-number">
                        <div class="icon">2</div>
                        <h6 class="title-small text-uppercase mb-3">Lựa chọn mệnh giá</h6>
                        <div class="row row-price g-0">
                            <div class="col-md-3 col-6">
                                <div class="item-price me-2">
                                    <h4 class="text-center mb-2">20.000 đ</h4>
                                    <div class="text-center">Giá: <span class="text-danger">19.200</span> đ</div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="item-price me-2">
                                    <h4 class="text-center mb-2">50.000 đ</h4>
                                    <div class="text-center">Giá: <span class="text-danger">47.500</span> đ</div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="item-price me-2">
                                    <h4 class="text-center mb-2">100.000 đ</h4>
                                    <div class="text-center">Giá: <span class="text-danger">95.500</span> đ</div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="item-price me-2">
                                    <h4 class="text-center mb-2">200.000 đ</h4>
                                    <div class="text-center">Giá: <span class="text-danger">190.000</span> đ</div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="item-price me-2">
                                    <h4 class="text-center mb-2">500.000 đ</h4>
                                    <div class="text-center">Giá: <span class="text-danger">450.000</span> đ</div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <label class="label mb-0">Số lượng</label>
                            <div style="width: 140px">
                                <input type="number" class="form-control text-center" value="1" min="1" max="100" step="1"/>
                            </div>
                        </div>
                    </div>
                    <div class="mb-5 block-number last">
                        <div class="icon">3</div>
                        <h6 class="text-uppercase title-small mb-3">Thông tin thanh toán</h6>
                        <div class="row">
                            <div class="col-lg-6">
                                <table class="table table-sm table-striped table-borderless" cellspacing="0" cellpadding="0">
                                    <tbody>
                                    <tr>
                                        <td class="text-secondary">Loại mã thẻ</td>
                                        <td>GARENA</td>
                                    </tr>
                                    <tr>
                                        <td class="text-secondary">Mệnh giá</td>
                                        <td>100.000 VNĐ</td>
                                    </tr>
                                    <tr>
                                        <td class="text-secondary">Phí giao dịch</td>
                                        <td>Miễn phí</td>
                                    </tr>
                                    <tr>
                                        <td class="text-secondary">Giảm giá</td>
                                        <td>800 đ</td>
                                    </tr>
                                    <tr>
                                        <td class="text-secondary">Số lượng</td>
                                        <td>1</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3 border-bottom pb-2">
                                    <div class="text-end">
                                        Tổng tiền
                                    </div>
                                    <div class="display-6 text-danger text-end">
                                        19.200 đ
                                    </div>
                                </div>
                                <div class="text-end">
                                    <a href="buy.html" class="btn text-white bg-warning-gradient pe-4 ps-4 pt-2 pb-2 rounded"><strong>Thanh toán</strong> <i class="las la-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="mobile" role="tabpanel" aria-labelledby="mobile-tab">Mobile</div>
                <div class="tab-pane fade" id="data" role="tabpanel" aria-labelledby="data-tab">Data</div>
            </div>
            <!-- BEGIN -->
            <div class="p-3 bg-light rounded mb-4">
                <h5><strong>Thẻ Garena là gì ?</strong></h5>
                <p>Thẻ Garena (thẻ sò) là một loại thẻ game được phát hành bởi Garena. Đây là một nhà phát hành game dù ra đời muộn hơn so với các nhà phát hành game lâu đời tại Việt Nam như FPT Gate, Vinagame, VTC,… nhưng cộng đồng Garena lại vô cùng đông đảo bởi NPH liên tục ra mắt những tựa game vô cùng hấp dẫn như Liên Minh Huyền Thoại; Chiến Cơ Huyền Thoại; Fifa online 3,4; Free Fire, Balde and Soul,... Để phục vụ game thủ nhà phát hành này đã tạo ra loại thẻ của riêng họ gọi là thẻ Garena.</p>
                <div class="text-center"><a href="#" class="more-link">Xem thêm <i class="las la-angle-down"></i></a></div>
            </div>
        </div>
        <div class="col-lg-3">
            @include('frontend.theme_2.widget.__huongdan__trangchu')
        </div>
    </div>
</div>
<div class="site-content-body alt last">
    <h3 class="text-primary mb-3">Tin tức cập nhật <i class="las la-angle-right"></i></h3>
    @include('frontend.theme_2.widget.__baiviet__trangchu')
    <p class="mb-0 text-center"><a href="/blog" class="btn bg-secondary text-white rounded-x ps-4 pe-4">Tất cả tin tức <i class="las la-angle-right"></i></a></p>
</div>
<div class="after"></div>
@endsection
