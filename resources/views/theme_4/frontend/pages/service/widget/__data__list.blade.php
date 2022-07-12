@if(isset($data))
<div class="col-md-12 left-right">
    <div class="row marginauto body-detail-ct">
        <div class="col-md-12 text-left left-right">
            <div class="row body-detail-row-ct">
                @forelse($data as $service)
                    <div class="col-auto body-detail-nick-col-ct js-service">
                        <a href="/dich-vu/{{ @$service->slug }}" class="list-item-nick-hover">
                            <div class="row marginauto">
                                <div class="col-md-12 left-right default-overlay-nick-ct --fix-responsive">
                                    <img class="lazy" src="{{@\App\Library\MediaHelpers::media($service->image)}}" alt="{{ @$service->slug }}">
                                </div>
                                <div class="col-md-12 left-right text-center body-detail-col-span-ct">
                                        <span>{{ @$service->title }}</span>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
</div>
@endif

