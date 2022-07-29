<div class="modal fade" id="loginModal">
    <div class="modal-dialog modal-lg modal-dialog-centered animated">
        <div class="modal-content">
            <div class="modal-login-container" id="modal-login-container">
                <div class="modal-login-form-container sign-up-container">
                    <img class="close-login-modal" src="/assets/frontend/{{theme('')->theme_key}}/image/son/close.svg" alt="">
                    <form class="modal-login-form formRegister" id="formRegister" action="" method="POST">
                        @csrf
                        <p class="fw-700 fz-24 fz-lg-24 fz-md-18 fz-sm-16 color-pink">Đăng ký</p>
                        {{--                            <small class="fz-13 fz-md-12 fz-sm-10 fw-400 c-mb-12">Vui lòng đăng ký để sử dụng dịch vụ của chúng tôi</small>--}}
                        <input class="input-primary c-mt-16" type="text" name="username" placeholder="Nhập tên tài khoản" required>
                        <div class="text-error c-mt-4 w-100 text-left">Help message here.</div>
                        <div class="password-input-container c-mt-16">
                            <input class="input-primary" type="password" name="password" placeholder="Nhập mật khẩu của bạn" autocomplete="off" required>
                            <img class="password-input-hide" src="/assets/frontend/{{theme('')->theme_key}}/image/son/eye-show.svg" alt="" style="display: none">
                            <img class="password-input-show" src="/assets/frontend/{{theme('')->theme_key}}/image/son/eye-hide.svg" alt="" >
                        </div>
                        {{--                            <div class="text-error c-mt-4 w-100 text-left">Help message here.</div>--}}
                        <div class="password-input-container c-mt-16">
                            <input class="input-primary" type="password" name="password_confirmation" placeholder="Nhập lại mật khẩu của bạn" autocomplete="off" required>
                            <img class="password-input-hide" src="/assets/frontend/{{theme('')->theme_key}}/image/son/eye-show.svg" alt="" style="display: none">
                            <img class="password-input-show" src="/assets/frontend/{{theme('')->theme_key}}/image/son/eye-hide.svg" alt="" >
                        </div>
                        {{--                            <div class="text-error c-mt-4 w-100 text-left">Help message here.</div>--}}

                        <button type="submit" class="btn pink btn-pink-default c-mt-32">Đăng ký</button>
                    </form>
                </div>
                <div class="modal-login-form-container sign-in-container"   >
                    <form class="modal-login-form formLogin" action="" id="formLogin"  method="POST">
                        @csrf
                        <p class="fw-700 fz-24 fz-lg-24 fz-md-18 fz-sm-16">Đăng nhập</p>
                        <small class="fz-13 fz-md-12 fz-sm-10 fw-400 c-mb-12">Vui lòng đăng nhập để sử dụng dịch vụ của chúng tôi</small>
                        <input class="input-primary c-mt-12" type="text" name="username" placeholder="Nhập tên tài khoản" autocomplete="off" required>
                        {{--                            <div class="text-error c-mt-4 w-100 text-left">Help message here.</div>--}}
                        <div class="password-input-container c-mt-16">
                            <input class="input-primary" type="password" name="password" placeholder="Nhập mật khẩu" autocomplete="off">
                            <img class="password-input-hide" src="/assets/frontend/{{theme('')->theme_key}}/image/son/eye-show.svg" alt="" style="display: none" required>
                            <img class="password-input-show" src="/assets/frontend/{{theme('')->theme_key}}/image/son/eye-hide.svg" alt="" >
                        </div>
                        {{--                            <div class="text-error c-mt-4 w-100 text-left">Help message here.</div>--}}
                        <a href="" class="link blue w-100 text-left c-mt-4">Bạn quên mật khẩu?</a>
                        <button type="submit" class="btn primary c-mt-18 c-mt-md-16 c-mt-sm-16 btn-primary-default">Đăng nhập</button>
                        <span class="login-via fw-400 fz-13 fz-md-12 fz-sm-10 c-mt-24 c-mt-lg-20 c-mt-md-16 c-mt-sm-8">Hoặc đăng nhập qua</span>
                        <div class="social-container c-mt-24 c-mt-lg-20 c-mt-md-16">
                            <a href="http://fb.nhapnick.com/{{str_replace(".","_",Request::getHost())}}" class="social">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/son/facebook.svg" alt="">
                            </a>
                        </div>
                    </form>
                </div>
                <div class="modal-login-overlay-container">
                    <div class="modal-login-overlay">
                        <div class="modal-login-overlay-panel modal-login-overlay-left" style="background-image: url('/assets/frontend/{{theme('')->theme_key}}/image/son/bglogin.png')">
                            <p class="modal-login-suggestion fw-700 fz-24 fz-lg-20 fz-md-18 fz-sm-16 c-mt-24 c-mt-lg-20 c-mt-md-16 c-mt-sm-8 mb-0">Nick.vn xin chào</p>
                            <p class="fw-400 fz-13 fz-md-12 fz-sm-10 c-mb-24 c-mb-lg-20 c-mb-md-16 c-md-sm-8">Bạn đã có tài khoản, vui lòng đăng nhập tại đây</p>
                            <button class="btn primary btn-primary-default" id="signIn">Đăng nhập</button>
                        </div>
                        <div class="modal-login-overlay-panel modal-login-overlay-right" style="background-image: url('/assets/frontend/{{theme('')->theme_key}}/image/son/bglogin.png')">
                            <img class="close-login-modal" src="/assets/frontend/{{theme('')->theme_key}}/image/son/close.svg" alt="">
                            <p class="modal-login-suggestion fw-700 fz-24 fz-lg-20 fz-md-18 fz-sm-16 c-mt-24 c-mt-lg-20 c-mt-md-16 c-mt-sm-8 mb-0">Nick.vn xin chào</p>
                            <p class="fw-400 fz-13 fz-md-12 fz-sm-10 c-mb-32 c-mb-lg-20 c-mb-md-16 c-md-sm-8">Vui lòng đăng ký ngay tại đây</p>
                            <button class="btn pink btn-pink-default" id="signUp">Đăng ký</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
