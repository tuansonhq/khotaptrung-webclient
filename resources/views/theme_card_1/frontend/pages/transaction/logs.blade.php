@extends('frontend.layouts.master')

@section('content')
<div class="row my-3" >
    <div class="col-xl-3  col-sm-3 col-md-3 col-12">
        <div class="bg-white">
            @include('frontend.layouts.includes.menu_profile')
        </div>

    </div>
    <div class="col-xl-9  col-md-9 col-sm-12 col-12">
        <div class="bg-white">
            <div class="main-profile" style="min-height: 468px;padding:15px 20px">

                <div class="content-profile">
                    <h3>Lịch sử giao dịch</h3>
                    <hr class="lines">


                    <form class="form-horizontal form-find mb-4 " role="form" method="get">

                        <div class="row">

                            <div class="col-md-4">
                                <div class="input-group mb-2 c-square">
                                    <span class="input-group-addon" id="basic-addon1">Giao dịch</span>

                                    <select id="group_id" name="trade_type" class="form-control c-square c-theme">
                                        <option value="">-- Tất cả --</option>
                                        <option value="1"  >Nạp thẻ tự động</option>
                                        <option value="2"  >Nạp thẻ chậm</option>
                                        <option value="3"  >Chuyển tiền</option>
                                        <option value="4"  >Nhận tiền</option>
                                        <option value="5"  >Rút tiền</option>
                                        <option value="6"  >Cộng tiền</option>
                                        <option value="7"  >Trừ tiền</option>
                                        <option value="8"  >Tiền thưởng</option>
                                        <option value="9"  >Thanh toán bán nick</option>
                                        <option value="10"  >Đặt cọc (Trả góp)</option>
                                        <option value="11"  >Hoàn tiền</option>
                                        <option value="12"  >Thanh toán dịch vụ</option>
                                        <option value="13"  >Hoàn tất dịch vụ</option>
                                        <option value="14"  >Thanh toán mua thẻ</option>
                                        <option value="101"  >Tăng số dư</option>
                                        <option value="102"  >Giảm số dư</option>
                                        <option value="103"  >Chuyển nhận tiền</option>
                                        <option value="104"  >Cộng trừ tiền</option>
                                        <option value="105"  >Mua tài khoản game</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group mb-2 c-square">
                                    <div class="input-group date date-picker" data-date-format="dd/mm/yyyy"
                                         data-rtl="false">
                                                            <span class="input-group-btn">
                                                            <button class="btn default c-btn-square pl-2 pr-2"
                                                                    type="button"><i
                                                                    class="fa fa-calendar"></i></button>
                                                            </span>
                                        <input type="text" class="form-control c-square c-theme" name="started_at"
                                               autocomplete="off" placeholder="Từ ngày"
                                               value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group mb-2 c-square">
                                    <div class="input-group date date-picker" data-date-format="dd/mm/yyyy"
                                         data-rtl="false">
                                                            <span class="input-group-btn">
                                                            <button class="btn default c-btn-square pl-2 pr-2"
                                                                    type="button"><i
                                                                    class="fa fa-calendar"></i></button>
                                                            </span>
                                        <input type="text" class="form-control c-square c-theme" name="ended_at"
                                               autocomplete="off" placeholder="Đến ngày"
                                               value="">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <input type="submit" class="btn btn-success c-theme-btn c-btn-square mb-2" value="Tìm kiếm">
                                <a class="btn c-btn-square mb-2 btn-danger" href="https://thegarenagiare.com/user/tran-log">Tất cả</a>
                            </div>
                        </div>


                    </form>

                    <table class="table table-hover table-custom-res">
                        <tbody>
                        <tr>
                            <th>Thời gian</th>
                            <th>ID</th>
                            <th>Tài khoản</th>
                            <th>Giao dịch</th>
                            <th>Số tiền</th>
                            <th>Số dư cuối</th>
                            <th>Nội dung</th>
                            <th>Trạng thái</th>
                        </tr>


                        </tbody>
                        <tbody>
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
