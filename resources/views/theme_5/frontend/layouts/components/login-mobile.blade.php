@extends('frontend.layouts.master')

@section('content')
    <div class="container">

        <div class="login-popup brs-12 c-mt-16 c-p-16 d-flex m-auto justify-content-between">
            <div class="m-auto">
                <img src="/assets/frontend/theme_5/image/nam/login-robot.png" alt="">
            </div>

            <div class="login-popup_content c-ml-24">
                <div class="text-secondary-color fw-700 lh-28 fz-20">
                    Nick.vn xin chào!
                </div>
                <div class="fw-400 c-mt-4">Vui lòng đăng nhập để sử dụng dịch vụ của chúng tôi</div>
                <button class="handleLoginPopup btn primary w-100 c-mt-12">Đăng nhập</button>
                <div class="c-mt-10">Bạn chưa có tài khoản? <a href="" class="text-primary-color fw-500 underline" style="text-decoration: underline">Đăng ký</a></div>
            </div>
        </div>

        <div class="mobile-auth hidden">
            <div class="head-mobile">
                <a href="javascript:void(0);" class="handleLoginPopup link-back close-step"></a>
                <h1 class="head-title text-title">Đăng nhập</h1>
            </div>
            <div class="mobile-auth-form c-px-16 c-pt-50">
                <form action="" id="formRegisterMobile" class="d-flex flex-column justify-content-center aligin-items-center text-center" style="display: none !important;">
                    <div class="c-mt-40">
                        <img src="/assets/frontend/{{env('THEME_VERSION')}}/image/phu/logo.png" alt="">
                    </div>
                    <p class="fw-500 fz-15 lh-24 c-mt-24 c-mb-40">Đăng ký để trải nghiệm tốt nhất<br> dịch vụ của chúng tôi!</p>

                    <input class="c-mb-16" type="text" name="username" placeholder="Nhập tên tài khoản" autocomplete="off" required="">

                    <span class="input-group toggle-password w-100 c-mb-16">
                        <input class="" type="password" name="password" placeholder="Nhập mật khẩu của bạn" autocomplete="off" required="">
                    </span>

                    <span class="input-group toggle-password w-100 c-mb-24">
                        <input class="" type="password" name="password_confirmation" placeholder="Nhập lại mật khẩu của bạn" autocomplete="off" required="">
                    </span>

                    <button class="btn primary">Đăng ký</button>
                    <p id="changeFormLogin" class="mobile-auth-change-form fw-400 fz-12 lh-16 c-mt-24">Bạn đã có tài khoản? <span>Đăng nhập tại đây</span></p>
                </form>

                <form action="" id="formLoginMobile" class="d-flex flex-column justify-content-center aligin-items-center text-center">
                    <div class="c-mt-40">
                        <img src="/assets/frontend/{{env('THEME_VERSION')}}/image/phu/logo.png" alt="">
                    </div>
                    <p class="fw-500 fz-15 lh-24 c-mt-24 c-mb-40">Đăng nhập để tiến hành giao dịch! </p>

                    <input class="c-mb-16" type="text" name="username" placeholder="Nhập tên tài khoản" autocomplete="off" required="">

                    <span class="input-group toggle-password w-100 c-mb-8">
                        <input class="" type="password" name="password" placeholder="Nhập mật khẩu của bạn" autocomplete="off" required="">
                    </span>

                    <p class="forgot-text c-mb-24 fz-12 fw-400 lh-16">Quên mật khẩu?</p>

                    <button class="btn primary">Đăng nhập</button>

                    <div class="login-line d-flex align-items-center c-mt-24 c-px-25">
                        <span class="d-block"></span>
                        <p class="c-mb-0 fz-13 fw-400 c-mx-8">Hoặc đăng nhập qua</p>
                        <span class="d-block"></span>
                    </div>

                    <div class="social-container c-mt-16">
                        <a href="#" class="d-inline-flex justify-content-center aligin-items-center c-mx-10">
                            <img src="/assets/frontend/{{env('THEME_VERSION')}}/image/svg/fb_icon.svg" alt="">
                        </a>
                    </div>

                    <p id="changeFormRegister" class="mobile-auth-change-form fw-400 fz-12 lh-16 c-mt-16">Bạn chưa có tài khoản? <span>Đăng ký tại đây</span></p>
                </form>
            </div>
        </div>
    </div>
@endsection