@extends('theme_3.frontend.layouts.master')

@if(isset($group))
@section('seo_head')
    @include('frontend.widget.__seo_head',with(['data'=>$group]))
@endsection
@endif

@section('styles')
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/style_phu/breadcrumb.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/style_phu/spin.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/style_phu/withdraw_items.css">
    @if(isset($group))
        @if($group->position  != 'slotmachine' && $group->position != 'squarewheel')
            <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/spin.css">
        @endif
    @endif
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/style_phu/layout_page.css">
@endsection
@section('scripts')
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/js_phu/spin.js"></script>
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/minigame/fake-cmt.js"></script>
{{--    <script src="/assets/frontend/{{theme('')->theme_key}}/js/js_trong/modal-rut-vp.js?v={{time()}}"></script>--}}
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/js_trong/modal-history-spin-bonus.js?v={{time()}}"></script>

@endsection
@section('content')
    @if(isset($group))

    {{--         Vong quay vong vong      --}}
    <div class="container_page container">
        <section class="breadcrumb-container">
            <ul class="breadcrumb breadcrumb-arrow">
                <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="minigame">Danh mục vòng quay</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">{{$group->title}}</a></li>
            </ul>
        </section>
        <section class="breadcrumb-mobile">
            <a href="/minigame" style="display: block">
                <img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/back.svg" alt="">
            </a>
            <p>{{$group->title}}</p>
        </section>
        <section class="rotation-content">
            <div class="row rotation-content-section">
                <div class="col-12 col-lg-7 rotation-col-left">
                    <div class="rotation-detail minigame-add-heard" id="data_rotation-detail" style="position: relative">
                        <div class="loader" style="margin-top: 24px">
                            <div class="loading-spokes">
                                <div class="spoke-container">
                                    <div class="spoke"></div>
                                </div>
                                <div class="spoke-container">
                                    <div class="spoke"></div>
                                </div>
                                <div class="spoke-container">
                                    <div class="spoke"></div>
                                </div>
                                <div class="spoke-container">
                                    <div class="spoke"></div>
                                </div>
                                <div class="spoke-container">
                                    <div class="spoke"></div>
                                </div>
                                <div class="spoke-container">
                                    <div class="spoke"></div>
                                </div>
                                <div class="spoke-container">
                                    <div class="spoke"></div>
                                </div>
                                <div class="spoke-container">
                                    <div class="spoke"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-detail">
                        <h2>Chi tiết dịch vụ</h2>
                        <div class="service-detail-content">
                            @if(isset($group->description))
                                {!! $group->description !!}
                            @endif
                        </div>
                    </div>
                    <div class="rotation-leaderboard leaderboard-md d-lg-none d-xl-none">
                        <div class="leaderboard-buttons row">
                            <div class="col-12">
                                <div class="existing-items">
                                    <span class="t-body-1">Bạn đang có:</span>
                                    <div class="number_item">100.000 kim cương</div>
                                </div>
                            </div>
                            <div class="col-6 leaderboard-col">
                                <a href="{{route('getLog',[$group->id])}}" class="the-a-lich-su button-not-bg-ct button-secondary history-spin-button">Lịch sử quay</a>
                            </div>
                            <div class="col-6 leaderboard-col">
                                <button class="button-primary">Rút quà</button>
                            </div>
                        </div>
                        <div class="leaderboard-header">
                            <img onerror="imgError(this)"
                                 src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/top-leaderboard.png"
                                 alt="">
                            <p>Top quay thưởng</p>
                        </div>
                        <div class="leaderboard-type row no-gutters">
                            <div class="col-4">
                                <div class="listed-date">
                                    Hôm nay
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="listed-date">
                                    7 ngày
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="listed-date">
                                    Quà đua top
                                </div>
                            </div>
                            <div class="date-listing"></div>
                        </div>
                        <div class="leaderboard-table">
                            <div class="leaderboard-head row no-gutters">
                                <div class="leaderboard-head-item col-4">
                                    <p>Tài khoản</p>
                                </div>
                                <div class="leaderboard-head-item col-4">
                                    {{--                                    <p>Giải thưởng</p>--}}
                                </div>
                                <div class="leaderboard-head-item col-4">
                                    <p>Lượt quay</p>
                                </div>
                            </div>
                            <div class="leaderboard-content leaderboard-1">
                                @if(isset($topDayList))
                                    @foreach($topDayList as $key => $item)
                                        <div class="leaderboard-item row no-gutters">
                                            <div class="col-4 leaderboard-item-name">
                                                <span>{{ $key + 1 }}</span>
                                                <p>{{$item['name']}}</p>
                                            </div>
                                            <div class="col-4 leaderboard-item-ar">
                                                {{--                                                    +100.000 kim cương--}}
                                            </div>
                                            <div class="col-4 leaderboard-item-ar">
                                                {{ str_replace(',','.',number_format($item['numwheel'])) }} lượt
                                            </div>
                                        </div>
                                    @endforeach
                                @endif

                                </div>
                                <div class="leaderboard-content leaderboard-2" style="display: none;">
                                    @if(isset($top7DayList))
                                        @foreach($top7DayList as $key => $item)
                                            <div class="leaderboard-item row no-gutters">
                                                <div class="col-4 leaderboard-item-name">
                                                    <span>{{ $key + 1 }}</span>
                                                    <p>{{$item['name']}}</p>
                                                </div>
                                                <div class="col-4 leaderboard-item-ar">
                                                    {{--                                                    +100.000 kim cương--}}
                                                </div>
                                                <div class="col-4 leaderboard-item-ar">
                                                    {{ str_replace(',','.',number_format($item['numwheel'])) }} lượt
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif

                                </div>
                                <div class="leaderboard-content leaderboard-3" style="display: none;">
                                    @if(isset($group->params->phanthuong))
                                        <div class="leaderboard-item row no-gutters">
                                            <div class="col-12 leaderboard-item-name">
                                                {!!$group->params->phanthuong!!}
                                            </div>
                                        </div>
                                    @else
                                        <div class="leaderboard-item row no-gutters">
                                            <div class="col-12 leaderboard-item-name text-center justify-content-center">
                                                Không có dữ liệu
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="leaderboard-seemore">
                                <p>Xem thêm</p>
                            </div>
                        </div>
                        <div class="rotation-comment chat-history">
                            <h2>Bình luận</h2>
                            <ul class="comment-block list-unstyled chat-scroll">



                            </ul>

                            <div class="commment-input">
                                <div class="comment-user-avatar">
                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/user_avatar.png"
                                         alt="">
                                </div>
                                <input name="message-to-send" type="text" class="input-primary" id="message-to-send">
                            </div>
                            <div class="comment-button">
                                <button type="button" class="button-primary btn-send-message pill-button">Bình luận</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-5 d-none d-lg-block d-xl-block rotation-col-right">
                        <div class="rotation-leaderboard leaderboard-lg">
                            <div class="leaderboard-buttons row d-none d-lg-flex">
                                <div class="col-12 data_number_item">

                                </div>
                                <div class="col-6 leaderboard-col">
                                    @if(App\Library\AuthCustom::check())
                                        <button type="button" class="the-a-lich-su button-not-bg-ct button-secondary history-spin-button" data-toggle="modal" data-target="#modal-spin-bonus">Lịch sử quay</button>
                                    @else
                                        <button type="button" class="the-a-lich-su button-not-bg-ct button-secondary history-spin-button" onclick="openLoginModal();">Lịch sử quay</button>
                                    @endif
                                </div>
                                <div class="col-6 leaderboard-col">
                                    @if(App\Library\AuthCustom::check())
                                        <button class="button-primary" type="button" data-toggle="modal"
                                                data-target="#modal-withdraw-items">Rút quà
                                        </button>
                                    @else
                                        <button class="button-primary" type="button" onclick="openLoginModal();">Rút quà
                                        </button>
                                    @endif
                                </div>
                            </div>
                            <div class="leaderboard-header">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/top-leaderboard.png"
                                     alt="">
                                <p>Top quay thưởng</p>
                            </div>
                            <div class="leaderboard-type row no-gutters">
                                <div class="col-4">
                                    <div class="listed-date">
                                        Hôm nay
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="listed-date">
                                        7 ngày
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="listed-date">
                                        Quà đua top
                                    </div>
                                </div>
                                <div class="date-listing"></div>
                            </div>
                            <div class="leaderboard-table">
                                <div class="leaderboard-head row no-gutters">
                                    <div class="leaderboard-head-item col-4">
                                        <p>Tài khoản</p>
                                    </div>
                                    <div class="leaderboard-head-item col-4">
                                        {{--                                    <p>Giải thưởng</p>--}}
                                    </div>
                                    <div class="leaderboard-head-item col-4">
                                        <p>Lượt quay</p>
                                    </div>
                                </div>
                                <div class="leaderboard-content leaderboard-1">
                                    @if(isset($topDayList))
                                        @foreach($topDayList as $key => $item)
                                            <div class="leaderboard-item row no-gutters">
                                                <div class="col-4 leaderboard-item-name">
                                                    <span>{{ $key + 1 }}</span>
                                                    <p>{{$item['name']}}</p>
                                                </div>
                                                <div class="col-4 leaderboard-item-ar">
                                                    {{--                                                    +100.000 kim cương--}}
                                                </div>
                                                <div class="col-4 leaderboard-item-ar">
                                                    {{ str_replace(',','.',number_format($item['numwheel'])) }} lượt
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif

                                </div>
                                <div class="leaderboard-content leaderboard-2" style="display: none;">
                                    @if(isset($top7DayList))
                                        @foreach($top7DayList as $key => $item)
                                            <div class="leaderboard-item row no-gutters">
                                                <div class="col-4 leaderboard-item-name">
                                                    <span>{{ $key + 1 }}</span>
                                                    <p>{{$item['name']}}</p>
                                                </div>
                                                <div class="col-4 leaderboard-item-ar">
                                                    {{--                                                    +100.000 kim cương--}}
                                                </div>
                                                <div class="col-4 leaderboard-item-ar">
                                                    {{ str_replace(',','.',number_format($item['numwheel'])) }} lượt
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif

                                </div>
                                <div class="leaderboard-content leaderboard-3" style="display: none;">
                                    @if(isset($group->params->phanthuong))
                                        <div class="leaderboard-item row no-gutters">
                                            <div class="col-12 leaderboard-item-name">
                                                {!!$group->params->phanthuong!!}
                                            </div>
                                        </div>
                                    @else
                                        <div class="leaderboard-item row no-gutters">
                                            <div class="col-12 leaderboard-item-name text-center justify-content-center">
                                                Không có dữ liệu
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="leaderboard-seemore">
                                <p>Xem thêm</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            @if($groups_other!=null)
                <div class=" block-product mt-fix-20 ">
                    <div class="product-header d-flex">
                    <span>
                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/flash_sales.png" alt="">
                    </span>
                        <p class="text-title"><span>Mini game liên quan</span></p>
                        <div class="product-catecory"></div>

                    </div>
                    <div class="box-product minigame-detail_swiper">
                        <div class="swiper-container list-minigame list-product">
                            <div class="swiper-wrapper">
                                @foreach($groups_other as $key => $item)
                                    <div class="swiper-slide">
                                        <a href="{{route('getIndex',[$item->slug])}}">
                                            <div class="item-product__box-img">

                                                <img onerror="imgError(this)"
                                                     src="{{ \App\Library\MediaHelpers::media($item->image) }}"
                                                     alt="{{$item->title}}">

                                            </div>
                                            <div class="item-product__box-content">


                                                <div class="item-product__box-name">
                                                    {{$item->title}}
                                                </div>
                                                <div class="item-product__box-sale">
                                                    Đã
                                                    bán: {{isset($item->params->fake_num_play)?($item->params->fake_num_play+$item->order_gate_count):$item->order_gate_count}}
                                                </div>
                                                <div class="item-product__box-price">

                                                    <div class="special-price">{{number_format($item->price)}} đ</div>

                                                    @if(isset($item->params->percent_sale))
                                                        <div
                                                            class="old-price">{{ str_replace(',','.',number_format(($item->params->percent_sale*$item->price)/100 + $item->price)) }}
                                                            đ
                                                        </div>
                                                    @else
                                                    @endif
                                                    @if(isset($item->params->percent_sale))
                                                        <div class="item-product__sticker-percent">
                                                            -{{number_format($item->params->percent_sale)}}%
                                                        </div>
                                                    @endif
                                                </div>

                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="swiper-button-prev">
                            <img src="./assets/frontend/theme_3/image/swiper-prev.svg" alt="">
                        </div>
                        <div class="swiper-button-next">
                            <img src="./assets/frontend/theme_3/image/swiper-next.svg" alt="">
                        </div>
                    </div>
                </div>
            @endif
        </div>

        @if(isset($group->params->thele))
            @include('frontend.widget.modal.__rotation_rule',with(['thele'=>$group->params->thele]))
        @endif

        <input type="hidden" id="type_play" value="real">

        <div class="modal fade rotation-modal" id="noticeModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered animated" role="document">
                <div class="modal-content">
                    <div class="modal-header rotation-modal-header">
                        <p class="modal-title">Chúc mừng bạn đã quay trúng</p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/close.png" alt="">
                        </button>
                    </div>
                    <div class="modal-body rotation-prize-body">
                        <div class="rotation-prize-img">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/verify 1.png" alt="">
                        </div>
                        <div class="rotation-prize-detail content-popup">
                            <div class="appendContent" style='color:blue'></div>
                            {{--                        <p>Giải thưởng: <span id="rotationValue" style="font-weight: 600; color: #000000;">100.000 Kim cương</span></p>--}}
                            {{--                        <p>Bonus: <span id="rotationBonus" style="font-weight: 600; color: #000000;">100 Kim cương</span></p>--}}
                            {{--                        <p>Tổng nhận được: <span id="rotationTotal" style="font-weight: 600; color: #F67600;">100.100 Kim cương</span></p>--}}
                        </div>
                        <div class="rotation-modal-btn row no-gutters">
                            <div class="col-6">
                                <a id="btnWithdraw" class="btn button-secondary">Rút quà</a>
                            </div>
                            <div class="col-6" style="text-align: right;">
                                <button class="button-primary" data-dismiss="modal">Chơi tiếp</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade login show default-Modal" id="naptheModal" aria-modal="true">
            <div class="modal-dialog modal-md modal-dialog-centered login animated">
                <!--        <div class="image-login"></div>-->
                <div class="modal-content">
                    <div class="modal-header modal-header-success-ct">
                        <div class="row marginauto modal-header-success-row-ct text-center">
                            <div class="col-md-12 text-center" style="position: relative">
                                <span>Thông báo</span>
                                <div class="close" data-dismiss="modal" aria-label="Close">
                                    <img class="lazy img-close-ct close-modal-default"
                                         src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/close.png" alt="">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-body modal-body-success-ct">
                        <div class="row marginauto justify-content-center">
                            <div class="col-auto">
                                <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/reject.png"
                                     alt="">
                            </div>
                        </div>
                        <div class="row marginauto modal-body-span-success-ct justify-content-center">
                            <div class="col-md-12 left-right text-center">
                                <span style="font-size: 14px">Tài khoản của quý khách hiện không đủ để thanh toán, vui lòng nạp tiền để tiếp tục.</span>
                            </div>

                        </div>
                        <div class="row marginauto justify-content-center modal-footer-success-ct">
                            <div class="col-md-6 col-6 modal-footer-success-col-left-ct pr-fix-4 pl-0">
                                <div class="row marginauto modal-footer-success-row-not-ct">
                                    <div class="col-md-12 left-right">
                                        <a href="javascript:void(0)" class="button-not-bg-ct" data-dismiss="modal"
                                           style="display: flex;justify-content: center"><span>Đóng</span></a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6 col-6 modal-footer-success-col-left-ct pl-fix-4 pr-0">
                                <div class="row marginauto modal-footer-success-row-ct">

                                    <div class="col-md-12 left-right">

                                        <a href="javascript:void(0)" class="button-not-bg-ct btn-open-recharge" data-tab="1"
                                           data-dismiss="modal"
                                           style="display: flex;justify-content: center"><span>Nạp thêm</span></a>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal rút quà -->
        <div class="modal fade" id="modal-withdraw-items" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Rút vật phẩm</h5>
                        <button type="button" class="close" data-dismiss="modal"></button>
                    </div>
                    <div class="modal-body p-0">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#modal-tab-withdraw" role="tab">Rút vật phẩm</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#modal-tab-history" role="tab">Lịch sử</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="modal-tab-withdraw" role="tabpanel">
                                <div class="card">
                                    <div class="card-body is-loading">
                                        <form action="" id="form-withdraw-item">
                                            @csrf
                                            <div class="t-sub-1 t-color-title">
                                                Chọn vật phẩm bạn đang sở hữu
                                            </div>
                                            <div class="swiper swiper-withdraw">
                                                <div class="swiper-wrapper" id="wrap-game-type"
                                                     data-game_type="{{ @$result->group->params->game_type }}">
                                                    <div class="swiper-slide">
                                                        <input type="radio" id="item-radio-0" name="game_type" hidden
                                                               checked>
                                                        <label for="item-radio-0" class="label-item">
                                                            <div class="item-thumb">
                                                                <img src="/assets/frontend/theme_3/image/icon-qh.png"
                                                                     alt="">
                                                            </div>
                                                            <div class="item-info">
                                                                <div class="t-body-1">Liên quân</div>
                                                                <div class="t-sub-1">10.000</div>
                                                                <div class="t-body-1">Quân huy</div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <input type="radio" id="item-radio-1" name="game_type" hidden>
                                                        <label for="item-radio-1" class="label-item">
                                                            <div class="item-thumb">
                                                                <img src="/assets/frontend/theme_3/image/icon-qh.png"
                                                                     alt="">
                                                            </div>
                                                            <div class="item-info">
                                                                <div class="t-body-1">Liên quân</div>
                                                                <div class="t-sub-1">10.000</div>
                                                                <div class="t-body-1">Quân huy</div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <input type="radio" id="item-radio-2" name="game_type" hidden>
                                                        <label for="item-radio-2" class="label-item">
                                                            <div class="item-thumb">
                                                                <img src="/assets/frontend/theme_3/image/icon-qh.png"
                                                                     alt="">
                                                            </div>
                                                            <div class="item-info">
                                                                <div class="t-body-1">Liên quân</div>
                                                                <div class="t-sub-1">10.000</div>
                                                                <div class="t-body-1">Quân huy</div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <input type="radio" id="item-radio-3" name="game_type" hidden>
                                                        <label for="item-radio-3" class="label-item">
                                                            <div class="item-thumb">
                                                                <img src="/assets/frontend/theme_3/image/icon-qh.png"
                                                                     alt="">
                                                            </div>
                                                            <div class="item-info">
                                                                <div class="t-body-1">Liên quân</div>
                                                                <div class="t-sub-1">10.000</div>
                                                                <div class="t-body-1">Quân huy</div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="t-sub-2 t-color-title mb-2">
                                                Chọn vật phẩm bạn đang sở hữu
                                            </div>
                                            <select name="package" id="package" class="wide select-withdraw">
                                                <option value="">Chọn gói</option>
                                            </select>
                                            <div class="user-info">
                                                <div class="input-id-game">
                                                    <div class="t-sub-2 t-color-title mb-2">
                                                        Tài khoản trong game
                                                    </div>
                                                    <input class="input-form w-100" type="text" name="idgame" placeholder="Nhập tài khoản trong game" required="">
                                                </div>
                                                <div class="password-phone">
                                                    <div class="t-sub-2 t-color-title mb-2">
                                                        Mật khẩu trong game
                                                    </div>
                                                    <!--
                                                     <div class="toggle-password">
                                                        <input class="input-form w-100" type="password" name="serial" placeholder="Nhập mật khẩu trong game" required="">
                                                        <span class="eye"></span>
                                                    </div>
                                                     -->
                                                </div>
                                            </div>
                                            <div class="form-message"></div>
                                            <button type="submit" class="button-primary">Thực hiện</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="modal-tab-history" role="tabpanel">
                                <div class="row marginauto logs-content p-0">
                                    <div class="col-md-12 px-0">
                                        <div class="row marginauto">
                                            <div class="col-12 left-right">
                                                <form class="search-txns">
                                                    <div class="row marginauto body-form-search-ct">
                                                        <div class="col-auto left-right">
                                                            <input autocomplete="off" type="text" name="search" class="input-search-log-ct search" placeholder="Nhập từ khóa">
                                                            <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/search.png" alt="">
                                                        </div>
                                                        <div class="col-4 body-form-search-button-ct media-web">
                                                            <button type="submit" class="timkiem-button-ct btn-timkiem" style="position: relative">
                                                                <span class="span-timkiem">Tìm kiếm</span>
                                                                <div class="row justify-content-center loading-data__timkiem"></div>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-auto ml-auto left-right">

                                                <div class="row marginauto justify-content-end nick-findter-row">

                                                    <div class="col-auto nick-findter" style="position: relative">
                                                        <ul>
                                                            <li class="li-boloc">Bộ lọc</li>
                                                            <li class="margin-findter">
                                                                <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/nick/filter.png" alt="">
                                                                <span class="overlay-find">0</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 px-0" id="table-history-withdraw">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  Modal Lịch sử quay -->
        <div class="modal fade" id="modal-spin-bonus" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Lịch sử quay thưởng</h5>
                        <button type="button" class="close" data-dismiss="modal"></button>
                    </div>
                    <div class="modal-body p-0">
                        <div class="history-search">
                            <div class="t-sub-2">
                                Tìm kiếm
                            </div>
                            <div class="row marginauto body-form-search-ct">
                                <div class="col-10 px-0">
                                    <input autocomplete="off" type="text" name="search" class="input-search-log-ct search w-100" placeholder="Nhập từ khóa">
                                    <img class="lazy" src="/assets/frontend/theme_3/image/cay-thue/search.png" alt="">
                                </div>
                                <div class="col-2 body-form-search-button-ct media-web">
                                    <button type="submit" class="timkiem-button-ct btn-timkiem w-100" style="position: relative">
                                        <span class="span-timkiem">Tìm kiếm</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div id="data-ajax-render" data-id="{{ @$result->group->id }}">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        @foreach(config('constants.'.'game_type') as $item => $key)
            <input type="hidden" id="withdrawruby_{{$item}}" value="{{$key}}">
        @endforeach

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <input type="hidden" id="group_id" value="{{ @$group->id}}">
        <input type="hidden" id="image_static"
               value="{{ @\App\Library\MediaHelpers::media($group->params->image_static) }}">

        <input type="hidden" class="slug" value="{{ @$group->slug}}">

        <script src="/assets/frontend/{{theme('')->theme_key}}/js/minigame/detail.js?v={{time()}}"></script>
    @else
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
    @endif
@endsection


