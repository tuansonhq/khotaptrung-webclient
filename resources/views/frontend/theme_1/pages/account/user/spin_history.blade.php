@extends('frontend.'.theme('')->theme_key.'.layouts.master')
@section('content')
    <div class="account">

        <div class="account_content">
            <div class="container">
                @include('frontend.'.theme('')->theme_key.'.pages.account.sidebar')
                <div class="account_sidebar_content">
                    <div class="account_sidebar_content_title">
                        <p>LỊCH SỬ QUAY THƯỞNG</p>
                        <div class="account_sidebar_content_line"></div>
                    </div>
                    <div class="account_content_transaction_history">
                        <form action="">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <!--                                        <span >Giao dịch</span>-->
                                        <select name="" id="" class="form-control">
                                            <option value="">--Chọn danh mục--</option>
                                            <option value="1">VQ Phúc Lộc Thọ</option>
                                            <option value="2">VQ Linh Vật Năm Mới</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="input-group date" id="transaction_history_start">
                                        <span class="input-group-btn">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                            <input type="text" class="form-control" name="start" autocomplete="off" placeholder="Từ ngày">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="input-group date" id="transaction_history_end">
                                        <span class="input-group-btn input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                        </span>
                                            <input type="text" class="form-control input-group-addon" name="start" autocomplete="off" placeholder="Đến ngày">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="submit" style="margin-right: 16px" class="btn c-theme-btn c-btn-square m-b-10" value="Tìm kiếm" >
                                    <a href="" class="btn c-btn-square m-b-10 btn-danger">Tất cả</a>
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table class="table table-hover table-custom-res">
                                <thead>
                                <tr>
                                    <th>Thời gian</th>
                                    <th>ID</th>
                                    <th>Phần thưởng	</th>
                                    <th>Id phần thưởng	</th>
                                    <th>Danh mục</th>

                                </tr>

                                </thead>
                                <tbody>
                                <tr>
                                    <td>Thời gian</td>
                                    <td>ID</td>
                                    <td>Phần thưởng	</td>
                                    <td>Id phần thưởng	</td>
                                    <td>Danh mục</td>

                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
