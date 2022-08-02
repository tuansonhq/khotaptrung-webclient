@if(empty($data->data))

    @if(isset($items) && count($items) > 0)
        @foreach ($items as $item)

            {{--                Nick random   --}}
            @if($item->status == 1)
                @if($data->display_type == 2)

                    <div class="item-account">
                        <div class="card">
                            <a href="javascript:void(0)" data-id="{{ $item->randId }}" class="card-body scale-thumb buyacc">
                                <div class="account-thumb c-mb-8">
                                    <img src="{{\App\Library\MediaHelpers::media($item->image)}}" alt="{{\App\Library\MediaHelpers::media($item->title)}}"
                                         class="account-thumb-image">
                                </div>
                                <div class="account-title">
                                    <div class="text-title fw-700 text-limit limit-1">{{ isset($data->custom->title) ? $data->custom->title :  $data->title }}</div>
                                </div>
                                <div class="account-info c-mb-8">
                                    <div class="info-attr">
                                        @if(isset($data->items_count))
                                            @if((isset($data->account_fake) && $data->account_fake > 1) || (isset($data->custom->account_fake) && $data->custom->account_fake > 1))
                                                Đã bán: {{ str_replace(',','.',number_format(round(isset($data->custom->account_fake) ? $data->items_count*$data->custom->account_fake : $data->items_count*$data->account_fake))) }}
                                            @else
                                                Đã bán: {{ $data->items_count }}
                                            @endif

                                        @else

                                        @endif
                                    </div>
                                    <div class="info-attr c-mb-8">
                                        ID: #{{ $item->randId }}
                                    </div>
                                </div>
                                @php
                                    if (isset($item->price_old)) {
                                        $sale_percent = (($item->price_old - $item->price) / $item->price_old) * 100;
                                        $sale_percent = round($sale_percent, 0, PHP_ROUND_HALF_UP);
                                    } else {
                                        $sale_percent = 0;
                                    }
                                @endphp
                                <div class="price">
                                    <div class="price-current w-100">{{ str_replace(',','.',number_format($item->price)) }}đ</div>
                                    <div class="price-old c-mr-8">{{ str_replace(',','.',number_format($item->price_old)) }}đ</div>
                                    <div class="discount">{{$sale_percent}}%</div>
                                </div>
                                @if(App\Library\AuthCustom::check())

                                    @if(App\Library\AuthCustom::user()->balance < $data->params->price)
                                        <div class="price c-p-12 c-p-lg-8">
                                            <a href="javascript:void(0)" class="btn secondary w-100 the-cao-atm">Mua ngay</a>
                                        </div>
                                    @else
                                        <div class="price c-p-12 c-p-lg-8">
                                            <a href="javascript:void(0)" class="btn secondary w-100 buyacc" data-id="{{ $item->randId }}">Mua ngay</a>
                                        </div>
                                    @endif
                                @else
                                    <div class="price c-p-12 c-p-lg-8">
                                        <a href="javascript:void(0)" class="btn secondary w-100" onclick="openLoginModal()">Mua ngay</a>
                                    </div>
                                @endif

                            </a>
                        </div>
                    </div>

{{--                    Form thanh toán nick random  formThanhToanNickRandom --}}

                    <div class="formDonhangAccount{{ $item->randId }} formThanhToanNickRandom">
                        <form class="formDonhangAccount" action="/acc/{{ $item->randId }}/databuy" method="POST">
                            {{ csrf_field() }}
                            <div class="modal-header">
                                <h2 class="modal-title center">Xác nhận thanh toán</h2>
                                <button type="button" class="close" data-dismiss="modal"></button>
                            </div>
                            <div class="modal-body pl-0 pr-0 c-pt-24 c-pb-24">
                                <div class="dialog--content__title fw-700 fz-13 c-mb-12 text-title-theme">
                                    Thông tin mua Acc
                                </div>
                                <div class="card--gray c-mb-16 c-pt-8 c-pb-8 c-pl-12 c-pr-12">
                                    <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                                        <div class="card--attr__name fw-400 fz-13 text-center">
                                            Game
                                        </div>
                                        <div class="card--attr__value fz-13 fw-500">{{ isset($data->custom->title) ? $data->custom->title :  $data->title }}</div>
                                    </div>
                                    <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                                        <div class="card--attr__name fw-400 fz-13 text-center">
                                            Giá tiền
                                        </div>
                                        <div class="card--attr__value fz-13 fw-500">{{ str_replace(',','.',number_format($item->price)) }} đ</div>
                                    </div>
                                </div>


                                <div class="card--gray c-mb-16 c-pt-8 c-pb-8 c-pl-12 c-pr-12">
                                    @if(isset($item->groups))
                                        <?php $att_values = $item->groups ?>
                                        @foreach($att_values as $att_value)
                                            @if($att_value->module == 'acc_label' && $att_value->is_slug_override == null)
                                                @if(isset($att_value->parent))
                                                    <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                                                        <div class="card--attr__name fw-400 fz-13 text-center">
                                                            {{ $att_value->parent->title??null }}
                                                        </div>
                                                        <div class="card--attr__value fz-13 fw-500">{{ $att_value->title??null }}</div>
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

                                                                        <div class="card--attr justify-content-between d-flex c-mb-16 text-center">
                                                                            <div class="card--attr__name fw-400 fz-13 text-center">
                                                                                {{ $child->title??null }}
                                                                            </div>
                                                                            <div class="card--attr__value fz-13 fw-500">{{ $param }}</div>
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
                                        <div class="card--attr__value fz-13 fw-500"><a href="javascript:void(0)" class="c-text-primary">9.900 đ</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn primary">Xác nhận</button>

                            </div>
                        </form>
                    </div>
                @else

                    <div class="item-account">
                        <div class="card">
                            <a href="/acc/{{ $item->randId }}" class="card-body scale-thumb">
                                <div class="account-thumb c-mb-8">
                                    <img src="{{\App\Library\MediaHelpers::media($item->image)}}" alt="{{ $item->title??'' }}"
                                         class="account-thumb-image">
                                </div>
                                <div class="account-title">
                                    <div class="text-title fw-700 text-limit limit-1">{{ isset($data->custom->title) ? $data->custom->title :  $data->title }}</div>
                                </div>
                                <div class="account-info c-mb-8">
                                    <div class="info-attr">
                                        @if(isset($data->items_count))
                                            @if((isset($data->account_fake) && $data->account_fake > 1) || (isset($data->custom->account_fake) && $data->custom->account_fake > 1))
                                                Đã bán: {{ str_replace(',','.',number_format(round(isset($data->custom->account_fake) ? $data->items_count*$data->custom->account_fake : $data->items_count*$data->account_fake))) }}
                                            @else
                                                Đã bán: {{ $data->items_count }}
                                            @endif

                                        @else

                                        @endif
                                    </div>
                                    <div class="info-attr c-mb-8">
                                        ID: #{{ $item->randId }}
                                    </div>

                                    <?php
                                    $total = 0;
                                    ?>
                                    @if(isset($item->groups))
                                        <?php
                                        $att_values = $item->groups;
                                        ?>

                                        {{--                                            @dd($att_values)--}}
                                        @foreach($att_values as $att_value)
                                            {{--            @dd($att_value)--}}
                                            @if($att_value->module == 'acc_label' && $att_value->is_slug_override == null)
                                                @if(isset($att_value->parent))
                                                    @if($total < 4)
                                                        <?php
                                                        $total = $total + 1;
                                                        ?>
                                                            <div class="info-attr">
                                                                {{ $att_value->parent->title??null }}: {{ isset($att_value->title)? \Str::limit($att_value->title,16) : null }}
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
                                                                                <div class="info-attr">
                                                                                    {{ $child->title??null }}: {{ isset($param) ? \Str::limit($param,16) : null }}
                                                                                </div>
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
                                </div>
                                @php
                                    if (isset($item->price_old)) {
                                        $sale_percent = (($item->price_old - $item->price) / $item->price_old) * 100;
                                        $sale_percent = round($sale_percent, 0, PHP_ROUND_HALF_UP);
                                    } else {
                                        $sale_percent = 0;
                                    }
                                @endphp
                                <div class="price">
                                    <div class="price-current w-100">{{ str_replace(',','.',number_format($item->price)) }}đ</div>
                                    <div class="price-old c-mr-8">{{ str_replace(',','.',number_format($item->price_old)) }}đ</div>
                                    <div class="discount">{{$sale_percent}}%</div>
                                </div>
                            </a>
                        </div>
                    </div>

                @endif
            @endif
        @endforeach

    @endif
@endif
<div class="col-md-12 left-right justify-content-end paginate__v1 paginate__v1_mobie frontend__panigate">
    @if(isset($items))
        @if($items->total()>1)
            <div class="row marinautooo paginate__history paginate__history__fix justify-content-center">
                <div class="col-auto paginate__category__col">
                    <div class="data_paginate paging_bootstrap paginations_custom" style="text-align: center">
                        {{ $items->appends(request()->query())->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        @endif
    @endif
</div>

