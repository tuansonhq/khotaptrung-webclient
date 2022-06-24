@extends('frontend.layouts.master')
@section('styles')
    <link rel="stylesheet" href="/assets/{{env('THEME_VERSION')}}/css/style_trong.css">
@endsection
@section('scripts')
    <script src="/assets/{{env('THEME_VERSION')}}/js/js_trong/script_trong.js"></script>
@endsection
@section('content')
    <div class="container-fix container">
        {{--breadcrum--}}
        <ul class="breadcrum--list">
            <li class="breadcrum--item">
                <a href="/" class="breadcrum--link">Trang chủ</a>
            </li>
            <li class="breadcrum--item">
                <a href="/lich-su-giao-dich" class="breadcrum--link">Lịch sử giao dịch</a>
            </li>
            <li class="breadcrum--item">
                <a href="/lich-su-dich-vu" class="breadcrum--link">Dịch vụ đã mua</a>
            </li>
            <li class="breadcrum--item">
                <a href="/lich-su-dich-vu/detail" class="breadcrum--link">Chi tiết dịch vụ</a>
            </li>
        </ul>
        <div class="row m-0">
            {{--navbar--}}
            @include('theme_3.frontend.widget.__navbar__profile')
            {{--content--}}
            <div class="col-12 col-lg-9 p-0 order--detail">
                <div class="card--mobile__title">
                    <a href="/lich-su-dich-vu" class="card--back">
                        <img src="/assets/{{env('THEME_VERSION')}}/image/icons/back.png" alt="">
                    </a>
                    <h4>Chi tiết đơn hàng</h4>
                </div>
                <div class="card --custom">
                    <div class="card--header pr-2">
                        <h4 class="card--header__title hidden-mobile">
                            Chi tiết đơn hàng
                        </h4>
                    </div>
                    <div class="card--body">
                        <div class="row">
                            <div class="col-12 col-lg-6 p-0 px-lg-3">
                                <div class="card--rise --secondary">
                                    <div class="card--rise__title">
                                        Chi tiết yêu cầu <span class="order__id">#33415</span>
                                    </div>
                                    <div class="order__attr">
                                        <div class="order--name__attr">
                                            Tên dịch vụ
                                        </div>
                                        <div class="order--value__attr">
                                            Nạp quân huy - Liên quân
                                        </div>
                                    </div>
                                    <div class="order__attr">
                                        <div class="order--name__attr">
                                            Công việc
                                        </div>
                                        <div class="order--value__attr">
                                            Gói 03: 84 quân huy 50.000đ
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 px-1 pr-lg-3">
                                <div class="card--rise --gray">
                                    <div class="card--rise__title">
                                        Thông tin đính kèm
                                    </div>
                                    <div class="order__attr">
                                        <div class="card__attr">
                                            <div class="card--value__attr">
                                                Tài khoản Garena:<span class="card__info">mrt_2810</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order__attr">
                                        <div class="card__attr">
                                            <div class="card--value__attr">
                                                Tài khoản:<span class="card__info">Test</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order__attr">
                                        <div class="card__attr">
                                            <div class="card--value__attr">
                                                Mật khẩu Garena:<span class="card__info">Xuantan_2810</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card--rise --gray">
                                    <div class="card--rise__title">
                                        Tiến độ
                                    </div>
                                    <ul class="order--timelines">
                                        <li class="order--timeline">
                                            <div class="order--status">
                                                Đang chờ
                                            </div>
                                            <div class="order--date">
                                                18/10/2021 - 04:20
                                            </div>
                                        </li>
                                        <li class="order--timeline">
                                            <div class="order--status">
                                                Đang chờ
                                            </div>
                                            <div class="order--date">
                                                18/10/2021 - 04:20
                                            </div>
                                        </li>
                                        <li class="order--timeline">
                                            <div class="order--status">
                                                Đang chờ
                                            </div>
                                            <div class="order--date">
                                                18/10/2021 - 04:20
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card--rise --gray mb-4">
                                    <div class="card--rise__title">
                                        Trao đổi
                                    </div>
                                    <div class="card__attr">
                                        <div class="card--value__attr">
                                            Chưa có nội dung
                                        </div>
                                    </div>
                                </div>
                                <div class="mx-2 mx-lg-0">
                                    <a href="/nhan-tin" class="btn -primary btn-big">Nhắn tin</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

