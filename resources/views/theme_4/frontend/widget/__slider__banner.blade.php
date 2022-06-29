{{--@dd($data)--}}
<div class="container container-fix">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="rotation-notify text-slider">
            <img class="img-text-slider" src="frontend/{{theme('')->theme_key}}/images_1/sound.svg" alt="">
            <marquee class="rotation-marquee marquee-move">
                <div class="rotation-marquee-item marquee-item">
                    {!! setting('sys_marquee') !!}
                </div>
            </marquee>
        </div>
        <ol class="carousel-indicators">
            @forelse($data as $k_banner => $banner)
                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $k_banner }}" class="{{ !$k_banner ? 'active' : '' }}"></li>
            @empty
            @endforelse
        </ol>
        <div class="carousel-inner carousel-slider-item">
            @forelse($data as $k_banner => $banner)
            <div class="carousel-item {{ !$k_banner ? 'active' : '' }}">
                <a href="{{ @$banner->url }}">
                    <img class="d-block w-100 img-slider img-slider-mobile" src="{{ @$banner->image }}" alt="Banner">
                </a>
            </div>
            @empty
            @endforelse
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
