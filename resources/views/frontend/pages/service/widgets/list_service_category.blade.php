@if (isset($categoryservice) && count($categoryservice) > 0)
<div class="container m-t-20 ">

    <div class="game-item-view" style="margin-top: 40px">
        <div class="c-content-title-1">
            <h3 class="c-center c-font-uppercase c-font-bold">Dịch vụ khác</h3>
            <div class="c-line-center c-theme-bg"></div>
        </div>
        <div class="row row-flex  item-list row-flex-safari game-list" id="data-list-service-category">
            @foreach($categoryservice as $category)
            <div class="col-sm-6 col-md-3">
                <div class="classWithPad">
                    <div class="image">
                        <a href="/dich-vu/{{ $category->slug }}">
                            <img src="https://media-tt.nick.vn{{ $category->image }}">
                        </a>
                    </div>
                    <div class="news_title">
                        <a style="text-decoration: none" href="/dich-vu/{{ $category->slug }}">{{ $category->title }}</a>
                    </div>

                    <div class="a-more" style="margin-top: 15px">
                        <div class="row">
                            <div class="col-xs-6"></div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>


    <div class="tab-vertical tutorial_area">
        <div class="panel-group" id="accordion">

        </div>
    </div>

</div>
@endif
