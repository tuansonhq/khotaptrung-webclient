@extends('frontend.layouts.master')
@section('seo_head')
    @include('frontend.widget.__seo_head',with(['data'=>$data]))
@endsection
@section('content')

    <div class="item_buy">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
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

            <div class="item_buy_form">
                <form class="form-charge">
                    <div class="row">
                        <div class="col-3 item_buy_form_search">
                            <div class="input-group">
                                <span class="input-group-addon">Tìm kiếm</span>
                                <input type="text" name="title" class="form-control title" placeholder="Tìm kiếm">
                            </div>
                        </div>

                        <div class="col-3 item_buy_form_search">
                            <div class="input-group">
                                <span class="input-group-addon">Mã số</span>
                                <input name="id" type="text" class="form-control id" placeholder="Mã số">
                            </div>
                        </div>

                        <div class="col-3 item_buy_form_search">
                            <div class="input-group">
                                <span class="input-group-addon">Giá tiền</span>
{{--                                {{Form::select('price',array(''=>'-- Chọn giá tiền --')+config('module.acc.price'),old('price', isset($data['price']) ? $data['price'] : null),array('class'=>'form-control price'))}}--}}

                                <select type="text" class="form-control price" name="price">
                                    <option value="">Chọn giá tiền</option>
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
                                    <option value="">Chọn trạng thái</option>
                                    <option value="0">Chưa bán</option>
                                    <option value="1">Đã bán</option>
                                    <option value="2">Đã đặt cọc</option>
                                    <option value="3">Tất cả</option>
                                </select>
                            </div>
                        </div>

                        @include('frontend.pages.account.widget.account_load_attribute_to_filter',['dataAttribute'=>$dataAttribute])

                        <div class="col-12 item_buy_form_search">
                            <div class="input-group">
                                <button type="submit" class="btn">Tìm kiếm</button>
                                <a href="javascript:void(0)" class="btn btn-danger btn-all">Tất cả</a>
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
                        <form class="form-charge-mobile">
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
                                            <option value="">Chọn giá tiền</option>
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
                                            <option value="">Chọn trạng thái</option>
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
                                        <a href="javascript:void(0)" class="btn btn-danger btn-all-mobile">Tất cả</a>
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

        </div>
    </div>

    <input type="hidden" value="{{ $data->slug }}" name="slug" class="slug">
    <input type="hidden" value="{{ $slug_category }}" name="slug_category" class="slug_category">
    <input type="hidden" name="id_data" class="id_data" value="">
    <input type="hidden" name="title_data" class="title_data" value="">
    <input type="hidden" name="price_data" class="price_data" value="">
    <input type="hidden" name="select_data" class="select_data" value="">
    <input type="hidden" name="status_data" class="status_data" cvalue="">
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

