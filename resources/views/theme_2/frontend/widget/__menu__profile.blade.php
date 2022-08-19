<div class="block-header">
    <div class="p-3 d-flex align-items-center">
        <div class="me-3">
            <img src="img/temp/avatar-80.png" class="rounded-circle avatar" alt="">
        </div>
        <div>
            <h6 class="mb-0" id="info_name"></h6>
            <p class="mb-0 text-secondary small" id="info_create"></p>
        </div>
        <div class="ms-auto">
            <a href="/" class="btn btn-outline-primary rounded-x ps-4 pe-4">Mua thẻ / data <i class="las la-angle-right"></i></a>
        </div>
    </div>
    <!-- BEGIN Tabs -->
    @if(isset($data))
    <ul class="nav nav-qp-tabs mb-0 ps-3 pe-3" role="tablist">
        @foreach ($data as $key_child => $child_item)
        <li class="nav-item" role="presentation">
            <a class="nav-link @if(Request::is('thong-tin')) active @endif" href="/thong-tin" id="profile-tab" type="button" ><span><i class="las la-user"></i> Thông tin tài khoản</span></a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link @if(Request::is('lich-su-giao-dich')) active @endif data__giaodich" href="/lich-su-giao-dich" id="history-tab" type="button" ><span><i class="las la-clock"></i> Lịch sử giao dịch</span></a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link  @if(Request::is('lich-su-nap-the')) active @endif data__napthe" href="/lich-su-nap-the" id="deposit-tab"  type="button" ><span><i class="las la-clock"></i> Lịch sử nạp thẻ</span></a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link  @if(Request::is('the-cao-da-mua')) active @endif data__muathe" href="/the-cao-da-mua" id="item-tab" type="button" role="tab" ><span><i class="las la-credit-card"></i> Thẻ cào đã mua</span></a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link  @if(Request::is('lich-su-nap-atm')) active @endif data__charge_atm" href="/lich-su-nap-atm" id="tranfer-tab" type="button" ><span><i class="las la-credit-card"></i> Lịch sử nạp ATM</span></a>
        </li>
        @endforeach

    </ul>
    @endif
</div>
