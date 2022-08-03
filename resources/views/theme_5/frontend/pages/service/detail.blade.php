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
            <div class="row">
                <div class="col-12 col-lg-8 c-pr-8 c-pr-lg-16">
                    @if( isset($server_data) && isset($server_id))
                        <div class="col-md-12 left-right body-title-ct">
                            <div class="row marginauto">

                                <div class="col-md-12 text-left left-right mb-fix-12">

                                    <div class="row marginauto ">
                                        <div
                                            class="col-md-12 left-right body-title-detail-span-ct">
                                            <span>Chọn máy chủ</span>
                                        </div>
                                        <div class="col-md-12 left-right body-title-detail-select-ct data-select-server">
                                            <select class="wide" name="server">
                                                @forelse($server_data as $k_server => $server)
                                                    @if(!strpos($server_data[$k_server], '[DELETE]'))
                                                        <option value="{{ $server_id[$k_server] }}">{{ $server_data[$k_server] }}</option>
                                                    @endif
                                                @empty
                                                @endforelse
                                            </select>
                                        </div>
                                        <div class="col-m-12 server-error"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endif
                        @if(\App\Library\HelpersDecode::DecodeJson('server_mode',$data->params) == "1")
                            @php
                                $server_data=\App\Library\HelpersDecode::DecodeJson('server_data',$data->params);
                                $server_id = \App\Library\HelpersDecode::DecodeJson('server_id',$data->params);
                            @endphp
                            <span class=" mb-15 control-label bb">Chọn máy chủ:</span>
                            @if(!empty($server_data))
                                {{--                                        @dd($server_data)--}}
                                <div class="mb-15 c-pt-16">
                                    <select name="server[]" class="server-filter form-control t14" style="">
                                        @for($i = 0; $i < count($server_data); $i++)
                                            @if((strpos($server_data[$i], '[DELETE]') === false))
                                                <option value="{{$server_id[$i]}}">{{$server_data[$i]}}</option>
                                            @endif
                                        @endfor
                                    </select>
                                </div>
                            @endif
                        @endif
                        @if(\App\Library\HelpersDecode::DecodeJson('filter_type',$data->params) == "4"){{--//dạng chọn một--}}
                        @php
                            $name=\App\Library\HelpersDecode::DecodeJson('name',$data->params);
                            $price=\App\Library\HelpersDecode::DecodeJson('price',$data->params);
                        @endphp
                        @if(!empty($name))
                            <span class="mb-15 control-label bb">{{\App\Library\HelpersDecode::DecodeJson('filter_name',$data->params)}}:</span>
                            <div class="mb-15">
                                <select name="selected" class="s-filter form-control t14" style="">
                                    @for ($i = 0; $i < count($name); $i++)
                                        @if($name[$i]!=null)
                                            <option value="{{$i}}">{{$name[$i]}}</option>
                                        @endif
                                    @endfor
                                </select>
                            </div>
                        @endif

                        @elseif(\App\Library\HelpersDecode::DecodeJson('filter_type',$data->params) == "7"){{--////dạng nhập tiền thành toán--}}
                        <span class="mb-15 control-label bb">Nhập số tiền cần mua:</span>
                        <div class="mb-15">
                            <input autofocus="" value="{{old('input_pack',\App\Library\HelpersDecode::DecodeJson('input_pack_min',$data->params))}}" class="form-control t14 price " id="input_pack" type="text" placeholder="Số tiền">
                            <span style="font-size: 14px;">Số tiền thanh toán phải từ <b style="font-weight:bold;">{{ str_replace(',','.',number_format(\App\Library\HelpersDecode::DecodeJson('input_pack_min',$data->params))) }}đ</b>  đến <b style="font-weight:bold;">{{ str_replace(',','.',number_format(\App\Library\HelpersDecode::DecodeJson('input_pack_max',$data->params))) }}đ</b> </span>
                        </div>
                        <span class="mb-15 control-label bb">Hệ số:</span>
                        <div class="mb-15">
                            <input type="text" id="txtDiscount" class="form-control t14" placeholder="" value="" readonly="">
                        </div>
                    @elseif(\App\Library\HelpersDecode::DecodeJson('filter_type',$data->params) =="6") {{--//dạng chọn a->b--}}

                    @endif
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
{{--                        <h2 class="text-title-bold d-block d-lg-none c-mb-8">Chi tiết dịch vụ</h2>--}}
                        <div class="card overflow-hidden">
                            <div class="card-body c-px-16">
                                <h2 class="text-title-bold d-none d-lg-block c-mb-24">Chi tiết dịch vụ</h2>
                                <div class="content-desc">
                                    {!! @$data->description !!}
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                <span class="see-more" data-content="Xem thêm nội dung"></span>
                            </div>
                        </div>

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
                                <input class="text-title secondary" type="hidden" name="value" value="">
                                <input class="text-title" type="hidden" name="selected" value="">
                                <input class="text-title" type="hidden" name="server">
                                <div id="txtPrice" class="text-title secondary d-inline-block">0 VNĐ</div>
                                <button id="btnPurchase" class="btn primary" data-toggle="modal" data-target="#orderModal">Thanh toán</button>
                            </div>
                        </div>
                        <h2 class="text-title fw-700 title-color-lg c-my-16">
                            Tuỳ chọn tướng (với Game Moba)
                        </h2>
                        @if(\App\Library\HelpersDecode::DecodeJson('filter_type',$data->params) == "5") {{--//dạng chọn nhiều--}}
                        <span class="mb-15 control-label bb">{{\App\Library\HelpersDecode::DecodeJson('filter_name',$data->params)}}:</span>
                        <div class="card service-select c-py-12 c-pr-8 ">
                            <div class="card-body py-0 s-filter">
                                @php
                                    $name=\App\Library\HelpersDecode::DecodeJson('name',$data->params);
                                    $price=\App\Library\HelpersDecode::DecodeJson('price',$data->params);
                                @endphp
                                @if(!empty($name))
                                    @for ($i = 0; $i < count($name); $i++)
                                        @if($name[$i]!=null)
                                <label class="input-checkbox">
                                    <input value="{{$i}}" type="checkbox" name="select" id="{{$i}}">
                                    <span class="checkmark"></span>
                                    <label class="c-ml-30" for="{{$i}}">{{$name[$i]}}{{isset($price[$i])? " - ".number_format($price[$i]). " VNĐ":""}}</label>                                </label>
                                        @endif
                                    @endfor
                                @endif
                            </div>
                        </div>
                        @endif


                    </div>
                </div>
            </div>
            <div class="footer-mobile c-p-16">
                <span class="fw-lg-500 d-inline-block">Báo giá:</span>
                <br>
                <div id="txtPrice" class="text-title-bold secondary d-inline-block">100.000đ</div>
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
                        Thông tin dịch vụ thuê
                    </div>

                    <div class="card--gray c-mb-16 c-pt-8 c-pb-8 c-pl-12 c-pr-12">
                        <div class="card--attr__total justify-content-between d-flex c-mb-16 text-center">
                            <div class="card--attr__name fw-400 fz-13 text-center">
                                Tài khoản
                            </div>
                            <div class="card--attr__value fz-13 fw-500"><a href="javascript:void(0)" class="c-text-primary">Garena</a></div>
                        </div>
                    </div>

                    <div class="card--gray c-mb-16 c-pt-8 c-pb-8 c-pl-12 c-pr-12">
                        <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                            <div class="card--attr__name fw-400 fz-13 text-center">
                                Game
                            </div>
                            <div class="card--attr__value fz-13 fw-500">Liên Quân Mobile</div>
                        </div>
                        <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                            <div class="card--attr__name fw-400 fz-13 text-center">
                                Gói
                            </div>
                            <div class="card--attr__value fz-13 fw-500">Vàng - Kim cương</div>
                        </div>
                        <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                            <div class="card--attr__name fw-400 fz-13 text-center">
                                Chiết khấu
                            </div>
                            <div class="card--attr__value fz-13 fw-500">3%</div>
                        </div>
                        <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                            <div class="card--attr__name fw-400 fz-13 text-center">
                                Thành tiền
                            </div>
                            <div class="card--attr__value fz-13 fw-500">20.000đ</div>
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
                            <div class="card--attr__value fz-13 fw-500"><a href="javascript:void(0)" class="c-text-primary">20.000đ</a></div>
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

    <script>

        function Confirm(index, serverid) {
            $('[name="server"]').val(serverid);
            $('[name="selected"]').val(index);
            $('#btnPurchase').click();
        }

        var data = jQuery.parseJSON('{!! $data->params !!}');

            @if(\App\Library\HelpersDecode::DecodeJson('filter_type',$data->params) =="7")
        var purchase_name = '{{\App\Library\HelpersDecode::DecodeJson('filter_name',$data->params)}}';
            @else
        var purchase_name = 'VNĐ';
            @endif

        var server = -1;

        $(".server-filter").change(function (elm, select) {
            server = parseInt($(".server-filter").val());
            $('[name="server"]').val(server);
            UpdatePrice();
        });
        server = parseInt($(".server-filter").val());
        $('[name="server"]').val(server);

    </script>
    @if(\App\Library\HelpersDecode::DecodeJson('filter_type',$data->params) =="1")

    @elseif(\App\Library\HelpersDecode::DecodeJson('filter_type',$data->params) =="4"){{--//dạng chọn một--}}
    <script>
        var itemselect = -1;
        $(document).ready(function () {
            $(".s-filter").change(function (elm, select) {
                itemselect = parseInt($(".s-filter").val());
                UpdatePrice();
            });
            itemselect = parseInt($(".s-filter").val());
            UpdatePrice();
        });

        function UpdatePrice() {
            var price = 0;
            if (itemselect == -1) {
                return;
            }

            if (data.server_mode == 1 && data.server_price == 1) {

                var s_price = data["price" + server];
                price = parseInt(s_price[itemselect]);
            }
            else {
                var s_price = data["price"];
                price = parseInt(s_price[itemselect]);
            }
            $('[name="value"]').val('');
            $('[name="value"]').val(price);
            price = price.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
            price = price.split('').reverse().join('').replace(/^[\.]/,'');
            $('#txtPrice').html(price + ' VNĐ');
            $('[name="selected"]').val($(".s-filter").val());

            $('#txtPrice').removeClass().addClass('bounceIn animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
                $(this).removeClass();
            });
            $('tbody tr.selected').removeClass('selected');
            $('tbody tr').eq(itemselect).addClass('selected');
        }

        function ConfirmBuy(value) {
            var index = $('.server-filter').val();
            Confirm(value, index);
        }
    </script>

    @elseif(\App\Library\HelpersDecode::DecodeJson('filter_type',$data->params) =="5"){{--//dạng chọn nhiều--}}
    <script>
        $('.s-filter input[type="checkbox"]').change(function () {
            UpdatePrice();
        });

        function UpdatePrice() {
            var price = 0;
            var itemselect = '';

            if (data.server_mode == 1 && data.server_price == 1) {
                var s_price = data["price" + server];
            }
            else {
                var s_price = data["price"];
            }

            if ($('.s-filter input[type="checkbox"]:checked').length > 0) {
                $('.s-filter input[type="checkbox"]:checked').each(function (idx, elm) {
                    price += parseInt(s_price[$(elm).val()]);
                    if (itemselect != '') {
                        itemselect += '|';
                    }

                    itemselect += $(elm).val();

                    $('[name="value"]').val('');
                    $('[name="value"]').val(price);

                    $('[name="selected"]').val(itemselect);

                    $('#txtPrice').removeClass().addClass('bounceIn animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
                        $(this).removeClass();
                    });
                });
                $('#btnPurchase').prop('disabled', false);
            }
            else {
                $('#txtPrice').html('0 VNĐ');
                $('#txtPrice').removeClass().addClass('bounceIn animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
                    $(this).removeClass();
                });
                $('#btnPurchase').prop('disabled', true);

            }
            price = price.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
            price = price.split('').reverse().join('').replace(/^[\.]/,'');
            $('#txtPrice').html(price + ' VNĐ');
        }
    </script>
    @elseif(\App\Library\HelpersDecode::DecodeJson('filter_type',$data->params) =="6"){{--//dạng chọn a->b--}}
    <script>
        var json = JSON.parse(JSON.parse($("#json_rank").val()).params);
        var data = json.price;
        $('.nstSlider').attr('data-range_max', data.length - 1);
        $('.nstSlider').attr('data-cur_max', data.length - 1);
        $('.nstSlider').nstSlider({
            "crossable_handles": false,
            "left_grip_selector": ".leftGrip",
            "right_grip_selector": ".rightGrip",
            "value_bar_selector": ".bar",
            "value_changed_callback": function (cause, leftValue, rightValue) {
                from = leftValue;
                to = rightValue;
                $(".from-chosen").val(from);
                $(".to-chosen").val(to);
                $(".to-chosen").trigger("chosen:updated");
                $(".from-chosen").trigger("chosen:updated");
                UpdatePrice1();
            }
        });

        var from = 0, to = 1;
        $(document).ready(() => {
            $(".from-chosen").chosen({disable_search_threshold: 10});
            $(".from-chosen").change((elm, select) => {
                from = parseInt($(".from-chosen").val());
                if (to <= from) {
                    to = from + 1;
                    $(".to-chosen").val(to);
                    //$(".to-chosen").chosen('update');
                    $(".to-chosen").trigger("chosen:updated");
                }
                $('.nstSlider').nstSlider('set_position', from, to);
                UpdatePrice1();
            });

            $(".to-chosen").chosen({disable_search_threshold: 10});
            $(".to-chosen").change((elm, select) => {
                to = parseInt($(".to-chosen").val());
                if (to <= from) {
                    from = to - 1;
                    $(".from-chosen").val(from);
                    $(".from-chosen").trigger("chosen:updated");
                }
                $('.nstSlider').nstSlider('set_position', from, to);
                UpdatePrice1();
            });
            UpdatePrice1();
        });

        function UpdatePrice1() {
            var price = 0;
            var data =json.price;
            $('tbody tr.selected').removeClass('selected');
            for (var i = from + 1; i <= to; i++) {
                price += parseInt(data[i]-data[i-1]);
                $('tbody tr').eq(i - 1).addClass('selected');
            }
            $('[name="value"]').val('');
            $('[name="value"]').val(price);
            price = price.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
            price = price.split('').reverse().join('').replace(/^[\.]/,'');
            $('#txtPrice').html(price + ' VNĐ');
            $('[name="selected"]').val(from + '|' + to);
            $('#txtPrice').removeClass().addClass('bounceIn animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
                $(this).removeClass();
            });
            $('.nstSlider').nstSlider('set_position', from, to);
            $(".from-chosen").val(from);
            $(".to-chosen").val(to);
            $(".to-chosen").trigger("chosen:updated");
            $(".from-chosen").trigger("chosen:updated");
        }
    </script>

    @elseif(\App\Library\HelpersDecode::DecodeJson('filter_type',$data->params) =="7"){{--//dạng nhập tiền thành toán--}}
    <script>
        var min = parseInt('{{\App\Library\HelpersDecode::DecodeJson('input_pack_min',$data->params)}}');
        var max = parseInt('{{\App\Library\HelpersDecode::DecodeJson('input_pack_max',$data->params)}}');
        $('#txtPrice').html('');
        $('#txtPrice').html('Tổng: 0 ' + purchase_name);

        function UpdatePrice() {

            var container = $('.m-datatable__body').html('');


            if (data.server_mode == 1 && data.server_price == 1) {

                var s_price = data["price" + server];
                var s_discount = data["discount" + server];
            }
            else {
                var s_price = data["price"];
            }


            for (var i = 0; i < data.name.length; i++) {

                var price = s_price[i];
                var discount = s_price[i];


                if (s_price != null && s_discount != null) {
                    var ptemp = '';

                    if (data.length == 1) {
                        ptemp = '<td style="width:180px;" class="m-datatable__cell"> <a class="btn-style border-color" href="/service/purchase/2.html?selected=' + price + '&server=' + server + '">Thanh toán</a> </td> </tr>';
                    } else {
                        ptemp = '<td style="width:180px;" class="m-datatable__cell"> <a onclick="Confirm(' + price + ',' + server + ')" class="btn-style border-color">Thanh toán</a> </td> </tr>';
                    }
                    var temp = '<tr class="m-datatable__row m-datatable__row--even">' +
                        '<td style="width:30px;" class="m-datatable__cell">' + (i + 1) + '</td>' +
                        '<td class="m-datatable__cell">' + data.name[i] + '</td>' +
                        '<td style="width:150px;" class="m-datatable__cell">' + price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + ' VNĐ</td>' +
                        '<td style="width:250px;" class="m-datatable__cell">' + discount + '</td>' +
                        '<td style="width:180px;" class="m-datatable__cell">' + (parseInt(price * discount / 1000 * data.input_pack_rate)).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + ' ' + purchase_name + '</td>' + ptemp

                    $(temp).appendTo(container);
                }
            }
            UpdateTotal();
        }

        function UpdateTotal() {
            var price = parseInt($('#input_pack').val().replace(/,/g, ''));

            if (typeof price != 'number' || price < min || price > max) {
                $('button[type="submit"]').addClass('not-allow');

                $('#txtPrice').html('Tiền nhập không đúng');
                return;
            } else {
                $('button[type="submit"]').removeClass('not-allow');
            }
            var total = 0;
            var index = 0;
            var current = 0;
            var discount = 0;


            if (data.server_mode == 1 && data.server_price == 1) {
                var s_price = data["price" + server];
                var s_discount = data["discount" + server];

                for (var i = 0; i < s_price.length; i++) {

                    if (price >= s_price[i] && s_price[i] != null) {
                        current = s_price[i];
                        index = i;
                        discount = s_discount[i];
                        total = price * s_discount[i];

                    }
                }
            }
            else {
                var s_price = data["price"];
                var s_discount = data["discount"];

                discount = s_discount[server];
                total = price * discount;
            }

            $('[name="value"]').val('');
            $('[name="value"]').val(price);
            total = parseInt(total / 1000 * data.input_pack_rate);

            $('#txtDiscount').val(discount);
            total = total.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
            total = total.split('').reverse().join('').replace(/^[\.]/,'');
            $('#txtPrice').html('');
            $('#txtPrice').html( total + " " + purchase_name);
            $('#txtPrice').removeClass().addClass('bounceIn animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
                $(this).removeClass();
            });
            $('[name="selected"]').val(price);
            $('.m-datatable__body tbody tr.selected').removeClass('selected');
            $('.m-datatable__body tbody tr').eq(index).addClass('selected');
        }

        $('#input_pack').bind('focus keyup', function () {
            UpdateTotal();
        });
        $(document).ready(function () {
            UpdatePrice();
        });

        function ConfirmBuy(value) {
            var index = $('.server-filter').val();
            Confirm(value, index);
        }
    </script>
    @endif
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

