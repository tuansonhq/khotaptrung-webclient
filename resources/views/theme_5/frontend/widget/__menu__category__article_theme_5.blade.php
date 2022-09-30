
<div class="col-lg-4 d-none d-lg-block c-pt-36">
    @if(isset($data_detail) && count($data_detail) > 0)
        @foreach($data_detail as $val)
            @if(isset($val->data->data) && count($val->data->data) > 0)
                <div class="card --custom hot-news-article">
                    <div class="nav-bar-hr">
                        <div class="row marginauto nav-bar-nick nav-bar-parent">
                            <div class="col-md-12 left-right">
                                <div class="row marginauto nav-bar-article-title">
                                    <div class="d-flex col-12 left-right">
                                        <span>{{ $val->categoryarticle->title }}</span>
                                        <div class="navbar-spacer"></div>
                                        <div class="text-view-more">
                                            <a href="/tin-tuc/{{ $val->categoryarticle->slug }}" class="global__link">Xem thêm<i class="__icon --sm --link ml-1" style="--path : url(/assets/frontend/theme_3/image/svg/arrowright.svg)"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @foreach($val->data->data as $key=> $item)
                            @if($key >= 3)
                                @break
                            @endif
                            <div class="sub-article">
                                <div class="row">
                                    <div class="col-6 sub-article--thumbnail-container">
                                        <div class="sub-article--thumbnail">
                                            <a href="/tin-tuc/{{ $item->slug }}">
                                                <img onerror="imgError(this)"  data-src="{{\App\Library\MediaHelpers::media($item->image)}}" alt="" class="sub-article--thumbnail__image lazy">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 sub-article--info">
                                        <a href="/tin-tuc/{{ $item->slug }}" class="sub-article--title__link">
                                            {{ $item->title }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            @endif
        @endforeach
    @endif
</div>
