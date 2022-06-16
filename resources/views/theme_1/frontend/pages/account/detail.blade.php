@extends('frontend.layouts.master')
@section('seo_head')
    @include('frontend.widget.__seo_head',with(['data'=>$data]))
@endsection
@section('meta_robots')
    <meta name="robots" content="noindex,noindex" />
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
                                Hiện tại không có dữ liệu nào phù hợp với yêu cầu của bạn! Hệ thống cập nhật nick thường xuyên bạn vui lòng theo dõi web trong thời gian tới !
                            @endif
                        </span>
                    </div>
                </div>

            </div>

        </div>
    @else
        <div class="not__data shop_product_detailS">
            <div class="news_breadcrumbs">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-md-12 data__menuacc">

                        </div>
                    </div>
                </div>
            </div>

            <div class="container pt-3 fixcssacount">
                <div class="row container__show">

                    <div class="col-md-12 left-right" id="showdetailacc">

                    </div>
                </div>

            </div>
        </div>

        <input type="hidden" name="slug" class="slug" value="{{ $slug }}">

        <script src="/assets/frontend/{{theme('')->theme_key}}/js/account/buyacc.js"></script>
        <script src="/assets/frontend/{{theme('')->theme_key}}/js/account/buyaccslider.js"></script>
    @endif
@endsection

