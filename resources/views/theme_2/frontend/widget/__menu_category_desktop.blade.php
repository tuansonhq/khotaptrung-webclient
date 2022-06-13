
    @foreach($data??[] as $item)
        @if ($item->parent_id == 0)
            <li class="nav-item item-home item-{{substr($item->url, 1)}}">
                <a href="{{$item->url??'/'}}" class="nav-link">{{$item->title}}</a>
            </li>
        @endif
    @endforeach

