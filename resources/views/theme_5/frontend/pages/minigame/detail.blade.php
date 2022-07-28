@extends('frontend.layouts.master')
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
                <a href="/minigame" class="breadcrumb-link">Vòng quay</a>
            </li>
            <li class="breadcrumb-item">
                <a href="/minigame-slug" class="breadcrumb-link">Chi tiết vòng quay</a>
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
                                <h3 class="fw-700 fz-18 lh-24">Vòng quay giải nhiệt hè</h3>
                                <p class="fw-400 fz-13 mb-0"><span id="userCount">1235</span> người đang chơi</p>
                            </div>
                            <div class="rotation-player">
                                <button class="btn secondary open-sheet" data-target="#sheet-filter">Thể lệ</button>
                            </div>
                        </div>
                    </div>

                    <div class="d-block d-lg-none c-mb-16 c-px-lg-16">
                        <div class="rotation-notify w-100 ">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/svg/sound_mobile.svg" alt="">
                            <marquee class="rotation-marquee">
                                <div class="rotation-marquee-item">
                                    Danh sách trúng thưởng: &nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;
                                </div>
                            </marquee>
                        </div>
                    </div>

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
                                    <span id="rotationFirstPrice" class="fw-400 fz-12 lh-16 c-mr-8">240.00đ</span>
                                    <span id="rotationSalePrice" class="fw-700 fz-20 lh-28 c-mr-8">160.000đ</span>
                                    <span id="rotationSaleRatio" class="brs-24 fw-400 fz-12 c-py-2 c-px-8 lh-16">Giảm 66%</span>
                                </p>
                                <p class="c-mb-0 fw-400 fz-13">Rẻ vô đối, giá tốt nhất thị trường</p>
                            </div>
                        </div>
                    </div>

                    <div class="rotation-detail c-mb-16 brs-12">
                        <div class="rotation-top c-p-16 d-none d-lg-flex justify-content-between">
                            <div>
                                <div class="rotation-header d-flex align-items-center c-mb-8">
                                    <h3 class="fw-700 fz-24 lh-32 c-mr-8">Vòng quay giải nhiệt hè</h3>
                                    <p class="fw-400 fz-13 mb-0 c_thele">Thể lệ <img src="/assets/frontend/{{theme('')->theme_key}}/image/svg/minigame_info.svg" alt=""></p>
                                </div>
                                <div class="rotation-player d-flex align-items-center">
                                    <img class="c-mr-4" src="/assets/frontend/{{theme('')->theme_key}}/image/svg/security-user1.svg" alt="">
                                    <p class="fw-400 fz-13 mb-0"><span id="userCount">1235</span> người đang chơi</p>
                                </div>
                            </div>
                            <div class="rotation-header-sale d-flex align-items-start">
                                <div class="d-inline-flex align-items-center c-mr-10">
                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/phu/flash_img.png" alt="">
                                    <p class="fw-700 fz-20 lh-28 mb-0">Flash sale</p>
                                </div>
                                <div class="d-inline-flex align-items-center">
                                    <img class="c-mr-4" src="/assets/frontend/{{theme('')->theme_key}}/image/svg/clock.svg" alt="">
                                    <p class="fz-13 fw-400 mb-0 c-mr-8">Kết thúc trong</p>
                                    <div class="rotation-sale-time">
                                        <ul class="mb-0 p-0">
                                            <li class="d-inline-flex align-items-center justify-content-center brs-4"><span id="hourRemain">10</span></li>
                                            <li class="d-inline-flex align-items-center justify-content-center brs-4"><span id="minuteRemain">2</span></li>
                                            <li class="d-inline-flex align-items-center justify-content-center brs-4"><span id="secondRemain">4</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="rotation c-p-16" style="background-image: url(/assets/frontend/{{theme('')->theme_key}}/image/phu/rotation_bg.png)">
                            <div class="rotation-notify d-none d-lg-flex w-100 c-mb-16">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/svg/sound.svg" alt="">
                                <marquee class="rotation-marquee">
                                    <div class="rotation-marquee-item">
                                        Danh sách trúng thưởng: &nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;
                                    </div>
                                </marquee>
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="rotation-button">
                                    <img class="lazy" src="/assets/theme_3/image/images_1/rotation-button.png" alt="">
                                </div>
                                <img style="width: 70%" class="lazy" src="/assets/theme_3/image/images_1/rotation-img.png" alt="" id="rotate-play">
                            </div>
                        </div>

                        <div class="row no-gutters">
                            <div class="col-12 col-lg-6 c-p-16 c-py-lg-8">
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
                                        <div class="progress-bar brs-24" style="width: 50%"></div>
                                    </div>
                                </div>
                                <div class="rotation-sale-content brs-8 c-py-8 d-none d-lg-flex justify-content-center">
                                    <p class="d-flex align-items-center c-mb-0">
                                        <span id="rotationFirstPrice" class="fw-400 fz-14 c-mr-8">240.00đ</span>
                                        <span id="rotationSalePrice" class="fw-700 fz-24 lh-32 c-mr-8">160.000đ</span>
                                        <span id="rotationSaleRatio" class="brs-24 fw-500 fz-12 c-py-2 c-px-8">Giảm 66%</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 c-p-16 c-py-lg-8">
                                <div class="rotation-inputs c-mb-24 c-mb-lg-0 row no-gutters">
                                    <div class="col-6 c-pr-6">
                                        <input class="" type="text" placeholder="Nhập mã giảm giá">
                                    </div>
                                    <div class="col-6 c-pl-6">
                                        <select class="rotation-inputs-select" name="type">
                                            <option value="1">Mua X1/10k 1 lần quay</option>
                                            <option value="1">Mua X1/10k 1 lần quay</option>
                                            <option value="1">Mua X1/10k 1 lần quay</option>
                                            <option value="1">Mua X1/10k 1 lần quay</option>
                                            <option value="1">Mua X1/10k 1 lần quay</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row no-gutters d-none d-lg-flex">
                                    <div class="col-12 col-md-6 c-pr-6">
                                        <button class="btn secondary w-100">Chơi thử</button>
                                    </div>
                                    <div class="col-12 col-md-6 c-pl-6">
                                        <button class="btn primary w-100">Quay ngay</button>
                                    </div>
                                </div>
                                <div class="footer-mobile c-p-16">

                                    <div class="row marginauto">
                                        <div class="col-6 pl-0 c-pr-8">
                                            <button class="btn secondary w-100">Chơi thử</button>
                                        </div>
                                        <div class="col-6 pr-0 c-pl-8">
                                            <button class="btn primary w-100">Quay ngay</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="c-mb-16 c-pl-lg-16 c-pr-lg-16">
                        @include('frontend.pages.components.description')
                    </div>

                    <div class="d-block d-lg-none c-mb-16">
                        <div class="rotation-leaderboard c-p-lg-0">
                            <div class="leaderboard-header d-flex align-items-center c-pl-16 c-mb-16">
                                <img class="c-mr-4" src="/assets/frontend/{{theme('')->theme_key}}/image/svg/top-leaderboard.svg" alt="">
                                <h5 class="fw-700 fz-18 lh-20">Top quay thưởng</h5>
                            </div>
                            <div class="leaderboard-type c-mb-16 brs-8 brs-lg-0 row no-gutters">
                                <ul class="nav justify-content-between row no-gutters w-100 c-p-4 c-p-lg-0" role="tablist">
                                    <li class="nav-item col-4 p-0" role="presentation">
                                        <p class="nav-link text-center mb-0 fw-400 fz-13 brs-8 brs-lg-0 active" data-toggle="tab" href="#leaderboard_m-1" role="tab" aria-selected="true">7 ngày</p>
                                    </li>
                                    <li class="nav-item col-4 p-0" role="presentation">
                                        <p class="nav-link text-center mb-0 fw-400 fz-13 brs-8 brs-lg-0" data-toggle="tab" href="#leaderboard_m-2" role="tab" aria-selected="false">30 ngày</p>
                                    </li>
                                    <li class="nav-item col-4 p-0" role="presentation">
                                        <p class="nav-link text-center mb-0 fw-400 fz-13 brs-8 brs-lg-0" data-toggle="tab" href="#leaderboard_m-3" role="tab" aria-selected="false">60 ngày</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="leaderboard-table">
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="leaderboard_m-1" role="tabpanel">
                                        <div class="leaderboard-content c-px-16">
                                            <div class="leaderboard-item c-p-8 d-flex align-items-center">
                                                <div class="leaderboard-item-serial lh-24 fw-600 fz-12 c-mr-12">1</div>
                                                <div class="leaderboard-item-avt brs-100">
                                                    <img class="brs-100 w-100 c-pr-12" src="/assets/frontend/{{theme('')->theme_key}}/image/phu/user_avatar.png" alt="">
                                                </div>
                                                <div class="leaderboard-item-content">
                                                    <p class="fw-500 fz-13 c-mb-0">Hoàng Phi Hồng</p>
                                                    <span class="fw-400 fz-12">1000 lượt</span>
                                                </div>
                                            </div>
                                            <div class="leaderboard-item c-p-8 d-flex align-items-center">
                                                <div class="leaderboard-item-serial lh-24 fw-600 fz-12 c-mr-12">1</div>
                                                <div class="leaderboard-item-avt brs-100">
                                                    <img class="brs-100 w-100 c-pr-12" src="/assets/frontend/{{theme('')->theme_key}}/image/phu/user_avatar.png" alt="">
                                                </div>
                                                <div class="leaderboard-item-content">
                                                    <p class="fw-500 fz-13 c-mb-0">Hoàng Phi Hồng</p>
                                                    <span class="fw-400 fz-12">1000 lượt</span>
                                                </div>
                                            </div>
                                            <div class="leaderboard-item c-p-8 d-flex align-items-center">
                                                <div class="leaderboard-item-serial lh-24 fw-600 fz-12 c-mr-12">1</div>
                                                <div class="leaderboard-item-avt brs-100">
                                                    <img class="brs-100 w-100 c-pr-12" src="/assets/frontend/{{theme('')->theme_key}}/image/phu/user_avatar.png" alt="">
                                                </div>
                                                <div class="leaderboard-item-content">
                                                    <p class="fw-500 fz-13 c-mb-0">Hoàng Phi Hồng</p>
                                                    <span class="fw-400 fz-12">1000 lượt</span>
                                                </div>
                                            </div>
                                            <div class="leaderboard-item c-p-8 d-flex align-items-center">
                                                <div class="leaderboard-item-serial lh-24 fw-600 fz-12 c-mr-12">1</div>
                                                <div class="leaderboard-item-avt brs-100">
                                                    <img class="brs-100 w-100 c-pr-12" src="/assets/frontend/{{theme('')->theme_key}}/image/phu/user_avatar.png" alt="">
                                                </div>
                                                <div class="leaderboard-item-content">
                                                    <p class="fw-500 fz-13 c-mb-0">Hoàng Phi Hồng</p>
                                                    <span class="fw-400 fz-12">1000 lượt</span>
                                                </div>
                                            </div>
                                            <div class="leaderboard-item c-p-8 d-flex align-items-center">
                                                <div class="leaderboard-item-serial lh-24 fw-600 fz-12 c-mr-12">5</div>
                                                <div class="leaderboard-item-avt brs-100">
                                                    <img class="brs-100 w-100 c-pr-12" src="/assets/frontend/{{theme('')->theme_key}}/image/phu/user_avatar.png" alt="">
                                                </div>
                                                <div class="leaderboard-item-content">
                                                    <p class="fw-500 fz-13 c-mb-0">Hoàng Phi Hồng</p>
                                                    <span class="fw-400 fz-12">1000 lượt</span>
                                                </div>
                                            </div>
                                            <div class="leaderboard-item c-p-8 d-flex align-items-center">
                                                <div class="leaderboard-item-serial lh-24 fw-600 fz-12 c-mr-12">6</div>
                                                <div class="leaderboard-item-avt brs-100">
                                                    <img class="brs-100 w-100 c-pr-12" src="/assets/frontend/{{theme('')->theme_key}}/image/phu/user_avatar.png" alt="">
                                                </div>
                                                <div class="leaderboard-item-content">
                                                    <p class="fw-500 fz-13 c-mb-0">Hoàng Phi Hồng</p>
                                                    <span class="fw-400 fz-12">1000 lượt</span>
                                                </div>
                                            </div>
                                            <div class="leaderboard-item c-p-8 d-flex align-items-center">
                                                <div class="leaderboard-item-serial lh-24 fw-600 fz-12 c-mr-12">7</div>
                                                <div class="leaderboard-item-avt brs-100">
                                                    <img class="brs-100 w-100 c-pr-12" src="/assets/frontend/{{theme('')->theme_key}}/image/phu/user_avatar.png" alt="">
                                                </div>
                                                <div class="leaderboard-item-content">
                                                    <p class="fw-500 fz-13 c-mb-0">Hoàng Phi Hồng</p>
                                                    <span class="fw-400 fz-12">1000 lượt</span>
                                                </div>
                                            </div>
                                            <div class="leaderboard-item c-p-8 d-flex align-items-center">
                                                <div class="leaderboard-item-serial lh-24 fw-600 fz-12 c-mr-12">8</div>
                                                <div class="leaderboard-item-avt brs-100">
                                                    <img class="brs-100 w-100 c-pr-12" src="/assets/frontend/{{theme('')->theme_key}}/image/phu/user_avatar.png" alt="">
                                                </div>
                                                <div class="leaderboard-item-content">
                                                    <p class="fw-500 fz-13 c-mb-0">Hoàng Phi Hồng</p>
                                                    <span class="fw-400 fz-12">1000 lượt</span>
                                                </div>
                                            </div>
                                            <div class="leaderboard-item c-p-8 d-flex align-items-center">
                                                <div class="leaderboard-item-serial lh-24 fw-600 fz-12 c-mr-12">9</div>
                                                <div class="leaderboard-item-avt brs-100">
                                                    <img class="brs-100 w-100 c-pr-12" src="/assets/frontend/{{theme('')->theme_key}}/image/phu/user_avatar.png" alt="">
                                                </div>
                                                <div class="leaderboard-item-content">
                                                    <p class="fw-500 fz-13 c-mb-0">Hoàng Phi Hồng</p>
                                                    <span class="fw-400 fz-12">1000 lượt</span>
                                                </div>
                                            </div>
                                            <div class="leaderboard-item c-p-8 d-flex align-items-center">
                                                <div class="leaderboard-item-serial lh-24 fw-600 fz-12 c-mr-12">10</div>
                                                <div class="leaderboard-item-avt brs-100">
                                                    <img class="brs-100 w-100 c-pr-12" src="/assets/frontend/{{theme('')->theme_key}}/image/phu/user_avatar.png" alt="">
                                                </div>
                                                <div class="leaderboard-item-content">
                                                    <p class="fw-500 fz-13 c-mb-0">Hoàng Phi Hồng</p>
                                                    <span class="fw-400 fz-12">1000 lượt</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="leaderboard_m-2" role="tabpanel">
                                        <div class="leaderboard-content">
                                            <div class="leaderboard-item row no-gutters">
                                                <div class="col-4 leaderboard-item-name">
                                                    <span>1</span>
                                                    <p>Tiến Phú</p>
                                                </div>
                                                <div class="col-4 leaderboard-item-ar">
                                                    {{--                                                    +100.000 kim cương--}}
                                                </div>
                                                <div class="col-4 leaderboard-item-ar">
                                                    1000 lượt
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="leaderboard_m-3" role="tabpanel">
                                        <div class="leaderboard-content" >
                                            <div class="leaderboard-item row no-gutters">
                                                <div class="col-12 leaderboard-item-name text-center justify-content-center">
                                                    Không có dữ liệu
                                                </div>
                                            </div>
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
                                    <p class="nav-link text-center mb-0 fw-400 fz-13 brs-8 active" data-toggle="tab" href="#leaderboard-1" role="tab" aria-selected="true">7 ngày</p>
                                </li>
                                <li class="nav-item col-4 p-0" role="presentation">
                                    <p class="nav-link text-center mb-0 fw-400 fz-13 brs-8" data-toggle="tab" href="#leaderboard-2" role="tab" aria-selected="false">30 ngày</p>
                                </li>
                                <li class="nav-item col-4 p-0" role="presentation">
                                    <p class="nav-link text-center mb-0 fw-400 fz-13 brs-8" data-toggle="tab" href="#leaderboard-3" role="tab" aria-selected="false">60 ngày</p>
                                </li>
                            </ul>
                        </div>
                        <div class="leaderboard-table">
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="leaderboard-1" role="tabpanel">
                                    <div class="leaderboard-content" >
                                        <div class="leaderboard-item c-p-8 d-flex align-items-center">
                                            <div class="leaderboard-item-serial lh-24 fw-600 fz-12 c-mr-12">1</div>
                                            <div class="leaderboard-item-avt brs-100">
                                                <img class="brs-100 w-100 c-pr-12" src="/assets/frontend/{{theme('')->theme_key}}/image/phu/user_avatar.png" alt="">
                                            </div>
                                            <div class="leaderboard-item-content">
                                                <p class="fw-500 fz-13 c-mb-0">Hoàng Phi Hồng</p>
                                                <span class="fw-400 fz-12">1000 lượt</span>
                                            </div>
                                        </div>
                                        <div class="leaderboard-item c-p-8 d-flex align-items-center">
                                            <div class="leaderboard-item-serial lh-24 fw-600 fz-12 c-mr-12">1</div>
                                            <div class="leaderboard-item-avt brs-100">
                                                <img class="brs-100 w-100 c-pr-12" src="/assets/frontend/{{theme('')->theme_key}}/image/phu/user_avatar.png" alt="">
                                            </div>
                                            <div class="leaderboard-item-content">
                                                <p class="fw-500 fz-13 c-mb-0">Hoàng Phi Hồng</p>
                                                <span class="fw-400 fz-12">1000 lượt</span>
                                            </div>
                                        </div>
                                        <div class="leaderboard-item c-p-8 d-flex align-items-center">
                                            <div class="leaderboard-item-serial lh-24 fw-600 fz-12 c-mr-12">1</div>
                                            <div class="leaderboard-item-avt brs-100">
                                                <img class="brs-100 w-100 c-pr-12" src="/assets/frontend/{{theme('')->theme_key}}/image/phu/user_avatar.png" alt="">
                                            </div>
                                            <div class="leaderboard-item-content">
                                                <p class="fw-500 fz-13 c-mb-0">Hoàng Phi Hồng</p>
                                                <span class="fw-400 fz-12">1000 lượt</span>
                                            </div>
                                        </div>
                                        <div class="leaderboard-item c-p-8 d-flex align-items-center">
                                            <div class="leaderboard-item-serial lh-24 fw-600 fz-12 c-mr-12">1</div>
                                            <div class="leaderboard-item-avt brs-100">
                                                <img class="brs-100 w-100 c-pr-12" src="/assets/frontend/{{theme('')->theme_key}}/image/phu/user_avatar.png" alt="">
                                            </div>
                                            <div class="leaderboard-item-content">
                                                <p class="fw-500 fz-13 c-mb-0">Hoàng Phi Hồng</p>
                                                <span class="fw-400 fz-12">1000 lượt</span>
                                            </div>
                                        </div>
                                        <div class="leaderboard-item c-p-8 d-flex align-items-center">
                                            <div class="leaderboard-item-serial lh-24 fw-600 fz-12 c-mr-12">5</div>
                                            <div class="leaderboard-item-avt brs-100">
                                                <img class="brs-100 w-100 c-pr-12" src="/assets/frontend/{{theme('')->theme_key}}/image/phu/user_avatar.png" alt="">
                                            </div>
                                            <div class="leaderboard-item-content">
                                                <p class="fw-500 fz-13 c-mb-0">Hoàng Phi Hồng</p>
                                                <span class="fw-400 fz-12">1000 lượt</span>
                                            </div>
                                        </div>
                                        <div class="leaderboard-item c-p-8 d-flex align-items-center">
                                            <div class="leaderboard-item-serial lh-24 fw-600 fz-12 c-mr-12">6</div>
                                            <div class="leaderboard-item-avt brs-100">
                                                <img class="brs-100 w-100 c-pr-12" src="/assets/frontend/{{theme('')->theme_key}}/image/phu/user_avatar.png" alt="">
                                            </div>
                                            <div class="leaderboard-item-content">
                                                <p class="fw-500 fz-13 c-mb-0">Hoàng Phi Hồng</p>
                                                <span class="fw-400 fz-12">1000 lượt</span>
                                            </div>
                                        </div>
                                        <div class="leaderboard-item c-p-8 d-flex align-items-center">
                                            <div class="leaderboard-item-serial lh-24 fw-600 fz-12 c-mr-12">7</div>
                                            <div class="leaderboard-item-avt brs-100">
                                                <img class="brs-100 w-100 c-pr-12" src="/assets/frontend/{{theme('')->theme_key}}/image/phu/user_avatar.png" alt="">
                                            </div>
                                            <div class="leaderboard-item-content">
                                                <p class="fw-500 fz-13 c-mb-0">Hoàng Phi Hồng</p>
                                                <span class="fw-400 fz-12">1000 lượt</span>
                                            </div>
                                        </div>
                                        <div class="leaderboard-item c-p-8 d-flex align-items-center">
                                            <div class="leaderboard-item-serial lh-24 fw-600 fz-12 c-mr-12">8</div>
                                            <div class="leaderboard-item-avt brs-100">
                                                <img class="brs-100 w-100 c-pr-12" src="/assets/frontend/{{theme('')->theme_key}}/image/phu/user_avatar.png" alt="">
                                            </div>
                                            <div class="leaderboard-item-content">
                                                <p class="fw-500 fz-13 c-mb-0">Hoàng Phi Hồng</p>
                                                <span class="fw-400 fz-12">1000 lượt</span>
                                            </div>
                                        </div>
                                        <div class="leaderboard-item c-p-8 d-flex align-items-center">
                                            <div class="leaderboard-item-serial lh-24 fw-600 fz-12 c-mr-12">9</div>
                                            <div class="leaderboard-item-avt brs-100">
                                                <img class="brs-100 w-100 c-pr-12" src="/assets/frontend/{{theme('')->theme_key}}/image/phu/user_avatar.png" alt="">
                                            </div>
                                            <div class="leaderboard-item-content">
                                                <p class="fw-500 fz-13 c-mb-0">Hoàng Phi Hồng</p>
                                                <span class="fw-400 fz-12">1000 lượt</span>
                                            </div>
                                        </div>
                                        <div class="leaderboard-item c-p-8 d-flex align-items-center">
                                            <div class="leaderboard-item-serial lh-24 fw-600 fz-12 c-mr-12">10</div>
                                            <div class="leaderboard-item-avt brs-100">
                                                <img class="brs-100 w-100 c-pr-12" src="/assets/frontend/{{theme('')->theme_key}}/image/phu/user_avatar.png" alt="">
                                            </div>
                                            <div class="leaderboard-item-content">
                                                <p class="fw-500 fz-13 c-mb-0">Hoàng Phi Hồng</p>
                                                <span class="fw-400 fz-12">1000 lượt</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="leaderboard-2" role="tabpanel">
                                    <div class="leaderboard-content">
                                        <div class="leaderboard-item row no-gutters">
                                            <div class="col-4 leaderboard-item-name">
                                                <span>1</span>
                                                <p>Tiến Phú</p>
                                            </div>
                                            <div class="col-4 leaderboard-item-ar">
                                                {{--                                                    +100.000 kim cương--}}
                                            </div>
                                            <div class="col-4 leaderboard-item-ar">
                                                1000 lượt
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="leaderboard-3" role="tabpanel">
                                    <div class="leaderboard-content" >
                                        <div class="leaderboard-item row no-gutters">
                                            <div class="col-12 leaderboard-item-name text-center justify-content-center">
                                                Không có dữ liệu
                                            </div>
                                        </div>
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
@endsection

