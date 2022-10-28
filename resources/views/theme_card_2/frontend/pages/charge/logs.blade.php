@extends('frontend.layouts.master')
@section('content')
<div id="profile">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-md-12 col-sm-12 col-12">
                @include('frontend.layouts.includes.menu_profile')
            </div>
            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="content-profile">
                    <h3>THẺ CÀO ĐÃ NẠP</h3>
                    <hr class="lines">
                    <form class="form-horizontal form-find m-b-20" role="form" method="get">

                        <div class="row">

                            <div class="col-md-4">
                                <div class="input-group m-input-group mb-4">
                                    <div class="input-group-prepend"><span class="input-group-text">Thẻ cào</span></div>
                                    <input type="text" class="form-control c-square c-theme" name="find" value=""
                                           autofocus placeholder="Mã thẻ,Serial...">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group m-input-group mb-4">
                                    <div class="input-group-prepend"><span class="input-group-text">Loại thẻ</span></div>
                                    <select name="key" class="form-control c-square c-theme">.
                                        <option value=""> Tất cả loại thẻ</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group m-input-group mb-4">
                                    <div class="input-group-prepend"><span class="input-group-text">Kiểu nạp</span></div>
                                    <select name="type_charge" id="type_charge" class="form-control c-square c-theme"    onchange="get_list_status();" onblur="get_list_status();">
                                        <option value="0" selected>
                                            Nạp tự động
                                        </option>
                                        <option value="1" >
                                            Nạp chậm
                                        </option>
                                    </select>
                                </div>
                            </div>


                        </div>

                        <div class="row">


                            <div class="col-md-4">
                                <div class="input-group m-input-group mb-4">
                                    <div class="input-group-prepend"><span class="input-group-text">Trạng thái</span></div>

                                    <select class="form-control c-square c-theme" name="status" id="status">
                                        <option class="stt_all" value=""> Tất cả</option>


                                        <option class="stt_0" value="1" >
                                            Thẻ đúng
                                        </option>

                                        <option class="stt_0" value="0" >
                                            Thẻ sai
                                        </option>

                                        <option class="stt_0" value="2" >
                                            Chờ xử lý
                                        </option>

                                        <option class="stt_0" value="3" >
                                            Sai mệnh giá
                                        </option>

                                        <option class="stt_0" value="999" >
                                            Lỗi nạp thẻ
                                        </option>

                                        <option class="stt_0" value="-999" >
                                            Lỗi nạp thẻ
                                        </option>

                                        <option class="stt_0" value="-1" >
                                            Phát sinh lỗi nạp thẻ
                                        </option>



                                    </select>

                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group m-form__group">
                                    <div class="input-group m-input-group date date-picker"
                                         data-rtl="false">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-calendar"></i></span></div>
                                        <input type="text" class="form-control c-square c-theme" id="m_datepicker_1" name="started_at"
                                               autocomplete="off" data-date-format="dd/mm/yyyy"  placeholder="Từ ngày" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group m-form__group">
                                    <div class="input-group m-input-group date date-picker" data-date-format="dd/mm/yyyy"
                                         data-rtl="false">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-calendar"></i></span></div>
                                        <input type="text" class="form-control c-square c-theme" id="m_datepicker_1" name="ended_at"
                                               autocomplete="off" data-date-format="dd/mm/yyyy"  placeholder="Đến ngày" value="">
                                    </div>
                                </div>

                            </div>


                        </div>
                        <div class="row mb-4">
                            <div class="col-md-4">
                                <input style="font-family: 'Nunito', sans-serif" type="submit" class="btn btn-success btn-sm m-btn m-btn--custom" value="Tìm kiếm">
                                <a style="font-family: 'Nunito', sans-serif" class="btn btn-danger btn-sm m-btn m-btn--custom" href="https://muathegarena.com/deposit-history">Tất cả</a>
                            </div>
                        </div>


                    </form>
                    <div id="data_pay_card_history_ls" style="position: relative">
                        <div class="row justify-content-center position-absolute" style="top: 50%;left: 50%" id="loading-data">
                            {{--                                    <div class="loading"></div>--}}
                            <div class="loading-wrap mb-3">
                                <span class="modal-loader-spin mb-3"></span>
                            </div>
                        </div>
                        @include('frontend.pages.charge.widget.__charge_history')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/assets/frontend/{{theme('')->theme_key}}/js/charge/charge-history.js"></script>
@endsection
