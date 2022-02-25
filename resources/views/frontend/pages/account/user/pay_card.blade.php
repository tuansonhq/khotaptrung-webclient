@extends('frontend.layouts.master')
@section('content')
    <div class="account">

        <div class="account_content">
            <div class="container">
                @include('frontend.pages.account.sidebar')
                <div class="account_sidebar_content">
                    <div class="account_pay_card">
                        <div class="account_sidebar_content_title">
                            <p>NẠP THẺ</p>
                            <div class="account_sidebar_content_line"></div>
                        </div>
                        <p>ID của bạn: <strong>1553156</strong> </p>
                        <span><p>* Ưu tiên nạp thẻ VIETTEL & VINAPHONE</p></span>
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
                                    Loại thẻ:
                                </label>
                                <div class="col-md-6">
                                    <div class="input-group" style="width: 100%">
                                        <select name="" id="" class="form-control">
                                            <option value="">VIETTEL</option>
                                            <option value="1">MOBIPHONE</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 control-label">
                                    Mệnh giá:

                                </label>
                                <div class="col-md-6">
                                    <div class="input-group" style="width: 100%">
                                        <select name="" id="" class="form-control">
                                            <option value="">-- Chọn đúng mệnh giá, sai mất thẻ --</option>
                                            <option value="1">10,000 VNĐ (nhận 100.0%)</option>
                                            <option value="2">20,000 VNĐ (nhận 100.0%)</option>
                                            <option value="">30,000 VNĐ (nhận 100.0%)</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 control-label">
                                    Mã số thẻ:

                                </label>
                                <div class="col-md-6">
                                    <div class="input-group" style="width: 100%">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 control-label">
                                    Số Serial:

                                </label>
                                <div class="col-md-6">
                                    <div class="input-group" style="width: 100%">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 control-label">
                                    Mã bảo vệ:

                                </label>
                                <div class="col-md-6">
                                    <div class="input-group" style="width: 100%">
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon"><img src="https://www.shopas.net/captcha/flat?KfHsLiD2" alt="" style="height: 100%;border: 1px solid darkgrey;"></span>
                                    </div>
                                </div>

                            </div>/ 2
                            '
                            <div class="form-group row " style="margin-top: 40px">
                                <div class="col-md-6" style="    margin-left: 25%;">
                                    <button class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold btn-block loading">Nạp thẻ</button>
                                </div>
                            </div>
                        </form>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Thời gian	</th>
                                <th>Nhà mạng</th>
                                <th>Mã thẻ	</th>
                                <th>Serial</th>
                                <th>Kiểu nạp	</th>
                                <th>Mệnh giá	</th>
                                <th>Kết quả</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>03/07/2022</th>
                                <th>Viettel</th>
                                <th>0656506565665</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
