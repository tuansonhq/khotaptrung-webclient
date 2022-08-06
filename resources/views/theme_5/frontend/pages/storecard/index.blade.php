@extends('frontend.layouts.master')

@section('seo_head')
    @include('frontend.widget.__seo_head')
@endsection

@section('meta_robots')
    <meta name="robots" content="noindex,nofollow" />
@endsection
@section('content')
    <div class="container c-container">
        <ul class="breadcrumb-list">
            <li class="breadcrumb-item">
                <a href="" class="breadcrumb-link">Trang chủ</a>
            </li>
            <li class="breadcrumb-item">
                <a href="" class="breadcrumb-link">Mua thẻ</a>
            </li>
            <li class="breadcrumb-item">
                <a href="" class="breadcrumb-link">Thẻ game</a>
            </li>
        </ul>

        @include('frontend.widget.__slider__banner__napthe')

        @include('frontend.widget.__mua__the')

        <h2 class="text-title-bold fz-20 lh-28 d-none d-lg-block c-mb-8">Mô tả dịch vụ</h2>
        <div class="card overflow-hidden d-none d-lg-block">
            <div class="card-body c-px-16">
                <div class="content-desc">
                    Garena Liên Quân Mobile có nguồn gốc từ trò chơi Vương Giả Vinh Diệu (Honor of Kings) của Tencent Games phát triển và phát hành tại Trung Quốc. Vì trò chơi Vương Giả Vinh Diệu có những nhân vật trong lịch sử Trung Quốc nên không phát hành ở nước ngoài. Vì vậy Tencent Games đã thay đổi, cải thiện hình ảnh các nhân vật lên quốc tế hóa và phân phối cho Garena phát hành tại thị trường Đài Loan với tên Truyền Thuyết Đối Quyết (tiếng Trung: 傳說對決) vào ngày 14/10/2016. Về sau trò chơi được Garena phát hành ở các nước Đông Nam Á còn lại và do chính Tencent Games phát hành ở Châu Âu, Châu Mỹ và Ấn Độ.
                    <br>
                    <br>
                    Vào tháng 4 năm 2017, nhà phát triển Tencent Games mua lại bản quyền hình ảnh các nhân vật siêu anh hùng đến từ công ty DC Comics, cho ra mắt ở máy chủ thử nghiệm với các vị tướng độc quyền DC như Batman, Superman, Joker, Wonder Woman, The Flash rồi phát hành rộng rãi lên các máy chủ chính thức.
                    <br>
                    <br>
                    Ngày 29 tháng 7 năm 2018 được đánh dấu như là ngày kỷ niệm sinh nhật Liên Quân đầu tiên trên toàn thế giới, đồng thời đây cũng là ngày trận chung kết AWC 2018 diễn ra tại Los Angeles, Hoa Kỳ.
                    <br>
                    Garena Liên Quân Mobile có nguồn gốc từ trò chơi Vương Giả Vinh Diệu (Honor of Kings) của Tencent Games phát triển và phát hành tại Trung Quốc. Vì trò chơi Vương Giả Vinh Diệu có những nhân vật trong lịch sử Trung Quốc nên không phát hành ở nước ngoài. Vì vậy Tencent Games đã thay đổi, cải thiện hình ảnh các nhân vật lên quốc tế hóa và phân phối cho Garena phát hành tại thị trường Đài Loan với tên Truyền Thuyết Đối Quyết (tiếng Trung: 傳說對決) vào ngày 14/10/2016. Về sau trò chơi được Garena phát hành ở các nước Đông Nam Á còn lại và do chính Tencent Games phát hành ở Châu Âu, Châu Mỹ và Ấn Độ.
                    <br>
                    <br>
                    Vào tháng 4 năm 2017, nhà phát triển Tencent Games mua lại bản quyền hình ảnh các nhân vật siêu anh hùng đến từ công ty DC Comics, cho ra mắt ở máy chủ thử nghiệm với các vị tướng độc quyền DC như Batman, Superman, Joker, Wonder Woman, The Flash rồi phát hành rộng rãi lên các máy chủ chính thức.
                    <br>
                    <br>
                    Ngày 29 tháng 7 năm 2018 được đánh dấu như là ngày kỷ niệm sinh nhật Liên Quân đầu tiên trên toàn thế giới, đồng thời đây cũng là ngày trận chung kết AWC 2018 diễn ra tại Los Angeles, Hoa Kỳ.
                    <br>
                </div>
            </div>
            <div class="card-footer text-center">
                <span class="see-more" data-content="Xem thêm nội dung"></span>
            </div>
        </div>
        <div class="c-my-32 d-none d-lg-block">
            @include('frontend/widget/__services__other')
        </div>

    </div>

    <div class="step" id="step2">
        <div class="head-mobile">
            <a href="#" class="link-back close-step"></a>

            <h1 class="head-title text-title">Xác nhận thanh toán</h1>

            <a href="#" class="notify" data-notify="2"></a>
        </div>
        <div class="body-mobile">
            <div class="c-px-16">
                <div class="history-detail-label c-py-12 fw-500 fz-13 fz-sm-15">
                    Thông tin mua thẻ
                </div>
                <div class="history-detail-info-block brs-12 c-p-16 c-mb-16">
                    <div class="history-detail-attr c-mb-8 d-flex justify-content-between align-items-center">
                        <p class="fz-13 fw-400 mb-0">Loại thẻ</p>
                        <div class="fw-500 fz-13" id="confirmMobileCard"></div>
                    </div>
                    <div class="history-detail-attr c-mb-8 d-flex justify-content-between align-items-center">
                        <p class="fz-13 fw-400 mb-0">Mệnh giá</p>
                        <div class="fw-500 fz-13" id="confirmMobilePrice"></div>
                    </div>
                    <div class="history-detail-attr c-mb-8 d-flex justify-content-between align-items-center">
                        <p class="fz-13 fw-400 mb-0">Số lượng</p>
                        <div class="fw-500 fz-13" id="confirmMobileQuantity"></div>
                    </div>
                    <div class="history-detail-attr c-mb-8 d-flex justify-content-between align-items-center">
                        <p class="fz-13 fw-400 mb-0">Chiết khấu</p>
                        <div class="fw-500 fz-13" id="confirmMobileDiscount"></div>
                    </div>
                    <div class="history-detail-attr d-flex justify-content-between align-items-center">
                        <p class="fz-13 fw-400 mb-0">Thành tiền</p>
                        <div class="fw-500 fz-13" id="confirmMobileTotal"></div>
                    </div>
                </div>
                <div class="history-detail-info-block brs-12 c-p-16 c-mb-16">
                    <div class="history-detail-attr c-mb-8 d-flex justify-content-between align-items-center">
                        <p class="fz-13 fw-400 mb-0">Phương thức thanh toán</p>
                        <div class="fw-500 fz-13">Tài khoản Shopbrand</div>
                    </div>
                    <div class="history-detail-attr d-flex justify-content-between align-items-center">
                        <p class="fz-13 fw-400 mb-0">Phí thanh toán</p>
                        <div class="fw-500 fz-13">Miễn phí</div>
                    </div>
                </div>
                <div class="history-detail-info-block brs-12 c-p-16 c-mb-16">
                    <div class="history-detail-attr d-flex justify-content-between align-items-center">
                        <p class="fz-13 fw-400 mb-0">Số tiền thanh toán</p>
                        <div class="fw-500 fz-13 detail-primary" id="totalMobileBill"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-mobile group-btn c-px-16 c-pt-16">
            <button class="btn primary js-step" id="confirmMobileButton" type="button">Xác nhận</button>
        </div>
    </div>

    <div class="step" id="step3">
        <div class="head-mobile">
            <a href="#" class="link-back close-step"></a>

            <div class="head-title text-title">Mua thẻ thành công</div>

            <a href="#" class="notify" data-notify="2"></a>
        </div>
        <div class="body-mobile">
            <div class="c-px-16">
                <div class="history-detail-label c-py-12 fw-500 fz-13 fz-sm-15">
                    Thông tin mua thẻ
                </div>
                <div class="history-detail-info-block brs-12 c-p-16 c-mb-16">
                    <div class="history-detail-attr c-mb-8 d-flex justify-content-between align-items-center">
                        <p class="fz-13 fw-400 mb-0">Loại thẻ</p>
                        <div class="fw-500 fz-13" id="successMobileCard"></div>
                    </div>
                    <div class="history-detail-attr c-mb-8 d-flex justify-content-between align-items-center">
                        <p class="fz-13 fw-400 mb-0">Mệnh giá</p>
                        <div class="fw-500 fz-13" id="successMobilePrice"></div>
                    </div>
                    <div class="history-detail-attr d-flex justify-content-between align-items-center">
                        <p class="fz-13 fw-400 mb-0">Số lượng</p>
                        <div class="fw-500 fz-13" id="successMobileQuantity"></div>
                    </div>
                </div>
                <div id="cardList">

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-big" id="modalConfirmPayment">
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
                            <div class="card--attr__value fz-13 fw-500" id="confirmTitle"></div>
                        </div>
                        <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                            <div class="card--attr__name fw-400 fz-13 text-center">
                                Mệnh giá
                            </div>
                            <div class="card--attr__value fz-13 fw-500" id="confirmPrice"></div>
                        </div>
                        <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                            <div class="card--attr__name fw-400 fz-13 text-center">
                                Số lượng
                            </div>
                            <div class="card--attr__value fz-13 fw-500" id="confirmQuantity"></div>
                        </div>
                        <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                            <div class="card--attr__name fw-400 fz-13 text-center">
                                Chiết khấu
                            </div>
                            <div class="card--attr__value fz-13 fw-500" id="confirmDiscount"></div>
                        </div>
                        <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                            <div class="card--attr__name fw-400 fz-13 text-center">
                                Thành tiền
                            </div>
                            <div class="card--attr__value fz-13 fw-500" id="confirmTotal"></div>
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
                            <div class="card--attr__value fz-13 fw-500"><a href="javascript:void(0)" class="c-text-primary" id="totalBill"></a></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn primary" id="confirmSubmitButton">Xác nhận</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-big" id="modal--success__payment">
        <div class="modal-dialog modal-dialog-centered modal-custom">
            <div class="modal-content c-p-24">
                <div class="modal-header">
                    <h2 class="modal-title center">Mua thẻ thành công</h2>
                    <button type="button" class="close" data-dismiss="modal"></button>
                </div>
                <div class="modal-body pl-0 pr-0 c-pt-24 c-pb-24">
                    <div class="dialog--content__title fw-700 fz-13 c-mb-12 text-title-theme">
                        Thông tin thẻ đã mua
                    </div>
                    <div class="card--gray c-mb-16 c-pt-8 c-pb-8 c-pl-12 c-pr-12">
                        <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                            <div class="card--attr__name fw-400 fz-13 text-center">
                                Loại thẻ
                            </div>
                            <div class="card--attr__value fz-13 fw-500" id="successCard"></div>
                        </div>
                        <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                            <div class="card--attr__name fw-400 fz-13 text-center">
                                Mệnh giá
                            </div>
                            <div class="card--attr__value fz-13 fw-500" id="successPrice"></div>
                        </div>
                        <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                            <div class="card--attr__name fw-400 fz-13 text-center">
                                Số lượng
                            </div>
                            <div class="card--attr__value fz-13 fw-500" id="successQuantity"></div>
                        </div>
                    </div>

                    <div class="swiper slider--card swiper-container-horizontal swiper-container-free-mode">
                        <div class="swiper-wrapper">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn ghost">Xoá bộ lọc</button>
                    {{--                    <a class="btn secondary" data-dismiss="modal">Về trang chủ</a>--}}
                    {{--                    <button class="btn primary">Xem kết quả</button>--}}
                    <button class="btn primary">Xem kết quả</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-small" id="modal--fail__payment">
        <div class="modal-dialog modal-dialog-centered modal-custom">
            <div class="modal-content">
                <div class="modal-header justify-content-center p-0">
                    <img class="c-pt-16 c-pb-16" src="/assets/frontend/{{theme('')->theme_key}}/image/son/thatbai.png" alt="">
                </div>
                <div class="modal-body text-center c-pl-24 c-pr-24 pt-0 pb-0">
                    <p class="fw-700 fz-15 c-mt-12 mb-0 text-title-theme">Mua thẻ thất bại</p>
                    <p class="fw-400 fz-13 c-mt-10 mb-0" id="message--error--buy"></p>
                </div>
                <div class="modal-footer c-p-24">
                    <button class="btn ghost" data-dismiss="modal">Thoát</button>
                </div>
            </div>
        </div>
    </div>
@endsection
