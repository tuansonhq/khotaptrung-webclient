@push('style')
@endpush
@push('js')
    <script src="/assets/frontend/js/top_charge/top_charge.js"></script>
@endpush
<ul class="content-banner-card-top">
{{--    @foreach($data as $items => $item)--}}
{{--        <li>--}}
{{--            <i>{{$items ? $items : '0'}}</i>--}}
{{--            <span>{{$item->fullname ? $item->fullname : $item->username}}</span>--}}
{{--            <label >--}}
{{--                @if(isset($item->amount))--}}
{{--                    {{str_replace(',','.',number_format($item->amount))}}--}}

{{--                @else--}}
{{--                    0--}}
{{--                @endif--}}
{{--               <sup>đ</sup>--}}
{{--            </label>--}}
{{--        </li>--}}
{{--    @endforeach--}}

</ul>
{{--@endif--}}

