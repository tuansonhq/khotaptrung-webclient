@if(isset($data) && count($data) > 0)
<div class="d-flex justify-content-between">
    <div class="main-title">
        <h1>Dịch vụ game</h1>
    </div>
    <div class="service-search d-none d-lg-block">
        <div class="input-group p-box">
            <input type="text" id="txtSearch" placeholder="Tìm game" value="" class="" width="200px">
            <span class="icon-search"><i class="fas fa-search"></i></span>
        </div>
    </div>
</div>
<div class="entries">
    <div class="row fix-border">
        @foreach($data as $key => $item)
        @if($key < 8)
        <div class="col-md-3 col-sm-6 col-6 entries_item entries_item_service item-page-1" style="display: block">
            <a href="/dich-vu/{{ $item->slug}}">
                <img src="{{\App\Library\MediaHelpers::media($item->image)}}"
                     alt="{{ $item->slug   }}" class="entries_item-img">
                <h2 class="text-title">{{ $item->title   }}</h2>
            </a>
        </div>
        @elseif($key < 16)
        <div class="col-md-3 col-sm-6 col-6 entries_item entries_item_service item-page-2" style="display: none">
                    <a href="/dich-vu/{{ $item->slug}}">
                        <img src="{{\App\Library\MediaHelpers::media($item->image)}}"
                             alt="{{ $item->slug   }}" class="entries_item-img">
                        <h2 class="text-title">{{ $item->title   }}</h2>
                    </a>
                </div>
        @elseif($key < 24)
            <div class="col-md-3 col-sm-6 col-6 entries_item entries_item_service item-page-3" style="display: none">
                <a href="/dich-vu/{{ $item->slug}}">
                    <img src="{{\App\Library\MediaHelpers::media($item->image)}}"
                         alt="{{ $item->slug   }}" class="entries_item-img">
                    <h2 class="text-title">{{ $item->title   }}</h2>
                </a>
            </div>
        @endif
        @endforeach


        <button id="btn-expand-serivce" class="expand-button" data-page-current="1" data-page-max="8">
            Xem thêm dịch vụ
        </button>


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
    </div>


    <div class="entries-search">
        <div class="row fix-border ">
        </div>
    </div>

</div>
@endif
