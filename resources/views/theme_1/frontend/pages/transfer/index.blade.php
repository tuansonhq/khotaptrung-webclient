@extends('frontend.layouts.master')
@push('style')
@endpush
@push('js')
    <script src="/assets/frontend/theme_1/js/transfer/transfer.js?v={{time()}}"></script>
@endpush
@section('meta_robots')
    <meta name="robots" content="index,follow" />
@endsection
@section('content')


    <div class="account">

        <div class="account_content">
            <div class="container">
                @include('frontend.layouts.includes.menu_profile')
                <div class="account_sidebar_content ">
                    <div class="account_pay_card ">
                        <div class="account_sidebar_content_title">
                            <p>NẠP VÍ / ATM</p>
                            <div class="account_sidebar_content_line"></div>
                        </div>

                            <div class="recharge_atm alert alert-info" role="alert">
                                @if (setting('sys_tranfer_content') != "")
                                {!! setting('sys_tranfer_content') !!}
                                @endif
                                    <div class="transfer-code" style="display: flex"></div>

                            </div>



                        <div class="data_pay_card_history__atm">
                            @include('frontend.pages.transfer.widget.__tranfer_history')
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <input type="hidden" name="hidden_page_atm" id="hidden_page_atm" value="1" />
    <script>


    </script>

@endsection
