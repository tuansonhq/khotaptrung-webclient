@extends('frontend.layouts.master')
@section('seo_head')
    @include('frontend.widget.__seo_head',with(['data'=>$data]))
@endsection
@section('content')

    <div class="item_buy">
        <div class="container">
            <div class="news_breadcrumbs">
                <div class="container">
                    <div class="row">
                        <div class="col-auto tintuc-auto pr-0">
                            <div class="news_breadcrumbs_title news_breadcrumbs_title__show"><a href="/danh-muc">Danh mục</a></div>
                        </div>
                        <div class="col-lg-10 col-md-12 ml-lg-auto">
                            <ul class="news_breadcrumbs_theme news_breadcrumbs_theme__show">
                                <li><a href="/" class="news_breadcrumbs_theme_trangchu news_breadcrumbs_theme_trangchu_a">Trang chủ</a></li>
                                <li>/</li>
                                <li><a href="/danh-muc" class="news_breadcrumbs_theme_tintuc_a"><p class="news_breadcrumbs_theme_tintuc">Danh mục</p></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item_buy_list row pt-5">
                @if(isset($data) && count($data))
                    @foreach($data as $item)
                        <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 ppk">
                            <div class="game-list-content">
                                <div class="game-list-image">
                                    <a class="account_category" href="/danh-muc/{{ $item->slug }}">
                                        {{--                                                Anh khuyen mai--}}
                                        @if(isset($item->image_icon))
                                            <img class="game-list-image-sticky" src="https://media-tt.nick.vn/{{ $item->image_icon }}" alt="">
                                        @else
                                            <img class="game-list-image-sticky" src="/assets/frontend/{{theme('')->theme_key}}/images/giamgia.png" alt="">
                                        @endif
                                        @if(isset($item->image))
                                            <img class="game-list-image-in" src="https://media-tt.nick.vn/{{ $item->image }}" alt="">
                                        @else
                                            <img class="game-list-image-in" src="/assets/frontend/{{theme('')->theme_key}}/images/ff.jpg" alt="">
                                        @endif
                                        {{--                                                Anh chinh --}}

                                    </a>
                                </div>
                                <div class="game-list-title">
                                    <a class="account_category" href="/danh-muc/{{ $item->slug }}">
                                        <h3><strong>{{ $item->title }}</strong></h3>
                                    </a>
                                </div>
                                <div class="game-list-description">
                                    <div class="countime"></div>
                                    <p>Số tài khoản:  </p>
                                    {{--                            <span class="game-list-description-old-price"></span>--}}
                                    {{--                            <span class="game-list-description-new-price"></span>--}}
                                </div>
                                <div class="game-list-more">
                                    <div class="game-list-more-view" >
                                        <a class="account_category" href="/danh-muc/{{ $item->slug }}">
                                            <img src="/assets/frontend/{{theme('')->theme_key}}/images/muangay.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="row pb-3 pt-3">
                        <div class="col-md-12 text-center">
                            <span style="color: red;font-size: 16px;">Hiện tại chưa có dịch vụ ! Hệ thống sẽ cập nhật dịch vụ thường xuyên bạn vui lòng theo dõi web trong thời gian tới !</span>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection
