@extends('frontend.layouts.master')
@section('content')

<section>
    <div class="container">

        <div class="row user-manager">
            @include('frontend.pages.widget.__menu_profile')

            <div class="col-12 col-md-8 col-lg-9 site-form " style="min-height: 212.568px;">

                <div class="menu-content">
                    <div class="title">
                        <h3>Dịch vụ đã mua</h3>
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
                                        <select id="group_id" name="group_id" class="form-control c-square c-theme">
                                            <option value="">-- Tất cả các dich vụ --</option>
                                            <option value='731'> Dịch Vụ Ngọc Rồng</option><option value='734'> Dịch Vụ Teamobi</option><option value='1186'> Nạp Game Gi&aacute; Rẻ</option><option value='730'> L&agrave;ng l&aacute;</option><option value='732'> Li&ecirc;n qu&acirc;n</option><option value='735'> Li&ecirc;n Minh</option><option value='1150'> CF Mobile</option><option value='1142'> zingspeed mobile</option><option value='736'> Army 2</option><option value='737'> Hiệp Sĩ Online</option><option value='760'> VTC Mobile - Scoin</option><option value='738'> Avatar 2d</option><option value='739'> Hải tặc t&iacute; hon</option><option value='740'> Đột K&iacute;ch</option><option value='741'> Ngũ Long Tranh B&aacute;</option><option value='742'> Fifa Online 4</option><option value='743'> DDTank</option><option value='744'> Free Fire</option><option value='745'> Blade and Soul</option><option value='746'> &Acirc;m Dương Sư - Onmyoji</option><option value='763'> VTC Game - Vcoin</option><option value='783'> Bangifcode - Toup(carot)</option><option value='1054'> pubg mobile</option><option value='1301'> SMS 9029 - Nạp Game Gi&aacute; Rẻ</option><option value='1327'> Gosu</option><option value='1329'> NPH VGP</option><option value='1330'> Kh&aacute;c</option><option value='1331'> Garena</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row mb-3 col-md-4">

                                    <div class="col-12">
                                        <select class="form-control c-square c-theme" name="status"><option value="" selected="selected">-- Tất cả trạng thái --</option><option value="0">Đã hủy</option><option value="1">Đang chờ</option><option value="2">Đang thực hiện</option><option value="3">Từ chối</option><option value="4">Hoàn tất</option><option value="5">Thất bại</option><option value="6">Mất item</option><option value="7">Lỗi call nhà cung cấp</option></select>
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
                                    <a class="btn c-btn-square m-b-10 btn-danger" href="https://napgamegiare.net/dich-vu/log">Tất cả</a>
                                </div>
                            </div>
                        </form>


                        <table class="table table-hover table-custom-res">
                            <thead>
                            <tr>
                                <th class="hidden-xs">Thời gian</th>
                                <th>ID</th>
                                <th>MGD SMS</th>
                                <th>Dịch vụ</th>
                                <th>Danh mục</th>
                                <th>Trị giá</th>
                                <th>Trạng thái</th>
                                <th>Thao tác</th>
                            </tr>
                            </thead>
                            <tbody>

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
