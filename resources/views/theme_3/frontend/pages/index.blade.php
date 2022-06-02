@extends('frontend.layouts.master')

@section('content')
    <div class="banner-home" style=" background: url(assets/frontend/image/banner.png) no-repeat center center / cover;">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div class="box-list-service">
                    <p>Dịch vụ</p>
                    <ul class="list-service">
                        <li class="item-service">
                            <a href="">
                                <img src="assets/frontend/image/service_home.png" alt="">
                                <span>Nạp thẻ cào</span>
                            </a>

                        </li>
                        <li class="item-service">
                            <a href="">
                                <img src="assets/frontend/image/service_home2.png" alt="">
                                <span>Nạp ATM- VÍ</span>
                            </a>

                        </li>
                        <li class="item-service">
                            <a href="">
                                <img src="assets/frontend/image/service_home3.png" alt="">
                                <span>Mua thẻ game</span>
                            </a>

                        </li>
                        <li class="item-service">
                            <a href="">
                                <img src="assets/frontend/image/service_home.png" alt="">
                                <span>Mua Acc game</span>
                            </a>

                        </li>
                        <li class="item-service">
                            <a href="">
                                <img src="assets/frontend/image/service_home.png" alt="">
                                <span>Dịch vụ game</span>
                            </a>

                        </li>
                        <li class="item-service">
                            <a href="">
                                <img src="assets/frontend/image/service_home.png" alt="">
                                <span>Vòng quay</span>
                            </a>

                        </li>
                        <li class="item-service">
                            <a href="">
                                <img src="assets/frontend/image/service_home.png" alt="">
                                <span>Mua Acc game</span>
                            </a>

                        </li>
                        <li class="item-service">
                            <a href="">
                                <img src="assets/frontend/image/service_home.png" alt="">
                                <span>Mua thẻ game</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="box-list-top top-list">
                    <p><img src="assets/frontend/image/star_top.png" alt=""> Top nạp thẻ</p>
                    <div class="top-days ">
                        <ul class="nav justify-content-between row" role="tablist" >
                            <li class="nav-item col-md-4 p-md-0" role="presentation">
                                <a  class="nav-link active text-center" id="sevendays-tab" data-toggle="tab" href="#sevendays" role="tab" aria-selected="true">7 ngày</a>
                            </li >
                            <li class="nav-item col-md-4 p-md-0" role="presentation">
                                <a  class="nav-link text-center"  id="thirtyday-tab" data-toggle="tab" href="#thirtydays" role="tab" aria-selected="false"> 30 ngày</a>
                            </li>
                            <li class="nav-item col-md-4 p-md-0" role="presentation">
                                <a  class="nav-link text-center" id="sixty-tab" data-toggle="tab" href="#sixtydays" role="tab" aria-selected="false">60 ngày</a>
                            </li>
                        </ul>
                    </div>
                    <div class="top-content tab-content">
                        <div class="tab-pane fade active show item-top mt-3" id="sevendays" role="tabpanel" aria-labelledby="sevendays-tab" >
                            <ul class="nav flex-column">
                                <li class="d-flex">
                                    <span><img src="assets/frontend/image/top_star.png" alt=""></span>
                                    <span class="top-name">Tên dài hai dòng </span>
                                    <span class="float-right top-amount">100.000.000đ</span>
                                </li>
                                <li class="d-flex">
                                    <span><img src="assets/frontend/image/top_star.png" alt=""></span>
                                    <span class="top-name">Tên dài </span>
                                    <span class="float-right top-amount">100.000.000đ</span>
                                </li>
                                <li class="d-flex">
                                    <span><img src="assets/frontend/image/top_star.png" alt=""></span>
                                    <span class="top-name">Tên dài </span>
                                    <span class="float-right top-amount">100.000.000đ</span>
                                </li>
                                <li class="d-flex">
                                    <span class="top-rank"><div style="">4</div></span>
                                    <span class="top-name">Tên dài hai dòng Tên dài hai dòng</span>
                                    <span class="float-right top-amount">100.000.000đ</span>
                                </li>
                                <li class="d-flex">
                                    <span><img src="assets/frontend/image/top_star.png" alt=""></span>
                                    <span class="top-name">Tên dài </span>
                                    <span class="float-right top-amount">100.000.000đ</span>
                                </li>


                            </ul>
                        </div>
                        <div class="tab-pane fade item-top mt-3" id="thirtydays" role="tabpanel" aria-labelledby="thirtyday-tab">
                            <ul class="nav flex-column">
                                <li class="d-flex">
                                    <span><img src="assets/frontend/image/top_star.png" alt=""></span>
                                    <span class="top-name">Tên dài hai dòng </span>
                                    <span class="float-right top-amount">100.000.000đ</span>
                                </li>
                                <li class="d-flex">
                                    <span><img src="assets/frontend/image/top_star.png" alt=""></span>
                                    <span class="top-name">Tên dài </span>
                                    <span class="float-right top-amount">100.000.000đ</span>
                                </li>
                                <li class="d-flex">
                                    <span><img src="assets/frontend/image/top_star.png" alt=""></span>
                                    <span class="top-name">Tên dài </span>
                                    <span class="float-right top-amount">100.000.000đ</span>
                                </li>
                                <li class="d-flex">
                                    <span class="top-rank"><div style="">4</div></span>
                                    <span class="top-name">Tên dài hai dòng Tên dài hai dòng</span>
                                    <span class="float-right top-amount">100.000.000đ</span>
                                </li>
                                <li class="d-flex">
                                    <span><img src="assets/frontend/image/top_star.png" alt=""></span>
                                    <span class="top-name">Tên dài </span>
                                    <span class="float-right top-amount">100.000.000đ</span>
                                </li>


                            </ul>
                        </div>
                        <div class="tab-pane  fade item-top mt-3" id="sixtydays"  role="tabpanel" aria-labelledby="sixty-tab">
                            <ul class="nav flex-column">
                                <li class="d-flex">
                                    <span><img src="assets/frontend/image/top_star.png" alt=""></span>
                                    <span class="top-name">Tên dài hai dòng </span>
                                    <span class="float-right top-amount">100.000.000đ</span>
                                </li>
                                <li class="d-flex">
                                    <span><img src="assets/frontend/image/top_star.png" alt=""></span>
                                    <span class="top-name">Tên dài </span>
                                    <span class="float-right top-amount">100.000.000đ</span>
                                </li>
                                <li class="d-flex">
                                    <span><img src="assets/frontend/image/top_star.png" alt=""></span>
                                    <span class="top-name">Tên dài </span>
                                    <span class="float-right top-amount">100.000.000đ</span>
                                </li>
                                <li class="d-flex">
                                    <span class="top-rank"><div style="">4</div></span>
                                    <span class="top-name">Tên dài hai dòng Tên dài hai dòng</span>
                                    <span class="float-right top-amount">100.000.000đ</span>
                                </li>
                                <li class="d-flex">
                                    <span><img src="assets/frontend/image/top_star.png" alt=""></span>
                                    <span class="top-name">Tên dài </span>
                                    <span class="float-right top-amount">100.000.000đ</span>
                                </li>


                            </ul>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="flash-sales block-product">
            <div class="product-header d-flex">
                    <span>
                        <img src="assets/frontend/image/flash_sales.png" alt="">
                    </span>
                <p class="text-title">Giảm sốc trong ngày</p>
                <div class="timer" id="timer">
                    <span>27</span>
                    <span>27</span>
                    <span>27</span>
                </div>

                <div class="text-view-more">
                    <a href="">
                        Xem thêm <img src="assets/frontend/image/view_more.png" alt="">
                    </a>

                </div>
            </div>
            <div class="box-product">
                <div class="swiper-container list-product" >
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" >
                            <div class="item-product__box-img">
                                <a href="">
                                    <img src="assets/frontend/image/product.png" alt="">
                                </a>
                            </div>
                            <div class="item-product__box-content">

                                <a href="">
                                    <div class="item-product__box-name">
                                        Acc liên quan siêu vip
                                    </div>
                                    <div class="item-product__box-sale">
                                        Đã bán: 68,9K
                                    </div>
                                    <div class="item-product__box-price">

                                        <p class="special-price">15.000đ</p>
                                        <p class="old-price">30.000đ</p>
                                        <div class="item-product__sticker-percent">
                                            -50%
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="swiper-slide" >
                            <div class="item-product__box-img">
                                <a href="">
                                    <img src="assets/frontend/image/product.png" alt="">
                                </a>
                            </div>
                            <div class="item-product__box-content">

                                <a href="">
                                    <div class="item-product__box-name">
                                        Acc liên quan siêu vip
                                    </div>
                                    <div class="item-product__box-sale">
                                        Đã bán: 68,9K
                                    </div>
                                    <div class="item-product__box-price">

                                        <p class="special-price">15.000đ</p>
                                        <p class="old-price">30.000đ</p>
                                        <div class="item-product__sticker-percent">
                                            -50%
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="swiper-slide" >
                            <div class="item-product__box-img">
                                <a href="">
                                    <img src="assets/frontend/image/product.png" alt="">
                                </a>
                            </div>
                            <div class="item-product__box-content">

                                <a href="">
                                    <div class="item-product__box-name">
                                        Acc liên quan siêu vip
                                    </div>
                                    <div class="item-product__box-sale">
                                        Đã bán: 68,9K
                                    </div>
                                    <div class="item-product__box-price">

                                        <p class="special-price">15.000đ</p>
                                        <p class="old-price">30.000đ</p>
                                        <div class="item-product__sticker-percent">
                                            -50%
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="swiper-slide" >
                            <div class="item-product__box-img">
                                <a href="">
                                    <img src="assets/frontend/image/product.png" alt="">
                                </a>
                            </div>
                            <div class="item-product__box-content">

                                <a href="">
                                    <div class="item-product__box-name">
                                        Acc liên quan siêu vip
                                    </div>
                                    <div class="item-product__box-sale">
                                        Đã bán: 68,9K
                                    </div>
                                    <div class="item-product__box-price">

                                        <p class="special-price">15.000đ</p>
                                        <p class="old-price">30.000đ</p>
                                        <div class="item-product__sticker-percent">
                                            -50%
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="swiper-slide" >
                            <div class="item-product__box-img">
                                <a href="">
                                    <img src="assets/frontend/image/product.png" alt="">
                                </a>
                            </div>
                            <div class="item-product__box-content">

                                <a href="">
                                    <div class="item-product__box-name">
                                        Acc liên quan siêu vip
                                    </div>
                                    <div class="item-product__box-sale">
                                        Đã bán: 68,9K
                                    </div>
                                    <div class="item-product__box-price">

                                        <p class="special-price">15.000đ</p>
                                        <p class="old-price">30.000đ</p>
                                        <div class="item-product__sticker-percent">
                                            -50%
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="swiper-slide" >
                            <div class="item-product__box-img">
                                <a href="">
                                    <img src="assets/frontend/image/product.png" alt="">
                                </a>
                            </div>
                            <div class="item-product__box-content">

                                <a href="">
                                    <div class="item-product__box-name">
                                        Acc liên quan siêu vip
                                    </div>
                                    <div class="item-product__box-sale">
                                        Đã bán: 68,9K
                                    </div>
                                    <div class="item-product__box-price">

                                        <p class="special-price">15.000đ</p>
                                        <p class="old-price">30.000đ</p>
                                        <div class="item-product__sticker-percent">
                                            -50%
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" block-product">
            <div class="product-header d-flex">
                    <span>
                        <img src="assets/frontend/image/flash_sales.png" alt="">
                    </span>
                <p class="text-title">Dành cho bạn</p>
                <div class="product-catecory" >
                    <ul class="nav" role="tablist" >
                        <li class="nav-item" role="presentation">
                            <a  class="nav-link active" id="account-tab" data-toggle="tab" href="#account" role="tab" aria-selected="true">Tài khoản game</a>
                        </li >
                        <li class="nav-item" role="presentation">
                            <a  class="nav-link"  id="favourite_game-tab" data-toggle="tab" href="#favourite_game" role="tab" aria-selected="false"> Game yêu thích</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a  class="nav-link" id="suggestions-tab" data-toggle="tab" href="#suggestions" role="tab" aria-selected="false">Gợi ý cho bạn</a>
                        </li>
                    </ul>
                </div>

                <div class="text-view-more">
                    <a href="">
                        Xem thêm <img src="assets/frontend/image/view_more.png" alt="">
                    </a>

                </div>
            </div>
            <div class="box-product-content tab-content">
                <div class="box-product tab-pane fade active show" id="account" role="tabpanel" aria-labelledby="account-tab">
                    <div class="swiper-container list-product" >
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" >
                                <div class="item-product__box-img">
                                    <a href="">
                                        <img src="assets/frontend/image/product.png" alt="">
                                    </a>
                                </div>
                                <div class="item-product__box-content">

                                    <a href="">
                                        <div class="item-product__box-name">
                                            Acc liên quan siêu vip
                                        </div>
                                        <div class="item-product__box-sale">
                                            Đã bán: 68,9K
                                        </div>
                                        <div class="item-product__box-price">

                                            <p class="special-price">15.000đ</p>
                                            <p class="old-price">30.000đ</p>
                                            <div class="item-product__sticker-percent">
                                                -50%
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                            <div class="swiper-slide" >
                                <div class="item-product__box-img">
                                    <a href="">
                                        <img src="assets/frontend/image/product.png" alt="">
                                    </a>
                                </div>
                                <div class="item-product__box-content">

                                    <a href="">
                                        <div class="item-product__box-name">
                                            Acc liên quan siêu vip
                                        </div>
                                        <div class="item-product__box-sale">
                                            Đã bán: 68,9K
                                        </div>
                                        <div class="item-product__box-price">

                                            <p class="special-price">15.000đ</p>
                                            <p class="old-price">30.000đ</p>
                                            <div class="item-product__sticker-percent">
                                                -50%
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                            <div class="swiper-slide" >
                                <div class="item-product__box-img">
                                    <a href="">
                                        <img src="assets/frontend/image/product.png" alt="">
                                    </a>
                                </div>
                                <div class="item-product__box-content">

                                    <a href="">
                                        <div class="item-product__box-name">
                                            Acc liên quan siêu vip
                                        </div>
                                        <div class="item-product__box-sale">
                                            Đã bán: 68,9K
                                        </div>
                                        <div class="item-product__box-price">

                                            <p class="special-price">15.000đ</p>
                                            <p class="old-price">30.000đ</p>
                                            <div class="item-product__sticker-percent">
                                                -50%
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                            <div class="swiper-slide" >
                                <div class="item-product__box-img">
                                    <a href="">
                                        <img src="assets/frontend/image/product.png" alt="">
                                    </a>
                                </div>
                                <div class="item-product__box-content">

                                    <a href="">
                                        <div class="item-product__box-name">
                                            Acc liên quan siêu vip
                                        </div>
                                        <div class="item-product__box-sale">
                                            Đã bán: 68,9K
                                        </div>
                                        <div class="item-product__box-price">

                                            <p class="special-price">15.000đ</p>
                                            <p class="old-price">30.000đ</p>
                                            <div class="item-product__sticker-percent">
                                                -50%
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                            <div class="swiper-slide" >
                                <div class="item-product__box-img">
                                    <a href="">
                                        <img src="assets/frontend/image/product.png" alt="">
                                    </a>
                                </div>
                                <div class="item-product__box-content">

                                    <a href="">
                                        <div class="item-product__box-name">
                                            Acc liên quan siêu vip
                                        </div>
                                        <div class="item-product__box-sale">
                                            Đã bán: 68,9K
                                        </div>
                                        <div class="item-product__box-price">

                                            <p class="special-price">15.000đ</p>
                                            <p class="old-price">30.000đ</p>
                                            <div class="item-product__sticker-percent">
                                                -50%
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                            <div class="swiper-slide" >
                                <div class="item-product__box-img">
                                    <a href="">
                                        <img src="assets/frontend/image/product.png" alt="">
                                    </a>
                                </div>
                                <div class="item-product__box-content">

                                    <a href="">
                                        <div class="item-product__box-name">
                                            Acc liên quan siêu vip
                                        </div>
                                        <div class="item-product__box-sale">
                                            Đã bán: 68,9K
                                        </div>
                                        <div class="item-product__box-price">

                                            <p class="special-price">15.000đ</p>
                                            <p class="old-price">30.000đ</p>
                                            <div class="item-product__sticker-percent">
                                                -50%
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-product tab-pane fade" id="favourite_game" role="tabpanel" aria-labelledby="favourite_game-tab">
                    <div class="swiper-container list-product" >
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" >
                                <div class="item-product__box-img">
                                    <a href="">
                                        <img src="assets/frontend/image/product2.png" alt="">
                                    </a>
                                </div>
                                <div class="item-product__box-content">

                                    <a href="">
                                        <div class="item-product__box-name">
                                            Acc liên quan siêu vip
                                        </div>
                                        <div class="item-product__box-sale">
                                            Đã bán: 68,9K
                                        </div>
                                        <div class="item-product__box-price">

                                            <p class="special-price">15.000đ</p>
                                            <p class="old-price">30.000đ</p>
                                            <div class="item-product__sticker-percent">
                                                -50%
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                            <div class="swiper-slide" >
                                <div class="item-product__box-img">
                                    <a href="">
                                        <img src="assets/frontend/image/product.png" alt="">
                                    </a>
                                </div>
                                <div class="item-product__box-content">

                                    <a href="">
                                        <div class="item-product__box-name">
                                            Acc liên quan siêu vip
                                        </div>
                                        <div class="item-product__box-sale">
                                            Đã bán: 68,9K
                                        </div>
                                        <div class="item-product__box-price">

                                            <p class="special-price">15.000đ</p>
                                            <p class="old-price">30.000đ</p>
                                            <div class="item-product__sticker-percent">
                                                -50%
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                            <div class="swiper-slide" >
                                <div class="item-product__box-img">
                                    <a href="">
                                        <img src="assets/frontend/image/product.png" alt="">
                                    </a>
                                </div>
                                <div class="item-product__box-content">

                                    <a href="">
                                        <div class="item-product__box-name">
                                            Acc liên quan siêu vip
                                        </div>
                                        <div class="item-product__box-sale">
                                            Đã bán: 68,9K
                                        </div>
                                        <div class="item-product__box-price">

                                            <p class="special-price">15.000đ</p>
                                            <p class="old-price">30.000đ</p>
                                            <div class="item-product__sticker-percent">
                                                -50%
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                            <div class="swiper-slide" >
                                <div class="item-product__box-img">
                                    <a href="">
                                        <img src="assets/frontend/image/product.png" alt="">
                                    </a>
                                </div>
                                <div class="item-product__box-content">

                                    <a href="">
                                        <div class="item-product__box-name">
                                            Acc liên quan siêu vip
                                        </div>
                                        <div class="item-product__box-sale">
                                            Đã bán: 68,9K
                                        </div>
                                        <div class="item-product__box-price">

                                            <p class="special-price">15.000đ</p>
                                            <p class="old-price">30.000đ</p>
                                            <div class="item-product__sticker-percent">
                                                -50%
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                            <div class="swiper-slide" >
                                <div class="item-product__box-img">
                                    <a href="">
                                        <img src="assets/frontend/image/product.png" alt="">
                                    </a>
                                </div>
                                <div class="item-product__box-content">

                                    <a href="">
                                        <div class="item-product__box-name">
                                            Acc liên quan siêu vip
                                        </div>
                                        <div class="item-product__box-sale">
                                            Đã bán: 68,9K
                                        </div>
                                        <div class="item-product__box-price">

                                            <p class="special-price">15.000đ</p>
                                            <p class="old-price">30.000đ</p>
                                            <div class="item-product__sticker-percent">
                                                -50%
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                            <div class="swiper-slide" >
                                <div class="item-product__box-img">
                                    <a href="">
                                        <img src="assets/frontend/image/product.png" alt="">
                                    </a>
                                </div>
                                <div class="item-product__box-content">

                                    <a href="">
                                        <div class="item-product__box-name">
                                            Acc liên quan siêu vip
                                        </div>
                                        <div class="item-product__box-sale">
                                            Đã bán: 68,9K
                                        </div>
                                        <div class="item-product__box-price">

                                            <p class="special-price">15.000đ</p>
                                            <p class="old-price">30.000đ</p>
                                            <div class="item-product__sticker-percent">
                                                -50%
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-product tab-pane fade" id="suggestions" role="tabpanel" aria-labelledby="suggestions-tab">
                    <div class="swiper-container list-product" >
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" >
                                <div class="item-product__box-img">
                                    <a href="">
                                        <img src="assets/frontend/image/product3.png" alt="">
                                    </a>
                                </div>
                                <div class="item-product__box-content">

                                    <a href="">
                                        <div class="item-product__box-name">
                                            Acc liên quan siêu vip
                                        </div>
                                        <div class="item-product__box-sale">
                                            Đã bán: 68,9K
                                        </div>
                                        <div class="item-product__box-price">

                                            <p class="special-price">15.000đ</p>
                                            <p class="old-price">30.000đ</p>
                                            <div class="item-product__sticker-percent">
                                                -50%
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                            <div class="swiper-slide" >
                                <div class="item-product__box-img">
                                    <a href="">
                                        <img src="assets/frontend/image/product.png" alt="">
                                    </a>
                                </div>
                                <div class="item-product__box-content">

                                    <a href="">
                                        <div class="item-product__box-name">
                                            Acc liên quan siêu vip
                                        </div>
                                        <div class="item-product__box-sale">
                                            Đã bán: 68,9K
                                        </div>
                                        <div class="item-product__box-price">

                                            <p class="special-price">15.000đ</p>
                                            <p class="old-price">30.000đ</p>
                                            <div class="item-product__sticker-percent">
                                                -50%
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                            <div class="swiper-slide" >
                                <div class="item-product__box-img">
                                    <a href="">
                                        <img src="assets/frontend/image/product.png" alt="">
                                    </a>
                                </div>
                                <div class="item-product__box-content">

                                    <a href="">
                                        <div class="item-product__box-name">
                                            Acc liên quan siêu vip
                                        </div>
                                        <div class="item-product__box-sale">
                                            Đã bán: 68,9K
                                        </div>
                                        <div class="item-product__box-price">

                                            <p class="special-price">15.000đ</p>
                                            <p class="old-price">30.000đ</p>
                                            <div class="item-product__sticker-percent">
                                                -50%
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                            <div class="swiper-slide" >
                                <div class="item-product__box-img">
                                    <a href="">
                                        <img src="assets/frontend/image/product.png" alt="">
                                    </a>
                                </div>
                                <div class="item-product__box-content">

                                    <a href="">
                                        <div class="item-product__box-name">
                                            Acc liên quan siêu vip
                                        </div>
                                        <div class="item-product__box-sale">
                                            Đã bán: 68,9K
                                        </div>
                                        <div class="item-product__box-price">

                                            <p class="special-price">15.000đ</p>
                                            <p class="old-price">30.000đ</p>
                                            <div class="item-product__sticker-percent">
                                                -50%
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                            <div class="swiper-slide" >
                                <div class="item-product__box-img">
                                    <a href="">
                                        <img src="assets/frontend/image/product.png" alt="">
                                    </a>
                                </div>
                                <div class="item-product__box-content">

                                    <a href="">
                                        <div class="item-product__box-name">
                                            Acc liên quan siêu vip
                                        </div>
                                        <div class="item-product__box-sale">
                                            Đã bán: 68,9K
                                        </div>
                                        <div class="item-product__box-price">

                                            <p class="special-price">15.000đ</p>
                                            <p class="old-price">30.000đ</p>
                                            <div class="item-product__sticker-percent">
                                                -50%
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                            <div class="swiper-slide" >
                                <div class="item-product__box-img">
                                    <a href="">
                                        <img src="assets/frontend/image/product.png" alt="">
                                    </a>
                                </div>
                                <div class="item-product__box-content">

                                    <a href="">
                                        <div class="item-product__box-name">
                                            Acc liên quan siêu vip
                                        </div>
                                        <div class="item-product__box-sale">
                                            Đã bán: 68,9K
                                        </div>
                                        <div class="item-product__box-price">

                                            <p class="special-price">15.000đ</p>
                                            <p class="old-price">30.000đ</p>
                                            <div class="item-product__sticker-percent">
                                                -50%
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="block-mini-game">
            <div class="row">
                <div class="col-md-8 p-md-2" >
                    <div style="background-color: pink;height: 200px"></div>
                </div>
                <div class="col-md-4 p-md-2" >
                    <div class=" top-list">
                        <p><img src="assets/frontend/image/star_top.png" alt=""> Top nạp thẻ</p>
                        <div class="top-days ">
                            <ul class="nav justify-content-between row" role="tablist" >
                                <li class="nav-item col-md-4 p-md-0" role="presentation">
                                    <a  class="nav-link active text-center" id="sevendays-tab" data-toggle="tab" href="#sevendays" role="tab" aria-selected="true">7 ngày</a>
                                </li >
                                <li class="nav-item col-md-4 p-md-0" role="presentation">
                                    <a  class="nav-link text-center"  id="thirtyday-tab" data-toggle="tab" href="#thirtydays" role="tab" aria-selected="false"> 30 ngày</a>
                                </li>
                                <li class="nav-item col-md-4 p-md-0" role="presentation">
                                    <a  class="nav-link text-center" id="sixty-tab" data-toggle="tab" href="#sixtydays" role="tab" aria-selected="false">60 ngày</a>
                                </li>
                            </ul>
                        </div>
                        <div class="top-content tab-content">
                            <div class="tab-pane fade active show item-top mt-3" id="sevendays" role="tabpanel" aria-labelledby="sevendays-tab" >
                                <ul class="nav flex-column">
                                    <li class="d-flex">
                                        <span><img src="assets/frontend/image/top_star.png" alt=""></span>
                                        <span class="top-name">Tên dài hai dòng </span>
                                        <span class="float-right top-amount">100.000.000đ</span>
                                    </li>
                                    <li class="d-flex">
                                        <span><img src="assets/frontend/image/top_star.png" alt=""></span>
                                        <span class="top-name">Tên dài </span>
                                        <span class="float-right top-amount">100.000.000đ</span>
                                    </li>
                                    <li class="d-flex">
                                        <span><img src="assets/frontend/image/top_star.png" alt=""></span>
                                        <span class="top-name">Tên dài </span>
                                        <span class="float-right top-amount">100.000.000đ</span>
                                    </li>
                                    <li class="d-flex">
                                        <span class="top-rank"><div style="">4</div></span>
                                        <span class="top-name">Tên dài hai dòng Tên dài hai dòng</span>
                                        <span class="float-right top-amount">100.000.000đ</span>
                                    </li>
                                    <li class="d-flex">
                                        <span><img src="assets/frontend/image/top_star.png" alt=""></span>
                                        <span class="top-name">Tên dài </span>
                                        <span class="float-right top-amount">100.000.000đ</span>
                                    </li>


                                </ul>
                            </div>
                            <div class="tab-pane fade item-top mt-3" id="thirtydays" role="tabpanel" aria-labelledby="thirtyday-tab">
                                <ul class="nav flex-column">
                                    <li class="d-flex">
                                        <span><img src="assets/frontend/image/top_star.png" alt=""></span>
                                        <span class="top-name">Tên dài hai dòng </span>
                                        <span class="float-right top-amount">100.000.000đ</span>
                                    </li>
                                    <li class="d-flex">
                                        <span><img src="assets/frontend/image/top_star.png" alt=""></span>
                                        <span class="top-name">Tên dài </span>
                                        <span class="float-right top-amount">100.000.000đ</span>
                                    </li>
                                    <li class="d-flex">
                                        <span><img src="assets/frontend/image/top_star.png" alt=""></span>
                                        <span class="top-name">Tên dài </span>
                                        <span class="float-right top-amount">100.000.000đ</span>
                                    </li>
                                    <li class="d-flex">
                                        <span class="top-rank"><div style="">4</div></span>
                                        <span class="top-name">Tên dài hai dòng Tên dài hai dòng</span>
                                        <span class="float-right top-amount">100.000.000đ</span>
                                    </li>
                                    <li class="d-flex">
                                        <span><img src="assets/frontend/image/top_star.png" alt=""></span>
                                        <span class="top-name">Tên dài </span>
                                        <span class="float-right top-amount">100.000.000đ</span>
                                    </li>


                                </ul>
                            </div>
                            <div class="tab-pane  fade item-top mt-3" id="sixtydays"  role="tabpanel" aria-labelledby="sixty-tab">
                                <ul class="nav flex-column">
                                    <li class="d-flex">
                                        <span><img src="assets/frontend/image/top_star.png" alt=""></span>
                                        <span class="top-name">Tên dài hai dòng </span>
                                        <span class="float-right top-amount">100.000.000đ</span>
                                    </li>
                                    <li class="d-flex">
                                        <span><img src="assets/frontend/image/top_star.png" alt=""></span>
                                        <span class="top-name">Tên dài </span>
                                        <span class="float-right top-amount">100.000.000đ</span>
                                    </li>
                                    <li class="d-flex">
                                        <span><img src="assets/frontend/image/top_star.png" alt=""></span>
                                        <span class="top-name">Tên dài </span>
                                        <span class="float-right top-amount">100.000.000đ</span>
                                    </li>
                                    <li class="d-flex">
                                        <span class="top-rank"><div style="">4</div></span>
                                        <span class="top-name">Tên dài hai dòng Tên dài hai dòng</span>
                                        <span class="float-right top-amount">100.000.000đ</span>
                                    </li>
                                    <li class="d-flex">
                                        <span><img src="assets/frontend/image/top_star.png" alt=""></span>
                                        <span class="top-name">Tên dài </span>
                                        <span class="float-right top-amount">100.000.000đ</span>
                                    </li>


                                </ul>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

