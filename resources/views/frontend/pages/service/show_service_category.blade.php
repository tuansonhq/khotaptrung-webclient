@extends('frontend.layouts.master')
@section('seo_head')
    @include('frontend.widget.__seo_head',with(['data'=>$data]))
@endsection
@section('content')
    <div class="item_buy">
        <div class="news_breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-auto tintuc-auto pr-0">
                        <div class="news_breadcrumbs_title news_breadcrumbs_title__show"><a href="/dich-vu">Dịch vụ</a></div>
                    </div>
                    <div class="col-lg-10 col-md-12 ml-lg-auto">
                        <ul class="news_breadcrumbs_theme news_breadcrumbs_theme__show">
                            <li><a href="/" class="news_breadcrumbs_theme_trangchu news_breadcrumbs_theme_trangchu_a">Trang chủ</a></li>
                            <li>/</li>
                            <li><a href="/dich-vu" class="news_breadcrumbs_theme_tintuc_a"><p class="news_breadcrumbs_theme_tintuc">Dịch vụ</p></a></li>
                            <li>/</li>
                            <li class="news_breadcrumbs_theme__li"><a href="javascript:void(0)" class="news_breadcrumbs_theme_title_a"><p class="news_breadcrumbs_theme_title">{{ $data->title }}</p></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pt-3">
            @if(isset($data))
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-info box-text hidetext" role="alert">
                                <h1 class="alert-heading h1_category" style="color:#000">{{ $data->title }}</h1>
                                @if(isset($data->description))
                                    {!! $data->description !!}
                                @else
                                    {!! $data->seo_description !!}
                                @endif
                            </div>
                            <div style="text-align: center;margin: 15px 0">
                                <span class="viewmore">Xem tất cả »</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
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
            <div class="item_buy_filter item_buy_filter__category">
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

            <div class="item_buy_list row" id="showcategoryservice_data">

            </div>

        </div>
    </div>
    <input type="hidden" name="slug" id="slug" value="{{ $slug }}" />
    <input type="hidden" name="hidden_page" id="hidden_page_service" value="1" />
    <input type="hidden" name="service" id="append-service" value="0" />
    <script src="/assets/frontend/js/service/show-service.js"></script>
@endsection



