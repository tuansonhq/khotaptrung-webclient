@extends('theme_3.frontend.layouts.master')
@section('seo_head')
    @include('frontend.widget.__seo_head',with(['data'=>$result->group]))
@endsection
@section('styles')
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/style_phu/breadcrumb.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/style_phu/spin.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/style_phu/layout_page.css">
@endsection
@section('scripts')
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/js_phu/spin.js"></script>
@endsection
@section('content')
{{--       QUaan Huyy               --}}
    <div class="container_page container">
        <section class="breadcrumb-container">
            <ul class="breadcrumb breadcrumb-arrow">
                <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="minigame">Danh mục vòng quay</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">{{$result->group->title}}</a></li>
            </ul>
        </section>
        <section class="breadcrumb-mobile">
            <a href="/minigame" style="display: block">
                <img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/back.svg" alt="">
            </a>
            <h3>{{$result->group->title}}</h3>
        </section>
        <section class="rotation-content">
            <div class="row">
                <div class="col-12 col-lg-7 rotation-content-sm">
                    <div class="rotation-detail">
                        <div class="rotation-header">
                            <h3>{{$result->group->title}}</h3>
                            @if(isset($result->group->params->thele))
                            <button class="button-secondary" id="gamRuleButton">Thể lệ</button>
                            @endif
                        </div>
                        <div class="rotation-player">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/security-user 1.svg" alt="">
                            @if(isset($result->group->params->fake_num_play))
                            <p><span id="userCount">
                                    {{ str_replace(',','.',number_format($result->group->params->fake_num_play)) }}</span> người đang chơi
                            </p>
                            @endif
                        </div>

                        @if(isset($currentPlayList) && $currentPlayList != '')
                        <div class="rotation-notify">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/sound.svg" alt="">
                            <marquee class="rotation-marquee">
                                <div class="rotation-marquee-item">
                                    {!! $currentPlayList !!}
                                </div>
                            </marquee>
                        </div>
                        @endif
                        <div class="rotation-sale">
                            <div class="rotation-sale-header">
                                <p><img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/flash_img.png" alt=""> Flash sale</p>
                                <div class="rotation-sale-time">
                                    <span><img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/clock.svg" alt=""> Kết thúc trong</span>
                                    <ul>
                                        <li><span id="hourRemain"></span></li>
                                        <li><span id="minuteRemain"></span></li>
                                        <li><span id="secondRemain"></span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="rotation-sale-content">
                                <p>
                                    <span id="rotationFirstPrice">
                                        @if(isset($result->group->params->percent_sale))
                                            {{ str_replace(',','.',number_format(($result->group->params->percent_sale*$result->group->price)/100 + $result->group->price)) }} đ
                                        @endif
                                    </span>
                                    <span id="rotationSalePrice">{{ str_replace(',','.',number_format($result->group->price)) }} đ</span>
                                    @if(isset($result->group->params->percent_sale))
                                    <span id="rotationSaleRatio">Giảm {{ $result->group->params->percent_sale }}%</span>
                                    @endif
                                </p>
                            </div>
                        </div>
                        <div class="rotation">
                            <div class="rotation-button rotation-button-quanhuy" id="start-played">
                                <img class="lazy" src="{{\App\Library\MediaHelpers::media($result->group->image_icon)}}" alt="">
                            </div>
                            <img src="{{\App\Library\MediaHelpers::media($result->group->params->image_static)}}" id="lac_lixi" style="width: 100%;max-width: 100%;opacity: 1;background: url({{\App\Library\MediaHelpers::media($result->group->params->image_background)}}) no-repeat center center;background-size: contain;" alt="">
                            <input type="hidden" value="{{\App\Library\MediaHelpers::media($result->group->params->image_static)}}" id="hdImageLD">
                            <input type="hidden" value="{{\App\Library\MediaHelpers::media($result->group->params->image_animation)}}" id="hdImageDapLu">
                        </div>
                        <div class="pyro" style="position: absolute;top: 0;left: 0;width: 182px;height: 37px;display:none"><div class="before"></div><div class="after"></div></div>
                        @if($result->checkPoint==1)
                        <div class="rotation-points">
                            <div class="rotation-points-title">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/mdi_police-badge.svg" alt="">
                                <p>Hũ điểm</p>
                                <div class="info-rotation">
                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/info.svg" alt="">
                                    <div class="rotation-tooltip">
                                        <p>Mỗi lượt quay sẽ được cộng 10 point.</p>
                                        <p>Tích luỹ đủ số point để nhận thêm lượt quay</p>
                                    </div>
                                </div>
                            </div>
                            <div class="progress-wrapper">
                                <div class="progress-bar" style="width: {{$result->pointuser<100?$result->pointuser:'100'}}%"></div>
                            </div>
                        </div>
                        @endif
                        <div class="rotation-inputs row">
                            @if($result->checkVoucher==1)
                            <div class="col-12 col-md-6">
                                <input class="input-primary" type="text" name="discount_code" placeholder="Nhập mã giảm giá">
                            </div>
                            @endif
                            <div class="col-12 col-md-6">
                                <select class="rotation-inputs-select select-primary" name="" id="numrolllop">
                                    <option value="1">Mua X1/{{$result->group->price/1000}}k 1 lần chơi</option>
                                    @if($result->group->params->price_sticky_3 > 0))
                                    <option value="3">Mua X3/{{$result->group->params->price_sticky_3/1000}}k 1 lần chơi</option>
                                    @endif
                                    @if($result->group->params->price_sticky_5 > 0))
                                    <option value="5">Mua X5/{{$result->group->params->price_sticky_5/1000}}k 1 lần chơi</option>
                                    @endif
                                    @if($result->group->params->price_sticky_7 > 0))
                                    <option value="7">Mua X7/{{$result->group->params->price_sticky_7/1000}}k 1 lần chơi</option>
                                    @endif
                                    @if($result->group->params->price_sticky_10 > 0))
                                    <option value="10">Mua X10/{{$result->group->params->price_sticky_10/1000}}k 1 lần chơi</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="rotation-buttons row">
                            @if($result->group->params->is_try == 1)
                            <div class="col-6">
                                <button id="playerDemo" class="button-secondary button-demo num-play-try">Chơi thử</button>
                            </div>
                            @endif
                            <div class="col-6">
                                <button id="start-played" class="button-primary button-play">Quay ngay</button>
                            </div>
                        </div>
                    </div>
                    @if(isset($result->group->description))
                    <div class="service-detail">
                        <h6>Chi tiết dịch vụ</h6>
                        <div class="service-detail-content">
                            {!! $result->group->description !!}
                        </div>
                        <div class="see-more">
                            <span id="seeMore">Xem thêm</span>
                            <span id="seeLess" style="display: none;">Rút gọn</span>
                        </div>
                    </div>
                    @endif
                    <div class="rotation-leaderboard leaderboard-md">
                        <div class="leaderboard-header">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/top-leaderboard.png" alt="">
                            <h5>Top quay thưởng</h5>
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

                            <div class="leaderboard-table-container content-video-in">

                                <div class="leaderboard-head row no-gutters">
                                    <div class="leaderboard-head-item col-3">
                                        <p>Tài khoản</p>
                                    </div>
                                    <div class="leaderboard-head-item col-5">
{{--                                        <p>Giải thưởng</p>--}}
                                    </div>
                                    <div class="leaderboard-head-item col-4">
                                        <p>Lượt quay</p>
                                    </div>
                                </div>

                                <div class="leaderboard-content leaderboard-1 content-video-in">


                                    @if(isset($topDayList))
                                        @foreach($topDayList as $item)
                                            <div class="leaderboard-item row no-gutters">
                                        <div class="col-3 leaderboard-item-name">
                                            <p>{{$item['name']}}</p>
                                        </div>
                                        <div class="col-5">
{{--                                            +100.000 kim cương--}}
                                        </div>
                                        <div class="col-4">
                                            {{ str_replace(',','.',number_format($item['numwheel'])) }} lượt
                                        </div>
                                    </div>
                                        @endforeach
                                    @endif

                                </div>
                                <div class="leaderboard-content leaderboard-2" style="display: none;">
                                    @if(isset($top7DayList))
                                        @foreach($top7DayList as $item)
                                            <div class="leaderboard-item row no-gutters">
                                                <div class="col-3 leaderboard-item-name">
                                                    <p>{{$item['name']}}</p>
                                                </div>
                                                <div class="col-5">
{{--                                                    +100.000 kim cương--}}
                                                </div>
                                                <div class="col-4">
                                                    {{ str_replace(',','.',number_format($item['numwheel'])) }} lượt
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="leaderboard-content leaderboard-3" style="display: none;">

                                    <div class="leaderboard-item row no-gutters">
                                        <div class="col-12 leaderboard-item-name">
                                            {!!$result->group->params->phanthuong!!}
                                        </div>
                                    </div>

                                </div>


                            </div>
                        </div>

                        <div class="col-md-12 left-right text-center js-toggle-content media-web pb-3">
                            <div class="view-more">
                                <a href="javascript:void(0)" class="global__link__default">Xem thêm<i class="__icon__default --sm__default --link__default ml-1" style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/icons/arrow-down.png)"></i></a>
                            </div>
                            <div class="view-less">
                                <a href="javascript:void(0)" class="global__link__default">Thu gọn<i class="__icon__default --sm__default --link__default ml-1" style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/icons/iconright.png)"></i></a>

                            </div>
                        </div>
                        <div class="leaderboard-buttons row">
                            <div class="col-6">
                                <a href="{{route('getLog',[$result->group->id])}}" class="the-a-lich-su button-secondary history-spin-button">
                                    Lịch sử quay
                                </a>
                            </div>
                            <div class="col-6">
                                <button class="button-primary">Rút quà</button>
                            </div>
                        </div>
                    </div>
{{--                    @if(isset($inbox))--}}
                    <div class="rotation-comment">
                        <h6>Bình luận</h6>
                        <div class="comment-block">
                            <div class="comment-item">
                                <div class="comment-avatar">
                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/user_avatar.png" alt="">
                                </div>
                                <div class="comment-detail">
                                    <div class="comment-info">
                                        <h6>Tiểu lý phi down</h6>
                                        <span>Vừa xong</span>
                                    </div>
                                    <div class="comment-content">
                                        Bị lừa nhiều rồi, giờ mới tìm được web uy tín, thanks ad
                                    </div>
                                    <div class="comment-interact">
                                        <span id="likeComment"><img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/hearts-suit 1.svg" alt=""> Thích</span>
                                        <span id="replyComment"><img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/comment 1.svg" alt=""> Trả lời</span>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-item">
                                <div class="comment-avatar">
                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/user_avatar.png" alt="">
                                </div>
                                <div class="comment-detail">
                                    <div class="comment-info">
                                        <h6>Tiểu lý phi down</h6>
                                        <span>Vừa xong</span>
                                    </div>
                                    <div class="comment-content">
                                        Bị lừa nhiều rồi, giờ mới tìm được web uy tín, thanks ad
                                    </div>
                                    <div class="comment-interact">
                                        <span id="likeComment"><img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/hearts-suit 1.svg" alt=""> Thích</span>
                                        <span id="replyComment"><img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/comment 1.svg" alt=""> Trả lời</span>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-item">
                                <div class="comment-avatar">
                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/user_avatar.png" alt="">
                                </div>
                                <div class="comment-detail">
                                    <div class="comment-info">
                                        <h6>Tiểu lý phi down</h6>
                                        <span>Vừa xong</span>
                                    </div>
                                    <div class="comment-content">
                                        Bị lừa nhiều rồi, giờ mới tìm được web uy tín, thanks ad
                                    </div>
                                    <div class="comment-interact">
                                        <span id="likeComment"><img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/hearts-suit 1.svg" alt=""> Thích</span>
                                        <span id="replyComment"><img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/comment 1.svg" alt=""> Trả lời</span>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-item">
                                <div class="comment-avatar">
                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/user_avatar.png" alt="">
                                </div>
                                <div class="comment-detail">
                                    <div class="comment-info">
                                        <h6>Tiểu lý phi down</h6>
                                        <span>Vừa xong</span>
                                    </div>
                                    <div class="comment-content">
                                        Bị lừa nhiều rồi, giờ mới tìm được web uy tín, thanks ad
                                    </div>
                                    <div class="comment-interact">
                                        <span id="likeComment"><img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/hearts-suit 1.svg" alt=""> Thích</span>
                                        <span id="replyComment"><img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/comment 1.svg" alt=""> Trả lời</span>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-item">
                                <div class="comment-avatar">
                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/user_avatar.png" alt="">
                                </div>
                                <div class="comment-detail">
                                    <div class="comment-info">
                                        <h6>Tiểu lý phi down</h6>
                                        <span>Vừa xong</span>
                                    </div>
                                    <div class="comment-content">
                                        Bị lừa nhiều rồi, giờ mới tìm được web uy tín, thanks ad
                                    </div>
                                    <div class="comment-interact">
                                        <span id="likeComment"><img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/hearts-suit 1.svg" alt=""> Thích</span>
                                        <span id="replyComment"><img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/comment 1.svg" alt=""> Trả lời</span>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-item">
                                <div class="comment-avatar">
                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/user_avatar.png" alt="">
                                </div>
                                <div class="comment-detail">
                                    <div class="comment-info">
                                        <h6>Tiểu lý phi down</h6>
                                        <span>Vừa xong</span>
                                    </div>
                                    <div class="comment-content">
                                        Bị lừa nhiều rồi, giờ mới tìm được web uy tín, thanks ad
                                    </div>
                                    <div class="comment-interact">
                                        <span id="likeComment"><img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/hearts-suit 1.svg" alt=""> Thích</span>
                                        <span id="replyComment"><img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/comment 1.svg" alt=""> Trả lời</span>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-item">
                                <div class="comment-avatar">
                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/user_avatar.png" alt="">
                                </div>
                                <div class="comment-detail">
                                    <div class="comment-info">
                                        <h6>Tiểu lý phi down</h6>
                                        <span>Vừa xong</span>
                                    </div>
                                    <div class="comment-content">
                                        Bị lừa nhiều rồi, giờ mới tìm được web uy tín, thanks ad
                                    </div>
                                    <div class="comment-interact">
                                        <span id="likeComment"><img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/hearts-suit 1.svg" alt=""> Thích</span>
                                        <span id="replyComment"><img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/comment 1.svg" alt=""> Trả lời</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form action="" method="POST">
                            <div class="commment-input">
                                <input type="text" class="input-primary">
                            </div>
                            <div class="comment-button">
                                <button type="submit" class="button-primary">Bình luận</button>
                            </div>
                        </form>
                    </div>
{{--                    @endif--}}
                </div>
                <div class="col-12 col-lg-5 rotation-content-sm">
                    <div class="rotation-leaderboard leaderboard-lg">
                        <div class="leaderboard-buttons row">
                            <div class="col-6">
                                <a href="{{route('getLog',[$result->group->id])}}" class="the-a-lich-su button-secondary history-spin-button">
                                    Lịch sử quay
                                </a>
                            </div>
                            <div class="col-6">
                                <button class="button-primary">Rút quà</button>
                            </div>
                        </div>
                        <div class="leaderboard-header">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/top-leaderboard.png" alt="">
                            <h5>Top quay thưởng</h5>
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
                            <div class="leaderboard-content leaderboard-1 minigame-scroll">
                                @if(isset($topDayList))
                                    @foreach($topDayList as $key => $item)
                                        @if($key < 3)
                                            <div class="leaderboard-item row no-gutters">
                                                <div class="col-4 leaderboard-item-name">
                                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/rating.svg" alt="">
                                                    <p>{{$item['name']}}</p>
                                                </div>
                                                <div class="col-4 leaderboard-item-ar">
{{--                                                    +100.000 kim cương--}}
                                                </div>
                                                <div class="col-4 leaderboard-item-ar">
                                                    {{ str_replace(',','.',number_format($item['numwheel'])) }} lượt
                                                </div>
                                            </div>
                                        @else
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
                                        @endif
                                    @endforeach
                                @endif

                            </div>
                            <div class="leaderboard-content leaderboard-2 minigame-scroll" style="display: none;">
                                @if(isset($top7DayList))
                                    @foreach($top7DayList as $key => $item)
                                        @if($key < 3)
                                            <div class="leaderboard-item row no-gutters">
                                                <div class="col-4 leaderboard-item-name">
                                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/rating.svg" alt="">
                                                    <p>{{$item['name']}}</p>
                                                </div>
                                                <div class="col-4 leaderboard-item-ar">
{{--                                                    +100.000 kim cương--}}
                                                </div>
                                                <div class="col-4 leaderboard-item-ar">
                                                    {{ str_replace(',','.',number_format($item['numwheel'])) }} lượt
                                                </div>
                                            </div>
                                        @else
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
                                        @endif
                                    @endforeach
                                @endif

                            </div>
                            <div class="leaderboard-content leaderboard-3" style="display: none;">
                                @if(isset($result->group->params->phanthuong))
                                <div class="leaderboard-item row no-gutters">
                                    <div class="col-12 leaderboard-item-name">
                                        {!!$result->group->params->phanthuong!!}
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
                    </div>

                    @if($groups_other!=null)
                        @foreach($groups_other as $key => $item)
                            @if($key < 4)
                                <div class="rotation-advertise">
                                    <a href="{{route('getIndex',[$item->slug])}}" target="_blank">
                                        <img src="{{ \App\Library\MediaHelpers::media($item->image) }}" alt="{{$item->title}}">
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    @endif
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
            <div class="box-product">
                <div class="swiper-container list-product" >
                    <div class="swiper-wrapper">
                        @foreach($groups_other as $key => $item)
                            @if($key > 3)
                                <div class="swiper-slide" >
                                    <a href="{{route('getIndex',[$item->slug])}}">
                                        <div class="item-product__box-img">

                                            <img src="{{ \App\Library\MediaHelpers::media($item->image) }}" alt="{{$item->title}}">

                                        </div>
                                        <div class="item-product__box-content">


                                            <div class="item-product__box-name">
                                                {{$item->title}}
                                            </div>
                                            <div class="item-product__box-sale">
                                                Đã bán: {{isset($item->params->fake_num_play)?($item->params->fake_num_play+$item->order_gate_count):$item->order_gate_count}}
                                            </div>
                                            <div class="item-product__box-price">

                                                <div class="special-price">{{number_format($item->price)}} đ</div>
                                                <div class="old-price">{{number_format($item->price*100/80)}} đ</div>
                                                <div class="item-product__sticker-percent">
                                                    -50%
                                                </div>
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
        @endif

    </div>

    <div class="modal fade rotation-modal" id="noticeModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header rotation-modal-header">
                    <h5 class="modal-title">Chúc mừng bạn đã quay trúng</h5>
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
                            <button id="btnWithdraw" class="button-secondary">Rút quà</button>
                        </div>
                        <div class="col-6" style="text-align: right;">
                            <button class="button-primary" data-dismiss="modal">Chơi tiếp</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if(isset($result->group->params->thele))
        @include('theme_3.frontend.widget.modal.__rotation_rule',with(['thele'=>$result->group->params->thele]))
    @endif

    <div class="modal fade" id="naptheModal" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Thông báo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body content-popup" style="font-family: helvetica, arial, sans-serif;">
                    Bạn đã hết lượt chơi. Nạp thẻ để chơi tiếp!
                </div>
                <div class="modal-footer">
                    <a href="/nap-the" class="btn btn-success m-btn m-btn--custom m-btn--icon m-btn--pill" >Nạp thẻ</a>
                    <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>

    <input type="hidden" class="started_at" name="started_at" value="{{ $result->group->started_at??0 }}">

    @foreach(config('constants.'.'game_type') as $item => $key)
        <input type="hidden" id="withdrawruby_{{$item}}" value="{{$key}}">
    @endforeach
    <input type="hidden" id="type_play" value="real">
    <input type="hidden" name="checkPoint" value="{{$result->checkPoint}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script>
        $(document).ready(function(e) {
            // $('#rotationPrize').modal('show')

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
            //var arrDiscount = '';

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
                            numrollbyorder = parseInt(data.numrollbyorder) + 1;
                            gift_detail = data.gift_detail;
                            console.log(gift_detail);
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
                            angles = 0;
                            angle_gift = gift_detail.order * (360 / num_gift);
                            loop();

                            if($('#type_play').val()=='real'){
                                userpoint = data.userpoint;
                                if(userpoint<100){
                                    $(".item_spin_progress_bubble").css("width", data.userpoint + "%")
                                }else{
                                    $(".item_spin_progress_bubble").css("width", "100%");
                                    $(".item_spin_progress_bubble").addClass('clickgif');
                                }
                                $(".item_spin_progress_percent").html(data.userpoint + "/100 point");
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
                        $('#noticeModal .content-popup .appendContent').append(data.msg + " - " + data.arr_gift[0].title);
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

            function loop() {
                roll_check = true;

                $("#btnWithdraw").show();
                if (gift_detail.winbox == 0) {
                    $("#btnWithdraw").hide();
                } else {
                    if (gift_detail.gift_type == 0) {
                        // $("#btnWithdraw").html("Rút " + $("#withdrawruby_" + gift_detail.game_type).val());
                        $("#btnWithdraw").html("Rút Quà");

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

                    if($('#type_play').val() == "real")
                    {
                        if(gift_revice.length == 1)
                        {
                            // if(arrDiscount[0] != "")
                            // {
                            //     $strDiscountcode="<span>Bạn nhận được 1 mã giảm giá khuyến mãi đi kèm: <b>"+arrDiscount[0]+"</b></span>";
                            // }
                            $html += "<span>Kết quả: "+gift_revice[0]["title"]+"</span><br/>";
                            if(gift_detail.winbox == 1){
                                $html += "<span>Mua X1: Nhận được "+gift_revice[0]["parrent"].params.value+"</span><br/>";
                                //$html += "<span>chơi được "+(xvalue+3)+" hình trùng nhau. Nhận X"+(xvalueaDD[0])+" giải thưởng: "+gift_revice[0]["parrent"].params.value*(xvalueaDD[0])+""+msg_random_bonus[0]+"</span><br/>"+$strDiscountcode;
                                $html += "<span>Tổng cộng: "+parseInt(gift_revice[0]["parrent"].params.value)*(parseInt(xvalueaDD[0]))+"</span>";
                            }
                        }
                        else
                        {
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
                    else
                    {
                        $("#btnWithdraw").hide();
                        if(gift_revice.length == 1)
                        {
                            $html += "<span>Kết quả chơi thử: "+gift_revice[0]["title"]+"</span><br/>";
                            if(gift_detail.winbox == 1){
                                $html += "<span>Mua X1: Nhận được "+gift_revice[0]["parrent"].params.value+"</span><br/>";
                                //$html += "<span>chơi được "+(xvalue+3)+" hình trùng nhau. Nhận X"+(xvalueaDD[0])+" giải thưởng: "+gift_revice[0]["parrent"].params.value*(xvalueaDD[0])+""+msg_random_bonus[0]+"</span><br/>";
                                $html += "<span>Tổng cộng: "+parseInt(gift_revice[0]["parrent"].params.value)*(parseInt(xvalueaDD[0]))+"</span>";
                            }
                        }
                        else
                        {
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
@endsection

