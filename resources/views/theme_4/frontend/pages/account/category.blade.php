@extends('frontend.layouts.master')
@section('seo_head')
    @include('frontend.widget.__seo_head',with(['data'=>$data]))
@endsection
@section('meta_robots')
    <meta name="robots" content="index,follow" />
@endsection
@section('content')
    <section>
        <div class="container">

            <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-1 -->

            <nav aria-label="breadcrumb" style="margin-top: 10px;">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="/mua-acc">Mua acc</a></li>
                </ol>
            </nav>

            <!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-1 -->
            <!-- BEGIN: PAGE CONTENT -->
            <!-- BEGIN: BLOG LISTING -->

            <div class="c-content-box c-size-md">

                <div class="container" style="padding-bottom: 24px">

                    <div class="row">
                        <div class="col-md-12 col-xs-12 left-right">
                            <div class="row" style="width: 100%;margin: 0 auto">
                                <div class="art-list" style="width: 100%">
{{--                                    <div class="d-flex justify-content-between" style="padding-top: 8px;padding-bottom: 24px">--}}
{{--                                        <div class="main-title">--}}
{{--                                            <h1>Danh mục game</h1>--}}
{{--                                        </div>--}}
{{--                                        <div class="service-search d-none d-lg-block">--}}
{{--                                            <div class="input-group p-box">--}}
{{--                                                <input type="text" id="txtSearchNick" placeholder="Tìm danh mục" value="" class="" width="200px">--}}
{{--                                                <span class="icon-search"><i class="fas fa-search"></i></span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

                                    @include('frontend.widget.__content__home__game')

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- END: BLOG LISTING  -->

            <!-- END: PAGE CONTENT -->




        </div><!-- /.container -->
    </section>
@endsection


