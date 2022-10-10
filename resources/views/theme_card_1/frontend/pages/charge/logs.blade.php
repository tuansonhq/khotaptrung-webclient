@extends('frontend.layouts.master')

@section('content')
<div class="row my-3">
    <div class="col-xl-3  col-sm-3 col-md-3 col-12">
        <div class="bg-white">
            @include('frontend.layouts.includes.menu_profile')
        </div>

    </div>
    <div class="col-xl-9  col-md-9 col-sm-12 col-12">
        <div class="bg-white">
            <div class="main-profile" style="min-height: 468px;padding:15px 20px">

                <div class="content-profile">
                    <h3>Lịch sử nạp thẻ</h3>
                    <hr class="lines">
                    <form class="form-horizontal form-find mb-4" role="form" method="get">

                        <div class="row">




                            <div class="col-md-4">


                                <div class="input-group mb-2 c-square ">
                                    <span class="input-group-addon" id="basic-addon1">Thẻ cào</span>
                                    <input type="text" class="form-control c-square c-theme" name="find" value=""
                                           autofocus placeholder="Mã thẻ,Serial...">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group mb-2 c-square">
                                    <span class="input-group-addon" id="basic-addon1">Loại thẻ</span>
                                    <select name="key" class="form-control c-square c-theme">.
                                        <option value=""> Tất cả loại thẻ</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group mb-2 c-square">
                                    <span class="input-group-addon" id="basic-addon1">Kiểu nạp </span>
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

                        <div class="row ">


                            <div class="col-md-4">
                                <div class="input-group mb-2 c-square">
                                    <span class="input-group-addon" id="basic-addon1">Trạng thái</span>
                                    <select name="status" id="status" class="form-control c-square c-theme">.

                                    </select>

                                    <select class="form-control  c-square c-theme" id="vsvsd" style="display: none">
                                        <option class="stt_all" value=""> Tất cả</option>

                                        <option class="stt_1" value="1" >
                                            Chờ xử lý
                                        </option>

                                        <option class="stt_1" value="2" >
                                            Thẻ sai
                                        </option>

                                        <option class="stt_1" value="3" >
                                            Thẻ đúng
                                        </option>

                                        <option class="stt_1" value="4" >
                                            Thẻ trễ
                                        </option>

                                        <option class="stt_1" value="5" >
                                            Thẻ sai mệnh giá
                                        </option>

                                        <option class="stt_1" value="10000" >
                                            10,000đ
                                        </option>

                                        <option class="stt_1" value="20000" >
                                            20,000đ
                                        </option>

                                        <option class="stt_1" value="30000" >
                                            30,000đ
                                        </option>

                                        <option class="stt_1" value="50000" >
                                            50,000đ
                                        </option>

                                        <option class="stt_1" value="100000" >
                                            100,000đ
                                        </option>

                                        <option class="stt_1" value="200000" >
                                            200,000đ
                                        </option>

                                        <option class="stt_1" value="300000" >
                                            300,000đ
                                        </option>

                                        <option class="stt_1" value="500000" >
                                            500,000đ
                                        </option>

                                        <option class="stt_1" value="1000000" >
                                            1,000,000đ
                                        </option>

                                        <option class="stt_1" value="5000000" >
                                            5,000,000đ
                                        </option>

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
                                <div class="input-group mb-2 c-square">
                                    <div class="input-group date date-picker" data-date-format="dd/mm/yyyy"
                                         data-rtl="false">
                                    <span class="input-group-btn">
                                    <button class="btn default c-btn-square pl-2 pr-2" type="button"><i
                                            class="fa fa-calendar"></i></button>
                                    </span>
                                        <input type="text" class="form-control c-square c-theme" name="started_at"
                                               autocomplete="off" autofocus placeholder="Từ ngày" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group mb-2 c-square">
                                    <div class="input-group date date-picker" data-date-format="dd/mm/yyyy"
                                         data-rtl="false">
                                    <span class="input-group-btn">
                                    <button class="btn default c-btn-square pl-2 pr-2" type="button"><i
                                            class="fa fa-calendar"></i></button>
                                    </span>
                                        <input type="text" class="form-control c-square c-theme" name="ended_at"
                                               autocomplete="off" placeholder="Đến ngày" value="">
                                    </div>
                                </div>

                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <input type="submit" class="btn btn-success c-theme-btn c-btn-square mb-2" value="Tìm kiếm">
                                <a class="btn c-btn-square mb-2 btn-danger" href="https://thegarena.net/deposit-history">Tất cả</a>
                            </div>
                        </div>


                    </form>

                    <table class="table table-hover table-custom-res ">
                        <thead>
                        <tr role="row">
                            <th>Thời gian</th>
                            <th>Kiểu nạp</th>
                            <th>Nhà mạng</th>
                            <th>Mã thẻ</th>
                            <th>Serial</th>
                            <th>Trị giá</th>
                            <th>Kết quả</th>
                            <th>Thực nhận</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr class="" style="background-color: #abe7ed;">
                            <td colspan="2" class="row-date"><b>Tổng cộng các trang:</b></td>
                            <td class="row-date-sub"><b> 0 thẻ </b></td>
                            <td></td>
                            <td></td>
                            <td class="row-date-sub"><b> 0 </b></td>
                            <td class="row-date-sub"><b> 0 </b></td>
                            <td class="row-date-sub"><b> 0 </b></td>

                        </tr>


                        <tr>
                            <td colspan="3"><b>Ngày 11/10/2022</b></td>
                            <td><b>3 thẻ</b></td>
                            <td></td>
                            <td></td>
                            <td><b>0 </b></td>
                            <td><b>0 </b></td>


                        </tr>
                        <tr>
                            <td>00:16:43</td>

                            <td>
                                Nạp tự động
                            </td>
                            <td>GARENA</td>
                            <td>1456465465465656</td>
                            <td>20000164737782</td>
                            <td>20,000</td>
                            <td>

                                <b class='text-danger'>Lỗi nạp thẻ</b>

                            </td>


                            <td>
                                <span class="c-font-bold text-info">+0đ</span>
                            </td>

                        </tr>



                        <tr>
                            <td>00:16:32</td>

                            <td>
                                Nạp tự động
                            </td>
                            <td>VIETTEL</td>
                            <td>223036547055536</td>
                            <td>654546546546545</td>
                            <td>10,000</td>

                            <td>

                                <b class='text-danger'>Thẻ sai</b>

                            </td>


                            <td>
                                <span class="c-font-bold text-info">+0đ</span>
                            </td>

                        </tr>

                        <tr>
                            <td>00:16:20</td>

                            <td>
                                Nạp tự động
                            </td>
                            <td>GARENA</td>
                            <td>223036547055536</td>
                            <td>20000164737782</td>
                            <td>100,000</td>

                            <td>

                                <b class='text-danger'>Lỗi nạp thẻ</b>

                            </td>


                            <td>
                                <span class="c-font-bold text-info">+0đ</span>
                            </td>

                        </tr>


                        </tbody>
                    </table>
                    <!-- END: PAGE CONTENT -->

                    <div class="data_paginate paging_bootstrap paginations_custom" style="text-align: center">

                    </div>

                </div>
            </div>
        </div>
    </div>


</div>
@endsection
