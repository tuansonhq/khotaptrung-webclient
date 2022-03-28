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
        $(document).ready(function(){
            const csrf_token = $('meta[name="csrf-token"]').attr('content');
            const token =  $('meta[name="jwt"]').attr('content');
            function getInfo(){
                const url = '/profile';
                if(token == 'undefined' || token == null || token =='' || token == undefined){
                    $('#info .loading').remove();
                    $('#logout .loading').remove();
                    $('#info').attr('href','/login')
                    $('#logout').attr('href','/register')
                    $('#info').html('<i class="fas fa-user"></i> Đăng nhập')
                    $('#logout').html('<i class="fas fa-user"></i> Đăng kí')
                    return;
                }
                $.ajax({
                    type: "GET",
                    url: url,
                    cache:false,
                    data: {
                        _token:csrf_token,
                        jwt:token
                    },
                    beforeSend: function (xhr) {

                    },
                    success: function (data) {
                        console.log(111)
                        console.log(data)
                        if(data.status === "LOGIN"){
                            window.location.href = '/logout';
                            // method = method || 'post';
                            return;
                        }
                        if(data.status === "ERROR"){
                            alert('Lỗi dữ liệu, vui lòng load lại trang để tải lại dữ liệu')
                        }
                        if(data.status == true){
                            $('#info_id').html('<span>'+data.info.id+'</span>')
                            $('#info_name').html('<span>'+data.info.username+'</span>')
                            $('#info_balance').html('<span><i class="text-danger">'+data.info.balance+'</i></span>')
                        }
                    },
                    error: function (data) {
                        alert('Có lỗi phát sinh, vui lòng liên hệ QTV để kịp thời xử lý!')
                        return;
                    },
                    complete: function (data) {

                    }
                });
            }
            getInfo();
        });
@endsection
