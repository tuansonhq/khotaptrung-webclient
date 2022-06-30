@if(isset($data) && count($data) > 0)
<div class=" block-product mt-fix-20">
    <div class="product-header d-flex">
                    <span>
                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/flash_sales.png" alt="">
                    </span>
        <p class="text-title">Danh mục acc game</p>
        <div class="product-catecory" ></div>
        <div class="text-view-more">
            <a href="/mua-acc" class="global__link">Xem thêm<i class="__icon --sm --link ml-1" style="--path : url(/assets/theme_5/image/icons/arrow-right-blue.png)"></i></a>
        </div>
    </div>
    <div class="product-catecory d-none d-g-lg-block pt-fix-16 pr-fix-16 pl-fix-16" >
    </div>
    <div class="box-product-content tab-content">
        <div class="box-product tab-pane fade active show" id="account" role="tabpanel" aria-labelledby="account-tab">
            <div class="swiper-container list-product" >
                <div class="swiper-wrapper">
                    @foreach($data as $item)
                    <div class="swiper-slide ">
                        <a href="/mua-acc/{{ isset($item->custom->slug) && $item->custom->slug != '' ? $item->custom->slug :  $item->slug }}">
                            <div class="item-product__box-img">
                                    @if(isset($item->image))
                                        <img class="game-list-image-in lazy" src="{{ isset($item->custom->image) ? \App\Library\MediaHelpers::media($item->custom->image) :  \App\Library\MediaHelpers::media($item->image) }}" alt="">
                                    @else
                                        <img class="game-list-image-in" src="/assets/frontend/{{theme('')->theme_key}}/images/ff.jpg" alt="">
                                    @endif
                            </div>
                            <div class="item-product__box-content">
                                <div class="item-product__box-name item-acc-name">
                                    {{ isset($item->custom->title) ? $item->custom->title :  $item->title }}
                                </div>
                                <div class="item-product__box-sale">
                                    @if(isset($item->items_count))
                                        @if((isset($item->account_fake) && $item->account_fake > 1) || (isset($item->custom->account_fake) && $item->custom->account_fake > 1))
                                            Số tài khoản: {{ str_replace(',','.',number_format(round(isset($item->custom->account_fake) ? $item->items_count*$item->custom->account_fake : $item->items_count*$item->account_fake))) }}
                                        @else
                                            Số tài khoản: {{ $item->items_count }}
                                        @endif
                                    @else
                                        Số tài khoản: 9999
                                    @endif
                                </div>
                                <div class="item-product__box-sale">
                                    Đã bán: 40K
                                </div>
                                <div class="item-product__box-price">
                                    <div class="special-price">{{$item->params->price}}</div>
                                    <div class="old-price">{{$item->params->price_old}}</div>
                                    <div class="item-product__sticker-percent">
                                        -50%
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endif
