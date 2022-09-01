@if(isset($data))
    @forelse($data as $key  => $items)
        @php
            $dataAttribute = null;

            if (isset($items->childs) && count($items->childs)){
                $dataAttribute = $items->childs;
            }
        @endphp

        <div class="col-12 col-md-6 col-lg-3 pr-fix-10 pl-fix-10">
            <div class="block-product mb-md-fix-12">
                <div class="product-header d-flex">
                    <span>
                        @if(isset($items->image_icon) || isset($items->custom->image_icon))
                            <img src="{{ isset($items->custom->image_icon) && $items->custom->image_icon != '' ? $items->custom->image_icon :  $items->image_icon }}" alt="">
                        @endif
                    </span>
                    <p class="text-title">{{ isset($items->custom->title) ? $items->custom->title :  $items->title }}</p>
                    <div class="navbar-spacer"></div>
                    <a href="/mua-acc/{{ isset($items->custom->slug) && $items->custom->slug != '' ? $items->custom->slug :  $items->slug }}" class="link arr-right d-lg-none">Xem tất cả</a>
                </div>
                @if(isset($items->items) && count($items->items) > 0)
                    <div class="box-product box-other-nick">
                        <div class="list-product d-g-md-none mt-fix-4">
                            @foreach($items->items as $item)
                                @if($item->status = 1)
                            <div class="item-product item-other-nick mt-fix-16">
                                <a href="/acc/{{ $item->randId }}">
                                    <div class="item-product__box-img">
                                        <img src="{{\App\Library\MediaHelpers::media($item->image)}}" alt="{{ $item->randId??'' }}">
                                    </div>
                                    <div class="item-product__box-content">
                                        <div class="item-product__box-name">
                                            {{ isset($items->custom->title) ? $items->custom->title :  $items->title }}
                                        </div>
                                        <div class="item-product__box-id">
                                            ID: #{{ @$item->randId}}
                                        </div>
                                        <div class="item-product__box-rank">
                                            <div>
                                                @if(isset($items->items_count))
                                                    @if((isset($items->account_fake) && $items->account_fake > 1) || (isset($items->custom->account_fake) && $items->custom->account_fake > 1))
                                                        Số tài khoản: {{ str_replace(',','.',number_format(round(isset($items->custom->account_fake) ? $items->items_count*$items->custom->account_fake : $items->items_count*$items->account_fake))) }}
                                                    @else
                                                        Số tài khoản: {{ $items->items_count }}
                                                    @endif

                                                @else
                                                    Số tài khoản: 0
                                                @endif
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
                                        <div class="item-product__box-price">

                                            <div class="special-price d-block">{{ str_replace(',','.',number_format($item->price)) }}đ</div>
                                            <div class="old-price ml-0">{{ str_replace(',','.',number_format($item->price_old)) }}đ</div>
                                            <div class="item-product__sticker-percent">
                                                - {{$sale_percent}}%
                                            </div>
                                        </div>

                                    </div>
                                </a>
                            </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="swiper-container list-product list-other-nick mt-fix-12 d-none d-g-md-block">
                            <div class="swiper-wrapper">
                                @foreach($items->items as $item)
                                    @if($item->status = 1)
                                <div class="swiper-slide">
                                    <div class="item-product__box-img">
                                        <a href="/acc/{{ $item->randId }}">
                                            <img src="{{\App\Library\MediaHelpers::media($item->image)}}" alt="{{ $item->randId??'' }}">
                                        </a>
                                    </div>
                                    <div class="item-product__box-content">

                                        <a href="/acc/{{ $item->randId }}">
                                            <div class="item-product__box-name">
                                                {{ isset($items->custom->title) ? $items->custom->title :  $items->title }}
                                            </div>
                                            <div class="item-product__box-id">
                                                ID: #{{ @$item->randId}}
                                            </div>
                                            <div class="item-product__box-rank">
                                                <div class="item-product__box-rank">
                                                    <div>
                                                        @if(isset($items->items_count))
                                                            @if((isset($items->account_fake) && $items->account_fake > 1) || (isset($items->custom->account_fake) && $items->custom->account_fake > 1))
                                                                Số tài khoản: {{ str_replace(',','.',number_format(round(isset($items->custom->account_fake) ? $items->items_count*$items->custom->account_fake : $items->items_count*$items->account_fake))) }}
                                                            @else
                                                                Số tài khoản: {{ $items->items_count }}
                                                            @endif

                                                        @else
                                                            Số tài khoản: 0
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-product__box-price">

                                                <div class="special-price">{{ str_replace(',','.',number_format($item->price)) }}đ</div>
                                                <div class="old-price">{{ str_replace(',','.',number_format($item->price_old)) }}đ</div>
                                                <div class="item-product__sticker-percent">
                                                    - {{$sale_percent}}%
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>

                    </div>
                @endif
                <div class="mt-2 d-lg-block d-none">
                    <a href="/mua-acc/{{ isset($items->custom->slug) && $items->custom->slug != '' ? $items->custom->slug :  $items->slug }}" class="global__link__default">Xem thêm<i class="__icon__default --sm__default --link__default ml-1" style="--path : url(/assets/frontend/theme_3/image/svg/xemthem.svg)"></i></a>
                </div>
            </div>

        </div>

    @empty

    @endforelse
@endif
