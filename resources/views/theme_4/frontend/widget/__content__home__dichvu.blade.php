@if(isset($data) && count($data) > 0)
<div class="d-flex justify-content-between">
    <div class="main-title">
        <h1>{{ $title??'Dịch vụ game' }}</h1>
    </div>
    <div class="service-search d-none d-lg-block">
        <div class="input-group p-box">
            <input type="text" id="txtSearch" placeholder="Tìm dịch vụ" value="" class="" width="200px">
            <span class="icon-search"><i class="fas fa-search"></i></span>
        </div>
    </div>
</div>

<div class="entries">
    <div class="row fix-border fix-border-dich-vu">

        <div class="col-md-12 left-right data-service-search">
            <span style="color: rgb(238, 70, 35);">Dịch vụ cần tìm không tồn tại.</span>
        </div>
        @php
        $index = 0;
        @endphp
        @foreach($data as $key => $item)
        @if($key < 8)
            @php
                $index = 1;
            @endphp
            <div class="col-md-3 col-sm-6 col-6 entries_item entries_item_service item-page-1" style="display: block">
                <a href="/dich-vu/{{ $item->slug}}">
                    <img src="{{\App\Library\MediaHelpers::media($item->image)}}"
                         alt="{{ $item->slug   }}" class="entries_item-img">
                    <h2 class="text-title">{{ $item->title   }}</h2>
                </a>
            </div>
        @elseif($key < 16)
            @php
                $index = 2;
            @endphp
            <div class="col-md-3 col-sm-6 col-6 entries_item entries_item_service item-page-2" style="display: none">
                <a href="/dich-vu/{{ $item->slug}}">
                    <img src="{{\App\Library\MediaHelpers::media($item->image)}}"
                         alt="{{ $item->slug   }}" class="entries_item-img">
                    <h2 class="text-title">{{ $item->title   }}</h2>
                </a>
            </div>
        @elseif($key < 24)
            @php
                $index = 3;
            @endphp
            <div class="col-md-3 col-sm-6 col-6 entries_item entries_item_service item-page-3" style="display: none">
                <a href="/dich-vu/{{ $item->slug}}">
                    <img src="{{\App\Library\MediaHelpers::media($item->image)}}"
                         alt="{{ $item->slug   }}" class="entries_item-img">
                    <h2 class="text-title">{{ $item->title   }}</h2>
                </a>
            </div>
        @elseif($key < 32)
            @php
                $index = 4;
            @endphp
            <div class="col-md-3 col-sm-6 col-6 entries_item entries_item_service item-page-4" style="display: none">
                <a href="/dich-vu/{{ $item->slug}}">
                    <img src="{{\App\Library\MediaHelpers::media($item->image)}}"
                         alt="{{ $item->slug   }}" class="entries_item-img">
                    <h2 class="text-title">{{ $item->title   }}</h2>
                </a>
            </div>
        @elseif($key < 40)
            @php
                $index = 5;
            @endphp
            <div class="col-md-3 col-sm-6 col-6 entries_item entries_item_service item-page-5" style="display: none">
                <a href="/dich-vu/{{ $item->slug}}">
                    <img src="{{\App\Library\MediaHelpers::media($item->image)}}"
                         alt="{{ $item->slug   }}" class="entries_item-img">
                    <h2 class="text-title">{{ $item->title   }}</h2>
                </a>
            </div>
        @endif
        @endforeach


        <button id="btn-expand-serivce" class="expand-button" data-page-current="1" data-page-max="{{ $index }}">Xem thêm dịch vụ</button>

    </div>


    <div class="entries-search">
        <div class="row fix-border ">
        </div>
    </div>

</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('#btn-expand-serivce').on('click', function(e) {
            var pageCurrrent=$(this).data('page-current');
            var pageMax=$(this).data('page-max');
            pageCurrrent=pageCurrrent+1;
            $('.item-page-'+pageCurrrent).fadeIn( "fast", function() {
                // Animation complete
            });
            $(this).data('page-current',pageCurrrent);
            if(pageCurrrent==pageMax){
                $(this).remove();
            }
        });
    });

</script>
@endif
