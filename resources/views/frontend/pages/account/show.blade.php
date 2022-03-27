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
                                @foreach(explode('|',$data->image_extension) as $val)
                                    <div class="swiper-slide">
                                        <a data-fancybox="gallerycoverDetail" href="https://media-tt.nick.vn/{{ $val }}">
                                            <img src="https://media-tt.nick.vn/{{ $val }}" alt="">
                                        </a>
                                    </div>
                                @endforeach
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
                                @foreach(explode('|',$data->image_extension) as $val)
                                    <div class="swiper-slide">
                                        <a data-fancybox="gallerycoverDetail" href="https://media-tt.nick.vn/{{ $val }}">
                                            <img src="https://media-tt.nick.vn/{{ $val }}" alt="">
                                        </a>
                                    </div>
                                @endforeach
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
                                            <span class="gallery__01__span">#{{ $data->id }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 gallery__01__row2">
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="gallery__02__span">Danh mục:</span>
                                        </div>
                                        <div class="col-md-8  pl-0">
                                            <span class="gallery__02__span">{{ $data_category->title }}</span>
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
{{--                        @dd($data)--}}
                        @if(isset($data->groups))
                            <?php $att_values = $data->groups ?>
                            @foreach($att_values as $att_value)
                                @if($att_value->module == 'acc_label')
                                    <div class="col-md-12">
                                        <div class="row gallery__03">
                                            <div class="col-md-12 gallery__01__row">
                                                <div class="row">
                                                    <div class="col-auto span__dangky__auto">
                                                        <i class="fas fa-angle-right"></i>
                                                    </div>
                                                    <div class="col-md-4 pl-0">
                                                        <span class="span__dangky">{{ $att_value->parent[0]->title }}</span>
                                                    </div>
                                                    <div class="col-md-6 pl-0">
                                                        <span class="span__dangky">{{ $att_value->title }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                            <?php $params = json_decode(json_encode($data->params->ext_info),true) ?>
                        @if(!is_null($dataAttribute) && count($dataAttribute)>0)
                            @foreach($dataAttribute as $index=>$att)
                                @if($att->position == 'text')
                                    @if(isset($att->childs))
                                        @foreach($att->childs as $child)
                                            @foreach($params as $key => $param)
                                                @if($key == $child->id)
                                                    <div class="col-md-12">
                                                        <div class="row gallery__03">
                                                            <div class="col-md-12 gallery__01__row">
                                                                <div class="row">
                                                                    <div class="col-auto span__dangky__auto">
                                                                        <i class="fas fa-angle-right"></i>
                                                                    </div>
                                                                    <div class="col-md-4 pl-0">
                                                                        <span class="span__dangky">{{ $child->title }}</span>
                                                                    </div>
                                                                    <div class="col-md-6 pl-0">
                                                                        <span class="span__dangky">{{ $param }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        @endforeach
                                    @endif

                                @endif
                            @endforeach
                        @endif

                        <div class="col-md-12 gallery__bottom">
                            <div class="row text-center">
                                <div class="col-md-12 gallery__01__row">
                                    <div class="row gallery__01__row2">
                                        <div class="col-md-12 pl-0 pr-0">
                                            <button class="btn btn-danger gallery__bottom__span buyacc" data-id="{{ $data->id }}"><i class="fas fa-cart-arrow-down"></i>&ensp;Mua ngay</button>
                                        </div>
                                        <div class="col-md-12 pl-0 pr-0 gallery__bottom">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <a href="/recharge" class="btn btn-success gallery__bottom__span"><i class="fab fa-cc-visa"></i>&ensp;ATM - VÍ ĐIỆN TỬ</a>
                                                </div>
                                                <div class="col-md-6">
                                                    <a href="/nap-the" class="btn btn-success gallery__bottom__span"><i class="fas fa-barcode-alt"></i>&ensp;NẠP THẺ CÀO</a>
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
            @if(isset($sliders) && count($sliders))

            <div class="shop_product_another pt-3">
                <div class="c-content-title-1">
                    <h3 class="c-center c-font-uppercase c-font-bold title__tklienquan">Tài khoản liên quan</h3>
                    <div class="c-line-center c-theme-bg"></div>
                </div>

                <div class="shop_product_another_content">
                    <div class="item_buy_list row">
                        @foreach($sliders as $datav2)
                            @if($datav2->id != $data->id)
                            <div class="col-sm-6 col-lg-3">
                            <div class="item_buy_list_in">
                                <div class="item_buy_list_img">
                                    <a href="/acc/{{ $datav2->id }}">
                                        @if(isset($datav2->image))
                                            <img class="item_buy_list_img-main" src="https://media-tt.nick.vn/{{ $datav2->image }}" alt="{{ $datav2->title }}">
                                        @else
                                            <img src="https://shopas.net/storage/images/21TIENMOyn_1646042037.jpg" alt="">
                                        @endif

                                        @if(isset($datav2->image_icon))
                                        <img class="item_buy_list_img-sale" src="https://media-tt.nick.vn/{{ $datav2->image_icon }}"  alt="{{ $datav2->title }}">
                                        @else
                                        <img class="item_buy_list_img-sale" src="https://shopas.net/storage/images/qf9WoDujJ6_1618225522.png"  alt="">
                                        @endif
                                        <span>MS: {{ $datav2->id }}</span>
                                    </a>
                                </div>
                                <div class="item_buy_list_description">
                                    bảo hành 100%,lỗi hoàn tiền
                                </div>
                                <div class="item_buy_list_info">
                                    <div class="row">
                                        @if(isset($datav2->groups))
                                            <?php
                                            $att_valuesv2 = $datav2->groups;
                                            $index = 0;
                                            ?>
                                            @foreach($att_valuesv2 as $att_valuev2)
                                                @if($att_valuev2->module == 'acc_label')
                                                        <?php
                                                        $index++;
                                                        ?>
                                                    <div class="col-6 item_buy_list_info_in">
                                                        {{ $att_valuev2->parent[0]->title }} : <b>{{ $att_valuev2->title }}</b>
                                                    </div>
                                                @endif
                                            @endforeach
                                        @endif
                                        <?php $paramsv2 = json_decode(json_encode($datav2->params->ext_info),true) ?>
                                        @if(!is_null($dataAttribute) && count($dataAttribute)>0)
                                            @foreach($dataAttribute as $index=>$att)
                                                @if($att->position == 'text')
                                                    @if(isset($att->childs))
                                                        @foreach($att->childs as $child)
                                                            @foreach($paramsv2 as $key => $paramv2)
                                                                @if($key == $child->id)
                                                                        <?php
                                                                        $index++;
                                                                        ?>
                                                                    @if($index < 5)
                                                                    <div class="col-6 item_buy_list_info_in">
                                                                        {{ $child->title }} : <b>{{ $paramv2 }}</b>
                                                                    </div>
                                                                    @endif
                                                                @endif
                                                            @endforeach
                                                        @endforeach
                                                    @endif

                                                @endif
                                            @endforeach
                                        @endif

                                    </div>
                                </div>
                                <div class="item_buy_list_more">
                                    <div class="row">
                                        <div class="col-12 ">
                                            <div class="item_buy_list_price">
                                                <span>{{ formatPrice($datav2->price_old) }}đ </span>
                                                {{ formatPrice($datav2->price) }}đ
                                            </div>

                                        </div>
                                        <a href="/acc/{{ $datav2->id }}" class="col-12">
                                            <div class="item_buy_list_view">
                                                Chi tiết
                                            </div>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            @endif
            {{--                @include('frontend.widget.__account__category',['sliders',$sliders])--}}

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

