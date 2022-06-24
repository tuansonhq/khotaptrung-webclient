<div class="modal fade" id="loginModal">
    <div class="modal-dialog modal-lg modal-dialog-centered animated">
        <div class="modal-content">
            <div class="modal-login-container" id="modal-login-container">
                <div class="modal-login-form-container sign-up-container">
                    <img class="close-login-modal" src="assets/{{env('THEME_VERSION')}}/image/images_1/close_dark.svg" alt="">
                    <form class="modal-login-form" id="formRegister" action="/register" method="POST">
                        <h1>Đăng ký</h1>
                        {{-- <div class="social-container">
                            <a href="" class="social">
                                <img src="assets/{{env('THEME_VERSION')}}/image/images_1/fb_icon.svg" alt="">
                            </a>
                            <a href="" class="social">
                                <img src="assets/{{env('THEME_VERSION')}}/image/images_1/google_icon.svg" alt="">
                            </a>
                            <a href="" class="social">
                                <img src="assets/{{env('THEME_VERSION')}}/image/images_1/discord_icon.svg" alt="">
                            </a>
                        </div>
                        <span>Hoặc đăng ký bằng tài khoản</span> --}}
                        <input class="input-primary" type="text" name="username" placeholder="Nhập tên tài khoản">
                        <p class="modal-login-error" id="usernameRegisterError"></p>
                        <input class="input-primary" type="text" name="email" placeholder="Nhập email">
                        <p class="modal-login-error" id="emailRegisterError"></p>
                        <input class="input-primary" type="text" name="phone" placeholder="Nhập số điện thoại">
                        <p class="modal-login-error" id="phoneRegisterError"></p>
                        <div class="password-input-container">
                            <input class="input-primary" type="password" name="password" placeholder="Nhập mật khẩu của bạn" autocomplete="off">
                            <img class="password-input-hide" src="assets/{{env('THEME_VERSION')}}/image/images_1/eye-show.svg" alt="" style="display: none">
                            <img class="password-input-show" src="assets/{{env('THEME_VERSION')}}/image/images_1/eye-hide.svg" alt="" >
                        </div>
                        <p class="modal-login-error" id="passwordRegisterError"></p>
                        <button type="submit">Đăng ký</button>
                    </form>
                </div>
                <div class="modal-login-form-container sign-in-container">
                    <form class="modal-login-form" id="formLogin" action="/login" method="POST">
                        <h1>Đăng nhập</h1>
                        <input class="input-primary" type="text" name="username" placeholder="Nhập tên tài khoản" autocomplete="off">
                        <p class="modal-login-error" id="usernameError"></p>
                        <div class="password-input-container">
                            <input class="input-primary" type="password" name="password" placeholder="Nhập mật khẩu" autocomplete="off">
                            <img class="password-input-hide" src="assets/{{env('THEME_VERSION')}}/image/images_1/eye-show.svg" alt="" style="display: none">
                            <img class="password-input-show" src="assets/{{env('THEME_VERSION')}}/image/images_1/eye-hide.svg" alt="" >
                        </div>
                        <p class="modal-login-error" id="passwordError"></p>
                        <a class="modal-login-forget-password" id="span_resetPass">Quên mật khẩu?</a>
                        <button type="submit">Đăng nhập</button>
                        <span>Hoặc đăng nhập qua</span>
                        <div class="social-container">
                            <a href="" class="social">
                                <img src="assets/{{env('THEME_VERSION')}}/image/images_1/fb_icon.svg" alt="">
                            </a>
                        </div>
                    </form>
                </div>
                <div class="modal-login-overlay-container">
                    <div class="modal-login-overlay">
                        <div class="modal-login-overlay-panel modal-login-overlay-left" style="background-image: url('assets/{{env('THEME_VERSION')}}/image/images_1/login_modal_bg.png')">
                            <h1>Bạn đã có tài khoản?</h1>
                            <p>Đăng nhập tại đây</p>
                            <button id="signIn">Đăng nhập</button>
                        </div>
                        <div class="modal-login-overlay-panel modal-login-overlay-right" style="background-image: url('assets/{{env('THEME_VERSION')}}/image/images_1/login_modal_bg.png')">
                            <img class="close-login-modal" src="assets/{{env('THEME_VERSION')}}/image/images_1/close.svg" alt="">
                            <h1>Bạn chưa có tài khoản?</h1>
                            <p>Vui lòng đăng ký ngay tại đây</p>
                            <button id="signUp">Đăng ký</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mobile-auth">
    <div class="mobile-auth-nav">
        <div class="auth-nav-option auth-nav-option-active">
            Đăng nhập
        </div>
        <div class="auth-nav-option">
            Đăng ký
        </div>
    </div>
    <div class="mobile-auth-form">
        <form class="modal-login-form" id="formLoginMobile" action="/login" method="POST">
            <input class="input-primary" type="text" name="username" placeholder="Nhập tên tài khoản" autocomplete="off">
            <p class="modal-login-error" id="usernameError"></p>
            <div class="password-input-container">
                <input class="input-primary" type="password" name="password" placeholder="Nhập mật khẩu" autocomplete="off">
                <img class="password-input-hide" src="assets/{{env('THEME_VERSION')}}/image/images_1/eye-show.svg" alt="" style="display: none">
                <img class="password-input-show" src="assets/{{env('THEME_VERSION')}}/image/images_1/eye-hide.svg" alt="" >
            </div>
            <p class="modal-login-error" id="passwordError"></p>
            <a class="modal-login-forget-password" id="span_resetPass">Quên mật khẩu?</a>
            <button type="submit">Đăng nhập</button>
            <h1>Hoặc đăng nhập qua</h1>
            <div class="social-container">
                <a href="" class="social">
                    <img src="assets/{{env('THEME_VERSION')}}/image/images_1/fb_icon.svg" alt="">
                </a>
            </div>
            <p id="changeFormRegister" class="mobile-auth-change-form">Bạn chưa có tài khoản? <span>Đăng ký tại đây</span></p>
        </form>
        <form class="modal-login-form" id="formRegisterMobile" action="/register" method="POST" style="display: none">
            <input class="input-primary" type="text" name="username" placeholder="Nhập tên tài khoản">
            <p class="modal-login-error" id="usernameRegisterErrorMobile"></p>
            <input class="input-primary" type="text" name="email" placeholder="Nhập email">
            <p class="modal-login-error" id="emailRegisterErrorMobile"></p>
            <input class="input-primary" type="text" name="phone" placeholder="Nhập số điện thoại">
            <p class="modal-login-error" id="phoneRegisterErrorMobile"></p>
            <div class="password-input-container">
                <input class="input-primary" type="password" name="password" placeholder="Nhập mật khẩu của bạn" autocomplete="off">
                <img class="password-input-hide" src="assets/{{env('THEME_VERSION')}}/image/images_1/eye-show.svg" alt="" style="display: none">
                <img class="password-input-show" src="assets/{{env('THEME_VERSION')}}/image/images_1/eye-hide.svg" alt="" >
            </div>
            <p class="modal-login-error" id="passwordRegisterError"></p>
            <button type="submit">Đăng ký</button>
            <p id="changeFormLogin" class="mobile-auth-change-form">Bạn đã có tài khoản? <span>Đăng nhập tại đây</span></p>
        </form>
    </div>
</div>