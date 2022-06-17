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
<div class="col-md-12 left-right nav-bar-hr">
    @foreach($data??[] as $item)
        @if ($item->parent_id == 0)
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
    <div class="row marginauto nav-bar-nick nav-bar-child add-active_profile">
        <div class="col-12 left-right">
            <a href="/profile" class="">
                <div class="row marginauto">
                    <div class="col-auto left-right global__link__profile">
                        <i class="__icon__profile --sm__profile --link__profile" style="--path : url(/assets/frontend/theme_3/image/account/accountpng.png)"></i>
                    </div>
                    <div class="col-10 nav-bar-log-top-body-col">
                        <span>Thông tin tài khoản</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
        @endif
    @endforeach
    {{--                                    Vong lap thang con--}}
        @endif
    @endforeach
</div>
@endif

{{--<div class="col-md-12 left-right nav-bar-hr">--}}
{{--    --}}{{--                                    Vong lap thang bố--}}
{{--    <div class="row marginauto nav-bar-nick nav-bar-parent">--}}
{{--        <div class="col-md-12 left-right">--}}
{{--            <div class="row marginauto nav-bar-parent-title">--}}
{{--                <div class="col-12 left-right">--}}
{{--                    <span>TÀI KHOẢN</span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}

{{--    --}}{{--                                    Vong lap thang con--}}
{{--    <div class="row marginauto nav-bar-nick nav-bar-child add-active_profile">--}}
{{--        <div class="col-12 left-right">--}}
{{--            <a href="/profile" class="">--}}
{{--                <div class="row marginauto">--}}
{{--                    <div class="col-auto left-right global__link__profile">--}}
{{--                        <i class="__icon__profile --sm__profile --link__profile" style="--path : url(/assets/frontend/theme_3/image/account/accountpng.png)"></i>--}}
{{--                    </div>--}}
{{--                    <div class="col-10 nav-bar-log-top-body-col">--}}
{{--                        <span>Thông tin tài khoản</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="row marginauto nav-bar-nick nav-bar-child add-active_change-password">--}}
{{--        <div class="col-12 left-right">--}}
{{--            <a href="/change-password">--}}
{{--                <div class="row marginauto">--}}
{{--                    <div class="col-auto left-right global__link__profile">--}}
{{--                        <i class="__icon__profile --sm__profile --link__profile" style="--path : url(/assets/frontend/theme_3/image/account/lockpng.png)"></i>--}}
{{--                    </div>--}}
{{--                    <div class="col-10 nav-bar-log-top-body-col">--}}
{{--                        <span>Đổi mật khẩu</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    --}}{{--                                    Vong lap thang con--}}
{{--</div>--}}

{{--<div class="col-md-12 left-right nav-bar-hr">--}}
{{--    --}}{{--                                    Vong lap thang bố--}}
{{--    <div class="row marginauto nav-bar-nick nav-bar-parent">--}}
{{--        <div class="col-md-12 left-right">--}}
{{--            <div class="row marginauto nav-bar-parent-title">--}}
{{--                <div class="col-12 left-right">--}}
{{--                    <span>QUẢN LÝ GIAO DỊCH</span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}

{{--    --}}{{--                                    Vong lap thang con--}}
{{--    <div class="row marginauto nav-bar-nick nav-bar-child add-active_withdraw-money">--}}
{{--        <div class="col-12 left-right">--}}
{{--            <a href="/rut-tien">--}}
{{--                <div class="row marginauto">--}}
{{--                    <div class="col-auto left-right global__link__profile">--}}
{{--                        <i class="__icon__profile --sm__profile --link__profile" style="--path : url(/assets/frontend/theme_3/image/account/bankpng.png)"></i>--}}
{{--                    </div>--}}
{{--                    <div class="col-10 nav-bar-log-top-body-col">--}}
{{--                        <span>Rút tiền ATM - Ví điện tử</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="row marginauto nav-bar-nick nav-bar-child add-active_withdraw-items">--}}
{{--        <div class="col-12 left-right">--}}
{{--            <a href="/rut-vat-pham">--}}
{{--                <div class="row marginauto">--}}
{{--                    <div class="col-auto left-right global__link__profile">--}}
{{--                        <i class="__icon__profile --sm__profile --link__profile" style="--path : url(/assets/frontend/theme_3/image/account/giftpng.png)"></i>--}}
{{--                    </div>--}}
{{--                    <div class="col-10 nav-bar-log-top-body-col">--}}
{{--                        <span>Rút vật phẩm</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    --}}{{--                                    Vong lap thang con--}}
{{--</div>--}}

{{--<div class="col-md-12 left-right nav-bar-hr">--}}
{{--    --}}{{--                                    Vong lap thang bố--}}
{{--    <div class="row marginauto nav-bar-nick nav-bar-parent">--}}
{{--        <div class="col-md-12 left-right">--}}
{{--            <div class="row marginauto nav-bar-parent-title">--}}
{{--                <div class="col-12 left-right">--}}
{{--                    <span>LỊCH SỬ GIAO DỊCH</span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}

{{--    --}}{{--                                    Vong lap thang con--}}
{{--    <div class="row marginauto nav-bar-nick nav-bar-child add-active_lich-su-giao-dich">--}}
{{--        <div class="col-12 left-right">--}}
{{--            <a href="/lich-su-giao-dich">--}}
{{--                <div class="row marginauto">--}}
{{--                    <div class="col-auto left-right global__link__profile">--}}
{{--                        <i class="__icon__profile --sm__profile --link__profile" style="--path : url(/assets/frontend/theme_3/image/account/bdsdpng.png)"></i>--}}
{{--                    </div>--}}
{{--                    <div class="col-10 nav-bar-log-top-body-col">--}}
{{--                        <span>Biến động số dư</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="row marginauto nav-bar-nick nav-bar-child add-active_lich-su-nap-the">--}}
{{--        <div class="col-12 left-right">--}}
{{--            <a href="/lich-su-nap-the">--}}
{{--                <div class="row marginauto">--}}
{{--                    <div class="col-auto left-right global__link__profile">--}}
{{--                        <i class="__icon__profile --sm__profile --link__profile" style="--path : url(/assets/frontend/theme_3/image/account/lsntpng.png)"></i>--}}

{{--                    </div>--}}
{{--                    <div class="col-10 nav-bar-log-top-body-col">--}}
{{--                        <span>Lịch sử nạp thẻ</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </div>--}}


{{--    <div class="row marginauto nav-bar-nick nav-bar-child add-active_the-cao-da-mua">--}}
{{--        <div class="col-12 left-right">--}}
{{--            <a href="/the-cao-da-mua">--}}
{{--                <div class="row marginauto">--}}
{{--                    <div class="col-auto left-right global__link__profile">--}}

{{--                        <i class="__icon__profile --sm__profile --link__profile" style="--path : url(/assets/frontend/theme_3/image/account/tcdmpng.png)"></i>--}}

{{--                    </div>--}}
{{--                    <div class="col-10 nav-bar-log-top-body-col">--}}
{{--                        <span>Thẻ cào đã mua</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="row marginauto nav-bar-nick nav-bar-child add-active_lich-su-dich-vu">--}}
{{--        <div class="col-12 left-right">--}}
{{--            <a href="/lich-su-dich-vu">--}}
{{--                <div class="row marginauto">--}}
{{--                    <div class="col-auto left-right global__link__profile">--}}

{{--                        <i class="__icon__profile --sm__profile --link__profile" style="--path : url(/assets/frontend/theme_3/image/account/dvdmpng.png)"></i>--}}

{{--                    </div>--}}
{{--                    <div class="col-10 nav-bar-log-top-body-col">--}}
{{--                        <span>Dịch vụ đã mua</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="row marginauto nav-bar-nick nav-bar-child add-active_lich-su-atm-tu-dong">--}}
{{--        <div class="col-12 left-right">--}}
{{--            <a href="/lich-su-atm-tu-dong">--}}
{{--                <div class="row marginauto">--}}
{{--                    <div class="col-auto left-right global__link__profile">--}}

{{--                        <i class="__icon__profile --sm__profile --link__profile" style="--path : url(/assets/frontend/theme_3/image/account/bankpng.png)"></i>--}}

{{--                    </div>--}}
{{--                    <div class="col-10 nav-bar-log-top-body-col">--}}
{{--                        <span>Lịch sử nạp ATM tự động</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="row marginauto nav-bar-nick nav-bar-child add-active_lich-su-quay-thuong">--}}
{{--        <div class="col-12 left-right">--}}
{{--            <a href="/lich-su-quay-thuong">--}}
{{--                <div class="row marginauto">--}}
{{--                    <div class="col-auto left-right global__link__profile">--}}

{{--                        <i class="__icon__profile --sm__profile --link__profile" style="--path : url(/assets/frontend/theme_3/image/account/lsqtpng.png)"></i>--}}

{{--                    </div>--}}
{{--                    <div class="col-10 nav-bar-log-top-body-col">--}}
{{--                        <span>Lịch sử quay thưởng</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="row marginauto nav-bar-nick nav-bar-child add-active_lich-su-mua-nick">--}}
{{--        <div class="col-12 left-right">--}}
{{--            <a href="/lich-su-mua-nick">--}}
{{--                <div class="row marginauto">--}}
{{--                    <div class="col-auto left-right global__link__profile">--}}

{{--                        <i class="__icon__profile --sm__profile --link__profile" style="--path : url(/assets/frontend/theme_3/image/account/tkdmpng.png)"></i>--}}

{{--                    </div>--}}
{{--                    <div class="col-10 nav-bar-log-top-body-col">--}}
{{--                        <span>Tài khoản đã mua</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="row marginauto nav-bar-nick nav-bar-child add-active_lich-su-tra-gop">--}}
{{--        <div class="col-12 left-right">--}}
{{--            <a href="/lich-su-tra-gop">--}}
{{--                <div class="row marginauto">--}}
{{--                    <div class="col-auto left-right global__link__profile">--}}
{{--                        <i class="__icon__profile --sm__profile --link__profile" style="--path : url(/assets/frontend/theme_3/image/account/tktgpng.png)"></i>--}}

{{--                    </div>--}}
{{--                    <div class="col-10 nav-bar-log-top-body-col">--}}
{{--                        <span>Tài khoản trả góp</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    --}}{{--                                    Vong lap thang con--}}

{{--</div>--}}
