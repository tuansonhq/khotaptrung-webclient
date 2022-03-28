@extends('frontend.layouts.master')
@section('seo_head')
    @include('frontend.widget.__seo_head')
@endsection
@section('content')
    <div class="item_buy">
        <div class="news_breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-auto tintuc-auto">
                        <div class="news_breadcrumbs_title"><a href="/dich-vụ" >Dịch vụ</a></div>
                    </div>
                    <div class="col-md-10 col-8 ml-auto">
                        <ul class="news_breadcrumbs_theme">
                            <li><a href="/" class="news_breadcrumbs_theme_trangchu news_breadcrumbs_theme_trangchu_a">Trang chủ</a></li>
                            <li>/</li>
                            <li><a href="/dich-vụ" class="news_breadcrumbs_theme_title_a"><h1 class="news_breadcrumbs_theme_title">Dịch vụ</h1></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
{{--            <div class="row">--}}
{{--                <div class="col-md-12 text-center danhmucdichvu c-content-title-1">--}}
{{--                    <h3 style="font-size: 30px;color: #3f444a;font-weight: 700;">DANH MỤC DỊCH VỤ</h3>--}}
{{--                    <div class="c-line-center c-theme-bg"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="item_buy_form">
                <form class="form_category_service">
                    <div class="row">
                        <div class="col-3 item_buy_form_search">
                            <div class="input-group">
                                <span class="input-group-addon">Tìm kiếm</span>
                                <input type="text" class="form-control input-news" placeholder="Tìm kiếm">
                            </div>
                        </div>
                        <div class="col-3 item_buy_form_search">
                            <div class="input-group">
                                <button type="submit" class="btn btn-category-service">Tìm kiếm</button>
                                <a href="" class="btn btn-danger btn-tatca">Tất cả</a>
                            </div>
                        </div>
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
                        <form class="form_category_service_mobile">
                            <div class="row">
                                <div class="col-12 item_buy_form_search">
                                    <div class="input-group">
                                        <span class="input-group-addon">Tìm kiếm</span>
                                        <input type="text" class="form-control input-news-mobile" placeholder="Tìm kiếm">
                                    </div>
                                </div>
                                <div class="col-12 item_buy_form_search">
                                    <div class="input-group">
                                        <button type="submit" class="btn btn-category-service-mobile">Tìm kiếm</button>
                                        <a href="" class="btn btn-danger btn-tatca-mobile">Tất cả</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <div class="item_buy_list row" id="categoryservice_data">

            </div>

        </div>
    </div>
    <input type="hidden" name="hidden_page" id="hidden_page_service" value="1" />
    <input type="hidden" name="service" id="append-service" value="0" />
    <script src="/assets/frontend/js/service/service.js"></script>

@endsection


