
@if(isset($data_menu_category) && count($data_menu_category) > 0)
@foreach($data_menu_category as $item)
    @if ($item->parent_id == 0)
        <li class="menu-item">
            <a href="{{$item->url}}" @if($item->target==1) target="_blank" @endif>{{$item->title}}</a>
            <ul class="sub-menu" >
                @foreach ($data_menu_category as $key_child => $child_item)
                    @if ($item->id == $child_item->parent_id)
                        <li class="menu-item">
                            <a  href="{{$child_item->url}}" class="\">{{$child_item->title}}</a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </li>
    @endif
@endforeach
@endif
