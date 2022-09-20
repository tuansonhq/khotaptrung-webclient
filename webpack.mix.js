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
    ], 'public/css/theme_3/main.css');
