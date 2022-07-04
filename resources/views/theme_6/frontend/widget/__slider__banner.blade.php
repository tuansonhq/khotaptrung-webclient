<div class="swiper-container banner-home-slider">
    <div class="swiper-wrapper">
        @foreach($data??[] as $item)
            <div class="swiper-slide">
                <a href="javascript:void(0);">
                    <div class="banner-home-slide-img">
                        <img src="{{\App\Library\MediaHelpers::media($item->image)}}" alt="">
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev">
        <img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/arrow-prev.png" alt="">
    </div>
    <div class="swiper-button-next">
        <img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/arrow-next.png" alt="">
    </div>
</div>