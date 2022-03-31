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
                        @if(isset($tranferbankPost->message))
                            <p  style="color: red;font-size: 14px">{{$tranferbankPost->message}}</p>
                        @endif

                        <p style="color: red;font-size: 14px">  {{ $errors->first() }}   </p>
                        <form action="{{route('postTranferBank')}}" method="POST" id="form-recharge" class="comfirm_tranfer_alert_out">
                            @csrf
                            <div class="form_tranfer">
                                <div class="form-group row">
                                    <label class="col-md-3 control-label">
                                        Tài khoản

                                    </label>
                                    <div class="col-md-6">
                                        <div class="input-group" style="width: 100%" id="transfer_user_name">
                                            <input type="text" class="form-control" value=""  readonly>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group row ">

                                    <label class="col-md-3 control-label">
                                        Ngân hàng:
                                    </label>
                                    <div class="col-md-6">
                                        <div class="input-group" style="width: 100%">
{{--                                            @if(isset($tranferbank->data))--}}
                                                <select name="id_bank" id="bank_tranfer" class="form-control" data-id="">
                                                    <option value="">-- Vui lòng chọn ngân hàng chuyển khoản --</option>
{{--                                                    @foreach($tranferbank->data as $key=>$items)--}}
{{--                                                        <option value="{{$items->title}}"  data-id="{{$key}}">{{$items->title}}</option>--}}
{{--                                                    @endforeach--}}
                                                </select>
{{--                                            @endif--}}
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 control-label">
                                        Số tiền muốn nạp:

                                    </label>
                                    <div class="col-md-6">
                                        <div class="input-group" style="width: 100%">
                                            <input type="text" class="form-control"  name="tranfer_money" id="amount" placeholder="Tối thiểu 10.000 VNĐ tối đa 20.000.000 VNĐ">
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 control-label">
                                        Mã bảo vệ:

                                    </label>
                                    <div class="col-md-6">
                                        <div class="input-group" style="width: 100%">
                                            <input type="text"  name="captcha" class="form-control" placeholder="Mã bảo vệ">
                                            <div class="captcha">
                                            <span class="reload"  id="reload"  >
                                                {!! captcha_img() !!}
                                            </span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="tranfer_confirm_form">
                                    <div class="form-group row " style="margin-top: 40px">
                                        <div class="col-md-6" style="    margin-left: 25%;">
                                            <button class="btn c-theme-btn c-btn-square btn-confirm c-btn-uppercase c-btn-bold btn-block " type="submit" >Xác nhận</button>
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </form>
                        <div class="account_pay_card comfirm_tranfer_alert"  id="recharge-info">
                            <div class="recharge_atm alert alert-info">

                            </div>
                        </div>
                        <div id="data_pay_card_history__atm">
                            @include('frontend.pages.account.user.function.__pay_atm')
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <input type="hidden" name="hidden_page_atm" id="hidden_page_atm" value="1" />


@endsection
