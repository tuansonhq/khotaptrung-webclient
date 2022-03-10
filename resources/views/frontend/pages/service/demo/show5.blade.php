@extends('frontend.layouts.master')
@section('content')
    <!-- BEGIN: PAGE CONTAINER -->
    <div class="c-layout-page">
        <!-- BEGIN: PAGE CONTENT -->

        <div class="c-content-box c-size-lg c-overflow-hide c-bg-white font-roboto">
            <div class="container">

            </div>
            <div class="text-center" style="margin-bottom: 50px;">
                <h2 style="font-size: 30px;font-weight: bold;text-transform: uppercase">DỊCH VỤ Nạp Kim Cương Free Fire</h2>
{{--                <div class="row  hidden-sm hidden-md hidden-lg">--}}
{{--                    <p style="margin-top: 15px;font-size: 23px" class="bb"><i class="fa fa-server" aria-hidden="true"></i> <a href="/dich-vu/free-fire" style="color:#32c5d2">Free Fire</a></p>--}}
{{--                </div>--}}
            </div>
            <form method="POST" action="https://nick.vn/dich-vu/1793/purchase" accept-charset="UTF-8" class="" enctype="multipart/form-data"><input name="_token" type="hidden" value="X8YsQD4YEObNmCLktdimefYpYlAMxkxgV2KwMkYY">
                <div class="container detail-service">
                    <div class="row">
                        <div class="col-md-7" style="margin-bottom:20px;">

                            <div class="row service-info">
                                <div class="col-md-5 hidden-xs hidden-sm">
                                    <div class="row">
                                        <div class="news_image">
                                            <img src="https://nick.vn/storage/images/nfjY80CaXR_1623228739.jpg" alt="Nạp Kim Cương Free Fire">
                                        </div>
                                    </div>
                                    <div class="row-face">
                                        <p style="margin-top: 15px" class="bb"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Nạp Kim Cương Free Fire</p>
                                        <p style="margin-top: 15px" class="bb"><i class="fa fa-server" aria-hidden="true"></i> <a href="/dich-vu/free-fire" style="color:#32c5d2">Free Fire</a></p>

                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <span class="mb-15 control-label bb">Kim Cương:</span>
                                    <div class="mb-15">
                                        <select name="selected" class="s-filter form-control t14" style="">
                                            <option value="0">Kim Cương × 45</option>
                                            <option value="1">Kim Cương × 90</option>
                                            <option value="2">Kim Cương × 230</option>
                                            <option value="3">Kim Cương × 465</option>
                                            <option value="4">Kim Cương × 950</option>
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
                                        <a id="txtPrice" style="font-size: 20px;font-weight: bold" class="">Tổng: 0 Xu</a>
                                        <button id="btnPurchase" type="button" style="font-size: 20px;" class="followus"><i class="fa fa-credit-card" aria-hidden="true"></i> Thanh toán</button>
                                    </div>
                                </div>
                            </div>

                            <div class="row emply-btns box-body" style="color: #505050;padding:20px;line-height: 2;margin-top: 30px">
                                <p><span style="color:#000000"><strong>Hệ thống nạp&nbsp;Kim Cương Free Fire&nbsp;gi&aacute; rẻ.&nbsp;Đảm bảo Kim Cương sạch 100%.</strong></span></p>

                                <p><span style="color:#000000"><strong>Mọi giao dịch đều c&oacute; ảnh&nbsp;h&oacute;a đơn của GARENA&nbsp;gửi cho qu&yacute; kh&aacute;ch.</strong></span></p>

                                <p><strong><span style="color:#000000">Ngo&agrave;i nạp kim cương qu&yacute; kh&aacute;ch c&oacute; thể </span><a href="https://nick.vn/mua-the"><span style="color:#c0392b">mua thẻ garena</span></a><span style="color:#000000"> chiết khấu 5%</span><a href="https://nick.vn/mua-the"><span style="color:#000000"> tại đ&acirc;y</span></a></strong></p>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="modal fade" id="homealert" role="dialog" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="loader" style="text-align: center"><img src="https://nick.vn/assets/frontend/images/loader.gif" style="width: 50px;height: 50px;display: none"></div>
                        <div class="modal-content">

                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Xác nhận thông tin thanh toán</h4>

                            </div>

                            <div class="modal-body">

                                <span class="mb-15 control-label bb">Điền ID game của bạn:</span>

                                <div class="mb-15">
                                    <input type="text" required name="customer_data0" class="form-control t14 " placeholder="Điền ID game của bạn" value="">
                                </div>
                                <div style="font-size: 12px;" class="" id="content-sever"></div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold loading" id="d3" style="" >Xác nhận thanh toán</button>
                                <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>
                            </div>

                        </div>
                    </div>
                </div>


            </form>

            <div class="container">
                <div class="job-wide-devider">
                    <div class="row">
                        <div class="col-lg-12 column">
                            <div class="job-details">
                                <h2 style="margin-bottom: 23px;font-size: 20px;font-weight: bold;text-transform: uppercase;">Mô tả</h2>
                                <div class="article-content">
                                    <table align="center" border="1" cellpadding="1" cellspacing="1" class="table table-bordered table-striped">
                                        <tbody>
                                        <tr>
                                            <td><span style="font-size:16px"><span style="color:#000000">✅ Nạp kim cương uy t&iacute;n</span></span></td>
                                            <td><span style="font-size:16px"><span style="color:#000000"><strong>⭐</strong>Kim cương sạch 100% c&oacute; x&aacute;c nhận từ NPH Garena gửi về thư</span></span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-size:16px"><span style="color:#000000">✅ Nạp kim cương gi&aacute; rẻ</span></span></td>
                                            <td><span style="font-size:16px"><span style="color:#000000"><strong>⭐</strong>Gi&aacute; rẻ nhất thị trường, nạp 150k l&atilde;i 20k so với nạp bằng thẻ Garena</span></span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-size:16px"><span style="color:#000000">✅ Nạp kim cương nhanh</span></span></td>
                                            <td><span style="font-size:16px"><span style="color:#000000"><strong>⭐</strong>Chỉ 30s sau khi thanh to&aacute;n l&agrave; kim cương đ&atilde; c&oacute; trong t&agrave;i khoản</span></span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-size:16px"><span style="color:#000000">✅ Nạp kim cương an to&agrave;n</span></span></td>
                                            <td><span style="font-size:16px"><span style="color:#000000"><strong>⭐</strong>Nạp kc qua ID game, kh&ocirc;ng cần phải đăng nhập t&agrave;i khoản hay mật khẩu</span></span></td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <p><span style="font-size:16px"><span style="color:#000000"><strong>Kim cương</strong>&nbsp;l&agrave; đơn&nbsp;tiền tệ trong&nbsp;game<strong>&nbsp;Free Fire</strong>&nbsp;của nph<strong>&nbsp;Garena</strong>&nbsp;được&nbsp;to&agrave;n bộ&nbsp;người chơi game ff ước muốn c&oacute; nhất. KC c&oacute; thể nạp topup&nbsp;trực tiếp, nạp&nbsp;bằng thẻ Garena, card&nbsp;điện thoại, ATM, v&iacute; điện tử,...&nbsp;Khi&nbsp;c&oacute; được kc th&igrave;&nbsp;gamer d&ugrave;ng để trang bị&nbsp;vật phẩm,&nbsp;skin s&uacute;ng vip, quần &aacute;o vip, skin d&ugrave;,&nbsp;ngoại trang<strong>,&nbsp;</strong>.. tuy nhi&ecirc;n l&agrave;m thế n&agrave;o để c&oacute; thật nhiều kim cương với gi&aacute; rẻ nhất&nbsp;th&igrave; lại l&agrave; c&acirc;u hỏi của&nbsp;nhiều người chơi game cần đ&aacute;p &aacute;n. Vậy để&nbsp;c&oacute; kim cương trong free fire với gi&aacute; rẻ&nbsp;th&igrave; phải l&agrave;m ra sao ? Ngo&agrave;i c&aacute;ch&nbsp;</span><a href="https://muathengay.com/"><span style="color:#000000">mua thẻ garena</span></a><span style="color:#000000">&nbsp;để nạp&nbsp;trực tiếp, c&aacute;c bạn c&ograve;n c&oacute; một lựa chọn kh&aacute;c đ&oacute; l&agrave;&nbsp;<em><strong>Mua Kim Cương Free Fire Gi&aacute; Rẻ</strong></em>&nbsp;tại website nạp game gi&aacute; rẻ, uy t&iacute;n.&nbsp;</span></span></p>

                                    <p><span style="font-size:16px"><span style="color:#000000">Để nạp kc gi&aacute; rẻ bạn cần phải t&igrave;m những địa chỉ nạp free fire&nbsp;gi&aacute; rẻ, uy t&iacute;n. Một trong những địa chỉ&nbsp;<u><strong>nạp kim cương free fire&nbsp;gi&aacute; rẻ, uy t&iacute;n</strong></u>&nbsp;được rất nhiều anh em game thủ, youtuber nhắc đến trong thời gian vừa qua ch&iacute;nh l&agrave; website&nbsp;</span><strong><a href="https://nick.vn"><span style="color:#000000">nick.vn</span></a></strong><span style="color:#000000">. Ch&uacute;ng t&ocirc;i l&agrave;&nbsp;<strong>shop nạp kim cương free fire uy t&iacute;n</strong>&nbsp;số 1 hiện nay.</span></span></p>

                                    <p><span style="font-size:16px"><span style="color:#000000">Bạn c&oacute; thể chọn g&oacute;i&nbsp;<strong>nạp kc ff&nbsp;</strong>từ 45 kim cương đến 950 kc. Ch&uacute;ng t&ocirc;i&nbsp;<strong>b&aacute;n Kim cương FF</strong>&nbsp;với số lượng kh&ocirc;ng giới hạn v&agrave; gi&aacute;&nbsp;<strong>chỉ từ 7.700 đồng</strong>. Đ&acirc;y l&agrave; g&oacute;i nạp kim cương v&ocirc; c&ugrave;ng rẻ so với c&aacute;ch nạp bằng thẻ Garena th&ocirc;ng thường. Khi bạn chọn&nbsp;<strong>g&oacute;i nạp 150K</strong>, bạn sẽ&nbsp;<strong>c&oacute; ngay 950 kim cương</strong>,&nbsp;<strong>l&atilde;i đến 90 kc</strong>&nbsp;so với khi&nbsp;<strong>nạp bằng thẻ Garena</strong>&nbsp;th&ocirc;ng thường. Khi bạn mua kc free fire tại&nbsp;</span><a href="https://napgamegiare.net/dich-vu/nap-kim-cuong-free-fire"><span style="color:#000000"><strong>shop b&aacute;n kim cương</strong>&nbsp;</span></a><strong><a href="https://napgamegiare.net/dich-vu/nap-kim-cuong-free-fire"><span style="color:#000000">FF</span></a><span style="color:#000000">&nbsp;</span></strong><span style="color:#000000">của ch&uacute;ng t&ocirc;i l&agrave; bạn đ&atilde;&nbsp;<strong>tiết kiệm</strong>&nbsp;được số tiền gần&nbsp;<strong>20K</strong>&nbsp;với&nbsp;<strong>mỗi lần mua</strong>&nbsp;g&oacute;i kim cương 150K, mua c&agrave;ng nhiều gi&aacute; c&agrave;ng rẻ, tiết kiệm c&agrave;ng nhiều. C&ugrave;ng xem bảng so s&aacute;nh&nbsp;dưới&nbsp;đ&acirc;y để thấy được lợi &iacute;ch khi nạp kim cương free fire th&ocirc;ng qua shop c&oacute; lợi như thế n&agrave;o nh&eacute; !</span></span></p>

                                    <table align="center" border="1" cellpadding="1" cellspacing="1" class="table table-bordered table-striped">
                                        <tbody>
                                        <tr>
                                            <td colspan="2" style="text-align:center"><span style="font-size:16px"><span style="color:#000000"><strong>Nạp Kim Cương bằng thẻ Garena</strong></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align:center"><span style="font-size:16px"><span style="color:#000000"><strong>Đơn gi&aacute;</strong></span></span></td>
                                            <td style="text-align:center"><span style="font-size:16px"><span style="color:#000000"><strong>Số lượng kim cương nhận</strong></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">20.000 VND</span></span></td>
                                            <td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">111&nbsp;Kim Cương</span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">50.000 VND</span></span></td>
                                            <td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">280 Kim Cương</span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">100.000 VND</span></span></td>
                                            <td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">580&nbsp;Kim Cương</span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">200.000 VND</span></span></td>
                                            <td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">1.190Kim Cương&nbsp;</span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">500.000 VND</span></span></td>
                                            <td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">3.050 Kim Cương</span></span></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="text-align:center"><span style="font-size:16px"><strong><span style="color:#000000">Nạp Kim Cương qua shop </span><a href="https://nick.vn"><span style="color:#000000">nick.vn</span></a></strong></span></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align:center"><span style="font-size:16px"><span style="color:#000000"><strong>Đơn gi&aacute;</strong></span></span></td>
                                            <td style="text-align:center"><span style="font-size:16px"><span style="color:#000000"><strong>Số lượng kim cương nhận</strong></span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">7.700 VND</span></span></td>
                                            <td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">45 Kim Cương</span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">15.400&nbsp;VND</span></span></td>
                                            <td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">90&nbsp;Kim Cương</span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">38.500&nbsp;VND</span></span></td>
                                            <td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">230&nbsp;Kim Cương</span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">77.000&nbsp;VND</span></span></td>
                                            <td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">465&nbsp;Kim Cương</span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">154.000&nbsp;VND</span></span></td>
                                            <td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">950&nbsp;Kim Cương</span></span></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">385.000&nbsp;VND</span></span></td>
                                            <td style="text-align:center"><span style="font-size:16px"><span style="color:#000000">2375&nbsp;Kim Cương</span></span></td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <p><span style="font-size:16px"><span style="color:#000000">Từ hai bảng tr&ecirc;n, ta c&oacute; thể thấy, việc nạp kim cương ff&nbsp;th&ocirc;ng qua Shop NAPGAMEGIARE bạn nhận được nhiều KC&nbsp;cũng như tiết kiệm được kh&aacute; nhiều chi ph&iacute; hơn so với nạp bằng thẻ Garena th&ocirc;ng thường.</span></span></p>

                                    <p><span style="font-size:16px"><strong><a href="https://nick.vn"><span style="color:#000000">Nick.vn</span></a><span style="color:#000000">&nbsp;</span></strong><span style="color:#000000">c&oacute; giao diện hiện đại, đơn giản, bạn sẽ dễ d&agrave;ng sử dụng tr&ecirc;n c&aacute;c thiết bị c&oacute; kết nối internet như: smartphone, tablet, laptop,... Bạn chỉ cần chọn g&oacute;i kim cương&nbsp;m&igrave;nh cần nạp, đặt h&agrave;ng v&agrave; thanh to&aacute;n online l&agrave; bạn đ&atilde; c&oacute; ngay kc&nbsp;trong game garena&nbsp;free fire. Thời gian giao dịch v&agrave;&nbsp;<strong>nhận kim cương</strong>&nbsp;trong game&nbsp;chưa đến&nbsp;<strong>30 gi&acirc;y</strong>. Bạn ho&agrave;n to&agrave;n c&oacute; thể y&ecirc;n t&acirc;m về số kc n&agrave;y&nbsp;v&agrave; ch&uacute;ng t&ocirc;i xin&nbsp;<strong>đảm bảo</strong>&nbsp;<strong>kim cương</strong>&nbsp;được b&aacute;n ra bởi&nbsp;<em><u><strong>shop nạp kc ff</strong></u></em>&nbsp;l&agrave; ho&agrave;n to&agrave;n&nbsp;<strong>sạch</strong>&nbsp;v&agrave;&nbsp;<strong>an to&agrave;n 100%</strong>&nbsp;v&igrave; ch&uacute;ng t&ocirc;i l&agrave;&nbsp;<strong>đại l&yacute; nạp kim cương được ủy quyền ch&iacute;nh thức bởi NPH Garena</strong>.</span></span></p>

                                    <p><span style="font-size:16px"><span style="color:#000000">Ch&uacute;ng t&ocirc;i lu&ocirc;n bảo vệ th&ocirc;ng tin kh&aacute;ch h&agrave;ng bằng những biện ph&aacute;p bảo mật tối ưu nhất. Đội ngũ nh&acirc;n vi&ecirc;n lu&ocirc;n trực 24/7/365 sẵn s&agrave;ng để phục vụ kh&aacute;ch h&agrave;ng mọi l&uacute;c, mọi nơi. Cam kết đảm bảo quyền lợi của kh&aacute;ch h&agrave;ng khi nạp&nbsp;game tại&nbsp;</span><strong><a href="https://nick.vn"><span style="color:#000000">nick.vn</span></a></strong><span style="color:#000000">.</span></span></p>

                                    <p><span style="font-size:16px"><span style="color:#000000">Tại&nbsp;</span><strong><a href="https://nick.vn"><span style="color:#000000">nick.vn</span></a></strong><span style="color:#000000">, bạn c&oacute; thể thực hiện mua kim cương Free Fire&nbsp;Garena với những h&igrave;nh thức thanh to&aacute;n đa dạng như:&nbsp;<strong>nạp kim cương free fire&nbsp;bằng thẻ c&agrave;o điện thoại hoặc thẻ game kh&aacute;c,&nbsp;mua kim cương Free Fire&nbsp;bằng v&iacute; điện tử - ATM,&hellip;&nbsp;</strong></span></span></p>

                                    <p><span style="font-size:16px"><span style="color:#000000">Với những ưu điểm nổi bật tr&ecirc;n, chắc hẳn ai ai trong ch&uacute;ng ta cũng sẽ lựa chọn giao dịch mua kim cương FF&nbsp;tại s<strong>hop nạp kc free fire -</strong>&nbsp;</span><strong><a href="https://nick.vn"><span style="color:#000000">nick.vn</span></a></strong><span style="color:#000000">&nbsp;phải kh&ocirc;ng?</span></span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="container m-t-20 ">

                <div class="game-item-view" style="margin-top: 40px">
                    <div class="c-content-title-1">
                        <h3 class="c-center c-font-uppercase c-font-bold">Dịch vụ khác</h3>
                        <div class="c-line-center c-theme-bg"></div>
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
    <script src="/assets/frontend/js/service/dich-vu-chon-mot.js"></script>
@endsection
