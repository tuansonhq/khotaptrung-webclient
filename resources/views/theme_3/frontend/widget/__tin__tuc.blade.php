@if(isset($data))
<div class=" block-product mt-fix-20 mt-md-fix-8">
    <div class="product-header d-flex">
        <span>
            <img src="/assets/frontend/{{theme('')->theme_key}}/image/news.png" alt="">
        </span>
        <p class="text-title">Tin tức</p>
{{--        <div class="product-catecory " >--}}
{{--            <ul class="nav d-g-md-none" role="tablist" >--}}
{{--                @foreach($data as $item)--}}
{{--                <li class="nav-item" role="presentation">--}}
{{--                    <a  class="nav-link onclick-news-game news_game_li-{{ $item->slug }}" data-slug="{{ $item->slug }}"  data-toggle="tab" href="#news_game-{{ $item->slug }}" role="tab" aria-selected="true">{{ $item->title }}</a>--}}
{{--                </li >--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        </div>--}}

        <div class="navbar-spacer"></div>
        <div class="text-view-more">

            <a href="/tin-tuc" class="global__link">Xem thêm<i class="__icon --sm --link ml-1" style="--path : url(/assets/frontend/{{theme('')->theme_key}}/image/icons/arrow-right-blue.png)"></i></a>

        </div>
    </div>

{{--    <div class="product-catecory d-none d-g-lg-block pt-fix-16 pr-fix-16 pl-fix-16" >--}}
{{--        <ul class="nav justify-content-between row" role="tablist" >--}}
{{--            @foreach($data as $item)--}}
{{--                <li class="nav-item col-3 p-0 col-md-4 p-md-0" role="presentation">--}}
{{--                    <a  class="pb-fix-8 d-flex onclick-news-game-mobile justify-content-center news_game_li-mobile-{{ $item->slug }}" data-slug="{{ $item->slug }}"  data-toggle="tab" href="#news_game-mobile-{{ $item->slug }}" role="tab" aria-selected="true">{{ $item->title }}</a>--}}
{{--                </li >--}}
{{--            @endforeach--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--    <div class="box-product-content tab-content">--}}
    <div class="box-product-content ">

        @foreach($data as $key => $item)
            @if($item->slug == 'tin-tuc-moi')
            @if(isset($item->items))
{{--                <div class="box-product tab-pane fade show active" id="news_game-{{ $item->slug }}" role="tabpanel" >--}}
            <div class="box-product " id="news_game-{{ $item->slug }}" role="tabpanel" >
                <div class="swiper-container  list-news" >
                    <div class="swiper-wrapper">
                        @foreach($item->items as $val)

                        <div class="swiper-slide" >
                            <a href="/tin-tuc/{{ $val->slug }}">
                                <div class="item-product__box-img item-news-img">
                                    <img src="{{\App\Library\MediaHelpers::media($val->image)}}" alt="">
                                </div>
                                <div class="item-product__box-content item-news-content">


                                    <div class="item-product__box-name">
                                        {{ $val->title }}
                                    </div>
                                    <div class="item-product__box-date">
                                        {{ formatDateTime($val->created_at) }}
                                    </div>


                                </div>
                            </a>
                        </div>

                        @endforeach
                    </div>

                </div>

            </div>


            @endif
            @endif
{{--            @if($key == 0)--}}
{{--                <script>--}}
{{--                    $(document).ready(function(){--}}
{{--                        $('#news_game-{{ $item->slug }}').addClass('active');--}}
{{--                        $('#news_game-{{ $item->slug }}').addClass('show');--}}
{{--                        $('.news_game_li-{{ $item->slug }}').addClass('active');--}}
{{--                        $('.news_game_li-mobile-{{ $item->slug }}').addClass('active');--}}

{{--                        $(document).on('click', '.onclick-article-game',function(e){--}}
{{--                            var slug = $(this).data('slug');--}}
{{--                            $('#news_game-' + slug + '').addClass('active');--}}
{{--                            $('#news_game-' + slug + '').addClass('show');--}}
{{--                            $('.news_game_li-' + slug + '').addClass('active');--}}
{{--                        });--}}

{{--                        $(document).on('click', '.onclick-article-game-mobile',function(e){--}}
{{--                            var slug = $(this).data('slug');--}}
{{--                            $('#news_game-' + slug + '').addClass('active');--}}
{{--                            $('#news_game-' + slug + '').addClass('show');--}}
{{--                            $('.news_game_li-' + slug + '').addClass('active');--}}
{{--                            $('.news_game_li-mobile-' + slug + '').addClass('active');--}}
{{--                        });--}}
{{--                    })--}}
{{--                </script>--}}
{{--            @endif--}}
        @endforeach

    </div>

</div>
@endif
