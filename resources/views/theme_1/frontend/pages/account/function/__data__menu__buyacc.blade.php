@if(isset($data_category))
    <ul class="news_breadcrumbs_theme news_breadcrumbs_theme__show">
        <li><a href="/" class="news_breadcrumbs_theme_trangchu news_breadcrumbs_theme_trangchu_a">Trang chủ</a></li>
        <li>/</li>
        <li><a href="/mua-acc" class="news_breadcrumbs_theme_tintuc_a"><p class="news_breadcrumbs_theme_tintuc">Mua Acc</p></a></li>
        <li>/</li>
        <li><a href="/mua-acc/{{ isset($data_category->custom->slug) ? $data_category->custom->slug :  $data_category->slug }}" class="news_breadcrumbs_theme_tintuc_a"><p class="news_breadcrumbs_theme_tintuc">{{ isset($data_category->custom->title) ? $data_category->custom->title :  $data_category->title }}</p></a></li>
    </ul>
@endif
