@extends('frontend.layouts.master')
@section('content')
    <div class="log-in container" >
        <div class="log-in-body">
            <p>Đổi mật khẩu</p>
            <form action="{{route('changePasswordApi')}}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Mật khẩu cũ " name="old_password">
                    <span><i class="fas fa-user"></i></span>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Mật khẩu hiện tại" name="password">
                    <span><i class="fas fa-lock"></i></span>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Xác nhận mật khẩu" name="password_confirmation">
                    <span><i class="fas fa-lock"></i></span>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <button class="btn btn-primary btn-block btn-flat" type="submit">Xác nhận</button>
                    </div>
                </div>
            </form>


        </div>
    </div>
@endsection
