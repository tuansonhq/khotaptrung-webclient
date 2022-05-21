@if(isset($data) && count($data) > 0)

    <div class="content-items">
        <div class="container">
            <div class="items-title">
                <h2>Dịch vụ game</h2>
                <div class="items-title-lines"></div>
            </div>

            <div class="game-list row">
                @foreach($data as $item)

                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3  p-5 ppk">
                        <div class="game-list-content">
                            <div class="game-list-image">
                                <a class="account_category" href="/dich-vu/{{ $item->slug}}">
{{--                                                                                    Anh khuyen mai--}}

                                    @if(isset($item->image_icon))
                                        <img class="game-list-image-sticky lazy" src="{{\App\Library\MediaHelpers::media($item->image_icon)}}" alt="">
                                    @else
                                        <img class="game-list-image-sticky lazy" src="/assets/frontend/{{theme('')->theme_key}}/images/giamgia.png" alt="">
                                    @endif
                                    @if(isset($item->image))
                                        <img class="game-list-image-in lazy" src="{{\App\Library\MediaHelpers::media($item->image)}}" alt="">
                                    @else
                                        <img class="game-list-image-in lazy" src="/assets/frontend/{{theme('')->theme_key}}/images/ff.jpg" alt="">
                                    @endif
{{--                                                                                    Anh chinh --}}

                                </a>
                            </div>
                            <div class="game-list-title">
                                <a class="account_category" href="/dich-vu/{{ $item->slug   }}">
                                    <h3><strong>{{ $item->title   }}</strong></h3>
                                </a>
                            </div>
                            <div class="game-list-description">
                                <div class="countime"></div>

                                <p></p>
                                <p></p>

                            </div>
                            <div class="game-list-more">
                                <div class="game-list-more-view" >
                                    <a class="account_category" href="/dich-vu/{{ isset($item->custom->slug) ? $item->custom->slug :  $item->slug }}">

                                        @if(isset($item->custom) && isset($item->custom->meta))
                                            @foreach($item->custom->meta as $key =>$val)
                                                @if($key == "image_btn")
                                                    <img src="{{\App\Library\MediaHelpers::media($val)}}" alt="" class="lazy">
                                                @endif
                                            @endforeach
                                        @else
                                            <img src="/assets/frontend/{{theme('')->theme_key}}/images/muangay.jpg" alt="">
                                        @endif
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endif
