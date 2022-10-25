@php
    $data_viewed = Cookie::get('viewed_account') ?? '[]';
    $data_viewed = json_decode($data_viewed,true);
@endphp
@if(count($data_viewed))
    <div class="art-list" style="width: 100%">
        <div class="d-flex justify-content-between" style="padding-top: 8px;padding-bottom: 16px">
            <div class="main-title" style="margin-bottom: 0">
                <h1>Tài khoản đã xem</h1>
            </div>
        </div>

        <div class="entries">
            <div class="row fix-border fix-border-nick justify-content-center" id="showslideracc">
                <div class="col-md-3 col-sm-6 col-6 entries_item" style="display: block">
                    <a href="/acc/STS33053">
                        <img src="https://cdn.upanh.info/storage/upload/product-acc/32771/thumb.jpg?t=1666279885"
                             alt="anhvjp14" class="entries_item-img">
                        <h2 class="text-title text-left  fw-bold" style="color: #434657;margin-bottom: 8px">#STS33053</h2>
                        <p class="text-left" style="color: #82869E;margin-bottom: 4px">Nick Có Vàng: Không</p>
                        <p class="text-left" style="color: #82869E;margin-bottom: 4px">Sever: Blue</p>
                        <p class="text-left" style="color: #82869E;margin-bottom: 4px">Hành Tinh: Namec</p>
                        <h2 class="text-left"
                            style="color: rgb(238, 70, 35);font-size: 16px;margin-bottom: 0;margin-top: 8px">46.200đ</h2>
                        <p class="text-left"
                           style="color: #82869E;margin-bottom: 0;font-size: 14px;text-decoration: line-through;">60.000đ
                            <span class="badge badge-success" style="margin-left: 4px;padding-top: 4px;background: rgb(238, 70, 35);">23%</span>
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endif
