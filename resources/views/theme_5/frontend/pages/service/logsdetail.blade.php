@extends('frontend.layouts.master')

@section('content')
    <div class="background-history">
        <div class="container c-container-side">
            <ul class="breadcrumb-list">
                <li class="breadcrumb-item">
                    <a href="/" class="breadcrumb-link">Trang chủ</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="" class="breadcrumb-link">Dịch vụ đã mua</a>
                </li>
            </ul>

            <div class="head-mobile">
                <a href="/dich-vu-da-mua" class="link-back"></a>

                <h1 class="head-title text-title">Dịch vụ đã mua</h1>

                <a href="/" class="home"></a>
            </div>
            <div class="row">
                <div class="c-history-left media-web">
                    @include('frontend.widget.__menu_profile')
                </div>
                <div class="c-ml-16 c-ml-lg-0 c-history-right">
                    <div
                        class="history-detail-title c-p-16 c-mb-16 brs-12 d-none d-sm-flex justify-content-between align-items-center">
                        <h1 class="fw-700 fz-20 lh-28 c-my-0">Chi tiết dịch vụ đã mua</h1>
                        <div class="d-none d-sm-block">
                            <button class="btn ghost c-mr-10" data-toggle="modal" data-target="#modal-cancel-service">Hủy
                                dịch vụ
                            </button>
                            <button class="btn primary" data-toggle="modal" data-target="#modal-update-info">Chỉnh sửa thông tin</button>
                        </div>
                    </div>
                    <div class="history-detail-content brs-12">
                        <div class="history-detail-subtitle lh-24 c-pt-16 c-pb-12 c-px-16 fw-500 fz-15 d-none d-sm-block">
                            Mua thẻ Viettel
                        </div>
                        <div class="c-px-16 c-pb-24">
                            <div class="history-detail-label c-py-12 fw-500 fz-13 fz-sm-15">
                                Thông tin giao dịch
                            </div>
                            <div class="history-detail-info-block brs-12 c-p-16 c-mb-16">
                                <div class="history-detail-attr c-mb-8 d-flex justify-content-between align-items-center">
                                    <p class="fz-13 fw-400 mb-0">Chi tiết yêu cầu</p>
                                    <div class="fw-500 fz-13">#123445</div>
                                </div>
                                <div class="history-detail-attr c-mb-8 d-flex justify-content-between align-items-center">
                                    <p class="fz-13 fw-400 mb-0">Mã giao dịch SMS</p>
                                    <div class="fw-500 fz-13">Nguyen Ngoc An</div>
                                </div>
                                <div class="history-detail-attr c-mb-8 d-flex justify-content-between align-items-center">
                                    <p class="fz-13 fw-400 mb-0">Tên dịch vụ</p>
                                    <div class="fw-500 fz-13">Viettel</div>
                                </div>
                                <div class="history-detail-attr c-mb-8 d-flex justify-content-between align-items-center">
                                    <p class="fz-13 fw-400 mb-0">Công việc</p>
                                    <div class="fw-500 fz-13">Viettel</div>
                                </div>
                                <div class="history-detail-attr d-flex justify-content-between align-items-center">
                                    <p class="fz-13 fw-400 mb-0">Giá</p>
                                    <div class="fw-500 fz-13">Viettel</div>
                                </div>
                            </div>
                            <div class="history-detail-info-block brs-12 c-p-16">
                                <div class="history-detail-attr c-mb-8 d-flex justify-content-between align-items-center">
                                    <p class="fz-13 fw-400 mb-0">Tên tài khoản Garena</p>
                                    <div class="fw-500 fz-13">#123445</div>
                                </div>
                                <div class="history-detail-attr c-mb-8 d-flex justify-content-between align-items-center">
                                    <p class="fz-13 fw-400 mb-0">Tên tài khoản</p>
                                    <div class="fw-500 fz-13">Nguyen Ngoc An</div>
                                </div>
                                <div class="history-detail-attr d-flex justify-content-between align-items-center">
                                    <p class="fz-13 fw-400 mb-0">Mật khẩu</p>
                                    <div class="fw-500 fz-13">Viettel</div>
                                </div>
                            </div>
                            <div class="history-detail-label c-py-12 fw-500 fz-13 fz-sm-15">
                                Tiến độ
                            </div>
                            <div class="history-detail-info-block brs-12 c-p-16">
                                <ul class="order--timelines m-0 c-pl-22">
                                    <li class="order--timeline">
                                        <div class="order--status fz-13 fw-500">
                                            Đang chờ
                                        </div>
                                        <div class="order--date fz-13 fw-400">
                                            16/06/2022 20:36:32
                                        </div>
                                    </li>
                                    <li class="order--timeline">
                                        <div class="order--status fz-13 fw-500">
                                            Thất bại -:- taikhoansai
                                        </div>
                                        <div class="order--date fz-13 fw-400">
                                            16/06/2022 20:37:36
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="history-detail-label c-py-12 fw-500 fz-13 fz-sm-15">
                                Trao đổi dịch vụ<span class="d-none d-sm-inline-block">: Dịch vụ số #12345</span>
                            </div>
                            <div class="history-detail-info-block brs-12 c-p-16 c-mb-16">
                                <div class="service-change-title c-px-16 c-py-8 fw-500 fz-15 lh-24">
                                    Dịch vụ <span>#539084</span>
                                </div>
                                <div class="service-change-detail scrollbar">
                                    <div class="service-change-detail-item c-py-8 c-px-16">
                                        <div class="fw-500 fz-13">Người yêu cầu order</div>
                                        <p class="fw-400 fz-13 c-mb-0"><span
                                                class="service-change-time c-mr-12">1h trước</span>Mình thay đổi nội dung
                                            bạn ơi</p>
                                    </div>
                                    <div class="service-change-detail-item c-py-8 c-px-16">
                                        <div class="fw-500 fz-13">Admin</div>
                                        <p class="fw-400 fz-13 c-mb-0"><span
                                                class="service-change-time c-mr-12">1h trước</span>Mình thay đổi nội dung
                                            bạn ơi</p>
                                    </div>
                                    <div class="service-change-detail-item c-py-8 c-px-16">
                                        <div class="fw-500 fz-13">Admin</div>
                                        <p class="fw-400 fz-13 c-mb-0"><span
                                                class="service-change-time c-mr-12">1h trước</span>Mình thay đổi nội dung
                                            bạn ơi</p>
                                    </div>
                                    <div class="service-change-detail-item c-py-8 c-px-16">
                                        <div class="fw-500 fz-13">Admin</div>
                                        <p class="fw-400 fz-13 c-mb-0"><span
                                                class="service-change-time c-mr-12">1h trước</span>Mình thay đổi nội dung
                                            bạn ơi</p>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-row-reverse">
                                <button class="service-change-message-btn btn secondary c-px-50 open-sheet" data-toggle="modal" data-target="#modal-send-message" data-target_2="#sheet-send-message">Nhắn tin</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <!-- modal cancel -->
            <div class="modal fade" id="modal-cancel-service" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content c-p-24">
                        <div class="modal-header">
                            <h2 class="modal-title center">Hủy bỏ yêu cầu dịch vụ</h2>
                            <button type="button" class="close" data-dismiss="modal"></button>
                        </div>
                        <div class="modal-body pl-0 pr-0 c-pt-40 c-pb-40">
                            <div class="c-mt-8">
                                <label class="c-mb-4 fw-500 fz-13 lh-20">Lỗi thuộc về</label>
                                <div class="col-md-12 p-0">
                                    <select class="default-select brs-8 fz-13" name="" id="" style="display: none;">
                                        <option value="">--- Chọn---</option>
                                        <option value="">Is Text Demo</option>
                                        <option value="">Is Text Demo</option>
                                        <option value="">Is Text Demo</option>
                                    </select>
                                    <div class="nice-select default-select brs-8 fz-13" tabindex="0"><span class="current">--- Chọn---</span>
                                        <ul class="list">
                                            <li data-value="" class="option selected">--- Chọn---</li>
                                            <li data-value="" class="option">Is Text Demo</li>
                                            <li data-value="" class="option">Is Text Demo</li>
                                            <li data-value="" class="option">Is Text Demo</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="c-mt-8">
                                <label class="c-mb-4 fw-500 fz-13 lh-20">Nội dung</label>
                                <div class="col-md-12 p-0">
                                <textarea name="" id="" cols="9" rows="3"
                                          placeholder="Nội dung hủy bỏ phải có ít nhất 10 ký tự"
                                          style="height: 84px;"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn primary">Xác nhận</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal send message -->
            <div class="modal fade" id="modal-send-message" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-custom">
                    <div class="modal-content c-p-24">
                        <div class="modal-header">
                            <h2 class="modal-title center">Gửi tin nhắn</h2>
                            <button type="button" class="close" data-dismiss="modal"></button>
                        </div>
                        <div class="modal-body pl-0 pr-0 c-pt-12 c-pb-24">
                            <div class="c-mt-12">
                                <label class="c-mb-4 fw-500 fz-13 lh-20">Nội dung</label>
                                <div class="col-md-12 p-0">
                                <textarea name="" id="" cols="9" rows="3" placeholder="placeholder"
                                          style="height: 93px;"></textarea>
                                </div>
                            </div>
                            <div class="c-mt-12">
                                <label class="c-mb-4 fw-500 fz-13 lh-20">Lỗi thuộc về</label>
                                <div class="col-md-12 p-0 position-relative">
                                    <input type="text" name="" id="" placeholder="Nội dung hủy bỏ phải có ít nhất 10 ký tự">
                                    <img class="img-error-service" src="/assets/frontend/{{theme('')->theme_key}}/image/son/mocicon.svg"
                                         alt="">
                                </div>
                            </div>
                            <div class="c-mt-8">
                                <div class="col-md-12 p-0 position-relative">
                                    <label class="input-checkbox">
                                        <input type="checkbox" checked="" name="select">
                                        <span class="checkmark"></span>
                                        <span class="text-label c-cursor w-100">Khiếu nại</span>
                                    </label>
                                </div>
                            </div>
                            <div class="c-mt-12">
                                <label class="c-mb-4 fw-500 fz-13 lh-20">Mã bảo vệ</label>
                                <div class="col-md-12 p-0 d-flex">
                                    <input class="input-form w-100" type="text" placeholder="Nhập mã bảo vệ">
                                    <div class="c-ml-8 c-mr-8">
                                        <div class="brs-8 overflow-hidden">
                                <span class="brs-8">
                                      <img src="https://frontend.theme.tichhop.pro/captcha/default?ID2lPXbi" alt="">
                                </span>
                                        </div>
                                    </div>
                                    <button class="refresh-captcha brs-8" id="reload">
                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/nam/refresh_captcha.svg" alt="">
                                    </button>

                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn primary">Xem kết quả</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-mobile group-btn c-px-16 c-pt-16 d-flex d-lg-none" style="--data-between: 12px">
                <button class="btn ghost open-sheet" data-target="#sheet-cancel-service">Huỷ dịch vụ</button>
                <button class="btn primary open-sheet" data-target="#sheet-update-info">Chỉnh sửa thông tin</button>
            </div>

            <!-- modal update info -->
            <div class="modal fade" id="modal-update-info" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-custom">
                    <div class="modal-content c-p-24">
                        <div class="modal-header">
                            <h2 class="modal-title center">Chỉnh sửa thông tin</h2>
                            <button type="button" class="close" data-dismiss="modal"></button>
                        </div>
                        <div class="modal-body pl-0 pr-0 c-pt-12 c-pb-40">
                            <div class="c-mt-12">
                                <label class="c-mb-4 fw-500 fz-13 lh-20">Tài khoản</label>
                                <div class="col-md-12 p-0">
                                    <input type="text" name="" id="" placeholder="placeholder">
                                </div>
                            </div>
                            <div class="c-mt-12">
                                <label class="c-mb-4 fw-500 fz-13 lh-20">Mật khẩu</label>
                                <div class="toggle-password">
                                    <input class="input-primary" type="password" name="" id="" placeholder="placeholder">
                                </div>
                            </div>
                            <div class="c-mt-12">
                                <label class="c-mb-4 fw-500 fz-13 lh-20">Nhiệm vụ hiện tại</label>
                                <select name="" id="">
                                    <option value="">Nhiệm vụ bán vàng</option>
                                    <option value="">Nhiệm vụ bán ngọc</option>
                                </select>
                            </div>
                            <div class="c-mt-12">
                                <div class="col-md-12 p-0 position-relative">
                                    <label for="checkbox2" class="input-checkbox">
                                        <input type="checkbox" checked="" name="select" id="checkbox2">
                                        <span class="checkmark"></span>
                                        <span class="text-label c-cursor">Bạn Đã Đọc Kĩ Quy Định Và Chuẩn Bị Đầy Đủ Vật Phẩm, Phụ Kiện Theo Yêu Cầu Của Shop Chưa?</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn primary">Xem kết quả</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal -->
            <!-- Sheet -->
            <!-- sheet cancel -->
            <div class="bottom-sheet" id="sheet-cancel-service" aria-hidden="true" data-height="50">
                <div class="layer"></div>
                <div class="content-bottom-sheet bar-slide">
                    <div class="sheet-header">
                        <h2 class="text-title center">
                            Huỷ bỏ yêu cầu dịch vụ
                        </h2>
                        <label for="check-bottom-sheet" class="close"></label>
                    </div>
                    <div class="sheet-body" style="bottom: 100px;">
                        <!-- body -->
                        <div class="input-group">
                        <span class="form-label">
                            Lỗi thuộc về
                        </span>
                            <select name="" id="">
                                <option value="">--Không chọn--</option>
                            </select>
                        </div>

                        <div class="input-group">
                        <span class="form-label">
                            Nội dung
                        </span>
                            <textarea name="" id="" cols="30" rows="10" style="height: 84px" placeholder="Nội dung hủy bỏ phải có ít nhất 10 ký tự"></textarea>
                        </div>
                    </div>
                    <div class="sheet-footer">
                        <button class="btn primary">Xác nhận</button>
                    </div>
                </div>
            </div>
            <!-- sheet send message -->
            <div class="bottom-sheet" id="sheet-send-message" aria-hidden="true" data-height="60">
                <div class="layer"></div>
                <div class="content-bottom-sheet bar-slide">
                    <div class="sheet-header">
                        <h2 class="text-title center">
                            Huỷ bỏ yêu cầu dịch vụ
                        </h2>
                        <label for="check-bottom-sheet" class="close"></label>
                    </div>
                    <div class="sheet-body">
                        <!-- body -->
                        <label class="c-mb-4 fw-500 fz-13 lh-20">Nội dung</label>
                        <div class="col-md-12 p-0">
                            <textarea name="" id="" cols="9" rows="3" placeholder="placeholder" style="height: 84px;"></textarea>
                        </div>
                        <div class="c-mt-12">
                            <label class="c-mb-4 fw-500 fz-13 lh-20">Lỗi thuộc về</label>
                            <div class="col-md-12 p-0 position-relative">
                                <input type="text" name="" id="" placeholder="Nội dung hủy bỏ phải có ít nhất 10 ký tự">
                                <img class="img-error-service" src="/assets/frontend/{{theme('')->theme_key}}/image/son/mocicon.svg"
                                     alt="">
                            </div>
                        </div>
                        <div class="c-mt-8">
                            <div class="col-md-12 p-0 position-relative">
                                <label class="input-checkbox">
                                    <input type="checkbox" checked="" name="select">
                                    <span class="checkmark"></span>
                                    <span class="text-label">Khiếu nại</span>
                                </label>
                            </div>
                        </div>
                        <div class="c-mt-12">
                            <label class="c-mb-4 fw-500 fz-13 lh-20">Mã bảo vệ</label>
                            <div class="col-md-12 p-0 d-flex">
                                <input class="input-form w-100" type="text" placeholder="Nhập mã bảo vệ">
                                <div class="c-ml-8 c-mr-8">
                                    <div class="brs-8 overflow-hidden">
                                <span class="brs-8">
                                      <img src="https://frontend.theme.tichhop.pro/captcha/default?ID2lPXbi" alt="">
                                </span>
                                    </div>
                                </div>
                                <button class="refresh-captcha brs-8" id="reload">
                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/nam/refresh_captcha.svg" alt="">
                                </button>

                            </div>
                        </div>
                    </div>
                    <div class="sheet-footer">
                        <button class="btn primary">Xác nhận</button>
                    </div>
                </div>
            </div>
            <!-- sheet update info -->
            <div class="bottom-sheet" id="sheet-update-info" aria-hidden="true" data-height="55">
                <div class="layer"></div>
                <div class="content-bottom-sheet bar-slide">
                    <div class="sheet-header">
                        <h2 class="text-title center">
                            Chỉnh sửa thông tin
                        </h2>
                        <label class="close"></label>
                    </div>
                    <div class="sheet-body">
                        <!-- body -->
                        <div class="input-group">
                        <span class="form-label">
                            Tài khoản
                        </span>
                            <select name="" id="">
                                <option value="">Namokok@nick.vn</option>
                            </select>
                        </div>

                        <div class="input-group">
                        <span class="form-label">
                            Mật khẩu
                        </span>
                            <div class="toggle-password">
                                <input type="password" placeholder="Mật khẩu">
                            </div>
                        </div>
                        <div class="input-group">
                        <span class="form-label">
                            Nhiệm vụ hiện tại
                        </span>
                            <select name="" id="">
                                <option value="">Nhiệm vụ bán vàng</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <label for="checkbox2" class="input-checkbox">
                                <input type="checkbox" checked="" name="select" id="checkbox2">
                                <span class="checkmark"></span>
                                <span class="text-label c-cursor">Bạn Đã Đọc Kĩ Quy Định Và Chuẩn Bị Đầy Đủ Vật Phẩm, Phụ Kiện Theo Yêu Cầu Của Shop Chưa?</span>
                            </label>
                        </div>
                    </div>
                    <div class="sheet-footer">
                        <button class="btn primary">Xác nhận</button>
                    </div>
                </div>
            </div>
            <!-- End sheet -->
        </div>
        <!-- Dịch vụ khác -->
        <div class="container d-none d-lg-block c-container c-mt-24 c-mt-lg-16">
            @include('frontend.widget.__service__other__his')
        </div>
    </div>
@endsection


