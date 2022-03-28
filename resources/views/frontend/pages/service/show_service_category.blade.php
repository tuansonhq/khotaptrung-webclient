@extends('frontend.layouts.master')
@section('seo_head')
    @include('frontend.widget.__seo_head',with(['data'=>$data]))
@endsection
@section('content')
    <div class="item_buy">
        <div class="container">
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



