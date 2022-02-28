@extends('frontend.layouts.master')
@section('content')
    <div class="account">

        <div class="account_content">
            <div class="container">
                @include('frontend.pages.account.sidebar')
                <div class="account_sidebar_content">
                    <div class="account_sidebar_content_title">
                        <p>THẺ CÀO ĐÃ NẠP</p>
                        <div class="account_sidebar_content_line"></div>
                    </div>
                    <div class="account_content_transaction_history">
                        <form action="">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span >Thẻ cào</span>
                                        <input type="text" class="form-control" placeholder="Mã thẻ, Serial...">

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span >Loại thẻ</span>
                                        <select name="" id="" class="form-control">
                                            <option value="">--Tất cả loại thẻ--</option>
                                            <option value="1">Garena</option>
                                            <option value="2">Mobiphone</option>
                                            <option value="">Chuyển tiền</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span >Kiểu nạp</span>
                                        <select name="" id="" class="form-control">
                                            <option value="">Nạp tự động</option>
                                            <option value="1">Nạp chậm</option>
                                            <option value="2">Nạp thẻ chậm</option>
                                            <option value="">Chuyển tiền</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span >Trạng thái</span>
                                        <select name="" id="" class="form-control">
                                            <option value="">--Tất cả--</option>
                                            <option value="1">Thẻ đúng</option>
                                            <option value="2">Thẻ sai</option>
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
                                    <button class="btn c-theme-btn c-btn-square m-b-10" type="submit"><i class="fas fa-search"></i> Tìm kiếm</button>
                                    <!--                                    <input type="submit" style="margin-right: 16px" class="" value="Tìm kiếm" >-->
                                    <!--                                    <a href="" class="btn c-btn-square m-b-10 btn-danger">Tất cả</a>-->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="" class="btn c-btn-square m-b-10 btn-danger"><i class="fas fa-calendar-alt"></i> Hôm nay</a>
                                    <a href="" class="btn c-btn-square m-b-10 btn-danger"><i class="fas fa-calendar-alt"></i> Hôm qua </a>
                                    <a href="" class="btn c-btn-square m-b-10 btn-danger"><i class="fas fa-calendar-alt"></i> Tháng này</a>
                                    <a href="" class="btn c-btn-square m-b-10 c-theme-btn"><i class="fas fa-calendar-alt"></i> Tất cả</a>
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table class="table table-hover table-custom-res">
                                <thead>
                                <tr>
                                    <th>Thời gian</th>
                                    <th>Kiểu nạp</th>

                                    <th>Nhà mạng</th>
                                    <th>Mã thẻ, serial</th>
                                    <th>Mệnh giá</th>
                                    <th>Kết quả</th>
                                    <th>Thực nhận</th>
                                </tr>

                                </thead>
                                <tbody>
                                <tr>
                                    <td>Thời gian</td>
                                    <td>Kiể      nạp</td>

                                    <td>Nhà mạng</td>
                                    <td>Mã thẻ, serial</td>
                                    <td>Mệnh giá</td>
                                    <td>Kết quả</td>
                                    <td>Thực nhận</td>
                                </tr>
                                <tr>
                                    <th  colspan="2">Tổng cộng các trang</th>
                                    <th></th>
                                    <th>0 thẻ</th>
                                    <th>0</th>
                                    <th>0</th>
                                    <th>0</th>

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
