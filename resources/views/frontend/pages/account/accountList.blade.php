@extends('frontend.layouts.master')
@section('seo_head')
    @include('frontend.widget.__seo_head',with(['data'=>$data]))
@endsection
@section('content')

    <div class="item_buy">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="item_buy_info">
                        <h3>{{ $data->title }}</h3>
                        <div>
                            {!! $data->seo_description !!}
                        </div>
                    </div>
                    <div class="item_buy_viewmore">
                        <span>Xem tất cả »</span>
                    </div>
                    <div class="item_buy_viewless">
                        <span>« Thu gọn</span>
                    </div>
                </div>
            </div>

            <div class="item_buy_form">
                <form class="form-charge">
                <div class="row">
                        <div class="col-3 item_buy_form_search">
                            <div class="input-group">
                                <span class="input-group-addon">Tìm kiếm</span>
                                <input type="text" name="title" class="form-control" placeholder="Tìm kiếm">
                            </div>
                        </div>

                        <div class="col-3 item_buy_form_search">
                            <div class="input-group">
                                <span class="input-group-addon">Mã số</span>
                                <input name="id" type="text" class="form-control" placeholder="Mã số">
                            </div>
                        </div>

                        <div class="col-3 item_buy_form_search">
                            <div class="input-group">
                                <span class="input-group-addon">Giá tiền</span>
{{--                                {{Form::select('price',array(''=>'-- Chọn giá tiền --')+config('module.acc.price'),old('price', isset($data['price']) ? $data['price'] : null),array('class'=>'form-control price'))}}--}}

                                <select type="text" class="form-control price" name="price">
                                    <option value="">Chọn giá tiền
                                    <option value="0">Dưới 50K</option>
                                    <option value="1">Từ 50K - 200K</option>
                                    <option value="2">Từ 200K - 500K</option>
                                    <option value="3">Từ 500K - 1 Triệu</option>
                                    <option value="4">Trên 1 Triệu</option>
                                    <option value="5">Trên 5 Triệu</option>
                                    <option value="6">Trên 10 Triệu</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3 item_buy_form_search">
                            <div class="input-group">
                                <span class="input-group-addon">Trạng thái</span>
{{--                                {{Form::select('status',array(''=>'-- Chọn giá tiền --')+config('module.acc.status'),old('status', isset($data['status']) ? $data['status'] : null),array('class'=>'form-control status'))}}--}}

                                <select type="text" class="form-control status" name="status">
                                    <option value="0">Chưa bán</option>
                                    <option value="1">Đã bán</option>
                                    <option value="2">Đã đặt cọc</option>
                                    <option value="3">Tất cả</option>
                                </select>
                            </div>
                        </div>

                        @include('frontend.pages.account.widget.account_load_attribute_to_filter',['dataAttribute'=>$dataAttribute])

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
                        <form class="form-charg-mobie">
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
                                        <span class="input-group-addon price-mobile" name="price-mobile">Giá tiền</span>
                                        <select type="text" class="form-control">
                                            <option value="">Chọn giá tiền
                                            <option value="0">Dưới 50K</option>
                                            <option value="1">Từ 50K - 200K</option>
                                            <option value="2">Từ 200K - 500K</option>
                                            <option value="3">Từ 500K - 1 Triệu</option>
                                            <option value="4">Trên 1 Triệu</option>
                                            <option value="5">Trên 5 Triệu</option>
                                            <option value="6">Trên 10 Triệu</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 item_buy_form_search">
                                    <div class="input-group">
                                        <span class="input-group-addon status-mobile" name="status-mobile">Trạng thái</span>
                                        <select type="text" class="form-control">
                                            <option value="0">Chưa bán</option>
                                            <option value="1">Đã bán</option>
                                            <option value="2">Đã đặt cọc</option>
                                            <option value="3">Tất cả</option>
                                        </select>
                                    </div>
                                </div>

                                @include('frontend.pages.account.widget.account_load_attribute_to_filter_mobile',['dataAttribute'=>$dataAttribute])

                                <div class="col-12 item_buy_form_search">
                                    <div class="input-group">
                                        <button type="submit" class="btn">Tìm kiếm</button>
                                        <a href="" class="btn btn-danger">Tất cả</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <div id="account_data">
                @include('frontend.pages.account.function.__account__data',['dataAttribute'=>$dataAttribute])
            </div>

{{--            <div class="item_buy_list row" id="account_data">--}}
{{--                @include('frontend.pages.account.function.__account__data')--}}
{{--            </div>--}}
        </div>
    </div>

    <input type="hidden" value="{{ $data->slug }}" name="slug" class="slug">
    <input type="hidden" value="{{ $slug_category }}" name="slug_category" class="slug_category">
@endsection

