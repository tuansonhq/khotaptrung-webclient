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
                <div class=" mb-4">
                    <div class="data__giaodich_tab" id="history" style="min-height: 628px;">
                        <form class="form-charge form__txns">
                            <div class="d-flex justify-content-between align-items-md-center flex-column flex-md-row">
                                <h4 class="title-style-left mb-3">Danh sách giao dịch</h4>
                                <div class="d-flex align-items-center mb-3">
                                    <div>
                                        <input type="text" placeholder="ID" name="id_txns" class="id_txns">
                                    </div>


                                    <div class="input-group date-ranger-picker ms-3">
                                        <input type="text" class="form-control border-end-0 started_at_txns" name="started_at_txns" placeholder="DD/MM/YYYY" value="">
                                        <span class="input-group-text bg-transparent text-secondary"><i class="las la-arrow-right"></i></span>
                                        <input type="text" class="form-control border-start-0 ended_at_txns" name="ended_at_txns" placeholder="DD/MM/YYYY" value="">
                                        <button class="btn bg-primary text-white" type="submit"><i class="las la-angle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="text-center ajax-loading-store load_spinner" >
                            <div class="cv-spinner">
                                <span class="spinner"></span>
                            </div>
                        </div>
                        <div id="data_lich__su_history">
                            @include('frontend.pages.transaction.widget.__transaction__history')
                        </div>

                    </div><!-- END Tab Content History -->
                </div>
            </div>
        </div>
    </div>
    <div id="copy"></div>
    <div class="after"></div>


    {{--    transaction--}}
    <input type="hidden" name="id_txns_data" class="id_txns_data" value="">
    <input type="hidden" name="started_at_txns_data" class="started_at_txns_data" value="">
    <input type="hidden" name="ended_at_txns_data" class="ended_at_txns_data" value="">
    <input type="hidden" name="hidden_page_service_txns" id="hidden_page_service_txns" class="hidden_page_service_txns" value="1" />


    <script src="/assets/frontend/theme_2/js/account/txns-history.js?v={{time()}}"></script>

@endsection

