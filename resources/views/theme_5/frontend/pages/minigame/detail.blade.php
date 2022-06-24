@extends('theme_3.frontend.layouts.master')
@section('styles')
    <link rel="stylesheet" href="/assets/{{env('THEME_VERSION')}}/css/style_phu/breadcrumb.css">
    <link rel="stylesheet" href="/assets/{{env('THEME_VERSION')}}/css/style_phu/spin.css">
    <link rel="stylesheet" href="/assets/{{env('THEME_VERSION')}}/css/style_phu/layout_page.css">
@endsection
@section('scripts')
    <script src="/assets/{{env('THEME_VERSION')}}/js/js_phu/spin.js"></script>
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
            <a href="javascript:void(0);" class="box-account-mobile_open" style="display: block">
                <img src="/assets/{{env('THEME_VERSION')}}/image/images_1/back.svg" alt="">
            </a>
            <h3>Chi tiết vòng quay</h3>
        </section>
        <section class="rotation-content">
            <div class="row">
                <div class="col-12 col-lg-7 rotation-content-sm">
                    <div class="rotation-detail">
                        <div class="rotation-header">
                            <h3>Vòng quay giải nhiệt hè</h3>
                            <button class="button-secondary" id="gamRuleButton">Thể lệ</button>
                        </div>
                        <div class="rotation-player">
                            <img src="/assets/{{env('THEME_VERSION')}}/image/images_1/security-user 1.svg" alt="">
                            <p><span id="userCount">1235</span> người đang chơi</p>
                        </div>
                        <div class="rotation-notify">
                            <img src="/assets/{{env('THEME_VERSION')}}/image/images_1/sound.svg" alt="">
                            <marquee class="rotation-marquee">
                                <div class="rotation-marquee-item">
                                    <h6>Lê Bống</h6> <p>Đã trúng <span id="prize">1000 kim cương</span> <span id="prizeTime" style="color: #82869E;">1h trước</span></p>
                                </div>
                                <div class="rotation-marquee-item">
                                    <h6>Hoàng Mai Nhi</h6> <p>Đã trúng <span id="prize">1000 kim cương</span> <span id="prizeTime" style="color: #82869E;">1h trước</span></p>
                                </div>
                            </marquee>
                        </div>
                        <div class="rotation-sale">
                            <div class="rotation-sale-header">
                                <p><img src="/assets/{{env('THEME_VERSION')}}/image/images_1/flash_img.png" alt=""> Flash sale</p>
                                <div class="rotation-sale-time">
                                    <span><img src="/assets/{{env('THEME_VERSION')}}/image/images_1/clock.svg" alt=""> Kết thúc trong</span>
                                    <ul>
                                        <li><span id="hourRemain"></span></li>
                                        <li><span id="minuteRemain"></span></li>
                                        <li><span id="secondRemain"></span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="rotation-sale-content">
                                <p>
                                    <span id="rotationFirstPrice">240.00đ</span>
                                    <span id="rotationSalePrice">160.000đ</span>
                                    <span id="rotationSaleRatio">Giảm 66%</span>
                                </p>
                            </div>
                        </div>
                        <div class="rotation">
                            <div class="rotation-button" id="startRotate">
                                <img class="lazy" src="/assets/{{env('THEME_VERSION')}}/image/images_1/rotation-button.png" alt="">
                            </div>
                            <img src="/assets/{{env('THEME_VERSION')}}/image/images_1/rotation-img.png" alt="">
                        </div>
                        <div class="rotation-points">
                            <div class="rotation-points-title">
                                <img src="/assets/{{env('THEME_VERSION')}}/image/images_1/mdi_police-badge.svg" alt="">
                                <p>Hũ điểm</p>
                                <div class="info-rotation">
                                    <img src="/assets/{{env('THEME_VERSION')}}/image/images_1/info.svg" alt="">
                                    <div class="rotation-tooltip">
                                        <p>Mỗi lượt quay sẽ được cộng 10 point.</p>
                                        <p>Tích luỹ đủ số point để nhận thêm lượt quay</p>
                                    </div>
                                </div>
                            </div>
                            <div class="progress-wrapper">
                                <div class="progress-bar">

                                </div>
                            </div>
                        </div>
                        <div class="rotation-inputs row">
                            <div class="col-12 col-md-6">
                                <input class="input-primary" type="text" name="discount_code" placeholder="Nhập mã giảm giá">
                            </div>
                            <div class="col-12 col-md-6">
                                <select class="rotation-inputs-select select-primary" name="type" id="rotationSelectBlock">
                                    <option value="0">Quay 1 lần - Giá 10k</option>
                                    <option value="1">Quay 1 lần - Giá 10k</option>
                                    <option value="2">Quay 1 lần - Giá 10k</option>
                                </select>
                            </div>
                        </div>
                        <div class="rotation-buttons row">
                            <div class="col-6">
                                <button id="playerDemo" class="button-secondary button-demo">Chơi thử</button>
                            </div>
                            <div class="col-6">
                                <button id="playButton" class="button-primary button-play">Quay ngay</button>
                            </div>
                        </div>
                    </div>
                    <div class="service-detail">
                        <h6>Chi tiết dịch vụ</h6>
                        <div class="service-detail-content">
                            Chơi game được xem là món ăn tinh thần không thể thiếu được đối với giới trẻ hiện nay, đặc biệt là các game online hay game mobile với nhiều hình thức khác nhau như game chiến thuật, game đối kháng, game thẻ bài, gam kiếm hiệp hay game sinh tồn. Chính vì vậy, nhu cầu nạp game là không thể thiếu và ngày càng tăng cao. Đặc biệt với các game thủ muốn đua top hay muốn có những vật phẩm giá trị trong game. Hãy cùng napgamegiare.net tìm hiểu các thông tin liên quan đến nạp game ngay sau đây nhé !

                            Nạp game là gì?
                            Nạp game hiểu một cách đơn giản là việc nạp tiền vào trong game để mua sắm các vật phẩm, các món đồ trong game hay thực hiện các nhiệm vụ, tăng cấp cho nhân vật trong game. Đây là hình thức vô cùng phổ biến đối với các game thủ. Khi người chơi dùng tiền mặt để nạp vào game thì số tiền này sẽ quy đổi thành một đơn vị, đồng tiền trong game, có thể kể đến như: sò - garena, thóc - funtap, kim cương - gosu,.... Vậy tại sao cần nạp game, nạp game sẽ được những gì ?
                        </div>
                        <div class="see-more">
                            <span id="seeMore">Xem thêm</span>
                            <span id="seeLess" style="display: none;">Rút gọn</span>
                        </div>
                    </div>
                    <div class="rotation-leaderboard leaderboard-md">
                        <div class="leaderboard-header">
                            <img src="/assets/{{env('THEME_VERSION')}}/image/images_1/top-leaderboard.png" alt="">
                            <h5>Top quay thưởng</h5>
                        </div>
                        <div class="leaderboard-type row no-gutters">
                            <div class="col-4">
                                <div class="listed-date">
                                    7 ngày
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="listed-date">
                                    30 ngày
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="listed-date">
                                    60 ngày
                                </div>
                            </div>
                            <div class="date-listing"></div>
                        </div>
                        <div class="leaderboard-table">
                            <div class="leaderboard-table-container">
                                <div class="leaderboard-head row no-gutters">
                                    <div class="leaderboard-head-item col-3">
                                        <p>Tài khoản</p>
                                    </div>
                                    <div class="leaderboard-head-item col-5">
                                        <p>Giải thưởng</p>
                                    </div>
                                    <div class="leaderboard-head-item col-4">
                                        <p>Thời gian</p>
                                    </div>
                                </div>
                                <div class="leaderboard-content leaderboard-1">
                                    <div class="leaderboard-item row no-gutters">
                                        <div class="col-3 leaderboard-item-name">
                                            <p>Shinn Shinn</p>
                                        </div>
                                        <div class="col-5">
                                            +100.000 kim cương
                                        </div>
                                        <div class="col-4">
                                            2022-04-08, 20:30
                                        </div>
                                    </div>
                                    <div class="leaderboard-item row no-gutters">
                                        <div class="col-3 leaderboard-item-name">
                                            <p>Shinn Shinn</p>
                                        </div>
                                        <div class="col-5">
                                            +100.000 kim cương
                                        </div>
                                        <div class="col-4">
                                            2022-04-08, 20:30
                                        </div>
                                    </div>
                                    <div class="leaderboard-item row no-gutters">
                                        <div class="col-3 leaderboard-item-name">
                                            <p>Shinn Shinn</p>
                                        </div>
                                        <div class="col-5">
                                            +100.000 kim cương
                                        </div>
                                        <div class="col-4">
                                            2022-04-08, 20:30
                                        </div>
                                    </div>
                                    <div class="leaderboard-item row no-gutters">
                                        <div class="col-3 leaderboard-item-name">
                                            <p>Shinn Shinn</p>
                                        </div>
                                        <div class="col-5">
                                            +100.000 kim cương
                                        </div>
                                        <div class="col-4">
                                            2022-04-08, 20:30
                                        </div>
                                    </div>
                                    <div class="leaderboard-item row no-gutters">
                                        <div class="col-3 leaderboard-item-name">
                                            <p>Shinn Shinn</p>
                                        </div>
                                        <div class="col-5">
                                            +100.000 kim cương
                                        </div>
                                        <div class="col-4">
                                            2022-04-08, 20:30
                                        </div>
                                    </div>
                                    <div class="leaderboard-item row no-gutters">
                                        <div class="col-3 leaderboard-item-name">
                                            <p>Shinn Shinn</p>
                                        </div>
                                        <div class="col-5">
                                            +100.000 kim cương
                                        </div>
                                        <div class="col-4">
                                            2022-04-08, 20:30
                                        </div>
                                    </div>
                                    <div class="leaderboard-item row no-gutters">
                                        <div class="col-3 leaderboard-item-name">
                                            <p>Shinn Shinn</p>
                                        </div>
                                        <div class="col-5">
                                            +100.000 kim cương
                                        </div>
                                        <div class="col-4">
                                            2022-04-08, 20:30
                                        </div>
                                    </div>
                                    <div class="leaderboard-item row no-gutters">
                                        <div class="col-3 leaderboard-item-name">
                                            <p>Shinn Shinn</p>
                                        </div>
                                        <div class="col-5">
                                            +100.000 kim cương
                                        </div>
                                        <div class="col-4">
                                            2022-04-08, 20:30
                                        </div>
                                    </div>
                                    <div class="leaderboard-item row no-gutters">
                                        <div class="col-3 leaderboard-item-name">
                                            <p>Shinn Shinn</p>
                                        </div>
                                        <div class="col-5">
                                            +100.000 kim cương
                                        </div>
                                        <div class="col-4">
                                            2022-04-08, 20:30
                                        </div>
                                    </div>
                                    <div class="leaderboard-item row no-gutters">
                                        <div class="col-3 leaderboard-item-name">
                                            <p>Shinn Shinn</p>
                                        </div>
                                        <div class="col-5">
                                            +100.000 kim cương
                                        </div>
                                        <div class="col-4">
                                            2022-04-08, 20:30
                                        </div>
                                    </div>
                                </div>
                                <div class="leaderboard-content leaderboard-2" style="display: none;">
                                    <div class="leaderboard-item row no-gutters">
                                        <div class="col-3 leaderboard-item-name">
                                            <p>Shinn Shinn</p>
                                        </div>
                                        <div class="col-5">
                                            +100.000 kim cương
                                        </div>
                                        <div class="col-4">
                                            2022-04-08, 20:30
                                        </div>
                                    </div>
                                    <div class="leaderboard-item row no-gutters">
                                        <div class="col-3 leaderboard-item-name">
                                            <p>Shinn Shinn</p>
                                        </div>
                                        <div class="col-5">
                                            +100.000 kim cương
                                        </div>
                                        <div class="col-4">
                                            2022-04-08, 20:30
                                        </div>
                                    </div>
                                    <div class="leaderboard-item row no-gutters">
                                        <div class="col-3 leaderboard-item-name">
                                            <p>Shinn Shinn</p>
                                        </div>
                                        <div class="col-5">
                                            +100.000 kim cương
                                        </div>
                                        <div class="col-4">
                                            2022-04-08, 20:30
                                        </div>
                                    </div>
                                    <div class="leaderboard-item row no-gutters">
                                        <div class="col-3 leaderboard-item-name">
                                            <p>Shinn Shinn</p>
                                        </div>
                                        <div class="col-5">
                                            +100.000 kim cương
                                        </div>
                                        <div class="col-4">
                                            2022-04-08, 20:30
                                        </div>
                                    </div>
                                    <div class="leaderboard-item row no-gutters">
                                        <div class="col-3 leaderboard-item-name">
                                            <p>Shinn Shinn</p>
                                        </div>
                                        <div class="col-5">
                                            +100.000 kim cương
                                        </div>
                                        <div class="col-4">
                                            2022-04-08, 20:30
                                        </div>
                                    </div>
                                    <div class="leaderboard-item row no-gutters">
                                        <div class="col-3 leaderboard-item-name">
                                            <p>Shinn Shinn</p>
                                        </div>
                                        <div class="col-5">
                                            +100.000 kim cương
                                        </div>
                                        <div class="col-4">
                                            2022-04-08, 20:30
                                        </div>
                                    </div>
                                    <div class="leaderboard-item row no-gutters">
                                        <div class="col-3 leaderboard-item-name">
                                            <p>Shinn Shinn</p>
                                        </div>
                                        <div class="col-5">
                                            +100.000 kim cương
                                        </div>
                                        <div class="col-4">
                                            2022-04-08, 20:30
                                        </div>
                                    </div>
                                    <div class="leaderboard-item row no-gutters">
                                        <div class="col-3 leaderboard-item-name">
                                            <p>Shinn Shinn</p>
                                        </div>
                                        <div class="col-5">
                                            +100.000 kim cương
                                        </div>
                                        <div class="col-4">
                                            2022-04-08, 20:30
                                        </div>
                                    </div>
                                    <div class="leaderboard-item row no-gutters">
                                        <div class="col-3 leaderboard-item-name">
                                            <p>Shinn Shinn</p>
                                        </div>
                                        <div class="col-5">
                                            +100.000 kim cương
                                        </div>
                                        <div class="col-4">
                                            2022-04-08, 20:30
                                        </div>
                                    </div>
                                    <div class="leaderboard-item row no-gutters">
                                        <div class="col-3 leaderboard-item-name">
                                            <p>Shinn Shinn</p>
                                        </div>
                                        <div class="col-5">
                                            +100.000 kim cương
                                        </div>
                                        <div class="col-4">
                                            2022-04-08, 20:30
                                        </div>
                                    </div>
                                </div>
                                <div class="leaderboard-content leaderboard-3" style="display: none;">
                                    <div class="leaderboard-item row no-gutters">
                                        <div class="col-3 leaderboard-item-name">
                                            <p>Shinn Shinn</p>
                                        </div>
                                        <div class="col-5">
                                            +100.000 kim cương
                                        </div>
                                        <div class="col-4">
                                            2022-04-08, 20:30
                                        </div>
                                    </div>
                                    <div class="leaderboard-item row no-gutters">
                                        <div class="col-3 leaderboard-item-name">
                                            <p>Shinn Shinn</p>
                                        </div>
                                        <div class="col-5">
                                            +100.000 kim cương
                                        </div>
                                        <div class="col-4">
                                            2022-04-08, 20:30
                                        </div>
                                    </div>
                                    <div class="leaderboard-item row no-gutters">
                                        <div class="col-3 leaderboard-item-name">
                                            <p>Shinn Shinn</p>
                                        </div>
                                        <div class="col-5">
                                            +100.000 kim cương
                                        </div>
                                        <div class="col-4">
                                            2022-04-08, 20:30
                                        </div>
                                    </div>
                                    <div class="leaderboard-item row no-gutters">
                                        <div class="col-3 leaderboard-item-name">
                                            <p>Shinn Shinn</p>
                                        </div>
                                        <div class="col-5">
                                            +100.000 kim cương
                                        </div>
                                        <div class="col-4">
                                            2022-04-08, 20:30
                                        </div>
                                    </div>
                                    <div class="leaderboard-item row no-gutters">
                                        <div class="col-3 leaderboard-item-name">
                                            <p>Shinn Shinn</p>
                                        </div>
                                        <div class="col-5">
                                            +100.000 kim cương
                                        </div>
                                        <div class="col-4">
                                            2022-04-08, 20:30
                                        </div>
                                    </div>
                                    <div class="leaderboard-item row no-gutters">
                                        <div class="col-3 leaderboard-item-name">
                                            <p>Shinn Shinn</p>
                                        </div>
                                        <div class="col-5">
                                            +100.000 kim cương
                                        </div>
                                        <div class="col-4">
                                            2022-04-08, 20:30
                                        </div>
                                    </div>
                                    <div class="leaderboard-item row no-gutters">
                                        <div class="col-3 leaderboard-item-name">
                                            <p>Shinn Shinn</p>
                                        </div>
                                        <div class="col-5">
                                            +100.000 kim cương
                                        </div>
                                        <div class="col-4">
                                            2022-04-08, 20:30
                                        </div>
                                    </div>
                                    <div class="leaderboard-item row no-gutters">
                                        <div class="col-3 leaderboard-item-name">
                                            <p>Shinn Shinn</p>
                                        </div>
                                        <div class="col-5">
                                            +100.000 kim cương
                                        </div>
                                        <div class="col-4">
                                            2022-04-08, 20:30
                                        </div>
                                    </div>
                                    <div class="leaderboard-item row no-gutters">
                                        <div class="col-3 leaderboard-item-name">
                                            <p>Shinn Shinn</p>
                                        </div>
                                        <div class="col-5">
                                            +100.000 kim cương
                                        </div>
                                        <div class="col-4">
                                            2022-04-08, 20:30
                                        </div>
                                    </div>
                                    <div class="leaderboard-item row no-gutters">
                                        <div class="col-3 leaderboard-item-name">
                                            <p>Shinn Shinn</p>
                                        </div>
                                        <div class="col-5">
                                            +100.000 kim cương
                                        </div>
                                        <div class="col-4">
                                            2022-04-08, 20:30
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="leaderboard-seemore">
                            <p>Xem thêm</p>
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
                    <div class="rotation-comment">
                        <h6>Bình luận</h6>
                        <div class="comment-block">
                            <div class="comment-item">
                                <div class="comment-avatar">
                                    <img src="/assets/{{env('THEME_VERSION')}}/image/images_1/user_avatar.png" alt="">
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
                                        <span id="likeComment"><img src="/assets/{{env('THEME_VERSION')}}/image/images_1/hearts-suit 1.svg" alt=""> Thích</span>
                                        <span id="replyComment"><img src="/assets/{{env('THEME_VERSION')}}/image/images_1/comment 1.svg" alt=""> Trả lời</span>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-item">
                                <div class="comment-avatar">
                                    <img src="/assets/{{env('THEME_VERSION')}}/image/images_1/user_avatar.png" alt="">
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
                                        <span id="likeComment"><img src="/assets/{{env('THEME_VERSION')}}/image/images_1/hearts-suit 1.svg" alt=""> Thích</span>
                                        <span id="replyComment"><img src="/assets/{{env('THEME_VERSION')}}/image/images_1/comment 1.svg" alt=""> Trả lời</span>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-item">
                                <div class="comment-avatar">
                                    <img src="/assets/{{env('THEME_VERSION')}}/image/images_1/user_avatar.png" alt="">
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
                                        <span id="likeComment"><img src="/assets/{{env('THEME_VERSION')}}/image/images_1/hearts-suit 1.svg" alt=""> Thích</span>
                                        <span id="replyComment"><img src="/assets/{{env('THEME_VERSION')}}/image/images_1/comment 1.svg" alt=""> Trả lời</span>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-item">
                                <div class="comment-avatar">
                                    <img src="/assets/{{env('THEME_VERSION')}}/image/images_1/user_avatar.png" alt="">
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
                                        <span id="likeComment"><img src="/assets/{{env('THEME_VERSION')}}/image/images_1/hearts-suit 1.svg" alt=""> Thích</span>
                                        <span id="replyComment"><img src="/assets/{{env('THEME_VERSION')}}/image/images_1/comment 1.svg" alt=""> Trả lời</span>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-item">
                                <div class="comment-avatar">
                                    <img src="/assets/{{env('THEME_VERSION')}}/image/images_1/user_avatar.png" alt="">
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
                                        <span id="likeComment"><img src="/assets/{{env('THEME_VERSION')}}/image/images_1/hearts-suit 1.svg" alt=""> Thích</span>
                                        <span id="replyComment"><img src="/assets/{{env('THEME_VERSION')}}/image/images_1/comment 1.svg" alt=""> Trả lời</span>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-item">
                                <div class="comment-avatar">
                                    <img src="/assets/{{env('THEME_VERSION')}}/image/images_1/user_avatar.png" alt="">
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
                                        <span id="likeComment"><img src="/assets/{{env('THEME_VERSION')}}/image/images_1/hearts-suit 1.svg" alt=""> Thích</span>
                                        <span id="replyComment"><img src="/assets/{{env('THEME_VERSION')}}/image/images_1/comment 1.svg" alt=""> Trả lời</span>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-item">
                                <div class="comment-avatar">
                                    <img src="/assets/{{env('THEME_VERSION')}}/image/images_1/user_avatar.png" alt="">
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
                                        <span id="likeComment"><img src="/assets/{{env('THEME_VERSION')}}/image/images_1/hearts-suit 1.svg" alt=""> Thích</span>
                                        <span id="replyComment"><img src="/assets/{{env('THEME_VERSION')}}/image/images_1/comment 1.svg" alt=""> Trả lời</span>
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
                            <img src="/assets/{{env('THEME_VERSION')}}/image/images_1/top-leaderboard.png" alt="">
                            <h5>Top quay thưởng</h5>
                        </div>
                        <div class="leaderboard-type row no-gutters">
                            <div class="col-4">
                                <div class="listed-date">
                                    7 ngày
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="listed-date">
                                    30 ngày
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="listed-date">
                                    60 ngày
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
                                    <p>Giải thưởng</p>
                                </div>
                                <div class="leaderboard-head-item col-4">
                                    <p>Thời gian</p>
                                </div>
                            </div>
                            <div class="leaderboard-content leaderboard-1">
                                <div class="leaderboard-item row no-gutters">
                                    <div class="col-4 leaderboard-item-name">
                                        <img src="/assets/{{env('THEME_VERSION')}}/image/images_1/rating.svg" alt="">
                                        <p>Shinn Shinn</p>
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        +100.000 kim cương
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        2022-04-08, 20:30
                                    </div>
                                </div>
                                <div class="leaderboard-item row no-gutters">
                                    <div class="col-4 leaderboard-item-name">
                                        <img src="/assets/{{env('THEME_VERSION')}}/image/images_1/rating.svg" alt="">
                                        <p>Shinn Shinn</p>
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        +100.000 kim cương
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        2022-04-08, 20:30
                                    </div>
                                </div>
                                <div class="leaderboard-item row no-gutters">
                                    <div class="col-4 leaderboard-item-name">
                                        <img src="/assets/{{env('THEME_VERSION')}}/image/images_1/rating.svg" alt="">
                                        <p>Shinn Shinn</p>
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        +100.000 kim cương
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        2022-04-08, 20:30
                                    </div>
                                </div>
                                <div class="leaderboard-item row no-gutters">
                                    <div class="col-4 leaderboard-item-name">
                                        <span>4</span>
                                        <p>Shinn Shinn</p>
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        +100.000 kim cương
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        2022-04-08, 20:30
                                    </div>
                                </div>
                                <div class="leaderboard-item row no-gutters">
                                    <div class="col-4 leaderboard-item-name">
                                        <span>5</span>
                                        <p>Shinn Shinn</p>
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        +100.000 kim cương
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        2022-04-08, 20:30
                                    </div>
                                </div>
                                <div class="leaderboard-item row no-gutters">
                                    <div class="col-4 leaderboard-item-name">
                                        <span>6</span>
                                        <p>Shinn Shinn</p>
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        +100.000 kim cương
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        2022-04-08, 20:30
                                    </div>
                                </div>
                                <div class="leaderboard-item row no-gutters">
                                    <div class="col-4 leaderboard-item-name">
                                        <span>7</span>
                                        <p>Shinn Shinn</p>
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        +100.000 kim cương
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        2022-04-08, 20:30
                                    </div>
                                </div>
                                <div class="leaderboard-item row no-gutters">
                                    <div class="col-4 leaderboard-item-name">
                                        <span>8</span>
                                        <p>Shinn Shinn</p>
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        +100.000 kim cương
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        2022-04-08, 20:30
                                    </div>
                                </div>
                                <div class="leaderboard-item row no-gutters">
                                    <div class="col-4 leaderboard-item-name">
                                        <span>9</span>
                                        <p>Shinn Shinn</p>
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        +100.000 kim cương
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        2022-04-08, 20:30
                                    </div>
                                </div>
                                <div class="leaderboard-item row no-gutters">
                                    <div class="col-4 leaderboard-item-name">
                                        <span>10</span>
                                        <p>Shinn Shinn</p>
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        +100.000 kim cương
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        2022-04-08, 20:30
                                    </div>
                                </div>
                            </div>
                            <div class="leaderboard-content leaderboard-2" style="display: none;">
                                <div class="leaderboard-item row no-gutters">
                                    <div class="col-4 leaderboard-item-name">
                                        <img src="/assets/{{env('THEME_VERSION')}}/image/images_1/rating.svg" alt="">
                                        <p>Shinn Shinn</p>
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        +100.000 kim cương
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        2022-04-08, 20:30
                                    </div>
                                </div>
                                <div class="leaderboard-item row no-gutters">
                                    <div class="col-4 leaderboard-item-name">
                                        <img src="/assets/{{env('THEME_VERSION')}}/image/images_1/rating.svg" alt="">
                                        <p>Shinn Shinn</p>
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        +100.000 kim cương
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        2022-04-08, 20:30
                                    </div>
                                </div>
                                <div class="leaderboard-item row no-gutters">
                                    <div class="col-4 leaderboard-item-name">
                                        <img src="/assets/{{env('THEME_VERSION')}}/image/images_1/rating.svg" alt="">
                                        <p>Shinn Shinn</p>
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        +100.000 kim cương
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        2022-04-08, 20:30
                                    </div>
                                </div>
                                <div class="leaderboard-item row no-gutters">
                                    <div class="col-4 leaderboard-item-name">
                                        <span>4</span>
                                        <p>Shinn Shinn</p>
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        +100.000 kim cương
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        2022-04-08, 20:30
                                    </div>
                                </div>
                                <div class="leaderboard-item row no-gutters">
                                    <div class="col-4 leaderboard-item-name">
                                        <span>5</span>
                                        <p>Shinn Shinn</p>
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        +100.000 kim cương
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        2022-04-08, 20:30
                                    </div>
                                </div>
                                <div class="leaderboard-item row no-gutters">
                                    <div class="col-4 leaderboard-item-name">
                                        <span>6</span>
                                        <p>Shinn Shinn</p>
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        +100.000 kim cương
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        2022-04-08, 20:30
                                    </div>
                                </div>
                                <div class="leaderboard-item row no-gutters">
                                    <div class="col-4 leaderboard-item-name">
                                        <span>7</span>
                                        <p>Shinn Shinn</p>
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        +100.000 kim cương
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        2022-04-08, 20:30
                                    </div>
                                </div>
                                <div class="leaderboard-item row no-gutters">
                                    <div class="col-4 leaderboard-item-name">
                                        <span>8</span>
                                        <p>Shinn Shinn</p>
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        +100.000 kim cương
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        2022-04-08, 20:30
                                    </div>
                                </div>
                                <div class="leaderboard-item row no-gutters">
                                    <div class="col-4 leaderboard-item-name">
                                        <span>9</span>
                                        <p>Shinn Shinn</p>
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        +100.000 kim cương
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        2022-04-08, 20:30
                                    </div>
                                </div>
                                <div class="leaderboard-item row no-gutters">
                                    <div class="col-4 leaderboard-item-name">
                                        <span>10</span>
                                        <p>Shinn Shinn</p>
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        +100.000 kim cương
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        2022-04-08, 20:30
                                    </div>
                                </div>
                            </div>
                            <div class="leaderboard-content leaderboard-3" style="display: none;">
                                <div class="leaderboard-item row no-gutters">
                                    <div class="col-4 leaderboard-item-name">
                                        <img src="/assets/{{env('THEME_VERSION')}}/image/images_1/rating.svg" alt="">
                                        <p>Shinn Shinn</p>
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        +100.000 kim cương
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        2022-04-08, 20:30
                                    </div>
                                </div>
                                <div class="leaderboard-item row no-gutters">
                                    <div class="col-4 leaderboard-item-name">
                                        <img src="/assets/{{env('THEME_VERSION')}}/image/images_1/rating.svg" alt="">
                                        <p>Shinn Shinn</p>
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        +100.000 kim cương
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        2022-04-08, 20:30
                                    </div>
                                </div>
                                <div class="leaderboard-item row no-gutters">
                                    <div class="col-4 leaderboard-item-name">
                                        <img src="/assets/{{env('THEME_VERSION')}}/image/images_1/rating.svg" alt="">
                                        <p>Shinn Shinn</p>
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        +100.000 kim cương
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        2022-04-08, 20:30
                                    </div>
                                </div>
                                <div class="leaderboard-item row no-gutters">
                                    <div class="col-4 leaderboard-item-name">
                                        <span>4</span>
                                        <p>Shinn Shinn</p>
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        +100.000 kim cương
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        2022-04-08, 20:30
                                    </div>
                                </div>
                                <div class="leaderboard-item row no-gutters">
                                    <div class="col-4 leaderboard-item-name">
                                        <span>5</span>
                                        <p>Shinn Shinn</p>
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        +100.000 kim cương
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        2022-04-08, 20:30
                                    </div>
                                </div>
                                <div class="leaderboard-item row no-gutters">
                                    <div class="col-4 leaderboard-item-name">
                                        <span>6</span>
                                        <p>Shinn Shinn</p>
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        +100.000 kim cương
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        2022-04-08, 20:30
                                    </div>
                                </div>
                                <div class="leaderboard-item row no-gutters">
                                    <div class="col-4 leaderboard-item-name">
                                        <span>7</span>
                                        <p>Shinn Shinn</p>
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        +100.000 kim cương
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        2022-04-08, 20:30
                                    </div>
                                </div>
                                <div class="leaderboard-item row no-gutters">
                                    <div class="col-4 leaderboard-item-name">
                                        <span>8</span>
                                        <p>Shinn Shinn</p>
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        +100.000 kim cương
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        2022-04-08, 20:30
                                    </div>
                                </div>
                                <div class="leaderboard-item row no-gutters">
                                    <div class="col-4 leaderboard-item-name">
                                        <span>9</span>
                                        <p>Shinn Shinn</p>
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        +100.000 kim cương
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        2022-04-08, 20:30
                                    </div>
                                </div>
                                <div class="leaderboard-item row no-gutters">
                                    <div class="col-4 leaderboard-item-name">
                                        <span>10</span>
                                        <p>Shinn Shinn</p>
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        +100.000 kim cương
                                    </div>
                                    <div class="col-4 leaderboard-item-ar">
                                        2022-04-08, 20:30
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rotation-advertise">
                        <a href="#" target="_blank">
                            <img src="/assets/{{env('THEME_VERSION')}}/image/images_1/sexy-mage.png" alt="">
                        </a>
                    </div>
                    <div class="rotation-advertise">
                        <a href="#" target="_blank">
                            <img src="/assets/{{env('THEME_VERSION')}}/image/images_1/sexy-mage.png" alt="">
                        </a>
                    </div>
                    <div class="rotation-advertise">
                        <a href="#" target="_blank">
                            <img src="/assets/{{env('THEME_VERSION')}}/image/images_1/sexy-mage.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <div class=" block-product mt-fix-20 ">
            <div class="product-header d-flex">
                    <span>
                        <img src="/assets/{{env('THEME_VERSION')}}/image/flash_sales.png" alt="">
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

                                    <img src="/assets/{{env('THEME_VERSION')}}/image/minigame1.gif" alt="">

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

                                    <img src="/assets/{{env('THEME_VERSION')}}/image/minigame4.gif" alt="">

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

                                    <img src="/assets/{{env('THEME_VERSION')}}/image/minigame3.gif" alt="">

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

                                    <img src="/assets/{{env('THEME_VERSION')}}/image/minigame2.gif" alt="">

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
                        <img src="/assets/{{env('THEME_VERSION')}}/image/flash_sales.png" alt="">
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

                                    <img src="/assets/{{env('THEME_VERSION')}}/image/minigame4.gif" alt="">

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

                                    <img src="/assets/{{env('THEME_VERSION')}}/image/minigame6.gif" alt="">

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

                                    <img src="/assets/{{env('THEME_VERSION')}}/image/minigame5.gif" alt="">

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

                                    <img src="/assets/{{env('THEME_VERSION')}}/image/minigame3.gif" alt="">

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
    @include('theme_3.frontend.widget.modal.__rotation_history')
    @include('theme_3.frontend.widget.modal.__rotation_prize')
    @include('theme_3.frontend.widget.modal.__rotation_rule')
@endsection

