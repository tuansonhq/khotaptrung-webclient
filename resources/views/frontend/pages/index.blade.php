@extends('frontend.layouts.master')
@section('seo_head')
    @include('frontend.widget.__seo_head')
@endsection
{{--@section('content')--}}
@section('content')

    <div class="layout-page">
        <div class="content-layout" >
            <div class="content-banner container">
                <div class="content-banner-card">
                    <ul class="nav " role="tablist" >
                        <li role="presentation" class="nav-item active" >
                            <a  class="active" data-toggle="tab" href="#top_napthe" role="tab"  >
                                TOP NẠP THẺ THÁNG 02
                            </a>
                        </li>
                        <li role="presentation" class="" >

                            <a  class="nav-item " data-toggle="tab" href="#napthe" role="tab"  >
                                NẠP THẺ

                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane  fade show active" id="top_napthe">
                            <div class="content-banner-card-box">
                                {!! widget('frontend.widget.__top_nap_the',60) !!}

                            </div>
                        </div>
                        <div class="tab-pane  fade show " id="napthe">
                            <div class="content-banner-card-form">
                                {!! widget('frontend.widget.__nap_the') !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-banner-slide">
                    <div class="slider "  >
                        <div class="row" style="position: relative">
                            <div class="col-12 slider_in" >
                                <div class="swiper-container mySwiper slider_detail">
                                    <div class="swiper-wrapper">
                                        {!! widget('frontend.widget.__slider__banner',60) !!}
{{--                                        @include('frontend.widget.__slider__banner')--}}
                                    </div>
                                    <!--                                  <div class="swiper-pagination"></div>-->
                                </div>
                                <div class="swiper-button-prev">
                                    <i class="fas fa-chevron-left"></i>
                                </div>
                                <div class="swiper-button-next">
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-advertise ">
                <div class="container">

                    <marquee width="100%" behavior="scroll" >

                        <p style=""><strong>{!! setting('sys_marquee') !!}</strong>  </p>

                    </marquee>
                </div>
            </div>

            {!! widget('frontend.widget.__content__home',60) !!}
{{--            @include('frontend.widget.__content__home')--}}
{{--            <div class="content-items" id="freefire_taget">--}}
{{--                <div class="container">--}}
{{--                    <div class="items-title">--}}
{{--                        <h4>Game Free Fire</h4>--}}
{{--                        <div class="items-title-lines"></div>--}}
{{--                    </div>--}}
{{--                    <div class="game-list row">--}}

{{--                        <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3  p-5 ppk">--}}
{{--                            <div class="game-list-content">--}}
{{--                                <div class="game-list-image">--}}
{{--                                    <a href="/quay-ngay">--}}
{{--                                        <img class="game-list-image-sticky" src="https://www.shopas.net/storage/images/pBYgoKE7bt_1621190862.png" alt="">--}}
{{--                                        <img class="game-list-image-in" src="https://www.shopas.net//storage/images/MyCKUlGT8Q_1642732819.gif" alt="">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="game-list-title">--}}
{{--                                    <a href="/quay-ngay">--}}
{{--                                        <p><strong>VQ Linh Vật Năm Mới</strong></p>--}}

{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="game-list-description">--}}
{{--                                    <div class="countime"> </div>--}}
{{--                                    <p>Đã quay: 388</p>--}}
{{--                                    <span class="game-list-description-old-price">49,000đ</span>--}}
{{--                                    <span class="game-list-description-new-price">49,000đ</span>--}}
{{--                                </div>--}}
{{--                                <div class="game-list-more">--}}
{{--                                    <div class="game-list-more-view" >--}}
{{--                                        <a href="/quay-ngay">--}}
{{--                                            <img src="https://www.shopas.net//storage/images/7Zsng4N5vn_1623839229.gif" alt="">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 p-5 ppk">--}}
{{--                            <div class="game-list-content">--}}
{{--                                <div class="game-list-image">--}}
{{--                                    <a href="/choi-ngay">--}}
{{--                                        <img class="game-list-image-sticky" src="https://www.shopas.net/storage/images/pBYgoKE7bt_1621190862.png" alt="">--}}
{{--                                        <img class="game-list-image-in" src="https://www.shopas.net//storage/images/MyCKUlGT8Q_1642732819.gif" alt="">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="game-list-title">--}}
{{--                                    <a href="/choi-ngay">--}}
{{--                                        <p><strong>VQ Linh Vật Năm Mới</strong></p>--}}

{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="game-list-description">--}}
{{--                                    <div class="countime"> </div>--}}
{{--                                    <p>Đã quay: 388</p>--}}
{{--                                    <span class="game-list-description-new-price">49,000đ</span>--}}
{{--                                </div>--}}
{{--                                <div class="game-list-more">--}}
{{--                                    <div class="game-list-more-view" >--}}
{{--                                        <a href="/choi-ngay">--}}
{{--                                            <img src="https://shopas.net/storage/images/RIiJFSYra5_1624463339.gif" alt="">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 p-5 ppk">--}}
{{--                            <div class="game-list-content">--}}
{{--                                <div class="game-list-image">--}}
{{--                                    <a href="">--}}
{{--                                        <img class="game-list-image-sticky" src="https://www.shopas.net/storage/images/pBYgoKE7bt_1621190862.png" alt="">--}}
{{--                                        <img class="game-list-image-in" src="https://www.shopas.net//storage/images/MyCKUlGT8Q_1642732819.gif" alt="">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="game-list-title">--}}
{{--                                    <a href="">--}}
{{--                                        <p><strong>VQ Linh Vật Năm Mới</strong></p>--}}

{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="game-list-description">--}}
{{--                                    <div class="countime"> </div>--}}
{{--                                    <p>Đã quay: 388</p>--}}
{{--                                    <span class="game-list-description-new-price">49,000đ</span>--}}
{{--                                </div>--}}
{{--                                <div class="game-list-more">--}}
{{--                                    <div class="game-list-more-view" >--}}
{{--                                        <a href="/mua-ngay">--}}
{{--                                            <img src="https://www.shopas.net//storage/images/xG1C9ZZYY2_1623838685.gif" alt="">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 p-5 ppk">--}}
{{--                            <div class="game-list-content">--}}
{{--                                <div class="game-list-image">--}}
{{--                                    <a href="">--}}
{{--                                        <img class="game-list-image-sticky" src="https://www.shopas.net/storage/images/pBYgoKE7bt_1621190862.png" alt="">--}}
{{--                                        <img class="game-list-image-in" src="https://www.shopas.net//storage/images/MyCKUlGT8Q_1642732819.gif" alt="">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="game-list-title">--}}
{{--                                    <a href="">--}}
{{--                                        <p><strong>VQ Linh Vật Năm Mới</strong></p>--}}

{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="game-list-description">--}}
{{--                                    <div class="countime"> </div>--}}
{{--                                    <p>Đã quay: 388</p>--}}
{{--                                    <span class="game-list-description-new-price">49,000đ</span>--}}
{{--                                </div>--}}
{{--                                <div class="game-list-more">--}}
{{--                                    <div class="game-list-more-view" >--}}
{{--                                        <a href="">--}}
{{--                                            <img src="https://www.shopas.net//storage/images/7Zsng4N5vn_1623839229.gif" alt="">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 p-5 ppk">--}}
{{--                            <div class="game-list-content">--}}
{{--                                <div class="game-list-image">--}}
{{--                                    <a href="">--}}
{{--                                        <img class="game-list-image-sticky" src="https://www.shopas.net/storage/images/pBYgoKE7bt_1621190862.png" alt="">--}}
{{--                                        <img class="game-list-image-in" src="https://www.shopas.net//storage/images/MyCKUlGT8Q_1642732819.gif" alt="">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="game-list-title">--}}
{{--                                    <a href="">--}}
{{--                                        <p><strong>VQ Linh Vật Năm Mới</strong></p>--}}

{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="game-list-description">--}}
{{--                                    <div class="countime"> </div>--}}
{{--                                    <p>Đã quay: 388</p>--}}
{{--                                    <span class="game-list-description-new-price">49,000đ</span>--}}
{{--                                </div>--}}
{{--                                <div class="game-list-more">--}}
{{--                                    <div class="game-list-more-view" >--}}
{{--                                        <a href="">--}}
{{--                                            <img src="https://www.shopas.net//storage/images/7Zsng4N5vn_1623839229.gif" alt="">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 p-5 ppk">--}}
{{--                            <div class="game-list-content">--}}
{{--                                <div class="game-list-image">--}}
{{--                                    <a href="">--}}
{{--                                        <img class="game-list-image-sticky" src="https://www.shopas.net/storage/images/pBYgoKE7bt_1621190862.png" alt="">--}}
{{--                                        <img class="game-list-image-in" src="https://www.shopas.net//storage/images/MyCKUlGT8Q_1642732819.gif" alt="">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="game-list-title">--}}
{{--                                    <a href="">--}}
{{--                                        <p><strong>VQ Linh Vật Năm Mới</strong></p>--}}

{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="game-list-description">--}}
{{--                                    <div class="countime"> </div>--}}
{{--                                    <p>Đã quay: 388</p>--}}
{{--                                    <span class="game-list-description-new-price">49,000đ</span>--}}
{{--                                </div>--}}
{{--                                <div class="game-list-more">--}}
{{--                                    <div class="game-list-more-view" >--}}
{{--                                        <a href="">--}}
{{--                                            <img src="https://www.shopas.net//storage/images/7Zsng4N5vn_1623839229.gif" alt="">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 p-5 ppk">--}}
{{--                            <div class="game-list-content">--}}
{{--                                <div class="game-list-image">--}}
{{--                                    <a href="">--}}
{{--                                        <img class="game-list-image-sticky" src="https://www.shopas.net/storage/images/pBYgoKE7bt_1621190862.png" alt="">--}}
{{--                                        <img class="game-list-image-in" src="https://www.shopas.net//storage/images/MyCKUlGT8Q_1642732819.gif" alt="">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="game-list-title">--}}
{{--                                    <a href="">--}}
{{--                                        <p><strong>VQ Linh Vật Năm Mới</strong></p>--}}

{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="game-list-description">--}}
{{--                                    <div class="countime"> </div>--}}
{{--                                    <p>Đã quay: 388</p>--}}
{{--                                    <span class="game-list-description-new-price">49,000đ</span>--}}
{{--                                </div>--}}
{{--                                <div class="game-list-more">--}}
{{--                                    <div class="game-list-more-view" >--}}
{{--                                        <a href="">--}}
{{--                                            <img src="https://www.shopas.net//storage/images/7Zsng4N5vn_1623839229.gif" alt="">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="content-items" id="lienquan_taget">--}}
{{--                <div class="container">--}}
{{--                    <div class="items-title">--}}
{{--                        <h4>Khu vực tiền hoá</h4>--}}
{{--                        <div class="items-title-lines"></div>--}}
{{--                    </div>--}}
{{--                    <div class="game-list row">--}}
{{--                        <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 p-5 ppk">--}}
{{--                            <div class="game-list-content">--}}
{{--                                <div class="game-list-image">--}}
{{--                                    <a href="">--}}
{{--                                        <img class="game-list-image-sticky" src="https://www.shopas.net/storage/images/pBYgoKE7bt_1621190862.png" alt="">--}}
{{--                                        <img class="game-list-image-in" src="https://www.shopas.net//storage/images/MyCKUlGT8Q_1642732819.gif" alt="">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="game-list-title">--}}
{{--                                    <a href="">--}}
{{--                                        <p><strong>VQ Linh Vật Năm Mới</strong></p>--}}

{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="game-list-description">--}}
{{--                                    <div class="countime"> </div>--}}
{{--                                    <p>Đã quay: 388</p>--}}
{{--                                    <span class="game-list-description-new-price">49,000đ</span>--}}
{{--                                </div>--}}
{{--                                <div class="game-list-more">--}}
{{--                                    <div class="game-list-more-view" >--}}
{{--                                        <a href="">--}}
{{--                                            <img src="https://www.shopas.net//storage/images/7Zsng4N5vn_1623839229.gif" alt="">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 p-5 ppk">--}}
{{--                            <div class="game-list-content">--}}
{{--                                <div class="game-list-image">--}}
{{--                                    <a href="">--}}
{{--                                        <img class="game-list-image-sticky" src="https://www.shopas.net/storage/images/pBYgoKE7bt_1621190862.png" alt="">--}}
{{--                                        <img class="game-list-image-in" src="https://www.shopas.net//storage/images/MyCKUlGT8Q_1642732819.gif" alt="">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="game-list-title">--}}
{{--                                    <a href="">--}}
{{--                                        <p><strong>VQ Linh Vật Năm Mới</strong></p>--}}

{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="game-list-description">--}}
{{--                                    <div class="countime"> </div>--}}
{{--                                    <p>Đã quay: 388</p>--}}
{{--                                    <span class="game-list-description-new-price">49,000đ</span>--}}
{{--                                </div>--}}
{{--                                <div class="game-list-more">--}}
{{--                                    <div class="game-list-more-view" >--}}
{{--                                        <a href="">--}}
{{--                                            <img src="https://www.shopas.net//storage/images/7Zsng4N5vn_1623839229.gif" alt="">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 p-5 ppk">--}}
{{--                            <div class="game-list-content">--}}
{{--                                <div class="game-list-image">--}}
{{--                                    <a href="">--}}
{{--                                        <img class="game-list-image-sticky" src="https://www.shopas.net/storage/images/pBYgoKE7bt_1621190862.png" alt="">--}}
{{--                                        <img class="game-list-image-in" src="https://www.shopas.net//storage/images/MyCKUlGT8Q_1642732819.gif" alt="">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="game-list-title">--}}
{{--                                    <a href="">--}}
{{--                                        <p><strong>VQ Linh Vật Năm Mới</strong></p>--}}

{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="game-list-description">--}}
{{--                                    <div class="countime"> </div>--}}
{{--                                    <p>Đã quay: 388</p>--}}
{{--                                    <span class="game-list-description-new-price">49,000đ</span>--}}
{{--                                </div>--}}
{{--                                <div class="game-list-more">--}}
{{--                                    <div class="game-list-more-view" >--}}
{{--                                        <a href="">--}}
{{--                                            <img src="https://www.shopas.net//storage/images/7Zsng4N5vn_1623839229.gif" alt="">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 p-5 ppk">--}}
{{--                            <div class="game-list-content">--}}
{{--                                <div class="game-list-image">--}}
{{--                                    <a href="">--}}
{{--                                        <img class="game-list-image-sticky" src="https://www.shopas.net/storage/images/pBYgoKE7bt_1621190862.png" alt="">--}}
{{--                                        <img class="game-list-image-in" src="https://www.shopas.net//storage/images/MyCKUlGT8Q_1642732819.gif" alt="">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="game-list-title">--}}
{{--                                    <a href="">--}}
{{--                                        <p><strong>VQ Linh Vật Năm Mới</strong></p>--}}

{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="game-list-description">--}}
{{--                                    <div class="countime"> </div>--}}
{{--                                    <p>Đã quay: 388</p>--}}
{{--                                    <span class="game-list-description-new-price">49,000đ</span>--}}
{{--                                </div>--}}
{{--                                <div class="game-list-more">--}}
{{--                                    <div class="game-list-more-view" >--}}
{{--                                        <a href="">--}}
{{--                                            <img src="https://www.shopas.net//storage/images/7Zsng4N5vn_1623839229.gif" alt="">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 p-5 ppk">--}}
{{--                            <div class="game-list-content">--}}
{{--                                <div class="game-list-image">--}}
{{--                                    <a href="">--}}
{{--                                        <img class="game-list-image-sticky" src="https://www.shopas.net/storage/images/pBYgoKE7bt_1621190862.png" alt="">--}}
{{--                                        <img class="game-list-image-in" src="https://www.shopas.net//storage/images/MyCKUlGT8Q_1642732819.gif" alt="">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="game-list-title">--}}
{{--                                    <a href="">--}}
{{--                                        <p><strong>VQ Linh Vật Năm Mới</strong></p>--}}

{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="game-list-description">--}}
{{--                                    <div class="countime"> </div>--}}
{{--                                    <p>Đã quay: 388</p>--}}
{{--                                    <span class="game-list-description-new-price">49,000đ</span>--}}
{{--                                </div>--}}
{{--                                <div class="game-list-more">--}}
{{--                                    <div class="game-list-more-view" >--}}
{{--                                        <a href="">--}}
{{--                                            <img src="https://www.shopas.net//storage/images/7Zsng4N5vn_1623839229.gif" alt="">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 p-5 ppk">--}}
{{--                            <div class="game-list-content">--}}
{{--                                <div class="game-list-image">--}}
{{--                                    <a href="">--}}
{{--                                        <img class="game-list-image-sticky" src="https://www.shopas.net/storage/images/pBYgoKE7bt_1621190862.png" alt="">--}}
{{--                                        <img class="game-list-image-in" src="https://www.shopas.net//storage/images/MyCKUlGT8Q_1642732819.gif" alt="">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="game-list-title">--}}
{{--                                    <a href="">--}}
{{--                                        <p><strong>VQ Linh Vật Năm Mới</strong></p>--}}

{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="game-list-description">--}}
{{--                                    <div class="countime"> </div>--}}
{{--                                    <p>Đã quay: 388</p>--}}
{{--                                    <span class="game-list-description-new-price">49,000đ</span>--}}
{{--                                </div>--}}
{{--                                <div class="game-list-more">--}}
{{--                                    <div class="game-list-more-view" >--}}
{{--                                        <a href="">--}}
{{--                                            <img src="https://www.shopas.net//storage/images/7Zsng4N5vn_1623839229.gif" alt="">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 p-5 ppk">--}}
{{--                            <div class="game-list-content">--}}
{{--                                <div class="game-list-image">--}}
{{--                                    <a href="">--}}
{{--                                        <img class="game-list-image-sticky" src="https://www.shopas.net/storage/images/pBYgoKE7bt_1621190862.png" alt="">--}}
{{--                                        <img class="game-list-image-in" src="https://www.shopas.net//storage/images/MyCKUlGT8Q_1642732819.gif" alt="">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="game-list-title">--}}
{{--                                    <a href="">--}}
{{--                                        <p><strong>VQ Linh Vật Năm Mới</strong></p>--}}

{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="game-list-description">--}}
{{--                                    <div class="countime"> </div>--}}
{{--                                    <p>Đã quay: 388</p>--}}
{{--                                    <span class="game-list-description-new-price">49,000đ</span>--}}
{{--                                </div>--}}
{{--                                <div class="game-list-more">--}}
{{--                                    <div class="game-list-more-view" >--}}
{{--                                        <a href="">--}}
{{--                                            <img src="https://www.shopas.net//storage/images/7Zsng4N5vn_1623839229.gif" alt="">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 p-5 ppk">--}}
{{--                            <div class="game-list-content">--}}
{{--                                <div class="game-list-image">--}}
{{--                                    <a href="">--}}
{{--                                        <img class="game-list-image-sticky" src="https://www.shopas.net/storage/images/pBYgoKE7bt_1621190862.png" alt="">--}}
{{--                                        <img class="game-list-image-in" src="https://www.shopas.net//storage/images/MyCKUlGT8Q_1642732819.gif" alt="">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="game-list-title">--}}
{{--                                    <a href="">--}}
{{--                                        <p><strong>VQ Linh Vật Năm Mới</strong></p>--}}

{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="game-list-description">--}}
{{--                                    <div class="countime"> </div>--}}
{{--                                    <p>Đã quay: 388</p>--}}
{{--                                    <span class="game-list-description-new-price">49,000đ</span>--}}
{{--                                </div>--}}
{{--                                <div class="game-list-more">--}}
{{--                                    <div class="game-list-more-view" >--}}
{{--                                        <a href="">--}}
{{--                                            <img src="https://www.shopas.net//storage/images/7Zsng4N5vn_1623839229.gif" alt="">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

            <div class="content-video intro_text" id="lockmoney_taget">
                <div class="container">
                    <div class="content-video-in">
                        {!! setting('sys_intro_text') !!}
                    </div>
                    <div class="view-more">
                        Xem tất cả »
                    </div>
                    <div class="view-less">
                        « Thu gọn
                    </div>
                </div>
            </div>

        </div>

        <div class="adthisbutton">
            <a class="freefire" style="color:#fff" href="#freefire_taget">
                <img src="https://shopas.net/storage/images/EZ94JFicXW_1634524794.png" alt="">
                <span>Mục Liên Quân</span>
            </a>
            <a class="lienquan" style="color:#fff" href="#lienquan_taget">
                <img src="https://shopas.net/storage/images/oVE6PWWiom_1634524794.png" alt="">
                <span>Mục Free Fire</span>
            </a>


            <a class="lockmoney" style="color:#fff" href="#lockmoney_taget">
                <img src="https://shopas.net/storage/images/sa2TgJvgE9_1634524794.jpg" alt="">
                <span>Mục Tiền Khóa</span>
            </a>
            <a class="hoteventmodal" style="color:#fff" href="javascript://">
                <img src="https://shopas.net/storage/images/m8zObXwTac_1634524794.png" alt="">
                <span>Mục Sự Kiện</span>
            </a>
        </div>
    </div>

@endsection

