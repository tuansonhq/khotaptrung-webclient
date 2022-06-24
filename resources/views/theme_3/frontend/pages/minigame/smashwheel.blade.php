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

    <div class="container_page container">
        <section class="breadcrumb-container">
            <ul class="breadcrumb breadcrumb-arrow">
                <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="minigame">Danh mục vòng quay</a></li>
                <li class="breadcrumb-item"><a href="minigame/slug">Freefire</a></li>
                <li class="breadcrumb-item"><a href="minigame/slug">Chi tiết vòng quay</a></li>
            </ul>
        </section>
        <section class="breadcrumb-mobile">
            <a href="/minigame" style="display: block">
                <img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/back.svg" alt="">
            </a>
            <h3>Chi tiết vòng quay</h3>
        </section>
        <section class="rotation-content">
            <div class="row">
                <div class="col-12 col-lg-7 rotation-content-sm">
                    <div class="rotation-detail">
                        <div class="rotation-header">
                            <h3>{{$result->group->title}}</h3>
                            @if(isset($result->group->params->thele))
                            <button class="button-secondary" id="gamRuleButton">Thể lệ</button>
                            @include('theme_3.frontend.widget.modal.__rotation_rule',with(['thele'=>$result->group->params->thele]))
                            @endif
                        </div>
                        <div class="rotation-player">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/security-user 1.svg" alt="">
                            @if(isset($result->group->params->fake_num_play))
                            <p><span id="userCount">
{{--                                    @php--}}
{{--                                        echo "Số người đang chơi: ".number_format($result->group->params->fake_num_play)." (".rand(3,10)." bạn chung)";--}}
{{--                                    @endphp--}}
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
                                        @if(isset($result->params->percent_sale))
                                            {{ str_replace(',','.',number_format(($result->params->percent_sale*$result->group->price)/100 + $result->group->price)) }} đ
                                        @endif
                                    </span>
                                    <span id="rotationSalePrice">{{ str_replace(',','.',number_format($result->group->price)) }} đ</span>
                                    @if(isset($result->params->percent_sale))
                                    <span id="rotationSaleRatio">Giảm {{ $result->params->percent_sale }}%</span>
                                    @endif
                                </p>
                            </div>
                        </div>
                        <div class="rotation">
                            <div class="rotation-button" id="startRotate">
                                <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/rotation-button.png" alt="">
                            </div>
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/rotation-img.png" alt="">
                        </div>
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
                        <div class="rotation-inputs row">
                            @if($result->checkVoucher==1)
                            <div class="col-12 col-md-6">
                                <input class="input-primary" type="text" name="discount_code" placeholder="Nhập mã giảm giá">
                            </div>
                            @endif
                            <div class="col-12 col-md-6">
                                <select class="rotation-inputs-select select-primary" name="type" id="rotationSelectBlock">
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
                            <div class="leaderboard-table-container item-top-content-minigame">
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
                                <div class="leaderboard-content leaderboard-1 item-top-content">

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
                        <div class="footer-row-ct d-lg-none d-block">
                            <div  class="col-md-12 left-right text-center js-toggle-content">
                                <div class="view-more-top">
                                    Xem thêm <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/arrow-down.png" alt="">
                                </div>
                                <div class="view-less-top">
                                    Rút gọn <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/iconright.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="leaderboard-buttons row">
                            <div class="col-6">
                                <button class="button-secondary history-spin-button">Lịch sử quay</button>
                            </div>
                            <div class="col-6">
                                <button class="button-primary">Rút quà</button>
                            </div>
                        </div>
                    </div>
                    @if(isset($inbox))
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
                    @endif
                </div>
                <div class="col-12 col-lg-5 rotation-content-sm">
                    <div class="rotation-leaderboard leaderboard-lg">
                        <div class="leaderboard-buttons row">
                            <div class="col-6">
                                <button class="button-secondary history-spin-button">Lịch sử quay thưởng</button>
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
                    <div class="rotation-advertise">
                        <a href="#" target="_blank">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/sexy-mage.png" alt="">
                        </a>
                    </div>
                    <div class="rotation-advertise">
                        <a href="#" target="_blank">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/sexy-mage.png" alt="">
                        </a>
                    </div>
                    <div class="rotation-advertise">
                        <a href="#" target="_blank">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/sexy-mage.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <div class=" block-product mt-fix-20 ">
            <div class="product-header d-flex">
                    <span>
                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/flash_sales.png" alt="">
                    </span>
                <p class="text-title">Mini game liên quan</span></p>
                <div class="product-catecory"></div>

            </div>
            <div class="box-product">
                <div class="swiper-container list-product" >
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" >
                            <a href="/minigame/slug">
                                <div class="item-product__box-img">

                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/minigame1.gif" alt="">

                                </div>
                                <div class="item-product__box-content">


                                    <div class="item-product__box-name">
                                        Acc liên quan siêu vip
                                    </div>
                                    <div class="item-product__box-sale">
                                        Đã bán: 68,9K
                                    </div>
                                    <div class="item-product__box-price">

                                        <div class="special-price">15.000đ</div>
                                        <div class="old-price">30.000đ</div>
                                        <div class="item-product__sticker-percent">
                                            -50%
                                        </div>
                                    </div>

                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide" >
                            <a href="/minigame/slug">
                                <div class="item-product__box-img">

                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/minigame4.gif" alt="">

                                </div>
                                <div class="item-product__box-content">


                                    <div class="item-product__box-name">
                                        Acc liên quan siêu vip
                                    </div>
                                    <div class="item-product__box-sale">
                                        Đã bán: 68,9K
                                    </div>
                                    <div class="item-product__box-price">

                                        <div class="special-price">15.000đ</div>
                                        <div class="old-price">30.000đ</div>
                                        <div class="item-product__sticker-percent">
                                            -50%
                                        </div>
                                    </div>

                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide" >
                            <a href="/minigame/slug">
                                <div class="item-product__box-img">

                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/minigame3.gif" alt="">

                                </div>
                                <div class="item-product__box-content">


                                    <div class="item-product__box-name">
                                        Acc liên quan siêu vip
                                    </div>
                                    <div class="item-product__box-sale">
                                        Đã bán: 68,9K
                                    </div>
                                    <div class="item-product__box-price">

                                        <div class="special-price">15.000đ</div>
                                        <div class="old-price">30.000đ</div>
                                        <div class="item-product__sticker-percent">
                                            -50%
                                        </div>
                                    </div>

                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide" >
                            <a href="/minigame/slug">
                                <div class="item-product__box-img">

                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/minigame2.gif" alt="">

                                </div>
                                <div class="item-product__box-content">


                                    <div class="item-product__box-name">
                                        Acc liên quan siêu vip
                                    </div>
                                    <div class="item-product__box-sale">
                                        Đã bán: 68,9K
                                    </div>
                                    <div class="item-product__box-price">

                                        <div class="special-price">15.000đ</div>
                                        <div class="old-price">30.000đ</div>
                                        <div class="item-product__sticker-percent">
                                            -50%
                                        </div>
                                    </div>

                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" block-product mt-fix-20 ">
            <div class="product-header d-flex">
                    <span>
                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/flash_sales.png" alt="">
                    </span>
                <p class="text-title">Mini game đã chơi gần đây</span></p>
                <div class="product-catecory"></div>

            </div>
            <div class="box-product">
                <div class="swiper-container list-product" >
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" >
                            <a href="/minigame/slug">
                                <div class="item-product__box-img">

                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/minigame4.gif" alt="">

                                </div>
                                <div class="item-product__box-content">


                                    <div class="item-product__box-name">
                                        Acc liên quan siêu vip
                                    </div>
                                    <div class="item-product__box-sale">
                                        Đã bán: 68,9K
                                    </div>
                                    <div class="item-product__box-price">

                                        <div class="special-price">15.000đ</div>
                                        <div class="old-price">30.000đ</div>
                                        <div class="item-product__sticker-percent">
                                            -50%
                                        </div>
                                    </div>

                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide" >
                            <a href="/minigame/slug">
                                <div class="item-product__box-img">

                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/minigame6.gif" alt="">

                                </div>
                                <div class="item-product__box-content">


                                    <div class="item-product__box-name">
                                        Acc liên quan siêu vip
                                    </div>
                                    <div class="item-product__box-sale">
                                        Đã bán: 68,9K
                                    </div>
                                    <div class="item-product__box-price">

                                        <div class="special-price">15.000đ</div>
                                        <div class="old-price">30.000đ</div>
                                        <div class="item-product__sticker-percent">
                                            -50%
                                        </div>
                                    </div>

                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide" >
                            <a href="/minigame/slug">
                                <div class="item-product__box-img">

                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/minigame5.gif" alt="">

                                </div>
                                <div class="item-product__box-content">


                                    <div class="item-product__box-name">
                                        Acc liên quan siêu vip
                                    </div>
                                    <div class="item-product__box-sale">
                                        Đã bán: 68,9K
                                    </div>
                                    <div class="item-product__box-price">

                                        <div class="special-price">15.000đ</div>
                                        <div class="old-price">30.000đ</div>
                                        <div class="item-product__sticker-percent">
                                            -50%
                                        </div>
                                    </div>

                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide" >
                            <a href="/minigame/slug">
                                <div class="item-product__box-img">

                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/minigame3.gif" alt="">

                                </div>
                                <div class="item-product__box-content">


                                    <div class="item-product__box-name">
                                        Acc liên quan siêu vip
                                    </div>
                                    <div class="item-product__box-sale">
                                        Đã bán: 68,9K
                                    </div>
                                    <div class="item-product__box-price">

                                        <div class="special-price">15.000đ</div>
                                        <div class="old-price">30.000đ</div>
                                        <div class="item-product__sticker-percent">
                                            -50%
                                        </div>
                                    </div>

                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <input type="hidden" class="started_at" name="started_at" value="{{ $result->group->started_at??0 }}">
    @include('theme_3.frontend.widget.modal.__rotation_history')
    @include('theme_3.frontend.widget.modal.__rotation_prize')

@endsection

