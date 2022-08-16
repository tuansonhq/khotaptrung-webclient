@extends('frontend.layouts.master')
@section('seo_head')
    @include('frontend.widget.__seo_head',with(['data'=>$group]))
@endsection
@section('scripts')

    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/nam/minigame.css">

@endsection
@section('content')

    @if($group == null)
        <div class="item_buy">

            <div class="container pt-3">
                <div class="row pb-3 pt-3">
                    <div class="col-md-12 text-center">
                        <span style="color: red;font-size: 16px;">
                            @if(isset($message))
                                {{ $message }}
                            @else
                                Hiện tại không có dữ liệu nào phù hợp với yêu cầu của bạn! Hệ thống cập nhật minigame thường xuyên bạn vui lòng theo dõi web trong thời gian tới !
                            @endif
                        </span>
                    </div>
                </div>

            </div>

        </div>
    @else

    <div class="container c-container" id="minigame-detail">
        <ul class="breadcrumb-list">
            <li class="breadcrumb-item">
                <a href="/" class="breadcrumb-link">Trang chủ</a>
            </li>
            <li class="breadcrumb-item">
                <a href="/minigame" class="breadcrumb-link">Vòng quay</a>
            </li>
            <li class="breadcrumb-item">
                <a href="javascript:void(0)" class="breadcrumb-link">{{$group->title}}</a>
            </li>
        </ul>
        <div class="head-mobile">
            <a href="/minigame" class="link-back "></a>

            <h1 class="head-title text-title">Danh sách minigame</h1>

            <a href="/" class="home"></a>
        </div>

        <section class="rotation-content rotation-content_minigame c-mb-40 c-mb-lg-20 c-pt-lg-16 is-load">
            <div class="loading-wrap">
                <span class="modal-loader-spin"></span>
            </div>
            <div class="row rotation-content-section data_minigame_detail">

            </div>
        </section>

        {{--            Vòng quayy free fire   --}}

{{--        @include('frontend.pages.minigame.widget.__play__recently')--}}
        {{--            Vòng quay liên quân   --}}
        @include('frontend.pages.minigame.widget.__related__minigame')

        {{--            Dịch vụ khác   --}}
        @include('frontend.widget.__services__other')
    </div>

    <input type="hidden" name="id_group" class="id_group" value="{{ $id_group }}">
    <input type="hidden" name="module" class="module" value="{{ $module }}">
    <input type="hidden" name="slug" class="slug" value="{{ $slug }}">
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/minigame/detail.js?v={{time()}}"></script>
    @endif

@endsection

