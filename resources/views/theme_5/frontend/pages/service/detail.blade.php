@extends('frontend.layouts.master')

@section('content')

    <div class="container c-container" id="service-detail">
        <ul class="breadcrumb-list">
            <li class="breadcrumb-item">
                <a href="/" class="breadcrumb-link">Trang chủ</a>
            </li>
            <li class="breadcrumb-item">
                <a href="/dich-vu" class="breadcrumb-link">Dịch vụ game</a>
            </li>
            <li class="breadcrumb-item">
                <a href="/dich-vu/{{ @$data->slug}}" class="breadcrumb-link">{{@$data->title}}</a>
            </li>
        </ul>
        <div class="head-mobile">
            <a href="/dich-vu" class="link-back"></a>

            <h1 class="head-title text-title">Dịch vụ game</h1>

            <a href="/" class="home"></a>
        </div>

        <section class="service-detail">
            <div class="section-header d-none d-lg-block">
                <h1 class="section-title">
                    Bán vàng tự động
                </h1>
            </div>
{{--            <div class="head-mobile">--}}
{{--                <a href="#" class="link-back"></a>--}}

{{--                <h1 class="head-title text-title">Bán vàng tự động</h1>--}}

{{--                <a href="#" class="notify" data-notify="2"></a>--}}
{{--            </div>--}}
            <hr>
            <div class="text-title fw-700 title-color-lg c-py-16 c-py-lg-20">
                Vui lòng chọn thông tin
            </div>
            @if( isset($server_data) && isset($server_id))
            <div class="row">
                <div class="col-12 col-lg-8 c-pr-8 c-pr-lg-16">
                    <div class="card unset-lg">
                        <div class="card-body c-p-16 c-p-lg-0 d-flex flex-wrap mx-n2">
                            <div class="input-group c-px-8">
                                <div class="form-label">
                                    Chọn máy chủ
                                </div>
                                <select name="" id="">
                                    @forelse($server_data as $k_server => $server)
                                        @if(!strpos($server_data[$k_server], '[DELETE]'))
                                            <option value="{{ $server_id[$k_server] }}">{{ $server_data[$k_server] }}</option>
                                        @endif
                                    @empty
                                    @endforelse
                                </select>
                            </div>

                            <div class="input-group c-px-8">
                                <div class="form-label">
                                    Nhập số tiền cần mua
                                </div>
                                <input type="text"
                                       value="{{ number_format($data_params['input_pack_min'],0,"",".") }}"
                                       placeholder="Nhập số tiền...">
                                <span id="text-pack">
                                    Số tiền thanh toán phải từ
                                    <b style="font-weight:bold;">{{number_format($data_params['input_pack_min'])}}đ</b>
                                    đến
                                    <b style="font-weight:bold;">{{number_format($data_params['input_pack_max'])}}đ</b>
                                </span>
                            </div>

                            <div class="input-group c-px-8">
                                <div class="form-label">
                                    Hệ số
                                </div>
                                <select name="" id="">
                                    <option value="">SEA</option>
                                    <option value="">Sao hoả</option>
                                </select>
                            </div>

                            <div class="input-group c-px-8">
                                <div class="form-label">
                                    Tên nhân vật
                                </div>
                                <input type="text" placeholder="Tên nhân vật">
                            </div>
                        </div>
                    </div>


                    <!-- service select mobile -->
                    <h2 class="text-title fw-700 title-color-lg c-pt-lg-20 c-pb-lg-8 d-block d-lg-none">
                        <div class="open-sheet" data-target="#service-select">
                            Tuỳ chọn mở rộng
                            <i class="title-info"></i>
                        </div>
                    </h2>
                    <div class="bottom-sheet" id="service-select" data-height="100" aria-hidden="true">
                        <div class="layer"></div>
                        <div class="content-bottom-sheet bar-slide">
                            <div class="sheet-header">
                                <h2 class="text-title center">
                                    Tuỳ chọn mở rộng
                                </h2>
                                <div class="close"></div>
                            </div>
                            <div class="sheet-body">
                                <!-- body -->
                                <label class="input-checkbox">
                                    <input type="checkbox" name="select">
                                    <span class="checkmark"></span>
                                    <span class="text-label text">Ss - 1tr5 (chuẩn bị 120 ngọc) vào được thêm vào tài kho kho kho kho kho kho kho kho kho kho kho kho kho kho </span>
                                </label>

                                <label class="input-checkbox">
                                    <input type="checkbox" name="select">
                                    <span class="checkmark"></span>
                                    <span class="text-label text">Ss - 1tr5 (chuẩn bị 120 ngọc) vào được thêm vào tài kho kho kho kho kho kho kho kho kho kho kho kho kho kho </span>
                                </label>

                                <label class="input-checkbox">
                                    <input type="checkbox" name="select">
                                    <span class="checkmark"></span>
                                    <span class="text-label text">Ss - 1tr5 (chuẩn bị 120 ngọc) vào được thêm vào tài kho kho kho kho kho kho kho kho kho kho kho kho kho kho </span>
                                </label>

                                <label class="input-checkbox">
                                    <input type="checkbox" name="select">
                                    <span class="checkmark"></span>
                                    <span class="text-label text">Ss - 1tr5 (chuẩn bị 120 ngọc) vào được thêm vào tài kho kho kho kho kho kho kho kho kho kho kho kho kho kho </span>
                                </label>

                                <label class="input-checkbox">
                                    <input type="checkbox" name="select">
                                    <span class="checkmark"></span>
                                    <span class="text-label text">Ss - 1tr5 (chuẩn bị 120 ngọc) vào được thêm vào tài kho kho kho kho kho kho kho kho kho kho kho kho kho kho </span>
                                </label>

                            </div>
                            <div class="sheet-footer v2">
                                <label for="select-service" class="btn primary">Xác nhận</label>
                            </div>
                        </div>
                    </div>
                    <!-- end -->
                    <h2 class="text-title fw-700 title-color-lg c-py-16  c-py-lg-20">
                        Tuỳ chọn tướng (với Game Moba)
                    </h2>
                    <div class="card unset-lg">
                        <div class="card-body c-p-16 c-p-lg-0 d-flex flex-wrap mx-n2">
                            <div class="input-group c-px-8">
                                <div class="form-label">
                                    Tài khoản cần làm nhiệm vụ
                                </div>
                                <select name="" id="">
                                    <option value="">Trái đất</option>
                                    <option value="">Sao hoả</option>
                                </select>
                            </div>

                            <div class="input-group c-px-8">
                                <div class="form-label">
                                    Mật khẩu
                                </div>
                                <div class="toggle-password">
                                    <input type="password" placeholder="Mật khẩu...">
                                </div>
                            </div>

                            <div class="input-group c-px-8">
                                <div class="form-label">
                                    Tuỳ chọn tướng
                                </div>
                                <select name="" id="">
                                    <option value="">Vanhein</option>
                                    <option value="">Batman</option>
                                </select>
                            </div>

                            <div class="input-group c-px-8">
                                <div class="form-label">
                                    Tên nhân vật
                                </div>
                                <input type="text" placeholder="Tên nhân vật">
                            </div>
                        </div>
                    </div>
                    <label class="input-checkbox c-my-16 c-mb-lg-28">
                        <input type="checkbox" name="select">
                        <span class="checkmark"></span>
                        <span class="text-label">Bạn đã đọc kỹ quy định và chuẩn bị đầy đủ vật phẩm, phụ kiện theo yêu cầu của shop chưa?</span>
                    </label>
                    <div class="d-none d-lg-block c-pb-22 c-pt-2">
                        <hr>
                    </div>
                    <div class="c-mb-16">
                        @include('frontend.pages.components.description')
                    </div>

                    <!-- Data Bot -->
                    <h2 class="text-title-bold d-block d-lg-none c-mb-8">Vị trí đối với Game Ngọc Rồng</h2>
                    <div class="card c-mb-lg-16">
                        <div class="card-body">
                            <h2 class="text-title-bold d-none d-lg-block c-mb-16">Vị trí (Mặc định ở vách núi KAKAROT Khu 39)</h2>

                            <table class="table-data-bot">
                                <tr>
                                    <th>Server</th>
                                    <th>Nhân vật</th>
                                    <th>Khu vực</th>
                                    <th>Trạng thái</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>dubaish1</td>
                                    <td>39</td>
                                    <td>
                                        <div class="status success">Online</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>dubaish1</td>
                                    <td>39</td>
                                    <td>
                                        <div class="status danger">Offline</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>dubaish1</td>
                                    <td>39</td>
                                    <td>
                                        <div class="status danger">Offline</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>dubaish1</td>
                                    <td>39</td>
                                    <td>
                                        <div class="status danger">Offline</div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!-- end data bot -->
                </div>
                <div class="col-lg-4 c-pl-8 d-none d-lg-block">
                    <div class="js_sticky"  data-top="140">
                        <div class="card section-pay">
                            <div class="card-body c-p-16">
                                <div class="text-title-bold d-inline-block">Báo giá:</div>
                                <br>
                                <div class="text-title secondary d-inline-block">100.000đ</div>
                                <a href="" class="btn primary">Thanh toán</a>
                            </div>
                        </div>
                        <h2 class="text-title fw-700 title-color-lg c-my-16">
                            Tuỳ chọn tướng (với Game Moba)
                        </h2>
                        <div class="card service-select c-py-12 c-pr-8">
                            <div class="card-body py-0">
                                <label class="input-checkbox">
                                    <input type="checkbox" name="select">
                                    <span class="checkmark"></span>
                                    <span class="text-label text">Ss - 1tr5 (chuẩn bị 120 ngọc) vào được thêm vào tài kho kho kho kho kho kho kho kho kho kho kho kho kho kho </span>
                                </label>
                                <label class="input-checkbox">
                                    <input type="checkbox" name="select">
                                    <span class="checkmark"></span>
                                    <span class="text-label text">Ss - 1tr5 (chuẩn bị 120 ngọc) vào được thêm vào tài kho kho kho kho kho kho kho kho kho kho kho kho kho kho </span>
                                </label>
                                <label class="input-checkbox">
                                    <input type="checkbox" name="select">
                                    <span class="checkmark"></span>
                                    <span class="text-label text">Ss - 1tr5 (chuẩn bị 120 ngọc) vào được thêm vào tài kho kho kho kho kho kho kho kho kho kho kho kho kho kho </span>
                                </label>
                                <label class="input-checkbox">
                                    <input type="checkbox" name="select">
                                    <span class="checkmark"></span>
                                    <span class="text-label text">Ss - 1tr5 (chuẩn bị 120 ngọc) vào được thêm vào tài kho kho kho kho kho kho kho kho kho kho kho kho kho kho </span>
                                </label>
                                <label class="input-checkbox">
                                    <input type="checkbox" name="select">
                                    <span class="checkmark"></span>
                                    <span class="text-label text">Ss - 1tr5 (chuẩn bị 120 ngọc) vào được thêm vào tài kho kho kho kho kho kho kho kho kho kho kho kho kho kho </span>
                                </label>
                                <label class="input-checkbox">
                                    <input type="checkbox" name="select">
                                    <span class="checkmark"></span>
                                    <span class="text-label text">Ss - 1tr5 (chuẩn bị 120 ngọc) vào được thêm vào tài kho kho kho kho kho kho kho kho kho kho kho kho kho kho </span>
                                </label>
                                <label class="input-checkbox">
                                    <input type="checkbox" name="select">
                                    <span class="checkmark"></span>
                                    <span class="text-label text">Ss - 1tr5 (chuẩn bị 120 ngọc) vào được thêm vào tài kho kho kho kho kho kho kho kho kho kho kho kho kho kho </span>
                                </label>
                                <label class="input-checkbox">
                                    <input type="checkbox" name="select">
                                    <span class="checkmark"></span>
                                    <span class="text-label text">Ss - 1tr5 (chuẩn bị 120 ngọc) vào được thêm vào tài kho kho kho kho kho kho kho kho kho kho kho kho kho kho </span>
                                </label>
                                <label class="input-checkbox">
                                    <input type="checkbox" name="select">
                                    <span class="checkmark"></span>
                                    <span class="text-label text">Ss - 1tr5 (chuẩn bị 120 ngọc) vào được thêm vào tài kho kho kho kho kho kho kho kho kho kho kho kho kho kho </span>
                                </label>
                                <label class="input-checkbox">
                                    <input type="checkbox" name="select">
                                    <span class="checkmark"></span>
                                    <span class="text-label text">Ss - 1tr5 (chuẩn bị 120 ngọc) vào được thêm vào tài kho kho kho kho kho kho kho kho kho kho kho kho kho kho </span>
                                </label>
                                <label class="input-checkbox">
                                    <input type="checkbox" name="select">
                                    <span class="checkmark"></span>
                                    <span class="text-label text">Ss - 1tr5 (chuẩn bị 120 ngọc) vào được thêm vào tài kho kho kho kho kho kho kho kho kho kho kho kho kho kho </span>
                                </label>
                                <label class="input-checkbox">
                                    <input type="checkbox" name="select">
                                    <span class="checkmark"></span>
                                    <span class="text-label text">Ss - 1tr5 (chuẩn bị 120 ngọc) vào được thêm vào tài kho kho kho kho kho kho kho kho kho kho kho kho kho kho </span>
                                </label>
                                <label class="input-checkbox">
                                    <input type="checkbox" name="select">
                                    <span class="checkmark"></span>
                                    <span class="text-label text">Ss - 1tr5 (chuẩn bị 120 ngọc) vào được thêm vào tài kho kho kho kho kho kho kho kho kho kho kho kho kho kho </span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <div class="footer-mobile c-p-16">
                <span class="fw-lg-500 d-inline-block">Báo giá:</span>
                <br>
                <div class="text-title-bold secondary d-inline-block">100.000đ</div>
                <button type="button" class="btn primary js-step" data-target="#step2">Giao dịch ngay</button>
            </div>
        </section>

        @include('frontend.pages.service.widget.__related')
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


    {{-- Thanh toans thanhf coong  --}}
    <div class="modal fade modal-small" id="orderSuccses">
        <div class="modal-dialog modal-dialog-centered modal-custom">
            <div class="modal-content">
                <div class="modal-header justify-content-center p-0">
                    <img class="c-pt-20 c-pb-20" src="/assets/frontend/{{theme('')->theme_key}}/image/son/success.png" alt="">
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

    {{--  sử lý step  --}}

    <div class="step" id="step2">
        <div class="head-mobile">
            <a href="javascript:void(0) " class="link-back close-step"></a>

            <h1 class="head-title text-title">Xác nhận thanh toán</h1>

            <a href="/" class="home"></a>
        </div>
        <div class="body-mobile">
            <div class="body-mobile-content c-p-16">
                <div class="dialog--content__title fw-700 fz-15 c-mb-12 text-title-theme">
                    Thông tin mua thẻ
                </div>
                <div class="card--gray c-mb-16 c-pt-8 c-pb-8 c-pl-12 c-pr-12 brs-8 g_mobile-content">
                    <div class="card--attr justify-content-between d-flex c-mb-8 text-center">
                        <div class="card--attr__name fw-400 fz-13 text-center text-order">
                            Loại thẻ
                        </div>
                        <div class="card--attr__value fz-13 fw-500">10.000đ</div>
                    </div>
                    <div class="card--attr justify-content-between d-flex c-mb-8 text-center">
                        <div class="card--attr__name fw-400 fz-13 text-center text-order">
                            Mệnh giá
                        </div>
                        <div class="card--attr__value fz-13 fw-500">10.000đ</div>
                    </div>
                    <div class="card--attr justify-content-between d-flex c-mb-8 text-cente text-order">
                        <div class="card--attr__name fw-400 fz-13 text-center">
                            Số lượng
                        </div>
                        <div class="card--attr__value fz-13 fw-500">01</div>
                    </div>
                    <div class="card--attr justify-content-between d-flex c-mb-8 text-center text-order">
                        <div class="card--attr__name fw-400 fz-13 text-center">
                            Chiết khấu
                        </div>
                        <div class="card--attr__value fz-13 fw-500">1%</div>
                    </div>
                </div>
                <div class="card--gray c-mb-16 c-pt-8 c-pb-8 c-pl-12 c-pr-12 brs-8 g_mobile-content">
                    <div class="card--attr justify-content-between d-flex c-mb-8 text-center">
                        <div class="card--attr__name fz-13 fw-400 text-center text-order">
                            Phương thức thanh toán
                        </div>
                        <div class="card--attr__value fz-13 fw-500">
                            Tài khoản Shopbrand
                        </div>
                    </div>
                    <div class="card--attr justify-content-between d-flex c-mb-8 text-center">
                        <div class="card--attr__name fw-400 fz-13 text-center">
                            Phí thanh toán
                        </div>
                        <div class="card--attr__value fz-13 fw-500">
                            Miễn phí
                        </div>
                    </div>
                </div>
                <div class="card--gray c-mb-0 c-pt-8 c-pb-8 c-pl-12 brs-8 c-pr-12 g_mobile-content">
                    <div class="card--attr__total justify-content-between d-flex text-center">
                        <div class="card--attr__name fw-400 fz-13 text-center text-order">
                            Tổng thanh toán
                        </div>
                        <div class="card--attr__value fz-13 fw-500"><a href="javascript:void(0)" class="c-text-primary">9.900 đ</a></div>
                    </div>
                </div>
            </div>

        </div>

        <div class="footer-mobile">
            <div class="c-px-16 c-pt-16 group-btn" style="--data-between: 12px">
                <button class="btn primary btn-success-mobile">Xác nhận</button>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>

        $('body').on('click','#service-detail .btn-success-service',function(e){
            e.preventDefault();
            $('#orderModal').modal('show');
        })

        $('body').on('click','.btn-success-mobile',function(e){
            e.preventDefault();
            $('#orderSuccses').modal('show');
        })

    </script>
@endsection

