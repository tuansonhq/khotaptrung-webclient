$(document).ready(function (e) {

    $('.view-more').click(function(){
        $('.view-less').css("display","block");
        $('.view-more').css("display","none");
        $(".footer-row-ct .content-video-in").addClass( "showtext" );
    });
    $('.view-less').click(function(){
        $('.view-more').css("display","block");
        $('.view-less').css("display","none");
        $(".footer-row-ct .content-video-in").removeClass( "showtext");
    });

    $(function(){
        var slider = new Swiper ('.gallery-slider', {
            autoplay: {
                delay: 2000,

            },

            slidesPerView: 1,
            centeredSlides: true,
            loop: false,
            loopedSlides: 6,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

        var thumbs = new Swiper ('.gallery-thumbs', {
            slidesPerView: 6.5,
            spaceBetween: 8,
            centeredSlides: false,
            loop: false,
            slideToClickedSlide: true,
            breakpoints: {
                992: {
                    slidesPerView: 4.5,
                },
                768:{
                    slidesPerView: 3.5,
                },
                480: {
                    slidesPerView: 3.2,

                }
            }
        });
    });

    var list_dong_gia = new Swiper('.list-dong-gia', {
        autoplay: false,
        // preloadImages: false,
        updateOnImagesReady: true,
        // lazyLoading: false,
        watchSlidesVisibility: false,
        lazyLoadingInPrevNext: false,
        lazyLoadingOnTransitionStart: false,

        loop: false,
        centeredSlides: false,
        slidesPerView: 4.5,
        speed: 800,
        spaceBetween: 0,
        touchMove: true,
        freeModeSticky:true,
        grabCursor: true,
        observer: true,
        observeParents: true,
        breakpoints: {
            992: {
                slidesPerView: 3.2,
            },
            768:{
                slidesPerView: 2.5,
            },
            480: {
                slidesPerView: 1.8,

            }
        }
    });

    var list_uu_dai = new Swiper('.list-uu-dai', {
        autoplay: false,
        // preloadImages: false,
        updateOnImagesReady: true,
        // lazyLoading: false,
        watchSlidesVisibility: false,
        lazyLoadingInPrevNext: false,
        lazyLoadingOnTransitionStart: false,

        loop: false,
        centeredSlides: false,
        slidesPerView: 4.5,
        speed: 800,
        spaceBetween: 0,
        touchMove: true,
        freeModeSticky:true,
        grabCursor: true,
        observer: true,
        observeParents: true,
        breakpoints: {
            992: {
                slidesPerView: 3.2,
            },
            768:{
                slidesPerView: 2.5,
            },
            480: {
                slidesPerView: 1.8,

            }
        }
    });

    var list_da_xem = new Swiper('.list-da-xem', {
        autoplay: false,
        // preloadImages: false,
        updateOnImagesReady: true,
        // lazyLoading: false,
        watchSlidesVisibility: false,
        lazyLoadingInPrevNext: false,
        lazyLoadingOnTransitionStart: false,

        loop: false,
        centeredSlides: false,
        slidesPerView: 4.5,
        speed: 800,
        spaceBetween: 0,
        touchMove: true,
        freeModeSticky:true,
        grabCursor: true,
        observer: true,
        observeParents: true,
        breakpoints: {
            992: {
                slidesPerView: 3.2,
            },
            768:{
                slidesPerView: 2.5,
            },
            480: {
                slidesPerView: 1.8,

            }
        }
    });

    // $('#successModal').modal('show')

    $('.wide').niceSelect();

    tippy('#getShowpass', {
        // default
        trigger: 'click',
        content: "Đã lấy mật khẩu!",
        placement: 'right',
    });

    tippy('#getCopypass', {
        // default
        trigger: 'click',
        content: "Đã copy mật khẩu!",
        placement: 'right',
    });

    tippy('#getCopyemail', {
        // default
        trigger: 'click',
        content: "Đã copy email!",
        placement: 'right',
    });

    $('.getCopypass').on('click', function(){

        // Get the password field
        var passwordField = $('#password');

        // Get the current type of the password field will be password or text
        var passwordFieldType = passwordField.attr('type');

        // Check to see if the type is a password field
        if(passwordFieldType == 'password')
        {
            // Change the password field to text
            passwordField.attr('type', 'text');

            var htmlpass = '';
            htmlpass += '<img class="lazy img-show-password" src="/assets/frontend/theme_3/image/cay-thue/eyeshow.png" alt="">';
            $('.getCopypass').html('');
            $('.getCopypass').html(htmlpass);

            // Change the Text on the show password button to Hide
            $(this).val('Hide');
        } else {
            var htmlpass = '';
            htmlpass += '<img class="lazy img-show-password" src="/assets/frontend/theme_3/image/cay-thue/eyehide.png" alt="">';
            $('.getCopypass').html('');
            $('.getCopypass').html(htmlpass);

            // If the password field type is not a password field then set it to password
            passwordField.attr('type', 'password');

            // Change the value of the show password button to Show
            $(this).val('Show');
        }
    });

    $('#getCopyemail').on('click', function(){
        var copyText = $('#email').val();

        navigator.clipboard.writeText(copyText);
    })

    $('.getCopypass').on('click', function(){
        var copyText = $('#password').val();

        navigator.clipboard.writeText(copyText);
    })

    //    Step

    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches

    //xac nhan don hang
    $('body').on('click','.button-next-step-one',function(){
        if (animating) return false;
        animating = true;

        // current_fs = $('#mobile-caythue .input-next-step-one').parent();
        // next_fs = $('#mobile-caythue .input-next-step-one').parent().next();

        current_fs = $('#fieldset-one');
        next_fs = $('#fieldset-two');
        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function (now, mx) {
                left = (now * 50) + "%";
                opacity = 1 - now;
                next_fs.css({'left': left, 'opacity': opacity});
            },
            complete: function () {
                current_fs.hide();
                animating = false;
            },
            easing: 'easeInOutBack'
        });
    })

    $('body').on('click','.previous-step-one',function(){

        if(animating) return false;
        animating = true;

        current_fs = $('#fieldset-two');
        previous_fs = $('#fieldset-one');

        //show the previous fieldset
        previous_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now, mx) {
                //1. scale previous_fs from 80% to 100%
                scale = 0.8 + (1 - now) * 0.2;
                //2. take current_fs to the right(50%) - from 0%
                left = ((1-now) * 50)+"%";
                //3. increase opacity of previous_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({'left': left});
                previous_fs.css({'opacity': opacity});
            },
            // duration: 200,
            complete: function(){
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
    });

    $('body').on('click','.button-next-step-two',function(){

        if(animating) return false;
        animating = true;

        current_fs = $('#fieldset-two');
        previous_fs = $('#fieldset-one');

        //show the previous fieldset
        previous_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now, mx) {
                //1. scale previous_fs from 80% to 100%
                scale = 0.8 + (1 - now) * 0.2;
                //2. take current_fs to the right(50%) - from 0%
                left = ((1-now) * 50)+"%";
                //3. increase opacity of previous_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({'left': left});
                previous_fs.css({'opacity': opacity});
            },
            // duration: 200,
            complete: function(){
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });

    });

    //Tra gop
    $('body').on('click','.button-next-step-one-tra-gop',function(){
        if (animating) return false;
        animating = true;

        // current_fs = $('#mobile-caythue .input-next-step-one').parent();
        // next_fs = $('#mobile-caythue .input-next-step-one').parent().next();

        current_fs = $('#fieldset-one');
        next_fs = $('#fieldset-three');
        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function (now, mx) {
                left = (now * 50) + "%";
                opacity = 1 - now;
                next_fs.css({'left': left, 'opacity': opacity});
            },
            complete: function () {
                current_fs.hide();
                animating = false;
            },
            easing: 'easeInOutBack'
        });
    })

    $('body').on('click','.button-next-step-two-tra-gop',function(){

        if(animating) return false;
        animating = true;

        current_fs = $('#fieldset-three');
        previous_fs = $('#fieldset-one');

        //show the previous fieldset
        previous_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now, mx) {
                //1. scale previous_fs from 80% to 100%
                scale = 0.8 + (1 - now) * 0.2;
                //2. take current_fs to the right(50%) - from 0%
                left = ((1-now) * 50)+"%";
                //3. increase opacity of previous_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({'left': left});
                previous_fs.css({'opacity': opacity});
            },
            // duration: 200,
            complete: function(){
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });

    });

    $('body').on('click','.previous-step-one-tra-gop',function(){

        if(animating) return false;
        animating = true;

        current_fs = $('#fieldset-three');
        previous_fs = $('#fieldset-one');

        //show the previous fieldset
        previous_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now, mx) {
                //1. scale previous_fs from 80% to 100%
                scale = 0.8 + (1 - now) * 0.2;
                //2. take current_fs to the right(50%) - from 0%
                left = ((1-now) * 50)+"%";
                //3. increase opacity of previous_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({'left': left});
                previous_fs.css({'opacity': opacity});
            },
            // duration: 200,
            complete: function(){
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
    });

    $('body').on('click','.up-scroll-mobile',function(){

        $('.tragop-order-body-row-ct').css('padding',12);
        $('#tra-gop-scroll-mobile').css('max-height',420);

        var html = '';

        html += '<div class="row marginauto down-scroll-mobile"><div class="col-auto left-right"><img class="lazy" src="/assets/frontend/theme_3/image/nick/up.png" alt=""></div></div>';

        $('.data-scroll-mobile').html('');
        $('.data-scroll-mobile').html(html);

    });
    $('body').on('click','.down-scroll-mobile',function(){

        $('.tragop-order-body-row-ct').css('padding',0);
        $('#tra-gop-scroll-mobile').css('max-height',0);

        var html = '';

        html += '<div class="row marginauto up-scroll-mobile"><div class="col-auto left-right"><img class="lazy" src="/assets/frontend/theme_3/image/nick/up.png" alt=""></div></div>';

        $('.data-scroll-mobile').html('');
        $('.data-scroll-mobile').html(html);

    });
})
