@extends('frontend.layouts.master')

@section('content')

    {{--  Menu  --}}
    <section class="media-web">
        <div class="container container-fix menu-container-ct">
            <ul>
                <li><a href="/">Trang chủ</a></li>
                <li class="menu-container-li-ct"><img class="lazy" src="/assets/{{env('THEME_VERSION')}}/image/cay-thue/arrow-right.png" alt=""></li>
                <li class="menu-container-li-ct"><a href="">Thông tin tài khoản</a></li>
            </ul>
        </div>
    </section>

    <section class="media-mobile">
        <div class="container container-fix banner-mobile-container-ct">

            <div class="row marginauto banner-mobile-row-ct">
                <div class="col-auto left-right" style="width: 10%">
                    <a href="#" class="previous-step-one box-account-mobile_open" style="line-height: 28px">
                        <img class="lazy" src="/assets/{{env('THEME_VERSION')}}/image/cay-thue/back.png" alt="" >
                    </a>
                </div>

                <div class="col-auto left-right banner-mobile-span text-center" style="width: 80%">
                    <h3>Thông tin tài khoản</h3>
                </div>
                <div class="col-auto left-right" style="width: 10%">
                </div>
            </div>

        </div>
    </section>

    {{--   Bopdy --}}
    <section>
        <div class="container container-fix body-container-ct">
            <div class="row marginauto body-container-row-ct profile-category-body body-container-row-mobile-ct">
                @include('theme_3.frontend.widget.__navbar__profile')

                <div class="col-lg-9 col-12 body-container-detail-right-ct ">
                    <div class="row marginauto logs-content profile-category">
                        <div class="col-md-12 left-right">
                            <div class="row marginauto">
                                <div class="col-md-12 left-right">
                                    <div class="row marginauto logs-title">
                                        <div class="col-md-12 left-right">
                                            <span>Danh mục tài khoản</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 left-right text-profile-default">

                                    <div class="row marginauto profile-row">
                                        <div class="col-auto profile-auto left-right">
                                            <span>ID của bạn</span>
                                        </div>
                                        <div class="col-auto left-right">
                                            <small>156415</small>
                                        </div>
                                    </div>
                                    <div class="row marginauto profile-row">
                                        <div class="col-auto profile-auto left-right">
                                            <span>Tên tài khoản</span>
                                        </div>
                                        <div class="col-auto profile-auto left-right">
                                            <small>Trần Thành Đạt</small>
                                        </div>
                                    </div>
                                    <div class="row marginauto profile-row">
                                        <div class="col-auto profile-auto left-right">
                                            <span>Số dư tài khoản</span>
                                        </div>
                                        <div class="col-auto profile-auto left-right">
                                            <small>0đ</small>
                                        </div>
                                    </div>
                                    <div class="row marginauto profile-row">
                                        <div class="col-auto profile-auto left-right">
                                            <span>Bảo mật ODP</span>
                                        </div>
                                        <div class="col-auto profile-auto left-right">
                                            <small>0912 345 678</small>
                                        </div>
                                    </div>
                                    <div class="row marginauto profile-row">
                                        <div class="col-auto profile-auto left-right">
                                            <span>Loại tài khoản</span>
                                        </div>
                                        <div class="col-auto profile-auto left-right">
                                            <small>Thành viên</small>
                                        </div>
                                    </div>
                                    <div class="row marginauto profile-row">
                                        <div class="col-auto profile-auto left-right">
                                            <span>Ngày tham gia</span>
                                        </div>
                                        <div class="col-auto profile-auto left-right">
                                            <small>02/10/2021</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script src="/assets/{{env('THEME_VERSION')}}/js/txns/txns.js"></script>
@endsection
