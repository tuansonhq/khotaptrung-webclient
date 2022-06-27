@extends('frontend.layouts.master')
@section('scripts')
    <script src="/assets/{{env('THEME_VERSION')}}/js/js_trong/script_trong.js"></script>
@endsection
@section('content')
    <div class="container-fix container">
        {{--breadcrum--}}
        <ul class="breadcrum--list">
            <li class="breadcrum--item">
                <a href="/" class="breadcrum--link">Trang chủ</a>
            </li>
            <li class="breadcrum--item">
                <a href="/tin-tuc" class="breadcrum--link">Tin tức</a>
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
                <div class="row px-2">
                    @foreach($data as $item)
                    <div class="col-6 col-lg-3 px-2 mt-2 mb-3">
                        <div class="article mb-3">
                            <div class="article--thumbnail">
                                <a href="/tin-tuc/{{ $item->slug }}">
                                    <img
                                        src="{{\App\Library\MediaHelpers::media($item->image)}}"
                                        alt="" class="article--thumbnail__image">
                                </a>
                            </div>
                            <div class="article--title my-3">
                                <a href="/tin-tuc/{{ $item->slug }}" class="article--title__link">
                                    {{ $item->title}}
                                </a>
                            </div>
                            <div class="article--date">
                                <i class="__icon calendar mr-2"></i>
                                {{ formatDateTime($item->created_at) }}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                    <div class="col-md-12 left-right justify-content-end default-paginate">
                        <div class="row marinautooo justify-content-center">
                            <div class="col-auto">
                                <div class="data_paginate paging_bootstrap paginations_custom" style="text-align: center">
                                    {{ $data->appends(request()->query())->links('pagination::bootstrap-default-4') }}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

@endsection
