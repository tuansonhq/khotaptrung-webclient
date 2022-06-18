@extends('frontend.layouts.master')
@section('styles')
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/style_trong.css">
@endsection
@section('scripts')
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/js_trong/script_trong.js"></script>
@endsection
@section('seo_head')
    @include('frontend.widget.__seo_head',with(['data'=>$data]))
@endsection
@section('content')
    @if($data == null)
        <div class="item_buy">

            <div class="container pt-3">
                <div class="row pb-3 pt-3">
                    <div class="col-md-12 text-center">
                            <span style="color: red;font-size: 16px;">
                                @if(isset($message))
                                    {{ $message }}
                                @else
                                    Hiện tại không có dữ liệu nào phù hợp với yêu cầu của bạn! Hệ thống cập nhật thường xuyên bạn vui lòng theo dõi web trong thời gian tới !
                                @endif
                            </span>
                    </div>
                </div>

            </div>

        </div>
    @else

        @if(isset($data->params) && isset($data->params->article_type))
            {!! $data->params->article_type !!}
        @endif
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
                <a href="javascript:void(0)" class="breadcrum--link">{{$data -> title}}</a>
            </li>
        </ul>
        {{--content--}}
        <div class="card--mobile__title">
            <a href="" class="card--back">
                <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/back.png" alt="">
            </a>
            <h4>Chi tiết tin tức</h4>
        </div>
        <div class="card --custom p-3 mb-3">
            <article id="article--detail">
                <h3 class="article--title">
                    {{$data -> title}}
                </h3>
                <div class="article--info">
                    {{ formatDateTime($data->created_at) }}
                </div>
                <div class="article--thumbnail py-4">
                    <img src="{{\App\Library\MediaHelpers::media($data->image)}}" alt="" class="article--thumbnail__image py-3">
                </div>
                <div class="article--content pb-3">
                    <div class="article--content__text pb-2">
                        {!! $data->content !!}
                    </div>
                </div>
            </article>
        </div>
{{--        Cùng chủ đề--}}
      @include('frontend.widget.__bai__viet__lien__quan')
    </div>
    @endif
@endsection
