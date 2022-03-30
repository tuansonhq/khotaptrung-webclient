@if(isset($data) && count($data) > 0)
{{--    @dd($data)--}}
<div class="content-items" id="freefire_taget">
    <div class="container">
        <div class="items-title">
            <h2>Danh mục game</h2>
            <div class="items-title-lines"></div>
        </div>
        <div class="game-list row">
            @foreach($data as $item)
                <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3  p-5 ppk">
                    <div class="game-list-content">
                        <div class="game-list-image">
                            <a class="account_category" href="/danh-muc/{{ $item->slug }}">
                                {{--                                                Anh khuyen mai--}}
                                @if(isset($item->image_icon))
                                    <img class="game-list-image-sticky" src="https://media-tt.nick.vn/{{ $item->image_icon }}" alt="">
                                @else
                                    <img class="game-list-image-sticky" src="/assets/frontend/images/giamgia.png" alt="">
                                @endif
                                @if(isset($item->image))
                                    <img class="game-list-image-in" src="https://media-tt.nick.vn/{{ $item->image }}" alt="">
                                @else
                                    <img class="game-list-image-in" src="/assets/frontend/images/ff.jpg" alt="">
                                @endif
                                {{--                                                Anh chinh --}}

                            </a>
                        </div>
                        <div class="game-list-title">
                            <a class="account_category" href="/danh-muc/{{ $item->slug }}">
                                <h3><strong>{{ $item->title }}</strong></h3>
                            </a>
                        </div>
                        <div class="game-list-description">
                            <div class="countime"></div>
                            @if(isset($item->items_count))
                            <p>Số tài khoản: {{ $item->items_count + 60 }} </p>
                            @else
                            <p>Số tài khoản: 9999 </p>
                            @endif
{{--                            <span class="game-list-description-old-price"></span>--}}
{{--                            <span class="game-list-description-new-price"></span>--}}
                        </div>
                        <div class="game-list-more">
                            <div class="game-list-more-view" >
                                <a class="account_category" href="/danh-muc/{{ $item->slug }}">
                                    <img src="/assets/frontend/images/muangay.jpg" alt="">
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


@if(isset($dataGame->data) && count($dataGame->data) > 0)
<div class="content-items" id="freefire_taget">
    <div class="container">
        <div class="items-title">
            <h2>Danh mục minigame</h2>
            <div class="items-title-lines"></div>
        </div>
        <div class="game-list row">
            @foreach($dataGame->data as $item)
                <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3  p-5 ppk">
                    <div class="game-list-content">
                        <div class="game-list-image">
                            <a class="account_category" href="/minigame-{{ $item->slug }}">
                                {{--                                                Anh khuyen mai--}}
                                @if(isset($item->params->image_percent_sale))
                                    <img class="game-list-image-sticky" src="{{config('api.url_media').$item->params->image_percent_sale}}" alt="">
                                @else
                                    <img class="game-list-image-sticky" src="/assets/frontend/images/giamgia.png" alt="">
                                @endif
                                @if(isset($item->image))
                                    <img class="game-list-image-in" src="{{config('api.url_media').$item->image }}" alt="">
                                @else
                                    <img class="game-list-image-in" src="/assets/frontend/images/ff.jpg" alt="">
                                @endif
                                {{--                                                Anh chinh --}}

                            </a>
                        </div>
                        <div class="game-list-title">
                            <a class="account_category" href="/minigame-{{ $item->slug }}">
                                <h3><strong>{{ $item->title }}</strong></h3>
                            </a>
                        </div>
                        <div class="game-list-description">
                            <div class="countime"></div>
                            <p>Đã quay: {{$item->order_gate_count}} </p>
                        </div>
                        <div class="game-list-more">
                            <div class="game-list-more-view" >
                                <a class="account_category" href="/minigame-{{ $item->slug }}">
                                    @if(isset($item->params->image_view_all))
                                        <img src="{{config('api.url_media').$item->params->image_view_all }}" alt="">
                                    @else
                                        <img src="/assets/frontend/images/muangay.jpg" alt="">
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
