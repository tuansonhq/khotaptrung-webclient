 @if(isset($data))
    <div class="list-service">
        @forelse($data as $item)
            <div class="item-service js-service">
                <div class="card card-hover">
                    <a href="/dich-vu/{{ $item->slug }}" class="card-body scale-thumb c-p-16 c-p-lg-12">
                        <div class="account-thumb c-mb-8">
                            <img onerror="imgError(this)" src="{{@\App\Library\MediaHelpers::media($item->image)}}" alt="{{ $item->slug }}"
                                 class="account-thumb-image">
                        </div>
                        <div class="account-title">
                            <div class="text-title fw-700 text-limit limit-1">{{ $item->title}}</div>
                        </div>
                        <div class="account-info">
                            <div class="info-attr">
                                Giao dịch: 0
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        @empty
        @endforelse
    </div>
@else
    <div class="col-12  text-center my-3" id="text-empty" style="display: none">
        <span class="text-danger">Không có kết quả nào phù hợp</span>
    </div>
@endif
