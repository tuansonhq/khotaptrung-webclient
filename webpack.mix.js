const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

//Theme 3

mix.js('resources/js/app.js', 'public/js')
    .styles([
        'public/assets/frontend/theme_3/lib/sweetalert2/sw2.css',
        'public/assets/frontend/theme_3/lib/bootstrap/bootstrap.min.css',
        'public/assets/frontend/theme_3/lib/swiper/swiper.min.css',
        'public/assets/frontend/theme_3/lib/animate/animate.min.css',
        'public/assets/frontend/theme_3/lib/OwlCarousel2/owl.carousel.min.css',
        'public/assets/frontend/theme_3/lib/date-picker/bootstrap-datetimepicker.css',
        'public/assets/frontend/theme_3/lib/fancybox/jquery.fancybox.min.css',
        'public/assets/frontend/theme_3/lib/fancybox/fancybox.css',
        'public/assets/frontend/theme_3/lib/toastr/toastr.css',
        'public/assets/frontend/theme_3/lib/steps/jquery-steps.css',
        'public/assets/frontend/theme_3/lib/select-nice/select-nice.css',
        'public/assets/frontend/theme_3/css/css_nam/style.css',
        'public/assets/frontend/theme_3/css/css_nam/lib_bootstrap.css',
        'public/assets/frontend/theme_3/css/css_nam/minigame.css',
        'public/assets/frontend/theme_3/css/style_son.css',
        'public/assets/frontend/theme_3/css/style_trong.css',
        'public/assets/frontend/theme_3/css/style_duong.css',
        'public/assets/frontend/theme_3/css/style_phu/form_element.css',
        'public/assets/frontend/theme_3/css/style_phu/login_modal.css',
    ], 'public/css/theme_3/main.css')
    .scripts([
        'public/assets/frontend/theme_3/lib/jquery/jquery.min.js',
        'public/assets/frontend/theme_3/lib/bootstrap/bootstrap.min.js',
        'public/assets/frontend/theme_3/lib/lazy/jquery.lazy.min.js',
        'public/assets/frontend/theme_3/lib/lazy/jquery.lazy.plugins.min.js',
        'public/assets/frontend/theme_3/lib/toastr/toastr.min.js',
        'public/assets/frontend/theme_3/lib/sweetalert2/sw2.js',
        'public/assets/frontend/theme_3/lib/select-nice/select-nice.js',
        'public/assets/frontend/theme_3/lib/popper/popper.min.js',
        'public/assets/frontend/theme_3/lib/popper/tippy-bundle.umd.js',
        'public/assets/frontend/theme_3/lib/steps/jquery-steps.js',
        'public/assets/frontend/theme_3/lib/easeJquery/easing.js',
        'public/assets/frontend/theme_3/js/account_info.js',
        'public/assets/frontend/theme_3/js/js_trong/preload.js',
        'public/assets/frontend/theme_3/lib/handlebars/handlebars.min.js',
        'public/assets/frontend/theme_3/lib/fancybox/fancybox.umd.js',
        'public/assets/frontend/theme_3/lib/fancybox/jquery.fancybox.min.js',
        'public/assets/frontend/theme_3/lib/OwlCarousel2/OwlCarousel2.min.js',
        'public/assets/frontend/theme_3/lib/slick/slick.min.js',
        'public/assets/frontend/theme_3/lib/swiper/swiper.min.js',
        'public/assets/frontend/theme_3/js/js_nam/main.js',
        'public/assets/frontend/theme_3/js/js_nam/swiper.js',
        'public/assets/frontend/theme_3/lib/date-picker/moment.js',
        'public/assets/frontend/theme_3/lib/date-picker/i18n/vi.js',
        'public/assets/frontend/theme_3/lib/date-picker/bootstrap-datetimepicker.js',
        'public/assets/frontend/theme_3/js/js_trong/modal-charge.js',
        'public/assets/frontend/theme_3/js/transfer/transfer.js',
    ], 'public/js/theme_3/main.js')
    .js('public/assets/frontend/theme_3/js/nick/nick--update.js', 'public/js/theme_3/nick/nick--update.js')
    .js('public/assets/frontend/theme_3/js/nick/nick-detail.js', 'public/js/theme_3/nick/nick-detail.js')
    .js('public/assets/frontend/theme_3/js/nick/nick--list.js', 'public/js/theme_3/nick/nick--list.js')
    .js('public/assets/frontend/theme_3/js/charge/charge.js', 'public/js/theme_3/charge/charge.js')
    .js('public/assets/frontend/theme_3/js/js_trong/service.js', 'public/js/theme_3/cay-thue/cay-thue.js')
    .scripts([
        'public/assets/frontend/theme_3/js/js_trong/format-currency.js',
        'public/assets/frontend/theme_3/js/js_trong/service.js',
        'public/assets/frontend/theme_3/js/js_trong/validate.js',
        'public/assets/frontend/theme_3/js/cay-thue/cay-thue-detail.js'
    ], 'public/js/theme_3/cay-thue/cay-thue-detail.js')
    .scripts([
        'public/assets/frontend/theme_3/js/js_phu/purchase_card.js',
        'public/assets/frontend/theme_3/js/js_trong/buycard.js',
    ], 'public/js/theme_3/store-card/store-card.js')
    .version();

