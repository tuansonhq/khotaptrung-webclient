@extends('frontend.layouts.master')
@section('content')
    <div id="profile" style="margin-top: 15px;">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-12 col-sm-12 col-12">
                    @include('frontend.layouts.includes.menu_profile')
                </div>
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="content-profile">
                        <h3>LỊCH SỬ GIAO DỊCH</h3>
                        <hr class="lines">
                        <form action="javascript:void(0)" class="form-horizontal form-find m-b-20"
                              role="form" method="get">
                            <div class="row mb-3">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group m-form__group">
                                        <div class="input-group m-input-group date date-picker" data-rtl="false">
                                            <div class="input-group-prepend"><span
                                                    class="input-group-text">Từ ngày</span></div>
                                            <input type="date" class="form-control c-square c-theme" id="m_datepicker_1" name="started_at" autocomplete="off" data-date-format="dd/mm/yyyy"
                                                   placeholder="Từ ngày" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group m-form__group">
                                        <div class="input-group m-input-group date date-picker"
                                             data-date-format="dd/mm/yyyy" data-rtl="false">
                                            <div class="input-group-prepend"><span
                                                    class="input-group-text">Đến ngày</span></div>
                                            <input type="date" class="form-control c-square c-theme" id="m_datepicker_1"
                                                   name="ended_at" autocomplete="off" data-date-format="dd/mm/yyyy"
                                                   placeholder="Đến ngày" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="input-group m-input-group">
                                        <div class="input-group-prepend"><span class="input-group-text">Giao dịch</span>
                                        </div>
                                        <select id="group_id" name="trade_type" class="form-control c-square c-theme">
                                            <option value="">-- Tất cả --</option>
                                            <option value="1">Nạp thẻ tự động</option>
                                            <option value="6">Cộng tiền</option>
                                            <option value="7">Trừ tiền</option>
                                            <option value="14">Thanh toán mua thẻ</option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-4">
                                    <input style="font-family: 'Nunito', sans-serif" type="submit"
                                           class="btn btn-success btn-sm m-btn m-btn--custom" value="Tìm kiếm">
                                    <a style="font-family: 'Nunito', sans-serif"
                                       class="btn btn-danger btn-sm m-btn m-btn--custom"
                                       href="https://muathegarena.com/user/tran-log">Tất cả</a>
                                </div>
                            </div>


                        </form>
                        <div id="data_lich__su_history" style="position: relative">
                            <div class="body-box-loadding result-amount-loadding" style="position: absolute;top: 100%;left: 50%">
                                <div class="d-flex justify-content-center">
                                    <span class="pulser"></span>
                                </div>
                            </div>
                            @include('frontend.pages.transaction.widget.__transaction_history')
                        </div>
{{--                        <div id="content-cart" class="m-portlet__body">--}}
{{--                            <div style="overflow-x: auto" class="tab-content">--}}
{{--                                <table class="table">--}}
{{--                                    <thead class="thead-inverse">--}}
{{--                                    <tr>--}}
{{--                                        <th>Thời gian</th>--}}
{{--                                        <th>ID</th>--}}
{{--                                        <th>Tài khoản</th>--}}
{{--                                        <th>Giao dịch</th>--}}
{{--                                        <th>Số tiền</th>--}}
{{--                                        <th>Số dư cuối</th>--}}
{{--                                        <th>Nội dung</th>--}}
{{--                                        <th>Trạng thái</th>--}}
{{--                                    </tr>--}}
{{--                                    </thead>--}}
{{--                                    <tbody style="font-weight: bold">--}}
{{--                                    </tbody>--}}
{{--                                </table>--}}
{{--                                <div class="data_paginate paging_bootstrap paginations_custom"--}}
{{--                                     style="text-align: center">--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/transaction/txns-history.js"></script>

@endsection
