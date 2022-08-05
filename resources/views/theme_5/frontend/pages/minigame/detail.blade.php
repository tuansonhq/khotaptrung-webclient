@extends('frontend.layouts.master')
@section('seo_head')
    @include('frontend.widget.__seo_head',with(['data'=>$result->group]))
@endsection
@section('scripts')
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/minigame/minigame.js"></script>
    <script>


        $('body').on('click','.c_thele',function(e){
            $('#theleModal').modal('show');
        })

        $('body').on('click','.logsHisMinigame',function(e){
            $('#minigameLogs').modal('show');
        })
    </script>
@endsection
@section('content')

    <div class="container c-container" id="minigame-detail">
        <ul class="breadcrumb-list">
            <li class="breadcrumb-item">
                <a href="/" class="breadcrumb-link">Trang chủ</a>
            </li>
            <li class="breadcrumb-item">
                <a href="minigame" class="breadcrumb-link">Vòng quay</a>
            </li>
            <li class="breadcrumb-item">
                <a href="javascript:void(0)" class="breadcrumb-link">{{$result->group->title}}</a>
            </li>
        </ul>
        <div class="head-mobile">
            <a href="/minigame" class="link-back close-step"></a>

            <h1 class="head-title text-title">Danh sách minigame</h1>

            <a href="/" class="home"></a>
        </div>

        <section class="rotation-content c-mb-40 c-mb-lg-20 c-pt-lg-16">
            <div class="row rotation-content-section">
                <div class="col-12 col-lg-8 c-pr-8 c-px-lg-0">

                    <div class="c-px-lg-16 d-block d-lg-none  c-mb-12">
                        <div class="rotation-header-mobile d-flex justify-content-between">
                            <div class="rotation-header c-pb-8">
                                <h3 class="fw-700 fz-18 lh-24">{{$result->group->title}}</h3>
                                @if(isset($result->group->params->fake_num_play))
                                    <p class="fw-400 fz-13 mb-0">
                                        <span id="userCount">{{ str_replace(',','.',number_format($result->group->params->fake_num_play)) }}</span> người đang chơi
                                    </p>
                                @endif

                            </div>
                            @if(isset($result->group->params->thele))
                                <div class="rotation-player">
                                    <button class="btn secondary open-sheet" data-target="#sheet-filter">Thể lệ</button>
                                </div>
                            @endif

                        </div>
                    </div>
                    @if(isset($currentPlayList) && $currentPlayList != '')
                    <div class="d-block d-lg-none c-mb-16 c-px-lg-16">
                        <div class="rotation-notify w-100 ">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/svg/sound_mobile.svg" alt="">
                            <marquee class="rotation-marquee">
                                <div class="rotation-marquee-item">
                                    {!! $currentPlayList !!}
{{--                                    Danh sách trúng thưởng: &nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;--}}
                                </div>
                            </marquee>
                        </div>
                    </div>
                    @endif
                    <div class="d-block d-lg-none c-mb-16 c-px-lg-16">
                        <div class="rotation-top-mobile brs-12 d-block d-lg-none">
                            <div class="rotation-header-sale c-py-4 c-px-12 d-flex align-items-center justify-content-between">
                                <div class="d-inline-flex align-items-center c-mr-10">
                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/phu/flash_img.png" alt="">
                                    <p class="fw-500 fz-13 lh-20 mb-0">Flash sale</p>
                                </div>
                                <div class="d-inline-flex align-items-center">
                                    <img class="c-mr-4" src="/assets/frontend/{{theme('')->theme_key}}/image/svg/clock.svg" alt="">
                                    <p class="fz-12 fw-400 mb-0 c-mr-8">Kết thúc trong</p>
                                    <div class="rotation-sale-time">
                                        <ul class="mb-0 p-0">
                                            <li class="d-inline-flex align-items-center justify-content-center brs-4"><span class="fw-600 fz-12" id="hourRemain">10</span></li>
                                            <li class="d-inline-flex align-items-center justify-content-center brs-4"><span class="fw-600 fz-12" id="minuteRemain">2</span></li>
                                            <li class="d-inline-flex align-items-center justify-content-center brs-4"><span class="fw-600 fz-12" id="secondRemain">4</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="rotation-sale-content brs-8 c-py-12 d-flex flex-column align-items-center">
                                <p class="d-flex align-items-center c-mb-0">
                                    <span id="rotationFirstPrice" class="fw-400 fz-12 lh-16 c-mr-8">
                                         @if(isset($result->group->params->percent_sale))
                                            {{ str_replace(',','.',number_format(($result->group->params->percent_sale*$result->group->price)/100 + $result->group->price)) }} đ
                                        @endif
                                    </span>
                                    <span id="rotationSalePrice" class="fw-700 fz-20 lh-28 c-mr-8">{{ str_replace(',','.',number_format($result->group->price)) }}đ</span>
                                    @if(isset($result->group->params->percent_sale))
                                        <span id="rotationSaleRatio" class="brs-24 fw-400 fz-12 c-py-2 c-px-8 lh-16">Giảm {{ $result->group->params->percent_sale }}%</span>
                                    @endif
                                </p>
                                <p class="c-mb-0 fw-400 fz-13">Rẻ vô đối, giá tốt nhất thị trường</p>
                            </div>
                        </div>
                    </div>

                    <div class="rotation-detail c-mb-16 brs-12">
                        <div class="rotation-top c-p-16 d-none d-lg-flex justify-content-between">
                            <div>
                                <div class="rotation-header d-flex align-items-center c-mb-8">
                                    <h3 class="fw-700 fz-24 lh-32 c-mr-8">{{$result->group->title}}</h3>
                                    @if(isset($result->group->params->thele))

                                    <p class="fw-400 fz-13 mb-0 c_thele">Thể lệ <img src="/assets/frontend/{{theme('')->theme_key}}/image/svg/minigame_info.svg" alt=""></p>
                                    @endif
                                </div>
                                @if(isset($currentPlayList) && $currentPlayList != '')
                                <div class="rotation-player d-flex align-items-center">
                                    <img class="c-mr-4" src="/assets/frontend/{{theme('')->theme_key}}/image/svg/security-user1.svg" alt="">
                                    <p class="fw-400 fz-13 mb-0"><span id="userCount">{{ str_replace(',','.',number_format($result->group->params->fake_num_play)) }}</span> người đang chơi</p>
                                </div>
                                @endif
                            </div>
                            <div class="rotation-header-sale d-flex align-items-start">
{{--                                <div class="d-inline-flex align-items-center c-mr-10">--}}
{{--                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/phu/flash_img.png" alt="">--}}
{{--                                    <p class="fw-700 fz-20 lh-28 mb-0">Flash sale</p>--}}
{{--                                </div>--}}
{{--                                <div class="d-inline-flex align-items-center">--}}
{{--                                    <img class="c-mr-4" src="/assets/frontend/{{theme('')->theme_key}}/image/svg/clock.svg" alt="">--}}
{{--                                    <p class="fz-13 fw-400 mb-0 c-mr-8">Kết thúc trong</p>--}}
{{--                                    <div class="rotation-sale-time">--}}
{{--                                        <ul class="mb-0 p-0">--}}
{{--                                            <li class="d-inline-flex align-items-center justify-content-center brs-4"><span id="hourRemain">10</span></li>--}}
{{--                                            <li class="d-inline-flex align-items-center justify-content-center brs-4"><span id="minuteRemain">2</span></li>--}}
{{--                                            <li class="d-inline-flex align-items-center justify-content-center brs-4"><span id="secondRemain">4</span></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                        </div>


                        <div class="rotation c-p-16" style="background-image: url(/assets/frontend/{{theme('')->theme_key}}/image/phu/rotation_bg.png)">
                            @if(isset($currentPlayList) && $currentPlayList != '')
                            <div class="rotation-notify d-none d-lg-flex w-100 c-mb-16">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/svg/sound.svg" alt="">
                                <marquee class="rotation-marquee">
                                    <div class="rotation-marquee-item">
                                        {!! $currentPlayList !!}
{{--                                        Danh sách trúng thưởng: &nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;--}}
                                    </div>
                                </marquee>
                            </div>
                            @endif

                            @switch($position)
                                @case('rubywheel')

                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="rotation-button" id="start-played" style="z-index: 2">
                                            <img class="lazy" src="{{\App\Library\MediaHelpers::media($result->group->image_icon)}}" alt="{{$result->group->title}}" >
                                        </div>
                                        <img style="width: 70%" class="lazy" src="{{\App\Library\MediaHelpers::media($result->group->params->image_static)}}" alt="{{$result->group->title}}" id="rotate-play">
                                    </div>
                                    @break
                                @case('flip')
                                    @dd(222)
                                    @break
                                @case('slotmachine')
                                    @dd(333)
                                    @break
                                @case('slotmachine5')
                                    @dd(4444)
                                    @break
                                @case('squarewheel')
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="rotation-button">
                                            <img class="lazy" src="/assets/theme_3/image/images_1/rotation-button.png" alt="">
                                        </div>
                                        <img style="width: 70%" class="lazy" src="/assets/theme_3/image/images_1/rotation-img.png" alt="" id="rotate-play">
                                    </div>
                                    @break
                                @case('smashwheel')
                                    @dd(6666)
                                    @break
                                @case('rungcay')
                                    @dd(7777)
                                    @break
                                @case('gieoque')
                                    @dd(888)
                                    @break


                            @endswitch
                        </div>


                        <div class="row no-gutters">
                            <div class="col-12 col-lg-6 c-p-16 c-py-lg-8">
                                @if($result->checkPoint==1)
                                <div class="rotation-points c-mb-16 c-mb-lg-0">
                                    <div class="rotation-points-title c-mb-8 d-flex align-items-center fw-600 fz-16">
                                        <img class="c-mr-4" src="/assets/frontend/{{theme('')->theme_key}}/image/svg/mdi_police-badge.svg" alt="">
                                        <p class="c-mr-4">Hũ điểm</p>
                                        <div class="info-rotation">
                                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/svg/info.svg" alt="">
                                            <div class="rotation-tooltip c-py-8 c-px-12 brs-4">
                                                <p>Mỗi lượt quay sẽ được cộng 10 point.</p>
                                                <p>Tích luỹ đủ số point để nhận thêm lượt quay</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="progress-wrapper brs-24">
                                        <div class="progress-bar brs-24" style="width: {{$result->pointuser<100?$result->pointuser:'100'}}%"></div>
                                    </div>

                                </div>
                                @endif
                                <div class="rotation-sale-content brs-8 c-py-8 d-none d-lg-flex justify-content-center">
                                    <p class="d-flex align-items-center c-mb-0">
                                        <span id="rotationFirstPrice" class="fw-400 fz-14 c-mr-8">
                                            @if(isset($result->group->params->percent_sale))
                                                {{ str_replace(',','.',number_format(($result->group->params->percent_sale*$result->group->price)/100 + $result->group->price)) }} đ
                                            @endif
                                        </span>
                                        <span id="rotationSalePrice" class="fw-700 fz-24 lh-32 c-mr-8">{{ str_replace(',','.',number_format($result->group->price)) }}đ</span>
                                        @if(isset($result->group->params->percent_sale))
                                            <span id="rotationSaleRatio" class="brs-24 fw-400 fz-12 c-py-2 c-px-8 lh-16">Giảm {{ $result->group->params->percent_sale }}%</span>
                                        @endif
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 c-p-16 c-py-lg-8">
                                <div class="rotation-inputs c-mb-24 c-mb-lg-0 row no-gutters">
                                    <div class="col-6 c-pr-6">
                                        <input class="" type="text" placeholder="Nhập mã giảm giá">
                                    </div>
                                    <div class="col-6 c-pl-6">
                                        <select class="rotation-inputs-select" name="type" id="numrolllop">
                                            <option value="1">Mua X1/{{$result->group->price/1000}}k 1 lần quay</option>
                                            @if($result->group->params->price_sticky_3 > 0))
                                            <option value="3">Mua X3/{{$result->group->params->price_sticky_3/1000}}k 1 lần quay</option>
                                            @endif
                                            @if($result->group->params->price_sticky_5 > 0))
                                            <option value="5">Mua X5/{{$result->group->params->price_sticky_5/1000}}k 1 lần quay</option>
                                            @endif
                                            @if($result->group->params->price_sticky_7 > 0))
                                            <option value="7">Mua X7/{{$result->group->params->price_sticky_7/1000}}k 1 lần quay</option>
                                            @endif
                                            @if($result->group->params->price_sticky_10 > 0))
                                            <option value="10">Mua X10/{{$result->group->params->price_sticky_10/1000}}k 1 lần quay</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="row no-gutters d-none d-lg-flex">
                                    @if($result->group->params->is_try == 1)

                                    <div class="col-12 col-md-6 c-pr-6">
                                        <button id="playerDemo" class="btn secondary w-100 num-play-try">Chơi thử</button>
                                    </div>
                                    @endif
                                    <div class="col-12 col-md-6 c-pl-6">
                                        <button id="start-played" class="btn primary w-100 ">Quay ngay</button>
                                    </div>
                                </div>
                                <div class="footer-mobile c-p-16">

                                    <div class="row marginauto">
                                        @if($result->group->params->is_try == 1)
                                        <div class="col-6 pl-0 c-pr-8">
                                            <button class="btn secondary w-100">Chơi thử</button>
                                        </div>
                                        @endif
                                        <div class="col-6 pr-0 c-pl-8">
                                            <button id="start-played" class="btn primary w-100 ">Quay ngay</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="c-mb-16 c-pl-lg-16 c-pr-lg-16">
{{--                        @include('frontend.pages.components.description')--}}
                    </div>
{{--                    top quay thưởng--}}
                    <div class="d-block d-lg-none c-mb-16">
                        <div class="rotation-leaderboard c-p-lg-0">
                            <div class="leaderboard-header d-flex align-items-center c-pl-16 c-mb-16">
                                <img class="c-mr-4" src="/assets/frontend/{{theme('')->theme_key}}/image/svg/top-leaderboard.svg" alt="">
                                <h5 class="fw-700 fz-18 lh-20">Top quay thưởng</h5>
                            </div>
                            <div class="leaderboard-type c-mb-16 brs-8 brs-lg-0 row no-gutters">
                                <ul class="nav justify-content-between row no-gutters w-100 c-p-4 c-p-lg-0" role="tablist">
                                    <li class="nav-item col-4 p-0" role="presentation">
                                        <p class="nav-link text-center mb-0 fw-400 fz-13 brs-8 brs-lg-0 active" data-toggle="tab" href="#leaderboard_m-1" role="tab" aria-selected="true">Hôm nay</p>
                                    </li>
                                    <li class="nav-item col-4 p-0" role="presentation">
                                        <p class="nav-link text-center mb-0 fw-400 fz-13 brs-8 brs-lg-0" data-toggle="tab" href="#leaderboard_m-2" role="tab" aria-selected="false">7 ngày</p>
                                    </li>
                                    <li class="nav-item col-4 p-0" role="presentation">
                                        <p class="nav-link text-center mb-0 fw-400 fz-13 brs-8 brs-lg-0" data-toggle="tab" href="#leaderboard_m-3" role="tab" aria-selected="false">Quà đua top</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="leaderboard-table">
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="leaderboard_m-1" role="tabpanel">
                                        <div class="leaderboard-content c-px-16">

                                            @if(isset($topDayList))
                                                @foreach($topDayList as $key => $item)
                                            <div class="leaderboard-item c-p-8 d-flex align-items-center">
                                                <div class="leaderboard-item-serial lh-24 fw-600 fz-12 c-mr-12">{{ $key + 1 }}</div>
                                                <div class="leaderboard-item-avt brs-100">
                                                    <img class="brs-100 w-100 c-pr-12" src="/assets/frontend/{{theme('')->theme_key}}/image/phu/user_avatar.png" alt="">
                                                </div>
                                                <div class="leaderboard-item-content">
                                                    <p class="fw-500 fz-13 c-mb-0">{{$item['name']}}</p>
                                                    <span class="fw-400 fz-12">{{ str_replace(',','.',number_format($item['numwheel'])) }} lượt</span>
                                                </div>
                                            </div>
                                                @endforeach
                                            @endif

                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="leaderboard_m-2" role="tabpanel">
                                        <div class="leaderboard-content">
                                            @if(isset($top7DayList))
                                                @foreach($top7DayList as $key => $item)
                                                    <div class="leaderboard-item c-p-8 d-flex align-items-center">
                                                        <div class="leaderboard-item-serial lh-24 fw-600 fz-12 c-mr-12">{{ $key + 1 }}</div>
                                                        <div class="leaderboard-item-avt brs-100">
                                                            <img class="brs-100 w-100 c-pr-12" src="/assets/frontend/{{theme('')->theme_key}}/image/phu/user_avatar.png" alt="">
                                                        </div>
                                                        <div class="leaderboard-item-content">
                                                            <p class="fw-500 fz-13 c-mb-0">{{$item['name']}}</p>
                                                            <span class="fw-400 fz-12">{{ str_replace(',','.',number_format($item['numwheel'])) }} lượt</span>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @else
                                                <div class="leaderboard-item row no-gutters">
                                                    <div class="col-12 leaderboard-item-name text-center justify-content-center">
                                                        Không có dữ liệu
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="leaderboard_m-3" role="tabpanel">
                                        <div class="leaderboard-content" >
                                            @if(isset($result->group->params->phanthuong))
                                            <div class="leaderboard-item row no-gutters">
                                                {!!$result->group->params->phanthuong!!}

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
                                </div>
                            </div>
                            <div class="leaderboard-seemore">
                                <p>Xem thêm</p>
                            </div>
                            <div class="leaderboard-buttons c-px-16 c-py-8 row no-gutters" style="border-bottom: none;">
                                <div class="col-6 c-pr-5">
                                    <a href="javascript:void(0)" class="btn secondary w-100 logsHisMinigameMobile open-sheet" data-target="#sheet-filter-02" >
                                        Lịch sử quay
                                    </a>
                                </div>
                                <div class="col-6 c-pl-5">
                                    <a class="btn primary w-100" href="/withdrawitem-slug">Rút quà</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--                    top quay thưởng--}}

                    <div class="rotation-comment-block c-px-lg-16">
                        <h6 class="d-block d-lg-none fw-700 fz-18 lh-24 c-py-16">Bình luận</h6>
                        <div class="rotation-comment chat-history brs-12 c-p-16">
                            <h6 class="fw-700 fz-20 lh-28 c-mb-20  d-none d-lg-block">Bình luận</h6>
                            <ul class="comment-block list-unstyled chat-scroll c-pr-8">
                                <li>
                                    <div class="comment-item d-flex align-items-start c-mb-16">
                                        <div class="comment-avatar c-mr-8">
                                            <img class="brs-100" src="/assets/frontend/{{theme('')->theme_key}}/image/phu/user_avatar.png" alt="">
                                        </div>
                                        <div class="comment-detail">
                                            <div class="comment-info c-mb-4">
                                                <h6 class="d-inline-block">Khách</h6>
                                                <span class="c-ml-8 fw-400 fz-12">4:30 PM, Vừa xong</span>
                                            </div>
                                            <div class="comment-content fw-400 fz-13">
                                                Cứ tưởng lừa đảo, nạp thử 200k nhận luôn kim cương trong 10s
                                            </div>
                                            <div class="comment-interact c-mt-12">
                                                <span id="likeComment" class="d-inline-flex align-items-center fw-400 fz-12 c-mr-40"><img src="/assets/frontend/{{theme('')->theme_key}}/image/svg/hearts-suit_1.svg" alt=""> Thích</span>
                                                <span id="replyComment" class="d-inline-flex align-items-center fw-400 fz-12"><img src="/assets/frontend/{{theme('')->theme_key}}/image/svg/comment_1.svg" alt=""> Trả lời</span>
                                            </div>
                                        </div>
                                    </div>

                                </li>

                                <li>
                                    <div class="comment-item d-flex align-items-start c-mb-16">
                                        <div class="comment-avatar c-mr-8">
                                            <img class="brs-100" src="/assets/frontend/{{theme('')->theme_key}}/image/phu/user_avatar.png" alt="">
                                        </div>
                                        <div class="comment-detail">
                                            <div class="comment-info c-mb-4">
                                                <h6 class="d-inline-block">Khách</h6>
                                                <span class="c-ml-8 fw-400 fz-12">4:30 PM, Vừa xong</span>
                                            </div>
                                            <div class="comment-content fw-400 fz-13">
                                                Cứ tưởng lừa đảo, nạp thử 200k nhận luôn kim cương trong 10s
                                            </div>
                                            <div class="comment-interact c-mt-12">
                                                <span id="likeComment" class="d-inline-flex align-items-center fw-400 fz-12 c-mr-40"><img src="/assets/frontend/{{theme('')->theme_key}}/image/svg/hearts-suit_1.svg" alt=""> Thích</span>
                                                <span id="replyComment" class="d-inline-flex align-items-center fw-400 fz-12"><img src="/assets/frontend/{{theme('')->theme_key}}/image/svg/comment_1.svg" alt=""> Trả lời</span>
                                            </div>
                                        </div>
                                    </div>

                                </li>
                                <li>
                                    <div class="comment-item d-flex align-items-start c-mb-16">
                                        <div class="comment-avatar c-mr-8">
                                            <img class="brs-100" src="/assets/frontend/{{theme('')->theme_key}}/image/phu/user_avatar.png" alt="">
                                        </div>
                                        <div class="comment-detail">
                                            <div class="comment-info c-mb-4">
                                                <h6 class="d-inline-block">Khách</h6>
                                                <span class="c-ml-8 fw-400 fz-12">4:30 PM, Vừa xong</span>
                                            </div>
                                            <div class="comment-content fw-400 fz-13">
                                                Cứ tưởng lừa đảo, nạp thử 200k nhận luôn kim cương trong 10s
                                            </div>
                                            <div class="comment-interact c-mt-12">
                                                <span id="likeComment" class="d-inline-flex align-items-center fw-400 fz-12 c-mr-40"><img src="/assets/frontend/{{theme('')->theme_key}}/image/svg/hearts-suit_1.svg" alt=""> Thích</span>
                                                <span id="replyComment" class="d-inline-flex align-items-center fw-400 fz-12"><img src="/assets/frontend/{{theme('')->theme_key}}/image/svg/comment_1.svg" alt=""> Trả lời</span>
                                            </div>
                                        </div>
                                    </div>

                                </li>
                                <li>
                                    <div class="comment-item d-flex align-items-start c-mb-16">
                                        <div class="comment-avatar c-mr-8">
                                            <img class="brs-100" src="/assets/frontend/{{theme('')->theme_key}}/image/phu/user_avatar.png" alt="">
                                        </div>
                                        <div class="comment-detail">
                                            <div class="comment-info c-mb-4">
                                                <h6 class="d-inline-block">Khách</h6>
                                                <span class="c-ml-8 fw-400 fz-12">4:30 PM, Vừa xong</span>
                                            </div>
                                            <div class="comment-content fw-400 fz-13">
                                                Cứ tưởng lừa đảo, nạp thử 200k nhận luôn kim cương trong 10s
                                            </div>
                                            <div class="comment-interact c-mt-12">
                                                <span id="likeComment" class="d-inline-flex align-items-center fw-400 fz-12 c-mr-40"><img src="/assets/frontend/{{theme('')->theme_key}}/image/svg/hearts-suit_1.svg" alt=""> Thích</span>
                                                <span id="replyComment" class="d-inline-flex align-items-center fw-400 fz-12"><img src="/assets/frontend/{{theme('')->theme_key}}/image/svg/comment_1.svg" alt=""> Trả lời</span>
                                            </div>
                                        </div>
                                    </div>

                                </li>
                                <li>
                                    <div class="comment-item d-flex align-items-start c-mb-16">
                                        <div class="comment-avatar c-mr-8">
                                            <img class="brs-100" src="/assets/frontend/{{theme('')->theme_key}}/image/phu/user_avatar.png" alt="">
                                        </div>
                                        <div class="comment-detail">
                                            <div class="comment-info c-mb-4">
                                                <h6 class="d-inline-block">Khách</h6>
                                                <span class="c-ml-8 fw-400 fz-12">4:30 PM, Vừa xong</span>
                                            </div>
                                            <div class="comment-content fw-400 fz-13">
                                                Cứ tưởng lừa đảo, nạp thử 200k nhận luôn kim cương trong 10s
                                            </div>
                                            <div class="comment-interact c-mt-12">
                                                <span id="likeComment" class="d-inline-flex align-items-center fw-400 fz-12 c-mr-40"><img src="/assets/frontend/{{theme('')->theme_key}}/image/svg/hearts-suit_1.svg" alt=""> Thích</span>
                                                <span id="replyComment" class="d-inline-flex align-items-center fw-400 fz-12"><img src="/assets/frontend/{{theme('')->theme_key}}/image/svg/comment_1.svg" alt=""> Trả lời</span>
                                            </div>
                                        </div>
                                    </div>

                                </li>
                                <li>
                                    <div class="comment-item d-flex align-items-start c-mb-16">
                                        <div class="comment-avatar c-mr-8">
                                            <img class="brs-100" src="/assets/frontend/{{theme('')->theme_key}}/image/phu/user_avatar.png" alt="">
                                        </div>
                                        <div class="comment-detail">
                                            <div class="comment-info c-mb-4">
                                                <h6 class="d-inline-block">Khách</h6>
                                                <span class="c-ml-8 fw-400 fz-12">4:30 PM, Vừa xong</span>
                                            </div>
                                            <div class="comment-content fw-400 fz-13">
                                                Cứ tưởng lừa đảo, nạp thử 200k nhận luôn kim cương trong 10s
                                            </div>
                                            <div class="comment-interact c-mt-12">
                                                <span id="likeComment" class="d-inline-flex align-items-center fw-400 fz-12 c-mr-40"><img src="/assets/frontend/{{theme('')->theme_key}}/image/svg/hearts-suit_1.svg" alt=""> Thích</span>
                                                <span id="replyComment" class="d-inline-flex align-items-center fw-400 fz-12"><img src="/assets/frontend/{{theme('')->theme_key}}/image/svg/comment_1.svg" alt=""> Trả lời</span>
                                            </div>
                                        </div>
                                    </div>

                                </li>
                                <li>
                                    <div class="comment-item d-flex align-items-start c-mb-16">
                                        <div class="comment-avatar c-mr-8">
                                            <img class="brs-100" src="/assets/frontend/{{theme('')->theme_key}}/image/phu/user_avatar.png" alt="">
                                        </div>
                                        <div class="comment-detail">
                                            <div class="comment-info c-mb-4">
                                                <h6 class="d-inline-block">Khách</h6>
                                                <span class="c-ml-8 fw-400 fz-12">4:30 PM, Vừa xong</span>
                                            </div>
                                            <div class="comment-content fw-400 fz-13">
                                                Cứ tưởng lừa đảo, nạp thử 200k nhận luôn kim cương trong 10s
                                            </div>
                                            <div class="comment-interact c-mt-12">
                                                <span id="likeComment" class="d-inline-flex align-items-center fw-400 fz-12 c-mr-40"><img src="/assets/frontend/{{theme('')->theme_key}}/image/svg/hearts-suit_1.svg" alt=""> Thích</span>
                                                <span id="replyComment" class="d-inline-flex align-items-center fw-400 fz-12"><img src="/assets/frontend/{{theme('')->theme_key}}/image/svg/comment_1.svg" alt=""> Trả lời</span>
                                            </div>
                                        </div>
                                    </div>

                                </li>
                                <li>
                                    <div class="comment-item d-flex align-items-start c-mb-16">
                                        <div class="comment-avatar c-mr-8">
                                            <img class="brs-100" src="/assets/frontend/{{theme('')->theme_key}}/image/phu/user_avatar.png" alt="">
                                        </div>
                                        <div class="comment-detail">
                                            <div class="comment-info c-mb-4">
                                                <h6 class="d-inline-block">Khách</h6>
                                                <span class="c-ml-8 fw-400 fz-12">4:30 PM, Vừa xong</span>
                                            </div>
                                            <div class="comment-content fw-400 fz-13">
                                                Cứ tưởng lừa đảo, nạp thử 200k nhận luôn kim cương trong 10s
                                            </div>
                                            <div class="comment-interact c-mt-12">
                                                <span id="likeComment" class="d-inline-flex align-items-center fw-400 fz-12 c-mr-40"><img src="/assets/frontend/{{theme('')->theme_key}}/image/svg/hearts-suit_1.svg" alt=""> Thích</span>
                                                <span id="replyComment" class="d-inline-flex align-items-center fw-400 fz-12"><img src="/assets/frontend/{{theme('')->theme_key}}/image/svg/comment_1.svg" alt=""> Trả lời</span>
                                            </div>
                                        </div>
                                    </div>

                                </li>
                                <li>
                                    <div class="comment-item d-flex align-items-start c-mb-16">
                                        <div class="comment-avatar c-mr-8">
                                            <img class="brs-100" src="/assets/frontend/{{theme('')->theme_key}}/image/phu/user_avatar.png" alt="">
                                        </div>
                                        <div class="comment-detail">
                                            <div class="comment-info c-mb-4">
                                                <h6 class="d-inline-block">Khách</h6>
                                                <span class="c-ml-8 fw-400 fz-12">4:30 PM, Vừa xong</span>
                                            </div>
                                            <div class="comment-content fw-400 fz-13">
                                                Cứ tưởng lừa đảo, nạp thử 200k nhận luôn kim cương trong 10s
                                            </div>
                                            <div class="comment-interact c-mt-12">
                                                <span id="likeComment" class="d-inline-flex align-items-center fw-400 fz-12 c-mr-40"><img src="/assets/frontend/{{theme('')->theme_key}}/image/svg/hearts-suit_1.svg" alt=""> Thích</span>
                                                <span id="replyComment" class="d-inline-flex align-items-center fw-400 fz-12"><img src="/assets/frontend/{{theme('')->theme_key}}/image/svg/comment_1.svg" alt=""> Trả lời</span>
                                            </div>
                                        </div>
                                    </div>

                                </li>
                                <li>
                                    <div class="comment-item d-flex align-items-start c-mb-16">
                                        <div class="comment-avatar c-mr-8">
                                            <img class="brs-100" src="/assets/frontend/{{theme('')->theme_key}}/image/phu/user_avatar.png" alt="">
                                        </div>
                                        <div class="comment-detail">
                                            <div class="comment-info c-mb-4">
                                                <h6 class="d-inline-block">Khách</h6>
                                                <span class="c-ml-8 fw-400 fz-12">4:30 PM, Vừa xong</span>
                                            </div>
                                            <div class="comment-content fw-400 fz-13">
                                                Cứ tưởng lừa đảo, nạp thử 200k nhận luôn kim cương trong 10s
                                            </div>
                                            <div class="comment-interact c-mt-12">
                                                <span id="likeComment" class="d-inline-flex align-items-center fw-400 fz-12 c-mr-40"><img src="/assets/frontend/{{theme('')->theme_key}}/image/svg/hearts-suit_1.svg" alt=""> Thích</span>
                                                <span id="replyComment" class="d-inline-flex align-items-center fw-400 fz-12"><img src="/assets/frontend/{{theme('')->theme_key}}/image/svg/comment_1.svg" alt=""> Trả lời</span>
                                            </div>
                                        </div>
                                    </div>

                                </li>
                                <li>
                                    <div class="comment-item d-flex align-items-start c-mb-16">
                                        <div class="comment-avatar c-mr-8">
                                            <img class="brs-100" src="/assets/frontend/{{theme('')->theme_key}}/image/phu/user_avatar.png" alt="">
                                        </div>
                                        <div class="comment-detail">
                                            <div class="comment-info c-mb-4">
                                                <h6 class="d-inline-block">Khách</h6>
                                                <span class="c-ml-8 fw-400 fz-12">4:30 PM, Vừa xong</span>
                                            </div>
                                            <div class="comment-content fw-400 fz-13">
                                                Cứ tưởng lừa đảo, nạp thử 200k nhận luôn kim cương trong 10s
                                            </div>
                                            <div class="comment-interact c-mt-12">
                                                <span id="likeComment" class="d-inline-flex align-items-center fw-400 fz-12 c-mr-40"><img src="/assets/frontend/{{theme('')->theme_key}}/image/svg/hearts-suit_1.svg" alt=""> Thích</span>
                                                <span id="replyComment" class="d-inline-flex align-items-center fw-400 fz-12"><img src="/assets/frontend/{{theme('')->theme_key}}/image/svg/comment_1.svg" alt=""> Trả lời</span>
                                            </div>
                                        </div>
                                    </div>

                                </li>
                                <li>
                                    <div class="comment-item d-flex align-items-start c-mb-16">
                                        <div class="comment-avatar c-mr-8">
                                            <img class="brs-100" src="/assets/frontend/{{theme('')->theme_key}}/image/phu/user_avatar.png" alt="">
                                        </div>
                                        <div class="comment-detail">
                                            <div class="comment-info c-mb-4">
                                                <h6 class="d-inline-block">Khách</h6>
                                                <span class="c-ml-8 fw-400 fz-12">4:30 PM, Vừa xong</span>
                                            </div>
                                            <div class="comment-content fw-400 fz-13">
                                                Cứ tưởng lừa đảo, nạp thử 200k nhận luôn kim cương trong 10s
                                            </div>
                                            <div class="comment-interact c-mt-12">
                                                <span id="likeComment" class="d-inline-flex align-items-center fw-400 fz-12 c-mr-40"><img src="/assets/frontend/{{theme('')->theme_key}}/image/svg/hearts-suit_1.svg" alt=""> Thích</span>
                                                <span id="replyComment" class="d-inline-flex align-items-center fw-400 fz-12"><img src="/assets/frontend/{{theme('')->theme_key}}/image/svg/comment_1.svg" alt=""> Trả lời</span>
                                            </div>
                                        </div>
                                    </div>

                                </li>
                                <li>
                                    <div class="comment-item d-flex align-items-start c-mb-16">
                                        <div class="comment-avatar c-mr-8">
                                            <img class="brs-100" src="/assets/frontend/{{theme('')->theme_key}}/image/phu/user_avatar.png" alt="">
                                        </div>
                                        <div class="comment-detail">
                                            <div class="comment-info c-mb-4">
                                                <h6 class="d-inline-block">Khách</h6>
                                                <span class="c-ml-8 fw-400 fz-12">4:30 PM, Vừa xong</span>
                                            </div>
                                            <div class="comment-content fw-400 fz-13">
                                                Cứ tưởng lừa đảo, nạp thử 200k nhận luôn kim cương trong 10s
                                            </div>
                                            <div class="comment-interact c-mt-12">
                                                <span id="likeComment" class="d-inline-flex align-items-center fw-400 fz-12 c-mr-40"><img src="/assets/frontend/{{theme('')->theme_key}}/image/svg/hearts-suit_1.svg" alt=""> Thích</span>
                                                <span id="replyComment" class="d-inline-flex align-items-center fw-400 fz-12"><img src="/assets/frontend/{{theme('')->theme_key}}/image/svg/comment_1.svg" alt=""> Trả lời</span>
                                            </div>
                                        </div>
                                    </div>

                                </li>
                                <li>
                                    <div class="comment-item d-flex align-items-start c-mb-16">
                                        <div class="comment-avatar c-mr-8">
                                            <img class="brs-100" src="/assets/frontend/{{theme('')->theme_key}}/image/phu/user_avatar.png" alt="">
                                        </div>
                                        <div class="comment-detail">
                                            <div class="comment-info c-mb-4">
                                                <h6 class="d-inline-block">Khách</h6>
                                                <span class="c-ml-8 fw-400 fz-12">4:30 PM, Vừa xong</span>
                                            </div>
                                            <div class="comment-content fw-400 fz-13">
                                                Cứ tưởng lừa đảo, nạp thử 200k nhận luôn kim cương trong 10s
                                            </div>
                                            <div class="comment-interact c-mt-12">
                                                <span id="likeComment" class="d-inline-flex align-items-center fw-400 fz-12 c-mr-40"><img src="/assets/frontend/{{theme('')->theme_key}}/image/svg/hearts-suit_1.svg" alt=""> Thích</span>
                                                <span id="replyComment" class="d-inline-flex align-items-center fw-400 fz-12"><img src="/assets/frontend/{{theme('')->theme_key}}/image/svg/comment_1.svg" alt=""> Trả lời</span>
                                            </div>
                                        </div>
                                    </div>

                                </li>
                            </ul>

                            <div class="commment-input d-flex align-items-center c-mb-20">
                                <div class="comment-user-avatar c-mr-8 d-none d-lg-block">
                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/phu/user_avatar.png" alt="">
                                </div>
                                <input name="message-to-send" type="text" class="input-primary" id="message-to-send">
                            </div>
                            <div class="comment-button">
                                <button type="button" class="btn primary btn-send-message pill-button">Bình luận</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4 c-pl-8 d-none d-lg-block">
                    <div class="rotation-leaderboard c-py-24 c-px-16 brs-12">
                        <div class="leaderboard-buttons c-pb-24 c-mb-16 row no-gutters">
                            <div class="col-6 c-pr-5">
                                <a href="javascript:void(0)" class="btn secondary w-100 logsHisMinigame">
                                    Lịch sử quay
                                </a>
                            </div>
                            <div class="col-6 c-pl-5">
                                <a href="/withdrawitem-slug" class="btn primary w-100">Rút quà</a>
                            </div>
                        </div>
                        <div class="leaderboard-header d-flex align-items-center c-mb-16">
                            <img class="c-mr-4" src="/assets/frontend/{{theme('')->theme_key}}/image/svg/top-leaderboard.svg" alt="">
                            <h5 class="fw-700 fz-20 lh-28">Top quay thưởng</h5>
                        </div>
                        <div class="leaderboard-type c-mb-16 brs-8 row no-gutters">
                            <ul class="nav justify-content-between row no-gutters w-100 c-p-4" role="tablist">
                                <li class="nav-item col-4 p-0" role="presentation">
                                    <p class="nav-link text-center mb-0 fw-400 fz-13 brs-8 active" data-toggle="tab" href="#leaderboard-1" role="tab" aria-selected="true">Hôm nay</p>
                                </li>
                                <li class="nav-item col-4 p-0" role="presentation">
                                    <p class="nav-link text-center mb-0 fw-400 fz-13 brs-8" data-toggle="tab" href="#leaderboard-2" role="tab" aria-selected="false">7 ngày</p>
                                </li>
                                <li class="nav-item col-4 p-0" role="presentation">
                                    <p class="nav-link text-center mb-0 fw-400 fz-13 brs-8" data-toggle="tab" href="#leaderboard-3" role="tab" aria-selected="false">Quà đua top</p>
                                </li>
                            </ul>
                        </div>
                        <div class="leaderboard-table">
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="leaderboard-1" role="tabpanel">
                                    <div class="leaderboard-content" >

                                        @if(isset($topDayList))
                                            @foreach($topDayList as $key => $item)
                                        <div class="leaderboard-item c-p-8 d-flex align-items-center">
                                            <div class="leaderboard-item-serial lh-24 fw-600 fz-12 c-mr-12">{{ $key + 1 }}</div>
                                            <div class="leaderboard-item-avt brs-100">
                                                <img class="brs-100 w-100 c-pr-12" src="/assets/frontend/{{theme('')->theme_key}}/image/phu/user_avatar.png" alt="">
                                            </div>
                                            <div class="leaderboard-item-content">
                                                <p class="fw-500 fz-13 c-mb-0">{{$item['name']}}</p>
                                                <span class="fw-400 fz-12">{{ str_replace(',','.',number_format($item['numwheel'])) }} lượt</span>
                                            </div>
                                        </div>
                                            @endforeach
                                        @else
                                            <div class="leaderboard-item row no-gutters">
                                                <div class="col-12 leaderboard-item-name text-center justify-content-center">
                                                    Không có dữ liệu
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="leaderboard-2" role="tabpanel">
                                    <div class="leaderboard-content">
                                        @if(isset($top7DayList))
                                            @foreach($top7DayList as $key => $item)
                                                <div class="leaderboard-item c-p-8 d-flex align-items-center">
                                                    <div class="leaderboard-item-serial lh-24 fw-600 fz-12 c-mr-12">{{ $key + 1 }}</div>
                                                    <div class="leaderboard-item-avt brs-100">
                                                        <img class="brs-100 w-100 c-pr-12" src="/assets/frontend/{{theme('')->theme_key}}/image/phu/user_avatar.png" alt="">
                                                    </div>
                                                    <div class="leaderboard-item-content">
                                                        <p class="fw-500 fz-13 c-mb-0">{{$item['name']}}</p>
                                                        <span class="fw-400 fz-12">{{ str_replace(',','.',number_format($item['numwheel'])) }} lượt</span>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="leaderboard-item row no-gutters">
                                                <div class="col-12 leaderboard-item-name text-center justify-content-center">
                                                    Không có dữ liệu
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="leaderboard-3" role="tabpanel">
                                    <div class="leaderboard-content" >
                                        @if(isset($result->group->params->phanthuong))
                                                <div class="leaderboard-item c-p-8 d-flex align-items-center">

                                                    {!!$result->group->params->phanthuong!!}

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
                            </div>
                        </div>
                        <div class="leaderboard-seemore">
                            <p>Xem thêm</p>
                        </div>
                    </div>
                </div>


            </div>
        </section>

        {{--            Vòng quayy free fire   --}}

        @include('frontend.pages.minigame.widget.__play__recently')
        {{--            Vòng quay liên quân   --}}
        @include('frontend.pages.minigame.widget.__related__minigame')

{{--        Modal thể lệ    --}}

        <div class="modal fade modal-big" id="theleModal">
            <div class="modal-dialog modal-dialog-centered modal-custom">
                <div class="modal-content c-p-24">
                    <div class="modal-header">
                        <h2 class="modal-title center">Thể lệ</h2>
                        <button type="button" class="close" data-dismiss="modal"></button>
                    </div>
                    <div class="modal-body pl-0 pr-0 c-pt-24 c-pb-24">
                        <div class="card--gray c-p-16">
                            <div class="card--attr justify-content-between d-flex c-mb-16">
                                <p class="fz-13 fw-400 text-theme lh-20 mb-0">
                                    Chỉ với 10 trong tài khoản bạn đã có ngay 1 lượt chơi <a href="#">Vòng Quay Giải Nhiệt Hè</a>, sẽ càng rẻ hơn nếu bạn chơi nhiều lượt cùng lúc

                                    Cách chơi rất đơn giản khi bạn quay kim quay dừng ở vị trí nào bạn sẽ nhận được phần thưởng tương ứng ở vị trí đó

                                    Rất nhiều phần quà hấp dẫn đang chờ đợi bạn.

                                    Chúc bạn chơi game vui vẻ và may mắn !!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn primary">Chơi thử</button>
                    </div>
                </div>
            </div>
        </div>

{{--        Modal lịch sử   --}}

        <div class="modal fade modal-big modal-logs-minigame" id="minigameLogs">
            <div class="modal-dialog modal-dialog-centered modal-custom">
                <div class="modal-content c-p-24">
                    <div class="modal-header">
                        <h2 class="modal-title center">Lịch sử trúng thưởng</h2>
                        <button type="button" class="close" data-dismiss="modal"></button>
                    </div>
                    <div class="modal-body pl-0 pr-0 c-pt-24 c-pb-24">
                        <div class="card--gray">
                            <div class="card--attr justify-content-between d-flex c-mb-16 default-table" id="logs-minigame">
                                <table class="table table-responsive-lg table-striped table-hover table-logs">
                                    <thead>
                                    <tr class="row marginauto">
                                        <th class="fw-500 fz-13 lh-20 text-title text-left col-auto">Thời gian</th>
                                        <th class="fw-500 fz-13 lh-20 text-title text-right col-auto ml-auto">Kiểu nạp</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr class="row marginauto">
                                        <td class="text-left col-auto fw-400 fz-13 lh-20 c-pl-16 c-pt-8 c-pb-8 pr-0">+100.000 kim cương</td>
                                        <td class="col-auto ml-auto fw-400 fz-13 lh-20 pl-0 c-pt-8 c-pb-8 c-pr-16">2022-04-08, 20:30</td>
                                    </tr>

                                    <tr class="row marginauto">
                                        <td class="text-left col-auto fw-400 fz-13 lh-20 c-pl-16 c-pt-8 c-pb-8 pr-0">+100.000 kim cương</td>
                                        <td class="col-auto ml-auto fw-400 fz-13 lh-20 pl-0 c-pt-8 c-pb-8 c-pr-16">2022-04-08, 20:30</td>
                                    </tr>

                                    <tr class="row marginauto">
                                        <td class="text-left col-auto fw-400 fz-13 lh-20 c-pl-16 c-pt-8 c-pb-8 pr-0">+100.000 kim cương</td>
                                        <td class="col-auto ml-auto fw-400 fz-13 lh-20 pl-0 c-pt-8 c-pb-8 c-pr-16">2022-04-08, 20:30</td>
                                    </tr>

                                    <tr class="row marginauto">
                                        <td class="text-left col-auto fw-400 fz-13 lh-20 c-pl-16 c-pt-8 c-pb-8 pr-0">+100.000 kim cương</td>
                                        <td class="col-auto ml-auto fw-400 fz-13 lh-20 pl-0 c-pt-8 c-pb-8 c-pr-16">2022-04-08, 20:30</td>
                                    </tr>

                                    <tr class="row marginauto">
                                        <td class="text-left col-auto fw-400 fz-13 lh-20 c-pl-16 c-pt-8 c-pb-8 pr-0">+100.000 kim cương</td>
                                        <td class="col-auto ml-auto fw-400 fz-13 lh-20 pl-0 c-pt-8 c-pb-8 c-pr-16">2022-04-08, 20:30</td>
                                    </tr>

                                    <tr class="row marginauto">
                                        <td class="text-left col-auto fw-400 fz-13 lh-20 c-pl-16 c-pt-8 c-pb-8 pr-0">+100.000 kim cương</td>
                                        <td class="col-auto ml-auto fw-400 fz-13 lh-20 pl-0 c-pt-8 c-pb-8 c-pr-16">2022-04-08, 20:30</td>
                                    </tr>

                                    <tr class="row marginauto">
                                        <td class="text-left col-auto fw-400 fz-13 lh-20 c-pl-16 c-pt-8 c-pb-8 pr-0">+100.000 kim cương</td>
                                        <td class="col-auto ml-auto fw-400 fz-13 lh-20 pl-0 c-pt-8 c-pb-8 c-pr-16">2022-04-08, 20:30</td>
                                    </tr>

                                    <tr class="row marginauto">
                                        <td class="text-left col-auto fw-400 fz-13 lh-20 c-pl-16 c-pt-8 c-pb-8 pr-0">+100.000 kim cương</td>
                                        <td class="col-auto ml-auto fw-400 fz-13 lh-20 pl-0 c-pt-8 c-pb-8 c-pr-16">2022-04-08, 20:30</td>
                                    </tr>

                                    <tr class="row marginauto">
                                        <td class="text-left col-auto fw-400 fz-13 lh-20 c-pl-16 c-pt-8 c-pb-8 pr-0">+100.000 kim cương</td>
                                        <td class="col-auto ml-auto fw-400 fz-13 lh-20 pl-0 c-pt-8 c-pb-8 c-pr-16">2022-04-08, 20:30</td>
                                    </tr>

                                    <tr class="row marginauto">
                                        <td class="text-left col-auto fw-400 fz-13 lh-20 c-pl-16 c-pt-8 c-pb-8 pr-0">+100.000 kim cương</td>
                                        <td class="col-auto ml-auto fw-400 fz-13 lh-20 pl-0 c-pt-8 c-pb-8 c-pr-16">2022-04-08, 20:30</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn ghost">Xoá bộ lọc</button>
                        {{--                    <a class="btn secondary" data-dismiss="modal">Về trang chủ</a>--}}
                        {{--                    <button class="btn primary">Xem kết quả</button>--}}
                        <button class="btn primary">Xem kết quả</button>

                    </div>
                </div>
            </div>
        </div>

        <!-- Sheet Thể lệ  -->
        <div class="bottom-sheet" id="sheet-filter" aria-hidden="true" data-height="36">
            <div class="layer"></div>
            <div class="content-bottom-sheet bar-slide">
                <form action="" class="form-filter">
                    <div class="sheet-header">
                        <h2 class="text-title center">
                            Thể lệ
                        </h2>
                        <label class="close"></label>
                    </div>
                    <div class="sheet-body overflow-visible">
                        <!-- body -->
                        <p class="fz-13 fw-400 text-theme lh-20 mb-0 c-mt-8 c-ml-8 c-mr-8">
                            Chỉ với 10 trong tài khoản bạn đã có ngay 1 lượt chơi <a href="#" class="c_text-pink">Vòng Quay Giải Nhiệt Hè</a>, sẽ càng rẻ hơn nếu bạn chơi nhiều lượt cùng lúc

                            Cách chơi rất đơn giản khi bạn quay kim quay dừng ở vị trí nào bạn sẽ nhận được phần thưởng tương ứng ở vị trí đó

                            Rất nhiều phần quà hấp dẫn đang chờ đợi bạn.

                            Chúc bạn chơi game vui vẻ và may mắn !!
                        </p>
                    </div>
                    <div class="sheet-footer">
                        <button class="btn secondary js-reset-form">Thiết lập lại</button>
                        <button class="btn primary js-submit-form">Xem kết quả</button>
                    </div>
                </form>
            </div>
        </div>

{{--     bottom-sheet lịch sử   --}}

    <!-- Sheet Filter Mobile -->
        <div class="bottom-sheet" id="sheet-filter-02" aria-hidden="true" data-height="50">
            <div class="layer"></div>
            <div class="content-bottom-sheet bar-slide">
                <form action="" class="form-filter">
                    <div class="sheet-header">
                        <h2 class="text-title center">
                            Lịch sử trúng thưởng
                        </h2>
                        <label class="close"></label>
                    </div>
                    <div class="sheet-body overflow-visible">
                        <!-- body -->
                        <div class="card--gray">
                            <div class="card--attr justify-content-between d-flex c-mb-16 default-table" id="sheet-minigame-his">
                                <table class="table table-striped table-hover table-logs">
                                    <thead>
                                    <tr class="row marginauto">
                                        <th class="fw-500 fz-13 lh-20 text-title text-left col-auto">Thời gian</th>
                                        <th class="fw-500 fz-13 lh-20 text-title text-right col-auto ml-auto">Kiểu nạp</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr class="row marginauto">
                                        <td class="text-left col-auto fw-400 fz-13 lh-20 c-pl-16 c-pt-8 c-pb-8 pr-0">+100.000 kim cương</td>
                                        <td class="col-auto ml-auto fw-400 fz-13 lh-20 pl-0 c-pt-8 c-pb-8 c-pr-16">2022-04-08, 20:30</td>
                                    </tr>

                                    <tr class="row marginauto">
                                        <td class="text-left col-auto fw-400 fz-13 lh-20 c-pl-16 c-pt-8 c-pb-8 pr-0">+100.000 kim cương</td>
                                        <td class="col-auto ml-auto fw-400 fz-13 lh-20 pl-0 c-pt-8 c-pb-8 c-pr-16">2022-04-08, 20:30</td>
                                    </tr>

                                    <tr class="row marginauto">
                                        <td class="text-left col-auto fw-400 fz-13 lh-20 c-pl-16 c-pt-8 c-pb-8 pr-0">+100.000 kim cương</td>
                                        <td class="col-auto ml-auto fw-400 fz-13 lh-20 pl-0 c-pt-8 c-pb-8 c-pr-16">2022-04-08, 20:30</td>
                                    </tr>

                                    <tr class="row marginauto">
                                        <td class="text-left col-auto fw-400 fz-13 lh-20 c-pl-16 c-pt-8 c-pb-8 pr-0">+100.000 kim cương</td>
                                        <td class="col-auto ml-auto fw-400 fz-13 lh-20 pl-0 c-pt-8 c-pb-8 c-pr-16">2022-04-08, 20:30</td>
                                    </tr>

                                    <tr class="row marginauto">
                                        <td class="text-left col-auto fw-400 fz-13 lh-20 c-pl-16 c-pt-8 c-pb-8 pr-0">+100.000 kim cương</td>
                                        <td class="col-auto ml-auto fw-400 fz-13 lh-20 pl-0 c-pt-8 c-pb-8 c-pr-16">2022-04-08, 20:30</td>
                                    </tr>

                                    <tr class="row marginauto">
                                        <td class="text-left col-auto fw-400 fz-13 lh-20 c-pl-16 c-pt-8 c-pb-8 pr-0">+100.000 kim cương</td>
                                        <td class="col-auto ml-auto fw-400 fz-13 lh-20 pl-0 c-pt-8 c-pb-8 c-pr-16">2022-04-08, 20:30</td>
                                    </tr>

                                    <tr class="row marginauto">
                                        <td class="text-left col-auto fw-400 fz-13 lh-20 c-pl-16 c-pt-8 c-pb-8 pr-0">+100.000 kim cương</td>
                                        <td class="col-auto ml-auto fw-400 fz-13 lh-20 pl-0 c-pt-8 c-pb-8 c-pr-16">2022-04-08, 20:30</td>
                                    </tr>

                                    <tr class="row marginauto">
                                        <td class="text-left col-auto fw-400 fz-13 lh-20 c-pl-16 c-pt-8 c-pb-8 pr-0">+100.000 kim cương</td>
                                        <td class="col-auto ml-auto fw-400 fz-13 lh-20 pl-0 c-pt-8 c-pb-8 c-pr-16">2022-04-08, 20:30</td>
                                    </tr>

                                    <tr class="row marginauto">
                                        <td class="text-left col-auto fw-400 fz-13 lh-20 c-pl-16 c-pt-8 c-pb-8 pr-0">+100.000 kim cương</td>
                                        <td class="col-auto ml-auto fw-400 fz-13 lh-20 pl-0 c-pt-8 c-pb-8 c-pr-16">2022-04-08, 20:30</td>
                                    </tr>

                                    <tr class="row marginauto">
                                        <td class="text-left col-auto fw-400 fz-13 lh-20 c-pl-16 c-pt-8 c-pb-8 pr-0">+100.000 kim cương</td>
                                        <td class="col-auto ml-auto fw-400 fz-13 lh-20 pl-0 c-pt-8 c-pb-8 c-pr-16">2022-04-08, 20:30</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="sheet-footer">
                        <a href="/withdrawitem-slug" class="btn primary js-submit-form">Rút quà</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <input type="hidden" class="started_at" name="started_at" value="{{ $result->group->started_at??0 }}">
    <input type="hidden" id="type_play" value="real">



    <!-- Modal quay thành công -->
    <div class="modal fade modal-small" id="noticeModal">
        <div class="modal-dialog modal-dialog-centered modal-custom">
            <div class="modal-content">
                <div class="modal-header justify-content-center p-0">
                    {{--                    Ảnh Thành công    --}}
                    <img class="c-pt-20 c-pb-20" src="/assets/frontend/{{theme('')->theme_key}}/image/son/success.png" alt="">
                    <button type="button" class="close close_modal" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body text-center c-pl-24 c-pr-24 pt-0 pb-0">
                    {{--                    Content 3  --}}
                    <p class="fw-700 fz-15 fz-lg-15 fz-md-14 fz-sm-12 c-mt-12 mb-0 text-title-theme">Chúc mừng bạn đã quay trúng</p>
                    <div class="rotation-prize-detail content-popup fw-400 fz-13 fz-lg-13 fz-md-12 fz-sm-11 c-mt-10 mb-0">
                    </div>
                </div>
                <div class="modal-footer c-p-24">
                    <a class="btn secondary" href="/withdrawitem-1">Rút quà</a>
                    <button class="btn primary"  data-dismiss="modal">Chơi tiếp</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="naptheModal" role="dialog" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered modal-custom">
                <div class="modal-content">
                    <div class="modal-header justify-content-center p-0">
                        {{--                    Ảnh Thành công    --}}
                        <img class="c-pt-20 c-pb-20" src="/assets/frontend/{{theme('')->theme_key}}/image/son/thatbai.png" alt="">
                        <button type="button" class="close close_modal" data-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body text-center c-pl-24 c-pr-24 pt-0 pb-0">
                        {{--                    Content 3  --}}
                        <div class="rotation-prize-detail content-popup fw-700 fz-15 fz-lg-15 fz-md-14 fz-sm-12 c-mt-12 mb-0 text-title-theme">
                        </div>
                    </div>
                    <div class="modal-footer c-p-24">
                        <a class="btn secondary" href="/nap-the">Nạp thẻ</a>
                        <button class="btn primary"  data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
    </div>

    @foreach(config('constants.'.'game_type') as $item => $key)
        <input type="hidden" id="withdrawruby_{{$item}}" value="{{$key}}">
    @endforeach
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.0/handlebars.min.js"></script>
    <input type="hidden" id="position_input" value="{{ @$position }}">
    <input type="hidden" id="group_id" value="{{ @$result->group->id}}">
    <input type="hidden" id="image_static" value="{{ @\App\Library\MediaHelpers::media($result->group->params->image_static) }}">
    <input type="hidden" id="count_item" value="{{count($result->group->items)}}">
    <!-- script -->
    <script id="history-template" type="text/x-handlebars-template">
        <tr>
            <td class="text-danger"><b>@{{idCustomer}}</b></td>
            <td class="base-color"><b>@{{txtHistory}}</b></td>
        </tr>
    </script>
    <script id="message-template" type="text/x-handlebars-template">
        <li>

            <div class="comment-item comment-item-own">

                <div class="comment-detail comment-detail-own">
                    <div class="comment-info comment-info-own">

                        <span>@{{time}} , Vừa xong</span>
                        <p>Bạn</p>
                    </div>
                    <div class="comment-content comment-content-own">
                        @{{messageOutput}}
                    </div>
                    <div class="comment-interact comment-interact-own">
                        <span id="likeComment"><img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/hearts-suit 1.svg" alt=""> Thích</span>
                        <span id="replyComment"><img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/comment 1.svg" alt=""> Trả lời</span>
                    </div>
                </div>
                <div class="comment-avatar">
                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/user_avatar.png" alt="">
                </div>
            </div>

        </li>

    </script>
    <script id="message-response-template" type="text/x-handlebars-template">
        <li>
            <div class="comment-item">
                <div class="comment-avatar">
                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/user_avatar.png" alt="">
                </div>
                <div class="comment-detail">
                    <div class="comment-info">
                        <p>Khách</p>
                        <span>@{{time}}, Vừa xong</span>
                    </div>
                    <div class="comment-content">
                        @{{response}}
                    </div>
                    <div class="comment-interact">
                        <span id="likeComment"><img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/hearts-suit 1.svg" alt=""> Thích</span>
                        <span id="replyComment"><img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/comment 1.svg" alt=""> Trả lời</span>
                    </div>
                </div>
            </div>

        </li>
    </script>

    @switch($position)
        @case('rubywheel')
        <script src="/assets/frontend/{{theme('')->theme_key}}/js/minigame/rubywheel.js"></script>
        @break
        @case('flip')
        <style type="text/css">
            .boxflip .active {
                animation: rotation 100ms infinite linear;
            }
            .boxflip .tran {
                opacity: 0!important;
            }

            @keyframes rotation {
                100%{ transform:rotatey(360deg); }
            }
        </style>
        <script src="/assets/frontend/{{theme('')->theme_key}}/js/minigame/flip.js"></script>
        @foreach($result->group->items as $item)
            <input type="hidden" class="image_gift" value="{{ \App\Library\MediaHelpers::media($item->parrent->image) }}">
        @endforeach
        @break
        @case('slotmachine')
        <script src="/assets/frontend/{{theme('')->theme_key}}/js/minigame/slotmachine.js"></script>
        <style>
            @php
    $count = 0;
@endphp
@foreach($result->group->items as   $gift)
    @php
        $count++;
    @endphp
    .a{{$count}}{background-image: url("{{@\App\Library\MediaHelpers::media($gift->parrent->image)}}") !important;}
            @endforeach
#slot1,#slot2,#slot3{
                display: inline-block;
                margin-top: 2px;
                margin-left: 1px;
                margin-right: 45px;
                margin: 0 25px;
                background-size: 100px 79px;
                width: 100px;
                height: 79px;
                padding: 0 28px;
                background-repeat: no-repeat;
            }
            /*  Lap top  */
            @media only screen and (min-width: 992px) and (max-width: 1200px) {
                #slot1,#slot2,#slot3 {
                    background-size: 60px 48px!important;
                    width: 60px!important;
                    margin: 0 28px!important;
                    height: 48px;
                }
            }
            @media only screen and (min-width: 573px) and (max-width: 768px) {
                #slot1,#slot2,#slot3 {
                    background-size: 64px 48px!important;
                    width: 64px!important;
                    margin: 0 22px!important;
                    height: 50px!important;
                }
            }
            @media only screen and (min-width: 376px) and (max-width: 573px) {
                #slot1,#slot2,#slot3 {
                    background-size: 56px 40px!important;
                    width: 48px!important;
                    margin: 0px 9px!important;
                    height: 48px!important;
                }

            }
            @media only screen and (max-width: 376px) {
                #slot1,#slot2,#slot3 {
                    background-size: 56px 40px!important;
                    width: 48px!important;
                    margin: 0px 9px!important;
                    height: 48px!important;
                }
            }
        </style>
        @break
        @case('slotmachine5')
        <script src="/assets/frontend/{{theme('')->theme_key}}/js/minigame/slotmachine5.js"></script>
        <style>
            @php
    $count = 0;
@endphp
@foreach($result->group->items as $gift)
    @php
        $count++;
    @endphp
    .a{{$count}}{background-image: url("{{@\App\Library\MediaHelpers::media($gift->parrent->image)}}") !important;}
            @endforeach
#slot1,#slot2,#slot3,#slot4,#slot5{
                display: inline-block;
                margin-top: 2px;
                margin-left: 1px;
                margin-right: 45px;
                margin: 0 6px;
                background-size: 100px 93px;
                width: 100px;
                height: 93px;
                background-repeat: no-repeat;
            }

            @media only screen and (min-width: 992px) and (max-width: 1200px) {
                #slot1,#slot2,#slot3,#slot4,#slot5{
                    background-size: 80px 80px!important;
                    width: 80px!important;
                    height: 80px!important;
                    margin: 0 5px!important;
                }
            }
            @media only screen and (min-width: 573px) and (max-width: 768px) {
                #slot1,#slot2,#slot3,#slot4,#slot5{
                    background-size: 74px 74px!important;
                    width: 74px!important;
                    height: 74px!important;
                    margin: 0 5.5px!important;
                }
            }
            @media only screen and (min-width: 376px) and (max-width: 573px) {
                #slot1,#slot2,#slot3,#slot4,#slot5{
                    background-size: 54px 52px!important;
                    width: 54px!important;
                    height: 54px!important;
                    margin: 0 4.3px!important;
                }

            }

            @media only screen and (max-width: 376px) {
                #slot1,#slot2,#slot3,#slot4,#slot5{
                    background-size: 54px 52px!important;
                    width: 54px!important;
                    height: 54px!important;
                    margin: 0 4.3px!important;
                }
            }
        </style>
        @break
        @case('squarewheel')
        @if(isset($result->group->items) && count($result->group->items)>0)
            <script>
                @foreach($result->group->items as $index=>$item)
                $('.gift'+({{$index}}+1)).attr('id',"id"+{{$item->item_id}});
                $('.gift'+({{$index}}+1)+' img').attr('src','{{\App\Library\MediaHelpers::media($item->parrent->image)}}');
                @endforeach
            </script>
        @endif
        <script src="/assets/frontend/{{theme('')->theme_key}}/js/minigame/squarewheel.js"></script>
        <style>
            .box img.active{box-shadow:0 0 1px #fff, 0 0 2px #fff, 0 0 45px #f00, 0 0 30px #ff0013, 0 0 25px #f10303}
        </style>
        @break
        @case('smashwheel')
        @case('rungcay')
        @case('gieoque')
        <script src="/assets/frontend/{{theme('')->theme_key}}/js/minigame/smashwheel.js"></script>
        @break
    @endswitch
@endsection

