

@if(isset($data))

    @foreach($data as $item)
        <li>
            <a  href="{{ $item->url }}" @if($item->target) target="_blank" @endif>

                @if($item->image)
                     <img src="{{\App\Library\MediaHelpers::media($item->image)}}" alt="">
                @else
                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/service1.png" alt="">
                @endif
                <span>{{ $item->title }}</span>
            </a>
        </li>
    @endforeach

@endif

