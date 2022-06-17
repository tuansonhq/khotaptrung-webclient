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
                <a href="/dich-vu-da-mua" class="breadcrum--link">Dịch vụ đã mua</a>
            </li>
            <li class="breadcrum--item">
                <a href="/dich-vu-da-mua-{{$data->id}}" class="breadcrum--link">Chi tiết dịch vụ</a>
            </li>
        </ul>
        <div class="row m-0 ">
            {{--navbar--}}
            @include('theme_3.frontend.widget.__navbar__profile')
            {{--content--}}
            <div class="col-12 col-lg-9 p-0 order--detail">
                <div class="card--mobile__title">
                    <a href="/dich-vu-da-mua" class="card--back">
                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/back.png" alt="">
                    </a>
                    <h4>Chi tiết đơn hàng</h4>
                </div>
                <div class="card --custom">
                    <div class="card--header pr-2">
                        <h4 class="card--header__title hidden-mobile">
                            Chi tiết đơn hàng
                        </h4>
                    </div>
                    <div class="card--body">
                        @if(isset($data->itemconfig_ref->params))
                        <div class="row">
                            <div class="col-12 col-lg-6 p-0 px-lg-3">
                                <div class="card--rise --secondary">
                                    <div class="card--rise__title">
                                        Chi tiết yêu cầu <span class="order__id">#{{$data->id}}</span>
                                    </div>
                                    @if(isset($data->tranid))
                                    <div class="card--rise__title">
                                        Mã giao dịch SMS: <span class="order__id">#{{$data->tranid}}</span>
                                    </div>
                                    @endif
                                    <div class="order__attr">
                                        <div class="order--name__attr">
                                            Tên dịch vụ
                                        </div>
                                        <div class="order--value__attr">
                                            <a href="/dich-vu/{{(isset($data->itemconfig_ref->slug)?$data->itemconfig_ref->slug:"Lỗi")}}">{{$data->itemconfig_ref->title}}</a>
                                        </div>
                                    </div>
                                    <div class="order__attr">
                                        <div class="order--name__attr">
                                            Công việc
                                        </div>
                                        <div class="order--value__attr">
                                        @if(!empty($data->workname) && count($data->workname)>0)
                                            @foreach( $data->workname as $index=> $aWorkName)
                                                 {{$aWorkName->title }} : {{ str_replace(',','.',number_format($aWorkName->unit_price)) }} đ
                                            @endforeach
                                        @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @php
                                $send_name=\App\Library\HelpersDecode::DecodeJson('send_name',$data->itemconfig_ref->params);
                                $send_type=\App\Library\HelpersDecode::DecodeJson('send_type',$data->itemconfig_ref->params);
                                $server_data=\App\Library\HelpersDecode::DecodeJson('server_data',$data->itemconfig_ref->params);
                            @endphp
                            <div class="col-12 col-lg-6 px-1 pr-lg-3">
                                <div class="card--rise --gray">
                                    <div class="card--rise__title">
                                        Thông tin đính kèm
                                    </div>
                                    @if(\App\Library\HelpersDecode::DecodeJson('server_mode',$data->itemconfig_ref->params)==1)
                                        <div class="order__attr">
                                            <div class="card__attr">
                                                <div class="card--value__attr">
                                                    Server:<span class="card__info">{{isset($server_data[$data->position])?$server_data[$data->position]:""}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if(!empty($send_name)&& count($send_name)>0)

                                        @foreach( $send_name as $index=> $aSendName)

                                        @endforeach

                                    @endif
                                    <div class="order__attr">
                                        <div class="card__attr">
                                            <div class="card--value__attr">
                                                Tài khoản Garena:<span class="card__info">mrt_2810</span>
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
                                                Mật khẩu Garena:<span class="card__info">Xuantan_2810</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card--rise --gray">
                                    <div class="card--rise__title">
                                        Tiến độ
                                    </div>
                                    <ul class="order--timelines">
                                        <li class="order--timeline">
                                            <div class="order--status">
                                                Đang chờ
                                            </div>
                                            <div class="order--date">
                                                18/10/2021 - 04:20
                                            </div>
                                        </li>
                                        <li class="order--timeline">
                                            <div class="order--status">
                                                Đang chờ
                                            </div>
                                            <div class="order--date">
                                                18/10/2021 - 04:20
                                            </div>
                                        </li>
                                        <li class="order--timeline">
                                            <div class="order--status">
                                                Đang chờ
                                            </div>
                                            <div class="order--date">
                                                18/10/2021 - 04:20
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card--rise --gray mb-4">
                                    <div class="card--rise__title">
                                        Trao đổi
                                    </div>
                                    <div class="card__attr">
                                        <div class="card--value__attr">
                                            Chưa có nội dung
                                        </div>
                                    </div>
                                </div>
                                <div class="mx-2 mx-lg-0">
                                    <a href="/nhan-tin" class="btn -primary btn-big">Nhắn tin</a>
                                </div>
                            </div>
                        </div>
                        @else
                            <div class="row">
                                <div class="col-12 col-lg-6 p-0 px-lg-3">
                                    <div class="card--rise --secondary">
                                        <div class="card--rise__title">
                                            <span class="order__id">Không có dữ liệu</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>


        <script>
            $(document).ready(function (e) {
                $('.add-active_dich-vu-da-mua-2-1').addClass('active')
            })
        </script>
@endsection

