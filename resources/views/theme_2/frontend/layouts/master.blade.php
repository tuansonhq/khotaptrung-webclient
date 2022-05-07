<!doctype html>
<html lang="vi">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="path" content="" />
    <meta name="robots" content="index,follow" />
    <meta name="jwt" content="jwt" />
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/lib/sweetalert2/sw2.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/custom.boostrap.css">

{{--    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/lib/bootstrap/bootstrap.min.css">--}}

    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/line-awesome.min.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/node_modules/flickity/dist/flickity.min.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/lib/bootstrapdatepicker/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/lib/toastr/toastr.css">
    <!--    <link rel="stylesheet" href="css/main.css">-->
    <link rel="stylesheet" href="/assets/frontend/{{theme('')->theme_key}}/css/style.css?v={{time()}}">
    <script src="/assets/frontend/{{theme('')->theme_key}}/lib/jquery.min.js"></script>
    <script src="/assets/frontend/{{theme('')->theme_key}}/lib/bootstrap/bootstrap.min.js"></script>
    <script src="/assets/frontend/{{theme('')->theme_key}}/lib/moment/moment.min.js"></script>
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/bootstrap-datetimepicker.min.js"></script>
    <script src="/assets/frontend/{{theme('')->theme_key}}/lib/bootstrapdatepicker/bootstrap-datepicker.min.js"></script>
    <script src="/assets/frontend/{{theme('')->theme_key}}/lib/sweetalert2/sw2.js"></script>
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/account_info.js?v={{time()}}"></script>
    <script src="/assets/frontend/{{theme('')->theme_key}}/js/main.js?v={{time()}}"></script>

{{--    <script src="/assets/frontend/{{theme('')->theme_key}}/js/storeCard/store_card.js"></script>--}}
    @stack('js')
    @if(Request::is('/'))
        <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "shop the game",
  "url": "https://shopthegame.net/",
  "logo": "https://cdn.upanh.info//storage/upload/images/Logo%20shop/LOGO-SHOPTHEGAME-NET.png",
 "address":{
                    "@type":"PostalAddress",
                    "streetAddress":"47 Xuân Đỉnh",
                    "addressLocality":"Q. Bắc Từ Liêm",
                    "addressRegion":"Hà Nội",
                    "postalCode":"100000",
                    "addressCountry":"VN"
                 },
              "priceRange": "VND",
              "geo":{
                "@type":"GeoCoordinates",
                "latitude":21.07035,
                "longitude":105.80143
              },
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "0792.000.792",
    "contactType": "sales",
    "contactOption": ["TollFree","HearingImpairedSupported"],
    "areaServed": "VN",
    "availableLanguage": "Vietnamese"
  },
  "sameAs": [
    "https://www.facebook.com/shopthegame.net/",
    "https://www.youtube.com/channel/UC2gZs23GU9WEA6DlgdztqoQ",
    "https://twitter.com/shop_thegame",
    "https://www.instagram.com/shopthegamenet/",
    "https://www.linkedin.com/in/shopthegame-net/",
    "https://www.pinterest.com/shopthegamegiare/_saved/",
    "https://shopthegame.tumblr.com/"
  ]
}
</script>

        <script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Product",
  "name": "Thẻ Garena",
  "image": "https://cdn.upanh.info//storage/upload/images/9SjVHe7ZbK_1605841255.png",
  "description": "Thẻ Game Garena online với đầy đủ các mệnh giá từ 20k ( 20.000 ), 50k ( 50.000), 100k ( 100.000), 200 ( 200.000 ), 500k ( 500.000 ) giá rẻ, chiết khẩu cao, uy tín, tự động 100%",
  "brand": {
    "@type": "Brand",
    "name": "Garena"
  },
  "sku": "thegarena",
  "gtin8": "thegarena",
  "mpn": "thegarena",
  "offers": {
    "@type": "Offer",
    "url": "https://shopthegame.net/",
    "priceCurrency": "VND",
    "price": "20000",
    "priceValidUntil": "2022-05-05",
    "availability": "https://schema.org/InStock",
    "itemCondition": "https://schema.org/NewCondition"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "5",
    "bestRating": "5",
    "worstRating": "4",
    "ratingCount": "1968",
    "reviewCount": "1968"
  },
  "review": {
    "@type": "Review",
    "name": "mua thẻ garena online",
    "reviewBody": "mua thẻ garena online giá rẻ từ việc đổi thẻ cào điện thoại sang thẻ garena",
    "reviewRating": {
      "@type": "Rating",
      "ratingValue": "5",
      "bestRating": "5",
      "worstRating": "4"
    },
    "datePublished": "2022-05-05",
    "author": {"@type": "Person", "name": "mua the garena"},
    "publisher": {"@type": "Organization", "name": "doi the garena"}
  }
}
</script>
    @else
        @endif

    @yield('seo_head')
</head>

<body>
<!-- BEGIN Site -->
<div class="site">
    <!-- BEGIN Header -->
    @include('frontend.layouts.includes.header')

    <!-- BEGIn Site main -->
    <div class="site-main">
        <div class="container">
            <div class="site-content">
                <div class="site-content-inner">
                    @yield('content')

                </div>
            </div>
        </div>
    </div><!-- END Site Main -->
    <!-- Messenger Plugin chat Code -->
    <div id="fb-root" style="    z-index: 666;"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>
    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "{{setting('sys_id_chat_message') }}");

        chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml            : true,
                version          : 'v13.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- BEGIN Site Footer -->
    @include('frontend.layouts.includes.footer')




</div><!-- END SIte -->
<div class="overlay"></div>
<div class="offcanvas-nav">
    <button type="button" class="btn btn-close"><i class="las la-times"></i></button>
    <div class="offcanvas-nav-inner h-100 p-3">
        <ul class="nav flex-column">
            {!! widget('frontend.widget.__menu_category_theme2') !!}

{{--            <li class="nav-item item-home active"><a href="/" class="nav-link"><i class="las la-home icon"></i> Trang chủ</a></li>--}}
{{--            <li class="nav-item item-buy-card"><a href="/" class="nav-link"><i class="las la-credit-card icon"></i> Mua thẻ game điện thoại</a></li>--}}
{{--            <li class="nav-item item-history"><a href="/thong-tin#history" class="nav-link"><i class="las la-clock icon"></i> Lịch sử giao dịch</a></li>--}}
{{--            <li class="nav-item item-profile"><a href="/user/profile" class="nav-link"><i class="las la-user icon"></i> Thông tin cá nhân</a></li>--}}
{{--            <li class="nav-item item-news"><a href="/tin" class="nav-link"><i class="las la-newspaper icon"></i> Tin tức</a></li>--}}
{{--            <li class="nav-item item-news"><a href="/thong-tin#deposit" class="nav-link"><i class="las la-credit-card icon"></i> Lịch sử nạp thẻ</a></li>--}}
        </ul>
    </div>
</div>
<div class="scroll-top">
    <a href="#" class="scroll-top-link"><i class="las la-angle-double-up"></i></a>
</div>
<div class="text-center ajax-loading-store">
    <div id="overlay">
        <div class="cv-spinner">
            <span class="spinner"></span>
        </div>
    </div>
</div>


<!-- Optional JavaScript; choose one of the two! -->
<script src="/assets/frontend/{{theme('')->theme_key}}/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/node_modules/jquery/dist/jquery.min.js"></script>
{{--<script src="/assets/frontend/{{theme('')->theme_key}}/lib/jquery.min.js"></script>--}}

<script src="/assets/frontend/{{theme('')->theme_key}}/node_modules/flickity/dist/flickity.pkgd.min.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/js/bootstrap-input-spinner.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/js/sticky-kit.min.js"></script>
<script src="/assets/frontend/{{theme('')->theme_key}}/lib/toastr/toastr.min.js"></script>



</body>

</html>
