@extends('frontend.layouts.master')
@section('seo_head')
    @include('frontend.widget.__seo_head')
@endsection
@section('meta_robots')
    <meta name="robots" content="noindex,nofollow" />
@endsection
@section('content')
<section>
    <div class="container">
        <div class="row user-manager">
            @include('frontend.widget.__menu_profile')

            <div class="col-12 col-md-8 col-lg-9 site-form " style="min-height: 212.568px;">

                <div class="menu-content">
                    <div class="title">
                        <h3>Lịch sử mua thẻ</h3>
                    </div>
                    <div class="wapper-grid profile">

                        <form class="form-horizontal form-find m-b-20" role="form" method="get">

                            <div class="row">

                                <div class="form-row mb-3 col-md-4">

                                    <div class="col-12">
                                        <input type="text" class="form-control c-square c-theme" name="id"
                                               value=""
                                               placeholder="Mã ID">
                                    </div>
                                </div>



                                <div class="form-row mb-3 col-md-4">

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
                                    <a class="btn c-btn-square m-b-10 btn-danger" href="https://napgamegiare.net/mua-the/log">Tất cả</a>
                                </div>
                            </div>
                        </form>


                        <table class="table table-hover table-custom-res">
                            <thead>
                            <tr>
                                <th class="hidden-xs">Thời gian</th>
                                <th>ID</th>
                                <th>Loại</th>
                                <th>Mô tả</th>
                                <th>Trị giá</th>
                                <th>Trạng thái</th>
                                <th>Thao tác</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tbody>
                            </tbody>
                            <tr>
                                <td>08/07/2022 10:42:48</td>
                                <td>#123456</td>
                                <td>Viettel</td>
                                <td>Mua thẻ mệnh giá 500.000 đ</td>
                                <td>500.000 đ</td>
                                <td><span class="badge badge-success">Thành công</span></td>
                                <td>
                                    <a href="the-cao-da-mua-id" class="btn btn-default">Chi tiết</a>
                                </td>
                            </tr>
{{--                            <tr style="background: #dee2e6;">--}}
{{--                                <td colspan="7">Không có dữ liệu</td>--}}
{{--                            </tr>--}}
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
