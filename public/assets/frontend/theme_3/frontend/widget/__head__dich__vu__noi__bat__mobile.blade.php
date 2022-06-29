

@if(isset($data))

    @foreach($data as $item)
        <li>
            @if($item->target)
                <a  href="{{ $item->url }}">
                    @else
                        <a target="_blank" href="{{ $item->url }}">
                            @endif
                            <img src="{{ $item->image_icon }}" alt="">
                            <span>{{ $item->title }}</span>
                        </a>
                </a>
        </li>
    @endforeach

@endif

