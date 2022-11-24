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
            $('.modal-logs-minigame').modal('show');
        })
    </script>
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/nam/minigame.css">
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/minigame/withdraw-modal.js?v={{time()}}"></script>
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/minigame/fake-cmt.js"></script>
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/minigame/modal-history-spin-bonus.js?v={{time()}}"></script>
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
            <a href="/minigame" class="link-back "></a>

            <p class="head-title text-title">Danh sách minigame</p>

            <a href="/" class="home"></a>
        </div>

        <section class="rotation-content c-mb-40 c-mb-lg-20 c-pt-lg-16">
            <div class="row rotation-content-section">
                <div class="col-12 col-lg-8 c-pr-8 c-px-lg-0">

                    <div class="c-px-lg-16 d-block d-lg-none  c-mb-12">
                        <div class="rotation-header-mobile d-flex justify-content-between">
                            <div class="rotation-header c-pb-8">
                                <h1 class="fw-700 fz-18 lh-24">{{$result->group->title}}</h1>
                                <p class="fw-400 fz-13 mb-0"> <span class="userCount"></span> </p>

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
                            {{--                            <div class="rotation-header-sale c-py-4 c-px-12 d-flex align-items-center justify-content-between">--}}
                            {{--                                <div class="d-inline-flex align-items-center c-mr-10">--}}
                            {{--                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/phu/flash_img.png" alt="">--}}
                            {{--                                    <p class="fw-500 fz-13 lh-20 mb-0">Flash sale</p>--}}
                            {{--                                </div>--}}
                            {{--                                <div class="d-inline-flex align-items-center">--}}
                            {{--                                    <img class="c-mr-4" src="/assets/frontend/{{theme('')->theme_key}}/image/svg/clock.svg" alt="">--}}
                            {{--                                    <p class="fz-12 fw-400 mb-0 c-mr-8">Kết thúc trong</p>--}}
                            {{--                                    <div class="rotation-sale-time">--}}
                            {{--                                        <ul class="mb-0 p-0">--}}
                            {{--                                            <li class="d-inline-flex align-items-center justify-content-center brs-4"><span class="fw-600 fz-12" id="hourRemain">10</span></li>--}}
                            {{--                                            <li class="d-inline-flex align-items-center justify-content-center brs-4"><span class="fw-600 fz-12" id="minuteRemain">2</span></li>--}}
                            {{--                                            <li class="d-inline-flex align-items-center justify-content-center brs-4"><span class="fw-600 fz-12" id="secondRemain">4</span></li>--}}
                            {{--                                        </ul>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            <div class="rotation-sale-content brs-12 c-py-12 d-flex flex-column align-items-center">
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
                                <div class="rotation-player d-flex align-items-center">
                                    <img class="c-mr-4" src="/assets/frontend/{{theme('')->theme_key}}/image/svg/security-user1.svg" alt="">
                                    <p class="fw-400 fz-13 mb-0"><span class="userCount"></span></p>
                                </div>
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

                                <div class="d-flex align-items-center justify-content-center" id="rubywheel">
                                    <div class="rotation-button" id="start-played" style="z-index: 2">
                                        <img class="lazy" src="{{\App\Library\MediaHelpers::media($result->group->image_icon)}}" alt="{{$result->group->title}}" >
                                    </div>
                                    <img style="width: 70%" class="lazy" src="{{\App\Library\MediaHelpers::media($result->group->params->image_static)}}" alt="{{$result->group->title}}" id="rotate-play">
                                </div>
                                @break
                                @case('flip')
                                {{--                                    <div class="d-flex align-items-center justify-content-center flex-wrap">--}}
                                <div class="rotation" id="flip">
                                    <div class="row boxflip">
                                        @for ($i = 0; $i < count($result->group->items); $i++)
                                            <div class='flipimg col-4 col-sm-4 col-lg-4 flip-box'>
                                                <div data-inner=" inner{{$i}}" class="item_flip_inner">
                                                    <img class="imgnen" src="{{\App\Library\MediaHelpers::media($result->group->params->image_static)}}">
                                                    <img data-inner="inner{{$i}}" class="flip-box-front inner{{$i}} item_flip_inner_image" src="{{ \App\Library\MediaHelpers::media($result->group->params->image_static) }}">
                                                </div>
                                            </div>
                                        @endfor
                                    </div>
                                    <div class="row" id="boxfliphide" style="display: none;">
                                        @for ($i = 0; $i < count($result->group->items); $i++)
                                            <div class='flipimg col-4 col-sm-4 col-lg-4 flip-box'>
                                                <div data-inner=" inner{{$i}}" class="item_flip_inner">
                                                    <img class="imgnen" src="{{\App\Library\MediaHelpers::media($result->group->params->image_static)}}">
                                                    <img data-inner="inner{{$i}}" class="flip-box-front img_remove inner{{$i}} item_flip_inner_image" src="{{ \App\Library\MediaHelpers::media($result->group->params->image_static) }}">
                                                </div>
                                            </div>
                                        @endfor
                                    </div>
                                </div>
                                {{--                                    </div>--}}
                                @break
                                @case('slotmachine')
                                <div class="d-flex align-items-center justify-content-center" id="slotmachine">
                                    <div class="item_slot item_slot-ba-qua" style="background: url({{\App\Library\MediaHelpers::media($result->group->params->image_background)}});background-repeat: no-repeat" >
                                        <div class="item_slot_inner">
                                            <div id="slot1"  class="item_slot_inner_img a1" style=""></div>
                                            <div id="slot2" class="item_slot_inner_img a1" style=""></div>
                                            <div id="slot3" class="item_slot_inner_img a1" style=""></div>
                                        </div>
                                    </div>
                                </div>
                                @break
                                @case('slotmachine5')
                                <div class="d-flex align-items-center justify-content-center " id="slotmachine5">
                                    <div class="rotation">
                                        <div class="item_play_spin_five_record" style="background-image: url({{\App\Library\MediaHelpers::media($result->group->params->image_background)}})" >
                                            <div class="item_five_record_inner">
                                                <div id="slot1"  class="item_five_record_inner_img a1" style=""></div>
                                                <div id="slot2" class="item_five_record_inner_img a1" style=""></div>
                                                <div id="slot3" class="item_five_record_inner_img a1" style=""></div>
                                                <div id="slot4" class="item_five_record_inner_img a1" style=""></div>
                                                <div id="slot5" class="item_five_record_inner_img a1" style=""></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @break
                                @case('squarewheel')

                                <div class="d-flex align-items-center justify-content-center flex-wrap">
                                    <table id="squaredesktop" class="square">
                                        <tr>
                                            <td></td>
                                            <td><div  data-num="1" class="gift1 box"><img src="{{\App\Library\MediaHelpers::media($result->group->params->image_static)}}"/></div></td>
                                            <td><div  data-num="2" class="gift2 box"><img src="{{\App\Library\MediaHelpers::media($result->group->params->image_static)}}"/></div></td>
                                            <td><div  data-num="3" class="gift3 box"><img src="{{\App\Library\MediaHelpers::media($result->group->params->image_static)}}"/></div></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><div  data-num="12" class="gift12 box"><img src="{{\App\Library\MediaHelpers::media($result->group->params->image_static)}}"/></div></td>
                                            <td colspan="3"></td>
                                            <td><div  data-num="4" class="gift4 box"><img src="{{\App\Library\MediaHelpers::media($result->group->params->image_static)}}"/></div></td>
                                        </tr>
                                        <tr>
                                            <td><div data-num="11" class="gift11 box"><img src="{{\App\Library\MediaHelpers::media($result->group->params->image_static)}}"/></div></td>
                                            <td colspan="3">
                                                <div class="outer-btn text-center">
                                                    <div class="play btn m-btn m-btn--custom m-btn--icon m-btn--pill" style="" id="start-played">
                                                        <img src="{{\App\Library\MediaHelpers::media($result->group->image_icon)}}" alt="" style="">
                                                    </div>
                                                </div>
                                            </td>
                                            <td><div  data-num="5" class="gift5 box"><img src="{{\App\Library\MediaHelpers::media($result->group->params->image_static)}}"/></div></td>
                                        </tr>
                                        <tr>
                                            <td><div  data-num="10" class="gift10 box"><img src="{{\App\Library\MediaHelpers::media($result->group->params->image_static)}}"/></div></td>
                                            <td colspan="3"></td>
                                            <td><div  data-num="6" class="gift6 box"><img src="{{\App\Library\MediaHelpers::media($result->group->params->image_static)}}"/></div></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><div  data-num="9" class="gift9 box"><img src="{{\App\Library\MediaHelpers::media($result->group->params->image_static)}}"/></div></td>
                                            <td><div  data-num="8" class="gift8 box"><img src="{{\App\Library\MediaHelpers::media($result->group->params->image_static)}}"/></div></td>
                                            <td><div  data-num="7" class="gift7 box"><img src="{{\App\Library\MediaHelpers::media($result->group->params->image_static)}}"/></div></td>
                                            <td></td>
                                        </tr>
                                    </table>
                                </div>
                                @break
                                @case('smashwheel')
                                @case('rungcay')
                                @case('gieoque')
                                <div class="d-flex align-items-center justify-content-center" id="smashwheel">
                                    <div class="rotation-button rotation-button-quanhuy" id="start-played" >
                                        <img class="lazy" src="{{\App\Library\MediaHelpers::media($result->group->image_icon)}}" alt="{{$result->group->title}}" >
                                    </div>
                                    <img style="background: url({{\App\Library\MediaHelpers::media($result->group->params->image_background)}}) no-repeat center center;background-size: contain;" class="lazy minigame-image" src="{{\App\Library\MediaHelpers::media($result->group->params->image_static)}}" alt="{{$result->group->title}}" id="lac_lixi">
                                    <input type="hidden" value="{{\App\Library\MediaHelpers::media($result->group->params->image_static)}}" id="hdImageLD">
                                    <input type="hidden" value="{{\App\Library\MediaHelpers::media($result->group->params->image_animation)}}" id="hdImageDapLu">
                                </div>
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
                                            @if (!\App\Library\AuthCustom::check())
                                                <button class="btn secondary w-100" onclick="openLoginModal();">Chơi thử</button>
                                            @else
                                                <button id="playerDemo" class="btn secondary w-100 num-play-try">Chơi thử</button>
                                            @endif
                                        </div>
                                    @endif
                                    <div class="col-12 col-md-6 c-pl-6">
                                        @if (!\App\Library\AuthCustom::check())
                                            <button class="btn primary w-100" onclick="openLoginModal();">Quay ngay</button>
                                        @else
                                            <button id="start-played" class="btn primary w-100 play">Quay ngay</button>
                                        @endif
                                    </div>
                                </div>
                                <div class="footer-mobile">

                                    <div class="row marginauto">
                                        @if($result->group->params->is_try == 1)
                                            <div class="col-6 pl-0 c-pr-8">
                                                @if (!\App\Library\AuthCustom::check())
                                                    <button class="btn secondary w-100" onclick="openLoginModal();">Chơi thử</button>
                                                @else
                                                    <button class="btn secondary w-100 num-play-try">Chơi thử</button>
                                                @endif
                                            </div>
                                        @endif
                                        <div class="col-6 pr-0 c-pl-8">
                                            @if (!\App\Library\AuthCustom::check())
                                                <button class="btn primary w-100" onclick="openLoginModal();">Quay ngay</button>
                                            @else
                                                <button id="start-played" class="btn primary w-100  play">Quay ngay</button>
                                            @endif
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    @if(isset($result->group->content))
                        <div class="service-detail-block c-mb-16 c-px-lg-16 detailViewBlock">
                            <h6 class="d-block d-lg-none fz-15 fw-700 lh-24 c-mb-8">Chi tiết dịch vụ</h6>
                            <div class="card overflow-hidden detailViewBlock">
                                <div class="card-body c-p-16">
                                    <h2 class="text-title-bold d-none d-lg-block c-mb-24 detailViewBlockTitle">Chi tiết dịch vụ</h2>
                                    @if(substr($result->group->content, 1200))
                                    <div class="content-desc hide detailViewBlockContent">
                                    @else
                                    <div class="content-desc detailViewBlockContent">
                                    @endif
                                        {!! $result->group->content !!}
                                    </div>
                                </div>
                                @if(substr($result->group->content, 1200))
                                <div class="card-footer text-center">
                                    <span class="see-more" data-content="Xem thêm nội dung"></span>
                                </div>
                                @endif
                            </div>
                        </div>
                    @endif

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
                        </div>
                    </div>
                    {{-- button mobile--}}
                    <div class="d-block d-lg-none c-mb-16">
                        @if (\App\Library\AuthCustom::check())
                            <div class="c-px-16">
                                <div class="leaderboard-items brs-8 c-mb-4 c-px-12 c-py-8 d-flex align-items-center">
                                    <span class="fw-400 fz-13 c-mr-8 lh-16">Bạn đang có:</span>
                                    <p class="c-mb-0 fw-700 fz-15 lh-24">{{ str_replace(',','.',number_format($result->number_item)) }} {{ $result->name_item->image??'' }}</p>
                                </div>
                            </div>
                        @endif
                        <div class="leaderboard-buttons c-px-16 c-py-8 row no-gutters" style="border-bottom: none;">
                            @if (!\App\Library\AuthCustom::check())
                                <div class="col-6 c-pr-5">
                                    <a href="javascript:void(0)" class="btn secondary w-100" onclick="openLoginModal();">
                                        Lịch sử quay
                                    </a>
                                </div>
                                <div class="col-6 c-pl-5">
                                    <a href="javascript:void(0)" class="btn primary w-100" onclick="openLoginModal();">Rút quà</a>
                                </div>
                            @else
                                <div class="col-6 c-pr-5">
                                    <a href="javascript:void(0)" class="btn secondary w-100 logsHisMinigameMobile open-sheet" data-target="#sheet-filter-02" >
                                        Lịch sử quay
                                    </a>
                                </div>
                                <div class="col-6 c-pl-5">
                                    <a class="btn primary w-100" href="/withdrawitem-{{$result->group->params->game_type}}">Rút quà</a>
                                </div>
                            @endif
                        </div>
                    </div>
                    {{--                    top quay thưởng--}}

                    <div class="rotation-comment-block c-px-lg-16">
                        <h6 class="d-block d-lg-none fw-700 fz-18 lh-24 c-py-16">Bình luận</h6>
                        <div class="rotation-comment chat-history brs-12 c-p-16">
                            <h6 class="fw-700 fz-20 lh-28 c-mb-20  d-none d-lg-block">Bình luận</h6>
                            <ul class="comment-block list-unstyled chat-scroll c-pr-8">

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
                    <div class="rotation-leaderboard c-py-16 c-px-16 brs-12">
                        @if (\App\Library\AuthCustom::check())
                            <div class="leaderboard-items brs-8 c-mb-12 c-px-12 c-py-8 d-flex align-items-center">
                                <span class="fw-400 fz-13 c-mr-8 lh-16">Bạn đang có:</span>
                                <p class="c-mb-0 fw-700 fz-15 lh-24">{{ str_replace(',','.',number_format($result->number_item)) }} {{ $result->name_item->image??'' }}</p>
                            </div>
                        @endif
                        <div class="leaderboard-buttons c-pb-24 c-mb-16 row no-gutters">
                            @if (!\App\Library\AuthCustom::check())
                                <div class="col-6 c-pr-5">
                                    <a href="javascript:void(0)" class="btn secondary w-100" onclick="openLoginModal();">
                                        Lịch sử quay
                                    </a>
                                </div>
                                <div class="col-6 c-pl-5">
                                    <a href="javascript:void(0)" class="btn primary w-100" onclick="openLoginModal();">Rút quà</a>
                                </div>
                            @else
                                <div class="col-6 c-pr-5">
                                    <a href="javascript:void(0)" class="btn secondary w-100" data-toggle="modal" data-target="#modal-spin-bonus" >
                                        Lịch sử quay
                                    </a>
                                </div>
                                <div class="col-6 c-pl-5">
                                    <a href="/withdrawitem-{{$result->group->params->game_type}}" class="btn primary w-100" data-toggle="modal" data-target="#modalWithdraw">
                                        Rút quà
                                    </a>
                                </div>
                            @endif
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
                                            <div class="leaderboard-item c-p-8 align-items-center">
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

        {{--        @include('frontend.pages.minigame.widget.__play__recently')--}}
        {{--            Vòng quay liên quân   --}}
        @include('frontend.pages.minigame.widget.__related__minigame', ['data_minigame' => $result->group->id])

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
                            <div class="card--attr justify-content-between  c-mb-16">
                                {!! $result->group->params->thele !!}
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn primary"  data-dismiss="modal">Chơi thử</button>
                    </div>
                </div>
            </div>
        </div>



        {{--         @endif--}}
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
                        {!! $result->group->params->thele !!}
                    </div>
                    <div class="sheet-footer">
                        <button class="btn primary close" style="opacity: 1;">Chơi thử</button>

                    </div>
                </form>
            </div>
        </div>

        <!-- Sheet History Mobile -->

        <div class="bottom-sheet" id="sheet-filter-02" aria-hidden="true" data-height="50">
            <div class="layer"></div>
            <div class="content-bottom-sheet bar-slide">
                <form action="" class="form-filter">
                    <div class="sheet-header">
                        <h2 class="text-title center">
                            Lịch sử quay thưởng
                        </h2>
                        <label class="close"></label>
                    </div>
                    <div class="sheet-body overflow-visible c-p-0">
                        <div id="data-ajax-mobile-render"></div>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <input type="hidden" class="started_at" name="started_at" value="{{ $result->group->started_at??0 }}">
    <input type="hidden" id="type_play" value="real">
    <input type="text" id="checkPoint" name="checkPoint" value="{{$result->checkPoint}}">

    <!-- Modal rút quà -->
    <div class="modal fade" id="modalWithdraw" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content c-p-0">
                <div class="modal-header c-p-24 align-items-center">
                    <h5 class="modal-title fw-700 fz-15 lh-24">Rút vật phẩm</h5>
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
                    <div class="tab-content c-p-0">
                        <div class="tab-pane fade show active" id="modal-tab-withdraw" role="tabpanel">
                            <form action="" id="form-withdraw-item">
                                @csrf
                                <div class="item-block-tab c-p-16">
                                    <div class="input-group">
                                        <div class="form-label">Chọn vật phẩm bạn đang sở hữu</div>
                                        <div class="swiper swiper-withdraw">
                                            <div class="swiper-wrapper" id="wrap-game-type" data-game_type="{{ @$result->group->params->game_type }}">

                                            </div>
                                        </div>
                                        <span class="text-error"></span>
                                    </div>
                                </div>
                                <div class="item-input-tab">
                                    <div class="input-group">
                                        <div class="form-label">
                                            Chọn vật phẩm bạn đang sở hữu
                                        </div>
                                        <select name="package" id="package" class="wide select-withdraw">
                                            <option value="">Chọn gói</option>
                                        </select>
                                        <span class="text-error"></span>
                                    </div>
                                    <div class="input-group input-id-game">
                                        <div class="form-label">
                                            Tài khoản trong game
                                        </div>
                                        <input class="" type="text" name="idgame" placeholder="Nhập tài khoản trong game" required="">
                                        <span class="text-error"></span>
                                    </div>
                                    <div class="input-group password-phone">
                                        <div class="form-label">
                                            Mật khẩu trong game
                                        </div>
                                        <div class="toggle-password">
                                            <input class="password" type="password" name="serial" placeholder="Nhập mật khẩu trong game" required="">
                                        </div>
                                        <span class="text-error"></span>
                                    </div>
                                    <div id="withdrawMessage"></div>
                                    <div class="d-flex c-mt-24 justify-content-end">
                                        <button type="submit" class="btn primary" style="width: 40%">Rút ngay</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="modal-tab-history" role="tabpanel">
                            <div class="history-block-tab">
                                <div style="width: 100%">
                                    <form action="" class="form-search history">
                                        <input type="search" placeholder="Tìm kiếm" class=" has-submit">
                                        <button type="submit"></button>
                                    </form>
                                </div>
                                <div class="value-filter">
                                    <div class="show-modal-filter noselect">Bộ lọc</div>
                                </div>
                                <div class="row history-tab-inputs">
                                    <div class="col-7 c-pr-4">
                                        <div class="row">
                                            <div class="col-6 c-pr-4">
                                                <div class="input-group">
                                                    <div class="form-label">
                                                        Loại giao dịch
                                                    </div>
                                                    <select name="id" class="wide">
                                                        <option value="" selected disabled hidden>Chọn</option>
                                                        <option value="ngoc-rong">Ngoc rong</option>
                                                        <option value="cf-online">CF Online</option>
                                                    </select>
                                                    <span class="text-error"></span>
                                                </div>
                                            </div>
                                            <div class="col-6 c-pl-4">
                                                <div class="input-group">
                                                    <div class="form-label">
                                                        Trạng thái
                                                    </div>
                                                    <select name="status" class="wide">
                                                        <option value="" selected disabled hidden>Chọn</option>
                                                        <option value="1">Hủy</option>
                                                        <option value="0">Thành công</option>
                                                    </select>
                                                    <span class="text-error"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-5 c-pl-4">
                                        <div class="row">
                                            <div class="col-6 c-pr-4">
                                                <div class="input-group">
                                                    <div class="form-label">
                                                        Từ ngày
                                                    </div>
                                                    <input type="text" name="started_at" class="date-right" placeholder="Chọn">
                                                    <span class="text-error"></span>
                                                </div>
                                            </div>
                                            <div class="col-6 c-pl-4">
                                                <div class="input-group">
                                                    <div class="form-label">
                                                        Đến ngày
                                                    </div>
                                                    <input type="text" name="ended_at" class="date-right" placeholder="Chọn">
                                                    <span class="text-error"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-7 c-pr-4">

                                    </div>
                                    <div class="col-5 c-pl-4">
                                        <div class="row">
                                            <div class="col-6 c-pr-4">
                                                <div class="btn ghost" id="resetFormButton" style="width:100%;">Xóa bộ lọc</div>
                                            </div>
                                            <div class="col-6 c-pl-4">
                                                <div class="btn primary" style="width:100%;">Xem kết quả</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="history-list-tab">
                                <div id="table-history-withdraw"></div>
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
            <div class="modal-content c-p-0">
                <div class="modal-header c-p-24 align-items-center">
                    <h5 class="modal-title fw-700 fz-15 lh-24">Lịch sử quay thưởng</h5>
                    <button type="button" class="close" data-dismiss="modal"></button>
                </div>
                <div class="modal-body c-p-0">
                    <div id="data-ajax-render" data-id="{{ @$result->group->id }}">

                    </div>
                </div>
            </div>
        </div>
    </div>

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
                    <a class="btn secondary" href="/withdrawitem-{{$result->group->params->game_type}}" >Rút quà</a>
                    <button class="btn primary"  data-dismiss="modal">Chơi tiếp</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-small" id="naptheModal" role="dialog" aria-hidden="true">

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
                    <a href="javascript:void(0);" class="handle-recharge-modal btn secondary" data-tab="1" data-dismiss="modal">Nạp tiền</a>
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
            <div class="comment-item d-flex align-items-start c-mb-16">
                <div class="comment-avatar c-mr-8">
                    <img class="brs-100" src="/assets/frontend/{{theme('')->theme_key}}/image/phu/user_avatar.png" alt="">
                </div>
                <div class="comment-detail">
                    <div class="comment-info c-mb-4">
                        <h6 class="d-inline-block text-primary-color" >Bạn </h6>
                        <span class="c-ml-8 fw-400 fz-12">@{{time}}, Vừa xong</span>
                    </div>
                    <div class="comment-content fw-400 fz-13">
                        @{{messageOutput}}
                    </div>
                    <div class="comment-interact c-mt-12">
                        <span id="likeComment" class="d-inline-flex align-items-center fw-400 fz-12 c-mr-40"><img src="/assets/frontend/{{theme('')->theme_key}}/image/svg/hearts-suit_1.svg" alt=""> Thích</span>
                        <span id="replyComment" class="d-inline-flex align-items-center fw-400 fz-12"><img src="/assets/frontend/{{theme('')->theme_key}}/image/svg/comment_1.svg" alt=""> Trả lời</span>
                    </div>
                </div>
            </div>
        </li>


    </script>
    <script id="message-response-template" type="text/x-handlebars-template">
        <li>
            <div class="comment-item d-flex align-items-start c-mb-16">
                <div class="comment-avatar c-mr-8">
                    <img class="brs-100" src="/assets/frontend/{{theme('')->theme_key}}/image/phu/user_avatar.png" alt="">
                </div>
                <div class="comment-detail">
                    <div class="comment-info c-mb-4">
                        <h6 class="d-inline-block">Khách </h6>
                        <span class="c-ml-8 fw-400 fz-12">@{{time}}, Vừa xong</span>
                    </div>
                    <div class="comment-content fw-400 fz-13">
                        @{{response}}
                    </div>
                    <div class="comment-interact c-mt-12">
                        <span id="likeComment" class="d-inline-flex align-items-center fw-400 fz-12 c-mr-40"><img src="/assets/frontend/{{theme('')->theme_key}}/image/svg/hearts-suit_1.svg" alt=""> Thích</span>
                        <span id="replyComment" class="d-inline-flex align-items-center fw-400 fz-12"><img src="/assets/frontend/{{theme('')->theme_key}}/image/svg/comment_1.svg" alt=""> Trả lời</span>
                    </div>
                </div>
            </div>
        </li>
    </script>

    @switch($position)
        @case('rubywheel')
        <script>
            function animate(options) {
                var start = performance.now();
                requestAnimationFrame(function animate(time) {
                    var timeFraction = (time - start) / options.duration;
                    if (timeFraction > 1) timeFraction = 1;
                    var progress = options.timing(timeFraction)
                    options.draw(progress);
                    if (timeFraction < 1) {
                        requestAnimationFrame(animate);
                    }
                });
            }

            $(document).ready(function (e) {

                var saleoffpass = "";
                var game_type_value = "";
                var userpoint = 0;
                var numrollbyorder = 0;
                var roll_check = true;
                var num_loop = 4;
                var angle_gift = '';
                var num_gift = '{{count($result->group->items)}}';
                var gift_detail = '';
                var num_roll_remain = 0;
                var angles = 0;
                var arrxgt;
                var free_wheel = 0;
                var value_gif_bonus = '';
                var msg_random_bonus = '';
                var showwithdrawbtn = true;
                //var arrDiscount = '';

                $('body').delegate('#start-played', 'click', function () {
                    $('#type_play').val('real');
                    play();
                });

                $('body').delegate('.num-play-try', 'click', function () {
                    $('#type_play').val('try');
                    play();
                });

                //Click nút quay
                function play() {
                    if (roll_check) {
                        roll_check = false;
                        saleoffpass = $("#saleoffpass").val();
                        numrolllop = $("#numrolllop").val();
                        $.ajax({
                            url: '/minigame-play',
                            datatype: 'json',
                            data: {
                                _token: $('meta[name="csrf-token"]').attr('content'),
                                id: '{{$result->group->id}}',
                                numrolllop: numrolllop,
                                numrollbyorder: numrollbyorder,
                                typeRoll: $('#type_play').val(),
                                saleoffpass: saleoffpass,
                            },
                            type: 'POST',
                            success: function (data) {

                                if (data.status == 4) {
                                    location.href = '/login?return_url=' + window.location.href;
                                } else if (data.status == 3) {
                                    roll_check = true;
                                    $('#naptheModal').modal('show')
                                    return;
                                } else if (data.status == 0) {
                                    roll_check = true;
                                    $('#noticeModal .content-popup').text(data.msg);
                                    $('#noticeModal').modal('show');
                                    return;
                                }
                                showwithdrawbtn = data.showwithdrawbtn;
                                numrollbyorder = parseInt(data.numrollbyorder) + 1;
                                gift_detail = data.gift_detail;
                                gift_revice = data.arr_gift;

                                game_type_value = data.game_type_value;
                                arrxgt = data.xgt;
                                if (data.xgt > 0) {
                                    xvalue = data.xgt[data.xgt.length - 1];
                                } else {
                                    xvalue = 0;
                                }
                                value_gif_bonus = data.value_gif_bonus;
                                msg_random_bonus = data.msg_random_bonus;
                                xvalueaDD = data.xValue;
                                free_wheel = data.free_wheel;
                                num_roll_remain = gift_detail.num_roll_remain;
                                angles = 0;
                                angle_gift = gift_detail.order * (360 / num_gift);
                                loop();

                                if ($('#type_play').val() == 'real') {
                                    userpoint = data.userpoint;
                                    if (userpoint < 100) {
                                        $(".item_spin_progress_bubble").css("width", data.userpoint + "%")
                                    } else {
                                        $(".item_spin_progress_bubble").css("width", "100%");
                                        $(".item_spin_progress_bubble").addClass('clickgif');
                                    }
                                    $(".item_spin_progress_percent").html(data.userpoint + "/100 point");
                                    $("#saleoffpass").val("");
                                    //saleoffmessage = data.saleMessage;
                                }
                            },
                            error: function () {
                                $('#noticeModal .content-popup').text('Có lỗi xảy ra. Vui lòng thử lại!');
                                $('#noticeModal').modal('show');
                            }
                        })
                    }
                };

                function getgifbonus() {

                    if ($('#checkPoint').val() != "1") {
                        return;
                    }
                    $.ajax({
                        url: '/minigame-bonus',
                        datatype: 'json',
                        data: {
                            _token: $('meta[name="csrf-token"]').attr('content'),
                            id: '{{$result->group->id}}',
                        },
                        type: 'POST',
                        success: function (data) {

                            if (data.status == 0) {
                                $('#noticeModal .content-popup').text(data.msg);
                                $('#noticeModal').modal('show');
                                return;
                            }

                            var flag_bonus = true;
                            var c_game_type_value = '';

                            if (data.game_type_value){
                                c_game_type_value = " " + data.game_type_value;
                            }

                            if (data.value_gif_bonus.length > 0){
                                for (let i = 0; i < data.value_gif_bonus.length; i++ ){
                                    if (parseInt(data.value_gif_bonus[i]) > 0){
                                        flag_bonus = false;
                                    }
                                }
                            }

                            var total_vp = parseInt(data.arr_gift[0]['parrent'].params.value) + parseInt(data.value_gif_bonus[0]);

                            if (!flag_bonus){
                                var html_bonus = "";
                                html_bonus += "</br>";
                                html_bonus += "</br>";
                                html_bonus += "Nổ hũ may mắn - bạn đã trúng thêm " + total_vp + c_game_type_value;
                                $('#noticeModal .content-popup').append(html_bonus);

                            }else{
                                var html_bonus = "";
                                html_bonus += "</br>";
                                html_bonus += "</br>";
                                html_bonus += data.msg + " - " + data.arr_gift[0].title;
                                $('#noticeModal .content-popup').append(html_bonus);
                            }


                            //$("#noticeModalNoHu #btnWithdraw").hide();
                            $('#noticeModal').modal('show');
                            var userpoint = data.userpoint;
                            if (userpoint < 100) {
                                $(".item_spin_progress_bubble").css("width", data.userpoint + "%");
                                $(".item_spin_progress_bubble").removeClass('clickgif');
                            } else {
                                $(".item_spin_progress_bubble").css("width", "100%");
                                $(".item_spin_progress_bubble").addClass('clickgif');
                            }
                            $(".item_spin_progress_percent").html(data.userpoint + "/100 point");
                            $(".pyro").show();
                            setTimeout(function () {
                                $(".pyro").hide();
                            }, 6000)
                        },
                        error: function () {
                            $('#noticeModal .content-popup').text('Có lỗi xảy ra. Vui lòng thử lại!');
                            $('#noticeModal').modal('show');
                        }
                    })
                }

                function loop() {
                    $('#rotate-play').css({
                        "transform": "rotate(" + angles + "deg)"
                    });

                    if ((parseInt(angles) - 10) <= -(((num_loop * 360) + angle_gift))) {
                        angles = parseInt(angles) - 2;
                    } else {
                        angles = parseInt(angles) - 10;
                    }

                    if (angles >= -((num_loop * 360) + angle_gift)) {
                        requestAnimationFrame(loop);
                    } else {
                        roll_check = true;

                        $("#btnWithdraw").show();
                        if (gift_detail.winbox == 0) {
                            $("#btnWithdraw").hide();
                        } else {
                            if (gift_detail.gift_type == 0) {
                                $("#btnWithdraw").html("Rút " + $("#withdrawruby_" + gift_detail.game_type).val());
                                $("#btnWithdraw").attr('href', '/withdrawitem-' + gift_detail.game_type);
                            } else if (gift_detail.gift_type == 1) {
                                $("#btnWithdraw").html("Kiểm tra nick trúng");
                                $("#btnWithdraw").attr('href', '/minigame-logacc-' + '{{$result->group->id}}');
                            } else if (gift_detail.gift_type == 2) {
                                $("#btnWithdraw").html("Load lại trang");
                                $("#btnWithdraw").removeAttr("href");
                                $("#btnWithdraw").addClass('reLoad');
                            } else {
                                $("#btnWithdraw").hide();
                            }

                        }
                        if (gift_revice.length > 0) {
                            $html = "";
                            $strDiscountcode = "";
                            // if(saleoffmessage.length > 0)
                            // {
                            //     $html += "<br/><span style='font-size: 14px;color: #f90707;font-style: italic;display: block;text-align: center;'>"+saleoffmessage+"</span><br/>";
                            // }
                            var flag_bonus = true;

                            if (value_gif_bonus.length > 0){
                                for (let i = 0; i < value_gif_bonus.length; i++ ){
                                    if (parseInt(value_gif_bonus[i]) > 0){
                                        flag_bonus = false;
                                    }
                                }
                            }

                            var c_game_type_value = '';
                            if (game_type_value){
                                c_game_type_value = " " + game_type_value;
                            }

                            if ($('#type_play').val() == "real") {


                                if (gift_revice.length == 1) {

                                    // if(arrDiscount[0] != "")
                                    // {
                                    //     $strDiscountcode="<span>Bạn nhận được 1 mã giảm giá khuyến mãi đi kèm: <b>"+arrDiscount[0]+"</b></span>";
                                    // }
                                    if (!flag_bonus){//trường hợp bonus.
                                        var total_vp = parseInt(gift_revice[0]['parrent'].params.value) + parseInt(value_gif_bonus[0]);

                                        $html += "<span>Kết quả: Bạn đã trúng " + total_vp + c_game_type_value +"</span><br/>";
                                        if (gift_detail.winbox == 1) {

                                            $html += "<span>Mua X1: Nhận được " + total_vp + game_type_value + "</span><br/>";
                                            $html += "<span>Tổng cộng: " + (parseInt(gift_revice[0]['parrent'].params.value) * (parseInt(xvalueaDD[0])) + parseInt(value_gif_bonus[0])) + game_type_value +"</span>";
                                        }
                                    }else {
                                        $html += "<span>Kết quả: " + gift_revice[0]["title"] + "</span><br/>";
                                        if (gift_detail.winbox == 1) {

                                            $html += "<span>Mua X1: Nhận được " + gift_revice[0]['parrent'].params.value + "</span><br/>";
                                            //$html += "<span>Quay được "+(xvalue+3)+" hình trùng nhau. Nhận X"+(xvalueaDD[0])+" giải thưởng: "+gift_revice[0]['parrent'].params.value*(xvalueaDD[0])+""+msg_random_bonus[0]+"</span><br/>"+$strDiscountcode;
                                            $html += "<span>Tổng cộng: " + parseInt(gift_revice[0]['parrent'].params.value) * (parseInt(xvalueaDD[0])) + "</span>";
                                        }
                                    }

                                } else {
                                    if (!flag_bonus) {//trường hợp bonus.

                                        $totalRevice = 0;
                                        $html += "<span>Kết quả: Nhận " + gift_revice.length + " phần thưởng cho " + gift_revice.length + " lượt quay.</span><br/>";
                                        $html += "<span><b>Mua X" + gift_revice.length + ":</b></span><br/>";
                                        for ($i = 0; $i < gift_revice.length; $i++) {

                                            var total_vp = parseInt(gift_revice[$i]['parrent'].params.value) + parseInt(value_gif_bonus[$i]);

                                            $html += "<span>Lần quay " + ($i + 1) + ": Bạn đã trúng " + total_vp + c_game_type_value;
                                            if (gift_revice[$i].winbox == 1) {

                                                $html += " - nhận được: " + gift_revice[$i]['parrent'].params.value + " X" + (parseInt(xvalueaDD[$i])) + " = " + (parseInt(gift_revice[$i]['parrent'].params.value) * (parseInt(xvalueaDD[$i])) + parseInt(value_gif_bonus[$i])) + "" + c_game_type_value + "</span><br/><br/>";
                                            } else {
                                                $html += "<br/><br/>";
                                            }
                                            $totalRevice += parseInt(gift_revice[$i]['parrent'].params.value) * (parseInt(xvalueaDD[$i])) + parseInt(value_gif_bonus[$i]);
                                        }

                                        $html += "<span><b>Tổng cộng: " + $totalRevice + c_game_type_value + " </b></span>";
                                    }else{
                                        $totalRevice = 0;
                                        $html += "<span>Kết quả: Nhận " + gift_revice.length + " phần thưởng cho " + gift_revice.length + " lượt quay.</span><br/>";
                                        $html += "<span><b>Mua X" + gift_revice.length + ":</b></span><br/>";
                                        for ($i = 0; $i < gift_revice.length; $i++) {

                                            $html += "<span>Lần quay " + ($i + 1) + ": " + gift_revice[$i]["title"];
                                            if (gift_revice[$i].winbox == 1) {
                                                $html += " - nhận được: " + gift_revice[$i]['parrent'].params.value + " X" + (parseInt(xvalueaDD[$i])) + " = " + parseInt(gift_revice[$i]['parrent'].params.value) * (parseInt(xvalueaDD[$i])) + "" + msg_random_bonus[$i] + "</span><br/>" + $strDiscountcode + "<br/>";
                                            } else {
                                                $html += "" + msg_random_bonus[$i] + "<br/>" + $strDiscountcode + "<br/>";
                                            }
                                            $totalRevice += parseInt(gift_revice[$i]['parrent'].params.value) * (parseInt(xvalueaDD[$i])) + parseInt(value_gif_bonus[$i]);
                                        }

                                        $html += "<span><b>Tổng cộng: " + $totalRevice + "</b></span>";
                                    }
                                }
                            } else {
                                $("#btnWithdraw").hide();
                                if (gift_revice.length == 1) {
                                    if (!flag_bonus) {//trường hợp bonus.
                                        var total_vp = parseInt(gift_revice[0]['parrent'].params.value) + parseInt(value_gif_bonus[0]);

                                        $html += "<span>Kết quả: Bạn đã trúng " + total_vp + c_game_type_value +"</span><br/>";
                                        if (gift_detail.winbox == 1) {

                                            $html += "<span>Mua X1: Nhận được " + total_vp + game_type_value + "</span><br/>";
                                            $html += "<span>Tổng cộng: " + (parseInt(gift_revice[0]['parrent'].params.value) * (parseInt(xvalueaDD[0])) + parseInt(value_gif_bonus[0])) + game_type_value +"</span>";
                                        }
                                    }else{
                                        $html += "<span>Kết quả chơi thử: " + gift_revice[0]["title"] + "</span><br/>";
                                        if (gift_detail.winbox == 1) {
                                            $html += "<span>Mua X1: Nhận được " + gift_revice[0]['parrent'].params.value + "</span><br/>";
                                            //$html += "<span>Quay được "+(xvalue+3)+" hình trùng nhau. Nhận X"+(xvalueaDD[0])+" giải thưởng: "+gift_revice[0]['parrent'].params.value*(xvalueaDD[0])+""+msg_random_bonus[0]+"</span><br/>";
                                            $html += "<span>Tổng cộng: " + parseInt(gift_revice[0]['parrent'].params.value) * (parseInt(xvalueaDD[0])) + "</span>";
                                        }
                                    }

                                } else {
                                    if (!flag_bonus) {//trường hợp bonus.
                                        $totalRevice = 0;
                                        $html += "<span>Kết quả chơi thử: Nhận " + gift_revice.length + " phần thưởng cho " + gift_revice.length + " lượt quay.</span><br/>";
                                        $html += "<span><b>Mua X" + gift_revice.length + ":</b></span><br/>";
                                        for ($i = 0; $i < gift_revice.length; $i++) {

                                            var total_vp = parseInt(gift_revice[$i]['parrent'].params.value) + parseInt(value_gif_bonus[$i]);

                                            $html += "<span>Lần quay " + ($i + 1) + ": Bạn đã trúng " + total_vp + c_game_type_value;
                                            if (gift_revice[$i].winbox == 1) {

                                                $html += " - nhận được: " + gift_revice[$i]['parrent'].params.value + " X" + (parseInt(xvalueaDD[$i])) + " = " + (parseInt(gift_revice[$i]['parrent'].params.value) * (parseInt(xvalueaDD[$i])) + parseInt(value_gif_bonus[$i])) + "" + c_game_type_value + "</span><br/><br/>";
                                            } else {
                                                $html += "<br/><br/>";
                                            }
                                            $totalRevice += parseInt(gift_revice[$i]['parrent'].params.value) * (parseInt(xvalueaDD[$i])) + parseInt(value_gif_bonus[$i]);
                                        }

                                        $html += "<span><b>Tổng cộng: " + $totalRevice + c_game_type_value + " </b></span>";
                                    }else{
                                        $totalRevice = 0;
                                        $html += "<span>Kết quả chơi thử: Nhận " + gift_revice.length + " phần thưởng cho " + gift_revice.length + " lượt quay.</span><br/>";
                                        $html += "<span><b>Mua X" + gift_revice.length + ":</b></span><br/>";
                                        for ($i = 0; $i < gift_revice.length; $i++) {
                                            $html += "<span>Lần quay " + ($i + 1) + ": " + gift_revice[$i]['parrent'].title;
                                            if (gift_revice[$i].winbox == 1) {
                                                $html += " - nhận được: " + gift_revice[$i]['parrent'].params.value + " X" + (parseInt(xvalueaDD[$i])) + " = " + parseInt(gift_revice[$i]['parrent'].params.value) * (parseInt(xvalueaDD[$i])) + "" + msg_random_bonus[$i] + "</span><br/>";
                                            } else {
                                                $html += "" + msg_random_bonus[$i] + "<br/>";
                                            }
                                            $totalRevice += parseInt(gift_revice[$i]['parrent'].params.value) * (parseInt(xvalueaDD[$i])) + parseInt(value_gif_bonus[$i]);
                                        }

                                        $html += "<span><b>Tổng cộng: " + $totalRevice + "</b></span>";
                                    }
                                }
                            }
                        }
                        if (!showwithdrawbtn) {
                            $("#btnWithdraw").hide();
                        }else{ $("#btnWithdraw").show(); }

                        $('#noticeModal .content-popup').html($html);

                        if (userpoint > 99) {
                            getgifbonus();
                        }
                        $('#noticeModal').modal('show');
                    }
                }
            });

            $('body').delegate('.reLoad', 'click', function () {
                location.reload();
            })
        </script>
        @break

        @case('flip')
        @foreach($result->group->items as $item)
            <input type="hidden" class="image_gift"
                   value="{{ \App\Library\MediaHelpers::media($item->image) }}">
        @endforeach
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
        <script type="text/javascript">
            var numrollbyorder = 0;
            document.addEventListener('touchmove', function (event) {
                if (event.scale !== 1) { event.preventDefault(); }
            }, false);
            var lastTouchEnd = 0;
            document.addEventListener('touchend', function (event) {
                var now = (new Date()).getTime();
                if (now - lastTouchEnd <= 300) {
                    event.preventDefault();
                }
                lastTouchEnd = now;
            }, false);

            $(document).ready(function(e){
                initial();
                $('.play').click(function(){
                    roll_check = true;
                    $('.boxflip img.flip-box-front').each(function(){
                        $(this).attr('src','{{ \App\Library\MediaHelpers::media($result->group->params->image_static) }}');
                    })
                    $('.boxflip .flip-box-front').css({'transform': 'rotateY(0deg)'});
                    $('.boxflip .flip-box-front').parent().css({'transform': 'rotateY(0deg)'});
                    $('.boxflip .flip-box-front').prev().removeClass('transparent');
                    $('.boxflip .flip-box-front').addClass('img_remove');
                    $('.num-play-try').hide();
                    $('.play').hide();
                    //$('.continue').hide();
                    $('#type_play').val('real');
                })
                $('.num-play-try').click(function(){
                    roll_check = true;
                    $('.boxflip img.flip-box-front').each(function(){
                        $(this).attr('src','{{ \App\Library\MediaHelpers::media($result->group->params->image_static) }}');
                    })
                    $('.boxflip .flip-box-front').css({'transform': 'rotateY(0deg)'});
                    $('.boxflip .flip-box-front').parent().css({'transform': 'rotateY(0deg)'});
                    $('.boxflip .flip-box-front').prev().removeClass('transparent');
                    $('.boxflip img.flip-box-front').addClass('img_remove');
                    $('.num-play-try').hide();
                    $('.play').hide();
                    //$('.continue').hide();
                    $('#type_play').val('try');
                })
                function initial(){
                    gift_list = [];
                    $('.image_gift').each(function(){
                        gift_list.push({'image':$(this).val()})
                    })
                    gift_list = shuffle(gift_list);
                    var i=0;
                    $('.boxflip img.flip-box-front').each(function(){
                        $(this).attr('src',gift_list[i].image);
                        i++;
                    })
                }
                var saleoffpass = "";
                var saleoffmessage = "";
                var game_type_value = "";
                var gift_revice="";
                var userpoint = 0;
                var roll_check = true;
                var num_loop = 4;
                var angle_gift = '';
                var num_gift = '{{count($result->group->items)}}';
                var gift_detail = '';
                var gift_list = '';
                var num_roll_remain = 0;
                var angles = 0;
                var free_wheel = 0;
                var arrDiscount = '';
                var showwithdrawbtn = true;
                //Click nút lật
                $('body').delegate('.img_remove', 'click', function(){
                    $('.boxflip .flip-box-front').removeClass('img_remove');
                    $('.boxflip .flip-box-front').removeClass('active');
                    $('.boxflip .flip-box-front').addClass('noactive');
                    saleoffpass = $("#saleoffpass").val();
                    $(this).removeClass('noactive');
                    $(this).addClass('active');
                    if(roll_check){
                        roll_check = false;
                        numrolllop = $("#numrolllop").val();
                        $.ajax({
                            url: '/minigame-play',
                            datatype:'json',
                            data:{
                                _token: $('meta[name="csrf-token"]').attr('content'),
                                id: '{{$result->group->id}}',
                                numrollbyorder: numrollbyorder,
                                typeRoll : $('#type_play').val(),
                                saleoffpass:saleoffpass,
                                numrolllop:numrolllop,
                            },
                            type: 'post',
                            success: function (data) {

                                gift_detail = data.gift_detail;
                                setTimeout(function(){
                                    if(gift_detail != undefined){
                                        $('.boxflip .active').attr('src',gift_detail.image);
                                        $('.boxflip .active').css({'transform': 'rotateY(180deg)'});
                                        $('.boxflip .active').prev().addClass('transparent');
                                        $('.boxflip .active').parent().css({'transform': 'rotateY(180deg)'});
                                    }
                                    $('.boxflip .flip-box-front').prev().removeClass('transparent');
                                    $('.boxflip .flip-box-front').removeClass('active');
                                },1000);
                                if (data.status == 4) {
                                    location.href='/login';
                                } else if (data.status == 3) {
                                    roll_check = true;
                                    $('#naptheModal').modal('show');
                                    return;
                                } else if (data.status == 0) {
                                    roll_check = true;
                                    $("#btnWithdraw").hide();
                                    $('#noticeModal .content-popup').text(data.msg);
                                    $('#noticeModal').modal('show');
                                    $('.num-play-try').show();
                                    $('.play').show();
                                    //$('.continue').show();
                                    // if($('#type_play').val() == "real")
                                    // {
                                    //     $('.continue').html("Chơi tiếp");
                                    // }
                                    // else
                                    // {
                                    //     $('.continue').html("Chơi thử tiếp");
                                    // }
                                    return;
                                }
                                showwithdrawbtn = data.showwithdrawbtn;
                                numrollbyorder = parseInt(data.numrollbyorder) + 1;
                                free_wheel = data.free_wheel;
                                //arrDiscount = data.arrDiscount;
                                game_type_value = data.game_type_value;
                                gift_list = data.listgift;
                                gift_list = shuffle(gift_list);
                                gift_revice = data.arr_gift;
                                arrxgt = data.xgt;
                                if (data.xgt > 0) {
                                    xvalue = data.xgt[data.xgt.length - 1];
                                } else {
                                    xvalue = 0;
                                }
                                value_gif_bonus = data.value_gif_bonus;
                                msg_random_bonus = data.msg_random_bonus;
                                xvalueaDD = data.xValue;
                                free_wheel = data.free_wheel;
                                num_roll_remain = gift_detail.num_roll_remain;

                                if($('#type_play').val()=='real'){
                                    userpoint = data.userpoint;
                                    if(userpoint<100){
                                        $(".item_spin_progress_bubble").css("width", userpoint + "%")
                                    }else{
                                        $(".item_spin_progress_bubble").css("width", "100%");
                                        $(".item_spin_progress_bubble").addClass('clickgif');
                                    }
                                    $(".item_spin_progress_percent").html(userpoint + "/100 point");
                                    $("#saleoffpass").val("");
                                    //saleoffmessage = data.saleMessage;
                                }

                                setTimeout(function(){
                                    var i=0;
                                    $('.boxflip img.noactive').each(function(){
                                        $(this).attr('src',gift_list[i].image);
                                        $(this).css({'transform': 'rotateY(180deg)'});
                                        $(this).prev().addClass('transparent');
                                        $(this).parent().css({'transform': 'rotateY(180deg)'});
                                        i++;
                                    });
                                }, 1500);

                                $("#btnWithdraw").show();
                                if (gift_detail.winbox == 0) {
                                    $("#btnWithdraw").hide();
                                } else {
                                    if (gift_detail.gift_type == 0) {
                                        $("#btnWithdraw").html("Rút " + $("#withdrawruby_" + gift_detail.game_type).val());
                                        $("#btnWithdraw").attr('href', '/withdrawitem-' + gift_detail.game_type);
                                    } else if (gift_detail.gift_type == 1) {
                                        $("#btnWithdraw").html("Kiểm tra nick trúng");
                                        $("#btnWithdraw").attr('href', '/minigame-logacc-' + '{{$result->group->id}}');
                                        // } else if (gift_detail.gift_type == 'nrocoin') {
                                        //     $("#btnWithdraw").html("Rút vàng");
                                        //     $("#btnWithdraw").attr('href', '/withdrawservice?id=' + $("#ID_NROCOIN").val());
                                        // } else if (gift_detail.gift_type == 'nrogem') {
                                        //     $("#btnWithdraw").html("Rút ngọc");
                                        //     $("#btnWithdraw").attr('href', '/withdrawservice?id=' + $("#ID_NROGEM").val());
                                        // } else if (gift_detail.gift_type == 'nroxu') {
                                        //     $("#btnWithdraw").html("Rút xu");
                                        //     $("#btnWithdraw").attr('href', '/withdrawservice?id=' + $("#ID_NINJAXU").val());
                                    } else if (gift_detail.gift_type == 2) {
                                        $("#btnWithdraw").html("Load lại trang");
                                        $("#btnWithdraw").removeAttr("href");
                                        $("#btnWithdraw").addClass('reLoad');
                                    } else {
                                        $("#btnWithdraw").hide();
                                    }

                                }

                                if (gift_revice.length > 0) {
                                    $html = "";
                                    $strDiscountcode="";
                                    // if(saleoffmessage.length > 0)
                                    // {
                                    //     $html += "<br/><span style='font-size: 14px;color: #f90707;font-style: italic;display: block;text-align: center;'>"+saleoffmessage+"</span><br/>";
                                    // }

                                    var flag_bonus = true;

                                    if (value_gif_bonus.length > 0){
                                        for (let i = 0; i < value_gif_bonus.length; i++ ){
                                            if (parseInt(value_gif_bonus[i]) > 0){
                                                flag_bonus = false;
                                            }
                                        }
                                    }

                                    var c_game_type_value = '';
                                    if (game_type_value){
                                        c_game_type_value = " " + game_type_value;
                                    }

                                    if($('#type_play').val() == "real")
                                    {
                                        if(gift_revice.length == 1)
                                        {
                                            // if(arrDiscount[0] != "")
                                            // {
                                            //     $strDiscountcode="<span>Bạn nhận được 1 mã giảm giá khuyến mãi đi kèm: <b>"+arrDiscount[0]+"</b></span>";
                                            // }
                                            if (!flag_bonus){//trường hợp bonus.
                                                var total_vp = parseInt(gift_revice[0]['parrent'].params.value) + parseInt(value_gif_bonus[0]);

                                                $html += "<span>Kết quả: Bạn đã trúng " + total_vp + c_game_type_value +"</span><br/>";
                                                if (gift_detail.winbox == 1) {

                                                    $html += "<span>Mua X1: Nhận được " + total_vp + game_type_value + "</span><br/>";
                                                    $html += "<span>Tổng cộng: " + (parseInt(gift_revice[0]['parrent'].params.value) * (parseInt(xvalueaDD[0])) + parseInt(value_gif_bonus[0])) + game_type_value +"</span>";
                                                }
                                            }else {
                                                $html += "<span>Kết quả: "+gift_revice[0]["title"]+"</span><br/>";
                                                if(gift_detail.winbox == 1){
                                                    $html += "<span>Mua X1: Nhận được "+gift_gift_revice[$i]['parrent'].title+"</span><br/>";
                                                    //$html += "<span>Lật được "+(xvalue+3)+" hình trùng nhau. Nhận X"+(xvalueaDD[0])+" giải thưởng: "+gift_revice[0]["parrent"].params.value*(xvalueaDD[0])+""+msg_random_bonus[0]+"</span><br/>"+$strDiscountcode;
                                                    $html += "<span>Tổng cộng: "+parseInt(gift_revice[0]["parrent"].params.value)*(parseInt(xvalueaDD[0]))+"</span>";
                                                }
                                            }

                                        }
                                        else
                                        {
                                            if (!flag_bonus) {//trường hợp bonus.

                                                $totalRevice = 0;
                                                $html += "<span>Kết quả: Nhận "+gift_revice.length+" phần thưởng cho "+gift_revice.length+" lượt lật.</span><br/>";
                                                $html += "<span><b>Mua X"+gift_revice.length+":</b></span><br/>";
                                                for ($i = 0; $i < gift_revice.length; $i++) {

                                                    var total_vp = parseInt(gift_revice[$i]['parrent'].params.value) + parseInt(value_gif_bonus[$i]);

                                                    $html += "<span>Lần quay " + ($i + 1) + ": Bạn đã trúng " + total_vp + c_game_type_value;
                                                    if (gift_revice[$i].winbox == 1) {

                                                        $html += " - nhận được: " + gift_revice[$i]['parrent'].params.value + " X" + (parseInt(xvalueaDD[$i])) + " = " + (parseInt(gift_revice[$i]['parrent'].params.value) * (parseInt(xvalueaDD[$i])) + parseInt(value_gif_bonus[$i])) + "" + c_game_type_value + "</span><br/><br/>";
                                                    } else {
                                                        $html += "<br/><br/>";
                                                    }
                                                    $totalRevice += parseInt(gift_revice[$i]['parrent'].params.value) * (parseInt(xvalueaDD[$i])) + parseInt(value_gif_bonus[$i]);
                                                }

                                                $html += "<span><b>Tổng cộng: " + $totalRevice + c_game_type_value + " </b></span>";
                                            }else{
                                                $totalRevice = 0;
                                                $html += "<span>Kết quả: Nhận "+gift_revice.length+" phần thưởng cho "+gift_revice.length+" lượt lật.</span><br/>";
                                                $html += "<span><b>Mua X"+gift_revice.length+":</b></span><br/>";
                                                for($i=0;$i<gift_revice.length;$i++)
                                                {
                                                    // if(arrDiscount[$i] != "")
                                                    // {
                                                    //     $strDiscountcode="<span>Bạn nhận được 1 mã giảm giá khuyến mãi đi kèm: <b>"+arrDiscount[$i]+"</b></span>";
                                                    // }
                                                    $html += "<span>Lần lật "+($i + 1)+": "+gift_revice[$i]["title"];
                                                    if(gift_revice[$i].winbox == 1){
                                                        $html +=" - nhận được: "+gift_revice[$i]['parrent'].title+" X"+(parseInt(xvalueaDD[$i]))+" = "+parseInt(gift_revice[$i]['parrent'].title)*(parseInt(xvalueaDD[$i]))+""+msg_random_bonus[$i]+"</span><br/>"+$strDiscountcode+"<br/>";
                                                    }
                                                    else
                                                    {
                                                        $html +=""+msg_random_bonus[$i]+"<br/>"+$strDiscountcode+"<br/>";
                                                    }
                                                    $totalRevice +=  parseInt(gift_revice[$i]['parrent'].params.value)*(parseInt(xvalueaDD[$i]))+ parseInt(value_gif_bonus[$i]);
                                                }

                                                $html += "<span><b>Tổng cộng: "+$totalRevice+"</b></span>";
                                            }
                                        }
                                    }
                                    else
                                    {
                                        $("#btnWithdraw").hide();
                                        if(gift_revice.length == 1)
                                        {
                                            if (!flag_bonus){//trường hợp bonus.
                                                var total_vp = parseInt(gift_revice[0]['parrent'].params.value) + parseInt(value_gif_bonus[0]);

                                                $html += "<span>Kết quả chơi thử: Bạn đã trúng " + total_vp + c_game_type_value +"</span><br/>";
                                                if (gift_detail.winbox == 1) {

                                                    $html += "<span>Mua X1: Nhận được " + total_vp + game_type_value + "</span><br/>";
                                                    $html += "<span>Tổng cộng: " + (parseInt(gift_revice[0]['parrent'].params.value) * (parseInt(xvalueaDD[0])) + parseInt(value_gif_bonus[0])) + game_type_value +"</span>";
                                                }
                                            }else {
                                                $html += "<span>Kết quả chơi thử: "+gift_revice[0]["title"]+"</span><br/>";
                                                if(gift_detail.winbox == 1){
                                                    $html += "<span>Mua X1: Nhận được "+gift_gift_revice[$i]['parrent'].title+"</span><br/>";
                                                    //$html += "<span>Lật được "+(xvalue+3)+" hình trùng nhau. Nhận X"+(xvalueaDD[0])+" giải thưởng: "+gift_revice[0]["parrent"].params.value*(xvalueaDD[0])+""+msg_random_bonus[0]+"</span><br/>"+$strDiscountcode;
                                                    $html += "<span>Tổng cộng: "+parseInt(gift_revice[0]["parrent"].params.value)*(parseInt(xvalueaDD[0]))+"</span>";
                                                }
                                            }
                                        }
                                        else
                                        {
                                            if (!flag_bonus) {//trường hợp bonus.

                                                $totalRevice = 0;
                                                $html += "<span>Kết quả chơi thử: Nhận "+gift_revice.length+" phần thưởng cho "+gift_revice.length+" lượt lật.</span><br/>";
                                                $html += "<span><b>Mua X"+gift_revice.length+":</b></span><br/>";
                                                for ($i = 0; $i < gift_revice.length; $i++) {

                                                    var total_vp = parseInt(gift_revice[$i]['parrent'].params.value) + parseInt(value_gif_bonus[$i]);

                                                    $html += "<span>Lần quay " + ($i + 1) + ": Bạn đã trúng " + total_vp + c_game_type_value;
                                                    if (gift_revice[$i].winbox == 1) {

                                                        $html += " - nhận được: " + gift_revice[$i]['parrent'].params.value + " X" + (parseInt(xvalueaDD[$i])) + " = " + (parseInt(gift_revice[$i]['parrent'].params.value) * (parseInt(xvalueaDD[$i])) + parseInt(value_gif_bonus[$i])) + "" + c_game_type_value + "</span><br/><br/>";
                                                    } else {
                                                        $html += "<br/><br/>";
                                                    }
                                                    $totalRevice += parseInt(gift_revice[$i]['parrent'].params.value) * (parseInt(xvalueaDD[$i])) + parseInt(value_gif_bonus[$i]);
                                                }

                                                $html += "<span><b>Tổng cộng: " + $totalRevice + c_game_type_value + " </b></span>";
                                            }else{
                                                $totalRevice = 0;
                                                $html += "<span>Kết quả chơi thử: Nhận "+gift_revice.length+" phần thưởng cho "+gift_revice.length+" lượt lật.</span><br/>";
                                                $html += "<span><b>Mua X"+gift_revice.length+":</b></span><br/>";
                                                for($i=0;$i<gift_revice.length;$i++)
                                                {
                                                    // if(arrDiscount[$i] != "")
                                                    // {
                                                    //     $strDiscountcode="<span>Bạn nhận được 1 mã giảm giá khuyến mãi đi kèm: <b>"+arrDiscount[$i]+"</b></span>";
                                                    // }
                                                    $html += "<span>Lần lật "+($i + 1)+": "+gift_revice[$i]["title"];
                                                    if(gift_revice[$i].winbox == 1){
                                                        $html +=" - nhận được: "+gift_revice[$i]['parrent'].title+" X"+(parseInt(xvalueaDD[$i]))+" = "+parseInt(gift_revice[$i]['parrent'].title)*(parseInt(xvalueaDD[$i]))+""+msg_random_bonus[$i]+"</span><br/>"+$strDiscountcode+"<br/>";
                                                    }
                                                    else
                                                    {
                                                        $html +=""+msg_random_bonus[$i]+"<br/>"+$strDiscountcode+"<br/>";
                                                    }
                                                    $totalRevice +=  parseInt(gift_revice[$i]['parrent'].params.value)*(parseInt(xvalueaDD[$i]))+ parseInt(value_gif_bonus[$i]);
                                                }

                                                $html += "<span><b>Tổng cộng: "+$totalRevice+"</b></span>";
                                            }
                                        }
                                    }
                                }
                                if (!showwithdrawbtn) {
                                    $("#btnWithdraw").hide();
                                }else{ $("#btnWithdraw").show(); }

                                $('#noticeModal .content-popup').html($html);
                                if (userpoint > 99) {
                                    getgifbonus();
                                }
                                setTimeout(function(){
                                    $('#noticeModal').modal('show');
                                    //$('.continue').show();
                                    $('.num-play-try').show();
                                    $('.play').show();
                                    // if($('#type_play').val() == "real")
                                    // {
                                    //     $('.continue').html("Chơi tiếp");
                                    // }
                                    // else
                                    // {
                                    //     $('.continue').html("Chơi thử tiếp");
                                    // }
                                },2500);
                            },
                            error: function(){
                                $('#noticeModal .content-popup').text('Có lỗi xảy ra. Vui lòng thử lại!');
                                $('#noticeModal').modal('show');
                                roll_check = true;
                            }
                        })
                    }
                });


                function getgifbonus() {
                    if($('#checkPoint').val() != "1"){
                        return;
                    }
                    $.ajax({
                        url: '/minigame-bonus',
                        datatype: 'json',
                        data: {
                            _token: $('meta[name="csrf-token"]').attr('content'),
                            id: '{{$result->group->id}}',
                        },
                        type: 'POST',
                        success: function(data) {
                            if (data.status == 0) {
                                $('#noticeModal .content-popup').text(data.msg);
                                $('#noticeModal').modal('show');
                                return;
                            }

                            var flag_bonus = true;
                            var c_game_type_value = '';

                            if (data.game_type_value){
                                c_game_type_value = " " + data.game_type_value;
                            }

                            if (data.value_gif_bonus.length > 0){
                                for (let i = 0; i < data.value_gif_bonus.length; i++ ){
                                    if (parseInt(data.value_gif_bonus[i]) > 0){
                                        flag_bonus = false;
                                    }
                                }
                            }

                            var total_vp = parseInt(data.arr_gift[0]['parrent'].params.value) + parseInt(data.value_gif_bonus[0]);

                            if (!flag_bonus){
                                var html_bonus = "";
                                html_bonus += "</br>";
                                html_bonus += "</br>";
                                html_bonus += "Nổ hũ may mắn - bạn đã trúng thêm " + total_vp + c_game_type_value;
                                $('#noticeModal .content-popup').append(html_bonus);

                            }else{
                                var html_bonus = "";
                                html_bonus += "</br>";
                                html_bonus += "</br>";
                                html_bonus += data.msg + " - " + data.arr_gift[0].title;
                                $('#noticeModal .content-popup').append(html_bonus);
                            }

                            //$("#noticeModalNoHu #btnWithdraw").hide();
                            $('#noticeModal').modal('show');
                            var userpoint = data.userpoint;
                            if(userpoint<100){
                                $(".item_spin_progress_bubble").css("width", data.userpoint + "%");
                                $(".item_spin_progress_bubble").removeClass('clickgif');
                            }else{
                                $(".item_spin_progress_bubble").css("width", "100%");
                                $(".item_spin_progress_bubble").addClass('clickgif');
                            }
                            $(".item_spin_progress_percent").html(data.userpoint + "/100 point");
                            $(".pyro").show();
                            setTimeout(function(){
                                $(".pyro").hide();
                            },6000)
                        },
                        error: function() {
                            $('#noticeModal .content-popup').text('Có lỗi xảy ra. Vui lòng thử lại!');
                            $('#noticeModal').modal('show');
                        }
                    })
                }

                $('body').delegate('.reLoad','click',function(){
                    location.reload();
                })

                function shuffle(array) {
                    var currentIndex = array.length, temporaryValue, randomIndex;
                    while (0 !== currentIndex) {
                        randomIndex = Math.floor(Math.random() * currentIndex);
                        currentIndex -= 1;
                        temporaryValue = array[currentIndex];
                        array[currentIndex] = array[randomIndex];
                        array[randomIndex] = temporaryValue;
                    }
                    return array;
                }

                // $('.continue').click(function(){
                //     $('.boxflip').html(document.getElementById('boxfliphide').innerHTML);
                //     $('.continue').hide();
                //     $('.play').hide();
                //     $('.num-play-try').hide();
                //     roll_check = true;
                // });
            });

        </script>
        @break

        @case('slotmachine')
        <script>
            function animate(options) {
                var start = performance.now();
                requestAnimationFrame(function animate(time) {
                    var timeFraction = (time - start) / options.duration;
                    if (timeFraction > 1) timeFraction = 1;
                    var progress = options.timing(timeFraction)
                    options.draw(progress);
                    if (timeFraction < 1) {
                        requestAnimationFrame(animate);
                    }
                });
            }

            $(document).ready(function(e) {
                $(".thele").on("click", function(){
                    $("#theleModal").modal('show');
                })
                $(".tylevongquay").on("click", function(){
                    $("#tylevongquayModal").modal('show');
                })
                $(".uytin").on("click", function(){
                    $("#uytinModal").modal('show');
                })
                $(".luotquay").on("click", function(){
                    $("#luotquayModal").modal('show');
                })
                $(".topquaythuong").on("click", function(){
                    $("#topquaythuongModal").modal('show');
                })


                var tyleLoop = 0;
                var saleoffpass = "";
                //var saleoffmessage = "";
                var game_type_value = "";
                var gift_revice="";
                var userpoint = 0;
                var numrollbyorder = 0;
                var roll_check = true;
                var num_loop = 3;
                var xvalue=0;
                var xvalueaDD = 0;
                var num = 0;
                var num_current = 0;
                var target = 0;
                var arrxgt;
                var free_wheel = 0;
                var typeRoll = "real";
                var value_gif_bonus='';
                var msg_random_bonus = '';
                var arrDiscount = '';
                var slot1_fake;
                var slot2_fake;
                var slot3_fake;
                var showwithdrawbtn = true;
                //Click nút quay
                $('body').delegate('#start-played', 'click', function() {

                    if (roll_check) {
                        //fakeLoop();
                        roll_check = false;
                        saleoffpass = $("#saleoffpass").val();
                        typeRoll = "real";
                        numrolllop = $("#numrolllop").val();
                        $.ajax({
                            url: '/minigame-play',
                            datatype: 'json',
                            data: {
                                _token: $('meta[name="csrf-token"]').attr('content'),
                                id: '{{$result->group->id}}',
                                numrolllop: numrolllop,
                                numrollbyorder: numrollbyorder,
                                typeRoll: typeRoll,
                                saleoffpass: saleoffpass,
                            },
                            type: 'POST',
                            success: function(data) {
                                if (data.status == 4) {
                                    location.href='/login?return_url='+window.location.href;
                                    return;
                                } else if (data.status == 3) {
                                    roll_check = true;
                                    $('#naptheModal').modal('show')
                                    return;
                                } else if (data.status == 0) {
                                    roll_check = true;
                                    $('#noticeModal .content-popup').text(data.msg);
                                    $('#noticeModal').modal('show');
                                    return;
                                }
                                roll_check = true;
                                gift_detail = data.gift_detail;
                                var num1=0;
                                var num2=0;
                                var num3=0;
                                if(gift_detail.winbox == 0){
                                    num1 = parseInt(gift_detail.order)+1;
                                    num2 = num1 + 1;
                                    if(num2 > parseInt('{{count($result->group->items)}}')){
                                        num2 = num2 - parseInt('{{count($result->group->items)}}');
                                    }
                                    num3 = num2 + 1;
                                    if(num3 > parseInt('{{count($result->group->items)}}')){
                                        num3 = num3 - parseInt('{{count($result->group->items)}}');
                                    }
                                }else{
                                    num1 = parseInt(gift_detail.order)+1;
                                    num2 = parseInt(gift_detail.order)+1;
                                    num3 = parseInt(gift_detail.order)+1;
                                }


                                game_type_value = data.game_type_value;
                                gift_revice = data.arr_gift;
                                showwithdrawbtn = data.showwithdrawbtn;
                                numrollbyorder = parseInt(data.numrollbyorder) + 1;
                                arrxgt = data.xgt;
                                if (arrxgt > 0) {
                                    xvalue = arrxgt[arrxgt.length - 1];
                                } else {
                                    xvalue = 0;
                                }
                                value_gif_bonus = data.value_gif_bonus;
                                msg_random_bonus = data.msg_random_bonus;
                                xvalueaDD = data.xValue;
                                free_wheel = data.free_wheel;
                                userpoint = data.userpoint;
                                if(userpoint<100){
                                    $(".item_spin_progress_bubble").css("width", data.userpoint + "%")
                                }else{
                                    $(".item_spin_progress_bubble").css("width", "100%");
                                    $(".item_spin_progress_bubble").addClass('clickgif');
                                }
                                $(".item_spin_progress_percent").html(data.userpoint + "/100 point");
                                $("#saleoffpass").val("");
                                tyleLoop = 1;
                                doSlot(num1,num2,num3);

                            },
                            error: function() {
                                $('#noticeModal .content-popup').text('Có lỗi xảy ra. Vui lòng thử lại!');
                                $('#noticeModal').modal('show');
                            }
                        })
                    }
                });

                function getgifbonus() {
                    if($('#checkPoint').val() != "1"){
                        return;
                    }
                    $.ajax({
                        url: '/minigame-bonus',
                        datatype: 'json',
                        data: {
                            _token: $('meta[name="csrf-token"]').attr('content'),
                            id: '{{$result->group->id}}',
                        },
                        type: 'POST',
                        success: function(data) {
                            if (data.status == 0) {
                                $('#noticeModal .content-popup').text(data.msg);
                                $('#noticeModal').modal('show');
                                return;
                            }

                            var flag_bonus = true;
                            var c_game_type_value = '';

                            if (data.game_type_value){
                                c_game_type_value = " " + data.game_type_value;
                            }

                            if (data.value_gif_bonus.length > 0){
                                for (let i = 0; i < data.value_gif_bonus.length; i++ ){
                                    if (parseInt(data.value_gif_bonus[i]) > 0){
                                        flag_bonus = false;
                                    }
                                }
                            }

                            var total_vp = parseInt(data.arr_gift[0]['parrent'].params.value) + parseInt(data.value_gif_bonus[0]);

                            if (!flag_bonus){
                                var html_bonus = "";
                                html_bonus += "</br>";
                                html_bonus += "</br>";
                                html_bonus += "Nổ hũ may mắn - bạn đã trúng thêm " + total_vp + c_game_type_value;
                                $('#noticeModal .nohuthang').append(html_bonus);

                            }else{
                                var html_bonus = "";
                                html_bonus += "</br>";
                                html_bonus += "</br>";
                                html_bonus += data.msg + " - " + data.arr_gift[0].title;
                                $('#noticeModal .nohuthang').append(html_bonus);
                            }

                            $('#noticeModal').modal('show');
                            var userpoint = data.userpoint;
                            if(userpoint<100){
                                $(".item_spin_progress_bubble").css("width", data.userpoint + "%");
                                $(".item_spin_progress_bubble").removeClass('clickgif');
                            }else{
                                $(".item_spin_progress_bubble").css("width", "100%");
                                $(".item_spin_progress_bubble").addClass('clickgif');
                            }
                            $(".item_spin_progress_percent").html(data.userpoint + "/100 point");
                            $(".pyro").show();
                            setTimeout(function(){
                                $(".pyro").hide();
                            },6000)
                        },
                        error: function() {
                            $('#noticeModal .content-popup').text('Có lỗi xảy ra. Vui lòng thử lại!');
                            $('#noticeModal').modal('show');
                        }
                    })
                }

                $('body').delegate('.num-play-try', 'click', function() {
                    if (roll_check) {
                        //fakeLoop();
                        roll_check = false;
                        saleoffpass = $("#saleoffpass").val();
                        typeRoll = "try";
                        numrolllop = $("#numrolllop").val();
                        $.ajax({
                            url: '/minigame-play',
                            datatype: 'json',
                            data: {
                                _token: $('meta[name="csrf-token"]').attr('content'),
                                id: '{{$result->group->id}}',
                                numrolllop: numrolllop,
                                numrollbyorder: numrollbyorder,
                                typeRoll: typeRoll,
                                saleoffpass: saleoffpass,
                            },
                            type: 'POST',
                            success: function(data) {
                                if (data.status == 4) {
                                    location.href='/login';
                                    return;
                                } else if (data.status == 3) {
                                    $('#naptheModal').modal('show')
                                    return;
                                } else if (data.status == 0) {
                                    roll_check = true;
                                    $('#noticeModal .content-popup').text(data.msg);
                                    $('#noticeModal').modal('show');
                                    return;
                                }
                                roll_check = true;
                                gift_detail = data.gift_detail;
                                var num1=0;
                                var num2=0;
                                var num3=0;
                                if(gift_detail.winbox == 0){
                                    num1 = parseInt(gift_detail.order)+1;
                                    num2 = num1 + 1;
                                    if(num2 > parseInt('{{count($result->group->items)}}')){
                                        num2 = num2 - parseInt('{{count($result->group->items)}}');
                                    }
                                    num3 = num2 + 1;
                                    if(num3 > parseInt('{{count($result->group->items)}}')){
                                        num3 = num3 - parseInt('{{count($result->group->items)}}');
                                    }
                                }else{
                                    num1 = parseInt(gift_detail.order)+1;
                                    num2 = parseInt(gift_detail.order)+1;
                                    num3 = parseInt(gift_detail.order)+1;
                                }
                                tyleLoop = 1;
                                doSlot(num1,num2,num3);

                                gift_revice = data.arr_gift;
                                showwithdrawbtn = data.showwithdrawbtn;
                                numrollbyorder = parseInt(data.numrollbyorder) + 1;
                                arrxgt = data.xgt;
                                if (arrxgt > 0) {
                                    xvalue = arrxgt[arrxgt.length - 1];
                                } else {
                                    xvalue = 0;
                                }
                                value_gif_bonus = data.value_gif_bonus;
                                msg_random_bonus = data.msg_random_bonus;
                                xvalueaDD = data.xValue;
                                free_wheel = data.free_wheel;
                                userpoint = data.userpoint;
                                if(userpoint<100){
                                    $(".item_spin_progress_bubble").css("width", data.userpoint + "%")
                                }else{
                                    $(".item_spin_progress_bubble").css("width", "100%");
                                    $(".item_spin_progress_bubble").addClass('clickgif');
                                }
                                $(".item_spin_progress_percent").html(data.userpoint + "/100 point");
                                $("#saleoffpass").val("");

                            },
                            error: function() {
                                $('#noticeModal .content-popup').text('Có lỗi xảy ra. Vui lòng thử lại!');
                                $('#noticeModal').modal('show');
                            }
                        })
                    }
                });

                // function fakeLoop(){
                //     document.getElementById("slot1").className='a1'
                //     document.getElementById("slot2").className='a1'
                //     document.getElementById("slot3").className='a1'
                //     var i1 = 0;
                //     var i2 = 0;
                //     var i3 = 0;
                //     slot1_fake = setInterval(spin1_fake, 50);
                //     slot2_fake = setInterval(spin2_fake, 50);
                //     slot3_fake = setInterval(spin3_fake, 50);

                //     function spin1_fake() {
                //         i1++;
                //         slotTile = document.getElementById("slot1");
                //         if (slotTile.className=="a{{count($result->group->items)}}"){
                //             slotTile.className = "a0";
                //         }
                //         slotTile.className = "a"+(parseInt(slotTile.className.substring(1))+1)
                //     }
                //     function spin2_fake(){
                //         i2++;
                //         slotTile = document.getElementById("slot2");
                //         if (slotTile.className=="a{{count($result->group->items)}}"){
                //             slotTile.className = "a0";
                //         }
                //         slotTile.className = "a"+(parseInt(slotTile.className.substring(1))+1)
                //     }
                //     function spin3_fake(){
                //         i3++;
                //         slotTile = document.getElementById("slot3");
                //         if (slotTile.className=="a{{count($result->group->items)}}"){
                //             slotTile.className = "a0";
                //         }
                //         slotTile.className = "a"+(parseInt(slotTile.className.substring(1))+1)
                //     }
                // }


                function doSlot(one, two, three){
                    // clearInterval(slot1_fake);
                    // clearInterval(slot2_fake);
                    // clearInterval(slot3_fake);
                    document.getElementById("slot1").className='a1'
                    document.getElementById("slot2").className='a1'
                    document.getElementById("slot3").className='a1'
                    var numChanges = randomInt(1,4)*parseInt('{{count($result->group->items)}}');
                    var numeberSlot1 = numChanges+one
                    var numeberSlot2 = numChanges+2*parseInt('{{count($result->group->items)}}')+two
                    var numeberSlot3 = numChanges+4*parseInt('{{count($result->group->items)}}')+three
                    var i1 = 0;
                    var i2 = 0;
                    var i3 = 0;
                    slot1 = setInterval(spin1, 50);
                    slot2 = setInterval(spin2, 50);
                    slot3 = setInterval(spin3, 50);

                    function spin1() {
                        i1++;
                        if (tyleLoop == 1) {
                            if (i1 >= numeberSlot1) {
                                clearInterval(slot1);
                                return null;
                            }
                        }
                        slotTile = document.getElementById("slot1");
                        if (slotTile.className=="a{{count($result->group->items)}}"){
                            slotTile.className = "a0";
                        }
                        slotTile.className = "a"+(parseInt(slotTile.className.substring(1))+1)
                    }
                    function spin2(){
                        i2++;
                        if (tyleLoop == 1) {
                            if (i2 >= numeberSlot2) {
                                clearInterval(slot2);

                                return null;
                            }
                        }
                        slotTile = document.getElementById("slot2");
                        if (slotTile.className=="a{{count($result->group->items)}}"){
                            slotTile.className = "a0";
                        }
                        slotTile.className = "a"+(parseInt(slotTile.className.substring(1))+1)
                    }
                    function spin3(){
                        i3++;
                        if (tyleLoop == 1) {
                            if (i3 >= numeberSlot3) {
                                clearInterval(slot3);
                                testWin();
                                return null;
                            }
                        }
                        slotTile = document.getElementById("slot3");
                        if (slotTile.className=="a{{count($result->group->items)}}"){
                            slotTile.className = "a0";
                        }
                        slotTile.className = "a"+(parseInt(slotTile.className.substring(1))+1)
                    }
                }

                function randomInt(min, max){
                    return Math.floor((Math.random() * (max-min+1)) + min);
                }

                function testWin() {
                    roll_check = true;

                    $("#btnWithdraw").show();
                    if (gift_detail.winbox == 0) {
                        $("#btnWithdraw").hide();
                    } else {
                        if (gift_detail.gift_type == 0) {
                            $("#btnWithdraw").html("Rút " + $("#withdrawruby_" + gift_detail.game_type).val());
                            $("#btnWithdraw").attr('href', '/withdrawitem-' + gift_detail.game_type);
                        } else if (gift_detail.gift_type == 1) {
                            $("#btnWithdraw").html("Kiểm tra nick trúng");
                            $("#btnWithdraw").attr('href', '/minigame-logacc-' + '{{$result->group->id}}');
                            // } else if (gift_detail.gift_type == 'nrocoin') {
                            //     $("#btnWithdraw").html("Rút vàng");
                            //     $("#btnWithdraw").attr('href', '/withdrawservice?id=' + $("#ID_NROCOIN").val());
                            // } else if (gift_detail.gift_type == 'nrogem') {
                            //     $("#btnWithdraw").html("Rút ngọc");
                            //     $("#btnWithdraw").attr('href', '/withdrawservice?id=' + $("#ID_NROGEM").val());
                            // } else if (gift_detail.gift_type == 'nroxu') {
                            //     $("#btnWithdraw").html("Rút xu");
                            //     $("#btnWithdraw").attr('href', '/withdrawservice?id=' + $("#ID_NINJAXU").val());
                        } else if (gift_detail.gift_type == 2) {
                            $("#btnWithdraw").html("Load lại trang");
                            $("#btnWithdraw").removeAttr("href");
                            $("#btnWithdraw").addClass('reLoad');
                        } else {
                            $("#btnWithdraw").hide();
                        }

                    }


                    if (gift_revice.length > 0) {
                        $html = "";
                        $strDiscountcode = "";

                        var flag_bonus = true;

                        if (value_gif_bonus.length > 0){
                            for (let i = 0; i < value_gif_bonus.length; i++ ){
                                if (parseInt(value_gif_bonus[i]) > 0){
                                    flag_bonus = false;
                                }
                            }
                        }

                        var c_game_type_value = '';
                        if (game_type_value){
                            c_game_type_value = "  " + game_type_value;
                        }

                        // if(saleoffmessage.length > 0)
                        // {
                        //     $html += "<br/><span style='font-size: 14px;color: #f90707;font-style: italic;display: block;text-align: center;'>"+saleoffmessage+"</span><br/>";
                        // }

                        if (typeRoll == "real") {
                            if (gift_revice.length == 1) {
                                // if(arrDiscount[0] != "")
                                // {
                                //     $strDiscountcode="<span>Bạn nhận được 1 mã giảm giá khuyến mãi đi kèm: <b>"+arrDiscount[0]+"</b></span>";
                                // }

                                if (!flag_bonus){//trường hợp bonus.
                                    var total_vp = parseInt(gift_revice[0]['parrent'].params.value) + parseInt(value_gif_bonus[0]);

                                    $html += "<span>Kết quả: Bạn đã trúng " + total_vp + c_game_type_value +"</span><br/>";
                                    if (gift_detail.winbox == 1) {

                                        $html += "<span>Mua X1: Nhận được " + total_vp + game_type_value + "</span><br/>";
                                        $html += "<span>Quay được "+(xvalue+3)+" hình trùng nhau. Nhận X"+(xvalueaDD[0])+" giải thưởng: "+ (parseInt(gift_revice[0]['parrent'].params.value) * (parseInt(xvalueaDD[0])) + parseInt(value_gif_bonus[0])) + game_type_value +"</span><br/>";
                                        $html += "<span>Tổng cộng: " + (parseInt(gift_revice[0]['parrent'].params.value) * (parseInt(xvalueaDD[0])) + parseInt(value_gif_bonus[0])) + game_type_value +"</span>";
                                    }
                                }else {
                                    $html += "<span>Kết quả: " + gift_revice[0]["title"] + "</span><br/>";
                                    if (gift_detail.winbox == 1) {
                                        $html += "<span>Mua X1: Nhận được " + gift_revice[0]["parrent"].params.value + "</span><br/>";
                                        $html += "<span>Quay được "+(xvalue+3)+" hình trùng nhau. Nhận X"+(xvalueaDD[0])+" giải thưởng: "+gift_revice[0]["parrent"].params.value*(xvalueaDD[0])+""+msg_random_bonus[0]+"</span><br/>";
                                        $html += "<span>Tổng cộng: " + parseInt(gift_revice[0]["parrent"].params.value) * (parseInt(xvalueaDD[0])) + "</span>";
                                    }
                                }

                            } else {

                                if (!flag_bonus) {//trường hợp bonus.

                                    $totalRevice = 0;
                                    $html += "<span>Kết quả: Nhận " + gift_revice.length + " phần thưởng cho " + gift_revice.length + " lượt quay.</span><br/>";
                                    $html += "<span><b>Mua X" + gift_revice.length + ":</b></span><br/>";
                                    for ($i = 0; $i < gift_revice.length; $i++) {

                                        var total_vp = parseInt(gift_revice[$i]['parrent'].params.value) + parseInt(value_gif_bonus[$i]);

                                        $html += "<span>Lần quay " + ($i + 1) + ": Bạn đã trúng " + total_vp + " " + c_game_type_value;
                                        if (gift_revice[$i].winbox == 1) {

                                            $html += " - nhận được: " + gift_revice[$i]['parrent'].params.value + " X" + (parseInt(xvalueaDD[$i])) + " = " + (parseInt(gift_revice[$i]['parrent'].params.value) * (parseInt(xvalueaDD[$i])) + parseInt(value_gif_bonus[$i])) + "" + c_game_type_value + "</span><br/><br/>";
                                        } else {
                                            $html += "" + msg_random_bonus[$i] + "<br/>" + $strDiscountcode + "<br/>";
                                        }
                                        $totalRevice += parseInt(gift_revice[$i]['parrent'].params.value) * (parseInt(xvalueaDD[$i])) + " " + parseInt(value_gif_bonus[$i]);
                                    }

                                    $html += "<span><b>Tổng cộng: " + $totalRevice + " " + c_game_type_value + " </b></span>";
                                }else{
                                    $totalRevice = 0;
                                    $html += "<span>Kết quả: Nhận " + gift_revice.length + " phần thưởng cho " + gift_revice.length + " lượt quay.</span><br/>";
                                    $html += "<span><b>Mua X" + gift_revice.length + ":</b></span><br/>";
                                    for ($i = 0; $i < gift_revice.length; $i++) {
                                        // if(arrDiscount[$i] != "")
                                        // {
                                        //     $strDiscountcode="<span>Bạn nhận được 1 mã giảm giá khuyến mãi đi kèm: <b>"+arrDiscount[$i]+"</b></span>";
                                        // }
                                        $html += "<span>Lần quay " + ($i + 1) + ": " + gift_revice[$i]["title"];
                                        if (gift_revice[$i].winbox == 1) {
                                            $html += " - nhận được: " + gift_revice[$i]["parrent"].params.value + " X" + (parseInt(xvalueaDD[$i])) + " = " + parseInt(gift_revice[$i]["parrent"].params.value) * (parseInt(xvalueaDD[$i])) + "" + msg_random_bonus[$i] + "</span><br/>"  + "<br/>";
                                        } else {
                                            $html += "" + msg_random_bonus[$i] + "<br/>" + $strDiscountcode + "<br/>";
                                        }
                                        $totalRevice += parseInt(gift_revice[$i]["parrent"].params.value) * (parseInt(xvalueaDD[$i])) + parseInt(value_gif_bonus[$i]);
                                    }

                                    $html += "<span><b>Tổng cộng: " + $totalRevice + "</b></span>";
                                }
                            }
                        } else {
                            $("#btnWithdraw").hide();
                            if (gift_revice.length == 1) {
                                if (!flag_bonus){//trường hợp bonus.
                                    var total_vp = parseInt(gift_revice[0]['parrent'].params.value) + parseInt(value_gif_bonus[0]);

                                    $html += "<span>Kết quả chơi thử: Bạn đã trúng " + total_vp + " " + c_game_type_value +"</span><br/>";
                                    if (gift_detail.winbox == 1) {

                                        $html += "<span>Mua X1: Nhận được " + total_vp + " " + + game_type_value + "</span><br/>";
                                        $html += "<span>Tổng cộng: " + (parseInt(gift_revice[0]['parrent'].params.value) * (parseInt(xvalueaDD[0])) + parseInt(value_gif_bonus[0])) + " " + game_type_value +"</span>";
                                    }
                                }else {
                                    $html += "<span>Kết quả chơi thử: " + gift_revice[0]["title"] + "</span><br/>";
                                    if (gift_detail.winbox == 1) {
                                        $html += "<span>Mua X1: Nhận được " + gift_revice[0]["parrent"].params.value + "</span><br/>";
                                        $html += "<span>Quay được "+(xvalue+3)+" hình trùng nhau. Nhận X"+(xvalueaDD[0])+" giải thưởng: "+gift_revice[0]["parrent"].params.value*(xvalueaDD[0])+""+msg_random_bonus[0]+"</span><br/>";
                                        $html += "<span>Tổng cộng: " + parseInt(gift_revice[0]["parrent"].params.value) * (parseInt(xvalueaDD[0])) + "</span>";
                                    }
                                }
                            } else {
                                if (!flag_bonus) {//trường hợp bonus.

                                    $totalRevice = 0;
                                    $html += "<span>Kết quả chơi thử: Nhận " + gift_revice.length + " phần thưởng cho " + gift_revice.length + " lượt quay.</span><br/>";
                                    $html += "<span><b>Mua X" + gift_revice.length + ":</b></span><br/>";
                                    for ($i = 0; $i < gift_revice.length; $i++) {

                                        var total_vp = parseInt(gift_revice[$i]['parrent'].params.value) + parseInt(value_gif_bonus[$i]);

                                        $html += "<span>Lần quay " + ($i + 1) + ": Bạn đã trúng " + total_vp + c_game_type_value;
                                        if (gift_revice[$i].winbox == 1) {

                                            $html += " - nhận được: " + gift_revice[$i]['parrent'].params.value + " X" + (parseInt(xvalueaDD[$i])) + " = " + (parseInt(gift_revice[$i]['parrent'].params.value) * (parseInt(xvalueaDD[$i])) + parseInt(value_gif_bonus[$i])) + "" + c_game_type_value + "</span><br/><br/>";
                                        } else {
                                            $html += "<br/><br/>";
                                        }
                                        $totalRevice += parseInt(gift_revice[$i]['parrent'].params.value) * (parseInt(xvalueaDD[$i])) + parseInt(value_gif_bonus[$i]);
                                    }

                                    $html += "<span><b>Tổng cộng: " + $totalRevice + c_game_type_value + " </b></span>";
                                }else{
                                    $totalRevice = 0;
                                    $html += "<span>Kết quả chơi thử: Nhận " + gift_revice.length + " phần thưởng cho " + gift_revice.length + " lượt quay.</span><br/>";
                                    $html += "<span><b>Mua X" + gift_revice.length + ":</b></span><br/>";
                                    for ($i = 0; $i < gift_revice.length; $i++) {
                                        // if(arrDiscount[$i] != "")
                                        // {
                                        //     $strDiscountcode="<span>Bạn nhận được 1 mã giảm giá khuyến mãi đi kèm: <b>"+arrDiscount[$i]+"</b></span>";
                                        // }
                                        $html += "<span>Lần quay " + ($i + 1) + ": " + gift_revice[$i]["title"];
                                        if (gift_revice[$i].winbox == 1) {
                                            $html += " - nhận được: " + gift_revice[$i]["parrent"].params.value + " X" + (parseInt(xvalueaDD[$i])) + " = " + parseInt(gift_revice[$i]["parrent"].params.value) * (parseInt(xvalueaDD[$i])) + "" + msg_random_bonus[$i] + "</span><br/>"  + "<br/>";
                                        } else {
                                            $html += "" + msg_random_bonus[$i] + "<br/>" + $strDiscountcode + "<br/>";
                                        }
                                        $totalRevice += parseInt(gift_revice[$i]["parrent"].params.value) * (parseInt(xvalueaDD[$i])) + parseInt(value_gif_bonus[$i]);
                                    }

                                    $html += "<span><b>Tổng cộng: " + $totalRevice + "</b></span>";
                                }
                            }
                        }
                    }
                    if (!showwithdrawbtn) {
                        $("#btnWithdraw").hide();
                    }else{ $("#btnWithdraw").show(); }

                    $('#noticeModal .content-popup').html($html);

                    if (userpoint > 99) {
                        getgifbonus();
                    }
                    $("#noticeModal").modal('show');
                    $("#noticeModal").on("hidden.bs.modal", function () {
                        $('.modal-backdrop').remove();
                        $('body').removeClass( "modal-open" );
                    });
                    if (free_wheel < 1) {
                        $('.num-play-free').hide();
                    } else {
                        $('.num-play-free').html("(Bạn còn " + free_wheel + " lượt quay miễn phí)");
                    }
                }
            });

            $('body').delegate('.reLoad', 'click', function() {
                location.reload();
            })
        </script>
        <script type="text/javascript">
            $( document ).ready(function() {
                $(document).on('scroll',function(){
                    if($(window).width() > 1024){
                        if ($(this).scrollTop() > 100) {
                            $(".nav-bar-container").css("height","90px");
                            $(".nav-bar-category .nav li a").css("line-height","90px");
                            $("header .nav-bar").css("background-color","rgba(0,0,0,0.5)");
                            $(".nav-bar-brand").css("margin","14px");

                        } else {
                            $(".nav-bar-container").css("height","120px");
                            $(".nav-bar-category .nav li a").css("line-height","120px");
                            $(".nav-bar-brand").css("margin","20px 0");
                            $("header .nav-bar").css("background-color","rgba(0,0,0,0.8)");
                        }
                    }

                });
                $('.item_play_intro_viewmore').click(function(){
                    $('.item_play_intro_viewless').css("display","flex");
                    $('.item_play_intro_viewmore').css("display","none");
                    $(".item_play_intro_content").addClass( "showtext" );
                });
                $('.item_play_intro_viewless').click(function(){
                    $('.item_play_intro_viewmore').css("display","flex");
                    $('.item_play_intro_viewless').css("display","none");
                    $(".item_play_intro_content").removeClass( "showtext");
                });
                $('.item_spin_list_more').click(function(){
                    $('.item_spin_list').css("overflow","auto");
                    $('.item_spin_list_less').css("display","block");
                    $(".item_spin_list_more").css("display","none");
                });
                $('.item_spin_list_less').click(function(){
                    $('.item_spin_list').css("overflow","hidden");
                    $('.item_spin_list_less').css("display","none");
                    $(".item_spin_list_more").css("display","block");
                });


            });
        </script>
        <script>
            $(".nav-tabs #tap1-tab-1").on("click",function(){
                $(".active").removeClass("active");
                $(this).parents("li").addClass("active");
                $(".tab-pane").hide();
                $("#tap1-pane-1").show();
            })
            $(".nav-tabs #tap1-tab-2").on("click",function(){
                $(".active").removeClass("active");
                $(this).parents("li").addClass("active");
                $(".tab-pane").hide();
                $("#tap1-pane-2").show();
            })
            $(".nav-tabs #tap1-tab-3").on("click",function(){
                $(".active").removeClass("active");
                $(this).parents("li").addClass("active");
                $(".tab-pane").hide();
                $("#tap1-pane-3").show();

            })
        </script>
        <style>
            @php
    $count = 0;
@endphp
@foreach($result->group->items as $gift)
    @php
        $count++;
    @endphp
    .a{{$count}}{background-image: url("{{\App\Library\MediaHelpers::media($gift->image)}}") !important;}
            @endforeach
#slot1,#slot2,#slot3{
                display: inline-block;
                margin-top: 2px;
                margin-left: 1px;
                margin-right: 45px;
                margin: 0 36px;
                background-size: 100px 79px;
                width: 100px;
                height: 79px;
                padding: 0 28px;
            }
        </style>
        @break
        @case('slotmachine5')
        <script>
            function animate(options) {
                var start = performance.now();
                requestAnimationFrame(function animate(time) {
                    var timeFraction = (time - start) / options.duration;
                    if (timeFraction > 1) timeFraction = 1;
                    var progress = options.timing(timeFraction)
                    options.draw(progress);
                    if (timeFraction < 1) {
                        requestAnimationFrame(animate);
                    }
                });
            }

            $(document).ready(function(e) {
                $(".thele").on("click", function(){
                    $("#theleModal").modal('show');
                })
                $(".tylevongquay").on("click", function(){
                    $("#tylevongquayModal").modal('show');
                })
                $(".uytin").on("click", function(){
                    $("#uytinModal").modal('show');
                })
                $(".luotquay").on("click", function(){
                    $("#luotquayModal").modal('show');
                })
                $(".topquaythuong").on("click", function(){
                    $("#topquaythuongModal").modal('show');
                })

                var tyleLoop = 0;
                var saleoffpass = "";
                //var saleoffmessage = "";
                var game_type_value = "";
                var gift_revice="";
                var userpoint = 0;
                var numrollbyorder = 0;
                var roll_check = true;
                var num_loop = 3;
                var xvalue=0;
                var xvalueaDD = 0;
                var num = 0;
                var num_current = 0;
                var target = 0;
                var arrxgt;
                var free_wheel = 0;
                var typeRoll = "real";
                var value_gif_bonus='';
                var msg_random_bonus = '';
                var arrDiscount = '';
                var slot1_fake;
                var slot2_fake;
                var slot3_fake;
                var slot4_fake;
                var slot5_fake;
                var showwithdrawbtn = true;
                //Click nút quay
                $('body').delegate('#start-played', 'click', function() {

                    if (roll_check) {
                        fakeLoop();
                        roll_check = false;
                        saleoffpass = $("#saleoffpass").val();
                        typeRoll = "real";
                        numrolllop = $("#numrolllop").val();
                        $.ajax({
                            url: '/minigame-play',
                            datatype: 'json',
                            data: {
                                _token: $('meta[name="csrf-token"]').attr('content'),
                                id: '{{$result->group->id}}',
                                numrolllop: numrolllop,
                                numrollbyorder: numrollbyorder,
                                typeRoll: typeRoll,
                                saleoffpass: saleoffpass,
                            },
                            type: 'POST',
                            success: function(data) {
                                if (data.status == 4) {
                                    location.href='/login?return_url='+window.location.href;
                                    return;
                                } else if (data.status == 3) {
                                    roll_check = true;
                                    $('#naptheModal').modal('show')
                                    return;
                                } else if (data.status == 0) {
                                    roll_check = true;
                                    $('#noticeModal .content-popup').text(data.msg);
                                    $('#noticeModal').modal('show');
                                    return;
                                }
                                roll_check = true;
                                gift_detail = data.gift_detail;
                                var num1=0;
                                var num2=0;
                                var num3=0;
                                if(gift_detail.winbox == 0){
                                    var num1 = parseInt(gift_detail.order)+1;
                                    var num2 = randomExpert(1,parseInt('{{count($result->group->items)}}'),num1,'999999');
                                    var num3 = randomExpert(1,parseInt('{{count($result->group->items)}}'),num1,num2);
                                    var num4 = randomExpert(1,parseInt('{{count($result->group->items)}}'),num1,num2);
                                    var num5 = randomExpert(1,parseInt('{{count($result->group->items)}}'),num1,num2);
                                }else{
                                    var num1 = parseInt(gift_detail.order)+1;
                                    var num2 = parseInt(gift_detail.order)+1;
                                    var num3 = parseInt(gift_detail.order)+1;
                                    var num4=0;
                                    var num5=0;
                                    if(xvalue == 1)
                                    {
                                        num4 = parseInt(gift_detail.order)+1;
                                    }
                                    else
                                    {
                                        if(num1>4)
                                        {
                                            num4 =  randomExpert(1,parseInt('{{count($result->group->items)-4}}'),num1,'999999');
                                        }
                                        else
                                        {
                                            num4 =  randomExpert(4,parseInt('{{count($result->group->items)}}'),num1,'999999');
                                        }
                                    }
                                    if(xvalue == 2)
                                    {
                                        num4 = parseInt(gift_detail.order)+1;
                                        num5 = parseInt(gift_detail.order)+1;
                                    }
                                    else
                                    {
                                        if(num1>4)
                                        {
                                            num5 =  randomExpert(1,parseInt('{{count($result->group->items)-4}}'),num1,'999999');
                                        }
                                        else
                                        {
                                            num5 =  randomExpert(4,parseInt('{{count($result->group->items)}}'),num1,'999999');
                                        }
                                    }
                                }


                                game_type_value = data.game_type_value;
                                gift_revice = data.arr_gift;
                                showwithdrawbtn = data.showwithdrawbtn;
                                numrollbyorder = parseInt(data.numrollbyorder) + 1;
                                arrxgt = data.xgt;
                                if (arrxgt > 0) {
                                    xvalue = arrxgt[arrxgt.length - 1];
                                } else {
                                    xvalue = 0;
                                }
                                value_gif_bonus = data.value_gif_bonus;
                                msg_random_bonus = data.msg_random_bonus;
                                xvalueaDD = data.xValue;
                                free_wheel = data.free_wheel;
                                userpoint = data.userpoint;
                                if(userpoint<100){
                                    $(".item_play_spin_progress_bubble ").css("width", data.userpoint + "%")
                                }else{
                                    $(".item_play_spin_progress_bubble ").css("width", "100%");
                                    $(".item_play_spin_progress_bubble ").addClass('clickgif');
                                }
                                $(".item_play_spin_progress_percent").html(data.userpoint + "/100 point");
                                $("#saleoffpass").val("");
                                tyleLoop = 1;
                                doSlot(num1,num2,num3,num4,num5);

                            },
                            error: function() {
                                $('#noticeModal .content-popup').text('Có lỗi xảy ra. Vui lòng thử lại!');
                                $('#noticeModal').modal('show');
                            }
                        })
                    }
                });


                function getgifbonus() {
                    if($('#checkPoint').val() != "1"){
                        return;
                    }
                    $.ajax({
                        url: '/minigame-bonus',
                        datatype: 'json',
                        data: {
                            _token: $('meta[name="csrf-token"]').attr('content'),
                            id: '{{$result->group->id}}',
                        },
                        type: 'POST',
                        success: function(data) {
                            if (data.status == 0) {
                                $('#noticeModal .content-popup').text(data.msg);
                                $('#noticeModal').modal('show');
                                return;
                            }

                            var flag_bonus = true;
                            var c_game_type_value = '';

                            if (data.game_type_value){
                                c_game_type_value = " " + data.game_type_value;
                            }

                            if (data.value_gif_bonus.length > 0){
                                for (let i = 0; i < data.value_gif_bonus.length; i++ ){
                                    if (parseInt(data.value_gif_bonus[i]) > 0){
                                        flag_bonus = false;
                                    }
                                }
                            }

                            var total_vp = parseInt(data.arr_gift[0]['parrent'].params.value) + parseInt(data.value_gif_bonus[0]);

                            if (!flag_bonus){
                                var html_bonus = "";
                                html_bonus += "</br>";
                                html_bonus += "</br>";
                                html_bonus += "Nổ hũ may mắn - bạn đã trúng thêm " + total_vp + c_game_type_value;
                                $('#noticeModal .nohuthang').append(html_bonus);

                            }else{
                                var html_bonus = "";
                                html_bonus += "</br>";
                                html_bonus += "</br>";
                                html_bonus += data.msg + " - " + data.arr_gift[0].title;
                                $('#noticeModal .nohuthang').append(html_bonus);
                            }

                            $('#noticeModal').modal('show');
                            var userpoint = data.userpoint;
                            if(userpoint<100){
                                $(".item_play_spin_progress_bubble ").css("width", data.userpoint + "%");
                                $(".item_play_spin_progress_bubble ").removeClass('clickgif');
                            }else{
                                $(".item_play_spin_progress_bubble ").css("width", "100%");
                                $(".item_play_spin_progress_bubble ").addClass('clickgif');
                            }
                            $(".item_play_spin_progress_percent").html(data.userpoint + "/100 point");
                            $(".pyro").show();
                            setTimeout(function(){
                                $(".pyro").hide();
                            },6000)
                        },
                        error: function() {
                            $('#noticeModal .content-popup').text('Có lỗi xảy ra. Vui lòng thử lại!');
                            $('#noticeModal').modal('show');
                        }
                    })
                }


                $('body').delegate('.num-play-try', 'click', function() {
                    if (roll_check) {
                        fakeLoop();
                        roll_check = false;
                        saleoffpass = $("#saleoffpass").val();
                        typeRoll = "try";
                        numrolllop = $("#numrolllop").val();
                        $.ajax({
                            url: '/minigame-play',
                            datatype: 'json',
                            data: {
                                _token: $('meta[name="csrf-token"]').attr('content'),
                                id: '{{$result->group->id}}',
                                numrolllop: numrolllop,
                                numrollbyorder: numrollbyorder,
                                typeRoll: typeRoll,
                                saleoffpass: saleoffpass,
                            },
                            type: 'POST',
                            success: function(data) {
                                if (data.status == 4) {
                                    location.href='/login?return_url='+window.location.href;
                                    return;
                                } else if (data.status == 3) {
                                    $('#naptheModal').modal('show')
                                    return;
                                } else if (data.status == 0) {
                                    roll_check = true;
                                    $('#noticeModal .content-popup').text(data.msg);
                                    $('#noticeModal').modal('show');
                                    return;
                                }
                                roll_check = true;
                                gift_detail = data.gift_detail;
                                var num1=0;
                                var num2=0;
                                var num3=0;
                                if(gift_detail.winbox == 0){
                                    var num1 = parseInt(gift_detail.order)+1;
                                    var num2 = randomExpert(1,parseInt('{{count($result->group->items)}}'),num1,'999999');
                                    var num3 = randomExpert(1,parseInt('{{count($result->group->items)}}'),num1,num2);
                                    var num4 = randomExpert(1,parseInt('{{count($result->group->items)}}'),num1,num2);
                                    var num5 = randomExpert(1,parseInt('{{count($result->group->items)}}'),num1,num2);
                                }else{
                                    var num1 = parseInt(gift_detail.order)+1;
                                    var num2 = parseInt(gift_detail.order)+1;
                                    var num3 = parseInt(gift_detail.order)+1;
                                    var num4=0;
                                    var num5=0;
                                    if(xvalue == 1)
                                    {
                                        num4 = parseInt(gift_detail.order)+1;
                                    }
                                    else
                                    {
                                        if(num1>4)
                                        {
                                            num4 =  randomExpert(1,parseInt('{{count($result->group->items)-4}}'),num1,'999999');
                                        }
                                        else
                                        {
                                            num4 =  randomExpert(4,parseInt('{{count($result->group->items)}}'),num1,'999999');
                                        }
                                    }
                                    if(xvalue == 2)
                                    {
                                        num4 = parseInt(gift_detail.order)+1;
                                        num5 = parseInt(gift_detail.order)+1;
                                    }
                                    else
                                    {
                                        if(num1>4)
                                        {
                                            num5 =  randomExpert(1,parseInt('{{count($result->group->items)-4}}'),num1,'999999');
                                        }
                                        else
                                        {
                                            num5 =  randomExpert(4,parseInt('{{count($result->group->items)}}'),num1,'999999');
                                        }
                                    }
                                }


                                gift_revice = data.arr_gift;
                                showwithdrawbtn = data.showwithdrawbtn;
                                numrollbyorder = parseInt(data.numrollbyorder) + 1;
                                arrxgt = data.xgt;
                                if (arrxgt > 0) {
                                    xvalue = arrxgt[arrxgt.length - 1];
                                } else {
                                    xvalue = 0;
                                }
                                value_gif_bonus = data.value_gif_bonus;
                                msg_random_bonus = data.msg_random_bonus;
                                xvalueaDD = data.xValue;
                                free_wheel = data.free_wheel;
                                userpoint = data.userpoint;
                                if(userpoint<100){
                                    $(".item_play_spin_progress_bubble ").css("width", data.userpoint + "%")
                                }else{
                                    $(".item_play_spin_progress_bubble ").css("width", "100%");
                                    $(".item_play_spin_progress_bubble ").addClass('clickgif');
                                }
                                $(".item_play_spin_progress_percent").html(data.userpoint + "/100 point");
                                $("#saleoffpass").val("");

                                tyleLoop = 1;
                                doSlot(num1,num2,num3,num4,num5);

                            },
                            error: function() {
                                $('#noticeModal .content-popup').text('Có lỗi xảy ra. Vui lòng thử lại!');
                                $('#noticeModal').modal('show');
                            }
                        })
                    }
                });

                function fakeLoop(){
                    document.getElementById("slot1").className='a1'
                    document.getElementById("slot2").className='a1'
                    document.getElementById("slot3").className='a1'
                    document.getElementById("slot4").className='a1'
                    document.getElementById("slot5").className='a1'
                    var i1 = 0;
                    var i2 = 0;
                    var i3 = 0;
                    var i4 = 0;
                    var i5 = 0;
                    slot1_fake = setInterval(spin1_fake, 50);
                    slot2_fake = setInterval(spin2_fake, 50);
                    slot3_fake = setInterval(spin3_fake, 50);
                    slot4_fake = setInterval(spin4_fake, 50);
                    slot5_fake = setInterval(spin5_fake, 50);
                    function spin1_fake() {
                        i1++;
                        slotTile = document.getElementById("slot1");
                        if (slotTile.className=="a{{count($result->group->items)}}"){
                            slotTile.className = "a0";
                        }
                        slotTile.className = "a"+(parseInt(slotTile.className.substring(1))+1)
                    }
                    function spin2_fake(){
                        i2++;
                        slotTile = document.getElementById("slot2");
                        if (slotTile.className=="a{{count($result->group->items)}}"){
                            slotTile.className = "a0";
                        }
                        slotTile.className = "a"+(parseInt(slotTile.className.substring(1))+1)
                    }
                    function spin3_fake(){
                        i3++;
                        slotTile = document.getElementById("slot3");
                        if (slotTile.className=="a{{count($result->group->items)}}"){
                            slotTile.className = "a0";
                        }
                        slotTile.className = "a"+(parseInt(slotTile.className.substring(1))+1)
                    }
                    function spin4_fake(){
                        i4++;
                        slotTile = document.getElementById("slot4");
                        if (slotTile.className=="a{{count($result->group->items)}}"){
                            slotTile.className = "a0";
                        }
                        slotTile.className = "a"+(parseInt(slotTile.className.substring(1))+1)
                    }
                    function spin5_fake(){
                        i5++;
                        slotTile = document.getElementById("slot5");
                        if (slotTile.className=="a{{count($result->group->items)}}"){
                            slotTile.className = "a0";
                        }
                        slotTile.className = "a"+(parseInt(slotTile.className.substring(1))+1)
                    }
                }


                function doSlot(one, two, three,four,five){
                    clearInterval(slot1_fake);
                    clearInterval(slot2_fake);
                    clearInterval(slot3_fake);
                    clearInterval(slot4_fake);
                    clearInterval(slot5_fake);
                    document.getElementById("slot1").className='a1'
                    document.getElementById("slot2").className='a1'
                    document.getElementById("slot3").className='a1'
                    document.getElementById("slot4").className='a1'
                    document.getElementById("slot5").className='a1'
                    var numChanges = randomInt(1,4)*parseInt('{{count($result->group->items)}}');
                    var numeberSlot1 = numChanges+one
                    var numeberSlot2 = numChanges+2*parseInt('{{count($result->group->items)}}')+two;
                    var numeberSlot3 = numChanges+4*parseInt('{{count($result->group->items)}}')+three;
                    var numeberSlot4 = numChanges+6*parseInt('{{count($result->group->items)}}')+four;
                    var numeberSlot5 = numChanges+8*parseInt('{{count($result->group->items)}}')+five;
                    var i1 = 0;
                    var i2 = 0;
                    var i3 = 0;
                    var i4 = 0;
                    var i5 = 0;
                    slot1 = setInterval(spin1, 50);
                    slot2 = setInterval(spin2, 50);
                    slot3 = setInterval(spin3, 50);
                    slot4 = setInterval(spin4, 50);
                    slot5 = setInterval(spin5, 50);

                    function spin1() {
                        i1++;
                        if (tyleLoop == 1) {
                            if (i1 >= numeberSlot1) {
                                clearInterval(slot1);
                                return null;
                            }
                        }
                        slotTile = document.getElementById("slot1");
                        if (slotTile.className=="a{{count($result->group->items)}}"){
                            slotTile.className = "a0";
                        }
                        slotTile.className = "a"+(parseInt(slotTile.className.substring(1))+1)
                    }
                    function spin2(){
                        i2++;
                        if (tyleLoop == 1) {
                            if (i2 >= numeberSlot2) {
                                clearInterval(slot2);

                                return null;
                            }
                        }
                        slotTile = document.getElementById("slot2");
                        if (slotTile.className=="a{{count($result->group->items)}}"){
                            slotTile.className = "a0";
                        }
                        slotTile.className = "a"+(parseInt(slotTile.className.substring(1))+1)
                    }
                    function spin3(){
                        i3++;
                        if (tyleLoop == 1) {
                            if (i3 >= numeberSlot3) {
                                clearInterval(slot3);
                                return null;
                            }
                        }
                        slotTile = document.getElementById("slot3");
                        if (slotTile.className=="a{{count($result->group->items)}}"){
                            slotTile.className = "a0";
                        }
                        slotTile.className = "a"+(parseInt(slotTile.className.substring(1))+1)
                    }
                    function spin4(){
                        i4++;
                        if (tyleLoop == 1) {
                            if (i4 >= numeberSlot4) {
                                clearInterval(slot4);
                                return null;
                            }
                        }
                        slotTile = document.getElementById("slot4");
                        if (slotTile.className=="a{{count($result->group->items)}}"){
                            slotTile.className = "a0";
                        }
                        slotTile.className = "a"+(parseInt(slotTile.className.substring(1))+1)
                    }
                    function spin5(){
                        i5++;
                        if (tyleLoop == 1) {
                            if (i5 >= numeberSlot5) {
                                clearInterval(slot5);
                                testWin(one);
                                return null;
                            }
                        }
                        slotTile = document.getElementById("slot5");
                        if (slotTile.className=="a{{count($result->group->items)}}"){
                            slotTile.className = "a0";
                        }
                        slotTile.className = "a"+(parseInt(slotTile.className.substring(1))+1)
                    }
                }

                function randomInt(min, max){
                    return Math.floor((Math.random() * (max-min+1)) + min);
                }

                function randomExpert(min, max, expert, expert1){
                    var value = Math.floor((Math.random() * (max-min+1)) + min);
                    if(value == expert){
                        randomExpert(min, max, expert, expert1);
                    }
                    if(value == expert1){
                        randomExpert(min, max, expert, expert1);
                    }
                    return value;
                }

                function testWin(num1) {
                    if(xvalue == 0)
                    {
                        //Đổi class phần thưởng của 4,5 nếu trùng class phần thưởng nhận được(1)
                        if($("#slot4").attr('class') == $("#slot1").attr('class'))
                        {
                            if(num1>4)
                            {
                                document.getElementById("slot4").className = "a"+(num1-1);
                            }
                            else
                            {
                                document.getElementById("slot4").className = "a"+(num1+1);
                            }
                        }
                        if($("#slot5").attr('class') == $("#slot1").attr('class'))
                        {

                            if(num1>4)
                            {
                                document.getElementById("slot5").className = "a"+(num1-1);
                            }
                            else
                            {
                                document.getElementById("slot5").className = "a"+(num1+1);
                            }
                        }
                    }
                    if(xvalue == 1)
                    {
                        //Đổi class phần thưởng của 5 nếu trùng class phần thưởng nhận được(1)
                        if($("#slot5").attr('class') == $("#slot1").attr('class'))
                        {

                            if(num1>4)
                            {
                                document.getElementById("slot5").className = "a"+(num1-1);
                            }
                            else
                            {
                                document.getElementById("slot5").className = "a"+(num1+1);
                            }
                        }
                    }
                    roll_check = true;

                    $("#btnWithdraw").show();
                    if (gift_detail.winbox == 0) {
                        $("#btnWithdraw").hide();
                    } else {
                        if (gift_detail.gift_type == 0) {
                            $("#btnWithdraw").html("Rút " + $("#withdrawruby_" + gift_detail.game_type).val());
                            $("#btnWithdraw").attr('href', '/withdrawitem-' + gift_detail.game_type);
                        } else if (gift_detail.gift_type == 1) {
                            $("#btnWithdraw").html("Kiểm tra nick trúng");
                            $("#btnWithdraw").attr('href', '/minigame-logacc-' + '{{$result->group->id}}');
                            // } else if (gift_detail.gift_type == 'nrocoin') {
                            //     $("#btnWithdraw").html("Rút vàng");
                            //     $("#btnWithdraw").attr('href', '/withdrawservice?id=' + $("#ID_NROCOIN").val());
                            // } else if (gift_detail.gift_type == 'nrogem') {
                            //     $("#btnWithdraw").html("Rút ngọc");
                            //     $("#btnWithdraw").attr('href', '/withdrawservice?id=' + $("#ID_NROGEM").val());
                            // } else if (gift_detail.gift_type == 'nroxu') {
                            //     $("#btnWithdraw").html("Rút xu");
                            //     $("#btnWithdraw").attr('href', '/withdrawservice?id=' + $("#ID_NINJAXU").val());
                        } else if (gift_detail.gift_type == 2) {
                            $("#btnWithdraw").html("Load lại trang");
                            $("#btnWithdraw").removeAttr("href");
                            $("#btnWithdraw").addClass('reLoad');
                        } else {
                            $("#btnWithdraw").hide();
                        }

                    }


                    if (gift_revice.length > 0) {
                        $html = "";
                        $strDiscountcode = "";
                        // if(saleoffmessage.length > 0)
                        // {
                        //     $html += "<br/><span style='font-size: 14px;color: #f90707;font-style: italic;display: block;text-align: center;'>"+saleoffmessage+"</span><br/>";
                        // }

                        var flag_bonus = true;

                        if (value_gif_bonus.length > 0){
                            for (let i = 0; i < value_gif_bonus.length; i++ ){
                                if (parseInt(value_gif_bonus[i]) > 0){
                                    flag_bonus = false;
                                }
                            }
                        }

                        var c_game_type_value = '';
                        if (game_type_value){
                            c_game_type_value = " " + game_type_value;
                        }

                        if (typeRoll == "real") {
                            if (gift_revice.length == 1) {
                                // if(arrDiscount[0] != "")
                                // {
                                //     $strDiscountcode="<span>Bạn nhận được 1 mã giảm giá khuyến mãi đi kèm: <b>"+arrDiscount[0]+"</b></span>";
                                // }
                                if (!flag_bonus){//trường hợp bonus.
                                    var total_vp = parseInt(gift_revice[0]['parrent'].params.value) + parseInt(value_gif_bonus[0]);

                                    $html += "<span>Kết quả: Bạn đã trúng " + total_vp + c_game_type_value +"</span><br/>";
                                    if (gift_detail.winbox == 1) {

                                        $html += "<span>Mua X1: Nhận được " + total_vp + game_type_value + "</span><br/>";
                                        $html += "<span>Quay được "+(xvalue+3)+" hình trùng nhau. Nhận X"+(xvalueaDD[0])+" giải thưởng: " + (parseInt(gift_revice[0]['parrent'].params.value) * (parseInt(xvalueaDD[0])) + parseInt(value_gif_bonus[0])) + game_type_value +"</span><br/>";
                                        $html += "<span>Tổng cộng: " + (parseInt(gift_revice[0]['parrent'].params.value) * (parseInt(xvalueaDD[0])) + parseInt(value_gif_bonus[0])) + game_type_value +"</span>";
                                    }
                                }else {
                                    $html += "<span>Kết quả: " + gift_revice[0]["title"] + "</span><br/>";
                                    if (gift_detail.winbox == 1) {
                                        $html += "<span>Mua X1: Nhận được " + gift_revice[0]["parrent"].params.value + "</span><br/>";
                                        $html += "<span>Quay được "+(xvalue+3)+" hình trùng nhau. Nhận X"+(xvalueaDD[0])+" giải thưởng: "+gift_revice[0]["parrent"].params.value*(xvalueaDD[0])+""+msg_random_bonus[0]+"</span><br/>";
                                        $html += "<span>Tổng cộng: " + parseInt(gift_revice[0]["parrent"].params.value) * (parseInt(xvalueaDD[0])) + "</span>";
                                    }
                                }

                            } else {
                                if (!flag_bonus) {//trường hợp bonus.

                                    $totalRevice = 0;
                                    $html += "<span>Kết quả: Nhận " + gift_revice.length + " phần thưởng cho " + gift_revice.length + " lượt quay.</span><br/>";
                                    $html += "<span><b>Mua X" + gift_revice.length + ":</b></span><br/>";
                                    for ($i = 0; $i < gift_revice.length; $i++) {

                                        var total_vp = parseInt(gift_revice[$i]['parrent'].params.value) + parseInt(value_gif_bonus[$i]);

                                        $html += "<span>Lần quay " + ($i + 1) + ": Bạn đã trúng " + total_vp + c_game_type_value;
                                        if (gift_revice[$i].winbox == 1) {

                                            $html += " - nhận được: " + gift_revice[$i]['parrent'].params.value + " X" + (parseInt(xvalueaDD[$i])) + " = " + (parseInt(gift_revice[$i]['parrent'].params.value) * (parseInt(xvalueaDD[$i])) + parseInt(value_gif_bonus[$i])) + "" + c_game_type_value + "</span><br/><br/>";
                                        } else {
                                            $html += "<br/><br/>";
                                        }
                                        $totalRevice += parseInt(gift_revice[$i]['parrent'].params.value) * (parseInt(xvalueaDD[$i])) + parseInt(value_gif_bonus[$i]);
                                    }

                                    $html += "<span><b>Tổng cộng: " + $totalRevice + c_game_type_value + " </b></span>";
                                }else{
                                    $totalRevice = 0;
                                    $html += "<span>Kết quả: Nhận " + gift_revice.length + " phần thưởng cho " + gift_revice.length + " lượt quay.</span><br/>";
                                    $html += "<span><b>Mua X" + gift_revice.length + ":</b></span><br/>";
                                    for ($i = 0; $i < gift_revice.length; $i++) {
                                        // if(arrDiscount[$i] != "")
                                        // {
                                        //     $strDiscountcode="<span>Bạn nhận được 1 mã giảm giá khuyến mãi đi kèm: <b>"+arrDiscount[$i]+"</b></span>";
                                        // }
                                        $html += "<span>Lần quay " + ($i + 1) + ": " + gift_revice[$i]["title"];
                                        if (gift_revice[$i].winbox == 1) {
                                            $html += " - nhận được: " + gift_revice[$i]["parrent"].params.value + " X" + (parseInt(xvalueaDD[$i])) + " = " + parseInt(gift_revice[$i]["parrent"].params.value) * (parseInt(xvalueaDD[$i])) + "" + msg_random_bonus[$i] + "</span><br/>"  + "<br/>";
                                        } else {
                                            $html += "" + msg_random_bonus[$i] + "<br/>" + $strDiscountcode + "<br/>";
                                        }
                                        $totalRevice += parseInt(gift_revice[$i]["parrent"].params.value) * (parseInt(xvalueaDD[$i])) + parseInt(value_gif_bonus[$i]);
                                    }

                                    $html += "<span><b>Tổng cộng: " + $totalRevice + "</b></span>";
                                }
                            }
                        } else {
                            $("#btnWithdraw").hide();
                            if (gift_revice.length == 1) {

                                if (!flag_bonus){//trường hợp bonus.
                                    var total_vp = parseInt(gift_revice[0]['parrent'].params.value) + parseInt(value_gif_bonus[0]);

                                    $html += "<span>Kết quả chơi thử: Bạn đã trúng " + total_vp + c_game_type_value +"</span><br/>";
                                    if (gift_detail.winbox == 1) {

                                        $html += "<span>Mua X1: Nhận được " + total_vp + game_type_value + "</span><br/>";
                                        $html += "<span>Quay được "+(xvalue+3)+" hình trùng nhau. Nhận X"+(xvalueaDD[0])+" giải thưởng: " + (parseInt(gift_revice[0]['parrent'].params.value) * (parseInt(xvalueaDD[0])) + parseInt(value_gif_bonus[0])) + game_type_value +"</span><br/>";
                                        $html += "<span>Tổng cộng: " + (parseInt(gift_revice[0]['parrent'].params.value) * (parseInt(xvalueaDD[0])) + parseInt(value_gif_bonus[0])) + game_type_value +"</span>";
                                    }
                                }else {
                                    $html += "<span>Kết quả chơi thử: " + gift_revice[0]["title"] + "</span><br/>";
                                    if (gift_detail.winbox == 1) {
                                        $html += "<span>Mua X1: Nhận được " + gift_revice[0]["parrent"].params.value + "</span><br/>";
                                        $html += "<span>Quay được "+(xvalue+3)+" hình trùng nhau. Nhận X"+(xvalueaDD[0])+" giải thưởng: "+gift_revice[0]["parrent"].params.value*(xvalueaDD[0])+""+msg_random_bonus[0]+"</span><br/>";
                                        $html += "<span>Tổng cộng: " + parseInt(gift_revice[0]["parrent"].params.value) * (parseInt(xvalueaDD[0])) + "</span>";
                                    }
                                }

                            } else {

                                if (!flag_bonus) {//trường hợp bonus.

                                    $totalRevice = 0;
                                    $html += "<span>Kết quả chơi thử: Nhận " + gift_revice.length + " phần thưởng cho " + gift_revice.length + " lượt quay.</span><br/>";
                                    $html += "<span><b>Mua X" + gift_revice.length + ":</b></span><br/>";
                                    for ($i = 0; $i < gift_revice.length; $i++) {

                                        var total_vp = parseInt(gift_revice[$i]['parrent'].params.value) + parseInt(value_gif_bonus[$i]);

                                        $html += "<span>Lần quay " + ($i + 1) + ": Bạn đã trúng " + total_vp + c_game_type_value;
                                        if (gift_revice[$i].winbox == 1) {

                                            $html += " - nhận được: " + gift_revice[$i]['parrent'].params.value + " X" + (parseInt(xvalueaDD[$i])) + " = " + (parseInt(gift_revice[$i]['parrent'].params.value) * (parseInt(xvalueaDD[$i])) + parseInt(value_gif_bonus[$i])) + "" + c_game_type_value + "</span><br/><br/>";
                                        } else {
                                            $html += "<br/><br/>";
                                        }
                                        $totalRevice += parseInt(gift_revice[$i]['parrent'].params.value) * (parseInt(xvalueaDD[$i])) + parseInt(value_gif_bonus[$i]);
                                    }

                                    $html += "<span><b>Tổng cộng: " + $totalRevice + c_game_type_value + " </b></span>";
                                }else{
                                    $totalRevice = 0;
                                    $html += "<span>Kết quả chơi thử: Nhận " + gift_revice.length + " phần thưởng cho " + gift_revice.length + " lượt quay.</span><br/>";
                                    $html += "<span><b>Mua X" + gift_revice.length + ":</b></span><br/>";
                                    for ($i = 0; $i < gift_revice.length; $i++) {
                                        $html += "<spasn>Lần quay " + ($i + 1) + ": " + gift_revice[$i]["title"];
                                        if (gift_revice[$i].winbox == 1) {
                                            $html += " - nhận được: " + gift_revice[$i]["parrent"].params.value + " X" + (parseInt(xvalueaDD[$i])) + " = " + parseInt(gift_revice[$i]["parrent"].params.value) * (parseInt(xvalueaDD[$i])) + "" + msg_random_bonus[$i] + "</span><br/>";
                                        } else {
                                            $html += "" + msg_random_bonus[$i] + "<br/>";
                                        }
                                        $totalRevice += parseInt(gift_revice[$i]["parrent"].params.value) * (parseInt(xvalueaDD[$i])) + parseInt(value_gif_bonus[$i]);
                                    }

                                    $html += "<span><b>Tổng cộng: " + $totalRevice + "</b></span>";
                                }

                            }
                        }
                    }
                    if (!showwithdrawbtn) {
                        $("#btnWithdraw").hide();
                    }else{ $("#btnWithdraw").show(); }

                    $('#noticeModal .content-popup').html($html);

                    if (userpoint > 99) {
                        getgifbonus();
                    }
                    $("#noticeModal").modal('show');
                    $("#noticeModal").on("hidden.bs.modal", function () {
                        $('.modal-backdrop').remove();
                        $('body').removeClass( "modal-open" );
                    });
                    if (free_wheel < 1) {
                        $('.num-play-free').hide();
                    } else {
                        $('.num-play-free').html("(Bạn còn " + free_wheel + " lượt quay miễn phí)");
                    }
                }
            });

            $('body').delegate('.reLoad', 'click', function() {
                location.reload();
            })
        </script>
        <script type="text/javascript">
            $( document ).ready(function() {
                $(document).on('scroll',function(){
                    if($(window).width() > 1024){
                        if ($(this).scrollTop() > 100) {
                            $(".nav-bar-container").css("height","90px");
                            $(".nav-bar-category .nav li a").css("line-height","90px");
                            $("header .nav-bar").css("background-color","rgba(0,0,0,0.5)");
                            $(".nav-bar-brand").css("margin","14px");

                        } else {
                            $(".nav-bar-container").css("height","120px");
                            $(".nav-bar-category .nav li a").css("line-height","120px");
                            $(".nav-bar-brand").css("margin","20px 0");
                            $("header .nav-bar").css("background-color","rgba(0,0,0,0.8)");
                        }
                    }

                });
                $('.item_play_intro_viewmore').click(function(){
                    $('.item_play_intro_viewless').css("display","flex");
                    $('.item_play_intro_viewmore').css("display","none");
                    $(".item_play_intro_content").addClass( "showtext" );
                });
                $('.item_play_intro_viewless').click(function(){
                    $('.item_play_intro_viewmore').css("display","flex");
                    $('.item_play_intro_viewless').css("display","none");
                    $(".item_play_intro_content").removeClass( "showtext");
                });
                $('.item_spin_list_more').click(function(){
                    $('.item_spin_list').css("overflow","auto");
                    $('.item_spin_list_less').css("display","block");
                    $(".item_spin_list_more").css("display","none");
                });
                $('.item_spin_list_less').click(function(){
                    $('.item_spin_list').css("overflow","hidden");
                    $('.item_spin_list_less').css("display","none");
                    $(".item_spin_list_more").css("display","block");
                });


            });
        </script>
        <script>
            $(".nav-tabs #tap1-tab-1").on("click",function(){
                $(".active").removeClass("active");
                $(this).parents("li").addClass("active");
                $(".tab-pane").hide();
                $("#tap1-pane-1").show();
            })
            $(".nav-tabs #tap1-tab-2").on("click",function(){
                $(".active").removeClass("active");
                $(this).parents("li").addClass("active");
                $(".tab-pane").hide();
                $("#tap1-pane-2").show();
            })
            $(".nav-tabs #tap1-tab-3").on("click",function(){
                $(".active").removeClass("active");
                $(this).parents("li").addClass("active");
                $(".tab-pane").hide();
                $("#tap1-pane-3").show();

            })
        </script>

        <style>
            @php
    $count = 0;
@endphp
@foreach($result->group->items as $gift)
    @php
        $count++;
    @endphp
    .a{{$count}}{background-image: url("{{\App\Library\MediaHelpers::media($gift->image)}}") !important;}
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
        </style>
        @break

        @case('squarewheel')
        <script>
            $(document).ready(function(e) {
                @if(isset($result->group->items) && count($result->group->items)>0)
                @foreach($result->group->items as $index=>$item)
                $('.gift'+({{$index}}+1)).attr('id',"id"+{{$item->item_id}});
                $('.gift'+({{$index}}+1)+' img').attr('src','{{\App\Library\MediaHelpers::media($item->image)}}');
                @endforeach
                @endif
                $(".thele").on("click", function(){
                    $("#theleModal").modal('show');
                })
                $(".tylevongquay").on("click", function(){
                    $("#tylevongquayModal").modal('show');
                })
                $(".uytin").on("click", function(){
                    $("#uytinModal").modal('show');
                })
                $(".luotquay").on("click", function(){
                    $("#luotquayModal").modal('show');
                })
                $(".topquaythuong").on("click", function(){
                    $("#topquaythuongModal").modal('show');
                })

                var num_loop = 3;
                var num = 0;
                var num_current = 0;
                var target = 0;
                var time = 400
                var runtime ='';
                var runrealtime ='';
                var game_type_value = "";
                var gift_revice = "";
                var saleoffpass = "";
                var userpoint = 0;
                var numrollbyorder = 0;
                var roll_check = true;
                var angle_gift = '';
                var num_gift = '{{count($result->group->items)}}';
                var gift_detail = '';
                var num_roll_remain = 0;
                var angles = 0;
                var arrxgt;
                var typeRoll = "real";
                var free_wheel = 0;
                var value_gif_bonus = '';
                var msg_random_bonus = '';
                var startat = 0;

                var showwithdrawbtn = true;
                //Click nút quay
                $('body').delegate('#start-played', 'click', function() {

                    if (roll_check) {
                        num_current = startat;
                        num = startat;
                        startat = 0;
                        //fakeLoop();
                        roll_check = false;
                        saleoffpass = $("#saleoffpass").val();
                        typeRoll = "real";
                        numrolllop = $("#numrolllop").val();
                        $.ajax({
                            url: '/minigame-play',
                            datatype: 'json',
                            data: {
                                _token: $('meta[name="csrf-token"]').attr('content'),
                                id: '{{$result->group->id}}',
                                numrolllop: numrolllop,
                                numrollbyorder: numrollbyorder,
                                typeRoll: typeRoll,
                                saleoffpass: saleoffpass,
                            },
                            type: 'POST',
                            success: function(data) {

                                if (data.status == 4) {
                                    location.href='/login?return_url='+window.location.href;
                                    return;
                                } else if (data.status == 3) {
                                    clearTimeout(runtime);
                                    roll_check = true;
                                    $('#naptheModal').modal('show')
                                    return;
                                } else if (data.status == 0) {
                                    clearTimeout(runtime);
                                    roll_check = true;
                                    $('#noticeModal .content-popup').text(data.msg);
                                    $('#noticeModal').modal('show');
                                    return;
                                }
                                showwithdrawbtn = data.showwithdrawbtn;
                                numrollbyorder = parseInt(data.numrollbyorder) + 1;
                                gift_detail = data.gift_detail;
                                gift_revice = data.arr_gift;
                                arrxgt = data.xgt;
                                if (data.xgt > 0) {
                                    xvalue = data.xgt[data.xgt.length - 1];
                                } else {
                                    xvalue = 0;
                                }
                                game_type_value = data.game_type_value;
                                value_gif_bonus = data.value_gif_bonus;
                                msg_random_bonus = data.msg_random_bonus;
                                xvalueaDD = data.xValue;
                                free_wheel = data.free_wheel;
                                num_roll_remain = gift_detail.num_roll_remain;
                                var targetId = gift_detail.id;
                                target = parseInt($('#id'+targetId).attr('data-num'));
                                loop();

                                userpoint = data.userpoint;
                                if(userpoint<100){
                                    $(".item_spin_progress_bubble").css("width", data.userpoint + "%")
                                }else{
                                    $(".item_spin_progress_bubble").css("width", "100%");
                                    $(".item_spin_progress_bubble").addClass('clickgif');
                                }
                                $(".item_spin_progress_percent").html(data.userpoint + "/100 point");
                                $("#saleoffpass").val("");
                            },
                            error: function() {
                                $('#noticeModal .content-popup').text('Có lỗi xảy ra. Vui lòng thử lại!');
                                $('#noticeModal').modal('show');
                            }
                        })
                    }
                });


                function getgifbonus() {
                    $.ajax({
                        url: '/minigame-bonus',
                        datatype: 'json',
                        data: {
                            _token: $('meta[name="csrf-token"]').attr('content'),
                            id: '{{$result->group->id}}',
                        },
                        type: 'POST',
                        success: function(data) {
                            if (data.status == 0) {
                                $('#noticeModal .content-popup').text(data.msg);
                                $('#noticeModal').modal('show');
                                return;
                            }

                            var flag_bonus = true;
                            var c_game_type_value = '';

                            if (data.game_type_value){
                                c_game_type_value = " " + data.game_type_value;
                            }

                            if (data.value_gif_bonus.length > 0){
                                for (let i = 0; i < data.value_gif_bonus.length; i++ ){
                                    if (parseInt(data.value_gif_bonus[i]) > 0){
                                        flag_bonus = false;
                                    }
                                }
                            }

                            var total_vp = parseInt(data.arr_gift[0]['parrent'].params.value) + parseInt(data.value_gif_bonus[0]);

                            if (!flag_bonus){
                                var html_bonus = "";
                                html_bonus += "</br>";
                                html_bonus += "</br>";
                                html_bonus += "Nổ hũ may mắn - bạn đã trúng thêm " + total_vp + c_game_type_value;
                                $('#noticeModal .nohuthang').append(html_bonus);

                            }else{
                                var html_bonus = "";
                                html_bonus += "</br>";
                                html_bonus += "</br>";
                                html_bonus += data.msg + " - " + data.arr_gift[0].title;
                                $('#noticeModal .nohuthang').append(html_bonus);
                            }

                            $('#noticeModal').modal('show');
                            var userpoint = data.userpoint;
                            if(userpoint<100){
                                $(".item_spin_progress_bubble").css("width", data.userpoint + "%");
                                $(".item_spin_progress_bubble").removeClass('clickgif');
                            }else{
                                $(".item_spin_progress_bubble").css("width", "100%");
                                $(".item_spin_progress_bubble").addClass('clickgif');
                            }
                            $(".item_spin_progress_percent").html(data.userpoint + "/100 point");
                            $(".pyro").show();
                            setTimeout(function(){
                                $(".pyro").hide();
                            },6000)
                        },
                        error: function() {
                            $('#noticeModal .content-popup').text('Có lỗi xảy ra. Vui lòng thử lại!');
                            $('#noticeModal').modal('show');
                        }
                    })
                }


                $('body').delegate('.num-play-try', 'click', function() {
                    if (roll_check) {
                        num_current = startat;
                        num = startat;
                        startat = 0;
                        //fakeLoop();
                        roll_check = false;
                        saleoffpass = $("#saleoffpass").val();
                        typeRoll = "try";
                        numrolllop = $("#numrolllop").val();
                        $.ajax({
                            url: '/minigame-play',
                            datatype: 'json',
                            data: {
                                _token: $('meta[name="csrf-token"]').attr('content'),
                                id: '{{$result->group->id}}',
                                numrolllop: numrolllop,
                                numrollbyorder: numrollbyorder,
                                typeRoll: typeRoll,
                                saleoffpass: saleoffpass,
                            },
                            type: 'POST',
                            success: function(data) {

                                if (data.status == 4) {
                                    location.href='/login?return_url='+window.location.href;
                                    return;
                                } else if (data.status == 3) {
                                    clearTimeout(runtime);
                                    roll_check = true;
                                    $('#naptheModal').modal('show')
                                    return;
                                } else if (data.status == 0) {
                                    clearTimeout(runtime);
                                    roll_check = true;
                                    $('#noticeModal .content-popup').text(data.msg);
                                    $('#noticeModal').modal('show');
                                    return;
                                }
                                showwithdrawbtn = data.showwithdrawbtn;
                                numrollbyorder = parseInt(data.numrollbyorder) + 1;
                                gift_detail = data.gift_detail;
                                gift_revice = data.arr_gift;
                                arrxgt = data.xgt;
                                if (data.xgt > 0) {
                                    xvalue = data.xgt[data.xgt.length - 1];
                                } else {
                                    xvalue = 0;
                                }

                                value_gif_bonus = data.value_gif_bonus;
                                msg_random_bonus = data.msg_random_bonus;
                                xvalueaDD = data.xValue;
                                free_wheel = data.free_wheel;
                                num_roll_remain = gift_detail.num_roll_remain;
                                var targetId = gift_detail.id;
                                target = parseInt($('#id'+targetId).attr('data-num'));
                                loop();

                                userpoint = data.userpoint;
                                if(userpoint<100){
                                    $(".item_spin_progress_bubble").css("width", data.userpoint + "%")
                                }else{
                                    $(".item_spin_progress_bubble").css("width", "100%");
                                    $(".item_spin_progress_bubble").addClass('clickgif');
                                }
                                $(".item_spin_progress_percent").html(data.userpoint + "/100 point");
                                $("#saleoffpass").val("");
                            },
                            error: function() {
                                $('#noticeModal .content-popup').text('Có lỗi xảy ra. Vui lòng thử lại!');
                                $('#noticeModal').modal('show');
                            }
                        })
                    }
                });


                // function fakeLoop(){
                //     num++;
                //     num_current++;
                //     if(num_current>11){
                //         num_current = 0;
                //     }
                //     $('.box img').removeClass('active');
                //     $('.gift'+(num_current)+' img').addClass('active');

                //     if(num<4){
                //         time = 400
                //     }else if(num<8){
                //         time = 200
                //     }else if(num>7){
                //         time = 60
                //     }
                //     runtime = setTimeout(function(){
                //         fakeLoop();
                //     },time);
                // }


                function loop() {
                    clearTimeout(runtime);
                    if(num<(parseInt(num_loop*12)+target)){
                        num++;
                        num_current++;
                        $('.box img').removeClass('active');
                        $('.gift'+(num_current)+' img').addClass('active');
                        var time = 400
                        if(num<4){
                            time = 400
                        }else if(num<8){
                            time = 200
                        }else if(num>7){
                            time = 60
                        }

                        if(num>((num_loop*12)+target-7) && num<((num_loop*12)+target-3)){
                            time = 200;
                        }

                        if(num>((num_loop*12)+target-4)){
                            time = 400
                        }
                        runrealtime = setTimeout(function(){
                            loop();
                        },time);

                        if(num_current==12){
                            num_current=0;
                        }
                    } else {
                        roll_check = true;
                        startat = target;
                        $("#btnWithdraw").show();
                        if (gift_detail.winbox == 0) {
                            $("#btnWithdraw").hide();
                        } else {
                            if (gift_detail.gift_type == 0) {
                                $("#btnWithdraw").html("Rút " + $("#withdrawruby_" + gift_detail.game_type).val());
                                $("#btnWithdraw").attr('href', '/withdrawitem-' + gift_detail.game_type);
                            } else if (gift_detail.gift_type == 1) {
                                $("#btnWithdraw").html("Kiểm tra nick trúng");
                                $("#btnWithdraw").attr('href', '/logaccgame?id=' + '{{$result->group->id}}');
                                // } else if (gift_detail.gift_type == 'nrocoin') {
                                //     $("#btnWithdraw").html("Rút vàng");
                                //     $("#btnWithdraw").attr('href', '/withdrawservice?id=' + $("#ID_NROCOIN").val());
                                // } else if (gift_detail.gift_type == 'nrogem') {
                                //     $("#btnWithdraw").html("Rút ngọc");
                                //     $("#btnWithdraw").attr('href', '/withdrawservice?id=' + $("#ID_NROGEM").val());
                                // } else if (gift_detail.gift_type == 'nroxu') {
                                //     $("#btnWithdraw").html("Rút xu");
                                //     $("#btnWithdraw").attr('href', '/withdrawservice?id=' + $("#ID_NINJAXU").val());
                            } else if (gift_detail.gift_type == 2) {
                                $("#btnWithdraw").html("Load lại trang");
                                $("#btnWithdraw").removeAttr("href");
                                $("#btnWithdraw").addClass('reLoad');
                            } else {
                                $("#btnWithdraw").hide();
                            }

                        }
                        if (gift_revice.length > 0) {
                            $html = "";
                            $strDiscountcode="";
                            // if(saleoffmessage.length > 0)
                            // {
                            //     $html += "<br/><span style='font-size: 14px;color: #f90707;font-style: italic;display: block;text-align: center;'>"+saleoffmessage+"</span><br/>";
                            // }
                            var flag_bonus = true;

                            if (value_gif_bonus.length > 0){
                                for (let i = 0; i < value_gif_bonus.length; i++ ){
                                    if (parseInt(value_gif_bonus[i]) > 0){
                                        flag_bonus = false;
                                    }
                                }
                            }

                            var c_game_type_value = '';
                            if (game_type_value){
                                c_game_type_value = " " + game_type_value;
                            }

                            if(typeRoll == "real")
                            {
                                if(gift_revice.length == 1)
                                {
                                    // if(arrDiscount[0] != "")
                                    // {
                                    //     $strDiscountcode="<span>Bạn nhận được 1 mã giảm giá khuyến mãi đi kèm: <b>"+arrDiscount[0]+"</b></span>";
                                    // }
                                    if (!flag_bonus){//trường hợp bonus.
                                        var total_vp = parseInt(gift_revice[0]['parrent'].params.value) + parseInt(value_gif_bonus[0]);

                                        $html += "<span>Kết quả: Bạn đã trúng " + total_vp + c_game_type_value +"</span><br/>";
                                        if (gift_detail.winbox == 1) {

                                            $html += "<span>Mua X1: Nhận được " + total_vp + game_type_value + "</span><br/>";
                                            $html += "<span>Tổng cộng: " + (parseInt(gift_revice[0]['parrent'].params.value) * (parseInt(xvalueaDD[0])) + parseInt(value_gif_bonus[0])) + game_type_value +"</span>";
                                        }
                                    }else {
                                        $html += "<span>Kết quả: "+gift_revice[0]["title"]+"</span><br/>";
                                        if(gift_detail.winbox == 1){
                                            $html += "<span>Mua X1: Nhận được "+gift_revice[0]["parrent"].params.value+"</span><br/>";
                                            //$html += "<span>Quay được "+(xvalue+3)+" hình trùng nhau. Nhận X"+(xvalueaDD[0])+" giải thưởng: "+gift_revice[0]["parrent"].params.value*(xvalueaDD[0])+""+msg_random_bonus[0]+"</span><br/>"+$strDiscountcode;
                                            $html += "<span>Tổng cộng: "+parseInt(gift_revice[0]["parrent"].params.value)*(parseInt(xvalueaDD[0]))+"</span>";
                                        }
                                    }

                                }
                                else
                                {
                                    if (!flag_bonus) {//trường hợp bonus.

                                        $totalRevice = 0;
                                        $html += "<span>Kết quả: Nhận " + gift_revice.length + " phần thưởng cho " + gift_revice.length + " lượt quay.</span><br/>";
                                        $html += "<span><b>Mua X" + gift_revice.length + ":</b></span><br/>";
                                        for ($i = 0; $i < gift_revice.length; $i++) {

                                            var total_vp = parseInt(gift_revice[$i]['parrent'].params.value) + parseInt(value_gif_bonus[$i]);

                                            $html += "<span>Lần quay " + ($i + 1) + ": Bạn đã trúng " + total_vp + c_game_type_value;
                                            if (gift_revice[$i].winbox == 1) {

                                                $html += " - nhận được: " + gift_revice[$i]['parrent'].params.value + " X" + (parseInt(xvalueaDD[$i])) + " = " + (parseInt(gift_revice[$i]['parrent'].params.value) * (parseInt(xvalueaDD[$i])) + parseInt(value_gif_bonus[$i])) + "" + c_game_type_value + "</span><br/><br/>";
                                            } else {
                                                $html += "<br/><br/>";
                                            }
                                            $totalRevice += parseInt(gift_revice[$i]['parrent'].params.value) * (parseInt(xvalueaDD[$i])) + parseInt(value_gif_bonus[$i]);
                                        }

                                        $html += "<span><b>Tổng cộng: " + $totalRevice + c_game_type_value + " </b></span>";
                                    }else{
                                        $totalRevice = 0;
                                        $html += "<span>Kết quả: Nhận "+gift_revice.length+" phần thưởng cho "+gift_revice.length+" lượt quay.</span><br/>";
                                        $html += "<span><b>Mua X"+gift_revice.length+":</b></span><br/>";
                                        for($i=0;$i<gift_revice.length;$i++)
                                        {
                                            // if(arrDiscount[$i] != "")
                                            // {
                                            //     $strDiscountcode="<span>Bạn nhận được 1 mã giảm giá khuyến mãi đi kèm: <b>"+arrDiscount[$i]+"</b></span>";
                                            // }
                                            $html += "<span>Lần quay "+($i + 1)+": "+gift_revice[$i]["title"];
                                            if(gift_revice[$i].winbox == 1){
                                                $html +=" - nhận được: "+gift_revice[$i]["parrent"].params.value+" X"+(parseInt(xvalueaDD[$i]))+" = "+parseInt(gift_revice[$i]["parrent"].params.value)*(parseInt(xvalueaDD[$i]))+""+msg_random_bonus[$i]+"</span><br/>"+$strDiscountcode+"<br/>";
                                            }
                                            else
                                            {
                                                $html +=""+msg_random_bonus[$i]+"<br/>"+$strDiscountcode+"<br/>";
                                            }
                                            $totalRevice +=  parseInt(gift_revice[$i]["parrent"].params.value)*(parseInt(xvalueaDD[$i]))+ parseInt(value_gif_bonus[$i]);
                                        }

                                        $html += "<span><b>Tổng cộng: "+$totalRevice+"</b></span>";
                                    }

                                }
                            }
                            else
                            {
                                $("#btnWithdraw").hide();
                                if(gift_revice.length == 1)
                                {
                                    if (!flag_bonus) {//trường hợp bonus.
                                        var total_vp = parseInt(gift_revice[0]['parrent'].params.value) + parseInt(value_gif_bonus[0]);

                                        $html += "<span>Kết quả chơi thử: Bạn đã trúng " + total_vp + c_game_type_value +"</span><br/>";
                                        if (gift_detail.winbox == 1) {

                                            $html += "<span>Mua X1: Nhận được " + total_vp + game_type_value + "</span><br/>";
                                            $html += "<span>Tổng cộng: " + (parseInt(gift_revice[0]['parrent'].params.value) * (parseInt(xvalueaDD[0])) + parseInt(value_gif_bonus[0])) + game_type_value +"</span>";
                                        }
                                    }else{
                                        $html += "<span>Kết quả chơi thử: "+gift_revice[0]["title"]+"</span><br/>";
                                        if(gift_detail.winbox == 1){
                                            $html += "<span>Mua X1: Nhận được "+gift_revice[0]["parrent"].params.value+"</span><br/>";
                                            //$html += "<span>Quay được "+(xvalue+3)+" hình trùng nhau. Nhận X"+(xvalueaDD[0])+" giải thưởng: "+gift_revice[0]["parrent"].params.value*(xvalueaDD[0])+""+msg_random_bonus[0]+"</span><br/>";
                                            $html += "<span>Tổng cộng: "+parseInt(gift_revice[0]["parrent"].params.value)*(parseInt(xvalueaDD[0]))+"</span>";
                                        }
                                    }

                                }
                                else
                                {
                                    if (!flag_bonus) {//trường hợp bonus.
                                        $totalRevice = 0;
                                        $html += "<span>Kết quả chơi thử: Nhận " + gift_revice.length + " phần thưởng cho " + gift_revice.length + " lượt quay.</span><br/>";
                                        $html += "<span><b>Mua X" + gift_revice.length + ":</b></span><br/>";
                                        for ($i = 0; $i < gift_revice.length; $i++) {

                                            var total_vp = parseInt(gift_revice[$i]['parrent'].params.value) + parseInt(value_gif_bonus[$i]);

                                            $html += "<span>Lần quay " + ($i + 1) + ": Bạn đã trúng " + total_vp + c_game_type_value;
                                            if (gift_revice[$i].winbox == 1) {

                                                $html += " - nhận được: " + gift_revice[$i]['parrent'].params.value + " X" + (parseInt(xvalueaDD[$i])) + " = " + (parseInt(gift_revice[$i]['parrent'].params.value) * (parseInt(xvalueaDD[$i])) + parseInt(value_gif_bonus[$i])) + "" + c_game_type_value + "</span><br/><br/>";
                                            } else {
                                                $html += "<br/><br/>";
                                            }
                                            $totalRevice += parseInt(gift_revice[$i]['parrent'].params.value) * (parseInt(xvalueaDD[$i])) + parseInt(value_gif_bonus[$i]);
                                        }

                                        $html += "<span><b>Tổng cộng: " + $totalRevice + c_game_type_value + " </b></span>";
                                    }else{
                                        $totalRevice = 0;
                                        $html += "<span>Kết quả chơi thử: Nhận "+gift_revice.length+" phần thưởng cho "+gift_revice.length+" lượt quay.</span><br/>";
                                        $html += "<span><b>Mua X"+gift_revice.length+":</b></span><br/>";
                                        for($i=0;$i<gift_revice.length;$i++)
                                        {
                                            $html += "<span>Lần quay "+($i + 1)+": "+gift_revice[$i]['parrent'].title;
                                            if(gift_revice[$i].winbox == 1){
                                                $html +=" - nhận được: "+gift_revice[$i]["parrent"].params.value+" X"+(parseInt(xvalueaDD[$i]))+" = "+parseInt(gift_revice[$i]["parrent"].params.value)*(parseInt(xvalueaDD[$i]))+""+msg_random_bonus[$i]+"</span><br/>";
                                            }
                                            else
                                            {
                                                $html +=""+msg_random_bonus[$i]+"<br/>";
                                            }
                                            $totalRevice +=  parseInt(gift_revice[$i]["parrent"].params.value)*(parseInt(xvalueaDD[$i]))+ parseInt(value_gif_bonus[$i]);
                                        }

                                        $html += "<span><b>Tổng cộng: "+$totalRevice+"</b></span>";
                                    }
                                }
                            }
                        }
                        if (!showwithdrawbtn) {
                            $("#btnWithdraw").hide();
                        }else{ $("#btnWithdraw").show(); }

                        $('#noticeModal .content-popup').html($html);

                        if (userpoint > 99) {
                            getgifbonus();
                        }
                        $('#noticeModal').modal('show');
                        if (free_wheel < 1) {
                            $('.num-play-free').hide();
                        } else {
                            $('.num-play-free').html("(Bạn còn " + free_wheel + " lượt quay miễn phí)");
                        }
                        if (num_roll_remain == 0) {
                            $('.deposit-btn').show();
                        } else {
                            $('.deposit-btn').hide();
                        }
                    }
                }
            });

            $('body').delegate('.reLoad', 'click', function() {
                location.reload();
            })
        </script>
        <style>
            .box img.active{box-shadow:0 0 1px #fff, 0 0 2px #fff, 0 0 45px #f00, 0 0 30px #ff0013, 0 0 25px #f10303}
        </style>
        <script type="text/javascript">
            $( document ).ready(function() {
                $(document).on('scroll',function(){
                    if($(window).width() > 1024){
                        if ($(this).scrollTop() > 100) {
                            $(".nav-bar-container").css("height","90px");
                            $(".nav-bar-category .nav li a").css("line-height","90px");
                            $("header .nav-bar").css("background-color","rgba(0,0,0,0.5)");
                            $(".nav-bar-brand").css("margin","14px");

                        } else {
                            $(".nav-bar-container").css("height","120px");
                            $(".nav-bar-category .nav li a").css("line-height","120px");
                            $(".nav-bar-brand").css("margin","20px 0");
                            $("header .nav-bar").css("background-color","rgba(0,0,0,0.8)");
                        }
                    }

                });
                $('.item_play_intro_viewmore').click(function(){
                    $('.item_play_intro_viewless').css("display","flex");
                    $('.item_play_intro_viewmore').css("display","none");
                    $(".item_play_intro_content").addClass( "showtext" );
                });
                $('.item_play_intro_viewless').click(function(){
                    $('.item_play_intro_viewmore').css("display","flex");
                    $('.item_play_intro_viewless').css("display","none");
                    $(".item_play_intro_content").removeClass( "showtext");
                });
                $('.item_spin_list_more').click(function(){
                    $('.item_spin_list').css("overflow","auto");
                    $('.item_spin_list_less').css("display","block");
                    $(".item_spin_list_more").css("display","none");
                });
                $('.item_spin_list_less').click(function(){
                    $('.item_spin_list').css("overflow","hidden");
                    $('.item_spin_list_less').css("display","none");
                    $(".item_spin_list_more").css("display","block");
                });


            });
        </script>
        <script>
            $(".nav-tabs #tap1-tab-1").on("click",function(){
                $(".active").removeClass("active");
                $(this).parents("li").addClass("active");
                $(".tab-pane").hide();
                $("#tap1-pane-1").show();
            })
            $(".nav-tabs #tap1-tab-2").on("click",function(){
                $(".active").removeClass("active");
                $(this).parents("li").addClass("active");
                $(".tab-pane").hide();
                $("#tap1-pane-2").show();
            })
            $(".nav-tabs #tap1-tab-3").on("click",function(){
                $(".active").removeClass("active");
                $(this).parents("li").addClass("active");
                $(".tab-pane").hide();
                $("#tap1-pane-3").show();

            })
        </script>
        @break

        @case('smashwheel')
        @case('rungcay')
        @case('gieoque')
        <script>
            $(document).ready(function(e) {

                var saleoffpass = "";
                //var saleoffmessage = "";
                var userpoint = 0;
                var numrollbyorder = 0;
                var roll_check = true;
                var num_loop = 4;
                var angle_gift = '';
                var num_gift = '{{count($result->group->items)}}';
                var gift_detail = '';
                var num_roll_remain = 0;
                var angles = 0;
                var arrxgt;
                var free_wheel = 0;
                var value_gif_bonus = '';
                var msg_random_bonus = '';
                var game_type_value = "";
                var showwithdrawbtn = true;
                //var arrDiscount = '';
                var game_type_value = "";

                $('body').delegate('#start-played', 'click', function() {
                    $('#type_play').val('real');
                    play();
                });

                $('body').delegate('.num-play-try', 'click', function() {
                    $('#type_play').val('try');
                    play();
                });

                //Click nút chơi
                function play(){
                    if (roll_check) {
                        $('#lac_lixi').attr('src',$("#hdImageDapLu").val());
                        roll_check = false;
                        saleoffpass = $("#saleoffpass").val();
                        numrolllop = $("#numrolllop").val();
                        $.ajax({
                            url: '/minigame-play',
                            datatype: 'json',
                            data: {
                                _token: $('meta[name="csrf-token"]').attr('content'),
                                id: '{{$result->group->id}}',
                                numrolllop: numrolllop,
                                numrollbyorder: numrollbyorder,
                                typeRoll: $('#type_play').val(),
                                saleoffpass: saleoffpass,
                            },
                            type: 'POST',
                            success: function(data) {
                                if (data.status == 4) {
                                    location.href='/login?return_url='+window.location.href;
                                } else if (data.status == 3) {
                                    $('#lac_lixi').attr('src',$("#hdImageLD").val());
                                    roll_check = true;
                                    $('#naptheModal').modal('show')
                                    return;
                                } else if (data.status == 0) {
                                    $('#lac_lixi').attr('src',$("#hdImageLD").val());
                                    roll_check = true;
                                    $('#noticeModal .content-popup').text(data.msg);
                                    $('#noticeModal').modal('show');
                                    return;
                                }
                                showwithdrawbtn = data.showwithdrawbtn;
                                numrollbyorder = parseInt(data.numrollbyorder) + 1;
                                gift_detail = data.gift_detail;
                                game_type_value = data.game_type_value;
                                if(gift_detail.image.length > 0)
                                {
                                    $('#lac_lixi').attr('src',gift_detail.image);
                                }
                                gift_revice = data.arr_gift;
                                //arrDiscount = data.arrDiscount;
                                arrxgt = data.xgt;
                                if (data.xgt > 0) {
                                    xvalue = data.xgt[data.xgt.length - 1];
                                } else {
                                    xvalue = 0;
                                }
                                value_gif_bonus = data.value_gif_bonus;
                                msg_random_bonus = data.msg_random_bonus;
                                xvalueaDD = data.xValue;
                                free_wheel = data.free_wheel;
                                num_roll_remain = gift_detail.num_roll_remain;
                                userpoint = data.userpoint;
                                angles = 0;
                                angle_gift = gift_detail.order * (360 / num_gift);
                                loop();

                                if($('#type_play').val()=='real'){

                                    if(userpoint<100){
                                        $(".item_play_spin_progress_bubble").css("width", data.userpoint + "%")
                                    }else{
                                        $(".item_play_spin_progress_percent").css("width", "100%");
                                        $(".item_play_spin_progress_percent").addClass('clickgif');
                                    }
                                    $(".item_play_spin_progress_percent").html(data.userpoint + "/100 point");
                                    $("#saleoffpass").val("");
                                    //saleoffmessage = data.saleMessage;
                                }
                            },
                            error: function() {
                                $('#lac_lixi').attr('src',$("#hdImageLD").val());
                                $('#noticeModal .content-popup').text('Có lỗi xảy ra. Vui lòng thử lại!');
                                $('#noticeModal').modal('show');
                            }
                        })
                    }
                };


                function getgifbonus() {
                    if($('#checkPoint').val() != "1"){
                        return;
                    }
                    $.ajax({
                        url: '/minigame-bonus',
                        datatype: 'json',
                        data: {
                            _token: $('meta[name="csrf-token"]').attr('content'),
                            id: '{{$result->group->id}}',
                        },
                        type: 'POST',
                        success: function(data) {
                            if (data.status == 0) {
                                $('#noticeModal .content-popup').text(data.msg);
                                $('#noticeModal').modal('show');
                                return;
                            }
                            gift_detail = data.gift_detail;
                            if(gift_detail.image.length > 0)
                            {
                                $('#lac_lixi').attr('src',gift_detail.image);
                            }

                            var flag_bonus = true;
                            var c_game_type_value = '';

                            if (data.game_type_value){
                                c_game_type_value = " " + data.game_type_value;
                            }

                            if (data.value_gif_bonus.length > 0){
                                for (let i = 0; i < data.value_gif_bonus.length; i++ ){
                                    if (parseInt(data.value_gif_bonus[i]) > 0){
                                        flag_bonus = false;
                                    }
                                }
                            }

                            var total_vp = parseInt(data.arr_gift[0]['parrent'].params.value) + parseInt(data.value_gif_bonus[0]);

                            if (!flag_bonus){
                                var html_bonus = "";
                                html_bonus += "</br>";
                                html_bonus += "</br>";
                                html_bonus += "Nổ hũ may mắn - bạn đã trúng thêm " + total_vp + c_game_type_value;
                                $('#noticeModal .content-popup .appendContent').append(html_bonus);

                            }else{
                                var html_bonus = "";
                                html_bonus += "</br>";
                                html_bonus += "</br>";
                                html_bonus += data.msg + " - " + data.arr_gift[0].title;
                                $('#noticeModal .content-popup .appendContent').append(html_bonus);
                            }

                            //$("#noticeModalNoHu #btnWithdraw").hide();
                            $('#noticeModal').modal('show');
                            var userpoint = data.userpoint;

                            if(userpoint<100){
                                $(".item_play_spin_progress_bubble").css("width", data.userpoint + "%");
                                $(".item_play_spin_progress_percent").removeClass('clickgif');
                            }else{
                                $(".item_play_spin_progress_bubble").css("width", "100%");
                                $(".item_play_spin_progress_percent").addClass('clickgif');
                            }
                            $(".item_play_spin_progress_percent").html(data.userpoint + "/100 point");
                            $(".pyro").show();
                            setTimeout(function(){
                                $(".pyro").hide();
                            },6000)
                        },
                        error: function() {
                            $('#noticeModal .content-popup').text('Có lỗi xảy ra. Vui lòng thử lại!');
                            $('#noticeModal').modal('show');
                        }
                    })
                }

                function loop() {
                    roll_check = true;

                    $("#btnWithdraw").show();
                    if (gift_detail.winbox == 0) {
                        $("#btnWithdraw").hide();
                    } else {
                        if (gift_detail.gift_type == 0) {
                            $("#btnWithdraw").html("Rút " + $("#withdrawruby_" + gift_detail.game_type).val());
                            $("#btnWithdraw").attr('href', '/withdrawitem-' + gift_detail.game_type);
                        } else if (gift_detail.gift_type == 1) {
                            $("#btnWithdraw").html("Kiểm tra nick trúng");
                            $("#btnWithdraw").attr('href', '/minigame-logacc-' + '{{$result->group->id}}');
                            // } else if (gift_detail.gift_type == 'nrocoin') {
                            //     $("#btnWithdraw").html("Rút vàng");
                            //     $("#btnWithdraw").attr('href', '/withdrawservice?id=' + $("#ID_NROCOIN").val());
                            // } else if (gift_detail.gift_type == 'nrogem') {
                            //     $("#btnWithdraw").html("Rút ngọc");
                            //     $("#btnWithdraw").attr('href', '/withdrawservice?id=' + $("#ID_NROGEM").val());
                            // } else if (gift_detail.gift_type == 'nroxu') {
                            //     $("#btnWithdraw").html("Rút xu");
                            //     $("#btnWithdraw").attr('href', '/withdrawservice?id=' + $("#ID_NINJAXU").val());
                        } else if (gift_detail.gift_type == 2) {
                            $("#btnWithdraw").html("Load lại trang");
                            $("#btnWithdraw").removeAttr("href");
                            $("#btnWithdraw").addClass('reLoad');
                        } else {
                            $("#btnWithdraw").hide();
                        }

                    }
                    if (gift_revice.length > 0) {
                        $html = "";
                        $strDiscountcode="";

                        var flag_bonus = true;

                        if (value_gif_bonus.length > 0){
                            for (let i = 0; i < value_gif_bonus.length; i++ ){
                                if (parseInt(value_gif_bonus[i]) > 0){
                                    flag_bonus = false;
                                }
                            }
                        }

                        var c_game_type_value = '';
                        if (game_type_value){
                            c_game_type_value = " " + game_type_value;
                        }

                        // if(saleoffmessage.length > 0)
                        // {
                        //     $html += "<br/><span style='font-size: 14px;color: #f90707;font-style: italic;display: block;text-align: center;'>"+saleoffmessage+"</span><br/>";
                        // }

                        if($('#type_play').val() == "real")
                        {
                            if(gift_revice.length == 1)
                            {
                                // if(arrDiscount[0] != "")
                                // {
                                //     $strDiscountcode="<span>Bạn nhận được 1 mã giảm giá khuyến mãi đi kèm: <b>"+arrDiscount[0]+"</b></span>";
                                // }
                                if (!flag_bonus){//trường hợp bonus.
                                    var total_vp = parseInt(gift_revice[0]['parrent'].params.value) + parseInt(value_gif_bonus[0]);

                                    $html += "<span>Kết quả: Bạn đã trúng " + total_vp + c_game_type_value +"</span><br/>";
                                    if (gift_detail.winbox == 1) {

                                        $html += "<span>Mua X1: Nhận được " + total_vp + game_type_value + "</span><br/>";
                                        $html += "<span>Tổng cộng: " + (parseInt(gift_revice[0]['parrent'].params.value) * (parseInt(xvalueaDD[0])) + parseInt(value_gif_bonus[0])) + game_type_value +"</span>";
                                    }
                                }else {
                                    $html += "<span>Kết quả: "+gift_revice[0]["title"]+"</span><br/>";
                                    if(gift_detail.winbox == 1){
                                        $html += "<span>Mua X1: Nhận được "+gift_revice[0]["parrent"].params.value+"</span><br/>";
                                        //$html += "<span>chơi được "+(xvalue+3)+" hình trùng nhau. Nhận X"+(xvalueaDD[0])+" giải thưởng: "+gift_revice[0]["parrent"].params.value*(xvalueaDD[0])+""+msg_random_bonus[0]+"</span><br/>"+$strDiscountcode;
                                        $html += "<span>Tổng cộng: "+parseInt(gift_revice[0]["parrent"].params.value)*(parseInt(xvalueaDD[0]))+"</span>";
                                    }
                                }
                            }
                            else
                            {
                                if (!flag_bonus) {//trường hợp bonus.

                                    $totalRevice = 0;
                                    $html += "<span>Kết quả: Nhận " + gift_revice.length + " phần thưởng cho " + gift_revice.length + " lượt chơi.</span><br/>";
                                    $html += "<span><b>Mua X" + gift_revice.length + ":</b></span><br/>";
                                    for ($i = 0; $i < gift_revice.length; $i++) {

                                        var total_vp = parseInt(gift_revice[$i]['parrent'].params.value) + parseInt(value_gif_bonus[$i]);

                                        $html += "<span>Lần quay " + ($i + 1) + ": Bạn đã trúng " + total_vp + c_game_type_value;
                                        if (gift_revice[$i].winbox == 1) {

                                            $html += " - nhận được: " + gift_revice[$i]['parrent'].params.value + " X" + (parseInt(xvalueaDD[$i])) + " = " + (parseInt(gift_revice[$i]['parrent'].params.value) * (parseInt(xvalueaDD[$i])) + parseInt(value_gif_bonus[$i])) + "" + c_game_type_value + "</span><br/><br/>";
                                        } else {
                                            $html += "<br/><br/>";
                                        }
                                        $totalRevice += parseInt(gift_revice[$i]['parrent'].params.value) * (parseInt(xvalueaDD[$i])) + parseInt(value_gif_bonus[$i]);
                                    }

                                    $html += "<span><b>Tổng cộng: " + $totalRevice + c_game_type_value + " </b></span>";
                                }else{
                                    $totalRevice = 0;
                                    $html += "<span>Kết quả: Nhận "+gift_revice.length+" phần thưởng cho "+gift_revice.length+" lượt chơi.</span><br/>";
                                    $html += "<span><b>Mua X"+gift_revice.length+":</b></span><br/>";
                                    for($i=0;$i<gift_revice.length;$i++)
                                    {
                                        // if(arrDiscount[$i] != "")
                                        // {
                                        //     $strDiscountcode="<span>Bạn nhận được 1 mã giảm giá khuyến mãi đi kèm: <b>"+arrDiscount[$i]+"</b></span>";
                                        // }
                                        $html += "<span>Lần chơi "+($i + 1)+": "+gift_revice[$i]["title"];
                                        if(gift_revice[$i].winbox == 1){
                                            $html +=" - nhận được: "+gift_revice[$i]["parrent"].params.value+" X"+(parseInt(xvalueaDD[$i]))+" = "+parseInt(gift_revice[$i]["parrent"].params.value)*(parseInt(xvalueaDD[$i]))+""+msg_random_bonus[$i]+"</span><br/>"+$strDiscountcode+"<br/>";
                                        }
                                        else
                                        {
                                            $html +=""+msg_random_bonus[$i]+"<br/>"+$strDiscountcode+"<br/>";
                                        }
                                        $totalRevice +=  parseInt(gift_revice[$i]["parrent"].params.value)*(parseInt(xvalueaDD[$i]))+ parseInt(value_gif_bonus[$i]);
                                    }

                                    $html += "<span><b>Tổng cộng: "+$totalRevice+"</b></span>";
                                }

                            }
                        }
                        else
                        {
                            $("#btnWithdraw").hide();
                            if(gift_revice.length == 1)
                            {
                                if (!flag_bonus) {//trường hợp bonus.
                                    var total_vp = parseInt(gift_revice[0]['parrent'].params.value) + parseInt(value_gif_bonus[0]);

                                    $html += "<span>Kết quả chơi thử: Bạn đã trúng " + total_vp + c_game_type_value +"</span><br/>";
                                    if (gift_detail.winbox == 1) {

                                        $html += "<span>Mua X1: Nhận được " + total_vp + game_type_value + "</span><br/>";
                                        $html += "<span>Tổng cộng: " + (parseInt(gift_revice[0]['parrent'].params.value) * (parseInt(xvalueaDD[0])) + parseInt(value_gif_bonus[0])) + game_type_value +"</span>";
                                    }
                                }else{
                                    $html += "<span>Kết quả chơi thử: "+gift_revice[0]["title"]+"</span><br/>";
                                    if(gift_detail.winbox == 1){
                                        $html += "<span>Mua X1: Nhận được "+gift_revice[0]["parrent"].params.value+"</span><br/>";
                                        //$html += "<span>chơi được "+(xvalue+3)+" hình trùng nhau. Nhận X"+(xvalueaDD[0])+" giải thưởng: "+gift_revice[0]["parrent"].params.value*(xvalueaDD[0])+""+msg_random_bonus[0]+"</span><br/>";
                                        $html += "<span>Tổng cộng: "+parseInt(gift_revice[0]["parrent"].params.value)*(parseInt(xvalueaDD[0]))+"</span>";
                                    }
                                }

                            }
                            else
                            {
                                if (!flag_bonus) {//trường hợp bonus.
                                    $totalRevice = 0;
                                    $html += "<span>Kết quả chơi thử: Nhận " + gift_revice.length + " phần thưởng cho " + gift_revice.length + " lượt chơi.</span><br/>";
                                    $html += "<span><b>Mua X" + gift_revice.length + ":</b></span><br/>";
                                    for ($i = 0; $i < gift_revice.length; $i++) {

                                        var total_vp = parseInt(gift_revice[$i]['parrent'].params.value) + parseInt(value_gif_bonus[$i]);

                                        $html += "<span>Lần quay " + ($i + 1) + ": Bạn đã trúng " + total_vp + c_game_type_value;
                                        if (gift_revice[$i].winbox == 1) {

                                            $html += " - nhận được: " + gift_revice[$i]['parrent'].params.value + " X" + (parseInt(xvalueaDD[$i])) + " = " + (parseInt(gift_revice[$i]['parrent'].params.value) * (parseInt(xvalueaDD[$i])) + parseInt(value_gif_bonus[$i])) + "" + c_game_type_value + "</span><br/><br/>";
                                        } else {
                                            $html += "<br/><br/>";
                                        }
                                        $totalRevice += parseInt(gift_revice[$i]['parrent'].params.value) * (parseInt(xvalueaDD[$i])) + parseInt(value_gif_bonus[$i]);
                                    }

                                    $html += "<span><b>Tổng cộng: " + $totalRevice + c_game_type_value + " </b></span>";
                                }else{
                                    $totalRevice = 0;
                                    $html += "<span>Kết quả chơi thử: Nhận "+gift_revice.length+" phần thưởng cho "+gift_revice.length+" lượt chơi.</span><br/>";
                                    $html += "<span><b>Mua X"+gift_revice.length+":</b></span><br/>";
                                    for($i=0;$i<gift_revice.length;$i++)
                                    {
                                        $html += "<span>Lần chơi "+($i + 1)+": "+gift_revice[$i]["title"];
                                        if(gift_revice[$i].winbox == 1){
                                            $html +=" - nhận được: "+gift_revice[$i]["parrent"].params.value+" X"+(parseInt(xvalueaDD[$i]))+" = "+parseInt(gift_revice[$i]["parrent"].params.value)*(parseInt(xvalueaDD[$i]))+""+msg_random_bonus[$i]+"</span><br/>";
                                        }
                                        else
                                        {
                                            $html +=""+msg_random_bonus[$i]+"<br/>";
                                        }
                                        $totalRevice +=  parseInt(gift_revice[$i]["parrent"].params.value)*(parseInt(xvalueaDD[$i]))+ parseInt(value_gif_bonus[$i]);
                                    }

                                    $html += "<span><b>Tổng cộng: "+$totalRevice+"</b></span>";
                                }

                            }
                        }
                    }
                    if (!showwithdrawbtn) {
                        $("#btnWithdraw").hide();
                    }else{ $("#btnWithdraw").show(); }

                    $('#noticeModal .content-popup').html($html);

                    if (userpoint > 99) {
                        getgifbonus();
                    }
                    $('#noticeModal').modal('show');
                }
            });

            $('body').delegate('.reLoad', 'click', function() {
                location.reload();
            })
        </script>
        @break
        @default
    @endswitch


    <script>
        function getgifbonus() {
            console.log($('#checkPoint').val())
            if ($('#checkPoint').val() != "1") {
                return;
            }
        }
    </script>
@endsection

