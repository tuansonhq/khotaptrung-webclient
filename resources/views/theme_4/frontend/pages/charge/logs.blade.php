@extends('frontend.layouts.master')
@section('content')

<section>
    <div class="container">

        <div class="row user-manager">
            @include('frontend.pages.widget.__menu_profile')

            <div class="col-12 col-md-8 col-lg-9 site-form " style="min-height: 212.568px;">

                <div class="menu-content">
                    <div class="title">
                        <h3>Lịch sử nạp thẻ</h3>
                    </div>
                    <div class="wapper-grid profile">

                        <form class="form-horizontal form-find m-b-20" role="form" method="get">

                            <div class="row">


                                <div class="form-row mb-3 col-md-4">
                                    <div class="col-12">
                                        <label class="mt-2">Thẻ cào</label>
                                    </div>
                                    <div class="col-12">
                                        <input type="text" class="form-control c-square c-theme" name="find"
                                               value=""
                                               autofocus placeholder="Mã thẻ,Serial...">
                                    </div>
                                </div>


                                <div class="form-row mb-3 col-md-4">
                                    <div class="col-12">
                                        <label class="mt-2">Loại thẻ</label>
                                    </div>
                                    <div class="col-12">
                                        <select name="key" class="form-control c-square c-theme">.
                                            <option value=""> Tất cả loại thẻ</option>
                                            <option
                                                value="GARENA" >
                                                GARENA
                                            </option>
                                            <option
                                                value="GATE" >
                                                GATE
                                            </option>
                                            <option
                                                value="MOBIFONE" >
                                                MOBIFONE
                                            </option>
                                            <option
                                                value="SCOIN" >
                                                SCOIN
                                            </option>
                                            <option
                                                value="VCOIN" >
                                                VCOIN
                                            </option>
                                            <option
                                                value="VIETNAMOBILE" >
                                                VIETNAMOBILE
                                            </option>
                                            <option
                                                value="VIETTEL" >
                                                VIETTEL
                                            </option>
                                            <option
                                                value="VINAPHONE" >
                                                VINAPHONE
                                            </option>
                                            <option
                                                value="ZING" >
                                                ZING
                                            </option>

                                        </select>
                                    </div>
                                </div>


                                <div class="form-row mb-3 col-md-4">
                                    <div class="col-12">
                                        <label class="mt-2">Trạng thái</label>
                                    </div>
                                    <div class="col-12">
                                        <select name="status" id="status" class="form-control c-square c-theme">.
                                            <option class="stt_all" value=""> Tất cả</option>


                                            <option class="stt_0"
                                                    value="1" >
                                                Thẻ đúng
                                            </option>

                                            <option class="stt_0"
                                                    value="0" >
                                                Thẻ sai
                                            </option>

                                            <option class="stt_0"
                                                    value="2" >
                                                Chờ xử lý
                                            </option>

                                            <option class="stt_0"
                                                    value="3" >
                                                Sai mệnh giá
                                            </option>

                                            <option class="stt_0"
                                                    value="999" >
                                                Lỗi nạp thẻ
                                            </option>

                                            <option class="stt_0"
                                                    value="-999" >
                                                Lỗi nạp thẻ
                                            </option>

                                            <option class="stt_0"
                                                    value="-1" >
                                                Phát sinh lỗi nạp thẻ
                                            </option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-row mb-3 col-md-4">
                                    <div class="col-12">
                                        <label class="mt-2">Từ:</label>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group m-b-10 c-square">
                                            <div class="input-group date date-picker" data-date-format="dd/mm/yyyy"
                                                 data-rtl="false">
                                            <span class="input-group-btn">
                                            <button class="btn default c-btn-square p-l-10 p-r-10" type="button"><i
                                                    class="fa fa-calendar"></i></button>
                                            </span>
                                                <input type="text" class="form-control c-square c-theme" name="started_at"
                                                       autocomplete="off" placeholder="Từ ngày"
                                                       value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row mb-3 col-md-4">
                                    <div class="col-12">
                                        <label class="mt-2">Đến:</label>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group m-b-10 c-square">
                                            <div class="input-group date date-picker" data-date-format="dd/mm/yyyy"
                                                 data-rtl="false">
                                            <span class="input-group-btn">
                                            <button class="btn default c-btn-square p-l-10 p-r-10" type="button"><i
                                                    class="fa fa-calendar"></i></button>
                                            </span>
                                                <input type="text" class="form-control c-square c-theme" name="ended_at"
                                                       autocomplete="off" placeholder="Đến ngày"
                                                       value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="row mb-4">
                                <div class="col-md-4">
                                    <input type="submit" class="btn btn-success c-theme-btn c-btn-square m-b-10"
                                           value="Tìm kiếm">
                                    <a class="btn c-btn-square m-b-10 btn-danger" href="https://napgamegiare.net/lich-su-nap-the">Tất cả</a>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-12">
                                    <a class="btn btn-info c-theme-btn c-btn-square m-b-10" style="margin-left: 0px"
                                       href="https://napgamegiare.net/lich-su-nap-the?started_at=18/07/2022&amp;ended_at=18/07/2022"><i
                                            class="glyphicon glyphicon-calendar"></i> Hôm nay</a>
                                    <a class="btn btn-info c-theme-btn c-btn-square m-b-10" style="margin-left: 0px"
                                       href="https://napgamegiare.net/lich-su-nap-the?started_at=17/07/2022&amp;ended_at=17/07/2022"><i
                                            class="glyphicon glyphicon-calendar"></i> Hôm qua</a>
                                    <a class="btn btn-info c-theme-btn c-btn-square m-b-10" style="margin-left: 0px"
                                       href="https://napgamegiare.net/lich-su-nap-the?started_at=01/07/2022&amp;ended_at=31/07/2022"><i
                                            class="glyphicon glyphicon-calendar"></i> Tháng này</a>
                                </div>
                            </div>

                        </form>


                        <div style="overflow: auto;width: 100%">
                            <table class="table table-hover table-custom-res">
                                <thead>
                                <tr role="row">
                                    <th>Thời gian</th>

                                    <th>Kiểu nạp</th>
                                    <th>Nhà mạng</th>
                                    <th>Mã thẻ/Serial</th>
                                    <th>Mệnh giá</th>
                                    <th>Trạng thái</th>
                                    <th>Thực nhận</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr class="" style="background-color: #abe7ed;">
                                    <td colspan="2" class="row-date"><b>Tổng cộng các trang:</b></td>
                                    <td class="row-date-sub"></td>
                                    <td><b> 0 thẻ </b></td>
                                    <td class="row-date-sub">
                                        <b> 0 </b>
                                    </td>
                                    <td class="row-date-sub">
                                        <b> 0 </b>
                                    </td>
                                    <td class="row-date-sub">
                                        <b> 0 </b>
                                    </td>

                                </tr>



                                </tbody>
                            </table>

                        </div>

                        <!-- END: PAGE CONTENT -->

                        <div class="data_paginate paging_bootstrap paginations_custom" style="text-align: center">

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <style>
            .table-custom-res {
                margin: auto;
                overflow-x: auto;
                width: 100%;

            }
        </style>
        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
            $(document).ready(function () {

                $('.load-modal').on('click', function (e) {
                    e.preventDefault();
                    var curModal = $('#LoadModal');
                    curModal.find('.modal-content').html("<div class=\"loader\" style=\"text-align: center\"><img src=\"/assets/frontend/images/loader.gif\" style=\"width: 50px;height: 50px;\"></div>");
                    curModal.modal('show').find('.modal-content').load($(this).attr('rel'));
                });
            });

            function get_list_status() {


                //for safari
                $("#status option").detach();
                var type_charge = $("#type_charge").val();


                var myOpts = $(".stt_" + type_charge).clone();
                var myOptsAll = $(".stt_all").clone();
                myOptsAll.appendTo("#status");
                myOpts.appendTo("#status");

                // $("#amount").append(myOpts);
            }

            get_list_status();


        </script>




    </div><!-- /.container -->
</section>

@endsection
