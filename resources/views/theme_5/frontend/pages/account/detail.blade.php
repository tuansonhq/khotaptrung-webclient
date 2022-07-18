@extends('frontend.layouts.master')

@section('content')

    <form id="formBookingStepMobie" action="" method="POST">
        {{csrf_field()}}

        <fieldset id="fieldset-one">
            {{--  Header mobile  --}}
            <section class="media-mobile">
                <div class="container container-fix banner-mobile-container-ct">

                    <div class="row marginauto banner-mobile-row-ct">
                        <div class="col-auto left-right" style="width: 10%">
                            <a href="" class="previous-step-one" style="line-height: 28px">
                                <img class="lazy" src="/assets/{{theme('')->theme_key}}/image/cay-thue/back.png" alt="" >
                            </a>
                        </div>

                        <div class="col-auto left-right banner-mobile-span text-center" style="width: 80%">
                            <h3>Danh sách Nick</h3>
                        </div>
                        <div class="col-auto left-right" style="width: 10%">
                        </div>
                    </div>

                </div>
            </section>

            {{--    Banner--}}

            {{--  Menu  --}}
            <section class="media-web">
                <div class="container container-fix menu-container-ct">
                    <ul>
                        <li><a href="/">Trang chủ</a></li>
                        <li class="menu-container-li-ct"><img class="lazy" src="/assets/{{theme('')->theme_key}}/image/cay-thue/arrow-right.png" alt=""></li>
                        <li class="menu-container-li-ct"><a href="/mua-acc">Danh mục Shop Account</a></li>
                        <li class="menu-container-li-ct"><img class="lazy" src="/assets/{{theme('')->theme_key}}/image/cay-thue/arrow-right.png" alt=""></li>
                        <li class="menu-container-li-ct"><a href="/mua-acc/slug">Liên quân mobile</a></li>
                        <li class="menu-container-li-ct"><img class="lazy" src="/assets/{{theme('')->theme_key}}/image/cay-thue/arrow-right.png" alt=""></li>
                        <li class="menu-container-li-ct"><a href="/acc/id">Chi tiết Nick</a></li>
                    </ul>
                </div>
            </section>

            {{--   Bopđyy --}}
            @include('frontend.pages.account.widget.__datadetail')

            <section>
                <div class="container container-fix body-container-ct">
                    <div class="row marginauto body-container-row-ct">
                        <div class="col-md-12 left-right">
                            <div class="row marginauto body-row-ct footer-row-ct">
                                <div class="col-md-12 left-right">
                                    <span>Mô tả sản phẩm Nick Liên quân mobile | Mã số: 121590</span>
                                </div>
                                <div class="col-md-12 left-right footer-row-col-ct content-video-in content-video-in-add">
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
                                        <a href="javascript:void(0)" class="global__link__default">Xem thêm<i class="__icon__default --sm__default --link__default ml-1" style="--path : url(/assets/{{theme('')->theme_key}}/image/icons/arrow-down.png)"></i></a>

                                    </div>
                                    <div class="view-less">
                                        <a href="javascript:void(0)" class="global__link__default">Thu gọn<i class="__icon__default --sm__default --link__default ml-1" style="--path : url(/assets/{{theme('')->theme_key}}/image/icons/iconright.png)"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="media-mobile">
                <div class="row marginauto intermediary-ct" style="height: 20px;background: #EFEFEF">

                </div>
            </section>

            @include('frontend.pages.account.widget.__related__same')

            <section class="media-mobile">
                <div class="row marginauto intermediary-ct" style="height: 20px;background: #EFEFEF">

                </div>
            </section>

            @include('frontend.pages.account.widget.__related__promotion')


            <section class="media-mobile">
                <div class="row marginauto intermediary-ct" style="height: 20px;background: #EFEFEF">

                </div>
            </section>

            @include('frontend.pages.account.widget.__related__endow')

            <div class="modal fade login show order-modal" id="openOrder" aria-modal="true">

                <div class="modal-dialog step-tab-panel modal-lg modal-dialog-centered login animated">
                    <!--        <div class="image-login"></div>-->
                    <div class="modal-content">
                        <div class="modal-header p-0" style="border-bottom: 0">
                            <div class="row marginauto modal-header-order-ct">
                                <div class="col-12 span__donhang text-center" style="position: relative">
                                    <span>Xác nhận thanh toán</span>
                                    <img class="lazy img-close-ct close-modal-default" src="/assets/{{theme('')->theme_key}}/image/cay-thue/close.png" alt="">
                                </div>
                            </div>

                        </div>

                        <div class="modal-body modal-body-order-ct">
                            <div class="row marginauto">

                                <div class="col-md-12 left-right title-order-ct">
                                    <span>Thông tin acc</span>
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
                                                    <img class="lazy" src="/assets/{{theme('')->theme_key}}/image/cay-thue/mobilegame.png" alt="">
                                                </div>
                                            </div>

                                            <div class="row marginauto background-order-body-row-ct">
                                                <div class="col-auto left-right background-order-col-left-ct">
                                                    <span>Rank</span>
                                                </div>
                                                <div class="col-auto left-right background-order-col-right-ct">
                                                    <small>Tinh Anh</small>
                                                </div>
                                            </div>

                                            <div class="row marginauto background-order-body-row-ct">
                                                <div class="col-auto left-right background-order-col-left-ct">
                                                    <span>Số lượng</span>
                                                </div>
                                                <div class="col-auto left-right background-order-col-right-ct">
                                                    <small>01</small>
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
                                                    <span>Thành tiền</span>
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
                                            <button class="button-default-ct openSuccess" type="button">Xác nhận</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="modal fade login show order-modal" id="traGop" aria-modal="true">

                <div class="modal-dialog step-tab-panel modal-lg modal-dialog-centered login animated">
                    <!--        <div class="image-login"></div>-->
                    <div class="modal-content">
                        <div class="modal-header p-0" style="border-bottom: 0">
                            <div class="row marginauto modal-header-order-ct">
                                <div class="col-12 span__donhang text-center" style="position: relative">
                                    <span>Xác nhận thanh toán</span>
                                    <img class="lazy img-close-ct close-modal-default" src="/assets/{{theme('')->theme_key}}/image/cay-thue/close.png" alt="">
                                </div>
                            </div>

                        </div>

                        <div class="modal-body modal-body-order-ct">
                            <div class="row marginauto">

                                <div class="col-md-12 left-right title-order-ct">
                                    <span>Thông tin tài khoản #521479</span>
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
                                            <div class="row marginauto background-order-body-row-ct">
                                                <div class="col-auto left-right background-order-col-left-ct">
                                                    <span>Nhà phát hành</span>
                                                </div>
                                                <div class="col-auto left-right background-order-col-right-ct">
                                                    <img class="lazy" src="/assets/{{theme('')->theme_key}}/image/nick/zing.png" alt="">
                                                </div>
                                            </div>

                                            <div class="row marginauto background-order-body-row-ct">
                                                <div class="col-auto left-right background-order-col-left-ct">
                                                    <span>Tên game</span>
                                                </div>
                                                <div class="col-auto left-right background-order-col-right-ct">
                                                    <small>Ngọc rồng</small>
                                                </div>
                                            </div>

                                            <div class="row marginauto background-order-body-row-ct">
                                                <div class="col-auto left-right background-order-col-left-ct">
                                                    <span>Số lượng</span>
                                                </div>
                                                <div class="col-auto left-right background-order-col-right-ct">
                                                    <small>01</small>
                                                </div>
                                            </div>

                                            <div class="row marginauto background-order-body-bottom-ct">
                                                <div class="col-auto left-right background-order-col-left-ct">
                                                    <span>Tổng tiền</span>
                                                </div>
                                                <div class="col-auto left-right background-order-col-right-ct">
                                                    <small>250.000 đ</small>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-12 left-right title-tra-gop">
                                    <span>Thông tin trả góp</span>
                                </div>

                                <div class="col-md-12 left-right">
                                    <div class="row body-title-detail-ct">

                                        <div class="col-md-6 text-left body-title-detail-nick-col-ct">
                                            <div class="row marginauto">
                                                <div class="col-md-12 left-right body-title-detail-span-ct">
                                                    <span>Trả trước</span>
                                                </div>
                                                <div class="col-md-12 left-right body-title-detail-select-ct">
                                                    <input readonly autocomplete="off" class="input-defautf-ct input-modal-defautf-ct-play" type="text" placeholder="50.000">
                                                </div>
                                            </div>


                                        </div>

                                        <div class="col-md-6 text-left body-title-detail-nick-col-ct">
                                            <div class="row marginauto password-mobile">
                                                <div class="col-md-12 left-right body-title-detail-span-ct">
                                                    <span>Trả lần 2</span>
                                                </div>
                                                <div class="col-md-12 left-right body-title-detail-select-ct" style="position: relative">
                                                    <input readonly autocomplete="off" class="input-defautf-ct" type="text" placeholder="200.000">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-12 left-right title-tra-gop">
                                    <small>Nếu bạn chưa hoàn tất thanh toán toàn bộ trước thời hạn 01/06/2022 00:00:00, giao dịch sẽ bị hủy bỏ và bạn sẽ nhận tiền hoàn lại bằng 20% số tiền trả ban đầu.</small>
                                </div>

                                <div class="col-md-12 left-right">
                                    <div class="row body-title-detail-ct">
                                        <div class="col-md-12 left-right body-title-detail-span-ct body-title-detail-col-ng-ct">
                                            <span>Mã bảo vệ</span>
                                        </div>
                                        <div class="col-auto text-left body-title-detail-col-left-ng-ct chitiet-nick-input">
                                            <div class="row marginauto">
                                                <div class="col-md-12 left-right body-title-detail-select-ct">
                                                    <input autocomplete="off" class="input-defautf-ct" type="text" placeholder="Nhập mã bảo vệ">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-auto text-left body-title-detail-col-center-ng-ct">
                                            <div class="row marginauto password-mobile capcha-image-bg">
                                                <div class="col-md-12 left-right body-title-detail-select-ct">
                                                    <img class="lazy" src="/assets/{{theme('')->theme_key}}/image/cay-thue/capcha.png" alt="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-auto text-left body-title-detail-col-right-ng-ct">
                                            <div class="row marginauto password-mobile capcha-image-bg">
                                                <div class="col-md-12 left-right body-title-detail-select-ct">
                                                    <img class="lazy" src="/assets/{{theme('')->theme_key}}/image/cay-thue/rf-capcha.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 left-right title-tra-gop-body">
                                    <span>Thông tin trả góp</span>
                                </div>

                                <div class="col-md-12 left-right padding-order-ct">
                                    <div class="row marginauto">
                                        <div class="col-md-12 left-right background-order-ct">

                                            <div class="row marginauto tragop-order-body-row-ct">
                                                <div class="col-md-12 left-right background-order-col-left-ct">
                                                    <ul id="tra-gop-scroll">
                                                        <li>Trả góp ban đầu 20% giá trị tài khoản dự kiến mua để giữ tài khoản. Áp dụng cho tài khoản trị giá từ 200.000đ trở lên.</li>
                                                        <li>Thời gian trả góp: 7 ngày. Không tính ngày xác nhận trả góp.</li>
                                                        <li>Phí trả góp: 0%</li>
                                                        <li>Trong thời gian trả góp bạn phải hoàn tất phần còn lại để giao dịch hoàn tất.</li>
                                                        <li>Trường hợp quá thời gian trả góp giao dịch của bạn sẽ tự động bị hủy bỏ và hoàn lại 20% số tiền đã góp ban đầu.Lúc này tài khoản được tự do. (Ví dụ: tài khoản cần mua trị giá 1 triệu, trả góp ban đầu 200.000đ.</li>
                                                        <li>Nếu quá thời gian giao dịch trả góp bị hủy bỏ thì bạn sẽ nhận lại 20% tức 40.000đ trong tài khoản) Quy trình giao dịch đều xử lý tự động, bạn không thể gọi hỗ trợ gia hạn thêm ngày trả góp hoặc đổi khác quy định trên.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-12 left-right padding-order-footer-ct">
                                    <div class="row marginauto">
                                        <div class="col-md-12 left-right">
                                            <button class="button-default-modal-ct openSuccess" type="button">Xác nhận</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="modal fade login show order-modal" id="successModal" aria-modal="true">

                <div class="modal-dialog step-tab-panel modal-lg modal-dialog-centered login animated">
                    <!--        <div class="image-login"></div>-->
                    <div class="modal-content">
                        <div class="modal-header p-0" style="border-bottom: 0">
                            <div class="row marginauto modal-header-order-ct">
                                <div class="col-12 span__donhang text-center" style="position: relative">
                                    <span>Mua tài khoản thành công</span>
                                    <img class="lazy img-close-ct close-modal-default" src="/assets/{{theme('')->theme_key}}/image/cay-thue/close.png" alt="">
                                </div>
                            </div>

                        </div>

                        <div class="modal-body modal-body-order-ct">
                            <div class="row marginauto">

                                <div class="col-md-12 left-right image-success">
                                    <div class="row marginauto justify-content-center">
                                        <div class="col-auto">
                                            <img class="lazy" src="/assets/{{theme('')->theme_key}}/image/cay-thue/group.png" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 left-right title-tra-gop-success">
                                    <div class="row body-title-detail-ct">
                                        <div class="col-md-12 text-left body-title-detail-col-ct">
                                            <div class="row marginauto">
                                                <div class="col-md-12 left-right body-title-detail-span-ct">
                                                    <span>Tài khoản</span>
                                                </div>
                                                <div class="col-md-12 left-right body-title-detail-select-ct email-success-nick">
                                                    <input readonly autocomplete="off" class="input-defautf-ct" id="email" type="text" value="namok@gmail.com">
                                                    <img class="lazy " src="/assets/{{theme('')->theme_key}}/image/nick/copy.png" alt="" id="getCopyemail">
                                                </div>
                                                <div class="row marginauto title-tra-gop-success-row">
                                                    <div class="col-md-12 left-right body-title-detail-span-ct">
                                                        <span>Mật khẩu</span>
                                                    </div>
                                                    <div class="col-md-12 left-right body-title-detail-select-ct taikhoan-success-nick">
                                                        <input id="password" readonly autocomplete="off" class="input-defautf-ct" type="password" value="123456" placeholder="******">
                                                        <img class="lazy img-copy" src="/assets/{{theme('')->theme_key}}/image/nick/copy.png" alt="" id="getCopypass">
                                                        <div class="getCopypass">
                                                            <img class="lazy img-show-password" src="/assets/{{theme('')->theme_key}}/image/cay-thue/eyehide.png" alt="" id="getShowpass">
                                                        </div>


                                                    </div>
                                                </div></div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-12 left-right">
                                    <div class="row body-title-detail-ct">

                                        <div class="col-md-6 text-left body-title-detail-nick-col-ct">
                                            <div class="row marginauto">
                                                <div class="col-md-12 left-right body-title-detail-span-ct">
                                                    <span>Trả trước</span>
                                                </div>
                                                <div class="col-md-12 left-right body-title-detail-select-ct">
                                                    <input readonly autocomplete="off" class="input-defautf-ct input-modal-defautf-ct-play" type="text" placeholder="50.000">
                                                </div>
                                            </div>


                                        </div>

                                        <div class="col-md-6 text-left body-title-detail-nick-col-ct">
                                            <div class="row marginauto password-mobile">
                                                <div class="col-md-12 left-right body-title-detail-span-ct">
                                                    <span>Trả lần 2</span>
                                                </div>
                                                <div class="col-md-12 left-right body-title-detail-select-ct" style="position: relative">
                                                    <input readonly autocomplete="off" class="input-defautf-ct" type="text" placeholder="200.000">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-12 left-right title-tra-gop text-center">
                                    <small>Đã lấy mật khẩu lúc: 05-05-2022, 121:32:56</small>
                                </div>

                                <div class="col-md-12 left-right padding-order-28-ct">
                                    <div class="row marginauto">
                                        <div class="col-md-12 left-right background-order-ct">
                                            <div class="row marginauto title-success-thanh-cong">
                                                <div class="col-md-12 left-right">
                                                    <span>Để tránh các trường hợp xấu xảy ra, quý khách vui lòng thêm thông tin (Email và Số điện thoại) Để đảm bảo không có vấn đề sau khi giao dịch tại shop! Xin cảm ơn!</span>
                                                </div>
                                                <div class="col-md-12 left-right padding-order-ct">
                                                    <span>Để tránh các trường hợp xấu xảy ra, quý khách vui lòng thêm thông tin (Email và Số điện thoại) Để đảm bảo không có vấn đề sau khi giao dịch tại shop! Xin cảm ơn!</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-12 left-right">
                                    <div class="row marginauto justify-content-center gallery-right-footer">
                                        <div class="col-md-6 col-6 modal-footer-success-col-left-ct">
                                            <div class="row marginauto modal-footer-success-row-not-ct">
                                                <div class="col-md-12 left-right">
                                                    <a href="javascript:void(0)" class="button-not-bg-ct close-modal-default"><span>Đóng</span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-6 modal-footer-success-col-right-ct">
                                            <div class="row marginauto modal-footer-success-row-ct">
                                                <div class="col-md-12 left-right">
                                                    <a href="/" class="button-bg-ct"><span>Đổi mật khẩu</span></a>
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

            <input type="hidden" name="previous" class="input-back-step-two" value="Trang trước"/>


        </fieldset>

        <fieldset id="fieldset-two">

            <section>
                <div class="container container-fix banner-mobile-container-ct">
                    <div class="row marginauto banner-mobile-row-ct">
                        <div class="col-auto left-right" style="width: 10%">
                            <img class="lazy previous-step-one" src="/assets/{{theme('')->theme_key}}/image/cay-thue/back.png" alt="" >
                        </div>

                        <div class="col-auto left-right banner-mobile-span text-center" style="width: 80%">
                            <h3>Xác nhận thanh toán</h3>
                        </div>
                        <div class="col-auto left-right" style="width: 10%">
                        </div>
                    </div>

                </div>
            </section>

            <section class="max-header-fix">
                <div class="row marginauto" style="padding: 12px 16px">

                    <div class="col-md-12 left-right title-order-ct">
                        <span>Thông tin acc</span>
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
                                        <img class="lazy" src="/assets/{{theme('')->theme_key}}/image/cay-thue/mobilegame.png" alt="">
                                    </div>
                                </div>

                                <div class="row marginauto background-order-body-row-ct">
                                    <div class="col-auto left-right background-order-col-left-ct">
                                        <span>Rank</span>
                                    </div>
                                    <div class="col-auto left-right background-order-col-right-ct">
                                        <small>Tinh Anh</small>
                                    </div>
                                </div>

                                <div class="row marginauto background-order-body-row-ct">
                                    <div class="col-auto left-right background-order-col-left-ct">
                                        <span>Số lượng</span>
                                    </div>
                                    <div class="col-auto left-right background-order-col-right-ct">
                                        <small>01</small>
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
                                        <span>Thành tiền</span>
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

                    <div class="col-md-12 left-right padding-order-footer-ct fixcungbuttonmobile">
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

        <fieldset id="fieldset-three">

            <section>
                <div class="container container-fix banner-mobile-container-ct">
                    <div class="row marginauto banner-mobile-row-ct">
                        <div class="col-auto left-right" style="width: 10%">
                            <img class="lazy previous-step-one-tra-gop" src="/assets/{{theme('')->theme_key}}/image/cay-thue/back.png" alt="" >
                        </div>

                        <div class="col-auto left-right banner-mobile-span text-center" style="width: 80%">
                            <h3>Xác nhận thanh toán</h3>
                        </div>
                        <div class="col-auto left-right" style="width: 10%">
                        </div>
                    </div>

                </div>
            </section>

            <section class="max-header-fix">
                <div class="row marginauto" style="padding: 12px 16px">

                    <div class="col-md-12 left-right title-order-ct">
                        <span>Thông tin tài khoản #521479</span>
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
                                <div class="row marginauto background-order-body-row-ct">
                                    <div class="col-auto left-right background-order-col-left-ct">
                                        <span>Nhà phát hành</span>
                                    </div>
                                    <div class="col-auto left-right background-order-col-right-ct">
                                        <img class="lazy" src="/assets/{{theme('')->theme_key}}/image/nick/zing.png" alt="">
                                    </div>
                                </div>

                                <div class="row marginauto background-order-body-row-ct">
                                    <div class="col-auto left-right background-order-col-left-ct">
                                        <span>Tên game</span>
                                    </div>
                                    <div class="col-auto left-right background-order-col-right-ct">
                                        <small>Ngọc rồng</small>
                                    </div>
                                </div>

                                <div class="row marginauto background-order-body-row-ct">
                                    <div class="col-auto left-right background-order-col-left-ct">
                                        <span>Số lượng</span>
                                    </div>
                                    <div class="col-auto left-right background-order-col-right-ct">
                                        <small>01</small>
                                    </div>
                                </div>

                                <div class="row marginauto background-order-body-bottom-ct">
                                    <div class="col-auto left-right background-order-col-left-ct">
                                        <span>Tổng tiền</span>
                                    </div>
                                    <div class="col-auto left-right background-order-col-right-ct">
                                        <small>250.000 đ</small>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-12 left-right title-tra-gop">
                        <span>Thông tin trả góp</span>
                    </div>

                    <div class="col-md-12 left-right">
                        <div class="row body-title-detail-ct">

                            <div class="col-md-6 text-left body-title-detail-nick-col-ct">
                                <div class="row marginauto">
                                    <div class="col-md-12 left-right body-title-detail-span-ct">
                                        <span>Trả trước</span>
                                    </div>
                                    <div class="col-md-12 left-right body-title-detail-select-ct">
                                        <input readonly autocomplete="off" class="input-defautf-ct input-modal-defautf-ct-play" type="text" placeholder="50.000">
                                    </div>
                                </div>


                            </div>

                            <div class="col-md-6 text-left body-title-detail-nick-col-ct">
                                <div class="row marginauto password-mobile">
                                    <div class="col-md-12 left-right body-title-detail-span-ct">
                                        <span>Trả lần 2</span>
                                    </div>
                                    <div class="col-md-12 left-right body-title-detail-select-ct" style="position: relative">
                                        <input readonly autocomplete="off" class="input-defautf-ct" type="text" placeholder="200.000">
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
                            <div class="col-auto text-left body-title-detail-col-left-ng-ct chitiet-nick-input">
                                <div class="row marginauto">
                                    <div class="col-md-12 left-right body-title-detail-select-ct">
                                        <input autocomplete="off" class="input-defautf-ct" type="text" placeholder="Nhập mã bảo vệ">
                                    </div>
                                </div>
                            </div>

                            <div class="col-auto text-left body-title-detail-col-center-ng-ct">
                                <div class="row marginauto password-mobile capcha-image-bg">
                                    <div class="col-md-12 left-right body-title-detail-select-ct">
                                        <img class="lazy" src="/assets/{{theme('')->theme_key}}/image/cay-thue/capcha.png" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-auto text-left body-title-detail-col-right-ng-ct">
                                <div class="row marginauto password-mobile capcha-image-bg">
                                    <div class="col-md-12 left-right body-title-detail-select-ct">
                                        <img class="lazy" src="/assets/{{theme('')->theme_key}}/image/cay-thue/rf-capcha.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12 left-right padding-order-ct">
                        <div class="row marginauto">
                            <div class="col-md-12 left-right background-order-ct">
                                <div class="row marginauto thong-tin-tra-gop-mobile">
                                    <div class="col-6 left-right">
                                        <span>Quy định trả góp</span>
                                    </div>
                                    <div class="col-auto left-right data-scroll-mobile">
                                        <div class="row marginauto up-scroll-mobile"><div class="col-auto left-right"><img class="lazy" src="/assets/{{theme('')->theme_key}}/image/nick/up.png" alt=""></div></div>
                                    </div>
                                </div>
                                <div class="row marginauto tragop-order-body-row-ct">
                                    <div class="col-md-12 left-right background-order-col-left-ct">
                                        <ul id="tra-gop-scroll-mobile">
                                            <li>Trả góp ban đầu 20% giá trị tài khoản dự kiến mua để giữ tài khoản. Áp dụng cho tài khoản trị giá từ 200.000đ trở lên.</li>
                                            <li>Thời gian trả góp: 7 ngày. Không tính ngày xác nhận trả góp.</li>
                                            <li>Phí trả góp: 0%</li>
                                            <li>Trong thời gian trả góp bạn phải hoàn tất phần còn lại để giao dịch hoàn tất.</li>
                                            <li>Trường hợp quá thời gian trả góp giao dịch của bạn sẽ tự động bị hủy bỏ và hoàn lại 20% số tiền đã góp ban đầu.Lúc này tài khoản được tự do. (Ví dụ: tài khoản cần mua trị giá 1 triệu, trả góp ban đầu 200.000đ.</li>
                                            <li>Nếu quá thời gian giao dịch trả góp bị hủy bỏ thì bạn sẽ nhận lại 20% tức 40.000đ trong tài khoản) Quy trình giao dịch đều xử lý tự động, bạn không thể gọi hỗ trợ gia hạn thêm ngày trả góp hoặc đổi khác quy định trên.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-12 left-right padding-order-footer-ct">
                        <div class="row marginauto">
                            <div class="col-md-12 left-right">
                                <button class="button-default-ct button-next-step-two-tra-gop" type="button">Xác nhận</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <input type="hidden" name="previous" class="input-back-step-two-tra-gop" value="Trang trước"/>

        </fieldset>

    </form>

    <script src="/assets/{{theme('')->theme_key}}/js/nick/nick-detail.js?v={{time()}}"></script>
@endsection






