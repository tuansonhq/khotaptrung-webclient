@extends('frontend.layouts.master')
@section('seo_head')
    @include('frontend.widget.__seo_head')
@endsection
@section('scripts')
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/js_trong/script_trong.js"></script>
@endsection
@section('content')
    <div class="container-fix container">
        {{--breadcrum--}}
        <ul class="breadcrum--list">
            <li class="breadcrum--item">
                <a href="/" class="breadcrum--link">Trang chủ</a>
            </li>
            <li class="breadcrum--item">
                <a href="" class="breadcrum--link">Tin tức</a>
            </li>
            <li class="breadcrum--item">
                <a href="" class="breadcrum--link">{{ $title->title }}</a>
            </li>
        </ul>
        {{--content--}}
        <div class="card--mobile__title">
            <a href="/tin-tuc" class="card--back">
                <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/back.png" alt="">
            </a>
            <h4>Tin cộng đồng</h4>
        </div>

        <div class="card --custom mt-0 mt-lg-3 p-3" id="list-article">
            <div class="card--header">
                <div class="card--header__title">
                    <div class="title__icon mr-1"><img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/lightning.png" alt=""></div>
                    <h4>Tin tức/{{$title->title}}</h4>
                </div>
            </div>
            <div class="card--body mt-3">
               @include('frontend.pages.article.widget.__datalist')
            </div>
        </div>
    </div>
@endsection
