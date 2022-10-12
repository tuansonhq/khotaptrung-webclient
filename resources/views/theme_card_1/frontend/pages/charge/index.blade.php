@extends('frontend.layouts.master')

@section('content')
<div class="row my-3">
    <div class="col-xl-3  col-sm-3 col-md-3 col-12">
        <div class="bg-white">
            @include('frontend.layouts.includes.menu_profile')
        </div>

    </div>
    <div class="col-xl-9  col-md-9 col-sm-12 col-12">
        <div class="bg-white">
            <div class="main-profile" style="min-height: 468px;padding:15px 20px">

                <div class="content-profile">
                    <h3>Nạp thẻ</h3>
                    <hr class="lines">
                    <p style="text-align: center;color: red">*Chú ý: Nạp thẻ sai mệnh giá mất 100% giá trị thẻ</p>


                    <form method="POST" action="https://thegarena.net/nap-the" accept-charset="UTF-8" class="form-horizontal form-charge"><input name="_token" type="hidden" value="890rWe69QR86VO2jZqMDUSXsdzhby9CVmifhbUrw">


                        <div class="form-group row">
                            <label class="col-md-3 control-label text-right font-weight-bold my-auto">Tài khoản:</label>
                            <div class="col-md-6">
                                <input class="form-control  c-square c-theme" type="text"
                                       value="3061758440807996@facebook.com" readonly>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-md-3 control-label text-right font-weight-bold my-auto">Loại thẻ:</label>
                            <div class="col-md-6">
                                <select class="form-control  c-square c-theme" name="type" id="type">
                                    <option value="GARENA">GARENA</option>

                                    <option value="VIETTEL">VIETTEL</option>

                                    <option value="VINAPHONE">VINAPHONE</option>

                                    <option value="MOBIFONE">MOBIFONE</option>

                                    <option value="VCOIN">VCOIN</option>

                                    <option value="GATE">GATE</option>

                                    <option value="ZING">ZING</option>

                                    <option value="VIETNAMMOBILE">VIETNAMMOBILE</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 control-label text-right font-weight-bold my-auto">Mệnh giá:</label>
                            <div class="col-md-6">
                                <select class="form-control  c-square c-theme" name="amount" id="amount" required>
                                </select>
                                <!--<select class="form-control  c-square c-theme" name="amount" id="amount" required>
                                    <option value="">-- Chọn mệnh giá --</option>
                                    <option  value="10000">10,000 VNĐ</option>
                                    <option  value="20000">20,000 VNĐ</option>
                                    <option  value="30000">30,000 VNĐ</option>
                                    <option  value="50000">50,000 VNĐ</option>
                                    <option  value="100000">100,000 VNĐ</option>
                                    <option  value="200000">200,000 VNĐ</option>
                                    <option  value="300000">300,000 VNĐ</option>
                                    <option  value="500000">500,000 VNĐ</option>
                                    <option  value="1000000">1,000,000 VNĐ</option>
                                    <option  value="2000000">2,000,000 VNĐ</option>
                                    <option  value="5000000">5,000,000 VNĐ</option>
                                </select>-->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3 control-label text-right font-weight-bold my-auto">Mã số thẻ:</label>
                            <div class="col-md-6">
                                <input class="form-control  c-square c-theme " name="pin" type="text" maxlength="16"
                                       required placeholder=""
                                       required="" autofocus="">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-md-3 control-label text-right font-weight-bold my-auto">Số serial:</label>
                            <div class="col-md-6">
                                <input class="form-control c-square c-theme " name="serial" type="text" maxlength="16"
                                       required placeholder=""
                                       required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 control-label text-right font-weight-bold my-auto">Mã bảo vệ (*):</label>
                            <div class="col-md-6">
                                <div class="input-group">

                                    <input type="text" class="form-control c-square" id="captcha" name="captcha"
                                           placeholder="Mã bảo vệ" maxlength="3" autocomplete="off" required="">
                                    <span class="input-group-addon" style="padding: 1px;">
                                                            <img  src="https://thegarena.net/captcha/flat?0dzKSyTS" height="30px" style="max-width: unset !important;height: 30px !important;" id="imgcaptcha" onclick="document.getElementById('imgcaptcha').src ='https://thegarena.net/captcha/flat?D5qi5ANZ'+Math.random();document.getElementById('captcha').focus();">
                                                        </span>
                                </div>
                            </div>
                        </div>


                        <div class="form-group c-margin-t-40 row">
                            <div class="col-md-3"></div>
                            <div class=" col-md-6">
                                <button type="submit"
                                        class="btn btn-success btn-submit c-theme-btn c-btn-square c-btn-uppercase c-btn-bold btn-block"
                                        data-loading-text="<i class='fa fa-spinner fa-spin '></i>">Nạp
                                    thẻ
                                </button>
                                <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
                                    $(".form-charge").submit(function () {
                                        $('.btn-submit').button('loading');
                                    });
                                </script>

                            </div>
                        </div>
                    </form>
                    <div class="alert alert-info">
                        <p style="text-align:center"><a href="https://muathegarena.com/blog/doi-the-cao-sang-the-garena-don-gian-tai-website-muathegarenacom"><span style="color:#2980b9"><strong>&gt;&gt; Hướng dẫn nạp thẻ c&agrave;o mua thẻ Garena &lt;&lt;&nbsp;</strong></span></a></p>

                        <p style="text-align:center"><span style="color:#e74c3c"><strong>LƯU &Yacute;: Chọn Đ&uacute;ng Mệnh Gi&aacute; Thẻ. Chọn Sai M&atilde; Thẻ&nbsp;Bị Trừ 100% Kh&ocirc;ng Được Ho&agrave;n Tiền.</strong></span></p>

                        <p style="text-align:center">Ưu ti&ecirc;n nạp bằng ATM - V&iacute; Điện Tử tỷ lệ 1 :1</p>

                        <p style="text-align:center"><a href="https://thegarena.net/"><strong>MUA THẺ GARENA NGAY !!!</strong></a></p>

                        <p>&nbsp;</p>
                    </div>
                    <!-- END: PAGE CONTENT -->


                    <table id="hand_card_recent" class="table table-striped">
                        <thead>
                        <tr>
                            <th>Thời gian</th>
                            <th>Nhà mạng</th>
                            <th>Mã thẻ</th>
                            <th>Serial</th>
                            <th>Kiểu nạp</th>
                            <th>Mệnh giá</th>
                            <th>Kết quả</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td>                                                11/10/2022 00:16:43
                            </td>
                            <td>GARENA</td>
                            <td>1456465465465656</td>
                            <td>20000164737782</td>
                            <td>
                                Nạp thẻ tự động
                            </td>
                            <td>20,000</td>
                            <td>

                                <b class='text-danger'>Thẻ sai</b>

                            </td>

                        </tr>

                        <tr>
                            <td>                                                11/10/2022 00:16:32
                            </td>
                            <td>VIETTEL</td>
                            <td>223036547055536</td>
                            <td>654546546546545</td>
                            <td>
                                Nạp thẻ tự động
                            </td>
                            <td>10,000</td>
                            <td>

                                <b class='text-danger'>Thẻ sai</b>

                            </td>

                        </tr>

                        <tr>
                            <td>                                                11/10/2022 00:16:20
                            </td>
                            <td>GARENA</td>
                            <td>223036547055536</td>
                            <td>20000164737782</td>
                            <td>
                                Nạp thẻ tự động
                            </td>
                            <td>100,000</td>
                            <td>

                                <b class='text-danger'>Thẻ sai</b>

                            </td>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection
