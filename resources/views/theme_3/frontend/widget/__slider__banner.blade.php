
@if(isset(theme('')->theme_config->sys_theme_ver))
    @if(theme('')->theme_config->sys_theme_ver == 'sys_theme_ver3.0' || theme('')->theme_config->sys_theme_ver == 'sys_theme_ver3.3')

            @if(isset($data->image_banner))
                <div class="banner-image">
                   <img src="{{\App\Library\MediaHelpers::media($data[0]->image_banner)}}" alt=""  class="">
                </div>
            @else
                <div class="banner-image">
                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/banner.png" alt=""  class="">
                </div>
            @endif
    @elseif(theme('')->theme_config->sys_theme_ver == 'sys_theme_ver3.1' || theme('')->theme_config->sys_theme_ver == 'sys_theme_ver3.2')
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

@else
    <div class="banner-slide swiper-container container container-fix " >
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="/assets/frontend/{{theme('')->theme_key}}/image/banner.png" alt=""  class="">
            </div>
        </div>
    </div>
@endif
