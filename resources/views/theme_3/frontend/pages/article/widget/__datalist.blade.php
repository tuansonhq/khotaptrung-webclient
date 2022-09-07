
    <div class="row px-2">
        @foreach($data as $item)
            <div class="col-6 col-lg-3 px-2 mt-2 mb-3">
                <div class="article mb-3">
                    <div class="article--thumbnail">
                        <a href="/tin-tuc/{{ $item->slug }}">
                            <img onerror="imgError(this)"
                                src="{{\App\Library\MediaHelpers::media($item->image)}}"
                                alt="" class="article--thumbnail__image">
                        </a>
                    </div>
                    <div class="article--title my-3">
                        <a href="/tin-tuc/{{ $item->slug }}" class="article--title__link">
                            {{ $item->title}}
                        </a>
                    </div>
                    <div class="article--date">
                        <i class="__icon calendar mr-2"></i>
                        {{ formatDateTime($item->created_at) }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="col-md-12 left-right justify-content-end default-paginate">
        <div class="row marinautooo justify-content-center">
            <div class="col-auto">
                <div class="data_paginate paging_bootstrap paginations_custom" style="text-align: center">
                    {{ $data->appends(request()->query())->links('pagination::bootstrap-default-4') }}
                </div>
            </div>
        </div>
    </div>






