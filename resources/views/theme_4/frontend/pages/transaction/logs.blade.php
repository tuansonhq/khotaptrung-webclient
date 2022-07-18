@extends('frontend.layouts.master')
@section('content')
<section>
    <div class="container">




        <div class="row user-manager">

            @include('frontend.pages.widget.__menu_profile')

            <div class="col-12 col-md-8 col-lg-9 site-form " style="min-height: 212.568px;">
                <div class="menu-content">

                    <div class="title">
                        <h3>Biến động số dư</h3>
                    </div>
                    <div class="wapper-grid profile">

                        <form class="form-horizontal form-find m-b-20" role="form" method="get">

                            <div class="row">


                                <div class="form-row mb-3 col-md-4">
                                    <div class="col-12">
                                        <label class="mt-2">Giao dịch:</label>
                                    </div>
                                    <div class="col-12">
                                        <select id="group_id" name="trade_type" class="form-control c-square c-theme">
                                            <option value="">-- Tất cả --</option>
                                            <option
                                                value="1"  >Nạp thẻ tự động</option>
                                            <option
                                                value="2"  >Nạp thẻ chậm</option>
                                            <option
                                                value="3"  >Chuyển tiền</option>
                                            <option
                                                value="4"  >Nhận tiền</option>
                                            <option
                                                value="5"  >Rút tiền</option>
                                            <option
                                                value="6"  >Cộng tiền</option>
                                            <option
                                                value="7"  >Trừ tiền</option>
                                            <option
                                                value="8"  >Tiền thưởng</option>
                                            <option
                                                value="9"  >Thanh toán bán nick</option>
                                            <option
                                                value="10"  >Đặt cọc (Trả góp)</option>
                                            <option
                                                value="11"  >Hoàn tiền</option>
                                            <option
                                                value="12"  >Thanh toán dịch vụ</option>
                                            <option
                                                value="13"  >Hoàn tất dịch vụ</option>
                                            <option
                                                value="14"  >Thanh toán mua thẻ</option>
                                            <option
                                                value="15"  >Thanh toán mua phụ kiện</option>
                                            <option
                                                value="101"  >Tăng số dư</option>
                                            <option
                                                value="102"  >Giảm số dư</option>
                                            <option
                                                value="103"  >Chuyển nhận tiền</option>
                                            <option
                                                value="104"  >Cộng trừ tiền</option>
                                            <option
                                                value="105"  >Mua tài khoản game</option>
                                            <option
                                                value="106"  >Mua kim cương</option>
                                            <option
                                                value="107"  >Vòng quay may mắn</option>
                                            <option
                                                value="108"  >Vòng quay vật phẩm</option>
                                            <option
                                                value="109"  >Lật hình vật phẩm</option>
                                            <option
                                                value="110"  >Lật hình trúng nick</option>
                                            <option
                                                value="111"  >Quay hình trúng vp</option>
                                            <option
                                                value="112"  >Quay hình trúng nick</option>
                                            <option
                                                value="113"  >Quay hình trúng tiền</option>
                                            <option
                                                value="114"  >Vòng quay trúng tiền</option>
                                            <option
                                                value="115"  >Lật hình trúng tiền</option>
                                            <option
                                                value="116"  >Quay xèng trúng vp</option>
                                            <option
                                                value="117"  >Quay xèng trúng nick</option>
                                            <option
                                                value="118"  >Quay xèng trúng tiền</option>
                                            <option
                                                value="119"  >Vòng quay trúng nick</option>
                                            <option
                                                value="120"  >Rung cây trúng vp</option>
                                            <option
                                                value="121"  >Rung cây trúng nick</option>
                                            <option
                                                value="122"  >Rung cây trúng tiền</option>
                                            <option
                                                value="123"  >Gieo quẻ trúng vp</option>
                                            <option
                                                value="124"  >Gieo quẻ trúng nick</option>
                                            <option
                                                value="125"  >Gieo quẻ trúng tiền</option>
                                            <option
                                                value="126"  >Đập lu trúng vp</option>
                                            <option
                                                value="127"  >Đập lu trúng nick</option>
                                            <option
                                                value="128"  >Đập lu trúng tiền</option>
                                            <option
                                                value="130"  >Cộng tiền chuyển khoản tự động</option>
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
                                    <a class="btn c-btn-square m-b-10 btn-danger" href="https://napgamegiare.net/user/tran-log">Tất cả</a>
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


    </div><!-- /.container -->
</section>
@endsection
