@extends('frontend.layouts.master')
@section('content')
    <section>
        <div class="container">

            <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-1 -->
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
            <nav aria-label="breadcrumb" style="margin-top: 10px;">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="/tin-tuc">Tin tức</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="/tin-tuc/{{ $title->slug }}">{{ $title->title }}</a></li>
                </ol>
            </nav>

            <!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-1 -->
            <!-- BEGIN: PAGE CONTENT -->
            <!-- BEGIN: BLOG LISTING -->
            <div class="c-content-box c-size-md">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-xs-12">

                            @include('frontend.pages.article.widget.__datalist')

                        </div>
                        @include('frontend.widget.__menu__category__article')

                    </div>
                </div>
            </div>
            @endif
            <!-- END: BLOG LISTING  -->

            <!-- END: PAGE CONTENT -->




        </div><!-- /.container -->
    </section>
@endsection
