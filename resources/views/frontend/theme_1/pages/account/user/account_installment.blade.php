@extends('frontend.'.theme('')->theme_key.'.layouts.master')
@section('content')
    <div class="account">

        <div class="account_content">
            <div class="container">
                @include('frontend.'.theme('')->theme_key.'.pages.account.sidebar')
                <div class="account_sidebar_content">
                    <div class="account_sidebar_content_title">
                        <p>GIAO DỊCH TRẢ GÓP
                        </p>
                        <div class="account_sidebar_content_line"></div>
                    </div>
                    <div class="account_content_transaction_history">
                        <form action="">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span >Mã tìa khoản #</span>
                                        <input type="text" class="form-control" placeholder="Mã tài khoản">

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span >Game</span>
                                        <select name="" id="" class="form-control">
                                            <option value="">--Tất cả các game--</option>
                                            <option value="1"> Nick Free Fire Giá Rẻ</option>
                                            <option value="2"> Nick Free Fire Siêu Cấp</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span >Trạng thái</span>
                                        <select name="" id="" class="form-control">
                                            <option value=""> Tất cả  </option>
                                            <option value="1">
                                                Mua thành công
                                            </option>
                                            <option value="2">
                                                Chờ kiểm tra tài khoản
                                            </option>
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
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span >Số tiền</span>
                                        <select name="" id="" class="form-control">
                                            <option value="">Chọn giá tiền</option>
                                            <option value="1">Dưới 50K</option>
                                            <option value="2">Từ 50K - 200K</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <!--                                    <button class="btn c-theme-btn c-btn-square m-b-10" type="submit"><i class="fas fa-search"></i> Tìm kiếm</button>-->
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
                                    <th>Mã số Acc</th>
                                    <th>Trị giá</th>
                                    <th>Trả trước</th>
                                    <th>Còn lại</th>
                                    <th>Hết hạn</th>
                                    <th>Thao tác</th>

                                </tr>

                                </thead>
                                <tbody>
                                <tr>
                                    <td>Thời gian</td>
                                    <td>ID</td>
                                    <td>Mã số Acc</td>
                                    <td>Trị giá</td>
                                    <td>Trả trước</td>
                                    <td>Còn lại</td>
                                    <td>Hết hạn</td>
                                    <td>Thao tác</td>

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
