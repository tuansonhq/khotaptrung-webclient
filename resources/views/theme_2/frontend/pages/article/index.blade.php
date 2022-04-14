@extends('frontend.layouts.master')
@section('seo_head')
    {{--    @include('frontend.widget.__seo_head')--}}
@endsection
@section('content')
    @if(isset($category))
        <div class="site-content-body alt first pt-0 pb-0 d-flex justify-content-between align-items-center">
            <ul class="nav nav-line">
                <li class="nav-item active">
                    <a href="/blog" class="nav-link">Tin tức chung</a>
                </li>
                @include('frontend.widget.__menu__article')
            </ul>
            <div>
                <div class="input-group input-group-search">
                    <form class="form_new">
                        <input type="text" value="" placeholder="Từ khóa" class="form-control btn_new">
                        <button class="btn bg-transparent text-secondary" type="submit"><i class="las la-search"></i></button>
                    </form>
                </div>
            </div>

        </div>
        <div class="site-content-body bg-white last">
            <h4 class="title-style-left mb-3">Tin tức tổng hợp</h4>
            <div class="row">
                <div class="col-lg-9 article_data">
                    @include('frontend.pages.article.function.__new__data')
                </div>
                <div class="col-lg-3">
                    @include('frontend.widget.__menu__category__article__index')
                </div>
            </div>
        </div>
        <div class="after"></div>

        <input type="hidden" name="hidden_page" class="hidden_page" value="1" />
        <input type="hidden" name="slug" class="slug-article" value="" />

        <script src="/assets/frontend/{{theme('')->theme_key}}/js/article/article.js"></script>
    @else

        <div class="site-content-body alt first pt-0 pb-0 d-flex justify-content-between align-items-center">
            <ul class="nav nav-line">
                <li class="nav-item">
                    <a href="/blog" class="nav-link">Tin tức chung</a>
                </li>
                @include('frontend.widget.__menu__article')
            </ul>
            <div>
                <div class="input-group input-group-search">
                    <form class="form_new">
                        <input type="text" value="" placeholder="Từ khóa" class="form-control btn_new">
                        <button class="btn bg-transparent text-secondary" type="submit"><i class="las la-search"></i></button>
                    </form>
                </div>
            </div>

        </div>
        <div class="site-content-body bg-white last">
            <h4 class="title-style-left mb-3">{{ $title->title }}</h4>
            <div class="row">
                <div class="col-lg-9 article_data">
                    @include('frontend.pages.article.function.__new__data')
                </div>
                <div class="col-lg-3">
                    @include('frontend.widget.__menu__category__article__index')
                </div>
            </div>
        </div>
        <div class="after"></div>

        <input type="hidden" name="hidden_page" class="hidden_page" value="1" />
        <input type="hidden" name="slug" class="slug-article" value="{{ $slug }}" />

        <script src="/assets/frontend/{{theme('')->theme_key}}/js/article/article.js"></script>
        <script>
            $(document).ready(function(){
                $('.active{{ $slug }}').addClass('active');
            })
        </script>
    @endif

@endsection
