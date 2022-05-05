@if(isset($data) && count($data) > 0)
<div class="row">
    @foreach($data as $key => $item)
        @if($key < 8)
            <div class="col-lg-3">
        <!-- BEGIN Item Article -->
        <div class="item-article mb-3">
            <div class="item-thumb mb-2">
                <div class="media-placeholder ratio-2-1">
                    <div class="bg item-image">
                        <a href="/tin-tuc/{{ $item->slug }}">
                            <img class="img-fluid" src="{{  config('api.url_media').$item->image }}" title="{{$item->title}}">
                        </a>
                    </div>
                </div>
            </div>
            <div class="item-content">
                <h6 class="item-title"><a href="/tin-tuc/{{ $item->slug }}">{{ $item->title }}</a></h6>
            </div>
        </div><!-- BEGIN Item Article -->
    </div>
        @endif
    @endforeach
</div>
@endif
