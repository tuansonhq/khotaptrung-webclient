@extends('frontend.layouts.master')
@section('seo_head')
    @include('frontend.widget.__seo_head',with(['data'=>$data]))
@endsection
@section('content')
    <script src="/assets/frontend/{{theme('')->theme_key}}/rank/js/rslider.js"></script>
    <script src="/assets/frontend/{{theme('')->theme_key}}/rank/js/select-chosen.js" type="text/javascript"></script>
    <link href="/assets/frontend/{{theme('')->theme_key}}/rank/css/style.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="/assets/frontend/{{theme('')->theme_key}}/rank/css/style.css">
    <link rel="stylesheet" type="text/css" href="/assets/frontend/{{theme('')->theme_key}}/rank/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="/assets/frontend/{{theme('')->theme_key}}/rank/css/chosen.css">
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
                <div class="container detail-service detail-service-data">

                </div>

                <div class="modal fade" id="homealert" role="dialog" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content modal-content__data">

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
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/service.css">
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/service/showdetailservice.js"></script>
@endsection

