@extends('frontend.layouts.master')
@section('seo_head')
    @include('frontend.widget.__seo_head',with(['data'=>$data]))
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
        <div class="item_buy">
            <div class="news_breadcrumbs">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-md-12">
                            <ul class="news_breadcrumbs_theme news_breadcrumbs_theme__show">
                                <li><a href="/" class="news_breadcrumbs_theme_trangchu news_breadcrumbs_theme_trangchu_a">Trang chủ</a></li>
                                <li>/</li>
                                <li><a href="/mua-acc" class="news_breadcrumbs_theme_tintuc_a"><p class="news_breadcrumbs_theme_tintuc">Mua Acc</p></a></li>
                                <li>/</li>
                                <li class="news_breadcrumbs_theme__li"><a href="javascript:void(0)" class="news_breadcrumbs_theme_title_a"><p class="news_breadcrumbs_theme_title">{{ isset($data->custom->title) ? $data->custom->title :  $data->title }}</p></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="booking_detail"></div>
            <div class="container pt-3">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="alert alert-info box-text hidetext" role="alert">
                            <h1 class="alert-heading h1_category" style="color:#000">{{ isset($data->custom->title) ? $data->custom->title :  $data->title }}</h1>
                            @if(isset($data->description))
                                {!! isset($data->custom->description) ? $data->custom->description :  $data->description !!}
                            @endif
                            <br>
                            @if(isset($data->content))
                                {!! isset($data->custom->content) ? $data->custom->content :  $data->content !!}
                            @endif
                        </div>
                        <div style="text-align: center;margin: 15px 0">
                            <span class="viewmore">Xem tất cả »</span>
                        </div>
                    </div>
                </div>

                <div class="item_buy_form">
                    <form class="form-charge form-charge__accountlist">
                        <div class="row" id="load_attribute">
                            @include('frontend.pages.account.widget.account_load_attribute_to_filter')
                        </div>
                    </form>
                </div>

                <div class="item_buy_filter">
                    <label for="item_buy_filter_input" class="item_buy_filter_in btn btn-success" style="cursor: pointer;">
                        <i class="fas fa-filter"></i> Tìm kiếm
                    </label>
                    <input type="checkbox" hidden class="item_buy_filter_input" id="item_buy_filter_input" >
                    <label for="item_buy_filter_input" class="item_buy_filter_overlay">

                    </label>
                    <div class="item_buy_form-mobile">
                        <div class="item_buy_form-mobile_title">
                            <label for="item_buy_filter_input" class="item_buy_form-mobile_close" >
                                <i class="fas fa-times"></i>
                            </label>
                            <p>Tìm kiếm</p>

                        </div>
                        <hr>
                        <div class="item_buy_form-mobile_search">
                            <form class="form-charge form-charge__accountlist-mobile">
                                <div class="row" id="load_attribute_mobile">
                                    @include('frontend.pages.account.widget.account_load_attribute_to_filter_mobile')
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

                <div id="account_data">
                    <div class="body-box-loadding result-amount-loadding">
                        <div class="d-flex justify-content-center">
                            <span class="pulser"></span>
                        </div>
                    </div>

                    @include('frontend.pages.account.widget.__datalist')
                </div>


                <input type="hidden" name="hidden_page" id="hidden_page_service" value="1" />

            </div>
        </div>

        <input type="hidden" value="{{ $slug }}" name="slug" class="slug">
        {{--    <input type="hidden" value="{{ $slug_category }}" name="slug_category" class="slug_category">--}}
        <input type="hidden" name="id_data" class="id_data" value="">
        <input type="hidden" name="title_data" class="title_data" value="">
        <input type="hidden" name="price_data" class="price_data" value="">
        <input type="hidden" name="select_data" class="select_data" value="">
        <input type="hidden" name="status_data" class="status_data" value="">
        <input type="hidden" name="sort_by_data" class="sort_by_data" value="">

        <div class="modal fade modal__buyacount loadModal__acount" id="LoadModal" role="dialog" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog__account" role="document">
                <div class="loader" style="text-align: center"><img src="/assets/frontend/{{theme('')->theme_key}}/images/loader.gif" style="width: 50px;height: 50px;display: none"></div>
                <div class="modal-content modal-content_accountlist">
                    <form class="formDonhangAccount" action="" method="POST">
                        {{ csrf_field() }}
                        <div class="modal-header">
                            <h4 class="modal-title">Xác nhận mua tài khoản</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <div class="c-content-tab-4 c-opt-3" role="tabpanel">
                                <ul class="nav nav-justified nav-justified__ul" role="tablist">
                                    <li role="presentation" class="active justified__ul_li">
                                        <a href="#paymentv2" role="tab" data-toggle="tab" aria-selected="true" class="c-font-16 active">Thanh toán</a>
                                    </li>
                                    <li role="presentation" class="justified__ul_li">
                                        <a href="#info2" role="tab" data-toggle="tab" aria-selected="false" class="c-font-16">Tài khoản</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active show" id="paymentv2">
                                        <ul class="c-tab-items p-t-0 p-b-0 p-l-5 p-r-5">
                                            <li class="c-font-dark">
                                                <table class="table table-striped">
                                                    <tbody><tr>
                                                        <th colspan="2" class="data__tttk">

                                                        </th>
                                                    </tr>
                                                    </tbody><tbody>
                                                    <tr>
                                                        <td>Nhà phát hành:</td>
                                                        <th class="data__title">

                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <td>Tên game:</td>

                                                        <th class="data__game">

                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <td>Giá tiền:</td>
                                                        <th class="text-info data__price">

                                                        </th>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </li>
                                        </ul>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="info2">
                                        <ul class="c-tab-items p-t-0 p-b-0 p-l-5 p-r-5">
                                            <li class="c-font-dark">
                                                <table class="table table-striped">
                                                    <tbody class="data__table">

                                                    </tbody>
                                                </table>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group form-group_buyacc form__data__buyacc">
                                {{--            @if(App\Library\AuthCustom::check())--}}

                                {{--                @if(isset($balance))--}}
                                {{--                    @if($balance < $data->price)--}}
                                {{--                        <div class="col-md-12"><label class="form-control-label text-danger" style="text-align: center;margin: 10px 0; ">Bạn không đủ số dư để mua tài khoản này. Bạn hãy click vào nút nạp thẻ để nạp thêm và mua tài khoản.</label></div>--}}
                                {{--                    @else--}}
                                {{--                        <div class="col-md-12"><label class="form-control-label" style="text-align: center;margin: 10px 0; ">Tài khoản của bạn chưa cấu hình bảo mật ODP nên chỉ cần click vào nút xác nhận mua để hoàn tất giao dịch</label></div>--}}
                                {{--                    @endif--}}
                                {{--                @endif--}}

                                {{--            @else--}}
                                {{--                <label class="col-md-12 form-control-label text-danger" style="text-align: center;margin: 10px 0; ">Bạn phải đăng nhập mới có thể mua tài khoản tự động.</label>--}}
                                {{--            @endif--}}

                            </div>

                            <div style="clear: both"></div>
                        </div>

                        <div class="modal-footer data__modal__buyacc">

                            {{--        @if(App\Library\AuthCustom::check())--}}

                            {{--            @if(isset($balance))--}}
                            {{--                @if($balance < $data->price)--}}
                            {{--                    --}}{{--            <button type="submit" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold"  id="d3" style="">Xác nhận mua</button>--}}
                            {{--                    <a class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold gallery__bottom__span_bg__2" href="/nap-the" id="d3">Nạp thẻ cào</a>--}}
                            {{--                    <a class="btn c-bg-green-4 c-font-white c-btn-square c-btn-uppercase c-btn-bold load-modal gallery__bottom__span_bg__2" style="color: #FFFFFF" data-dismiss="modal" rel="/atm" data-dismiss="modal">Nạp từ ATM - Ví điện tử</a>--}}
                            {{--                @else--}}
                            {{--                    <button type="submit" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold loginBox__layma__button__displayabs"  id="d3" style="position: relative">Xác nhận mua<div class="row justify-content-center loading-data__muangay"></div></button>--}}
                            {{--                @endif--}}
                            {{--            @endif--}}
                            {{--        @else--}}
                            {{--            <a class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold" href="/login?return_url=/acc/{{ $data->randId }}">Đăng nhập</a>--}}
                            {{--        @endif--}}

                            {{--        <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>--}}

                        </div>
                    </form>
                    <style>

                        .c-content-tab-4.c-opt-3 > .nav > li > a {
                            color: #ffffff;
                            background-color: #d5e0ea;
                        }
                        .c-content-tab-4.c-opt-3 > .nav > li > a.active {
                            color: #ffffff;
                            background-color: #5bc2ce!important;
                        }
                        .c-content-tab-4 ul{
                            padding-left: 0!important;
                        }
                        .c-content-tab-4 ul li{
                            list-style: none!important;
                        }

                        .justified__ul_li{
                            width: 50% !important;
                            text-align: center!important;

                        }

                        .justified__ul_li a{
                            display: flex!important;
                            justify-content: center;
                            padding: 20px;
                        }
                        .justified__ul_li a:hover{
                            text-decoration: none!important;
                        }
                        .c-content-tab-4.c-opt-3 > .nav > li > a {
                            color: #ffffff;
                            background-color: #d5e0ea;
                        }
                    </style>
                </div>
            </div>
        </div>
        <script src="/assets/frontend/{{theme('')->theme_key}}/js/account/buyaccrandom.js"></script>
        <script src="/assets/frontend/{{theme('')->theme_key}}/js/account/account-list.js"></script>
    @endif

@endsection

