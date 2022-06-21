{{--@foreach($data??[] as $item)--}}
{{--    @if ($item->parent_id == 0)--}}
{{--        <div class="col-6 col-sm-6 col-xl-6 col-lg-12 col-xl-12 ">--}}
{{--            <div class="account_sidebar_menu_title">--}}
{{--                <p>{{$item->title}}</p>--}}
{{--            </div>--}}
{{--            <div class="account_sidebar_menu_nav">--}}
{{--                <ul>--}}
{{--                    @foreach ($data as $key_child => $child_item)--}}
{{--                        @if ($item->id == $child_item->parent_id)--}}
{{--                            <li>--}}
{{--                                <a   href="{{$child_item->url?$child_item->url:$child_item->slug}}"class="account_{{substr($child_item->url, 1)}}">{{$child_item->title}}</a>--}}
{{--                            </li>--}}
{{--                            <script>--}}

{{--                            </script>--}}
{{--                        @endif--}}
{{--                    @endforeach--}}


{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    @endif--}}
{{--@endforeach--}}

@if(isset($data))
    @foreach($data??[] as $item)
        @if ($item->parent_id == 0)
            <div class="col-md-12 left-right nav-bar-hr">
                {{--                                    Vong lap thang bố--}}
                <div class="row marginauto nav-bar-nick nav-bar-parent">
                    <div class="col-md-12 left-right">
                        <div class="row marginauto nav-bar-parent-title">
                            <div class="col-12 left-right">
                                <span>{{$item->title}}</span>
                            </div>
                        </div>
                    </div>

                </div>

                {{--                                    Vong lap thang con--}}
                @foreach ($data as $key_child => $child_item)
                    @if ($item->id == $child_item->parent_id)
                <div class="row marginauto nav-bar-nick nav-bar-child add-active_{{ $child_item->slug }}">
                    <div class="col-12 left-right">
                        <a href="{{$child_item->url?$child_item->url:$child_item->slug}}" class="">
                            <div class="row marginauto">
                                <div class="col-auto left-right global__link__profile">
                                    <i class="__icon__profile --sm__profile --link__profile" style="--path : url({{ $child_item->image_icon??'' }})"></i>
                                </div>
                                <div class="col-10 nav-bar-log-top-body-col">
                                    <span>{{$child_item->title}}</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                    @endif
                @endforeach
                {{--                                    Vong lap thang con--}}

            </div>
        @endif
    @endforeach
@endif

@if(Request::is('profile'))
    <script>
        $(document).ready(function (e) {
            $('.add-active_thong-tin-tai-khoan-1-1').addClass('active')
        })
    </script>

@elseif(Request::is('change-password'))
    <script>
        $(document).ready(function (e) {
            $('.add-active_doi-mat-khau').addClass('active')
        })
    </script>
@elseif(Request::is('lich-su-giao-dich'))
    <script>
        $(document).ready(function (e) {
            $('.add-active_bien-dong-so-du').addClass('active')
        })
    </script>
@elseif(Request::is('lich-su-nap-the'))
    <script>
        $(document).ready(function (e) {
            $('.add-active_lich-su-nap-the-1-1').addClass('active')
        })
    </script>
@elseif(Request::is('dich-vu-da-mua'))
    <script>
        $(document).ready(function (e) {
            $('.add-active_dich-vu-da-mua-2-1').addClass('active')
        })
    </script>
@elseif(Request::is('lich-su-mua-account'))
    <script>
        $(document).ready(function (e) {
            $('.add-active_tai-khoan-da-mua-1-1').addClass('active')
        })
    </script>
@elseif(Request::is('lich-su-tra-gop'))
    <script>
        $(document).ready(function (e) {
            $('.add-active_tai-khoan-tra-gop').addClass('active')
        })
    </script>
@elseif(Request::is('the-cao-da-mua'))
    <script>
        $(document).ready(function (e) {
            $('.add-active_the-cao-da-mua').addClass('active')
        })
    </script>
@elseif(Request::is('the-cao-da-mua/detail'))
    <script>
        $(document).ready(function (e) {
            $('.add-active_the-cao-da-mua').addClass('active')
        })
    </script>
@elseif(Request::is('rut-vat-pham'))
    <script>
        $(document).ready(function (e) {
            $('.add-active_withdraw-items').addClass('active')
        })
    </script>
@elseif(Request::is('lich-su-quay-thuong'))
    <script>
        $(document).ready(function (e) {
            $('.add-active_lich-su-quay-thuong').addClass('active')
        })
    </script>
@elseif(Request::is('lich-su-atm-tu-dong'))
    <script>
        $(document).ready(function (e) {
            $('.add-active_lich-su-nap-atm-tu-dong').addClass('active')
        })
    </script>
@elseif(Request::is('rut-tien'))
    <script>
        $(document).ready(function (e) {
            $('.add-active_withdraw-money').addClass('active')
        })
    </script>
@endif
