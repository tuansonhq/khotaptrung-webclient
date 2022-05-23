
@extends('frontend.layouts.master')
@push('style')
@endpush
@push('js')
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/charge/charge.js?v={{time()}}"></script>
@endpush
@section('content')
    <div class="account">
        <div class="account_content">
            <div class="container">
                @include('frontend.layouts.includes.menu_profile')
                <div class="account_sidebar_content">
                    <div class="account_pay_card">
                        <div class="account_sidebar_content_title">
                            <p>NẠP THẺ</p>
                            <div class="account_sidebar_content_line"></div>
                        </div>

                        @if (setting('sys_charge_content') != "")
                            <div class="alert alert-primary" role="alert">
                                {!! setting('sys_charge_content') !!}

                            </div>
                        @endif
                        <div class="row justify-content-center" id="loading-data">
                            <div class="loading"></div>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div><br />
                        @endif
                        <div class="col-auto pl-0 pr-0 hide" id="form-content">
                            <form method="post" action="{{url('captcha-validation')}}">
                                @csrf
                                {{--                   <div class="form-group row">--}}
                                {{--                    <label class="col-md-3 control-label">--}}
                                {{--                    Tài khoản--}}
                                {{--                    </label>--}}
                                {{--                    <div class="col-md-6">--}}
                                {{--                       <div class="input-group" style="width: 100%">--}}
                                {{--                          <input class="form-control" id="username" value="" readonly>--}}
                                {{--                       </div>--}}
                                {{--                    </div>--}}
                                {{--                 </div>--}}
                                <div class="form-group row ">
                                    <label class="col-md-3 control-label">
                                        Loại thẻ:
                                    </label>
                                    <div class="col-md-6">
                                        <div class="input-group" style="width: 100%">
                                            <select id="telecom" name="type" class="form-control">

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
                                            <select name="amount" id="amount" class="form-control">

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
                                            <input type="text" class="form-control" name="pin" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 control-label">
                                        Số Serial:
                                    </label>
                                    <div class="col-md-6">
                                        <div class="input-group" style="width: 100%">
                                            <input type="text" class="form-control"  name="serial" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 control-label">
                                        Mã bảo vệ:
                                    </label>
                                    <div class="col-md-6">
                                        <div class="form-group mt-4 mb-4">
                                            <div class="captcha">
                                                <span>{!! captcha_img() !!}</span>
                                                <button type="button" class="btn btn-danger" class="reload" id="reload">
                                                    &#x21bb;
                                                </button>
                                            </div>
                                        </div>

                                        <div class="form-group mb-4">
                                            <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group row " style="margin: 20px 0">
                                    <div class="col-md-6" style="    margin-left: 25%;">
                                        <button class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold btn-block " type="submit">Nạp thẻ</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="paycartdata">
                        @include('frontend.pages.charge.widget.__charge')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" name="hidden_page_ls" id="hidden_page_service_nt" class="hidden_page_service_nt" value="1" />
@endsection
