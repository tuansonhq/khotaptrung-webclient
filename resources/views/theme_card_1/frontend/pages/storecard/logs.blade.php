@extends('frontend.layouts.master')

@section('content')
<div class="row my-3" >
    <div class="col-lg-3  col-sm-3 col-md-3 col-12">
        <div class="bg-white">
            @include('frontend.layouts.includes.menu_profile')
        </div>

    </div>
    <div class="col-lg-9  col-md-9 col-sm-12 col-12">
        <div class="bg-white">
            <div class="main-profile" style="min-height: 468px;padding:15px 20px">

                <div class="content-profile">
                    <h3>Thẻ cào đã mua</h3>
                    <hr class="lines">

                    <form class="form-horizontal form-find mb-4" role="form" method="get">

                        <div class="row">
                            <div class="col-md-4">
                                <div class="input-group mb-2 c-square ">
                                    <span class="input-group-addon" id="basic-addon1">Mã ID #</span>
                                    <input type="text" class="form-control c-square c-theme" name="id"
                                           value=""
                                           autofocus placeholder="Mã ID">
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
                                               autocomplete="off" autofocus placeholder="Từ ngày"
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
                                <a class="btn c-btn-square mb-2 btn-danger" href="https://thegarenagiare.com/mua-the/log">Tất cả</a>
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
