@extends('frontend.layouts.master')
@section('seo_head')
    @include('frontend.widget.__seo_head',with(['data'=>$data]))
@endsection
@section('meta_robots')
    <meta name="robots" content="noindex,nofollow" />
@endsection
@section('content')

    @if($data == null)
        <div class="item_buy">

            <div class="container pt-3">
                <div class="row pb-3 pt-3">
                    <div class="col-md-12 text-center">
                        <span style="color: red;font-size: 16px;">
                            @if(isset($message))
                                {{ $message }}
                            @else
                                Hiện tại không có dữ liệu nào phù hợp với yêu cầu của bạn! Hệ thống cập nhật nick thường xuyên bạn vui lòng theo dõi web trong thời gian tới !
                            @endif
                        </span>
                    </div>
                </div>

            </div>

        </div>
    @else
        <div class="not__data shop_product_detailS">
            <div class="news_breadcrumbs">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-md-12 data__menuacc">

                        </div>
                    </div>
                </div>
            </div>

            <div class="container pt-3 fixcssacount">
                <div class="row container__show">

                    <div class="col-md-12 left-right" id="showdetailacc">
                        <div class="body-box-loadding result-amount-loadding">
                            <div class="d-flex justify-content-center" style="padding-top: 112px;">
                                <span class="pulser"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row container__show">
                    <div class="col-md-12 left-right">
                        @if(isset($data->category->custom->slug) ? $data->category->custom->slug == 'nick-lien-minh' :  $data->category->slug == 'nick-lien-minh')
                            <div class="row marginauto data__chitietnick">
                                <div class="col-md-12 left-right" id="">
                                    <div class="shop_product_another pt-3">
                                        <div class="c-content-title-1">
                                            <h3 class="c-center c-font-uppercase c-font-bold title__tklienquan">Chi tiết Nick</h3>
                                            <div class="c-line-center c-theme-bg"></div>
                                        </div>

                                        <div class="description_product">

                                            <ul class="nav nav-tab-booking" role="tablist" style="">
                                                <li role="presentation" class="" >
                                                    <a  class="nav-item active" data-toggle="tab" href="#acc_info" role="tab"  >
                                                        Thông tin
                                                    </a>
                                                </li>
                                                <li role="presentation" class="" >
                                                    <a  class="nav-item " data-toggle="tab" href="#champions-tab" role="tab"  >
                                                        Tướng

                                                    </a>
                                                </li>
                                                <li role="presentation" class="" >
                                                    <a  class="nav-item " data-toggle="tab" href="#acc_costume" role="tab"  >
                                                        Trang phục

                                                    </a>
                                                </li>
                                                <li role="presentation" class="" >
                                                    <a  class="nav-item " data-toggle="tab" href="#acc_color" role="tab"  >
                                                        Đa sắc

                                                    </a>
                                                </li>
                                                <li role="presentation" class="" >
                                                    <a  class="nav-item " data-toggle="tab" href="#tftcompanions-tab" role="tab"  >
                                                        Linh thú TFT

                                                    </a>
                                                </li>
                                                <li role="presentation" class="" >
                                                    <a  class="nav-item " data-toggle="tab" href="#tftdamageskins-tab" role="tab"  >
                                                        Sân đấu TFT

                                                    </a>
                                                </li>
                                                <li role="presentation" class="" >
                                                    <a  class="nav-item " data-toggle="tab" href="#tftmapskins-tab" role="tab"  >
                                                        Chưởng lực TFT

                                                    </a>
                                                </li>

                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane  fade show active" id="acc_info">

                                                </div>
                                                <div class="tab-pane  fade show" id="champions-tab">
                                                    <div class="acc_search" style="padding-top: 12px">
                                                        <input type="text" class="form-control m-b-20" placeholder="Tìm kiếm">

                                                    </div>
                                                    <div class="row m-0" id="champions-list">
                                                        <div class="costume_item col-lg-3 col-md-4 col-6 fixcssacount">
                                                            <div class="costume_item_detail">
                                                                <a data-fancybox="champions-list" href="/assets/frontend/theme_1/images/trangphuc.jpg">
                                                                    <div class="costume_image">
                                                                        <img src="/assets/frontend/theme_1/images/trangphuc.jpg" alt="">
                                                                        <span class="costume_title">
                                                            Annie Quàng Khăn Đỏ
                                                        </span>
                                                                    </div>

                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="costume_item col-lg-3 col-md-4 col-6 fixcssacount">
                                                            <div class="costume_item_detail">
                                                                <a data-fancybox="champions-list" href="/assets/frontend/theme_1/images/trangphuc.jpg">
                                                                    <div class="costume_image">
                                                                        <img src="/assets/frontend/theme_1/images/trangphuc.jpg" alt="">
                                                                        <span class="costume_title">
                                                            Annie Quàng Khăn Đỏ
                                                        </span>
                                                                    </div>

                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="costume_item col-lg-3 col-md-4 col-6 fixcssacount">
                                                            <div class="costume_item_detail">
                                                                <a data-fancybox="champions-list" href="/assets/frontend/theme_1/images/trangphuc.jpg">
                                                                    <div class="costume_image">
                                                                        <img src="/assets/frontend/theme_1/images/trangphuc.jpg" alt="">
                                                                        <span class="costume_title">
                                                            Annie Quàng Khăn Đỏ
                                                        </span>
                                                                    </div>

                                                                </a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="tab-pane  fade show " id="acc_costume">
                                                    <div class="acc_search" style="padding-top: 12px">
                                                        <input type="text" class="form-control m-b-20" placeholder="Tìm kiếm">

                                                    </div>
                                                    <div class="row m-0" id="acc_costume_list">
                                                        <div class="generals_item col-lg-3 col-md-4 col-4 p-8">
                                                            <a data-fancybox="acc_costume_list" href="/assets/frontend/theme_1/images/tuong.png">
                                                                <div class="generals_image">
                                                                    <img src="/assets/frontend/theme_1/images/tuong.png" alt="">
                                                                    <span class="generals_title">
                                                           Galio
                                                    </span>
                                                                </div>

                                                            </a>
                                                        </div>
                                                        <div class="generals_item col-lg-3 col-md-4 col-4 p-8">
                                                            <a data-fancybox="acc_costume_list" href="/assets/frontend/theme_1/images/tuong.png">
                                                                <div class="generals_image">
                                                                    <img src="/assets/frontend/theme_1/images/tuong.png" alt="">
                                                                    <span class="generals_title">
                                                           Galio
                                                    </span>
                                                                </div>

                                                            </a>
                                                        </div>




                                                    </div>
                                                </div>
                                                <div class="tab-pane  fade show " id="acc_color">
                                                    <div class="acc_search" style="padding-top: 12px">
                                                        <input type="text" class="form-control m-b-20" placeholder="Tìm kiếm">

                                                    </div>
                                                    <div class="row m-0" id="acc_color_list">
                                                        <div class="costume_item col-lg-3 col-md-4 col-6 fixcssacount">
                                                            <div class="costume_item_detail">
                                                                <a data-fancybox="acc_color_list" href="/assets/frontend/theme_1/images/dasac.png">
                                                                    <div class="costume_image">
                                                                        <img src="/assets/frontend/theme_1/images/dasac.png" alt="">
                                                                        <span class="costume_title">
                                                           Fiddlesticks Tướng Cướp

                                                        </span>
                                                                    </div>

                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="costume_item col-lg-3 col-md-4 col-6 fixcssacount">
                                                            <div class="costume_item_detail">
                                                                <a data-fancybox="acc_color_list" href="/assets/frontend/theme_1/images/dasac2.png">
                                                                    <div class="costume_image">
                                                                        <img src="/assets/frontend/theme_1/images/dasac2.png" alt="">
                                                                        <span class="costume_title">
                                                           Fiddlesticks Tướng Cướp

                                                        </span>
                                                                    </div>

                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="costume_item col-lg-3 col-md-4 col-6 fixcssacount">
                                                            <div class="costume_item_detail">
                                                                <a data-fancybox="acc_color_list" href="/assets/frontend/theme_1/images/dasac3.png">
                                                                    <div class="costume_image">
                                                                        <img src="/assets/frontend/theme_1/images/dasac3.png" alt="">
                                                                        <span class="costume_title">
                                                           Fiddlesticks Tướng Cướp

                                                        </span>
                                                                    </div>

                                                                </a>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                                <div class="tab-pane  fade show" id="tftcompanions-tab">
                                                    <div class="acc_search" style="padding-top: 12px">
                                                        <input type="text" class="form-control m-b-20" placeholder="Tìm kiếm">

                                                    </div>
                                                    <div class="row m-0" id="tftcompanions_list">
                                                        <div class="skin_item col-lg-3 col-md-4 col-6 fixcssacount">
                                                            <div class="skin_item_detail">
                                                                <a data-fancybox="tftcompanions_list" href="/assets/frontend/theme_1/images/linhthu.png">
                                                                    <div class="skin_image">
                                                                        <img src="/assets/frontend/theme_1/images/linhthu.png" alt="">

                                                                    </div>
                                                                    <div class="skin_title">
                                                                        Fiddlesticks Tướng Cướp

                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="skin_item col-lg-3 col-md-4 col-6 fixcssacount">
                                                            <div class="skin_item_detail">
                                                                <a data-fancybox="tftcompanions_list" href="/assets/frontend/theme_1/images/linhthu.png">
                                                                    <div class="skin_image">
                                                                        <img src="/assets/frontend/theme_1/images/linhthu.png" alt="">

                                                                    </div>
                                                                    <div class="skin_title">
                                                                        Fiddlesticks Tướng Cướp

                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="skin_item col-lg-3 col-md-4 col-6 fixcssacount">
                                                            <div class="skin_item_detail">
                                                                <a data-fancybox="tftcompanions_list" href="/assets/frontend/theme_1/images/linhthu3.png">
                                                                    <div class="skin_image">
                                                                        <img src="/assets/frontend/theme_1/images/linhthu3.png" alt="">

                                                                    </div>
                                                                    <div class="skin_title">
                                                                        Fiddlesticks Tướng Cướp

                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="skin_item col-lg-3 col-md-4 col-6 fixcssacount">
                                                            <div class="skin_item_detail">
                                                                <a data-fancybox="tftcompanions_list" href="/assets/frontend/theme_1/images/linhthu2.png">
                                                                    <div class="skin_image">
                                                                        <img src="/assets/frontend/theme_1/images/linhthu2.png" alt="">

                                                                    </div>
                                                                    <div class="skin_title">
                                                                        Fiddlesticks Tướng Cướp

                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>



                                                    </div>
                                                </div>
                                                <div class="tab-pane  fade show" id="tftdamageskins-tab">
                                                    <div class="acc_search" style="padding-top: 12px">
                                                        <input type="text" class="form-control m-b-20" placeholder="Tìm kiếm">

                                                    </div>
                                                    <div class="row m-0" id="tftdamageskins_list">
                                                        <div class="skin_item col-lg-3 col-md-4 col-6 fixcssacount">
                                                            <div class="skin_item_detail">
                                                                <a data-fancybox="tftdamageskins_list" href="/assets/frontend/theme_1/images/sandau.png">
                                                                    <div class="skin_image">
                                                                        <img src="/assets/frontend/theme_1/images/sandau.png" alt="">
                                                                        <div class="mapskin_title">
                                                                            Fiddlesticks Tướng Cướp

                                                                        </div>
                                                                    </div>

                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="skin_item col-lg-3 col-md-4 col-6 fixcssacount">
                                                            <div class="skin_item_detail">
                                                                <a data-fancybox="tftdamageskins_list" href="/assets/frontend/theme_1/images/sandau2.png">
                                                                    <div class="skin_image">
                                                                        <img src="/assets/frontend/theme_1/images/sandau2.png" alt="">
                                                                        <div class="mapskin_title">
                                                                            Fiddlesticks Tướng Cướp

                                                                        </div>
                                                                    </div>

                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="skin_item col-lg-3 col-md-4 col-6">
                                                            <div class="skin_item_detail">
                                                                <a data-fancybox="tftdamageskins_list" href="/assets/frontend/theme_1/images/sandau3.png">
                                                                    <div class="skin_image">
                                                                        <img src="/assets/frontend/theme_1/images/sandau3.png" alt="">
                                                                        <div class="mapskin_title">
                                                                            Fiddlesticks Tướng Cướp

                                                                        </div>
                                                                    </div>

                                                                </a>
                                                            </div>
                                                        </div>



                                                    </div>
                                                </div>
                                                <div class="tab-pane  fade show" id="tftmapskins-tab">
                                                    <div class="acc_search" style="padding-top: 12px">
                                                        <input type="text" class="form-control m-b-20 fixcssacount" placeholder="Tìm kiếm">

                                                    </div>
                                                    <div class="row m-0" id="tftmapskins_list">
                                                        <div class="skin_item col-lg-3 col-md-4 col-6 fixcssacount">
                                                            <div class="skin_item_detail">
                                                                <a data-fancybox="tftmapskins_list" href="/assets/frontend/theme_1/images/damdon.png">
                                                                    <div class="skin_image">
                                                                        <img src="/assets/frontend/theme_1/images/damdon.png" alt="">
                                                                        <div class="mapskin_title">
                                                                            Fiddlesticks Tướng Cướp

                                                                        </div>
                                                                    </div>

                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="skin_item col-lg-3 col-md-4 col-6 fixcssacount">
                                                            <div class="skin_item_detail">
                                                                <a data-fancybox="tftmapskins_list" href="/assets/frontend/theme_1/images/damdon.png">
                                                                    <div class="skin_image">
                                                                        <img src="/assets/frontend/theme_1/images/damdon.png" alt="">
                                                                        <div class="mapskin_title">
                                                                            Fiddlesticks Tướng Cướp

                                                                        </div>
                                                                    </div>

                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="skin_item col-lg-3 col-md-4 col-6 fixcssacount">
                                                            <div class="skin_item_detail">
                                                                <a data-fancybox="tftmapskins_list" href="/assets/frontend/theme_1/images/damdon.png">
                                                                    <div class="skin_image">
                                                                        <img src="/assets/frontend/theme_1/images/damdon.png" alt="">
                                                                        <div class="mapskin_title">
                                                                            Fiddlesticks Tướng Cướp

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
                                </div>
                            </div>
                        @endif

                        @if(isset($data->description))
                            <div class="shop_product_another">
                                <div class="c-content-title-1">
                                    <h3 class="c-center c-font-uppercase c-font-bold title__tklienquan">CHI TIẾT</h3>
                                    <div class="c-line-center c-theme-bg"></div>
                                </div>

                                <div class="shop_product_another_content">
                                    <div class="item_buy_list row">
                                        <div class="col-md-12">
                                            <span>{!! $data->description !!}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="row marginauto">
                    <div class="col-md-12 left-right" id="showslideracc">
                        <div class="body-box-loadding result-amount-loadding">
                            <div class="d-flex justify-content-center" style="padding-top: 112px;">
                                <span class="pulser"></span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <input type="hidden" name="slug" class="slug" value="{{ $slug }}">

        <input type="hidden" name="slug" class="slug_category" value="{{ $slug_category }}">

        <script src="/assets/frontend/{{theme('')->theme_key}}/js/account/buyacc.js"></script>
        <script src="/assets/frontend/{{theme('')->theme_key}}/js/account/buyaccslider.js"></script>
    @endif
@endsection

