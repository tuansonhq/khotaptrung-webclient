@extends('frontend.layouts.master')

@section('content')
    <div class="container c-container-side">
        <ul class="breadcrumb-list">
            <li class="breadcrumb-item">
                <a href="/" class="breadcrumb-link">Trang chủ</a>
            </li>
            <li class="breadcrumb-item">
                <a href="/lich-su-mua-nick" class="breadcrumb-link">Đổi mật khẩu</a>
            </li>
        </ul>

        <div class="head-mobile">
            <a href="/profile-navbar" class="link-back close-step"></a>

            <h1 class="head-title text-title">Đổi mật khẩu</h1>

            <a href="/" class="home"></a>
        </div>
        <div class="row">
            <div class="c-history-left media-web">
                @include('frontend.widget.__menu_profile')
            </div>
            <div class="c-ml-16 c-ml-lg-0 c-history-right c_history-right">
                <div class="card unset-lg withdraw-items" style="margin-bottom: 92px">
                    <div class="card-header d-none d-lg-block">
                        <h1 class="text-title-bold fz-20 lh-28">
                            Đổi mật khẩu
                        </h1>
                    </div>
                    <div class="head-mobile">
                        <a href="#" class="link-back"></a>

                        <h1 class="head-title text-title">Đổi mật khẩu</h1>

                        <a href="#" class="home" data-notify="2"></a>
                    </div>
                    <div class="card-body c-px-16 c-px-lg-0 c-py-0">
                        <div class="c-pt-16 c-pb-lg-50 c-mb-lg-50" id="tab-1" role="tabpanel">

                            <div class="input-group">
                    <span class="form-label">
                        Mật khẩu cũ
                    </span>
                                <div class="toggle-password">
                                    <input type="password" placeholder="Vui lòng nhập mật khẩu cũ">
                                </div>
                            </div>
                            <div class="input-group">
                    <span class="form-label">
                        Mật khẩu mới
                    </span>
                                <div class="toggle-password">
                                    <input type="password" placeholder="Vui lòng nhập mật khẩu mới">
                                </div>
                            </div>

                            <div class="input-group">
                    <span class="form-label">
                        Xác nhận
                    </span>
                                <div class="toggle-password">
                                    <input type="password" placeholder="Vui lòng xác nhận mật khẩu mới">
                                </div>
                            </div>

                            <div class="input-group">
                    <span class="form-label">
                       Mã bảo vệ
                    </span>
                                <div class="col-md-12 p-0 d-flex">
                                    <input class="input-form w-100" type="text" placeholder="Nhập mã bảo vệ">
                                    <div class="c-ml-8 c-mr-8">
                                        <div class="brs-8 overflow-hidden">
                                <span class="brs-8">
                                      <img src="https://frontend.theme.tichhop.pro/captcha/default?ID2lPXbi" alt="">
                                </span>
                                        </div>
                                    </div>
                                    <button class="refresh-captcha brs-8" id="reload">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/nam/refresh_captcha.svg" alt="">
                                    </button>

                                </div>
                            </div>

                            <div class="footer-mobile v2 group-btn c-my-24 c-my-lg-0 c-px-lg-16 c-pt-lg-16 button-password" style="--data-between:12px">
                                <button type="button" class="btn primary" data-toggle="modal" data-target="#modal--success__password" >Đổi mật khẩu</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection




