@extends('frontend.layouts.master')
@section('styles')
    <link rel="stylesheet" href="/assets/{{theme('')->theme_key}}/css/lib_bootstrap.css">
    <link rel="stylesheet" href="/assets/{{theme('')->theme_key}}/css/minigame.css">
@endsection

@section('scripts')
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/js_phu/homepage.js"></script>
@endsection

@section('content')

<div class="container container-fix">
    <div class="d-flex banner-home">
        <div class="banner-marquee-container">
            <img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/sound.svg" alt="">
            @if (setting('sys_marquee') )
                <marquee class="banner-marquee">
                    <p>{!! setting('sys_marquee') !!}</p>
                </marquee>
            @endif
        </div>
        @include('frontend.widget.__slider__banner')
    </div>

    <div class="block-product gaming-recharge mt-fix-20">
        <div class="gaming-recharge-header d-flex">
            <span>
                <img src="/assets/frontend/{{theme('')->theme_key}}/image/gaming_icon.png" alt="">
            </span>
            <p>Chọn Game nạp giá rẻ</p>
        </div>
        <div class="gaming-recharge-search">
            <div class="gaming-recharge-search-header">
                <p>Chọn game muốn nạp</p>
            </div>
            <div class="gaming-recharge-search-form">
                <h6>Tìm kiếm</h6>
                <form class="gaming-recharge-form-detail">
                    <input type="text" class="input-primary" placeholder="Tìm kiếm theo game" name="">
                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/search.png" alt="">
                    <button class="button-primary">Tìm kiếm</button>
                </form>
            </div>
        </div>
        <div class="box-product">
            <div class=" list-product d-flex flex-wrap" >
                <div class="item-product item-nick ">
                    <a href="/mua-acc/slug">
                        <div class="item-nick-img">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/nick_game1.png" alt="">
                        </div>

                        <div class="item-nick-name">Liên quân Mobile</div>
                    </a>

                </div>
                <div class="item-product  item-nick">
                    <a href="/mua-acc/slug">
                        <div class="item-nick-img">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/nick_game2.png" alt="">
                        </div>
                        <div class="item-nick-name">Garena freefire</div>
                    </a>

                </div>
                <div class="item-product  item-nick">
                    <a href="">
                        <div class="item-nick-img">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/nick_game3.png" alt="">
                        </div>
                        <div class="item-nick-name">PUBG Mobile</div>
                    </a>

                </div>
                <div class="item-product  item-nick">
                    <a href="/mua-acc/slug">
                        <div class="item-nick-img">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/nick_game4.png" alt="">
                        </div>
                        <div class="item-nick-name">Liên Minh Huyền Thoại</div>
                    </a>

                </div>
                <div class="item-product  item-nick">
                    <a href="/mua-acc/slug">
                        <div class="item-nick-img">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/nick_game5.png" alt="">
                        </div>
                        <div class="item-nick-name">Cyber Punk 2077</div>
                    </a>

                </div>
                <div class="item-product  item-nick">
                    <a href="/mua-acc/slug">
                        <div class="item-nick-img">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/nick_game6.png" alt="">
                        </div>
                        <div class="item-nick-name">Tốc chiến</div>
                    </a>

                </div>
                <div class="item-product  item-nick">
                    <a href="/mua-acc/slug">
                        <div class="item-nick-img">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/nick_game7.png" alt="">
                        </div>
                        <div class="item-nick-name">Auto Chess</div>
                    </a>

                </div>
                <div class="item-product  item-nick">
                    <a href="/mua-acc/slug">
                        <div class="item-nick-img">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/nick_game8.png" alt="">
                        </div>
                        <div class="item-nick-name">Bang Bangi</div>
                    </a>

                </div>
                <div class="item-product item-nick ">
                    <a href="/mua-acc/slug">
                        <div class="item-nick-img">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/nick_game1.png" alt="">
                        </div>

                        <div class="item-nick-name">Liên quân Mobile</div>
                    </a>

                </div>
                <div class="item-product  item-nick">
                    <a href="/mua-acc/slug">
                        <div class="item-nick-img">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/nick_game2.png" alt="">
                        </div>
                        <div class="item-nick-name">Garena freefire</div>
                    </a>

                </div>
                <div class="item-product  item-nick">
                    <a href="">
                        <div class="item-nick-img">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/nick_game3.png" alt="">
                        </div>
                        <div class="item-nick-name">PUBG Mobile</div>
                    </a>

                </div>
                <div class="item-product  item-nick">
                    <a href="/mua-acc/slug">
                        <div class="item-nick-img">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/nick_game4.png" alt="">
                        </div>
                        <div class="item-nick-name">Liên Minh Huyền Thoại</div>
                    </a>

                </div>
                <div class="item-product  item-nick">
                    <a href="/mua-acc/slug">
                        <div class="item-nick-img">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/nick_game5.png" alt="">
                        </div>
                        <div class="item-nick-name">Cyber Punk 2077</div>
                    </a>

                </div>
                <div class="item-product  item-nick">
                    <a href="/mua-acc/slug">
                        <div class="item-nick-img">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/nick_game6.png" alt="">
                        </div>
                        <div class="item-nick-name">Tốc chiến</div>
                    </a>

                </div>
                <div class="item-product  item-nick">
                    <a href="/mua-acc/slug">
                        <div class="item-nick-img">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/nick_game7.png" alt="">
                        </div>
                        <div class="item-nick-name">Auto Chess</div>
                    </a>

                </div>
                <div class="item-product  item-nick">
                    <a href="/mua-acc/slug">
                        <div class="item-nick-img">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/nick_game8.png" alt="">
                        </div>
                        <div class="item-nick-name">Bang Bangi</div>
                    </a>

                </div>

            </div>
        </div>
    </div>

    <div class="block-card-item mt-fix-20">
        <div class="row">
            <div class="col-lg-5 col-md-12"  style="min-height: 100%">
                <div class=" block-product "  >
                    <div class="product-header d-flex">
                        <span>
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/charge_card_icon.png" alt="">
                        </span>
                        <p class="text-title" >Nạp tiền</p>
                        <div class="navbar-spacer"></div>
                    </div>
                    <div class="box-product " >
                        <div class="default-tab pr-fix-16 pl-fix-16">
                            <ul class="nav justify-content-between row" role="tablist" >
                                <li class="nav-item col-4 col-md-4 p-0  p-md-0" role="presentation">
                                    <a  class="nav-link active text-center " data-toggle="tab" href="#charge_card" role="tab" aria-selected="true">Nạp thẻ <span class="d-g-none">cào</span> </a>
                                </li >
                                <li class="nav-item col-4 col-md-4 p-0 p-md-0" role="presentation">
                                    <a  class="nav-link text-center "  data-toggle="tab" href="#atm_card" role="tab" aria-selected="false"> ATM <span class="d-g-none">tự động</span> </a>
                                </li>
                                <li class="nav-item col-4 col-md-4 p-0 p-md-0" role="presentation">
                                    <a  class="nav-link text-center " data-toggle="tab" href="#wallet_card" role="tab" aria-selected="false">Ví điện tử</a>
                                </li>
                            </ul>
                        </div>

                        <div class=" tab-content">
                            <div class="tab-pane fade active show  mt-3" id="charge_card" role="tabpanel" >
                                <form action="">
                                    <div class="box-charge-card">
                                        <div class="default-form-group mb-fix-20">
                                            <label class="text-form">Nhà cung cấp</label>
                                            <div class="col-md-12 p-0">
                                                <select class="select-form w-100" name="select">
                                                    <option value="">Viettel - Nhận 100.0%</option>
                                                    <option value="3">VinaPhone - Nhận 70.0%</option>
                                                    <option value="4">Garena - Nhận 60.0%</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="default-form-group mb-fix-20">
                                            <label class="text-form">Chọn mệnh giá</label>
                                            <div class="col-md-12 p-0">
                                                <div class="row m-0">
                                                    <div class=" col-4 col-md-4 pl-fix-4 pr-fix-4 check-radio-form charge-card-form">
                                                        <input checked name="amount" type="radio" id="recharge_amount_1" hidden>
                                                        <label for="recharge_amount_1">
                                                            <p>10.000đ</p>
                                                        </label>
                                                    </div>
                                                    <div class=" col-4 col-md-4 pl-fix-4 pr-fix-4 check-radio-form charge-card-form">
                                                        <input name="amount"  type="radio" id="recharge_amount_2" hidden>
                                                        <label for="recharge_amount_2">
                                                            <p>20.000đ</p>
                                                        </label>
                                                    </div>
                                                    <div class=" col-4 col-md-4 pl-fix-4 pr-fix-4 check-radio-form charge-card-form">
                                                        <input name="amount" type="radio" id="recharge_amount_3" hidden>
                                                        <label for="recharge_amount_3">
                                                            <p>30.000đ</p>
                                                        </label>
                                                    </div>
                                                    <div class=" col-4 col-md-4 pl-fix-4 pr-fix-4 check-radio-form charge-card-form">
                                                        <input name="amount" type="radio" id="recharge_amount_4" hidden>
                                                        <label for="recharge_amount_4">
                                                            <p>40.000đ</p>
                                                        </label>
                                                    </div>
                                                    <div class="col-4 col-md-4 pl-fix-4 pr-fix-4 check-radio-form charge-card-form">
                                                        <input name="amount" type="radio" id="recharge_amount_5" hidden>
                                                        <label for="recharge_amount_5">
                                                            <p>50.000đ</p>
                                                        </label>
                                                    </div>
                                                    <div class=" col-4 col-md-4 pl-fix-4 pr-fix-4 check-radio-form charge-card-form">
                                                        <input name="amount" type="radio" id="recharge_amount_6" hidden>
                                                        <label for="recharge_amount_6">
                                                            <p>60.000đ</p>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="default-form-group mb-fix-20">
                                            <label class="text-form">Mã số thẻ</label>
                                            <div class="col-md-12 p-0">
                                                <input class="input-form w-100" type="text" placeholder="Nhập mã số thẻ">

                                            </div>
                                        </div>
                                        <div class="default-form-group mb-fix-20">
                                            <label class="text-form">Số Seri</label>
                                            <div class="col-md-12 p-0">
                                                <input class="input-form w-100" type="text" placeholder="Nhập số seri thẻ">

                                            </div>
                                        </div>
                                        <div class="default-form-group mb-fix-20">
                                            <label class="text-form">Mã bảo vệ</label>
                                            <div class="col-md-12 p-0 d-flex">
                                                <input class="input-form w-100" type="text" placeholder="Nhập mã bảo vệ ">
                                                <div class="captcha">
                                                    <div>
                                                        <span>
                                                              <img src="/assets/frontend/{{theme('')->theme_key}}/image/capcha_example.png" alt="">
                                                        </span>
                                                    </div>
                                                </div>
                                                <button class="refresh-captcha">
                                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/captcha_refresh.png" alt="">
                                                </button>

                                            </div>
                                        </div>
                                        <div class="default-form-group mb-fix-20 ">
                                            <button  class="w-100 primary-button button-default-ct btn-charge-data" type="button">
                                                Nạp ngay
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade mt-3" id="atm_card" role="tabpanel" >
                                <form action="">
                                    <div class="box-charge-card">
                                        <div class="atm-card-title mb-fix-20">
                                            <span>Để hoàn tất đơn nạp, bạn vui lòng chuyển khoản theo cú pháp sau:</span>
                                        </div>
                                        <div class="dialog--content mb-fix-20">
                                            <div class="card--gray">
                                                <div class="card--attr">
                                                    <div class="card--attr__name">
                                                        Ngân hàng Kỹ thương Việt Nam
                                                        (Techcombank)
                                                    </div>
                                                    <div class="card--attr__value">
                                                        <div class="card--logo">
                                                            <img src="/assets/theme_6/image/cards-logo/zing.png" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card--attr">
                                                    <div class="card--attr__name">
                                                        Chủ tài khoản
                                                    </div>
                                                    <div class="card--attr__value">
                                                        BUI THI NHAM
                                                    </div>
                                                </div>
                                                <div class="card--attr">
                                                    <div class="card--attr__name">
                                                        Số tài khoản
                                                    </div>
                                                    <div class="card--attr__value d-flex">

                                                        <div class="card__info"> 19037861065016</div>

                                                        <div class="icon--coppy js-copy-text" aria-describedby="tippy-7">
                                                            <img src="/assets/theme_6/image/icons/copy-black.png" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card--attr">
                                                    <div class="card--attr__name">
                                                        Nội dung chuyển tiền
                                                    </div>
                                                    <div class="card--attr__value d-flex">
                                                        <div class="card__info"> NAP DTGRN 103764</div>

                                                        <div class="icon--coppy js-copy-text" aria-describedby="tippy-7">
                                                            <img src="/assets/theme_6/image/icons/copy-black.png" alt="">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="default-form-group ">
                                            <button  class="w-100 primary-button button-default-ct btn-data-charge_atm" type="button">
                                                Xác nhận
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade mt-3" id="wallet_card" role="tabpanel" >
                                <form action="">
                                    <div class="box-charge-card">
                                        <div class="default-form-group">
                                            <p class="wallet-card-title"> Vui lòng chọn chuyển khoản vào 1 trong các tài khoản ví dưới đây</p>
                                            <div class="col-md-12 p-0">
                                                <div class="row m-0">
                                                    <div class=" col-12 col-md-12 pr-fix-4 pl-fix-4 mb-fix-16 check-radio-form">
                                                        <input checked name="amount" type="radio" id="walet_card_1" hidden>
                                                        <label for="walet_card_1">
                                                            <div class="wallet-card d-flex justify-content-between">
                                                                <div class="wallet-card-img">
                                                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/wallet_logo.png" alt="">
                                                                </div>
                                                                <div class="wallet-card-content">
                                                                    <div class="wallet-card-name">
                                                                        Chủ tài khoản: Trần Văn Sơn
                                                                    </div>
                                                                    <div class="wallet-card-address">
                                                                        Chi nhánh: Hà Nội
                                                                    </div>
                                                                    <div class="wallet-card-web">
                                                                        thesieure.com
                                                                    </div>

                                                                </div>
                                                                <div class="wallet-card-qr">
                                                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/wallet_qr.png" alt="">
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class=" col-12 col-md-12 pr-fix-4 pl-fix-4 mb-fix-16 check-radio-form">
                                                        <input checked name="amount" type="radio" id="walet_card_2" hidden>
                                                        <label for="walet_card_2">
                                                            <div class="wallet-card d-flex justify-content-between">
                                                                <div class="wallet-card-img">
                                                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/wallet_logo.png" alt="">
                                                                </div>
                                                                <div class="wallet-card-content">
                                                                    <div class="wallet-card-name">
                                                                        Chủ tài khoản: Trần Văn Sơn
                                                                    </div>
                                                                    <div class="wallet-card-address">
                                                                        Chi nhánh: Hà Nội
                                                                    </div>
                                                                    <div class="wallet-card-web">
                                                                        thesieure.com
                                                                    </div>

                                                                </div>
                                                                <div class="wallet-card-qr">
                                                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/wallet_qr.png" alt="">
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="wallet-card-title mb-fix-8"> Nội dung thanh toán:</div>
                                            <span class="wallet-card-title wallet-card-title-content"> Doithegarena.com + [ID tài khoản hoặc tên tài khoản]</span>
                                        </div>

                                        <div class="default-form-group mt-fix-16">
                                            <button  class="w-100 primary-button button-default-ct btn-data-wallet_card" type="button">
                                                Xác nhận
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-lg-7 col-md-12 pl-0 d-g-md-none " style="min-height: 100%">
                <div class="game-recharge-promotion">
                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/charge_card_small.png" alt="" style="min-height: 100%">
                    <div class="block-promotion">
                        <h6 class="block-promotion-header">
                            Tại sao phải nạp tiền game?
                        </h6>
                        <div class="block-promotion-content">
                            <p>
                                Hiện nay, để có thể trải nghiệm được nhiều tính năng của game hoặc để tăng sức mạnh cho nhân vật của mình thì người chơi cần nạp tiền game hay ngắn gọn là nạp game. Tiền game này dùng để mua nhiều vật phẩm cần thiết trang bị trong game, nếu không có vật phẩm và tiền tệ trong game bạn sẽ rất khó tham gia được các game online hiện nay, và trò chơi cũng sẽ trở nên nhàm chán với bạn. Việc nạp tiền game sẽ cho bạn những giây phút trải nghiệm game tuyệt vời nhất với các lý do sau đây:
                            </p>
                            <p>
                                Có thể sử dụng những tính năng “độc quyền” trong game: Việc nạp tiền vào game sẽ giúp bạn trải nghiệm hết các tính năng trong game cũng như trang bị cho nhân vật của mình thêm những bộ trang phục đẹp, đồ vật độc. Tạo thêm sự nổi bật cũng như dễ dàng vượt qua các level khó. Bên cạnh đó, để mở khoá một số chức năng trong game, bạn chỉ có thể nạp tiền vào game để sử dụng các tính năng đó. 
                            </p>    
                            <p>
                                Tiết kiệm thời gian chơi game: Thay vì phải mất nhiều thời gian ngồi cày cuốc leo rank, thì chỉ cần nạp tiền vào game, bạn sẽ dễ dàng mua vật phẩm và hoàn thành những nhiệm vụ khó một cách dễ dàng.
                            </p>    
                            <p>
                                Kiếm tiền bằng cách nạp tiền vào game: Việc nạp tiền vào game sẽ giúp bạn có cơ hội nhận lại được tiền game hoặc các vật phẩm, đồ vật có giá trị. Từ đó, bạn có thể kiếm tiền mặt từ việc bán lại chúng, việc này giúp cho người chơi kiếm được một số tiền kha khá mỗi tháng.  
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content__wrap" id="content-store-card">
        <div class="row" id="screen--first">
            <div class="col-12 col-lg-12 col-xl-8 px-lg-3 section--type__card buy-card">
                <div class="card --custom" style="min-height: 100%">
                    <div class="card--header">
                        <div class="card--header__title">
                            <div class="title__icon"><img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/credit_card.png" alt=""></div>
                            <h4>Mua thẻ nhanh</h4>
                        </div>
                    </div>
                    <div class="card--body">
                        <ul class="nav nav-tabs tabs--cards" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="card-game-tab" data-toggle="tab" href="#card-game" role="tab" aria-controls="card-game" aria-selected="true">Thẻ game</a>
                            </li><li class="nav-item" role="presentation">
                                <a class="nav-link" id="card-phone-tab" data-toggle="tab" href="#card-phone" role="tab" aria-controls="card-phone" aria-selected="false">Thẻ điện thoại</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab--title">Chọn loại thẻ</div>
                            <div class="tab-pane fade show active select-tag-type" id="card-game" role="tabpanel" aria-labelledby="card-game-tab">
                                <ul class="cards__list row" id="cardGameList">
                                    <div class="loader position-relative" style="margin: 2rem 0">
                                        <div class="loading-spokes">
                                            <div class="spoke-container">
                                                <div class="spoke"></div>
                                            </div>
                                            <div class="spoke-container">
                                                <div class="spoke"></div>
                                            </div>
                                            <div class="spoke-container">
                                                <div class="spoke"></div>
                                            </div>
                                            <div class="spoke-container">
                                                <div class="spoke"></div>
                                            </div>
                                            <div class="spoke-container">
                                                <div class="spoke"></div>
                                            </div>
                                            <div class="spoke-container">
                                                <div class="spoke"></div>
                                            </div>
                                            <div class="spoke-container">
                                                <div class="spoke"></div>
                                            </div>
                                            <div class="spoke-container">
                                                <div class="spoke"></div>
                                            </div>
                                        </div>
                                    </div>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="card-phone" role="tabpanel" aria-labelledby="card-phone-tab">
                                <ul class="cards__list row" id="cardPhoneList">
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-12 col-xl-4  pl-lg-1 section--amount__card choose-card d-none">
                <div class="card --custom">
                    <div class="card--body" id="amountWidget">
                        <div class="loader position-relative" style="margin: 2rem 0">
                            <div class="loading-spokes">
                                <div class="spoke-container">
                                    <div class="spoke"></div>
                                </div>
                                <div class="spoke-container">
                                    <div class="spoke"></div>
                                </div>
                                <div class="spoke-container">
                                    <div class="spoke"></div>
                                </div>
                                <div class="spoke-container">
                                    <div class="spoke"></div>
                                </div>
                                <div class="spoke-container">
                                    <div class="spoke"></div>
                                </div>
                                <div class="spoke-container">
                                    <div class="spoke"></div>
                                </div>
                                <div class="spoke-container">
                                    <div class="spoke"></div>
                                </div>
                                <div class="spoke-container">
                                    <div class="spoke"></div>
                                </div>
                            </div>
                        </div>
                        <div class="denos--wrap">
                            <div class="denos--title">
                                Chọn mệnh giá
                            </div>
                            <ul class="deno__list row" id="cardAmountList">
                                
                            </ul>
                            <div class="card--amount">
                                <span class="card--amount__title">
                                    Số lượng thẻ
                                </span>
                                <div class="card--amount__group">
                                    <button class="btn--amount -minus js-amount" data-action="minus">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/minus.png" alt="">
                                    </button>
                                    <input type="text" name="card-amount" class="input--amount" value="1" numberic="">
                                    <button class="btn--amount -add js-amount" data-action="add">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/add.png" alt="">
                                    </button>
                                </div>
                            </div>
                            <div class="discount">
                                <input name="card-discount" type="hidden" value="">
                                <span class="discount--title">
                                    Chiết khấu
                                </span>
                                <span class="discount--value">
                                    
                                </span>
                            </div>
                            <div class="price--total">
                                <span class="price--total__title">
                                    Thành tiền
                                </span>
                                <span class="price--total__value">
                                    
                                </span>
                            </div>
                            @if (App\Library\AuthCustom::check())
                                <button type="button" class="btn -primary btn-big js_step" data-go_to="step2" data-toggle="modal" data-target="#modal--confirm__payment" id="btn-confirm">Chọn mua</button>
                            @else
                                <button type="button" class="btn -primary btn-big js_step" onclick="openLoginModal();" style="margin-top: 16px;">Chọn mua</button>
                            @endif
                        </div>
                    </div>
                </div>
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
                                        <img id="confirmCard" src="/assets/frontend/{{theme('')->theme_key}}/image/cards-logo/zing.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="card--attr">
                                <div class="card--attr__name">
                                    Giá niêm yết
                                </div>
                                <div class="card--attr__value" id="confirmPrice">

                                </div>
                            </div>
                            <div class="card--attr">
                                <div class="card--attr__name">
                                    Số lượng
                                </div>
                                <div class="card--attr__value" id="confirmQuantity">
                                    
                                </div>
                            </div>
                            <div class="card--attr">
                                <div class="card--attr__name">
                                    Chiết khấu
                                </div>
                                <div class="card--attr__value" id="confirmDiscount">
                                    
                                </div>
                            </div>
                            <div class="card--attr">
                                <div class="card--attr__name">
                                    Thành tiền
                                </div>
                                <div class="card--attr__value" id="confirmTotal">

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
                                <div class="card--attr__value" id="totalBill">
                                    
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn -primary btn-big" data-dismiss="modal" data-toggle="modal" data-target="#modal--success__payment" id="confirmSubmitButton">Xác nhận</button>
                    </div>
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
                                        <img id="successCard" src="" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="card--attr">
                                <div class="card--attr__name">
                                    Giá niêm yết
                                </div>
                                <div class="card--attr__value" id="successPrice">

                                </div>
                            </div>
                            <div class="card--attr">
                                <div class="card--attr__name">
                                    Số lượng
                                </div>
                                <div class="card--attr__value" id="successQuantity">

                                </div>
                            </div>
                        </div>
                        <div class="swiper slider--card">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide card__detail">
                                    <div class="card--header__detail">
                                        <div class="card--info__wrap">
                                            <div class="card--logo">
                                                <img src="" alt="">
                                            </div>
                                            <div class="card--info">
                                                <div class="card--info__name">
                                                    
                                                </div>
                                                <div class="card--info__value">
                                                    đ
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

        <!-- Modal Mua Thất Bại-->
        <div class="modal fade login show default-Modal" id="modal--fail__payment" aria-modal="true">
            <div class="modal-dialog modal-md modal-dialog-centered login animated">
                <!--        <div class="image-login"></div>-->
                <div class="modal-content">
                    <div class="modal-header modal-header-success-ct">
                        <div class="row marginauto modal-header-success-row-ct text-center">
                            <div class="col-md-12 text-center" style="position: relative">
                                <span>Mua thẻ không thành công</span>
                                <div class="close" data-dismiss="modal" aria-label="Close">
                                    <img class="lazy img-close-ct close-modal-default" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/close.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-body modal-body-success-ct">
                        <div class="row marginauto justify-content-center">
                            <div class="col-auto">
                                <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/reject.png" alt="">
                            </div>
                        </div>
                        <div class="row marginauto modal-body-span-success-ct justify-content-center">
                            <div class="col-md-12 left-right text-center">
                                <span style="font-size: 14px" id="message--error--buy"></span>
                            </div>

                        </div>
                        <div class="row marginauto justify-content-center modal-footer-success-ct">

                            <div class="col-md-12 col-6 modal-footer-success-col-right-ct">
                                <div class="row marginauto modal-footer-success-row-ct">
                                    <div class="col-md-12 left-right">
                                        <a href="/nap-the" class="button-bg-ct" style="display: flex;justify-content: center"><span>Nạp thẻ</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="block-product mt-fix-20">
        <div class="product-header related-service d-flex">
            <span>
                <img src="/assets/frontend/{{theme('')->theme_key}}/image/service_significant4.png" alt="">
            </span>
            <p class="text-title" >Các dịch vụ liên quan</p>
            <div class="navbar-spacer"></div>

            <div class="text-view-more">
                <a href="/dich-vu" class="global__link">Xem thêm<i class="__icon --sm --link ml-1" style="--path : url(/assets/theme_3/image/icons/arrow-right-blue.png)"></i></a>
            </div>
        </div>
        <div class="box-product">
            <div class="swiper-container list-related-service" >
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="#">
                            <div class="item-related-service-img">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/related-service-1.png" alt="">
                            </div>
                            <div class="item-related-service-content">
                                <p>Vòng quay may mắn</p>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#">
                            <div class="item-related-service-img">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/related-service-1.png" alt="">
                            </div>
                            <div class="item-related-service-content">
                                <p>Vòng quay may mắn</p>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#">
                            <div class="item-related-service-img">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/related-service-1.png" alt="">
                            </div>
                            <div class="item-related-service-content">
                                <p>Vòng quay may mắn</p>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#">
                            <div class="item-related-service-img">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/related-service-1.png" alt="">
                            </div>
                            <div class="item-related-service-content">
                                <p>Vòng quay may mắn</p>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#">
                            <div class="item-related-service-img">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/related-service-1.png" alt="">
                            </div>
                            <div class="item-related-service-content">
                                <p>Vòng quay may mắn</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @include('frontend.widget.__tin__tuc')

    <div class="block-product mt-fix-20">

        <div class="box-product">
            <div class="swiper-container  list-intro" >
                <div class="swiper-wrapper">
                    <div class="swiper-slide" >
                        <div class="item-intro-img">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/intro1.png" alt=""></div>
                        <div class="list-intro-title">
                            Sản phẩm, dịch vụ đa dạng, cập nhật thường xuyên
                        </div>
                        <div class="list-intro-content">
                            Hệ thống luôn cung cấp, cập nhật những sản phẩm mới/hot nhất của các dòng game trên thị trường.
                        </div>

                    </div>
                    <div class="swiper-slide" >
                        <div class="item-intro-img">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/intro2.png" alt=""></div>
                        <div class="list-intro-title">
                            Hàng nghìn khách hàng tin tưởng
                        </div>
                        <div class="list-intro-content">
                            Hơn 260.000 giao dịch thành công mỗi ngày. Chúng tôi luôn đặt uy tín, chất lượng dịch vụ lên hàng đầu.
                        </div>

                    </div>
                    <div class="swiper-slide" >
                        <div class="item-intro-img">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/intro3.png" alt=""></div>
                        <div class="list-intro-title">
                            Trung tâm trợ giúp hỗ trợ tư vấn 24/24
                        </div>
                        <div class="list-intro-content">
                            Đội ngũ chăm sóc khách hàng luôn tư vấn và hỗ trợ nhiệt tình khi gặp sự cố trong quá trình trải nghiệm sản phẩm.
                        </div>

                    </div>
                    <div class="swiper-slide" >
                        <div class="item-intro-img">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/intro4.png" alt=""></div>
                        <div class="list-intro-title">
                            Giá cả ưu đãi, siêu rẻ trên thị trường
                        </div>
                        <div class="list-intro-content">
                            Cung cấp những sản phẩm với giá cả tốt nhất cùng với đó là những ưu đãi vô cùng hấp dẫn.
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@include('frontend.widget.modal.__charge')
@include('frontend.widget.modal.__success_charge')
@include('frontend.widget.modal.__reject_charge')
@include('frontend.widget.modal.__success_charge_atm')
@include('frontend.widget.modal.__success_wallet_card')
@endsection