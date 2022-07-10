@if(isset($data))
<div class="block-other-nick mt-fix-20">

    <div class="row mr-fix-10 ml-fix-10">
        @foreach($data as $items)

        <div class="col-12 col-md-6 col-lg-3 pr-fix-10 pl-fix-10 ">
            <div class="block-product mb-md-fix-12">
                <div class="product-header d-flex">
                    <span>

                        @if(isset($items->image_icon))
                            <img src="{{ $items->image_icon }}" alt="">
                        @else
                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/nick_dif.png" alt="">
                        @endif
                    </span>
                    <p class="text-title" >{{ $items->title }}</p>
                    <div class="navbar-spacer"></div>
                    @if(!is_null($items->childs) && count($items->childs)>0)
                    <?php
                    $dataAttribute = $items->childs;
                    ?>
                    @endif


                    {{--                        <div class="text-view-more">--}}

                    {{--                            <a href="/mua-acc/slug" class="global__link">Xem thêm<i class="__icon --sm --link ml-1" style="--path : url(/assets/theme_3/image/icons/arrow-right-blue.png)"></i></a>--}}

                    {{--                        </div>--}}
                </div>
                <div class="box-product box-other-nick" >
                    <div class="list-product d-g-md-none mt-fix-4">
                        @if(isset($items->items) && count($items->items) > 0)
                            @foreach($items->items as $item)
                                <div class="item-product item-other-nick mt-fix-16">
                                    <a href="/acc/{{ $item->randId }}">
                                        <div class="item-product__box-img">
                                            @if($items->display_type == 2)
                                            <img src="{{\App\Library\MediaHelpers::media($items->params->thumb_default)}}" alt="">
                                            @else
                                                <img src="{{\App\Library\MediaHelpers::media($item->image)}}" alt="">
                                            @endif
                                        </div>
                                        <div class="item-product__box-content">

                                            @if(isset($item->randId))
                                            <div class="item-product__box-name">
                                                ID: #{{ $item->randId }}
                                            </div>
                                            @endif
                                            <div class="item-product__box-rank">
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
                                                                        <div>{{ $att_value->parent->title??null }}: {{ isset($att_value->title)? \Str::limit($att_value->title,16) : null }}</div>
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
                                                            @if(!is_null($items->childs) && count($items->childs)>0)
                                                                    <?php
                                                                    $dataAttribute = $items->childs;
                                                                    ?>
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

                                            </div>
                                            <div class="item-product__box-price">

                                                @if($items->display_type == 2)
                                                    @php
                                                        if (isset($items->params->price_old) && isset($items->params->price)) {
                                                            $sale_percent = (($items->params->price_old - $items->params->price) / $items->params->price_old) * 100;
                                                            $sale_percent = round($sale_percent, 0, PHP_ROUND_HALF_UP);
                                                        } else {
                                                            $sale_percent = 0;
                                                        }
                                                    @endphp
                                                    @if(isset($items->params->price))
                                                        <div class="special-price">{{ str_replace(',','.',number_format($items->params->price)) }} đ</div>
                                                    @endif
                                                    @if(isset($items->params->price_old))
                                                        <div class="old-price">{{ str_replace(',','.',number_format($items->params->price_old)) }}đ</div>
                                                    @endif
                                                    <div class="item-product__sticker-percent">
                                                        -{{$sale_percent}}%
                                                    </div>
                                                @else
                                                    @php
                                                        if (isset($item->price_old) && isset($item->price)) {
                                                            $sale_percent = (($item->price_old - $item->price) / $item->price_old) * 100;
                                                            $sale_percent = round($sale_percent, 0, PHP_ROUND_HALF_UP);
                                                        } else {
                                                            $sale_percent = 0;
                                                        }
                                                    @endphp
                                                    @if(isset($item->price))
                                                        <div class="special-price">{{ str_replace(',','.',number_format($item->price)) }} đ</div>
                                                    @endif
                                                    @if(isset($item->price_old))
                                                        <div class="old-price">{{ str_replace(',','.',number_format($item->price_old)) }}đ</div>
                                                    @endif
                                                    <div class="item-product__sticker-percent">
                                                        -{{$sale_percent}}%
                                                    </div>
                                                @endif
                                            </div>

                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    @if(isset($items->items) && count($items->items) > 0)
                    <div class="swiper-container list-product list-other-nick mt-fix-12 d-none d-g-md-block"   >
                        <div class="swiper-wrapper">

                            <div class="swiper-slide" >
                                <a href="/acc/{{ $item->randId }}">
                                    <div class="item-product__box-img">
                                        @if($items->display_type == 2)
                                            <img src="{{\App\Library\MediaHelpers::media($items->params->thumb_default)}}" alt="">
                                        @else
                                            <img src="{{\App\Library\MediaHelpers::media($item->image)}}" alt="">
                                        @endif
                                    </div>
                                    <div class="item-product__box-content">

                                        @if(isset($item->randId))
                                            <div class="item-product__box-name">
                                                ID: #{{ $item->randId }}
                                            </div>
                                        @endif
                                        <div class="item-product__box-rank">
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
                                                                <div>{{ $att_value->parent->title??null }}: {{ isset($att_value->title)? \Str::limit($att_value->title,16) : null }}</div>
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
                                                    @if(!is_null($items->childs) && count($items->childs)>0)
                                                        <?php
                                                        $dataAttribute = $items->childs;
                                                        ?>
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

                                        </div>
                                        <div class="item-product__box-price">

                                            @if($items->display_type == 2)
                                                @php
                                                    if (isset($items->params->price_old) && isset($items->params->price)) {
                                                        $sale_percent = (($items->params->price_old - $items->params->price) / $items->params->price_old) * 100;
                                                        $sale_percent = round($sale_percent, 0, PHP_ROUND_HALF_UP);
                                                    } else {
                                                        $sale_percent = 0;
                                                    }
                                                @endphp
                                                @if(isset($items->params->price))
                                                    <div class="special-price">{{ str_replace(',','.',number_format($items->params->price)) }} đ</div>
                                                @endif
                                                @if(isset($items->params->price_old))
                                                    <div class="old-price">{{ str_replace(',','.',number_format($items->params->price_old)) }}đ</div>
                                                @endif
                                                <div class="item-product__sticker-percent">
                                                    -{{$sale_percent}}%
                                                </div>
                                            @else
                                                @php
                                                    if (isset($item->price_old) && isset($item->price)) {
                                                        $sale_percent = (($item->price_old - $item->price) / $item->price_old) * 100;
                                                        $sale_percent = round($sale_percent, 0, PHP_ROUND_HALF_UP);
                                                    } else {
                                                        $sale_percent = 0;
                                                    }
                                                @endphp
                                                @if(isset($item->price))
                                                    <div class="special-price">{{ str_replace(',','.',number_format($item->price)) }} đ</div>
                                                @endif
                                                @if(isset($item->price_old))
                                                    <div class="old-price">{{ str_replace(',','.',number_format($item->price_old)) }}đ</div>
                                                @endif
                                                <div class="item-product__sticker-percent">
                                                    -{{$sale_percent}}%
                                                </div>
                                            @endif
                                        </div>

                                    </div>
                                </a>

                            </div>


                        </div>
                    </div>
                    @endif
                </div>
            </div>

        </div>

        @endforeach
{{--        <div class="col-12 col-md-6 col-lg-3 pr-fix-10 pl-fix-10">--}}
{{--            <div class="block-product mb-md-fix-12">--}}
{{--                <div class="product-header d-flex">--}}
{{--                                <span>--}}
{{--                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/nick_dif.png" alt="">--}}
{{--                                </span>--}}
{{--                    <p class="text-title" >PUBG</p>--}}
{{--                    <div class="navbar-spacer"></div>--}}


{{--                </div>--}}
{{--                <div class="box-product box-other-nick" >--}}
{{--                    <div class="list-product d-g-md-none mt-fix-4">--}}
{{--                        <div class="item-product item-other-nick mt-fix-16">--}}
{{--                            <a href="/acc/id">--}}
{{--                                <div class="item-product__box-img">--}}

{{--                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/product3.gif" alt="">--}}

{{--                                </div>--}}
{{--                                <div class="item-product__box-content">--}}


{{--                                    <div class="item-product__box-name">--}}
{{--                                        Acc liên quan siêu vip--}}
{{--                                    </div>--}}
{{--                                    <div class="item-product__box-id">--}}
{{--                                        ID: #1365898--}}
{{--                                    </div>--}}
{{--                                    <div class="item-product__box-rank">--}}
{{--                                        <div>Rank: 91</div>--}}
{{--                                        <div>Rank: 91</div>--}}
{{--                                        <div>Rank: 91</div>--}}

{{--                                    </div>--}}
{{--                                    <div class="item-product__box-price">--}}

{{--                                        <div class="special-price">15.000đ</div>--}}
{{--                                        <div class="old-price">30.000đ</div>--}}
{{--                                        <div class="item-product__sticker-percent">--}}
{{--                                            -50%--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="item-product item-other-nick mt-fix-16">--}}
{{--                            <a href="/acc/id">--}}
{{--                                <div class="item-product__box-img">--}}

{{--                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/product1.gif" alt="">--}}

{{--                                </div>--}}
{{--                                <div class="item-product__box-content">--}}


{{--                                    <div class="item-product__box-name">--}}
{{--                                        Acc liên quan siêu vip--}}
{{--                                    </div>--}}
{{--                                    <div class="item-product__box-id">--}}
{{--                                        ID: #1365898--}}
{{--                                    </div>--}}
{{--                                    <div class="item-product__box-rank">--}}
{{--                                        <div>Rank: 91</div>--}}
{{--                                        <div>Rank: 91</div>--}}
{{--                                        <div>Rank: 91</div>--}}

{{--                                    </div>--}}
{{--                                    <div class="item-product__box-price">--}}

{{--                                        <div class="special-price">15.000đ</div>--}}
{{--                                        <div class="old-price">30.000đ</div>--}}
{{--                                        <div class="item-product__sticker-percent">--}}
{{--                                            -50%--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="item-product item-other-nick mt-fix-16">--}}
{{--                            <a href="/acc/id">--}}
{{--                                <div class="item-product__box-img">--}}

{{--                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/product3.gif" alt="">--}}

{{--                                </div>--}}
{{--                                <div class="item-product__box-content">--}}


{{--                                    <div class="item-product__box-name">--}}
{{--                                        Acc liên quan siêu vip--}}
{{--                                    </div>--}}
{{--                                    <div class="item-product__box-id">--}}
{{--                                        ID: #1365898--}}
{{--                                    </div>--}}
{{--                                    <div class="item-product__box-rank">--}}
{{--                                        <div>Rank: 91</div>--}}
{{--                                        <div>Rank: 91</div>--}}
{{--                                        <div>Rank: 91</div>--}}

{{--                                    </div>--}}
{{--                                    <div class="item-product__box-price">--}}

{{--                                        <div class="special-price">15.000đ</div>--}}
{{--                                        <div class="old-price">30.000đ</div>--}}
{{--                                        <div class="item-product__sticker-percent">--}}
{{--                                            -50%--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}


{{--                    </div>--}}
{{--                    <div class="swiper-container list-product list-other-nick mt-fix-12 d-none d-g-md-block"   >--}}
{{--                        <div class="swiper-wrapper">--}}
{{--                            <div class="swiper-slide" >--}}
{{--                                <div class="item-product__box-img">--}}
{{--                                    <a href="/acc/id">--}}
{{--                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product1.gif" alt="">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="item-product__box-content">--}}

{{--                                    <a href="/acc/id">--}}
{{--                                        <div class="item-product__box-name">--}}
{{--                                            Acc liên quan siêu vip--}}
{{--                                        </div>--}}
{{--                                        <div class="item-product__box-id">--}}
{{--                                            ID: #1365898--}}
{{--                                        </div>--}}
{{--                                        <div class="item-product__box-rank">--}}
{{--                                            <div class="item-product__box-rank">--}}
{{--                                                <div>Rank: 91</div>--}}
{{--                                                <div>Rank: 91</div>--}}
{{--                                                <div>Rank: 91</div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="item-product__box-price">--}}

{{--                                            <div class="special-price">15.000đ</div>--}}
{{--                                            <div class="old-price">30.000đ</div>--}}
{{--                                            <div class="item-product__sticker-percent">--}}
{{--                                                -50%--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                            <div class="swiper-slide" >--}}
{{--                                <div class="item-product__box-img">--}}
{{--                                    <a href="/acc/id">--}}
{{--                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product1.gif" alt="">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="item-product__box-content">--}}

{{--                                    <a href="/acc/id">--}}
{{--                                        <div class="item-product__box-name">--}}
{{--                                            Acc liên quan siêu vip--}}
{{--                                        </div>--}}
{{--                                        <div class="item-product__box-id">--}}
{{--                                            ID: #1365898--}}
{{--                                        </div>--}}
{{--                                        <div class="item-product__box-rank">--}}
{{--                                            <div class="item-product__box-rank">--}}
{{--                                                <div>Rank: 91</div>--}}
{{--                                                <div>Rank: 91</div>--}}
{{--                                                <div>Rank: 91</div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="item-product__box-price">--}}

{{--                                            <div class="special-price">15.000đ</div>--}}
{{--                                            <div class="old-price">30.000đ</div>--}}
{{--                                            <div class="item-product__sticker-percent">--}}
{{--                                                -50%--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                            <div class="swiper-slide" >--}}
{{--                                <div class="item-product__box-img">--}}
{{--                                    <a href="/acc/id">--}}
{{--                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product1.gif" alt="">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="item-product__box-content">--}}

{{--                                    <a href="/acc/id">--}}
{{--                                        <div class="item-product__box-name">--}}
{{--                                            Acc liên quan siêu vip--}}
{{--                                        </div>--}}
{{--                                        <div class="item-product__box-id">--}}
{{--                                            ID: #1365898--}}
{{--                                        </div>--}}
{{--                                        <div class="item-product__box-rank">--}}
{{--                                            <div class="item-product__box-rank">--}}
{{--                                                <div>Rank: 91</div>--}}
{{--                                                <div>Rank: 91</div>--}}
{{--                                                <div>Rank: 91</div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="item-product__box-price">--}}

{{--                                            <div class="special-price">15.000đ</div>--}}
{{--                                            <div class="old-price">30.000đ</div>--}}
{{--                                            <div class="item-product__sticker-percent">--}}
{{--                                                -50%--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                            <div class="swiper-slide" >--}}
{{--                                <div class="item-product__box-img">--}}
{{--                                    <a href="/acc/id">--}}
{{--                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product1.gif" alt="">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="item-product__box-content">--}}

{{--                                    <a href="/acc/id">--}}
{{--                                        <div class="item-product__box-name">--}}
{{--                                            Acc liên quan siêu vip--}}
{{--                                        </div>--}}
{{--                                        <div class="item-product__box-id">--}}
{{--                                            ID: #1365898--}}
{{--                                        </div>--}}
{{--                                        <div class="item-product__box-rank">--}}
{{--                                            <div class="item-product__box-rank">--}}
{{--                                                <div>Rank: 91</div>--}}
{{--                                                <div>Rank: 91</div>--}}
{{--                                                <div>Rank: 91</div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="item-product__box-price">--}}

{{--                                            <div class="special-price">15.000đ</div>--}}
{{--                                            <div class="old-price">30.000đ</div>--}}
{{--                                            <div class="item-product__sticker-percent">--}}
{{--                                                -50%--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                            <div class="swiper-slide" >--}}
{{--                                <div class="item-product__box-img">--}}
{{--                                    <a href="/acc/id">--}}
{{--                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product1.gif" alt="">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="item-product__box-content">--}}

{{--                                    <a href="/acc/id">--}}
{{--                                        <div class="item-product__box-name">--}}
{{--                                            Acc liên quan siêu vip--}}
{{--                                        </div>--}}
{{--                                        <div class="item-product__box-id">--}}
{{--                                            ID: #1365898--}}
{{--                                        </div>--}}
{{--                                        <div class="item-product__box-rank">--}}
{{--                                            <div class="item-product__box-rank">--}}
{{--                                                <div>Rank: 91</div>--}}
{{--                                                <div>Rank: 91</div>--}}
{{--                                                <div>Rank: 91</div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="item-product__box-price">--}}

{{--                                            <div class="special-price">15.000đ</div>--}}
{{--                                            <div class="old-price">30.000đ</div>--}}
{{--                                            <div class="item-product__sticker-percent">--}}
{{--                                                -50%--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-12 col-md-6 col-lg-3 pr-fix-10 pl-fix-10 ">--}}
{{--            <div class="block-product mb-md-fix-12">--}}
{{--                <div class="product-header d-flex">--}}
{{--                                <span>--}}
{{--                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/nick_dif.png" alt="">--}}
{{--                                </span>--}}
{{--                    <p class="text-title" >Pokemon Go</p>--}}
{{--                    <div class="navbar-spacer"></div>--}}


{{--                </div>--}}
{{--                <div class="box-product box-other-nick" >--}}
{{--                    <div class="list-product d-g-md-none mt-fix-4">--}}
{{--                        <div class="item-product item-other-nick mt-fix-16">--}}
{{--                            <a href="/acc/id">--}}
{{--                                <div class="item-product__box-img">--}}

{{--                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/product3.gif" alt="">--}}

{{--                                </div>--}}
{{--                                <div class="item-product__box-content">--}}


{{--                                    <div class="item-product__box-name">--}}
{{--                                        Acc liên quan siêu vip--}}
{{--                                    </div>--}}
{{--                                    <div class="item-product__box-id">--}}
{{--                                        ID: #1365898--}}
{{--                                    </div>--}}
{{--                                    <div class="item-product__box-rank">--}}
{{--                                        <div>Rank: 91</div>--}}
{{--                                        <div>Rank: 91</div>--}}
{{--                                        <div>Rank: 91</div>--}}

{{--                                    </div>--}}
{{--                                    <div class="item-product__box-price">--}}

{{--                                        <div class="special-price">15.000đ</div>--}}
{{--                                        <div class="old-price">30.000đ</div>--}}
{{--                                        <div class="item-product__sticker-percent">--}}
{{--                                            -50%--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="item-product item-other-nick mt-fix-16">--}}
{{--                            <a href="/acc/id">--}}
{{--                                <div class="item-product__box-img">--}}

{{--                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/product6.gif" alt="">--}}

{{--                                </div>--}}
{{--                                <div class="item-product__box-content">--}}


{{--                                    <div class="item-product__box-name">--}}
{{--                                        Acc liên quan siêu vip--}}
{{--                                    </div>--}}
{{--                                    <div class="item-product__box-id">--}}
{{--                                        ID: #1365898--}}
{{--                                    </div>--}}
{{--                                    <div class="item-product__box-rank">--}}
{{--                                        <div>Rank: 91</div>--}}
{{--                                        <div>Rank: 91</div>--}}
{{--                                        <div>Rank: 91</div>--}}

{{--                                    </div>--}}
{{--                                    <div class="item-product__box-price">--}}

{{--                                        <div class="special-price">15.000đ</div>--}}
{{--                                        <div class="old-price">30.000đ</div>--}}
{{--                                        <div class="item-product__sticker-percent">--}}
{{--                                            -50%--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="item-product item-other-nick mt-fix-16">--}}
{{--                            <a href="/acc/id">--}}
{{--                                <div class="item-product__box-img">--}}

{{--                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/product2.gif" alt="">--}}

{{--                                </div>--}}
{{--                                <div class="item-product__box-content">--}}


{{--                                    <div class="item-product__box-name">--}}
{{--                                        Acc liên quan siêu vip--}}
{{--                                    </div>--}}
{{--                                    <div class="item-product__box-id">--}}
{{--                                        ID: #1365898--}}
{{--                                    </div>--}}
{{--                                    <div class="item-product__box-rank">--}}
{{--                                        <div>Rank: 91</div>--}}
{{--                                        <div>Rank: 91</div>--}}
{{--                                        <div>Rank: 91</div>--}}

{{--                                    </div>--}}
{{--                                    <div class="item-product__box-price">--}}

{{--                                        <div class="special-price">15.000đ</div>--}}
{{--                                        <div class="old-price">30.000đ</div>--}}
{{--                                        <div class="item-product__sticker-percent">--}}
{{--                                            -50%--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                    <div class="swiper-container list-product list-other-nick mt-fix-12 d-none d-g-md-block"   >--}}
{{--                        <div class="swiper-wrapper">--}}
{{--                            <div class="swiper-slide" >--}}
{{--                                <div class="item-product__box-img">--}}
{{--                                    <a href="/acc/id">--}}
{{--                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product1.gif" alt="">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="item-product__box-content">--}}

{{--                                    <a href="/acc/id">--}}
{{--                                        <div class="item-product__box-name">--}}
{{--                                            Acc liên quan siêu vip--}}
{{--                                        </div>--}}
{{--                                        <div class="item-product__box-id">--}}
{{--                                            ID: #1365898--}}
{{--                                        </div>--}}
{{--                                        <div class="item-product__box-rank">--}}
{{--                                            <div class="item-product__box-rank">--}}
{{--                                                <div>Rank: 91</div>--}}
{{--                                                <div>Rank: 91</div>--}}
{{--                                                <div>Rank: 91</div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="item-product__box-price">--}}

{{--                                            <div class="special-price">15.000đ</div>--}}
{{--                                            <div class="old-price">30.000đ</div>--}}
{{--                                            <div class="item-product__sticker-percent">--}}
{{--                                                -50%--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                            <div class="swiper-slide" >--}}
{{--                                <div class="item-product__box-img">--}}
{{--                                    <a href="/acc/id">--}}
{{--                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product1.gif" alt="">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="item-product__box-content">--}}

{{--                                    <a href="/acc/id">--}}
{{--                                        <div class="item-product__box-name">--}}
{{--                                            Acc liên quan siêu vip--}}
{{--                                        </div>--}}
{{--                                        <div class="item-product__box-id">--}}
{{--                                            ID: #1365898--}}
{{--                                        </div>--}}
{{--                                        <div class="item-product__box-rank">--}}
{{--                                            <div class="item-product__box-rank">--}}
{{--                                                <div>Rank: 91</div>--}}
{{--                                                <div>Rank: 91</div>--}}
{{--                                                <div>Rank: 91</div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="item-product__box-price">--}}

{{--                                            <div class="special-price">15.000đ</div>--}}
{{--                                            <div class="old-price">30.000đ</div>--}}
{{--                                            <div class="item-product__sticker-percent">--}}
{{--                                                -50%--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                            <div class="swiper-slide" >--}}
{{--                                <div class="item-product__box-img">--}}
{{--                                    <a href="/acc/id">--}}
{{--                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product1.gif" alt="">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="item-product__box-content">--}}

{{--                                    <a href="/acc/id">--}}
{{--                                        <div class="item-product__box-name">--}}
{{--                                            Acc liên quan siêu vip--}}
{{--                                        </div>--}}
{{--                                        <div class="item-product__box-id">--}}
{{--                                            ID: #1365898--}}
{{--                                        </div>--}}
{{--                                        <div class="item-product__box-rank">--}}
{{--                                            <div class="item-product__box-rank">--}}
{{--                                                <div>Rank: 91</div>--}}
{{--                                                <div>Rank: 91</div>--}}
{{--                                                <div>Rank: 91</div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="item-product__box-price">--}}

{{--                                            <div class="special-price">15.000đ</div>--}}
{{--                                            <div class="old-price">30.000đ</div>--}}
{{--                                            <div class="item-product__sticker-percent">--}}
{{--                                                -50%--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                            <div class="swiper-slide" >--}}
{{--                                <div class="item-product__box-img">--}}
{{--                                    <a href="/acc/id">--}}
{{--                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product1.gif" alt="">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="item-product__box-content">--}}

{{--                                    <a href="/acc/id">--}}
{{--                                        <div class="item-product__box-name">--}}
{{--                                            Acc liên quan siêu vip--}}
{{--                                        </div>--}}
{{--                                        <div class="item-product__box-id">--}}
{{--                                            ID: #1365898--}}
{{--                                        </div>--}}
{{--                                        <div class="item-product__box-rank">--}}
{{--                                            <div class="item-product__box-rank">--}}
{{--                                                <div>Rank: 91</div>--}}
{{--                                                <div>Rank: 91</div>--}}
{{--                                                <div>Rank: 91</div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="item-product__box-price">--}}

{{--                                            <div class="special-price">15.000đ</div>--}}
{{--                                            <div class="old-price">30.000đ</div>--}}
{{--                                            <div class="item-product__sticker-percent">--}}
{{--                                                -50%--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                            <div class="swiper-slide" >--}}
{{--                                <div class="item-product__box-img">--}}
{{--                                    <a href="/acc/id">--}}
{{--                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product1.gif" alt="">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="item-product__box-content">--}}

{{--                                    <a href="/acc/id">--}}
{{--                                        <div class="item-product__box-name">--}}
{{--                                            Acc liên quan siêu vip--}}
{{--                                        </div>--}}
{{--                                        <div class="item-product__box-id">--}}
{{--                                            ID: #1365898--}}
{{--                                        </div>--}}
{{--                                        <div class="item-product__box-rank">--}}
{{--                                            <div class="item-product__box-rank">--}}
{{--                                                <div>Rank: 91</div>--}}
{{--                                                <div>Rank: 91</div>--}}
{{--                                                <div>Rank: 91</div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="item-product__box-price">--}}

{{--                                            <div class="special-price">15.000đ</div>--}}
{{--                                            <div class="old-price">30.000đ</div>--}}
{{--                                            <div class="item-product__sticker-percent">--}}
{{--                                                -50%--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}

{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--        <div class="col-12 col-md-6 col-lg-3 pr-fix-10 pl-fix-10 ">--}}
{{--            <div class="block-product mb-md-fix-12">--}}
{{--                <div class="product-header d-flex">--}}
{{--                                <span>--}}
{{--                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/nick_dif.png" alt="">--}}
{{--                                </span>--}}
{{--                    <p class="text-title" >Pokemon Go</p>--}}
{{--                    <div class="navbar-spacer"></div>--}}


{{--                </div>--}}
{{--                <div class="box-product box-other-nick" >--}}
{{--                    <div class="list-product d-g-md-none mt-fix-4">--}}
{{--                        <div class="item-product item-other-nick mt-fix-16">--}}
{{--                            <a href="/acc/id">--}}
{{--                                <div class="item-product__box-img">--}}

{{--                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/product2.gif" alt="">--}}

{{--                                </div>--}}
{{--                                <div class="item-product__box-content">--}}


{{--                                    <div class="item-product__box-name">--}}
{{--                                        Acc liên quan siêu vip--}}
{{--                                    </div>--}}
{{--                                    <div class="item-product__box-id">--}}
{{--                                        ID: #1365898--}}
{{--                                    </div>--}}
{{--                                    <div class="item-product__box-rank">--}}
{{--                                        <div>Rank: 91</div>--}}
{{--                                        <div>Rank: 91</div>--}}
{{--                                        <div>Rank: 91</div>--}}

{{--                                    </div>--}}
{{--                                    <div class="item-product__box-price">--}}

{{--                                        <div class="special-price">15.000đ</div>--}}
{{--                                        <div class="old-price">30.000đ</div>--}}
{{--                                        <div class="item-product__sticker-percent">--}}
{{--                                            -50%--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="item-product item-other-nick mt-fix-16">--}}
{{--                            <a href="/acc/id">--}}
{{--                                <div class="item-product__box-img">--}}

{{--                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/product2.gif" alt="">--}}

{{--                                </div>--}}
{{--                                <div class="item-product__box-content">--}}


{{--                                    <div class="item-product__box-name">--}}
{{--                                        Acc liên quan siêu vip--}}
{{--                                    </div>--}}
{{--                                    <div class="item-product__box-id">--}}
{{--                                        ID: #1365898--}}
{{--                                    </div>--}}
{{--                                    <div class="item-product__box-rank">--}}
{{--                                        <div>Rank: 91</div>--}}
{{--                                        <div>Rank: 91</div>--}}
{{--                                        <div>Rank: 91</div>--}}

{{--                                    </div>--}}
{{--                                    <div class="item-product__box-price">--}}

{{--                                        <div class="special-price">15.000đ</div>--}}
{{--                                        <div class="old-price">30.000đ</div>--}}
{{--                                        <div class="item-product__sticker-percent">--}}
{{--                                            -50%--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="item-product item-other-nick mt-fix-16">--}}
{{--                            <a href="/acc/id">--}}
{{--                                <div class="item-product__box-img">--}}

{{--                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/product2.gif" alt="">--}}

{{--                                </div>--}}
{{--                                <div class="item-product__box-content">--}}


{{--                                    <div class="item-product__box-name">--}}
{{--                                        Acc liên quan siêu vip--}}
{{--                                    </div>--}}
{{--                                    <div class="item-product__box-id">--}}
{{--                                        ID: #1365898--}}
{{--                                    </div>--}}
{{--                                    <div class="item-product__box-rank">--}}
{{--                                        <div>Rank: 91</div>--}}
{{--                                        <div>Rank: 91</div>--}}
{{--                                        <div>Rank: 91</div>--}}

{{--                                    </div>--}}
{{--                                    <div class="item-product__box-price">--}}

{{--                                        <div class="special-price">15.000đ</div>--}}
{{--                                        <div class="old-price">30.000đ</div>--}}
{{--                                        <div class="item-product__sticker-percent">--}}
{{--                                            -50%--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}


{{--                    </div>--}}
{{--                    <div class="swiper-container list-product list-other-nick mt-fix-12 d-none d-g-md-block"   >--}}
{{--                        <div class="swiper-wrapper">--}}
{{--                            <div class="swiper-slide" >--}}
{{--                                <div class="item-product__box-img">--}}
{{--                                    <a href="/acc/id">--}}
{{--                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product1.gif" alt="">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="item-product__box-content">--}}

{{--                                    <a href="/acc/id">--}}
{{--                                        <div class="item-product__box-name">--}}
{{--                                            Acc liên quan siêu vip--}}
{{--                                        </div>--}}
{{--                                        <div class="item-product__box-id">--}}
{{--                                            ID: #1365898--}}
{{--                                        </div>--}}
{{--                                        <div class="item-product__box-rank">--}}
{{--                                            <div>Rank: 91</div>--}}
{{--                                            <div>Rank: 91</div>--}}
{{--                                            <div>Rank: 91</div>--}}
{{--                                        </div>--}}
{{--                                        <div class="item-product__box-price">--}}

{{--                                            <div class="special-price">15.000đ</div>--}}
{{--                                            <div class="old-price">30.000đ</div>--}}
{{--                                            <div class="item-product__sticker-percent">--}}
{{--                                                -50%--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                            <div class="swiper-slide" >--}}
{{--                                <div class="item-product__box-img">--}}
{{--                                    <a href="/acc/id">--}}
{{--                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product1.gif" alt="">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="item-product__box-content">--}}

{{--                                    <a href="/acc/id">--}}
{{--                                        <div class="item-product__box-name">--}}
{{--                                            Acc liên quan siêu vip--}}
{{--                                        </div>--}}
{{--                                        <div class="item-product__box-id">--}}
{{--                                            ID: #1365898--}}
{{--                                        </div>--}}
{{--                                        <div class="item-product__box-rank">--}}
{{--                                            <div class="item-product__box-rank">--}}
{{--                                                <div>Rank: 91</div>--}}
{{--                                                <div>Rank: 91</div>--}}
{{--                                                <div>Rank: 91</div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="item-product__box-price">--}}

{{--                                            <div class="special-price">15.000đ</div>--}}
{{--                                            <div class="old-price">30.000đ</div>--}}
{{--                                            <div class="item-product__sticker-percent">--}}
{{--                                                -50%--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                            <div class="swiper-slide" >--}}
{{--                                <div class="item-product__box-img">--}}
{{--                                    <a href="/acc/id">--}}
{{--                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product1.gif" alt="">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="item-product__box-content">--}}

{{--                                    <a href="/acc/id">--}}
{{--                                        <div class="item-product__box-name">--}}
{{--                                            Acc liên quan siêu vip--}}
{{--                                        </div>--}}
{{--                                        <div class="item-product__box-id">--}}
{{--                                            ID: #1365898--}}
{{--                                        </div>--}}
{{--                                        <div class="item-product__box-rank">--}}
{{--                                            <div class="item-product__box-rank">--}}
{{--                                                <div>Rank: 91</div>--}}
{{--                                                <div>Rank: 91</div>--}}
{{--                                                <div>Rank: 91</div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="item-product__box-price">--}}

{{--                                            <div class="special-price">15.000đ</div>--}}
{{--                                            <div class="old-price">30.000đ</div>--}}
{{--                                            <div class="item-product__sticker-percent">--}}
{{--                                                -50%--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                            <div class="swiper-slide" >--}}
{{--                                <div class="item-product__box-img">--}}
{{--                                    <a href="/acc/id">--}}
{{--                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product1.gif" alt="">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="item-product__box-content">--}}

{{--                                    <a href="/acc/id">--}}
{{--                                        <div class="item-product__box-name">--}}
{{--                                            Acc liên quan siêu vip--}}
{{--                                        </div>--}}
{{--                                        <div class="item-product__box-id">--}}
{{--                                            ID: #1365898--}}
{{--                                        </div>--}}
{{--                                        <div class="item-product__box-rank">--}}
{{--                                            <div class="item-product__box-rank">--}}
{{--                                                <div>Rank: 91</div>--}}
{{--                                                <div>Rank: 91</div>--}}
{{--                                                <div>Rank: 91</div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="item-product__box-price">--}}

{{--                                            <div class="special-price">15.000đ</div>--}}
{{--                                            <div class="old-price">30.000đ</div>--}}
{{--                                            <div class="item-product__sticker-percent">--}}
{{--                                                -50%--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                            <div class="swiper-slide" >--}}
{{--                                <div class="item-product__box-img">--}}
{{--                                    <a href="/acc/id">--}}
{{--                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product1.gif" alt="">--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="item-product__box-content">--}}

{{--                                    <a href="/acc/id">--}}
{{--                                        <div class="item-product__box-name">--}}
{{--                                            Acc liên quan siêu vip--}}
{{--                                        </div>--}}
{{--                                        <div class="item-product__box-id">--}}
{{--                                            ID: #1365898--}}
{{--                                        </div>--}}
{{--                                        <div class="item-product__box-rank">--}}
{{--                                            <div class="item-product__box-rank">--}}
{{--                                                <div>Rank: 91</div>--}}
{{--                                                <div>Rank: 91</div>--}}
{{--                                                <div>Rank: 91</div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="item-product__box-price">--}}

{{--                                            <div class="special-price">15.000đ</div>--}}
{{--                                            <div class="old-price">30.000đ</div>--}}
{{--                                            <div class="item-product__sticker-percent">--}}
{{--                                                -50%--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}

{{--                            </div>--}}


{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
    </div>

</div>
@endif
