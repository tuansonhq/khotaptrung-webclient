@if (isset($categoryservice) && count($categoryservice) > 0)
<div class="container m-t-20 ">

    <div class="game-item-view" style="margin-top: 40px">
        <div class="c-content-title-1">
            <h3 class="c-center c-font-uppercase c-font-bold text-center" style="font-size: 30px;font-weight: 600;color: #3f444a">DỊCH VỤ KHÁC</h3>
            <div class="c-line-center c-theme-bg"></div>
        </div>
        <div class="col-12 item_play_dif_slide pt-3" >
            <div class="swiper-container item_play_dif_slide_detail item_news" >
                <div class="swiper-wrapper">
                    @foreach($categoryservice as $item)

                        <div class="swiper-slide swiper-slide__size" >
                            <div class="item_play_dif_slide_detail_in_active item_play_dif_slide_detail_in_active__size">
                                <div class="item_play_dif_slide_img">
                                    <a href="/tin-tuc/{{ $item->slug }}">
                                        <img src="https://media-tt.nick.vn{{ $item->image }}" alt=""  class="img-fluid swiper-lazy item_play_dif_slide_img_main">
                                    </a>
                                </div>
                                <div class="item_play_dif_slide_title">
                                    <span>{{ $item->title }}</span>
                                </div>
                                <div class="item_play_dif_slide_description__size">
                                    {!! $item->description !!}
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-button-prev">
                <i class="fas fa-chevron-left"></i>
            </div>
            <div class="swiper-button-next">
                <i class="fas fa-chevron-right"></i>
            </div>
        </div>
{{--        <div class="row row-flex  item-list row-flex-safari game-list" id="data-list-service-category">--}}
{{--            @foreach($categoryservice as $category)--}}

{{--            <div class="col-6 col-sm-6 col-md-4 col-lg-3">--}}
{{--                <div class="classWithPad">--}}
{{--                    <div class="image">--}}
{{--                        <a href="/dich-vu/{{ $category->slug }}">--}}
{{--                            <img src="https://media-tt.nick.vn{{ $category->image }}">--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="news_title">--}}
{{--                        <a style="text-decoration: none" href="/dich-vu/{{ $category->slug }}">{{ $category->title }}</a>--}}
{{--                    </div>--}}

{{--                    <div class="a-more" style="margin-top: 15px">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-xs-6"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}

    </div>


    <div class="tab-vertical tutorial_area">
        <div class="panel-group" id="accordion">

        </div>
    </div>

</div>
@endif
