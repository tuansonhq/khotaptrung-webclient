

@if(isset($data_menu_category) && count($data_menu_category) > 0)
    @foreach($data_menu_category as $item)
        @if ($item->parent_id == 0)
            <li class="nav-item item-home active  item-{{substr($item->url, 1)}}">
                <a href="{{$item->url??'/'}}" class="nav-link">{{$item->title}}</a>
            </li>
{{--            <li class="nav-item item-home item-{{substr($item->url, 1)}}">--}}
{{--                <a href="{{$item->url}}" class="nav-link">{{$item->title}}</a>--}}
{{--            </li>--}}


        @endif
    @endforeach
@endif
