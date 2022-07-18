@extends('frontend.layouts.master')
@section('content')

<section>
    <div class="container">

        <nav aria-label="breadcrumb" style="margin-top: 10px;">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="/dich-vu">Dịch vụ</a></li>

                <li class="breadcrumb-item active" aria-current="page">Nạp RP - LOL ( Liên Minh )</li>
            </ol>
        </nav>

        <div class="c-content-box c-size-lg c-overflow-hide c-bg-white font-roboto">
            <div class="notify">

            </div>
            <div class="text-center" style="margin-bottom: 30px;margin-top: 50px;">
                <h1 style="font-size: 1.5rem;font-weight: bold;text-transform: uppercase">Nạp RP - LOL ( Liên Minh )</h1>




            </div>
            <form method="POST" action="https://napgamegiare.net/dich-vu/1805/purchase" accept-charset="UTF-8" class="" enctype="multipart/form-data"><input name="_token" type="hidden" value="1d1UtKProIOHCYvd7GjOQ1mwzvuWei6FP3awwoKP">
                <div class="detail-service">


                    <div class="row">

                        <div class="col-md-3">
                            <div class="news_image text-center">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/TCrPs5rSRz_1625567525.jpg" alt="Nạp RP - LOL ( Liên Minh )">
                            </div>
                        </div>
                        <div class="col-md-5" style="margin-bottom:20px;">

                            <div class="config">

                                <div class="form-group">
                                    <label>RP LMHT:</label>

                                    <select name="selected" class="s-filter form-control t14" style="">
                                        <option value="0">Gói 1 : 16 RP</option>
                                        <option value="1">Gói 2 : 32 RP</option>
                                        <option value="2">Gói 3 : 80 RP</option>
                                        <option value="3">Gói 4 : 168 RP</option>
                                        <option value="4">Gói 5 : 340 RP</option>
                                        <option value="5">Gói 6: 856 RP</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Tài khoản Garena:</label>

                                    <input type="text" class="form-control" required name="customer_data0"
                                           placeholder="Tài khoản Garena" value="">


                                </div>



                                <div class="form-group">
                                    <label>Mật khẩu Garena:</label>



                                    <input type="password" required class="form-control" name="customer_data1"
                                           placeholder="Mật khẩu Garena">
                                </div>





                            </div>
                        </div>
                        <div class="col-md-4">

                            <div class="">
                                <input type="hidden" name="selected" value="">
                                <input type="hidden" name="server">
                                <a id="txtPrice" style="font-size: 20px;font-weight: bold;display: block;margin-bottom: 15px"
                                   class="btn btn-success">Tổng: 0 Xu</a>
                                <button id="btnPurchase" type="button" style="font-size: 18px;font-weight: bold;display: block;margin-bottom: 15px;cursor: pointer" class="btn-auth" ><i class="fa fa-credit-card"
                                                                                                                                                                                         aria-hidden="true"></i> Thanh toán
                                </button>
                            </div>

                            <div class="row"
                                 style="color: #505050;padding:20px;line-height: 2;margin-top: 30px">
                                <p><span style="font-size:16px"><strong>Hệ thống b&aacute;n RP Li&ecirc;n Minh Huyền Thoại&nbsp;gi&aacute; rẻ, uy t&iacute;n, chiết khấu cao</strong>.</span></p>

                                <p><span style="font-size:16px"><strong>Đảm bảo RP sạch 100%.</strong>&nbsp;</span><span style="font-size:16px"><strong>Mọi giao dịch đều c&oacute; ảnh&nbsp;h&oacute;a đơn của GARENA&nbsp;gửi cho qu&yacute; kh&aacute;ch</strong>.</span></p>

                                <p><span style="font-size:16px">Ngo&agrave;i c&aacute;ch nạp RP - LOL ( Li&ecirc;n Minh )&nbsp;trực tiếp, c&aacute;c bạn c&oacute; thể <strong><a href="https://napgamegiare.net/mua-the">mua thẻ Garena</a></strong>&nbsp;gi&aacute; rẻ với chiết khấu l&ecirc;n đến 5% <strong><a href="https://napgamegiare.net/mua-the">tại đ&acirc;y</a></strong></span></p>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="homealert" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">


                            <div class="modal-header">
                                <div class="col-1"></div>
                                <div class="col-10 text-center"><h6 class="modal-title">Xác nhận thanh toán</h6></div>
                                <div class="col-1 ">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>

                            <div class="modal-body">
                                <p> Bạn thực sự muốn thanh toán?</p>

                            </div>
                            <div class="modal-footer">


                                <button type="submit"
                                        class="btn btn-success c-theme-btn c-btn-square c-btn-uppercase c-btn-bold loading" id="d3"
                                        style="">Xác nhận thanh toán
                                </button>



                                <button type="button"
                                        class="btn btn-danger c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase"
                                        data-dismiss="modal">Đóng
                                </button>

                            </div>

                        </div>
                    </div>
                </div>




            </form>

            <div class="job-wide-devider">

                <div class="description">
                    <h2 style="margin-bottom: 23px;font-size: 20px;text-transform: uppercase;">
                        Mô tả</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12 column">
                        <div class="job-details">

                            <div class="article-content content_post ">
                                <div class="special-text">
                                    <table align="center" border="1" cellpadding="1" cellspacing="1" class="table table-bordered table-striped">
                                        <tbody>
                                        <tr>
                                            <td><span style="font-size:16px">✅ Nạp&nbsp;RP uy t&iacute;n</span></td>
                                            <td><span style="font-size:16px"><span style="color:#f1c40f"><strong>⭐</strong></span>RP sạch 100% c&oacute; x&aacute;c nhận từ NPH Garena gửi về thư</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-size:16px">✅ Nạp RP gi&aacute; rẻ</span></td>
                                            <td><span style="font-size:16px"><span style="color:#f1c40f"><strong>⭐</strong></span>Gi&aacute; rẻ nhất thị trường, nạp 150k l&atilde;i 20k so với nạp bằng thẻ Garena</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-size:16px">✅ Nạp RP nhanh</span></td>
                                            <td><span style="font-size:16px"><span style="color:#f1c40f"><strong>⭐</strong></span>Chỉ 30s sau khi thanh to&aacute;n l&agrave; RP đ&atilde; c&oacute; trong t&agrave;i khoản Li&ecirc;n Minh</span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="font-size:16px">✅ Nạp RP an to&agrave;n</span></td>
                                            <td><span style="font-size:16px"><span style="color:#f1c40f"><strong>⭐</strong></span>C&aacute;c giao dịch được m&atilde; h&oacute;a 100%, đảm bảo về bảo mật t&agrave;i khoản kh&aacute;ch h&agrave;ng</span></td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <p><span style="font-size:16px"><strong>RP</strong> l&agrave; đơn vị tiền tệ quan trọng nhất trong game <strong>Li&ecirc;n Minh Huyền Thoại</strong>. RP&nbsp;c&oacute; thể nạp topup&nbsp;trực tiếp, nạp&nbsp;bằng thẻ Garena, card&nbsp;điện thoại, ATM, v&iacute; điện tử,...&nbsp;</span><span style="font-size:16px"> RP c&oacute; thể d&ugrave;ng để tham gia v&agrave;o c&aacute;c event trong game hoặc&nbsp;mua hầu hết c&aacute;c vật phẩm, bao gồm thẻ đổi t&ecirc;n, tướng&nbsp;c&ugrave;ng c&aacute;c g&oacute;i tăng điểm, trang phục, linh th&uacute;, s&agrave;n đấu,...</span></p>

                                    <p><span style="font-size:16px">Hiện c&oacute; rất nhiều c&aacute;ch <strong>nạp RP</strong> như: mua bằng thẻ ng&acirc;n h&agrave;ng, mua bằng tiền mặt, đổi rp bằng thẻ garena, s&ograve; garena, nạp RP bằng thẻ c&agrave;o điện thoại hoặc&nbsp;nạp RP trực tiếp v&agrave;o game qua c&aacute;c website,....</span></p>

                                    <p><span style="font-size:16px">Mỗi c&aacute;ch nạp RP đều c&oacute; những ưu nhược điểm ri&ecirc;ng. Tuy nhi&ecirc;n, c&aacute;ch nạp RP game LMHT gi&aacute; rẻ, c&oacute; nhiều ưu đ&atilde;i, được c&aacute;c game thủ ưa chuộng ch&iacute;nh l&agrave; nạp RP trực tiếp v&agrave;o game th&ocirc;ng qua c&aacute;c website. Một trong những địa chỉ nạp RP LMHT gi&aacute; rẻ, uy t&iacute;n, chiết khấu cao&nbsp;l&agrave;&nbsp;website&nbsp;<strong><a href="https://napgamegiare.net/">napgamegiare.net</a></strong>.</span></p>

                                    <p><span style="font-size:16px"><strong><a href="https://napgamegiare.net/">Napgamegiare.net</a></strong>&nbsp;ng&agrave;y c&agrave;ng thu h&uacute;t được sự quan t&acirc;m của rất nhiều người chơi game bởi mỗi ng&agrave;y tại website thực hiện hơn 10.000+ giao dịch nạp RP game gi&aacute; rẻ.&nbsp;<strong><a href="https://napgamegiare.net/">Napgamegiare.net</a>&nbsp;</strong>c&oacute; giao diện hiện đại, đơn giản, bạn sẽ dễ d&agrave;ng sử dụng tr&ecirc;n c&aacute;c thiết bị c&oacute; kết nối internet như: smartphone, tablet, laptop,... Bạn chỉ cần chọn g&oacute;i RP m&igrave;nh cần nạp, đặt h&agrave;ng v&agrave; thanh to&aacute;n online l&agrave; bạn đ&atilde; c&oacute; ngay RP trong game Li&ecirc;n Minh - LOL. Thời gian giao dịch v&agrave;&nbsp;<strong>nhận RP</strong>&nbsp;trong game&nbsp;chưa đến&nbsp;<strong>30 gi&acirc;y</strong>.&nbsp;</span></p>

                                    <p><span style="font-size:16px">Bạn c&oacute; thể chọn c&aacute;c g&oacute;i nạp RP&nbsp;từ 16RP đến 340RP v&agrave; với mức <strong>gi&aacute; chỉ từ 7.700</strong> đồng đến 150k v&agrave; ch&uacute;ng t&ocirc;i <strong>b&aacute;n RP Li&ecirc;n Minh</strong> kh&ocirc;ng giới hạn số lượng. Đ&acirc;y l&agrave; g&oacute;i nạp RP v&ocirc; c&ugrave;ng rẻ so với c&aacute;ch nạp bằng thẻ Garena th&ocirc;ng thường, mua c&agrave;ng nhiều gi&aacute; c&agrave;ng rẻ, tiết kiệm c&agrave;ng nhiều. Bạn ho&agrave;n to&agrave;n c&oacute; thể y&ecirc;n t&acirc;m về số RP n&agrave;y&nbsp;v&agrave; ch&uacute;ng t&ocirc;i xin&nbsp;<strong>đảm bảo RP</strong>&nbsp;được b&aacute;n ra bởi&nbsp;<em><u><strong>shop nạp RP LMHT</strong></u></em>&nbsp;l&agrave; ho&agrave;n to&agrave;n&nbsp;<strong>sạch</strong>&nbsp;v&agrave;&nbsp;<strong>an to&agrave;n 100%</strong>&nbsp;v&igrave; ch&uacute;ng t&ocirc;i l&agrave;&nbsp;<strong>đại l&yacute; nạp RP&nbsp;được ủy quyền ch&iacute;nh thức bởi NPH Garena</strong>.</span></p>

                                    <table align="center" border="1" cellpadding="1" cellspacing="1" class="table table-bordered table-striped">
                                        <tbody>
                                        <tr>
                                            <td colspan="2" style="text-align:center"><span style="font-size:16px"><strong>Nạp RP bằng thẻ Garena</strong></span></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align:center"><span style="font-size:16px"><strong>Mệnh gi&aacute;</strong></span></td>
                                            <td style="text-align:center"><span style="font-size:16px"><strong>RP nhận được</strong></span></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align:center"><span style="font-size:16px">20.000 VND</span></td>
                                            <td style="text-align:center"><span style="font-size:16px">40 RP</span></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align:center"><span style="font-size:16px">50.000 VND</span></td>
                                            <td style="text-align:center"><span style="font-size:16px">100 RP</span></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align:center"><span style="font-size:16px">100.000 VND&nbsp;</span></td>
                                            <td style="text-align:center"><span style="font-size:16px">210 RP</span></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align:center"><span style="font-size:16px">200.000 VND</span></td>
                                            <td style="text-align:center"><span style="font-size:16px">425 RP</span></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align:center"><span style="font-size:16px">500.000 VND</span></td>
                                            <td style="text-align:center"><span style="font-size:16px">1070 RP</span></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" style="text-align:center"><span style="font-size:16px"><strong>Nạp RP qua shop NAPGAMEGIARE</strong></span></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align:center"><span style="font-size:16px"><strong>Mệnh gi&aacute;</strong></span></td>
                                            <td style="text-align:center"><span style="font-size:16px"><strong>RP nhận được</strong></span></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align:center"><span style="font-size:16px">7.700 VND</span></td>
                                            <td style="text-align:center"><span style="font-size:16px">16&nbsp;RP</span></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align:center"><span style="font-size:16px">15.400 VND</span></td>
                                            <td style="text-align:center"><span style="font-size:16px">32&nbsp;RP</span></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align:center"><span style="font-size:16px">38.500 VND</span></td>
                                            <td style="text-align:center"><span style="font-size:16px">80&nbsp;RP</span></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align:center"><span style="font-size:16px">77.000 VND</span></td>
                                            <td style="text-align:center"><span style="font-size:16px">168&nbsp;RP</span></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align:center"><span style="font-size:16px">154.000 VND</span></td>
                                            <td style="text-align:center"><span style="font-size:16px">340&nbsp;RP</span></td>
                                        </tr>
                                        <tr>
                                            <td style="text-align:center"><span style="font-size:16px">385.000 VND</span></td>
                                            <td style="text-align:center"><span style="font-size:16px">856&nbsp;RP</span></td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <p><span style="font-size:16px">Từ hai bảng tr&ecirc;n, ta c&oacute; thể thấy, việc nạp RP LOL th&ocirc;ng qua Shop NAPGAMEGIARE bạn nhận được nhiều RP cũng như tiết kiệm được kh&aacute; nhiều chi ph&iacute; hơn so với nạp bằng thẻ Garena. C&oacute; thể thấy khi bạn nạp RP Li&ecirc;n Minh g&oacute;i 154k l&agrave; bạn đ&atilde; l&atilde;i 30 RP so với việc nạp bằng thẻ Garena th&ocirc;ng thường.</span></p>

                                    <p><span style="font-size:16px">Ch&uacute;ng t&ocirc;i lu&ocirc;n bảo vệ th&ocirc;ng tin kh&aacute;ch h&agrave;ng bằng những biện ph&aacute;p bảo mật tối ưu nhất. Đội ngũ nh&acirc;n vi&ecirc;n lu&ocirc;n trực 24/7/365 sẵn s&agrave;ng để phục vụ kh&aacute;ch h&agrave;ng mọi l&uacute;c, mọi nơi. Cam kết đảm bảo quyền lợi của kh&aacute;ch h&agrave;ng khi nạp&nbsp;game tại&nbsp;<strong><a href="https://napgamegiare.net/">Napgamegiare.net</a></strong>.</span></p>

                                    <p><span style="font-size:16px">Tại&nbsp;<strong><a href="https://napgamegiare.net/">Napgamegiare.net</a></strong>, bạn c&oacute; thể thực hiện mua RP Li&ecirc;n Minh&nbsp;với những h&igrave;nh thức thanh to&aacute;n đa dạng như:&nbsp;<strong>nạp RP Li&ecirc;n Minh</strong><strong>&nbsp;bằng thẻ c&agrave;o điện thoại hoặc thẻ game kh&aacute;c,&nbsp;mua RP Li&ecirc;n Minh&nbsp;bằng v&iacute; điện tử - ATM,&hellip;&nbsp;</strong></span></p>

                                    <p><span style="font-size:16px">Với những ưu điểm nổi bật tr&ecirc;n, chắc hẳn ai ai trong ch&uacute;ng ta cũng sẽ lựa chọn giao dịch mua <strong>RP Li&ecirc;n Minh</strong>&nbsp;tại s<strong>hop nạp RP LMHT&nbsp;-</strong>&nbsp;<strong><a href="https://napgamegiare.net/">Napgamegiare.net</a></strong>&nbsp;phải kh&ocirc;ng?</span></p>
                                </div>
                                <button class="expand-button">
                                    Xem thêm nội dung
                                </button>

                            </div>

                            <style type="text/css">

                                @media        only screen and (max-width: 580px) {
                                    .hidetext {
                                        max-height: 220px;
                                        overflow: hidden;
                                    }
                                    .intro-text iframe{
                                        width: 100%;
                                        height: 220px;
                                    }
                                    .intro-text img {
                                        height: auto !important;
                                    }
                                }
                                @media        only screen and (min-width: 580px) {
                                    .hidetext {
                                        max-height: 220px;
                                        overflow: hidden;
                                    }
                                    .intro-text iframe{
                                        width: 100%;
                                        height: 641px;
                                    }
                                }
                                .showtext {
                                    max-height:initial;
                                }
                                .viewless,.viewmore{
                                    cursor: pointer;
                                    color: #f1c40f;
                                    padding-top: 10px;
                                    font-size: 18px;
                                }

                                .intro-text img {
                                    max-width: 90%;
                                }
                            </style>














                        </div>
                    </div>
                </div>

            </div>

            <div class="tab-vertical tutorial_area">
                <div class="panel-group" id="accordion">



                </div>
            </div>

            @include('frontend.pages.widget.__dichvu__lienquan')


            <div class="main-title" style="margin-top: 30px">
                <h2 style="font-size: 20px;text-transform: uppercase;">Bình luận</h2>
            </div>

            <div class="entries" style="margin-bottom: 50px">

                <div class="chat comments box-border">
                    <div class="chat-history">
                        <ul class="list-unstyled chat-scroll">

                            <li>
                                <div class="message-data">
                                    <span class="message-data-name"><i class="fa fa-circle online"></i> Khách</span>
                                    <span class="message-data-time">4:30 PM, Vừa xong</span>
                                </div>
                                <div class="message my-message">
                                    Cứ tưởng lừa đảo, nạp thử 200k nhận luôn kim cương trong 10s
                                </div>
                            </li>

                            <li>
                                <div class="message-data">
                                    <span class="message-data-name"><i class="fa fa-circle online"></i> Khách</span>
                                    <span class="message-data-time">4:30 PM, Vừa xong</span>
                                </div>
                                <div class="message my-message">
                                    Đã nạp thành công
                                </div>
                            </li>

                            <li>
                                <div class="message-data">
                                    <span class="message-data-name"><i class="fa fa-circle online"></i> Khách</span>
                                    <span class="message-data-time">4:30 PM, Vừa xong</span>
                                </div>
                                <div class="message my-message">
                                    Web nạp ngon thế này mà giờ mới biết
                                </div>
                            </li>

                            <li>
                                <div class="message-data">
                                    <span class="message-data-name"><i class="fa fa-circle online"></i> Khách</span>
                                    <span class="message-data-time">4:30 PM, Vừa xong</span>
                                </div>
                                <div class="message my-message">
                                    Vừa chạy ra quán mua 500k thẻ nạp ăn luôn, ngon quá admin
                                </div>
                            </li>

                            <li>
                                <div class="message-data">
                                    <span class="message-data-name"><i class="fa fa-circle online"></i> Khách</span>
                                    <span class="message-data-time">4:30 PM, Vừa xong</span>
                                </div>
                                <div class="message my-message">
                                    Kim cương sạch, thanks admin
                                </div>
                            </li>

                            <li>
                                <div class="message-data">
                                    <span class="message-data-name"><i class="fa fa-circle online"></i> Khách</span>
                                    <span class="message-data-time">4:30 PM, Vừa xong</span>
                                </div>
                                <div class="message my-message">
                                    1 vote uy tín cho web nhé, quá ngon luôn
                                </div>
                            </li>

                            <li>
                                <div class="message-data">
                                    <span class="message-data-name"><i class="fa fa-circle online"></i> Khách</span>
                                    <span class="message-data-time">4:31 PM, Vừa xong</span>
                                </div>
                                <div class="message my-message">
                                    Web được đấy anh em
                                </div>
                            </li>

                            <li>
                                <div class="message-data">
                                    <span class="message-data-name"><i class="fa fa-circle online"></i> Khách</span>
                                    <span class="message-data-time">4:31 PM, Vừa xong</span>
                                </div>
                                <div class="message my-message">
                                    Nhập nhầm mã thẻ với serial báo admin xử lý trong vòng 1 nốt nhạc, uy tín quá admin ơi
                                </div>
                            </li>

                            <li>
                                <div class="message-data">
                                    <span class="message-data-name"><i class="fa fa-circle online"></i> Khách</span>
                                    <span class="message-data-time">4:31 PM, Vừa xong</span>
                                </div>
                                <div class="message my-message">
                                    Anh em nào chưa nạp thì vào nạp ngay đi đang có khuyến mại
                                </div>
                            </li>

                            <li>
                                <div class="message-data">
                                    <span class="message-data-name"><i class="fa fa-circle online"></i> Khách</span>
                                    <span class="message-data-time">4:31 PM, Vừa xong</span>
                                </div>
                                <div class="message my-message">
                                    Uy tín không anh em.
                                </div>
                            </li>

                            <li>
                                <div class="message-data">
                                    <span class="message-data-name"><i class="fa fa-circle online"></i> Khách</span>
                                    <span class="message-data-time">4:31 PM, Vừa xong</span>
                                </div>
                                <div class="message my-message">
                                    Nạp thử 200k nhận luôn gấp đôi trong 10s
                                </div>
                            </li>

                            <li>
                                <div class="message-data">
                                    <span class="message-data-name"><i class="fa fa-circle online"></i> Khách</span>
                                    <span class="message-data-time">4:31 PM, Vừa xong</span>
                                </div>
                                <div class="message my-message">
                                    40k kim cương đã về tài khỏa, thanks admin
                                </div>
                            </li>

                            <li>
                                <div class="message-data">
                                    <span class="message-data-name"><i class="fa fa-circle online"></i> Khách</span>
                                    <span class="message-data-time">4:31 PM, Vừa xong</span>
                                </div>
                                <div class="message my-message">
                                    Có anh em nào vừa từ youtube qua đây nạp k
                                </div>
                            </li>

                            <li>
                                <div class="message-data">
                                    <span class="message-data-name"><i class="fa fa-circle online"></i> Khách</span>
                                    <span class="message-data-time">4:31 PM, Vừa xong</span>
                                </div>
                                <div class="message my-message">
                                    Web ngon vl
                                </div>
                            </li>

                            <li>
                                <div class="message-data">
                                    <span class="message-data-name"><i class="fa fa-circle online"></i> Khách</span>
                                    <span class="message-data-time">4:31 PM, Vừa xong</span>
                                </div>
                                <div class="message my-message">
                                    Vừa nạp 100k xong
                                </div>
                            </li>

                            <li>
                                <div class="message-data">
                                    <span class="message-data-name"><i class="fa fa-circle online"></i> Khách</span>
                                    <span class="message-data-time">4:31 PM, Vừa xong</span>
                                </div>
                                <div class="message my-message">
                                    Anh em không phải sợ đâu, tôi nạp nhiều web này rồi
                                </div>
                            </li>

                            <li>
                                <div class="message-data">
                                    <span class="message-data-name"><i class="fa fa-circle online"></i> Khách</span>
                                    <span class="message-data-time">4:31 PM, Vừa xong</span>
                                </div>
                                <div class="message my-message">
                                    Nghe anh em review ngon quá, tôi ra làm cái thẻ 500k nạp đây
                                </div>
                            </li>

                            <li>
                                <div class="message-data">
                                    <span class="message-data-name"><i class="fa fa-circle online"></i> Khách</span>
                                    <span class="message-data-time">4:31 PM, Vừa xong</span>
                                </div>
                                <div class="message my-message">
                                    Web được đấy anh em
                                </div>
                            </li>


                            <li>
                                <div class="message-data">
                                    <span class="message-data-name"><i class="fa fa-circle online"></i> Khách</span>
                                    <span class="message-data-time">4:31 PM, Vừa xong</span>
                                </div>
                                <div class="message my-message">
                                    Đã nạp ở đây 20tr tiền thẻ, vote uy tín nhé
                                </div>
                            </li>

                            <li>
                                <div class="message-data">
                                    <span class="message-data-name"><i class="fa fa-circle online"></i> Khách</span>
                                    <span class="message-data-time">4:31 PM, Vừa xong</span>
                                </div>
                                <div class="message my-message">
                                    Vãi vừa ấn nạp xong vào game có quà ngay, ngon:v
                                </div>
                            </li>

                            <li>
                                <div class="message-data">
                                    <span class="message-data-name"><i class="fa fa-circle online"></i> Khách</span>
                                    <span class="message-data-time">4:31 PM, Vừa xong</span>
                                </div>
                                <div class="message my-message">
                                    Đã nạp thành công
                                </div>
                            </li>

                            <li>
                                <div class="message-data">
                                    <span class="message-data-name"><i class="fa fa-circle online"></i> Khách</span>
                                    <span class="message-data-time">4:31 PM, Vừa xong</span>
                                </div>
                                <div class="message my-message">
                                    Vote 10000k sao nhé, quá uy tín
                                </div>
                            </li>

                            <li>
                                <div class="message-data">
                                    <span class="message-data-name"><i class="fa fa-circle online"></i> Khách</span>
                                    <span class="message-data-time">4:31 PM, Vừa xong</span>
                                </div>
                                <div class="message my-message">
                                    Vừa nạp xong, quá ngon
                                </div>
                            </li>

                            <li>
                                <div class="message-data">
                                    <span class="message-data-name"><i class="fa fa-circle online"></i> Khách</span>
                                    <span class="message-data-time">4:31 PM, Vừa xong</span>
                                </div>
                                <div class="message my-message">
                                    Ngon vcl, +1 sao cho admin
                                </div>
                            </li>

                            <li>
                                <div class="message-data">
                                    <span class="message-data-name"><i class="fa fa-circle online"></i> Khách</span>
                                    <span class="message-data-time">4:31 PM, Vừa xong</span>
                                </div>
                                <div class="message my-message">
                                    Cứ tưởng không được, nạp thử 200k nhận luôn kim cương trong 10s
                                </div>
                            </li>

                            <li>
                                <div class="message-data">
                                    <span class="message-data-name"><i class="fa fa-circle online"></i> Khách</span>
                                    <span class="message-data-time">4:31 PM, Vừa xong</span>
                                </div>
                                <div class="message my-message">
                                    Web được đấy anh em
                                </div>
                            </li>

                            <li>
                                <div class="message-data">
                                    <span class="message-data-name"><i class="fa fa-circle online"></i> Khách</span>
                                    <span class="message-data-time">4:31 PM, Vừa xong</span>
                                </div>
                                <div class="message my-message">
                                    Vãi vừa ấn nạp xong vào game có quà ngay, AK47 LV3 vĩnh viễn :v
                                </div>
                            </li>

                            <li>
                                <div class="message-data">
                                    <span class="message-data-name"><i class="fa fa-circle online"></i> Khách</span>
                                    <span class="message-data-time">4:31 PM, Vừa xong</span>
                                </div>
                                <div class="message my-message">
                                    Vote 10000k sao nhé, quá uy tín
                                </div>
                            </li>

                            <li>
                                <div class="message-data">
                                    <span class="message-data-name"><i class="fa fa-circle online"></i> Khách</span>
                                    <span class="message-data-time">4:31 PM, Vừa xong</span>
                                </div>
                                <div class="message my-message">
                                    Uy tín nhé anh em
                                </div>
                            </li>

                            <li>
                                <div class="message-data">
                                    <span class="message-data-name"><i class="fa fa-circle online"></i> Khách</span>
                                    <span class="message-data-time">4:31 PM, Vừa xong</span>
                                </div>
                                <div class="message my-message">
                                    Có anh em nào vừa từ youtube qua đây nạp k
                                </div>
                            </li>

                            <li>
                                <div class="message-data">
                                    <span class="message-data-name"><i class="fa fa-circle online"></i> Khách</span>
                                    <span class="message-data-time">4:31 PM, Vừa xong</span>
                                </div>
                                <div class="message my-message">
                                    Không scam, web nạp xong ngon đấy !
                                </div>
                            </li>

                            <li>
                                <div class="message-data">
                                    <span class="message-data-name"><i class="fa fa-circle online"></i> Khách</span>
                                    <span class="message-data-time">4:31 PM, Vừa xong</span>
                                </div>
                                <div class="message my-message">
                                    Đã nhận AK47 rồng xanh lv5 thanks admin
                                </div>
                            </li>

                            <li>
                                <div class="message-data">
                                    <span class="message-data-name"><i class="fa fa-circle online"></i> Khách</span>
                                    <span class="message-data-time">4:31 PM, Vừa xong</span>
                                </div>
                                <div class="message my-message">
                                    Nghe anh em review ngon quá, tôi ra làm cái thẻ 500k nạp đây
                                </div>
                            </li>

                            <li>
                                <div class="message-data">
                                    <span class="message-data-name"><i class="fa fa-circle online"></i> Khách</span>
                                    <span class="message-data-time">4:31 PM, Vừa xong</span>
                                </div>
                                <div class="message my-message">
                                    Vote 10000k sao nhé, quá uy tín
                                </div>
                            </li>

                            <li>
                                <div class="message-data">
                                    <span class="message-data-name"><i class="fa fa-circle online"></i> Khách</span>
                                    <span class="message-data-time">4:31 PM, Vừa xong</span>
                                </div>
                                <div class="message my-message">
                                    Đã nạp ,dịch vụ ok. nạp thêm phát nữa
                                </div>
                            </li>

                            <li>
                                <div class="message-data">
                                    <span class="message-data-name"><i class="fa fa-circle online"></i> Khách</span>
                                    <span class="message-data-time">4:32 PM, Vừa xong</span>
                                </div>
                                <div class="message my-message">
                                    Đã nạp thành công
                                </div>
                            </li>

                            <li>
                                <div class="message-data">
                                    <span class="message-data-name"><i class="fa fa-circle online"></i> Khách</span>
                                    <span class="message-data-time">4:32 PM, Vừa xong</span>
                                </div>
                                <div class="message my-message">
                                    Đã đã về tài khỏa, thanks admin
                                </div>
                            </li>

                            <li>
                                <div class="message-data">
                                    <span class="message-data-name"><i class="fa fa-circle online"></i> Khách</span>
                                    <span class="message-data-time">4:32 PM, Vừa xong</span>
                                </div>
                                <div class="message my-message">
                                    Đã nạp và thấy ngon ngọt nhé ae
                                </div>
                            </li>

                            <li>
                                <div class="message-data">
                                    <span class="message-data-name"><i class="fa fa-circle online"></i> Khách</span>
                                    <span class="message-data-time">4:32 PM, Vừa xong</span>
                                </div>
                                <div class="message my-message">
                                    Vote 10000k sao nhé, quá uy tín
                                </div>
                            </li>

                            <li>
                                <div class="message-data">
                                    <span class="message-data-name"><i class="fa fa-circle online"></i> Khách</span>
                                    <span class="message-data-time">4:32 PM, Vừa xong</span>
                                </div>
                                <div class="message my-message">
                                    Ngon vcl, +5 sao cho admin
                                </div>
                            </li>

                            <li>
                                <div class="message-data">
                                    <span class="message-data-name"><i class="fa fa-circle online"></i> Khách</span>
                                    <span class="message-data-time">4:32 PM, Vừa xong</span>
                                </div>
                                <div class="message my-message">
                                    Có anh em nào vừa từ youtube qua đây nạp k
                                </div>
                            </li>

                            <li>
                                <div class="message-data">
                                    <span class="message-data-name"><i class="fa fa-circle online"></i> Khách</span>
                                    <span class="message-data-time">4:32 PM, Vừa xong</span>
                                </div>
                                <div class="message my-message">
                                    Nhập nhầm mã thẻ với serial báo admin xử lý trong vòng 1 nốt nhạc, uy tín quá admin ơi
                                </div>
                            </li>
                        </ul>

                        <div class="chat-message clearfix">
                            <textarea name="message-to-send text-right" id="message-to-send" placeholder="Nhập bình luận..." rows="2"></textarea>
                            <button type="button" class="btn-send-message
                                        pill-button">Gửi bình luận</button>
                        </div> <!-- end chat-message -->
                    </div> <!-- end chat -->
                </div>
            </div>
        </div>

    </div><!-- /.container -->
</section>

<script>

    $(document).ready(function () {
        $('#btnPurchase').click(function () {

            $('#homealert').modal('show');
        });
    });


    function Confirm(index, serverid) {
        $('[name="server"]').val(serverid);
        $('[name="selected"]').val(index);
        $('#btnPurchase').click();
    }

    var data = jQuery.parseJSON('{"input_auto":"1","idkey":"lienminh","image_oldest":"1","seo_description":"Hệ thống bán RP Liên Minh Huyền Thoại giá rẻ, uy tín, chiết khấu cao.  Đảm bảo RP sạch 100%. Nhận RP sau 30s thanh toán. Mọi giao dịch đều có ảnh hóa đơn của GARENA gửi cho quý khách. Mỗi ngày chúng tôi thực hiện đến 50.000 giao dịch mua RP LOL thành công","server_mode":"0","server_price":"0","server_id":["0"],"server_data":[null],"server_data_minValue":[null],"server_data_maxValue":[null],"filter_name":"RP LMHT","filter_type":"4","input_pack_min":null,"input_pack_max":null,"input_pack_rate":null,"id":["7","7","7","7","7","7",null],"name":["Gói 1 : 16 RP","Gói 2 : 32 RP","Gói 3 : 80 RP","Gói 4 : 168 RP","Gói 5 : 340 RP","Gói 6: 856 RP",null],"price":["7700","15400","38500","77000","154000","385000",null],"discount":["1","0","0","0","0","0",null],"total":["NaN",null,null,null,null,"NaN",null],"day":["0","0","0","0","0","0",null],"punish_price":["0","0","0","0","0","0",null],"praise_day":["0","10","0","20","0","50",null],"praise_price":["10","20","50","100","200","500",null],"send_name":["Tài khoản Garena","Mật khẩu Garena"],"send_type":["1","5"],"send_id0":[null],"send_data0":[null],"send_id1":[null],"send_data1":[null],"input_send_desc":"Khi mua ngọc tại web các bạn lưu ý để trong nick 1 ngọc và đứng tại siêu thị để nhận ngọc nhanh nhé","captcha":null}');



    var purchase_name = 'VNĐ';

    var server = -1;

    $(".server-filter").change(function (elm, select) {
        server = parseInt($(".server-filter").val());
        $('[name="server"]').val(server);
        UpdatePrice();
    });
    server = parseInt($(".server-filter").val());
    $('[name="server"]').val(server);

</script>

<script id="history-template" type="text/x-handlebars-template">
        <tr>
            <td class="text-danger"><b>@{{idCustomer}}</b></td>
            <td class="base-color"><b>@{{txtHistory}}</b></td>
        </tr>
    </script>
<script id="message-template" type="text/x-handlebars-template">
        <li class="clearfix">
            <div class="message-data align-right">
                <span class="message-data-time" > @{{time}} , Vừa xong</span> &nbsp; &nbsp;
                <span class="message-data-name" >Bạn</span> <i class="fa fa-circle me"></i>
            </div>
            <div class="message other-message float-right">
                @{{messageOutput}}            </div>
        </li>
    </script>

<script id="message-response-template" type="text/x-handlebars-template">
        <li>
            <div class="message-data">
                <span class="message-data-name"><i class="fa fa-circle online"></i> Khách</span>
                <span class="message-data-time"> @{{time}}, Vừa xong</span>
            </div>
            <div class="message my-message">
                @{{response}}            </div>
        </li>
    </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.0/handlebars.min.js"></script>

<script id="rendered-js">
    (function () {

        var chat = {
            messageToSend: '',
            messageResponses: [
                'Dịch vụ nạp uy tín ghê',
                'Uy tín không anh em.',
                'Vãi vừa ấn nạp xong vào game có ngay (y)',
                'Web uy tín đấy, vừa nạp 500k xong.',
                'Nãy có ông bạn nạp 500k xong vào nạp luôn, quá xịn admin ơi.',
                'Thanks admin <3 , uy tín lắm luôn',
                'Nhanh gọn uy tín, thanks admin',
                'Web xịn không scam nha mọi người',
                'Hàng sạch, thanks admin',
                'Vừa nạp xong, quá ngon',
                'Web ok không anh em, có scam không?',
                'Vừa chạy ra quán mua 500k thẻ nạp ăn luôn, ngon quá admin',
                'Nhập nhầm mã thẻ với serial báo admin xử lý trong vòng 1 nốt nhạc, uy tín quá admin ơi',
                'Cứ tưởng lừa đảo, nạp thử 200k nhận luôn kim cương trong 10s',
                '1 vote uy tín cho web nhé, quá ngon luôn',
                'Bị lừa nhiều rồi, giờ mới tìm được web uy tín, thanks ad',
                'Vừa nạp 100k xong',
                'Web ngon vl',
                'Anh em nào chưa nạp thì vào nạp ngay đi đang có khuyến mại',
                'Uy tín lắm admin',
                'Vote 10000k sao nhé, quá uy tín',
                'Có anh em nào vừa từ youtube qua đây nạp k',
                'Ông em vừa giới thiệu, nạp cái ăn luôn, ngon vc',
                'Uy tín nhé anh em',
                'Đã nạp thành công',
                'Đã nạp ở đây 20tr tiền thẻ, vote uy tín nhé',
                'Web nạp ngon thế này mà giờ mới biết',
                'Đã nạp, nhanh lắm nhé',
                'Ngon vcl, +5 sao cho admin',
                'Nghe anh em review ngon quá, tôi ra làm cái thẻ 500k nạp đây',
                'Không scam, web nạp thật, nhận thật nhé !',
                'Đã nạp và thấy ngon ngọt nhé ae',
                'Web này trùm nạp mẹ rồi',
                'Web được đấy anh em',
                'Thấy web được nhiều anh em nạp rồi, yên tâm nạp hehe',
                'Anh em không phải sợ đâu, tôi nạp nhiều web này rồi',
                'Web xịn không scam nha mọi người'
            ],

            init: function () {
                this.cacheDOM();
                this.bindEvents();
                this.render();
            },
            cacheDOM: function () {
                this.$chatHistory = $('.chat-history');
                this.$button = $('.btn-send-message');
                this.$textarea = $('#message-to-send');
                this.$chatHistoryList = this.$chatHistory.find('ul');
            },
            bindEvents: function () {
                this.$button.on('click', this.addMessage.bind(this));
                this.$textarea.on('keyup', this.addMessageEnter.bind(this));
            },
            render: function () {

                this.scrollToBottom();
                if (this.messageToSend.trim() !== '') {
                    var template = Handlebars.compile($("#message-template").html());
                    var context = {
                        messageOutput: this.messageToSend,
                        time: this.getCurrentTime()
                    };
                    this.$chatHistoryList.append(template(context));
                    this.scrollToBottom();
                    this.$textarea.val('');
                }
                // history-card
                var templateHistoryResponse = Handlebars.compile($("#history-template").html());
                var arrayTelCo = ['VIETTEL', 'VINAPHONE', 'MOBIFONE', 'VIETNAMOBILE', 'ZING'];
                var arrayPrice = ['10.000 đ', '20.000 đ', '30.000 đ', '50.000 đ', '100.000 đ', '200.000 đ', '300.000 đ', '500.000 đ', '1.000.000 đ'];
                var html = '';
                for (var i = 0; i < 10; i++) {
                    var contentHistory = {
                        idCustomer: '******' + Math.floor(100000 + Math.random() * 900000),
                        txtHistory: 'Nạp thành công thẻ ' + arrayTelCo[Math.floor(1 + Math.random() * arrayTelCo.length) - 1] + ' mệnh giá ' + arrayPrice[Math.floor(1 + Math.random() * arrayPrice.length) - 1]
                    }
                    html += templateHistoryResponse(contentHistory);
                }
                $('#tblHistory').html(html);
                setInterval(function () {
                    var html = '';
                    for (var i = 0; i < 10; i++) {
                        var contentHistory = {
                            idCustomer: '******' + Math.floor(100000 + Math.random() * 900000),
                            txtHistory: 'Nạp thành công thẻ ' + arrayTelCo[Math.floor(1 + Math.random() * arrayTelCo.length) - 1] + ' mệnh giá ' + arrayPrice[Math.floor(1 + Math.random() * arrayPrice.length) - 1]
                        }
                        html += templateHistoryResponse(contentHistory);
                    }
                    $('#tblHistory').html(html);
                }, 60000);

                setInterval(function () {
                    // responses
                    var templateResponse = Handlebars.compile($("#message-response-template").html());
                    var contextResponse = {
                        response: this.getRandomItem(this.messageResponses),
                        time: this.getCurrentTime()
                    };
                    this.$chatHistoryList.append(templateResponse(contextResponse));
                    this.scrollToBottom();
                }.bind(this), 5000);
            },

            addMessage: function () {
                this.messageToSend = this.$textarea.val();
                this.render();
            },
            addMessageEnter: function (event) {
                // enter was pressed
                if (event.keyCode === 13) {
                    this.addMessage();
                }
            },
            scrollToBottom: function () {
                $('.chat-scroll').scrollTop($('.chat-scroll')[0].scrollHeight);
            },
            getCurrentTime: function () {
                return new Date().toLocaleTimeString().
                replace(/([\d]+:[\d]{2})(:[\d]{2})(.*)/, "$1$3");
            },
            getRandomItem: function (arr) {
                return arr[Math.floor(Math.random() * arr.length)];
            }
        };

        chat.init();

    })();
    //# sourceURL=pen.js
</script>

<script>
    var itemselect = -1;
    $(document).ready(function () {
        $(".s-filter").change(function (elm, select) {
            itemselect = parseInt($(".s-filter").val());
            UpdatePrice();
        });
        itemselect = parseInt($(".s-filter").val());
        UpdatePrice();
    });

    function UpdatePrice() {
        var price = 0;
        if (itemselect == -1) {
            return;
        }

        if (data.server_mode == 1 && data.server_price == 1) {

            var s_price = data["price" + server];
            price = parseInt(s_price[itemselect]);
        } else {
            var s_price = data["price"];
            price = parseInt(s_price[itemselect]);
        }


        $('#txtPrice').html('Tổng: ' + price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + ' VNĐ');
        $('[name="selected"]').val($(".s-filter").val());

        $('#txtPrice').removeClass('bounceIn').addClass('bounceIn animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
            $(this).removeClass('bounceIn');
        });
        $('tbody tr.selected').removeClass('selected');
        $('tbody tr').eq(itemselect).addClass('selected');

//                    $('tbody tr a').each((idx, elm) => {
//                        $(elm).attr('href', '/service/purchase/33.html?selected=' + idx + '&server=' + server);
//                    });
    }

    function ConfirmBuy(value) {
        var index = $('.server-filter').val();
        Confirm(value, index);
    }
</script>

<script>
    $(document).ready(function () {
        $('.load-modal').each(function (index, elem) {
            $(elem).unbind().click(function (e) {
                e.preventDefault();
                e.preventDefault();
                var curModal = $('#LoadModal');
                curModal.find('.modal-content').html("<div class=\"loader\" style=\"text-align: center\"><img src=\"/assets/frontend/images/loader.gif\" style=\"width: 50px;height: 50px;\"></div>");
                curModal.modal('show').find('.modal-content').load($(elem).attr('rel'));
            });
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('.xt').click(function () {
            $('.content_bvct').css('height', 'unset');
            $('.xt').hide();
        });




        $('.expand-button').on('click', function() {

            $('.special-text').toggleClass('-expanded');

            if ($('.special-text').hasClass('-expanded')) {
                $('.expand-button').html('Thu gọn nội dung');
            } else {
                $('.expand-button').html('Xem thêm nội dung');
            }
        });
    });


</script>

@endsection
