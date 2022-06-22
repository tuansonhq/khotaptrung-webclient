@if(empty($data->data))

    <div class="col-md-12 left-right">
        <div class="row marginauto body-detail-ct">
            @if(isset($items) && count($items) > 0)

                <div class="col-md-12 text-left left-right">
                    <div class="row body-detail-row-ct">

                        @foreach ($items as $item)

                            @if($item->status == 1)
                                @if($data->display_type == 2)

                                    <div class="col-auto body-detail-nick-col-ct buy-random-acc" data-id="{{ $item->randId }}">
                                        <a href="javascript:void(0)" class="list-item-nick-hover">
                                            <div class="row marginauto">
                                                <div class="col-md-12 left-right default-overlay-nick-ct">
                                                    @if(isset($data->params->thumb_default) && isset($data->params))
                                                        <img class="lazy" src="{{\App\Library\MediaHelpers::media($data->params->thumb_default)}}" alt="{{ $item->title }}" >
                                                    @else

                                                        @if(isset($item->image))
                                                            <img class="lazy" src="{{\App\Library\MediaHelpers::media($item->image)}}" alt="{{ $item->title }}">
                                                        @else
                                                        @endif
                                                    @endif
                                                </div>
                                                <div class="col-md-12 left-right list-item-nick">
                                                    <div class="row marginauto list-item-nick-body">
                                                        <div class="col-md-12 left-right text-left body-detail-account-col-span-ct">
                                                            <span>{{ $item->title }}</span>
                                                        </div>
                                                        <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                            <small>ID: {{ $item->randId }}</small>
                                                        </div>
                                                        <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                            <ul>
                                                                @if(isset($data->params) && isset($data->params->price))                                                                    
                                                                    <li class="fist-li-account">{{ str_replace(',','.',number_format($data->params->price)) }}đ</li>
                                                                    <li class="second-li-account">{{ str_replace(',','.',number_format($data->params->price_old??$data->params->price)) }}đ</li>
                                                                    @php
                                                                        if (isset($data->params->price_old)) {
                                                                            $sale_percent = (($data->params->price_old - $data->params->price) / $data->params->price_old) * 100;
                                                                            $sale_percent = round($sale_percent, 0, PHP_ROUND_HALF_UP);
                                                                        } else {
                                                                            $sale_percent = 0;
                                                                        }
                                                                    @endphp
                                                                    <li class="three-li-account">-{{$sale_percent}}%</li>
                                                                @else
                                                                    <li class="fist-li-account">{{ str_replace(',','.',number_format($item->price)) }}đ</li>
                                                                    <li class="second-li-account">{{ str_replace(',','.',number_format($item->price_old??$item->price)) }}đ</li>
                                                                    @php
                                                                        if (isset($item->price_old)) {
                                                                            $sale_percent = (($item->price_old - $item->price) / $item->price_old) * 100;
                                                                            $sale_percent = round($sale_percent, 0, PHP_ROUND_HALF_UP);
                                                                        } else {
                                                                            $sale_percent = 0;
                                                                        }
                                                                    @endphp
                                                                    <li class="three-li-account">-{{$sale_percent}}%</li>
                                                                @endif
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    {{-- <div class="formDonhangAccount{{ $item->randId }} hide">
                                        <form class="formDonhangAccount" action="/acc/{{ $item->randId }}/databuy" method="POST">
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
                                                            <a href="#paymentv2{{ $item->randId }}" role="tab" data-toggle="tab" aria-selected="true" class="c-font-16 active paymentv2{{ $item->randId }}">Thanh toán</a>
                                                        </li>
                                                        <li role="presentation" class="justified__ul_li">
                                                            <a href="#infov2{{ $item->randId }}" role="tab" data-toggle="tab" aria-selected="false" class="c-font-16 infov2{{ $item->randId }}">Thông tin tài khoản</a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div role="tabpanel" class="tab-pane fade in active show tabpaymentv2{{ $item->randId }}" id="paymentv2{{ $item->randId }}">
                                                            <ul class="c-tab-items p-t-0 p-b-0 p-l-5 p-r-5">
                                                                <li class="c-font-dark">
                                                                    <table class="table table-striped">
                                                                        <tbody>
                                                                        <tr>
                                                                            <th colspan="2">Thông tin tài khoản #{{ $item->randId }}</th>
                                                                        </tr>
                                                                        </tbody><tbody>
                                                                        <tr>
                                                                            <td>Nhà phát hành:</td>
                                                                            <th>{{ $item->groups[0]->title }}</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Tên game:</td>
                                                                            <th>{{ isset($data->custom->title) ? $data->custom->title :  $data->title }}</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Giá tiền:</td>
                                                                            <th class="text-info">
                                                                                @if(isset($data->params) && isset($data->params->price))
                                                                                    {{ str_replace(',','.',number_format($data->params->price)) }}đ
                                                                                @else
                                                                                    {{ str_replace(',','.',number_format($item->price)) }}đ
                                                                                @endif
                                                                            </th>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div role="tabpanel" class="tab-pane fade tabinfov2{{ $item->randId }}" id="infov2{{ $item->randId }}">
                                                            <ul class="c-tab-items p-t-0 p-b-0 p-l-5 p-r-5">
                                                                <li class="c-font-dark">
                                                                    <table class="table table-striped">
                                                                        <tbody>
                                                                        <tr>
                                                                            <th colspan="2">Chi tiết tài khoản #{{ $item->randId }}</th>
                                                                        </tr>
                                                                        @if(isset($item->groups))
                                                                            <?php $att_values = $item->groups ?>
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
                                                                        @if(isset($item->params) && isset($item->params->ext_info))
                                                                            <?php $params = json_decode(json_encode($item->params->ext_info),true) ?>
                                                                            @if(!is_null($dataAttribute) && count($dataAttribute)>0)
                                                                                @foreach($dataAttribute as $index=>$att)
                                                                                    @if($att->position == 'text')
                                                                                        @if(isset($att->childs))
                                                                                            @foreach($att->childs as $child)
                                                                                                @foreach($params as $key => $param)
                                                                                                    @if($key == $child->id)
                                                                                                        <tr>
                                                                                                            <td style="width:50%">{{ $child->title }}:</td>
                                                                                                            <td class="text-danger" style="font-weight: 700">{{ $param }}</td>
                                                                                                        </tr>
                                                                                                    @endif
                                                                                                @endforeach
                                                                                            @endforeach
                                                                                        @endif
                
                                                                                    @endif
                                                                                @endforeach
                                                                            @endif
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
                
                                                        @if(App\Library\AuthCustom::user()->balance < $item->price)
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
                
                                                    @if(App\Library\AuthCustom::user()->balance > $item->price)
                                                        <button type="submit" class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold loginBox__layma__button__displayabs"  id="d3" style="position: relative">Xác nhận mua<div class="row justify-content-center loading-data__muangay"></div></button>
                                                    @else
                                                        <a class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold gallery__bottom__span_bg__2" href="/nap-the" id="d3">Nạp thẻ cào</a>
                                                        <a class="btn c-bg-green-4 c-font-white c-btn-square c-btn-uppercase c-btn-bold load-modal gallery__bottom__span_bg__2" style="color: #FFFFFF" data-dismiss="modal" rel="/atm" data-dismiss="modal">Nạp từ ATM - Ví điện tử</a>
                                                    @endif
                                                @else
                                                    <a class="btn c-theme-btn c-btn-square c-btn-uppercase c-btn-bold" href="/login?return_url=/mua-acc/{{ isset($data->custom->slug) ? $data->custom->slug :  $data->slug }}&{{ $data->id }}">Đăng nhập</a>
                                                @endif
                                                <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>
                                            </div>
                                        </form>
                                    </div> --}}

                                    <div class="formDonhangAccount{{ $item->randId }}" style="display: none">
                                        <form class="formDonhangAccount" action="/acc/{{ $item->randId }}/databuy" method="POST">
                                            {{ csrf_field() }}
                                            <div class="modal-header p-0" style="border-bottom: 0">
                                                <div class="row marginauto modal-header-order-ct">
                                                    <div class="col-12 span__donhang text-center" style="position: relative">
                                                        <span>Xác nhận thanh toán</span>
                                                        <img class="lazy img-close-ct close-modal-default" src="/assets/frontend/{{theme('')->theme_key}}/image/cay-thue/close.png" alt="">
                                                    </div>
                                                </div>
                            
                                            </div>
                            
                                            <div class="modal-body modal-body-order-ct">
                                                <div class="row marginauto">
                            
                                                    <div class="col-md-12 left-right title-order-ct">
                                                        <span>Thông tin acc</span>
                                                    </div>
                            
                                                    <div class="col-md-12 left-right" id="order-errors">
                                                        <div class="row marginauto order-errors">
                                                            <div class="col-md-12 left-right">
                                                                @if(App\Library\AuthCustom::check())
                                                                    @if(App\Library\AuthCustom::user()->balance < $item->price)
                                                                        <small>Bạn không đủ số dư để mua tài khoản này. Bạn hãy click vào nút nạp thẻ để nạp thêm và mua tài khoản.</small>
                                                                    @endif
                                                                @else
                                                                    <small>Bạn phải đăng nhập mới có thể mua tài khoản tự động.</small>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>

                                                    @if (App\Library\AuthCustom::check())
                                                        <div class="col-md-12 left-right padding-order-ct">
                                                            <div class="row marginauto">
                                                                <div class="col-md-12 left-right background-order-ct">
                                                                    <div class="row marginauto background-order-row-ct">
                                                                        <div class="col-auto left-right background-order-col-left-ct">
                                                                            <span>Tài khoản</span>
                                                                        </div>
                                                                        <div class="col-auto left-right background-order-col-right-ct">
                                                                            <small>{{ App\Library\AuthCustom::user()->username }}</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                            
                            
                                                    <div class="col-md-12 left-right padding-order-ct">
                                                        <div class="row marginauto">
                                                            <div class="col-md-12 left-right background-order-ct">
                                                                <div class="row marginauto background-order-body-row-ct">
                                                                    <div class="col-auto left-right background-order-col-left-ct">
                                                                        <span>Nhà phát hành</span>
                                                                    </div>
                                                                    <div class="col-auto left-right background-order-col-right-ct">
                                                                        <small>{{ $item->groups[0]->title }}</small>
                                                                    </div>
                                                                </div>
                            
                                                                <div class="row marginauto background-order-body-row-ct">
                                                                    <div class="col-auto left-right background-order-col-left-ct">
                                                                        <span>Tên game</span>
                                                                    </div>
                                                                    <div class="col-auto left-right background-order-col-right-ct">
                                                                        <small>{{ isset($data->custom->title) ? $data->custom->title :  $data->title }}</small>
                                                                    </div>
                                                                </div>
                            
                                                                <div class="row marginauto background-order-body-row-ct">
                                                                    <div class="col-auto left-right background-order-col-left-ct">
                                                                        <span>Giá tiền</span>
                                                                    </div>
                                                                    <div class="col-auto left-right background-order-col-right-ct">
                                                                        <small>
                                                                            @if(isset($data->params) && isset($data->params->price))
                                                                                {{ str_replace(',','.',number_format($data->params->price)) }}đ
                                                                            @else
                                                                                {{ str_replace(',','.',number_format($item->price)) }}đ
                                                                            @endif
                                                                        </small>
                                                                    </div>
                                                                </div>
                                                            </div>
                            
                                                        </div>
                                                    </div>
                            
                                                    <div class="col-md-12 left-right padding-order-ct">
                                                        <div class="row marginauto">
                                                            <div class="col-md-12 left-right background-order-ct">

                                                                @if(isset($item->groups))
                                                                    <?php $att_values = $item->groups ?>
                                                                    @foreach($att_values as $att_value)
                                                                        @if($att_value->module == 'acc_label' && $att_value->is_slug_override == null)
                                                                            @if(isset($att_value->parent))
                                                                                <div class="row marginauto background-order-body-row-ct">
                                                                                    <div class="col-auto left-right background-order-col-left-ct">
                                                                                        <span>{{ $att_value->parent->title??null }}</span>
                                                                                    </div>
                                                                                    <div class="col-auto left-right background-order-col-right-ct">
                                                                                        <small>{{ $att_value->title??null }}</small>
                                                                                    </div>
                                                                                </div>
                                                                            @endif
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                                @if(isset($item->params) && isset($item->params->ext_info))
                                                                    <?php $params = json_decode(json_encode($item->params->ext_info),true) ?>
                                                                    @if(!is_null($dataAttribute) && count($dataAttribute)>0)
                                                                        @foreach($dataAttribute as $index=>$att)
                                                                            @if($att->position == 'text')
                                                                                @if(isset($att->childs))
                                                                                    @foreach($att->childs as $child)
                                                                                        @foreach($params as $key => $param)
                                                                                            @if($key == $child->id)
                                                                                                <div class="row marginauto background-order-body-row-ct">
                                                                                                    <div class="col-auto left-right background-order-col-left-ct">
                                                                                                        <span>{{ $child->title }}</span>
                                                                                                    </div>
                                                                                                    <div class="col-auto left-right background-order-col-right-ct">
                                                                                                        <small>{{ $param }}</small>
                                                                                                    </div>
                                                                                                </div>
                                                                                            @endif
                                                                                        @endforeach
                                                                                    @endforeach
                                                                                @endif
        
                                                                            @endif
                                                                        @endforeach
                                                                    @endif
                                                                @endif
                            
                                                            </div>
                            
                                                        </div>
                                                    </div>
                            
                                                    <div class="col-md-12 left-right padding-order-ct">
                                                        <div class="row marginauto">
                                                            <div class="col-md-12 left-right background-order-ct">
                                                                <div class="row marginauto background-order-row-ct">
                                                                    <div class="col-auto left-right background-order-col-left-ct">
                                                                        <span>Tổng thanh toán</span>
                                                                    </div>
                                                                    <div class="col-auto left-right background-order-col-right-ct">
                                                                        <span>
                                                                            @if(isset($data->params) && isset($data->params->price))
                                                                                {{ str_replace(',','.',number_format($data->params->price)) }}đ
                                                                            @else
                                                                                {{ str_replace(',','.',number_format($item->price)) }}đ
                                                                            @endif
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                            
                                                    <div class="col-md-12 left-right padding-order-footer-ct">
                                                        <div class="row marginauto">
                                                            <div class="col-md-12 left-right">
                                                                @if(App\Library\AuthCustom::check())

                                                                    @if(App\Library\AuthCustom::user()->balance > $item->price)
                                                                        <button class="button-default-ct button-next-step-two" type="submit">Xác nhận</button>
                                                                    @else
                                                                        <div class="row marginauto justify-content-center gallery-right-footer">
                                                                            <div class="col-md-6 col-6 modal-footer-success-col-left-ct">
                                                                                <div class="row marginauto nick-detail-button">
                                                                                    <div class="col-md-12 left-right">
                                                                                        <a href="/nap-the" class="button-not-bg-ct">
                                                                                            <ul>
                                                                                                <li><small>Thẻ cào</small></li>
                                                                                            </ul>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 col-6 modal-footer-success-col-right-ct">
                                                                                <div class="row marginauto nick-detail-button">
                                                                                    <div class="col-md-12 left-right">
                                                                                        <a href="/recharge-atm" class="button-not-bg-ct">
                                                                                            <ul>
                                                                                                <li><small>ATM, Momo</small></li>
                                                                                            </ul>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                @else
                                                                    <button class="button-default-ct" type="button" onclick="openLoginModal();">Đăng nhập</button>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                @else

                                    <div class="col-auto body-detail-nick-col-ct">
                                        <a href="/acc/{{ $item->randId }}" class="list-item-nick-hover">
                                            <div class="row marginauto">
                                                <div class="col-md-12 left-right default-overlay-nick-ct">
                                                    @if(isset($item->image))

                                                        <img class="item_buy_list_img-main lazy" src="{{\App\Library\MediaHelpers::media($item->image)}}" alt="{{ $item->title }}">
                                                    @else
                                                        {{--                                            <img class="item_buy_list_img-main" src="https://shopas.net/storage/images/CGuYto7yjj_1645585924.jpg" alt="{{ $item->title }}">--}}
                                                    @endif
                                                </div>
                                                <div class="col-md-12 left-right list-item-nick">
                                                    <div class="row marginauto list-item-nick-body">
                                                        <div class="col-md-12 left-right text-left body-detail-account-col-span-ct">
                                                            <span>{{ $item->title }}</span>
                                                        </div>
                                                        <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                            <small>ID: {{ $item->randId }}</small>
                                                        </div>
                                                        <?php
                                                            $total = 0;
                                                        ?>
                                                        @if(isset($item->groups))
                                                            <?php
                                                                $att_values = $item->groups;
                                                            ?>
                                                            @foreach($att_values as $att_value)
                                                                @if($att_value->module == 'acc_label' && $att_value->is_slug_override == null)
                                                                    @if(isset($att_value->parent))
                                                                        @if($total < 4)
                                                                            <?php
                                                                                $total = $total + 1;
                                                                            ?>

                                                                            <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                                                <small>{{ $att_value->parent->title??null }}: {{ isset($att_value->title)? \Str::limit($att_value->title,16) : null }}</small>
                                                                            </div>

                                                                        @endif
                                                                    @endif
                                                                @endif
                                                            @endforeach
                                                        @endif

                                                        @if(isset($item->params) && isset($item->params->ext_info))
                                                            <?php
                                                                $params = json_decode(json_encode($item->params->ext_info),true);
                                                            ?>

                                                            @if($total < 4)
                                                                @if(!is_null($dataAttribute) && count($dataAttribute)>0)
                                                                    @foreach($dataAttribute as $index=>$att)
                                                                        @if($att->position == 'text')
                                                                            @if(isset($att->childs))
                                                                                @foreach($att->childs as $child)
                                                                                    @foreach($params as $key => $param)
                                                                                        @if($key == $child->id && $child->is_slug_override == null)

                                                                                            @if($total < 4)
                                                                                                <?php
                                                                                                    $total = $total + 1;
                                                                                                ?>

                                                                                                <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                                                                    <small>{{ $child->title??null }}: {{ isset($param) ? \Str::limit($param,16) : null }}</small>
                                                                                                </div>
                                                                                            @else
                                                                                            @endif
                                                                                        @endif
                                                                                    @endforeach
                                                                                @endforeach
                                                                            @endif

                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            @endif
                                                        @endif

                                                        <div class="col-md-12 left-right text-left body-detail-account-small-span-ct">
                                                            <ul>
                                                                @if(isset($data->params) && isset($data->params->price))                                                                    
                                                                    <li class="fist-li-account">{{ str_replace(',','.',number_format($data->params->price)) }}đ</li>
                                                                    <li class="second-li-account">{{ str_replace(',','.',number_format($data->params->price_old??$data->params->price)) }}đ</li>
                                                                    @php
                                                                        if (isset($data->params->price_old)) {
                                                                            $sale_percent = (($data->params->price_old - $data->params->price) / $data->params->price_old) * 100;
                                                                            $sale_percent = round($sale_percent, 0, PHP_ROUND_HALF_UP);
                                                                        } else {
                                                                            $sale_percent = 0;
                                                                        }
                                                                    @endphp
                                                                    <li class="three-li-account">-{{$sale_percent}}%</li>
                                                                @else
                                                                    <li class="fist-li-account">{{ str_replace(',','.',number_format($item->price)) }}đ</li>
                                                                    <li class="second-li-account">{{ str_replace(',','.',number_format($item->price_old??$item->price)) }}đ</li>
                                                                    @php
                                                                        if (isset($item->price_old)) {
                                                                            $sale_percent = (($item->price_old - $item->price) / $item->price_old) * 100;
                                                                            $sale_percent = round($sale_percent, 0, PHP_ROUND_HALF_UP);
                                                                        } else {
                                                                            $sale_percent = 0;
                                                                        }
                                                                    @endphp
                                                                    <li class="three-li-account">-{{$sale_percent}}%</li>
                                                                @endif
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endif

                            @endif

                        @endforeach

                    </div>
                </div>
            @else
            @endif

            <div class="col-md-12 left-right justify-content-end default-paginate-addpadding default-paginate">
                @if(isset($items))
                    @if($items->total()>1)
        
                        <div class="row marinautooo justify-content-center">
                            <div class="col-auto">
                                <div class="data_paginate paginate__v1 paging_bootstrap paginations_custom" style="text-align: center">
                                    {{ $items->appends(request()->query())->links('pagination::bootstrap-default-4') }}
                                </div>
                            </div>
                        </div>
                    @endif
                @endif
            </div>

        </div>
    </div>
@endif
