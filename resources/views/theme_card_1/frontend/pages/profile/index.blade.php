@extends('frontend.layouts.master')

@section('content')
    <div class="row my-3" >
        <div class="col-lg-3  col-sm-3 col-md-3 col-12">
            @include('frontend.layouts.includes.menu_profile')
        </div>
        <div class="col-lg-9  col-md-9 col-sm-12 col-12">
            <div class="bg-white">
                <div class="main-profile" style="min-height: 468px;padding:15px 20px">

                    <div class="content-profile">
                        <h3>Thông tin tài khoản</h3>
                        <hr class="lines">
                        <table class="table table-striped m-table">
                            <tbody>
                            <tr>
                                <th>ID của bạn:</th>
                                <th>35012</th>
                            </tr>
                            <tr>
                                <th>Tên của bạn:</th>
                                <th>Đỗ Hải Nam</th>
                            </tr>
                            <tr>
                                <th>Số dư tài khoản:</th>
                                <th>0 VNĐ</th>
                            </tr>
                            <tr>
                                <th>Ngày tham gia:</th>
                                <th>
                                    05/10/2022
                                </th>
                            </tr>
                            <tr>
                                <th>Mật khẩu:</th>
                                <th>************** </th>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
