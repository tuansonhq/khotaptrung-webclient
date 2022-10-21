@if(isset($data))
<div class="item_buy_list row">
    @if(isset($data->product))
        @php
            $product = $data->product;
        @endphp
        @if(isset($product->data) && count($product->data) > 0)
            @foreach ($product->data as $item)
                <div class="col-6 fixcssacount col-sm-6 col-lg-3">
                    <div class="item_buy_list_in">
                        <div class="item_buy_list_img item_buy_list_img_custom">
                            <a href="/acc/{{ $item->slug }}">
                                @if(isset($item->image))

                                    <img class="item_buy_list_img-main" src="{{\App\Library\MediaHelpers::media($item->image)}}" alt="{{ $item->slug }}">
                                @else
                                    {{--                                            <img class="item_buy_list_img-main" src="https://shopas.net/storage/images/CGuYto7yjj_1645585924.jpg" alt="{{ $item->title }}">--}}
                                @endif

                                <span>MS: {{ $item->slug }}</span>
                            </a>
                        </div>
                        <div class="item_buy_list_description">
                            bảo hành 100%,lỗi hoàn tiền
                        </div>

                        <div class="item_buy_list_info item_buy_list_info_custom">
                            <div class="row item_buy_list_info__row">

                                @if(isset($item->product_attribute) && count($item->product_attribute))
                                    @php
                                        $product_attribute = $item->product_attribute;
                                    @endphp
                                    @foreach($product_attribute as $key => $attribute)
                                        @if($key < 4)

                                            <div class="row" style="margin: 0 auto;width: 100%">
                                                <div class="col-auto text-left fixcssacount item_buy_list_info_inacc"">
                                                {{ $attribute->attribute->title??null }} :
                                            </div>
                                            <div class="col-auto text-right fixcssacount item_buy_list_info_inaccright" style="color: #666;font-weight: 600;margin-left: auto">
                                                {{--                                                                    {{ $att_value->title??null }}--}}
                                                {{ $attribute->product_attribute_value_able->title??null }}
                                            </div>

                                        @endif
                                    @endforeach

                                @endif


                            </div>
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
                    <div class="item_buy_list_more">
                        <div class="row">
                            <div class="col-12 fixcssacount">
                                <div class="item_buy_list_price">
                                    @if ($sale_percent > 0)
                                        <span>
                                        {{ str_replace(',','.',number_format($item->price_old)) }}đ
                                    </span>
                                        {{ str_replace(',','.',number_format($item->price)) }}đ
                                    @else
                                        <span>
                                        {{ str_replace(',','.',number_format($item->price)) }}đ
                                    </span>
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
            @endforeach
        @endif
    @endif

</div>
@endif
