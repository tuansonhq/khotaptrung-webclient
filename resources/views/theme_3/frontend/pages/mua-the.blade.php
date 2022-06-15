@extends('frontend.layouts.master')
@section('scripts')
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/js_trong/script_trong.js"></script>
@endsection
@section('content')
    <div class="container-fix container">
        <ul class="breadcrum--list">
            <li class="breadcrum--item">
                <a href="/" class="breadcrum--link">Trang chủ</a>
            </li>
            <li class="breadcrum--item">
                <a href="/mua-the" class="breadcrum--link">Mua thẻ</a>
            </li>
            <li class="breadcrum--item">
                <a href="" class="breadcrum--link">Thẻ game</a>
            </li>
        </ul>
        <div class="content__wrap" id="content-store-card">
            <div class="row" id="screen--first">
                <div class="col-12 col-lg-12 col-xl-8 px-lg-3 section--type__card">
                    <div class="card--mobile__title">
                        <a href="" class="card--back">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/back.png" alt="">
                        </a>
                        <h4>Mua thẻ</h4>
                    </div>
                    <div class="card --custom mb-lg-3">
                        <div class="card--header">
                            <div class="card--header__title">
                                <div class="title__icon"><img
                                        src="/assets/frontend/{{theme('')->theme_key}}/image/icons/credit_card.png" alt=""></div>
                                <h4>Mua thẻ</h4>
                            </div>
                        </div>
                        <div class="card--body">
                            <ul class="nav nav-tabs tabs--cards" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="card-game-tab" data-toggle="tab" href="#card-game"
                                       role="tab" aria-controls="card-game" aria-selected="true">Thẻ game</a>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="card-phone-tab" data-toggle="tab" href="#card-phone"
                                       role="tab"
                                       aria-controls="card-phone" aria-selected="false">Thẻ điện thoại</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab--title">Chọn loại thẻ</div>
                                <div class="tab-pane fade show active" id="card-game" role="tabpanel" aria-labelledby="card-game-tab">
                                    <ul class="cards__list row">
                                        <li class="cards__item col-4 col-lg-2 p_0">
                                            <input type="radio" id="card-zing" name="card-type" checked hidden>
                                            <label for="card-zing">
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/cards-logo/zing.png"
                                                     class="card--logo"
                                                     alt="card-zing">
                                            </label>
                                        </li>

                                        <li class="cards__item col-4 col-lg-2 p_0">
                                            <input type="radio" id="card-gate" name="card-type" hidden>
                                            <label for="card-gate">
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/cards-logo/gate.png"
                                                     class="card--logo"
                                                     alt="card-gate">
                                            </label>
                                        </li>
                                        <li class="cards__item col-4 col-lg-2 p_0">
                                            <input type="radio" id="card-garena" name="card-type" hidden>
                                            <label for="card-garena">
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/cards-logo/garena.png"
                                                     class="card--logo" alt="card-garena">
                                            </label>
                                        </li>
                                        <li class="cards__item col-4 col-lg-2 p_0">
                                            <input type="radio" id="card-vcoin" name="card-type" hidden>
                                            <label for="card-vcoin">
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/cards-logo/vcoin.png"
                                                     class="card--logo"
                                                     alt="card-vcoin">
                                            </label>
                                        </li>
                                        <li class="cards__item col-4 col-lg-2 p_0">
                                            <input type="radio" id="card-bit" name="card-type" hidden>
                                            <label for="card-bit">
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/cards-logo/bit.png"
                                                     class="card--logo"
                                                     alt="card-bit">
                                            </label>
                                        </li>
                                        <li class="cards__item col-4 col-lg-2 p_0">
                                            <input type="radio" id="card-ongame" name="card-type" hidden>
                                            <label for="card-ongame">
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/cards-logo/ongame.png"
                                                     class="card--logo" alt="card-ongame">
                                            </label>
                                        </li>
                                        <li class="cards__item col-4 col-lg-2 p_0">
                                            <input type="radio" id="card-scoin" name="card-type" hidden>
                                            <label for="card-scoin">
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/cards-logo/scoin.png"
                                                     class="card--logo"
                                                     alt="card-scoin">
                                            </label>
                                        </li>
                                        <li class="cards__item col-4 col-lg-2 p_0">
                                            <input type="radio" id="card-appota" name="card-type" hidden>
                                            <label for="card-appota">
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/cards-logo/appota.png"
                                                     class="card--logo" alt="card-appota">
                                            </label>
                                        </li>
                                        <li class="cards__item col-4 col-lg-2 p_0">
                                            <input type="radio" id="card-funcard" name="card-type" hidden>
                                            <label for="card-funcard">
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/cards-logo/funcard.png"
                                                     class="card--logo" alt="card-funcard">
                                            </label>
                                        </li>
                                        <li class="cards__item col-4 col-lg-2 p_0">
                                            <input type="radio" id="card-sohacoin" name="card-type" hidden>
                                            <label for="card-sohacoin">
                                                <img
                                                    src="/assets/frontend/{{theme('')->theme_key}}/image/cards-logo/sohacoin.png"
                                                    class="card--logo" alt="card-sohacoin">
                                            </label>
                                        </li>
                                        <li class="cards__item col-4 col-lg-2 p_0">
                                            <input type="radio" id="card-kulgame" name="card-type" hidden>
                                            <label for="card-kulgame">
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/cards-logo/kulgame.png"
                                                     class="card--logo" alt="card-kulgame">
                                            </label>
                                        </li>
                                        <li class="cards__item col-4 col-lg-2 p_0">
                                            <input type="radio" id="card-gosu" name="card-type" hidden>
                                            <label for="card-gosu">
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/cards-logo/gosu.png"
                                                     class="card--logo"
                                                     alt="card-gosu">
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="card-phone" role="tabpanel" aria-labelledby="card-phone-tab">
                                    <ul class="cards__list row">
                                        <li class="cards__item col-4 col-lg-2 p_0">
                                            <input type="radio" id="card-viettel" name="card-type" hidden>
                                            <label for="card-viettel">
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/cards-logo/viettel.png"
                                                     class="card--logo"
                                                     alt="card-viettel">
                                            </label>
                                        </li>
                                        <li class="cards__item col-4 col-lg-2 p_0">
                                            <input type="radio" id="card-mobifone" name="card-type" hidden>
                                            <label for="card-mobifone">
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/cards-logo/mobifone.png"
                                                     class="card--logo"
                                                     alt="card-mobifone">
                                            </label>
                                        </li>
                                        <li class="cards__item col-4 col-lg-2 p_0">
                                            <input type="radio" id="card-gmobile" name="card-type" hidden>
                                            <label for="card-gmobile">
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/cards-logo/gmobile.png"
                                                     class="card--logo" alt="card-gmobile">
                                            </label>
                                        </li>
                                        <li class="cards__item col-4 col-lg-2 p_0">
                                            <input type="radio" id="card-vinaphone" name="card-type" hidden>
                                            <label for="card-vinaphone">
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/cards-logo/vinaphone.png"
                                                     class="card--logo" alt="card-vinaphone">
                                            </label>
                                        </li>
                                        <li class="cards__item col-4 col-lg-2 p_0">
                                            <input type="radio" id="card-vietnammobile" name="card-type" hidden>
                                            <label for="card-vietnammobile">
                                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/cards-logo/vietnammobile.png"
                                                     class="card--logo" alt="card-vietnammobile">
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card --custom mt-lg-1 card--desc hidden-mobile">
                        <div class="card--body">
                            <div class="card--desc__title">Mô tả dịch vụ</div>
                            <div class="card--desc__content content-video-in-add">
                                <h4>Thẻ Garena là gì ?</h4>
                                Thẻ Garena (thẻ sò) là một loại thẻ game được phát hành bởi Garena. Đây là một nhà phát
                                hành game dù ra đời muộn hơn so với các nhà phát hành game lâu đời tại Việt Nam như FPT
                                Gate, Vinagame, VTC,… nhưng cộng đồng Garena lại vô cùng đông đảo bởi NPH liên tục ra
                                mắt những tựa game vô cùng hấp dẫn như Liên Minh Huyền Thoại; Chiến Cơ Huyền Thoại; Fifa
                                online 3,4; Free Fire, Balde and Soul,... Để phục vụ game thủ nhà phát hành này đã tạo
                                ra loại thẻ của riêng họ gọi là thẻ Garena.
                                <h4>1. Những hình thức mua thẻ Garena thông dụng hiện nay</h4>
                                Như những gì chúng ta đã khẳng định, thế giới thẻ game online ngày một đa dạng trước sự
                                ra đời của nhiều thể loại game trực tuyến, vì vậy lẽ dĩ nhiên bạn sẽ có nhiều phương
                                pháp mua thẻ game và đặc biệt là thẻ Garena. Để chọn sử dụng lấy một hình thức thuận
                                tiện mỗi khi cần. Sau đây, thegarenagiare.com sẽ gửi tới bạn một số cách thức mua thẻ
                                game phổ biến và mang lại hiệu quả phục vụ người dùng tốt nhất. online 3,4; Free Fire, Balde and Soul,... Để phục vụ game thủ nhà phát hành này đã tạo
                                ra loại thẻ của riêng họ gọi là thẻ Garena.

                            </div>
                            <div class="col-md-12 left-right text-center js-toggle-content">
                                <div class="view-more">
                                    <span class="global__link">Xem thêm<i class="__icon --sm --link ml-1" style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/icons/arrow-down.png)"></i></span>
                                </div>
                                <div class="view-less">
                                    <span class="global__link">Thu gọn<i class="__icon --sm --link ml-1" style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/icons/iconright.png)"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-xl-4  pl-lg-1 mb_1 section--amount__card">
                    <div class="card --custom">
                        <div class="card--body">
                            <div class="denos--wrap">
                                <div class="denos--title">
                                    Chọn mệnh giá
                                </div>
                                <ul class="deno__list row">
                                    <li class="deno__item col-4 col-lg-4">
                                        <input type="radio" id="card-10" name="card-value" checked hidden>
                                        <label for="card-10" class="deno__value">
                                            <span>10.000 đ</span>
                                        </label>
                                    </li>
                                    <li class="deno__item col-4 col-lg-4">
                                        <input type="radio" id="card-20" name="card-value" hidden>
                                        <label for="card-20" class="deno__value">
                                            <span>20.000 đ</span>
                                        </label>
                                    </li>
                                    <li class="deno__item col-4 col-lg-4">
                                        <input type="radio" id="card-30" name="card-value" hidden>
                                        <label for="card-30" class="deno__value">
                                            <span>30.000 đ</span>
                                        </label>
                                    </li>
                                    <li class="deno__item col-4 col-lg-4">
                                        <input type="radio" id="card-50" name="card-value" hidden>
                                        <label for="card-50" class="deno__value">
                                            <span>50.000 đ</span>
                                        </label>
                                    </li>
                                    <li class="deno__item col-4 col-lg-4">
                                        <input type="radio" id="card-100" name="card-value" hidden>
                                        <label for="card-100" class="deno__value">
                                            <span>100.000 đ</span>
                                        </label>
                                    </li>
                                    <li class="deno__item col-4 col-lg-4">
                                        <input type="radio" id="card-200" name="card-value" hidden>
                                        <label for="card-200" class="deno__value">
                                            <span>200.000 đ</span>
                                        </label>
                                    </li>
                                    <li class="deno__item col-4 col-lg-4">
                                        <input type="radio" id="card-300" name="card-value" hidden>
                                        <label for="card-300" class="deno__value">
                                            <span>300.000 đ</span>
                                        </label>
                                    </li>
                                    <li class="deno__item col-4 col-lg-4">
                                        <input type="radio" id="card-500" name="card-value" hidden>
                                        <label for="card-500" class="deno__value">
                                            <span>500.000 đ</span>
                                        </label>
                                    </li>

                                </ul>
                                <div class="card--amount">
                                    <span class="card--amount__title">
                                        Số lượng thẻ
                                    </span>
                                    <div class="card--amount__group">
                                        <button class="btn--amount -minus js-amount" data-action="minus">
                                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/minus.png" alt="">
                                        </button>
                                        <input type="text" name="card-amount" class="input--amount" value="1" numberic>
                                        <button class="btn--amount -add js-amount" data-action="add">
                                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/add.png" alt="">
                                        </button>
                                    </div>
                                </div>
                                <div class="discount">
                                    <span class="discount--title">
                                        Chiết khấu
                                    </span>
                                    <span class="discount--value">
                                        3%
                                    </span>
                                </div>
                                <div class="price--total">
                                    <span class="price--total__title">
                                        Thành tiền
                                    </span>
                                    <span class="price--total__value">
                                        97.000 đ
                                    </span>
                                </div>
                                <button type="button" class="btn -primary btn-big js_step" data-go_to="step2" data-toggle="modal" data-target="#modal--confirm__payment" id="btn-confirm">Chọn mua</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 section--description__card">
                    <div class="card --custom">
                        <div class="card--body">
                            <div class="card--desc__title">Mô tả dịch vụ</div>
                            <div class="card--desc__content content-video-in-add">
                                <h4>Thẻ Garena là gì ?</h4>
                                Thẻ Garena (thẻ sò) là một loại thẻ game được phát hành bởi Garena. Đây là một nhà phát
                                hành game dù ra đời muộn hơn so với các nhà phát hành game lâu đời tại Việt Nam như FPT
                                Gate, Vinagame, VTC,… nhưng cộng đồng Garena lại vô cùng đông đảo bởi NPH liên tục ra
                                mắt những tựa game vô cùng hấp dẫn như Liên Minh Huyền Thoại; Chiến Cơ Huyền Thoại; Fifa
                                online 3,4; Free Fire, Balde and Soul,... Để phục vụ game thủ nhà phát hành này đã tạo
                                ra loại thẻ của riêng họ gọi là thẻ Garena.
                                <h4>1. Những hình thức mua thẻ Garena thông dụng hiện nay</h4>
                                Như những gì chúng ta đã khẳng định, thế giới thẻ game online ngày một đa dạng trước sự
                                ra đời của nhiều thể loại game trực tuyến, vì vậy lẽ dĩ nhiên bạn sẽ có nhiều phương
                                pháp mua thẻ game và đặc biệt là thẻ Garena. Để chọn sử dụng lấy một hình thức thuận
                                tiện mỗi khi cần. Sau đây, thegarenagiare.com sẽ gửi tới bạn một số cách thức mua thẻ
                                game phổ biến và mang lại hiệu quả phục vụ người dùng tốt nhất.
                            </div>
                            <div class="col-md-12 left-right text-center js-toggle-content">
                                <div class="view-more">
                                    <span class="global__link">Xem thêm<i class="__icon --sm --link ml-1" style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/icons/arrow-down.png)"></i></span>
                                </div>
                                <div class="view-less">
                                    <span class="global__link">Thu gọn<i class="__icon --sm --link ml-1" style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/icons/iconright.png)"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- confirm payment mobile--}}
            <div class="mobile--confirm__payment step">
                <div class="step--header">
                    <a href="" class="step--back js_step" data-go_to="step1">
                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/back.png" alt="">
                    </a>
                    <div class="step--header__title">
                        Xác nhận thanh toán
                    </div>
                </div>
                <div class="step--content">
                    <div class="card--gray">
                        <div class="card--attr">
                            <div class="card--attr__name">
                                Loại thẻ
                            </div>
                            <div class="card--attr__value">
                                <div class="card--logo">
                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/cards-logo/zing.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="card--attr">
                            <div class="card--attr__name">
                                Giá niêm yết
                            </div>
                            <div class="card--attr__value">
                                10.000 đ
                            </div>
                        </div>
                        <div class="card--attr">
                            <div class="card--attr__name">
                                Số lượng
                            </div>
                            <div class="card--attr__value">
                                01
                            </div>
                        </div>
                        <div class="card--attr">
                            <div class="card--attr__name">
                                Chiết khấu
                            </div>
                            <div class="card--attr__value">
                                3%
                            </div>
                        </div>
                        <div class="card--attr">
                            <div class="card--attr__name">
                                Thành tiền
                            </div>
                            <div class="card--attr__value">
                                9.700 đ
                            </div>
                        </div>
                    </div>
                    <div class="card--gray">
                        <div class="card--attr">
                            <div class="card--attr__name">
                                Phương thức thanh toán
                            </div>
                            <div class="card--attr__value -bold -primary">
                                Tài khoản Shopbrand
                            </div>
                        </div>
                        <div class="card--attr">
                            <div class="card--attr__name">
                                Phí thanh toán
                            </div>
                            <div class="card--attr__value -bold">
                                Miễn phí
                            </div>
                        </div>
                    </div>
                    <div class="card--gray">
                        <div class="card--attr">
                            <div class="card--attr__name -bold">
                                Số tiền thanh toán
                            </div>
                            <div class="card--attr__value -bold">
                                9.700 đ
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn -primary btn-big -ps__end js_step" data-go_to="step3">Xác nhận
                    </button>
                </div>
            </div>
            <!-- Modal Xác Nhận Thanh Toán-->
            <div class="modal fade" id="modal--confirm__payment" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered animated">
                    <div class="modal-content -custom dialog">
                        <div class="dialog--header">
                            <div class="dialog--header__title">
                                Xác nhận thanh toán
                            </div>
                            <button type="button" class="close dialog__close" data-dismiss="modal">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/close.png" alt="">
                            </button>
                        </div>
                        <div class="dialog--content">
                            <div class="dialog--content__title">
                                Thông tin mua thẻ
                            </div>
                            <div class="card--gray">
                                <div class="card--attr">
                                    <div class="card--attr__name">
                                        Loại thẻ
                                    </div>
                                    <div class="card--attr__value">
                                        <div class="card--logo">
                                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/cards-logo/zing.png"
                                                 alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="card--attr">
                                    <div class="card--attr__name">
                                        Giá niêm yết
                                    </div>
                                    <div class="card--attr__value">
                                        10.000 đ
                                    </div>
                                </div>
                                <div class="card--attr">
                                    <div class="card--attr__name">
                                        Số lượng
                                    </div>
                                    <div class="card--attr__value">
                                        01
                                    </div>
                                </div>
                                <div class="card--attr">
                                    <div class="card--attr__name">
                                        Chiết khấu
                                    </div>
                                    <div class="card--attr__value">
                                        3%
                                    </div>
                                </div>
                                <div class="card--attr">
                                    <div class="card--attr__name">
                                        Thành tiền
                                    </div>
                                    <div class="card--attr__value">
                                        9.700 đ
                                    </div>
                                </div>
                            </div>
                            <div class="card--gray">
                                <div class="card--attr">
                                    <div class="card--attr__name">
                                        Phương thức thanh toán
                                    </div>
                                    <div class="card--attr__value">
                                        Tài khoản Shopbrand
                                    </div>
                                </div>
                                <div class="card--attr">
                                    <div class="card--attr__name">
                                        Phí thanh toán
                                    </div>
                                    <div class="card--attr__value">
                                        Miễn phí
                                    </div>
                                </div>
                            </div>
                            <div class="card--gray">
                                <div class="card--attr__total">
                                    <div class="card--attr__name">
                                        Tổng thanh toán
                                    </div>
                                    <div class="card--attr__value">
                                        9.700 đ
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn -primary btn-big" data-dismiss="modal" data-toggle="modal" data-target="#modal--success__payment">Xác nhận</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- success payment mobile--}}
            <div class="mobile--success__payment step">
                <div class="step--header">
                    <a href="" class="step--back js_step" data-go_to="step2">
                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/back.png" alt="">
                    </a>
                    <div class="step--header__title">
                        Mua thẻ thành công
                    </div>
                </div>
                <div class="step--content">
                    <div class="card--gray card__notify">
                        <div class="card__message">
                            Chúc mừng bạn đã giao dịch thành công
                        </div>
                        <div class="card--success__icon">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/success.png" alt="">
                        </div>
                    </div>
                    <div class="step--content__title">
                        Thông tin thẻ
                    </div>
                    <div class="card--list">
                        <div class="card__detail">
                            <div class="card--header__detail">
                                <div class="card--info__wrap">
                                    <div class="card--logo">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/cards-logo/zing.png" alt="">
                                    </div>
                                    <div class="card--info">
                                        <div class="card--info__name">
                                            Zing 1
                                        </div>
                                        <div class="card--info__value">
                                            100.000 đ
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card--gray">
                                <div class="card--attr">
                                    <div class="card--attr__name">
                                        Mã thẻ
                                    </div>
                                    <div class="card--attr__value -bold">
                                        <div class="card__info">
                                            48563415693486456
                                        </div>
                                        <div class="icon--coppy js-copy-text">
                                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/coppy.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="card--attr">
                                    <div class="card--attr__name">
                                        Seri
                                    </div>
                                    <div class="card--attr__value -bold">
                                        <div class="card__info">
                                            12121212121
                                        </div>
                                        <div class="icon--coppy js-copy-text">
                                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/coppy.png" alt="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card__detail">
                            <div class="card--header__detail">
                                <div class="card--info__wrap">
                                    <div class="card--logo">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/cards-logo/zing.png" alt="">
                                    </div>
                                    <div class="card--info">
                                        <div class="card--info__name">
                                            Zing 1
                                        </div>
                                        <div class="card--info__value">
                                            100.000 đ
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card--gray">
                                <div class="card--attr">
                                    <div class="card--attr__name">
                                        Mã thẻ
                                    </div>
                                    <div class="card--attr__value -bold">
                                        <div class="card__info">
                                            48563415693486456
                                        </div>
                                        <div class="icon--coppy js-copy-text">
                                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/coppy.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="card--attr">
                                    <div class="card--attr__name">
                                        Seri
                                    </div>
                                    <div class="card--attr__value -bold">
                                        <div class="card__info">
                                            12121212121
                                        </div>
                                        <div class="icon--coppy js-copy-text">
                                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/coppy.png" alt="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card__detail">
                            <div class="card--header__detail">
                                <div class="card--info__wrap">
                                    <div class="card--logo">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/cards-logo/zing.png" alt="">
                                    </div>
                                    <div class="card--info">
                                        <div class="card--info__name">
                                            Zing 1
                                        </div>
                                        <div class="card--info__value">
                                            100.000 đ
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card--gray">
                                <div class="card--attr">
                                    <div class="card--attr__name">
                                        Mã thẻ
                                    </div>
                                    <div class="card--attr__value -bold">
                                        <div class="card__info">
                                            48563415693486456
                                        </div>
                                        <div class="icon--coppy js-copy-text">
                                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/coppy.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="card--attr">
                                    <div class="card--attr__name">
                                        Seri
                                    </div>
                                    <div class="card--attr__value -bold">
                                        <div class="card__info">
                                            12121212121
                                        </div>
                                        <div class="icon--coppy js-copy-text">
                                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/coppy.png" alt="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="step--content__end">
                        <a href="" class="btn -secondary btn-big">Về trang chủ</a>
                        <a href="" class="btn -primary btn-big">Mua thêm</a>
                    </div>
                </div>
            </div>
            <!-- Modal Mua Thành Công-->
            <div class="modal fade" id="modal--success__payment" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content -custom dialog">
                        <div class="dialog--header">
                            <div class="dialog--header__title">
                                Mua thẻ thành công
                            </div>
                            <button type="button" class="close dialog__close" data-dismiss="modal">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/close.png" alt="">
                            </button>
                        </div>
                        <div class="dialog--content">
                            <div class="card--gray card__notify">
                                <div class="card__message">
                                    Chúc mừng bạn đã giao dịch thành công
                                </div>
                                <div class="card--success__icon">
                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/success.png" alt="">
                                </div>
                            </div>
                            <div class="dialog--content__title">
                                Thông tin thẻ
                            </div>
                            <div class="card--gray">
                                <div class="card--attr">
                                    <div class="card--attr__name">
                                        Loại thẻ
                                    </div>
                                    <div class="card--attr__value">
                                        <div class="card--logo">
                                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/cards-logo/zing.png"
                                                 alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="card--attr">
                                    <div class="card--attr__name">
                                        Giá niêm yết
                                    </div>
                                    <div class="card--attr__value">
                                        10.000 đ
                                    </div>
                                </div>
                                <div class="card--attr">
                                    <div class="card--attr__name">
                                        Số lượng
                                    </div>
                                    <div class="card--attr__value">
                                        01
                                    </div>
                                </div>
                            </div>
                            <div class="swiper slider--card">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide card__detail">
                                        <div class="card--header__detail">
                                            <div class="card--info__wrap">
                                                <div class="card--logo">
                                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/cards-logo/zing.png" alt="">
                                                </div>
                                                <div class="card--info">
                                                    <div class="card--info__name">
                                                        Zing 1
                                                    </div>
                                                    <div class="card--info__value">
                                                        100.000 đ
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card--gray">
                                            <div class="card--attr">
                                                <div class="card--attr__name">
                                                    Mã thẻ
                                                </div>
                                                <div class="card--attr__value">
                                                    <div class="card__info">
                                                        48563415693486456
                                                    </div>
                                                    <div class="icon--coppy js-copy-text">
                                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/coppy.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card--attr">
                                                <div class="card--attr__name">
                                                    Seri
                                                </div>
                                                <div class="card--attr__value">
                                                    <div class="card__info">
                                                        12121212121
                                                    </div>
                                                    <div class="icon--coppy js-copy-text">
                                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/coppy.png" alt="">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide card__detail">
                                        <div class="card--header__detail">
                                            <div class="card--info__wrap">
                                                <div class="card--logo">
                                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/cards-logo/zing.png" alt="">
                                                </div>
                                                <div class="card--info">
                                                    <div class="card--info__name">
                                                        Zing 1
                                                    </div>
                                                    <div class="card--info__value">
                                                        100.000 đ
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card--gray">
                                            <div class="card--attr">
                                                <div class="card--attr__name">
                                                    Mã thẻ
                                                </div>
                                                <div class="card--attr__value">
                                                    <div class="card__info">
                                                        48563415693486456
                                                    </div>
                                                    <div class="icon--coppy js-copy-text">
                                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/coppy.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card--attr">
                                                <div class="card--attr__name">
                                                    Seri
                                                </div>
                                                <div class="card--attr__value">
                                                    <div class="card__info">
                                                        12121212121
                                                    </div>
                                                    <div class="icon--coppy js-copy-text">
                                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/coppy.png" alt="">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn -primary btn-big">Mua thêm</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
