
@extends('frontend.layouts.master')

@section('content')

    <form id="formBookingStepMobie" action="" method="POST">
        {{csrf_field()}}
        <fieldset id="fieldset-one">
            <section class="media-mobile">
                <div class="container container-fix banner-mobile-container-ct">
                    <div class="row marginauto banner-mobile-row-ct">
                        <div class="col-auto left-right" style="width: 10%">
                            <img class="lazy" src="/assets/{{env('THEME_VERSION')}}/image/cay-thue/back.png" alt="" >
                        </div>

                        <div class="col-auto left-right banner-mobile-span text-center" style="width: 80%">
                            <h3>Cày Thuê</h3>
                        </div>
                        <div class="col-auto left-right" style="width: 10%">
                        </div>
                    </div>
                </div>
            </section>
            <section class="media-web">
                <div class="container container-fix menu-container-ct">
                    <ul>
                        <li><a href="/">Trang chủ</a></li>
                        <li class="menu-container-li-ct"><img class="lazy" src="/assets/{{env('THEME_VERSION')}}/image/cay-thue/arrow-right.png" alt=""></li>
                        <li class="menu-container-li-ct"><a href="/dich-vu">Cày thuê</a></li>
                        <li class="menu-container-li-ct"><img class="lazy" src="/assets/{{env('THEME_VERSION')}}/image/cay-thue/arrow-right.png" alt=""></li>
                        <li class="menu-container-li-ct"><a href="/dich-vu/slug">Cày xếp hạng ELO/ Liên Minh</a></li>
                    </ul>
                </div>
            </section>

            {{--   Bopdy --}}
            <section id="service-detail">
                <div class="container container-fix body-container-ct">
                    <div class="row marginauto body-container-row-ct body-container-row-mobile-ct">
                        <div class="col-lg-5 col-12 body-container-detail-left-ct">
                            <form action="" method="POST">
                                @csrf
                                <div class="row marginauto body-row-ct web-media-ct-fix web-media-ct">

                                    <div class="col-md-12 left-right">
                                        <div class="row marginauto">
                                            <div class="col-md-12 left-right">
                                                <div class="row marginauto body-header-ct">
                                                    <div class="col-auto left-right">
                                                        <img class="lazy" src="/assets/{{env('THEME_VERSION')}}/image/cay-thue/caythue.png" alt="">
                                                    </div>
                                                    <div class="col-md-10 col-10 body-header-col-ct">
                                                        <h3>Cày Xếp hạng ELO/ Liên Minh</h3>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 left-right">
                                                <div class="row marginauto banner-container-ct">
                                                    <div class="col-md-12 text-left left-right">
                                                        <img class="lazy" src="/assets/{{env('THEME_VERSION')}}/image/cay-thue/banner-home.png" alt="">
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

                                                    <div class="col-auto text-left detail-service-col body-title-detail-col-ct">
                                                        <div class="row marginauto">
                                                            <div class="col-md-12 left-right body-title-detail-span-ct">
                                                                <span>Rank hiện tại</span>
                                                            </div>
                                                            <div class="col-md-12 left-right body-title-detail-select-ct data-select-rank-start">
                                                                <select class="wide" name="rank-start">
                                                                    <option value="">Chọn rank hiện tại</option>
                                                                    <option value="3">Vàng 4</option>
                                                                    <option value="4">Vàng 5</option>
                                                                    <option value="5">Vàng 6</option>
                                                                    <option value="5">Vàng 7</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-m-12 rank-start-error">

                                                            </div>

                                                        </div>


                                                    </div>

                                                    <div class="col-auto text-left detail-service-col media-col-558 body-title-detail-col-ct">
                                                        <div class="row marginauto">
                                                            <div class="col-md-12 left-right body-title-detail-span-ct">
                                                                <span>Rank mong muốn</span>
                                                            </div>
                                                            <div class="col-md-12 left-right body-title-detail-select-ct data-select-rank-end">
                                                                <select class="wide" name="rank-end">
                                                                    <option value="">Chọn rank hiện tại</option>
                                                                    <option value="3">Vàng 4</option>
                                                                    <option value="4">Vàng 5</option>
                                                                    <option value="5">Vàng 6</option>
                                                                    <option value="5">Vàng 7</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-m-12 rank-end-error">

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
                                                            <div class="col-md-12 left-right body-title-detail-select-ct data-select-server">
                                                                <select class="wide" name="server">
                                                                    <option value="">Chọn server</option>
                                                                    <option value="3">server 4</option>
                                                                    <option value="4">server 5</option>
                                                                    <option value="5">server 6</option>
                                                                    <option value="5">server 7</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-m-12 server-error">

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
                                                                                <li class="checkbox-info-ct"><img class="lazy" src="/assets/{{env('THEME_VERSION')}}/image/cay-thue/infor.png" alt=""></li>
                                                                            </ul>
                                                                            <input id="tuychon-01" type="checkbox" class="allgame" name="option" value="on">
                                                                            <span class="input-ratio-checkmark-ct"></span>
                                                                        </label>
                                                                    </div>

                                                                    <div class="col-auto body-title-detail-checkbox-col-ct">
                                                                        <label for="tuychon-02" class="input-ratio-ct">
                                                                            <ul>
                                                                                <li>Tùy chọn vị trí+20.00%</li>
                                                                                <li class="checkbox-info-ct"><img class="lazy" src="/assets/{{env('THEME_VERSION')}}/image/cay-thue/infor.png" alt=""></li>
                                                                            </ul>
                                                                            <input id="tuychon-02" type="checkbox" class="allgame" name="option" value="on">
                                                                            <span class="input-ratio-checkmark-ct"></span>
                                                                        </label>
                                                                    </div>

                                                                    <div class="col-auto body-title-detail-checkbox-col-ct">
                                                                        <label for="tuychon-03" class="input-ratio-ct">
                                                                            <ul>
                                                                                <li>Đặt lịch cày</li>
                                                                                <li class="checkbox-info-ct"><img class="lazy" src="/assets/{{env('THEME_VERSION')}}/image/cay-thue/infor.png" alt=""></li>
                                                                            </ul>
                                                                            <input id="tuychon-03" type="checkbox" class="allgame" name="option" value="on">
                                                                            <span class="input-ratio-checkmark-ct"></span>
                                                                        </label>
                                                                    </div>

                                                                    <div class="col-auto body-title-detail-checkbox-col-ct">
                                                                        <label for="tuychon-04" class="input-ratio-ct">
                                                                            <ul>
                                                                                <li>Cày siêu tốc+35.00%</li>
                                                                                <li class="checkbox-info-ct"><img class="lazy" src="/assets/{{env('THEME_VERSION')}}/image/cay-thue/infor.png" alt=""></li>
                                                                            </ul>
                                                                            <input id="tuychon-04" type="checkbox" class="allgame" name="option" value="on">
                                                                            <span class="input-ratio-checkmark-ct"></span>
                                                                        </label>
                                                                    </div>

                                                                    <div class="col-auto body-title-detail-checkbox-col-ct">
                                                                        <label for="tuychon-05" class="input-ratio-ct">
                                                                            <ul>
                                                                                <li>Tùy chọn tướng+30.00%</li>
                                                                                <li class="checkbox-info-ct"><img class="lazy" src="/assets/{{env('THEME_VERSION')}}/image/cay-thue/infor.png" alt=""></li>
                                                                            </ul>
                                                                            <input id="tuychon-05" type="checkbox" class="allgame" name="option" value="on">
                                                                            <span class="input-ratio-checkmark-ct"></span>
                                                                        </label>
                                                                    </div>

                                                                    <div class="col-auto body-title-detail-checkbox-col-ct">
                                                                        <label for="tuychon-06" class="input-ratio-ct">
                                                                            <ul>
                                                                                <li>Chọn Booster</li>
                                                                                <li class="checkbox-info-ct"><img class="lazy" src="/assets/{{env('THEME_VERSION')}}/image/cay-thue/infor.png" alt=""></li>
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
                                                            <li class="option-info-ct"><img class="lazy" src="/assets/{{env('THEME_VERSION')}}/image/cay-thue/infor.png" alt=""></li>
                                                        </ul>
                                                    </span>
                                                            </div>
                                                            <div class="col-md-12 left-right body-title-detail-select-ct data-select-hero">
                                                                <select class="wide" name="select">
                                                                    <option value="">Ví dụ: Yasuyo</option>
                                                                    <option value="3">Vàng 4</option>
                                                                    <option value="4">Vàng 5</option>
                                                                    <option value="5">Vàng 6</option>
                                                                    <option value="5">Vàng 7</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-m-12 hero-error">

                                                            </div>
                                                        </div>


                                                    </div>

                                                </div>
                                            </div>

                                            <div class="col-md-12 left-right">
                                                <div class="row body-title-detail-ct">

                                                    <div class="col-auto detail-service-col text-left body-title-detail-col-ct">
                                                        <div class="row marginauto">
                                                            <div class="col-md-12 left-right body-title-detail-span-ct">
                                                                <span>Tài khoản cần cày</span>
                                                            </div>
                                                            <div class="col-md-12 left-right body-title-detail-select-ct">
                                                                <input autocomplete="off" class="input-defautf-ct username" name="username" type="text" placeholder="Nhập tài khoản trong game">
                                                            </div>
                                                            <div class="col-md-12 left-right tk-error">

                                                            </div>
                                                        </div>


                                                    </div>

                                                    <div class="col-auto detail-service-col text-left body-title-detail-col-ct">
                                                        <div class="row marginauto password-mobile">
                                                            <div class="col-md-12 left-right body-title-detail-span-ct">
                                                                <span>Mật khẩu</span>
                                                            </div>
                                                            <div class="col-md-12 left-right body-title-detail-select-ct" style="position: relative">
                                                                <input autocomplete="off" id="password" name="password" class="input-defautf-ct password" type="password" placeholder="Nhập mật khẩu trong game">
                                                                <div class="show-btn-password">
                                                                    <img class="lazy" src="/assets/{{env('THEME_VERSION')}}/image/images_1/eye-show.svg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 left-right pw-error">

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

                                            <div class="col-md-12 left-right mobile- body-title-ct">
                                                <div class="row marginauto">
                                                    <div class="col-md-12 text-left left-right">
                                                        <button class="button-default-ct btn-data  media-web open-modal" type="button">Thuê ngay</button>
                                                        <button class="button-default-ct button-next-step-one media-mobile" type="button">Thuê ngay</button>
                                                    </div>
                                                </div>
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
                                            <img class="lazy" src="/assets/{{env('THEME_VERSION')}}/image/cay-thue/banner-detail.png" alt="">
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
                                        <div class="col-md-12 text-left left-right">
                                            <p>Chơi game được xem là món ăn tinh thần không thể thiếu được đối với giới trẻ hiện nay, đặc biệt là các game online
                                                hay game mobile với nhiều hình thức khác nhau như game chiến thuật, game đối kháng, game thẻ bài, gam kiếm hiệp hay
                                                game sinh tồn. Chính vì vậy, nhu cầu nạp game là không thể thiếu và</p>
                                            <p>Chơi game được xem là món ăn tinh thần không thể thiếu được đối với giới trẻ hiện nay, đặc biệt là các game online
                                                hay game mobile với nhiều hình thức khác nhau như game chiến thuật, game đối kháng, game thẻ bài, gam kiếm hiệp hay
                                                game sinh tồn. Chính vì vậy, nhu cầu nạp game là không thể thiếu và</p>
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

                                <div class="col-md-12 left-right card--desc">
                                    <div class="row marginauto body-title-ct show-detail-caythue-ct-fix">
                                        <div class="col-md-12 text-left left-right content-video-in double-click content-video-in content-video-in-add">
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
                                        <div class="col-md-12 left-right text-center js-toggle-content">
                                            <div class="view-more">
                                                <a href="javascript:void(0)" class="global__link__default">Xem thêm<i class="__icon__default --sm__default --link__default ml-1" style="--path : url(/assets/{{env('THEME_VERSION')}}/image/icons/arrow-down.png)"></i></a>
                                            </div>
                                            <div class="view-less">
                                                <a href="javascript:void(0)" class="global__link__default">Thu gọn<i class="__icon__default --sm__default --link__default ml-1" style="--path : url(/assets/{{env('THEME_VERSION')}}/image/icons/iconright.png)"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            @include('frontend.pages.service.widget.__related')

            <div class="modal fade login show default-Modal" id="successModal" aria-modal="true">
                <div class="modal-dialog modal-md modal-dialog-centered login animated">
                    <!--        <div class="image-login"></div>-->
                    <div class="modal-content">
                        <div class="modal-header modal-header-success-ct">
                            <div class="row marginauto modal-header-success-row-ct justify-content-center">
                                <div class="col-md-12 text-center">
                                    <span>Gửi yêu cầu thuê thành công</span>
                                </div>
                            </div>
                        </div>

                        <div class="modal-body modal-body-success-ct">
                            <div class="row marginauto justify-content-center">
                                <div class="col-auto">
                                    <img class="lazy" src="/assets/{{env('THEME_VERSION')}}/image/cay-thue/group.png" alt="">
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

            <div class="modal fade login show order-modal" id="openOrder" aria-modal="true">

                <div class="modal-dialog step-tab-panel modal-lg modal-dialog-centered login animated">
                    <!--        <div class="image-login"></div>-->
                    <div class="modal-content">
                        <div class="modal-header p-0" style="border-bottom: 0">
                            <div class="row marginauto modal-header-order-ct">
                                <div class="col-12 span__donhang text-center" style="position: relative">
                                    <span>XÁC NHẬN THANH TOÁN</span>
                                    <img class="lazy img-close-ct close-modal-default" src="/assets/{{env('THEME_VERSION')}}/image/cay-thue/close.png" alt="">
                                </div>
                            </div>

                        </div>

                        <div class="modal-body modal-body-order-ct">
                            <div class="row marginauto">

                                <div class="col-md-12 left-right title-order-ct">
                                    <span>Thông tin yêu cầu</span>
                                </div>

                                <div class="col-md-12 left-right" id="order-errors">
                                    <div class="row marginauto order-errors">
                                        <div class="col-md-12 left-right">
                                            <small>Lỗi rồi em ơi</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 left-right padding-order-ct">
                                    <div class="row marginauto">
                                        <div class="col-md-12 left-right background-order-ct">
                                            <div class="row marginauto background-order-row-ct">
                                                <div class="col-auto left-right background-order-col-left-ct">
                                                    <span>Tài khoản</span>
                                                </div>
                                                <div class="col-auto left-right background-order-col-right-ct">
                                                    <small>Nam Hải</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 left-right padding-order-ct">
                                    <div class="row marginauto">
                                        <div class="col-md-12 left-right background-order-ct">
                                            <div class="row marginauto background-order-body-row-ct">
                                                <div class="col-auto left-right background-order-col-left-ct">
                                                    <span>Game</span>
                                                </div>
                                                <div class="col-auto left-right background-order-col-right-ct">
                                                    <img class="lazy" src="/assets/{{env('THEME_VERSION')}}/image/cay-thue/mobilegame.png" alt="">
                                                </div>
                                            </div>

                                            <div class="row marginauto background-order-body-row-ct">
                                                <div class="col-auto left-right background-order-col-left-ct">
                                                    <span>Gói</span>
                                                </div>
                                                <div class="col-auto left-right background-order-col-right-ct">
                                                    <small>Vàng-Kim Cương</small>
                                                </div>
                                            </div>

                                            <div class="row marginauto background-order-body-row-ct">
                                                <div class="col-auto left-right background-order-col-left-ct">
                                                    <span>Chiết khấu</span>
                                                </div>
                                                <div class="col-auto left-right background-order-col-right-ct">
                                                    <small>3%</small>
                                                </div>
                                            </div>

                                            <div class="row marginauto background-order-body-bottom-ct">
                                                <div class="col-auto left-right background-order-col-left-ct">
                                                    <span>Báo giá</span>
                                                </div>
                                                <div class="col-auto left-right background-order-col-right-ct">
                                                    <small>100.000 đ</small>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-12 left-right padding-order-ct">
                                    <div class="row marginauto">
                                        <div class="col-md-12 left-right background-order-ct">

                                            <div class="row marginauto background-order-body-row-ct">
                                                <div class="col-auto left-right background-order-col-left-ct">
                                                    <span>Phương thức thanh toán</span>
                                                </div>
                                                <div class="col-auto left-right background-order-col-right-ct">
                                                    <small>Tài khoản Shopbrand</small>
                                                </div>
                                            </div>

                                            <div class="row marginauto background-order-body-bottom-ct">
                                                <div class="col-auto left-right background-order-col-left-ct">
                                                    <span>Phí thanh toán</span>
                                                </div>
                                                <div class="col-auto left-right background-order-col-right-ct">
                                                    <small>Miễn phí</small>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-12 left-right padding-order-ct">
                                    <div class="row marginauto">
                                        <div class="col-md-12 left-right background-order-ct">
                                            <div class="row marginauto background-order-row-ct">
                                                <div class="col-auto left-right background-order-col-left-ct">
                                                    <span>Tài khoản</span>
                                                </div>
                                                <div class="col-auto left-right background-order-col-right-ct">
                                                    <span>97.000 đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 left-right padding-order-footer-ct">
                                    <div class="row marginauto">
                                        <div class="col-md-12 left-right">
                                            <button class="button-default-nick-ct openSuccess" type="button">Xác nhận</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </fieldset>
        <fieldset id="fieldset-two">

            <section>
                <div class="container container-fix banner-mobile-container-ct">
                    <div class="row marginauto banner-mobile-row-ct">
                        <div class="col-auto left-right" style="width: 10%">
                            <img class="lazy previous-step-one" src="/assets/{{env('THEME_VERSION')}}/image/cay-thue/back.png" alt="" >
                        </div>

                        <div class="col-auto left-right banner-mobile-span text-center" style="width: 80%">
                            <h3>Cày Thuê</h3>
                        </div>
                        <div class="col-auto left-right" style="width: 10%">
                        </div>
                    </div>

                </div>
            </section>

            <section class="max-header-fix">
                <div class="row marginauto" style="padding: 12px 16px">

                    <div class="col-md-12 left-right title-order-ct">
                        <span>Thông tin yêu cầu</span>
                    </div>

                    <div class="col-md-12 left-right" id="order-errors">
                        <div class="row marginauto order-errors">
                            <div class="col-md-12 left-right">
                                <small>Lỗi rồi em ơi</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 left-right padding-order-ct">
                        <div class="row marginauto">
                            <div class="col-md-12 left-right background-order-ct">
                                <div class="row marginauto background-order-row-ct">
                                    <div class="col-auto left-right background-order-col-left-ct">
                                        <span>Tài khoản</span>
                                    </div>
                                    <div class="col-auto left-right background-order-col-right-ct">
                                        <small>Nam Hải</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 left-right padding-order-ct">
                        <div class="row marginauto">
                            <div class="col-md-12 left-right background-order-ct">
                                <div class="row marginauto background-order-body-row-ct">
                                    <div class="col-auto left-right background-order-col-left-ct">
                                        <span>Game</span>
                                    </div>
                                    <div class="col-auto left-right background-order-col-right-ct">
                                        <img class="lazy" src="/assets/{{env('THEME_VERSION')}}/image/cay-thue/mobilegame.png" alt="">
                                    </div>
                                </div>

                                <div class="row marginauto background-order-body-row-ct">
                                    <div class="col-auto left-right background-order-col-left-ct">
                                        <span>Gói</span>
                                    </div>
                                    <div class="col-auto left-right background-order-col-right-ct">
                                        <small>Vàng-Kim Cương</small>
                                    </div>
                                </div>

                                <div class="row marginauto background-order-body-row-ct">
                                    <div class="col-auto left-right background-order-col-left-ct">
                                        <span>Chiết khấu</span>
                                    </div>
                                    <div class="col-auto left-right background-order-col-right-ct">
                                        <small>3%</small>
                                    </div>
                                </div>

                                <div class="row marginauto background-order-body-bottom-ct">
                                    <div class="col-auto left-right background-order-col-left-ct">
                                        <span>Báo giá</span>
                                    </div>
                                    <div class="col-auto left-right background-order-col-right-ct">
                                        <small>100.000 đ</small>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-12 left-right padding-order-ct">
                        <div class="row marginauto">
                            <div class="col-md-12 left-right background-order-ct">

                                <div class="row marginauto background-order-body-row-ct">
                                    <div class="col-auto left-right background-order-col-left-ct">
                                        <span>Phương thức thanh toán</span>
                                    </div>
                                    <div class="col-auto left-right background-order-col-right-ct">
                                        <small>Tài khoản Shopbrand</small>
                                    </div>
                                </div>

                                <div class="row marginauto background-order-body-bottom-ct">
                                    <div class="col-auto left-right background-order-col-left-ct">
                                        <span>Phí thanh toán</span>
                                    </div>
                                    <div class="col-auto left-right background-order-col-right-ct">
                                        <small>Miễn phí</small>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="col-md-12 left-right padding-order-ct">
                        <div class="row marginauto">
                            <div class="col-md-12 left-right background-order-ct">
                                <div class="row marginauto background-order-row-ct">
                                    <div class="col-auto left-right background-order-col-left-ct">
                                        <span>Tài khoản</span>
                                    </div>
                                    <div class="col-auto left-right background-order-col-right-ct">
                                        <span>97.000 đ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 left-right padding-order-footer-mobile-ct fixcungbuttonmobile">
                        <div class="row marginauto" style="padding: 12px 16px">
                            <div class="col-md-12 left-right">
                                <button class="button-default-ct button-next-step-two" type="button">Xác nhận</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <input type="hidden" name="previous" class="input-back-step-two" value="Trang trước"/>

        </fieldset>
    </form>


    <script src="/assets/{{env('THEME_VERSION')}}/js/cay-thue/cay-thue-detail.js?v={{time()}}"></script>

@endsection



