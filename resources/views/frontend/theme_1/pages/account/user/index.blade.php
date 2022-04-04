@extends('frontend.'.theme('')->theme_key.'.layouts.master')
@push('js')
    <script src="/assets/frontend/js/profile.js"></script>
@endpush
@section('content')

<div class="account">

    <div class="account_content">
        <div class="container">
          @include('frontend.'.theme('')->theme_key.'.pages.account.sidebar')
            <div class="account_sidebar_content">
                <div class="account_sidebar_content_title">
                    <p>Thông tin tài khoản</p>
                    <div class="account_sidebar_content_line"></div>
                </div>
                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <th scope="row">ID của bạn:</th>
                        <th id="info_id"></th>
                    </tr>
                    <tr>
                        <th scope="row">Tên tài khoản</th>
                        <th id="info_name"></th>
                    </tr>
                    <tr>
                        <th scope="row">Ngày sinh:</th>
                        <th><span> 18/02/2000</span></th>
                    </tr>
{{--                    <tr>--}}
{{--                        <th scope="row">Giới tính:</th>--}}
{{--                        <th><span>Nam</span></th>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <th scope="row">Giới tính:</th>--}}
{{--                        <th><span><i class="text-danger">Nam</i></span></th>--}}
{{--                    </tr>--}}
                    <tr>
                        <th scope="row">Số dư tài khoản:</th>
                        <th id="info_balance"></th>
                    </tr>
                    <tr>
                        <th scope="row">Mật khẩu</th>
                        <td>*** <a href="">Đổi mật khẩu</a></td>
                    </tr>
                    <tr></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>

@endsection
