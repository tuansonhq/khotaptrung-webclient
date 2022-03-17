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
                                <ul class="content-banner-card-top">
                                    <li>
                                        <i>1</i>
                                        <span>Đỗ Hải Nam</span>
                                        <label >
                                            32323245 <sup>đ</sup>
                                        </label>
                                    </li>
                                    <li>
                                        <i>2</i>
                                        <span>Đỗ Hải Nam</span>
                                        <label >
                                            32323245 <sup>đ</sup>
                                        </label>
                                    </li>
                                    <li>
                                        <i>3</i>
                                        <span>Đỗ Hải Nam</span>
                                        <label >
                                            32323245 <sup>đ</sup>
                                        </label>
                                    </li>
                                    <li>
                                        <i>4</i>
                                        <span>Đỗ Hải Nam</span>
                                        <label >
                                            32323245 <sup>đ</sup>
                                        </label>
                                    </li>
                                    <li>
                                        <i>5</i>
                                        <span>Đỗ Hải Nam</span>
                                        <label >
                                            32323245 <sup>đ</sup>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane  fade show " id="napthe">
                            <div class="content-banner-card-form">
                                <form action="">
                                    <div class="form-group">
                                        <div class="col-12">
                                            <select class="form-control " id="">
                                                <option value="VIETTEL">VIETTEL</option>
                                                <option value="VIETTEL">VIETTEL</option>
                                                <option value="VIETTEL">VIETTEL</option>
                                                <option value="VIETTEL">VIETTEL</option>
                                                <option value="VIETTEL">VIETTEL</option>
                                                <option value="VIETTEL">VIETTEL</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-12">
                                            <select class="form-control " id="">
                                                <option value="VIETTEL">-- Chọn đúng mệnh giá, sai mất thẻ --</option>
                                                <option value="VIETTEL">20,000 VNĐ (nhận 100.0%)</option>
                                                <option value="VIETTEL">30,000 VNĐ (nhận 100.0%)</option>
                                                <option value="VIETTEL">VIETTEL</option>
                                                <option value="VIETTEL">VIETTEL</option>
                                                <option value="VIETTEL">VIETTEL</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-12">
                                            <input type="text" placeholder="Mã số thẻ" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-12">
                                            <input type="text" placeholder="Số serial " class="form-control" >
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-top: 40px">
                                        <div class="col-12">
                                            <button class="btn btn-submit">Nạp thẻ</button>
                                        </div>
                                    </div>
                                </form>
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
                        <p style=""><strong>Cực Sốc Siêu Khuyến Mại Tặng 100% Giá Trị Thẻ Nạp Áp Dụng Mọi Mệnh Giá Nhanh Tay Truy Cập Nào</strong>  </p>

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

            <div class="content-video" id="lockmoney_taget">
                <div class="container">
                    <h4><strong>Giới Thiệu Về AS Mobile Và Shop Chính Thức, Độc Quyền Của AS Mobile - <a href="">shopas.net</a></strong></h4>
                    <div class="content-video-in">
                        <iframe src="https://www.youtube.com/embed/D80QnP0iRBo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

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

