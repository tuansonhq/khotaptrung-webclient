@extends('frontend.layouts.master')
@section('content')
    <section>
        <div class="container">

            <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-1 -->

            <nav aria-label="breadcrumb" style="margin-top: 10px;">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>

                    <li class="breadcrumb-item active" aria-current="page">Tin tức</li>
                </ol>
            </nav>

            <!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-1 -->
            <!-- BEGIN: PAGE CONTENT -->
            <!-- BEGIN: BLOG LISTING -->
            @if($data == null)
                <div class="item_buy">

                    <div class="container pt-3">
                        <div class="row pb-3 pt-3">
                            <div class="col-md-12 text-center">
                        <span style="color: red;font-size: 16px;">
                            Không có bài viết nào.
                        </span>
                            </div>
                        </div>

                    </div>

                </div>
            @else
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
            <!-- END: BLOG LISTING  -->

            <!-- END: PAGE CONTENT -->


            @endif

        </div><!-- /.container -->
    </section>
@endsection
