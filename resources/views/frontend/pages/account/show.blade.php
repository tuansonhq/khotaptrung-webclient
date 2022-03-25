@extends('frontend.layouts.master')
@section('seo_head')
    @include('frontend.widget.__seo_head',with(['data'=>$data]))
@endsection
@section('content')
    <div class="" style="margin-top: 15px">
        @if ($message = Session::get('success'))
            <div class="container">
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                    {{$message}}
                </div>
            </div>
        @endif
        @if($messages=$errors->all())
            <div class="container">
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                    {{$messages[0]}}
                </div>
            </div>

        @endif

    </div>

    <div class="shop_product_detail">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                    <div class="shop_product_header">
                        <p>#{{ $data->id }}</p>
                        <span>{{ $data_category->title }}̉</span>
                    </div>
                </div>
                <div class="col-md-12 shop_product_info_mobile">
                    <a  data-fancybox="gallerycoverDetail" href="https://shopas.net/storage/images/hyi1T9DGM1_1645949761.jpg">
                        <img src="https://shopas.net/storage/images/hyi1T9DGM1_1645949761.jpg" alt="">
                    </a>
                    <div class="shop_product_info">
                        <div class="shop_product_info_divider">
                            <i class="fas fa-circle"></i>
                        </div>
                        <div class="row">

                            @include('frontend.pages.account.widget.account_load_attribute')

                        </div>
                        <div class="shop_product_info_divider">
                            <i class="fas fa-circle"></i>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                    <div class="shop_product_price">
                        <div>
                            {{ formatPrice($data->price_old) }} CARD
                        </div>
                        <div>
                            {{ formatPrice($data->price) }} ATM
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                    <div class="shop_product_header">
                        <button type="button" class="mustcard btn c-btn btn-lg c-theme-btn c-font-uppercase c-font-bold c-btn-square m-t-20 buyacc" data-id="{{ $data->id }}">
                            Mua ngay
                        </button>
                        <a href="/recharge" class="btn c-btn btn-lg c-bg-green-4 c-font-white c-font-uppercase c-font-bold c-btn-square m-t-20">ATM - Ví điện tử</a>
                        <a href="/nap-the" class="btn c-btn btn-lg c-bg-green-4 c-font-white c-font-uppercase c-font-bold c-btn-square m-t-20">Nạp thẻ cào</a>
                    </div>
                </div>
            </div>
            <div class="shop_product_info shop_product_info_desktop">
                <div class="shop_product_info_divider">
                    <i class="fas fa-circle"></i>
                </div>
                <div class="row">
                    @if(!is_null($dataAttribute) && count($dataAttribute)>0)

                        @foreach($dataAttribute as $index=>$att)

                                @if($att->position == 'select')
                                @if(!is_null($att->childs) && count($att->childs))
                                    @foreach($att->childs as $att_value)@foreach($data->groups as $att_data)

                                            @if($att_data->id == $att_value->id)
                                                <div class="col-md-4 shop_product_info_variant">
                                                    <p>{{$att->title}}: <span>{{$att_data->title}}</span></p>
                                                </div>
                                            @endif
                                        @endforeach
                                    @endforeach
                                @endif
                                @elseif($att->position == 'text')
                                    <div class="col-md-4 shop_product_info_variant">
                                        <p>{{$att->title}}: <span>Có</span></p>
                                    </div>
                                @endif

                        @endforeach
                    @endif
                </div>
                <div class="shop_product_info_divider">
                    <i class="fas fa-circle"></i>
                </div>
            </div>
            <div class="shop_product_post">
                <div class="div">
                    @foreach(explode('|',$data->image_extension) as $val)
                        <a data-fancybox="gallerycoverDetail" href="https://media-tt.nick.vn/{{ $val }}">
                            <img src="https://media-tt.nick.vn/{{ $val }}" alt="">
                        </a>
                    @endforeach
                </div>
                <div class="pt-3">
                    <button type="button" class="mustcard btn c-btn btn-lg c-theme-btn c-font-uppercase c-font-bold c-btn-square m-t-20 buyacc" data-id="{{ $data->id }}">Mua ngay</button>
                </div>
            </div>

            <div class="shop_product_another pt-3">
                <div class="c-content-title-1">
                    <h3 class="c-center c-font-uppercase c-font-bold title__tklienquan">Tài khoản liên quan</h3>
                    <div class="c-line-center c-theme-bg"></div>
                </div>

                @include('frontend.widget.__account__category',['sliders',$sliders])

            </div>
        </div>
    </div>

    <div class="modal fade" id="LoadModal" role="dialog" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="loader" style="text-align: center"><img src="/assets/frontend/images/loader.gif" style="width: 50px;height: 50px;display: none"></div>
            <div class="modal-content">
            </div>
        </div>
    </div>

    @if ($content = Session::get('content'))
        <div class="modal fade" id="noticeAfterModal" style="display: none;" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Thông báo</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>

                    <div class="modal-body" style="font-family: helvetica, arial, sans-serif;">
                        {!!$content!!}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#noticeAfterModal').modal('show');
            });
        </script>
    @endif

    <script src="/assets/frontend/js/account/buyacc.js"></script>
@endsection

