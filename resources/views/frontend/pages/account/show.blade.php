@extends('frontend.layouts.master')
@section('seo_head')
    @include('frontend.widget.__seo_head',with(['data'=>$data]))
@endsection
@section('content')

    <div class="shop_product_detail">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                    <div class="shop_product_header">
                        <p>#{{ $data->id }}</p>
                        <span>Nick Free Fire Giá Rẻ</span>
                    </div>
                </div>
                <div class="col-md-12 shop_product_info_mobile">
                    <a  data-fancybox="gallerycoverDetail" href="https://shopas.net/storage/images/hyi1T9DGM1_1645949761.jpg">
                        <img src="https://shopas.net/storage/images/hyi1T9DGM1_1645949761.jpg" alt="">
                    </a>
                    <div class="shop_product_info">
                        <div class="shop_product_info_divider">
                            <i class="fas fa-circle"></i>
                        </div>
                        <div class="row">
                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 shop_product_info_variant">
                                <p>ĐĂNG KÝ: <span>Facebook</span></p>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-4  shop_product_info_variant">
                                <p>Pet: <span>Có</span></p>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 shop_product_info_variant">
                                <p>Rank: <span>Bạc</span></p>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 shop_product_info_variant">
                                <p>Ghi chú: <span>Có</span></p>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 shop_product_info_variant">
                                <p>Thẻ vô cực: <span>Có</span></p>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 shop_product_info_variant">
                                <p>Nổi bật: <span>Có</span></p>
                            </div>
                        </div>
                        <div class="shop_product_info_divider">
                            <i class="fas fa-circle"></i>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                    <div class="shop_product_price">
                        <div>
                            {{ formatPrice($data->price_old) }} CARD
                        </div>
                        <div>
                            {{ formatPrice($data->price) }} ATM
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                    <div class="shop_product_header">
                        <button class="mustcard btn c-btn btn-lg c-theme-btn c-font-uppercase c-font-bold c-btn-square m-t-20">
                            Mua ngay
                        </button>
                        <a href="" class="btn c-btn btn-lg c-bg-green-4 c-font-white c-font-uppercase c-font-bold c-btn-square m-t-20">ATM - Ví điện tử</a>
                        <a href="" class="btn c-btn btn-lg c-bg-green-4 c-font-white c-font-uppercase c-font-bold c-btn-square m-t-20">Nạp thẻ cào</a>
                    </div>
                </div>
            </div>
            <div class="shop_product_info shop_product_info_desktop">
                <div class="shop_product_info_divider">
                    <i class="fas fa-circle"></i>
                </div>
                <div class="row">
                    <div class="col-md-4 shop_product_info_variant">
                        <p>ĐĂNG KÝ: <span>Facebook</span></p>
                    </div>
                    <div class="col-md-4 shop_product_info_variant">
                        <p>Pet: <span>Có</span></p>
                    </div>
                    <div class="col-md-4 shop_product_info_variant">
                        <p>Rank: <span>Bạc</span></p>
                    </div>
                    <div class="col-md-4 shop_product_info_variant">
                        <p>Ghi chú: <span>Có</span></p>
                    </div>
                    <div class="col-md-4 shop_product_info_variant">
                        <p>Thẻ vô cực: <span>Có</span></p>
                    </div>
                    <div class="col-md-12 shop_product_info_variant">
                        <p>Nổi bật: <span>Có</span></p>
                    </div>
                </div>
                <div class="shop_product_info_divider">
                    <i class="fas fa-circle"></i>
                </div>
            </div>
            <div class="shop_product_post">
                <div class="div">
                    @foreach(explode('|',$data->image_extension) as $val)
                        <a data-fancybox="gallerycoverDetail" href="https://media-tt.nick.vn/{{ $val }}">
                            <img src="https://media-tt.nick.vn/{{ $val }}" alt="">
                        </a>
                    @endforeach
                </div>
                <div class="pt-3">
                    <button class="mustcard btn c-btn btn-lg c-theme-btn c-font-uppercase c-font-bold c-btn-square m-t-20">Mua ngay</button>
                </div>
            </div>

            <div class="shop_product_another pt-3">
                <div class="c-content-title-1">
                    <h3 class="c-center c-font-uppercase c-font-bold title__tklienquan">Tài khoản liên quan</h3>
                    <div class="c-line-center c-theme-bg"></div>
                </div>

                @include('frontend.widget.__account__category')

            </div>
        </div>
    </div>
@endsection

