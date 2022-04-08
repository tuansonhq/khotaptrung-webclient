@extends('frontend.layouts.master')
@section('content')

    <!-- BEGIN: PAGE CONTAINER -->
    <div class="c-layout-page">
        <!-- BEGIN: PAGE CONTENT -->
        <div class="c-content-box c-size-lg c-overflow-hide c-bg-white font-roboto">
            <div class="container">

            </div>
            <div class="text-center" style="margin-bottom: 50px;">
                <h2 style="font-size: 30px;font-weight: bold;text-transform: uppercase">DỊCH VỤ Săn Đệ Tử - Làm Đệ</h2>
                {{--            <div class="row  hidden-sm hidden-md hidden-lg">--}}
                {{--                <p style="margin-top: 15px;font-size: 23px" class="bb"><i class="fa fa-server" aria-hidden="true"></i> <a href="/dich-vu/ngoc-rong" style="color:#32c5d2">Ngọc rồng</a></p>--}}

                {{--            </div>--}}
            </div>
            <form method="POST" action="https://nick.vn/dich-vu/1800/purchase" accept-charset="UTF-8" class="" enctype="multipart/form-data"><input name="_token" type="hidden" value="X8YsQD4YEObNmCLktdimefYpYlAMxkxgV2KwMkYY">
                <div class="container detail-service">
                    <div class="row">
                        <div class="col-md-7" style="margin-bottom:20px;">

                            <div class="row service-info">
                                <div class="col-md-5 hidden-xs hidden-sm">
                                    <div class="row">
                                        <div class="news_image">
                                            <img src="https://nick.vn/storage/images/nfjY80CaXR_1623228739.jpg" alt="Săn Đệ Tử - Làm Đệ">
                                        </div>
                                    </div>
                                    <div class="row-face">
                                        <p style="margin-top: 15px" class="bb"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Săn Đệ Tử - Làm Đệ</p>
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
                                            <option value="7">Vũ Trụ 8  </option>
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
                                        <input type="hidden" id="minmax_7" data-value-min="" data-value-max=""  data-value-min-text="0" data-value-max-text="0"/>
                                    </div>

                                    <span class="mb-15 control-label bb">Các Gói Làm Đệ:</span>
                                    <div class="mb-15">
                                        <select name="selected" class="s-filter form-control t14" style="">
                                            <option value="0">Xayda (có skill5 - tự phát nổ)</option>
                                            <option value="1">Trái Đất (có skill5 - quả cầu kênh khi)</option>
                                            <option value="2">Namek (có skill5 - laze)</option>
                                            <option value="3">Nick Sơ sinh (vào được pt trở lên)</option>
                                        </select>
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
                                <p><strong><span style="color:#e74c3c">Lưu &yacute;</span>: chuẩn bị 30-40 capsule</strong></p>

                                <p>Hệ thống Nick.vn&nbsp;c&oacute; nhận dịch vụ<strong> L&agrave;m đệ- Săn Đệ tử full sever.<br />
                                        Khi săn Đệ Tử y&ecirc;u cầu c&aacute;c bạn chuẩn bị x10 capsun bay để thuận tiện hơn nh&eacute; !</strong></p>

                                <p>Với Phương Ch&acirc;m : Uy T&iacute;n- Nhanh gọn -Gi&aacute; cả phải chăng. Chắc chắn sẽ l&agrave;m h&agrave;i l&ograve;ng bạn</p>
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

                                <span class="mb-15 control-label bb">Tài Khoản:</span>

                                <div class="mb-15">
                                    <input type="text" required name="customer_data0" class="form-control t14 " placeholder="Tài Khoản" value="">
                                </div>


                                <span class="mb-15 control-label bb">Mật Khẩu:</span>

                                <div class="mb-15">
                                    <input type="password" required class="form-control" name="customer_data1" placeholder="Mật Khẩu">
                                </div>

                                <span class="mb-15 control-label bb">Bạn Đã Đọc Kĩ Quy Định Và Chuẩn Bị Đầy Đủ Vật Phẩm, Phụ Kiện Theo Yêu Cầu Của Shop Chưa?:</span>

                                <div class="mb-15">
                                    <input type="text" required name="customer_data2" class="form-control t14 " placeholder="Bạn Đã Đọc Kĩ Quy Định Và Chuẩn Bị Đầy Đủ Vật Phẩm, Phụ Kiện Theo Yêu Cầu Của Shop Chưa?" value="">
                                </div>


                                <div style="font-size: 12px;" class="" id="content-sever"></div>




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


                        <div class="col-sm-6 col-md-3">
                            <div class="classWithPad">
                                <div class="image">

                                    <a href="/dich-vu/lam-thue-capsule-vang">
                                        <img src="/storage/images/cNzTIGMZ9J_1626597677.jpg">

                                    </a>

                                </div>
                                <div class="news_title"><a href="/dich-vu/lam-thue-capsule-vang">Làm Thuê Capsule Vàng</a></div>


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
    <script src="/assets/frontend/js/service/dich-vu-maychu-giong-mot.js"></script>
@endsection
