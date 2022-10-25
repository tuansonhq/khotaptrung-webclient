@extends('frontend.layouts.master')
@section('seo_head')
    @include('frontend.widget.__seo_head',with(['data'=>$data]))
@endsection
@section('meta_robots')
    <meta name="robots" content="noindex,noindex" />
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
                @if(isset($game_auto_props) && count($game_auto_props))
                    @if($slug_category == 'nick-lien-minh')
                        @php
                            $total_tuong = 0;
                            $total_bieucam = 0;
                            $total_chuongluc = 0;
                            $total_sandau = 0;
                            $total_linhthu = 0;
                            $total_trangphuc = 0;
                            $total_thongtinchung = 0;

                            if(isset($game_auto_props) && count($game_auto_props)){
                                foreach($game_auto_props as $game_auto_prop){
                                    if($game_auto_prop->key == 'champions'){
                                        $total_tuong = $total_tuong + 1;
                                        if(isset($game_auto_prop->childs) && count($game_auto_prop->childs)){
                                            foreach($game_auto_prop->childs as $c_child){
                                                $total_trangphuc = $total_trangphuc + 1;
                                            }
                                        }
                                    }elseif ($game_auto_prop->key == 'emotes'){
                                        $total_bieucam = $total_bieucam + 1;
                                    }elseif ($game_auto_prop->key == 'tftdamageskins'){
                                        $total_chuongluc = $total_chuongluc + 1;
                                    }elseif ($game_auto_prop->key == 'tftmapskins'){
                                        $total_sandau = $total_sandau + 1;
                                    }elseif ($game_auto_prop->key == 'tftcompanions'){
                                        $total_linhthu = $total_linhthu + 1;
                                    }
                                }
                            }
                        @endphp
                    @endif
                @endif
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
                                    <div class="row fix-border fix-border-nick" id="showslideracc">
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

                @if(isset($game_auto_props) && count($game_auto_props))
                    @if($slug_category == 'nick-lien-minh')
                    {{-- Modal hiển thị danh sách tướng --}}
                    <div class="modal fade modal-nick-auto-lol" id="modal-champion-list" role="dialog" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <div class="nick-auto-title">
                                        <div class="nick-auto-title-content">
                                            Tướng
                                        </div>
                                        <div class="nick-auto-count">
                                            ({{ $total_tuong??0 }} tướng)
                                        </div>
                                    </div>
                                    <div class="form-search">
                                        <input class="keyword--search has-submit input-search-lmht form-control" type="search" placeholder="Tìm kiếm" class="has-submit input-search-lmht form-control">

                                        <button class="submit--search" type="submit"></button>
                                    </div>
                                    <img class="c-close-modal" data-dismiss="modal" src="/assets/frontend/theme_1/image/son/close.svg" alt="">
                                </div>

                                <div class="modal-body">
                                    <div class="row marginauto">
                                        <div class="col-12 body-modal__nick__text-error">
                                            <div class="text-error c-mt-4">Không có kết quả phù hợp.</div>
                                        </div>
                                        @foreach($game_auto_props as $game_auto_prop)
                                            @if($game_auto_prop->key == 'champions')
                                                <div class="col-3 col-lg-1 item-nick-lmht">
                                                    <a href="javascript:void(0)">
                                                        <div class="row marginauto item-nick-lmht__border">
                                                            <div class="col-md-12 item-nick-lmht__border__col">
                                                                <img class="w-100 item-nick-lmht__border__img lazy" src="https://cdn.upanh.info/{{ $game_auto_prop->thumb }}" alt="{{ $game_auto_prop->name }}">
                                                            </div>
                                                            <div class="col-md-12 text-center" style="padding-right: 0; padding-left: 0;">
                                                                <p class="properties-lol-title" style="padding-top: 8px;margin-bottom: 0">{{ $game_auto_prop->name }}</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Modal hiển thị linh thú tft --}}
                    <div class="modal fade modal-nick-auto-lol" id="modal-champion-tft" role="dialog" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <div class="nick-auto-title">
                                        <div class="nick-auto-title-content">
                                            Linh thú TFT
                                        </div>
                                        <div class="nick-auto-count">
                                            ({{ $total_linhthu }} linh thú)
                                        </div>
                                    </div>
                                    <div class="form-search">
                                        <input class="keyword--search has-submit input-search-lmht form-control" type="search" placeholder="Tìm kiếm" class="has-submit input-search-lmht form-control">
                                        <button class="submit--search" type="submit"></button>
                                    </div>
                                    <img class="c-close-modal" data-dismiss="modal" src="/assets/frontend/theme_1/image/son/close.svg" alt="">
                                </div>

                                <div class="modal-body">
                                    <div class="row marginauto">
                                        <div class="col-12 body-modal__nick__text-error">
                                            <div class="text-error c-mt-4">Không có kết quả phù hợp.</div>
                                        </div>
                                        @foreach($game_auto_props as $game_auto_prop)
                                            @if($game_auto_prop->key == 'tftcompanions')
                                                <div class="col-3 col-lg-1 item-nick-lmht">
                                                    <a href="javascript:void(0)">
                                                        <div class="row marginauto item-nick-lmht__border">
                                                            <div class="col-md-12 item-nick-lmht__border__col">
                                                                <img class="w-100 item-nick-lmht__border__img lazy" src="https://cdn.upanh.info/{{ $game_auto_prop->thumb }}" alt="{{ $game_auto_prop->name }}">
                                                            </div>
                                                            <div class="col-md-12 text-center" style="padding-right: 0; padding-left: 0;">
                                                                <p class="properties-lol-title" style="padding-top: 8px;margin-bottom: 0">{{ $game_auto_prop->name }}</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Modal hiển thị trang phục LOL --}}
                    <div class="modal fade modal-nick-auto-lol" id="modal-lol-custom" role="dialog" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <div class="nick-auto-title">
                                        <div class="nick-auto-title-content">
                                            Trang phục
                                        </div>
                                        <div class="nick-auto-count">
                                            ({{ $total_trangphuc }} trang phục)
                                        </div>
                                    </div>
                                    <div class="form-search">
                                        <input class="keyword--search has-submit input-search-lmht form-control" type="search" placeholder="Tìm kiếm">
                                        <button class="submit--search" type="submit"></button>
                                    </div>
                                    <img class="c-close-modal" data-dismiss="modal" src="/assets/frontend/theme_1/image/son/close.svg" alt="">
                                </div>

                                <div class="modal-body">
                                    <div class="row marginauto">
                                        <div class="col-12 body-modal__nick__text-error">
                                            <div class="text-error c-mt-4">Không có kết quả phù hợp.</div>
                                        </div>
                                        @foreach($game_auto_props as $game_auto_prop)
                                            @if($game_auto_prop->key == 'champions')
                                                @if(isset($game_auto_prop->childs) && count($game_auto_prop->childs))
                                                    @foreach($game_auto_prop->childs as $c_child)
                                                        <div class="col-3 col-lg-1 item-nick-lmht">
                                                            <a href="javascript:void(0)">
                                                                <div class="row marginauto item-nick-lmht__border">
                                                                    <div class="col-md-12 item-nick-lmht__border__col">
                                                                        <img class="w-100 item-nick-lmht__border__img lazy" src="https://cdn.upanh.info/{{$c_child->thumb}}" alt="{{ $c_child->name }}">
                                                                    </div>
                                                                    <div class="col-md-12 text-center" style="padding-right: 0; padding-left: 0;">
                                                                        <p class="properties-lol-title" style="padding-top: 8px;margin-bottom: 0">{{ $c_child->name }}</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                @endif

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

    @if(isset($game_auto_props) && count($game_auto_props))
        @if($slug_category == 'nick-lien-minh')
        <input type="hidden" name="total_tuong" class="total_tuong" value="{{ $total_tuong }}">
        @endif
    @endif

    <script src="/assets/frontend/{{theme('')->theme_key}}/js/account/buyacc.js"></script>
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/account/buyaccslider.js"></script>
@endsection


