@if(isset($data) && count($data) > 0)
{{--    @dd($data)--}}
<div class="content-items" id="freefire_taget">
    <div class="container">
        <div class="items-title">
            <h4>Danh mục game</h4>
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
                                <p><strong>{{ $item->title }}</strong></p>
                            </a>
                        </div>
                        <div class="game-list-description">
                            <div class="countime"></div>
                            <p>Số tài khoản: 9999 </p>
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
