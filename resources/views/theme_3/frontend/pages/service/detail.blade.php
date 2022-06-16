@extends('frontend.layouts.master')
@section('scripts')
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/js_trong/service.js" type="text/javascript"></script>
@endsection
@section('content')
    @if(\App\Library\HelpersDecode::DecodeJson('server_mode',$data->params) == "1")
        @php
            $server_data=\App\Library\HelpersDecode::DecodeJson('server_data',$data->params);
            $server_id = \App\Library\HelpersDecode::DecodeJson('server_id',$data->params);
        @endphp
    @endif
    @php
        $data_params = json_decode($data->params,true);

        $send_name = \App\Library\HelpersDecode::DecodeJson('send_name',$data->params);
        $send_type = \App\Library\HelpersDecode::DecodeJson('send_type',$data->params);
    @endphp
    <input type="hidden" id="data_params" value="{{ $data->params }}">
    <form id="formBookingStepMobie" action="" method="POST">
        {{csrf_field()}}
        <fieldset id="fieldset-one">
            <section class="media-mobile">
                <div class="container container-fix banner-mobile-container-ct">
                    <div class="row marginauto banner-mobile-row-ct">
                        <div class="col-auto left-right" style="width: 10%">
                            <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/back.png"
                                 alt="">
                        </div>

                        <div class="col-auto left-right banner-mobile-span text-center" style="width: 80%">
                            <h3>Cày Thuê</h3>
                        </div>
                        <div class="col-auto left-right" style="width: 10%">
                        </div>
                    </div>
                </div>
            </section>
            <section class="media-web">
                <div class="container container-fix menu-container-ct">
                    <ul>
                        <li><a href="/">Trang chủ</a></li>
                        <li class="menu-container-li-ct"><img class="lazy"
                                                              src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/arrow-right.png"
                                                              alt=""></li>
                        <li class="menu-container-li-ct"><a href="/dich-vu">Dịch vụ</a></li>
                        <li class="menu-container-li-ct"><img class="lazy"
                                                              src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/arrow-right.png"
                                                              alt=""></li>
                        <li class="menu-container-li-ct"><a href="/dich-vu/{{ @$data->slug }}">{{ @$data->title }}</a>
                        </li>
                    </ul>
                </div>
            </section>

            {{--   Bopdy --}}
            <section id="service-detail">
                <div class="container container-fix body-container-ct">
                    <div class="row marginauto body-container-row-ct body-container-row-mobile-ct">
                        <div class="col-lg-5 col-12 body-container-detail-left-ct">
                            <form action="" method="POST">
                                @csrf
                                <div class="row marginauto body-row-ct web-media-ct-fix web-media-ct">

                                    <div class="col-md-12 left-right">
                                        <div class="row marginauto">

                                            <div class="col-md-12 left-right">
                                                <div class="row marginauto body-header-ct">
                                                    <div class="col-auto left-right">
                                                        <img class="lazy"
                                                             src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/caythue.png"
                                                             alt="">
                                                    </div>
                                                    <div class="col-md-10 col-10 body-header-col-ct">
                                                        <h3>{{ @$data->title }}</h3>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 left-right">
                                                <div class="row marginauto banner-container-ct">
                                                    <div class="col-md-12 text-left left-right">
                                                        <img class="lazy" src="{{ @$data->image_banner }}" alt="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 left-right">
                                                <div class="row marginauto body-title-ct">
                                                    <div class="col-md-12 text-left left-right">
                                                        <span>Vui lòng chọn thông tin</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 left-right">
{{--                                                <div class="row body-title-detail-ct">--}}
{{--                                                    <div class="col-auto text-left detail-service-col body-title-detail-col-ct">--}}
{{--                                                        <div class="row marginauto">--}}
{{--                                                            <div class="col-md-12 left-right body-title-detail-span-ct">--}}
{{--                                                                <span>Rank hiện tại</span>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="col-md-12 left-right body-title-detail-select-ct data-select-rank-start">--}}
{{--                                                                <select class="wide" name="rank-start">--}}
{{--                                                                    <option value="">Chọn rank hiện tại</option>--}}
{{--                                                                    <option value="3">Vàng 4</option>--}}
{{--                                                                    <option value="4">Vàng 5</option>--}}
{{--                                                                    <option value="5">Vàng 6</option>--}}
{{--                                                                    <option value="5">Vàng 7</option>--}}
{{--                                                                </select>--}}
{{--                                                            </div>--}}

{{--                                                            <div class="col-m-12 rank-start-error">--}}

{{--                                                            </div>--}}

{{--                                                        </div>--}}


{{--                                                    </div>--}}

{{--                                                    <div class="col-auto text-left detail-service-col media-col-558 body-title-detail-col-ct">--}}
{{--                                                        <div class="row marginauto">--}}
{{--                                                            <div class="col-md-12 left-right body-title-detail-span-ct">--}}
{{--                                                                <span>Rank mong muốn</span>--}}
{{--                                                            </div>--}}
{{--                                                            <div--}}
{{--                                                                class="col-md-12 left-right body-title-detail-select-ct data-select-rank-end">--}}
{{--                                                                <select class="wide" name="rank-end">--}}
{{--                                                                    <option value="">Chọn rank hiện tại</option>--}}
{{--                                                                    <option value="3">Vàng 4</option>--}}
{{--                                                                    <option value="4">Vàng 5</option>--}}
{{--                                                                    <option value="5">Vàng 6</option>--}}
{{--                                                                    <option value="5">Vàng 7</option>--}}
{{--                                                                </select>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="col-m-12 rank-end-error">--}}

{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}

{{--                                                </div>--}}
                                            </div>

                                            {{-- Kiểm tra máy chủ --}}
                                            @if( isset($server_data) && isset($server_id))
                                                <div class="col-md-12 left-right body-title-ct">
                                                    <div class="row marginauto">

                                                        <div class="col-md-12 text-left left-right">
                                                            <div class="row marginauto">
                                                                <div
                                                                    class="col-md-12 left-right body-title-detail-span-ct">
                                                                    <span>Server</span>
                                                                </div>
                                                                <div
                                                                    class="col-md-12 left-right body-title-detail-select-ct data-select-server">
                                                                    <select class="wide" name="server">
                                                                        <option value="">Chọn Server</option>
                                                                        @forelse($server_data as $k_server => $server)
                                                                            @if(!strpos($server_data[$k_server], '[DELETE]'))
                                                                                <option value="{{ $server_id[$k_server] }}">{{ $server_data[$k_server] }}</option>
                                                                            @endif
                                                                        @empty
                                                                        @endforelse
                                                                    </select>
                                                                </div>
                                                                <div class="col-m-12 server-error">

                                                                </div>
                                                            </div>


                                                        </div>

                                                    </div>
                                                </div>
                                            @endif
                                            @switch($data_params['filter_type'])
{{--                                                3 Dạng tiền tệ   --}}
{{--                                                4 Dạng chọn một --}}
{{--                                                5 Dạng chọn nhiều   --}}
{{--                                                6 Dạng chọn từ A->B (trong khoảng) --}}
{{--                                                7 Dạng nhập tiền để thanh toán  --}}
                                                @case('3')
                                                @break
                                                @case('4')

                                                @break
                                                @case('5')
                                                @break
                                                @case('6')
                                                @break
                                                @case('7')
                                                <div class="row marginauto">
                                                    <div class="col-md-12 left-right body-title-detail-span-ct">
                                                        <span>Nhập số tiền cần mua:</span>
                                                    </div>
                                                    <div class="col-md-12 left-right body-title-detail-select-ct data-select-server">
                                                        <input autocomplete="off" class="input-defautf-ct username" id="input_pack"
                                                               value="{{ $data_params['input_pack_min'] }}"
                                                               name="input_pack"
                                                               type="text"
                                                               placeholder="Số tiền"
                                                               numberic>
                                                        <span id="text-pack">
                                                            Số tiền thanh toán phải từ
                                                            <b style="font-weight:bold;">{{number_format($data_params['input_pack_min'])}}đ</b>
                                                            đến
                                                            <b style="font-weight:bold;">{{number_format($data_params['input_pack_max'])}}đ</b>
                                                        </span>
                                                    </div>
                                                    <div class="col-m-12 server-error">

                                                    </div>
                                                </div>
                                                <div class="row marginauto">
                                                    <div class="col-md-12 left-right body-title-detail-span-ct">
                                                        <span>Hệ số:</span>
                                                    </div>
                                                    <div class="col-md-12 left-right body-title-detail-select-ct data-select-server">
                                                        <input autocomplete="off" class="input-defautf-ct username" id="txt-discount" disabled>
                                                    </div>
                                                    <div class="col-m-12 server-error">

                                                    </div>
                                                </div>
                                                @break
                                                @default
                                            @endswitch
                                            <div class="col-md-12 left-right body-title-ct">
                                                <div class="row marginauto">

                                                    <div class="col-md-12 text-left left-right">
{{--                                                        <div class="row marginauto">--}}
{{--                                                            <div class="col-md-12 left-right body-title-detail-span-ct">--}}
{{--                                                                <span>Tùy chọn mở rộng</span>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="col-md-12 left-right">--}}
{{--                                                                <div class="row body-title-detail-checkbox-ct">--}}
{{--                                                                    <div--}}
{{--                                                                        class="col-auto body-title-detail-checkbox-col-ct">--}}
{{--                                                                        <label for="tuychon-01" class="input-ratio-ct">--}}
{{--                                                                            <ul>--}}
{{--                                                                                <li>Chơi cùng Booster+50.00%</li>--}}
{{--                                                                                <li class="checkbox-info-ct"><img--}}
{{--                                                                                        class="lazy"--}}
{{--                                                                                        src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/infor.png"--}}
{{--                                                                                        alt=""></li>--}}
{{--                                                                            </ul>--}}
{{--                                                                            <input id="tuychon-01" type="checkbox"--}}
{{--                                                                                   class="allgame" name="option"--}}
{{--                                                                                   value="on">--}}
{{--                                                                            <span--}}
{{--                                                                                class="input-ratio-checkmark-ct"></span>--}}
{{--                                                                        </label>--}}
{{--                                                                    </div>--}}

{{--                                                                    <div--}}
{{--                                                                        class="col-auto body-title-detail-checkbox-col-ct">--}}
{{--                                                                        <label for="tuychon-02" class="input-ratio-ct">--}}
{{--                                                                            <ul>--}}
{{--                                                                                <li>Tùy chọn vị trí+20.00%</li>--}}
{{--                                                                                <li class="checkbox-info-ct"><img--}}
{{--                                                                                        class="lazy"--}}
{{--                                                                                        src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/infor.png"--}}
{{--                                                                                        alt=""></li>--}}
{{--                                                                            </ul>--}}
{{--                                                                            <input id="tuychon-02" type="checkbox"--}}
{{--                                                                                   class="allgame" name="option"--}}
{{--                                                                                   value="on">--}}
{{--                                                                            <span--}}
{{--                                                                                class="input-ratio-checkmark-ct"></span>--}}
{{--                                                                        </label>--}}
{{--                                                                    </div>--}}

{{--                                                                    <div--}}
{{--                                                                        class="col-auto body-title-detail-checkbox-col-ct">--}}
{{--                                                                        <label for="tuychon-03" class="input-ratio-ct">--}}
{{--                                                                            <ul>--}}
{{--                                                                                <li>Đặt lịch cày</li>--}}
{{--                                                                                <li class="checkbox-info-ct"><img--}}
{{--                                                                                        class="lazy"--}}
{{--                                                                                        src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/infor.png"--}}
{{--                                                                                        alt=""></li>--}}
{{--                                                                            </ul>--}}
{{--                                                                            <input id="tuychon-03" type="checkbox"--}}
{{--                                                                                   class="allgame" name="option"--}}
{{--                                                                                   value="on">--}}
{{--                                                                            <span--}}
{{--                                                                                class="input-ratio-checkmark-ct"></span>--}}
{{--                                                                        </label>--}}
{{--                                                                    </div>--}}

{{--                                                                    <div--}}
{{--                                                                        class="col-auto body-title-detail-checkbox-col-ct">--}}
{{--                                                                        <label for="tuychon-04" class="input-ratio-ct">--}}
{{--                                                                            <ul>--}}
{{--                                                                                <li>Cày siêu tốc+35.00%</li>--}}
{{--                                                                                <li class="checkbox-info-ct"><img--}}
{{--                                                                                        class="lazy"--}}
{{--                                                                                        src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/infor.png"--}}
{{--                                                                                        alt=""></li>--}}
{{--                                                                            </ul>--}}
{{--                                                                            <input id="tuychon-04" type="checkbox"--}}
{{--                                                                                   class="allgame" name="option"--}}
{{--                                                                                   value="on">--}}
{{--                                                                            <span--}}
{{--                                                                                class="input-ratio-checkmark-ct"></span>--}}
{{--                                                                        </label>--}}
{{--                                                                    </div>--}}

{{--                                                                    <div--}}
{{--                                                                        class="col-auto body-title-detail-checkbox-col-ct">--}}
{{--                                                                        <label for="tuychon-05" class="input-ratio-ct">--}}
{{--                                                                            <ul>--}}
{{--                                                                                <li>Tùy chọn tướng+30.00%</li>--}}
{{--                                                                                <li class="checkbox-info-ct"><img--}}
{{--                                                                                        class="lazy"--}}
{{--                                                                                        src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/infor.png"--}}
{{--                                                                                        alt=""></li>--}}
{{--                                                                            </ul>--}}
{{--                                                                            <input id="tuychon-05" type="checkbox"--}}
{{--                                                                                   class="allgame" name="option"--}}
{{--                                                                                   value="on">--}}
{{--                                                                            <span--}}
{{--                                                                                class="input-ratio-checkmark-ct"></span>--}}
{{--                                                                        </label>--}}
{{--                                                                    </div>--}}

{{--                                                                    <div--}}
{{--                                                                        class="col-auto body-title-detail-checkbox-col-ct">--}}
{{--                                                                        <label for="tuychon-06" class="input-ratio-ct">--}}
{{--                                                                            <ul>--}}
{{--                                                                                <li>Chọn Booster</li>--}}
{{--                                                                                <li class="checkbox-info-ct"><img--}}
{{--                                                                                        class="lazy"--}}
{{--                                                                                        src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/infor.png"--}}
{{--                                                                                        alt=""></li>--}}
{{--                                                                            </ul>--}}
{{--                                                                            <input id="tuychon-06" type="checkbox"--}}
{{--                                                                                   class="allgame" name="option"--}}
{{--                                                                                   value="on">--}}
{{--                                                                            <span--}}
{{--                                                                                class="input-ratio-checkmark-ct"></span>--}}
{{--                                                                        </label>--}}
{{--                                                                    </div>--}}

{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="col-md-12 left-right body-title-ct">
{{--                                                <div class="row marginauto">--}}

{{--                                                    <div class="col-md-12 text-left left-right">--}}
{{--                                                        <div class="row marginauto">--}}
{{--                                                            <div class="col-md-12 left-right body-title-detail-span-ct">--}}
{{--                                                    <span>--}}
{{--                                                        <ul>--}}
{{--                                                            <li>Tùy chọn tướng</li>--}}
{{--                                                            <li class="option-info-ct"><img class="lazy"--}}
{{--                                                                                            src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/infor.png"--}}
{{--                                                                                            alt=""></li>--}}
{{--                                                        </ul>--}}
{{--                                                    </span>--}}
{{--                                                            </div>--}}
{{--                                                            <div--}}
{{--                                                                class="col-md-12 left-right body-title-detail-select-ct data-select-hero">--}}
{{--                                                                <select class="wide" name="select">--}}
{{--                                                                    <option value="">Ví dụ: Yasuyo</option>--}}
{{--                                                                    <option value="3">Vàng 4</option>--}}
{{--                                                                    <option value="4">Vàng 5</option>--}}
{{--                                                                    <option value="5">Vàng 6</option>--}}
{{--                                                                    <option value="5">Vàng 7</option>--}}
{{--                                                                </select>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="col-m-12 hero-error">--}}

{{--                                                            </div>--}}
{{--                                                        </div>--}}


{{--                                                    </div>--}}

{{--                                                </div>--}}
                                            </div>

                                            <div class="col-md-12 left-right">
                                                <div class="row body-title-detail-ct">
                                                    @if(!empty($send_name) && !empty($send_type))
                                                        @forelse($send_name as $k_send_name => $send_name_text)
                                                            @switch($send_type[$k_send_name])
                                                                @case('1')
                                                                @case('2')
                                                                @case('3')
                                                                <div class="col-auto detail-service-col text-left body-title-detail-col-ct">
                                                                    <div class="row marginauto">
                                                                        <div class="col-md-12 left-right body-title-detail-span-ct">
                                                                            <span>{{$send_name_text}}</span>
                                                                        </div>
                                                                        <div
                                                                            class="col-md-12 left-right body-title-detail-select-ct">
                                                                            <input autocomplete="off"
                                                                                   class="input-defautf-ct username"
                                                                                   name="username" type="text"
                                                                                   placeholder="{{$send_name_text}}">
                                                                        </div>
                                                                        <div class="col-md-12 left-right tk-error">

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @break
                                                                @case('5')
                                                                <div
                                                                    class="col-auto detail-service-col text-left body-title-detail-col-ct">
                                                                    <div class="row marginauto password-mobile">
                                                                        <div
                                                                            class="col-md-12 left-right body-title-detail-span-ct">
                                                                            <span>{{$send_name_text}}</span>
                                                                        </div>
                                                                        <div
                                                                            class="col-md-12 left-right body-title-detail-select-ct"
                                                                            style="position: relative">
                                                                            <input autocomplete="off" id="password"
                                                                                   name="password"
                                                                                   class="input-defautf-ct password"
                                                                                   type="password"
                                                                                   placeholder="{{$send_name_text}}">
                                                                            <div class="show-btn-password">
                                                                                <img class="lazy"
                                                                                     src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/eye-show.svg"
                                                                                     alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12 left-right pw-error">

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @break
                                                                @default
                                                            @endswitch
                                                        @empty
                                                        @endforelse
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-md-12 left-right body-title-ct">
                                                <div class="row marginauto">
                                                    <div class="col-md-12 text-left left-right">
                                                        <div class="row marginauto">
                                                            <div class="col-auto left-right body-title-detail-span-ct">
                                                                <span>Tổng:</span>
                                                            </div>
                                                            <div class="col-auto left-right body-title-detail-span-ct body-title-detail-span-right-ct">
                                                                <small id="txt-price">0 đ</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 left-right mobile- body-title-ct">
                                                <div class="row marginauto">
                                                    <div class="col-md-12 text-left left-right">
                                                        <button class="button-default-ct btn-data  media-web open-modal"
                                                                type="button">Thuê ngay
                                                        </button>
                                                        <button
                                                            class="button-default-ct button-next-step-one media-mobile"
                                                            type="button">Thuê ngay
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                        <div class="col-lg-7 col-12 body-container-detail-right-ct">

                            {{--                    Block 1           --}}
                            {{--                            <div class="row marginauto body-detail-header-right-ct media-web">--}}

                            {{--                                <div class="col-md-12 left-right">--}}
                            {{--                                    <div class="row marginauto">--}}
                            {{--                                        <div class="col-12 col-8 body-header-col-km-left-ct">--}}
                            {{--                                            <span>Khuyến mại đang diễn ra</span>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}

                            {{--                                <div class="col-md-12 left-right">--}}
                            {{--                                    <div class="row banner-detail-ct">--}}
                            {{--                                        <div class="col-md-12 text-left left-right">--}}
                            {{--                                            <img class="lazy" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/banner-detail.png" alt="">--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}

                            {{--                block 2           --}}
                            <div class="row marginauto body-detail-right-ct">

                                <div class="col-md-12 left-right">
                                    <div class="row marginauto">
                                        <div class="col-md-12 col-8 body-header-col-km-left-ct">
                                            <small>Chi tiết dịch vụ</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 left-right">
                                    <div class="row marginauto body-title-ct show-detail-service-ct">
                                        <div class="col-md-12 text-left left-right">
                                            <p>Chơi game được xem là món ăn tinh thần không thể thiếu được đối với giới
                                                trẻ hiện nay, đặc biệt là các game online
                                                hay game mobile với nhiều hình thức khác nhau như game chiến thuật, game
                                                đối kháng, game thẻ bài, gam kiếm hiệp hay
                                                game sinh tồn. Chính vì vậy, nhu cầu nạp game là không thể thiếu và</p>
                                            <p>Chơi game được xem là món ăn tinh thần không thể thiếu được đối với giới
                                                trẻ hiện nay, đặc biệt là các game online
                                                hay game mobile với nhiều hình thức khác nhau như game chiến thuật, game
                                                đối kháng, game thẻ bài, gam kiếm hiệp hay
                                                game sinh tồn. Chính vì vậy, nhu cầu nạp game là không thể thiếu và</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            {{--                block 3           --}}
                            <div class="row body-detail-right-ct mt-fix-20 mx-lg-auto">

                                <div class="col-md-12 left-right">
                                    <div class="row marginauto">
                                        <div class="col-md-12 col-8 body-header-col-km-left-ct">
                                            <small>Hướng dẫn thuê cày</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 left-right card--desc">
                                    <div class="row marginauto body-title-ct show-detail-caythue-ct-fix">
                                        <div class="col-md-12 text-left left-right content-video-in double-click content-video-in content-video-in-add">
                                            {!! @$data->content !!}
                                        </div>
                                        <div class="col-md-12 left-right text-center js-toggle-content">
                                            <div class="view-more">
                                                <a href="javascript:void(0)" class="global__link__default">Xem thêm<i
                                                        class="__icon__default --sm__default --link__default ml-1"
                                                        style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/icons/arrow-down.png)"></i></a>
                                            </div>
                                            <div class="view-less">
                                                <a href="javascript:void(0)" class="global__link__default">Thu gọn<i
                                                        class="__icon__default --sm__default --link__default ml-1"
                                                        style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/icons/iconright.png)"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            @include('frontend.pages.service.widget.__related')

            <div class="modal fade login show default-Modal" id="successModal" aria-modal="true">
                <div class="modal-dialog modal-md modal-dialog-centered login animated">
                    <!--        <div class="image-login"></div>-->
                    <div class="modal-content">
                        <div class="modal-header modal-header-success-ct">
                            <div class="row marginauto modal-header-success-row-ct justify-content-center">
                                <div class="col-md-12 text-center">
                                    <span>Gửi yêu cầu thuê thành công</span>
                                </div>
                            </div>
                        </div>

                        <div class="modal-body modal-body-success-ct">
                            <div class="row marginauto justify-content-center">
                                <div class="col-auto">
                                    <img class="lazy"
                                         src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/group.png"
                                         alt="">
                                </div>
                            </div>
                            <div class="row marginauto modal-body-span-success-ct justify-content-center">
                                <div class="col-md-12 text-center">
                                    <span>Yêu cầu thuê đã được gửi đến </span><small>Shop Cày Thuê</small>
                                </div>
                                <div class="col-md-12 text-center">
                                    <span>Bạn vui lòng kiểm tra Email để xác nhận nha!</span>
                                </div>
                            </div>
                            <div class="row marginauto justify-content-center modal-footer-success-ct">
                                <div class="col-md-6 col-6 modal-footer-success-col-left-ct">
                                    <div class="row marginauto modal-footer-success-row-not-ct">
                                        <div class="col-md-12 left-right">
                                            <a href="/" class="button-not-bg-ct"><span>Về trang chủ</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-6 modal-footer-success-col-right-ct">
                                    <div class="row marginauto modal-footer-success-row-ct">
                                        <div class="col-md-12 left-right">
                                            <a href="/" class="button-bg-ct"><span>Hỗ Trợ</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade login show order-modal" id="openOrder" aria-modal="true">

                <div class="modal-dialog step-tab-panel modal-lg modal-dialog-centered login animated">
                    <!--        <div class="image-login"></div>-->
                    <div class="modal-content">
                        <div class="modal-header p-0" style="border-bottom: 0">
                            <div class="row marginauto modal-header-order-ct">
                                <div class="col-12 span__donhang text-center" style="position: relative">
                                    <span>XÁC NHẬN THANH TOÁN</span>
                                    <img class="lazy img-close-ct close-modal-default"
                                         src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/close.png"
                                         alt="">
                                </div>
                            </div>

                        </div>

                        <div class="modal-body modal-body-order-ct">
                            <div class="row marginauto">

                                <div class="col-md-12 left-right title-order-ct">
                                    <span>Thông tin yêu cầu</span>
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
                                            <div class="row marginauto background-order-row-ct">
                                                <div class="col-auto left-right background-order-col-left-ct">
                                                    <span>Tài khoản</span>
                                                </div>
                                                <div class="col-auto left-right background-order-col-right-ct">
                                                    <small>Nam Hải</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 left-right padding-order-ct">
                                    <div class="row marginauto">
                                        <div class="col-md-12 left-right background-order-ct">
                                            <div class="row marginauto background-order-body-row-ct">
                                                <div class="col-auto left-right background-order-col-left-ct">
                                                    <span>Game</span>
                                                </div>
                                                <div class="col-auto left-right background-order-col-right-ct">
                                                    <img class="lazy"
                                                         src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/mobilegame.png"
                                                         alt="">
                                                </div>
                                            </div>

                                            <div class="row marginauto background-order-body-row-ct">
                                                <div class="col-auto left-right background-order-col-left-ct">
                                                    <span>Gói</span>
                                                </div>
                                                <div class="col-auto left-right background-order-col-right-ct">
                                                    <small>Vàng-Kim Cương</small>
                                                </div>
                                            </div>

                                            <div class="row marginauto background-order-body-row-ct">
                                                <div class="col-auto left-right background-order-col-left-ct">
                                                    <span>Chiết khấu</span>
                                                </div>
                                                <div class="col-auto left-right background-order-col-right-ct">
                                                    <small>3%</small>
                                                </div>
                                            </div>

                                            <div class="row marginauto background-order-body-bottom-ct">
                                                <div class="col-auto left-right background-order-col-left-ct">
                                                    <span>Báo giá</span>
                                                </div>
                                                <div class="col-auto left-right background-order-col-right-ct">
                                                    <small>100.000 đ</small>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-12 left-right padding-order-ct">
                                    <div class="row marginauto">
                                        <div class="col-md-12 left-right background-order-ct">

                                            <div class="row marginauto background-order-body-row-ct">
                                                <div class="col-auto left-right background-order-col-left-ct">
                                                    <span>Phương thức thanh toán</span>
                                                </div>
                                                <div class="col-auto left-right background-order-col-right-ct">
                                                    <small>Tài khoản Shopbrand</small>
                                                </div>
                                            </div>

                                            <div class="row marginauto background-order-body-bottom-ct">
                                                <div class="col-auto left-right background-order-col-left-ct">
                                                    <span>Phí thanh toán</span>
                                                </div>
                                                <div class="col-auto left-right background-order-col-right-ct">
                                                    <small>Miễn phí</small>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-12 left-right padding-order-ct">
                                    <div class="row marginauto">
                                        <div class="col-md-12 left-right background-order-ct">
                                            <div class="row marginauto background-order-row-ct">
                                                <div class="col-auto left-right background-order-col-left-ct">
                                                    <span>Tài khoản</span>
                                                </div>
                                                <div class="col-auto left-right background-order-col-right-ct">
                                                    <span>97.000 đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 left-right padding-order-footer-ct">
                                    <div class="row marginauto">
                                        <div class="col-md-12 left-right">
                                            <button class="button-default-nick-ct openSuccess" type="button">Xác nhận
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </fieldset>
        <fieldset id="fieldset-two">

            <section>
                <div class="container container-fix banner-mobile-container-ct">
                    <div class="row marginauto banner-mobile-row-ct">
                        <div class="col-auto left-right" style="width: 10%">
                            <img class="lazy previous-step-one"
                                 src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/back.png" alt="">
                        </div>

                        <div class="col-auto left-right banner-mobile-span text-center" style="width: 80%">
                            <h3>Cày Thuê</h3>
                        </div>
                        <div class="col-auto left-right" style="width: 10%">
                        </div>
                    </div>

                </div>
            </section>

            <section class="max-header-fix">
                <div class="row marginauto" style="padding: 12px 16px">

                    <div class="col-md-12 left-right title-order-ct">
                        <span>Thông tin yêu cầu</span>
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
                                <div class="row marginauto background-order-row-ct">
                                    <div class="col-auto left-right background-order-col-left-ct">
                                        <span>Tài khoản</span>
                                    </div>
                                    <div class="col-auto left-right background-order-col-right-ct">
                                        <small>Nam Hải</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 left-right padding-order-ct">
                        <div class="row marginauto">
                            <div class="col-md-12 left-right background-order-ct">
                                <div class="row marginauto background-order-body-row-ct">
                                    <div class="col-auto left-right background-order-col-left-ct">
                                        <span>Game</span>
                                    </div>
                                    <div class="col-auto left-right background-order-col-right-ct">
                                        <img class="lazy"
                                             src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/mobilegame.png"
                                             alt="">
                                    </div>
                                </div>

                                <div class="row marginauto background-order-body-row-ct">
                                    <div class="col-auto left-right background-order-col-left-ct">
                                        <span>Gói</span>
                                    </div>
                                    <div class="col-auto left-right background-order-col-right-ct">
                                        <small>Vàng-Kim Cương</small>
                                    </div>
                                </div>

                                <div class="row marginauto background-order-body-row-ct">
                                    <div class="col-auto left-right background-order-col-left-ct">
                                        <span>Chiết khấu</span>
                                    </div>
                                    <div class="col-auto left-right background-order-col-right-ct">
                                        <small>3%</small>
                                    </div>
                                </div>

                                <div class="row marginauto background-order-body-bottom-ct">
                                    <div class="col-auto left-right background-order-col-left-ct">
                                        <span>Báo giá</span>
                                    </div>
                                    <div class="col-auto left-right background-order-col-right-ct">
                                        <small>100.000 đ</small>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-12 left-right padding-order-ct">
                        <div class="row marginauto">
                            <div class="col-md-12 left-right background-order-ct">

                                <div class="row marginauto background-order-body-row-ct">
                                    <div class="col-auto left-right background-order-col-left-ct">
                                        <span>Phương thức thanh toán</span>
                                    </div>
                                    <div class="col-auto left-right background-order-col-right-ct">
                                        <small>Tài khoản Shopbrand</small>
                                    </div>
                                </div>

                                <div class="row marginauto background-order-body-bottom-ct">
                                    <div class="col-auto left-right background-order-col-left-ct">
                                        <span>Phí thanh toán</span>
                                    </div>
                                    <div class="col-auto left-right background-order-col-right-ct">
                                        <small>Miễn phí</small>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="col-md-12 left-right padding-order-ct">
                        <div class="row marginauto">
                            <div class="col-md-12 left-right background-order-ct">
                                <div class="row marginauto background-order-row-ct">
                                    <div class="col-auto left-right background-order-col-left-ct">
                                        <span>Tài khoản</span>
                                    </div>
                                    <div class="col-auto left-right background-order-col-right-ct">
                                        <span>97.000 đ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 left-right padding-order-footer-mobile-ct fixcungbuttonmobile">
                        <div class="row marginauto" style="padding: 12px 16px">
                            <div class="col-md-12 left-right">
                                <button class="button-default-ct button-next-step-two" type="button">Xác nhận</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <input type="hidden" name="previous" class="input-back-step-two" value="Trang trước"/>

        </fieldset>
    </form>


    <script src="/assets/frontend/{{theme('')->theme_key}}/js/cay-thue/cay-thue-detail.js?v={{time()}}"></script>

@endsection



