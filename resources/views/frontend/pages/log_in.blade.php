@extends('frontend.layouts.master')
@section('content')
    <div class="log-in container" >
        <div class="log-in-body">
            <p>Đăng nhập hệ thống</p>
            <form action="{{route('login')}}" method="POST">
            <p style="color: red;font-size: 14px">    {{ $errors->first() }}</p>

            <form action="{{route('loginApi')}}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Tài khoản" name="username">
                    <span><i class="fas fa-user"></i></span>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Mật khẩu" name="password">
                    <span><i class="fas fa-lock"></i></span>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="checkbox icheck">
                            <label >
                                <input type="checkbox" >
                                Ghi nhớ
                            </label>
                        </div>

                    </div>
                    <div class="col-sm-6">
                        <a href="">Quên mật khẩu</a>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <button class="btn btn-primary btn-block btn-flat" type="submit">Đăng nhập</button>
                    </div>
                </div>
            </form>
            <div class="social-auth">
                <p>- HOẶC -</p>
                <a class="btn  btn-social btn-facebook btn-flat d-inline-block" href="http://fb.nhapnick.com/{{str_replace(".","_",Request::getHost())}}"><i class="fab fa-facebook"></i> Login FB</a>
                <a class="btn  btn-google btn-facebook btn-flat d-inline-block" href="/register"><i class="fas fa-key"></i> Đăng ký tài khoản</a>

            </div>




        </div>
    </div>
@endsection
