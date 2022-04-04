@extends('frontend.layouts.master')
@section('content')

    <div class="account">
        <div class="account_content">
            <div class="container">
                @include('frontend.pages.account.sidebar')
                <div class="account_sidebar_content">
                    <div class="account_sidebar_content_title">
                        <p>LỊCH SỬ GIAO DỊCH</p>
                        <div class="account_sidebar_content_line"></div>
                    </div>
                    <div class="account_content_transaction_historyv2">
                        <form class="form-charge form-charge__accounttxns account_content_transaction_history__v2">
                            <div class="row">
                                @if(isset($config))
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <span >Giao dịch</span>
                                            <select name="config" class="form-control config">
                                                <option value="">--Tất cả --</option>
                                                @foreach($config as $i => $val)
                                                    <option value="{{ $i }}">{{ $val }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                @endif
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
                                    @if(isset($status))
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <span >Trạng thái</span>
                                                <select name="status" class="form-control status">
                                                    <option value="">--Tất cả --</option>
                                                    @foreach($status as $ist => $valst)
                                                        <option value="{{ $ist }}">{{ $valst }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    @endif
                            </div>

                            <div class="row">
{{--                                <div class="col-12 item_buy_form_search">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-md-6">--}}
{{--                                            <div class="input-group">--}}
{{--                                                <button type="submit" class="btn">Tìm kiếm</button>--}}
{{--                                                <a href="javascript:void(0)" class="btn btn-danger btn-all">Tất cả</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

                                <div class="col-12 item_buy_form_search">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <button type="submit" class="btn">Tìm kiếm</button>
                                                <a href="javascript:void(0)" class="btn btn-danger btn-all">Tất cả</a>
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

                        <div id="data_lich__su_history">
                            @include('frontend.pages.account.user.function.__lich__su__giao__dich__data')
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <input type="hidden" name="config_data" class="config_data" value="">
    <input type="hidden" name="status_data" class="status_data" value="">
    <input type="hidden" name="started_at_data" class="started_at_data" value="">
    <input type="hidden" name="ended_at_data" class="ended_at_data" value="">
    <input type="hidden" name="hidden_page" id="hidden_page_service" class="hidden_page_service" value="1" />

    <script src="/assets/frontend/js/account/txns-history.js"></script>

@endsection

