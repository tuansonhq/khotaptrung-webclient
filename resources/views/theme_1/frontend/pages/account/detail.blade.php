@extends('frontend.layouts.master')
@section('seo_head')
    @include('frontend.widget.__seo_head')
@endsection
@section('content')

    <div class="not__data shop_product_detailS">
        <div class="news_breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-md-12 data__menuacc">

                    </div>
                </div>
            </div>
        </div>

        <div class="container pt-3 fixcssacount">
            <div class="row container__show">

                <div class="col-md-12 left-right" id="showdetailacc">

                </div>
            </div>
{{--            lấy trang phục--}}
{{--            @if(isset($data_category->custom->slug) ? $data_category->custom->slug == 'nick-lien-minh' :  $data_category->slug == 'nick-lien-minh')--}}
{{--                @include('frontend.pages.account.widget.__chitietnick')--}}
{{--            @endif--}}
{{--            lấy trang phục--}}

            <div class="row marginauto">
                <div class="col-md-12 left-right" id="showslideracc">
                    <div class="body-box-loadding result-amount-loadding">
                        <div class="d-flex justify-content-center" style="padding-top: 112px;">
                            <span class="pulser"></span>
                        </div>
                    </div>
{{--                    @include('frontend.pages.account.widget.__related')--}}
                </div>
            </div>

        </div>
    </div>

    <input type="hidden" name="slug" class="slug" value="{{ $slug }}">
{{--    <input type="hidden" name="slug_category" class="slug_category" value="{{ $slug_category }}">--}}
{{--    <script src="/assets/frontend/{{theme('')->theme_key}}/js/account/buyacc.js"></script>--}}

    <script src="/assets/frontend/{{theme('')->theme_key}}/js/account/buyacc.js"></script>
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/account/buyaccslider.js"></script>

@endsection

