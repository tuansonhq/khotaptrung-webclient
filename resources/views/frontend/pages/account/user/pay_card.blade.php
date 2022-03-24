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

                        <p>ID của bạn: <strong> {{App\Library\AuthCustom::user()->id}}</strong> </p>
                        <span><p>* Ưu tiên nạp thẻ VIETTEL & VINAPHONE</p></span>
                        <p style="color: red;font-size: 14px">    {{ $errors->first() }}</p>
                        <p style="color: red"></p>
                        <form action="{{route('postTelecomDepositAuto')}}" method="POST" id="form-charge-input">
                            @csrf
                            <div class="form-group row">
                                <label class="col-md-3 control-label">
                                    Tài khoản

                                </label>
                                <div class="col-md-6">
                                    <div class="input-group" style="width: 100%">
                                        <input type="text" class="form-control" placeholder="" value=" {{App\Library\AuthCustom::user()->username}}" readonly>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group row ">

                                <label class="col-md-3 control-label">
                                    Loại thẻ:
                                </label>

                                <div class="col-md-6">
                                    <div class="input-group" style="width: 100%">
                                        @if(isset($bank))
                                            <select id="telecom" name="telecom" class="form-control">
                                                @foreach($bank as $items)
                                                    <option value="{{$items->key}}">{{$items->key}}</option>
                                                @endforeach
                                            </select>
                                        @endif
                                    </div>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 control-label">
                                    Mệnh giá:

                                </label>

                                <div class="col-md-6">
                                    <div class="input-group" style="width: 100%">
                                        <select name="amount" id="amount" class="form-control">
                                            <option value="">-- Chọn đúng mệnh giá, sai mất thẻ --</option>
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
                                        <input type="text" class="form-control" name="pin">
                                    </div>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 control-label">
                                    Số Serial:

                                </label>
                                <div class="col-md-6">
                                    <div class="input-group" style="width: 100%">
                                        <input type="text" class="form-control"  name="serial">
                                    </div>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 control-label">
                                    Mã bảo vệ:

                                </label>
                                <div class="col-md-6">
                                    <div class="input-group" style="width: 100%">
                                        <input type="text" class="form-control" name="captcha" id="captcha">
                                        <div class="captcha">
                                            <span class="reload"  id="reload">
                                                {!! captcha_img() !!}
                                            </span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group row " style="margin-top: 40px">
                                <div class="col-md-6" style="    margin-left: 25%;">
                                    <button class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold btn-block " type="submit">Nạp thẻ</button>
                                </div>
                            </div>
                        </form>

                        <div id="data_pay_card_history">
                            @include('frontend.pages.account.user.function.__pay_card')
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <input type="hidden" name="hidden_page" id="hidden_page" value="1" />
    <script src="/assets/frontend/js/charge/charge.js"></script>

@endsection

