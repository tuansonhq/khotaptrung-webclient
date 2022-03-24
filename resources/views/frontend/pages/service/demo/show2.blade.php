@extends('frontend.layouts.master')
@section('content')
    <!-- BEGIN: PAGE CONTAINER -->
    <div class="c-layout-page">
        <!-- BEGIN: PAGE CONTENT -->
        <div class="c-content-box c-size-lg c-overflow-hide c-bg-white font-roboto">
            <div class="container">

            </div>
            <div class="text-center" style="margin-bottom: 50px;">
                <h2 style="font-size: 30px;font-weight: bold;text-transform: uppercase">DỊCH VỤ Làm Thuê Capsule Vàng</h2>
                {{--            <div class="row  hidden-sm hidden-md hidden-lg">--}}
                {{--                <p style="margin-top: 15px;font-size: 23px" class="bb"><i class="fa fa-server" aria-hidden="true"></i> <a href="/dich-vu/ngoc-rong" style="color:#32c5d2">Ngọc rồng</a></p>--}}
                {{--            </div>--}}
            </div>

            <form method="POST" action="https://nick.vn/dich-vu/443207/purchase" accept-charset="UTF-8" class="" enctype="multipart/form-data"><input name="_token" type="hidden" value="X8YsQD4YEObNmCLktdimefYpYlAMxkxgV2KwMkYY">
                <div class="container detail-service">
                    <div class="row">
                        <div class="col-md-7" style="margin-bottom:20px;">

                            <div class="row service-info">
                                <div class="col-md-5 hidden-xs hidden-sm">
                                    <div class="row">
                                        <div class="news_image">
                                            <img src="https://nick.vn/storage/images/nfjY80CaXR_1623228739.jpg" alt="Làm Thuê Capsule Vàng">
                                        </div>
                                    </div>
                                    <div class="row-face">
                                        <p style="margin-top: 15px" class="bb"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Làm Thuê Capsule Vàng</p>
                                        <p style="margin-top: 15px" class="bb"><i class="fa fa-server" aria-hidden="true"></i> <a href="/dich-vu/ngoc-rong" style="color:#32c5d2;text-decoration: none">Ngọc rồng</a></p>
                                    </div>
                                </div>

                                <div class="col-md-7">

                                    <span class="mb-15 control-label bb">Chọn máy chủ:</span>
                                    <div class="mb-15">
                                        <select id="select-sever" name="server[]" class="server-filter form-control t14" style="">
                                            <option value="0">Vũ Trụ 1  </option>
                                            <option value="1">Vũ Trụ 2  </option>
                                            <option value="2">Vũ Trụ 3  </option>
                                            <option value="3">Vũ Trụ 4  </option>
                                            <option value="4">Vũ Trụ 5  </option>
                                            <option value="5">Vũ Trụ 6  </option>
                                            <option value="6">Vũ Trụ 7  </option>
                                        </select>
                                    </div>
                                    <div class="hidden">
                                        <input type="hidden" id="minmax_0" data-value-min="" data-value-max=""  data-value-min-text="0" data-value-max-text="0"/>
                                        <input type="hidden" id="minmax_1" data-value-min="" data-value-max=""  data-value-min-text="0" data-value-max-text="0"/>
                                        <input type="hidden" id="minmax_2" data-value-min="" data-value-max=""  data-value-min-text="0" data-value-max-text="0"/>
                                        <input type="hidden" id="minmax_3" data-value-min="" data-value-max=""  data-value-min-text="0" data-value-max-text="0"/>
                                        <input type="hidden" id="minmax_4" data-value-min="" data-value-max=""  data-value-min-text="0" data-value-max-text="0"/>
                                        <input type="hidden" id="minmax_5" data-value-min="" data-value-max=""  data-value-min-text="0" data-value-max-text="0"/>
                                        <input type="hidden" id="minmax_6" data-value-min="" data-value-max=""  data-value-min-text="0" data-value-max-text="0"/>
                                    </div>

                                    <span class="mb-15 control-label bb">Bảng giá làm thuê capsule vàng:</span>
                                    <div class="simple-checkbox s-filter">
                                        <p><input value="0" type="checkbox" id="0">
                                            <label for="0">Max Chỉ Số 24 Tỷ Sm (Tặng Kèm x1 Phiếu Giảm Giá) - 170,000 VNĐ</label>
                                        </p>

                                        <p><input value="1" type="checkbox" id="1">
                                            <label for="1">Max Chỉ Số 40 Tỷ Sm (Tặng Kèm x1 Phiếu Giảm Giá) - 160,000 VNĐ</label>
                                        </p>

                                        <p><input value="2" type="checkbox" id="2">
                                            <label for="2">Max Chỉ Số 50-60 Tỷ Sm (Tặng Kèm x1 Phiếu Giảm Giá) - 150,000 VNĐ</label>
                                        </p>

                                        <p><input value="3" type="checkbox" id="3">
                                            <label for="3">Max Chỉ Số 70-80 Tỷ Sm (Tặng Kèm x1 Phiếu Giảm Giá) - 140,000 VNĐ</label>
                                        </p>

                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="col-md-5">

                            <div class="row emply-btns">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class=" emply-btns text-center">
                                        <input type="hidden" name="selected" value="">
                                        <input type="hidden" name="server">
                                        <a id="txtPrice" style="font-size: 20px;font-weight: bold;text-decoration: none" class="">Tổng: 0 Xu</a>
                                        <button id="btnPurchase" type="button" style="font-size: 20px;" class="followus"><i class="fa fa-credit-card" aria-hidden="true"></i> Thanh toán</button>
                                    </div>
                                </div>
                            </div>

                            <div class="row emply-btns box-body" style="color: #505050;padding:20px;line-height: 2;margin-top: 30px">
                                <p>Nếu&nbsp;Bạn Đang Muốn Kiếm&nbsp;&quot;<span style="color:#f39c12"><strong>Vi&ecirc;n Capsule V&agrave;ng</strong></span>&quot; Để Mở Cải Trang&nbsp;.&nbsp;H&atilde;y Đến Với <span style="color:#27ae60"><strong>Nick.vn</strong></span></p>

                                <p><span style="color:#e74c3c"><strong>- Y&Ecirc;U CẦU:&nbsp;</strong></span></p>

                                <p><strong>+) Chuẩn Bị: item x10 Bổ Huyết, x10 Cuồng Nộ, x10 Gi&aacute;p X&ecirc;n&nbsp;</strong></p>

                                <p><strong>+) Trong V&ograve;ng 7 Ng&agrave;y Trước Đ&oacute; Chưa Đi&nbsp;Win (Nhận Capsule V&agrave;ng) Từ &quot;</strong><span style="color:#27ae60"><strong>V&otilde; Đ&agrave;i Li&ecirc;n Server</strong></span><strong>&quot;</strong></p>

                                <p><strong><span style="color:#e74c3c">- THỜI GIAN HO&Agrave;N TẤT:</span> 1-3 NG&Agrave;Y</strong></p>

                                <p><span style="color:#e74c3c"><strong>CAM KẾT:</strong></span></p>

                                <p><strong>- TRẢ SLOT TRƯỚC HOẶC Đ&Uacute;NG THỜI HẠN</strong></p>

                                <p><strong>UY T&Iacute;N - NHANH GỌN - CHẤT LƯỢNG</strong></p>

                                <p><span style="color:#e74c3c"><strong>LƯU &Yacute;: NGHI&Ecirc;M CẤM V&Agrave;O NICK KHI DỊCH VỤ Ở TRẠNG TH&Aacute;I &quot;Đang Thực Hiện&quot;</strong></span></p>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="modal fade" id="homealert" role="dialog" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="loader" style="text-align: center"><img src="/assets/frontend/images/loader.gif" style="width: 50px;height: 50px;display: none"></div>
                        <div class="modal-content">

                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Xác nhận thông tin thanh toán</h4>

                            </div>

                            <div class="modal-body">
                                <p> Bạn thực sự muốn thanh toán?</p>
                            </div>
                            <div class="modal-footer">

                                <button type="submit" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold " id="d3" style="" >Xác nhận thanh toán</button>
                                <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>

                            </div>


                        </div>
                    </div>
                </div>


            </form>

            <div class="container">
                <div class="job-wide-devider">

                </div>
            </div>

            <div class="container m-t-20 ">

                <div class="game-item-view" style="margin-top: 40px">
                    <div class="c-content-title-1">
                        <h3 class="c-center c-font-uppercase c-font-bold">Dịch vụ khác</h3>
                        <div class="c-line-center c-theme-bg"></div>
                    </div>
                    <div class="row row-flex  item-list row-flex-safari game-list">
                        <div class="col-sm-6 col-md-3">
                            <div class="classWithPad">
                                <div class="image">

                                    <a href="/dich-vu/lam-nhiem-vu-thue-ngoc-rong">
                                        <img src="/storage/images/vuQtyFn1Gl_1623228670.jpg">
                                    </a>

                                </div>
                                <div class="news_title"><a href="/dich-vu/lam-nhiem-vu-thue-ngoc-rong">Làm Nhiệm Vụ Thuê Ngọc Rồng</a></div>

                                <div class="a-more" style="margin-top: 15px">
                                    <div class="row">
                                        <div class="col-xs-6">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3">
                            <div class="classWithPad">
                                <div class="image">

                                    <a href="/dich-vu/up-bi-kip-cai-trang-yadart">
                                        <img src="/storage/images/lI9lrwFeVe_1623228645.jpg">
                                    </a>
                                </div>
                                <div class="news_title"><a href="/dich-vu/up-bi-kip-cai-trang-yadart">Úp Bí Kíp -Cải Trang Yadart</a></div>

                                <div class="a-more" style="margin-top: 15px">
                                    <div class="row">
                                        <div class="col-xs-6">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3">
                            <div class="classWithPad">
                                <div class="image">

                                    <a href="/dich-vu/up-suc-manh-su-phu">
                                        <img src="/storage/images/S34iyncQia_1560576591.jpg">

                                    </a>

                                </div>
                                <div class="news_title"><a href="/dich-vu/up-suc-manh-su-phu">Úp Sức Mạnh Sư Phụ</a></div>

                                <div class="a-more" style="margin-top: 15px">
                                    <div class="row">
                                        <div class="col-xs-6">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3">
                            <div class="classWithPad">
                                <div class="image">
                                    <a href="/dich-vu/up-suc-manh-de-tu">
                                        <img src="/storage/images/x7B9aeG1YI_1560576604.jpg">
                                    </a>
                                </div>
                                <div class="news_title"><a href="/dich-vu/up-suc-manh-de-tu">Úp Sức Mạnh Đệ Tử</a></div>

                                <div class="a-more" style="margin-top: 15px">
                                    <div class="row">
                                        <div class="col-xs-6">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3">
                            <div class="classWithPad">
                                <div class="image">
                                    <a href="/dich-vu/san-de-tu-lam-de">
                                        <img src="/storage/images/uEnyb0kv7Z_1623228607.jpg">
                                    </a>
                                </div>
                                <div class="news_title"><a href="/dich-vu/san-de-tu-lam-de">Săn Đệ Tử - Làm Đệ</a></div>

                                <div class="a-more" style="margin-top: 15px">
                                    <div class="row">
                                        <div class="col-xs-6">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3">
                            <div class="classWithPad">
                                <div class="image">

                                    <a href="/dich-vu/ban-vang">
                                        <img src="/storage/images/Q3GWmd3Akw_1623228594.jpg">
                                    </a>

                                </div>
                                <div class="news_title"><a href="/dich-vu/ban-vang">Bán vàng</a></div>

                                <div class="a-more" style="margin-top: 15px">
                                    <div class="row">
                                        <div class="col-xs-6">

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3">
                            <div class="classWithPad">
                                <div class="image">

                                    <a href="/dich-vu/ban-hong-ngoc">
                                        <img src="/storage/images/6Lb4LgaGDI_1623228581.jpg">
                                    </a>

                                </div>
                                <div class="news_title"><a href="/dich-vu/ban-hong-ngoc">Bán Hồng Ngọc</a></div>

                                <div class="a-more" style="margin-top: 15px">
                                    <div class="row">
                                        <div class="col-xs-6">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3">
                            <div class="classWithPad">
                                <div class="image">

                                    <a href="/dich-vu/lam-thue-phieu-giam-gia">
                                        <img src="/storage/images/4wpEcLKJw5_1626597671.jpg">

                                    </a>

                                </div>
                                <div class="news_title"><a href="/dich-vu/lam-thue-phieu-giam-gia">Làm Thuê Phiếu Giảm Giá</a></div>

                                <div class="a-more" style="margin-top: 15px">
                                    <div class="row">
                                        <div class="col-xs-6">

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>


                <div class="tab-vertical tutorial_area">
                    <div class="panel-group" id="accordion">



                    </div>
                </div>

            </div>

        </div>

        <!-- END: PAGE CONTENT -->
    </div>

    <div class="modal fade" id="noticeModal" role="dialog" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="loader" style="text-align: center"><img src="/assets/frontend/images/loader.gif"
                                                                style="width: 50px;height: 50px;display: none"></div>
            <div class="modal-content">

            </div>
        </div>
    </div>

    <div class="modal fade" id="LoadModal" role="dialog" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="loader" style="text-align: center"><img src="/assets/frontend/images/loader.gif"
                                                                style="width: 50px;height: 50px;display: none"></div>
            <div class="modal-content">
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="/assets/frontend/css/service.css">
    <script src="/assets/frontend/js/service/dichvu-maychu-giongnhau.js"></script>

@endsection


