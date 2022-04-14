@if(isset($data) && count($data) > 0)
<!-- BEGIN Guide Block -->
<div class="mb-4">
    <h6 class="title-style-tab"><span><i class="las la-question-circle icon"></i> Hướng dẫn</span></h6>
    <ul class="list-unstyled list-with-icon">
        @foreach($data as $key => $item)
            @if($key < 3)
            <li><a href="/blog/{{ $item->slug }}"><i class="las la-angle-right icon"></i> {{ $item->title }}</a></li>
            @endif
        @endforeach
    </ul>
</div><!-- BEGIN Guide Block -->
<!-- BEGIN Banner Block -->
@foreach($data as $key => $item)
    @if($key == 3)
        <div class="mb-4">
            <div class="media-placeholder ratio-4-3">
                <div class="bg" style="background-image: url(https://media-tt.nick.vn/{{ $item->image }})"></div>
                <div class="media-inner bg-overlay gradient-from-bottom d-flex align-items-end">
                    <div class="p-3 text-white">
                        <p class="lead mb-0">{{ $item->title }}</p>
{{--                        <h5 class="mb-0">Ăn ngay khuyến mãi</h5>--}}
                        <a href="/blog/{{ $item->slug }}" class="btn btn-sm rounded-x bg-warning-gradient text-white mt-2 ps-3 pe-3">Xem chi tiết <i class="las la-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div><!-- BEGIN Banner Block -->
    @endif
@endforeach

@endif
<!-- BEGIN Support Block -->
<div class="mb-4">
    <h6 class="title-style-tab"><span><i class="las la-info-circle"></i> Hỗ trợ</span></h6>
    <!-- BEGIN Support Item -->
    <div class="item-block-support hotline d-flex p-2 justify-content-between align-items-center mb-2">
        <div class="item-icon">
            <i class="las la-phone-volume"></i>
        </div>
        <div class="item-content">
            <div class="op-7 text-end">Hotline</div>
            <a href="tel:+84792000792" class="d-block main-text text-end text-danger"><strong>0792.000.792</strong></a>
        </div>
    </div><!-- END Support Item -->
    <!-- BEGIN Support Item -->
    <div class="item-block-support facebook d-flex p-2 justify-content-between align-items-center mb-2">
        <div class="item-icon">
            <i class="lab la-facebook-f"></i>
        </div>
        <div class="item-content">
            <div class="op-7 text-end">Facebook</div>
            <a href="https://facebook.com/muathegarena" class="d-block main-text text-end"><strong>muathegarena</strong></a>
        </div>
    </div><!-- END Support Item -->
</div><!-- BEGIN Support Block -->


