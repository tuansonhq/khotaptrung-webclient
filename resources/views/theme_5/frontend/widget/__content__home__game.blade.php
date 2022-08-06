
@if(isset($data) && count($data) > 0)
<section class="section-related-service c-mb-24 media-web">
    <div class="section-header c-mb-8 c-mb-lg-16 justify-content-between">
        <h2 class="section-title fz-lg-15 lh-lg-24">
            <i class="icon-title c-mr-8" style="--path:url(/assets/frontend/{{theme('')->theme_key}}/image/svg/acc-game.svg)"></i>
            Nick ngon giá rẻ
        </h2>
        <a href="/mua-acc" class="link arr-right">Xem tất cả</a>
    </div>
    <div class="swiper swiper-related-service">
        <div class="swiper-wrapper">

            @foreach($data as $item)
            <div class="swiper-slide">
                <div class="card">
                    <div class="card-body c-p-16 c-p-lg-12 scale-thumb">

                        <a href="/mua-acc/{{ isset($item->custom->slug) && $item->custom->slug != '' ? $item->custom->slug :  $item->slug }}">
                            <div class="card-thumb c-mb-8">
                                <img src="{{ isset($item->custom->image) ? \App\Library\MediaHelpers::media($item->custom->image) :  \App\Library\MediaHelpers::media($item->image) }}" alt="" class="card-thumb-image">
                            </div>
                            <div class="card-attr">
                                <div class="text-title fw-700 text-limit limit-1">
                                    {{ isset($item->custom->title) ? $item->custom->title :  $item->title }}
                                </div>
                                <div class="info-attr">

                                    @if(isset($item->items_count))
                                        @if((isset($item->account_fake) && $item->account_fake > 1) || (isset($item->custom->account_fake) && $item->custom->account_fake > 1))
                                            Số tài khoản: {{ str_replace(',','.',number_format(round(isset($item->custom->account_fake) ? $item->items_count*$item->custom->account_fake : $item->items_count*$item->account_fake))) }}
                                        @else
                                            Số tài khoản: {{ $item->items_count }}
                                        @endif

                                    @else
                                        Số tài khoản: 0
                                    @endif

                                </div>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <div class="navigation slider-next"></div>
        <div class="navigation slider-prev"></div>
    </div>
</section>
<section class="acc-game-v2 media-mobile c-mb-12">
    <div class="section-header c-mb-24 c-mb-lg-20 justify-content-between">
        <h2 class="section-title fz-lg-20 lh-lg-24">
            <i class="icon-title c-mr-8" style="--path:url(/assets/frontend/{{theme('')->theme_key}}/image/svg/acc-game.svg)"></i>
            Nick ngon giá rẻ
        </h2>
        <a href="/muac-acc" class="link arr-right">Xem tất cả</a>
    </div>
    <div class="list-category">
        <div class="item-category c-px-8 c-mb-12 c-px-lg-6">
            <div class="card">
                <div class="card-body c-p-16 c-p-lg-12 scale-thumb">
                    <a href="/acc/id">
                        <div class="card-thumb c-mb-8">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/son/ngon01.png" alt="" class="card-thumb-image">
                        </div>
                        <div class="card-attr">
                            <div class="text-title fw-700">
                                PUBG Mobile
                            </div>
                            <div class="info-attr">
                                Đã bán: 45.000
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="item-category c-px-8 c-mb-12 c-px-lg-6">
            <div class="card">
                <div class="card-body c-p-16 c-p-lg-12 scale-thumb">
                    <a href="/acc/id">
                        <div class="card-thumb c-mb-8">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/son/ngon02.png" alt="" class="card-thumb-image">
                        </div>
                        <div class="card-attr">
                            <div class="text-title fw-700">
                                PUBG Mobile
                            </div>
                            <div class="info-attr">
                                Đã bán: 45.000
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="item-category c-px-8 c-mb-12 c-px-lg-6">
            <div class="card">
                <div class="card-body c-p-16 c-p-lg-12 scale-thumb">
                    <a href="/acc/id">
                        <div class="card-thumb c-mb-8">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/son/ngon03.png" alt="" class="card-thumb-image">
                        </div>
                        <div class="card-attr">
                            <div class="text-title fw-700">
                                PUBG Mobile
                            </div>
                            <div class="info-attr">
                                Đã bán: 45.000
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="item-category c-px-8 c-mb-12 c-px-lg-6">
            <div class="card">
                <div class="card-body c-p-16 c-p-lg-12 scale-thumb">
                    <a href="/acc/id">
                        <div class="card-thumb c-mb-8">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/son/ngon04.png" alt="" class="card-thumb-image">
                        </div>
                        <div class="card-attr">
                            <div class="text-title fw-700">
                                PUBG Mobile
                            </div>
                            <div class="info-attr">
                                Đã bán: 45.000
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="item-category c-px-8 c-mb-12 c-px-lg-6">
            <div class="card">
                <div class="card-body c-p-16 c-p-lg-12 scale-thumb">
                    <a href="/acc/id">
                        <div class="card-thumb c-mb-8">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/son/ngon05.png" alt="" class="card-thumb-image">
                        </div>
                        <div class="card-attr">
                            <div class="text-title fw-700">
                                PUBG Mobile
                            </div>
                            <div class="info-attr">
                                Đã bán: 45.000
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="item-category c-px-8 c-mb-12 c-px-lg-6">
            <div class="card">
                <div class="card-body c-p-16 c-p-lg-12 scale-thumb">
                    <a href="/acc/id">
                        <div class="card-thumb c-mb-8">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/son/ngon01.png" alt="" class="card-thumb-image">
                        </div>
                        <div class="card-attr">
                            <div class="text-title fw-700">
                                PUBG Mobile
                            </div>
                            <div class="info-attr">
                                Đã bán: 45.000
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
