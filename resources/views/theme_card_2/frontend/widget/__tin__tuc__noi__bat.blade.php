@if(isset($data) && count($data) > 0)
    <div class="relate-content">
        <h2>Bài viết nổi bật</h2>
        <hr class="lines">
        <div class="content-relate-item">
            @foreach($data as $val)
                @php
                    $index = 6;
                     if ($slug == $item->slug){
                         $index = 7;
                     }
                     if ($id != $item->id ){
                         $index = 7;
                     }
                @endphp
                 @if(setting('sys_zip_shop') && setting('sys_zip_shop') != '')
                <div class="row mb-3">
                    <div class="col-lg-5 col-md-5 col-sm-5 col-5">
                        <div class="item-blog-img">
                            <a href="{{ setting('sys_zip_shop') }}/{{ $val->slug }}">
                                @if(isset($val->image))
                                <img class="img-fluid lazy" onerror="imgError(this)" data-src="{{\App\Library\MediaHelpers::media($val->image)}}">
                                @else
                                <img onerror="imgError(this)" class="img-list-nick-category lazy" data-src="/assets/frontend/theme_3/image/images_1/no-image.png"  alt="No-image">
                                @endif
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7 col-7">
                        <div class="item-blog-content">
                            <h3>
                                <a href="{{ setting('sys_zip_shop') }}/{{ $val->slug }}"> {{ $val->title }}</a>
                            </h3>
                            <p class="mt-1">
                                @if(isset($val->published_at))
                                    {{ formatDateTime($val->published_at) }}
                                @else
                                    {{ formatDateTime($val->created_at) }}
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
                    @endif
            @endforeach
        </div>
        <div class="tag-content mt-5">
            <div class="content-blog-item">
                <h3>Danh mục:</h3>
                <hr class="lines">
            </div>
            <div class="tag-content-item">
                <ul class="tags">
                    <li><a href=" https://muathegarena.com/blog/huong-dan " class="tag">Hướng dẫn </a></li>
                    <li><a href=" https://muathegarena.com/blog/tin-tuc " class="tag">Tin Tức </a></li>
                </ul>
            </div>
        </div>
    </div>
@endif

