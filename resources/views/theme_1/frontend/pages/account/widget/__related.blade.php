@if(isset($data_related) && count($data_related))
    <div class="shop_product_another pt-3">
        <div class="c-content-title-1">
            <h3 class="c-center c-font-uppercase c-font-bold title__tklienquan">Tài khoản liên quan</h3>
            <div class="c-line-center c-theme-bg"></div>
        </div>

        <div class="shop_product_another_content">
            <div class="item_buy_list row">
                @foreach($data_related as $item)

                    <div class="col-6 col-sm-6 col-lg-3 fixcssacount">
                        <div class="item_buy_list_in d-flex flex-column">
                            <div class="item_buy_list_img">
                                <a href="/acc/{{ $item->slug }}">
                                    @if(isset($item->image))

                                        <img class="lazy item_buy_list_img-main" src="{{\App\Library\MediaHelpers::media($item->image)}}" alt="{{ $item->slug }}">
                                    @else
                                        <img class="item_buy_list_img-main" src="/assets/frontend/{{theme('')->theme_key}}/image/anhconten.jpg" alt="">
                                    @endif
                                    @php
                                        if (isset($item->price_old)) {
                                            $sale_percent = (($item->price_old - $item->price) / $item->price_old) * 100;
                                            $sale_percent = round($sale_percent, 0, PHP_ROUND_HALF_UP);

                                        } else {
                                            $sale_percent = 0;
                                        }
                                    @endphp


                                    @if ($sale_percent > 0)
                                    <div class="item_buy_list_img-sale">
                                        <div class="position-relative">
                                            <img class="w-100" src="/assets/frontend/{{theme('')->theme_key}}/image/mgg.png"  alt="" >
                                            <div class="position-absolute buy_list_img-sale-title">
                                                Giảm
                                                <div>{{$sale_percent}}%</div>
                                            </div>
                                        </div>

                                    </div>
                                        @endif

                                    <span>MS: #{{ $item->id }} </span>
                                </a>
                            </div>
                            <div class="item_buy_list_description">
                                bảo hành 100%,lỗi hoàn tiền
                            </div>

                            @php
                                $attribute_related = array();


                                if (isset($item->product_attribute) && count($item->product_attribute)>0){
                                    foreach ($item->product_attribute as $item_related){
                                        $attribute_related[$item_related->attribute->id][$item_related->attribute->title][] = $item_related->product_attribute_value_able->title;
                                    }
                                }

                            @endphp
                            <div class="item_buy_list_info " style="flex: 1">
                                <div class="row">
                                    @foreach($attribute_related as $key => $item_related)
                                        @foreach($item_related as $key_att => $item_att)
                                            <div class="row" style="margin: 0 auto;width: 100%">
                                                <div class="col-auto item_buy_list_info_inacc fixcssacount">
                                                    {{$key_att}}
                                                </div>
                                                <div class="col-auto item_buy_list_info_inaccright fixcssacount" style="color: #666;font-weight: 600;margin-left: auto">
                                                    {{--                                                                {{ $att_valuev2->title??null }}--}}
                                                    @foreach($item_att as $key_att_item  => $item_att_val)
                                                         @if(count($item_att) > 1)
                                                            @if($key_att_item < 1 )
                                                                <div  class="attr_tooltip" data-tooltip="{{$item_att_val}} (+{{count($item_att)}} {{$key_att}})">
                                                                    <div style="text-overflow: ellipsis;    white-space: nowrap;word-wrap: break-word;overflow-x: hidden;    width: 7.5em;">

                                                                        {{$item_att_val}} (+{{count($item_att)}} <span class="text-lowercase" style="font-size: 16px;    color: #666">{{$key_att}}</span>)

                                                                    </div>
                                                                </div>

                                                            @endif
                                                        @else
                                                            <div style="text-overflow: ellipsis;    white-space: nowrap;word-wrap: break-word;overflow: hidden;    width: 6.5em;" >
                                                                {{$item_att_val}}
                                                            </div>
                                                        @endif
                                                    @endforeach

                                                </div>
                                            </div>
                                        @endforeach
                                    @endforeach

                                </div>
                            </div>

                            <div class="item_buy_list_more ">
                                <div class="row">
                                    <div class="col-12 fixcssacount">
                                        <div class="item_buy_list_price">
                                            @if ($sale_percent > 0)
                                                <span>
                                                    {{ str_replace(',','.',number_format($item->price_old)) }}đ
                                                </span>
                                                {{ str_replace(',','.',number_format($item->price)) }}đ
                                            @else

                                                {{ str_replace(',','.',number_format($item->price)) }}đ

                                            @endif

                                            {{--                                                {{ formatPrice($item->price) }}đ--}}
                                        </div>
                                    </div>
                                    <a href="/acc/{{ $item->slug }}" class="col-12 fixcssacount">
                                        <div class="item_buy_list_view">
                                            Chi tiết
                                        </div>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endif

