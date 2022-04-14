@extends('frontend.'.theme('')->theme_key.'.layouts.master')
@section('seo_head')
    @include('frontend.theme_2.widget.__seo_head',with(['data'=>$data]))
@endsection
@section('content')
    <div class="site-content-body alt first pt-0 pb-0 d-flex justify-content-between align-items-center">
        <ul class="nav nav-line">
            <li class="nav-item">
                <a href="/blog" class="nav-link">Tin tức chung</a>
            </li>
            @include('frontend.theme_2.widget.__menu__article')
        </ul>
        <div>
            <div class="input-group input-group-search">
                <input type="text" value="" placeholder="Từ khóa" class="form-control">
                <button class="btn bg-transparent text-secondary" type="button"><i class="las la-search"></i></button>
            </div>
        </div>

    </div>
    <div class="site-content-body bg-white last">
        <nav class="site-breadcrumb mb-3">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="/blog">Tin tức</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="/blog/{{ $data->groups[0]->slug }}">{{ $data->groups[0]->title }}</a></li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-lg-9">
                <div class="article-single mb-4">
                    <div class="article-thumb mb-4">
                        <div class="media-placeholder ratio-2-1 rounded">
                            <div class="bg rounded" style="background-image: url(https://media-tt.nick.vn/{{ $data->image }});"></div>
                            <div class="media-inner d-flex aling-items-end">
                                <div class="d-flex align-items-end h-100 p-lg-4 p-3 text-white">
                                    <h3 class="item-title"><a href="single.html" class="text-white">{{ $data->title }}</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="article-main d-flex pt-4 elsticky-wrap">
                        <div class="social-share">
                            <ul class="nav social-icons flex-column elsticky">
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><i class="las la-share"></i></a>
                                </li>
                                <li class="nav-item facebook">
                                    <a href="#" class="nav-link"><i class="lab la-facebook-f"></i></a>
                                </li>
                                <li class="nav-item twitter">
                                    <a href="#" class="nav-link"><i class="lab la-twitter"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="article-content flex-grow-1 news_detail_content">
                            {!! $data->content !!}

                        </div>
                    </div>
                </div>
                <div class="mb-4 border-top pt-3">
                    <h4 class="title-style-left mb-3">Tin tức liên quan</h4>
                    <div class="row">
                        @include('frontend.theme_2.widget.__baiviet__lienquan',with(['slug'=>$slug]))
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                @include('frontend.theme_2.widget.__menu__category__article__index')
            </div>
        </div>
    </div>
    <div class="after"></div>

    <script>
        $(document).ready(function(){
            $('.active{{ $data->groups[0]->slug }}').addClass('active');
        })
    </script>
@endsection



