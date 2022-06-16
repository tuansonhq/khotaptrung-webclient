@extends('frontend.layouts.master')
@section('scripts')
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/js_trong/script_trong.js"></script>
@endsection
@section('content')
{{--    @dd($data)--}}
    <div class="container-fix container">
        {{--breadcrum--}}
        <ul class="breadcrum--list">
            <li class="breadcrum--item">
                <a href="/" class="breadcrum--link">Trang chủ</a>
            </li>
            <li class="breadcrum--item">
                <a href="" class="breadcrum--link">Tin tức</a>
            </li>
        </ul>
        {{--content--}}
        <div class="card--mobile__title">
            <span class="card--back box-account-mobile_open">
                <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/back.png" alt="">
            </span>
            <h4>Tin tức</h4>
        </div>
        {{--       Article Slider  --}}
        <div class="card --custom mb-lg-3">
            <div class="swiper article--slider">
                <div class="swiper-wrapper">
                    @if(isset($data) )
                        @foreach($data as $key => $slide)
                            @if($key <= 3)
                    <div class="article swiper-slide">
                        <div class="row py-3 m-0">
                            <div class="col -12 col-lg-8 px-3 mb-3 mb-lg-0">
                                <div class="article--thumbnail">
                                    <a href="/tin-tuc/{{ $slide->slug }}" class="article--link">
                                        <img src="{{\App\Library\MediaHelpers::media($slide->image)}}"
                                             alt="" class="article--thumbnail__image">
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 p-0 px-3 px-lg-0 pr-lg-3">
                                <a href="/tin-tuc/{{ $slide->slug }}" class="article--link">
                                    <h3 class="article--title mb-2 mb-lg-4 p-lg-2">
                                        {{ $slide->title }}
                                    </h3>
                                </a>
                                <p class="article--description mb-3 mb-lg-0">
                                    {!! $slide->description !!}
                                </p>
                            </div>
                        </div>
                    </div>
                            @endif
                        @endforeach
                    @else
                        <div class="row pb-3 pt-3">
                            <div class="col-md-12 text-center">
                                <span style="color: red;font-size: 16px;">Không có dữ liệu !</span>
                            </div>
                        </div>
                    @endif

                </div>
                <div class="row m-0 pagination--layout">
                    <div class="col -12 col-lg-8 px-3">
                    </div>
                    <div class="col-12 col-lg-4 p-0 pb-3 pr-lg-3">
                        <div class="swiper-pagination --custom  py-3 py-lg-0"></div>
                    </div>
                </div>
            </div>
        </div>
        {{--End--}}

        <div class="row flex-column-reverse flex-lg-row mx-0" id="card--body__news">
            <div class="col-lg-8 px-0 pr-lg-3 mt-1 mt-lg-0" id="list-article">
                <div class="card --custom p-3" id="new-article-update">
                    <div class="card--header">
                        <div class="card--header__title">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/icon-news-title.png" class="mr-1" alt=""> Mới cập nhật
                        </div>
                    </div>
                    <div class="card--body">
                        @if(isset($data) )
                            @foreach($data as $key=> $item)
                                @if($key >= 4)
                        <div class="article px-3">
                            <div class="row">
                                <div class="col-4 col-lg-4 p-0">
                                    <div class="article--thumbnail">
                                        <a href="/tin-tuc/{{ $item->slug }}">
                                            <img src="{{\App\Library\MediaHelpers::media($item->image)}}" alt="" class="article--thumbnail__image">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-8 col-lg-8 article--info">
                                    <div class="article--title mb-3 mb-lg-0">
                                        <a href="/tin-tuc/{{ $item->slug }}" class="article--title__link">
                                            {{ $item->title }}
                                        </a>
                                    </div>
                                    <div class="article--description d-none d-lg-block">
                                        {!! $item->description !!}
                                    </div>
                                    <div class="article--date">
                                        <i class="__icon calendar mr-2"></i>
                                        {{ formatDateTime($item->created_at) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                                @endif
                            @endforeach
                        @else
                            <div class="row pb-3 pt-3">
                                <div class="col-md-12 text-center">
                                    <span style="color: red;font-size: 16px;">Không có dữ liệu !</span>
                                </div>
                            </div>
                        @endif
                    </div>

                    <div class="col-md-12 left-right justify-content-end default-paginate">
                        @if(isset($data))
                            @if($data->total()>1)
                        <div class="row marinautooo justify-content-center">
                            <div class="col-auto">
                                <div class="data_paginate paging_bootstrap paginations_custom" style="text-align: center">
                                    {{ $data->appends(request()->query())->links('pagination::bootstrap-default-4') }}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endif
                </div>
            </div>
           @include('frontend.widget.__menu__category__article')
        </div>
    </div>
@endsection
