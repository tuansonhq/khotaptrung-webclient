@extends('frontend.layouts.master')
@section('content')
<div class="account">

    <div class="account_content">
        <div class="container">
          @include('frontend.pages.account.sidebar')
            <div class="account_sidebar_content">
                <div class="account_sidebar_content_title">
                    <p>Thông tin tài khoản</p>
                    <div class="account_sidebar_content_line"></div>
                </div>
                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <th scope="row">ID của bạn:</th>
                        <th><span>5454</span></th>
                    </tr>
                    <tr>
                        <th scope="row">Tên tài khoản</th>
                        <th><span>namhai</span></th>
                    </tr>
                    <tr>
                        <th scope="row">Ngày sinh:</th>
                        <th><span>18/02/2000</span></th>
                    </tr>
                    <tr>
                        <th scope="row">Giới tính:</th>
                        <th><span>Nam</span></th>
                    </tr>
                    <tr>
                        <th scope="row">Giới tính:</th>
                        <th><span><i class="text-danger">Nam</i></span></th>
                    </tr>
                    <tr>
                        <th scope="row">Số dư tài khoản:</th>
                        <th><span><i class="text-danger">0đ</i></span></th>
                    </tr>
                    <tr>
                        <th scope="row">Nhóm tài khoản:</th>
                        <td>Thành viên</td>
                    </tr>
                    <tr></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
