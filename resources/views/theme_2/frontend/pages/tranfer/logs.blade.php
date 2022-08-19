@extends('frontend.layouts.master')
@section('seo_head')
    @include('frontend.widget.__seo_head')
    <meta name="robots" content="noindex,nofollow" />
@endsection
@push('js')

@endpush

@section('content')
    <div class="site-content-body bg-white first last p-0">
        <div class="block-profile" >
            @include('frontend.widget.__side__bar')
            <div class="block-content p-3">
                <div class="tab-content mb-4">
                    <div class="tab-pane fade data__charge_atm_tab" id="tranfer_atm" role="tabpanel" aria-labelledby="tranfer-tab"  style="min-height: 700px;">
                        <form class="form-charge form__lsmt">
                            <div class="d-flex justify-content-between align-items-md-center flex-column flex-md-row">
                                <h4 class="title-style-left mb-3 mt-3">Lịch sử nạp ATM</h4>
                                {{--                                <div class="d-flex align-items-center mb-3">--}}
                                {{--                                    <input type="text" placeholder="ID" name="id_lsmt" class="id_lsmt">--}}
                                {{--                                    <div class="input-group date-ranger-picker ms-3">--}}

                                {{--                                        <input type="text" class="form-control border-end-0 started_at_lsmt" placeholder="DD/MM/YYYY" value="">--}}
                                {{--                                        <span class="input-group-text bg-transparent text-secondary"><i class="las la-arrow-right"></i></span>--}}
                                {{--                                        <input type="text" class="form-control border-start-0 ended_at_lsmt" placeholder="DD/MM/YYYY" value="">--}}
                                {{--                                        <button class="btn bg-primary text-white" type="submit"><i class="las la-angle-right"></i></button>--}}
                                {{--                                        <input type="hidden" name="log" value="store-card">--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                            </div>
                        </form>
                        <div>
                            <div class="text-center ajax-loading-store load_spinner" >
                                <div class="cv-spinner">
                                    <span class="spinner"></span>
                                </div>
                            </div>
                        </div>

                        <div id="data_charge_atm_history">
                            @include('frontend.pages.tranfer.widget.__tranfer__history')
                        </div>

                    </div><!-- BEGIN Tab Content Item -->
                </div>
            </div>
        </div>
    </div>
    <div id="copy"></div>
    <div class="after"></div>


    <input type="hidden" name="id_tranfer_data" class="id_tranfer_data" value="">
    <input type="hidden" name="started_at_tranfer_data" class="started_at_tranfer_data" value="">
    <input type="hidden" name="ended_at_tranfer_data" class="ended_at_tranfer_data" value="">
    <input type="hidden" name="hidden_page_service_tranfer" id="hidden_page_service_tranfer" class="hidden_page_service_tranfer" value="1" />

    <script src="/assets/frontend/theme_2/js/account/recharge-atm-history.js?v={{time()}}"></script>



@endsection

