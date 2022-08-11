@extends('frontend.layouts.master')

@section('content')
    <div class="container c-container-side" style="background: #efefef">
        <ul class="breadcrumb-list">
            <li class="breadcrumb-item">
                <a href="/" class="breadcrumb-link">Trang chủ</a>
            </li>
            <li class="breadcrumb-item">
                <a href="/thong-tin" class="breadcrumb-link">Thông tin tài khoản</a>
            </li>
        </ul>

        <div class="head-mobile">
            <a href="/profile-navbar" class="link-back close-step"></a>

            <h1 class="head-title text-title">Thông tin tài khoản</h1>

            <a href="/" class="home"></a>
        </div>
        <div class="row">
            <div class="c-history-left media-web">
                @include('frontend.widget.__menu_profile')
            </div>
            <div class="c-ml-16 c-ml-lg-0 c-history-right c_history-right">
                <div class="history-detail-title c-p-16 c-mb-16 brs-12 d-none d-sm-block">
                    <h1 class="fw-700 fz-20 lh-28 c-my-0">Thông tin tài khoản</h1>
                </div>
                <div class="g_history-detail-content brs-12 c-p-16 c-mb-16">
                    <div class="history-detail-attr c-mb-8 d-flex justify-content-between align-items-center">
                        <p class="fz-13 fw-400 mb-0">ID của bạn</p>
                        <div class="fw-500 fz-13">1234567</div>
                    </div>
                    <div class="history-detail-attr c-mb-8 d-flex justify-content-between align-items-center">
                        <p class="fz-13 fw-400 mb-0">Tên tài khoản</p>
                        <div class="fw-500 fz-13">Nobita Yêu Xuka</div>
                    </div>
                    <div class="history-detail-attr c-mb-8 d-flex justify-content-between align-items-cente">
                        <p class="fz-13 fw-400 mb-0">Số dư tài khoản</p>
                        <div class="detail-primary fw-500 fz-13">100.000đ</div>
                    </div>
                    <div class="history-detail-attr d-flex justify-content-between align-items-center">
                        <p class="fz-13 fw-400 mb-0">Xu khóa</p>
                        <div class="detail-primary fw-500 fz-13 ">100.000 xu</div>

                    </div>

                </div>
                <div class="g_history-detail-content brs-12 c-p-16 c-mb-16">
                    <div class="history-detail-attr c-mb-8 d-flex justify-content-between align-items-center">
                        <p class="fz-13 fw-400 mb-0">Bảo mật ODP</p>
                        <div class="fw-500 fz-13">0912 234 567</div>
                    </div>
                    <div class="history-detail-attr  d-flex justify-content-between align-items-center">
                        <p class="fz-13 fw-400 mb-0">Loại tài khoản</p>
                        <div class="fw-500 fz-13">Thành viên</div>
                    </div>


                </div>
                <div class="g_history-detail-content brs-12 c-p-16 ">
                    <div class="history-detail-attr  d-flex justify-content-between align-items-center">
                        <p class="fz-13 fw-400 mb-0">Ngày tham gia</p>
                        <div class="fw-500 fz-13">02/10/2021</div>
                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection



