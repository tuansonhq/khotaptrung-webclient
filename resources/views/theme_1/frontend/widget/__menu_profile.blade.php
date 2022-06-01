@foreach($data??[] as $item)
    @if ($item->parent_id == 0)
        <div class="col-6 col-sm-6 col-xl-6 col-lg-12 col-xl-12 ">
            <div class="account_sidebar_menu_title">
                <p>{{$item->title}}</p>
            </div>
            <div class="account_sidebar_menu_nav">
                <ul>
                    @foreach ($data as $key_child => $child_item)
                        @if ($item->id == $child_item->parent_id)
                            <li>
                                <a   @if(isset($child_item->url) && $child_item->url=='/recharge-atm') href="#" data-toggle="modal" data-target="#recharge-atm" @else href="{{$child_item->url?$child_item->url:$child_item->slug}}" @endif class="account_{{substr($child_item->url, 1)}}">{{$child_item->title}}</a>
                            </li>
                            <script>

                            </script>
                        @endif
                    @endforeach


                </ul>
            </div>
        </div>

    @endif
@endforeach
<div class="modal fade" id="recharge-atm" role="dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="loader" style="text-align: center"><img src="/assets/frontend/{{theme('')->theme_key}}/images/loader.gif" style="width: 50px;height: 50px;display: none"></div>
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" style="font-weight: bold;text-transform: uppercase;color: #FF0000;">Nạp tiền từ Atm - Ví điện tử</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
                @if(setting('sys_tranfer_content'))
                    {!! setting('sys_tranfer_content') !!}
                @endif
            </div>

            <div class="modal-footer">
                <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>

