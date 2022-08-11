@extends('frontend.layouts.master')
@section('seo_head')
    @include('frontend.widget.__seo_head',with(['data'=>$data]))
@endsection
@section('content')

    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/buyacc.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/news.css?v={{time()}}">


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
                <nav aria-label="breadcrumb" class="data__menuacc" style="margin-top: 10px;">

                </nav>

                <!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-1 -->
                <!-- BEGIN: PAGE CONTENT -->
                <!-- BEGIN: BLOG LISTING -->

                <div class="c-content-box c-size-md">
                    <div class="container">

                        <div class="row">
                            <div class="col-md-12 col-xs-12 left-right">
                                <div class="row" style="width: 100%;margin: 0 auto">
                                    <div class="art-list" style="width: 100%" id="showdetailacc">

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="container pl-0 pr-0" style="padding-bottom: 24px">
                        <div class="row" style="width: 100%;margin: 0 auto">
                            <div class="art-list" style="width: 100%">
                                <div class="d-flex justify-content-between" style="padding-top: 8px;padding-bottom: 16px">
                                    <div class="main-title" style="margin-bottom: 0">
                                        <h1>Tài khoản liên quan</h1>
                                    </div>
                                </div>

                                <div class="entries">
                                    <div class="row fix-border fix-border-nick justify-content-center" id="showslideracc">
                                        <div class="body-box-loadding result-amount-loadding">
                                            <div class="d-flex justify-content-center" style="padding-top: 112px;">
                                                <span class="pulser"></span>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: BLOG LISTING  -->

                <!-- END: PAGE CONTENT -->

            @endif


        </div><!-- /.container -->
    </section>
    <script type="text/javascript">
        $(document).ready(function () {

            $('body').on('click','#btn-expand-content-nick',function(){

                $('.special-text-nick').toggleClass('-expanded');

                if ($('.special-text-nick').hasClass('-expanded')) {
                    $(this).html('Thu gọn nội dung');
                } else {
                    $(this).html('Xem thêm nội dung');
                }
            });

            $('body').on('click','.nick-checkdangnhap',function(){

                $('#modal-login').modal('show');

            })

        });

    </script>
    <input type="hidden" name="slug" class="slug" value="{{ $slug }}">
    <input type="hidden" name="slug" class="slug_category" value="{{ $slug_category }}">

    <script src="/assets/frontend/{{theme('')->theme_key}}/js/account/buyacc.js"></script>
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/account/buyaccslider.js"></script>
@endsection


