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
    <link rel="stylesheet" href="/assets/frontend/theme_4/lib/swiper/swiper.min.css">
    {{--    Thêm css --}}
    <link rel="stylesheet" href="/assets/frontend/theme_4/lib/select-nice/select-nice.css">
    {{--    jquery--}}
    <script src="/assets/frontend/theme_4/lib/jquery/jquery.min.js"></script>
    {{--    jquery--}}
    <script src="/assets/frontend/theme_4/lib/bootstrap/bootstrap.min.js"></script>
    <script src="/assets/frontend/theme_4/lib/swiper/swiper.min.js"></script>
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
                    <h3>Nạp tài khoản game</h3>
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
                <li class="menu-container-li-ct"><a href="">Nạp tài khoản game</a></li>
                <li class="menu-container-li-ct"><img class="lazy" src="/assets/frontend/theme_4/images/cay-thue/arrow-right.png" alt=""></li>
                <li class="menu-container-li-ct"><a href="">Liên minh huyền thoại</a></li>
            </ul>
        </div>
    </section>

    {{--   Bopdy --}}
    <section>
        <div class="container body-container-ct">
            <div class="row marginauto body-container-row-ct body-container-row-mobile-ct">
                <div class="col-lg-5 col-12 body-container-detail-left-ct">
                    <form action="" method="POST">
                        @csrf
                        <div class="row marginauto body-row-ct">

                            <div class="col-md-12 left-right">
                                <div class="row marginauto body-header-ct">
                                    <div class="col-auto left-right">
                                        <img class="lazy" src="/assets/frontend/theme_4/images/cay-thue/napgameicon.png" alt="">
                                    </div>
                                    <div class="col-md-10 col-10 body-header-col-ct">
                                        <h3>Cày Xếp hạng ELO/ Liên Minh</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 left-right">
                                <div class="row marginauto banner-container-ct">
                                    <div class="col-md-12 text-left left-right">
                                        <img class="lazy" src="/assets/frontend/theme_4/images/cay-thue/ctnapgame-bg.png" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 left-right">
                                <div class="row body-title-detail-ct">

                                    <div class="col-md-12 text-left body-title-detail-col-ct">
                                        <div class="row marginauto">
                                            <div class="col-md-12 left-right body-title-detail-span-ct">
                                                <span>RP LMHT:</span>
                                            </div>
                                            <div class="col-md-12 left-right body-title-detail-select-ct">
                                                <input autocomplete="off" class="input-defautf-ct" type="text" placeholder="Gói 3:80 RP">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 left-right">
                                <div class="row body-title-detail-ct">
                                    <div class="col-md-12 text-left body-title-detail-col-ct">
                                        <div class="row marginauto">
                                            <div class="col-md-12 left-right body-title-detail-span-ct">
                                                <span>Tài khoản Garena:</span>
                                            </div>
                                            <div class="col-md-12 left-right body-title-detail-select-ct">
                                                <input autocomplete="off" class="input-defautf-ct" type="text" placeholder="Nhập Tên tài khoản Garena">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 left-right">
                                <div class="row body-title-detail-ct">

                                    <div class="col-md-12 text-left body-title-detail-col-ct">
                                        <div class="row marginauto password-mobile">
                                            <div class="col-md-12 left-right body-title-detail-span-ct">
                                                <span>Mật khẩu Garena:</span>
                                            </div>
                                            <div class="col-md-12 left-right body-title-detail-select-ct" style="position: relative">
                                                <input autocomplete="off" id="password" class="input-defautf-ct" type="password" placeholder="Nhập mật khẩu tài khoản Garena">
                                                <div class="show-btn-password">
                                                    <img class="lazy" src="/assets/frontend/theme_4/images/cay-thue/eyehide.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-12 left-right">
                                <div class="row body-title-detail-ct">
                                    <div class="col-md-12 left-right body-title-detail-span-ct body-title-detail-col-ng-ct">
                                        <span>Mã bảo vệ</span>
                                    </div>
                                    <div class="col-auto text-left body-title-detail-col-left-ng-ct">
                                        <div class="row marginauto">
                                            <div class="col-md-12 left-right body-title-detail-select-ct">
                                                <input autocomplete="off" class="input-defautf-ct" type="text" placeholder="Nhập mã bảo vệ">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-auto text-left body-title-detail-col-center-ng-ct">
                                        <div class="row marginauto password-mobile capcha-image-bg">
                                            <div class="col-md-12 left-right body-title-detail-select-ct">
                                                <img class="lazy" src="/assets/frontend/theme_4/images/cay-thue/capcha.png" alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-auto text-left body-title-detail-col-right-ng-ct">
                                        <div class="row marginauto password-mobile capcha-image-bg">
                                            <div class="col-md-12 left-right body-title-detail-select-ct">
                                                <img class="lazy" src="/assets/frontend/theme_4/images/cay-thue/rf-capcha.png" alt="">
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
                                                <span>Tổng thanh toán:</span>
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
                                        <button class="button-default-ct" type="button">Thanh toán</button>
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
                            </div>
                        </div>

                        <div class="col-md-12 left-right">
                            <div class="row banner-detail-ct">
                                <div class="col-md-12 text-left left-right">
                                    <img class="lazy" src="/assets/frontend/theme_4/images/cay-thue/magianpgame.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--                block 2           --}}
                    <div class="row marginauto body-detail-right-ng-ct">

                        <div class="col-md-12 left-right">
                            <div class="row marginauto">
                                <div class="col-md-12 col-8 body-header-col-km-left-ct">
                                    <small>Mô tả</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 left-right">
                            <div class="row marginauto body-title-ct show-detail-napgame-ct">
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

    <section class="bottom-container-ct">
        <div class="container body-container-ct">
            <div class="row marginauto body-container-row-ct body-container-row-mobile-ct">
                <div class="col-md-12 left-right">
                    <div class="row marginauto body-row-ct media-ctbg-ct">

                        <div class="col-md-12 left-right napgamekhac">
                            <div class="row marginauto">
                                <div class="col-md-12 text-left left-right">
                                    <span>Nạp tài khoản game khác</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 left-right">
                            <div class="row marginauto body-detail-ct">
                                <div class="swiper-container list-nap-game col-md-12 text-left left-right">
                                    <div class="swiper-wrapper">

                                        <div class="swiper-slide body-detail-ctng-col-ct">
                                            <div class="row marginauto">
                                                <div class="col-md-12 left-right">
                                                    <a href="">
                                                        <img class="lazy" src="/assets/frontend/theme_4/images/cay-thue/lienquan.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-md-12 left-right text-center body-detail-col-span-ct">
                                                    <a href="">
                                                        <span>Liên quân Mobile</span>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="swiper-slide body-detail-ctng-col-ct">
                                            <div class="row marginauto">
                                                <div class="col-md-12 left-right">
                                                    <a href="">
                                                        <img class="lazy" src="/assets/frontend/theme_4/images/cay-thue/freefire.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-md-12 left-right text-center body-detail-col-span-ct">
                                                    <a href="">
                                                        <span>Garena freefire</span>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="swiper-slide body-detail-ctng-col-ct">
                                            <div class="row marginauto">
                                                <div class="col-md-12 left-right">
                                                    <a href="">
                                                        <img class="lazy" src="/assets/frontend/theme_4/images/cay-thue/bubg.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-md-12 left-right text-center body-detail-col-span-ct">
                                                    <a href="">
                                                        <span>PUBG Mobile</span>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="swiper-slide body-detail-ctng-col-ct">
                                            <div class="row marginauto">
                                                <div class="col-md-12 left-right">
                                                    <a href="">
                                                        <img class="lazy" src="/assets/frontend/theme_4/images/cay-thue/lmht.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-md-12 left-right text-center body-detail-col-span-ct">
                                                    <a href="">
                                                        <span>Liên Minh Huyền Thoại</span>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="swiper-slide body-detail-ctng-col-ct">
                                            <div class="row marginauto">
                                                <div class="col-md-12 left-right">
                                                    <a href="">
                                                        <img class="lazy" src="/assets/frontend/theme_4/images/cay-thue/tocchien.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-md-12 left-right text-center body-detail-col-span-ct">
                                                    <a href="">
                                                        <span>Tốc chiến</span>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="swiper-slide body-detail-ctng-col-ct">
                                            <div class="row marginauto">
                                                <div class="col-md-12 left-right">
                                                    <a href="">
                                                        <img class="lazy" src="/assets/frontend/theme_4/images/cay-thue/autochest.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-md-12 left-right text-center body-detail-col-span-ct">
                                                    <a href="">
                                                        <span>Auto Chess</span>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="swiper-slide body-detail-ctng-col-ct">
                                            <div class="row marginauto">
                                                <div class="col-md-12 left-right">
                                                    <a href="">
                                                        <img class="lazy" src="/assets/frontend/theme_4/images/cay-thue/bangbang.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-md-12 left-right text-center body-detail-col-span-ct">
                                                    <a href="">
                                                        <span>Bang Bang</span>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="swiper-slide body-detail-ctng-col-ct">
                                            <div class="row marginauto">
                                                <div class="col-md-12 left-right">
                                                    <a href="">
                                                        <img class="lazy" src="/assets/frontend/theme_4/images/cay-thue/cyber.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-md-12 left-right text-center body-detail-col-span-ct">
                                                    <a href="">
                                                        <span>Cyber Punk 2077</span>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="swiper-slide body-detail-ctng-col-ct">
                                            <div class="row marginauto">
                                                <div class="col-md-12 left-right">
                                                    <a href="">
                                                        <img class="lazy" src="/assets/frontend/theme_4/images/cay-thue/csgo.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-md-12 left-right text-center body-detail-col-span-ct">
                                                    <a href="">
                                                        <span>CSGO</span>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="swiper-slide body-detail-ctng-col-ct">
                                            <div class="row marginauto">
                                                <div class="col-md-12 left-right">
                                                    <a href="">
                                                        <img class="lazy" src="/assets/frontend/theme_4/images/cay-thue/freefire.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-md-12 left-right text-center body-detail-col-span-ct">
                                                    <a href="">
                                                        <span>Garena freefire</span>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="swiper-slide body-detail-ctng-col-ct">
                                            <div class="row marginauto">
                                                <div class="col-md-12 left-right">
                                                    <a href="">
                                                        <img class="lazy" src="/assets/frontend/theme_4/images/cay-thue/bubg.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-md-12 left-right text-center body-detail-col-span-ct">
                                                    <a href="">
                                                        <span>PUBG Mobile</span>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="swiper-slide body-detail-ctng-col-ct">
                                            <div class="row marginauto">
                                                <div class="col-md-12 left-right">
                                                    <a href="">
                                                        <img class="lazy" src="/assets/frontend/theme_4/images/cay-thue/lmht.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-md-12 left-right text-center body-detail-col-span-ct">
                                                    <a href="">
                                                        <span>Liên Minh Huyền Thoại</span>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="swiper-slide body-detail-ctng-col-ct">
                                            <div class="row marginauto">
                                                <div class="col-md-12 left-right">
                                                    <a href="">
                                                        <img class="lazy" src="/assets/frontend/theme_4/images/cay-thue/tocchien.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-md-12 left-right text-center body-detail-col-span-ct">
                                                    <a href="">
                                                        <span>Tốc chiến</span>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="swiper-slide body-detail-ctng-col-ct">
                                            <div class="row marginauto">
                                                <div class="col-md-12 left-right">
                                                    <a href="">
                                                        <img class="lazy" src="/assets/frontend/theme_4/images/cay-thue/autochest.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-md-12 left-right text-center body-detail-col-span-ct">
                                                    <a href="">
                                                        <span>Auto Chess</span>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="swiper-slide body-detail-ctng-col-ct">
                                            <div class="row marginauto">
                                                <div class="col-md-12 left-right">
                                                    <a href="">
                                                        <img class="lazy" src="/assets/frontend/theme_4/images/cay-thue/bangbang.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-md-12 left-right text-center body-detail-col-span-ct">
                                                    <a href="">
                                                        <span>Bang Bang</span>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="swiper-slide body-detail-ctng-col-ct">
                                            <div class="row marginauto">
                                                <div class="col-md-12 left-right">
                                                    <a href="">
                                                        <img class="lazy" src="/assets/frontend/theme_4/images/cay-thue/cyber.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-md-12 left-right text-center body-detail-col-span-ct">
                                                    <a href="">
                                                        <span>Cyber Punk 2077</span>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
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

<div class="modal fade login show default-Modal" id="successModal" aria-modal="true">
    <div class="modal-dialog modal-md modal-dialog-centered login animated">
        <!--        <div class="image-login"></div>-->
        <div class="modal-content">
            <div class="modal-header modal-header-success-ct">
                <div class="row marginauto modal-header-success-row-ct text-center">
                    <div class="col-md-12 text-center" style="position: relative">
                        <span>Nạp game thành công</span>
                        <img class="lazy img-close-ct" src="/assets/frontend/theme_4/images/cay-thue/close.png" alt="">
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
                    <div class="col-md-12 left-right text-center">
                        <span>Tài khoản </span><small>098 1234 123</small><span> vừa được nạp </span><small>30RP.</small>
                    </div>
                    <div class="col-md-12 left-right text-center">
                        <span>Nếu sai thông tin hoặc xảy ra lỗi, vui lòng liên hệ</span>
                    </div>
                    <div class="col-md-12 left-right text-center">
                        <span>fanpage để được hỗ trợ.</span>
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
                                <a href="/" class="button-bg-ct"><span>Nạp thêm</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade login show default-Modal" id="rejectModal" aria-modal="true">
    <div class="modal-dialog modal-md modal-dialog-centered login animated">
        <!--        <div class="image-login"></div>-->
        <div class="modal-content">
            <div class="modal-header modal-header-success-ct">
                <div class="row marginauto modal-header-success-row-ct text-center">
                    <div class="col-md-12 text-center" style="position: relative">
                        <span>Thông báo</span>
                        <img class="lazy img-close-ct" src="/assets/frontend/theme_4/images/cay-thue/close.png" alt="">
                    </div>
                </div>
            </div>

            <div class="modal-body modal-body-success-ct">
                <div class="row marginauto justify-content-center">
                    <div class="col-auto">
                        <img class="lazy" src="/assets/frontend/theme_4/images/cay-thue/reject.png" alt="">
                    </div>
                </div>
                <div class="row marginauto modal-body-span-success-ct justify-content-center">
                    <div class="col-md-12 left-right text-center">
                        <span>Tài khoản của quý khách hiện không đủ để thanh toán</span>
                    </div>
                    <div class="col-md-12 left-right text-center">
                        <span>Vui lòng nạp tiền để tiếp tục.</span>
                    </div>
                </div>
                <div class="row marginauto justify-content-center modal-footer-success-ct">
                    <div class="col-md-6 col-6 modal-footer-success-col-left-ct">
                        <div class="row marginauto modal-footer-success-row-not-ct">
                            <div class="col-md-12 left-right">
                                <a href="/" class="button-not-bg-ct"><span>Nạp thẻ cào</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-6 modal-footer-success-col-right-ct">
                        <div class="row marginauto modal-footer-success-row-ct">
                            <div class="col-md-12 left-right">
                                <a href="/" class="button-bg-ct"><span>Nạp ATM/Ví</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('.show-detail-napgame-ct .view-more').click(function(){
        $('.show-detail-napgame-ct .view-less').css("display","block");
        $('.show-detail-napgame-ct .view-more').css("display","none");
        $(".show-detail-napgame-ct .content-video-in").addClass( "showtext" );
    });
    $('.show-detail-napgame-ct .view-less').click(function(){
        $('.show-detail-napgame-ct .view-more').css("display","block");
        $('.show-detail-napgame-ct .view-less').css("display","none");
        $(".show-detail-napgame-ct .content-video-in").removeClass( "showtext");
    });

</script>
<script>
    $(document).ready(function (e) {

        var product_list = new Swiper('.list-nap-game', {
            autoplay: false,
            // preloadImages: false,
            updateOnImagesReady: true,
            // lazyLoading: false,
            watchSlidesVisibility: false,
            lazyLoadingInPrevNext: false,
            lazyLoadingOnTransitionStart: false,

            loop: false,
            centeredSlides: false,
            slidesPerView: 8,
            speed: 800,
            spaceBetween: 8,
            touchMove: true,
            freeModeSticky:true,
            grabCursor: true,
            observer: true,
            observeParents: true,
            breakpoints: {
                992: {
                    slidesPerView: 6,
                },
                768:{
                    slidesPerView: 4,
                },
                480: {
                    slidesPerView: 3.5,

                }
            }
        });

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







