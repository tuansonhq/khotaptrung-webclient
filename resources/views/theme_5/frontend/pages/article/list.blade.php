@extends('frontend.layouts.master')
{{--@section('seo_head')--}}
{{--    @include('frontend.widget.__seo_head',with(['data'=>$data]))--}}
{{--@endsection--}}
@section('scripts')
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/article/article.js"></script>
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/article/main.js"></script>
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/lib/swiper/swiper.min.css">
@endsection
@section('content')
    <div class="container-fix container">
        <ul class="breadcrumb-list">
            <li class="breadcrumb-item">
                <a href="/" class="breadcrumb-link">Trang chủ</a>
            </li>
            <li class="breadcrumb-item">
                <a href="javascript:void(0)" class="breadcrumb-link">Tin tức</a>
            </li>
        </ul>
        <div class="head-mobile">
            <a href="/" class="link-back"></a>

            <h1 class="head-title text-title">Tin tức</h1>

            <a href="/" class="home"></a>
        </div>

        @include('frontend.widget.__slide__news')
        <div class="card--mobile__title c-pt-24">
            <h4>Danh mục tin tức</h4>
        </div>
        <div class="row flex-column-reverse " id="card--body__news">
            <div class=" px-0 mt-lg-0" id="list-article" style="max-width: 100%">
                <div class=" --custom p-3" id="new-article-update">
                    @include('frontend.widget.__menu__category__article')

                    <div class="tab-content mt-4">
                        <div class="card--body">
                            @if(isset($data) && count($data))
                            @forelse($data as $key=> $item)
                                <div class="item-article c-mt-16">
                                    <div class="article px-3">
                                        <div class="row">
                                            <div class="col-3 col-lg-3 c-pr-0 c-pl-8">
                                                <div class="article--thumbnail">
                                                    <a href="/tin-tuc/{{ $item->slug }}">
                                                        <img src="{{\App\Library\MediaHelpers::media($item->image)}}"
                                                             alt="" class="article--thumbnail__image">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-9 col-lg-9 article--info c-pr-0 c-pl-0">
                                                <div class="article--title  mb-lg-0 article-title-mobile">
                                                    <a href="/tin-tuc/{{ $item->slug }}"
                                                       class="article--title__link text-limit limit-2">
                                                        {{ $item->title }}
                                                    </a>
                                                </div>
                                                <div class="article--description d-none d-lg-block c-pt-16">
                                                    {!! $item->description !!}
                                                </div>
                                                <div>
                                                    <div class="article--date c-pt-3">
                                                        <img
                                                            src="/assets/frontend/{{theme('')->theme_key}}/image/duong/time.svg"
                                                            class="c-mr-8"><span>{{ formatDateTime($item->created_at) }}</span>
                                                        <img
                                                            src="/assets/frontend/{{theme('')->theme_key}}/image/duong/group.svg"
                                                            class="c-mr-8 c-ml-16"><span>{{ @$item->author->username }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                    <div class="t-body-2 link-color text-center c-pt-16 c-pb-24">
                                        Bạn chờ chúng tớ cập nhật chúng tớ cập nhật thêm tin nhé ^^.
                                    </div>
                            @endforelse
                                @endif
                        </div>
                    </div>
                    <div class="c-pt-32">
                        @if(isset($data) && count($data))
                            {{ $data->appends(request()->query())->links('pagination::bootstrap-default-4') }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



