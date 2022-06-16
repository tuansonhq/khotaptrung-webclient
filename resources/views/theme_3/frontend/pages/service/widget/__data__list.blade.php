<div class="col-md-12 left-right">
    <div class="row marginauto body-detail-ct">
        <div class="col-md-12 text-left left-right">
            <div class="row body-detail-row-ct">
                @forelse($data as $service)
                <div class="col-auto body-detail-col-ct js-service">
                    <a href="/dich-vu/{{ @$service->slug }}">
                        <div class="row marginauto hover-overlay-ct">
                            <div class="col-md-12 default-overlay-ct left-right service--thumbnail">
                                <img class="lazy" src="{{ @$service->image }}" alt="{{ @$service->slug }}">
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
