@extends('frontend.layouts.master')
@section('seo_head')
    @include('frontend.widget.__seo_head',with(['data'=>$data]))
@endsection
@section('content')

    <div class="" style="margin-top: 15px">
        @if ($message = Session::get('success'))
            <div class="container">
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                    {{$message}}
                </div>
            </div>
        @endif
        @if($messages=$errors->all())
            <div class="container">
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                    {{$messages[0]}}
                </div>
            </div>

        @endif

    </div>




    <div class="shop_product_detailS">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="gallery" style="overflow: hidden">
                        <div class="swiper gallery-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="https://picsum.photos/id/1019/500/300" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://picsum.photos/id/1026/500/300" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://picsum.photos/500/300" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://picsum.photos/id/1021/500/300" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://picsum.photos/id/1022/500/300" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://picsum.photos/id/1025/500/300" alt="">
                                </div>
                            </div>

                            <div class="swiper-button-prev">
                                <div class="arrow-left"></div>
                            </div>
                            <div class="swiper-button-next">
                                <div class="arrow-right"></div>
                            </div>
                        </div>

                        <div class="swiper gallery-thumbs">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="https://picsum.photos/id/1019/500/300" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://picsum.photos/id/1026/500/300" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://picsum.photos/500/300" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://picsum.photos/id/1021/500/300" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://picsum.photos/id/1022/500/300" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://picsum.photos/id/1025/500/300" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 gallery__right">
                    <div class="row gallery__row">
                        <div class="col-md-12">
                            <div class="row gallery__01">
                                <div class="col-md-12 gallery__01__row">
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="gallery__01__span">Mã số:</span>
                                        </div>
                                        <div class="col-md-8 pl-0">
                                            <span class="gallery__01__span">#9999</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 gallery__01__row2">
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="gallery__02__span">Danh mục:</span>
                                        </div>
                                        <div class="col-md-8  pl-0">
                                            <span class="gallery__02__span">ACC FREE FIRE VIP - TỰ CHỌN</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 gallery__pt">
                            <div class="row gallery__02">
                                <div class="col-md-12 gallery__01__row">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="row text-left">
                                                <div class="col-md-12">
                                                    <span class="gallery__02__span__02">THẺ CÀO</span>
                                                </div>
                                                <div class="col-md-12">
                                                    <span class="gallery__01__span__02">350.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 gallery__01__span__02md">
                                            <div class="row text-center">
                                                <div class="col-md-12">
                                                    <span class="hoac">Hoặc</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="row text-right">
                                                <div class="col-md-12">
                                                    <span class="gallery__02__span__02">ATM chỉ cần</span>
                                                </div>
                                                <div class="col-md-12">
                                                    <span class="gallery__01__span__02">280.000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row gallery__03">
                                <div class="col-md-12 gallery__01__row">
                                    <div class="row">
                                        <div class="col-auto span__dangky__auto">
                                            <i class="fas fa-angle-right"></i>
                                        </div>
                                        <div class="col-md-4 pl-0">
                                            <span class="span__dangky">Đăng ký</span>
                                        </div>
                                        <div class="col-md-6 pl-0">
                                            <span class="span__dangky">Facebook</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row gallery__03">
                                <div class="col-md-12 gallery__01__row">
                                    <div class="row">
                                        <div class="col-auto span__dangky__auto">
                                            <i class="fas fa-angle-right"></i>
                                        </div>
                                        <div class="col-md-4 pl-0">
                                            <span class="span__dangky">Pet</span>
                                        </div>
                                        <div class="col-md-6 pl-0">
                                            <span class="span__dangky">Có</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row gallery__03">
                                <div class="col-md-12 gallery__01__row">
                                    <div class="row">
                                        <div class="col-auto span__dangky__auto">
                                            <i class="fas fa-angle-right"></i>
                                        </div>
                                        <div class="col-md-4 pl-0">
                                            <span class="span__dangky">Rank</span>
                                        </div>
                                        <div class="col-md-6 pl-0">
                                            <span class="span__dangky">Đồng</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row gallery__03">
                                <div class="col-md-12 gallery__01__row">
                                    <div class="row">
                                        <div class="col-auto span__dangky__auto">
                                            <i class="fas fa-angle-right"></i>
                                        </div>
                                        <div class="col-md-4 pl-0">
                                            <span class="span__dangky"> Ghi chú</span>
                                        </div>
                                        <div class="col-md-6 pl-0">
                                            <span class="span__dangky">M4a1 Siêu Công Nghệ,Ak47 Giáng Sinh,An94 - Ong Sát Thủ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 gallery__bottom">
                            <div class="row text-center">
                                <div class="col-md-12 gallery__01__row">
                                    <div class="row gallery__01__row2">
                                        <div class="col-md-12 pl-0 pr-0">
                                            <button class="btn btn-danger gallery__bottom__span"><i class="fas fa-cart-arrow-down"></i>&ensp;Mua ngay</button>
                                        </div>
                                        <div class="col-md-12 pl-0 pr-0 gallery__bottom">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <button class="btn btn-success gallery__bottom__span"><i class="fab fa-cc-visa"></i>&ensp;ATM - VÍ ĐIỆN TỬ</button>
                                                </div>
                                                <div class="col-md-6">
                                                    <button class="btn btn-success gallery__bottom__span"><i class="fas fa-barcode-alt"></i>&ensp;NẠP THẺ CÀO</button>
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

            <style>
                .gallery {
                    width: 100%;
                    max-width: 500px;
                    margin-left: auto;
                    margin-right: auto;
                }

                .gallery-slider {
                    width: 100%;
                    height: auto;
                    margin: 0 0 10px 0;
                }

                .gallery-slider .swiper-slide {
                    width: 100%;
                    height: 250px;
                }

                .gallery-slider .swiper-slide img {
                    display: block;
                    width: 100%;
                    height: 100%;
                    margin: 0 auto;
                    object-fit: cover;
                }

                .gallery-thumbs {
                    margin-top: 32px;
                    width: 100%;
                    padding: 0;
                    overflow: hidden;
                }

                .gallery-thumbs .swiper-slide {
                    width: 50px;
                    height: 50px;
                    text-align: center;
                    overflow: hidden;
                    opacity: 1;
                }

                .gallery-thumbs .swiper-slide-active {
                    opacity: 1;
                }

                .gallery-thumbs .swiper-slide img {
                    width: auto;
                    height: 100%;
                    object-fit: cover;
                }

                .gallery .swiper-button-next {
                    width: 30px;
                    height: 30px;
                    border-radius: 50%;
                    background: #111111;
                }

                .gallery .swiper-button-next:after {
                    display: none;
                }

                .gallery .arrow-right {
                    display: inline-block;
                    width: 9px;
                    height: 9px;
                    margin: 0 10px;
                    border-top: 2px solid #fff;
                    border-right: 2px solid #fff;
                    transform: rotate(45deg) translate(-3px, 3px);
                }

                .gallery .swiper-button-prev {
                    width: 30px;
                    height: 30px;
                    border-radius: 50%;
                    background: #111111;
                }

                .gallery .swiper-button-prev:after {
                    display: none;
                }

                .gallery .arrow-left {
                    display: inline-block;
                    width: 9px;
                    height: 9px;
                    margin: 0 10px;
                    border-left: 2px solid #fff;
                    border-bottom: 2px solid #fff;
                    transform: rotate(45deg) translate(3px, -3px);
                }
            </style>

            <script>
                $(function(){
                    var slider = new Swiper ('.gallery-slider', {
                        autoplay: {
                            delay: 2000,

                        },

                        slidesPerView: 1,
                        centeredSlides: true,
                        loop: true,
                        loopedSlides: 6, //スライドの枚数と同じ値を指定
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev',
                        },
                    });

                    var thumbs = new Swiper ('.gallery-thumbs', {
                        slidesPerView: 5,
                        spaceBetween: 2, //スライドの枚数と同じ値を指定
                        centeredSlides: true,
                        loop: true,
                        slideToClickedSlide: true,
                    });

                    slider.controller.control = thumbs;
                    thumbs.controller.control = slider;
                });
            </script>

{{--            <div class="row">--}}
{{--                <div class="col-12 col-sm-12 col-md-12 col-lg-4">--}}
{{--                    <div class="shop_product_header">--}}
{{--                        <p>#{{ $data->id }}</p>--}}
{{--                        <span>{{ $data_category->title }}̉</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-12 shop_product_info_mobile">--}}
{{--                    <a  data-fancybox="gallerycoverDetail" href="https://shopas.net/storage/images/hyi1T9DGM1_1645949761.jpg">--}}
{{--                        <img src="https://shopas.net/storage/images/hyi1T9DGM1_1645949761.jpg" alt="">--}}
{{--                    </a>--}}
{{--                    <div class="shop_product_info">--}}
{{--                        <div class="shop_product_info_divider">--}}
{{--                            <i class="fas fa-circle"></i>--}}
{{--                        </div>--}}
{{--                        <div class="row">--}}

{{--                            @include('frontend.pages.account.widget.account_load_attribute')--}}

{{--                        </div>--}}
{{--                        <div class="shop_product_info_divider">--}}
{{--                            <i class="fas fa-circle"></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12 col-sm-12 col-md-12 col-lg-4">--}}
{{--                    <div class="shop_product_price">--}}
{{--                        <div>--}}
{{--                            {{ formatPrice($data->price_old) }} CARD--}}
{{--                        </div>--}}
{{--                        <div>--}}
{{--                            {{ formatPrice($data->price) }} ATM--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12 col-sm-12 col-md-12 col-lg-4">--}}
{{--                    <div class="shop_product_header">--}}
{{--                        <button type="button" class="mustcard btn c-btn btn-lg c-theme-btn c-font-uppercase c-font-bold c-btn-square m-t-20 buyacc" data-id="{{ $data->id }}">--}}
{{--                            Mua ngay--}}
{{--                        </button>--}}
{{--                        <a href="/recharge" class="btn c-btn btn-lg c-bg-green-4 c-font-white c-font-uppercase c-font-bold c-btn-square m-t-20">ATM - Ví điện tử</a>--}}
{{--                        <a href="/nap-the" class="btn c-btn btn-lg c-bg-green-4 c-font-white c-font-uppercase c-font-bold c-btn-square m-t-20">Nạp thẻ cào</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="shop_product_info shop_product_info_desktop">--}}
{{--                <div class="shop_product_info_divider">--}}
{{--                    <i class="fas fa-circle"></i>--}}
{{--                </div>--}}
{{--                <div class="row">--}}
{{--                    @if(isset($data->groups))--}}
{{--                        <?php $att_values = $data->groups ?>--}}
{{--                        @foreach($att_values as $att_value)--}}
{{--                            @if($att_value->module == 'acc_label')--}}
{{--                                <div class="col-md-4 shop_product_info_variant">--}}
{{--                                    <p>{{ $att_value->parent[0]->title }}: <span>{{ $att_value->title }}</span></p>--}}
{{--                                </div>--}}
{{--                            @endif--}}
{{--                        @endforeach--}}
{{--                    @endif--}}
{{--                        <?php $params = json_decode(json_encode($data->params->ext_info),true) ?>--}}
{{--                    @if(!is_null($dataAttribute) && count($dataAttribute)>0)--}}
{{--                        @foreach($dataAttribute as $index=>$att)--}}
{{--                            @if($att->position == 'text')--}}
{{--                                @if(isset($att->childs))--}}
{{--                                    @foreach($att->childs as $child)--}}

{{--                                        @foreach($params as $key => $param)--}}
{{--                                            @if($key == $child->id)--}}
{{--                                                <div class="col-md-4 shop_product_info_variant">--}}
{{--                                                    <p>{{ $child->title }}: <span>{{ $param }}</span></p>--}}
{{--                                                </div>--}}
{{--                                            @endif--}}
{{--                                        @endforeach--}}
{{--                                    @endforeach--}}
{{--                                @endif--}}

{{--                            @endif--}}
{{--                        @endforeach--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--                <div class="shop_product_info_divider">--}}
{{--                    <i class="fas fa-circle"></i>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="shop_product_post">--}}
{{--                <div class="div">--}}
{{--                    @foreach(explode('|',$data->image_extension) as $val)--}}
{{--                        <a data-fancybox="gallerycoverDetail" href="https://media-tt.nick.vn/{{ $val }}">--}}
{{--                            <img src="https://media-tt.nick.vn/{{ $val }}" alt="">--}}
{{--                        </a>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--                <div class="pt-3">--}}
{{--                    <button type="button" class="mustcard btn c-btn btn-lg c-theme-btn c-font-uppercase c-font-bold c-btn-square m-t-20 buyacc" data-id="{{ $data->id }}">Mua ngay</button>--}}
{{--                </div>--}}
{{--            </div>--}}

            <div class="shop_product_another pt-3">
                <div class="c-content-title-1">
                    <h3 class="c-center c-font-uppercase c-font-bold title__tklienquan">Tài khoản liên quan</h3>
                    <div class="c-line-center c-theme-bg"></div>
                </div>

                <div class="shop_product_another_content">
                    <div class="item_buy_list row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="item_buy_list_in">
                                <div class="item_buy_list_img">
                                    <a href="/mua-ngay/chi-tiet">
                                        <img class="item_buy_list_img-main" src="	https://shopas.net/storage/images/CGuYto7yjj_1645585924.jpg" alt="">
                                        <img class="item_buy_list_img-sale" src="https://shopas.net/storage/images/qf9WoDujJ6_1618225522.png"  alt="">
                                        <span>MS: 1338480</span>
                                    </a>
                                </div>
                                <div class="item_buy_list_description">
                                    bảo hành 100%,lỗi hoàn tiền
                                </div>
                                <div class="item_buy_list_info">
                                    <div class="row">
                                        <div class="col-6 item_buy_list_info_in">
                                            Đăng ký : <b>Facebook</b>
                                        </div>
                                        <div class="col-6 item_buy_list_info_in">
                                            Pet : <b>Có</b>
                                        </div>
                                        <div class="col-6 item_buy_list_info_in">
                                            Rank : <b>Kim cương</b>
                                        </div>
                                        <div class="col-6 item_buy_list_info_in">
                                            Ghi chú : <b>Tuyệt vời</b>
                                        </div>

                                    </div>
                                </div>
                                <div class="item_buy_list_more">
                                    <div class="row">
                                        <div class="col-12 ">
                                            <div class="item_buy_list_price">
                                                <span>5,757,600đ </span>
                                                2,399,000đ
                                            </div>

                                        </div>
                                        <a href="/mua-ngay/chi-tiet" class="col-12">
                                            <div class="item_buy_list_view">
                                                Chi tiết
                                            </div>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="item_buy_list_in">
                                <div class="item_buy_list_img">
                                    <a href="/mua-ngay/chi-tiet">
                                        <img class="item_buy_list_img-main" src="	https://shopas.net/storage/images/CGuYto7yjj_1645585924.jpg" alt="">
                                        <img class="item_buy_list_img-sale" src="https://shopas.net/storage/images/qf9WoDujJ6_1618225522.png"  alt="">
                                        <span>MS: 1338480</span>
                                    </a>
                                </div>
                                <div class="item_buy_list_description">
                                    bảo hành 100%,lỗi hoàn tiền
                                </div>
                                <div class="item_buy_list_info">
                                    <div class="row">
                                        <div class="col-6 item_buy_list_info_in">
                                            Đăng ký : <b>Facebook</b>
                                        </div>
                                        <div class="col-6 item_buy_list_info_in">
                                            Pet : <b>Có</b>
                                        </div>
                                        <div class="col-6 item_buy_list_info_in">
                                            Rank : <b>Kim cương</b>
                                        </div>
                                        <div class="col-6 item_buy_list_info_in">
                                            Ghi chú : <b>Tuyệt vời</b>
                                        </div>

                                    </div>
                                </div>
                                <div class="item_buy_list_more">
                                    <div class="row">
                                        <div class="col-12 ">
                                            <div class="item_buy_list_price">
                                                <span>5,757,600đ </span>
                                                2,399,000đ
                                            </div>

                                        </div>
                                        <a href="/mua-ngay/chi-tiet" class="col-12">
                                            <div class="item_buy_list_view">
                                                Chi tiết
                                            </div>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="item_buy_list_in">
                                <div class="item_buy_list_img">
                                    <a href="/mua-ngay/chi-tiet">
                                        <img class="item_buy_list_img-main" src="	https://shopas.net/storage/images/CGuYto7yjj_1645585924.jpg" alt="">
                                        <img class="item_buy_list_img-sale" src="https://shopas.net/storage/images/qf9WoDujJ6_1618225522.png"  alt="">
                                        <span>MS: 1338480</span>
                                    </a>
                                </div>
                                <div class="item_buy_list_description">
                                    bảo hành 100%,lỗi hoàn tiền
                                </div>
                                <div class="item_buy_list_info">
                                    <div class="row">
                                        <div class="col-6 item_buy_list_info_in">
                                            Đăng ký : <b>Facebook</b>
                                        </div>
                                        <div class="col-6 item_buy_list_info_in">
                                            Pet : <b>Có</b>
                                        </div>
                                        <div class="col-6 item_buy_list_info_in">
                                            Rank : <b>Kim cương</b>
                                        </div>
                                        <div class="col-6 item_buy_list_info_in">
                                            Ghi chú : <b>Tuyệt vời</b>
                                        </div>

                                    </div>
                                </div>
                                <div class="item_buy_list_more">
                                    <div class="row">
                                        <div class="col-12 ">
                                            <div class="item_buy_list_price">
                                                <span>5,757,600đ </span>
                                                2,399,000đ
                                            </div>

                                        </div>
                                        <a href="/mua-ngay/chi-tiet" class="col-12">
                                            <div class="item_buy_list_view">
                                                Chi tiết
                                            </div>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="item_buy_list_in">
                                <div class="item_buy_list_img">
                                    <a href="/mua-ngay/chi-tiet">
                                        <img class="item_buy_list_img-main" src="	https://shopas.net/storage/images/CGuYto7yjj_1645585924.jpg" alt="">
                                        <img class="item_buy_list_img-sale" src="https://shopas.net/storage/images/qf9WoDujJ6_1618225522.png"  alt="">
                                        <span>MS: 1338480</span>
                                    </a>
                                </div>
                                <div class="item_buy_list_description">
                                    bảo hành 100%,lỗi hoàn tiền
                                </div>
                                <div class="item_buy_list_info">
                                    <div class="row">
                                        <div class="col-6 item_buy_list_info_in">
                                            Đăng ký : <b>Facebook</b>
                                        </div>
                                        <div class="col-6 item_buy_list_info_in">
                                            Pet : <b>Có</b>
                                        </div>
                                        <div class="col-6 item_buy_list_info_in">
                                            Rank : <b>Kim cương</b>
                                        </div>
                                        <div class="col-6 item_buy_list_info_in">
                                            Ghi chú : <b>Tuyệt vời</b>
                                        </div>

                                    </div>
                                </div>
                                <div class="item_buy_list_more">
                                    <div class="row">
                                        <div class="col-12 ">
                                            <div class="item_buy_list_price">
                                                <span>5,757,600đ </span>
                                                2,399,000đ
                                            </div>

                                        </div>
                                        <a href="/mua-ngay/chi-tiet" class="col-12">
                                            <div class="item_buy_list_view">
                                                Chi tiết
                                            </div>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="item_buy_list_in">
                                <div class="item_buy_list_img">
                                    <a href="/mua-ngay/chi-tiet">
                                        <img class="item_buy_list_img-main" src="	https://shopas.net/storage/images/CGuYto7yjj_1645585924.jpg" alt="">
                                        <img class="item_buy_list_img-sale" src="https://shopas.net/storage/images/qf9WoDujJ6_1618225522.png"  alt="">
                                        <span>MS: 1338480</span>
                                    </a>
                                </div>
                                <div class="item_buy_list_description">
                                    bảo hành 100%,lỗi hoàn tiền
                                </div>
                                <div class="item_buy_list_info">
                                    <div class="row">
                                        <div class="col-6 item_buy_list_info_in">
                                            Đăng ký : <b>Facebook</b>
                                        </div>
                                        <div class="col-6 item_buy_list_info_in">
                                            Pet : <b>Có</b>
                                        </div>
                                        <div class="col-6 item_buy_list_info_in">
                                            Rank : <b>Kim cương</b>
                                        </div>
                                        <div class="col-6 item_buy_list_info_in">
                                            Ghi chú : <b>Tuyệt vời</b>
                                        </div>

                                    </div>
                                </div>
                                <div class="item_buy_list_more">
                                    <div class="row">
                                        <div class="col-12 ">
                                            <div class="item_buy_list_price">
                                                <span>5,757,600đ </span>
                                                2,399,000đ
                                            </div>

                                        </div>
                                        <a href="/mua-ngay/chi-tiet" class="col-12">
                                            <div class="item_buy_list_view">
                                                Chi tiết
                                            </div>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="item_buy_list_in">
                                <div class="item_buy_list_img">
                                    <a href="/mua-ngay/chi-tiet">
                                        <img class="item_buy_list_img-main" src="	https://shopas.net/storage/images/CGuYto7yjj_1645585924.jpg" alt="">
                                        <img class="item_buy_list_img-sale" src="https://shopas.net/storage/images/qf9WoDujJ6_1618225522.png"  alt="">
                                        <span>MS: 1338480</span>
                                    </a>
                                </div>
                                <div class="item_buy_list_description">
                                    bảo hành 100%,lỗi hoàn tiền
                                </div>
                                <div class="item_buy_list_info">
                                    <div class="row">
                                        <div class="col-6 item_buy_list_info_in">
                                            Đăng ký : <b>Facebook</b>
                                        </div>
                                        <div class="col-6 item_buy_list_info_in">
                                            Pet : <b>Có</b>
                                        </div>
                                        <div class="col-6 item_buy_list_info_in">
                                            Rank : <b>Kim cương</b>
                                        </div>
                                        <div class="col-6 item_buy_list_info_in">
                                            Ghi chú : <b>Tuyệt vời</b>
                                        </div>

                                    </div>
                                </div>
                                <div class="item_buy_list_more">
                                    <div class="row">
                                        <div class="col-12 ">
                                            <div class="item_buy_list_price">
                                                <span>5,757,600đ </span>
                                                2,399,000đ
                                            </div>

                                        </div>
                                        <a href="/mua-ngay/chi-tiet" class="col-12">
                                            <div class="item_buy_list_view">
                                                Chi tiết
                                            </div>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

{{--                @include('frontend.widget.__account__category',['sliders',$sliders])--}}

            </div>
        </div>
    </div>

    <div class="modal fade" id="LoadModal" role="dialog" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="loader" style="text-align: center"><img src="/assets/frontend/images/loader.gif" style="width: 50px;height: 50px;display: none"></div>
            <div class="modal-content">
            </div>
        </div>
    </div>

    @if ($content = Session::get('content'))
        <div class="modal fade" id="noticeAfterModal" style="display: none;" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Thông báo</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>

                    <div class="modal-body" style="font-family: helvetica, arial, sans-serif;">
                        {!!$content!!}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#noticeAfterModal').modal('show');
            });
        </script>
    @endif

    <script src="/assets/frontend/js/account/buyacc.js"></script>


@endsection

