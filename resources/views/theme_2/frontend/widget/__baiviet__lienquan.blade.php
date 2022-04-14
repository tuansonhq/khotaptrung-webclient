
@if(isset($data) && count($data) > 0)
    @foreach($data as$key => $item)
        @php
           $index = 6;
            if ($slug == $item->slug){
                $index = 7;
            }
        @endphp
        @if($key < $index)
        <div class="col-lg-4">
            <!-- BEGIN Item Article -->
            <div class="item-article mb-4">
                <div class="item-thumb mb-2">
                    <div class="media-placeholder ratio-2-1">
                        <div class="bg" style="background-image: url(https://media-tt.nick.vn/{{ $item->image }});"></div>
                    </div>
                </div>
                <div class="item-content">
                    <h6 class="item-title"><a href="/blog/{{ $item->slug }}">{{ $item->title }}</a></h6>
                </div>
            </div><!-- BEGIN Item Article -->
        </div>
        @endif
    @endforeach
@endif
