@extends('frontend.layouts.master')
@section('content')
    <div class="account">


        <div class="account_content">
            <div class="container">
                @include('frontend.pages.account.sidebar')
                <div class="account_sidebar_content">
                    <div class="account_sidebar_content_title">
                        <p>Lịch sử giao dịch</p>
                        <div class="account_sidebar_content_line"></div>
                    </div>
                    <div class="account_content_transaction_history">
                        <form action="">
                            <div class="row">
                                <div class="col-md-4 control-label">
                                    <div class="input-group">
                                        <span >Giao dịch</span>
                                        <select name="" id="" class="form-control">
                                            <option value="">--Tất cả--</option>
                                            <option value="1">Nạp thẻ tự động</option>
                                            <option value="2">Nạp thẻ chậm</option>
                                            <option value="">Chuyển tiền</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 control-label">
                                    <div class="input-group">
                                        <div class="input-group date" id="transaction_history_start">
                                        <span class="input-group-btn input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                            <input type="text" class="form-control input-group-addon" name="start" autocomplete="off" placeholder="Từ ngày">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 control-label">
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
                        <table class="table table-hover table-custom-res">
                            <thead>
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

                            </thead>
                            <tbody>
                            @if(isset($result))

                                @foreach($result->data->data as $data)
                                    <tr>

                                        <td>03/02/2022</td>
                                        <td>{{$data->id}}</td>

                                        <td>namdo</td>
                                        <td>sadasd</td>
                                        <td>2000000 đ</td>
                                        <td>20000 đ</td>
                                        <td>hello</td>
                                        <td>Chờ</td>
                                    </tr>
                                <tr>

                                    <td>03/02/2022</td>
                                    <td>{{$data->id}}</td>
                                    <td>namdo</td>
                                    <td>sadasd</td>
                                    <td>2000000 đ</td>
                                    <td>20000 đ</td>
                                    <td>hello</td>
                                    <td>Chờ</td>
                                </tr>
                                @endforeach
                            @endif

                            </tbody>
                        </table>
                    </div>

                    <!--                    <div class="row">-->
                    <!--                        <div class='col-sm-4'>-->
                    <!--                            <div class="form-group">-->
                    <!--                                <div class='input-group date' id='datetimepicker1'>-->
                    <!--&lt;!&ndash;                                    <input type="text" class="idol_live_end_input" name="end_time"  id="idol_live_end" autocomplete="off" placeholder=""  data-toggle="datetimepicker"  required>&ndash;&gt;-->

                    <!--                                    <input type='text' class="input-group-addon" data-toggle="datetimepicker" />-->
                    <!--                                    <span class="input-group-addon">-->
                    <!--                        ádasd-->
                    <!--          </span>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                        <div class='col-sm-4'>-->
                    <!--                            <div class="form-group">-->
                    <!--                                <div class='input-group date' id='datetimepicker2'>-->
                    <!--                                    <input type='text' class="form-control" />-->
                    <!--                                    <span class="input-group-addon">-->
                    <!--                        <span class="glyphicon glyphicon-calendar"></span>-->
                    <!--          </span>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                        <div class='col-sm-4'>-->
                    <!--                            <div class="form-group">-->
                    <!--                                <div class='input-group date' id='datetimepicker3'>-->
                    <!--                                    <input type='text' class="form-control" />-->
                    <!--                                    <span class="input-group-addon">-->
                    <!--                        <span class="glyphicon glyphicon-time"></span>-->
                    <!--          </span>-->
                    <!--                                </div>-->
                    <!--                            </div>-->
                    <!--                        </div>-->
                    <!--                    </div>-->

                </div>
            </div>
        </div>
    </div>
@endsection
