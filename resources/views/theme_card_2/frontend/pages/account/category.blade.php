@extends('frontend.layouts.master')
@section('seo_head')
    @include('frontend.widget.__seo_head',with(['data'=>$data]))
@endsection
@section('meta_robots')
    <meta name="robots" content="index,follow" />
@endsection
@section('styles')

@endsection
@section('content')
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/theme_main.css">
    @if($data == null)
        <div class="item_buy">

            <div class="container pt-3">
                <div class="row pb-3 pt-3">
                    <div class="col-md-12 text-center">
                        <span style="color: red;font-size: 16px;">
                            @if(isset($message))
                                {{ $message }}
                            @else
                                Hiện tại không có dữ liệu nào phù hợp với yêu cầu của bạn! Hệ thống cập nhật nick thường xuyên bạn vui lòng theo dõi web trong thời gian tới !
                            @endif
                        </span>
                    </div>
                </div>

            </div>

        </div>
    @else

    <div id="blog" class="mb-5">
        <div class="news_breadcrumbs">
            <div class="container pl-0 pr-0">
                <div class="row" style="width: 100%;margin: 0 auto">
                    <div class="col-lg-10 col-md-12">
                        <ul class="news_breadcrumbs_theme news_breadcrumbs_theme__show">
                            <li><a href="/"
                                   class="news_breadcrumbs_theme_trangchu news_breadcrumbs_theme_trangchu_a">Trang
                                    chủ</a></li>
                            <li>/</li>
                            <li><a href="/mua-acc" class="news_breadcrumbs_theme_tintuc_a">
                                    <p
                                        class="news_breadcrumbs_theme_tintuc">Mua Acc</p>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pl-0 pr-0" style="margin-top: 24px">
            <div class="wapper-blog">
                <div class="row">
                    @foreach($data as $key => $item)
                        <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 ppk">

                            <a href="/mua-acc/{{ isset($item->custom->slug) && $item->custom->slug != '' ? $item->custom->slug :  $item->slug }}">
                                @if(isset($item->image))
                                    <img class="image" src="{{ isset($item->custom->image) ? \App\Library\MediaHelpers::media($item->custom->image) : \App\Library\MediaHelpers::media($item->image) }}" alt="">
                                @else
                                    <img class="image" src="/assets/frontend/{{theme('')->theme_key}}/images/ff.jpg" alt="">
                                @endif
                            </a>
                            <div class="content-title mt-3">
                                @if(isset($item->items_count))
                                    @if((isset($item->account_fake) && $item->account_fake > 1) || (isset($item->custom->account_fake) && $item->custom->account_fake > 1))
                                        <p style="color: #212529;font-size: 12px">Số tài khoản: {{ str_replace(',','.',number_format(round(isset($item->custom->account_fake) ? $item->items_count*$item->custom->account_fake : $item->items_count*$item->account_fake))) }} </p>
                                    @else
                                        <p style="color: #212529;font-size: 12px">Số tài khoản: {{ $item->items_count }} </p>
                                    @endif

                                @else
                                    <p style="color: #212529;font-size: 12px">Số tài khoản: 0 </p>
                                @endif
                            </div>
                            <div class="content-title mt-3">
                                <p>
                                    <a href="/mua-acc/{{ isset($item->custom->slug) && $item->custom->slug != '' ? $item->custom->slug :  $item->slug }}">{{ isset($item->custom->title) ? $item->custom->title :  $item->title }}</a>
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        </div>

    @endif
@endsection
