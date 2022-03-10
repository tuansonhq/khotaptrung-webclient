@extends('frontend.layouts.master')
@section('content')

    <!-- BEGIN: PAGE CONTAINER -->
    <div class="c-layout-page">
        <!-- BEGIN: PAGE CONTENT -->

        <div class="c-content-box c-size-lg c-overflow-hide c-bg-white font-roboto">
            <div class="container">

            </div>
            <div class="text-center" style="margin-bottom: 50px;">
                <h2 style="font-size: 30px;font-weight: bold;text-transform: uppercase">DỊCH VỤ Cày thuê Liên quân</h2>
{{--                <div class="row  hidden-sm hidden-md hidden-lg">--}}
{{--                    <p style="margin-top: 15px;font-size: 23px" class="bb"><i class="fa fa-server" aria-hidden="true"></i> <a href="/dich-vu/lien-quan" style="color:#32c5d2">Liên quân</a></p>--}}

{{--                </div>--}}
            </div>

            <form method="POST" action="https://nick.vn/dich-vu/1783/purchase" accept-charset="UTF-8" class="" enctype="multipart/form-data"><input name="_token" type="hidden" value="X8YsQD4YEObNmCLktdimefYpYlAMxkxgV2KwMkYY">
                <div class="container detail-service">
                    <div class="row">
                        <div class="col-md-7" style="margin-bottom:20px;">
                            <div class="row service-info">
                                <div class="col-md-5 hidden-xs hidden-sm">
                                    <div class="row">
                                        <div class="news_image">
                                            <img src="https://nick.vn/storage/images/Qt5i235PIT_1624011783.jpg" alt="Cày thuê Liên quân">
                                        </div>
                                    </div>
                                    <div class="row-face">
                                        <p style="margin-top: 15px" class="bb"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Cày thuê Liên quân</p>
                                        <p style="margin-top: 15px" class="bb"><i class="fa fa-server" aria-hidden="true"></i> <a href="/dich-vu/lien-quan" style="color:#32c5d2">Liên quân</a></p>
                                    </div>
                                </div>
                                <div class="col-md-7">

                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">

                            <div class="row emply-btns">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class=" emply-btns text-center">
                                        <input type="hidden" name="selected" value="">
                                        <input type="hidden" name="server">
                                        <a id="txtPrice" style="font-size: 20px;font-weight: bold" class="">Tổng: 0 Xu</a>
                                        <button id="btnPurchase" type="button" style="font-size: 20px;" class="followus"><i class="fa fa-credit-card" aria-hidden="true"></i> Thanh toán</button>
                                    </div>
                                </div>
                            </div>

                            <div class="row emply-btns box-body" style="color: #505050;padding:20px;line-height: 2;margin-top: 30px">
                                <p><strong>LƯU &Yacute; : Uy t&iacute;n của nick cần c&agrave;y phải tr&ecirc;n 85</strong></p>

                                <p>- C&agrave;y thu&ecirc; Li&ecirc;n Qu&acirc;n uy t&iacute;n gi&aacute; rẻ</p>

                                <p>- Bảo mật 100% . Kh&ocirc;ng d&ugrave;ng phần mềm lậu .</p>

                                <p><strong><span style="color:#c0392b">- 4 bậc rank b&ecirc;n m&igrave;nh mất khoảng 1 ng&agrave;y hơn để c&agrave;y . N&ecirc;n từ khi tiếp nhận đơn c&aacute;c bạn kh&ocirc;ng n&ecirc;n login v&agrave;o game để b&ecirc;n m&igrave;nh kh&ocirc;ng gặp trục trặc khi c&agrave;y . CẢM ƠN !!</span></strong></p>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-12 float_mb">
                        <script src="/assets/frontend/rank/js/rslider.js"></script>
                        <script src="/assets/frontend/rank/js/select-chosen.js" type="text/javascript"></script>
                        <link href="/assets/frontend/rank/css/style.css" rel="stylesheet" type="text/css"/>
                        <link rel="stylesheet" type="text/css" href="/assets/frontend/rank/css/style.css">
                        <link rel="stylesheet" type="text/css" href="/assets/frontend/rank/css/responsive.css">
                        <link rel="stylesheet" type="text/css" href="/assets/frontend/rank/css/chosen.css">
                        <span class="mb-15 control-label bb">Tiền:</span>

                        <div class="range_slider" style="">
                            <div class="nstSlider" data-range_min="0" data-cur_min="0">
                                <div class="bar" ></div>
                                <div class="leftGrip"></div>
                                <div class="rightGrip"></div>
                            </div>
                        </div>

                        <div class="row service-choice">
                            <div class="col-sm-6">
                                <h5>Từ</h5>
                                <div class="dropdown-field from-field">
                                    <select class="from-chosen" name="rank_from">
                                        <option value="0">Vàng 4</option>
                                        <option value="1">Vàng 3</option>
                                        <option value="2">Vàng 2</option>
                                        <option value="3">Vàng 1</option>
                                        <option value="4">Bạch Kim 5</option>
                                        <option value="5">Bạch kim 4</option>
                                        <option value="6">Bạch kim 3</option>
                                        <option value="7">Bạch kim 2</option>
                                        <option value="8">Bạch kim 1</option>
                                        <option value="9">Kim cương 5</option>
                                        <option value="10">Kim cương 4</option>
                                        <option value="11">Kim cương 3</option>
                                        <option value="12">Kim cương 2</option>
                                        <option value="13">Kim cương 1</option>
                                        <option value="14">Tinh anh 5</option>
                                        <option value="15">Tinh anh 4</option>
                                        <option value="16">Tinh anh 3</option>
                                        <option value="17">Tinh anh 2</option>
                                        <option value="18">Tinh anh 1</option>
                                        <option value="19">Cao thủ 1*</option>
                                        <option value="20">Cao thủ 5*</option>
                                        <option value="21">Cao thủ 10*</option>
                                        <option value="22">Cao thủ 15 *</option>
                                        <option value="23">Cao thủ 20*</option>
                                        <option value="24">Cao thủ 25*</option>
                                        <option value="25">Cao thủ 30*</option>
                                        <option value="26">Cao thủ 35*</option>
                                        <option value="27">Cao thủ 40*</option>
                                        <option value="28">Cao thủ 45*</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="clear-fix"></div>
                                <h5>đến</h5>
                                <div class="dropdown-field to-field">
                                    <select class="to-chosen" name="rank_to">
                                        <option value="1">Vàng 3</option>
                                        <option value="2">Vàng 2</option>
                                        <option value="3">Vàng 1</option>
                                        <option value="4">Bạch Kim 5</option>
                                        <option value="5">Bạch kim 4</option>
                                        <option value="6">Bạch kim 3</option>
                                        <option value="7">Bạch kim 2</option>
                                        <option value="8">Bạch kim 1</option>
                                        <option value="9">Kim cương 5</option>
                                        <option value="10">Kim cương 4</option>
                                        <option value="11">Kim cương 3</option>
                                        <option value="12">Kim cương 2</option>
                                        <option value="13">Kim cương 1</option>
                                        <option value="14">Tinh anh 5</option>
                                        <option value="15">Tinh anh 4</option>
                                        <option value="16">Tinh anh 3</option>
                                        <option value="17">Tinh anh 2</option>
                                        <option value="18">Tinh anh 1</option>
                                        <option value="19">Cao thủ 1*</option>
                                        <option value="20">Cao thủ 5*</option>
                                        <option value="21">Cao thủ 10*</option>
                                        <option value="22">Cao thủ 15 *</option>
                                        <option value="23">Cao thủ 20*</option>
                                        <option value="24">Cao thủ 25*</option>
                                        <option value="25">Cao thủ 30*</option>
                                        <option value="26">Cao thủ 35*</option>
                                        <option value="27">Cao thủ 40*</option>
                                        <option value="28">Cao thủ 45*</option>
                                        <option value="29">Cao thủ 50*</option>

                                    </select>
                                </div>
                            </div>
                        </div>

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
                                <tr class="m-datatable__row m-datatable__row--even">
                                    <td style="width:30px;" class="m-datatable__cell">1</td>
                                    <td class="m-datatable__cell">Vàng 4 -> Vàng 3</td>
                                    <td style="width:150px;" class="m-datatable__cell">40,000 VNĐ</td>
                                    <td class="m-datatable__cell">
                                        <span class="pay">Thanh toán</span>

                                    </td>
                                </tr>

                                <tr class="m-datatable__row m-datatable__row--even">
                                    <td style="width:30px;" class="m-datatable__cell">2</td>
                                    <td class="m-datatable__cell">Vàng 3 -> Vàng 2</td>
                                    <td style="width:150px;" class="m-datatable__cell">40,000 VNĐ</td>
                                    <td class="m-datatable__cell">
                                        <span class="pay">Thanh toán</span>

                                    </td>
                                </tr>

                                <tr class="m-datatable__row m-datatable__row--even">
                                    <td style="width:30px;" class="m-datatable__cell">3</td>
                                    <td class="m-datatable__cell">Vàng 2 -> Vàng 1</td>
                                    <td style="width:150px;" class="m-datatable__cell">40,000 VNĐ</td>
                                    <td class="m-datatable__cell">
                                        <span class="pay">Thanh toán</span>

                                    </td>
                                </tr>

                                <tr class="m-datatable__row m-datatable__row--even">
                                    <td style="width:30px;" class="m-datatable__cell">4</td>
                                    <td class="m-datatable__cell">Vàng 1 -> Bạch Kim 5</td>
                                    <td style="width:150px;" class="m-datatable__cell">40,000 VNĐ</td>
                                    <td class="m-datatable__cell">
                                        <span class="pay">Thanh toán</span>

                                    </td>
                                </tr>

                                <tr class="m-datatable__row m-datatable__row--even">
                                    <td style="width:30px;" class="m-datatable__cell">5</td>
                                    <td class="m-datatable__cell">Bạch Kim 5 -> Bạch kim 4</td>
                                    <td style="width:150px;" class="m-datatable__cell">40,000 VNĐ</td>
                                    <td class="m-datatable__cell">
                                        <span class="pay">Thanh toán</span>

                                    </td>
                                </tr>

                                <tr class="m-datatable__row m-datatable__row--even">
                                    <td style="width:30px;" class="m-datatable__cell">6</td>
                                    <td class="m-datatable__cell">Bạch kim 4 -> Bạch kim 3</td>
                                    <td style="width:150px;" class="m-datatable__cell">40,000 VNĐ</td>
                                    <td class="m-datatable__cell">
                                        <span class="pay">Thanh toán</span>

                                    </td>
                                </tr>

                                <tr class="m-datatable__row m-datatable__row--even">
                                    <td style="width:30px;" class="m-datatable__cell">7</td>
                                    <td class="m-datatable__cell">Bạch kim 3 -> Bạch kim 2</td>
                                    <td style="width:150px;" class="m-datatable__cell">40,000 VNĐ</td>
                                    <td class="m-datatable__cell">
                                        <span class="pay">Thanh toán</span>

                                    </td>
                                </tr>

                                <tr class="m-datatable__row m-datatable__row--even">
                                    <td style="width:30px;" class="m-datatable__cell">8</td>
                                    <td class="m-datatable__cell">Bạch kim 2 -> Bạch kim 1</td>
                                    <td style="width:150px;" class="m-datatable__cell">40,000 VNĐ</td>
                                    <td class="m-datatable__cell">
                                        <span class="pay">Thanh toán</span>

                                    </td>
                                </tr>

                                <tr class="m-datatable__row m-datatable__row--even">
                                    <td style="width:30px;" class="m-datatable__cell">9</td>
                                    <td class="m-datatable__cell">Bạch kim 1 -> Kim cương 5</td>
                                    <td style="width:150px;" class="m-datatable__cell">40,000 VNĐ</td>
                                    <td class="m-datatable__cell">
                                        <span class="pay">Thanh toán</span>

                                    </td>
                                </tr>

                                <tr class="m-datatable__row m-datatable__row--even">
                                    <td style="width:30px;" class="m-datatable__cell">10</td>
                                    <td class="m-datatable__cell">Kim cương 5 -> Kim cương 4</td>
                                    <td style="width:150px;" class="m-datatable__cell">40,000 VNĐ</td>
                                    <td class="m-datatable__cell">
                                        <span class="pay">Thanh toán</span>

                                    </td>
                                </tr>

                                <tr class="m-datatable__row m-datatable__row--even">
                                    <td style="width:30px;" class="m-datatable__cell">11</td>
                                    <td class="m-datatable__cell">Kim cương 4 -> Kim cương 3</td>
                                    <td style="width:150px;" class="m-datatable__cell">40,000 VNĐ</td>
                                    <td class="m-datatable__cell">
                                        <span class="pay">Thanh toán</span>

                                    </td>
                                </tr>

                                <tr class="m-datatable__row m-datatable__row--even">
                                    <td style="width:30px;" class="m-datatable__cell">12</td>
                                    <td class="m-datatable__cell">Kim cương 3 -> Kim cương 2</td>
                                    <td style="width:150px;" class="m-datatable__cell">40,000 VNĐ</td>
                                    <td class="m-datatable__cell">
                                        <span class="pay">Thanh toán</span>

                                    </td>
                                </tr>

                                <tr class="m-datatable__row m-datatable__row--even">
                                    <td style="width:30px;" class="m-datatable__cell">13</td>
                                    <td class="m-datatable__cell">Kim cương 2 -> Kim cương 1</td>
                                    <td style="width:150px;" class="m-datatable__cell">40,000 VNĐ</td>
                                    <td class="m-datatable__cell">
                                        <span class="pay">Thanh toán</span>

                                    </td>
                                </tr>

                                <tr class="m-datatable__row m-datatable__row--even">
                                    <td style="width:30px;" class="m-datatable__cell">14</td>
                                    <td class="m-datatable__cell">Kim cương 1 -> Tinh anh 5</td>
                                    <td style="width:150px;" class="m-datatable__cell">40,000 VNĐ</td>
                                    <td class="m-datatable__cell">
                                        <span class="pay">Thanh toán</span>

                                    </td>
                                </tr>

                                <tr class="m-datatable__row m-datatable__row--even">
                                    <td style="width:30px;" class="m-datatable__cell">15</td>
                                    <td class="m-datatable__cell">Tinh anh 5 -> Tinh anh 4</td>
                                    <td style="width:150px;" class="m-datatable__cell">50,000 VNĐ</td>
                                    <td class="m-datatable__cell">
                                        <span class="pay">Thanh toán</span>

                                    </td>
                                </tr>

                                <tr class="m-datatable__row m-datatable__row--even">
                                    <td style="width:30px;" class="m-datatable__cell">16</td>
                                    <td class="m-datatable__cell">Tinh anh 4 -> Tinh anh 3</td>
                                    <td style="width:150px;" class="m-datatable__cell">50,000 VNĐ</td>
                                    <td class="m-datatable__cell">
                                        <span class="pay">Thanh toán</span>

                                    </td>
                                </tr>

                                <tr class="m-datatable__row m-datatable__row--even">
                                    <td style="width:30px;" class="m-datatable__cell">17</td>
                                    <td class="m-datatable__cell">Tinh anh 3 -> Tinh anh 2</td>
                                    <td style="width:150px;" class="m-datatable__cell">50,000 VNĐ</td>
                                    <td class="m-datatable__cell">
                                        <span class="pay">Thanh toán</span>

                                    </td>
                                </tr>

                                <tr class="m-datatable__row m-datatable__row--even">
                                    <td style="width:30px;" class="m-datatable__cell">18</td>
                                    <td class="m-datatable__cell">Tinh anh 2 -> Tinh anh 1</td>
                                    <td style="width:150px;" class="m-datatable__cell">50,000 VNĐ</td>
                                    <td class="m-datatable__cell">
                                        <span class="pay">Thanh toán</span>

                                    </td>
                                </tr>

                                <tr class="m-datatable__row m-datatable__row--even">
                                    <td style="width:30px;" class="m-datatable__cell">19</td>
                                    <td class="m-datatable__cell">Tinh anh 1 -> Cao thủ 1*</td>
                                    <td style="width:150px;" class="m-datatable__cell">80,000 VNĐ</td>
                                    <td class="m-datatable__cell">
                                        <span class="pay">Thanh toán</span>

                                    </td>
                                </tr>

                                <tr class="m-datatable__row m-datatable__row--even">
                                    <td style="width:30px;" class="m-datatable__cell">20</td>
                                    <td class="m-datatable__cell">Cao thủ 1* -> Cao thủ 5*</td>
                                    <td style="width:150px;" class="m-datatable__cell">100,000 VNĐ</td>
                                    <td class="m-datatable__cell">
                                        <span class="pay">Thanh toán</span>

                                    </td>
                                </tr>

                                <tr class="m-datatable__row m-datatable__row--even">
                                    <td style="width:30px;" class="m-datatable__cell">21</td>
                                    <td class="m-datatable__cell">Cao thủ 5* -> Cao thủ 10*</td>
                                    <td style="width:150px;" class="m-datatable__cell">200,000 VNĐ</td>
                                    <td class="m-datatable__cell">
                                        <span class="pay">Thanh toán</span>

                                    </td>
                                </tr>

                                <tr class="m-datatable__row m-datatable__row--even">
                                    <td style="width:30px;" class="m-datatable__cell">22</td>
                                    <td class="m-datatable__cell">Cao thủ 10* -> Cao thủ 15 *</td>
                                    <td style="width:150px;" class="m-datatable__cell">100,000 VNĐ</td>
                                    <td class="m-datatable__cell">
                                        <span class="pay">Thanh toán</span>

                                    </td>
                                </tr>

                                <tr class="m-datatable__row m-datatable__row--even">
                                    <td style="width:30px;" class="m-datatable__cell">23</td>
                                    <td class="m-datatable__cell">Cao thủ 15 * -> Cao thủ 20*</td>
                                    <td style="width:150px;" class="m-datatable__cell">100,000 VNĐ</td>
                                    <td class="m-datatable__cell">
                                        <span class="pay">Thanh toán</span>

                                    </td>
                                </tr>

                                <tr class="m-datatable__row m-datatable__row--even">
                                    <td style="width:30px;" class="m-datatable__cell">24</td>
                                    <td class="m-datatable__cell">Cao thủ 20* -> Cao thủ 25*</td>
                                    <td style="width:150px;" class="m-datatable__cell">100,000 VNĐ</td>
                                    <td class="m-datatable__cell">
                                        <span class="pay">Thanh toán</span>

                                    </td>
                                </tr>

                                <tr class="m-datatable__row m-datatable__row--even">
                                    <td style="width:30px;" class="m-datatable__cell">25</td>
                                    <td class="m-datatable__cell">Cao thủ 25* -> Cao thủ 30*</td>
                                    <td style="width:150px;" class="m-datatable__cell">100,000 VNĐ</td>
                                    <td class="m-datatable__cell">
                                        <span class="pay">Thanh toán</span>

                                    </td>
                                </tr>

                                <tr class="m-datatable__row m-datatable__row--even">
                                    <td style="width:30px;" class="m-datatable__cell">26</td>
                                    <td class="m-datatable__cell">Cao thủ 30* -> Cao thủ 35*</td>
                                    <td style="width:150px;" class="m-datatable__cell">100,000 VNĐ</td>
                                    <td class="m-datatable__cell">
                                        <span class="pay">Thanh toán</span>

                                    </td>
                                </tr>

                                <tr class="m-datatable__row m-datatable__row--even">
                                    <td style="width:30px;" class="m-datatable__cell">27</td>
                                    <td class="m-datatable__cell">Cao thủ 35* -> Cao thủ 40*</td>
                                    <td style="width:150px;" class="m-datatable__cell">100,000 VNĐ</td>
                                    <td class="m-datatable__cell">
                                        <span class="pay">Thanh toán</span>

                                    </td>
                                </tr>

                                <tr class="m-datatable__row m-datatable__row--even">
                                    <td style="width:30px;" class="m-datatable__cell">28</td>
                                    <td class="m-datatable__cell">Cao thủ 40* -> Cao thủ 45*</td>
                                    <td style="width:150px;" class="m-datatable__cell">100,000 VNĐ</td>
                                    <td class="m-datatable__cell">
                                        <span class="pay">Thanh toán</span>

                                    </td>
                                </tr>

                                <tr class="m-datatable__row m-datatable__row--even">
                                    <td style="width:30px;" class="m-datatable__cell">29</td>
                                    <td class="m-datatable__cell">Cao thủ 45* -> Cao thủ 50*</td>
                                    <td style="width:150px;" class="m-datatable__cell">100,000 VNĐ</td>
                                    <td class="m-datatable__cell">
                                        <span class="pay">Thanh toán</span>

                                    </td>
                                </tr>


                                </tbody>
                            </table>
                            <style type="text/css">
                                @media  only screen and (max-width: 640px) {
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
                    <input type="hidden" id="json_rank" name="custId" value="{&quot;id&quot;:1783,&quot;idkey&quot;:null,&quot;module&quot;:&quot;service&quot;,&quot;locale&quot;:null,&quot;title&quot;:&quot;C\u00e0y thu\u00ea Li\u00ean qu\u00e2n&quot;,&quot;acc_name&quot;:null,&quot;acc_pass&quot;:null,&quot;acc_mail&quot;:null,&quot;acc_pass_mail&quot;:null,&quot;info_plus&quot;:null,&quot;info_plus2&quot;:null,&quot;info_plus3&quot;:null,&quot;buyer&quot;:null,&quot;buy_at&quot;:null,&quot;check_pass&quot;:0,&quot;check_pass_at&quot;:null,&quot;sticky&quot;:null,&quot;description&quot;:&quot;&lt;p&gt;&lt;strong&gt;L\u01afU &amp;Yacute; : Uy t&amp;iacute;n c\u1ee7a nick c\u1ea7n c&amp;agrave;y ph\u1ea3i tr&amp;ecirc;n 85&lt;\/strong&gt;&lt;\/p&gt;\r\n\r\n&lt;p&gt;- C&amp;agrave;y thu&amp;ecirc; Li&amp;ecirc;n Qu&amp;acirc;n uy t&amp;iacute;n gi&amp;aacute; r\u1ebb&lt;\/p&gt;\r\n\r\n&lt;p&gt;- B\u1ea3o m\u1eadt 100% . Kh&amp;ocirc;ng d&amp;ugrave;ng ph\u1ea7n m\u1ec1m l\u1eadu .&lt;\/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;&lt;span style=\&quot;color:#c0392b\&quot;&gt;- 4 b\u1eadc rank b&amp;ecirc;n m&amp;igrave;nh m\u1ea5t kho\u1ea3ng 1 ng&amp;agrave;y h\u01a1n \u0111\u1ec3 c&amp;agrave;y . N&amp;ecirc;n t\u1eeb khi ti\u1ebfp nh\u1eadn \u0111\u01a1n c&amp;aacute;c b\u1ea1n kh&amp;ocirc;ng n&amp;ecirc;n login v&amp;agrave;o game \u0111\u1ec3 b&amp;ecirc;n m&amp;igrave;nh kh&amp;ocirc;ng g\u1eb7p tr\u1ee5c tr\u1eb7c khi c&amp;agrave;y . C\u1ea2M \u01a0N !!&lt;\/span&gt;&lt;\/strong&gt;&lt;\/p&gt;&quot;,&quot;content&quot;:&quot;&lt;p&gt;- C&amp;agrave;y thu&amp;ecirc; Li&amp;ecirc;n Qu&amp;acirc;n uy t&amp;iacute;n gi&amp;aacute; r\u1ebb - B\u1ea3o m\u1eadt 100% . Kh&amp;ocirc;ng d&amp;ugrave;ng ph\u1ea7n m\u1ec1m l\u1eadu .&lt;\/p&gt;\r\n\r\n&lt;p&gt;&lt;span style=\&quot;color:#c0392b\&quot;&gt;&lt;strong&gt;- 4 b\u1eadc rank b&amp;ecirc;n m&amp;igrave;nh m\u1ea5t kho\u1ea3ng 1 ng&amp;agrave;y h\u01a1n \u0111\u1ec3 c&amp;agrave;y . N&amp;ecirc;n t\u1eeb khi ti\u1ebfp nh\u1eadn \u0111\u01a1n c&amp;aacute;c b\u1ea1n kh&amp;ocirc;ng n&amp;ecirc;n login v&amp;agrave;o game \u0111\u1ec3 b&amp;ecirc;n m&amp;igrave;nh kh&amp;ocirc;ng g\u1eb7p tr\u1ee5c tr\u1eb7c khi c&amp;agrave;y . C\u1ea2M \u01a0N !!&lt;\/strong&gt;&lt;\/span&gt;&lt;\/p&gt;&quot;,&quot;image&quot;:&quot;\/images\/Qt5i235PIT_1624011783.jpg&quot;,&quot;image_extension&quot;:null,&quot;slug&quot;:&quot;cay-thue-lien-quan&quot;,&quot;url&quot;:null,&quot;author&quot;:null,&quot;params&quot;:&quot;{\&quot;input_auto\&quot;:\&quot;0\&quot;,\&quot;idkey\&quot;:null,\&quot;image_oldest\&quot;:\&quot;1\&quot;,\&quot;server_mode\&quot;:\&quot;0\&quot;,\&quot;server_price\&quot;:\&quot;1\&quot;,\&quot;server_id\&quot;:[\&quot;0\&quot;],\&quot;server_data\&quot;:[null],\&quot;server_data_minValue\&quot;:[null],\&quot;server_data_maxValue\&quot;:[null],\&quot;filter_name\&quot;:\&quot;Ti\u1ec1n\&quot;,\&quot;filter_type\&quot;:\&quot;6\&quot;,\&quot;input_pack_min\&quot;:null,\&quot;input_pack_max\&quot;:null,\&quot;input_pack_rate\&quot;:null,\&quot;id\&quot;:[\&quot;7\&quot;,\&quot;7\&quot;,\&quot;7\&quot;,\&quot;7\&quot;,\&quot;7\&quot;,\&quot;7\&quot;,\&quot;7\&quot;,\&quot;7\&quot;,\&quot;7\&quot;,\&quot;7\&quot;,\&quot;7\&quot;,\&quot;7\&quot;,\&quot;7\&quot;,\&quot;7\&quot;,\&quot;7\&quot;,\&quot;7\&quot;,\&quot;7\&quot;,\&quot;7\&quot;,\&quot;7\&quot;,\&quot;7\&quot;,\&quot;7\&quot;,null,null,null,null,null,null,null,null,null],\&quot;name\&quot;:[\&quot;V\u00e0ng 4\&quot;,\&quot;V\u00e0ng 3\&quot;,\&quot;V\u00e0ng 2\&quot;,\&quot;V\u00e0ng 1\&quot;,\&quot;B\u1ea1ch Kim 5\&quot;,\&quot;B\u1ea1ch kim 4\&quot;,\&quot;B\u1ea1ch kim 3\&quot;,\&quot;B\u1ea1ch kim 2\&quot;,\&quot;B\u1ea1ch kim 1\&quot;,\&quot;Kim c\u01b0\u01a1ng 5\&quot;,\&quot;Kim c\u01b0\u01a1ng 4\&quot;,\&quot;Kim c\u01b0\u01a1ng 3\&quot;,\&quot;Kim c\u01b0\u01a1ng 2\&quot;,\&quot;Kim c\u01b0\u01a1ng 1\&quot;,\&quot;Tinh anh 5\&quot;,\&quot;Tinh anh 4\&quot;,\&quot;Tinh anh 3\&quot;,\&quot;Tinh anh 2\&quot;,\&quot;Tinh anh 1\&quot;,\&quot;Cao th\u1ee7 1*\&quot;,\&quot;Cao th\u1ee7 5*\&quot;,\&quot;Cao th\u1ee7 10*\&quot;,\&quot;Cao th\u1ee7 15 *\&quot;,\&quot;Cao th\u1ee7 20*\&quot;,\&quot;Cao th\u1ee7 25*\&quot;,\&quot;Cao th\u1ee7 30*\&quot;,\&quot;Cao th\u1ee7 35*\&quot;,\&quot;Cao th\u1ee7 40*\&quot;,\&quot;Cao th\u1ee7 45*\&quot;,\&quot;Cao th\u1ee7 50*\&quot;],\&quot;price\&quot;:[\&quot;0\&quot;,\&quot;40000\&quot;,\&quot;80000\&quot;,\&quot;120000\&quot;,\&quot;160000\&quot;,\&quot;200000\&quot;,\&quot;240000\&quot;,\&quot;280000\&quot;,\&quot;320000\&quot;,\&quot;360000\&quot;,\&quot;400000\&quot;,\&quot;440000\&quot;,\&quot;480000\&quot;,\&quot;520000\&quot;,\&quot;560000\&quot;,\&quot;610000\&quot;,\&quot;660000\&quot;,\&quot;710000\&quot;,\&quot;760000\&quot;,\&quot;840000\&quot;,\&quot;940000\&quot;,\&quot;1140000\&quot;,\&quot;1240000\&quot;,\&quot;1340000\&quot;,\&quot;1440000\&quot;,\&quot;1540000\&quot;,\&quot;1640000\&quot;,\&quot;1740000\&quot;,\&quot;1840000\&quot;,\&quot;1940000\&quot;],\&quot;discount\&quot;:[\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,null,null,null,null,null,null,null,null,null],\&quot;total\&quot;:[null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,\&quot;NaN\&quot;,\&quot;NaN\&quot;,\&quot;NaN\&quot;,\&quot;NaN\&quot;,\&quot;NaN\&quot;,\&quot;NaN\&quot;,\&quot;NaN\&quot;,\&quot;NaN\&quot;,\&quot;NaN\&quot;,\&quot;NaN\&quot;],\&quot;day\&quot;:[\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,null,null,null,null,null,null,null,null,null],\&quot;punish_price\&quot;:[\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,null,null,null,null,null,null,null,null,null],\&quot;praise_day\&quot;:[\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,null,null,null,null,null,null,null,null,null],\&quot;praise_price\&quot;:[\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,\&quot;0\&quot;,null,null,null,null,null,null,null,null,null],\&quot;send_name\&quot;:[\&quot;T\u00e0i kho\u1ea3n\&quot;,\&quot;M\u1eadt kh\u1ea9u\&quot;],\&quot;send_type\&quot;:[\&quot;1\&quot;,\&quot;5\&quot;],\&quot;send_id0\&quot;:[null],\&quot;send_data0\&quot;:[null],\&quot;send_id1\&quot;:[null],\&quot;send_data1\&quot;:[null],\&quot;input_send_desc\&quot;:\&quot;Khi mua ng\u1ecdc t\u1ea1i web c\u00e1c b\u1ea1n l\u01b0u \u00fd \u0111\u1ec3 trong nick 1 ng\u1ecdc v\u00e0 \u0111\u1ee9ng t\u1ea1i si\u00eau th\u1ecb \u0111\u1ec3 nh\u1eadn ng\u1ecdc nhanh nh\u00e9\&quot;,\&quot;captcha\&quot;:null}&quot;,&quot;price&quot;:null,&quot;price_old&quot;:null,&quot;price_base&quot;:null,&quot;totalsubitems&quot;:null,&quot;totalviews&quot;:30893,&quot;order&quot;:null,&quot;position&quot;:null,&quot;app_client&quot;:null,&quot;hide_for&quot;:&quot;null&quot;,&quot;tranid&quot;:null,&quot;status&quot;:1,&quot;lastview&quot;:null,&quot;expired_lock&quot;:null,&quot;input_auto&quot;:0,&quot;parrent_id&quot;:null,&quot;created_at&quot;:&quot;2019-06-14 18:12:55&quot;,&quot;updated_at&quot;:&quot;2022-03-09 19:42:28&quot;,&quot;ended_at&quot;:null,&quot;ratio&quot;:null,&quot;request_id&quot;:null,&quot;groups&quot;:[{&quot;id&quot;:732,&quot;idkey&quot;:null,&quot;module&quot;:&quot;service_category&quot;,&quot;locale&quot;:null,&quot;level&quot;:null,&quot;parrent_id&quot;:0,&quot;parrent_sid&quot;:null,&quot;title&quot;:&quot;Li\u00ean qu\u00e2n&quot;,&quot;description&quot;:&quot;&lt;p&gt;&lt;strong&gt;&lt;a href=\&quot;https:\/\/lienquan.garena.vn\/\&quot; target=\&quot;_blank\&quot;&gt;Game Li&amp;ecirc;n Qu&amp;acirc;n Mobile&lt;\/a&gt;&lt;\/strong&gt;&amp;nbsp;\u0111\u01b0\u1ee3c ph&amp;aacute;t h&amp;agrave;nh b\u1edfi&amp;nbsp;&amp;nbsp;&lt;strong&gt;&lt;a href=\&quot;https:\/\/www.garena.vn\/\&quot; target=\&quot;_blank\&quot;&gt;GARENA&lt;\/a&gt;&lt;\/strong&gt;&amp;nbsp;.&lt;\/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;&lt;a href=\&quot;https:\/\/nick.vn\/garena\/lien-quan\&quot;&gt;Web mua b&amp;aacute;n nick Li&amp;ecirc;n Qu&amp;acirc;n Mobile UY T&amp;Iacute;N - GI&amp;Aacute; R\u1eba&lt;\/a&gt;&lt;\/strong&gt;&amp;nbsp;c\u1ee7a&amp;nbsp;&lt;strong&gt;&lt;a href=\&quot;https:\/\/www.youtube.com\/channel\/UCmBNwy06bT0ypxFjYaIXlmA\&quot; target=\&quot;_blank\&quot;&gt;Quanplay&lt;\/a&gt;&lt;\/strong&gt;&amp;nbsp;Ch\u1ee7&amp;nbsp;&lt;strong&gt;Webnick.vn&lt;\/strong&gt;.&amp;nbsp;&lt;a href=\&quot;https:\/\/nick.vn\/garena\/lien-quan\&quot;&gt;&lt;strong&gt;Shop b&amp;aacute;n acc Li&amp;ecirc;n Qu&amp;acirc;n&lt;\/strong&gt;&lt;\/a&gt;&amp;nbsp;-&amp;nbsp;&lt;a href=\&quot;https:\/\/nick.vn\/garena\/lien-quan?find=&amp;amp;id=&amp;amp;price=tren-1-trieu&amp;amp;status=1&amp;amp;attribute_id_592=&amp;amp;attribute_id_593=\&quot; target=\&quot;_blank\&quot;&gt;&lt;strong&gt;T&amp;agrave;i kho\u1ea3n Li&amp;ecirc;n Qu&amp;acirc;n Vip&lt;\/strong&gt;&lt;\/a&gt;,&amp;nbsp;&lt;a href=\&quot;https:\/\/nick.vn\/garena\/lien-quan?find=&amp;amp;id=&amp;amp;price=&amp;amp;status=1&amp;amp;attribute_id_592=594&amp;amp;attribute_id_593=\&quot; target=\&quot;_blank\&quot;&gt;&lt;strong&gt;Nick Li&amp;ecirc;n qu&amp;acirc;n c&amp;oacute; \u0111&amp;aacute; qu&amp;yacute;&lt;\/strong&gt;&lt;\/a&gt;, &amp;nbsp;&lt;\/p&gt;\r\n\r\n&lt;p&gt;Ngo&amp;agrave;i&amp;nbsp;&lt;strong&gt;mua&amp;nbsp;b&amp;aacute;n nick lq&lt;\/strong&gt;&amp;nbsp;website c&amp;ograve;n&amp;nbsp;&lt;strong&gt;&lt;a href=\&quot;https:\/\/nick.vn\/mua-the\&quot; target=\&quot;_blank\&quot;&gt;b&amp;aacute;n th\u1ebb Garena&lt;\/a&gt;&lt;\/strong&gt;&amp;nbsp;,&lt;a href=\&quot;https:\/\/nick.vn\/dich-vu\/ban-quan-huy\&quot; target=\&quot;_blank\&quot;&gt;&lt;strong&gt;mua b&amp;aacute;n qu&amp;acirc;n huy gi&amp;aacute; r\u1ebb&lt;\/strong&gt;&lt;\/a&gt;,&lt;a href=\&quot;https:\/\/nick.vn\/garena\/lien-quan-random-so-cap\&quot; target=\&quot;_blank\&quot;&gt;&amp;nbsp;&lt;strong&gt;b&amp;aacute;n acc li&amp;ecirc;n qu&amp;acirc;n random&lt;\/strong&gt;&lt;\/a&gt;&amp;nbsp;ch\u1ec9 t\u1eeb 12k - 18k -60k v&amp;agrave; r\u1ea5t nhi\u1ec1u d\u1ecbch v\u1ee5 kh&amp;aacute;c v\u1ec1&amp;nbsp;&lt;strong&gt;&lt;a href=\&quot;https:\/\/www.youtube.com\/channel\/UCpnQwjzvDm1MOMtZV2zkVpA\&quot; target=\&quot;_blank\&quot;&gt;game LQM&lt;\/a&gt;&lt;\/strong&gt;&lt;\/p&gt;&quot;,&quot;content&quot;:null,&quot;content_json&quot;:null,&quot;icon&quot;:null,&quot;image&quot;:&quot;\/images\/uB4bwXdTL8_1623227488.jpg&quot;,&quot;slug&quot;:&quot;lien-quan&quot;,&quot;url&quot;:null,&quot;type_url&quot;:null,&quot;type_input&quot;:null,&quot;type_required&quot;:null,&quot;parrent_attribute_id&quot;:null,&quot;target&quot;:null,&quot;params&quot;:null,&quot;game_provider_id&quot;:null,&quot;totalitems&quot;:null,&quot;order&quot;:1,&quot;position&quot;:null,&quot;show_index&quot;:null,&quot;require_checkpass&quot;:1,&quot;status&quot;:1,&quot;created_at&quot;:&quot;2021-07-31 16:03:13&quot;,&quot;updated_at&quot;:&quot;2021-07-31 16:03:13&quot;,&quot;ended_at&quot;:null,&quot;is_random&quot;:0,&quot;is_ruby&quot;:null,&quot;price_sticky&quot;:null,&quot;price_default&quot;:&quot;0&quot;,&quot;description_default&quot;:null,&quot;image_default&quot;:null,&quot;notice_popup&quot;:null,&quot;user_wheel&quot;:null,&quot;user_wheel_order&quot;:null,&quot;description2&quot;:null,&quot;sale_icon&quot;:null,&quot;pivot&quot;:{&quot;item_id&quot;:1783,&quot;group_id&quot;:732,&quot;order&quot;:null}}]}">
                </div>

                <div class="modal fade" id="homealert" role="dialog" style="display: none;" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="loader" style="text-align: center"><img src="/assets/frontend/images/loader.gif" style="width: 50px;height: 50px;display: none"></div>
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;text-align: center">Xác nhận thông tin thanh toán</h4>

                    </div>

                    <div class="modal-body">

                        <span class="mb-15 control-label bb">Tài khoản:</span>

                        <div class="mb-15">
                            <input type="text" required name="customer_data0" class="form-control t14 " placeholder="Tài khoản" value="">
                        </div>


                        <span class="mb-15 control-label bb">Mật khẩu:</span>

                        <div class="mb-15">
                            <input type="password" required class="form-control" name="customer_data1" placeholder="Mật khẩu">
                        </div>

                        <div style="font-size: 12px;" class="" id="content-sever"></div>




                    </div>
                    <div class="modal-footer">

                        <button type="submit" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold loading" id="d3" style="" >Xác nhận thanh toán</button>



                        <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>

                    </div>


                </div>
            </div>
        </div>
            </form>

            <div class="container">
                <div class="job-wide-devider">

                    <div class="row">
                        <div class="col-lg-12 column">
                            <div class="job-details">
                                <h2 style="margin-bottom: 23px;font-size: 20px;font-weight: bold;text-transform: uppercase;">Mô tả</h2>
                                <div class="article-content">
                                    <p>- C&agrave;y thu&ecirc; Li&ecirc;n Qu&acirc;n uy t&iacute;n gi&aacute; rẻ - Bảo mật 100% . Kh&ocirc;ng d&ugrave;ng phần mềm lậu .</p>

                                    <p><span style="color:#c0392b"><strong>- 4 bậc rank b&ecirc;n m&igrave;nh mất khoảng 1 ng&agrave;y hơn để c&agrave;y . N&ecirc;n từ khi tiếp nhận đơn c&aacute;c bạn kh&ocirc;ng n&ecirc;n login v&agrave;o game để b&ecirc;n m&igrave;nh kh&ocirc;ng gặp trục trặc khi c&agrave;y . CẢM ƠN !!</strong></span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="container m-t-20 ">

                <div class="game-item-view" style="margin-top: 40px">
                    <div class="c-content-title-1">
                        <h3 class="c-center c-font-uppercase c-font-bold">Dịch vụ khác</h3>
                        <div class="c-line-center c-theme-bg"></div>
                    </div>
                    <div class="row row-flex  item-list row-flex-safari game-list">
                        <div class="col-sm-6 col-md-3">
                            <div class="classWithPad">
                                <div class="image">

                                    <a href="/dich-vu/nap-quan-huy">
                                        <img src="/storage/images/4NzGMatTAo_1623292409.jpg">

                                    </a>

                                </div>
                                <div class="news_title"><a href="/dich-vu/nap-quan-huy">Nạp quân huy</a></div>


                                <div class="a-more" style="margin-top: 15px">
                                    <div class="row">
                                        <div class="col-xs-6">

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>


                <div class="tab-vertical tutorial_area">
                    <div class="panel-group" id="accordion">



                    </div>
                </div>

            </div>

    </div>

    <!-- END: PAGE CONTENT -->
    </div>

    <div class="modal fade" id="noticeModal" role="dialog" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="loader" style="text-align: center"><img src="/assets/frontend/images/loader.gif"
                                                                style="width: 50px;height: 50px;display: none"></div>
            <div class="modal-content">

            </div>
        </div>
    </div>

    <div class="modal fade" id="LoadModal" role="dialog" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="loader" style="text-align: center"><img src="/assets/frontend/images/loader.gif"
                                                                style="width: 50px;height: 50px;display: none"></div>
            <div class="modal-content">
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="/assets/frontend/css/service.css">
    <script src="/assets/frontend/js/service/dich-vu-chon-a-b.js"></script>
@endsection
