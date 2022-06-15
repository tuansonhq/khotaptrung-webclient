@extends('frontend.layouts.master')
@section('styles')
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/style_trong.css">
@endsection
@section('scripts')
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/js_trong/script_trong.js"></script>
@endsection
@section('content')
    <div class="container-fix container">
        {{--breadcrum--}}
        <ul class="breadcrum--list">
            <li class="breadcrum--item">
                <a href="/" class="breadcrum--link">Trang chủ</a>
            </li>
            <li class="breadcrum--item">
                <a href="/lich-su-giao-dich" class="breadcrum--link">Lịch sử giao dịch</a>
            </li>
            <li class="breadcrum--item">
                <a href="/lich-su-dich-vu" class="breadcrum--link">Dịch vụ đã mua</a>
            </li>
            <li class="breadcrum--item">
                <a href="/nhan-tin" class="breadcrum--link">Nhắn tin</a>
            </li>
        </ul>
        <div class="row m-0">
            {{--navbar--}}
            @include('theme_3.frontend.widget.__navbar__profile')
            {{--content--}}
            <div class="col-12 col-lg-9 order--detail">
                <div class="card--mobile__title">
                    <a href="/lich-su-dich-vu" class="card--back">
                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/back.png" alt="">
                    </a>
                    <h4>Gửi tin nhắn</h4>
                </div>
                <div class="card --custom">
                    <div class="card--header  hidden-mobile">
                        <h4 class="card--header__title">
                            Gửi tin nhắn
                        </h4>
                    </div>
                    <div class="card--body">
                        <div class="row">
                            <div class="col-12 col-lg-6 px-3 px-lg-3">
                                <div class="pt-0 pt-lg-3 pb-1 mb-2">
                                    <span class="text--sm__title">Thông tin tài khoản</span>
                                </div>
                                <div class="card--rise --gray m-0">
                                    <div class="order__attr">
                                        <div class="card__attr">
                                            <div class="card--value__attr">
                                                Mã số acc:<span class="card__info">##539084</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order__attr">
                                        <div class="card__attr">
                                            <div class="card--value__attr">
                                                Tài khoản:<span class="card__info">Test</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order__attr">
                                        <div class="card__attr">
                                            <div class="card--value__attr">
                                                Thời gian mua:<span class="card__info">01/01/2021 - 4:12</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-3 pb-1 mb-2">
                                    <span class="text--sm__title">Trao đổi dịch vụ: <span class="text--primary">#539084</span></span>
                                </div>
                                <div class="mb-2">
                                    <span class="text--sm__title">Nội dung</span>
                                </div>
                                <textarea name="content" class="textarea--content" id="" placeholder="Nhập nội dung nếu cần thiết"></textarea>
                                <div class="pt-2 mb-2">
                                    <span class="text--sm__title">Hình ảnh</span>
                                </div>
                                <input type="file" name="image" class="input--file">
                                <div class="pt-2 mt-1 d-flex align-items-center">
                                    <label class="input--checkbox mr-2">
                                        <input type="checkbox" name="complain" id="complain" hidden>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="label--checkbox__input ml-1" for="complain">Khiếu nại</label>
                                </div>
                                <div class="pt-3">
                                    <span class="text--sm__title">Mã bảo vệ</span>
                                </div>
                                <div class="mt-2 mb-4 d-flex align-items-center captcha--code__group">
                                    <input type="text" name="captcha-code" id="" class="input--text input-defautf-ct" placeholder="Nhập mã bảo vệ">
                                    <div class="captcha--code ml-3 mr-2">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/captcha-code-demo.png" alt="" class="captcha--code__image">
                                    </div>
                                    <a href="" class="captcha--refresh">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/captcha-refresh.png" alt="" class="captcha--refresh__image">
                                    </a>
                                </div>
                                <button class="btn -primary btn-big">Gửi tin nhắn</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
