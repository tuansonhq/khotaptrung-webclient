@extends('frontend.layouts.master')
@section('content')
    <div class="account">

        <div class="account_content">
            <div class="container">
                @include('frontend.pages.account.sidebar')
                <div class="account_sidebar_content ">
                    <div class="account_pay_card ">
                        <div class="account_sidebar_content_title">
                            <p>NẠP VÍ / ATM</p>
                            <div class="account_sidebar_content_line"></div>
                        </div>
                        <div class="recharge_atm alert alert-info">
                            <p>
                                <strong>*Chú ý: Chuyển khoản nạp tiền theo hướng dẫn</strong>
                            </p>
                            <p>
                                <strong>Click Xem Hướng Dẫn:</strong>
                            </p>
                            <p>
                                <a href="">Link Hướng Dẫn Nạp Tiền ATM / Ví Tự Động</a>
                            </p>
                            <p>
                                <a href="">Link Video Hướng Dẫn Nạp Tiền ATM/ Ví Tự Động</a>
                            </p>
                        </div>
                        <form action="">
                            <div class="form-group row">
                                <label class="col-md-3 control-label">
                                    Tài khoản

                                </label>
                                <div class="col-md-6">
                                    <div class="input-group" style="width: 100%">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                            </div>
                            <div class="form-group row ">

                                <label class="col-md-3 control-label">
                                    Ngân hàng:
                                </label>
                                <div class="col-md-6">
                                    <div class="input-group" style="width: 100%">
                                        @dd($tranferbank)
                                        @if(isset($tranferbank->data))
                                        <select name="bank" id="" class="form-control">
                                            <option value="">-- Vui lòng chọn ngân hàng chuyển khoản --</option>
                                            @foreach($tranferbank->data as $items)
                                                @dd($items)
                                            <option value="TECHCOMBANK">Ngân hàng Kỹ thương Việt Nam (TechcomBank)</option>
                                            @endforeach
                                        </select>
                                        @endif
                                    </div>
                                </div>

                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 control-label">
                                    Số tiền muốn nạp:

                                </label>
                                <div class="col-md-6">
                                    <div class="input-group" style="width: 100%">
                                        <input type="text" class="form-control" placeholder="Tối thiểu 10.000 VNĐ tối đa 20.000.000 VNĐ">
                                    </div>
                                </div>

                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 control-label">
                                    Mã bảo vệ:

                                </label>
                                <div class="col-md-6">
                                    <div class="input-group" style="width: 100%">
                                        <input type="text" class="form-control" placeholder="Mã bảo vệ">
                                        <span class="input-group-addon"><img src="https://www.shopas.net/captcha/flat?KfHsLiD2" alt="" style="height: 100%;border: 1px solid darkgrey;"></span>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group row " style="margin-top: 40px">
                                <div class="col-md-6" style="    margin-left: 25%;">
                                    <button class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold btn-block loading">Xác nhận</button>
                                </div>
                            </div>
                        </form>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Thời gian</th>
                                <th>Mã nạp yêu cầu</th>
                                <th>Ngân hàng</th>
                                <th>Chủ tài khoản</th>
                                <th>Số tài khoản</th>
                                <th>Số tiền (VNĐ)</th>
                                <th>Thực nhận (VNĐ)</th>
                                <th>Trạng thái</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Thời gian</td>
                                <td>Mã nạp yêu cầu</td>
                                <td>Ngân hàng</td>
                                <td>Chủ tài khoản</td>
                                <td>Số tài khoản</td>
                                <td>Số tiền (VNĐ)</td>
                                <td>Thực nhận (VNĐ)</td>
                                <td>Trạng thái</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
