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
                            Hiện tại không có dữ liệu nào phù hợp với yêu cầu của bạn! Hệ thống cập nhật nick thường xuyên bạn vui lòng theo dõi web trong thời gian tới !
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
                        <div class="col-auto tintuc-auto pr-0">
                            {{--                        <div class="news_breadcrumbs_title news_breadcrumbs_title__show"><a href="/mua-acc">Danh mục</a></div>--}}
                        </div>
                        <div class="col-lg-10 col-md-12 ml-lg-auto">
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
                        <div class="row">
                            <div class="col-3 item_buy_form_search">
                                <div class="input-group">
                                    <span class="input-group-addon">Mã số</span>
                                    <input name="id" type="text" class="form-control id" placeholder="Mã số">
                                </div>
                            </div>

                            <div class="col-3 item_buy_form_search">
                                <div class="input-group">
                                    <span class="input-group-addon">Giá tiền</span>

                                    <select type="text" name="price" class="form-control price">
                                        <option value="">Chọn giá tiền</option>
                                        <option value="0-50000">Dưới 50K</option>
                                        <option value="50000-200000">Từ 50K - 200K</option>
                                        <option value="200000-500000">Từ 200K - 500K</option>
                                        <option value="500000-1000000">Từ 500K - 1 Triệu</option>
                                        <option value="1000000-5000000">Trên 1 Triệu</option>
                                        <option value="5000000-10000000">Trên 5 Triệu</option>
                                        <option value="10000000">Trên 10 Triệu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3 item_buy_form_search">
                                <div class="input-group">
                                    <span class="input-group-addon">Trạng thái</span>
                                    {{--                                {{Form::select('status',array(''=>'-- Chọn giá tiền --')+config('module.acc.status'),old('status', isset($data['status']) ? $data['status'] : null),array('class'=>'form-control status'))}}--}}

                                    <select type="text" name="status" class="form-control status">
                                        <option value="">Chọn trạng thái</option>
                                        <option value="1">Chưa bán</option>
                                        <option value="0">Đã bán</option>
                                        {{--                                            <option value="2">Đã đặt cọc</option>--}}
                                        {{--                                    <option value="">Tất cả</option>--}}
                                    </select>
                                </div>
                            </div>

                            <div class="col-3 item_buy_form_search" id="load_attribute">
                                @include('frontend.pages.account.widget.account_load_attribute_to_filter')
                            </div>

                            <div class="col-12 item_buy_form_search pt-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <button type="submit" class="btn btn_timkiem" style="position: relative">
                                                Tìm kiếm
                                                <div class="row justify-content-center loading-data__timkiem">

                                                </div>
                                            </button>
                                            <a href="javascript:void(0)" class="btn btn-danger btn-all" style="position: relative">
                                                Tất cả
                                                <div class="row justify-content-center loading-data__all">

                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row justify-content-end">
                                            <div class="col-auto">
                                                <div class="input-group">
                                                    <span class="input-group-addon">Sắp xếp theo</span>
                                                    <select type="text" name="sort_by" class="form-control sort_by">
                                                        <option value="">Chọn cách sắp xếp</option>
                                                        <option value="random">Ngẫu nhiên</option>
                                                        <option value="price_start">Giá tiền từ cao đến thấp</option>
                                                        <option value="price_end">Giá tiền từ thấp đến cao</option>
                                                        <option value="created_at_start">Mới nhất</option>
                                                        <option value="created_at_end">Cũ nhất</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                            <form class="form-charge form-charge__accountlist-mobile">
                                <div class="row">
                                    <div class="col-12 item_buy_form_search">
                                        <div class="input-group">
                                            <span class="input-group-addon">Tìm kiếm</span>
                                            <input name="title-mobile" type="text" class="form-control title-mobile" placeholder="Tìm kiếm">
                                        </div>
                                    </div>
                                    <div class="col-12 item_buy_form_search">
                                        <div class="input-group">
                                            <span class="input-group-addon">Mã số</span>
                                            <input name="id-mobile" type="text" class="form-control id-mobile" placeholder="Mã số">
                                        </div>
                                    </div>
                                    <div class="col-12 item_buy_form_search">
                                        <div class="input-group">
                                            <span class="input-group-addon" >Giá tiền</span>

                                            {{--                                        {{Form::select('price',array(''=>'-- Chọn giá tiền --')+config('module.acc.price'),old('price', isset($data['price']) ? $data['price'] : null),array('class'=>'form-control price'))}}--}}

                                            <select type="text" name="price-mobile price-mobile" class="form-control">
                                                <option value="">Chọn giá tiền</option>
                                                <option value="0-50000">Dưới 50K</option>
                                                <option value="50000-200000">Từ 50K - 200K</option>
                                                <option value="200000-500000">Từ 200K - 500K</option>
                                                <option value="500000-1000000">Từ 500K - 1 Triệu</option>
                                                <option value="1000000-5000000">Trên 1 Triệu</option>
                                                <option value="5000000-10000000">Trên 5 Triệu</option>
                                                <option value="10000000">Trên 10 Triệu</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-12 item_buy_form_search">
                                        <div class="input-group">
                                            <span class="input-group-addon">Trạng thái</span>
                                            <select type="text" name="status-mobile" class="form-control status-mobile">
                                                <option value="">Chọn trạng thái</option>
                                                <option value="1">Chưa bán</option>
                                                <option value="0">Đã bán</option>
                                                {{--                                            <option value="2">Đã đặt cọc</option>--}}
                                                <option value="">Tất cả</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 item_buy_form_search" id="load_attribute_mobile">
                                        @include('frontend.pages.account.widget.account_load_attribute_to_filter_mobile')
                                    </div>

                                    <div class="col-12 item_buy_form_search">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-group">
                                                    <button type="submit" class="btn">Tìm kiếm</button>
                                                    <a href="javascript:void(0)" class="btn btn-danger btn-all-mobile">Tất cả</a>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row justify-content-end">
                                                    <div class="col-auto">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">Sắp xếp theo</span>
                                                            <select type="text" name="sort_by_mobile" class="form-control sort_by_mobile">
                                                                <option value="">Chọn cách sắp xếp</option>
                                                                <option value="random">Ngẫu nhiên</option>
                                                                <option value="price_start">Giá tiền từ cao đến thấp</option>
                                                                <option value="price_end">Giá tiền từ thấp đến cao</option>
                                                                <option value="created_at_start">Mới nhất</option>
                                                                <option value="created_at_end">Cũ nhất</option>
                                                                {{--                                                            <option value="">Tất cả</option>--}}
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
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
                    @include('frontend.pages.account.function.__account__data')
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
                </div>
            </div>
        </div>

        <script src="/assets/frontend/{{theme('')->theme_key}}/js/account/account-list.js"></script>
    @endif

@endsection

