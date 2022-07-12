@if(isset($data) && count($data) > 0)
    <section>
        <div class="container container-fix body-container-ct">
            <div class="row marginauto body-container-row-ct body-container-row-mobile-ct">
                <div class="col-md-12 left-right">
                    <div class="row marginauto body-row-ct media-ctbg-ct">

                        <div class="col-md-12 left-right napgamekhac">
                            <div class="row marginauto">
                                <div class="col-md-12 text-left left-right">
                                    <span>Mua tài khoản game khác</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 left-right">
                            <div class="row marginauto body-detail-ct">
                                <div class="swiper-container list-nap-game col-md-12 text-left left-right">
                                    <div class="swiper-wrapper">
                                        @foreach($data as $key => $item)
                                            <div class="swiper-slide body-detail-ctng-col-ct">
                                                <a href="/mua-acc/{{ isset($item->custom->slug) && $item->custom->slug != '' ? $item->custom->slug :  $item->slug }}">
                                                <div class="row marginauto hover-overlay-ct">
                                                    <div class="col-md-12 left-right default-overlay-ct related-acc-category">
                                                        <img class="lazy" src="{{ isset($item->custom->image) ? \App\Library\MediaHelpers::media($item->custom->image) :  \App\Library\MediaHelpers::media($item->image) }}" alt="">
                                                    </div>
                                                    <div class="col-md-12 left-right text-center body-detail-col-span-ct">
                                                            <span>{{ isset($item->custom->title) ? $item->custom->title :  $item->title }}</span>
                                                    </div>
                                                </div>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endif
