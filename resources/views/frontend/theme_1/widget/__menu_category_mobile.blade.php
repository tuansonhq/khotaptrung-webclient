@if(isset($data_menu_category) && count($data_menu_category) > 0)
@foreach($data_menu_category as $item)
    @if ($item->parent_id == 0)
        <li>
            <a @if($item->url!=null) href="{{$item->url}}" @else data-toggle="collapse" class="nav_mobile-collapse" href="#menuchild_item" role="button" aria-expanded="true" aria-controls="collapseExample" @endif @if($item->target==1) target="_blank" @endif>{{$item->title}}</a>
        </li>
        <ul class="sub-menu collapse" id="menuchild_item" >
            @foreach ($data_menu_category as $key_child => $child_item)
                @if ($item->id == $child_item->parent_id)
                    <li class="menu-item">
                        <a  href="{{$child_item->url}}" @if($item->target==1) target="_blank" @endif>{{$child_item->title}}</a>
                    </li>
                @endif
            @endforeach
        </ul>
    @endif
@endforeach
@endif
