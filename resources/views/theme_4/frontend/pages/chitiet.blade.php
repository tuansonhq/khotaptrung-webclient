<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="index,follow" />
    <meta name="path" content="" />
    <meta name="jwt" content="jwt" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/frontend/theme_4/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/frontend/theme_4/lib/animate/animate.min.css">
    <link rel="stylesheet" href="/assets/frontend/theme_4/css/style.css">
    <link rel="stylesheet" href="/assets/frontend/theme_4/lib/steps/jquery-steps.css">
{{--    Thêm css --}}
    <link rel="stylesheet" href="/assets/frontend/theme_4/lib/select-nice/select-nice.css">
    {{--    jquery--}}
    <script src="/assets/frontend/theme_4/lib/jquery/jquery.min.js"></script>
    {{--    jquery--}}
    <script src="/assets/frontend/theme_4/lib/bootstrap/bootstrap.min.js"></script>

{{--    Thêm  js  --}}
    <script src="/assets/frontend/theme_4/lib/select-nice/select-nice.js"></script>
    <script src="/assets/frontend/theme_4/lib/tippy/popper.js"></script>
    <script src="/assets/frontend/theme_4/lib/tippy/tippy.js"></script>

</head>
<body>


@include('frontend.layouts.includes.header')
<div class="content" style="">
    {{--  Header mobile  --}}
    <section class="media-mobile">
        <div class="container banner-mobile-container-ct">
            <div class="row marginauto banner-mobile-row-ct" style="position: relative">
                <img class="lazy back-position-ct" src="/assets/frontend/theme_4/images/cay-thue/back.png" alt="" >
                <div class="col-12 left-right banner-mobile-span text-center">
                    <h3>Cày Thuê</h3>
                </div>
            </div>

        </div>
    </section>

    {{--  Menu  --}}
    <section class="media-web">
        <div class="container menu-container-ct">
            <ul>
                <li><a href="">Trang chủ</a></li>
                <li class="menu-container-li-ct"><img class="lazy" src="/assets/frontend/theme_4/images/cay-thue/arrow-right.png" alt=""></li>
                <li class="menu-container-li-ct"><a href="">Cày thuê</a></li>
                <li class="menu-container-li-ct"><img class="lazy" src="/assets/frontend/theme_4/images/cay-thue/arrow-right.png" alt=""></li>
                <li class="menu-container-li-ct"><a href="">Cày xếp hạng ELO/ Liên Minh</a></li>
            </ul>
        </div>
    </section>

    {{--   Bopdy --}}
    <section class="bottom-container-ct">
        <div class="container body-container-ct">
            <div class="row marginauto body-container-row-ct body-container-row-mobile-ct">
                <div class="col-lg-5 col-12 body-container-detail-left-ct">
                    <form action="" method="POST">
                        @csrf
                    <div class="row marginauto body-row-ct">

                        <div class="col-md-12 left-right">
                            <div class="row marginauto body-header-ct">
                                <div class="col-auto left-right">
                                    <img class="lazy" src="/assets/frontend/theme_4/images/cay-thue/caythue.png" alt="">
                                </div>
                                <div class="col-md-10 col-10 body-header-col-ct">
                                    <h3>Cày Xếp hạng ELO/ Liên Minh</h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 left-right">
                            <div class="row marginauto banner-container-ct">
                                <div class="col-md-12 text-left left-right">
                                    <img class="lazy" src="/assets/frontend/theme_4/images/cay-thue/banner-home.png" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 left-right">
                            <div class="row marginauto body-title-ct">
                                <div class="col-md-12 text-left left-right">
                                    <span>Vui lòng chọn thông tin</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 left-right">
                            <div class="row body-title-detail-ct">

                                <div class="col-auto text-left body-title-detail-media-ct body-title-detail-col-ct">
                                    <div class="row marginauto">
                                        <div class="col-md-12 left-right body-title-detail-span-ct">
                                            <span>Rank hiện tại</span>
                                        </div>
                                        <div class="col-md-12 left-right body-title-detail-select-ct">
                                            <select class="wide" name="select">
                                                <option value="">Chọn rank hiện tại</option>
                                                <option value="3">Vàng 4</option>
                                                <option value="4">Vàng 5</option>
                                                <option value="5">Vàng 6</option>
                                                <option value="5">Vàng 7</option>
                                            </select>
                                        </div>

                                        <div class="col-m-12 error-ct">
                                            <div class="row marginauto error-row-ct">
                                                <div class="col-md-12 left-right">
                                                    <small>Bạn chưa chọn Rank</small>
                                                </div>
                                            </div>

                                        </div>

                                    </div>


                                </div>

                                <div class="col-auto text-left body-title-detail-media-ct body-title-detail-col-ct">
                                    <div class="row marginauto">
                                        <div class="col-md-12 left-right body-title-detail-span-ct">
                                            <span>Rank mong muốn</span>
                                        </div>
                                        <div class="col-md-12 left-right body-title-detail-select-ct">
                                            <select class="wide" name="select">
                                                <option value="">Chọn rank hiện tại</option>
                                                <option value="3">Vàng 4</option>
                                                <option value="4">Vàng 5</option>
                                                <option value="5">Vàng 6</option>
                                                <option value="5">Vàng 7</option>
                                            </select>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>

                        <div class="col-md-12 left-right body-title-ct">
                            <div class="row marginauto">

                                <div class="col-md-12 text-left left-right">
                                    <div class="row marginauto">
                                        <div class="col-md-12 left-right body-title-detail-span-ct">
                                            <span>Sever</span>
                                        </div>
                                        <div class="col-md-12 left-right body-title-detail-select-ct">
                                            <select class="wide" name="select">
                                                <option value="">Chọn server</option>
                                                <option value="3">server 4</option>
                                                <option value="4">server 5</option>
                                                <option value="5">server 6</option>
                                                <option value="5">server 7</option>
                                            </select>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>

                        <div class="col-md-12 left-right body-title-ct">
                            <div class="row marginauto">

                                <div class="col-md-12 text-left left-right">
                                    <div class="row marginauto">
                                        <div class="col-md-12 left-right body-title-detail-span-ct">
                                            <span>Tùy chọn mở rộng</span>
                                        </div>
                                        <div class="col-md-12 left-right">
                                            <div class="row body-title-detail-checkbox-ct">
                                                <div class="col-auto body-title-detail-checkbox-col-ct">
                                                    <label for="tuychon-01" class="input-ratio-ct">
                                                        <ul>
                                                            <li>Chơi cùng Booster+50.00%</li>
                                                            <li class="checkbox-info-ct"><img class="lazy" src="/assets/frontend/theme_4/images/cay-thue/infor.png" alt=""></li>
                                                        </ul>
                                                        <input id="tuychon-01" type="checkbox" class="allgame" name="option" value="on">
                                                        <span class="input-ratio-checkmark-ct"></span>
                                                    </label>
                                                </div>

                                                <div class="col-auto body-title-detail-checkbox-col-ct">
                                                    <label for="tuychon-02" class="input-ratio-ct">
                                                        <ul>
                                                            <li>Tùy chọn vị trí+20.00%</li>
                                                            <li class="checkbox-info-ct"><img class="lazy" src="/assets/frontend/theme_4/images/cay-thue/infor.png" alt=""></li>
                                                        </ul>
                                                        <input id="tuychon-02" type="checkbox" class="allgame" name="option" value="on">
                                                        <span class="input-ratio-checkmark-ct"></span>
                                                    </label>
                                                </div>

                                                <div class="col-auto body-title-detail-checkbox-col-ct">
                                                    <label for="tuychon-03" class="input-ratio-ct">
                                                        <ul>
                                                            <li>Đặt lịch cày</li>
                                                            <li class="checkbox-info-ct"><img class="lazy" src="/assets/frontend/theme_4/images/cay-thue/infor.png" alt=""></li>
                                                        </ul>
                                                        <input id="tuychon-03" type="checkbox" class="allgame" name="option" value="on">
                                                        <span class="input-ratio-checkmark-ct"></span>
                                                    </label>
                                                </div>

                                                <div class="col-auto body-title-detail-checkbox-col-ct">
                                                    <label for="tuychon-04" class="input-ratio-ct">
                                                        <ul>
                                                            <li>Cày siêu tốc+35.00%</li>
                                                            <li class="checkbox-info-ct"><img class="lazy" src="/assets/frontend/theme_4/images/cay-thue/infor.png" alt=""></li>
                                                        </ul>
                                                        <input id="tuychon-04" type="checkbox" class="allgame" name="option" value="on">
                                                        <span class="input-ratio-checkmark-ct"></span>
                                                    </label>
                                                </div>

                                                <div class="col-auto body-title-detail-checkbox-col-ct">
                                                    <label for="tuychon-05" class="input-ratio-ct">
                                                        <ul>
                                                            <li>Tùy chọn tướng+30.00%</li>
                                                            <li class="checkbox-info-ct"><img class="lazy" src="/assets/frontend/theme_4/images/cay-thue/infor.png" alt=""></li>
                                                        </ul>
                                                        <input id="tuychon-05" type="checkbox" class="allgame" name="option" value="on">
                                                        <span class="input-ratio-checkmark-ct"></span>
                                                    </label>
                                                </div>

                                                <div class="col-auto body-title-detail-checkbox-col-ct">
                                                    <label for="tuychon-06" class="input-ratio-ct">
                                                        <ul>
                                                            <li>Chọn Booster</li>
                                                            <li class="checkbox-info-ct"><img class="lazy" src="/assets/frontend/theme_4/images/cay-thue/infor.png" alt=""></li>
                                                        </ul>
                                                        <input id="tuychon-06" type="checkbox" class="allgame" name="option" value="on">
                                                        <span class="input-ratio-checkmark-ct"></span>
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>

                        <div class="col-md-12 left-right body-title-ct">
                            <div class="row marginauto">

                                <div class="col-md-12 text-left left-right">
                                    <div class="row marginauto">
                                        <div class="col-md-12 left-right body-title-detail-span-ct">
                                            <span>
                                                <ul>
                                                    <li>Tùy chọn tướng</li>
                                                    <li class="option-info-ct"><img class="lazy" src="/assets/frontend/theme_4/images/cay-thue/infor.png" alt=""></li>
                                                </ul>
                                            </span>
                                        </div>
                                        <div class="col-md-12 left-right body-title-detail-select-ct">
                                            <select class="wide" name="select">
                                                <option value="">Ví dụ: Yasuyo</option>
                                                <option value="3">Vàng 4</option>
                                                <option value="4">Vàng 5</option>
                                                <option value="5">Vàng 6</option>
                                                <option value="5">Vàng 7</option>
                                            </select>
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>

                        <div class="col-md-12 left-right">
                            <div class="row body-title-detail-ct">

                                <div class="col-md-6 text-left body-title-detail-col-ct">
                                    <div class="row marginauto">
                                        <div class="col-md-12 left-right body-title-detail-span-ct">
                                            <span>Tài khoản cần cày</span>
                                        </div>
                                        <div class="col-md-12 left-right body-title-detail-select-ct">
                                            <input autocomplete="off" class="input-defautf-ct" type="text" placeholder="Nhập tài khoản trong game">
                                        </div>
                                    </div>


                                </div>

                                <div class="col-md-6 text-left body-title-detail-col-ct">
                                    <div class="row marginauto password-mobile">
                                        <div class="col-md-12 left-right body-title-detail-span-ct">
                                            <span>Mật khẩu</span>
                                        </div>
                                        <div class="col-md-12 left-right body-title-detail-select-ct" style="position: relative">
                                            <input autocomplete="off" id="password" class="input-defautf-ct" type="password" placeholder="Nhập mật khẩu trong game">
                                            <div class="show-btn-password">
                                                <img class="lazy" src="/assets/frontend/theme_4/images/cay-thue/eyehide.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-12 left-right body-title-ct">
                            <div class="row marginauto">

                                <div class="col-md-12 text-left left-right">
                                    <div class="row marginauto">
                                        <div class="col-auto left-right body-title-detail-span-ct">
                                            <span>Báo giá:</span>
                                        </div>
                                        <div class="col-auto left-right body-title-detail-span-ct body-title-detail-span-right-ct">
                                            <small>100.000 đ</small>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="col-md-12 left-right body-title-ct">
                            <div class="row marginauto">
                                <div class="col-md-12 text-left left-right">
                                    <button class="button-default-ct" type="button">Thuê ngay</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="col-lg-7 col-12 body-container-detail-right-ct">

{{--                    Block 1           --}}
                    <div class="row marginauto body-detail-header-right-ct media-web">

                        <div class="col-md-12 left-right">
                            <div class="row marginauto">
                                <div class="col-12 col-8 body-header-col-km-left-ct">
                                    <span>Khuyến mại đang diễn ra</span>
                                </div>
{{--                                <div class="col-auto body-header-col-km-right-ct">--}}
{{--                                    <a href="">--}}
{{--                                        <ul>--}}
{{--                                            <li>Xem thêm</li>--}}
{{--                                            <li class="option-info-right-ct"><img class="lazy" src="/assets/frontend/theme_4/images/cay-thue/icon-right.png" alt=""></li>--}}
{{--                                        </ul>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
                            </div>
                        </div>

                        <div class="col-md-12 left-right">
                            <div class="row banner-detail-ct">
                                <div class="col-md-12 text-left left-right">
                                    <img class="lazy" src="/assets/frontend/theme_4/images/cay-thue/banner-detail.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
{{--                block 2           --}}
                    <div class="row marginauto body-detail-right-ct">

                        <div class="col-md-12 left-right">
                            <div class="row marginauto">
                                <div class="col-md-12 col-8 body-header-col-km-left-ct">
                                    <small>Chi tiết dịch vụ</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 left-right">
                            <div class="row marginauto body-title-ct show-detail-service-ct">
                                <div class="col-md-12 text-left left-right content-video-in">
                                    <p><span style="color:#ffffff"><span style="font-size:16px"><span style="font-family:Arial,Helvetica,sans-serif; font-variant-east-asian:normal; font-variant-numeric:normal; white-space:pre-wrap">Xã hội ngày càng phát triển, đời sống tinh thần được quan tâm và chú trọng nhiều hơn. Các trò chơi điện tử trực tuyến được ra đời nhằm mục đích giải trí và thư giãn sau những giờ học và làm việc mệt mỏi đầy áp lực. Kích thích tâm trí phát triển và sáng tạo, kéo theo sự phát triển của ngành công nghiệp sản xuất game online - đặc biệt là các game mobile với nhiều hình thức khác nhau như game đối kháng, game chiến thuật,&nbsp; game thẻ bài, game kiếm hiệp hay game sinh tồn. Vì lẽ ấy mà nhu cầu </span><span style="font-family:Arial,Helvetica,sans-serif; font-variant-east-asian:normal; font-variant-numeric:normal; white-space:pre-wrap"><em>nạp game, mua nick, mua bán thẻ hay trò chơi thử may cùng những dịch vụ hấp dẫn</em></span><span style="font-family:Arial,Helvetica,sans-serif; font-variant-east-asian:normal; font-variant-numeric:normal; white-space:pre-wrap"> là không thể thiếu và ngày càng tăng cao đặc biệt là gen Z hiện nay - những vật phẩm đua top trend hay những kiện tướng xuất sắc muốn có được khi các game thủ chinh phục ván game của mình. Cùng </span><span style="font-family:Arial,Helvetica,sans-serif; font-variant-east-asian:normal; font-variant-numeric:normal; white-space:pre-wrap"><strong style="font-weight:700">WEBNICK.VN</strong></span><span style="font-family:Arial,Helvetica,sans-serif; font-variant-east-asian:normal; font-variant-numeric:normal; white-space:pre-wrap"> tìm hiểu cụ thể các thông tin và dịch vụ </span><span style="font-family:Arial,Helvetica,sans-serif; font-variant-east-asian:normal; font-variant-numeric:normal; white-space:pre-wrap"><strong style="font-weight:700">WEBNICK.VN</strong></span><span style="font-family:Arial,Helvetica,sans-serif; font-variant-east-asian:normal; font-variant-numeric:normal; white-space:pre-wrap">&nbsp; mang lại nhé !</span></span></span></p>

                                    <p style="line-height:1.38"><span style="color:#ffffff"><span style="font-size:16px"><span style="font-family:Arial,Helvetica,sans-serif"><span style="font-variant:normal; white-space:pre-wrap"><strong style="font-weight:700"><em style="font-style:italic"><span style="text-decoration:none">Các dịch vụ đặc biệt đến từ webkick.vn</span></em></strong></span></span></span></span></p>

                                    <p style="line-height:1.38"><span style="color:#ffffff"><span style="font-size:16px"><span style="font-family:Arial,Helvetica,sans-serif"><span style="font-variant:normal; white-space:pre-wrap"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Các dịch vụ độc đáo và duy nhất đến từ WEBNICK.VN như: <em>bán acc all game</em>, </span></span></span></span><span style="font-variant:normal; white-space:pre-wrap"><span style="font-weight:400"><em style="font-style:italic"><span style="text-decoration:none">bán vàng, bán ngọc, làm phiếu giảm giá, </span></em></span></span><span style="font-variant:normal; white-space:pre-wrap"><span style="font-weight:400"><em style="font-style:italic"><span style="text-decoration:none">làm thuê Capsule vàng, cày thuê tốc chiến, mua skin, nạp kim cương, nạp quân huy,... </span></em></span></span><span style="font-variant:normal; white-space:pre-wrap"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Tất cả được hỗ trợ 24/24 bởi đội ngũ chuyên nghiệp của chúng tôi. Bất cứ khi nào bạn cần WEBNICK.VN luôn sẵn sàng phục vụ !&nbsp;</span></span></span></span></span></span></span></p>

                                    <p style="line-height:1.38; margin-bottom:16px"><span style="color:#ffffff"><span style="font-size:16px"><span style="font-family:Arial,Helvetica,sans-serif"><span style="font-variant:normal; white-space:pre-wrap"><strong style="font-weight:700"><em style="font-style:italic"><span style="text-decoration:none">Đến với Webnick.vn sự lựa chọn hàng đầu cho việc nạp game, hay mua bán nick cùng các dịch vụ khác</span></em></strong></span></span></span></span></p>

                                    <p style="line-height:1.38; margin-bottom:16px"><span style="color:#ffffff"><span style="font-size:16px"><span style="font-family:Arial,Helvetica,sans-serif"><span style="font-variant:normal; white-space:pre-wrap"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Mục đích được xuất phát từ tâm lý nên hiện nay, có rất nhiều địa chỉ nạp tiền vào game hay mua bán nick cùng những dịch vụ hấp dẫn như: các group, fanpage facebook, các nhóm zalo hay các website nạp game trực tuyến,... Tuy nhiên, giữa vô vàn địa chỉ kể trên, thì người chơi khi nạp tiền vào game, mua bán nick không tránh khỏi những địa chỉ kém uy tín, bị lừa đảo trong quá trình nạp game, mua nick hay trao đổi các dịch vụ khác. Vì lẽ ấy, các game thủ phải cực kỳ tỉnh táo để lựa chọn những website uy tín, chuyên nạp game, mua bán nick cùng dịch vụ hấp dẫn chính hãng, uy tín, giá rẻ để thực hiện giao dịch.&nbsp;</span></span></span></span></span></span></span></p>

                                    <p style="line-height:1.38; margin-bottom:16px"><span style="color:#ffffff"><span style="font-size:16px"><span style="font-family:Arial,Helvetica,sans-serif"><span style="font-variant:normal; white-space:pre-wrap"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Xuất phát từ tâm lý khách hàng WEBNICK.VN đã ra đời nhằm mục đích chăm sóc và phục vụ những mong muốn và yêu cầu của khách hàng. Website WEBNICK.VN đã sẵn sàng xử lý và phục vụ các game thủ. Một trong những website uy tín, chất lượng chuyên cung cấp tiền nạp game, mua bán nick cùng dịch vụ uy tín, đảm bảo 100%. Hằng ngày, tại website thực hiện hơn 30.000+ giao dịch&nbsp; thành công của nhiều game thủ từ trong và ngoài nước.</span></span></span></span></span></span></span></p>

                                    <p style="line-height:1.38; margin-bottom:5px"><span style="color:#ffffff"><span style="font-size:16px"><span style="font-family:Arial,Helvetica,sans-serif"><span style="font-variant:normal; white-space:pre-wrap"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Với dịch vụ đa dạng, phong phú của nhiều game như: nạp Quân huy Liên Quân, nạp kc BnS, nạp UC PUBG Mobile, mua Xu ninja school, mua Ngọc NRO, mua vàng NRO, nạp kim cương free fire, nạp Play Together, mua Robux, .... Thời gian giao dịch và nhận tiền game trong game chưa đến 60 giây. Các game thủ hoàn toàn có thể yên tâm về số tiền bỏ vào game này. Chúng tôi xin đảm bảo tiền game được bán ra bởi shop nạp game hay tài khoản với các dịch vụ là hoàn toàn sạch và an toàn 100% bởi lẽ, chúng tôi là đại lý nạp game, bán nick được ủy quyền chính thức bởi các diễn đàn Game chuyên nghiệp.</span></span></span></span></span></span></span></p>

                                    <p style="line-height:1.38; margin-bottom:5px"><span style="color:#ffffff"><span style="font-size:16px"><span style="font-family:Arial,Helvetica,sans-serif"><span style="font-variant:normal; white-space:pre-wrap"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Bên cạnh việc nạp game uy tín, chất lượng, giá rẻ cùng giao dịch nhanh chóng, dễ dàng. Bạn còn dễ dàng mua được thẻ game của các diễn đàn khác như: Garena, Zing, Funcard, Gate, Carot, Appota, Scoin, Soha, Vcoin, Gosu với card điện thoại: Vinaphone, Viettel, Mobi.</span></span></span></span></span></span></span></p>

                                    <p style="line-height:1.8; margin-bottom:8px; margin-top:8px"><span style="color:#ffffff"><span style="font-size:16px"><span style="font-family:Arial,Helvetica,sans-serif"><span style="font-variant:normal; white-space:pre-wrap"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Cùng với những dịch vụ hết sức tuyệt vời khi sử dụng dịch vụ tại WEBNICK.VN, chúng tôi hy vọng WEBNICK.VN sẽ làm cho bạn thật hài lòng và nâng tầm trải nghiệm của bạn. Còn chần chờ gì nữa mà không đến shop của chúng tôi để nạp game, mua nick cùng với dịch vụ hấp dẫn đi nào ! WEBNICK.VN hân hạnh được phục vụ tất cả khách hàng khi đến. WEBNICK.VN nắm bắt tâm lý - lắng nghe khách hàng - uy tín trách nhiệm - sự lựa chọn hàng đầu của mọi game thủ đi đến con đường chuyên nghiệp. </span></span></span></span><span style="font-variant:normal; white-space:pre-wrap"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Khám phá thế giới ảo và đắm chìm để giải trí với mức giá hợp lý cùng dịch vụ thân thiện xuất phát từ lòng hiếu khách cùng sự tỉ mỉ, tận tâm tuyệt đối chính là điều hành khách có thể kì vọng ở WEBNICK.VN. Và&nbsp; hơn hết chúng tôi tin rằng điều đó mang ý nghĩa </span></span></span></span><span style="font-variant:normal; white-space:pre-wrap"><span style="font-weight:400"><em style="font-style:italic"><span style="text-decoration:none">“Hơn cả sự trải nghiệm”</span></em></span></span></span></span></span></p>

                                    <p style="line-height:1.8; margin-bottom:8px; margin-top:8px"><span style="color:#ffffff"><span style="font-size:16px"><span style="font-family:Arial,Helvetica,sans-serif"><span style="font-variant:normal; white-space:pre-wrap"><strong style="font-weight:700"><span style="font-style:normal"><span style="text-decoration:none">Hotline:&nbsp;</span></span></strong></span></span></span></span></p>

                                    <p style="line-height:1.8; margin-bottom:8px; margin-top:8px"><span style="color:#ffffff"><span style="font-size:16px"><span style="font-family:Arial,Helvetica,sans-serif"><span style="white-space:pre-wrap"><strong>Fanpage: </strong></span></span></span></span></p>

                                    <p style="line-height:1.8; margin-bottom:8px; margin-top:8px"><span style="color:#ffffff"><span style="font-size:16px"><span style="font-family:Arial,Helvetica,sans-serif"><span style="font-variant:normal; white-space:pre-wrap"><strong style="font-weight:700"><span style="font-style:normal"><span style="text-decoration:none">Website: webnick.vn</span></span></strong></span></span></span></span></p>

                                </div>
                                <div class="col-md-12 left-right text-center">
                                    <div class="view-more">
                                        Xem thêm <img src="/assets/frontend/theme_4/images/cay-thue/jump-down.png" alt="">
                                    </div>
                                    <div class="view-less">
                                        Thu gọn <img src="/assets/frontend/theme_4/images/cay-thue/jump-down-down.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

{{--                block 3           --}}
                    <div class="row marginauto body-detail-right-ct">

                        <div class="col-md-12 left-right">
                            <div class="row marginauto">
                                <div class="col-md-12 col-8 body-header-col-km-left-ct">
                                    <small>Hướng dẫn thuê cày</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 left-right">
                            <div class="row marginauto body-title-ct show-detail-caythue-ct">
                                <div class="col-md-12 text-left left-right content-video-in">
                                    <p><span style="color:#ffffff"><span style="font-size:16px"><span style="font-family:Arial,Helvetica,sans-serif; font-variant-east-asian:normal; font-variant-numeric:normal; white-space:pre-wrap">Xã hội ngày càng phát triển, đời sống tinh thần được quan tâm và chú trọng nhiều hơn. Các trò chơi điện tử trực tuyến được ra đời nhằm mục đích giải trí và thư giãn sau những giờ học và làm việc mệt mỏi đầy áp lực. Kích thích tâm trí phát triển và sáng tạo, kéo theo sự phát triển của ngành công nghiệp sản xuất game online - đặc biệt là các game mobile với nhiều hình thức khác nhau như game đối kháng, game chiến thuật,&nbsp; game thẻ bài, game kiếm hiệp hay game sinh tồn. Vì lẽ ấy mà nhu cầu </span><span style="font-family:Arial,Helvetica,sans-serif; font-variant-east-asian:normal; font-variant-numeric:normal; white-space:pre-wrap"><em>nạp game, mua nick, mua bán thẻ hay trò chơi thử may cùng những dịch vụ hấp dẫn</em></span><span style="font-family:Arial,Helvetica,sans-serif; font-variant-east-asian:normal; font-variant-numeric:normal; white-space:pre-wrap"> là không thể thiếu và ngày càng tăng cao đặc biệt là gen Z hiện nay - những vật phẩm đua top trend hay những kiện tướng xuất sắc muốn có được khi các game thủ chinh phục ván game của mình. Cùng </span><span style="font-family:Arial,Helvetica,sans-serif; font-variant-east-asian:normal; font-variant-numeric:normal; white-space:pre-wrap"><strong style="font-weight:700">WEBNICK.VN</strong></span><span style="font-family:Arial,Helvetica,sans-serif; font-variant-east-asian:normal; font-variant-numeric:normal; white-space:pre-wrap"> tìm hiểu cụ thể các thông tin và dịch vụ </span><span style="font-family:Arial,Helvetica,sans-serif; font-variant-east-asian:normal; font-variant-numeric:normal; white-space:pre-wrap"><strong style="font-weight:700">WEBNICK.VN</strong></span><span style="font-family:Arial,Helvetica,sans-serif; font-variant-east-asian:normal; font-variant-numeric:normal; white-space:pre-wrap">&nbsp; mang lại nhé !</span></span></span></p>

                                    <p style="line-height:1.38"><span style="color:#ffffff"><span style="font-size:16px"><span style="font-family:Arial,Helvetica,sans-serif"><span style="font-variant:normal; white-space:pre-wrap"><strong style="font-weight:700"><em style="font-style:italic"><span style="text-decoration:none">Các dịch vụ đặc biệt đến từ webkick.vn</span></em></strong></span></span></span></span></p>

                                    <p style="line-height:1.38"><span style="color:#ffffff"><span style="font-size:16px"><span style="font-family:Arial,Helvetica,sans-serif"><span style="font-variant:normal; white-space:pre-wrap"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Các dịch vụ độc đáo và duy nhất đến từ WEBNICK.VN như: <em>bán acc all game</em>, </span></span></span></span><span style="font-variant:normal; white-space:pre-wrap"><span style="font-weight:400"><em style="font-style:italic"><span style="text-decoration:none">bán vàng, bán ngọc, làm phiếu giảm giá, </span></em></span></span><span style="font-variant:normal; white-space:pre-wrap"><span style="font-weight:400"><em style="font-style:italic"><span style="text-decoration:none">làm thuê Capsule vàng, cày thuê tốc chiến, mua skin, nạp kim cương, nạp quân huy,... </span></em></span></span><span style="font-variant:normal; white-space:pre-wrap"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Tất cả được hỗ trợ 24/24 bởi đội ngũ chuyên nghiệp của chúng tôi. Bất cứ khi nào bạn cần WEBNICK.VN luôn sẵn sàng phục vụ !&nbsp;</span></span></span></span></span></span></span></p>

                                    <p style="line-height:1.38; margin-bottom:16px"><span style="color:#ffffff"><span style="font-size:16px"><span style="font-family:Arial,Helvetica,sans-serif"><span style="font-variant:normal; white-space:pre-wrap"><strong style="font-weight:700"><em style="font-style:italic"><span style="text-decoration:none">Đến với Webnick.vn sự lựa chọn hàng đầu cho việc nạp game, hay mua bán nick cùng các dịch vụ khác</span></em></strong></span></span></span></span></p>

                                    <p style="line-height:1.38; margin-bottom:16px"><span style="color:#ffffff"><span style="font-size:16px"><span style="font-family:Arial,Helvetica,sans-serif"><span style="font-variant:normal; white-space:pre-wrap"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Mục đích được xuất phát từ tâm lý nên hiện nay, có rất nhiều địa chỉ nạp tiền vào game hay mua bán nick cùng những dịch vụ hấp dẫn như: các group, fanpage facebook, các nhóm zalo hay các website nạp game trực tuyến,... Tuy nhiên, giữa vô vàn địa chỉ kể trên, thì người chơi khi nạp tiền vào game, mua bán nick không tránh khỏi những địa chỉ kém uy tín, bị lừa đảo trong quá trình nạp game, mua nick hay trao đổi các dịch vụ khác. Vì lẽ ấy, các game thủ phải cực kỳ tỉnh táo để lựa chọn những website uy tín, chuyên nạp game, mua bán nick cùng dịch vụ hấp dẫn chính hãng, uy tín, giá rẻ để thực hiện giao dịch.&nbsp;</span></span></span></span></span></span></span></p>

                                    <p style="line-height:1.38; margin-bottom:16px"><span style="color:#ffffff"><span style="font-size:16px"><span style="font-family:Arial,Helvetica,sans-serif"><span style="font-variant:normal; white-space:pre-wrap"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Xuất phát từ tâm lý khách hàng WEBNICK.VN đã ra đời nhằm mục đích chăm sóc và phục vụ những mong muốn và yêu cầu của khách hàng. Website WEBNICK.VN đã sẵn sàng xử lý và phục vụ các game thủ. Một trong những website uy tín, chất lượng chuyên cung cấp tiền nạp game, mua bán nick cùng dịch vụ uy tín, đảm bảo 100%. Hằng ngày, tại website thực hiện hơn 30.000+ giao dịch&nbsp; thành công của nhiều game thủ từ trong và ngoài nước.</span></span></span></span></span></span></span></p>

                                    <p style="line-height:1.38; margin-bottom:5px"><span style="color:#ffffff"><span style="font-size:16px"><span style="font-family:Arial,Helvetica,sans-serif"><span style="font-variant:normal; white-space:pre-wrap"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Với dịch vụ đa dạng, phong phú của nhiều game như: nạp Quân huy Liên Quân, nạp kc BnS, nạp UC PUBG Mobile, mua Xu ninja school, mua Ngọc NRO, mua vàng NRO, nạp kim cương free fire, nạp Play Together, mua Robux, .... Thời gian giao dịch và nhận tiền game trong game chưa đến 60 giây. Các game thủ hoàn toàn có thể yên tâm về số tiền bỏ vào game này. Chúng tôi xin đảm bảo tiền game được bán ra bởi shop nạp game hay tài khoản với các dịch vụ là hoàn toàn sạch và an toàn 100% bởi lẽ, chúng tôi là đại lý nạp game, bán nick được ủy quyền chính thức bởi các diễn đàn Game chuyên nghiệp.</span></span></span></span></span></span></span></p>

                                    <p style="line-height:1.38; margin-bottom:5px"><span style="color:#ffffff"><span style="font-size:16px"><span style="font-family:Arial,Helvetica,sans-serif"><span style="font-variant:normal; white-space:pre-wrap"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Bên cạnh việc nạp game uy tín, chất lượng, giá rẻ cùng giao dịch nhanh chóng, dễ dàng. Bạn còn dễ dàng mua được thẻ game của các diễn đàn khác như: Garena, Zing, Funcard, Gate, Carot, Appota, Scoin, Soha, Vcoin, Gosu với card điện thoại: Vinaphone, Viettel, Mobi.</span></span></span></span></span></span></span></p>

                                    <p style="line-height:1.8; margin-bottom:8px; margin-top:8px"><span style="color:#ffffff"><span style="font-size:16px"><span style="font-family:Arial,Helvetica,sans-serif"><span style="font-variant:normal; white-space:pre-wrap"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Cùng với những dịch vụ hết sức tuyệt vời khi sử dụng dịch vụ tại WEBNICK.VN, chúng tôi hy vọng WEBNICK.VN sẽ làm cho bạn thật hài lòng và nâng tầm trải nghiệm của bạn. Còn chần chờ gì nữa mà không đến shop của chúng tôi để nạp game, mua nick cùng với dịch vụ hấp dẫn đi nào ! WEBNICK.VN hân hạnh được phục vụ tất cả khách hàng khi đến. WEBNICK.VN nắm bắt tâm lý - lắng nghe khách hàng - uy tín trách nhiệm - sự lựa chọn hàng đầu của mọi game thủ đi đến con đường chuyên nghiệp. </span></span></span></span><span style="font-variant:normal; white-space:pre-wrap"><span style="font-weight:400"><span style="font-style:normal"><span style="text-decoration:none">Khám phá thế giới ảo và đắm chìm để giải trí với mức giá hợp lý cùng dịch vụ thân thiện xuất phát từ lòng hiếu khách cùng sự tỉ mỉ, tận tâm tuyệt đối chính là điều hành khách có thể kì vọng ở WEBNICK.VN. Và&nbsp; hơn hết chúng tôi tin rằng điều đó mang ý nghĩa </span></span></span></span><span style="font-variant:normal; white-space:pre-wrap"><span style="font-weight:400"><em style="font-style:italic"><span style="text-decoration:none">“Hơn cả sự trải nghiệm”</span></em></span></span></span></span></span></p>

                                    <p style="line-height:1.8; margin-bottom:8px; margin-top:8px"><span style="color:#ffffff"><span style="font-size:16px"><span style="font-family:Arial,Helvetica,sans-serif"><span style="font-variant:normal; white-space:pre-wrap"><strong style="font-weight:700"><span style="font-style:normal"><span style="text-decoration:none">Hotline:&nbsp;</span></span></strong></span></span></span></span></p>

                                    <p style="line-height:1.8; margin-bottom:8px; margin-top:8px"><span style="color:#ffffff"><span style="font-size:16px"><span style="font-family:Arial,Helvetica,sans-serif"><span style="white-space:pre-wrap"><strong>Fanpage: </strong></span></span></span></span></p>

                                    <p style="line-height:1.8; margin-bottom:8px; margin-top:8px"><span style="color:#ffffff"><span style="font-size:16px"><span style="font-family:Arial,Helvetica,sans-serif"><span style="font-variant:normal; white-space:pre-wrap"><strong style="font-weight:700"><span style="font-style:normal"><span style="text-decoration:none">Website: webnick.vn</span></span></strong></span></span></span></span></p>

                                </div>
                                <div class="col-md-12 left-right text-center">
                                    <div class="view-more">
                                        Xem thêm <img src="/assets/frontend/theme_4/images/cay-thue/jump-down.png" alt="">
                                    </div>
                                    <div class="view-less">
                                        Thu gọn <img src="/assets/frontend/theme_4/images/cay-thue/jump-down-down.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


</div>

<div class="modal fade login show" id="successModal" aria-modal="true" style="display: block;">
    <div class="modal-dialog modal-md modal-dialog-centered login animated">
        <!--        <div class="image-login"></div>-->
        <div class="modal-content">
            <div class="modal-header modal-header-success-ct">
                <div class="row marginauto modal-header-success-row-ct text-center">
                    <div class="col-md-12 text-center">
                        <span>Gửi yêu cầu thuê thành công</span>
                    </div>
                </div>
            </div>

            <div class="modal-body modal-body-success-ct">
                <div class="row marginauto justify-content-center">
                    <div class="col-auto">
                        <img class="lazy" src="/assets/frontend/theme_4/images/cay-thue/group.png" alt="">
                    </div>
                </div>
                <div class="row marginauto modal-body-span-success-ct justify-content-center">
                    <div class="col-md-12 text-center">
                        <span>Yêu cầu thuê đã được gửi đến </span><small>Shop Cày Thuê</small>
                    </div>
                    <div class="col-md-12 text-center">
                        <span>Bạn vui lòng kiểm tra Email để xác nhận nha!</span>
                    </div>
                </div>
                <div class="row marginauto justify-content-center modal-footer-success-ct">
                    <div class="col-md-6 col-6 modal-footer-success-col-left-ct">
                        <div class="row marginauto modal-footer-success-row-not-ct">
                            <div class="col-md-12 left-right">
                                <a href="/" class="button-not-bg-ct"><span>Về trang chủ</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-6 modal-footer-success-col-right-ct">
                        <div class="row marginauto modal-footer-success-row-ct">
                            <div class="col-md-12 left-right">
                                <a href="/" class="button-bg-ct"><span>Hỗ Trợ</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    $('.show-detail-service-ct .view-more').click(function(){
        $('.show-detail-service-ct .view-less').css("display","block");
        $('.show-detail-service-ct .view-more').css("display","none");
        $(".show-detail-service-ct .content-video-in").addClass( "showtext" );
    });
    $('.show-detail-service-ct .view-less').click(function(){
        $('.show-detail-service-ct .view-more').css("display","block");
        $('.show-detail-service-ct .view-less').css("display","none");
        $(".show-detail-service-ct .content-video-in").removeClass( "showtext");
    });

    $('.show-detail-caythue-ct .view-more').click(function(){
        $('.show-detail-caythue-ct .view-less').css("display","block");
        $('.show-detail-caythue-ct .view-more').css("display","none");
        $(".show-detail-caythue-ct .content-video-in").addClass( "showtext" );
    });
    $('.show-detail-caythue-ct .view-less').click(function(){
        $('.show-detail-caythue-ct .view-more').css("display","block");
        $('.show-detail-caythue-ct .view-less').css("display","none");
        $(".show-detail-caythue-ct .content-video-in").removeClass( "showtext");
    });
</script>
<script>
    $(document).ready(function (e) {

        // Click event of the showPassword button
        $('.show-btn-password').on('click', function(){

            // Get the password field
            var passwordField = $('#password');

            // Get the current type of the password field will be password or text
            var passwordFieldType = passwordField.attr('type');

            // Check to see if the type is a password field
            if(passwordFieldType == 'password')
            {
                // Change the password field to text
                passwordField.attr('type', 'text');

                var htmlpass = '';
                htmlpass += '<img class="lazy" src="/assets/frontend/theme_4/images/cay-thue/eyeshow.png" alt="">';
                $('.show-btn-password').html('');
                $('.show-btn-password').html(htmlpass);

                // Change the Text on the show password button to Hide
                $(this).val('Hide');
            } else {
                var htmlpass = '';
                htmlpass += '<img class="lazy" src="/assets/frontend/theme_4/images/cay-thue/eyehide.png" alt="">';
                $('.show-btn-password').html('');
                $('.show-btn-password').html(htmlpass);

                // If the password field type is not a password field then set it to password
                passwordField.attr('type', 'password');

                // Change the value of the show password button to Show
                $(this).val('Show');
            }
        });

        $('#successModal').modal('show');
        $('.wide').niceSelect();

        tippy('.checkbox-info-ct', {
            // default
            placement: 'top',
            arrow: true,
            animation: 'fade',
            theme: 'light',
            content: "Đã copy!",
        });
        tippy('.option-info-ct', {
            // default
            placement: 'top',
            arrow: true,
            animation: 'fade',
            theme: 'light',
            content: "Đã copy!",
        });


    })
</script>
</body>


</html>






