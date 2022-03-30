@extends('frontend.layouts.master')
@section('content')

    <div class="account">
{{--        <div class="" style="margin-top: 15px">--}}
{{--            @if ($message = Session::get('success'))--}}
{{--                <div class="container">--}}
{{--                    <div class="alert alert-success alert-dismissible" role="alert">--}}
{{--                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span--}}
{{--                                aria-hidden="true">×</span></button>--}}
{{--                        {{$message}}--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endif--}}
{{--            @if($messages=$errors->all())--}}
{{--                <div class="container">--}}
{{--                    <div class="alert alert-danger alert-dismissible" role="alert">--}}
{{--                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span--}}
{{--                                aria-hidden="true">×</span></button>--}}
{{--                        {{$messages[0]}}--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            @endif--}}

{{--        </div>--}}
        <div class="account_content">
            <div class="container">
                @include('frontend.pages.account.sidebar')
                <div class="account_sidebar_content">
                    <div class="account_sidebar_content_title">
                        <p>TÀI KHOẢN ĐÃ MUA</p>
                        <div class="account_sidebar_content_line"></div>
                    </div>
                    <div class="account_content_transaction_history">
                        <form class="form-charge account_content_transaction_history__v2">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span >Mã tài khoản #</span>
                                        <input type="text" name="serial" class="form-control serial" placeholder="Mã tài khoản">

                                    </div>
                                </div>
                                @if(isset($datacategory) && count($datacategory) > 0)
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span >Game</span>
                                            <select name="key" class="form-control key">
                                                <option value="">--Tất cả game--</option>
                                                @foreach($datacategory as $val)
                                                    <option value="{{ $val->slug }}">{{ $val->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                @endif
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span >Trạng thái</span>

                                        {{Form::select('status',array(''=>'-- Chọn trạng thái --')+config('module.acc.status'),old('status', isset($data['status']) ? $data['status'] : null),array('class'=>'form-control status'))}}

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="input-group date" id="transaction_history_start">
                                        <span class="input-group-btn input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                            <input type="text" class="form-control input-group-addon started_at" name="started_at" autocomplete="off" placeholder="Từ ngày">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="input-group date" id="transaction_history_end">
                                        <span class="input-group-btn input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                        </span>
                                            <input type="text" class="form-control input-group-addon ended_at" name="ended_at" autocomplete="off" placeholder="Đến ngày">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span >Trạng thái</span>

                                        {{Form::select('price',array(''=>'-- Chọn giá tiền --')+config('module.acc.price'),old('price', isset($data['price']) ? $data['price'] : null),array('class'=>'form-control price'))}}

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 item_buy_form_search">
                                    <div class="input-group">
                                        <button type="submit" class="btn">Tìm kiếm</button>
                                        <a href="javascript:void(0)" class="btn btn-danger btn-all">Tất cả</a>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <div id="data_pay_account_history">
                            @include('frontend.pages.account.function.__get__buy__account__history')
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

{{--    @if ($content = Session::get('content'))--}}
{{--        <div class="modal fade" id="noticeAfterModal" style="display: none;" role="dialog" aria-hidden="true">--}}
{{--            <div class="modal-dialog" role="document">--}}
{{--                <div class="modal-content">--}}
{{--                    <div class="modal-header">--}}
{{--                        <h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Thông báo</h4>--}}
{{--                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                            <span aria-hidden="true">×</span>--}}
{{--                        </button>--}}
{{--                    </div>--}}

{{--                    <div class="modal-body" style="font-family: helvetica, arial, sans-serif;">--}}
{{--                        {!!$content!!}--}}
{{--                    </div>--}}
{{--                    <div class="modal-footer">--}}
{{--                        <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <script type="text/javascript">--}}
{{--            $(document).ready(function () {--}}
{{--                $('#noticeAfterModal').modal('show');--}}
{{--            });--}}
{{--        </script>--}}
{{--    @endif--}}

    <input type="hidden" name="serial_data" class="serial_data" value="">
    <input type="hidden" name="key_data" class="key_data" value="">
    <input type="hidden" name="price_data" class="price_data" value="">
    <input type="hidden" name="status_data" class="status_data" value="">
    <input type="hidden" name="started_at_data" class="started_at_data" value="">
    <input type="hidden" name="ended_at_data" class="ended_at_data" value="">
    <input type="hidden" name="hidden_page" id="hidden_page_service" class="hidden_page_service" value="1" />
    <input type="hidden" name="append" class="append-article" value="0" />


@endsection
