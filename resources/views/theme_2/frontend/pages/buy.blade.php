@extends('frontend.layouts.master')
@section('seo_head')
    {{--    @include('frontend.widget.__seo_head')--}}
@endsection
@section('content')
    <div class="site-content-body bg-white first last">
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
                <div class="row">
                    <div class="col-lg-8">
                        <div class="nav-steps-wrapper mb-4">
                            <ul class="nav nav-steps nav-pills nav-justified">
                                <li class="nav-item">
                                    <a href="#" class="nav-link text-start active"><span class="icon"><i class="las la-shopping-cart"></i></span> Đặt hàng</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link text-start"><span class="icon"><i class="las la-receipt"></i></span> Thanh toán</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link text-start"><span class="icon"><i class="las la-check"></i></span> Nhận thẻ</a>
                                </li>
                            </ul>
                        </div>
                        <!-- BEGIN Content Step 1 -->
                        <div class="mb-5">
                            <h6 class="title-small text-uppercase mb-3">I. Lựa chọn nhà cung cấp</h6>
                            <div class="row row-gateway g-0">
                                <div class="col-md-3 col-6">
                                    <div class="item-gateway me-2">
                                        <div class="text-center">
                                            <img src="img/gateway/garena.png" class="mw-100 img" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="item-gateway me-2">
                                        <div class="text-center">
                                            <img src="img/gateway/funcard.png" class="mw-100 img" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="item-gateway me-2">
                                        <div class="text-center">
                                            <img src="img/gateway/zing.png" class="mw-100 img" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="item-gateway me-2">
                                        <div class="text-center">
                                            <img src="img/gateway/scoin.png" class="mw-100 img" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="item-gateway me-2">
                                        <div class="text-center">
                                            <img src="img/gateway/gate.png" class="mw-100 img" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-5">
                            <h6 class="title-small text-uppercase mb-3">II. Lựa chọn mệnh giá</h6>
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
                                    <input type="number" class="form-control text-center" value="1" min="1" max="100" step="1" />
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h6 class="title-small text-uppercase mb-3">III. Thông tin thanh toán</h6>
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
                                        <a href="#" class="btn text-white bg-warning-gradient pe-4 ps-4 pt-2 pb-2 rounded"><strong>Thanh toán</strong> <i class="las la-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Content Step 1 -->
                        <div class="is-devider mt-3 mb-3"><span>/ B2.Xác nhận thanh toán /</span></div>
                        <!-- BEGIN Content Step 2 -->
                        <div class="mb-4">
                            <h6 class="title-small text-uppercase mb-2"><i class="las la-wallet"></i> Sử dụng ví của bạn</h6>
                            <div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" class="table table-borderless border mb-3">
                                    <tr>
                                        <td>Số tiền cần thanh toán</td>
                                        <td class="text-end">95.000</td>
                                        <td class="text-end text-secondary" width="20">đ</td>
                                    </tr>
                                    <tr>
                                        <td>Số dự hiện tại</td>
                                        <td class="text-end">35.000</td>
                                        <td class="text-end text-secondary" width="20">đ</td>
                                    </tr>
                                    <tr>
                                        <td>Số dư còn lại</td>
                                        <td class="text-end"><strong>-60.500</strong></td>
                                        <td class="text-end text-secondary" width="20">đ</td>
                                    </tr>
                                </table>
                                <div class="alert alert-warning mb-3" role="alert">
                                    <p class="mb-0">Không đủ tiền trong tài khoàn vui lòng <a href="#" class="border-bottom">nạp thêm</a> vào tài khoản hoặc thanh toán...</p>
                                </div>
                            </div>
                            <div class="text-end">
                                <a class="btn text-white bg-warning-gradient pe-4 ps-4 pt-2 pb-2 rounded"><strong>Xác nhận</strong> <i class="las la-angle-double-right"></i></a>
                            </div>
                        </div>
                        <!-- END Content Step 2 -->
                        <div class="is-devider mt-3 mb-3"><span>/ B3. Nhận thẻ /</span></div>
                        <!-- BEGIN Content Step 3 -->
                        <div class="mb-4">
                            <div class="alert alert-danger mb-3 text-center" role="alert">
                                <p class="display-6 text-danger mb-0"><i class="las la-frown"></i></p>
                                <h5 class="mb-0">uh oh, có lỗi xảy ra</h5>
                                <p class="mb-0">Xin vui lòng thử lại</p>
                            </div>
                            <div class="alert alert-success mb-3 text-center" role="alert">
                                <p class="display-6 mb-0 text-success"><i class="las la-glass-cheers"></i></p>
                                <p class="mb-0">Cảm ơn bạn đã lựa chọn chúng tôi, thông tin mã thẻ dưới đây hoặc bạn có thể xem lại trong mục, hồ sơ cá nhân -> <a href="#">thẻ đã mua</a></p>
                            </div>
                            <div class="p-3 border-dashed mb-3">
                                <h6 class="title-style-left mb-3">Thông tin thẻ</h6>
                                <div class="row align-items-stretch">
                                    <div class="col-lg-6">
                                        <div class="table-responsive">
                                            <table class="table table-sm table-striped table-borderless" cellspacing="0" cellpadding="0">
                                                <tbody>
                                                <tr>
                                                    <td class="text-secondary">Loại mã thẻ</td>
                                                    <td colspan="2">GARENA</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-secondary">Mệnh giá</td>
                                                    <td colspan="2">100.000 VNĐ</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-secondary">Số series</td>
                                                    <td colspan="2">10 0017 0034 3582</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-secondary">Mã Pin</td>
                                                    <td><strong class="text-warning">1116 8335 1939 6344</strong></td>
                                                    <td width="30"><a href="#"><i class="las la-copy"></i></a></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <h6 class="text-warning"><i class="las la-info-circle"></i> Hướng dẫn nạp thẻ</h6>
                                        <p>Soạn cú pháp<br>Nạp thẻ *123# gửi đến ....</p>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                Bạn có muốn ? <a href="#" class="btn btn-outline-secondary ps-4 pe-4 ms-3"><strong>Mua thẻ khác</strong> <i class="las la-angle-double-right"></i></a>
                            </div>
                        </div><!-- END Content Step 3 -->
                    </div>
                    <div class="col-lg-4">
                        <!-- BEGIN History -->
                        <div class="mb-4 p-3 bg-light rounded">
                            <h6 class="text-warning mb-0"><i class="las la-clock"></i> Lịch sử mua thẻ</h6>
                            <ul class="list-item-default mb-3">
                                <li class="item">
                                    <div class="item-title"><a href="#">Mua thẻ Garena thành công</a></div>
                                    <div class="item-meta small text-secondary">10:20 21/21/2020</div>
                                    <div class="icon"><i class="las la-angle-right"></i></div>
                                </li>
                                <li class="item">
                                    <div class="item-title"><a href="#">Mua thẻ điện thoại Viettel thành công</a></div>
                                    <div class="item-meta small text-secondary">10:20 21/21/2020</div>
                                    <div class="icon"><i class="las la-angle-right"></i></div>
                                </li>
                                <li class="item">
                                    <div class="item-title"><a href="#">Mua thẻ điện thoại Mobi thành công</a></div>
                                    <div class="item-meta small text-secondary">10:20 21/21/2020</div>
                                    <div class="icon"><i class="las la-angle-right"></i></div>
                                </li>
                            </ul>
                            <p class="text-center mb-0"><a href="#">Xem tất cả</a></p>
                        </div>
                        <!-- BEGIN Support Block -->
                        <div class="mb-4">
                            <h6 class="title-style-tab"><span><i class="las la-info-circle"></i> Hỗ trợ</span></h6>
                            <!-- BEGIN Support Item -->
                            <div class="item-block-support hotline d-flex p-2 justify-content-between align-items-center mb-2">
                                <div class="item-icon">
                                    <i class="las la-phone-volume"></i>
                                </div>
                                <div class="item-content">
                                    <div class="op-7 text-end">Hotline</div>
                                    <a href="tel:+84792000792" class="d-block main-text text-end text-danger"><strong>0792.000.792</strong></a>
                                </div>
                            </div><!-- END Support Item -->
                            <!-- BEGIN Support Item -->
                            <div class="item-block-support facebook d-flex p-2 justify-content-between align-items-center mb-2">
                                <div class="item-icon">
                                    <i class="lab la-facebook-f"></i>
                                </div>
                                <div class="item-content">
                                    <div class="op-7 text-end">Facebook</div>
                                    <a href="https://facebook.com/muathegarena" class="d-block main-text text-end"><strong>muathegarena</strong></a>
                                </div>
                            </div><!-- END Support Item -->
                        </div><!-- BEGIN Support Block -->
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="mobile" role="tabpanel" aria-labelledby="mobile-tab">Mobile</div>
            <div class="tab-pane fade" id="data" role="tabpanel" aria-labelledby="data-tab">Data</div>
        </div>
    </div>
    <div class="after"></div>
@endsection
