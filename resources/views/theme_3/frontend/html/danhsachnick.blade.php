@extends('frontend.layouts.master')

@section('content')
    {{--  Header mobile  --}}
    <section class="media-mobile">
        <div class="container container-fix banner-mobile-container-ct">

            <div class="row marginauto banner-mobile-row-ct">
                <div class="col-auto left-right" style="width: 10%">
                    <a href="" class="previous-step-one" style="line-height: 28px">
                        <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/back.png" alt="" >
                    </a>
                </div>

                <div class="col-auto left-right banner-mobile-span text-center" style="width: 80%">
                    <h3>Nạp tài khoản game</h3>
                </div>
                <div class="col-auto left-right" style="width: 10%">
                </div>
            </div>

        </div>
    </section>

    {{--    Banner--}}
    <section class="media-web">
        <div class="container container-fix banner-container-ct">
            <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/banner-home.png" alt="">
        </div>
    </section>
    {{--  Menu  --}}
    <section class="media-web">
        <div class="container container-fix menu-container-ct">
            <ul>
                <li><a href="">Trang chủ</a></li>
                <li class="menu-container-li-ct"><img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/arrow-right.png" alt=""></li>
                <li class="menu-container-li-ct"><a href="">Danh mục Shop Account</a></li>
            </ul>
        </div>
    </section>

    {{--   Bopđyy --}}
    <section>
        <div class="container container-fix body-container-ct">
            <div class="row marginauto body-container-row-ct body-container-row-mobile-ct">
                <div class="col-md-12 left-right">
                    <div class="row marginauto body-row-ct">

                        <div class="col-md-12 left-right">
                            <div class="row marginauto body-header-ct">
                                <div class="col-auto left-right">
                                    <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/caythue.png" alt="">
                                </div>
                                <div class="col-md-10 col-10 body-header-col-ct">
                                    <h3>Danh sách Nick Liên quân Mobile</h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 left-right media-mobile">
                            <div class="row marginauto banner-container-ct">
                                <div class="col-md-12 text-left left-right">
                                    <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/banner-home.png" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 left-right">
                            <div class="row marginauto body-search-ct">
                                <div class="col-md-12 text-left left-right">
                                    <span>Tìm kiếm</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 left-right media-web">

                            <div class="row marginauto">
                                <div class="col-12 left-right">
                                    <form action="" method="POST">
                                        <div class="row marginauto body-form-search-ct">
                                            <div class="col-auto left-right">
                                                <input autocomplete="off" type="text" name="search" class="input-search-ct" placeholder="Nhập từ khóa">
                                                <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/search.png" alt="">
                                            </div>
                                            <div class="col-4 body-form-search-button-ct">
                                                <button type="submit" class="timkiem-button-ct">Tìm kiếm</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-12 left-right">
                                    <div class="row marginauto nick-findter-data nick-findter-row justify-content-end">
                                        <div class="col-auto prepend-nick" style="position: relative"><a href="">Từ 500K - 1 Triệu</a><img class="lazy close-item-nick" src="/assets/frontend/{{theme('')->theme_key}}/image/nick/close.png" alt=""></div>

                                        <div class="col-auto nick-findter" style="position: relative">
                                            <ul>
                                                <li>Bộ lọc</li>
                                                <li class="margin-findter"><img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/nick/filter.png" alt=""></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-12 left-right media-mobile">
                            <div class="row marginauto">
                                <div class="col-10 left-right">
                                    <form action="" method="POST">
                                        <div class="row marginauto body-form-search-ct">
                                            <div class="col-12 left-right">
                                                <input autocomplete="off" type="text" name="search-mobile" class="input-search-ct" placeholder="Nhập từ khóa">
                                                <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/search.png" alt="">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-auto left-right nick-findter">
                                    <ul>
                                        <li>Bộ lọc</li>
                                        <li><img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/nick/filter.png" alt=""></li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-12 left-right">
                            <div class="row marginauto body-detail-ct">
                                <div class="col-md-12 text-left left-right">
                                    <div class="row body-detail-row-ct">

                                        <div class="col-auto body-detail-account-col-ct">
                                            <div class="row marginauto">
                                                <div class="col-md-12 left-right default-overlay-ct">
                                                    <a href="">
                                                        <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/account/lienquan.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-md-12 left-right text-left body-detail-account-col-span-ct">
                                                    <a href="">
                                                        <span>Liên quân Mobile</span>
                                                    </a>
                                                </div>
                                                <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                    <small>Số tài khoản: 40k</small>
                                                </div>
                                                <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                    <small>Đã bán: 40k</small>
                                                </div>
                                                <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                    <ul>
                                                        <li class="fist-li-account">15.000đ</li>
                                                        <li class="second-li-account">30.000đ</li>
                                                        <li class="three-li-account">-50%</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-auto body-detail-account-col-ct">
                                            <div class="row marginauto">
                                                <div class="col-md-12 left-right default-overlay-ct">
                                                    <a href="">
                                                        <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/account/freefire.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-md-12 left-right text-left body-detail-account-col-span-ct">
                                                    <a href="">
                                                        <span>Liên quân Mobile</span>
                                                    </a>
                                                </div>
                                                <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                    <small>Số tài khoản: 40k</small>
                                                </div>
                                                <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                    <small>Đã bán: 40k</small>
                                                </div>
                                                <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                    <ul>
                                                        <li class="fist-li-account">15.000đ</li>
                                                        <li class="second-li-account">30.000đ</li>
                                                        <li class="three-li-account">-50%</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-auto body-detail-account-col-ct">
                                            <div class="row marginauto">
                                                <div class="col-md-12 left-right default-overlay-ct">
                                                    <a href="">
                                                        <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/account/pubg.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-md-12 left-right text-left body-detail-account-col-span-ct">
                                                    <a href="">
                                                        <span>Liên quân Mobile</span>
                                                    </a>
                                                </div>
                                                <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                    <small>Số tài khoản: 40k</small>
                                                </div>
                                                <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                    <small>Đã bán: 40k</small>
                                                </div>
                                                <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                    <ul>
                                                        <li class="fist-li-account">15.000đ</li>
                                                        <li class="second-li-account">30.000đ</li>
                                                        <li class="three-li-account">-50%</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-auto body-detail-account-col-ct">
                                            <div class="row marginauto">
                                                <div class="col-md-12 left-right default-overlay-ct">
                                                    <a href="">
                                                        <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/account/tocchien.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-md-12 left-right text-left body-detail-account-col-span-ct">
                                                    <a href="">
                                                        <span>Liên quân Mobile</span>
                                                    </a>
                                                </div>
                                                <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                    <small>Số tài khoản: 40k</small>
                                                </div>
                                                <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                    <small>Đã bán: 40k</small>
                                                </div>
                                                <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                    <ul>
                                                        <li class="fist-li-account">15.000đ</li>
                                                        <li class="second-li-account">30.000đ</li>
                                                        <li class="three-li-account">-50%</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-auto body-detail-account-col-ct">
                                            <div class="row marginauto">
                                                <div class="col-md-12 left-right default-overlay-ct">
                                                    <a href="">
                                                        <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/account/lmht.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-md-12 left-right text-left body-detail-account-col-span-ct">
                                                    <a href="">
                                                        <span>Liên quân Mobile</span>
                                                    </a>
                                                </div>
                                                <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                    <small>Số tài khoản: 40k</small>
                                                </div>
                                                <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                    <small>Đã bán: 40k</small>
                                                </div>
                                                <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                    <ul>
                                                        <li class="fist-li-account">15.000đ</li>
                                                        <li class="second-li-account">30.000đ</li>
                                                        <li class="three-li-account">-50%</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-auto body-detail-account-col-ct">
                                            <div class="row marginauto">
                                                <div class="col-md-12 left-right default-overlay-ct">
                                                    <a href="">
                                                        <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/account/autochet.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-md-12 left-right text-left body-detail-account-col-span-ct">
                                                    <a href="">
                                                        <span>Liên quân Mobile</span>
                                                    </a>
                                                </div>
                                                <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                    <small>Số tài khoản: 40k</small>
                                                </div>
                                                <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                    <small>Đã bán: 40k</small>
                                                </div>
                                                <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                    <ul>
                                                        <li class="fist-li-account">15.000đ</li>
                                                        <li class="second-li-account">30.000đ</li>
                                                        <li class="three-li-account">-50%</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-auto body-detail-account-col-ct">
                                            <div class="row marginauto">
                                                <div class="col-md-12 left-right default-overlay-ct">
                                                    <a href="">
                                                        <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/account/lienquan.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-md-12 left-right text-left body-detail-account-col-span-ct">
                                                    <a href="">
                                                        <span>Liên quân Mobile</span>
                                                    </a>
                                                </div>
                                                <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                    <small>Số tài khoản: 40k</small>
                                                </div>
                                                <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                    <small>Đã bán: 40k</small>
                                                </div>
                                                <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                    <ul>
                                                        <li class="fist-li-account">15.000đ</li>
                                                        <li class="second-li-account">30.000đ</li>
                                                        <li class="three-li-account">-50%</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-auto body-detail-account-col-ct">
                                            <div class="row marginauto">
                                                <div class="col-md-12 left-right default-overlay-ct">
                                                    <a href="">
                                                        <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/account/freefire.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-md-12 left-right text-left body-detail-account-col-span-ct">
                                                    <a href="">
                                                        <span>Liên quân Mobile</span>
                                                    </a>
                                                </div>
                                                <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                    <small>Số tài khoản: 40k</small>
                                                </div>
                                                <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                    <small>Đã bán: 40k</small>
                                                </div>
                                                <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                    <ul>
                                                        <li class="fist-li-account">15.000đ</li>
                                                        <li class="second-li-account">30.000đ</li>
                                                        <li class="three-li-account">-50%</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-auto body-detail-account-col-ct">
                                            <div class="row marginauto">
                                                <div class="col-md-12 left-right default-overlay-ct">
                                                    <a href="">
                                                        <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/account/pubg.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-md-12 left-right text-left body-detail-account-col-span-ct">
                                                    <a href="">
                                                        <span>Liên quân Mobile</span>
                                                    </a>
                                                </div>
                                                <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                    <small>Số tài khoản: 40k</small>
                                                </div>
                                                <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                    <small>Đã bán: 40k</small>
                                                </div>
                                                <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                    <ul>
                                                        <li class="fist-li-account">15.000đ</li>
                                                        <li class="second-li-account">30.000đ</li>
                                                        <li class="three-li-account">-50%</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-auto body-detail-account-col-ct">
                                            <div class="row marginauto">
                                                <div class="col-md-12 left-right default-overlay-ct">
                                                    <a href="">
                                                        <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/account/tocchien.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-md-12 left-right text-left body-detail-account-col-span-ct">
                                                    <a href="">
                                                        <span>Liên quân Mobile</span>
                                                    </a>
                                                </div>
                                                <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                    <small>Số tài khoản: 40k</small>
                                                </div>
                                                <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                    <small>Đã bán: 40k</small>
                                                </div>
                                                <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                    <ul>
                                                        <li class="fist-li-account">15.000đ</li>
                                                        <li class="second-li-account">30.000đ</li>
                                                        <li class="three-li-account">-50%</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-auto body-detail-account-col-ct">
                                            <div class="row marginauto">
                                                <div class="col-md-12 left-right default-overlay-ct">
                                                    <a href="">
                                                        <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/account/lmht.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-md-12 left-right text-left body-detail-account-col-span-ct">
                                                    <a href="">
                                                        <span>Liên quân Mobile</span>
                                                    </a>
                                                </div>
                                                <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                    <small>Số tài khoản: 40k</small>
                                                </div>
                                                <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                    <small>Đã bán: 40k</small>
                                                </div>
                                                <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                    <ul>
                                                        <li class="fist-li-account">15.000đ</li>
                                                        <li class="second-li-account">30.000đ</li>
                                                        <li class="three-li-account">-50%</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-auto body-detail-account-col-ct">
                                            <div class="row marginauto">
                                                <div class="col-md-12 left-right default-overlay-ct">
                                                    <a href="">
                                                        <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/account/autochet.png" alt="">
                                                    </a>
                                                </div>
                                                <div class="col-md-12 left-right text-left body-detail-account-col-span-ct">
                                                    <a href="">
                                                        <span>Liên quân Mobile</span>
                                                    </a>
                                                </div>
                                                <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                    <small>Số tài khoản: 40k</small>
                                                </div>
                                                <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                    <small>Đã bán: 40k</small>
                                                </div>
                                                <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                    <ul>
                                                        <li class="fist-li-account">15.000đ</li>
                                                        <li class="second-li-account">30.000đ</li>
                                                        <li class="three-li-account">-50%</li>
                                                    </ul>
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

    <section class="section-footer">
        <div class="container container-fix body-container-ct">
            <div class="row marginauto body-container-row-ct">
                <div class="col-md-12 left-right">
                    <div class="row marginauto body-row-ct footer-row-ct">
                        <div class="col-md-12 left-right">
                            <span>Chi tiết dịch vụ</span>
                        </div>
                        <div class="col-md-12 left-right footer-row-col-ct content-video-in">
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
                                Xem thêm <img src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/jump-down.png" alt="">
                            </div>
                            <div class="view-less">
                                Thu gọn <img src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/jump-down-down.png" alt="">
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="modal fade login show order-modal" id="openFinter" aria-modal="true">

        <div class="modal-dialog step-tab-panel modal-lg modal-dialog-centered login animated">
            <!--        <div class="image-login"></div>-->
            <div class="modal-content">
                <div class="modal-header p-0" style="border-bottom: 0">
                    <div class="row marginauto modal-header-nick-ct">
                        <div class="col-12 left-right text-left" style="position: relative">
                            <span>Bộ lọc</span>
                            <img class="lazy img-close-nick-ct" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/close.png" alt="">
                        </div>
                    </div>

                </div>

                <div class="modal-body modal-body-order-ct">
                    <form action="">
                        <div class="row marginauto">

                            <div class="col-md-12 left-right">
                                <div class="row marginauto">
                                    <div class="col-12 left-right background-nick-col-top-ct">
                                        <small>Mã số</small>
                                    </div>
                                    <div class="col-12 left-right background-nick-col-bottom-ct">
                                        <input autocomplete="off" class="input-defautf-ct id" type="text" placeholder="Nhập mã số">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 left-right modal-nick-padding">
                                <div class="row marginauto">
                                    <div class="col-12 left-right background-nick-col-top-ct">
                                        <small>Giá tiền</small>
                                    </div>
                                    <div class="col-12 left-right background-nick-col-bottom-ct price-finter-nick">
                                        <select class="wide" name="price">
                                            <option value="">Chọn giá tiền</option>
                                            <option value="0-50000">Dưới 50K</option>
                                            <option value="50000-200000">Từ 50K - 200K</option>
                                            <option value="200000-500000">Từ 200K - 500K</option>
                                            <option value="500000-1000000">Từ 500K - 1 Triệu</option>
                                            <option value="1000000-5000000">Trên 1 Triệu</option>
                                            <option value="5000000-10000000">Trên 5 Triệu</option>
                                            <option value="10000000">Trên 10 Triệu</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 left-right modal-nick-padding">
                                <div class="row marginauto">
                                    <div class="col-12 left-right background-nick-col-top-ct">
                                        <small>Trạng thái</small>
                                    </div>
                                    <div class="col-12 left-right background-nick-col-bottom-ct status-finter-nick">
                                        <select class="wide" name="status">
                                            <option value="">Chưa bán</option>
                                            <option value="3">Đã bán</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 left-right modal-nick-padding">
                                <div class="row marginauto">
                                    <div class="col-12 left-right background-nick-col-top-ct">
                                        <small>Rank</small>
                                    </div>
                                    <div class="col-12 left-right background-nick-col-bottom-ct rank-finter-nick">
                                        <select class="wide" name="select">
                                            <option value="">Chọn rank</option>
                                            <option value="3">Vàng 4</option>
                                            <option value="4">Vàng 5</option>
                                            <option value="5">Vàng 6</option>
                                            <option value="5">Vàng 7</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12 left-right modal-nick-padding">
                                <div class="row marginauto">
                                    <div class="col-auto left-right background-nick-select-left-ct">
                                        <small>Ngọc 90</small>
                                    </div>
                                    <div class="col-auto left-right background-nick-select-right-ct">
                                        <div class="default-select-ratio">
                                            <div class="switch">
                                                <input id="gem" name="switch" type="checkbox" value="1" data-title="Ngọc 90" class="switch-input videoFind" >
                                                <label for="gem" class="switch-label">Switch</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12 left-right modal-nick-padding">
                                <div class="row marginauto">
                                    <div class="col-auto left-right background-nick-select-left-ct">
                                        <small>Nick có tướng trong đá quý</small>
                                    </div>
                                    <div class="col-auto left-right background-nick-select-right-ct">
                                        <div class="default-select-ratio">
                                            <div class="switch">
                                                <input id="hero" name="switch" type="checkbox" data-title="Nick có tướng trong đá quý" value="1" class="switch-input videoFind" >
                                                <label for="hero" class="switch-label">Switch</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 left-right modal-nick-padding">
                                <div class="row marginauto">
                                    <div class="col-auto left-right background-nick-select-left-ct">
                                        <small>Nick có trang phục trong đá quý</small>
                                    </div>
                                    <div class="col-auto left-right background-nick-select-right-ct">
                                        <div class="default-select-ratio">
                                            <div class="switch">
                                                <input checked id="skill" name="switch" type="checkbox" data-title="Nick có trang phục trong đá quý" value="1" class="switch-input videoFind" >
                                                <label for="skill" class="switch-label">Switch</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 left-right padding-nicks-footer-ct">

                                <div class="row marginauto justify-content-center">
                                    <div class="col-md-6 col-6 modal-footer-success-col-left-ct">
                                        <div class="row marginauto modal-footer-success-row-not-ct">
                                            <div class="col-md-12 left-right">
                                                <a href="/" class="button-not-bg-ct"><span>Về trang chủ</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-6 modal-footer-success-col-right-ct">
                                        <div class="row marginauto">
                                            <div class="col-md-12 left-right">
                                                <button class="button-default-modal-ct button-modal-nick openSuccess" type="button">Xác nhận</button>
                                            </div>
                                        </div>
{{--                                        <div class="row marginauto modal-footer-success-row-ct">--}}
{{--                                            <div class="col-md-12 left-right">--}}
{{--                                                <a href="/" class="button-bg-ct"><span>Hỗ Trợ</span></a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>



                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>

    <script src="/assets/frontend/{{theme('')->theme_key}}/js/nick/nick.js?v={{time()}}"></script>
@endsection





