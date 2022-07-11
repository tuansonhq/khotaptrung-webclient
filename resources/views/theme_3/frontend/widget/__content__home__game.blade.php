
@if(isset($data) && count($data) > 0)
<div class="block-product mt-fix-20">
    <div class="product-header d-flex">
                    <span>
                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/nick_title.png" alt="">
                    </span>
        <h2 class="text-title" >Nick ngon giá rẻ</h2>
        <div class="navbar-spacer"></div>

        <div class="text-view-more">

            <a href="/mua-acc" class="global__link">Xem thêm<i class="__icon --sm --link ml-1" style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/icons/arrow-right-blue.png)"></i></a>

        </div>
    </div>

    <div class="box-product">
        <div class="swiper-container list-product swiper-service" >
            <div class="swiper-wrapper">
                @foreach($data as $key => $item)
                <div class="swiper-slide" >
                    <a href="/mua-acc/{{ isset($item->custom->slug) && $item->custom->slug != '' ? $item->custom->slug :  $item->slug }}">
                        <div class="item-product__box-img">

                            <img src="{{ isset($item->custom->image) ? \App\Library\MediaHelpers::media($item->custom->image) :  \App\Library\MediaHelpers::media($item->image) }}" alt="">

                        </div>
                        <div class="item-nick-name">{{ isset($item->custom->title) ? $item->custom->title :  $item->title }}</div>
                    </a>
                </div>

                @endforeach
            </div>
        </div>
    </div>
{{--    <div class="box-product">--}}
{{--        <div class=" list-product d-flex flex-wrap" >--}}

{{--            @foreach($data as $key => $item)--}}
{{--            @if($key < 8)--}}
{{--                <div class="item-product item-nick ">--}}
{{--                <a href="/mua-acc/{{ isset($item->custom->slug) && $item->custom->slug != '' ? $item->custom->slug :  $item->slug }}">--}}
{{--                    <div class="item-nick-img">--}}
{{--                        <img src="{{ isset($item->custom->image) ? \App\Library\MediaHelpers::media($item->custom->image) :  \App\Library\MediaHelpers::media($item->image) }}" alt="">--}}
{{--                    </div>--}}

{{--                    <div class="item-nick-name">{{ isset($item->custom->title) ? $item->custom->title :  $item->title }}</div>--}}
{{--                </a>--}}

{{--            </div>--}}
{{--            @endif--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    </div>--}}
</div>

{{--<div class="block-other-nick mt-fix-20">--}}
{{--    <div class="row mr-fix-10 ml-fix-10">--}}


{{--        <div class="col-12 col-md-6 col-lg-3 pr-fix-10 pl-fix-10 ">--}}
{{--            <div class="block-product mb-md-fix-12">--}}
{{--                <div class="product-header d-flex">--}}
{{--                                <span>--}}
{{--                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/nick_dif.png" alt="">--}}
{{--                                </span>--}}
{{--                    <p class="text-title" >Liên quân Mobile</p>--}}
{{--                    <div class="navbar-spacer"></div>--}}

{{--                    --}}{{--                        <div class="text-view-more">--}}

{{--                    --}}{{--                            <a href="/mua-acc/slug" class="global__link">Xem thêm<i class="__icon --sm --link ml-1" style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/icons/arrow-right-blue.png)"></i></a>--}}

{{--                    --}}{{--                        </div>--}}
{{--                </div>--}}
{{--                <div class="box-product box-other-nick" >--}}
{{--                    <div class="list-product d-g-md-none mt-fix-4">--}}
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
{{--                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product2.gif" alt="">--}}
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
{{--                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product3.gif" alt="">--}}
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
{{--                                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/product6.gif" alt="">--}}
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

{{--    </div>--}}
{{--</div>--}}
@endif
