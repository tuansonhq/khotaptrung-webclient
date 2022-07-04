@if(isset($data))

    <div class="row marginauto">
        <div class="col-lg-6 col-md-12 shop_product_detailS__col">
            <div class="gallery" style="overflow: hidden">
                <div class="swiper gallery-slider">
                    <div class="swiper-wrapper">
                        @foreach(explode('|',$data->image_extension) as $val)
                            <div class="swiper-slide">
                                <a data-fancybox="gallerycoverDetail" href="{{\App\Library\MediaHelpers::media($val)}}">
                                    <img src="{{\App\Library\MediaHelpers::media($val)}}" alt="" >
                                </a>
                            </div>
                        @endforeach
                    </div>

                    <div class="swiper-button-prev">
                        <i class="fas fa-chevron-left"></i>
                    </div>
                    <div class="swiper-button-next">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </div>

                <div class="swiper gallery-thumbs gallery-thumbsmaxheadth">
                    <div class="swiper-wrapper">
                        @foreach(explode('|',$data->image_extension) as $val)
                            <div class="swiper-slide">
                                <a data-fancybox="gallerycoverDetail" href="{{\App\Library\MediaHelpers::media($val)}}">
                                    <img src="{{\App\Library\MediaHelpers::media($val)}}" alt="" class="lazy">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 gallery__right">
            <div class="row gallery__row fixcssacount">
                <div class="col-md-12">
                    <div class="row gallery__01">
                        <div class="col-md-12 gallery__01__row">
                            <div class="row">
                                <div class="col-auto">
                                    <span class="gallery__01__span">Mã số:</span>
                                </div>
                                <div class="col-md-8 col-8 pl-0">
                                    <span class="gallery__01__span">#{{ $data->randId }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 gallery__01__row2">
                            <div class="row">
                                <div class="col-auto">
                                    <span class="gallery__02__span">Danh mục:</span>
                                </div>
                                <div class="col-md-8 col-8  pl-0">
                                    <a class="theashow"  href="/mua-acc/{{ isset($data->category->custom->slug) ? $data->category->custom->slug :  $data->category->slug }}"><span class="gallery__02__span">{{ isset($data->category->custom->title) ? $data->category->custom->title :  $data->category->title }}</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 gallery__pt">
                    <div class="row gallery__02">
                        <div class="col-md-12 gallery__01__row">
                            <div class="row">
                                @if(isset($card_percent))
                                    @if($card_percent == 0)
                                    @else
                                        <div class="col-md-5 col-sm-5 col-5">
                                            <div class="row text-left">
                                                <div class="col-md-12">
                                                    <span class="gallery__02__span__02">THẺ CÀO</span>
                                                </div>
                                                <div class="col-md-12">

                                                    <span class="gallery__01__span__02">{{ str_replace(',','.',number_format(round($data->price))) }} CARD</span>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-2 gallery__01__span__02md">
                                            <div class="row text-center">
                                                <div class="col-md-12">
                                                    <span class="hoac">Hoặc</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @else
                                    <div class="col-md-5 col-sm-5 col-5">
                                        <div class="row text-left">
                                            <div class="col-md-12">
                                                <span class="gallery__02__span__02">THẺ CÀO</span>
                                            </div>
                                            <div class="col-md-12">

                                                <span class="gallery__01__span__02">{{ str_replace(',','.',number_format(round($data->price))) }} CARD</span>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-2 gallery__01__span__02md">
                                        <div class="row text-center">
                                            <div class="col-md-12">
                                                <span class="hoac">Hoặc</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                <div class="col-md-5 col-sm-5 col-5">
                                    <div class="row text-right">
                                        <div class="col-md-12">
                                            <span class="gallery__02__span__02">ATM</span>
                                        </div>
                                        <div class="col-md-12">
                                            @if(isset($data->price_atm))
                                                <span class="gallery__01__span__02">{{ str_replace(',','.',number_format(round($data->price_atm))) }} ATM</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @if(isset($data->groups))
                    <?php $att_values = $data->groups ?>
                    @foreach($att_values as $att_value)
                        @if(isset($att_value->module) && $att_value->module == 'acc_label' && $att_value->is_slug_override == null)
                            @if(isset($att_value->parent))
                                <div class="col-md-12">
                                    <div class="row gallery__03">
                                        <div class="col-md-12 gallery__01__row">
                                            <div class="row">
                                                <div class="col-auto span__dangky__auto">
                                                    <i class="fas fa-angle-right"></i>
                                                </div>
                                                <div class="col-md-4 col-4 pl-0">
                                                    <span class="span__dangky">{{ $att_value->parent->title??null }}</span>
                                                </div>
                                                <div class="col-md-6 col-6 pl-0">
                                                    <span class="span__dangky">{{ $att_value->title??null }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endif
                    @endforeach
                @endif
                @if(isset($data->params) && isset($data->params->ext_info))
                    <?php $params = json_decode(json_encode($data->params->ext_info),true) ?>
                    @foreach($params as $key => $param)
                        <div class="col-md-12">
                            <div class="row gallery__03">
                                <div class="col-md-12 gallery__01__row">
                                    <div class="row">
                                        <div class="col-auto span__dangky__auto">
                                            <i class="fas fa-angle-right"></i>
                                        </div>
                                        <div class="col-md-4 col-4 pl-0">
                                            <span class="span__dangky">{{ $key }}</span>
                                        </div>
                                        <div class="col-md-6 col-6 pl-0">
                                            <span class="span__dangky">{{ $param }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
                <div class="col-md-12 gallery__bottom">
                    <div class="row text-center">
                        <div class="col-md-12 gallery__01__row">
                            <div class="row gallery__01__row2">
                                <div class="col-md-12 pl-0 pr-0">
                                    <button class="btn btn-danger gallery__bottom__span gallery__bottom__span_bg buyacc" style="position: relative;" data-id="{{ encodeItemID($data->id) }}"><i class="fas fa-cart-arrow-down"></i>&ensp;Mua ngay
                                        <div class="row justify-content-center loading-data__buyacc">
                                        </div>
                                    </button>
                                </div>
                                <div class="col-md-12 pl-0 pr-0 gallery__bottom">
                                    <div class="row atmvdtntc">
                                        <div class="col-md-6 col-sm-6 col-6 atmvdt">
                                            @if(App\Library\AuthCustom::check())
                                                <a href="/recharge-atm" class="btn btn-warning gallery__bottom__span_bg__2 gallery__bottom__span" style="color:#FFFFFF;">ATM - VÍ ĐIỆN TỬ</a>
                                            @else
                                                <a href="/login?return_url=/recharge-atm" class="btn btn-warning gallery__bottom__span_bg__2 gallery__bottom__span" style="color:#FFFFFF;">ATM - VÍ ĐIỆN TỬ</a>
                                            @endif
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-6 ntc">
                                            @if(App\Library\AuthCustom::check())
                                                <a href="/nap-the" class="btn btn-warning gallery__bottom__span_bg__2 gallery__bottom__span" style="color:#FFFFFF;">NẠP THẺ CÀO</a>
                                            @else
                                                <a href="/login?return_url=/nap-the" class="btn btn-warning gallery__bottom__span_bg__2 gallery__bottom__span" style="color:#FFFFFF;">NẠP THẺ CÀO</a>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade modal__buyacount loadModal__acount" id="LoadModal" role="dialog" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog__account" role="document">
                <div class="loader" style="text-align: center"><img src="/assets/frontend/{{theme('')->theme_key}}/images/loader.gif" style="width: 50px;height: 50px;display: none"></div>
                <div class="modal-content modal-content_accountlist">

                    <form class="formDonhangAccount" action="/acc/{{ $data->randId }}/databuy" method="POST">
                        {{ csrf_field() }}

                        <div class="modal-header">
                            <h4 class="modal-title">Xác nhận mua tài khoản</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <div class="c-content-tab-4 c-opt-3" role="tabpanel">
                                <ul class="nav nav-justified nav-justified__ul" role="tablist">
                                    <li role="presentation" class="active justified__ul_li">
                                        <a href="#paymentv2" role="tab" data-toggle="tab" aria-selected="true" class="c-font-16 active">Thanh toán</a>
                                    </li>
                                    <li role="presentation" class="justified__ul_li">
                                        <a href="#info2" role="tab" data-toggle="tab" aria-selected="false" class="c-font-16">Thông tin tài khoản</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active show" id="paymentv2">
                                        <ul class="c-tab-items p-t-0 p-b-0 p-l-5 p-r-5">
                                            <li class="c-font-dark">
                                                <table class="table table-striped">
                                                    <tbody><tr>
                                                        <th colspan="2">Thông tin tài khoản #{{ $data->randId }}</th>
                                                    </tr>
                                                    </tbody><tbody>
                                                    <tr>
                                                        <td>Nhà phát hành:</td>
                                                        <th>{{ $data->groups[0]->title }}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Tên game:</td>

                                                        <th>{{ isset($data->category->custom->title) ? $data->category->custom->title :  $data->category->title }}</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Giá tiền:</td>
                                                        <th class="text-info">
                                                            @if(isset($data->category->params->price) && isset($data->category->params))
                                                                {{ str_replace(',','.',number_format($data->category->params->price)) }} đ
                                                            @else
                                                                {{ str_replace(',','.',number_format($data->price)) }} đ
                                                            @endif
                                                        </th>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </li>
                                        </ul>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="info2">
                                        <ul class="c-tab-items p-t-0 p-b-0 p-l-5 p-r-5">
                                            <li class="c-font-dark">
                                                <table class="table table-striped">
                                                    <tbody>
                                                    <tr>
                                                        <th colspan="2">Chi tiết tài khoản #{{ $data->randId }}</th>
                                                    </tr>
                                                    @if(isset($data->groups))
                                                        <?php $att_values = $data->groups ?>

                                                        @foreach($att_values as $att_value)
                                                            @if($att_value->module == 'acc_label' && $att_value->is_slug_override == null)
                                                                @if(isset($att_value->parent))
                                                                    <tr>
                                                                        <td style="width:50%">{{ $att_value->parent->title??null }}:</td>
                                                                        <td class="text-danger" style="font-weight: 700">{{ $att_value->title??null }}</td>
                                                                    </tr>
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    @endif

                                                    @if(isset($data->params) && isset($data->params->ext_info))
                                                        <?php $params = json_decode(json_encode($data->params->ext_info),true) ?>
                                                        @foreach($params as $key => $param)
                                                            <tr>
                                                                <td style="width:50%">{{ $key }}:</td>
                                                                <td class="text-danger" style="font-weight: 700">{{ $param }}</td>
                                                            </tr>
                                                        @endforeach
                                                    @endif
                                                    </tbody>
                                                </table>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group form-group_buyacc ">
                                @if(App\Library\AuthCustom::check())

                                    @if(App\Library\AuthCustom::user()->balance < $data->price)
                                        <div class="col-md-12"><label class="form-control-label text-danger" style="text-align: center;margin: 10px 0; ">Bạn không đủ số dư để mua tài khoản này. Bạn hãy click vào nút nạp thẻ để nạp thêm và mua tài khoản.</label></div>
                                    @else
                                        <div class="col-md-12"><label class="form-control-label" style="text-align: center;margin: 10px 0; ">Tài khoản của bạn chưa cấu hình bảo mật ODP nên chỉ cần click vào nút xác nhận mua để hoàn tất giao dịch</label></div>
                                    @endif

                                @else
                                    <label class="col-md-12 form-control-label text-danger" style="text-align: center;margin: 10px 0; ">Bạn phải đăng nhập mới có thể mua tài khoản tự động.</label>
                                @endif

                            </div>

                            <div style="clear: both"></div>
                        </div>

                        <div class="modal-footer">

                            @if(App\Library\AuthCustom::check())

                                @if(App\Library\AuthCustom::user()->balance > $data->price)
                                    <button type="submit" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold loginBox__layma__button__displayabs"  id="d3" style="position: relative">Xác nhận mua<div class="row justify-content-center loading-data__muangay"></div></button>
                                @else
                                    <a class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold gallery__bottom__span_bg__2" href="/nap-the" id="d3">Nạp thẻ cào</a>
                                    <a class="btn c-bg-green-4 c-font-white c-btn-square c-btn-uppercase c-btn-bold load-modal gallery__bottom__span_bg__2" style="color: #FFFFFF" data-dismiss="modal" rel="/atm" data-dismiss="modal">Nạp từ ATM - Ví điện tử</a>
                                @endif
                            @else
                                <a class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold" href="/login?return_url=/acc/{{ $data->randId }}">Đăng nhập</a>
                            @endif
                            <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    @if(isset($data->category->custom->slug) ? $data->category->custom->slug == 'nick-lien-minh' :  $data->category->slug == 'nick-lien-minh')
        <div class="row marginauto data__chitietnick">
            <div class="col-md-12 left-right" id="">
                <div class="shop_product_another pt-3">
                    <div class="c-content-title-1">
                        <h3 class="c-center c-font-uppercase c-font-bold title__tklienquan">Chi tiết Nick</h3>
                        <div class="c-line-center c-theme-bg"></div>
                    </div>

                    <div class="description_product">

                        <ul class="nav nav-tab-booking" role="tablist" style="">
                            <li role="presentation" class="" >
                                <a  class="nav-item active" data-toggle="tab" href="#acc_info" role="tab"  >
                                    Thông tin
                                </a>
                            </li>
                            <li role="presentation" class="" >
                                <a  class="nav-item " data-toggle="tab" href="#champions-tab" role="tab"  >
                                    Tướng

                                </a>
                            </li>
                            <li role="presentation" class="" >
                                <a  class="nav-item " data-toggle="tab" href="#acc_costume" role="tab"  >
                                    Trang phục

                                </a>
                            </li>
                            <li role="presentation" class="" >
                                <a  class="nav-item " data-toggle="tab" href="#acc_color" role="tab"  >
                                    Đa sắc

                                </a>
                            </li>
                            <li role="presentation" class="" >
                                <a  class="nav-item " data-toggle="tab" href="#tftcompanions-tab" role="tab"  >
                                    Linh thú TFT

                                </a>
                            </li>
                            <li role="presentation" class="" >
                                <a  class="nav-item " data-toggle="tab" href="#tftdamageskins-tab" role="tab"  >
                                    Sân đấu TFT

                                </a>
                            </li>
                            <li role="presentation" class="" >
                                <a  class="nav-item " data-toggle="tab" href="#tftmapskins-tab" role="tab"  >
                                    Chưởng lực TFT

                                </a>
                            </li>

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane  fade show active" id="acc_info">

                            </div>
                            <div class="tab-pane  fade show" id="champions-tab">
                                <div class="acc_search" style="padding-top: 12px">
                                    <input type="text" class="form-control m-b-20" placeholder="Tìm kiếm">

                                </div>
                                <div class="row m-0" id="champions-list">
                                    <div class="costume_item col-lg-3 col-md-4 col-6 fixcssacount">
                                        <div class="costume_item_detail">
                                            <a data-fancybox="champions-list" href="/assets/frontend/theme_1/images/trangphuc.jpg">
                                                <div class="costume_image">
                                                    <img src="/assets/frontend/theme_1/images/trangphuc.jpg" alt="">
                                                    <span class="costume_title">
                                                            Annie Quàng Khăn Đỏ
                                                        </span>
                                                </div>

                                            </a>
                                        </div>
                                    </div>
                                    <div class="costume_item col-lg-3 col-md-4 col-6 fixcssacount">
                                        <div class="costume_item_detail">
                                            <a data-fancybox="champions-list" href="/assets/frontend/theme_1/images/trangphuc.jpg">
                                                <div class="costume_image">
                                                    <img src="/assets/frontend/theme_1/images/trangphuc.jpg" alt="">
                                                    <span class="costume_title">
                                                            Annie Quàng Khăn Đỏ
                                                        </span>
                                                </div>

                                            </a>
                                        </div>
                                    </div>
                                    <div class="costume_item col-lg-3 col-md-4 col-6 fixcssacount">
                                        <div class="costume_item_detail">
                                            <a data-fancybox="champions-list" href="/assets/frontend/theme_1/images/trangphuc.jpg">
                                                <div class="costume_image">
                                                    <img src="/assets/frontend/theme_1/images/trangphuc.jpg" alt="">
                                                    <span class="costume_title">
                                                            Annie Quàng Khăn Đỏ
                                                        </span>
                                                </div>

                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane  fade show " id="acc_costume">
                                <div class="acc_search" style="padding-top: 12px">
                                    <input type="text" class="form-control m-b-20" placeholder="Tìm kiếm">

                                </div>
                                <div class="row m-0" id="acc_costume_list">
                                    <div class="generals_item col-lg-3 col-md-4 col-4 p-8">
                                        <a data-fancybox="acc_costume_list" href="/assets/frontend/theme_1/images/tuong.png">
                                            <div class="generals_image">
                                                <img src="/assets/frontend/theme_1/images/tuong.png" alt="">
                                                <span class="generals_title">
                                                           Galio
                                                    </span>
                                            </div>

                                        </a>
                                    </div>
                                    <div class="generals_item col-lg-3 col-md-4 col-4 p-8">
                                        <a data-fancybox="acc_costume_list" href="/assets/frontend/theme_1/images/tuong.png">
                                            <div class="generals_image">
                                                <img src="/assets/frontend/theme_1/images/tuong.png" alt="">
                                                <span class="generals_title">
                                                           Galio
                                                    </span>
                                            </div>

                                        </a>
                                    </div>




                                </div>
                            </div>
                            <div class="tab-pane  fade show " id="acc_color">
                                <div class="acc_search" style="padding-top: 12px">
                                    <input type="text" class="form-control m-b-20" placeholder="Tìm kiếm">

                                </div>
                                <div class="row m-0" id="acc_color_list">
                                    <div class="costume_item col-lg-3 col-md-4 col-6 fixcssacount">
                                        <div class="costume_item_detail">
                                            <a data-fancybox="acc_color_list" href="/assets/frontend/theme_1/images/dasac.png">
                                                <div class="costume_image">
                                                    <img src="/assets/frontend/theme_1/images/dasac.png" alt="">
                                                    <span class="costume_title">
                                                           Fiddlesticks Tướng Cướp

                                                        </span>
                                                </div>

                                            </a>
                                        </div>
                                    </div>
                                    <div class="costume_item col-lg-3 col-md-4 col-6 fixcssacount">
                                        <div class="costume_item_detail">
                                            <a data-fancybox="acc_color_list" href="/assets/frontend/theme_1/images/dasac2.png">
                                                <div class="costume_image">
                                                    <img src="/assets/frontend/theme_1/images/dasac2.png" alt="">
                                                    <span class="costume_title">
                                                           Fiddlesticks Tướng Cướp

                                                        </span>
                                                </div>

                                            </a>
                                        </div>
                                    </div>
                                    <div class="costume_item col-lg-3 col-md-4 col-6 fixcssacount">
                                        <div class="costume_item_detail">
                                            <a data-fancybox="acc_color_list" href="/assets/frontend/theme_1/images/dasac3.png">
                                                <div class="costume_image">
                                                    <img src="/assets/frontend/theme_1/images/dasac3.png" alt="">
                                                    <span class="costume_title">
                                                           Fiddlesticks Tướng Cướp

                                                        </span>
                                                </div>

                                            </a>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="tab-pane  fade show" id="tftcompanions-tab">
                                <div class="acc_search" style="padding-top: 12px">
                                    <input type="text" class="form-control m-b-20" placeholder="Tìm kiếm">

                                </div>
                                <div class="row m-0" id="tftcompanions_list">
                                    <div class="skin_item col-lg-3 col-md-4 col-6 fixcssacount">
                                        <div class="skin_item_detail">
                                            <a data-fancybox="tftcompanions_list" href="/assets/frontend/theme_1/images/linhthu.png">
                                                <div class="skin_image">
                                                    <img src="/assets/frontend/theme_1/images/linhthu.png" alt="">

                                                </div>
                                                <div class="skin_title">
                                                    Fiddlesticks Tướng Cướp

                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="skin_item col-lg-3 col-md-4 col-6 fixcssacount">
                                        <div class="skin_item_detail">
                                            <a data-fancybox="tftcompanions_list" href="/assets/frontend/theme_1/images/linhthu.png">
                                                <div class="skin_image">
                                                    <img src="/assets/frontend/theme_1/images/linhthu.png" alt="">

                                                </div>
                                                <div class="skin_title">
                                                    Fiddlesticks Tướng Cướp

                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="skin_item col-lg-3 col-md-4 col-6 fixcssacount">
                                        <div class="skin_item_detail">
                                            <a data-fancybox="tftcompanions_list" href="/assets/frontend/theme_1/images/linhthu3.png">
                                                <div class="skin_image">
                                                    <img src="/assets/frontend/theme_1/images/linhthu3.png" alt="">

                                                </div>
                                                <div class="skin_title">
                                                    Fiddlesticks Tướng Cướp

                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="skin_item col-lg-3 col-md-4 col-6 fixcssacount">
                                        <div class="skin_item_detail">
                                            <a data-fancybox="tftcompanions_list" href="/assets/frontend/theme_1/images/linhthu2.png">
                                                <div class="skin_image">
                                                    <img src="/assets/frontend/theme_1/images/linhthu2.png" alt="">

                                                </div>
                                                <div class="skin_title">
                                                    Fiddlesticks Tướng Cướp

                                                </div>
                                            </a>
                                        </div>
                                    </div>



                                </div>
                            </div>
                            <div class="tab-pane  fade show" id="tftdamageskins-tab">
                                <div class="acc_search" style="padding-top: 12px">
                                    <input type="text" class="form-control m-b-20" placeholder="Tìm kiếm">

                                </div>
                                <div class="row m-0" id="tftdamageskins_list">
                                    <div class="skin_item col-lg-3 col-md-4 col-6 fixcssacount">
                                        <div class="skin_item_detail">
                                            <a data-fancybox="tftdamageskins_list" href="/assets/frontend/theme_1/images/sandau.png">
                                                <div class="skin_image">
                                                    <img src="/assets/frontend/theme_1/images/sandau.png" alt="">
                                                    <div class="mapskin_title">
                                                        Fiddlesticks Tướng Cướp

                                                    </div>
                                                </div>

                                            </a>
                                        </div>
                                    </div>
                                    <div class="skin_item col-lg-3 col-md-4 col-6 fixcssacount">
                                        <div class="skin_item_detail">
                                            <a data-fancybox="tftdamageskins_list" href="/assets/frontend/theme_1/images/sandau2.png">
                                                <div class="skin_image">
                                                    <img src="/assets/frontend/theme_1/images/sandau2.png" alt="">
                                                    <div class="mapskin_title">
                                                        Fiddlesticks Tướng Cướp

                                                    </div>
                                                </div>

                                            </a>
                                        </div>
                                    </div>
                                    <div class="skin_item col-lg-3 col-md-4 col-6">
                                        <div class="skin_item_detail">
                                            <a data-fancybox="tftdamageskins_list" href="/assets/frontend/theme_1/images/sandau3.png">
                                                <div class="skin_image">
                                                    <img src="/assets/frontend/theme_1/images/sandau3.png" alt="">
                                                    <div class="mapskin_title">
                                                        Fiddlesticks Tướng Cướp

                                                    </div>
                                                </div>

                                            </a>
                                        </div>
                                    </div>



                                </div>
                            </div>
                            <div class="tab-pane  fade show" id="tftmapskins-tab">
                                <div class="acc_search" style="padding-top: 12px">
                                    <input type="text" class="form-control m-b-20 fixcssacount" placeholder="Tìm kiếm">

                                </div>
                                <div class="row m-0" id="tftmapskins_list">
                                    <div class="skin_item col-lg-3 col-md-4 col-6 fixcssacount">
                                        <div class="skin_item_detail">
                                            <a data-fancybox="tftmapskins_list" href="/assets/frontend/theme_1/images/damdon.png">
                                                <div class="skin_image">
                                                    <img src="/assets/frontend/theme_1/images/damdon.png" alt="">
                                                    <div class="mapskin_title">
                                                        Fiddlesticks Tướng Cướp

                                                    </div>
                                                </div>

                                            </a>
                                        </div>
                                    </div>
                                    <div class="skin_item col-lg-3 col-md-4 col-6 fixcssacount">
                                        <div class="skin_item_detail">
                                            <a data-fancybox="tftmapskins_list" href="/assets/frontend/theme_1/images/damdon.png">
                                                <div class="skin_image">
                                                    <img src="/assets/frontend/theme_1/images/damdon.png" alt="">
                                                    <div class="mapskin_title">
                                                        Fiddlesticks Tướng Cướp

                                                    </div>
                                                </div>

                                            </a>
                                        </div>
                                    </div>
                                    <div class="skin_item col-lg-3 col-md-4 col-6 fixcssacount">
                                        <div class="skin_item_detail">
                                            <a data-fancybox="tftmapskins_list" href="/assets/frontend/theme_1/images/damdon.png">
                                                <div class="skin_image">
                                                    <img src="/assets/frontend/theme_1/images/damdon.png" alt="">
                                                    <div class="mapskin_title">
                                                        Fiddlesticks Tướng Cướp

                                                    </div>
                                                </div>

                                            </a>
                                        </div>
                                    </div>




                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if(isset($data->description))
        <div class="shop_product_another">
            <div class="c-content-title-1">
                <h3 class="c-center c-font-uppercase c-font-bold title__tklienquan">CHI TIẾT</h3>
                <div class="c-line-center c-theme-bg"></div>
            </div>

            <div class="shop_product_another_content">
                <div class="item_buy_list row">
                    <div class="col-md-12">
                        <span>{!! $data->description !!}</span>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endif


<script src="/assets/frontend/{{theme('')->theme_key}}/js/account/slider.js"></script>

