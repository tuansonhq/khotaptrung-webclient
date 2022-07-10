

@if(theme('')->theme_config->sys_config_banner =='banner_single')
    <div class="banner-image">
        <img src="{{\App\Library\MediaHelpers::media($data[0]->image_banner)}}" alt=""  class="">
    </div>
@elseif(theme('')->theme_config->sys_config_banner =='banner_slide')
    <div class="banner-slide swiper-container container container-fix " >
        <div class="swiper-wrapper">
            @foreach($data as $item)
            <div class="swiper-slide">
                <img src="{{\App\Library\MediaHelpers::media($item->image)}}" alt="">
            </div>

            @endforeach
        </div>
    </div>
@endif

