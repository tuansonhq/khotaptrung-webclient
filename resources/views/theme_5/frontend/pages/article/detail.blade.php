@extends('frontend.layouts.master')
@section('content')
    <div class="container container-fix" style="max-width: 1232px">
        {{--breadcrum--}}
        <ul class="breadcrumb-list">
            <li class="breadcrumb-item">
                <a href="/" class="breadcrumb-link">Trang chủ</a>
            </li>
            <li class="breadcrumb-item">
                <a href="/tin-tuc" class="breadcrumb-link">Tin tức</a>
            </li>
            <li class="breadcrumb-item">
                <a href="" class="breadcrumb-link">Chi tiết tin tức</a>
            </li>
        </ul>
        <div class="head-mobile">
            <a href="/tin-tuc" class="link-back"></a>

            <h1 class="head-title text-title">Chi tiết tin tức</h1>

            <a href="/" class="home"></a>
        </div>
        {{--content--}}
        <div class=" --custom p-3 mb-3 content-detail">
            <article id="article--detail">
                <h3 class="article--title">
                    {{ @$data->title }}
                </h3>
                <div class="article--info">
                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/duong/time.svg"
                         class="c-mr-6"><span>{{ formatDateTime($data->created_at) }}</span>
                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/duong/group.svg"
                         class="c-mr-6 c-ml-6"><span>{{ @$data->author->username }}</span>
                </div>
                <div class="article--thumbnail py-4">
                    <img src="{{ @$data->image }}" alt="" class="article--thumbnail__image py-3">
                </div>
                <div class="article--content pb-3">
                    <div class="article--content__text pb-2">
                        {!! @$data->content !!}
                    </div>
                </div>
            </article>
        </div>
        {{--        Cùng chủ đề--}}
        <div class="c-pb-24">
            @include('frontend.widget.__bai__viet__lien__quan')
        </div>

    </div>
@endsection
@section('scripts')
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/js_duong/style.js"></script>
@endsection
