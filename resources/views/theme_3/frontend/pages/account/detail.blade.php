@extends('frontend.layouts.master')
@section('seo_head')
    @include('frontend.widget.__seo_head',with(['data'=>$data]))
@endsection
@section('content')
    <fieldset id="fieldset-one">
        <div id="pageBreadcrumb">

        </div>

        {{--   Bopđyy --}}
        <section id="detailLoader">
            <div class="loader position-relative" style="margin: 4rem 0">
                <div class="loading-spokes">
                    <div class="spoke-container">
                        <div class="spoke"></div>
                    </div>
                    <div class="spoke-container">
                        <div class="spoke"></div>
                    </div>
                    <div class="spoke-container">
                        <div class="spoke"></div>
                    </div>
                    <div class="spoke-container">
                        <div class="spoke"></div>
                    </div>
                    <div class="spoke-container">
                        <div class="spoke"></div>
                    </div>
                    <div class="spoke-container">
                        <div class="spoke"></div>
                    </div>
                    <div class="spoke-container">
                        <div class="spoke"></div>
                    </div>
                    <div class="spoke-container">
                        <div class="spoke"></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="showdetailacc">
            {{-- @include('frontend.pages.account.widget.__datadetail') --}}
        </section>

        <section class="media-mobile">
            <div class="row marginauto intermediary-ct" style="height: 20px;background: #EFEFEF">

            </div>
        </section>

        <section id="showslideracc">

        </section>

        {{-- <div class="modal fade login show order-modal" id="traGop" aria-modal="true">

            <div class="modal-dialog step-tab-panel modal-lg modal-dialog-centered login animated">
                <!--        <div class="image-login"></div>-->
                <div class="modal-content">
                    <div class="modal-header p-0" style="border-bottom: 0">
                        <div class="row marginauto modal-header-order-ct">
                            <div class="col-12 span__donhang text-center" style="position: relative">
                                <span>Xác nhận thanh toán</span>
                                <img class="lazy img-close-ct close-modal-default" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/close.png" alt="">
                            </div>
                        </div>

                    </div>

                    <div class="modal-body modal-body-order-ct">
                        <div class="row marginauto">

                            <div class="col-md-12 left-right title-order-ct">
                                <span>Thông tin tài khoản #521479</span>
                            </div>

                            <div class="col-md-12 left-right" id="order-errors">
                                <div class="row marginauto order-errors">
                                    <div class="col-md-12 left-right">
                                        <small>Lỗi rồi em ơi</small>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 left-right padding-order-ct">
                                <div class="row marginauto">
                                    <div class="col-md-12 left-right background-order-ct">
                                        <div class="row marginauto background-order-body-row-ct">
                                            <div class="col-auto left-right background-order-col-left-ct">
                                                <span>Nhà phát hành</span>
                                            </div>
                                            <div class="col-auto left-right background-order-col-right-ct">
                                                <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/nick/zing.png" alt="">
                                            </div>
                                        </div>

                                        <div class="row marginauto background-order-body-row-ct">
                                            <div class="col-auto left-right background-order-col-left-ct">
                                                <span>Tên game</span>
                                            </div>
                                            <div class="col-auto left-right background-order-col-right-ct">
                                                <small>Ngọc rồng</small>
                                            </div>
                                        </div>

                                        <div class="row marginauto background-order-body-row-ct">
                                            <div class="col-auto left-right background-order-col-left-ct">
                                                <span>Số lượng</span>
                                            </div>
                                            <div class="col-auto left-right background-order-col-right-ct">
                                                <small>01</small>
                                            </div>
                                        </div>

                                        <div class="row marginauto background-order-body-bottom-ct">
                                            <div class="col-auto left-right background-order-col-left-ct">
                                                <span>Tổng tiền</span>
                                            </div>
                                            <div class="col-auto left-right background-order-col-right-ct">
                                                <small>250.000 đ</small>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-12 left-right title-tra-gop">
                                <span>Thông tin trả góp</span>
                            </div>

                            <div class="col-md-12 left-right">
                                <div class="row body-title-detail-ct">

                                    <div class="col-md-6 text-left body-title-detail-nick-col-ct">
                                        <div class="row marginauto">
                                            <div class="col-md-12 left-right body-title-detail-span-ct">
                                                <span>Trả trước</span>
                                            </div>
                                            <div class="col-md-12 left-right body-title-detail-select-ct">
                                                <input readonly autocomplete="off" class="input-defautf-ct input-modal-defautf-ct-play" type="text" placeholder="50.000">
                                            </div>
                                        </div>


                                    </div>

                                    <div class="col-md-6 text-left body-title-detail-nick-col-ct">
                                        <div class="row marginauto password-mobile">
                                            <div class="col-md-12 left-right body-title-detail-span-ct">
                                                <span>Trả lần 2</span>
                                            </div>
                                            <div class="col-md-12 left-right body-title-detail-select-ct" style="position: relative">
                                                <input readonly autocomplete="off" class="input-defautf-ct" type="text" placeholder="200.000">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-12 left-right title-tra-gop">
                                <small>Nếu bạn chưa hoàn tất thanh toán toàn bộ trước thời hạn 01/06/2022 00:00:00, giao dịch sẽ bị hủy bỏ và bạn sẽ nhận tiền hoàn lại bằng 20% số tiền trả ban đầu.</small>
                            </div>

                            <div class="col-md-12 left-right">
                                <div class="row body-title-detail-ct">
                                    <div class="col-md-12 left-right body-title-detail-span-ct body-title-detail-col-ng-ct">
                                        <span>Mã bảo vệ</span>
                                    </div>
                                    <div class="col-auto text-left body-title-detail-col-left-ng-ct chitiet-nick-input">
                                        <div class="row marginauto">
                                            <div class="col-md-12 left-right body-title-detail-select-ct">
                                                <input autocomplete="off" class="input-defautf-ct" type="text" placeholder="Nhập mã bảo vệ">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-auto text-left body-title-detail-col-center-ng-ct">
                                        <div class="row marginauto password-mobile capcha-image-bg">
                                            <div class="col-md-12 left-right body-title-detail-select-ct">
                                                <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/capcha.png" alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-auto text-left body-title-detail-col-right-ng-ct">
                                        <div class="row marginauto password-mobile capcha-image-bg">
                                            <div class="col-md-12 left-right body-title-detail-select-ct">
                                                <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/rf-capcha.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 left-right title-tra-gop-body">
                                <span>Thông tin trả góp</span>
                            </div>

                            <div class="col-md-12 left-right padding-order-ct">
                                <div class="row marginauto">
                                    <div class="col-md-12 left-right background-order-ct">

                                        <div class="row marginauto tragop-order-body-row-ct">
                                            <div class="col-md-12 left-right background-order-col-left-ct">
                                                <ul id="tra-gop-scroll">
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

                                </div>
                            </div>

                            <div class="col-md-12 left-right padding-order-footer-ct">
                                <div class="row marginauto">
                                    <div class="col-md-12 left-right">
                                        <button class="button-default-modal-ct openSuccess" type="button">Xác nhận</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> --}}

        <div class="modal fade login show order-modal" id="successModal" aria-modal="true">

            <div class="modal-dialog step-tab-panel modal-lg modal-dialog-centered login animated">
                <!--        <div class="image-login"></div>-->
                <div class="modal-content">
                    <div class="modal-header p-0" style="border-bottom: 0">
                        <div class="row marginauto modal-header-order-ct">
                            <div class="col-12 span__donhang text-center" style="position: relative">
                                <span>Mua tài khoản thành công</span>
                                <img class="lazy img-close-ct close-modal-default" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/close.png" alt="">
                            </div>
                        </div>

                    </div>

                    <div class="modal-body modal-body-order-ct">
                        <div class="row marginauto">

                            <div class="col-md-12 left-right image-success">
                                <div class="row marginauto justify-content-center">
                                    <div class="col-auto">
                                        <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/group.png" alt="">
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="col-md-12 left-right title-tra-gop-success">
                                <div class="row body-title-detail-ct">
                                    <div class="col-md-12 text-left body-title-detail-col-ct">
                                        <div class="row marginauto">
                                            <div class="col-md-12 left-right body-title-detail-span-ct">
                                                <span>Tài khoản</span>
                                            </div>
                                            <div class="col-md-12 left-right body-title-detail-select-ct email-success-nick  data-tai-khoan">
                                               <input readonly autocomplete="off" class="input-defautf-ct" id="email" type="text" value="">
                                               <img class="lazy " src="/assets/frontend/{{theme('')->theme_key}}/image/nick/copy.png" alt="" id="getCopyemail">
                                            </div>
                                            <div class="col-md-12 left-right">
                                                <div class="row marginauto title-tra-gop-success-row">
                                                    <div class="col-md-12 left-right body-title-detail-span-ct">
                                                        <span>Mật khẩu</span>
                                                    </div>
                                                    <div class="col-md-12 left-right body-title-detail-select-ct taikhoan-success-nick data-password">
                                                        <input id="password" readonly autocomplete="off" class="input-defautf-ct" type="password" value="" placeholder="******">
                                                        <img class="lazy img-copy" src="/assets/frontend/theme_3/image/nick/copy.png" id="getpass" alt="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 left-right data-child">

                                            </div>

                                            <div class="col-md-12 left-right data-ttbxung">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            <div class="col-md-12 left-right title-tra-gop text-center data-time">
                            </div>

                            {{-- <div class="col-md-12 left-right padding-order-16-ct">
                                <div class="row marginauto">
                                    <div class="col-md-12 left-right background-order-ct">
                                        <div class="row marginauto title-success-thanh-cong">
                                            <div class="col-md-12 left-right">
                                                <span>Để tránh các trường hợp xấu xảy ra, quý khách vui lòng thêm thông tin (Email và Số điện thoại) Để đảm bảo không có vấn đề sau khi giao dịch tại shop! Xin cảm ơn!</span>
                                            </div>
                                            <div class="col-md-12 left-right padding-order-ct">
                                                <span>Để tránh các trường hợp xấu xảy ra, quý khách vui lòng thêm thông tin (Email và Số điện thoại) Để đảm bảo không có vấn đề sau khi giao dịch tại shop! Xin cảm ơn!</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div> --}}

                            <div class="col-md-12 left-right">
                                <div class="row marginauto justify-content-center gallery-right-footer">
                                    <div class="col-md-6 col-6 modal-footer-success-col-left-ct">
                                        <button type="button" class="button-success-secondary">
                                            <a href="/" style="display: block">Về trang chủ</a>
                                        </button>
                                    </div>
                                    <div class="col-md-6 col-6 modal-footer-success-col-right-ct">
                                        <button type="button" class="button-success-primary">
                                            <a href="/lich-su-mua-account" style="display: block">Lịch sử mua Acc</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <input type="hidden" name="previous" class="input-back-step-two" value="Trang trước"/>


    </fieldset>

    <fieldset id="fieldset-two"></fieldset>

    {{-- <fieldset id="fieldset-three">

        <section>
            <div class="container container-fix banner-mobile-container-ct">
                <div class="row marginauto banner-mobile-row-ct">
                    <div class="col-auto left-right" style="width: 10%">
                        <img class="lazy previous-step-one-tra-gop" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/back.png" alt="" >
                    </div>

                    <div class="col-auto left-right banner-mobile-span text-center" style="width: 80%">
                        <h3>Xác nhận thanh toán</h3>
                    </div>
                    <div class="col-auto left-right" style="width: 10%">
                    </div>
                </div>

            </div>
        </section>

        <section class="max-header-fix">
            <div class="row marginauto" style="padding: 12px 16px">

                <div class="col-md-12 left-right title-order-ct">
                    <span>Thông tin tài khoản #521479</span>
                </div>

                <div class="col-md-12 left-right" id="order-errors">
                    <div class="row marginauto order-errors">
                        <div class="col-md-12 left-right">
                            <small>Lỗi rồi em ơi</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 left-right padding-order-ct">
                    <div class="row marginauto">
                        <div class="col-md-12 left-right background-order-ct">
                            <div class="row marginauto background-order-body-row-ct">
                                <div class="col-auto left-right background-order-col-left-ct">
                                    <span>Nhà phát hành</span>
                                </div>
                                <div class="col-auto left-right background-order-col-right-ct">
                                    <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/nick/zing.png" alt="">
                                </div>
                            </div>

                            <div class="row marginauto background-order-body-row-ct">
                                <div class="col-auto left-right background-order-col-left-ct">
                                    <span>Tên game</span>
                                </div>
                                <div class="col-auto left-right background-order-col-right-ct">
                                    <small>Ngọc rồng</small>
                                </div>
                            </div>

                            <div class="row marginauto background-order-body-row-ct">
                                <div class="col-auto left-right background-order-col-left-ct">
                                    <span>Số lượng</span>
                                </div>
                                <div class="col-auto left-right background-order-col-right-ct">
                                    <small>01</small>
                                </div>
                            </div>

                            <div class="row marginauto background-order-body-bottom-ct">
                                <div class="col-auto left-right background-order-col-left-ct">
                                    <span>Tổng tiền</span>
                                </div>
                                <div class="col-auto left-right background-order-col-right-ct">
                                    <small>250.000 đ</small>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-12 left-right title-tra-gop">
                    <span>Thông tin trả góp</span>
                </div>

                <div class="col-md-12 left-right">
                    <div class="row body-title-detail-ct">

                        <div class="col-md-6 text-left body-title-detail-nick-col-ct">
                            <div class="row marginauto">
                                <div class="col-md-12 left-right body-title-detail-span-ct">
                                    <span>Trả trước</span>
                                </div>
                                <div class="col-md-12 left-right body-title-detail-select-ct">
                                    <input readonly autocomplete="off" class="input-defautf-ct input-modal-defautf-ct-play" type="text" placeholder="50.000">
                                </div>
                            </div>


                        </div>

                        <div class="col-md-6 text-left body-title-detail-nick-col-ct">
                            <div class="row marginauto password-mobile">
                                <div class="col-md-12 left-right body-title-detail-span-ct">
                                    <span>Trả lần 2</span>
                                </div>
                                <div class="col-md-12 left-right body-title-detail-select-ct" style="position: relative">
                                    <input readonly autocomplete="off" class="input-defautf-ct" type="text" placeholder="200.000">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-12 left-right">
                    <div class="row body-title-detail-ct">
                        <div class="col-md-12 left-right body-title-detail-span-ct body-title-detail-col-ng-ct">
                            <span>Mã bảo vệ</span>
                        </div>
                        <div class="col-auto text-left body-title-detail-col-left-ng-ct chitiet-nick-input">
                            <div class="row marginauto">
                                <div class="col-md-12 left-right body-title-detail-select-ct">
                                    <input autocomplete="off" class="input-defautf-ct" type="text" placeholder="Nhập mã bảo vệ">
                                </div>
                            </div>
                        </div>

                        <div class="col-auto text-left body-title-detail-col-center-ng-ct">
                            <div class="row marginauto password-mobile capcha-image-bg">
                                <div class="col-md-12 left-right body-title-detail-select-ct">
                                    <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/capcha.png" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-auto text-left body-title-detail-col-right-ng-ct">
                            <div class="row marginauto password-mobile capcha-image-bg">
                                <div class="col-md-12 left-right body-title-detail-select-ct">
                                    <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/rf-capcha.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-12 left-right padding-order-ct">
                    <div class="row marginauto">
                        <div class="col-md-12 left-right background-order-ct">
                            <div class="row marginauto thong-tin-tra-gop-mobile">
                                <div class="col-6 left-right">
                                    <span>Quy định trả góp</span>
                                </div>
                                <div class="col-auto left-right data-scroll-mobile">
                                    <div class="row marginauto up-scroll-mobile"><div class="col-auto left-right"><img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/nick/up.png" alt=""></div></div>
                                </div>
                            </div>
                            <div class="row marginauto tragop-order-body-row-ct">
                                <div class="col-md-12 left-right background-order-col-left-ct">
                                    <ul id="tra-gop-scroll-mobile">
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

                    </div>
                </div>

                <div class="col-md-12 left-right padding-order-footer-ct">
                    <div class="row marginauto">
                        <div class="col-md-12 left-right">
                            <button class="button-default-ct button-next-step-two-tra-gop" type="button">Xác nhận</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <input type="hidden" name="previous" class="input-back-step-two-tra-gop" value="Trang trước"/>

    </fieldset> --}}

    <input type="hidden" name="slug" class="slug" value="{{ $slug }}">
    <input type="hidden" name="slug" class="slug_category" value="{{ $slug_category }}">

    <script src="/assets/frontend/{{theme('')->theme_key}}/js/nick/nick-detail.js?v={{time()}}"></script>
@endsection






