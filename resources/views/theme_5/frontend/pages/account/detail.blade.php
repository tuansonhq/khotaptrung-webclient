@extends('frontend.layouts.master')

@section('content')
    <div class="container c-container" id="account-detail">
        <ul class="breadcrumb-list">
            <li class="breadcrumb-item">
                <a href="/" class="breadcrumb-link">Trang chủ</a>
            </li>
            <li class="breadcrumb-item">
                <a href="/mua-acc" class="breadcrumb-link">Shop Account</a>
            </li>
            <li class="breadcrumb-item">
                <a href="/mua-acc/id" class="breadcrumb-link">Danh sách Nick Liên Quân</a>
            </li>
            <li class="breadcrumb-item">
                <a href="/acc/id" class="breadcrumb-link">Chi tiết nick</a>
            </li>
        </ul>

        <div class="head-mobile">
            <a href="/mua-acc/id" class="link-back"></a>

            <h1 class="head-title text-title">Danh sách Nick Liên Quân</h1>

            <a href="/" class="home"></a>
        </div>

        {{--        Data detail    --}}
        @include('frontend.pages.account.widget.__datadetail')
        {{--  TK đồng giá   --}}
        @include('frontend.pages.account.widget.__same__price')

        {{--            Siêu ưu đã   --}}
        @include('frontend.pages.account.widget.__flash__sale')

        {{--            Đã xem   --}}
        @include('frontend.pages.account.widget.__watched')

    </div>


{{--    Modal xác nhận thanh toán--}}
    <div class="modal fade modal-big" id="orderModal">
        <div class="modal-dialog modal-dialog-centered modal-custom">
            <div class="modal-content c-p-24">
                <div class="modal-header">
                    <h2 class="modal-title center">Xác nhận thanh toán</h2>
                    <button type="button" class="close" data-dismiss="modal"></button>
                </div>
                <div class="modal-body pl-0 pr-0 c-pt-24 c-pb-24">
                    <div class="dialog--content__title fw-700 fz-13 c-mb-12 text-title-theme">
                        Thông tin mua thẻ
                    </div>
                    <div class="card--gray c-mb-16 c-pt-8 c-pb-8 c-pl-12 c-pr-12">
                        <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                            <div class="card--attr__name fw-400 fz-13 text-center">
                                Loại thẻ
                            </div>
                            <div class="card--attr__value fz-13 fw-500">10.000đ</div>
                        </div>
                        <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                            <div class="card--attr__name fw-400 fz-13 text-center">
                                Mệnh giá
                            </div>
                            <div class="card--attr__value fz-13 fw-500">10.000đ</div>
                        </div>
                        <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                            <div class="card--attr__name fw-400 fz-13 text-center">
                                Số lượng
                            </div>
                            <div class="card--attr__value fz-13 fw-500">01</div>
                        </div>
                        <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                            <div class="card--attr__name fw-400 fz-13 text-center">
                                Chiết khấu
                            </div>
                            <div class="card--attr__value fz-13 fw-500">1%</div>
                        </div>
                    </div>
                    <div class="card--gray c-mb-16 c-pt-8 c-pb-8 c-pl-12 c-pr-12">
                        <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                            <div class="card--attr__name fz-13 fw-400 text-center">
                                Phương thức thanh toán
                            </div>
                            <div class="card--attr__value fz-13 fw-500">
                                Tài khoản Shopbrand
                            </div>
                        </div>
                        <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                            <div class="card--attr__name fw-400 fz-13 text-center">
                                Phí thanh toán
                            </div>
                            <div class="card--attr__value fz-13 fw-500">
                                Miễn phí
                            </div>
                        </div>
                    </div>
                    <div class="card--gray c-mb-0 c-pt-8 c-pb-8 c-pl-12 c-pr-12">
                        <div class="card--attr__total justify-content-between d-flex c-mb-16 text-center">
                            <div class="card--attr__name fw-400 fz-13 text-center">
                                Tổng thanh toán
                            </div>
                            <div class="card--attr__value fz-13 fw-500"><a href="javascript:void(0)" class="c-text-primary">9.900 đ</a></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn primary">Xác nhận</button>

                </div>
            </div>
        </div>
    </div>

{{--    Modal trả góp   --}}

    <div class="modal fade modal-big modal-tra-gop" id="traGopModal">
        <div class="modal-dialog modal-dialog-centered modal-custom">
            <div class="modal-content c-p-24">
                <div class="modal-header">
                    <h2 class="modal-title center">Xác nhận thanh toán</h2>
                    <button type="button" class="close" data-dismiss="modal"></button>
                </div>
                <div class="modal-body py-0 pl-0 c-pr-8 c-mt-24 c-mb-24" id="modal-body-scroll">
                    <div class="dialog--content__title fw-500 fz-13 c-mb-12 text-title-theme">
                        Thông tin mua thẻ
                    </div>
                    <div class="card--gray c-mb-16 c-pt-8 c-pb-8 c-pl-12 c-pr-12">
                        <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                            <div class="card--attr__name fw-400 fz-13 text-center">
                                Loại thẻ
                            </div>
                            <div class="card--attr__value fz-13 fw-500">10.000đ</div>
                        </div>
                        <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                            <div class="card--attr__name fw-400 fz-13 text-center">
                                Mệnh giá
                            </div>
                            <div class="card--attr__value fz-13 fw-500">10.000đ</div>
                        </div>
                        <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                            <div class="card--attr__name fw-400 fz-13 text-center">
                                Số lượng
                            </div>
                            <div class="card--attr__value fz-13 fw-500">01</div>
                        </div>
                        <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                            <div class="card--attr__name fw-400 fz-13 text-center">
                                Chiết khấu
                            </div>
                            <div class="card--attr__value fz-13 fw-500">1%</div>
                        </div>
                    </div>
                    <div class="card--gray c-mb-16 c-pt-8 c-pb-8 c-pl-12 c-pr-12">
                        <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                            <div class="card--attr__name fz-13 fw-400 text-center">
                                Phương thức thanh toán
                            </div>
                            <div class="card--attr__value fz-13 fw-500">
                                Tài khoản Shopbrand
                            </div>
                        </div>
                        <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                            <div class="card--attr__name fw-400 fz-13 text-center">
                                Phí thanh toán
                            </div>
                            <div class="card--attr__value fz-13 fw-500">
                                Miễn phí
                            </div>
                        </div>
                    </div>
                    <div class="card--gray c-mb-0 c-pt-8 c-pb-8 c-pl-12 c-pr-12">
                        <div class="card--attr__total justify-content-between d-flex c-mb-16 text-center">
                            <div class="card--attr__name fw-400 fz-13 text-center">
                                Tổng thanh toán
                            </div>
                            <div class="card--attr__value fz-13 fw-500"><a href="javascript:void(0)" class="c-text-primary">9.900 đ</a></div>
                        </div>
                    </div>

                    <div class="dialog--content__title c-mt-24 fw-500 fz-13 c-mb-12 text-title-theme">
                        Thông tin trả góp
                    </div>

                    <div class="c-mt-8">
                        <label class="c-mb-4 fw-500 fz-13 lh-20">Trả lần 1</label>
                        <div class="col-md-12 p-0">
                            <input type="text" name="" id="" placeholder="placeholder">
                        </div>
                    </div>
                    <div class="c-mt-8">
                        <label class="c-mb-4 fw-500 fz-13 lh-20">Trả lần 2</label>
                        <div class="col-md-12 p-0">
                            <input type="text" name="" id="" placeholder="placeholder">
                        </div>
                    </div>
                    <div class="c-mt-12">
                        <label class="c-mb-4 fw-500 fz-13 lh-20">Mã bảo vệ</label>
                        <div class="col-md-12 p-0 d-flex">
                            <input class="input-form w-100" type="text" placeholder="Nhập mã bảo vệ">
                            <div class="c-ml-8 c-mr-8">
                                <div>
                                    <span>
                                          <img src="/assets/frontend/{{theme('')->theme_key}}/image/son/macacha.png" alt="">
                                    </span>
                                </div>
                            </div>
                            <button class="refresh-captcha">
                                <img src="/assets/frontend/{{theme('')->theme_key}}/image/son/refresh.png" alt="">
                            </button>

                        </div>
                    </div>

                    <div class="dialog--content__title c-mt-24 fw-500 fz-13 c-mb-12 text-title-theme">
                        Quy định trả góp
                    </div>

                    <div class="c-mt-8 content-tra-gop">
                        <div class="col-md-12 c-py-12 c-px-8">
                            <ul>
                                <li>Trả góp ban đầu 20% giá trị tài khoản dự kiến mua để giữ tài khoản. Áp dụng cho tài khoản trị giá từ 200.000đ trở lên.</li>
                                <li>Thời gian trả góp: 7 ngày. Không tính ngày xác nhận trả góp.</li>
                                <li>Phí trả góp: 0%</li>
                                <li>Trong thời gian trả góp bạn phải hoàn tất phần còn lại để giao dịch hoàn tất.</li>
                                <li>Trường hợp quá thời gian trả góp giao dịch của bạn sẽ tự động bị hủy bỏ và hoàn lại 20% số tiền đã góp ban đầu.Lúc này tài khoản được tự do. (Ví dụ: tài khoản cần mua trị giá 1 triệu, trả góp ban đầu 200.000đ.</li>
                                <li>Nếu quá thời gian giao dịch trả góp bị hủy bỏ thì bạn sẽ nhận lại 20% tức 40.000đ trong tài khoản) Quy trình giao dịch đều xử lý tự động, bạn không thể gọi hỗ trợ gia hạn thêm ngày trả góp hoặc đổi khác quy định trên.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn primary">Xác nhận</button>
                </div>
            </div>
        </div>
    </div>

{{--    Modal lmht tướng--}}

    <div class="c-modal__nick-lmht c-modal__nick-lmht-tuong" style="z-index: 1005; background: rgba(67, 70, 87, 0.5);">
        <div class="header-modal__nick-lmht c-px-24 c-pt-24 pb-0 position-relative text-uppercase text-center ml-auto mr-auto fw-700">
            <div class="row marginauto c-pb-24 header-modal__nick-lmht-row">
                <div class="col-auto pl-0 pr-0 mb-0 c-mr-24">
                    <h2 class="fw-700 fz-24 lh-32 mb-0">Tướng</h2>
                    <p class="fw-400 fz-13 lh-20 mb-0">(100 tướng)</p>
                </div>
                <div class="col-auto pl-0 pr-0 form-search input-search-lmht position-relative">
                    <input id="keyword--search" type="search" placeholder="Tìm kiếm" class="has-submit input-search-lmht">
                    <button class="submit--search" type="submit"></button>
                </div>
                <img class="c-close-modal" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/close.svg" alt="">
            </div>
        </div>
        <div class="body-modal__nick-lmht pb-0 c-px-18 c-pt-10 mr-auto ml-auto">
            <div class="row marginauto modal-container-body">
                <div class="col-md-12 c-px-6 c-py-8 body-modal__nick__text-error">
                    <div class="text-error c-mt-4">Không có kết quả phù hợp.</div>
                </div>
                <div class="col-auto c-px-6 c-py-8 item-nick-lmht">
                    <a href="">
                        <div class="row marginauto item-nick-lmht__border">
                            <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Axtrox">
                            </div>
                            <div class="col-md-12 pl-0 pr-0 text-center">
                                <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Axtrox</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-auto c-px-6 c-py-8 item-nick-lmht">
                    <a href="">
                        <div class="row marginauto item-nick-lmht__border">
                            <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Amumu">
                            </div>
                            <div class="col-md-12 pl-0 pr-0 text-center">
                                <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Amumu</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-auto c-px-6 c-py-8 item-nick-lmht">
                    <a href="">
                        <div class="row marginauto item-nick-lmht__border">
                            <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Garen">
                            </div>
                            <div class="col-md-12 pl-0 pr-0 text-center">
                                <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Garen</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-auto c-px-6 c-py-8 item-nick-lmht">
                    <a href="">
                        <div class="row marginauto item-nick-lmht__border">
                            <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Sona">
                            </div>
                            <div class="col-md-12 pl-0 pr-0 text-center">
                                <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Sona</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-auto c-px-6 c-py-8 item-nick-lmht">
                    <a href="">
                        <div class="row marginauto item-nick-lmht__border">
                            <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Axtrox">
                            </div>
                            <div class="col-md-12 pl-0 pr-0 text-center">
                                <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Axtrox</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-auto c-px-6 c-py-8 item-nick-lmht">
                    <a href="">
                        <div class="row marginauto item-nick-lmht__border">
                            <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Amumu">
                            </div>
                            <div class="col-md-12 pl-0 pr-0 text-center">
                                <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Amumu</p>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
            <div class="modal-footer" style="height: 16px">

            </div>
        </div>

    </div>

{{--   Modal trang phục   --}}
    <div class="c-modal__nick-lmht c-modal__nick-lmht-trang-phuc" style="z-index: 1005; background: rgba(67,70,87,0.5);">
        <div class="header-modal__nick-lmht c-px-24 c-pt-24 pb-0 position-relative text-uppercase text-center ml-auto mr-auto fw-700">
            <div class="row marginauto c-pb-24 header-modal__nick-lmht-row">
                <div class="col-auto pl-0 pr-0 mb-0 c-mr-24">
                    <h2 class="fw-700 fz-24 lh-32 mb-0">Tướng</h2>
                    <p class="fw-400 fz-13 lh-20 mb-0">(100 tướng)</p>
                </div>
                <div class="col-auto pl-0 pr-0 form-search input-search-lmht position-relative">
                    <input id="keyword--search" type="search" placeholder="Tìm kiếm" class="has-submit input-search-lmht">
                    <button class="submit--search" type="submit"></button>
                </div>
                <img class="c-close-modal" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/close.svg" alt="">
            </div>
        </div>
        <div class="body-modal__nick-lmht pb-0 c-px-18 c-pt-10 mr-auto ml-auto">
            <div class="row marginauto modal-container-body">
                <div class="col-md-12 c-px-6 c-py-8 body-modal__nick__text-error">
                    <div class="text-error c-mt-4">Không có kết quả phù hợp.</div>
                </div>
                <div class="col-auto c-px-6 c-py-8 item-nick-lmht">
                    <a href="">
                        <div class="row marginauto item-nick-lmht__border">
                            <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Axtrox">
                            </div>
                            <div class="col-md-12 pl-0 pr-0 text-center">
                                <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Axtrox</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-auto c-px-6 c-py-8 item-nick-lmht">
                    <a href="">
                        <div class="row marginauto item-nick-lmht__border">
                            <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Amumu">
                            </div>
                            <div class="col-md-12 pl-0 pr-0 text-center">
                                <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Amumu</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-auto c-px-6 c-py-8 item-nick-lmht">
                    <a href="">
                        <div class="row marginauto item-nick-lmht__border">
                            <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Garen">
                            </div>
                            <div class="col-md-12 pl-0 pr-0 text-center">
                                <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Garen</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-auto c-px-6 c-py-8 item-nick-lmht">
                    <a href="">
                        <div class="row marginauto item-nick-lmht__border">
                            <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Sona">
                            </div>
                            <div class="col-md-12 pl-0 pr-0 text-center">
                                <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Sona</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-auto c-px-6 c-py-8 item-nick-lmht">
                    <a href="">
                        <div class="row marginauto item-nick-lmht__border">
                            <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Axtrox">
                            </div>
                            <div class="col-md-12 pl-0 pr-0 text-center">
                                <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Axtrox</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-auto c-px-6 c-py-8 item-nick-lmht">
                    <a href="">
                        <div class="row marginauto item-nick-lmht__border">
                            <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Amumu">
                            </div>
                            <div class="col-md-12 pl-0 pr-0 text-center">
                                <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Amumu</p>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
            <div class="modal-footer" style="height: 16px">

            </div>
        </div>

    </div>

{{--    Modal thông tin khác   --}}

    <div class="c-modal__nick-lmht c-modal__nick-lmht-ttk" style="z-index: 1005; background: rgba(67, 70, 87, 0.5);">
        <div class="header-modal__nick-lmht c-px-24 c-pt-24 pb-0 position-relative text-uppercase text-center ml-auto mr-auto fw-700">
            <div class="row marginauto c-pb-24 header-modal__nick-lmht-row">
                <div class="col-auto pl-0 pr-0 mb-0 c-mr-24">
                    <h2 class="fw-700 fz-24 lh-32 mb-0">Thông tin khác</h2>
                    <p class="fw-400 fz-13 lh-20 mb-0">(10)</p>
                </div>
                <div class="col-auto pl-0 pr-0 form-search input-search-lmht position-relative">
                    <input id="keyword--search" type="search" placeholder="Tìm kiếm" class="has-submit input-search-lmht">
                    <button class="submit--search" type="submit"></button>
                </div>
                <img class="c-close-modal" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/close.svg" alt="">
            </div>
        </div>
        <div class="body-modal__nick-lmht pb-0 c-px-18 c-pt-10 mr-auto ml-auto">
            <div class="row marginauto modal-container-body">
                <div class="col-md-12 c-px-6 c-py-8 body-modal__nick__text-error">
                    <div class="text-error c-mt-4">Không có kết quả phù hợp.</div>
                </div>
                <div class="col-md-12 pl-0 pr-0 c-px-6 c-py-8">
                    <a href="">
                        <div class="row marginauto">
                            <div class="col-md-12 pl-0 pr-0">
                                <img class="w-100 h-auto brs-4" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Axtrox">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-12 pl-0 pr-0 c-px-6 c-py-8">
                    <a href="">
                        <div class="row marginauto">
                            <div class="col-md-12 pl-0 pr-0">
                                <img class="w-100 h-auto brs-4" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Axtrox">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-12 pl-0 pr-0 c-px-6 c-py-8">
                    <a href="">
                        <div class="row marginauto">
                            <div class="col-md-12 pl-0 pr-0">
                                <img class="w-100 h-auto brs-4" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Axtrox">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-12 pl-0 pr-0 c-px-6 c-py-8">
                    <a href="">
                        <div class="row marginauto">
                            <div class="col-md-12 pl-0 pr-0">
                                <img class="w-100 h-auto brs-4" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Axtrox">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="modal-footer" style="height: 16px">

            </div>
        </div>

    </div>

{{-- Thanh toans thanhf coong  --}}

    <div class="modal fade modal-small" id="orderSuccses">
        <div class="modal-dialog modal-dialog-centered modal-custom">
            <div class="modal-content">
                <div class="modal-header justify-content-center p-0">
                    <img class="c-pt-20 c-pb-20" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/success.png" alt="">
                </div>
                <div class="modal-body text-center c-pl-24 c-pr-24 pt-0 pb-0">
                    <p class="fw-700 fz-15 c-mt-12 mb-0 text-title-theme">Mua tài khoản thành công</p>
                    <p class="fw-400 fz-13 c-mt-10 mb-0">
                        Để bảo mật bạn vui lòng thay đổi mật khẩu và tên đăng nhập của tải khoản đã mua!
                    </p>
                </div>
                <div class="modal-footer c-p-24">
                    <a class="btn primary" data-dismiss="modal">Lịch sử</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Tuowngs lmht mobile -->
    <div class="bottom-sheet" id="sheet-hero" aria-hidden="true" data-height="80">
        <div class="layer"></div>
        <div class="content-bottom-sheet bar-slide" >
            <div class="sheet-header">
                <h2 class="text-title center">
                    Tướng(100)
                </h2>
                <label for="check-bottom-sheet" class="close"></label>
            </div>
            <div class="sheet-body">
                <!-- body -->

                <div class="input-group">
                    <input type="search" class="search">
                </div>

                <div class="row c-pl-10 c-pr-10">
                    <div class="col-md-12 c-px-6 c-py-8 body-modal__nick__text-error">
                        <div class="text-error c-mt-4">Không có kết quả phù hợp.</div>
                    </div>
                    <div class="col-6 c-px-6 c-py-8 item-nick-lmht">
                        <a href="">
                            <div class="row marginauto item-nick-lmht__border">
                                <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                    <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Axtrox">
                                </div>
                                <div class="col-md-12 pl-0 pr-0 text-center">
                                    <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Axtrox</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-6 c-px-6 c-py-8 item-nick-lmht">
                        <a href="">
                            <div class="row marginauto item-nick-lmht__border">
                                <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                    <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Amumu">
                                </div>
                                <div class="col-md-12 pl-0 pr-0 text-center">
                                    <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Amumu</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-6 c-px-6 c-py-8 item-nick-lmht">
                        <a href="">
                            <div class="row marginauto item-nick-lmht__border">
                                <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                    <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Garen">
                                </div>
                                <div class="col-md-12 pl-0 pr-0 text-center">
                                    <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Garen</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-6 c-px-6 c-py-8 item-nick-lmht">
                        <a href="">
                            <div class="row marginauto item-nick-lmht__border">
                                <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                    <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Sona">
                                </div>
                                <div class="col-md-12 pl-0 pr-0 text-center">
                                    <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Sona</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-6 c-px-6 c-py-8 item-nick-lmht">
                        <a href="">
                            <div class="row marginauto item-nick-lmht__border">
                                <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                    <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Axtrox">
                                </div>
                                <div class="col-md-12 pl-0 pr-0 text-center">
                                    <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Axtrox</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-6 c-px-6 c-py-8 item-nick-lmht">
                        <a href="">
                            <div class="row marginauto item-nick-lmht__border">
                                <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                    <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Amumu">
                                </div>
                                <div class="col-md-12 pl-0 pr-0 text-center">
                                    <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Amumu</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
{{--            <div class="sheet-footer">--}}
{{--                <button class="btn ghost">Xoá bộ lọc</button>--}}
{{--                <button class="btn primary">Xem kết quả</button>--}}
{{--            </div>--}}
        </div>
    </div>

    <!-- trang phucj lmht mobile -->
    <div class="bottom-sheet" id="sheet-fashion" aria-hidden="true" data-height="80">
        <div class="layer"></div>
        <div class="content-bottom-sheet bar-slide" >
            <div class="sheet-header">
                <h2 class="text-title center">
                    Trang phục(100)
                </h2>
                <label for="check-bottom-sheet" class="close"></label>
            </div>
            <div class="sheet-body">
                <!-- body -->

                <div class="input-group">
                    <input type="search" class="search">
                </div>

                <div class="row c-pl-10 c-pr-10">
                    <div class="col-md-12 c-px-6 c-py-8 body-modal__nick__text-error">
                        <div class="text-error c-mt-4">Không có kết quả phù hợp.</div>
                    </div>
                    <div class="col-6 c-px-6 c-py-8 item-nick-lmht">
                        <a href="">
                            <div class="row marginauto item-nick-lmht__border">
                                <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                    <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Axtrox">
                                </div>
                                <div class="col-md-12 pl-0 pr-0 text-center">
                                    <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Axtrox</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-6 c-px-6 c-py-8 item-nick-lmht">
                        <a href="">
                            <div class="row marginauto item-nick-lmht__border">
                                <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                    <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Amumu">
                                </div>
                                <div class="col-md-12 pl-0 pr-0 text-center">
                                    <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Amumu</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-6 c-px-6 c-py-8 item-nick-lmht">
                        <a href="">
                            <div class="row marginauto item-nick-lmht__border">
                                <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                    <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Garen">
                                </div>
                                <div class="col-md-12 pl-0 pr-0 text-center">
                                    <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Garen</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-6 c-px-6 c-py-8 item-nick-lmht">
                        <a href="">
                            <div class="row marginauto item-nick-lmht__border">
                                <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                    <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Sona">
                                </div>
                                <div class="col-md-12 pl-0 pr-0 text-center">
                                    <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Sona</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-6 c-px-6 c-py-8 item-nick-lmht">
                        <a href="">
                            <div class="row marginauto item-nick-lmht__border">
                                <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                    <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Axtrox">
                                </div>
                                <div class="col-md-12 pl-0 pr-0 text-center">
                                    <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Axtrox</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-6 c-px-6 c-py-8 item-nick-lmht">
                        <a href="">
                            <div class="row marginauto item-nick-lmht__border">
                                <div class="col-md-12 pl-0 pr-0 item-nick-lmht__border__col">
                                    <img class="w-100 brs-4 position-absolute item-nick-lmht__border__img" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Amumu">
                                </div>
                                <div class="col-md-12 pl-0 pr-0 text-center">
                                    <p class="fw-400 fz-13 c-mb-4 c-mt-20 text-theme">Amumu</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            {{--            <div class="sheet-footer">--}}
            {{--                <button class="btn ghost">Xoá bộ lọc</button>--}}
            {{--                <button class="btn primary">Xem kết quả</button>--}}
            {{--            </div>--}}
        </div>
    </div>

    <!-- thongtin lmht mobile -->
    <div class="bottom-sheet" id="sheet-profile" aria-hidden="true" data-height="80">
        <div class="layer"></div>
        <div class="content-bottom-sheet bar-slide" >
            <div class="sheet-header">
                <h2 class="text-title center">
                    Thông tin khác
                </h2>
                <label for="check-bottom-sheet" class="close"></label>
            </div>
            <div class="sheet-body">
                <!-- body -->

                <div class="row c-pl-10 c-pr-10">

                    <div class="col-md-12 pl-0 pr-0 c-px-6 c-py-8">
                        <a href="">
                            <div class="row marginauto">
                                <div class="col-md-12 pl-0 pr-0">
                                    <img class="w-100 h-auto brs-4" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Axtrox">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-12 pl-0 pr-0 c-px-6 c-py-8">
                        <a href="">
                            <div class="row marginauto">
                                <div class="col-md-12 pl-0 pr-0">
                                    <img class="w-100 h-auto brs-4" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Axtrox">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-12 pl-0 pr-0 c-px-6 c-py-8">
                        <a href="">
                            <div class="row marginauto">
                                <div class="col-md-12 pl-0 pr-0">
                                    <img class="w-100 h-auto brs-4" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Axtrox">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-12 pl-0 pr-0 c-px-6 c-py-8">
                        <a href="">
                            <div class="row marginauto">
                                <div class="col-md-12 pl-0 pr-0">
                                    <img class="w-100 h-auto brs-4" src="/assets/frontend/{{env('THEME_VERSION')}}/image/son/test.png" alt="Axtrox">
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
            {{--            <div class="sheet-footer">--}}
            {{--                <button class="btn ghost">Xoá bộ lọc</button>--}}
            {{--                <button class="btn primary">Xem kết quả</button>--}}
            {{--            </div>--}}
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        $('body').on('click','#account-detail .btn-muangay',function(e){
            e.preventDefault();
            $('#orderModal').modal('show');
        })

        $('body').on('click','#account-detail .btn-tragop',function(e){
            e.preventDefault();
            $('#traGopModal').modal('show');
        })

        $('body').on('click','#account-detail .btn-show-tuong',function(e){
            e.preventDefault();
            $('.c-modal__nick-lmht-tuong').css('display','block');
        })

        $('body').on('click','.c-close-modal',function(e){
            e.preventDefault();
            $('.c-modal__nick-lmht-tuong').css('display','none');
            $('.c-modal__nick-lmht-trang-phuc').css('display','none');
            $('.c-modal__nick-lmht-ttk').css('display','none');
        })

        $('body').on('click','#account-detail .btn-trangphuc',function(e){
            e.preventDefault();
            $('.c-modal__nick-lmht-trang-phuc').css('display','block');
        })

        $('body').on('click','#account-detail .btn-thongtinkhac',function(e){
            e.preventDefault();
            $('.c-modal__nick-lmht-ttk').css('display','block');
        })

        $('body').on('click','#account-detail .btn-success-mobile',function(e){
            e.preventDefault();
            $('#orderSuccses').modal('show');
        })



    </script>
@endsection


