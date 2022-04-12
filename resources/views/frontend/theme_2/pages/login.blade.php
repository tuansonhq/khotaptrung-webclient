@extends('frontend.'.theme('')->theme_key.'.layouts.master')
@section('seo_head')
    {{--    @include('frontend.widget.__seo_head')--}}
@endsection
@section('content')
    <div class="site-content-body first last bg-white p-0">
        <div class="row align-items-stretch">
            <div class="col-lg-8">
                <div class="p-4 h-100">
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="col-lg-6">
                            <form action="#" method="post">
                                <h5 class="title-style-left mb-3"><strong>Đăng nhập</strong></h5>
                                <div class="mb-3">
                                    <label class="label mb-1">Tên tài khoản</label>
                                    <div class="input-group">
                                        <input type="text" id="login_username" name="login_username" class="form-control border-end-0" placeholder="+84" value="">
                                        <span class="input-group-text bg-transparent border-first-0"><i class="las la-user"></i></span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="label mb-1">Mật khẩu</label>
                                    <div class="input-group">
                                        <input type="password" id="login_password" name="login_password" class="form-control border-end-0" placeholder="" value="">
                                        <span class="input-group-text bg-transparent border-first-0"><i class="las la-lock"></i></span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <a class="btn bg-warning-gradient text-white d-block pt-2 pb-2 text-uppercase rounded" href="index.html"><strong>Đăng nhập <i class="las la-angle-double-right"></i></strong></a>
                                </div>
                                <p>Không nhớ mất khẩu? <a href="#" class="forgot-link" data-bs-toggle="modal" data-bs-target="#forgotModal">Lấy lại mật khẩu</a></p>
                                <div class="mb-3 is-devider"><span>Hoặc đăng nhập với</span></div>
                                <div class="row g-2">
                                    <div class="col-6">
                                        <a href="#" class="btn btn-outline-primary text-primary d-block"><i class="lab la-facebook"></i> Facebook</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="#" class="btn btn-outline-danger text-danger d-block"><i class="lab la-google"></i> Google</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="p-4 bg-light h-100">
                    <form action="#" method="post">
                        <h5 class="title-style-left mb-3"><strong>Tạo tài khoản mới</strong></h5>
                        <div class="mb-3">
                            <label class="label mb-1">Tên tài khoản</label>
                            <div class="input-group">
                                <input type="text" id="username" name="username" class="form-control border-end-0" placeholder="" value="">
                                <span class="input-group-text bg-white border-first-0"><i class="las la-user"></i></span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="label mb-1">Số điện thoại</label>
                            <div class="input-group">
                                <input type="text" id="phone" name="phone" class="form-control border-end-0" placeholder="" value="">
                                <span class="input-group-text bg-white border-first-0"><i class="las la-phone"></i></span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="label mb-1">Địa chỉ email</label>
                            <div class="input-group">
                                <input type="text" id="enmail" name="enmail" class="form-control border-end-0" placeholder="" value="">
                                <span class="input-group-text bg-white border-first-0"><i class="las la-envelope"></i></span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="label mb-1">Mật khẩu</label>
                            <div class="input-group">
                                <input type="password" id="password" name="password" class="form-control border-end-0" placeholder="" value="">
                                <span class="input-group-text bg-white border-first-0"><i class="las la-lock"></i></span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="label mb-1">Nhập lại mật khẩu</label>
                            <div class="input-group">
                                <input type="password" id="password_repeat" name="password_repeat" class="form-control border-end-0" placeholder="" value="">
                                <span class="input-group-text bg-white border-first-0"><i class="las la-lock"></i></span>
                            </div>
                        </div>
                        <div class="mb-3 d-flex justify-content-between align-items-center">
                            <div><img src="img/temp/capcha.png" alt=""></div>
                            <div>
                                <input type="text" id="capcha" name="capcha" class="form-control text-end" placeholder="Security Code" value="">
                            </div>
                        </div>
                        <div class="mb-3">
                            <a class="btn bg-primary-gradient text-white d-block pt-2 pb-2 text-uppercase rounded" href="#"><strong>Đăng ký ngay <i class="las la-angle-double-right"></i></strong></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="after"></div>
@endsection
