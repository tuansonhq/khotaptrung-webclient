
@if(isset($data) && count($data) > 0)
<div class="content-items content-items-spin">
    <div class="container">
        <div class="items-title">
            <h2>Danh mục minigame</h2>
            <div class="items-title-lines"></div>
        </div>
        <div class="game-list row">
            @foreach($data as $item)
                <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3  p-5 ppk">
                    <div class="game-list-content">
                        <div class="game-list-image">
                            <a class="account_category" href="/minigame-{{ $item->slug }}">
{{--                                                                                Anh khuyen mai--}}
                                @if(isset($item->params->image_percent_sale))
                                    <img class="game-list-image-sticky" src="{{\App\Library\MediaHelpers::media($item->params->image_percent_sale)}}" alt="">
                                @else
                                    <img class="game-list-image-sticky" src="/assets/frontend/{{theme('')->theme_key}}/images/giamgia.png" alt="">
                                @endif
                                @if(isset($item->image))
                                    <img class="game-list-image-in" src="{{\App\Library\MediaHelpers::media($item->image)}}" alt="">
                                @else
                                    <img class="game-list-image-in" src="/assets/frontend/{{theme('')->theme_key}}/images/ff.jpg" alt="">
                                @endif
{{--                                                                                Anh chinh--}}

                            </a>
                        </div>
                        <div class="game-list-title">
                            <a class="account_category" href="/minigame-{{ $item->slug }}">
                                <h3><strong>{{ $item->title }}</strong></h3>
                            </a>
                        </div>
                        <div class="game-list-description">
                            <div class="countime"></div>
                            <p>Đã quay: {{isset($item->params->fake_num_play)?($item->params->fake_num_play+$item->order_gate_count):$item->order_gate_count}} </p>
                        </div>
                        <div class="game-list-more">
                            <div class="game-list-more-view" >
                                <a class="account_category" href="/minigame-{{ $item->slug }}">
                                    @if(isset($item->params->image_view_all))
                                        <img src="{{\App\Library\MediaHelpers::media($item->params->image_view_all)}}" alt="">
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
