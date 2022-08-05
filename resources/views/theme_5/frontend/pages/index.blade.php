@extends('frontend.layouts.master')

@section('content')

    <div class="container c-container">

{{--        Slider banner  --}}
        @include('frontend.widget.__slider__banner__home')

{{--        Dịch vụ nổi bật  --}}
        @include('frontend.widget.__dich__vu__noi__bat')

{{--        Giá sốc  --}}
{{--        @include('frontend.widget.__gia__soc')--}}

{{--        Dành cho bạn  --}}
{{--        @include('frontend.widget.__danh__cho__ban')--}}
        {{--        Dịch vụ  --}}
        @include('frontend.widget.__content__home__dichvu')

{{--        Vòng quay  --}}
        @include('frontend.widget.__content__home__minigame')

        {{--        Nạp thẻ  --}}
        @include('frontend.widget.__napthe')

{{--        nick ngon giá re  --}}
        @include('frontend.widget.__content__home__game')

{{--        Free fire  --}}
{{--        @include('frontend.widget.__free__fire')--}}

{{--        Liên quân  --}}
{{--        @include('frontend.widget.__lien__quan')--}}

        {{--        Ngoc rong online  --}}
{{--        @include('frontend.widget.__ngoc__rong__online')--}}

        {{--        Tin tức  --}}
        @include('frontend.widget.__tin__tuc')

{{--    Giới thiệu web       --}}
        @include('frontend.widget.__abount__us')

    </div>

@endsection
@section('scripts')
    <script src="/assets/frontend/theme_5/js/js_duong/style.js"></script>
@endsection
