@extends('frontend.layouts.master')
@section('seo_head')
    @include('frontend.widget.__seo_head',with(['data'=>$data]))
@endsection
@section('content')
    <script src="/assets/frontend/rank/js/rslider.js"></script>
    <script src="/assets/frontend/rank/js/select-chosen.js" type="text/javascript"></script>
    <link href="/assets/frontend/rank/css/style.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="/assets/frontend/rank/css/style.css">
    <link rel="stylesheet" type="text/css" href="/assets/frontend/rank/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="/assets/frontend/rank/css/chosen.css">
    <style type="text/css">
        @media only screen and (max-width: 640px) {
            .float_mb {
                float: left;
            }
        }
        .pay{
            display: block;
            background: #fb236a;
            border-radius: 17px;
            text-align: center;
            max-width: 118px;
            height: 30px;
            line-height: 30px;
            color: #fff;
            cursor: pointer;
        }
    </style>
    <script type="text/javascript">
        $(".pay").click(function(){
            $("#btnPurchase").click();
        })
    </script>
    <div class="c-layout-page">
        <div class="news_breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-auto tintuc-auto pr-0">
{{--                        <div class="news_breadcrumbs_title news_breadcrumbs_title__show"><a href="/dich-vu">Dịch vụ</a></div>--}}
                    </div>
                    <div class="col-lg-10 col-md-12 ml-lg-auto">
                        <ul class="news_breadcrumbs_theme news_breadcrumbs_theme__show">
                            <li><a href="/" class="news_breadcrumbs_theme_trangchu news_breadcrumbs_theme_trangchu_a">Trang chủ</a></li>
                            <li>/</li>
                            <li><a href="/dich-vu" class="news_breadcrumbs_theme_tintuc_a"><p class="news_breadcrumbs_theme_tintuc">Dịch vụ</p></a></li>
                            <li>/</li>
                            <li class="news_breadcrumbs_theme__li"><a href="javascript:void(0)" class="news_breadcrumbs_theme_title_a"><p class="news_breadcrumbs_theme_title">{{ $data->title }}</p></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- BEGIN: PAGE CONTENT -->
        <div class="c-content-box c-size-lg c-overflow-hide c-bg-white font-roboto">
            <div class="container">

            </div>
            <div class="text-center showcontent">
                <h2 style="font-size: 30px;font-weight: bold;text-transform: uppercase">DỊCH VỤ {{ $data->title }}</h2>
                <div class="row d-sm-none  d-md-none  d-lg-none text-center">
                    <div class="col-md-12">
                        <p style="margin-top: 15px;font-size: 23px;text-align: center" class="bb"><i class="fa fa-server" aria-hidden="true"></i> <a href="/dich-vu/{{ $data->groups[0]->slug }}" style="color:#32c5d2">Ngọc rồng</a></p>
                    </div>
                </div>
            </div>

{{--            Tính toán  --}}

            <form method="POST" action="/dich-vu/{{ $data->id }}/purchase" accept-charset="UTF-8" class="purchaseForm" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="container detail-service">
                    <div class="row">
                        <div class="col-md-7" style="margin-bottom:20px;">
                            <div class="row service-info">
                                <div class="col-md-5 hidden-xs hidden-sm">
                                    <div class="row">
                                        <div class="news_image">
                                            <img src="https://media-tt.nick.vn/{{ $data->image }}" alt="Bán vàng">
                                        </div>
                                    </div>
                                    <div class="row__face">
                                        <p style="margin-top: 15px" class="bb"><i class="fas fa-calendar-check" aria-hidden="true"></i> {{ $data->title }}</p>
                                        <p style="margin-top: 15px" class="bb"><i class="fas fa-server" aria-hidden="true"></i> <a class="class_a_not" href="/dich-vu/{{ $data->groups[0]->slug }}" style="color:#32c5d2">{{ $data->groups[0]->title }}</a></p>
                                    </div>
                                </div>
                                <div class="col-md-7">
{{--                                    Kiểm tra máy chủ     --}}
                                @if(\App\Library\HelpersDecode::DecodeJson('server_mode',$data->params) == "1")
                                    @php
                                        $server_data=\App\Library\HelpersDecode::DecodeJson('server_data',$data->params);
                                        $server_id = \App\Library\HelpersDecode::DecodeJson('server_id',$data->params);
                                    @endphp
                                    <span class="mb-15 control-label bb">Chọn máy chủ:</span>
                                    @if(!empty($server_data))
{{--                                        @dd($server_data)--}}
                                        <div class="mb-15">
                                            <select name="server[]" class="server-filter form-control t14" style="">
                                                @for($i = 0; $i < count($server_data); $i++)
                                                    @if((strpos($server_data[$i], '[DELETE]') === false))
                                                        <option value="{{$server_id[$i]}}">{{$server_data[$i]}}  </option>
                                                    @endif
                                                @endfor
                                            </select>
                                        </div>
                                    @endif
                                @endif
                                {{--                                dich vu may chu khac    --}}
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
                                        <span style="font-size: 14px;">Số tiền thanh toán phải từ <b style="font-weight:bold;">{{number_format(\App\Library\HelpersDecode::DecodeJson('input_pack_min',$data->params))}}đ</b>  đến <b style="font-weight:bold;">{{number_format(\App\Library\HelpersDecode::DecodeJson('input_pack_max',$data->params))}}đ</b> </span>
                                    </div>
                                    <span class="mb-15 control-label bb">Hệ số:</span>
                                    <div class="mb-15">
                                        <input type="text" id="txtDiscount" class="form-control t14" placeholder="" value="" readonly="">
                                    </div>
                                @elseif(\App\Library\HelpersDecode::DecodeJson('filter_type',$data->params) == "5") {{--//dạng chọn nhiều--}}
                                    <span class="mb-15 control-label bb">{{\App\Library\HelpersDecode::DecodeJson('filter_name',$data->params)}}:</span>
                                    <div class="simple-checkbox s-filter">
                                        @php
                                            $name=\App\Library\HelpersDecode::DecodeJson('name',$data->params);
                                            $price=\App\Library\HelpersDecode::DecodeJson('price',$data->params);
                                        @endphp
                                        @if(!empty($name))
                                            @for ($i = 0; $i < count($name); $i++)
                                                @if($name[$i]!=null)
                                                    <p><input value="{{$i}}" type="checkbox" id="{{$i}}">
                                                        <label for="{{$i}}">{{$name[$i]}}{{isset($price[$i])? " - ".number_format($price[$i]). " VNĐ":""}}</label>
                                                    </p>
                                                @endif

                                            @endfor
                                        @endif
                                    </div>
                                @elseif(\App\Library\HelpersDecode::DecodeJson('filter_type',$data->params) =="6") {{--//dạng chọn a->b--}}

                                @endif

                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">

                            <div class="row emply-btns">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class=" emply-btns text-center">
                                        <input type="hidden" name="selected" value="">
                                        <input type="hidden" name="server">
                                        <a id="txtPrice" style="font-size: 20px;font-weight: bold;text-decoration: none" class="">Tổng: 0 Xu</a>
                                        <button id="btnPurchase" type="button" style="font-size: 20px;" class="followus"><i class="fa fa-credit-card" aria-hidden="true"></i> Thanh toán</button>
                                    </div>
                                </div>
                            </div>

                            <div class="row emply-btns box-body" style="color: #505050;padding:20px;line-height: 2;margin-top: 30px">
                                {!! $data->description !!}
                            </div>

                        </div>
                    </div>
                    @if(\App\Library\HelpersDecode::DecodeJson('filter_type',$data->params) =="6") {{--//dạng chọn a->b--}}

                    <div class="row">
                        <div class="col-md-12 float_mb">
                            <script src="/assets/frontend/rank/js/rslider.js"></script>
                            <script src="/assets/frontend/rank/js/select-chosen.js" type="text/javascript"></script>
                            <link href="/assets/frontend/rank/css/style.css" rel="stylesheet" type="text/css"/>
                            <link rel="stylesheet" type="text/css" href="/assets/frontend/rank/css/style.css">
                            <link rel="stylesheet" type="text/css" href="/assets/frontend/rank/css/responsive.css">
                            <link rel="stylesheet" type="text/css" href="/assets/frontend/rank/css/chosen.css">
                            <span class="mb-15 control-label bb">{{\App\Library\HelpersDecode::DecodeJson('filter_name',$data->params)}}:</span>

                            <div class="range_slider" style="">
                                <div class="nstSlider" data-range_min="0" data-cur_min="0">
                                    <div class="bar" ></div>
                                    <div class="leftGrip"></div>
                                    <div class="rightGrip"></div>
                                </div>
                            </div>
                            @php
                                $name=\App\Library\HelpersDecode::DecodeJson('name',$data->params);
                                $price=\App\Library\HelpersDecode::DecodeJson('price',$data->params);
                            @endphp
                            <div class="row service-choice">
                                <div class="col-sm-6">
                                    <h5>Từ</h5>
                                    <div class="dropdown-field from-field">
                                        <select class="from-chosen" name="rank_from">
                                            @if(!empty($name))
                                                @for ($i = 0; $i < count($name)-1; $i++)
                                                    @if($name[$i]!=null)
                                                        <option value="{{ $i }}">{{$name[$i]}}</option>
                                                    @endif
                                                @endfor
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="clear-fix"></div>
                                    <h5>đến</h5>
                                    <div class="dropdown-field to-field">
                                        <select class="to-chosen" name="rank_to">
                                            @if(!empty($name))
                                                @for ($i = 1; $i < count($name); $i++)
                                                    @if($name[$i]!=null)
                                                        <option value="{{ $i }}">{{$name[$i]}}</option>
                                                    @endif
                                                @endfor
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="container">
                                <div class="job-wide-devider">
                                    {{--postion-bot--}}

                                    @if(isset($bot))
                                        <div class="row">
                                            <div class="col-lg-12 column">
                                                <div class="job-details">
                                                    @if($data->id==ID_NROCOIN)
                                                        <h2 style="margin-bottom: 23px;font-size: 20px;font-weight: bold;text-transform: uppercase;float: left">Vị trí <span style="font-size:14px;margin-top: 8px;margin-left:5px;font-weight:bold;">(Mặc định vách núi kakalot khu 51 và 52)</span></h2>
                                                    @elseif($data->id==ID_LANGLACOIN)
                                                        <h2 style="margin-bottom: 23px;font-size: 20px;font-weight: bold;text-transform: uppercase;float: left">Vị trí <span style="font-size:14px;margin-top: 8px;margin-left:5px;font-weight:bold;">(Mặc định làng lá khu 4 gần Trưởng Làng)</span></h2>
                                                    @elseif($data->id==ID_NINJAXU)
                                                        <h2 style="margin-bottom: 23px;font-size: 20px;font-weight: bold;text-transform: uppercase;float: left">Vị trí <span style="font-size:14px;margin-top: 8px;margin-left:5px;font-weight:bold;">(Mặc định tone 17)</span></h2>
                                                    @else

                                                        <h2 style="margin-bottom: 23px;font-size: 20px;font-weight: bold;text-transform: uppercase;float: left">Vị trí</h2>
                                                    @endif
                                                    <div class="table-bot m_datatable m-datatable m-datatable--default m-datatable--loaded">
                                                        <table class="table table-bordered m-table m-table--border-brand m-table--head-bg-brand">
                                                            <thead class="m-datatable__head">
                                                            <tr class="m-datatable__row">
                                                                <th style="" class="m-datatable__cell">
                                                                    Server
                                                                </th>
                                                                <th class="m-datatable__cell">
                                                                    Nhân vật
                                                                </th>
                                                                <th style="" class="m-datatable__cell">
                                                                    Khu vực
                                                                </th>
                                                                <th style="" class="m-datatable__cell">
                                                                    Trạng thái
                                                                </th>
                                                            </tr>
                                                            </thead>
                                                            <tbody class="m-datatable__body-bot">
                                                            @forelse($bot as $abot)
                                                                <tr>
                                                                    <td>{{$abot->server}}</td>
                                                                    <td>{{$abot->uname}}</td>
                                                                    <td>{{$abot->zone}}</td>
                                                                    <td>
                                                                        @if(time()-strtotime($abot->updated_at) > 30 )
                                                                            <span style="color:red;font-weight: bold">[OFFLINE]</span>
                                                                        @else
                                                                            <span style="color:#2fa70f;font-weight: bold">[ONLINE]</span>
                                                                        @endif
                                                                    </td>
                                                                </tr>

                                                            @empty
                                                            @endforelse
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    {{--end postion-bot--}}

                                    {{--mô tả--}}
                                    @if($data->content!="")
                                        <div class="row">
                                            <div class="col-lg-12 column">
                                                <div class="job-details">
                                                    <h2 style="margin-bottom: 23px;font-size: 20px;font-weight: bold;text-transform: uppercase;">Mô tả</h2>
                                                    <div class="article-content">
                                                        {!! $data->content  !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    {{-- END mô tả--}}
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="json_rank" name="custId" value="{{ json_encode($data) }}">
                    </div>
                    @endif
                </div>

                <div class="modal fade" id="homealert" role="dialog" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="loader" style="text-align: center"><img src="/assets/frontend/images/loader.gif" style="width: 50px;height: 50px;display: none"></div>
                        <div class="modal-content">

                            <div class="modal-header">
                                <h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Xác nhận thông tin thanh toán</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                @php
                                    $send_name=\App\Library\HelpersDecode::DecodeJson('send_name',$data->params);
                                    $send_type=\App\Library\HelpersDecode::DecodeJson('send_type',$data->params);
                                @endphp
                                @if(!empty($send_name)&& count($send_name)>0)

                                    @for ($i = 0; $i < count($send_name); $i++)
                                        @if($send_name[$i]!=null)
                                            <span class="mb-15 control-label bb">{{$send_name[$i]}}:</span>
                                            {{--check trường của sendname--}}
                                            @if($send_type[$i]==1 || $send_type[$i]==2||$send_type[$i]==3)
                                                <div class="mb-15">
                                                    <input type="text" required name="customer_data{{$i}}" class="form-control t14 " placeholder="{{$send_name[$i]}}" value="">
                                                </div>

                                            @elseif($send_type[$i]==4)
                                                <div class="mb-15">
                                                    <input type="file" required accept="image/*" class="form-control" name="customer_data{{$i}}" placeholder="{{$send_name[$i]}}">
                                                </div>
                                            @elseif($send_type[$i]==5)
                                                <div class="mb-15">
                                                    <input type="password" required class="form-control" name="customer_data{{$i}}" placeholder="{{$send_name[$i]}}">
                                                </div>
                                            @elseif($send_type[$i]==6)
                                                @php
                                                    $send_data=\App\Library\HelpersDecode::DecodeJson('send_data'.$i,$data->params);
                                                @endphp
                                                <div class="mb-15">
                                                    <select name="customer_data{{$i}}" required class="mb-15 control-label bb">
                                                        @if(!empty($send_data))
                                                            @for ($sn = 0; $sn < count($send_data); $sn++)
                                                                <option value="{{$sn}}">{{$send_data[$sn]}}</option>
                                                            @endfor
                                                        @endif
                                                    </select>
                                                </div>
                                            @endif

                                        @endif
                                    @endfor
                                @else
                                    <p> Bạn thực sự muốn thanh toán?</p>
                                @endif
                            </div>
                            <div class="modal-footer">
                                @if(!App\Library\AuthCustom::check())
                                    <a class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold" href="/login">Đăng nhập</a>
                                @else
                                    @if(App\Library\AuthCustom::user()->balance < $data->price)
                                        <a class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold" href="/nap-the-cham" id="d3">Nạp thẻ cào</a>
                                        <a class="btn c-bg-green-4 c-font-white c-btn-square c-btn-uppercase c-btn-bold load-modal" data-dismiss="modal" rel="/atm" data-dismiss="modal">Nạp từ ATM - Ví điện tử</a>
                                    @else
                                        <button type="submit" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold " id="d3" style="" >Xác nhận thanh toán</button>

                                    @endif
                                @endif

                                <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

{{--            Nội dung   --}}

            <div class="container">
                <div class="job-wide-devider">
{{--                    Bot   --}}
                    @if(isset($bot))
                    <div class="row">
                        <div class="col-lg-12 column">
                            <div class="job-details">
                                <h2 style="margin-bottom: 23px;font-size: 20px;font-weight: bold;text-transform: uppercase;float: left">Vị trí <span style="font-size:14px;margin-top: 8px;margin-left:5px;font-weight:bold;">(MẶC ĐỊNH Ở VÁCH NÚI KAKAROT KHU 39)</span></h2>
                                <div class="table-bot m_datatable m-datatable m-datatable--default m-datatable--loaded">
                                    <table class="table table-bordered m-table m-table--border-brand m-table--head-bg-brand">
                                        <thead class="m-datatable__head">
                                        <tr class="m-datatable__row">
                                            <th style="" class="m-datatable__cell">
                                                Server
                                            </th>
                                            <th class="m-datatable__cell">
                                                Nhân vật
                                            </th>
                                            <th style="" class="m-datatable__cell">
                                                Khu vực
                                            </th>
                                            <th style="" class="m-datatable__cell">
                                                Trạng thái
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody class="m-datatable__body-bot">
                                        <tr>
                                            <td>1</td>
                                            <td>dubaish1</td>

                                            <td>39</td>
                                            <td>
                                                <span style="color:#2fa70f;font-weight: bold">[ONLINE]</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td>dubaish2</td>

                                            <td>39</td>
                                            <td>
                                                <span style="color:#2fa70f;font-weight: bold">[ONLINE]</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>3</td>
                                            <td>dubaish3</td>

                                            <td>39</td>
                                            <td>
                                                <span style="color:#2fa70f;font-weight: bold">[ONLINE]</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>4</td>
                                            <td>dubaish4</td>

                                            <td>39</td>
                                            <td>
                                                <span style="color:#2fa70f;font-weight: bold">[ONLINE]</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>7</td>
                                            <td>dubaish7</td>

                                            <td>39</td>
                                            <td>
                                                <span style="color:#2fa70f;font-weight: bold">[ONLINE]</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>8</td>
                                            <td>daicawang</td>

                                            <td>39</td>
                                            <td>
                                                <span style="color:#2fa70f;font-weight: bold">[ONLINE]</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>5</td>
                                            <td>dubaish5</td>

                                            <td>39</td>
                                            <td>
                                                <span style="color:#2fa70f;font-weight: bold">[ONLINE]</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>6</td>
                                            <td>dubaish6</td>

                                            <td>39</td>
                                            <td>
                                                <span style="color:#2fa70f;font-weight: bold">[ONLINE]</span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>9</td>
                                            <td>dubaish99</td>

                                            <td>39</td>
                                            <td>
                                                <span style="color:#2fa70f;font-weight: bold">[ONLINE]</span>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
{{--MO tả --}}
                    <div class="row">
                        <div class="col-lg-12 column">
                            <div class="job-details">
                                <h2 style="margin-bottom: 23px;font-size: 20px;font-weight: bold;text-transform: uppercase;">Mô tả</h2>
                                <div class="article-content">
                                    {!! $data->content  !!}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

{{--            DỊCH VỤ KHÁC     --}}
{{--        {!! widget('frontend.pages.service.widgets.list_service_category',60) !!}--}}
            @include('frontend.pages.service.widgets.list_service_category')

        </div>

        <input style="display: none" type="text" value="1801" id="id_service">

        <!-- END: PAGE CONTENT -->
    </div>


    <input type="hidden" name="slug" id="slug" value="{{ $slug }}" />
    <link rel="stylesheet" href="/assets/frontend/css/service.css">
    <script src="/assets/frontend/js/service/showdetailservice.js"></script>
@endsection

