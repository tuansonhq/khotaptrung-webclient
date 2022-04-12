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
            <!-- BEGIN Guide Block -->
            <div class="mb-4">
                <h6 class="title-style-tab"><span><i class="las la-question-circle icon"></i> Hướng dẫn</span></h6>
                <ul class="list-unstyled list-with-icon">
                    <li><a href="#"><i class="las la-angle-right icon"></i> Hướng dẫn nạp thẻ cào</a></li>
                    <li><a href="#"><i class="las la-angle-right icon"></i> Hướng dẫn nạp thẻ ATM - VÍ ĐIỆN TỬ</a></li>
                    <li><a href="#"><i class="las la-angle-right icon"></i> Hướng dẫn mua thẻ garena bằng thẻ cào điện thoại</a></li>
                </ul>
            </div><!-- BEGIN Guide Block -->
            <!-- BEGIN Banner Block -->
            <div class="mb-4">
                <div class="media-placeholder ratio-4-3">
                    <div class="bg" style="background-image: url(/assets/frontend/{{theme('')->theme_key}}/img/temp/jxm-banner.jpg);background-position: 60% 50%;background-size: auto 100%;"></div>
                    <div class="media-inner bg-overlay gradient-from-bottom d-flex align-items-end">
                        <div class="p-3 text-white">
                            <p class="lead mb-0">Nạp thẻ liền tay</p>
                            <h5 class="mb-0">Ăn ngay khuyến mãi</h5>
                            <button class="btn btn-sm rounded-x bg-warning-gradient text-white mt-2 ps-3 pe-3">Xem chi tiết <i class="las la-angle-right"></i></button>
                        </div>
                    </div>
                </div>
            </div><!-- BEGIN Banner Block -->
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
<div class="site-content-body alt last">
    <h3 class="text-primary mb-3">Tin tức cập nhật <i class="las la-angle-right"></i></h3>
    <div class="row">
        <div class="col-lg-6">
            <!-- BEGIN Item Article -->
            <div class="item-article feature row mb-3">
                <div class="item-thumb mb-2 col-lg-6">
                    <div class="media-placeholder ratio-5-3">
                        <div class="bg" style="background-image: url(/assets/frontend/{{theme('')->theme_key}}/img/temp/su-tro-lai-cua-sylas-se-tro-thanh-moi-hiem-hoa-o-ban-11_6.png);"></div>
                    </div>
                </div>
                <div class="item-content col-lg-6">
                    <h6 class="item-title mb-2"><a href="#">LMHT: Sự trở lại của Sylas sẽ trở thành " mối hiểm họa " ở bản 11.6</a></h6>
                    <p class="item-summary border-top pt-2">Riot Games đang cố gắng đưa một vài hot pick cuối mùa 10 trở lại và Sylas là một trong số đó. Vị tướng này được buff ở bản 11.6...</p>
                </div>
            </div><!-- BEGIN Item Article -->
        </div>
        <div class="col-lg-3">
            <!-- BEGIN Item Article -->
            <div class="item-article mb-3">
                <div class="item-thumb mb-2">
                    <div class="media-placeholder ratio-2-1">
                        <div class="bg" style="background-image: url(/assets/frontend/{{theme('')->theme_key}}/img//temp/lich-thi-dau-dtdv-mua-xuan-2021-fl-sgp-xuat-tran-ngay-khai-man.jpg);"></div>
                    </div>
                </div>
                <div class="item-content">
                    <h6 class="item-title"><a href="#">Lịch thi đấu ĐTDV Mùa Xuân 2021: FL và SGP xuất trận ngày khai màn</a></h6>
                </div>
            </div><!-- BEGIN Item Article -->
        </div>
        <div class="col-lg-3">
            <!-- BEGIN Item Article -->
            <div class="item-article mb-3">
                <div class="item-thumb mb-2">
                    <div class="media-placeholder ratio-2-1">
                        <div class="bg" style="background-image: url(/assets/frontend/{{theme('')->theme_key}}/img/temp/dr-mundo-lan-dau-tro-lai-dau-truong-chuyen-nghiep-sau-7-nam-vang-bong-1.jpg);"></div>
                    </div>
                </div>
                <div class="item-content">
                    <h6 class="item-title"><a href="#">Dr. Mundo đi rừng lần đầu trở lại đấu trường LEC sau 7 năm vắng bóng</a></h6>
                </div>
            </div><!-- BEGIN Item Article -->
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <!-- BEGIN Item Article -->
            <div class="item-article mb-4">
                <div class="item-thumb mb-2">
                    <div class="media-placeholder ratio-2-1">
                        <div class="bg" style="background-image: url(/assets/frontend/{{theme('')->theme_key}}/img/temp/cerberus-esports-chieu-mo-thanh-cong-nguoi-di-duong-tren-toi-tu-han-quoc-1.jpg);"></div>
                    </div>
                </div>
                <div class="item-content">
                    <h6 class="item-title"><a href="#">Cerberus Esports chiêu mộ thành công người đi đường trên tới từ Hàn Quốc</a></h6>
                </div>
            </div><!-- BEGIN Item Article -->
        </div>
        <div class="col-lg-3">
            <!-- BEGIN Item Article -->
            <div class="item-article mb-4">
                <div class="item-thumb mb-2">
                    <div class="media-placeholder ratio-2-1">
                        <div class="bg" style="background-image: url(/assets/frontend/{{theme('')->theme_key}}/img/temp/vcs-mua-xuan-2021-tong-hop-tuan-2-su-hut-hoi-cua-dkvd-team-flash-1.jpg);"></div>
                    </div>
                </div>
                <div class="item-content">
                    <h6 class="item-title"><a href="#">[VCS Mùa Xuân 2021] Tổng kết tuần 2: Pentakill đầu tiên xuất hiện, ĐKVĐ Team Flash vẫn trắng tay</a></h6>
                </div>
            </div><!-- BEGIN Item Article -->
        </div>
        <div class="col-lg-3">
            <!-- BEGIN Item Article -->
            <div class="item-article mb-4">
                <div class="item-thumb mb-2">
                    <div class="media-placeholder ratio-2-1">
                        <div class="bg" style="background-image: url(/assets/frontend/{{theme('')->theme_key}}/img/temp/lpl-mua-xuan-2021-tuan-5-sofm-gianh-mvp-suning-gianh-chien-thang-thu-hai-lien-tiep-1.jpg);"></div>
                    </div>
                </div>
                <div class="item-content">
                    <h6 class="item-title"><a href="#">LPL Mùa Xuân 2021 – Tuần 5: SofM giành MVP, SN hủy diệt LGD để có chiến thắng thứ 2 liên tiếp</a></h6>
                </div>
            </div><!-- BEGIN Item Article -->
        </div>
        <div class="col-lg-3">
            <!-- BEGIN Item Article -->
            <div class="item-article mb-4">
                <div class="item-thumb mb-2">
                    <div class="media-placeholder ratio-2-1">
                        <div class="bg" style="background-image: url(/assets/frontend/{{theme('')->theme_key}}/img/temp/nhung-vi-tuong-lmht-dang-bi-cong-dong-bo-roi-1.jpg);"></div>
                    </div>
                </div>
                <div class="item-content">
                    <h6 class="item-title"><a href="#">Những vị tướng LMHT đang rơi vào trạng thái ‘chết’ đầu mùa 11</a></h6>
                </div>
            </div><!-- BEGIN Item Article -->
        </div>
    </div>
    <p class="mb-0 text-center"><a href="category.html" class="btn bg-secondary text-white rounded-x ps-4 pe-4">Tất cả tin tức <i class="las la-angle-right"></i></a></p>
</div>
<div class="after"></div>
@endsection
