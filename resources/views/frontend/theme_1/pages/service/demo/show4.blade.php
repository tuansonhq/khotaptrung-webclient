@extends('frontend.layouts.master')
@section('content')
    <!-- BEGIN: PAGE CONTAINER -->
    <div class="c-layout-page">
        <!-- BEGIN: PAGE CONTENT -->



        <div class="c-content-box c-size-lg c-overflow-hide c-bg-white font-roboto">
            <div class="container">

            </div>
            <div class="text-center" style="margin-bottom: 50px;">
                <h2 style="font-size: 30px;font-weight: bold;text-transform: uppercase">DỊCH VỤ Cày Thuê PUBG mobile</h2>
{{--                <div class="row  hidden-sm hidden-md hidden-lg">--}}
{{--                    <p style="margin-top: 15px;font-size: 23px" class="bb"><i class="fa fa-server" aria-hidden="true"></i> <a href="/dich-vu/pubg-mobile" style="color:#32c5d2">PUBG MOBILE</a></p>--}}

{{--                </div>--}}
            </div>
            <form method="POST" action="https://nick.vn/dich-vu/1782/purchase" accept-charset="UTF-8" class="" enctype="multipart/form-data"><input name="_token" type="hidden" value="X8YsQD4YEObNmCLktdimefYpYlAMxkxgV2KwMkYY">
                <div class="container detail-service">
                    <div class="row">
                        <div class="col-md-7" style="margin-bottom:20px;">

                            <div class="row service-info">
                                <div class="col-md-5 hidden-xs hidden-sm">
                                    <div class="row">
                                        <div class="news_image">
                                            <img src="https://nick.vn/storage/images/nfjY80CaXR_1623228739.jpg" alt="Cày Thuê PUBG mobile">
                                        </div>
                                    </div>
                                    <div class="row-face">
                                        <p style="margin-top: 15px" class="bb"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Cày Thuê PUBG mobile</p>
                                        <p style="margin-top: 15px" class="bb"><i class="fa fa-server" aria-hidden="true"></i> <a href="/dich-vu/pubg-mobile" style="color:#32c5d2">PUBG MOBILE</a></p>

                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <span class="mb-15 control-label bb">Mức Rank Yêu Cầu:</span>
                                    <div class="simple-checkbox s-filter">
                                        <p><input value="0" type="checkbox" id="0">
                                            <label for="0">100 điểm / Đồng -&gt; Bạc - 30,000 VNĐ</label>
                                        </p>

                                        <p><input value="1" type="checkbox" id="1">
                                            <label for="1">100 điểm / Bạc -&gt; Vàng - 30,000 VNĐ</label>
                                        </p>

                                        <p><input value="2" type="checkbox" id="2">
                                            <label for="2">100 điểm / Vàng -&gt; Bạch Kim - 50,000 VNĐ</label>
                                        </p>

                                        <p><input value="3" type="checkbox" id="3">
                                            <label for="3">100 điểm / Bạch Kim-&gt; Kim cương - 70,000 VNĐ</label>
                                        </p>

                                        <p><input value="4" type="checkbox" id="4">
                                            <label for="4">100 điểm / Kim cương -&gt; Crown - 100,000 VNĐ</label>
                                        </p>

                                        <p><input value="5" type="checkbox" id="5">
                                            <label for="5">100 điểm / Crown -&gt; Ace - 150,000 VNĐ</label>
                                        </p>

                                        <p><input value="6" type="checkbox" id="6">
                                            <label for="6">100 điểm / Ace -&gt; Chí Tôn ( mốc 4k2- 4k5 điểm ) - 250,000 VNĐ</label>
                                        </p>

                                        <p><input value="7" type="checkbox" id="7">
                                            <label for="7">100 điểm / Ace -&gt; Chí Tôn ( mốc 4k5- 4k9 điểm ) - 350,000 VNĐ</label>
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
                                        <a id="txtPrice" style="font-size: 20px;font-weight: bold" class="">Tổng: 0 Xu</a>
                                        <button id="btnPurchase" type="button" style="font-size: 20px;" class="followus"><i class="fa fa-credit-card" aria-hidden="true"></i> Thanh toán</button>
                                    </div>
                                </div>
                            </div>

                            <div class="row emply-btns box-body" style="color: #505050;padding:20px;line-height: 2;margin-top: 30px">
                                <p><span style="font-size:14px"><strong>- V&igrave; t&agrave;i khoản facebook đang nhập&nbsp;kh&aacute;c khu vực n&ecirc;n sẽ bị x&aacute;c minh danh t&iacute;nh ( checkpoin ) n&ecirc;n khi c&oacute; người nhận y&ecirc;u cầu v&agrave; trao đổi x&aacute;c nhận danh t&iacute;nh th&igrave; c&aacute;c bạn ph&ecirc; duyệt để đội ngũ c&agrave;y thu&ecirc; thực hiện nh&eacute; - <a href="https://www.facebook.com/nickvnn/"><span style="color:#3498db">LI&Ecirc;N HỆ</span></a></strong></span></p>

                                <p><span style="font-size:14px"><strong>- IOS kh&aacute;ch h&agrave;ng phải li&ecirc;n kết t&agrave;i khoản game với facebook trước khi đặt đơn</strong></span></p>
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

                                <span class="mb-15 control-label bb">Tài khoản nick:</span>

                                <div class="mb-15">
                                    <input type="text" required name="customer_data0" class="form-control t14 " placeholder="Tài khoản nick" value="">
                                </div>


                                <span class="mb-15 control-label bb">Mật khẩu nick:</span>

                                <div class="mb-15">
                                    <input type="password" required class="form-control" name="customer_data1" placeholder="Mật khẩu nick">
                                </div>

                                <span class="mb-15 control-label bb">Dạng nick:</span>

                                <div class="mb-15">
                                    <select name="customer_data2" required class="mb-15 control-label bb">
                                        <option value="0">Facebook</option>
                                        <option value="1">gmail</option>
                                    </select>
                                </div>

                                <span class="mb-15 control-label bb">Loại rank:</span>

                                <div class="mb-15">
                                    <select name="customer_data3" required class="mb-15 control-label bb">
                                        <option value="0">SOLO</option>
                                        <option value="1">DUO</option>
                                        <option value="2">SQUAD</option>
                                    </select>
                                </div>

                                <span class="mb-15 control-label bb">Version:</span>

                                <div class="mb-15">
                                    <select name="customer_data4" required class="mb-15 control-label bb">
                                        <option value="0">Việt Nam</option>
                                        <option value="1">Korea</option>
                                        <option value="2">Taiwan</option>
                                        <option value="3">BGMI</option>
                                        <option value="4">Global</option>
                                    </select>
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

                                    <a href="/dich-vu/nap-uc-pubg-mobile-vng">
                                        <img src="/storage/images/c4laUltLMc_1623228063.jpg">

                                    </a>

                                </div>
                                <div class="news_title"><a href="/dich-vu/nap-uc-pubg-mobile-vng">Nạp UC Pubg Mobile VNG</a></div>


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
    <script src="/assets/frontend/js/service/dich-vu-chon-nhieu.js"></script>
@endsection
