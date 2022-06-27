@if(isset($data))

    <ul class="list-service">
        @foreach($data as $item)
        <li class="item-service">
            <a href="{{ $item->url }}" @if($item->target) target="_blank" @endif>
                @if($item->image)
                    <img src="{{\App\Library\MediaHelpers::media($item->image)}}" alt="">
                @else
                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/service1.png" alt="">
                @endif
                <div>{{ $item->title }}</div>
            </a>

        </li>
        @endforeach
    </ul>



@endif
