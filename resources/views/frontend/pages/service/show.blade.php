@extends('frontend.layouts.master')
@section('content')
    <div class="c-layout-page">
        <!-- BEGIN: PAGE CONTENT -->
        <div class="c-content-box c-size-lg c-overflow-hide c-bg-white font-roboto">
            <div class="container">

            </div>
            <div class="text-center" style="margin-bottom: 50px;">
                <h2 style="font-size: 30px;font-weight: bold;text-transform: uppercase">DỊCH VỤ Bán vàng</h2>
{{--                <div class="row  hidden-sm hidden-md hidden-lg">--}}
{{--                    <p style="margin-top: 15px;font-size: 23px" class="bb"><i class="fa fa-server" aria-hidden="true"></i> <a href="/dich-vu/ngoc-rong" style="color:#32c5d2">Ngọc rồng</a></p>--}}

{{--                </div>--}}
            </div>

{{--            Tính toán  --}}

            <form method="POST" action="https://nick.vn/dich-vu/1801/purchase" accept-charset="UTF-8" class="" enctype="multipart/form-data"><input name="_token" type="hidden" value="X8YsQD4YEObNmCLktdimefYpYlAMxkxgV2KwMkYY">
                <div class="container detail-service">
                    <div class="row">
                        <div class="col-md-7" style="margin-bottom:20px;">
                            <div class="row service-info">
                                <div class="col-md-5 hidden-xs hidden-sm">
                                    <div class="row">
                                        <div class="news_image">
                                            <img src="https://nick.vn/storage/images/nfjY80CaXR_1623228739.jpg" alt="Bán vàng">
                                        </div>
                                    </div>
                                    <div class="row__face">
                                        <p style="margin-top: 15px" class="bb"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Bán vàng</p>
                                        <p style="margin-top: 15px" class="bb"><i class="fa fa-server" aria-hidden="true"></i> <a class="class_a_not" href="/dich-vu/ngoc-rong" style="color:#32c5d2">Ngọc rồng</a></p>
                                    </div>
                                </div>
                                <div class="col-md-7">

                                    <span class="mb-15 control-label bb">Chọn máy chủ:</span>
                                    <div class="mb-15">
                                        <select id="select-sever" name="server[]" class="server-filter form-control t14" style="">
                                            <option value="0">Vũ trụ 1  </option>
                                            <option value="1">Vũ trụ 2  </option>
                                            <option value="2">Vũ trụ 3  </option>
                                            <option value="3">Vũ Trụ 4  </option>
                                            <option value="4">Vũ trụ 5  </option>
                                            <option value="5">Vũ trụ 6  </option>
                                            <option value="6">Vũ trụ 7  </option>
                                            <option value="7">Vũ trụ 8  </option>
                                            <option value="8">Vũ trụ 9  </option>
                                            <option value="9">Vũ Trụ 10  </option>
                                            <option value="10">  </option>
                                        </select>
                                    </div>
                                    <div class="hidden">
                                        <input type="hidden" id="minmax_0" data-value-min="2000" data-value-max="80000"  data-value-min-text="2,000" data-value-max-text="80,000"/>
                                        <input type="hidden" id="minmax_1" data-value-min="2000" data-value-max="80000"  data-value-min-text="2,000" data-value-max-text="80,000"/>
                                        <input type="hidden" id="minmax_2" data-value-min="2000" data-value-max="80000"  data-value-min-text="2,000" data-value-max-text="80,000"/>
                                        <input type="hidden" id="minmax_3" data-value-min="2000" data-value-max="80000"  data-value-min-text="2,000" data-value-max-text="80,000"/>
                                        <input type="hidden" id="minmax_4" data-value-min="2000" data-value-max="80000"  data-value-min-text="2,000" data-value-max-text="80,000"/>
                                        <input type="hidden" id="minmax_5" data-value-min="2000" data-value-max="80000"  data-value-min-text="2,000" data-value-max-text="80,000"/>
                                        <input type="hidden" id="minmax_6" data-value-min="2000" data-value-max="80000"  data-value-min-text="2,000" data-value-max-text="80,000"/>
                                        <input type="hidden" id="minmax_7" data-value-min="2000" data-value-max="80000"  data-value-min-text="2,000" data-value-max-text="80,000"/>
                                        <input type="hidden" id="minmax_8" data-value-min="2000" data-value-max="80000"  data-value-min-text="2,000" data-value-max-text="80,000"/>
                                        <input type="hidden" id="minmax_9" data-value-min="2000" data-value-max="80000"  data-value-min-text="2,000" data-value-max-text="80,000"/>
                                        <input type="hidden" id="minmax_10" data-value-min="" data-value-max=""  data-value-min-text="0" data-value-max-text="0"/>
                                    </div>
                                    <span class="mb-15 control-label bb">Nhập số tiền cần mua:</span>
                                    <div class="mb-15">
                                        <input autofocus="" value="2000" class="form-control t14 price " id="input_pack" type="text" placeholder="Số tiền">
                                        <span style="font-size: 14px;">Số tiền thanh toán phải từ <b id="min_money" style="font-weight:bold;">2,000đ</b>  đến <b id="max_money" style="font-weight:bold;">80,000đ</b> </span>
                                    </div>
                                    <span class="mb-15 control-label bb">Hệ số:</span>
                                    <div class="mb-15">
                                        <input type="text" id="txtDiscount" class="form-control t14" placeholder="" value="" readonly="">
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
                                <p><span style="color:#e74c3c"><strong>Khu giao dịch mặc định. V&aacute;ch n&uacute;i kakarot khu 39</strong></span></p>

                                <p><strong>BẢNG GI&Aacute; V&Agrave;NG:</strong></p>

                                <p><strong>Sv1,4,5: <span style="color:#e74c3c">x4500</span>. 10k =<span style="color:#e74c3c">&nbsp;50.000.000 v&agrave;ng</span></strong></p>

                                <p><strong>Sv3: <span style="color:#e74c3c">x4000</span>. 10k =<span style="color:#e74c3c">&nbsp;40.000.000 v&agrave;ng</span></strong></p>

                                <p><strong>Sv7,8: <span style="color:#e74c3c">x3500</span>. 10k =<span style="color:#e74c3c">&nbsp;35.000.000 v&agrave;ng</span></strong></p>

                                <p><strong>Sv2,6,9: <span style="color:#e74c3c">x3000</span>. 10k = <span style="color:#e74c3c">30.000.000 v&agrave;ng</span></strong></p>

                                <p>Nếu nhập sai t&ecirc;n nh&acirc;n vật hoặc sever th&igrave; v&agrave;o <strong><a href="https://nick.vn/dich-vu/log" target="_blank">Dịch vụ đ&atilde; mua</a></strong>&nbsp;sửa lại v&agrave;o giao dịch lại nh&eacute;.</p>

                                <p>Lưu &yacute; : <strong>D&ugrave;ng phi&ecirc;n bản gốc giao dịch.</strong></p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="modal fade" id="homealert" role="dialog" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="loader" style="text-align: center"><img src="/assets/frontend/images/loader.gif" style="width: 50px;height: 50px;display: none"></div>
                        <div class="modal-content">

                            <div class="modal-header">
                                <h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Xác nhận thông tin thanh toán</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>

                            <div class="modal-body">

                                <span class="mb-15 control-label bb">Tên nhân vật:</span>

                                <div class="mb-15">
                                    <input type="text" required name="customer_data0" class="form-control t14 " placeholder="Tên nhân vật" value="">
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

{{--            Nội dung   --}}

            <div class="container">
                <div class="job-wide-devider">
                    <div class="row">
                        <div class="col-lg-12 column">
                            <div class="job-details">
                                <h2 style="margin-bottom: 23px;font-size: 20px;font-weight: bold;text-transform: uppercase;float: left">Vị trí <span style="font-size:14px;margin-top: 8px;margin-left:5px;font-weight:bold;">(MẶC ĐỊNH Ở VÁCH NÚI KAKAROT KHU 39)</span></h2>
                                <div class="table-bot m_datatable m-datatable m-datatable--default m-datatable--loaded">
                                    <table class="table table-bordered m-table m-table--border-brand m-table--head-bg-brand">
                                        <thead class="m-datatable__head">
                                        <tr class="m-datatable__row">
                                            <th style="" class="m-datatable__cell">
                                                Server
                                            </th>
                                            <th class="m-datatable__cell">
                                                Nhân vật
                                            </th>
                                            <th style="" class="m-datatable__cell">
                                                Khu vực
                                            </th>
                                            <th style="" class="m-datatable__cell">
                                                Trạng thái
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody class="m-datatable__body-bot">
                                        <tr>
                                            <td>1</td>
                                            <td>dubaish1</td>

                                            <td>39</td>
                                            <td>
                                                <span style="color:#2fa70f;font-weight: bold">[ONLINE]</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td>dubaish2</td>

                                            <td>39</td>
                                            <td>
                                                <span style="color:#2fa70f;font-weight: bold">[ONLINE]</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>3</td>
                                            <td>dubaish3</td>

                                            <td>39</td>
                                            <td>
                                                <span style="color:#2fa70f;font-weight: bold">[ONLINE]</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>4</td>
                                            <td>dubaish4</td>

                                            <td>39</td>
                                            <td>
                                                <span style="color:#2fa70f;font-weight: bold">[ONLINE]</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>7</td>
                                            <td>dubaish7</td>

                                            <td>39</td>
                                            <td>
                                                <span style="color:#2fa70f;font-weight: bold">[ONLINE]</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>8</td>
                                            <td>daicawang</td>

                                            <td>39</td>
                                            <td>
                                                <span style="color:#2fa70f;font-weight: bold">[ONLINE]</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>5</td>
                                            <td>dubaish5</td>

                                            <td>39</td>
                                            <td>
                                                <span style="color:#2fa70f;font-weight: bold">[ONLINE]</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>6</td>
                                            <td>dubaish6</td>

                                            <td>39</td>
                                            <td>
                                                <span style="color:#2fa70f;font-weight: bold">[ONLINE]</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>9</td>
                                            <td>dubaish99</td>

                                            <td>39</td>
                                            <td>
                                                <span style="color:#2fa70f;font-weight: bold">[ONLINE]</span>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>






                    <div class="row">
                        <div class="col-lg-12 column">
                            <div class="job-details">
                                <h2 style="margin-bottom: 23px;font-size: 20px;font-weight: bold;text-transform: uppercase;">Mô tả</h2>
                                <div class="article-content">
                                    <table align="center" border="1" cellpadding="1" cellspacing="1" class="table table-bordered table-striped">
                                        <tbody>
                                        <tr>
                                            <td><span style="color:#000000"><span style="font-size:16px">✅ Mua v&agrave;ng uy t&iacute;n</span></span></td>
                                            <td><span style="color:#000000"><span style="font-size:16px"><strong>⭐</strong>V&agrave;ng sạch 100% c&oacute; x&aacute;c nhận từ NPH TeaMobi gửi về thư</span></span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="color:#000000"><span style="font-size:16px">✅ Mua v&agrave;ng gi&aacute; rẻ</span></span></td>
                                            <td><span style="color:#000000"><span style="font-size:16px"><strong>⭐</strong>Gi&aacute; rẻ nhất thị trường, ưu đ&atilde;i hơn so với nạp bằng thẻ Carot v&agrave; SMS</span></span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="color:#000000"><span style="font-size:16px">✅ Mua v&agrave;ng nhanh</span></span></td>
                                            <td><span style="color:#000000"><span style="font-size:16px"><strong>⭐</strong>Chỉ 30s sau khi thanh to&aacute;n l&agrave; v&agrave;ng đ&atilde; c&oacute; trong t&agrave;i khoản</span></span></td>
                                        </tr>
                                        <tr>
                                            <td><span style="color:#000000"><span style="font-size:16px">✅ Mua v&agrave;ng an to&agrave;n</span></span></td>
                                            <td><span style="color:#000000"><span style="font-size:16px"><strong>⭐</strong>Mua v&agrave;ng&nbsp;qua t&ecirc;n nh&acirc;n vật game, kh&ocirc;ng cần phải gửi t&agrave;i khoản hay mật khẩu</span></span></td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <p><span style="color:#000000"><span style="font-size:16px"><strong>- Hướng dẫn Mua V&agrave;ng tại Shop:</strong></span></span></p>

                                    <p><span style="font-size:16px"><strong><span style="color:#000000">+) Đầu ti&ecirc;n đăng k&yacute; t&agrave;i khoản tại </span><a href="http://nick.vn"><span style="color:#000000">Nick.vn</span></a><span style="color:#000000">. Chọn mục </span><a href="https://nick.vn/dich-vu/ban-vang"><span style="color:#000000">B&aacute;n V&agrave;ng</span></a><span style="color:#000000">&nbsp;rồi chọn sever cần mua,T&ecirc;n nh&acirc;n vật .Sau đ&oacute; v&agrave;o game giao dịch</span></strong></span></p>

                                    <p><span style="color:#000000"><span style="font-size:16px"><strong>Địa điểm giao dịch mặc định l&agrave; v&aacute;ch n&uacute;i kakarot khu 39</strong></span></span></p>

                                    <p><span style="color:#000000"><span style="font-size:16px"><strong>- Hướng dẫn sửa t&ecirc;n nh&acirc;n vật:</strong></span></span></p>

                                    <p><span style="color:#000000"><span style="font-size:16px"><strong>+) Khi bạn tạo lệnh v&agrave; v&agrave;o trong game giao dịch c&oacute; thể kh&ocirc;ng giao dịch được l&agrave; do bạn điền sai t&ecirc;n nh&acirc;n vật hoặc sever.</strong></span></span></p>

                                    <p><span style="font-size:16px"><strong><span style="color:#000000">+) Bạn ấn v&agrave;o&nbsp;Chi tiết&nbsp;ở&nbsp;mục&nbsp;</span><a href="https://nick.vn/dich-vu/log" target="_blank"><span style="color:#000000">Dịch vụ đ&atilde; mua</span></a><span style="color:#000000">&nbsp;để sửa lại t&ecirc;n v&agrave; giao dịch lại nh&eacute;.</span></strong></span></p>

                                    <p><span style="color:#000000"><span style="font-size:16px"><strong>- Lưu &yacute;:&nbsp;</strong></span></span></p>

                                    <p><span style="color:#000000"><span style="font-size:16px"><strong>+) Bạn c&oacute; thể mua tối đa dưới 2 Tỷ v&agrave;ng/1 lần giao dịch</strong></span></span></p>

                                    <p><span style="color:#000000"><span style="font-size:16px"><strong>+) Bạn c&oacute; thể đặt nhiều lệnh mua v&agrave;ng 1 l&uacute;c</strong></span></span></p>

                                    <p><span style="color:#000000"><span style="font-size:16px"><strong>+) Khi tạo lệnh xong bạn c&oacute; thể nhận v&agrave;ng bất cứ l&uacute;c n&agrave;o bạn muốn</strong></span></span></p>

                                    <p><span style="color:#000000"><span style="font-size:16px"><strong>+)&nbsp;Nếu điền sai sever th&igrave; hủy lệnh hệ thống sẽ tự động ho&agrave;n tiền.</strong></span></span></p>

                                    <p><span style="color:#000000"><span style="font-size:16px"><strong>Ch&uacute;c Bạn Online Vui Vẻ!</strong></span></span></p>

                                    <p><span style="color:#000000"><span style="font-size:16px"><strong>___________</strong></span></span></p>

                                    <p><span style="font-size:16px"><strong><span style="color:#000000">Ngo&agrave;i b&aacute;n V&agrave;ng, Shop c&ograve;n&nbsp;</span><a href="https://nick.vn/danh-muc/danh-muc-game-ngoc-rong" target="_blank"><span style="color:#2980b9">B&aacute;n Nick Ngọc Rồng</span><span style="color:#000000">&nbsp;</span></a><span style="color:#000000">- </span><a href="https://nick.vn/mua-the"><span style="color:#2980b9">B&aacute;n Thẻ Carot</span></a><span style="color:#000000">&nbsp;v&agrave; rất nhiều&nbsp;dịch vụ kh&aacute;c. Qu&yacute; kh&aacute;ch bỏ ch&uacute;t thời gian để trải nghiệm dịch vụ tr&ecirc;n web nha!</span></strong></span></p>

                                    <p><br />
                                        <span style="color:#000000"><span style="font-size:16px">Game Ngọc Rồng Online hỗ trợ mua v&agrave;ng trực tiếp qua thẻ Vinaphone, Mobifone, Viettel, Gate, Carot. Với mỗi c&aacute;ch mua v&agrave;ng tr&ecirc;n đều c&oacute; những ưu nhược điểm nổi ri&ecirc;ng, nhưng nạp v&agrave;ng trực tiếp v&agrave;o t&agrave;i khoản game th&ocirc;ng qua website được rất nhiều anh em game thủ ưa chuộng. Ngọc Rồng Online l&agrave; tựa game lấy cốt truyện từ bộ truyện 7 vi&ecirc;n ngọc rồng nổi tiếng. Để quy đổi vật phẩm trong game, người chơi cần phải nạp thẻ game Ngọc Rồng để quy đổi ra v&agrave;ng - đơn vị tiền tệ kh&ocirc;ng thể thiếu trong game. Như c&aacute;c bạn đ&atilde; biết hiện tại game Ngọc Rồng Online đang chiếm số lượng người chơi thủ đ&ocirc;ng đảo nhất trong game Mobile. Ch&iacute;nh v&igrave; vậy rất nhiều người chơi muốn mua v&agrave;ng nhưng chưa biết địa chỉ trang web uy t&iacute;n v&agrave; gi&aacute; rẻ.&nbsp;</span></span></p>

                                    <p><span style="font-size:16px"><span style="color:#000000">L&agrave;m sao&nbsp;để c&oacute; thật nhiều v&agrave;ng nro với gi&aacute; rẻ nhất&nbsp;th&igrave; lại l&agrave; c&acirc;u hỏi của&nbsp;nhiều người chơi game cần đ&aacute;p &aacute;n. Vậy để&nbsp;c&oacute; v&agrave;ng nro&nbsp;trong nro với gi&aacute; rẻ&nbsp;th&igrave; phải l&agrave;m ra sao ? Ngo&agrave;i c&aacute;ch&nbsp;</span><a href="https://muathengay.com/"><span style="color:#000000">mua thẻ carot</span></a><span style="color:#000000">&nbsp;để nạp&nbsp;trực tiếp, c&aacute;c bạn c&ograve;n c&oacute; một lựa chọn kh&aacute;c đ&oacute; l&agrave;&nbsp;</span><a href="https://napgamegiare.net/dich-vu/mua-vang-nro"><span style="color:#000000"><em><strong>Mua v&agrave;ng nro</strong></em><em><strong>&nbsp;gi&aacute; rẻ</strong></em></span></a><span style="color:#000000">&nbsp;tại website nạp game gi&aacute; rẻ, uy t&iacute;n.&nbsp;Để mua v&agrave;ng nro&nbsp;gi&aacute; rẻ bạn cần phải t&igrave;m những địa chỉ&nbsp;<em><strong>b&aacute;n&nbsp;v&agrave;ng nro</strong></em><em><strong>&nbsp;gi&aacute; rẻ, uy t&iacute;n</strong></em>.</span></span></p>

                                    <p><span style="font-size:16px"><span style="color:#000000">Hiện nay, website&nbsp;</span><a href="https://nick.vn"><span style="color:#000000">nick.vn</span></a><span style="color:#000000">&nbsp;đang được nhiều người chơi nhắc tới như một trang web b&aacute;n v&agrave;ng game Ngọc Rồng Online uy t&iacute;n, chất lượng với mức gi&aacute; v&ocirc; c&ugrave;ng hấp dẫn. Shop cam kết l&agrave; shop b&aacute;n v&agrave;ng uy t&iacute;n v&agrave; gi&aacute; rẻ số 1 tại Việt Nam hiện nay. Với c&aacute;ch nạp v&agrave;ng trực tiếp v&agrave;o t&agrave;i khoản game, anh em game thủ sẽ nhận được rất nhiều ưu đ&atilde;i trong qu&aacute; tr&igrave;nh nạp v&agrave;ng.</span></span></p>

                                    <p><span style="color:#000000"><span style="font-size:16px">Giao diện đơn giản n&ecirc;n kh&aacute;ch h&agrave;ng c&oacute; thể thực hiện thao t&aacute;c nhanh gọn lẹ để ho&agrave;n th&agrave;nh giao dịch mua v&agrave;ng. Qu&aacute; tr&igrave;nh quy đổi kh&ocirc;ng qu&aacute; 30 gi&acirc;y t&agrave;i khoản của bạn sẽ nhận được số v&agrave;ng như giao dịch. Shop b&aacute;n v&agrave;ng của ch&uacute;ng t&ocirc;i đảm bạn với bạn tất cả số lượng v&agrave;ng&nbsp;được b&aacute;n ra l&agrave; an to&agrave;n 100%.&nbsp;</span></span></p>

                                    <p><span style="color:#000000"><span style="font-size:16px">Những g&oacute;i giao dịch của ch&uacute;ng t&ocirc;i rất đa dạng với tất cả 9 m&aacute;y chủ của game Ngọc Rồng Online. Chỉ cần với 1000 đồng bạn đ&atilde; c&oacute; thực hiện giao dịch v&agrave; c&oacute; ngay 5500000 v&agrave;ng trong t&agrave;i khoản game Ngọc Rồng Online. </span></span></p>

                                    <p><span style="font-size:16px"><span style="color:#000000">Cảm ơn c&aacute;c bạn đ&atilde; lựa chọn </span><a href="https://nick.vn"><span style="color:#000000">nick.vn</span></a><span style="color:#000000"> để c&oacute; thể nạp game uy t&iacute;n v&agrave; với gi&aacute; được chiết khấu cao nhất nạp Ngọc Rồng Online từ nh&agrave; ph&aacute;t h&agrave;nh. Ch&uacute;c c&aacute;c bạn Online vui vẻ!</span></span></p>

                                    <p><span style="font-size:16px"><span style="color:#000000">Bạn đang t&igrave;m kiếm:&nbsp;mua v&agrave;ng&nbsp;nro,&nbsp;b&aacute;n v&agrave;ng nro,&nbsp;mua v&agrave;ng ngọc rồng,&nbsp;shop b&aacute;n v&agrave;ng nro,&nbsp;gi&aacute; nạp v&agrave;ng nro,&nbsp;c&aacute;ch&nbsp;mua v&agrave;ng nro,&nbsp;gi&aacute; v&agrave;ng nro,&nbsp;mua b&aacute;n v&agrave;ng nro, bảng gi&aacute; v&agrave;ng nro,&nbsp;mua v&agrave;ng rồng online,... th&igrave; </span><a href="https://nick.vn"><span style="color:#000000">nick.vn</span></a><span style="color:#000000"> ch&iacute;nh l&agrave; địa chỉ bạn đang t&igrave;m kiếm</span></span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

{{--            DỊCH VỤ KHÁC     --}}

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

        <input style="display: none" type="text" value="1801" id="id_service">

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
    <script src="/assets/frontend/js/service/dichvu-maychu-khac.js"></script>
@endsection

