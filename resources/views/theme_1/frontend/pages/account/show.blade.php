@extends('frontend.layouts.master')
@section('seo_head')
    @include('frontend.widget.__seo_head')
@endsection
@section('content')

    <div class="shop_product_detailS">
        <div class="news_breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-md-12 data__menuacc">
                        @include('frontend.pages.account.function.__data__menu__buyacc')
                    </div>
                </div>
            </div>
        </div>

        <div class="container pt-3">
            <div class="row container__show">

                <div class="col-md-12 left-right" id="showdetailacc">
                    <div class="body-box-loadding result-amount-loadding">
                        <div class="d-flex justify-content-center" style="padding-top: 112px;">
                            <span class="pulser"></span>
                        </div>
                    </div>
                    @include('frontend.pages.account.function.__show__detail__acc')
                </div>
            </div>

            <div class="row marginauto">
                <div class="col-md-12 left-right" id="showslideracc">
{{--                    <div class="body-box-loadding result-amount-loadding">--}}
{{--                        <div class="d-flex justify-content-center" style="padding-top: 112px;">--}}
{{--                            <span class="pulser"></span>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    @include('frontend.pages.account.function.__show__slider__acc')

                </div>
            </div>
            {{--                @include('frontend.widget.__account__category',['sliders',$sliders])--}}

        </div>
    </div>

    <div class="modal fade modal__buyacount loadModal__acount" id="LoadModal" role="dialog" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog__account" role="document">
            <div class="loader" style="text-align: center"><img src="/assets/frontend/{{theme('')->theme_key}}/images/loader.gif" style="width: 50px;height: 50px;display: none"></div>
            <div class="modal-content modal-content_accountlist">
            </div>
        </div>
    </div>

    <input type="hidden" name="slug" class="slug" value="{{ $slug }}">

{{--    <script src="/assets/frontend/{{theme('')->theme_key}}/js/account/buyacc.js"></script>--}}

    <script src="/assets/frontend/{{theme('')->theme_key}}/js/account/buyacc.js"></script>
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/account/buyaccslider.js"></script>

@endsection

