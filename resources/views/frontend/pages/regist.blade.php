@extends('frontend.layouts.master')
@section('content')
    <div class="log-in container" >
        <div class="log-in-body">
            <p>Đăng ký thành viên</p>
            <form action="">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Tài khoản của web">
                    <span><i class="fas fa-user"></i></span>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Số điện thoại">
                    <span><i class="fas fa-user"></i></span>
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Mật khẩu">
                    <span><i class="fas fa-lock"></i></span>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Xác nhận mật khẩu">
                    <span><i class="fas fa-user"></i></span>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <button class="btn btn-primary btn-block btn-flat">Đăng Ký</button>
                    </div>
                </div>
            </form>
            <div class="social-auth">
                <p>- HOẶC -</p>
                <a class="btn  btn-social btn-facebook btn-flat d-inline-block" href=""><i class="fab fa-facebook"></i> Login FB</a>

            </div>

        </div>
    </div>
@endsection
