@extends('frontend.'.theme('')->theme_key.'.layouts.master')
@section('seo_head')
    {{--    @include('frontend.widget.__seo_head')--}}
@endsection
@section('content')
    <div class="site-content-body bg-white first last">
        <h4 class="title-style-left mb-3">Nạp tiền vào tài khoản</h4>
        <div class="row">
            <div class="col-lg-8">
                <!-- BEGIN Tabs -->
                <ul class="nav nav-qp-tabs mb-3" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" href="#" id="deposit-tab" data-bs-toggle="tab" data-bs-target="#deposit" type="button" role="tab" aria-controls="deposit" aria-selected="true"><span><i class="las la-money-check-alt"></i> <span>Nạp tiền</span></a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="#" id="deposit-via-card-tab" data-bs-toggle="tab" data-bs-target="#deposit-via-card" type="button" role="tab" aria-controls="deposit via card" aria-selected="true"><span><i class="las la-receipt"></i> Nạp bằng thẻ</span></a>
                    </li>
                </ul>
                <div class="tab-content mb-4">
                    <!-- BEGIN Tab Content Deposit -->
                    <div class="tab-pane fade show active" id="deposit" role="tabpanel" aria-labelledby="deposit-tab">
                        <form action="#" method="post">
                            <div class="mb-4">
                                <div class="border border-2 pt-2 pb-2 pe-3 ps-3 mb-2 rounded">
                                    <label class="text-secondary">Chọn số tiền cần nạp</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control fs-3 text-end border-0 text-danger p-0" placeholder="" value="200,000" aria-label="">
                                        <span class="input-group-text bg-transparent text-secondary border-0 pe-0 pr-0">đ</span>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <button type="button" class="btn btn-outline-secondary">20,000</button> <button type="button" class="btn btn-outline-secondary">50,000</button> <button type="button" class="btn btn-secondary ">100,000</button> <button href="#" class="btn btn-outline-secondary">200,000</button>
                                </div>
                            </div>
                            <h5 class="mb-2">II. Chọn nguồn tiền</h5>
                            <div class="mb-4">
                                <div class="accordion" id="deposit-methods-accordion">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#vidientu">
                                                <i class="las la-wallet me-2"></i> <strong>Ví điện tử (VNpay, Momo)</strong>
                                            </button>
                                        </h2>
                                        <div id="vidientu" class="accordion-collapse collapse" data-bs-parent="#deposit-methods-accordion">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-lg-3 col-sm-6 text-center">
                                                        <p><img src="/assets/frontend/{{theme('')->theme_key}}/img/qrcode-vnpay.jpg" class="mw-100" alt=""></p>
                                                        <p>Quét mã VNPay</p>
                                                    </div>
                                                    <div class="col-lg-3 col-sm-6 text-center">
                                                        <p><img src="/assets/frontend/{{theme('')->theme_key}}/img/qrcode-momo.jpg" class="mw-100" alt=""></p>
                                                        <p>Quét mã Momo</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#nganhang-noidia">
                                                <i class="las la-university me-2"></i> <strong>Ngân hàng nội địa</strong>
                                            </button>
                                        </h2>
                                        <div id="nganhang-noidia" class="accordion-collapse collapse show" data-bs-parent="#deposit-methods-accordion">
                                            <div class="accordion-body">
                                                <div style="max-height: 360px;overflow-y: auto;">
                                                    <ul class="list-unstyled list-banks">
                                                        <li>
                                                            <a href="javascript:;" title="Ngân hàng TMCP Ngoại Thương Việt Nam" data-name="Vietcombank">
                                                                <img src="/assets/frontend/{{theme('')->theme_key}}/img/banks/logoVietcombank201808092943.png" class="mw-100">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" title="Ngân hàng TMCP Kỹ thương Việt Nam" data-name="Techcombank">
                                                                <img src="/assets/frontend/{{theme('')->theme_key}}/img/banks/logoTechcombank201808092919.png" class="mw-100">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" title="Ngân hàng TMCP Quân Đội" data-name="MB">
                                                                <img src="/assets/frontend/{{theme('')->theme_key}}/img/banks/logoMB201808092855.png" class="mw-100">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" title="Ngân hàng TMCP Công thương Việt Nam" data-name="Vietinbank">
                                                                <img src="/assets/frontend/{{theme('')->theme_key}}/img/banks/logoVietinbank201808092833.png" class="mw-100">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" title="Ngân hàng Nông nghiệp &amp; Phát triển Nông thôn" data-name="Agribank">
                                                                <img src="/assets/frontend/{{theme('')->theme_key}}/img/banks/logoAgribank201808092807.png" class="mw-100">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" title="Ngân hàng TMCP Đông Á" data-name="DongABank">
                                                                <img src="/assets/frontend/{{theme('')->theme_key}}/img/banks/logoDongABank201808092734.png" class="mw-100">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" title="Ngân hàng TM TNHH MTV Đại Dương" data-name="Oceanbank">
                                                                <img src="/assets/frontend/{{theme('')->theme_key}}/img/banks/logoOceanbank201808095310.png" class="mw-100">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" title="Ngân hàng TMCP Đầu tư và Phát triển Việt Nam" data-name="BIDV">
                                                                <img src="/assets/frontend/{{theme('')->theme_key}}/img/banks/logoBIDV201808092444.png" class="mw-100">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" title="Ngân hàng TMCP Sài Gòn – Hà Nội" data-name="SHB">
                                                                <img src="/assets/frontend/{{theme('')->theme_key}}/img/banks/logoSHB201808092423.png" class="mw-100">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" title="Ngân hàng TMCP Quốc tế" data-name="VIB">
                                                                <img src="/assets/frontend/{{theme('')->theme_key}}/img/banks/logoVIB201808092400.png" class="mw-100">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" title="Ngân hàng TMCP Hàng Hải Việt Nam" data-name="MaritimeBank">
                                                                <img src="/assets/frontend/{{theme('')->theme_key}}/img/banks/logoMaritimeBank201808092335.png" class="mw-100">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" title="Ngân hàng TMCP Xuất Nhập Khẩu Việt Nam" data-name="Eximbank">
                                                                <img src="/assets/frontend/{{theme('')->theme_key}}/img/banks/logoEximbank201808092306.png" class="mw-100">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" title="Ngân hàng TMCP Á Châu" data-name="ACB">
                                                                <img src="/assets/frontend/{{theme('')->theme_key}}/img/banks/logoACB201808092135.png" class="mw-100">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" title="Ngân hàng TMCP Phát Triển Nhà TP. Hồ Chí Minh" data-name="HDBank">
                                                                <img src="/assets/frontend/{{theme('')->theme_key}}/img/banks/logoHDBank201808092115.png" class="mw-100">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" title="Ngân hàng TMCP Nam Á" data-name="NamABank">
                                                                <img src="/assets/frontend/{{theme('')->theme_key}}/img/banks/logoNamABank201808092054.png" class="mw-100">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" title="Ngân Hàng TMCP Sài Gòn Công Thương" data-name="SaigonBank">
                                                                <img src="/assets/frontend/{{theme('')->theme_key}}/img/banks/logoSaigonBank201808093042.png" class="mw-100">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" title="Ngân hàng TMCP Sài Gòn Thương Tín" data-name="Sacombank">
                                                                <img src="/assets/frontend/{{theme('')->theme_key}}/img/banks/logoSacombank201808092036.png" class="mw-100">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" title="Ngân hàng TMCP Việt Á" data-name="VietABank">
                                                                <img src="/assets/frontend/{{theme('')->theme_key}}/img/banks/logoVietABank201808095348.png" class="mw-100">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" title="Ngân hàng TMCP Việt Nam Thịnh Vượng" data-name="VPBank">
                                                                <img src="/assets/frontend/{{theme('')->theme_key}}/img/banks/logoVPBank201808091859.png" class="mw-100">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" title="Ngân hàng TMCP Tiên Phong" data-name="TPBank">
                                                                <img src="/assets/frontend/{{theme('')->theme_key}}/img/banks/logoTPBank201808091836.png" class="mw-100">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" title="Ngân hàng TMCP Đông Nam Á" data-name="SeABank">
                                                                <img src="/assets/frontend/{{theme('')->theme_key}}/img/banks/logoSeABank201808091803.png" class="mw-100">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" title="Ngân hàng TMCP Xăng dầu Petrolimex" data-name="PGBank">
                                                                <img src="/assets/frontend/{{theme('')->theme_key}}/img/banks/logoPGBank201808091745.png" class="mw-100">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" title="Ngân hàng TMCP Quốc dân" data-name="NCB">
                                                                <img src="/assets/frontend/{{theme('')->theme_key}}/img/banks/logoNCB201808091724.png" class="mw-100">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" title="Ngân hàng TMCP Dầu Khí Toàn Cầu" data-name="GPBank">
                                                                <img src="/assets/frontend/{{theme('')->theme_key}}/img/banks/logoGPBank201808091704.png" class="mw-100">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" title="Ngân hàng TMCP Bắc Á" data-name="BACABANK">
                                                                <img src="/assets/frontend/{{theme('')->theme_key}}/img/banks/logoBACABANK201808091641.png">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" title="Ngân hàng TMCP An Bình" data-name="ABBANK">
                                                                <img src="/assets/frontend/{{theme('')->theme_key}}/img/banks/logoABBANK201808091608.png">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" title="Ngân hàng TMCP Bưu Điện Liên Việt" data-name="LienVietPostBank">
                                                                <img src="/assets/frontend/{{theme('')->theme_key}}/img/banks/logoLienVietPostBank201808091539.png">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" title="Ngân hàng TMCP Bảo Việt " data-name="BVB">
                                                                <img src="/assets/frontend/{{theme('')->theme_key}}/img/banks/logoBVB201808091418.png">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" title="Ngân hàng TMCP Sài Gòn" data-name="SCBBank">
                                                                <img src="/assets/frontend/{{theme('')->theme_key}}/img/banks/logoSCBBank201808095237.png">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" title="Ngân hàng TMCP Kiên Long" data-name="KienLongBank">
                                                                <img src="/assets/frontend/{{theme('')->theme_key}}/img/banks/logoKienLongBank201808090917.png">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" title="Ngân hàng Liên doanh Việt - Nga" data-name="VRB">
                                                                <img src="/assets/frontend/{{theme('')->theme_key}}/img/banks/logoVRB201808090855.png">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" title="Ngân hàng TMCP Đại Chúng" data-name="PVCombank">
                                                                <img src="/assets/frontend/{{theme('')->theme_key}}/img/banks/logoPVCombank201808090837.png">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" title="Ngân hàng Public Việt Nam" data-name="PublicBank">
                                                                <img src="/assets/frontend/{{theme('')->theme_key}}/img/banks/logoPublicBank201809015020.png">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" title="Ngân hàng TNHH Indovina" data-name="IVB">
                                                                <img src="/assets/frontend/{{theme('')->theme_key}}/img/banks/logoIVB202002092958.png">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" title="Ngân hàng TNHH MTV Woori Việt Nam" data-name="WOO">
                                                                <img src="/assets/frontend/{{theme('')->theme_key}}/img/banks/logoWOO202002093050.png">
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;" title="Ngân hàng TNHH MTV UOB Việt Nam" data-name="UOB">
                                                                <img src="/assets/frontend/{{theme('')->theme_key}}/img/banks/logoUOB202002093127.png">
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#chuyenkhoan-nganhang">
                                                <i class="las la-exchange-alt me-2"></i> <strong>Chuyển khoản ngân hàng</strong>
                                            </button>
                                        </h2>
                                        <div id="chuyenkhoan-nganhang" class="accordion-collapse collapse" data-bs-parent="#deposit-methods-accordion">
                                            <div class="accordion-body">
                                                <p>Sau khi chuyển khoản hoặc nộp tiền vào tài khoản thành công, bạn vui lòng gửi thông báo nạp tiền cho chúng tôi bằng cách: Gửi tin nhắn tới chúng tôi thông qua...</p>
                                                <div class="table-responsive">
                                                    <table cellspacing="0" cellpadding="0" class="table table-sm">
                                                        <tbody>
                                                        <tr>
                                                            <td>
                                                                <p class="mb-0"><strong>Ngân Hàng Ngoại Thương Việt Nam</strong></p>
                                                                <table cellspacing="0" cellpadding="0" class="table table-sm table-borderless">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td class="p-0 text-secondary" width="120">Chủ tài khoản</td>
                                                                        <td class="p-0">Cty CP ABC XYZ</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="p-0 text-secondary" width="120">Số tài khoản</td>
                                                                        <td class="p-0"><strong>0011005800368</strong></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="p-0 text-secondary" width="120">Chi nhánh</td>
                                                                        <td class="p-0">Hội sở chính</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                            <td width="140" class="text-center">
                                                                <a href="javascript:;" title="Ngân hàng TMCP Ngoại Thương Việt Nam" data-name="Vietcombank" data-toggle="modal" data-target="#modalThongbao">
                                                                    <div><img src="/assets/frontend/{{theme('')->theme_key}}/img/banks/logoVietcombank201808092943.png" class="mw-100"></div>
                                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalThongbao" class="bg-secondary text-white pt-1 pb-1 ps-2 pe-2 rounded-x">Thông báo <i class="las la-angle-right"></i></a>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="mb-2">III. Phí &amp; tổng tiền</h5>
                            <div class="mb-4">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <span class="text-secondary">Phí:</span> 0 đ
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="text-secondary">Tổng thanh toán</div>
                                            <div class="fs-5">200,200 đ</div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="text-end">
                                <a href="#" class="btn bg-warning-gradient ps-4 pe-4 text-white pt-2 pb-2 rounded">Nạp tiền <i class="las la-angle-double-right"></i></a>
                            </div>
                        </form>
                    </div><!-- END Tab Content Deposit -->
                    <!-- BEGIN Tab Content Deposit Card-->
                    <div class="tab-pane fade" id="deposit-via-card" role="tabpanel" aria-labelledby="deposit-via-card-tab">
                        <p><a href="#"><i class="las la-exclamation-circle"></i> Hướng dẫn nạp thẻ cào mua thẻ Garena</a></p>
                        <div class="mb-3">
                            <h6 class="text-uppercase mb-2">I. Thông tin loại thẻ</h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="mb-1 text-secondary">Loại thẻ</label>
                                        <select class="form-select">
                                            <option value="0">Thẻ điện thoại Viettel</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="mb-1 text-secondary">Mệnh giá thẻ</label>
                                        <select class="form-select">
                                            <option value="0">100.000</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <h6 class="text-uppercase mb-2">II. Thông tin thẻ</h6>
                            <div class="border p-3 shadow-sm">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="mb-1 text-secondary">Mã số thẻ</label>
                                            <input type="text" class="form-control" value="123 455 666 788" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="mb-1 text-secondary">Số Seri</label>
                                            <input type="text" class="form-control" value="123 455 666 788" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <label class="mb-1 text-secondary">Mã bảo mật</label>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="d-flex mb-1 justify-content-between align-items-center">
                                            <div><img src="/assets/frontend/{{theme('')->theme_key}}/img/temp/capcha.png" alt=""></div>
                                            <div>
                                                <input type="text" id="capcha" name="capcha" class="form-control text-end" placeholder="#" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-end mt-4">
                            <a href="#" class="btn bg-warning-gradient ps-4 pe-4 text-white pt-2 pb-2 rounded">Nạp tiền <i class="las la-angle-double-right"></i></a>
                        </div>
                    </div><!-- END Tab Content Deposit -->
                </div>
            </div>
            <div class="col-lg-4">
                <!-- BEGIN History -->
                <div class="mb-4 p-3 bg-light rounded">
                    <h6 class="text-warning mb-0"><i class="las la-clock"></i> Lịch sử nạp tiền</h6>
                    <ul class="list-item-default mb-3">
                        <li class="item">
                            <div class="item-title"><a href="#">Nạp tiền từ tài khoản Vietcombank</a></div>
                            <div class="item-meta small text-secondary">10:20 21/21/2020</div>
                            <div class="icon"><i class="las la-angle-right"></i></div>
                        </li>
                        <li class="item">
                            <div class="item-title"><a href="#">Nạp tiền từ tài khoản Vietcombank</a></div>
                            <div class="item-meta small text-secondary">10:20 21/21/2020</div>
                            <div class="icon"><i class="las la-angle-right"></i></div>
                        </li>
                        <li class="item">
                            <div class="item-title"><a href="#">Nạp tiền từ tài khoản Vietcombank</a></div>
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
    <div class="after"></div>
@endsection
