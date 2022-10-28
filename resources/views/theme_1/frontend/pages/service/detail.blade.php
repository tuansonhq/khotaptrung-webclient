@extends('frontend.layouts.master')
@section('seo_head')
    @include('frontend.widget.__seo_head',with(['data'=>$data]))
@endsection
@section('meta_robots')
    <meta name="robots" content="index,follow" />
@endsection
@section('content')

    @if($data == null)
        <div class="item_buy">
            <div class="container pt-3" style="padding-bottom: 600px">
                <div class="row pb-3 pt-3">
                    <div class="col-md-12 text-center">
                        <span style="color: red;font-size: 16px;">
                            @if(isset($message))
                                {{ $message }}
                            @else
                                Hiện tại không có dữ liệu nào phù hợp với yêu cầu của bạn! Hệ thống cập nhật dịch vụ thường xuyên bạn vui lòng theo dõi web trong thời gian tới !
                            @endif
                        </span>
                    </div>
                </div>

            </div>

        </div>
    @else

    <script src="/assets/frontend/{{theme('')->theme_key}}/rank/js/rslider.js"></script>
    <script src="/assets/frontend/{{theme('')->theme_key}}/rank/js/select-chosen.js" type="text/javascript"></script>
    <link href="/assets/frontend/{{theme('')->theme_key}}/rank/css/style.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="/assets/frontend/{{theme('')->theme_key}}/rank/css/style.css">
    <link rel="stylesheet" type="text/css" href="/assets/frontend/{{theme('')->theme_key}}/rank/css/chosen.css">
    <style type="text/css">
        .hidden_slect{
            display: none;
        }
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
    <input type="hidden" name="slug_category" class="slug_category" value="{{ $data->slug }}">
{{--    <input type="text" value="{{ $server_mode }}">--}}
    <div class="c-layout-page">
        <div class="news_breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-md-12 fixcssacount">
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
                <h1 style="font-size: 30px;font-weight: bold;text-transform: uppercase">DỊCH VỤ {{ $data->title }}</h1>

            </div>

            {{--            Tính toán  --}}

            <form method="POST" action="/dich-vu/{{ $data->id }}/purchase" accept-charset="UTF-8" class="purchaseForm" enctype="multipart/form-data">
                @csrf
                <div class="container detail-service fixcssacount">
                    <div class="row">
                        <div class="col-md-7" style="margin-bottom:20px;">
                            <div class="row">
                                <div class="col-md-5 hidden-xs hidden-sm">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="news_image">
                                                @if(isset($data->image))

                                                    <img src="{{\App\Library\MediaHelpers::media($data->image)}}" alt="{{ $data->title }}">
                                                @else
                                                    <img src="https://nick.vn/storage/images/nfjY80CaXR_1623228739.jpg" alt="{{ $data->title }}">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row__face">
                                        <p style="margin-top: 15px" class="bb"><i class="fas fa-calendar-check" aria-hidden="true"></i> {{ $data->title }}</p>
                                    </div>
                                </div>
                                <div class="col-md-7">

                                    {{--                                    Kiểm tra máy chủ     --}}
                                    @if(isset($filter_type))
                                        @if($filter_type == 7)
                                            @if(isset($product) && count($product))
                                                <span class="mb-15 control-label bb">Chọn máy chủ:</span>
                                                <div class="mb-15">
                                                    <select name="server" class="server-filter form-control t14" id="server" style="">
                                                        @foreach($product as $key => $item)
                                                            <option
                                                                value="{{ $item->id }}"

                                                                @foreach($item->product_attribute as $attribute)
                                                                @if($attribute->attribute->idkey == 'so_tien_nro_dien_tien_nho_nhat')
                                                                data-price-min="{{ $attribute->product_attribute_value_able->title }}"
                                                                @endif
                                                                @endforeach

                                                                @foreach($item->product_attribute as $attribute)
                                                                @if($attribute->attribute->idkey == 'so_tien_nro_dien_tien_lon_nhat')
                                                                data-price-max="{{ $attribute->product_attribute_value_able->title }}"
                                                                @endif
                                                                @endforeach

                                                                @foreach($item->product_attribute as $attribute)
                                                                @if($attribute->attribute->idkey == 'he_so_nro')
                                                                data-heso="{{ $attribute->product_attribute_value_able->title }}"
                                                                @endif
                                                                @endforeach

                                                            >
                                                                @foreach($item->product_attribute as $attribute)
                                                                    @if($attribute->attribute->idkey == 'vu_tru_nro')
                                                                        {{ $attribute->product_attribute_value_able->title }}
                                                                    @endif
                                                                @endforeach
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            @endif
                                        @else
                                            <span class="mb-15 control-label bb">Chọn máy chủ:</span>
                                            <div class="mb-15">
                                                @php
                                                    $server_id = array();
                                                    $server_name = array();
                                                    $item_arrays = array();

                                                    if (isset($product) && count($product)){
                                                        foreach($product as $key => $item){
                                                            foreach ($item->product_attribute as $index => $attribute) {
                                                                if (!in_array($attribute->product_attribute_value_able->id,$server_id) && $attribute->attribute->idkey == 'vu_tru_nro'){
                                                                    array_push($server_id,$attribute->product_attribute_value_able->id);
                                                                    array_push($server_name,$attribute->product_attribute_value_able->title);
                                                                }
                                                            }
                                                        }

                                                        foreach($product as $key => $item){
                                                            foreach ($item->product_attribute as $index => $attribute) {
                                                                if ($attribute->attribute->idkey == 'vu_tru_nro'){
                                                                    $item_arrays[$attribute->product_attribute_value_able->id][] = $item;
                                                                }

                                                            }
                                                        }
                                                    }

                                                @endphp

                                                <input type="hidden" class="check_server" value="{{ $server_id[0] }}">

                                                <select name="server" class="server-filter server_filter form-control t14" id="server" style="">
                                                    @foreach($server_id as $key => $item)

                                                        <option
                                                            value="{{ $item }}"
                                                        >
                                                            {{ $server_name[$key] }}

                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        @endif
                                    @endif


                                    @if(isset($filter_type))
                                        @if($filter_type == 7){{--                                                Loại nhập tiền    --}}

                                            @if(isset($product) && count($product))
                                                @foreach($product as $key => $item)
                                                    @if($key == 0)
                                                        @foreach($item->product_attribute as $attribute)
                                                            @if($attribute->attribute->idkey == 'so_tien_nro_dien_tien_nho_nhat')
                                                                <input type="hidden" id="price-min" class="form-control t14" placeholder="" value="{{ $attribute->product_attribute_value_able->title }}" readonly="">

                                                            @endif
                                                        @endforeach

                                                        @foreach($item->product_attribute as $attribute)
                                                            @if($attribute->attribute->idkey == 'so_tien_nro_dien_tien_lon_nhat')
                                                                <input type="hidden" id="price-max" class="form-control t14" placeholder="" value="{{ $attribute->product_attribute_value_able->title }}" readonly="">

                                                            @endif
                                                        @endforeach
                                                        <input type="hidden" id="txtDiscount" class="form-control t14" placeholder="" value="{{ $item->price }}" readonly="">
                                                        @foreach($item->product_attribute as $attribute)
                                                            @if($attribute->attribute->idkey == 'don_vi_tien_te')
                                                                <input type="hidden" id="currency" class="form-control t14" placeholder="" value="{{ $attribute->product_attribute_value_able->title }}" readonly="">
                                                            @endif
                                                        @endforeach

                                                        @if(isset($item->product_attribute) && count($item->product_attribute))

                                                            <span class="mb-15 control-label bb">Nhập số tiền cần mua:</span>
                                                            <div class="mb-15">
                                                                @foreach($item->product_attribute as $attribute)
                                                                    @if($attribute->attribute->idkey == 'so_tien_nro_dien_tien_nho_nhat')
                                                                        <input autofocus="" value="{{ $attribute->product_attribute_value_able->title }}" class="form-control t14 price " id="input_pack" type="hidden" placeholder="Số tiền">
                                                                        <input autofocus="" value="{{ str_replace(',','.',number_format( $attribute->product_attribute_value_able->title )) }}" class="form-control t14 price " id="input_pack_face" type="text" placeholder="Số tiền">
                                                                    @endif
                                                                @endforeach
                                                                <span style="font-size: 14px;">Số tiền thanh toán phải từ <b style="font-weight:bold;">
                                                                @foreach($item->product_attribute as $attribute)
                                                                    @if($attribute->attribute->idkey == 'so_tien_nro_dien_tien_nho_nhat')
                                                                        {{ str_replace(',','.',number_format( $attribute->product_attribute_value_able->title )) }}đ
                                                                    @endif
                                                                @endforeach
                                                            </b>  đến <b style="font-weight:bold;">
                                                                @foreach($item->product_attribute as $attribute)
                                                                    @if($attribute->attribute->idkey == 'so_tien_nro_dien_tien_lon_nhat')
                                                                        {{ str_replace(',','.',number_format( $attribute->product_attribute_value_able->title )) }}đ
                                                                    @endif
                                                                @endforeach
                                                            </b> </span>
                                                            </div>
                                                            <span class="mb-15 control-label bb">Hệ số:</span>
                                                            <div class="mb-15">
                                                                @foreach($item->product_attribute as $attribute)
                                                                    @if($attribute->attribute->idkey == 'he_so_nro')
                                                                        <input type="text" id="txtDiscountface" class="form-control t14" placeholder="" value="{{ $attribute->product_attribute_value_able->title }}" readonly="">
                                                                    @endif
                                                                @endforeach
                                                            </div>

                                                        @endif
                                                    @endif
                                                @endforeach
                                            @endif

                                        @elseif($filter_type == 4){{--//dạng chọn 1 --}}
                                            @if(isset($item_arrays) && count($item_arrays))
                                                @foreach($item_arrays as $index => $item_array)
                                                    @if($server_id[0] == $index)
                                                        <div class="row marginauto bang__gia__{{ $index }}" data-id="{{ $index }}">
                                                            <div class="col-md-12 p-0">
                                                                <span class="mb-15 control-label bb">Bảng Giá:</span>
                                                                <div class="mb-15">
                                                                    <select name="selected" class="s-filter form-control t14 selected_filter" style="">
                                                                        @foreach($item_array as $key => $item)
                                                                            <option value="{{ $key }}" data-price="{{ $item->price }}">
                                                                                @foreach($item->product_attribute as $attribute)
                                                                                    @if($attribute->attribute->idkey == 'nhiem_vu_nro')
                                                                                        {{ $attribute->product_attribute_value_able->title }}
                                                                                    @endif
                                                                                @endforeach

                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                @foreach($item_array as $key => $item)
                                                                    @if($key == 0)
                                                                        <input type="hidden" id="txtDiscount" class="form-control t14" placeholder="" value="{{ $item->price }}" readonly="">
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="row marginauto hidden_slect bang__gia__{{ $index }}" data-id="{{ $index }}">
                                                            <div class="col-md-12 p-0">
                                                                <span class="mb-15 control-label bb">Bảng Giá:</span>
                                                                <div class="mb-15">
                                                                    <select name="selected" class="s-filter form-control t14 selected_filter" style="">
                                                                        @foreach($item_array as $key => $item)
                                                                            <option data-price="{{ $item->id }}" value="{{ $key }}">
                                                                                @foreach($item->product_attribute as $attribute)
                                                                                    @if($attribute->attribute->idkey == 'nhiem_vu_nro')
                                                                                        {{ $attribute->product_attribute_value_able->title }}
                                                                                    @endif
                                                                                @endforeach
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                @foreach($item_array as $key => $item)
                                                                    @if($key == 0)
                                                                        <input type="hidden" id="txtDiscount" class="form-control t14" placeholder="" value="{{ $item->price }}" readonly="">
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            @endif
                                        @elseif($filter_type == 5){{--//dạng chọn nhiều--}}
                                            @if(isset($item_arrays) && count($item_arrays))
                                                @foreach($item_arrays as $index => $item_array)
                                                    @if($server_id[0] == $index)
                                                        <div class="row marginauto bang__gia__{{ $index }}" data-id="{{ $index }}">
                                                            <div class="col-md-12 p-0">
                                                                <span class="mb-15 control-label bb">Sức mạnh:</span>
                                                                <div class="simple-checkbox s-filter select__checkbox">
                                                                    @foreach($item_array as $key => $item)
                                                                        <p><input value="{{ $item->price }}" data-id="{{ $index }}" class="input__checkbox" type="checkbox" id="c_{{ $index }}_{{ $key }}">
                                                                            <label for="c_{{ $index }}_{{ $key }}">
                                                                                @foreach($item->product_attribute as $attribute)
                                                                                    @if($attribute->attribute->idkey == 'suc_manh_nro')
                                                                                        {{ $attribute->product_attribute_value_able->title }}
                                                                                    @endif
                                                                                @endforeach
                                                                            </label>
                                                                        </p>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="row marginauto hidden_slect bang__gia__{{ $index }}" data-id="{{ $index }}">
                                                            <div class="col-md-12 p-0">
                                                                <span class="mb-15 control-label bb">Sức mạnh:</span>
                                                                <div class="simple-checkbox s-filter">
                                                                    @foreach($item_array as $key => $item)
                                                                        <p><input value="{{ $key }}" class="input__checkbox" data-id="{{ $index }}" type="checkbox" id="c_{{ $index }}_{{ $key }}">
                                                                            <label for="c_{{ $index }}_{{ $key }}" >
                                                                                @foreach($item->product_attribute as $attribute)
                                                                                    @if($attribute->attribute->idkey == 'suc_manh_nro')
                                                                                        {{ $attribute->product_attribute_value_able->title }}
                                                                                    @endif
                                                                                @endforeach
                                                                            </label>
                                                                        </p>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endif
                                    @endif
                                    {{--                                                Loại từ A đến B    --}}


                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">

                            <div class="row emply-btns">
                                <div class="col-md-12 col-md-offset-2">
                                    <div class=" emply-btns text-center">
                                        <input type="hidden" name="value" value="">
                                        <input type="hidden" name="selected" value="">
                                        <input type="hidden" name="server">
                                        <a id="txtPrice" style="font-size: 20px;font-weight: bold;text-decoration: none;color: #FFFFFF" class="">Tổng: 0 VNĐ</a>
                                        <button id="btnPurchase" type="button" style="font-size: 20px;" class="followus"><i class="fa fa-credit-card" aria-hidden="true"></i> Thanh toán</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    {{--                            Đổ dữ liệu loại bằng 6--}}
                    @if(isset($filter_type))
                        @if($filter_type == 6)
                            <div class="row">
                                <div class="col-md-12 float_mb">
                                    <script src="/assets/frontend/{{theme('')->theme_key}}/rank/js/rslider.js"></script>
                                    <script src="/assets/frontend/{{theme('')->theme_key}}/rank/js/select-chosen.js" type="text/javascript"></script>
                                    <link href="/assets/frontend/{{theme('')->theme_key}}/rank/css/style.css" rel="stylesheet" type="text/css"/>
                                    <link rel="stylesheet" type="text/css" href="/assets/frontend/{{theme('')->theme_key}}/rank/css/style.css">
                                    <link rel="stylesheet" type="text/css" href="/assets/frontend/{{theme('')->theme_key}}/rank/css/responsive.css">
                                    <link rel="stylesheet" type="text/css" href="/assets/frontend/{{theme('')->theme_key}}/rank/css/chosen.css">
                                    <span class="mb-15 control-label bb">Vui lòng lựa chọn:</span>

                                    <div class="range_slider" style="">
                                        <div class="nstSlider" data-range_min="0" data-cur_min="0">
                                            <div class="bar" ></div>
                                            <div class="leftGrip"></div>
                                            <div class="rightGrip"></div>
                                        </div>
                                    </div>
                                    @if(isset($product) && count($product))
                                        <div class="row service-choice">
                                            <div class="col-sm-6">
                                                <h5>Từ</h5>
                                                <div class="dropdown-field from-field">
                                                    <select class="from-chosen" name="rank_from">
                                                        @foreach($product as $key => $item)
                                                            <option value="{{ $key }}">{{ $item->title }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="clear-fix"></div>
                                                <h5>đến</h5>
                                                <div class="dropdown-field to-field">
                                                    <select class="to-chosen" name="rank_to">
                                                        @foreach($product as $key => $item)
                                                            <option value="{{ $key }}">{{ $item->title }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    <h2>Bảng giá</h2>
                                    <div class="m_datatable m-datatable m-datatable--default m-datatable--loaded">
                                        <table class="table table-bordered m-table m-table--border-brand m-table--head-bg-brand">
                                            <thead class="m-datatable__head">
                                            <tr class="m-datatable__row">
                                                <th style="width:30px;" class="m-datatable__cell">
                                                    #
                                                </th>
                                                <th class="m-datatable__cell">
                                                    Tên
                                                </th>
                                                <th style="width:150px;" class="m-datatable__cell">
                                                    Tiền công
                                                </th>
                                                <th style="width:150px;" class="m-datatable__cell">
                                                    Thanh toán
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody class="m-datatable__body">
                                            @for ($i = 0; $i < count($product)-1; $i++)
                                                @if($product[$i]!=null)
                                                    <tr class="m-datatable__row m-datatable__row--even">
                                                        <td style="width:30px;" class="m-datatable__cell">{{$i+1}}</td>
                                                        <td class="m-datatable__cell">{{$product[$i]->title}} -> {{$product[$i+1]->title}}</td>
                                                        <td style="width:150px;" class="m-datatable__cell">{{number_format(intval($product[$i+1]->price) - intval($product[$i]->price)). " VNĐ"}}</td>
                                                        <td class="m-datatable__cell">
                                                            <span class="pay">Thanh toán</span>

                                                        </td>
                                                    </tr>
                                                @endif

                                            @endfor
                                            </tbody>
                                        </table>
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
                                    </div>
                                </div>
                                <input type="hidden" id="json_rank" name="custId" value="{{ json_encode($product) }}">
                            </div>
                        @endif
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
                            <div >
                                <div class="row error__service">

                                </div>
                            </div>
                            <div class="modal-body">
{{--                                đổ dữ liệu modal  --}}
                            </div>

                            <div class="modal-footer modal-footer__data">
                                <div>
                                    <button type="submit" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold loading" id="d3" style="" >Xác nhận thanh toán</button>
                                </div>

                                <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>

                            </div>

                        </div>
                    </div>
                </div>
            </form>

            {{--            Nội dung   --}}

            <div class="container fixcssacount">
                <div class="job-wide-devider">
                    {{--                    Bot   --}}

                    <div class="row marginauto">
                        <div class="col-md-12 left-right data-bot">

                        </div>
                    </div>

                    {{--MO tả --}}

                    <div class="row">
                        <div class="col-lg-12 column">
                            <div class="job-details">
                                <h2 style="margin-bottom: 23px;font-size: 20px;font-weight: bold;text-transform: uppercase;">Mô tả</h2>
                                <div class="article-content hidetext">
                                    {!! $data->content??''  !!}
                                </div>
                                <div style="text-align: center;margin: 15px 0">
                                    <span class="viewmore">Xem tất cả »</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            {{--            DỊCH VỤ KHÁC     --}}
            {{--        {!! widget('frontend.pages.service.widget.list_service_category',60) !!}--}}
            @include('frontend.pages.service.widget.__related')

        </div>

        <input style="display: none" type="text" value="1801" id="id_service">

        <!-- END: PAGE CONTENT -->
    </div>


    <input type="hidden" name="slug" id="slug" value="{{ $data->slug }}" />
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/service.css">
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/service/showdetailservice.js?v={{time()}}"></script>
    @if(isset($filter_type))
        @if($filter_type == 7){{--//dạng nhập tiền thành toán--}}
        <script>
            $(document).ready(function(){
                var price_input_pack = parseInt($('#input_pack').val());

                var txtDiscount = parseInt($('#txtDiscount').val());

                // var total_price = Math.round(price_input_pack/txtDiscount);
                var total_price = price_input_pack/txtDiscount;
                total_price = total_price.toFixed(0);
                var currency = $('#currency').val();

                $('#txtPrice').html('');
                $('#txtPrice').html('Tổng: ' + total_price + ' ' + currency + '');



                $('body').on('change','#input_pack_face',function(e){
                    var price = $(this).val();

                    price = price.replace(/\./g,'');
                    var price_min = $('#price-min').val();
                    var price_max = $('#price-max').val();

                    if( !isNaN( price ) ){
                        $('#input_pack').val(price);
                        var price_input_pack = parseInt($('#input_pack').val());

                        if (parseInt(price) < parseInt(price_min)){

                            $('#input_pack').val(price_min);

                            price_min = price_min.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
                            price_min = price_min.split('').reverse().join('').replace(/^[\.]/,'');

                            $(this).val(price_min);

                            $('#txtPrice').html('');
                            $('#txtPrice').html('Nhập số tiền không đúng');

                            return false;
                        }

                        if (parseInt(price) > parseInt(price_max)){
                            $('#input_pack').val(price_max);

                            price_max = price_max.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
                            price_max = price_max.split('').reverse().join('').replace(/^[\.]/,'');

                            $(this).val(price_max);

                            $('#txtPrice').html('');
                            $('#txtPrice').html('Nhập số tiền không đúng');

                            return false;
                        }

                        var txtDiscount = parseInt($('#txtDiscount').val());
                        var total_price = price_input_pack/txtDiscount;
                        total_price = total_price.toFixed(0);
                        var currency = $('#currency').val();

                        $('#txtPrice').html('');
                        $('#txtPrice').html('Tổng: ' + total_price + ' ' + currency + '');

                        price = price.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
                        price = price.split('').reverse().join('').replace(/^[\.]/,'');

                        $(this).val(price);
                    }else {

                        $('#input_pack').val(price_min);

                        price_min = price_min.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
                        price_min = price_min.split('').reverse().join('').replace(/^[\.]/,'');

                        $(this).val(price_min);

                        $('#txtPrice').html('');
                        $('#txtPrice').html('Nhập số tiền không đúng');

                        return false;
                    }

                })


                $('body').on('click','#server',function(e){
                    var price_min = parseInt($(this).find(':selected').data('price-min'));
                    var price_max = parseInt($(this).find(':selected').data('price-max'));
                    var heso = parseInt($(this).find(':selected').data('heso'));
                    $('#price-min').val(price_min);
                    $('#price-max').val(price_max);
                    $('#txtDiscountface').val(heso);

                    var price = $('#input_pack').val();

                    if (parseInt(price) < parseInt(price_min)){

                        $('#input_pack').val(price_min);

                        price_min = price_min.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
                        price_min = price_min.split('').reverse().join('').replace(/^[\.]/,'');

                        $('#input_pack_face').val(price_min);

                        $('#txtPrice').html('');
                        $('#txtPrice').html('Nhập số tiền không đúng');

                        return false;
                    }

                    if (parseInt(price) > parseInt(price_max)){
                        $('#input_pack').val(price_max);

                        price_max = price_max.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
                        price_max = price_max.split('').reverse().join('').replace(/^[\.]/,'');

                        $('#input_pack_face').val(price_max);

                        $('#txtPrice').html('');
                        $('#txtPrice').html('Nhập số tiền không đúng');

                        return false;
                    }

                    var price_input_pack = parseInt($('#input_pack').val());
                    var txtDiscount = parseInt($('#txtDiscount').val());
                    var total_price = price_input_pack/txtDiscount;
                    total_price = total_price.toFixed(0);
                    var currency = $('#currency').val();

                    $('#txtPrice').html('');
                    $('#txtPrice').html('Tổng: ' + total_price + ' ' + currency + '');

                    price = price.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
                    price = price.split('').reverse().join('').replace(/^[\.]/,'');

                    $('#input_pack_face').val(price);
                })
            })
        </script>
        @elseif($filter_type == 6){{--//dạng chọn a->b--}}
            <script>
                var data = JSON.parse($("#json_rank").val());

                // var data = json.price;

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

                        console.log('form = :' + from);
                        console.log('to = :' + to);
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
                    var data = JSON.parse($("#json_rank").val());
                    $('tbody tr.selected').removeClass('selected');
                    for (var i = from + 1; i <= to; i++) {
                        price += parseInt(data[i].price-data[i-1].price);
                        $('tbody tr').eq(i - 1).addClass('selected');
                    }
                    $('[name="value"]').val('');
                    $('[name="value"]').val(price);
                    price = price.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
                    price = price.split('').reverse().join('').replace(/^[\.]/,'');
                    $('#txtPrice').html('Tổng: ' + (price) + ' VNĐ');
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
        @elseif($filter_type == 4){{--//dạng chọn một--}}
            <script>
                $(document).ready(function(){

                    var txtDiscount = parseInt($('#txtDiscount').val());

                    // var total_price = Math.round(price_input_pack/txtDiscount);
                    var total_price = txtDiscount;
                    total_price = total_price.toFixed(0);

                    total_price = total_price.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
                    total_price = total_price.split('').reverse().join('').replace(/^[\.]/,'');

                    $('#txtPrice').html('');
                    $('#txtPrice').html('Tổng: ' + total_price + ' VNĐ');



                    $('body').on('click','.server_filter',function(e) {
                        var server_id = parseInt($(this).find(':selected').val());
                        var check_server = parseInt($('.check_server').val());
                        $('.bang__gia__' + check_server + '').addClass('hidden_slect');
                        $('.bang__gia__' + server_id + '').removeClass('hidden_slect');

                        $('.check_server').val(server_id);

                    })


                    $('body').on('click','.selected_filter',function(e) {
                        var price = parseInt($(this).find(':selected').data('price'));
                        $('#txtDiscount').val(price);

                        var txtDiscount = parseInt($('#txtDiscount').val());

                        var total_price = txtDiscount;
                        total_price = total_price.toFixed(0);

                        total_price = total_price.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
                        total_price = total_price.split('').reverse().join('').replace(/^[\.]/,'');

                        $('#txtPrice').html('');
                        $('#txtPrice').html('Tổng: ' + total_price + ' VNĐ');
                    })
                })
            </script>
        @elseif($filter_type == 5){{--//dạng chọn nhiều--}}
            <script>
                $(document).ready(function(){

                    $('body').on('change','.input__checkbox',function(e) {

                        var id = $(this).data('id');

                        var total_price = 0;

                        // select__checkbox
                        $('.bang__gia__' + id + ' .input__checkbox').each(function(){
                            if (this.checked){
                                total_price = total_price + parseInt($(this).val());
                            }
                        });

                        total_price = total_price.toFixed(0);

                        total_price = total_price.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
                        total_price = total_price.split('').reverse().join('').replace(/^[\.]/,'');

                        $('#txtPrice').html('');
                        $('#txtPrice').html('Tổng: ' + total_price + ' VNĐ');
                    });

                    $('body').on('change','#server',function(e) {
                        var server_id = parseInt($(this).find(':selected').val());
                        var check_server = $('.check_server').val();

                        $('.bang__gia__' + check_server + '').addClass('hidden_slect');
                        $('.bang__gia__' + server_id + '').removeClass('hidden_slect');

                        $('.bang__gia__' + check_server + ' .input__checkbox').each(function(){
                            $(this).prop('checked',false);
                        });

                        $('.check_server').val(server_id);

                        var total_price = 0;

                        // select__checkbox
                        $('.bang__gia__' + server_id + ' .input__checkbox').each(function(){
                            if (this.checked){
                                total_price = total_price + parseInt($(this).val());
                            }
                        });

                        total_price = total_price.toFixed(0);

                        total_price = total_price.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
                        total_price = total_price.split('').reverse().join('').replace(/^[\.]/,'');

                        $('#txtPrice').html('');
                        $('#txtPrice').html('Tổng: ' + total_price + ' VNĐ');
                        //
                        // $('.check_server').val(id);
                    })
                })
            </script>
        @endif
    @endif
    @endif
@endsection

