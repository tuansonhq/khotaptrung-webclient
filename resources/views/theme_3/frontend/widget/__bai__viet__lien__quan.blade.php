@if(isset($data))
<div class="card --custom mt-1 p-3">
    <div class="card--header">
        <div class="card--header__title">
            <div class="title__icon mr-1"><img src="/assets/frontend/{{theme('')->theme_key}}/image/icons/lightning.svg" alt=""></div>
            <h4>Bài viết cùng chủ đề</h4>
        </div>
    </div>
    <div class="card--body mt-3">
        <div class="swiper article--slider__news overflow-hidden">
            <div class="swiper-wrapper">
                @foreach($data as $item)
                <div class="swiper-slide">
                    <div class="article">
                        <div class="article--thumbnail">
                            <a href="/tin-tuc/{{ $item->slug }}">
                                @if(isset($item->image))
                                    <img src="{{\App\Library\MediaHelpers::media($item->image)}}" alt=""  class="img-fluid swiper-lazy item_play_dif_slide_img_main">
                                @else
                                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/article-thumbnail/thumbnail-2.png" alt="" class="article--thumbnail__image">
                                @endif
                            </a>
                        </div>
                        <div class="article--title my-3">
                            <a href="/tin-tuc/{{ $item->slug }}" class="article--title__link">
                                {{$item->title}}
                            </a>
                        </div>
                        <div class="article--date">
                            <i class="__icon calendar mr-2"></i>
                            {{formatDateTime($item->created_at)}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endif
