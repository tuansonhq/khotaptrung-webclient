

    @if(isset(theme('')->theme_config->sys_config_banner) && theme('')->theme_config->sys_config_banner =='banner_single')

            @if(isset($data->image_banner))
                <div class="banner-image">
                   <img src="{{\App\Library\MediaHelpers::media($data[0]->image_banner)}}" alt=""  class="">
                </div>
            @else
                <div class="banner-image">
                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/banner.png" alt=""  class="">
                </div>
            @endif
    @elseif(isset(theme('')->theme_config->sys_config_banner) && theme('')->theme_config->sys_config_banner =='banner_slide')
        @if(isset($data))
        <div class="banner-slide swiper-container container container-fix " >
            <div class="swiper-wrapper">
                @foreach($data as $item)
                    @if(isset($item->image))
                    <div class="swiper-slide">
                        <img src="{{\App\Library\MediaHelpers::media($item->image)}}" alt="">
                    </div>
                    @else
                        <div class="swiper-slide">
                            <img src="/assets/frontend/{{theme('')->theme_key}}/image/banner.png" alt=""  class="">
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
        @else
            <div class="banner-slide swiper-container container container-fix " >
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="/assets/frontend/{{theme('')->theme_key}}/image/banner.png" alt=""  class="">
                    </div>
                </div>
            </div>
        @endif


    @endif


