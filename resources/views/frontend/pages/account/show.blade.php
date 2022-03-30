@extends('frontend.layouts.master')
@section('seo_head')
    @include('frontend.widget.__seo_head',with(['data'=>$data_category]))
@endsection
@section('content')

    <div class="shop_product_detailS">
        <div class="news_breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-auto tintuc-auto pr-0">
                        <div class="news_breadcrumbs_title news_breadcrumbs_title__show"><a href="/danh-muc">Danh mục</a></div>
                    </div>
                    <div class="col-lg-10 col-md-12 ml-lg-auto">
                        <ul class="news_breadcrumbs_theme news_breadcrumbs_theme__show">
                            <li><a href="/" class="news_breadcrumbs_theme_trangchu news_breadcrumbs_theme_trangchu_a">Trang chủ</a></li>
                            <li>/</li>
                            <li><a href="/danh-muc/{{ $data_category->slug }}" class="news_breadcrumbs_theme_tintuc_a"><p class="news_breadcrumbs_theme_tintuc">{{ $data_category->title }}</p></a></li>
                            <li>/</li>
                            <li class="news_breadcrumbs_theme__li"><a href="javascript:void(0)" class="news_breadcrumbs_theme_title_a"><p class="news_breadcrumbs_theme_title">{{ $data->title }}</p></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container pt-3">
            <div class="row container__show">
                <div class="col-lg-6 col-md-12 shop_product_detailS__col">
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
                                <i class="fas fa-chevron-left"></i>
                            </div>
                            <div class="swiper-button-next">
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </div>

                        <div class="swiper gallery-thumbs gallery-thumbsmaxheadth">
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
                <div class="col-lg-6 col-md-12 gallery__right">
                    <div class="row gallery__row">
                        <div class="col-md-12">
                            <div class="row gallery__01">
                                <div class="col-md-12 gallery__01__row">
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="gallery__01__span">Mã số:</span>
                                        </div>
                                        <div class="col-md-8 col-8 pl-0">
                                            <span class="gallery__01__span">#{{ $data->id }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 gallery__01__row2">
                                    <div class="row">
                                        <div class="col-auto">
                                            <span class="gallery__02__span">Danh mục:</span>
                                        </div>
                                        <div class="col-md-8 col-8  pl-0">
                                            <span class="gallery__02__span">{{ $data_category->title }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if(isset($card_percent) && isset($atm_percent))
                        <div class="col-md-12 gallery__pt">
                            <div class="row gallery__02">
                                <div class="col-md-12 gallery__01__row">
                                    <div class="row">
                                        <div class="col-md-5 col-sm-5 col-5">
                                            <div class="row text-left">
                                                <div class="col-md-12">
                                                    <span class="gallery__02__span__02">THẺ CÀO</span>
                                                </div>
                                                <div class="col-md-12">
                                                    <span class="gallery__01__span__02">{{ formatPrice($card_percent*$data->price/100) }}đ</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-2 gallery__01__span__02md">
                                            <div class="row text-center">
                                                <div class="col-md-12">
                                                    <span class="hoac">Hoặc</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-sm-5 col-5">
                                            <div class="row text-right">
                                                <div class="col-md-12">
                                                    <span class="gallery__02__span__02">ATM chỉ cần</span>
                                                </div>
                                                <div class="col-md-12">
                                                    <span class="gallery__01__span__02">{{ formatPrice($atm_percent*$data->price/100) }}đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @else
                            <div class="col-md-12 gallery__pt">
                                <div class="row gallery__02" style="max-height: 60px;min-height: 60px">

                                </div>
                            </div>
                        @endif
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
                                                    <div class="col-md-4 col-4 pl-0">
                                                        <span class="span__dangky">{{ $att_value->parent[0]->title }}</span>
                                                    </div>
                                                    <div class="col-md-6 col-6 pl-0">
                                                        <span class="span__dangky">{{ $att_value->title }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                        @if(isset($data->params) && isset($data->params->ext_info))
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
                                                                    <div class="col-md-4 col-4 pl-0">
                                                                        <span class="span__dangky">{{ $child->title }}</span>
                                                                    </div>
                                                                    <div class="col-md-6 col-6 pl-0">
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
                        @endif
                        <div class="col-md-12 gallery__bottom">
                            <div class="row text-center">
                                <div class="col-md-12 gallery__01__row">
                                    <div class="row gallery__01__row2">
                                        <div class="col-md-12 pl-0 pr-0">
                                            <button class="btn btn-danger gallery__bottom__span gallery__bottom__span_bg buyacc" data-id="{{ $data->id }}"><i class="fas fa-cart-arrow-down"></i>&ensp;Mua ngay</button>
                                        </div>
                                        <div class="col-md-12 pl-0 pr-0 gallery__bottom">
                                            <div class="row atmvdtntc">
                                                <div class="col-md-6 col-sm-6 col-6 atmvdt">
                                                    @if(App\Library\AuthCustom::check())
                                                        <a href="/recharge-atm" class="btn btn-warning gallery__bottom__span_bg__2 gallery__bottom__span">ATM - VÍ ĐIỆN TỬ</a>
                                                    @else
                                                        <a href="/login" class="btn btn-warning gallery__bottom__span_bg__2 gallery__bottom__span">ATM - VÍ ĐIỆN TỬ</a>
                                                    @endif
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-6 ntc">
                                                    @if(App\Library\AuthCustom::check())
                                                        <a href="/nap-the" class="btn btn-warning gallery__bottom__span_bg__2 gallery__bottom__span">NẠP THẺ CÀO</a>
                                                    @else
                                                        <a href="/login" class="btn btn-warning gallery__bottom__span_bg__2 gallery__bottom__span">NẠP THẺ CÀO</a>
                                                    @endif

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
                            <div class="col-6 col-sm-6 col-lg-3">
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
                                        <?php
                                            $index = 0;
                                        ?>
                                        @if(isset($datav2->groups))
                                            <?php
                                            $att_valuesv2 = $datav2->groups;
                                            ?>
                                            @foreach($att_valuesv2 as $att_valuev2)
                                                @if($att_valuev2->module == 'acc_label')
                                                    <?php
                                                    $index++;
                                                    ?>
                                                    @if($index < 5)
                                                    <div class="col-6 item_buy_list_info_in">
                                                        {{ $att_valuev2->parent[0]->title }} : <b>{{ $att_valuev2->title }}</b>
                                                    </div>
                                                    @endif
                                                @endif
                                            @endforeach
                                        @endif
                                        @if(isset($datav2->params) && isset($datav2->params->ext_info))
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

    <div class="modal fade modal__buyacount loadModal__acount" id="LoadModal" role="dialog" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog__account" role="document">
            <div class="loader" style="text-align: center"><img src="/assets/frontend/images/loader.gif" style="width: 50px;height: 50px;display: none"></div>
            <div class="modal-content modal-content_accountlist">
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
{{--    <script src="/assets/frontend/js/account/buyacc.js"></script>--}}
    <script src="/assets/frontend/js/account/buyaccslider.js"></script>

@endsection

